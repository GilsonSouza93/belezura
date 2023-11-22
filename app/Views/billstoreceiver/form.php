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
                <select class="form-control select2" id="pop_id" aria-label="pop" name="pop_id" >
                    <option selected>Selecione o Local POP</option>
                    <option value="1">Caruaru</option>
                    <option value="2">Olinda</option>
                    <option value="2">Recife</option>
                    <option value="2">Surubim</option>
                    <option value="2">Garanhuns</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="forncedor" class="form-label">Fornecedor</label>
                <select class="form-control select2" id="supplier_id" aria-label="fornececdor" name="supplier_id" >
                    <option selected>Selecione o Fornecedor</option>
                    <option value="1">Home telecomunicações</option>
                </select>
            </div>

            <div class="mt-3 col-md-2">
                <label for="formaDePagamento" class="form-label">Forma de Pagamento</label>
                <select class="form-control select2" id="billstoreceiver_form" aria-label="Default select example" name="billstoreceiver_form" >
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
                <label class="form-check-label" for="billstoreceiver_valuefixed"></label>
                <input type="checkbox" id="billstoreceiver_valuefixed" class="form-check-input" name="billstoreceiver_valuefixed" checked> Valor Fixo:
            </div>
            <div class="mt-3 col-md-2">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" id="billstoreceiver_value" class="form-control" name="billstoreceiver_value" placeholder="">
            </div>
        </div>

        

        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" id="billstoreceiver_description" class="form-control" name="billstoreceiver_description" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="tipoDoDocumento" class="form-label">Tipo do Documento</label>
                <select class="form-control select2" id="billstoreceiver_doctype" aria-label="Default select example" name="billstoreceiver_doctype" >
                    <option selected>Selecione o Tipo de Pagamento</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" id="billstoreceiver_description" class="form-control" name="billstoreceiver_description" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="notaFiscal" class="form-label">Nota Fiscal</label>
                <input type="text" id="billstoreceiver_invoice" class="form-control" name="billstoreceiver_invoice" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="dataDeEmissao" class="form-label">Data de Emissão</label>
                <input type="date" id="billstoreceiver_emissiondate" class="form-control" name="billstoreceiver_emissiondate" placeholder="">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-6">
                <label for="vencimento" class="form-label">Vencimento</label>
                <input type="date" id="billstoreceiver_payout" class="form-control" name="billstoreceiver_payout" placeholder="">
            </div>
            <div class="mt-3 col-md-6 form-check">
                <label for="tipoDeParcela" class="form-label">Tipo de Parcela</label>
                    <select class="form-control select2" id="billstoreceiver_potiontype" aria-label="Tipo de parcela" name="billstoreceiver_potiontype" >
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