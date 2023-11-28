<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar POP</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" onclick="save()">Salvar</button>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Cidade</label>
                <input type="text" class="form-control" name="city" id="city">
            </div>
            <div class="mt-3 col-md-4">
                <label for="ibge_code" class="form-label">Código IBGE</label>
                <input type="text" class="form-control" id="ibge_code" name="ibge_code">
            </div>
            <div class="mt-3 col-md-4">
                <label for="uf" class="form-label">UF</label>
                <select class="form-control select2" id="uf" name="uf">
                    <option value="1">PE</option>
                    <option value="2">AL</option>
                    <option value="3">BA</option>
                    <option value="4">PB</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col">
                <label for="portador_padrao" class="form-label">Portador Padrão</label>
                <select class="form-control select2" id="carrier" name="carrier">
                    <option value="1">Banco do Brasil</option>
                    <option value="2">Caixa Economica Federal</option>
                    <option value="3">Banco do Nordente</option>
                    <option value="4">Banco Itau</option>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="identificador" class="form-label">Identificador</label>
                <input type="text" id="identification" class="form-control" name="identification">
            </div>

            <div class="mt-5 col py-1 form-check">
                <label class="form-check-label" for="active">Ativo</label>
                <input type="checkbox" class="form-check-input" id="active" name="active">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="typo" class="form-label">Plano</label>
                <select class="form-control select2" id="plan" name="plan">
                    <?php foreach ($plans as $item) : ?> 
                        <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="typo" class="form-label">NAS</label>
                <select class="form-control select2" id="nas" name="nas">
                    <option selected>Selecione o NAS</option>
                    <option value="1">Monsenhor Tabosa</option>
                    <option value="1">Ria Rural</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="typo" class="form-label">Usuário</label>
                <select class="form-control select2" id="user" name="user">
                    <option selected>----------</option>
                    <option value="1">SGP</option>
                    <option value="2">Tecnico</option>
                    <option value="3">Fabiana - Financeiro</option>
                    <option value="2">Eduarda - Financeiro</option>
                    <option value="2">Inviabilidade Tec.</option>
                </select>
            </div>

        </div>
    </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    const save = async () => {
        const body = formatBody();

        showLoading();

        try {
            await fetch('<?= $baseRoute ?>/save', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(body),
                })
                .then(response => response.json())
                .then(data => {
                    hideLoading();

                    if (data.status === 'success') {
                        showToast('Salvo com sucesso', 'success');

                        setTimeout(() => {
                            window.location.href = '<?= $baseRoute ?>';
                        }, 2000);
                    } else {
                        showToast('Houve um erro', 'error');
                    }
                });

        } catch (error) {
            hideLoading();
            showToast('Houve um erro', 'error');
        }
    }

    function formatBody() {
        const body = {
            "city": getValue("city"),
            "ibge_code": getValue("ibge_code"),
            "uf": getValue("uf"),
            "carrier": getValue("carrier"),
            "identification": getValue("identification"),
            "plan": getValue("plan"),
            "nas": getValue("nas"),
            "user": getValue("user"),
            "active": document.getElementById("active").checked,
        }

        return body
    }

    function getValue(id) {
        return document.getElementById(id).value;
    }
</script>
<?= $this->endSection() ?>