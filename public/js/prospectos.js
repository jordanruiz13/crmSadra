





$(document).ready(function() {
    let table = null;
    let arrUsuarios = [
        {

            datos:[
                {nombre:"cliente 1", telefono:"8341234567", correo:"cliente1@example.com", mensaje:"Mensaje 1", atender:"1"},
                {nombre:"cliente 2", telefono:"8341234567", correo:"cliente2@example.com", mensaje:"Mensaje 2", atender:"0"}
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
                    data:'telefono',
                },
                {
                    data:'correo',
                },
                {
                    data:'mensaje',
                },
                {
                    data:'atender',
                    render: function (data) {
                        return '<button type="button" id="btnEditMarca" tkn="'+data+'" class="btn btn-info waves-effect waves-light">Atender</button>';
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