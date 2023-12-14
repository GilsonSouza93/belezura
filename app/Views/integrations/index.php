<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div>

    <h2><?= $tittle ?></h2>

    <div class="card p-4 mt-4">
        <h4>
            Assas
        </h4>
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="assas_api_key" name="assas_api_key" placeholder="Chave Api">
                    <label for="name">
                        Chave API
                    </label>
                </div>
                <span class="mt-2">
                    Sua chave de API oferece acesso total para visualizar e modificar seus dados do Asaas. Trate a chave como uma senha e tenha cuidado ao compartilhá-la.
                </span>
            </div>
            <div class="col-md-4">
                <button class="btn btn-success p-3 me-2" onclick="saveApiKeyAssas()">Salvar</button>
                <button class="btn btn-success p-3" onclick="testApiKeyAssas()">Testar</button>
            </div>
        </div>
    </div>

    <div class="card p-4 mt-4">
        <h4>
            Outras integrações
        </h4>
    </div>
</div>
</div>
<!-- Filtro modal -->

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    const saveApiKeyAssas = () => {
        const input = document.querySelector('#assas_api_key');

        if (!input.value) {
            showToast('Informe a chave de API', 'warning');
            return;
        }

        showLoading();

        const formData = new FormData();

        formData.append('assas_api_key', input.value);

        fetch('<?= $baseRoute ?>/save-asaas', {
                method: 'POST',
                body: formData
            }).then(response => response.json())
            .then(data => {
                hideLoading();

                if (data.status === 'success') {
                    showToast(data.message, 'success');
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                } else {
                    showToast(data.message, 'error');
                }
            }).catch(error => {
                console.log(error);
            });
    }

    const getApiKeyAssas = () => {
        
    }

    const testApiKeyAssas = () => {
        showToast('Em desenvolvimento', 'warning');
    }
</script>
<?= $this->endSection() ?>