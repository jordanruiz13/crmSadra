<div class="content mt-4">


    <div class="row d-flex justify-content-center">
        <div class="col-12">
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
                                            1- CALCULO CONSUMO DIARIO REQUERIDO
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="text-center">
                                        <span class="badge rounded-pill bg-secondary badge-step w-100 py-2" id="ind-2">
                                            2- POTENCIA FOTOVOLTAICA
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="text-center">
                                        <span class="badge rounded-pill bg-secondary badge-step w-100 py-2" id="ind-3">
                                            3- CANTIDAD MODULOS FOTOVOLTAICOS
                                        </span>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                            

                        <form id="wizard-form" novalidate>
                            <div class="step active" data-step="1">
                            
                                <div class="col-12">
                                    <h5 class="mb-3">BIMESTRE MAS RECIENTE(1)</h5>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-4">
                                            <label for="inpBimestre1" class="form-label">Bimestre</label>
                                            <input type="text" class="form-control" id="inpBimestre1" placeholder="bimestre" value="NOVIEMBRE - ENERO">
                                            <div class="invalid-feedback">Campo requerido ingrese bimestre al que corresponde</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpKwh1" class="form-label">KWh</label>
                                            <input type="text" class="form-control inp-numerico" id="inpKwh1" placeholder="Consumidos" value="">
                                            <div class="invalid-feedback">Campo requerido KWH consumidos, 1 a 7 cifras</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpImporte1" class="form-label">Importe</label>
                                            <input type="text" class="form-control inp-importe" id="inpImporte1" placeholder="$" value="">
                                            <div class="invalid-feedback">Campo requerido ingrese importe</div>
                                        </div>
                                    </div>

                                    <h5 class="mb-3">BIMESTRE ANTERIOR(2)</h5>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-4">
                                            <label for="inpBimestre2" class="form-label">Bimestre</label>
                                            <input type="text" class="form-control" id="inpBimestre2" placeholder="bimestre" value="SEPTIEMBRE - NOVIEMBRE">
                                            <div class="invalid-feedback">Campo requerido ingrese bimestre al que corresponde</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpKwh2" class="form-label">KWh</label>
                                            <input type="text" class="form-control inp-numerico" id="inpKwh2" placeholder="Consumidos">
                                            <div class="invalid-feedback">Campo requerido KWH consumidos</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpImporte2" class="form-label">Importe</label>
                                            <input type="text" class="form-control inp-importe" id="inpImporte2" placeholder="$">
                                            <div class="invalid-feedback">Campo requerido ingrese importe</div>
                                        </div>
                                        
                                    </div>

                                    <h5 class="mb-3">BIMESTRE ANTERIOR(3)</h5>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-4">
                                            <label for="inpBimestre3" class="form-label">Bimestre</label>
                                            <input type="text" class="form-control" id="inpBimestre3" placeholder="bimestre" value="JULIO - SEPTIEMBRE">
                                            <div class="invalid-feedback">Campo requerido ingrese bimestre al que corresponde</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpKwh3" class="form-label">KWh</label>
                                            <input type="text" class="form-control inp-numerico" id="inpKwh3" placeholder="Consumidos">
                                            <div class="invalid-feedback">Campo requerido KWH consumidos</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpImporte3" class="form-label">Importe</label>
                                            <input type="text" class="form-control inp-importe" id="inpImporte3" placeholder="$">
                                            <div class="invalid-feedback">Campo requerido ingrese importe</div>
                                        </div>
                                    </div>

                                    <h5 class="mb-3">BIMESTRE ANTERIOR(4)</h5>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-4">
                                            <label for="inpBimestre4" class="form-label">Bimestre</label>
                                            <input type="text" class="form-control" id="inpBimestre4" placeholder="bimestre" value="MAYO - JULIO">
                                            <div class="invalid-feedback">Campo requerido ingrese bimestre al que corresponde</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpKwh4" class="form-label">KWh</label>
                                            <input type="text" class="form-control inp-numerico" id="inpKwh4" placeholder="Consumidos">
                                            <div class="invalid-feedback">Campo requerido KWH consumidos</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpImporte4" class="form-label">Importe</label>
                                            <input type="text" class="form-control inp-importe" id="inpImporte4" placeholder="$">
                                            <div class="invalid-feedback">Campo requerido ingrese importe</div>
                                        </div>
                                    </div>

                                    <h5 class="mb-3">BIMESTRE ANTERIOR(5)</h5>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-4">
                                            <label for="inpBimestre5" class="form-label">Bimestre</label>
                                            <input type="text" class="form-control" id="inpBimestre5" placeholder="bimestre" value="MARZO - MAYO">
                                            <div class="invalid-feedback">Campo requerido ingrese bimestre al que corresponde</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpKwh5" class="form-label">KWh</label>
                                            <input type="text" class="form-control inp-numerico" id="inpKwh5" placeholder="Consumidos">
                                            <div class="invalid-feedback">Campo requerido KWH consumidos</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpImporte5" class="form-label">Importe</label>
                                            <input type="text" class="form-control inp-importe" id="inpImporte5" placeholder="$">
                                            <div class="invalid-feedback">Campo requerido ingrese importe</div>
                                        </div>
                                    </div>

                                    <h5 class="mb-3">BIMESTRE ANTERIOR(6)</h5>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-4">
                                            <label for="inpBimestre6" class="form-label">Bimestre</label>
                                            <input type="text" class="form-control" id="inpBimestre6" placeholder="bimestre" value="ENERO - MARZO">
                                            <div class="invalid-feedback">Campo requerido ingrese bimestre al que corresponde</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpKwh6" class="form-label">KWh</label>
                                            <input type="text" class="form-control inp-numerico" id="inpKwh6" placeholder="Consumidos">
                                            <div class="invalid-feedback">Campo requerido KWH consumidos</div>
                                        </div>

                                        <div class="mb-3 col-6 col-md-4">
                                            <label for="inpImporte6" class="form-label">Importe</label>
                                            <input type="text" class="form-control inp-importe" id="inpImporte6" placeholder="$">
                                            <div class="invalid-feedback">Campo requerido ingrese importe</div>
                                        </div>
                                    </div>

                                    <dl class="row mb-0 d-flex justify-content-end">
                                        <dt class="col-4 text-center">TOTAL</dt>
                                        <dd id="totalKwh" class="col-4 text-center"></dd>
                                        <dd id="totalImporte" class="col-4 text-center"></dd>                                      
                                    </dl>

                                    <dl class="row mb-0">
                                        <dt class="col-4 text-center">CONSUMO PROMEDIO DIARIO</dt> 
                                        <dd id="totalConsPromDiario" class="col-4 text-center"></dd>                                      
                                    </dl>

                                </div>    

                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary next-btn">Siguiente</button>
                                </div>
                            </div>

                            <div class="step" data-step="2">
                                <div class="col-12">
                                    <h5 class="mb-3">BIMESTRE MAS RECIENTE(1)</h5>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-3">
                                            <label for="inpLugarinst" class="form-label">Lugar de instalación</label>
                                            <input type="text" class="form-control" id="inpLugarinst" placeholder="Ingrese lugar">
                                            <div class="invalid-feedback">Campo requerido ingrese lugar de instalación</div>
                                        </div>

                                        <div class="mb-3 col-12 col-md-3">
                                            <label for="inpCoordenadas" class="form-label">Coordenadas</label>
                                            <input type="text" class="form-control" id="inpCoordenadas" placeholder="Ingrese coordenadas">
                                            <div class="invalid-feedback">Campo requerido ingrese coordenadas de instalación, formato: latitud,longitud</div>
                                        </div>

                                        <div class="mb-3 col-12 col-md-3">
                                            <label for="inpInsolacion" class="form-label">Insolación promedio</label>
                                            <input type="text" class="form-control" id="inpInsolacion" placeholder="Ingrese insolación valor">
                                            <div class="invalid-feedback">Campo requerido ingrese insolación promedio</div>
                                        </div>

                                        <div class="mb-3 col-12 col-md-3">
                                            <label for="inpInsolacion" class="form-label">Eficiencia</label>
                                            <input type="text" class="form-control" id="inpInsolacion" placeholder="Ingrese eficiencia">
                                            <div class="invalid-feedback">Campo requerido ingrese decimales a dos digitos ejemplo, 0.77, 0.85</div>
                                        </div>
                                    </div>

                                    <dl class="row mb-2 d-flex">
                                        <dt class="col-3 text-center">Potencia FV</dt>
                                        <dd id="totalPotencia" class="col-3 text-center"></dd>                                      
                                    </dl>
                                </div>
                                
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-outline-secondary prev-btn">Anterior</button>
                                    <button type="button" class="btn btn-primary next-btn">Siguiente</button>
                                </div>
                            </div>

                            <div class="step" data-step="3">
                                <div class="row d-flex justify-content-center">
                                    
                                </div> <!-- end row -->
                                
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


<script src="<?=URL_BASE; ?>js/cotizador.js" defer></script>