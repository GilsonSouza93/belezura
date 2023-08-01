<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar ONU</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o nome">
            </div>
            <div class="mt-3 col-md-4">
                <label for="host" class="form-label">Host</label>
                <input type="text" class="form-control" name="model" placeholder="Insira o host">
            </div>
            <div class="mt-3 col-md-4">
                <label for="slot" class="form-label">Slot</label>
                <input type="text" class="form-control" name="price" placeholder="Insira o slot">
            </div>

        </div>

        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="typo" class="form-label">Tipo</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o tipo</option>
                    <option value="1">FiberHome</option>
                    <option value="2">FibeHome RP1000</option>
                    <option value="2">FibeHome RP1000 551606</option>
                    <option value="2">Hauwei</option>
                    <option value="2">ZTE</option>
                    <option value="2">DataCom</option>
                    <option value="2">Parks</option>
                    <option value="2">Nokia</option>
                    <option value="2">Outros</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="user" class="form-label">Usuário</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Digite o nome do usuário">
            </div>
            <div class="mt-3 col-md-4">
                <label for="password" class="form-label">Senha</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Digite uma senha para o usuário">
            </div>
            <div class="mt-3 col-md-4">
                <label for="password_admin" class="form-label">Senha do admin</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Insiria a senha do admin">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="user" class="form-label">SNMP Versão</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Digite a SNMP">
            </div>
            <div class="mt-3 col-md-3">
                <label for="password" class="form-label">SNMP Community</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Digite a Community">
            </div>
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label">SNMP Porta</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Insiria a Porta">
            </div>
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label">Latitude, Longitude</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Insiria a latitude e a longitude">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="" class="form-label"></label>
                <input type="checkbox" name="debug"> Debug
            </div>
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label"></label>
                <input type="checkbox" name="debug"> Auto Salvar?
            </div>
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label"></label>
                <input type="checkbox" name="debug"> Requer ONU Template?
            </div>
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label"></label>
                <input type="checkbox" name="debug"> Requer Definir CTO na Autorização?
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label"></label>
                <input type="checkbox" name="debug"> Requer Definir Serviço na autorização?
            </div>
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label"></label>
                <input type="checkbox" name="debug"> Requer Definir VLAN Manualmente ?
            </div>
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label"></label>
                <input type="checkbox" name="debug"> Desativar ONU:
            </div>
            <div class="mt-3 col-md-3">
                <label for="password_admin" class="form-label"></label>
                <input type="checkbox" name="debug"> Filtrar por POP?
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="protocol" class="form-label">POPs</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o POP</option>
                    <option value="1">Caruaru - PE</option>
                    <option value="2">SHH</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="sinal_lote" class="form-label"></label>
                <input type="checkbox" name="debug"> Coletar sinal do lote
            </div>
            <div class="mt-3 col-md-3">
                <label for="ativa" class="form-label"></label>
                <input type="checkbox" name="debug"> Ativa?
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="thel" class="form-label">Telnet/SSH Porta</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Digite o Telnet">
            </div>
            <div class="mt-3 col-md-6">
                <label for="protocol" class="form-label">Protocolo</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione protoloco</option>
                    <option value="1">Telnet</option>
                    <option value="2">SHH</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="obs" class="form-label">Observações</label>
                <input type="text" class="form-control" name="observacoes" placeholder="Observações">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">TL1 IP</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">TL1 Porta</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">TL1 Usuário</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">TL1 Senha</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="thel" class="form-label">Aguardar</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="thel" class="form-label">Parâmetros</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Integração</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="filtro" class="form-label"></label>
                <input type="checkbox" name="filtro">Filtrar Templete
            </div>
            <div class="mt-3 col-md-4">
                <label for="filtro" class="form-label"></label>
                <input type="checkbox" name="filtro">Filtrar tipos de ONU
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Limite do Sinal Alto</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Insira o limite do sinal">
            </div>
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Limite do Sinal baixo</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="Insira o limite do sinal">
            </div>
            <div class="mt-3 col-md-2">
                <label for="thel" class="form-label">Cor do sinal alto</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione a cor</option>
                    <option value="1">Azul</option>
                    <option value="2">Preto</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="thel" class="form-label">Cor do sinal baixo</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione a cor</option>
                    <option value="1">Azul</option>
                    <option value="2">Preto</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">Voip IP</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">Voip Máscara</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">Voip Gateway</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">Porta Voip</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="thel" class="form-label">Parâmetros JSON</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Comando para Ativar Serviço</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o comando</option>
                    <option value="1">CMD 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Comando para Suspender Serviço</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o comando</option>
                    <option value="1">CMD 01</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Comando para Alterar Plano</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o comando</option>
                    <option value="1">CMD 01</option>
                </select>
            </div>
        </div>

    </form>
</div>
<?= $this->endSection() ?>