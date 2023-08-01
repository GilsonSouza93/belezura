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
    </form>

</div>
<?= $this->endSection() ?>