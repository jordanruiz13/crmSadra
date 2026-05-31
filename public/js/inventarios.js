





$(document).ready(function() {
    let table = null;
    let arrUsuarios = [
        {


            datos:[
                {nombre:'TUBO LICUATITE DE 1"  255MM ARGOS', unidad:'METRO', categoria:'MATERIAL ELECTRICO', proveedor:'COMERCIALIZADORA ROCO', cantidad:'20', precio:'$51.75 MXN', atender:'1'},
                {nombre:'TUBO LICUATITE DE 3/4"  19MM ARGOS', unidad:'METRO', categoria:'MATERIAL ELECTRICO', proveedor:'COMERCIALIZADORA ROCO', cantidad:'10', precio:'$37.27 MXN', atender:'1'},
                {nombre:'CONECTOR RECTO P/ TUBO LICUATITE 1"', unidad:'PIEZA', categoria:'MATERIAL ELECTRICO', proveedor:'COMERCIALIZADORA ROCO', cantidad:'5', precio:'$36.95 MXN', atender:'1'},
                {nombre:'CONECTOR RECTO P/ TUBO LICUATITE 3/4"', unidad:'PIEZA', categoria:'MATERIAL ELECTRICO', proveedor:'COMERCIALIZADORA ROCO', cantidad:'15', precio:'$18.12 MXN', atender:'1'},
                {nombre:'TUBO GALVANIZADO PARED DELGADA 3/4" 19MM', unidad:'TRAMO', categoria:'MATERIAL ELECTRICO', proveedor:'COMERCIALIZADORA ROCO', cantidad:'5', precio:'$103.79 MXN', atender:'1'},
                {nombre:'TUBO GALVANIZADO PARED DELGADA 1/2" 13MM', unidad:'TRAMO', categoria:'MATERIAL ELECTRICO', proveedor:'COMERCIALIZADORA ROCO', cantidad:'8', precio:'$78.29 MXN', atender:'1'},
                {nombre:'TUBO GALVANIZADO PARED DELGADA 1" 25MM', unidad:'TRAMO', categoria:'MATERIAL ELECTRICO', proveedor:'COMERCIALIZADORA ROCO', cantidad:'10', precio:'$187.48 MXN', atender:'1'},
                {nombre:'CONECTOR PARED DELGADA 3/4"', unidad:'PIEZA', categoria:'MATERIAL ELECTRICO', proveedor:'COMERCIALIZADORA ROCO', cantidad:'20', precio:'$8.28 MXN', atender:'1'},
                {nombre:'JINKO 625N-66HL4M-BDV Bifacial', unidad:'PIEZA', categoria:'MODULOS FOTOVOLTAICOS', proveedor:'COREY SOLAR, MONTERREY', cantidad:'10', precio:'$0.1497 USD', atender:'1'},
                {nombre:'JINKO 635N-66HL4M-BDV Bifacial', unidad:'PIEZA', categoria:'MODULOS FOTOVOLTAICOS', proveedor:'COREY SOLAR, MONTERREY', cantidad:'10', precio:'$0,1608 USD', atender:'1'},
                {nombre:'JINKO 640N-66HL4M-BDV Bifacial', unidad:'PIEZA', categoria:'MODULOS FOTOVOLTAICOS', proveedor:'COREY SOLAR, MONTERREY', cantidad:'10', precio:'$0.1628 USD', atender:'1'},
                {nombre:'JINKO 720N-66HL5-BDV Bifacial', unidad:'PIEZA', categoria:'MODULOS FOTOVOLTAICOS', proveedor:'COREY SOLAR, MONTERREY', cantidad:'10', precio:'$0.1497 USD', atender:'1'}
            ]
        },
        {
            error:false
        }
    ];
    const dTableUsuarios = (arrUsuarios) => {
        console.log(arrUsuarios[0].datos);
        table = $('#usuariosTable').DataTable({
            data:arrUsuarios[0].datos,
            columns:[
                {
                    data:'nombre',
                },
                {
                    data:'unidad',
                },
                {
                    data:'categoria',
                },
                {
                    data:'proveedor',
                },
                {
                    data:'cantidad',
                },
                {
                    data:'precio',
                },
                {
                    data:'atender',
                    render: function (data) {
                        return '<button type="button" id="btnEditMarca" tkn="'+data+'" class="btn btn-warning waves-effect waves-light"><i class="fas fa-edit"></i></button>';
                    }

                }
            ]
        });

        $('#marcasTable').on('click', '#btnEditMarca', function(e) {
            var rowData = table.row($(this).closest('tr')).data();  // Obtiene los datos de la fila
            $("#editMarca").val(rowData.marca);
            $("#tknEditMarca").val(rowData.tknMarca);
            $("#mdlEditMarcas").modal('show');
        });

        $("#btnAddMarca").click(function(){
            $("#mdlRegistrarMarcas").modal('show');
        })


        $('#mdlRegistrarMarcas').on('hidden.bs.modal', function() {
            $("#registraMarca").val('');
            $("#registraMarca").html('');
        });


    }


    dTableUsuarios(arrUsuarios);

    

});