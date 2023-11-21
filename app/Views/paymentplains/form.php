<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class=" p-4">

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
            <div class="mt-3 col-md-4">
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-control select2" aria-label="tipo" id="tipo">
                    <option selected>Selecione o Tipo</option>
                    <option value="1">Receita</option>
                    <option value="2">Despesa</option>
                </select>
            </div>

            <div class="mt-3 col-md-4">
                <label for="codigoFinanceiro" class="form-label">Código Financeiro</label>
                <input type="text" class="form-control" name="codigoFinanceiro" id="codigoFinanceiro">
            </div>

            <div class="mt-3 col-md-4">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao">
            </div>
        </div>
        <div class="row">

            <div class="mt-3 col-md-4">
                <label for="plainAccount" class="form-label">Conta Plano
                <span class="badge text-bg-light show-text" data-text='Definir apenas para receita se for mensalidade/adesão.'>?</span>
                </label>
                <select class="form-control select2" id="plainAccount" aria-label="forma de pagamento">
                    <option selected>Selecione a Forma de Pagamento</option>
                    <option value="1">Mensalidade Contrato</option>
                    <option value="2">Adesão Contrato</option>
                </select>
            </div>

            <div class="mt-3 col-md-4">
                <label for="dretype" class="form-label">Tipo da DRE</label>
                <select class="form-control select2" id="dretype" aria-label="dretype">
                    <option selected>Selecione o tipo da DRE</option>
                    <option value="" selected="">---------</option>
                    <option value="01">Receita</option>
                    <option value="02">Imposto s/ Faturamento</option>
                    <option value="03">Despesas Operacionais</option>
                    <option value="04">Custo da Mercadoria vendida</option>
                    <option value="05">Despesas Não Operacionais</option>

                </select>
            </div>

            <div class="mt-3 col-md-4">
                <label for="siciconta" class="form-label">SICI Conta</label>
                <select class="form-control select2" id="siciconta" aria-label="forma de pagamento">
                    <option selected>Selecione a forma de pagamento</option>
                    <option value="1">Receita Operacional</option>
                    <option value="2">Despesa Envolvendo Interconexão</option>
                    <option value="3">Despesa Envolvendo Vendas</option>
                    <option value="4">Despesa Envolvendo Publicidade</option>
                    <option value="5">Despesa Envolvendo Operação e Manutenção</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">

                    <label for="demonstrativoBoleto" class="form-label">Demonstrativo Boleto
                        <span class="badge text-bg-light show-text" data-text='Se informado será inserido no demonstrativo de boletos gerados automaticamente. Variáveis: GRUPO_SET, DATA_INI, DATA_FIM, REF_MES_ANTERIOR, REF_MES_ATUAL, MES_INI_DATA, MES_FIM_DATA. OBS: Variáveis não se aplicam a geração avulsa.'>?</span>
                    </label>
                    <input type="text" id="demonstrativoBoleto" class="form-control" name="name" placeholder="">
            </div>
            <div class="col-md-4">
            <label for="suspender" class="form-label">Suspender Serviço?
                <span class="badge text-bg-light show-text" data-text='definido suspender e tiver débito no cliente com esse plano de conta, irá suspender o serviço do cliente. Conta Plano Adesão e Mensalidade suspendem serviço por padrão.'>?</span>
            </label>
                <input type="checkbox" name="suspender" id="suspender" class="form-check-input">
            </div>
            <div class="col-md-4">
            <label for="suspender" class="form-label">Enviar Cobrança Auto
            <span class="badge text-bg-light show-text" data-text='Habilita o envio dos títulos com este C. Custo por email caso habilitado também no Portador.'>?</span>
            </label>
                <input type="checkbox" name="suspender" id="suspender" class="form-check-input">
                <span class="text-small"><br></span>
            </div>
        </div>

        <div class="row">

            <div class="mt-3 col-md-2">
                <label for="dre" class="form-label">DRE</label>
                <input type="checkbox" name="dre" class="form-check-input" id="dre">
            </div>

            <div class="mt-3 col-md-4">
                <label for="suspender" class="form-label">Incluir no Bloco 1601 do Arquivo SPED ?</label>
                <input type="checkbox" name="suspender" id="suspender" class="form-check-input">
            </div>

            <div class="mt-3 col-md-2">
                <label for="visibility" class="form-label">Visível</label>
                <input type="checkbox" name="visibility" class="form-check-input" id="visibility">
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