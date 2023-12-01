<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2><?= $tittle ?></h2>
    
    <div class="row py-3 my-3">
        <div class="col-md-4">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar" style="background-color: transparent;">
        </div>
        
        <div class="col-md-4 btn-group">
            <button class="btn btn-success">Exportar Arquivo CSV</button>
            <button class="btn btn-success">Importar</button>
        </div>
        
        <div class="col-md-4 btn-group">
            <button class="btn btn-success">Pesquisar</button>
            <button class="btn btn-success" onclick="openModalRadius()" >Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
        
    </div>

    <p>
        Radius localizados: <span id="radiusCount">0</span>
    </p>

    <div id="tableRadius" class="collapsed p-4 justify-content card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Tipo</th>
                    <th scope='col'>Host</th>
                    <th scope='col'>Secret</th>
                    <th scope='col'>Cadastro</th>
                    <th scope='col'>Serviço</th>
                    <th scope='col'>Status</th>
                    <th scope='col'>Ativo</th>
                    <th scope='col'>Ação</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
    const renderTableOptions = {
        urlFetch: window.location.href + '/search',
        tableDiv: document.getElementById('tableDiv'),
        // ID	Descrição	Tipo	Host	Secret	Cadastro	Serviço	Status	Ativo	Ação
        theadElements: ['ID', 'Tipo', 'Porta','Plavra Secreta','Data de Cadastro','Ativo', 'ações'],
        tbodyElements: ['id', 'type', 'port','secret_word','created_at','active_radius', ['edit', 'delete']],
        searchField: document.getElementById('search'),
    }

    document.addEventListener('DOMContentLoaded', () => {
        advancedSearchEngine(renderTableOptions);
    });
</script>

<?= $this->endSection() ?>
