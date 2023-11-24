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
                    Editar Contas a Receber
                <?php else : ?>
                    Nova Conta a Receber
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
            <div class="mt-3 col-md-2">
                <label for="empresa" class="form-label">Empresa</label>
                <select class="form-control select2" id="company_id" aria-label="empresa" name="company_id">
                    <option selected>Selecione a Empresa</option>
                    <option value="1">Provedor Teste</option>
                    <option value="2">Provedor Home Telecomunicações</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control select2" id="pop" aria-label="pop" name="pop" >
                    <option selected>Selecione o Local POP</option>
                    <option value="1">Caruaru</option>
                    <option value="2">Olinda</option>
                    <option value="2">Recife</option>
                    <option value="2">Surubim</option>
                    <option value="2">Garanhuns</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="supplier" class="form-label">Fornecedor</label>
                <select class="form-control select2" id="supplier" aria-label="supplier" name="supplier" >
                    <option selected>Selecione o Fornecedor</option>
                    <option value="1">Home telecomunicações</option>
                </select>
            </div>

            <div class="mt-3 col-md-2">
                <label for="form_payment" class="form-label">Forma de Pagamento</label>
                <select class="form-control select2" id="form_payment" aria-label="Default select example" name="form_payment" >
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
                <label class="form-check-label" for="fix_value"></label>
                <input type="checkbox" id="fix_value" class="form-check-input" name="fix_value" checked> Valor Fixo:
            </div>
            <div class="mt-3 col-md-2">
                <label for="value" class="form-label">Valor</label>
                <input type="text" id="value" class="form-control" name="value" placeholder="">
            </div>
        </div>

        

        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="obs" class="form-label">Observação</label>
                <input type="text" id="obs" class="form-control" name="obs" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="doc_type" class="form-label">Tipo do Documento</label>
                <select class="form-control select2" id="doc_type" aria-label="Default select example" name="doc_type" >
                    <option selected>Selecione o Tipo de Pagamento</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" id="description" class="form-control" name="description" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="invoice" class="form-label">Nota Fiscal</label>
                <input type="text" id="invoice" class="form-control" name="invoice" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="date_issue" class="form-label">Data de Emissão</label>
                <input type="date" id="date_issue" class="form-control" name="date_issue" placeholder="">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-6">
                <label for="payout" class="form-label">Vencimento</label>
                <input type="date" id="payout" class="form-control" name="payout" placeholder="">
            </div>
            <div class="mt-3 col-md-6 form-check">
                <label for="portion" class="form-label">Tipo de Parcela</label>
                    <select class="form-control select2" id="portion" aria-label="Tipo de parcela" name="portion" >
                        <option selected>Selecione o Tipo de Parcela</option>
                        <option value="1">Fixo</option>
                        <option value="1">Dinâmico</option>
                    </select>
                </div>
            </div>
        </div>

    </form>
</div>
<?= $this->endSection() ?>