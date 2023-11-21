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
            <button class="btn btn-success" id="serchBtnBillsPay" >Pesquisar</button>
            <button class="btn btn-success" onclick="openModalPay()">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
        
    </div>

    <p>
        Contas a Pagar Localizadas: <span id="billsPayCount">0</span>
    </p>

    <div id="tableBillsPay" class="collapsed p-4 justify-content card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Conta</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Ponto de Recebimento</th>
                    <th scope="col">Recebedor</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data Emissão</th>
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

<!-- Filtro modal -->
<div id='ModalPay' class="modal" tabindex="-1" style="backdrop-filter: blur(7px);">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal Title</h5>
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
                <select class="form-control select2" aria-label="Status">
                    <option value="1">Pendente</option>
                    <option value="2">Quitado</option>
                    <option value="3">Cancelado</option>
                    <option value="4">Atrasada</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="pop" class="form-label" id="pop" >Pop</label>
                <select class="form-control select2" aria-label="Pop">
                    <option value="1">Carauru/PE</option>
                    <option value="2">Surubim/PE</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="pop" class="form-label" id="pop" >Pop</label>
                <select class="form-control select2" aria-label="Pop">
                    <option value="1">Carauru/PE</option>
                    <option value="2">Surubim/PE</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="documentType" class="form-label" id="documentType" >Tipo do Documento</label>
                <select class="form-control select2" aria-label="tipo do documento">
                    <option value="1">-------</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="business" class="form-label" id="business" >Empresa</label>
                <select class="form-control select2" aria-label="Empresa">
                    <option value="1">Provedor de Caruaru</option>
                    <option value="1">Provedor de Recife</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="fornecedor" class="form-label" id="fornecedor" >Fornecedor</label>
                <select class="form-control select2" aria-label="Fornecedor">
                    <option value="1">Home Telecomunicações</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="countplan" class="form-label" id="countplan" >Plano de Contas</label>
                <select class="form-control select2" aria-label="Plano de contas">
                    <option value="1">Mensalidade</option>
                    <option value="1">Receita</option>
                    <option value="1">Adesão</option>
                    <option value="1">Cabo</option>
                </select>
            </div>
            <div class="mt-3 col-md-12">
                <label for="user" class="form-label" id="user" >Usuário</label>
                <select class="form-control select2" aria-label="Usuário">
                    <option value="1">Fabiana - Financeiro</option>
                    <option value="1">Moacir - Diretor Geral</option>
                    <option value="1">Eduarda - Financeiro</option>
                    <option value="1">Mary - GG</option>
                </select>
            </div>
            <div class="row">
                <div class="mt-3 col-md-6">
                    <label for="date" class="form-label" id="dataInicial" >Data Inicial</label>
                    <input type="date" class="form-control" name="name" placeholder="">
                </div>
                <div class="mt-3 col-md-6">
                    <label for="date" class="form-label" id="dataFinal" >Data Final</label>
                    <input type="date" class="form-control" name="name" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="mt-3 col-md-6">
                    <label for="date" class="form-label" id="vencimentoInicial" >Vencimento Inicial</label>
                    <input type="date" class="form-control" name="name" placeholder="">
                </div>
                <div class="mt-3 col-md-6">
                    <label for="date" class="form-label" id="vencimentoFinal" >Vencimento Final</label>
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

        const openModalPay = () => {
            const modalFilter = new bootstrap.Modal('#ModalBillsPay', {
                keyboard: true,
            });
            
            modalFilter.show();
        }



    const tableBillsPay = document.getElementById('tableBillsPay');
    const billsPayCount = document.getElementById('billsPayCount')
    const searchBtn = document.getElementById('searchBtnBillsPay')

    const search = () => {
        const search = document.getElementById('search').value
        const url = '<?= $baseRoute ?>/search'
        const data = {
            search: search
        }

        billsPayCount.innerText = 'Carregando...'

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
        billsPayCount.innerText = data.length

        const tbody = document.querySelector('tbody')
        tbody.innerHTML = ''
        data.forEach(billsPay => {

            Object.keys(billsPay).forEach(key => {
                if (billsPay[key] === null) {
                    billsPay[key] = ''
                }
            });

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${billsPay?.name}</td>
                <td>
                    ${billsPay?.email}<br>
                    ${billsPay?.phone1}
                </td>
                <td></td>
                <td></td>
                <td class='text-end'>
                    <div class="dropstart">
                        <button type="button" class="btn btn-outline-secondary text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            Ações
                        </button>
                        <ul class="dropdown-menu text-center me-2" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(7px); border-radius: 15px; border: 2px solid #198754;">
                            <li class="dropdown-item" onclick="editBillsPay(${billsPay.id})">Editar</li>
                            <li class="dropdown-item" onclick="deleteBillsPay(${billsPay.id})">Excluir</li>
                        </ul>
                    </div>
                </td>
            `
            tbody.appendChild(tr);
        })
        
        tableBillsPay.classList.add('show');
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

    const deleteBillsPay = (id) => {
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

    const editBillsPay = (id) => {
        window.location.href = '<?= $baseRoute ?>/editar/' + id;
    }

</script>

<?= $this->endSection() ?>