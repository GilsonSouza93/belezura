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
                <select class="form-control select2" name="tipo">
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control select2" name="pop">
                    <option selected>Selecione o Local POP</option>
                    <?php foreach ($pops as $pop) : ?>
                    <option value="<?= $pop['id'] ?>"><?= $pop['city'] ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="pontoDePagamento" class="form-label">Ponto de Pagamento</label>
                <select class="form-control select2" name="pontoDePagamento">
                    <option selected>Selecione o Ponto de Pagamento</option>
                    <option value="1">Principal</option>
                    <option value="2">Caixa Reserva</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col">
                <label for="plandoDeConta" class="form-label">Plano de Contas</label>
                <select class="form-control select2" name="planoDeConta">
                    <option selected>Selecione o Ponto de Contas</option>
                    <option value="1">Principal</option>
                    <option value="2">Caixa Reserva</option>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="formaDePagamento" class="form-label">Forma de Pagamento</label>
                <select class="form-control select2" name="formaDePagamento">
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
                <input type="text" id="valor" class="form-control" name="valor">
            </div>
        </div>

        <div class="row">
            <div class="mt-4 col-md-6">
                <label for="name" class="form-label">Comprovante</label>
                <input type="file" class="btn btn-outline-secondary form-control" name="comprovante" id="comprovante">
            </div>
            <div class="mt-3 col-md-6">
                <label for="dataCompetencia" class="form-label">Data da Competência</label>
                <input type="date" name="dataCompetencia" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" name="observacao" class="form-control">
            </div>
            <div class="mt-3 col-md-6">
                <label for="dadosAbstratos" class="form-label">Dados Abstratos</label>
                <input type="text" id="dadosAbstratos" class="form-control">
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