<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Lançamento</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="grupo" class="form-label">Grupo</label>
                <select class="form-control" id="grupo" aria-label="Default select example">
                    <option selected>Selecione se é entrada ou saída</option>
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" id="descricao" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-5 col-md-4 form-check">
                <label class="form-check-label" for="flexCheckDefault"></label>
                <input type="checkbox" class="form-check-input" name="" id=""  checked> Disponível:
            </div>
        </div>

    
        <div class="row">
        <div class="mt-4 col-md-6">
                <label for="name" class="form-label">Comprovante</label>
                <input type="file" class="btn btn-outline-secondary" name="comprovante" id="comprovante">
            </div>
            <div class="mt-3 col-md-6">
                <label for="dataCompetencia" class="form-label">Data da competência</label>
                <input type="date" id="dataCompetencia" class="form-control" name="name" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" id="observacao" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="dadosAbstratos" class="form-label">Dados Abstratos</label>
                <input type="text" id="dadosAbstratos" class="form-control" name="name" placeholder="">
            </div>
        </div>


    </form>
</div>
<?= $this->endSection() ?>