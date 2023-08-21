<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Ip Pool</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>


        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="city" class="form-label">Cidade</label>
                <input type="text" id="city" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="populacao" class="form-label">População</label>
                <input type="text" id="populacao" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="name" class="form-label">Código IBGE</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="uf" class="form-label">UF</label>
                <select class="form-control" id="uf">
                    <option selected>-------</option>
                    <option value="1">PE</option>
                    <option value="2">AL</option>
                    <option value="3">BA</option>
                    <option value="4">PB</option>
                </select>
            </div>
        </div>    
           
        <div class="row">
            <div class="mt-3 col-md-9">
                <label for="portador" class="form-label">Portador Padrão</label>
                <select class="form-control" id="portador">
                    <option selected>-------</option>
                    <option value="1">Banco do Brasil</option>
                    <option value="2">Caixa Economica Federal</option>
                    <option value="3">Banco do Nordente</option>
                    <option value="4">Banco Itau</option>
                </select>
            </div>
            <div class="mt-5 col-md-3 py-1 form-check">
                <label class="form-check-label" for="activePop"></label>
                <input type="checkbox" class="form-check-input" name="" id="activePop"  checked>Ativo
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="plano" class="form-label">Plano</label>
                <select class="form-control" aria-label="Plano" id="plano" >
                    <option selected>Selecione o Plano</option>
                    <option value="1">100mb -</option>
                    <option value="2">50 mb</option>
                    <option value="3">1GB</option>
                    <option value="3">Rádio - 1GB</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="nas" class="form-label">NAS</label>
                <select class="form-control" aria-label="Default select example" id="nas" >
                    <option selected>Selecione o NAS</option>
                    <option value="1">Monsenhor Tabosa</option>
                    <option value="1">Ria Rural</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="user" class="form-label">Usuário</label>
                <select class="form-control" aria-label="status do contrato" id="user">
                    <option selected>----------</option>
                    <option value="1">SGP</option>
                    <option value="2">Tecnico</option>
                    <option value="3">Fabiana - Financeiro</option>
                    <option value="2">Eduarda - Financeiro</option>
                    <option value="2">Inviabilidade Tec.</option>
                </select>
            </div>>

        </div>


    </form>
</div>
<?= $this->endSection() ?>