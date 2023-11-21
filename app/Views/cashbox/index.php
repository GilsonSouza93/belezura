<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class=" p-4">

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
            <button class="btn btn-success" id="searchBtnCash">Pesquisar</button>
            <button class="btn btn-success" onclick="openModalCash()">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>

    </div>

    <p>
        Entradas Localizadas: <span id="cashInCount">0</span><br>
        Saídas Localizadas: <span id="cashOutCount">100</span>
    </p>

    <div id="tableCashBox" class="collapsed p-4 justify-content card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">P. Recebimento</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">Data Copetência</th>
                    <th scope="col">Modo de Pagamento</th>
                    <th scope="col">Histórico</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">P. Contas</th>
                    <th scope="col">Entradas</th>
                    <th scope='col'>Saídas</th>
                    <th scope='col'>Ações</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<!-- Filtro modal -->
<div id='ModalCash' class="modal" tabindex="-1" style="backdrop-filter: blur(7px);">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filtrar Caixa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id='formFilter'>

                    <div class="mt-3 col-md-12">
                        <label for="ponto" class="form-label" id="ponto">Ponto de Recebimento</label>
                        <select class="form-control select2" aria-label="Ponto de Recebimento">
                            <option value="1">Matriz - Caruaru</option>
                            <option value="2">Filial - Agrestina</option>
                            <option value="3">Filial - Bonito</option>
                        </select>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="pop" class="form-label" id="pop">Pop</label>
                        <select class="form-control select2" aria-label="Pop">
                            <option value="1">Caruaru/PE</option>
                            <option value="2">Surubim/PE</option>
                        </select>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="operacao" class="form-label" id="operacao">Tipo de Operação</label>
                        <select class="form-control select2" aria-label="operação">
                            <option value="1">Entrada</option>
                            <option value="2">Saída</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="mt-3 col-md-6">
                            <label for="date" class="form-label" id="dataInicial">Data Inicial</label>
                            <input type="date" class="form-control" name="name" placeholder="">
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="date" class="form-label" id="dataFinal">Data Final</label>
                            <input type="date" class="form-control" name="name" placeholder="">
                        </div>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="datatype" class="form-label" id="datatype">Tipo de Data</label>
                        <select class="form-control select2" aria-label="Tipo de data">
                            <option value="1">Caruaru/PE</option>
                            <option value="2">Surubim/PE</option>
                        </select>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="payform" class="form-label" id="payform">Forma de Pagamento</label>
                        <select class="form-control select2" aria-label="Forma de Pagamento">
                            <option value="1">Dinheiro</option>
                            <option value="2">Pix</option>
                            <option value="3">Crédito</option>
                            <option value="4">Débito</option>
                            <option value="6">Cheque</option>
                            <option value="7">Transferência Bancária</option>
                            <option value="8">Cheque Pré-datado</option>
                        </select>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="countplan" class="form-label" id="countplan">Plano de Contas</label>
                        <select class="form-control select2" aria-label="Plano de contas">
                            <option value="1">Mensalidade</option>
                            <option value="1">Receita</option>
                            <option value="1">Adesão</option>
                            <option value="1">Cabo</option>
                        </select>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="user" class="form-label" id="user">Usuário</label>
                        <select class="form-control select2" aria-label="Usuário">
                            <option value="1">Fabiana - Financeiro</option>
                            <option value="1">Moacir - Diretor Geral</option>
                            <option value="1">Eduarda - Financeiro</option>
                            <option value="1">Mary - GG</option>
                        </select>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="descricao" class="form-label" id="descricao">Descrição</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="business" class="form-label" id="business">Empresa</label>
                        <select class="form-control select2" aria-label="Empresa">
                            <option value="1">Provedor de Caruaru</option>
                            <option value="1">Provedor de Recife</option>
                        </select>
                    </div>



                    <div class="mt-3 col-md-12">
                        <label for="documentType" class="form-label" id="documentType">Tipo do Documento</label>
                        <select class="form-control select2" aria-label="tipo do documento">
                            <option value="1">-------</option>
                        </select>
                    </div>

                    <div class="mt-3 col-md-12">
                        <label for="fornecedor" class="form-label" id="fornecedor">Fornecedor</label>
                        <select class="form-control select2" aria-label="Fornecedor">
                            <option value="1">Home Telecomunicações</option>
                        </select>
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
    const openModalCash = () => {
        const modalFilter = new bootstrap.Modal('#ModalCash', {
            keyboard: true,
        });

        modalFilter.show();
    }

    const tableCashBox = document.getElementById('tableCashBox');
    const cashInCount = document.getElementById('cashInCount')
    const cashOutCount = document.getElementById('cashOutCount')
    const searchBtnCash = document.getElementById('searchBtnCash')

    const search = () => {
        const search = document.getElementById('search').value
        const url = '<?= $baseRoute ?>/search'
        const data = {
            search: search
        }

        cashInCount.innerText = 'Carregando...'

        fetch(url, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            renderTableTwo(data);
        })
        .catch(error => {
            showToast('Erro ao buscar clientes !', 'error')
        })

    }

    const renderTableTwo = (data) => {
        customersCount.innerText = data.length

        const tbody = document.querySelector('tbody')
        tbody.innerHTML = ''
        data.forEach(cash => {

            Object.keys(cash).forEach(key => {
                if (cashInCount[key] === null) {
                    cashInCount[key] = ''
                }
            });

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${cash?.name}</td>
                <td>
                    ${cash?.email}<br>
                    ${cash?.phone1}
                </td>
                <td></td>
                <td></td>
                <td class='text-end'>
                    <div class="dropstart">
                        <button type="button" class="btn btn-outline-secondary text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            Ações
                        </button>
                        <ul class="dropdown-menu text-center me-2" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(7px); border-radius: 15px; border: 2px solid #198754;">
                            <li class="dropdown-item" onclick="editCash(${cash.id})">Editar</li>
                            <li class="dropdown-item" onclick="deleteCash(${cash.id})">Excluir</li>
                        </ul>
                    </div>
                </td>
            `
            tbody.appendChild(tr);
        })
        
        tableCashBox.classList.add('show');
    }

    const openModalFilter = () => {
        const modalFilter = new bootstrap.Modal('#modalFilter', {
            keyboard: true,
        });

        modalFilter.show();
    }


    document.addEventListener('DOMContentLoaded', () => {
        search()
    });

    searchBtn.addEventListener('click', () => {
        search()
    });

    const deleteCustomer = (id) => {
        url = '<?= $baseRoute ?>/delete';
        showLoading();

        fetch(url, {
            method: 'POST',
            body: JSON.stringify({id: id}),
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(response => response.json())
        .then(data => {
            hideLoading();

            if (data.success === true) {
                showToast('Cliente excluído com sucesso !', 'success')
                search()
            } else {
                showToast('Erro ao excluir cliente !', 'error')
            }
        })
    }

    const editCustomer = (id) => {
        window.location.href = '<?= $baseRoute ?>/editar/' + id;
    }


</script>

<?= $this->endSection() ?>