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
                <select class="form-control select2" id="empresa" aria-label="empresa">
                    <option selected>Selecione a Empresa</option>
                    <option value="1">Provedor Teste</option>
                    <option value="2">Provedor Home Telecomunicações</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control select2" id="pop" aria-label="pop">
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
                <select class="form-control select2" id="fornecedor" aria-label="fornececdor">
                    <option selected>Selecione o Fornecedor</option>
                    <option value="1">Home telecomunicações</option>
                </select>
            </div>

            <div class="mt-3 col-md-2">
                <label for="formaDePagamento" class="form-label">Forma de Pagamento</label>
                <select class="form-control select2" id="formaDePagamento" aria-label="Default select example">
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
                <label class="form-check-label" for="valorFixo"></label>
                <input type="checkbox" id="valorFixo" class="form-check-input" name="" id="" checked> Valor Fixo:
            </div>
            <div class="mt-3 col-md-2">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" id="valor" class="form-control" name="name" placeholder="">
            </div>
        </div>

        

        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" id="observacao" class="form-control" name="name" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="tipoDoDocumento" class="form-label">Tipo do Documento</label>
                <select class="form-control select2" id="tipoDoDocumento" aria-label="Default select example">
                    <option selected>Selecione o Tipo de Pagamento</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" id="descricao" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="notaFiscal" class="form-label">Nota Fiscal</label>
                <input type="text" id="notaFiscal" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="dataDeEmissao" class="form-label">Data de Emissão</label>
                <input type="date" id="dataDeEmissao" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-6">
                <label for="vencimento" class="form-label">Vencimento</label>
                <input type="date" id="vencimento" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6 form-check">
                <label for="tipoDeParcela" class="form-label">Tipo de Parcela</label>
                    <select class="form-control select2" id="tipoDeParcela" aria-label="Tipo de parcela">
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