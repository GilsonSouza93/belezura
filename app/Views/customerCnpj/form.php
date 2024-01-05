<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">
    <h2>
        <?php if (isset($register)) : ?>
            Editar Cliente
        <?php else : ?>
            Novo Cliente
        <?php endif ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8"></div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id='submit-btn'>Salvar</button>
        </div>
    </div>

    <form>

        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

        <h4>
            Informações Gerais
        </h4>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="corporate_reason" class="form-control" name="corporate_reason" placeholder="Razão social" value="<?= isset($register) ? $register->corporate_reason : '' ?>" required>
                    <label for="corporate_reason">Razão Social</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="fantasy_name" class="form-control" name="fantasy_name" placeholder="Nome Fantasia" value="<?= isset($register) ? $register->fantasy_name : '' ?>">

                    <label for="fantasy_name">Nome Fantasia</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="responsible" class="form-control" name="responsible" placeholder="Responsável" value="<?= isset($register) ? $register->responsible : '' ?>">

                    <label for="responsible">Responsável</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="cpf_responsible" class="form-control" name="cpf_responsible" placeholder="CPF do Responsável" value="<?= isset($register) ? $register->cpf_responsible : '' ?>" required>

                    <label for="cpf_responsible">CPF do Responsável</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="cpnj" class="form-control" name="cpnj" placeholder="CNPJ" value="<?= isset($register) ? $register->cnpj : '' ?>">
                    <label for="cpnj">CNPJ</label>
                </div>
            </div>

            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="date" class="form-control" name="foundation_date" id="foundation_date" placeholder="Data Fundação" value="<?= isset($register) ? $register->foundation_date : '' ?>">
                    <label for="foundation_date">Data Fundação</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="state_registration" name="state_registration" placeholder="Inscrição Estadual" value="<?= isset($register) ? $register->state_registration : '' ?>">
                    <label for="state_registration">Inscrição Estadual</label>
                </div>
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="municipal_registration" name="municipal_registration" placeholder="Inscrição Municipal" value="<?= isset($register) ? $register->municipal_registration : '' ?>">
                    <label for="municipal_registration">Inscrição Municipal</label>
                </div>
                <div class="mt-3 form-floating">
                    <select class="form-control" name="icms" id="icms">
                        <option value="">----</option>
                    </select>
                    <label for="icms">Contribuinte ICMS</label>
                </div>
                <div class="col">
                    <div class="mt-3 form-floating">
                        <select class="form-control" name="type" id="type">
                            <option value="">Outros</option>
                        </select>
                        <label for="type">Tipo</label>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col">
                    <div class="my-1 form-floating">
                        <label for="tax_substitute" class="form-check-label">Substituto Tributário</label>
                        <input type="checkbox" name="tax_substitute" id="tax_substitute" class="form-check-input" <?= (isset($register) and $register->tax_substitute == 1) ? 'checked' : '' ?>>
                    </div>
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
                if (data.status === 'success') {
                    showToast(data.message, 'success');
                    setTimeout(() => {
                        window.location.href = '<?= $baseRoute ?>';
                    }, 1000);
                } else {
                    showToast(data.message, 'error');
                }
            }).catch(error => {
                console.log(error);
            });
    });
</script>

<?= $this->endSection() ?>