<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card bg-black m-2 p-4">
    <h1 class="text-white">Dashboard</h1>

    <div class="row" style="height: 400PX">
        <div class="col-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15792.385967731489!2d-35.99380153693221!3d-8.293195784465718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a98b96e8d7fd6d%3A0xa30a5c7c9e363ef5!2sCaruaru%20-%20Picada%2C%20Caruaru%20-%20PE%2C%2055032-250!5e0!3m2!1spt-BR!2sbr!4v1685933291213!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-4">
            <div class="container">
                <div class="row row-cols-2" style="height: 400px;">
                    <div class="col bg-primary bg-gradient"></div>
                    <div class="col bg-success bg-gradient">Column</div>
                    <div class="col bg-orange bg-gradient">Column</div>
                    <div class="col bg-gradient" style="background-color: #ff914d;">Column</div>
                </div>
            </div>
        </div>
    </div>
</div>`

<!-- graphics samples -->



<?= $this->endSection() ?>