<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Radius</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="pop" class="form-label">POP'S</label>
                <input type="text" class="form-control" name="name" placeholder="Insira a POP">
            </div>
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">IP POLL</label>
                <select class="form-control" aria-label="Default select example">
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
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">IPv6 PD Pool:</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o IP POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">IP Pool Bloqueio:</label>
                <select class="form-control" aria-label="Default select example">
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
                <label for="IP" class="form-label">Nome do indentificador</label>
                <input type="text" class="form-control" name="name" placeholder="Insira nome para indentificar">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Tipo:</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o tipo">
            </div>
            <div class="mt-3 col-md-3">
                <label for="IP" class="form-label">Palavra secreta</label>
                <input type="text" class="form-control" name="name" placeholder="Insira a palavra passe">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Porta de requisição NAS</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">IP de requisição NAS</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">IP de origem Ping</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">Tipo de acesso exta:</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o IPv6 prefixo POOL</option>
                    <option value="1">IP 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-6">
                <label for="tipo" class="form-label">Radius config:</label>
                <select class="form-control" aria-label="Default select example">
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
                <label for="IP" class="form-label">DNS primário:</label>
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
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Porta</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Latitude, longitudo</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> Ativar no radius
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> Disponível para cliente
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> Verificar login
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> Verificar Mac
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> Verificar Mac+Login
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> RRd Interfaces
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Parâmetros do JSON:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> Auto Reload
            </div>
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Simutaneos User por Login:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> Checar Radius
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="IP" class="form-label">Timeout de Checagem de Conexão</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-2">
                <label for="IP" class="form-label"></label>
                <input type="checkbox" name="" id=""> Checar conectividade
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
                <select class="form-control" aria-label="Default select example">
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