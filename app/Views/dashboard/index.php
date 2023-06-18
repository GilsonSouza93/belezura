<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">
    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row" style="height: 400PX">
        <div class="col-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15792.385967731489!2d-35.99380153693221!3d-8.293195784465718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a98b96e8d7fd6d%3A0xa30a5c7c9e363ef5!2sCaruaru%20-%20Picada%2C%20Caruaru%20-%20PE%2C%2055032-250!5e0!3m2!1spt-BR!2sbr!4v1685933291213!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-4">
            <div class="container" style="height: 390px;">
                <div class="row h-50" style="margin-bottom: 10px;">
                    <div class="col gradient-1">
                        <div class="d-flex justify-content-around align-items-center h-100"> 
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-around">
                                    <h5 class="mb-0 text-white">Clientes</h5>
                                    <h1 class="me-2 mb-0 text-white">10.000</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col gradient-2">
                        <div class="d-flex justify-content-around align-items-center h-100"> 
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-around">
                                    <h5 class="mb-0 text-white">Olts</h5>
                                    <h1 class="me-2 mb-0 text-white">500</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row h-50">
                    <div class="col gradient-3">
                        <div class="d-flex justify-content-around align-items-center h-100"> 
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-around">
                                    <h5 class="mb-0 text-white">Entrada</h5>
                                    <h1 class="me-2 mb-0 text-white">R$ 9000</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col gradient-4">
                        <div class="d-flex justify-content-around align-items-center h-100"> 
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-around">
                                    <h5 class="mb-0 text-white">Notificações</h5>
                                    <h1 class="me-2 mb-0 text-white">10</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>