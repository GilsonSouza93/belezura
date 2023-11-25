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
                    Editar Lançamento
                <?php else : ?>
                    Novo Lançamento
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
                <select class="form-control select2" aria-label="empresa" id="empresa" name="empresa" >
                    <option selected>Selecione a Empresa</option>
                    <option value="1">Provedor Teste</option>
                    <option value="2">Provedor Home telecomunicações</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control" id="pop" aria-label="pop" name="pop" >
                    <option selected>Selecione o local POP</option>
                    <option value="1">Caruaru</option>
                    <option value="2">Olinda</option>
                    <option value="2">Recife</option>
                    <option value="2">Surubim</option>
                    <option value="2">Garanhuns</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
<<<<<<< Updated upstream
                <label for="supplier" class="form-label">Fornecedor</label>
                <select class="form-control" id="supplier" aria-label="supplier" name="supplier">
=======
                <label for="fornecedor" class="form-label">Fornecedor</label>
                <select class="form-control" id="supplier_id" aria-label="fornecedor" name="supplier_id">
>>>>>>> Stashed changes
                    <option selected>Selecione o Fornecedor</option>
                    <option value="1">Home Telecomunicações</option>
                </select>
            </div>

            <div class="mt-3 col-md-2">
                <label for="payment_form" class="form-label">Forma de pagamento</label>
                <select class="form-control" id="payment_form" aria-label="payment_form" name="payment_form" >
                    <option selected>Selecione a forma de pagamento</option>
                    <option value="1">Pix</option>
                    <option value="2">Caixa Reserva</option>
                    <option value="1">Dinheiro</option>
                    <option value="1">Débito</option>
                    <option value="1">Crédito</option>
                    <option value="1">Cheque</option>
                </select>
            </div>
            <div class="mt-5 col-md-2 py-2 px-5 form-check">
                <label class="form-check-label" for="fix_value"></label>
                <input type="checkbox" class="form-check-input" name="fix_value" id="fix_value" checked> Valor Fixo:
            </div>
            <div class="mt-3 col-md-2">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" class="form-control" id="value" name="value" placeholder="">
            </div>
        </div>

        

        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" id="obs" class="form-control" name="obs" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="doc_type" class="form-label">Tipo Do Documento</label>
                <select class="form-control select2" name="doc_type" id="doc_type" aria-label="tipo do documento">
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
                <label for="issue" class="form-label">Data de Emissão</label>
                <input type="date" id="issue" class="form-control" name="issue" placeholder="">
            </div>
        </div>
        <div class="row">
        <div class="mt-3 col-md-6">
                <label for="payout" class="form-label">Vencimento</label>
                <input type="date" id="payout" class="form-control" name="payout" placeholder="">
            </div>
            <div class="mt-3 col-md-6 form-check">
                <label for="installment" class="form-label">Tipo de Parcela</label>
                    <select class="form-control select2" name="installment" id="installment" aria-label="Default select example">
                        <option selected>Selecione o Tipo de Parcela</option>
                        <option value="1">Fixo</option>
                        <option value="2">Dinâmico</option>
                    </select>
                </div>
            </div>
        </div>

    </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>

    const submitBtn = document.querySelector('#submit-btn');
    const form = document.querySelector('form');
    const url = '<?= $baseRoute ?>/save';

    submitBtn.addEventListener('click', event => {
        event.preventDefault();
        showLoading();

        const formData = new FormData(form);

        fetch(url, {
            method: 'POST',
            body: formData
        }).then(response => response.json())
        .then(data => {
            hideLoading();
            if (data.error) {
                showToast(data.message, 'error');
            } else {
                showToast(data.message, 'success');
                window.location.href = '<?= $baseRoute ?>';
            }
        }).catch(error => {
            console.log(error);
        });
    });


</script>

<?= $this->endSection() ?>