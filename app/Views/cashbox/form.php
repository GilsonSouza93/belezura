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
            <div class="mt-3 col-md-2">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione se é entrada ou saída</option>
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
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
            <div class="mt-3 col-md-2">
                <label for="typo" class="form-label">Ponto de pagamento</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o ponto de pagamento</option>
                    <option value="1">Principal</option>
                    <option value="2">Caixa reserva</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="typo" class="form-label">Plano de contas</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o ponto de contas</option>
                    <option value="1">Principal</option>
                    <option value="2">Caixa reserva</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="typo" class="form-label">Forma de pagamento</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o ponto de contas</option>
                    <option value="1">Pix</option>
                    <option value="2">Caixa reserva</option>
                    <option value="1">Dinheiro</option>
                    <option value="1">Débito</option>
                    <option value="1">Crédito</option>
                    <option value="1">Cheque</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="typo" class="form-label">Valor</label>
                <input type="text" class="form-control" name="name" placeholder="">
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
            <div class="mt-3 col-md-12">
                <label for="name" class="form-label">Comprovante</label>
                <input type="file" class="btn btn-outline-secondary" name="comprovante" id="comprovante">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="name" class="form-label">Observação</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="name" class="form-label">Dados Abstratos</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>


    </form>
</div>
<?= $this->endSection() ?>