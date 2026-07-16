let regex = {
    correo: /^[^0-9][.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/,
    contrasena: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/,
    nombre: /^[a-zA-ZÀ-ÿ\s]{3,50}$/,
    apellidos: /^[a-zA-ZÀ-ÿ\s]{3,35}$/,
    fechaNac: /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/,
    telefono: /^[0-9]{10}$/,
    numeros: /^\d{1,2}$/,
    direcciones: /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚüÜ#\.\,\-\s\/]{10,100}$/,
    codPostal: /^\d{5}$/,
    pdf: /^.+\.pdf$/i,
    ids: /^\d+$/,
    uuidV4: /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i,
    curp: /^[A-Za-z]{4}\d{6}[HMhm][A-Za-z]{5}\d{2}$/,
    periodo : /^(enero|febrero|marzo|abril|mayo|junio|julio|agosto|septiembre|octubre|noviembre|diciembre)\s*-\s*(enero|febrero|marzo|abril|mayo|junio|julio|agosto|septiembre|octubre|noviembre|diciembre)$/i,
    kwh : /^\d{1,7}$/,
    importe : /^(\d+|\d{1,3}(,\d{3})+)(\.\d{1,2})?$/,
    coordenadas : /^(-?\d+(?:\.\d+)?),\s*(-?\d+(?:\.\d+)?)$/,
    insolacion : /^\d{1,2}\.\d{2}$/,
    ubicacionInstalacion : /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s.,]{3,50}$/
}

//FUNCION PARA MOSTRAR UNA ALERTA SIMPLE
const alertaSimple = (arrInfo) => {
    Swal.fire({
        title: arrInfo.title,
        text: arrInfo.text,
        icon: arrInfo.icon,
        confirmButtonText: 'Aceptar'
    })
}

//FUNCION PARA MOSTRAR UNA ALERTA CON REFRESCO DE PANTALLA
const alertaRefresh = (arrInfo) =>{
    Swal.fire({
        title: arrInfo.title,
        text: arrInfo.text,
        icon: arrInfo.icon,
        showCancelButton: false,
        confirmButtonColor :"#d33",
        confirmButtonText: 'Aceptar'
    }).then((result)=>{
        if(result.isConfirmed){
            window.location = arrInfo.href;
            //window.location.href=arrInfo.href;
        }
    })
}

function inputNumerico(inpId, maximo){
    const inp = document.querySelector(inpId);
    inp.value = inp.value.replace(/[^0-9]/g, '');
    console.log(inp.value.length);
    if(maximo != null){
        if (inp.value.length > maximo) {
            inp.value = inp.value.slice(0, maximo);
        }
    }        
}

function inputImportes(inpId, maximo){
    const inp = document.querySelector(inpId);
    inp.value = inp.value.replace(/[^0-9,.]/g, '');
    if(maximo != null){
        if (inp.value.length > maximo) {
            inp.value = inp.value.slice(0, maximo);
        }
    }
}



function mostrarLoading(texto) {
    document.querySelector("#loadingOverlay .loadingText span").innerText = texto;
    document.getElementById("loadingOverlay").style.display = "flex";
}

function ocultarLoading() {
    document.getElementById("loadingOverlay").style.display = "none";
}