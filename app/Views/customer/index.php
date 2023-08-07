<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2><?= $tittle ?></h2>
    
    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar" style="background-color: transparent;">
        </div>
        <div class="col-md-4 btn-group">
            <button class="btn btn-success">Pesquisar</button>
            <button class="btn btn-success">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
    </div>

    <p>
        Clientes localizados: <span id="customersCount">0</span>
    </p>

    <div id="collapseTable" class="collapse">
        <table class="table table-dark table-striped">
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

    const search = () => {
        const search = document.getElementById('search').value
        const url = '<?= $baseRoute ?>/search'
        const data = {
            search
        }

        customersCount.innerText = 'Carregando...'

        fetch(url, {
            method: 'POST',
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            renderTable(data)
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
            const tr = document.createElement('tr')
            tr.innerHTML = `
                <td>${customer.name}</td>
                <td>${customer.contact}</td>
                <td>${customer.plan}</td>
                <td>${customer.address}</td>
                <td>
                    <a href="${baseRoute}/edit/${customer.id}" class="btn btn-primary">Editar</a>
                    <a href="${baseRoute}/delete/${customer.id}" class="btn btn-danger">Excluir</a>
                </td>
            `
            tbody.appendChild(tr)
        })
        
        collapseTable.classList.add('show');
    }

    document.addEventListener('DOMContentLoaded', () => {
        search()
    })
</script>

<?= $this->endSection() ?>
