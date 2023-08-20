<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2><?= $tittle ?></h2>
    
    <div class="row card-2 py-3 my-3">
        <div class="col-md-7">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar" style="background-color: transparent;">
        </div>
        <div class="col-md-5 btn-group">
            <button class="btn btn-success">Pesquisar</button>
            <button class="btn btn-success" id="accountFilter" >Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoutePrint ?>/lote"><?= $addButtonPrint ?></a>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
    </div>

    <p>
        Lotes de Boletos localizados: 100
    </p>

    <div class="d-flex justify-content ">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">POP</th>
                    <th scope="col">Portador</th>
                    <th scope="col">Plano</th>
                    <th scope='col'>Ações</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>