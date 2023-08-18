<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Boletos me Lote</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Bairro</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Rua</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">POP</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o local POP</option>
                    <option value="1">Caruaru</option>
                    <option value="2">Olinda</option>
                    <option value="2">Recife</option>
                    <option value="2">Surubim</option>
                    <option value="2">Garanhuns</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">NAS</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o NAS</option>
                    <option value="1">Monsenhor Tabosa</option>
                    <option value="1">Ria Rural</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Parcela</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Portador</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione a instituição</option>
                    <option value="1">Banco Bradesco</option>
                    <option value="2">Caixa Economica Federa</option>
                    <option value="3">Banco do Brasil</option>                    
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Mês/ano</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o período</option>
                    <option value="1">08/2023</option>
                    <option value="2">09/2023</option>
                    <option value="3">10/2023</option>
                    <option value="4">11/2023</option>
                    <option value="5">12/2023</option>                  
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Vencimento</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o dia do vencimento</option>
                    <option value="1">5</option>
                    <option value="1">10</option>
                    <option value="1">15</option>
                    <option value="1">20</option>
                    <option value="1">25</option>
                    <option value="1">30</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="typo" class="form-label">Plano</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o Plano</option>
                    <option value="1">100mb -</option>
                    <option value="2">50 mb</option>
                    <option value="3">1GB</option>
                    <option value="3">Rádio - 1GB</option>
                </select>
            </div>
            <div class="mt-3 col-md-6">
                <label for="typo" class="form-label">Condominio</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o condominio</option>
                    <option value="1">Edf. Luis castro - Monsenhor Tabosa</option>
                    <option value="1">VogVille - Caruaru</option>
                </select>
            </div>
        </div>


        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Data Cad. Inicial:</label>
                <input type="date" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Data Cad. Final:</label>
                <input type="date" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-5 col-md-3">
                <label for="name" class="form-label"></label>
                <input type="checkbox" name="" id=""> Exibe Carnê em aberto
            </div>
            <div class="mt-5 col-md-3">
                <label for="name" class="form-label"></label>
                <input type="checkbox" name="" id=""> Gerar PIX
            </div>
        </div>

        

        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="typo" class="form-label">Observação</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="name" class="form-label">Valor</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="name" class="form-label">Data da competência</label>
                <input type="date" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="typo" class="form-label">Títulos Emitidos (Não) - Inicial:</label>
                <input type="date" class="form-control" name="" id="" >
            </div>
            <div class="mt-3 col-md-6">
                <label for="typo" class="form-label">Títulos Emitidos (Não) - Final:</label>
                <input type="date" class="form-control" name="" id="" >
            </div>
        </div>

    </form>
</div>
<?= $this->endSection() ?>