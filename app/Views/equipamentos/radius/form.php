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
                    Editar Radius
                <?php else : ?>
                    Novo Radius
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
            <div class="mt-3 col-md-6">
                <label for="pop" class="form-label">POP'S</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o POP">
            </div>
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">IP POLL</label>
                <select class="form-control select2" aria-label="Default select example">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="pop" class="form-label">Usuário</label>
                <input type="text" class="form-control" name="name" placeholder="Insira um nome">
            </div>
            <div class="mt-3 col-md-6">
                <label for="pop" class="form-label">Senha</label>
                <input type="text" class="form-control" name="name" placeholder="Insira uma senha">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">IPv6 Prefix Pool:</label>
                <select class="form-control select2" aria-label="Default select example">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">IPv6 PD Pool:</label>
                <select class="form-control select2" aria-label="Default select example">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">IP Pool Bloqueio:</label>
                <select class="form-control select2" aria-label="Default select example">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Endereço de IP</label>
                <input type="text" class="form-control" name="name" placeholder="Insira IP">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Nome do Indentificador</label>
                <input type="text" class="form-control" name="name" placeholder="Insira nome para indentificar">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Tipo:</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o tipo">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Palavra Secreta</label>
                <input type="text" class="form-control" name="name" placeholder="Insira a palavra passe">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Porta de Requisição NAS</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">IP de Requisição NAS</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">IP de Origem Ping</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">Tipo de Acesso Extra:</label>
                <select class="form-control select2" aria-label="Default select example">
                    <option selected>Selecione o IPv6 Prefixo POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">Radius Config:</label>
                <select class="form-control select2" aria-label="Default select example">
                    <option selected>Selecione o IPv6 POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Porta</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Usuário</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Senha</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">SNMP Version:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">SNMP Community:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">SNMP Port:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">HTTP Porta.</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">DNS Primário:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">DNS Secundário:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Accounting Update:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="IP" class="form-label">Porta</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="IP" class="form-label">Latitude, Longitude</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> Ativar no Radius
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> Disponível para Cliente
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> Verificar Login
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> Verificar Mac
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> Verificar Mac+Login
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> RRd Interfaces
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Parâmetros do JSON:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-5 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> Auto Reload
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Simutaneos User por Login:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-5 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> Checar Radius
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Timeout de Checagem de Conexão</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-5 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id="" class="form-check-input"> Checar Conectividade
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Timeout Gráfico de Coleta de Sinal:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Endereço IP de Acesso - Importação:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-12">
                <label for="tipo" class="form-label">Tipo de Acesso - Importação:</label>
                <select class="form-control select2" aria-label="Default select example">
                    <option selected>Selecione a importação</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Porta de Acesso - Importação:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Usuário de acesso - Importação:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Senha de Acesso - Importação:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-12">
                <label for="IP" class="form-label">ShortCode</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row card-2 py-3 my-3">
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>
    </form>

</div>
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