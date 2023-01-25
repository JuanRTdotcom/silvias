<style>
    .accordion-item {
        border: 1px #d9dee3 solid !important;
        border-top: 0px !important;
        border-radius: 0 !important;
        box-shadow: none !important;
    }

    .detalle_venta {
        padding: 0 20px 20px;
    }

    .centrados {
        display: flex;
        align-items: center;
    }
</style>
<div class="d-flex justify-content-between align-items-center">
    <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Ventas </span> del día ( 10 resultados )</h4>
    <button type="button" class="btn btn-primary me-2">
        <span class="tf-icons bx bx-cut me-2 bx-tada"></span> Nueva venta
    </button>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <table class="table hover responsive table-bordered dataTable no-footer dtr-inline" id="tt">
                <thead>
                    <tr>
                        <th class="w-50">Cliente</th>
                        <th class="w-25">Fotos</th>
                        <th class="w-25">Total</th>
                    </tr>
                </thead>
            </table>
            <div class="accordion-item card">
                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                    <button type="button" class="accordion-button collapsed d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="cliente_info d-flex">
                                <img src="http://localhost/silvia/public/image/juan.jpg" alt="" width="50" height="50" class="rounded me-3">
                                <div>
                                    <div>
                                        Juan Victor Ruiz Trujillo
                                    </div>
                                    <div>
                                        <span class="badge bg-label-primary">Bueno</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cliente_monto fw-bolder w-25" style="padding: 0 0 0 40px;">
                                200.00
                            </div>
                        </div>
                    </button>
                </h2>

                <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                    <div class="accordion-body p-0">
                        <div class="mi_servicio d-flex">
                            <div class="w-50 detalle_venta centrados">
                                <!-- <div style="width: 40px;"></div> -->
                                <i class='bx bx-subdirectory-right mx-2 me-3 fs-3 text-primary'></i>
                                <div>
                                    <h6 class="m-0 fw-bold">Corte</h6>
                                    <small>Corte con tijera y maquina para...</small>
                                </div>
                            </div>
                            <div class="w-25 detalle_venta">
                                <div class="d-flex  align-items-center avatar-group">
                                    <div class="avatar">
                                        <img src="http://localhost/silvia/public/image/juan.jpg" alt="Avatar" class="rounded-circle pull-up">
                                    </div>
                                    <div class="avatar">
                                        <img src="http://localhost/silvia/public/image/juan.jpg" alt="Avatar" class="rounded-circle pull-up">
                                    </div>
                                    <div class="avatar">
                                        <img src="http://localhost/silvia/public/image/juan.jpg" alt="Avatar" class="rounded-circle pull-up">
                                    </div>
                                    <div class="avatar">
                                        <img src="http://localhost/silvia/public/image/juan.jpg" alt="Avatar" class="rounded-circle pull-up">
                                    </div>
                                </div>
                            </div>
                            <div class="w-25 detalle_venta centrados">150.00</div>
                        </div>
                        <div class="mi_servicio d-flex">
                            <div class="w-50 detalle_venta centrados">
                                <!-- <div style="width: 40px;"></div> -->
                                <i class='bx bx-subdirectory-right mx-2 me-3 fs-3 text-primary'></i>
                                <div>
                                    <h6 class="m-0 fw-bold">Tinturado</h6>
                                    <small>Trajo su propio tinte</small>
                                </div>
                            </div>
                            <div class="w-25 detalle_venta">
                                <div class="d-flex  align-items-center avatar-group">
                                    <div class="avatar">
                                        <img src="http://localhost/silvia/public/image/juan.jpg" alt="Avatar" class="rounded-circle pull-up">
                                    </div>
                                </div>
                            </div>
                            <div class="w-25 detalle_venta centrados">35.00</div>
                        </div>
                        <div class="mi_servicio d-flex">
                            <div class="w-50 detalle_venta centrados">
                                <!-- <div style="width: 40px;"></div> -->
                                <i class='bx bx-subdirectory-right mx-2 me-3 fs-3 text-primary'></i>
                                <div>
                                    <h6 class="m-0 fw-bold">Pedicure</h6>
                                    <small></small>
                                </div>
                            </div>
                            <div class="w-25 detalle_venta">
                                <div class="d-flex  align-items-center avatar-group">
                                    <div class="avatar">
                                        <img src="http://localhost/silvia/public/image/juan.jpg" alt="Avatar" class="rounded-circle pull-up">
                                    </div>
                                    <div class="avatar">
                                        <img src="http://localhost/silvia/public/image/juan.jpg" alt="Avatar" class="rounded-circle pull-up">
                                    </div>
                                    <div class="avatar">
                                        <img src="http://localhost/silvia/public/image/juan.jpg" alt="Avatar" class="rounded-circle pull-up">
                                    </div>
                                </div>
                            </div>
                            <div class="w-25 detalle_venta centrados">15.00</div>
                        </div>
                        <hr>
                        <div style="padding: 0 20px 20px;">
                            <button type="button" class="btn btn-outline-primary me-2 btn-sm">
                                <span class="tf-icons bx bx-show me-1"></span> Info
                            </button>
                            <button type="button" class="btn btn-outline-danger me-2 btn-sm">
                                <span class="tf-icons bx bx-trash me-1"></span> Eliminar
                            </button>
                            <button type="button" class="btn btn-primary me-2 btn-sm">
                                <span class="tf-icons bx bx-edit-alt me-1"></span> Modificar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>