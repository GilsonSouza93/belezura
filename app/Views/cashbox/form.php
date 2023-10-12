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
            <button class="btn btn-success" id="submit-btn" >Salvar</button>
        </div>
    </div>

    <form class="card p-4">
        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

        <div class="row">
            <div class="mt-3 col-md-2">
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-control" id="tipo" aria-label="Default select example">
                    <option selected>Selecione se é entrada ou saída</option>
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control" id="pop" aria-label="Default select example">
                    <option selected>Selecione o local POP</option>
                    <option value="1">Caruaru</option>
                    <option value="2">Olinda</option>
                    <option value="2">Recife</option>
                    <option value="2">Surubim</option>
                    <option value="2">Garanhuns</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="pontoDePagamento" class="form-label">Ponto de pagamento</label>
                <select class="form-control" id="pontoDePagamento" aria-label="Default select example">
                    <option selected>Selecione o ponto de pagamento</option>
                    <option value="1">Principal</option>
                    <option value="2">Caixa reserva</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="plandoDeConta" class="form-label">Plano de contas</label>
                <select class="form-control" id="planoDeConta" aria-label="plano de conta">
                    <option selected>Selecione o ponto de contas</option>
                    <option value="1">Principal</option>
                    <option value="2">Caixa reserva</option>
                </select>
            </div>
            <div class="mt-3 col-md-2">
                <label for="formaDePagamento" class="form-label">Forma de pagamento</label>
                <select class="form-control" id="formaDePagamento" aria-label="forma de pagamento">
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
                <label for="valor" class="form-label">Valor</label>
                <input type="text" id="valor" class="form-control" name="name" placeholder="">
            </div>
        </div>

    
        <div class="row">
        <div class="mt-4 col-md-6">
                <label for="name" class="form-label">Comprovante</label>
                <input type="file" class="btn btn-outline-secondary" name="comprovante" id="comprovante">
            </div>
            <div class="mt-3 col-md-6">
                <label for="dataCompetencia" class="form-label">Data da competência</label>
                <input type="date" id="dataCompetencia" class="form-control" name="name" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" id="observacao" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="dadosAbstratos" class="form-label">Dados Abstratos</label>
                <input type="text" id="dadosAbstratos" class="form-control" name="name" placeholder="">
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