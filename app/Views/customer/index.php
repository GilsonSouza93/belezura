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
            <button class="btn btn-success" onclick="openModalFilter()">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
    </div>
    <div id="tableDiv"></div>
</div>
<!-- Filtro modal -->
<div id='modalFilter' class="modal" tabindex="-1" style="backdrop-filter: blur(7px);">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id='formFilter'>
                    <label for="plano" class="form-label">Plano</label>
                    <select class="form-control form-select" name="plano" aria-label="Selecione um plano">
                        <option selected="">Selecione o plano</option>
                        <option value="1">50mb</option>
                        <option value="1">70mb</option>
                        <option value="1">90mb</option>
                        <option value="1">100mb</option>
                        <option value="1">200mb</option>
                        <option value="1">300mb</option>
                    </select>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Consultar</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
    const collapseTable = document.getElementById('collapseTable');
    const customersCount = document.getElementById('customersCount')
    const searchBtn = document.getElementById('searchBtn')

    const renderTableOptions = {
        urlFetch: window.location.href + '/search',
        tableDiv: document.getElementById('tableDiv'),

        theadElements: ['nome', 'ações'],
        tbodyElements: ['name', ['edit', 'delete']],
        searchField: document.getElementById('search'),
    }

    document.addEventListener('DOMContentLoaded', () => {
        advancedSearchEngine(renderTableOptions);
    });
</script>

<?= $this->endSection() ?>