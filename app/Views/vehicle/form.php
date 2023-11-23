<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Veículo</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id='submit-btn' onclick="submit()">Salvar</button>
        </div>
    </div>

    <form id="form">
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="model" class="form-label">Modelo</label>
                <input type="text" name="model" id="model" class="form-control">
            </div>
            <div class="mt-3 col-md-4">
                <label for="license" class="form-label">Placa</label>
                <input type="text" name="license" id="license" class="form-control" >
            </div>
            <div class="mt-3 col-md-4">
                <label for="uf" class="form-label">UF</label>
                <select class="form-control select2" name="uf" id="uf" aria-label="uf cliente">
                    <option selected>UF</option>
                    <option value="1">Acre</option>
                    <option value="2">Alagoas</option>
                    <option value="2">amapá</option>
                    <option value="2">Amazonas</option>
                    <option value="2">Bahia</option>
                    <option value="2">Ceará</option>
                    <option value="2">Espírito Santo</option>
                    <option value="2">Goiás</option>
                    <option value="2">Maranhão</option>
                    <option value="2">Mato Grosso</option>
                    <option value="2">Mato Grosso do Sul</option>
                    <option value="2">Minas</option>
                    <option value="2">Pará</option>
                    <option value="2">Paraíba</option>
                    <option value="2">Pernambuco</option>
                    <option value="2">Piauí</option>
                    <option value="2">Rio Grande do Norte</option>
                    <option value="2">Rio Grande do Sul</option>
                    <option value="2">Rondônia</option>
                    <option value="2">Roraima</option>
                    <option value="2">Santa Catarina</option>
                    <option value="2">São Paulo</option>
                    <option value="2">Sergipe</option>
                    <option value="2">Tocatins</option>
                    <option value="2">Distrito Federal</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="local" class="form-label">Local</label>
                <input type="text" name="local" id="local" class="form-control">
            </div>
            <div class="mt-3 col-md-4">
                <label for="obs" class="form-label">Observação</label>
                <input type="text" id="obs" name="obs" class="form-control">
            </div>
            <div class="mt-5 col-md-4">
                <label for="available" class="form-label "></label>
                <input type="checkbox" name="" id="available"> Disponível para OS?
            </div>
        </div>       

    </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    const modelo = document.getElementById('modelo');
    const placa = document.getElementById('placa');
    const uf = document.getElementById('uf');
    const local = document.getElementById('local');
    const obs = document.getElementById('local');
    const disponivel = document.getElementById('disponivel');
    
    const submit = () => {
        const body = formatBody();

        try {
            validate(body);

            fetch('<?= $baseRoute ?>/save', {
                method: 'POST',
                body: JSON.stringify(body)
            }).then(response => response.json())
            .then(data => {
                if (data.error == false) {
                    window.location.href = '<?= $baseRoute ?>';
                } else {
                    showToast('Houve um erro', 'error');
                }
            }).catch(error => {
                showToast('Houve um erro', 'error');
            });

        } catch (error) {
            showToast('Preencha todo os campos requeridos', 'warning');

            document.getElementById(error).classList.add('is-invalid');
        }
        
    }

    const formatBody = () => {
        return {
            model: modelo.value,
            plate: placa.value,
            uf: uf.value,
            locate: local.value,
            obs: obs.value,
            available: disponivel.checked
        }
    }

    const validate = (body) => {
        if(!body.model)
            throw 'modelo'

        if(!body.plate)
            throw 'placa'
    }

    const inputs = document.querySelectorAll('input');

    for (var i = 0, len = inputs.length; i < len; i++) {
        inputs[i].addEventListener('keyup', function(e){
            document.getElementById($(e.target).attr("id")).classList.remove('is-invalid');
        });
    }

    
    const submitBtn = document.querySelector('#submit-btn');
    const form = document.querySelector('form');
    const url = '<?= $baseRoute ?>/save';

    submitBtn.addEventListener('click', event => {
        event.preventDefault();
        showLoading();

        const formData = new FormData(form);

        fetch(url, {
            method: 'POST',
            body: formData
        }).then(response => response.json())
        .then(data => {
            hideLoading();
            if (data.error) {
                showToast(data.message, 'error');
            } else {
                showToast(data.message, 'success');
                window.location.href = '<?= $baseRoute ?>';
            }
        }).catch(error => {
            console.log(error);
        });
    });


</script>
<?= $this->endSection() ?>

