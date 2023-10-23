<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <form id="form" class="p-4" enctype="multipart/form-data">
        <div class="row card-2 py-3 my-3">
            <div class="col-md-8">
            </div>
            <div class="col-md-4 btn-group">
                <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
                <button class="btn btn-success" id="submit-btn">Salvar</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Nome" name="name" required>
                    <label for="name">Nome</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="speed" placeholder="Velocidade (Mbps)" name="speed" required>
                    <label for="speed">Velocidade (Mbps)</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="monthly_price" placeholder="Preço Mensal (USD)" name="monthly_price" required>
                    <label for="monthly_price">Preço Mensal (Reais)</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="contract_duration" placeholder="Duração do Contrato (Meses)" name="contract_duration" required>
                    <label for="contract_duration">Duração do Contrato (Meses)</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="data_limit" placeholder="Limite de Dados (Opcional)" name="data_limit">
                    <label for="data_limit">Limite de Dados (Mbps/Opcional)</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="connection_type" placeholder="Tipo de Conexão" name="connection_type" required>
                    <label for="connection_type">Tipo de Conexão</label>
                </div>
            </div>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="features" placeholder="Características do Plano (Opcional)" name="features" rows="4"></textarea>
            <label for="features">Características do Plano (Opcional)</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="notes" placeholder="Notas ou Observações (Opcional)" name="notes" rows="4"></textarea>
            <label for="notes">Notas ou Observações (Opcional)</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="required_equipment" placeholder="Requisitos de Equipamento (Opcional)" name="required_equipment" rows="4"></textarea>
            <label for="required_equipment">Requisitos de Equipamento (Opcional)</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="payment_options" placeholder="Opções de Pagamento (Opcional)" name="payment_options" rows="4"></textarea>
            <label for="payment_options">Opções de Pagamento (Opcional)</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="geographical_availability" placeholder="Disponibilidade Geográfica (Opcional)" name="geographical_availability">
            <label for="geographical_availability">Disponibilidade Geográfica (Opcional)</label>
        </div>
    </form>

</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
    const submitBtn = document.querySelector('#submit-btn');
    const form = document.querySelector('form');
    const url = '<?= $baseRoute ?>/save';

    form.addEventListener('submit', event => {
        event.preventDefault();
        const data = formatBody();
        if(!data) return;

        showLoading();

        fetch(url, {
                method: 'POST',
                body: data
            }).then(response => response.json())
            .then(data => {
                hideLoading();

                if(data.status === 'success') {
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

    function formatBody() {
        const body = {
            name: document.querySelector('#name').value,
            speed: document.querySelector('#speed').value,
            monthly_price: document.querySelector('#monthly_price').value,
            contract_duration: document.querySelector('#contract_duration').value,
            data_limit: document.querySelector('#data_limit').value,
            connection_type: document.querySelector('#connection_type').value,
            features: document.querySelector('#features').value,
            notes: document.querySelector('#notes').value,
            required_equipment: document.querySelector('#required_equipment').value,
            payment_options: document.querySelector('#payment_options').value,
            geographical_availability: document.querySelector('#geographical_availability').value,
        }

        return JSON.stringify(body);
    }
</script>

<?= $this->endSection() ?>