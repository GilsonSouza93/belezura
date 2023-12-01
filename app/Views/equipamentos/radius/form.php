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
                <label for="pop_id" class="form-label">POP'S</label>
                <input type="text" class="form-control" name="pop_id" placeholder="Insira o POP" id="pop_id">
            </div>
            <div class="mt-3 col-md-6">
                <label for="ip_pool" class="form-label">IP POOL</label>
                <select class="form-control select2" aria-label="Default select example" name="ip_pool" id="ip_pool">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="user" class="form-label">Usuário</label>
                <input type="text" class="form-control" name="user" placeholder="Insira um nome"id="user">
            </div>
            <div class="mt-3 col-md-6">
                <label for="password" class="form-label">Senha</label>
                <input type="text" class="form-control" name="password" placeholder="Insira uma senha" id="password">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="prefx_ipv6" class="form-label">IPv6 Prefix Pool:</label>
                <select class="form-control select2" aria-label="Default select example"name="prefx_ipv6" id="prefx_ipv6">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="ipv6_pool" class="form-label">IPv6 PD Pool:</label>
                <select class="form-control select2" aria-label="Default select example" name="ipv6_pool" id="ipv6_pool">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="ip_pool_block" class="form-label">IP Pool Bloqueio:</label>
                <select class="form-control select2" aria-label="Default select example" name="ip_pool_block" id="ip_pool_block">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="ip_address" class="form-label">Endereço de IP</label>
                <input type="text" class="form-control" name="ip_address" placeholder="Insira IP" id="ip_address">
            </div>
            <div class="mt-3 col-md-3">
                <label for="name" class="form-label">Nome do Indentificador</label>
                <input type="text" class="form-control" name="name" placeholder="Insira nome para indentificar" id="name">
            </div>
            <div class="mt-3 col-md-3">
                <label for="type" class="form-label">Tipo:</label>
                <input type="text" class="form-control" name="type" placeholder="Insira o tipo" id="type">
            </div>
            <div class="mt-3 col-md-3">
                <label for="secret_word" class="form-label">Palavra Secreta</label>
                <input type="text" class="form-control" name="secret_word" placeholder="Insira a palavra passe" id="secret_word">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="port" class="form-label">Porta de Requisição NAS</label>
                <input type="text" class="form-control" name="port" placeholder="" id="port">
            </div>
            <div class="mt-3 col-md-4">
                <label for="nas_ip" class="form-label">IP de Requisição NAS</label>
                <input type="text" class="form-control" name="nas_ip" placeholder="" id="nas_ip">
            </div>
            <div class="mt-3 col-md-4">
                <label for="ip_origin" class="form-label">IP de Origem Ping</label>
                <input type="text" class="form-control" name="ip_origin" placeholder="" id="ip_origin">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="extra_type" class="form-label">Tipo de Acesso Extra:</label>
                <select class="form-control select2" name="extra_type" id="extra_type">
                    <option selected>Selecione o IPv6 Prefixo POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-6">
                <label for="radius_config" class="form-label">Radius Config:</label>
                <select class="form-control select2" name="radius_config" id="radius_config">
                    <option selected>Selecione o IPv6 POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="port_2" class="form-label">Porta</label>
                <input type="text" class="form-control" name="port_2" id="port_2" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Usuário</label>
                <input type="text" class="form-control" name="user_2" placeholder="" id="user_2">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Senha</label>
                <input type="text" class="form-control" name="password_2" placeholder="" id="password_2">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="snmp_version" class="form-label">SNMP Version:</label>
                <input type="text" class="form-control" name="snmp_version" placeholder="" id="snmp_version">
            </div>
            <div class="mt-3 col-md-3">
                <label for="snmp_community" class="form-label">SNMP Community:</label>
                <input type="text" class="form-control" name="snmp_community" placeholder="" id="snmp_community">
            </div>
            <div class="mt-3 col-md-3">
                <label for="snmp_port" class="form-label">SNMP Port:</label>
                <input type="text" class="form-control" name="snmp_port" placeholder="" id="snmp_port">
            </div>
            <div class="mt-3 col-md-3">
                <label for="http_port" class="form-label">HTTP Porta:</label>
                <input type="text" class="form-control" name="http_port" placeholder="" id="http_port">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="dns_primary" class="form-label">DNS Primário:</label>
                <input type="text" class="form-control" name="dns_primary" placeholder="" id="dns_primary">
            </div>
            <div class="mt-3 col-md-4">
                <label for="dns_secondary" class="form-label">DNS Secundário:</label>
                <input type="text" class="form-control" name="dns_secondary" placeholder="" id="dns_secondary">
            </div>
            <div class="mt-3 col-md-4">
                <label for="accounting_update" class="form-label">Accounting Update:</label>
                <input type="text" class="form-control" name="accounting_update" placeholder="" id="accounting_update">
            </div>
        </div>


        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="port_secondary" class="form-label">Porta</label>
                <input type="text" class="form-control" name="port_secondary" placeholder="" id="port_secondary">
            </div>
            <div class="mt-3 col-md-6">
                <label for="lat_long" class="form-label">Latitude, Longitude</label>
                <input type="text" class="form-control" name="lat_long" placeholder="" id="lat_long">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-2">
                <label for="active_radius" class="form-label"></label>
                <input type="checkbox" name="active_radius" id="active_radius" class="form-check-input"> Ativar no Radius
            </div>
            <div class="mt-3 col-md-2">
                <label for="costumer_disponible" class="form-label"></label>
                <input type="checkbox" name="costumer_disponible" id="costumer_disponible" class="form-check-input"> Disponível para Cliente
            </div>
            <div class="mt-3 col-md-2">
                <label for="verify_login" class="form-label"></label>
                <input type="checkbox" name="verify_login" id="verify_login" class="form-check-input"> Verificar Login
            </div>
            <div class="mt-3 col-md-2">
                <label for="verify_mac" class="form-label"></label>
                <input type="checkbox" name="verify_mac" id="verify_mac" class="form-check-input"> Verificar Mac
            </div>
            <div class="mt-3 col-md-2">
                <label for="verify_mac_login" class="form-label"></label>
                <input type="checkbox" name="verify_mac_login" id="verify_mac_login" class="form-check-input"> Verificar Mac+Login
            </div>
            <div class="mt-3 col-md-2">
                <label for="rrd_interfaces" class="form-label"></label>
                <input type="checkbox" name="rrd_interfaces" id="rrd_interfaces" class="form-check-input"> RRd Interfaces
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="json_parameters" class="form-label">Parâmetros do JSON:</label>
                <input type="text" class="form-control" name="json_parameters" id="json_parameters">
            </div>
            <div class="mt-5 col-md-2">
                <label for="auto_reload" class="form-label"></label>
                <input type="checkbox" name="auto_reload" id="auto_reload" class="form-check-input"> Auto Reload
            </div>
            <div class="mt-3 col-md-4">
                <label for="simultaneous_login" class="form-label">Simutâneos User por Login:</label>
                <input type="text" class="form-control" name="simultaneous_login" id="simultaneous_login">
            </div>
            <div class="mt-5 col-md-2">
                <label for="check_radius" class="form-label"></label>
                <input type="checkbox" name="check_radius" id="check_radius" class="form-check-input"> Checar Radius
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="timeout_check" class="form-label">Timeout de Checagem de Conexão</label>
                <input type="text" class="form-control" name="timeout_check" id="timeout_check">
            </div>
            <div class="mt-5 col-md-2">
                <label for="check_conexion" class="form-label"></label>
                <input type="checkbox" name="check_conexion" id="check_conexion" class="form-check-input"> Checar Conectividade
            </div>
            <div class="mt-3 col-md-3">
                <label for="timeout_graphics" class="form-label">Timeout Gráfico de Coleta de Sinal:</label>
                <input type="text" class="form-control" name="timeout_graphics" id="timeout_graphics">
            </div>
            <div class="mt-3 col-md-3">
                <label for="ip_address_access" class="form-label">Endereço IP de Acesso - Importação:</label>
                <input type="text" class="form-control" name="ip_address_access" id="ip_address_access">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-12">
                <label for="access_type" class="form-label">Tipo de Acesso - Importação:</label>
                <select class="form-control select2" name="access_type" id="access_type">
                    <option selected>Selecione a importação</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="access_port" class="form-label">Porta de Acesso - Importação:</label>
                <input type="text" class="form-control" name="access_port" id="access_port">
            </div>
            <div class="mt-3 col-md-4">
                <label for="access_user" class="form-label">Usuário de acesso - Importação:</label>
                <input type="text" class="form-control" name="access_user" id="access_user">
            </div>
            <div class="mt-3 col-md-4">
                <label for="access_password" class="form-label">Senha de Acesso - Importação:</label>
                <input type="text" class="form-control" name="access_password" id="access_password">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-12">
                <label for="short_code" class="form-label">ShortCode</label>
                <input type="text" class="form-control" name="short_code" id="short_code">
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