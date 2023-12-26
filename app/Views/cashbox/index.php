<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div>
    <h2><?= $tittle ?></h2>

    <div class="row card">
        <div class="col-md-4">
            <div class="div">
                <!-- <h6 class="mb-0 text-white">Saldo</h6>
                <h3 class="me-2 mb-0 text-white" id="customerQty">R$1,00</h3> -->
            </div>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                <div class="form-floating">
                    <input type="datetime-local" class="form-control" id="rangeStart">
                    <label for="rangeStart">Data de inicio</label>
                </div>
                <div class="form-floating">
                    <input type="datetime-local" class="form-control" id="rangeEnd">
                    <label for="rangeEnd">Data limite</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="status">
                        <option value="finished">Finalizado/Impresso</option>
                        <option value="all">Todos</option>
                        <option value="processing">Em processamento</option>
                        <option value="completed">Completo</option>
                        <option value="pending">Pendente</option>
                        <option value="on-hold">Em espera</option>
                        <option value="cancelled">Cancelado</option>
                        <option value="refunded">Reembolsado</option>
                        <option value="failed">Falhou</option>
                    </select>
                    <label for="status">Status</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <input type="text" id="search" class="form-control" placeholder="Buscar" style="background-color: transparent;">
        </div>
        <div class="col-md-4 btn-group">
            <button class="btn btn-success" id="searchBtn">Pesquisar</button>
            <button class="btn btn-success" id="accountFilter">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo">
                Novo Lançamento
            </a>
        </div>
    </div>

    <h2 class="mb-4" Lançamentos </h2>

        <div id="tableDiv"></div>

</div>
<?= $this->endSection() ?>


<?= $this->section('script') ?>

<script>
    const renderTableOptions = {
        urlFetch: window.location.href + '/search',
        tableDiv: document.getElementById('tableDiv'),
        theadElements: ['ID', 'Tipo', 'Ponto de pagamento', 'Valor', 'Forma de Pagamento', 'Data de Cadastro', 'Observação', 'Ações'],
        tbodyElements: ['id', 'type', 'payment_point', 'value', 'payment_form', 'date', 'obs', ['edit', 'delete', 'whatsapp']],
        searchField: document.getElementById('search'),
    }

    document.addEventListener('DOMContentLoaded', () => {
        advancedSearchEngine(renderTableOptions);
    });
</script>

<?= $this->endSection() ?>