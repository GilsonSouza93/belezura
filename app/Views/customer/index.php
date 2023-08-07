<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2><?= $tittle ?></h2>
    
    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar" style="background-color: transparent;">
        </div>
        <div class="col-md-4 btn-group">
            <button class="btn btn-success" id="searchBtn">Pesquisar</button>
            <button class="btn btn-success">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
    </div>

    <p>
        Clientes localizados: <span id="customersCount">0</span>
    </p>

    <div id="collapseTable" class="collapse">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Plano</th>
                    <th scope="col">Endereço</th>
                    <th scope='col'>Ações</th>
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
                <td>
                    <a href="<?= $baseRoute ?>/edit/${customer.id}" class="btn btn-primary">Editar</a>
                    <a href="<?= $baseRoute ?>/delete/${customer.id}" class="btn btn-danger">Excluir</a>
                </td>
            `
            tbody.appendChild(tr);
        })
        
        collapseTable.classList.add('show');
    }

    document.addEventListener('DOMContentLoaded', () => {
        search()
    });

    searchBtn.addEventListener('click', () => {
        search()
    });

</script>

<?= $this->endSection() ?>
