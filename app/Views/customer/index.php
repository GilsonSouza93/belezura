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

    <p>
        Clientes localizados: <span id="customersCount">0</span>
    </p>

    <div id="collapseTable" class="collapse card p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Plano</th>
                    <th scope="col">Endereço</th>
                    <th scope='col'></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
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

    const search = () => {
        const search = document.getElementById('search').value
        const url = '<?= $baseRoute ?>/search'
        const data = {
            search: search
        }

        customersCount.innerText = 'Carregando...'

        fetch(url, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            renderTable(data);
        })
        .catch(error => {
            showToast('Erro ao buscar clientes !', 'error')
        })

    }

    const renderTable = (data) => {
        customersCount.innerText = data.length

        const tbody = document.querySelector('tbody')
        tbody.innerHTML = ''
        data.forEach(customer => {

            Object.keys(customer).forEach(key => {
                if (customer[key] === null) {
                    customer[key] = ''
                }
            });

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${customer?.name}</td>
                <td>
                    ${customer?.email}<br>
                    ${customer?.phone1}
                </td>
                <td></td>
                <td></td>
                <td class='text-end'>
                    <div class="dropstart">
                        <button type="button" class="btn btn-outline-secondary text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            Ações
                        </button>
                        <ul class="dropdown-menu text-center me-2" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(7px); border-radius: 15px; border: 2px solid #198754;">
                            <li><a href="<?= $baseRoute ?>/edit/${customer.id}" class="dropdown-item">Editar</a></li>
                            <li><a href="<?= $baseRoute ?>/delete/${customer.id}" class="dropdown-item">Excluir</a></li>
                        </ul>
                    </div>
                </td>
            `
            tbody.appendChild(tr);
        })
        
        collapseTable.classList.add('show');
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

</script>

<?= $this->endSection() ?>
