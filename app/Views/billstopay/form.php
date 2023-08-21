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
                <label for="empresa" class="form-label">Empresa</label>
                <select class="form-control" aria-label="empresa" id="empresa" >
                    <option selected>Selecione a empresa</option>
                    <option value="1">Provedor teste</option>
                    <option value="2">Provedor Home telecomunicações</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control" id="pop" aria-label="pop">
                    <option selected>Selecione o local POP</option>
                    <option value="1">Caruaru</option>
                    <option value="2">Olinda</option>
                    <option value="2">Recife</option>
                    <option value="2">Surubim</option>
                    <option value="2">Garanhuns</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="fornecedor" class="form-label">Fornecedor</label>
                <select class="form-control" id="fornecedor" aria-label="fornecedor">
                    <option selected>Selecione o Fornecedor</option>
                    <option value="1">Home telecomunicações</option>
                </select>
            </div>

            <div class="mt-3 col-md-2">
                <label for="formaDePagamento" class="form-label">Forma de pagamento</label>
                <select class="form-control" id="formaDePagamento" aria-label="forma de pagamento">
                    <option selected>Selecione a forma de pagamento</option>
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
                <input type="checkbox" class="form-check-input" name="" id="valorFixo" checked> Valor Fixo:
            </div>
            <div class="mt-3 col-md-2">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valor" name="name" placeholder="">
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
                <label for="tipoDoDocumento" class="form-label">Tipo do documento</label>
                <select class="form-control" id="tipoDoDocumento" aria-label="tipo do documento">
                    <option selected>Selecione o tipo de pagamento</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" id="descricao" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="notaFiscal" class="form-label">Nota fiscal</label>
                <input type="text" id="notaFiscal" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="dataDeEmissao" class="form-label">Data de emissão</label>
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
                    <select class="form-control" id="tipoDeParcela" aria-label="Default select example">
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