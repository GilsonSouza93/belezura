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
            <button class="btn btn-success" onclick="openModalReceiver()">Filtros</button>
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
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ponto de Recebimento</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data Emissão</th>
                    <th scope="col">Vencimento</th>
                    <th scope="col">Status</th>
                    <th scope="col">Parcela</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Status</th>
                    <th scope='col'>Ação</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<!-- Filtro modal -->
<div id='ModalReceiver' class="modal" tabindex="-1" style="backdrop-filter: blur(7px);">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Filtrar C. Receber</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id='formFilter'>
            <div class="mt-3 col-md-12">
                <label for="descricao" class="form-label" id="descricao" >Descrição</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-12">
                <label for="status" class="form-label" id="status" >Status</label>
                <select class="form-control" aria-label="Status">
                    <option value="1">Pendente</option>
                    <option value="2">Quitado</option>
                    <option value="3">Cancelado</option>
                    <option value="4">Atrasada</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="pop" class="form-label" id="pop" >Pop</label>
                <select class="form-control" aria-label="Pop">
                    <option value="1">Carauru/PE</option>
                    <option value="2">Surubim/PE</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="pop" class="form-label" id="pop" >Pop</label>
                <select class="form-control" aria-label="Pop">
                    <option value="1">Carauru/PE</option>
                    <option value="2">Surubim/PE</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="documentType" class="form-label" id="documentType" >Tipo do Documento</label>
                <select class="form-control" aria-label="tipo do documento">
                    <option value="1">-------</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="business" class="form-label" id="business" >Empresa</label>
                <select class="form-control" aria-label="Empresa">
                    <option value="1">Provedor de caruaru</option>
                    <option value="1">Provedor de recife</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="fornecedor" class="form-label" id="fornecedor" >Fornecedor</label>
                <select class="form-control" aria-label="Fornecedor">
                    <option value="1">Home Telecomunicações</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="countplan" class="form-label" id="countplan" >Plano de contas</label>
                <select class="form-control" aria-label="Plano de contas">
                    <option value="1">Mensalidade</option>
                    <option value="1">Receita</option>
                    <option value="1">Adesão</option>
                    <option value="1">Cabo</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="user" class="form-label" id="user" >Usuário</label>
                <select class="form-control" aria-label="Usuário">
                    <option value="1">Fabiana - Financeiro</option>
                    <option value="1">Moacir - Diretor Geral</option>
                    <option value="1">Eduarda - Financeiro</option>
                    <option value="1">Mary - GG</option>
                </select>
            </div>
            <div class="row">
                <div class="mt-3 col-md-6">
                    <label for="date" class="form-label" id="dataInicial" >Data inicial</label>
                    <input type="date" class="form-control" name="name" placeholder="">
                </div>
                <div class="mt-3 col-md-6">
                    <label for="date" class="form-label" id="dataFinal" >Data final</label>
                    <input type="date" class="form-control" name="name" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="mt-3 col-md-6">
                    <label for="date" class="form-label" id="vencimentoInicial" >Vencimento inicial</label>
                    <input type="date" class="form-control" name="name" placeholder="">
                </div>
                <div class="mt-3 col-md-6">
                    <label for="date" class="form-label" id="vencimentoFinal" >Vencimento final</label>
                    <input type="date" class="form-control" name="name" placeholder="">
                </div>
            </div>
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
    const openModalReceiver = () => {
        const modalFilter = new bootstrap.Modal('#ModalReceiver', {
            keyboard: true,
        });

        modalFilter.show();
    }
</script>

    


<?= $this->endSection() ?>