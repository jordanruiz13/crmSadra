
let currentStep = 1, globalTotalkwh = 0, globalConsumoPromedioDiario = 0, GlobaltotalImporte = 0;
const form = document.getElementById('wizard-form'), 
steps = document.querySelectorAll('.step'),
badges = document.querySelectorAll('.badge-step');

const campos = [
    {id:'#inpBimestre1', regex :regex.periodo},
    {id:'#inpKwh1', regex :regex.kwh},
    {id:'#inpImporte1', regex :regex.importe},
    {id:'#inpBimestre2', regex :regex.periodo},
    {id:'#inpKwh2', regex :regex.kwh},
    {id:'#inpImporte2', regex :regex.importe},
    {id:'#inpBimestre3', regex :regex.periodo},
    {id:'#inpKwh3', regex :regex.kwh},
    {id:'#inpImporte3', regex :regex.importe},
    {id:'#inpBimestre4', regex :regex.periodo},
    {id:'#inpKwh4', regex :regex.kwh},
    {id:'#inpImporte4', regex :regex.importe},
    {id:'#inpBimestre5', regex :regex.periodo},
    {id:'#inpKwh5', regex :regex.kwh},
    {id:'#inpImporte5', regex :regex.importe},
    {id:'#inpBimestre6', regex :regex.periodo},
    {id:'#inpKwh6', regex :regex.kwh},
    {id:'#inpImporte6', regex :regex.importe}
];

const inpsKwh = [
    {id:'#inpKwh1', kwh:0},
    {id:'#inpKwh2', kwh:0},
    {id:'#inpKwh3', kwh:0},
    {id:'#inpKwh4', kwh:0},
    {id:'#inpKwh5', kwh:0},
    {id:'#inpKwh6', kwh:0}
];

const inpsImporte = [
    {id:'#inpImporte1', importe:0},
    {id:'#inpImporte2', importe:0},
    {id:'#inpImporte3', importe:0},
    {id:'#inpImporte4', importe:0},
    {id:'#inpImporte5', importe:0},
    {id:'#inpImporte6', importe:0}
]

// 1. Configuración de JustValidate (Validación al salir del campo)
const validator = new window.JustValidate('#wizard-form', {
    errorFieldCssClass: 'is-invalid',
    errorLabelCssClass: 'invalid-feedback',
    successFieldCssClass: 'is-valid',
    validateBeforeSubmitting: true,
});

// 2. Reglas con Regex y evento onBlur
campos.forEach(campo => {
    validator.addField(campo.id, [
        {
        rule: 'custom',
        validator: (value) => campo.regex.test(value)
        }
    ], {
        errorsContainer: '.invalid-feedback',
        validateOnBlur: true
    });
});
validator.onSuccess(async (event) => {//VALIDADO CON EXITO
    console.log("envia");    
});

// 3. Navegación entre Pasos corregida
document.querySelectorAll('.next-btn').forEach(btn => {
    btn.addEventListener('click', async () => {
        const currentStepEl = document.querySelector(`.step[data-step="${currentStep}"]`);
        
        // Buscamos todos los inputs y selects que tengan un ID dentro del paso actual
        const fieldsInStep = currentStepEl.querySelectorAll('input[id], select[id]');
        
        // Creamos una lista de promesas de validación
        const validationPromises = Array.from(fieldsInStep).map(field => 
            validator.revalidateField(`#${field.id}`)
        );

        // Esperamos a que todas las validaciones terminen
        const results = await Promise.all(validationPromises);

        // Si todos los resultados son true, avanzamos
        const isStepValid = results.every(result => result === true);

        if (isStepValid) {
            updateStep(currentStep + 1);
        } else {
            alertaSimple({title:'Error', text:'Por favor completa todos los campos obligatorios.', icon:'error'});
        }
    });
});

document.querySelectorAll('.inp-numerico').forEach(inp => {
    inp.addEventListener('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
        const kwhField = inpsKwh.find(k => k.id === '#' + this.id);
        kwhField.kwh = parseFloat(this.value) || 0;
        globalTotalkwh = inpsKwh.reduce((sum, k) => sum + k.kwh, 0);
        globalConsumoPromedioDiario = globalTotalkwh / 356; // Suponiendo que hay 6 bimestres
        $("#totalKwh").html(globalTotalkwh + ' KWH');
        $("#totalConsPromDiario").html(globalConsumoPromedioDiario.toFixed(2) + ' KWH/Dia');
        //$("#totalKwh").html(totalkwh+' KWH');
        validator.revalidateField('#' + this.id);
    });
});

document.querySelectorAll('.inp-importe').forEach(inp => {
    inp.addEventListener('input', function () {
        this.value = this.value.replace(/[^0-9,.]/g, '');
        const importeField = inpsImporte.find(k => k.id === '#' + this.id);
        importeField.importe = parseFloat(this.value) || 0;
        GlobaltotalImporte = inpsImporte.reduce((sum, k) => sum + k.importe, 0);
        $("#totalImporte").html('$'+GlobaltotalImporte.toFixed(2));
        validator.revalidateField('#' + this.id);
    });
});

document.querySelectorAll('.prev-btn').forEach(btn => {
    btn.addEventListener('click', () => updateStep(currentStep - 1));
});

function updateStep(targetStep) {
    // Cambiar visibilidad de divs
    steps.forEach(s => s.classList.remove('active'));
    document.querySelector(`.step[data-step="${targetStep}"]`).classList.add('active');

    // Actualizar colores de los indicadores de texto
    badges.forEach((badge, index) => {
        const stepNum = index + 1;
        badge.classList.remove('bg-primary', 'bg-secondary', 'bg-success');
        if (stepNum === targetStep) {
            badge.classList.add('bg-primary'); // Actual
        } else if (stepNum < targetStep) {
            badge.classList.add('bg-success'); // Completado
        } else {
            badge.classList.add('bg-secondary'); // Pendiente
        }
    });

    currentStep = targetStep;
}










// Combinamos la base con el controlador y el método
/*axios.post(`${URL_BASE}cotizador/info`)
    .then(res => {
        console.log(res.data);
    })
    .catch(error => {
        console.error(error);
    });*/