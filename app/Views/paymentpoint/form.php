<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class=" p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Ponto de Recebimento</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" onclick="save()">Salvar</button>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name">
                
            </div>
            <div class="mt-3 col-md-3">
                <label for="portador" class="form-label">Portador</label>
                <input type="text" class="form-control" name="carrier" id="carrier">
            </div>
            <div class="mt-3 col-md-3">
                <label for="carriers" class="form-label">Portadores</label>
                <select class="form-control select2" id="carriers" name="carriers" >
                    <option selected>-------</option>
                    <option value="1">Banco do Brasil</option>
                    <option value="2">Banco Santander</option>
                    <option value="3">Pulsarpay</option>
                    <option value="4">Safe2pay</option>
                </select>
            </div>

            <div class="mt-3 col-md-3">
                <label for="uf" class="form-label">Empresas</label>
                <select class="form-control select2" id="companies" name="companies">
                    <option selected>-------</option>
                    <option value="1">Brisatel Telecom</option>
                    <option value="2">CR Telecom</option>
                    <option value="3">LinkTop</option>
                    <option value="4">NAVIX ISP</option>
                    </select>
                    <span class="badge text-bg-light show-text" data-text='Se apenas 1 empresa, não é necessário definir.'>?</span>
            </div>
            
            <div class="mt-3 col-md-5">
                <label for="saldo_maximo" class="form-label">Saldo Máximo Permitido por Dia</label>
                <input type="text" class="form-control" id="balance" name="balance" >
                <span class="badge text-bg-light show-text" data-text='Limitar recebimento para o caixa por dia. (Definir valor apenas se quiser limitar valor máximo para receber por caixa)'>?</span>
            </div>
            
       
        
        <div class="mt-3 col-md-1 form-check">
                <label class="form-check-label" for="active">Ativo</label>
                <input type="checkbox" class="form-check-input" id="active" name="active" >
            </div>
        
            
            <div class="mt-3 col-md-3">
                <label for="bills_discount" class="form-label">% Desconto Caixa.</label>
                <input type="text" class="form-control" id="bills_discount" name="bills_discount">
                <span class="badge text-bg-light show-text" data-text='Porcentagem permitida para desconto nesse ponto de recebimento.(Usuários Normais)'>?</span>
            </div>
            <div class="mt-3 col-md-4">
                <label for="admin_discount" class="form-label">% Desconto Admin.</label>
                <input type="text" id="admin_discount" name="admin_discount" class="form-control">
                <span class="badge text-bg-light show-text" data-text='Porcentagem permitida para desconto nesse ponto de recebimento.(Usuários Admin)'>?</span>
            </div> 
        
            
            <div class="mt-5 col-md-1 form-check">
                <label class="form-check-label" for="allow_discount">Permitir Desconto ?</label>
                <input type="checkbox" class="form-check-input" id="allow_discount" name="allow_discount" >
            </div>

            <div class="mt-5 col-md-3 form-check">
                <label class="form-check-label" for="refinance">Refinanciar Valor?</label>
                <input type="checkbox" class="form-check-input" id="refinance" name="refinance">
                <span class="badge text-bg-light show-text" data-text='Refinanciar valor se houver diferença entre valor pago com o valor total - desconto.'>?</span>
            </div>
            <div class="mt-3 col-md-4">
                <label for="method" class="form-label">Formas De Pagamento</label>
                <select class="form-control select2" id="method" name="method" >
                    <option selected>-------</option>
                    <option value="1">Dinheiro</option>
                    <option value="2">Transferencia Bancária</option>
                    <option value="3">Cartão de Credito</option>
                    <option value="4">Cartão de Débito</option>
                    <option value="5">Cheque à Vista</option>
                    <option value="6">PIX</option>
                </select>
                <span class="badge text-bg-light show-text" data-text='Se não informado formas de pagamento que o caixa aceita, serão consideradas todas as formas'>?</span>
            </div>
       
            <div class="row">
            <div class="mt-3 col-md-3">
                <label for="receiver" class="form-label">Formas de Recebimento</label>
                <select class="form-control select2" id="receiver" name="receiver" >
                    <option selected>Selecione o Plano</option>
                    <option value="1">Valor Total</option>
                    <option value="2">Valor Parcial</option>
                </select>
                <span class="badge text-bg-light show-text" data-text='Se não informado formas de recebimento, serão consideradas todas as formas'>?</span>
            </div>

             
            <div class="mt-3 col-md-3">
                <label for="pops" class="form-label">Pops</label>
                <select class="form-control select2" id="pops" name="pops" >
                    <option selected>Selecione o Local</option>
                    <option value="1">Pop Caruaru</option>
                    <option value="2">Pop Garanhuns</option>
                </select>
                <span class="badge text-bg-light show-text" data-text='Filtrar por Pop nos recebimentos via Retorno / Gateway. Requer ativar no portador filtrar pop.'>?</span>
            </div>

            
            <div class="mt-5 col-md-2 form-check">
                <label class="form-check-label" for="canceled">Receber Cancelados</label>
                <input type="checkbox" class="form-check-input" name="canceled" id="canceled">
                <span class="badge text-bg-light show-text" data-text='Receber titulos de contratos cancelados'>?</span>
            </div>

            <div class="mt-5 col-md-4 form-check">
                <label class="form-check-label" for="plan">Exigir Plano de Conta em Lançamento ?</label>
                <input type="checkbox" class="form-check-input" id="plan" name="plan" >
                <span class="badge text-bg-light show-text" data-text='Marcar opção para somente permitir lançamento no caixa com plano de conta'>?</span>
            </div>
            
            <div class="mt-3 col-md-2">
                <label for="return_release" class="form-label">Dias Lançamento Retorno</label>
                <input type="text" class="form-control" id="return_release" name="return_release" >
                <span class="badge text-bg-light show-text" data-text='Se definido, lançamento no caixa será data atual + dias informados. Se não definido, data do lançamento = data da leitura do retorno.'>?</span>
            </div>
            
            <div class="mt-3 col-md-3">
                <label for="card_release" class="form-label">Dias Lançamento Cartão</label>
                <input type="text" class="form-control" id="card_release" name="card_release">
                <span class="badge text-bg-light show-text" data-text='Se definido, lançamento no caixa será data atual + dias informados. Se não definido, data do lançamento = data da captura no cartão.'>?</span>
            </div>
            <div class="mt-3 col-md-3">
                <label for="debit_release" class="form-label">Dias Lançamento Cartão (Debito)</label>
                <input type="text" class="form-control" id="debit_release" name="debit_release" >
                <span class="badge text-bg-light show-text" data-text='Se definido, lançamento no caixa será data atual + dias informados. Se não definido, data do lançamento = data da captura no cartão.'>?</span>


            </div>
            <div class="mt-3 col-md-2">
                <label for="generate_invoice" class="form-label">Gerar NF na Baixa do Título ?</label>
                <select class="form-control select2" id="generate_invoice" name="generate_invoice" >
                    <option selected>----------</option>
                    <option value="1">Na baixa (automática) do título.</option>
                    <option value="2">Na baixa (automática e manual) do título.</option>
                    <option value="3">Na baixa (automática) do título c/ NF marcada na cobrança.</option>
                    <option value="4">Na baixa (automática e manual) do título c/ NF marcada na cobrança. </option>
                </select>
            </div>
            
           

            <div class="mt-3 col-md-2">
                <label for="invoice" class="form-label">Gerar NF na Baixa do Título ?</label>
                <select class="form-control select2" id="invoice" name="invoice" >
                    <option selected>----------</option>
                    <option value="1">Boleto + Nota Fiscal</option>
                    <option value="2">Somente Nota Fiscal</option>
                    
                </select>
            </div>
            <div class="mt-5 col-md-4 form-check">
                <label class="form-check-label" for="send_invoice">Enviar NF?</label>
                <input type="checkbox" class="form-check-input" id="send_invoice" name="send_invoice" >
                <span class="badge text-bg-light show-text" data-text='Enviar nota fiscal automáticamente após a NF ser gerada se houver baixa do título.'>?</span>
            </div>
            
            <div class="mt-5 col-md-4 form-check">
                <label class="form-check-label" for="filter">Filtrar Empresa nos Relatórios ?</label>
                <input type="checkbox" class="form-check-input" name="filter" id="filter">
                <span class="badge text-bg-light show-text" data-text='Se marcado, filtra a empresa definida do ponto de recebimento nos relatórios de caixa, dre etc. Se não definido, verifica a empresa no cadastro do Portador'>?</span>
            </div>
            <div class="mt-5 col-md-4 form-check">
                <label class="form-check-label" for="cash_reports">Ativo Relatório de Caixa ?</label>
                <input type="checkbox" class="form-check-input" name="cash_reports" id="cash_reports">
                <span class="badge text-bg-light show-text" data-text='Se desmarcado, os lançamentos realizados neste ponto serão ocultados dos relatórios de lançamentos de caixa.'>?</span>
            </div>

            <div class="mb-3">
            </br>
            </br>
            <label for="schedule" class="form-label"> Horários</label>
            <textarea class="form-control" name="schedule" id="schedule" rows="3"></textarea>
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
            "name": getValue('name'),
            "carrier": getValue('carrier'),
            "carriers": getValue('carriers'),
            "companies": getValue('companies'),
            "balance": getValue('balance'),
            "active": document.getElementById("active").checked,
            "bills_discount": getValue('bills_discount'),
            "admin_discount": getValue('admin_discount'),
            "allow_discount": document.getElementById("allow_discount").checked,
            "refinance": document.getElementById("refinance").checked,
            "method": getValue('method'),
            "receiver": getValue('receiver'),
            "pops": getValue('pops'),
            "canceled": document.getElementById("canceled").checked,
            "plan": document.getElementById("plan").checked,
            "return_release": getValue('return_release'),
            "card_release": getValue('card_release'),
            "debit_release": getValue('debit_release'),
            "generate_invoice": getValue('generate_invoice'),
            "invoice": getValue('invoice'),
            "send_invoice": document.getElementById("send_invoice").checked,
            "filter": document.getElementById("filter").checked,
            "cash_reports": document.getElementById("cash_reports").checked,
            "schedule": getValue('schedule'),

        }

        return body
    }

    function getValue(id) {
        return document.getElementById(id).value;
    }
</script>
<?= $this->endSection() ?>