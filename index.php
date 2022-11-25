<!doctype>
<html>
<head>
    <title>Empleados</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.bootgrid.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bootgrid.js"></script>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Empleados</h1>
    <div>
        <button type="button" id="btnCrear" data-toggle="modal" data-target="#empleadoModal"
                class="btn btn-info btn-lg">Crear
        </button>
    </div>
    <div class="table-responsive">
        <table id="empleados" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th data-column-id="id" data-type="numeric">ID</th>
                <th data-column-id="nombres">Nombres</th>
                <th data-column-id="apellidos">Apellidos</th>
                <th data-column-id="fecha_nacimiento">Fecha nacimiento</th>
                <th data-column-id="direccion">Dirección</th>
                <th data-column-id="casado">Casado</th>
                <th data-column-id="hijos">Hijos</th>
                <th data-column-id="salario">Salario</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
</div>

<div id="empleadoModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="frmEmpleado">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar empleado</h4>
                </div>
                <div class="modal-body">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Datos</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="id">ID</label>
                            <div class="col-md-5">
                                <input id="id" name="id" type="text" placeholder="" class="form-control input-md"
                                       disabled readonly>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nombres">Nombres</label>
                            <div class="col-md-5">
                                <input id="nombres" name="nombres" type="text" placeholder=""
                                       class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="apellidos">Apellidos</label>
                            <div class="col-md-5">
                                <input id="apellidos" name="apellidos" type="text" placeholder=""
                                       class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="fechaNacimiento">Fecha nacimiento</label>
                            <div class="col-md-5">
                                <input id="fechaNacimiento" name="fechaNacimiento" type="date" placeholder=""
                                       class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="direccion">Dirección</label>
                            <div class="col-md-5">
                                <input id="direccion" name="direccion" type="text" placeholder=""
                                       class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="hijos">Hijos</label>
                            <div class="col-md-5">
                                <input id="hijos" name="hijos" type="number" placeholder=""
                                       class="form-control input-md"
                                       required="" min="0">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="salario">Salario</label>
                            <div class="col-md-5">
                                <input id="salario" name="salario" type="number" placeholder=""
                                       class="form-control input-md" required="" min="0">

                            </div>
                        </div>

                        <!-- Multiple Radios (inline) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="casado">¿Casado?</label>
                            <div class="col-md-4">
                                <label class="radio-inline" for="casado-0">
                                    <input type="radio" name="casado" id="casado-0" value="1">
                                    Sí
                                </label>
                                <label class="radio-inline" for="casado-1">
                                    <input type="radio" name="casado" id="casado-1" value="0" checked="checked">
                                    No
                                </label>
                            </div>
                        </div>

                    </fieldset>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="empleadoId" id="empleadoId"/>
                    <input type="hidden" name="operacion" id="operacion"/>
                    <input type="submit" name="accion" id="accion" class="btn btn-success" value="Agregar"/>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function () {
        const tblEmpleados = $('#empleados').bootgrid({
            ajax: true,
            rowSelect: true,
            post: function () {
                return {
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },
            url: "servidor/empleados_listado.php",
            formatters: {
                "commands": function (column, row) {
                    return "<button type='button' class='btn btn-warning btn-xs actualizar' data-row-id='" + row.id + "'>Editar</button>" +
                        "&nbsp; <button type='button' class='btn btn-danger btn-xs eliminar' data-row-id='" + row.id + "'>Eliminar</button>";
                }
            },
            templates: {
                search: ""
            }
        });

        $(document).on('submit', '#frmEmpleado', function (event) {
            event.preventDefault();

            var datosEmpleado = $(this).serialize();

            $.ajax({
                url: "servidor/empleados_crear.php",
                method: "POST",
                data: datosEmpleado,
                success: function (data) {
                    $('#frmEmpleado')[0].reset();
                    $('#empleadoModal').modal('hide');
                    $('#empleados').bootgrid('reload');
                    $('#accion').val('Crear');
                    $('#operacion').val('Crear');
                },
                error: function (data) {
                    alert('Error. No se pudo crear el empleado. Intente nuevamente.');
                }
            });
        });

        $(document).on("loaded.rs.jquery.bootgrid", function () {
            tblEmpleados.find(".eliminar").on("click", function (event) {
                if (confirm("¿Está seguro que quiere borrar este registro?")) {
                    const empleadoId = $(this).data("row-id");

                    $.ajax({
                        url: `servidor/empleados_eliminar.php`,
                        method: "POST",
                        data: {empleadoId},
                        success: function (data) {
                            $('#empleados').bootgrid('reload');
                        },
                        error: function (data) {
                            alert('Error. No se pudo eliminar el empleado. Intente nuevamente.');
                        }
                    })
                } else {
                    return false;
                }
            });
        });

        $(document).on("loaded.rs.jquery.bootgrid", function () {
            tblEmpleados.find(".actualizar").on("click", function (event) {
                const empleadoId = $(this).data("row-id");
                $.ajax({
                    url: "servidor/empleados_buscar.php",
                    method: "POST",
                    data: {empleadoId},
                    dataType: "json",
                    success: function (data) {
                        $('#empleadoModal').modal('show');
                        $('#id').val(data.id);
                        $('#nombres').val(data.nombres);
                        $('#apellidos').val(data.apellidos);
                        $('#fechaNacimiento').val(data['fecha_nacimiento']);
                        $('#direccion').val(data.direccion);
                        $('#hijos').val(data.hijos);
                        $('#salario').val(data.salario);

                        if (data.casado === '1') {
                            $('#casado-0').prop('checked', true);
                        } else {
                            $('#casado-1').prop('checked', true);
                        }

                        $('.modal-title').text("Editar Empleado");

                        $('#empleadoId').val(empleadoId);
                        $('#accion').val("Guardar");
                        $('#operacion').val("Editar");
                    },
                    error: function (data) {
                        alert('Error. No se pudo editar el empleado. Intente nuevamente.');
                    }
                });
            });
        });

        $('#empleadoModal').on('hidden.bs.modal', function (e) {

            $('#nombres').focus();

            limpiarCamposFormulario();
        });
    });

    function limpiarCamposFormulario() {
        $('#id').val('');
        $('#nombres').val('');
        $('#apellidos').val('');
        $('#fechaNacimiento').val('');
        $('#direccion').val('');
        $('#hijos').val('');
        $('#salario').val('');
        $('#casado-1').prop('checked', true);
    }
</script>
</body>
</html>
