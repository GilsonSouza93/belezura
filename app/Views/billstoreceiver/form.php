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
                <label for="typo" class="form-label">Empresa</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione a empresa</option>
                    <option value="1">Provedor teste</option>
                    <option value="2">Provedor Home telecomunicações</option>
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
                <label for="typo" class="form-label">Fornecedor</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o Fornecedor</option>
                    <option value="1">Home telecomunicações</option>
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
            <div class="mt-5 col-md-2 py-2 px-5 form-check">
                <label class="form-check-label" for="flexCheckDefault"></label>
                <input type="checkbox" class="form-check-input" name="" id="" checked> Valor Fixo:
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
            <div class="mt-3 col-md-3">
                <label for="typo" class="form-label">Tipo do documento</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o tipo de pagamento</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="name" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="name" class="form-label">Nota fiscal</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="date" class="form-label">Data de emissão</label>
                <input type="date" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-6">
                <label for="date" class="form-label">Vencimento</label>
                <input type="date" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6 form-check">
                <label for="typo" class="form-label">Tipo de Parcela</label>
                    <select class="form-control" aria-label="Default select example">
                        <option selected>Selecione o tipo de parcela</option>
                        <option value="1">Fixo</option>
                        <option value="1">Dinâmico</option>
                    </select>
                </div>
            </div>
        </div>

    </form>
</div>
<?= $this->endSection() ?>