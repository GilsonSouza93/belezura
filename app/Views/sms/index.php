<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div >

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
            <button class="btn btn-success" onclick="openModalSms()" >Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
        
    </div>

    <p>
        SMS localizados: <span id="smsCount">0</span>
    </p>

    <div id="tableSms" class="collapsed p-4 justify-content ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Dias</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Gateway SMS</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ativos do contrato</th>
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
    const tableSms = document.getElementById('tableSms');
    const smsCount = document.getElementById('smsCount')
    const searchBtn = document.getElementById('searchBtn')

    const search = () => {
        const search = document.getElementById('search').value
        const url = '<?= $baseRoute ?>/search'
        const data = {
            search: search
        }

        smsCount.innerText = 'Carregando...'

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
        smsCount.innerText = data.length

        const tbody = document.querySelector('tbody')
        tbody.innerHTML = ''
        data.forEach(sms => {

            Object.keys(sms).forEach(key => {
                if (sms[key] === null) {
                    sms[key] = ''
                }
            });

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${sms?.name}</td>
                <td>
                    ${sms?.email}<br>
                    ${sms?.phone1}
                </td>
                <td></td>
                <td></td>
                <td class='text-end'>
                    <div class="dropstart">
                        <button type="button" class="btn btn-outline-secondary text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            Ações
                        </button>
                        <ul class="dropdown-menu text-center me-2" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(7px); border-radius: 15px; border: 2px solid #198754;">
                            <li class="dropdown-item" onclick="editSms(${sms.id})">Editar</li>
                            <li class="dropdown-item" onclick="deleteSms(${sms.id})">Excluir</li>
                        </ul>
                    </div>
                </td>
            `
            tbody.appendChild(tr);
        })
        
        tableSms.classList.add('show');
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

    const deleteSms = (id) => {
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

    const editSms = (id) => {
        window.location.href = '<?= $baseRoute ?>/editar/' + id;
    }

</script>

<?= $this->endSection() ?>
