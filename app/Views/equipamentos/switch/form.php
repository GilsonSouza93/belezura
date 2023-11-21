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
                    Editar Cliente
                <?php else : ?>
                    Novo Cliente
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
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">Fonte</label>
                <select class="form-control select2" aria-label="Default select example">
                    <option selected>Selecione a Fonte</option>
                    <option value="1">Fonte 01</option>
                    <option value="1">Fonte 02</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="name" class="form-label">Código</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o código da onu">
            </div>
            <div class="mt-3 col-md-3">
                <label for="model" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="model" placeholder="Insira a descrição">
            </div>
            <div class="mt-3 col-md-3">
                <label for="qty" class="form-label">Portas</label>
                <input type="text" class="form-control" name="qty" placeholder="Insira a porta">
            </div>

        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="price" class="form-label">Parâmetros</label>
                <input type="text" class="form-control" name="price" placeholder="Insira o parâmetro">
            </div>
            <div class="mt-3 col-md-6">
                <label for="id_valor_custo" class="form-label">Olts</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="OLTS">
            </div>
        </div>


    </form>


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