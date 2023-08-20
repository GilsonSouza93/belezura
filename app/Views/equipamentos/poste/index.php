<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="p-4">

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
            <button class="btn btn-success">Filtros</button>
            <a class="btn btn-success" href="<?= $baseRoute ?>/novo"><?= $addButtonText ?></a>
        </div>
        
    </div>

    <div class="d-flex justify-content-center mt-4">
        <div class="spinner-border text-success fade" role="status" id="spinner">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <div id="tableDiv" class="card p-4 fade" style="transition: 1s;">

    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>

    document.addEventListener('DOMContentLoaded', () => {

        const renderTableOptions = {
            urlFetch: window.location.href + '/search',
            tableDiv: document.getElementById('tableDiv'),
            theadElements: ['ID', 'Latitude', 'Longitude', 'Endereço', 'Tipo', 'Ativo', 'Mapa FTTH', 'Ação'],
            tbodyElements: ['id', 'latitude', 'longitude', 'endereco', 'tipo', 'ativo', 'mapa_ftth', 'actions'],
            searchField: document.getElementById('search'),
        }

        renderTable(renderTableOptions);
    });

    const renderTable = (options) => {
        const tableDiv = options.tableDiv;
        const theadElements = options.theadElements;
        const searchField = options.searchField;
        const urlFetch = options.urlFetch;

        const data = {
            search: searchField.value
        }

        const table = document.createElement('table');
        table.classList.add('table');

        const thead = document.createElement('thead');

        const tr = document.createElement('tr');

        theadElements.forEach(element => {
            const th = document.createElement('th');
            th.innerText = element;
            tr.appendChild(th);
        });

        thead.appendChild(tr);
        
        const tbody = document.createElement('tbody');
        table.appendChild(tbody);

        fetch(urlFetch, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
                
                data.forEach(element => {
                    const tr = document.createElement('tr');
    
                    options.tbodyElements.forEach(element2 => {
                        const td = document.createElement('td');
                        td.innerText = element[element2];
                        tr.appendChild(td);
                    });
    
                    const td = document.createElement('td');
                    const a = document.createElement('a');
                    a.innerText = 'Editar';
                    a.href = '<?= $baseRoute ?>/editar/' + element['id'];
                    td.appendChild(a);
                    tr.appendChild(td);
    
                    tbody.appendChild(tr);
                });
    
                tableDiv.appendChild(table);
        })
        .catch(error => {
            console.log(error);
        })
        
        table.appendChild(thead);
        tableDiv.appendChild(table);

        tableDiv.style.opacity = '1';
    }
</script>
<?= $this->endSection() ?>