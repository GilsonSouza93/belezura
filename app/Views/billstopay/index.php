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
            <button class="btn btn-success" onclick="filterBillsToPay ()">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
        
    </div>

    <p>
        Contas localizadas: 100
    </p>

    <div class="d-flex justify-content ">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Conta</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Ponto de Recebimento</th>
                    <th scope="col">Recebedor</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">data Emissão</th>
                    <th scope="col">Vencimento</th>
                    <th scope="col">Pagamento</th>
                    <th scope="col">Status</th>
                    <th scope="col">Parcela</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Pago?</th>
                    <th scope='col'>Ação</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>