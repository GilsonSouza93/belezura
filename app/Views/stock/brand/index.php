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
            <button class="btn btn-success" onclick="openModalBrand()" >Filtros</button>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><?= $addButtonText ?></button>
        </div>
        
    </div>

    <p>
        Marcas localizados: <span id="brandCount">0</span>
    </p>

    <div id="tableBrand" class="collapsed p-4 justify-content ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                    <th scope='col'>Ações</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Marca</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= $this->include("stock/brand/form")?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>



<?= $this->endSection() ?>


<?= $this->section('script') ?>

<script>
    const tableBrand = document.getElementById('tableBrand');
    const brandCount = document.getElementById('brandCount')
    const searchBtn = document.getElementById('searchBtn')

    const search = () => {
        const search = document.getElementById('search').value
        const url = '<?= $baseRoute ?>/search'
        const data = {
            search: search
        }

        brandCount.innerText = 'Carregando...'

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
        brandCount.innerText = data.length

        const tbody = document.querySelector('tbody')
        tbody.innerHTML = ''
        data.forEach(brand => {

            Object.keys(brand).forEach(key => {
                if (brand[key] === null) {
                    brand[key] = ''
                }
            });

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${brand?.name}</td>
                <td>
                    ${brand?.email}<br>
                    ${brand?.phone1}
                </td>
                <td></td>
                <td></td>
                <td class='text-end'>
                    <div class="dropstart">
                        <button type="button" class="btn btn-outline-secondary text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            Ações
                        </button>
                        <ul class="dropdown-menu text-center me-2" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(7px); border-radius: 15px; border: 2px solid #198754;">
                            <li class="dropdown-item" onclick="editBrand(${brand.id})">Editar</li>
                            <li class="dropdown-item" onclick="deleteBrand(${brand.id})">Excluir</li>
                        </ul>
                    </div>
                </td>
            `
            tbody.appendChild(tr);
        })
        
        tableBrand.classList.add('show');
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

    const deleteBrand = (id) => {
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

    const editBrand = (id) => {
        window.location.href = '<?= $baseRoute ?>/editar/' + id;
    }

</script>

<?= $this->endSection() ?>
