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
                <input type="text" class="form-control" name="radius_pop" placeholder="Insira o POP" id="radius_pop">
            </div>
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">IP POLL</label>
                <select class="form-control select2" aria-label="Default select example" name="radius_ippool" id="radius_ippool">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="pop" class="form-label">Usuário</label>
                <input type="text" class="form-control" name="radius_user" placeholder="Insira um nome"id="radius_user">
            </div>
            <div class="mt-3 col-md-6">
                <label for="pop" class="form-label">Senha</label>
                <input type="text" class="form-control" name="radius_password" placeholder="Insira uma senha" id="radius_password">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">IPv6 Prefix Pool:</label>
                <select class="form-control select2" aria-label="Default select example"name="radius_prefxipv6" id="radius_prefxipv6">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">IPv6 PD Pool:</label>
                <select class="form-control select2" aria-label="Default select example" name="radius_ipv6pool" id="radius_ipv6pool">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">IP Pool Bloqueio:</label>
                <select class="form-control select2" aria-label="Default select example" name="radius_ippoolblock" id="radius_ippoolblock">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Endereço de IP</label>
                <input type="text" class="form-control" name="radius_andressip" placeholder="Insira IP" id="radius_andressip">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Nome do Indentificador</label>
                <input type="text" class="form-control" name="radius_name" placeholder="Insira nome para indentificar" id="radius_name">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Tipo:</label>
                <input type="text" class="form-control" name="radius_type" placeholder="Insira o tipo" id="radius_type">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Palavra Secreta</label>
                <input type="text" class="form-control" name="radius_secretword" placeholder="Insira a palavra passe" id="radius_secretword">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Porta de Requisição NAS</label>
                <input type="text" class="form-control" name="radius_portnas" placeholder="" id="radius_portnas">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">IP de Requisição NAS</label>
                <input type="text" class="form-control" name="radius_nasip" placeholder="" id="radius_nasip">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">IP de Origem Ping</label>
                <input type="text" class="form-control" name="radius_iporigin" placeholder="" id="radius_iporigin">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">Tipo de Acesso Extra:</label>
                <select class="form-control select2" name="radius_extratype" id="radius_extratype">
                    <option selected>Selecione o IPv6 Prefixo POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">Radius Config:</label>
                <select class="form-control select2" name="radius_radiusconfig" id="radius_radiusconfig">
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
                <input type="text" class="form-control" name="radius_port" placeholder="" id="radius_port">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Senha</label>
                <input type="text" class="form-control" name="radius_password" placeholder="" id="radius_password">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">SNMP Version:</label>
                <input type="text" class="form-control" name="radius_snmpversion" placeholder="" id="radius_snmpversion">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">SNMP Community:</label>
                <input type="text" class="form-control" name="radius_snmpcommunity" placeholder="" id="radius_snmpcommunity">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">SNMP Port:</label>
                <input type="text" class="form-control" name="radius_snmpport" placeholder="" id="radius_snmpport">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">HTTP Porta.</label>
                <input type="text" class="form-control" name="radius_httpport" placeholder="" id="radius_httpport">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">DNS Primário:</label>
                <input type="text" class="form-control" name="radius_dnsprimary" placeholder="" id="radius_dnsprimary">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">DNS Secundário:</label>
                <input type="text" class="form-control" name="radius_dnssecudary" placeholder="" id="radius_dnssecudary">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Accounting Update:</label>
                <input type="text" class="form-control" name="radius_accountingupdate" placeholder="" id="radius_accountingupdate">
            </div>
        </div>


        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="IP" class="form-label">Porta</label>
                <input type="text" class="form-control" name="radius_portsecundary" placeholder="" id="radius_portsecundary">
            </div>
            <div class="mt-3 col-md-6">
                <label for="IP" class="form-label">Latitude, Longitude</label>
                <input type="text" class="form-control" name="radius_latlong" placeholder="" id="radius_latlong">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_activeradius" id="radius_activeradius" class="form-check-input"> Ativar no Radius
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_costumerdisponible" id="radius_costumerdisponible" class="form-check-input"> Disponível para Cliente
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_verifylogin" id="radius_verifylogin" class="form-check-input"> Verificar Login
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_verifymac" id="radius_verifymac" class="form-check-input"> Verificar Mac
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_verifymaclogin" id="radius_verifymaclogin" class="form-check-input"> Verificar Mac+Login
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_rrdinterfaces" id="radius_rrdinterfaces" class="form-check-input"> RRd Interfaces
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Parâmetros do JSON:</label>
                <input type="text" class="form-control" name="radius_jsonparameters" id="radius_jsonparameters">
            </div>
            <div class="mt-5 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_autoreload" id="radius_autoreload" class="form-check-input"> Auto Reload
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Simutâneos User por Login:</label>
                <input type="text" class="form-control" name="radius_simutaneouserlogin" id="radius_simutaneouserlogin">
            </div>
            <div class="mt-5 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_checkradius" id="radius_checkradius" class="form-check-input"> Checar Radius
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Timeout de Checagem de Conexão</label>
                <input type="text" class="form-control" name="radius_timeoutcheck" id="radius_timeoutcheck">
            </div>
            <div class="mt-5 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="radius_checkconexion" id="radius_checkconexion" class="form-check-input"> Checar Conectividade
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Timeout Gráfico de Coleta de Sinal:</label>
                <input type="text" class="form-control" name="radius_timeoutgraphics" id="radius_timeoutgraphics">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Endereço IP de Acesso - Importação:</label>
                <input type="text" class="form-control" name="radius_andressipacess" id="radius_andressipacess">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-12">
                <label for="tipo" class="form-label">Tipo de Acesso - Importação:</label>
                <select class="form-control select2" name="radius_acesstype" id="radius_acesstype">
                    <option selected>Selecione a importação</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Porta de Acesso - Importação:</label>
                <input type="text" class="form-control" name="radius_acessport" id="radius_acessport">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Usuário de acesso - Importação:</label>
                <input type="text" class="form-control" name="radius_acessuser" id="radius_acessuser">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Senha de Acesso - Importação:</label>
                <input type="text" class="form-control" name="radius_acesspassword" id="radius_acesspassword">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-12">
                <label for="IP" class="form-label">ShortCode</label>
                <input type="text" class="form-control" name="radius_shortcode" id="radius_shortcode">
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