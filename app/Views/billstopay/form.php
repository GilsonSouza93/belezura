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
            <button class="btn btn-success" id="submit-btn">Salvar</button>
        </div>
    </div>

    <form>

        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

        <div class="row">
            <div class="mt-3 col">
                <div class="form-floating">
                    <select class="form-select" id="pop_id" name="pop_id">
                        <?php foreach ($pops as $item) : ?>
                            <option value="<?= $item['id'] ?>"><?= $item['city'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <label for="pop">POP</label>
                </div>
            </div>
            <div class="mt-3 col">
                <div class="form-floating">
                    <select class="form-select" id="suppliers_id" name="suppliers_id" required>
                        <?php foreach ($suppliers as $supplier) : ?>
                            <option value="<?= $supplier['id'] ?>"><?= $supplier['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="suppliers_id">Fornecedor</label>
                </div>
            </div>

            <div class="mt-3 col">
                <div class="form-floating">
                    <select class="form-select" id="payment_form" aria-label="payment_form" name="payment_form">
                        <option value="1">Pix</option>
                        <option value="2">Caixa Reserva</option>
                        <option value="1">Dinheiro</option>
                        <option value="1">Débito</option>
                        <option value="1">Crédito</option>
                        <option value="1">Cheque</option>
                    </select>
                    <label for="payment_form">Forma de pagamento</label>
                </div>
            </div>
            <div class="mt-3 col">
                <div class="form-floating">
                    <input type="text" class="form-control currency_auto_numeric" id="value" name="value" placeholder="value">
                    <label for="valor">Valor</label>
                </div>
            </div>
            <div class="mt-5 col py-2 px-5 form-check">
                <label class="form-check-label" for="fix_value"></label>
                <input type="checkbox" class="form-check-input" name="fix_value" id="fix_value" checked> Valor Fixo:
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating">
                    <textarea class="form-control" id="obs" name="obs" placeholder="Digite aqui"></textarea>
                    <label for="obs">Observações</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <textarea class="form-control" id="description" name="description" placeholder="Digite aqui"></textarea>
                    <label for="description">Descrição</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
            <div class="form-floating">                
                <select class="form-select" name="doc_type" id="doc_type" aria-label="tipo do documento">
                    <option value="1">Boleto</option>
                    <option value="2">Dinheiro</option>
                    <option value="3">Cheque</option>
                    <option value="4">Pix</option>
                    <option value="5">Transferência</option>
                    <option value="6">Cartão de Crédito</option>
                    <option value="7">Cartão de Débito</option>
                </select>
                <label for="doc_type">Tipo Do Documento</label>
                </div>
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