<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>



<div class="card bg-black m-2 p-4">

    <h2><?= $tittle ?></h2>
    
    <div class="row my-3 d-flex align-items-center">
        <div class="col-md-10">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar">
        </div>
        <div class="col-md-2 btn-group">
            <button class="btn btn-outline-secondary">Novo cliente</button>
            <button class="btn btn-outline-secondary">Filtros</button>
        </div>
    </div>

    <p>
        Clientes cadastrados: 100
    </p>

    <div class="d-flex justify-content ">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Plano</th>
                    <th scope="col">Endereço</th>
                    <th scope='col'>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                </tr>
                <tr>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                </tr>
                <tr>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                </tr>
                <tr>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>






<?= $this->endSection() ?>