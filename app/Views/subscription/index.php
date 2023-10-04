<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

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
            <button class="btn btn-success">Pesquisar</button>
            <button class="btn btn-success" onclick="openModalSubscription()" >Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
        
    </div>

    <p>
        Valor total do plano: R$ 9999,00<br>
        Número de planos encontrados: R$ 9999,00
    </p>

    <div id="tableSubscription" class="collapsed p-4 justify-content ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Upload</th>
                    <th scope='col'>Host</th>
                    <th scope='col'>Ativos</th>
                    <th scope='col'>Suspenso</th>
                    <th scope='col'>Cancelados</th>
                    <th scope='col'>Total</th>
                    <th scope='col'>Download</th>
                    <th scope='col'>Preço</th>
                    <th scope='col'>Grupo</th>
                    <th scope='col'>Pool</th>
                    <th scope='col'>Tipo</th>
                    <th scope='col'>Ação</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>