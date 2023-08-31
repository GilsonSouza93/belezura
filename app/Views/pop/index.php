<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="p-4">

    <h2><?= $tittle ?></h2>
    
    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar" style="background-color: transparent;">
        </div>
        <div class="col-md-4 btn-group">
            <button class="btn btn-success" id="searchBtn">Pesquisar</button>
            <button class="btn btn-success" id="accountFilter" >Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
    </div>

    <div class="card p-4 fade" id="tableDiv">

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
    const renderTableOptions = {
        urlFetch: window.location.href + '/search',
        tableDiv: document.getElementById('tableDiv'),
        theadElements: ['ID' , 'Código', 'Cidade', 'UF', 'População', 'Usuário', 'Ativo', ''],
        tbodyElements: ['id', 'ibge_code', 'city', 'uf', 'population', 'user', 'active', 'actions_dropdown'],
        searchField: document.getElementById('search'),
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderTable(renderTableOptions);
    });

    const btnSearch = document.getElementById('searchBtn');

    btnSearch.addEventListener('click', () => {
        renderTable(renderTableOptions);
    });
</script>

<?= $this->endSection() ?>