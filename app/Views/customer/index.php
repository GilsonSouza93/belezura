<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card bg-black m-2 p-4">
    <h1 class="text-white">
        <?= $tittle ?>
    </h1>

    <div>
        <input type="text" name="search" id="search" class="form-control" placeholder="Buscar">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Contato</th>
                <th scope="col">Plano</th>
                <th scope="col">Handle</th>
                <th scope='col'>
                    <button type="button" class="btn btn-outline-light ">
                        <?= $addButtonText ?>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="card bg-black m-2 p-4">

    <?= $this->endSection() ?>