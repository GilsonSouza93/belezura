<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">

            <h4>
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
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-control select2" id="cashbox_type" name="cashbox_type">
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control select2" id="cashbox_pop" name="cashbox_pop">
                    <option selected>Selecione o Local POP</option>
                    <?php foreach ($pops as $pop) : ?>
                    <option value="<?= $pop['id'] ?>"><?= $pop['city'] ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="pontoDePagamento" class="form-label">Ponto de Pagamento</label>
                <select class="form-control select2" id="cashbox_pointpayment" name="cashbox_pointpayment" >
                    <option selected>Selecione o Ponto de Pagamento</option>
                    <option value="1">Principal</option>
                    <option value="2">Caixa Reserva</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col">
                <label for="plandoDeConta" class="form-label">Plano de Contas</label>
                <select class="form-control select2" name="cashbox_paymentplains" id="cashbox_paymentplains">
                    <option selected>Selecione o Ponto de Contas</option>
                    <option value="1">Principal</option>
                    <option value="2">Caixa Reserva</option>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="formaDePagamento" class="form-label">Forma de Pagamento</label>
                <select class="form-control select2" name="cashbox_paymentform" id="cashbox_paymentform">
                    <option selected>Selecione o Ponto de Contas</option>
                    <option value="1">Pix</option>
                    <option value="2">Caixa Reserva</option>
                    <option value="1">Dinheiro</option>
                    <option value="1">Débito</option>
                    <option value="1">Crédito</option>
                    <option value="1">Cheque</option>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" id="cashbox_value" class="form-control" name="cashbox_value">
            </div>
        </div>

        <div class="row">
            <div class="mt-4 col-md-6">
                <label for="name" class="form-label">Comprovante</label>
                <input type="file" class="btn btn-outline-secondary form-control" name="cashbox_checkingcopy" id="cashbox_checkingcopy">
            </div>
            <div class="mt-3 col-md-6">
                <label for="dataCompetencia" class="form-label">Data da Competência</label>
                <input type="date" name="cashbox_competitiondate" class="form-control" name="cashbox_competitiondate" >
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" name="cashbox_observation" class="form-control" id="cashbox_observation" >
            </div>
            <div class="mt-3 col-md-6">
                <label for="dadosAbstratos" class="form-label">Dados Abstratos</label>
                <input type="text" id="cashbox_dataabstrata" class="form-control" name="c0ashbox_dataabstrata" >
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