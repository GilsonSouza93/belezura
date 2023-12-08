<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>
                <?php if (isset($register)) : ?>
                    Editar Email
                <?php else : ?>
                    Novo Email
                <?php endif ?>
            </h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form class="card p-4">

        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="service" class="form-label">Serviço de Email</label>
                <input type="text" class="form-control" id="service" name="service" value="<?= isset($register) ? $register->service : '' ?>">
            </div>
            <div class="mt-3 col-md-4">
                <label for="sending_limit" class="form-label">Limite por envio</label>
                <input type="text" class="form-control" name="sending_limit" id="sending_limit" placeholder="Quantidade de emails enviados para cada conexão.">
            </div>
            <div class="mt-3 col-md-4">
                <label for="pop_id" class="form-label">POP</label>
                <select class="form-select" id="pop_id" name="pop_id">
                    <?php foreach ($pops as $pop) : ?>
                        <option value="">Selecione o local do pop</option>
                        <option value="<?= $pop['id'] ?>"><?= $pop['city'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="group" class="form-label">Grupo</label>
                <input type="text" class="form-control" name="group" id="group" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" class="form-control" name="tags" id="tags" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="nas" class="form-label">NAS</label>
                <select class="form-select" id="nas" name="nas">
                    <option value="">Selecione o NAS</option>
                </select>
            </div>

        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="condominium" class="form-label">Condomínio</label>
                <input type="text" class="form-control" name="condominium" id="condominium" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="street" class="form-label">Rua</label>
                <input type="text" class="form-control" name="street" id="street" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="district" class="form-label">Bairro</label>
                <input type="text" class="form-control" name="district" id="district" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="source" class="form-label">Fonte</label>
                <select class="form-select" id="source" name="source">
                    <option value="">Selecione a fonte</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="route" class="form-label">Rota</label>
                <input type="text" class="form-control" name="route" id="route" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="tower" class="form-label">Torre</label>
                <select class="form-select" id="tower" name="tower">
                    <option value="">Selecione a torre</option>
                </select>
            </div>

        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="plans_id" class="form-label">Plano</label>
                <select class="form-select" id="plan_id" name="plan_id">
                        <?php foreach ($plans as $plan) : ?>
                            <option value="">Selecione o plano</option>
                            <option value="<?= $plan['id'] ?>"><?= $plan['id'] ?></option>
                        <?php endforeach ?>
                    </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="olt_id" class="form-label">Olt</label>
                <select class="form-select" id="olt_id" name="olt_id">
                        <?php foreach ($olts as $olt) : ?>
                            <option value="">Selecione a olt</option>
                            <option value="<?= $olt['id'] ?>"><?= $olt['id'] ?></option>
                        <?php endforeach ?>
                    </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="slot" class="form-label">Slot</label>
                <input type="text" class="form-control" id="slot" name="slot" >
            </div>

        </div>
        <div class="row">
            <div class="mt3 col-md-4">
                <label for="pon" class="form-label">PON</label>
                <input type="text" class="form-control" id="pon" name="pon" >
            </div>
            <div class="mt3 col-md-4">
                <label for="" class="form-label">Formas de cobrança</label>
                <select name="billing_method" id="billing_method" class="form-control">
                    <option value="">Selecione a forma de cobrança</option>
                    <option value="1">Boleto</option>
                    <option value="2">Débito automático</option>
                    <option value="3">Carnê</option>
                    <option value="4">Cobrança recorrente</option>
                </select>

            </div>
            <div class="mt3 col-md-4">
                <label for="expiration" class="form-label">Vencimento</label>
                <input type="text" class="form-control" id="expiration" name="expiration">
            </div>
        </div>

        <div class="row">
            <div class="mt3 col-md-4">
                <label for="invoice" class="form-label">Nota fiscal de</label>
                <input type="date" class="form-control" id="invoice" name="invoice">
            </div>
            <div class="mt3 col-md-4">
                <label for="invoice_until" class="form-label">Nota fiscal até</label>
                <input type="date" class="form-control" id="invoice_until" name="invoice_until">
            </div>
            <div class="mt3 col-md-4">
                <label for="" class="form-label">Tipo de pessoa</label>
                <select name="person_type" id="person_type" class="form-control">
                    <option value="1">Física</option>
                    <option value="2">Jurídica</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt3 col-md-4">
                <label for="" class="form-label">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="1">Inativo</option>
                    <option value="2">Ativo</option>
                    <option value="3">Novo</option>
                    <option value="4">Suspenso</option>
                    <option value="5">Cancelado</option>
                    <option value="6">Ativo V. Reduzida</option>
                    <option value="7">Inviabilidade Técnica</option>
                </select>
            </div>
            <div class="mt3 col-md-4">
                <label for="" class="form-label">Tipo de contato</label>
                <select name="contact" class="form-control" id="contact">
                    <option value="1" selected>Todos</option>
                    <option value="2">Email Pessoal</option>
                    <option value="3">Email de Cobrança</option>
                </select>
            </div>
            <div class="mt3 col-md-4">
                <label for="" class="form-label">Fidelidade dias restantes</label>
                <input type="text" class="form-control" id="loyalty" name="loyalty" placeholder="Quantidade de dias até o fim da fidelidade." >
            </div>
        </div>

        <div class="row">
            <div class="mt-5 col-md-3 form-check">
                <label class="form-check-label" for="active">Ativo?</label>
                <input type="checkbox" class="form-check-input" name="active" id="active">
            </div>
            <div class="mt-5 col-md-3 form-check">
                <label class="form-check-label" for="terms">Termo de aceite do contrato</label>
                <input type="checkbox" class="form-check-input" name="terms" id="terms">
            </div>
            <div class="mt-5 col-md-3 form-check">
                <label class="form-check-label" for="comodato">Comodato?</label>
                <input type="checkbox" class="form-check-input" name="comodato" id="comodato">
            </div>
        </div>
        
                <div class="row">
                    <div class="mt-3 col-md-12">
                        <label for="name" class="form-label">Mensagem</label>
                        <textarea name="mensage" class="form-control" id="mensage" cols="30" rows="5"></textarea>
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