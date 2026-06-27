<div class="content mt-4">


    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <div class="card">
            <div class="row d-flex justify-content-center">
                <h5 class="card-title text-center mt-4">COTIZADOR</h5>
            </div>    
            <div class="card-body">
                    
                    <div class="container wizard-container">

                        <div class="step-indicator mb-4">
                            <div class="row g-2"> <div class="col-12 col-lg-4">
                                    <div class="text-center">
                                        <span class="badge rounded-pill bg-primary badge-step w-100 py-2" id="ind-1">
                                            NOTARIZACION Y DOCUMENTOS
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="text-center">
                                        <span class="badge rounded-pill bg-secondary badge-step w-100 py-2" id="ind-2">
                                            INFORMACIÓN GENERAL
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="text-center">
                                        <span class="badge rounded-pill bg-secondary badge-step w-100 py-2" id="ind-3">
                                            GENERAR PAGO
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                            

                        <form id="wizard-form" novalidate>
                            <div class="step active" data-step="1">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">AGREGA TUS DOCUMENTOS</h4>
                                            <p class="text-muted font-14">Da clic en el boton "AGREGAR" para continuar</p>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label for="selTipoNotarizacion" class="form-label">SELECCIONA TIPO NOTARIZACIÓN</label>
                                                        <select class="form-select" 
                                                        id="selTipoNotarizacion"
                                                        name="selTipoNotarizacion"
                                                        required>
                                                        </select>
                                                        <div class="invalid-feedback">Seleccione un tipo de notarización..</div>
                                                    </div>
                                                    <div id="divSelNotaric" class="row mb-3" style="display:none;">
                                                        <label for="selNotarizacion" class="form-label">NOTARIZACIÓN</label>
                                                        <select class="form-select" 
                                                        id="selNotarizacion" 
                                                        name="selNotarizacion"  
                                                        required>
                                                        </select>
                                                        <div class="invalid-feedback">Seleccione una notarización..</div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <div class="row g-3">
                                                <div id="divDocumentos" style="display:none;">
                                                    <div class="mb-3 col-md-4">
                                                        <label id="textInputDoc" for="inputDoc" class="form-label">DOCUMENTO</label>
                                                        <input class="form-control" type="file" name="inputDoc" accept="application/pdf" id="inputDoc" required>
                                                        <div class="invalid-feedback">Agregue documento pdf.</div>
                                                    </div>
                                                </div>

                                                <div id="divTipoSello" style="display:none;">
                                                    <div class="mb-3 col-md-4">
                                                        <label for="selTipoSello" class="form-label">TIPO SELLO</label>
                                                        <select class="form-select" pattern="^\d*$" id="selTipoSello" name="selTipoSello" required>
                                                        </select>
                                                        <div class="invalid-feedback">Seleccione un tipo de sello..</div>
                                                    </div>
                                                </div>
                                                
                                                <div id="divCantSellos" style="display:none;">
                                                    <div class="mb-3 col-md-4">
                                                        <label for="inputCantSellos" class="form-label">CANTIDAD SELLOS</label>
                                                        <p id="textCantSello" class="text-muted font-14"></p>
                                                        <input class="form-control" id="inputCantSellos" name="inputCantSellos" pattern="^([1-9]|10)$" type="number" value="1" min="1" max="10" name="number">
                                                        <div class="invalid-feedback">Ingrese una cantidad de 1 a 10 sellos.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end card body-->
                                    </div> <!-- end card -->
                                </div><!-- end col-->    
                                
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary next-btn">Siguiente</button>
                                </div>
                            </div>

                            <div class="step" data-step="2">
                                <h5 class="mb-3 text-secondary">Contacto de Emergencia</h5>
                                <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3 d-flex justify-content-center">
                                                <div class="col-lg-12">
                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inpNombres" class="form-label">NOMBRE(S)</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                id="inpNombres"
                                                                name="inpNombres"
                                                                pattern="[a-zA-ZÀ-ÿ\s]{3,50}" 
                                                                placeholder="Ingrese nombres"
                                                                required>
                                                            <div class="invalid-feedback">Campo requerido ingrese su nombre, de 3 a 40 caracteres.</div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inptPaterno" class="form-label">APELLIDO PATERNO</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                id="inptPaterno"
                                                                name="inptPaterno"
                                                                pattern="[a-zA-ZÀ-ÿ\s]{3,35}" 
                                                                placeholder="Ingrese apellido"
                                                                required>
                                                            <div class="invalid-feedback">Campo requerido ingrese su apellido paterno, de 3 a 35 caracteres.</div>
                                                        </div>
                                                    </div>

                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inpMaterno" class="form-label">APELLIDO MATERNO</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                id="inpMaterno"
                                                                name="inpMaterno" 
                                                                pattern="[a-zA-ZÀ-ÿ\s]{3,35}"
                                                                placeholder="Ingrese apellido"
                                                                required>
                                                            <div class="invalid-feedback">Campo requerido ingrese su apellido materno, de 3 a 35 caracteres.</div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inpTelefono" class="form-label">TELÉFONO</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                id="inpTelefono"
                                                                name="inpTelefono"
                                                                pattern="[0-9]{10}" 
                                                                placeholder="Ingrese teléfono" 
                                                                required>
                                                            <div class="invalid-feedback">Campo requerido ingrese su teléfono, 10 dígitos.</div>
                                                        </div>
                                                    </div>

                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inpDireccion" class="form-label">DIRECCIÓN</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                id="inpDireccion"
                                                                name="inpDireccion"
                                                                pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚüÜ#\.\,\-\s\/]{10,100}" 
                                                                placeholder="Ingrese dirección"
                                                                required>
                                                            <div class="invalid-feedback">Campo requerido ingrese su dirección, de 10 a 100 caracteres.</div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inpFechaNac" class="form-label">FECHA NACIMIENTO</label>
                                                            <input 
                                                                type="date" 
                                                                class="form-control" 
                                                                id="inpFechaNac"
                                                                name="inpFechaNac"
                                                                required>
                                                            <div class="invalid-feedback">Campo requerido ingrese su fecha de nacimiento.</div>
                                                        </div>
                                                    </div>

                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inpCorreo" class="form-label">CORREO</label>
                                                            <input 
                                                                type="email" 
                                                                class="form-control" 
                                                                id="inpCorreo"
                                                                name="inpCorreo"
                                                                pattern="[^0-9][.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}" 
                                                                placeholder="Ingrese correo"
                                                                required>
                                                            <div class="invalid-feedback">Campo requerido ingrese su correo.</div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inpSeguro" class="form-label">SEGURO SOCIAL(ultimos 4 numeros) O ITIN(Campo opcional)</label>
                                                            <input 
                                                                type="input" 
                                                                class="form-control" 
                                                                id="inpSeguro"
                                                                name="inpSeguro"
                                                                pattern="^(\d{4}|9\d{8}|\d{3}-\d{2}-\d{4})$"
                                                                placeholder="Ingrese seguro social o itin">
                                                            <div class="invalid-feedback">Ingrese los 4 dígitos del seguro social o su ITIN.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-outline-secondary prev-btn">Anterior</button>
                                    <button type="button" class="btn btn-primary next-btn">Siguiente</button>
                                </div>
                            </div>

                            <div class="step" data-step="3">
                                <div class="row d-flex justify-content-center">
                                    
                                    <div class="col-12">
                                        <div class="card card-pricing">
                                            <div class="card-body text-center">
                                                    
                                                <p class="card-pricing-plan-name fw-bold text-uppercase">Resumen del pedido</p>
                                                <span class="card-pricing-icon text-primary">
                                                        <i class="fas fa-id-card"></i>
                                                    </span>
                                                <ul class="card-pricing-features">
                                                    <li id="txtTipoServicio" class="card-pricing-plan-name fw-bold text-uppercase"></li>
                                                    <li id="txtServicio" class="card-pricing-plan-name fw-bold text-uppercase"></li>
                                                    <li id="txtSellosSimples" class="card-pricing-plan-name fw-bold text-uppercase"></li>
                                                    <li id="txtSellosMayoreo" class="card-pricing-plan-name fw-bold text-uppercase"></li>
                                                </ul>

                                                <ul class="card-pricing-features">
                                                    <li id="txtConceptoComisionServicio" class="card-pricing-plan-name fw-bold text-uppercase"></li>
                                                    <li id="txtComisionServicio" class="card-pricing-plan-name fw-bold text-uppercase"></li>
                                                    
                                                </ul>
                                                <h2 id="txtCosto" class="card-pricing-price"></h2>
                                            </div>
                                        </div> <!-- end Pricing_card -->
                                    </div>
                                </div> <!-- end row -->
                                
                                <div id="card-container"></div>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-outline-secondary prev-btn">Anterior</button>
                                    <button type="submit" class="btn btn-success" id="btn-submit">Finalizar Registro</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
</div> <!-- content -->


<script src="<?php echo URL_BASE; ?>js/cotizador.js"></script>