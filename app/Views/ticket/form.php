<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
        <h4>
                <?php if (isset($register)) : ?>
                    Editar boletos em lote
                <?php else : ?>
                    Novo lote de boletos
                <?php endif ?>
            </h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id="submit-btn" >Salvar</button>
        </div>
    </div>

    <form>

        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" id="bairro" class="form-control" name="name">
            </div>
            <div class="mt-3 col-md-3">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" id="rua" class="form-control">
            </div>
            <div class="mt-3 col-md-3">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control"  id="pop" aria-label="Default select example">
                    <option selected>Selecione o local POP</option>
                    <option value="1">Caruaru</option>
                    <option value="2">Olinda</option>
                    <option value="2">Recife</option>
                    <option value="2">Surubim</option>
                    <option value="2">Garanhuns</option>
                </select>
            </div>

            <div class="mt-3 col-md-3">
                <label for="nas" class="form-label">NAS</label>
                <select class="form-control"  id="nas" aria-label="Default select example">
                    <option selected>Selecione o NAS</option>
                    <option value="1">Monsenhor Tabosa</option>
                    <option value="1">Ria Rural</option>
                </select>
            </div>
        </div>
       
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="parcela" class="form-label">Parcela</label>
                <input type="text" class="form-control" id="parcela" name="name" placeholder="">
            </div>

            <div class="mt-3 col-md-4">
                <label for="portador" class="form-label">Mês/ano</label>
                <select class="form-control" id="portador" aria-label="Default select example">
                    <option selected>Selecione o período</option>
                    <option value="1">08/2023</option>
                    <option value="2">09/2023</option>
                    <option value="3">10/2023</option>
                    <option value="4">11/2023</option>
                    <option value="5">12/2023</option>                  
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="portador" class="form-label">Portador</label>
                <select class="form-control" id="portador" aria-label="Default select example">
                    <option selected>-------</option>
                    <option value="1">Caixa Economica Federal</option>
                    <option value="2">Banco Rural</option>
                    <option value="3">Banco do Brasil</option>
                    <option value="4">Banco Itáu</option>
                </select>
            </div>
        </div>


        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="plano" class="form-label">Plano</label>
                <select class="form-control" id="plano" aria-label="Default select example">
                    <option selected>Selecione o Plano</option>
                    <option value="1">100mb -</option>
                    <option value="2">50 mb</option>
                    <option value="3">1GB</option>
                    <option value="3">Rádio - 1GB</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="condominio" class="form-label">Condominio</label>
                <select class="form-control" id="condominio" aria-label="Default select example">
                    <option selected>Selecione o condominio</option>
                    <option value="1">Edf. Luis castro - Monsenhor Tabosa</option>
                    <option value="1">VogVille - Caruaru</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="vencimento" class="form-label">Vencimento</label>
                <select class="form-control" id="vencimento" aria-label="Default select example">
                    <option selected>---------</option>
                    <option value="1">5</option>
                    <option value="2">10</option>
                    <option value="3">15</option>
                    <option value="4">20</option>
                    <option value="5">25</option>
                    <option value="6">30</option>
                </select>
            </div>
        </div>


        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="datainicial" class="form-label">Data Cad. Inicial:</label>
                <input type="date" class="form-control" id="datainicial" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="datafinal" class="form-label">Data Cad. Final:</label>
                <input type="date" class="form-control" id="datafinal" name="name" placeholder="">
            </div>
            <div class="mt-5 col-md-3">
                <label for="carneaberto" class="form-label"></label>
                <input type="checkbox" name="" id="carneaberto"> Exibe Carnê em aberto
            </div>
            <div class="mt-5 col-md-3">
                <label for="pix" class="form-label"></label>
                <input type="checkbox" name="" id="pix"> Gerar PIX
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="tituloinicial" class="form-label">Títulos Emitidos (Não) - Inicial:</label>
                <input type="date" class="form-control" name="" id="tituloinicial" >
            </div>
            <div class="mt-3 col-md-6">
                <label for="titulofinal" class="form-label">Títulos Emitidos (Não) - Final:</label>
                <input type="date" class="form-control" name="" id="titulofinal" >
            </div>
        </div>
        
        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="obs" class="form-label">Observação</label>
                <input type="text" class="form-control" id="obs" name="name" placeholder="">
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
</script>
<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>

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