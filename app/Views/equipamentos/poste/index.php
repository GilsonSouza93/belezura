<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="p-4">

    <h2><?= $tittle ?></h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-4">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar" style="background-color: transparent;">
        </div>

        <div class="col-md-4 btn-group">
            <button class="btn btn-success">Exportar arquivo CSV</button>
            <button class="btn btn-success">Importar</button>
        </div>

        <div class="col-md-4 btn-group">
            <button class="btn btn-success" id="searchBtn">Pesquisar</button>
            <button class="btn btn-success">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>

    </div>

    <div class="d-flex justify-content-center mt-4">
        <div class="spinner-border text-success fade" role="status" id="spinner">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <div id="tableDiv" class="card p-4 fade" style="transition: 1s;">

    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    const renderTableOptions = {
        urlFetch: window.location.href + '/search',
        tableDiv: document.getElementById('tableDiv'),
        theadElements: ['ID', 'Latitude', 'Longitude', 'Endereço', 'Ativo', ''],
        tbodyElements: ['id', 'latitude', 'longitude', 'localizacao', 'active', 'actions_dropdown'],
        searchField: document.getElementById('search'),
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderTable(renderTableOptions);
        actions_dropdown();
    });

    const btnSearch = document.getElementById('searchBtn');

    btnSearch.addEventListener('click', () => {
        renderTable(renderTableOptions);
    });

    const edit = (id) => {
        console.log("")
    }

    const deleteRegister = (id) => {

    }
</script>
<?= $this->endSection() ?>