





$(document).ready(function() {
    let table = null;
    let arrUsuarios = [
        {

            datos:[
                {nombre:"cliente 1", telefono:"8341234567", numServicio:"xxxxx", direccion:"direccion 1", docs:"1", ops:"1", stat:"1"},
                {nombre:"cliente 2", telefono:"8341234567", numServicio:"xxxxx", direccion:"direccion 2", docs:"1", ops:"1", stat:"1"}
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
                    data:'numServicio',
                },
                {
                    data:'direccion',
                },
                {
                    data:'docs',
                    render: function (data) {
                        return '<button type="button" id="btnEditMarca" tkn="'+data+'" class="btn btn-info waves-effect waves-light"><i class="fas fa-eye"></i></button>';
                    }

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