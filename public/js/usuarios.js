



$(document).ready(function() {
    let table = null;
    let arrUsuarios = [
        {
            datos:[
                {nombre:"prueba", usuario:"prueba1", telefono:"8341234567", correo:"prueba@gmail.com", direccion:"calle tulum #865", distribuidor:"19-ENERO-2001", rol:"8341234567",ops:1,stat:1},
                {nombre:"prueba2", usuario:"prueba2", telefono:"8341234567", correo:"prueba2@gmail.com", direccion:"calle Tampico #865", distribuidor:"06-AGOSTO-1996", rol:"8341234567",ops:1,stat:1}
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
                    data:'usuario',
                },
                {
                    data:'telefono',
                },
                {
                    data:'correo',
                },
                {
                    data:'direccion',
                },
                {
                    data:'distribuidor',
                },
                {
                    data:'rol',
                },
                {
                    data:'ops',
                    render: function (data) {
                        return '<button type="button" id="btnEditMarca" tkn="'+data+'" class="btn btn-warning waves-effect waves-light"><i class="fas fa-pen"></i></button>';
                    }

                },
                {
                    data:'stat',
                    render: function (data) {
                        return '<button type="button" id="btnEditMarca" tkn="'+data+'" class="btn btn-success waves-effect waves-light"><i class="fas fa-check"></i></button>';
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