<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Email</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>


        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Serviço de Email</label>
                <select class="form-control" aria-label="Default select example" name="dominio" id="dominio" >
                    <option selected>Selecione o domínio</option>
                    <option value="1">Gmail</option>
                    <option value="2">Hotmail</option>
                    <option value="3">Yahoo</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Limite de envio por conexão</label>
                <input type="text" class="form-control" name="name" placeholder="">
                <label for="" class="">Quantidade de emails enviados para cada conexão. Ajustar de acordo com o limite do servidor SMTP.</label>
            </div>
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">POP</label>
                <select class="form-control" name="pop" id="pop">
                    <option selected >Selecione a cidade</option>
                    <option value="1">Caruaru-PE</option>
                    <option value="2">Lagoa dos Gatos-PE</option>
                    <option value="3">Catende-PE</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Group</label>
                <select class="form-control" name="group" id="group" >
                    <option value="1">VOIP</option>
                    <option value="2">Rádio</option>
                    <option value="3">Cabo</option>
                    <option value="4">Fibra</option>
                    <option value="5">Multimidia</option>
                    <option value="6">TV</option>
                    <option value="7">Telefonia</option>
                    <option value="8">Serviços</option>
                </select>
            </div>
            <div class="mt-3 col-md-4 ">
                <label class="form-label" for="name">Tags</label>
                <input type="text" class="form-control" name="" id="" >
            </div>
            <div class="mt-3 col-md-4  ">
                <label class="form-label" for="name">NAS</label>
                <select class="form-control" name="nas" id="nas" >
                    <option value="" selected="">Selecione o NAS</option>
                    <option value="7">ACCEL-1</option>
                    <option value="23">_bootstrap</option>
                    <option value="22">BRAS-DF</option>
                    <option value="20">Computador/Parnamirim.2</option>
                    <option value="28">GR3 LAB</option>
                    <option value="3">Identificador</option>
                    <option value="26">legados</option>
                    <option value="24">NAS - MONSENHOR TABOSA</option>
                    <option value="13">NE8000</option>
                    <option value="21">RUARURAL</option>
                    <option value="14">teste ig</option>
                    <option value="4">trd</option>
                    <option value="2">WMFIBRA</option>
                    <option value="25">[WORKNET] Juniper/PPPoE (BSB)</option>
                </select>
            </div>

            <div class="mt-3 col-md-4">
                <label class="form-label" >Condomínio</label>
                <select class="form-control" name="condominio" id="condominio" >
                    <option value="" selected>Selecione o condomínio</option>
                    <option value="6">Condomínio Beija-Flor</option>
                    <option value="8">CONDOMINIO JARDINS DA ROSEIRA</option>
                    <option value="1">CONDOMINIO SANTA BARBARA</option>
                    <option value="2">GEOVANA</option>
                    <option value="4">MCM</option>
                    <option value="9">Portal dos passaros</option>
                    <option value="7">Residencial Morro Branco - NTL</option>
                    <option value="3">RUA CONSELHEIRO PARANHOS</option>
                    <option value="5">solar das p</option>
                </select>
            </div>

            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Rua</label>
                <input type="text" class="form-control" name="rua" id="rua" placeholder="">
            </div>
            <div class="mt-3 col-md-4 ">
                <label for="name" class="form-label">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="">
            </div>

            
            <div class="mt-3 col-md-4">
            <label for="name" class="form-label">Fonte</label>
            <select class="form-control" name="fonte" id="fonte">
                <option selected >Selecione a fonte</option>
                <option value="1">Teste</option>
                <option value="2">WMFIBRA</option>
                <option value="3">SW - NOC/CGR (SIA/DF) - [WORKNET] Juniper/PPPoE (BSB)</option>
            </select>
        </div>

        <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Rota</label>
                <input type="text" class="form-control" name="rota" id="rota" placeholder="">
            </div>
            
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Torre</label>
                <select class="form-control" name="torre" id="torre">
                    <option value="" selected>Selecione a torre</option>
                    <option value="1">TORRE 1</option>
                    <option value="2">SANTA CLARA</option>
                    <option value="3">POP SERRA TORRE</option>
                    <option value="4">TORRE CRISTALINO</option>
                    <option value="5">TORRE DANILO</option>
                    <option value="7">Torre Barro Duro</option>
                    <option value="8">Camprestre</option>
                    <option value="9">TORRE JERUSALEM FAZ</option>
            </select>
        </div>

        <div class="mt-3 col-md-12">
            <label for="planos" class="form-label">Planos</label>
            <select name="planos" id="planos" multiple="multiple" class="form-control">
                    <option value="" selected>Selecione o plano</option>
                    <option value="89">100 MB - Pós Pago - Download: 100 Mb, Upload: 50 Mb - Valor R$ 69,90</option>
                    <option value="111">100MB - Pós Pago - Download: 100 Mb, Upload: 50 Mb - Valor R$ 49,99</option>
                    <option value="14">10 MEGAS Pós-Pago sem Fidelidade - Pós Pago - Download: 10240 Kb, Upload: 5120 Kb, Burst: Dobro -  - Valor R$ 200,00</option>
                    <option value="84">1GB - Palacio Dedicado - Pós Pago - Download: 1 Gb, Upload: 1 Gb - Valor R$ 100,00</option>
                    <option value="113">200MB - Pós Pago - Download: 200 Mb, Upload: 120 Mb - Valor R$ 70,00</option>
                    <option value="90">200MB - MOVI TELECOM - Pós Pago - Download: 200 Mb, Upload: 100 Mb - Valor R$ 79,90</option>
                    <option value="7">20-MEGAS - Pós Pago - Download: 215040 Kb, Upload: 20480 Kb - Valor R$ 70,00</option>
                    <option value="18">20 MEGAS LVD - Pós Pago - Download: 1523 Kb, Upload: 1412 Kb - Valor R$ 85,00</option>
                    <option value="29">250 MEGAS - Pós Pago - Download: 2500000 Kb, Upload: 1500000 Kb - Valor R$ 150,00</option>
                    <option value="6">25MB - Pós Pago - Download: 250000 Kb, Upload: 250000 Kb - Valor R$ 52,00</option>
                    <option value="93">300MB - Pós Pago - Download: 300 Mb, Upload: 150 Mb - Valor R$ 119,90</option>
                    <option value="64">300Mb_01092022 - Pós Pago - Download: 350 Mb, Upload: 160 Mb - Valor R$ 99,99</option>
                    <option value="101">300MB FIBRA - Pós Pago - Download: 320 Mb, Upload: 200 Mb - Valor R$ 84,90</option>
                    <option value="16">300 mega 119 - Pós Pago - Download: 300000 Kb, Upload: 300000 Kb - Valor R$ 119,99</option>
                    <option value="102">300 MEGA FIBRA - Pós Pago - Download: 300 Kb, Upload: 100 Kb - Valor R$ 110,00</option>
                    <option value="1">30 MEGAS FIBRA - Pré-Pago - Download: 10240 Kb, Upload: 10240 Kb - Valor R$ 50,00</option>
                    <option value="47">3MB - Pós Pago - Download: 3 Kb, Upload: 2 Kb - Valor R$ 90,00</option>
                    <option value="91">500MB - MOVI TELECOM - Pós Pago - Download: 500 Mb, Upload: 250 Mb - Valor R$ 99,90</option>
                    <option value="11">50Mbps - Pós Pago - Download: 51200 Kb, Upload: 51200 Kb - Valor R$ 49,99</option>
                    <option value="104">50Megas cabo - Pós Pago - Download: 50 Kb, Upload: 50 Kb, Burst: Dobro -  - Valor R$ 50,00</option>
                    <option value="9">5 megas - Pré-Pago - Download: 2500 Kb, Upload: 2500 Kb - Valor R$ 60,00</option>
                    <option value="17">5 MEGUINHA - Pós Pago - Download: 5120 Kb, Upload: 5120 Kb, Burst: Dobro -  - Valor R$ 59,90</option>
                    <option value="27">Basico_Residencial - Pós Pago - Download: 60000 Kb, Upload: 20000 Kb - Valor R$ 79,90</option>
                    <option value="71">Bip_300MB - Pós Pago - Download: 300 Mb, Upload: 150 Mb - Valor R$ 99,90</option>
                    <option value="105">Combo Feliz que a Jessica saiu - Pré-Pago - Download: 500 Mb, Upload: 200 Mb - Valor R$ 129,90</option>
                    <option value="85">COMBO-FIBRA-VOD+UOL+INTERNET-01 - Pré-Pago - Download: 500 Mb, Upload: 500 Mb - Valor R$ 69,90</option>
                    <option value="5">COMBO PREMIUM 300MB (FIDELIDADE) - Pós Pago - Download: 1 Gb, Upload: 1 Gb, Burst: Dobro -  - Valor R$ 299,90</option>
                    <option value="110">Combo Start Sem Fidelidade - Pré-Pago - Download: 102400 Kb, Upload: 10240 Kb - Valor R$ 100,00</option>
                    <option value="24">dutraPlano1 - Pós Pago - Download: 10000 Kb, Upload: 10000 Kb - Valor R$ 10,00</option>
                    <option value="28">FIBRA 30MB - Pós Pago - Download: 80 Kb, Upload: 80 Kb - Valor R$ 79,90</option>
                    <option value="98">FIbra_400Mbps_TopetexTelecom - Pós Pago - Download: 400 Mb, Upload: 200 Mb - Valor R$ 100,00</option>
                    <option value="112">FIBRA-net-IBI - Pós Pago - Download: 30 Mb, Upload: 30 Mb - Valor R$ 50,00</option>
                    <option value="54">FIBRA-PROM-50MB - Pós Pago - Download: 5000 Kb, Upload: 2500 Kb - Valor R$ 200,00</option>
                    <option value="30">FTTH_PRATA - Pós Pago - Download: 150000 Kb, Upload: 150000 Kb - Valor R$ 89,99</option>
                    <option value="109">internet - Pós Pago - Download: 100 Kb, Upload: 20 Kb, Burst: 30% -  - Valor R$ 70,90</option>
                    <option value="33">Internet Rural 10MB - Pós Pago - Download: 10240 Mb, Upload: 10240 Mb - Valor R$ 200,00</option>
                    <option value="12">INTERNET RURAL 50 MB - Pós Pago - Download: 50000 Kb, Upload: 50000 Kb - Valor R$ 69,90</option>
                    <option value="95">[ JOAO ] PLANO 01 - Pós Pago - Download: 250 Mb, Upload: 125 Mb - Valor R$ 100,00</option>
                    <option value="94">mlgu teste - Pós Pago - Download: 500 Mb, Upload: 250 Mb - Valor R$ 50,00</option>
                    <option value="60">opyt light - Pós Pago - Download: 51200 Kb, Upload: 10240 Kb - Valor R$ 89,90</option>
                    <option value="114">Plano 100MB - Pós Pago - Download: 110 Mb, Upload: 50 Mb - Valor R$ 99,90</option>
                    <option value="45">PLANO 20MB - RESIDENCIAL - Pós Pago - Download: 20 Mb, Upload: 20 Mb - Valor R$ 65,00</option>
                    <option value="76">Plano 50 M - Pós Pago - Download: 50 Kb, Upload: 50 Kb - Valor R$ 69,90</option>
                    <option value="107">PLANO 50MB - Pós Pago - Download: 5000 Kb, Upload: 2500 Kb - Valor R$ 50,00</option>
                    <option value="31">Plano 5mb - Pós Pago - Download: 4900 Kb, Upload: 5900 Kb - Valor R$ 59,90</option>
                    <option value="100">PLANO 8 MEGAS - Pós Pago - Download: 8000 Kb, Upload: 8000 Kb - Valor R$ 120,00</option>
                    <option value="70">plano fibra - Pós Pago - Download: 100 Mb, Upload: 50 Mb - Valor R$ 49,99</option>
                    <option value="97">Plano Fibra 120 - Pós Pago - Download: 130 Mb, Upload: 60 Mb - Valor R$ 109,90</option>
                    <option value="96">Plano Fibra 60 - Pós Pago - Download: 70 Mb, Upload: 30 Mb - Valor R$ 89,90</option>
                    <option value="106">PLANO PRÉ PAGO 50 MEGA - Pré-Pago - Download: 50 Mb, Upload: 50 Mb - Valor R$ 150,00</option>
                    <option value="68">plano rural guavira - Pré-Pago - Download: 17 Mb, Upload: 10 Mb - Valor R$ 99,90</option>
                    <option value="4">PLANOS 50 MB_MACAUBAS - Pós Pago - Download: 50 Kb, Upload: 25 Kb, Burst: k10% -  - Valor R$ 45,90</option>
                    <option value="10">PLANO SCM/SVA - Pós Pago - Download: 100 Kb, Upload: 100 Kb - Valor R$ 100,00</option>
                    <option value="61">Plano simples mega - Pós Pago - Download: 50124 Kb, Upload: 50240 Kb - Valor R$ 99,99</option>
                    <option value="13">Porto net super combo 400Mbs - Pós Pago - Download: 409600 Kb, Upload: 163840 Kb - Valor R$ 159,90</option>
                    <option value="108">Rural-5mb***** - Pré-Pago - Download: 5 Mb, Upload: 10 Mb - Valor R$ 50,00</option>
                    <option value="57">SPEED 50 MEGAS FIBRA - Pós Pago - Download: 55000 Kb, Upload: 55000 Kb - Valor R$ 60,00</option>
                    <option value="25">Teste 1 Mega - Pós Pago - Download: 1024 Kb, Upload: 1024 Kb - Valor R$ 100,00</option>
                    <option value="99">teste-oliveira - Pós Pago - Download: 12 Mb, Upload: 12 Mb - Valor R$ 55,00</option>
                    <option value="83">VIP HBO - MAX - Pós Pago - Download: 10 Gb, Upload: 10 Gb, Burst: Dobro -  - Valor R$ 217,80</option>
                    <option value="2">zerruela - Pós Pago - Download: 10240 Kb, Upload: 5120 Kb - Valor R$ 50,00</option>
                    <option value="92">zezin - Pós Pago - Download: 1000 Kb, Upload: 1000 Kb - Valor R$ 1.000,00</option>
                
            </select>
        </div>

        <div class="mt-3 col-md-4">
            <label for="OLT" class="form-label">OLT</label>
            <select name="olt" id="olt" class="form-control" >

                <option value="" selected="">Selecione o OLT</option>
                <option value="4">[WORKNET] OLT ZTE (SIA/DF) - 172.16.12.1</option>
                <option value="32">V-Sol-V1600D4 - 192.168.12.102</option>
                <option value="49">OLT - ZTE - 0000000</option>
                <option value="33">Emulador - 127.0.0.1</option>
                <option value="3">[WORKNET] OLT HUAWEI (DATACENTER) - 172.16.12.1</option>
                <option value="46">Parks - 172.31.255.1</option>
                <option value="53">OLT TESTE - 10.0.0.02</option>
                <option value="27">INTELBRAS 8820I - 192.168.0.1</option>
                <option value="51">vsol - 30.30.30.1</option>
                <option value="52">OLT THINK EPON 2PON - 192.168.0.101</option>
                <option value="45">DATACOM_TESTE - 10.0.1.50</option>
                <option value="44">teste datacom - 10.0.0.1</option>
                <option value="56">huawei - 10.10.10.10</option>
                <option value="61">OLT GPON BENARDO MEARIM - 192.167.101</option>
                <option value="62">OLT- CONNECT - 192.111.101</option>
                <option value="59">olt b-m - 192.167.101</option>
                <option value="20">OLT-ZTE Telecom - 192.168.10.2</option>
                <option value="60">Huawei - 192.168.1.2</option>
                <option value="50">OLT INTELBRAS-4840 - 152.125.1.1</option>
                <option value="64">OLT 8 PON - 172.20.10.254</option>
                <option value="65">Upnettelecom - Up</option>
                <option value="66">OLT ZTE - 172.168.0.25</option>
                <option value="70">olt01 - 192.168.1.1</option>
                <option value="63">ibl telecom - 192.168.1.1</option>
                <option value="41">OLT VSOLUTION V1600D4-DP - 12.30.1.2</option>
                <option value="69">Parks - 192.168.0.10</option>
                <option value="89">POP Parelheiros - sip1.athostec.com.br</option>
                <option value="71">OLT Cidade Jardim - 100.20.3</option>
                <option value="87">olt lcentro - 192.168.0.1</option>
                <option value="90">NOVA TELECOM - 192.168.0.1</option>
                <option value="86">Olt - 192.168.1.1</option>
                <option value="92">ParksCenter2 - 177.200.154.254</option>
                <option value="76">OLT1 - 187.44.121.26</option>
                <option value="77">Vsol 2 - 187.44.121.27</option>
                <option value="73">OLT-HUAWEI - 127.0.0.254</option>
                <option value="83">Huawei X Lab - 172.20.20.1</option>
                <option value="78">AgileFibra - 10.0.0.1</option>
                <option value="79">olt centro - 192.168.120.100</option>
                <option value="74">OLTKM22 - 10.142.15.100</option>
                <option value="81">OLT - 192.168.250.2</option>
                <option value="85">SWZ-SENTINELA - 789</option>
                <option value="67">01_PARKS_ VASSOURAL - 172.255.17.2</option>
                <option value="88">Huawei - 0.0.0.0</option>
                <option value="75">zte-teste-teste - 192.1687.1.1</option>
                <option value="91">OLT_POP_VILA _PARAISO - 12.20.200.2</option>
                <option value="68">olt fiber - 192.168.88.88</option>
                <option value="72">olt-fiberhome - 164.163.32.243</option>    

            </select>

        </div>

        <div class="mt-3 col-md-4 ">
                <label class="form-label" for="slot">Slot</label>
                <input type="text" class="form-control" name="slot" id="slot" >
        </div>

        <div class="mt-3 col-md-4 ">
                <label class="form-label" for="pon">PON</label>
                <input type="text" class="form-control" name="pon" id="pon" >
        </div>

        <div class="mt-3 col-md-4 ">
                <label class="form-label" for="off">Offline?</label>
                <input type="checkbox" class="form-check-input" name="off" id="off" >
        </div>

        <div class="mt-3 col-md-4">
            <label for="cobranca">Formas de cobrança</label>
            <select name="cobranca" id="cobranca" class="form-control">
                <option value="" selected>Selecione a forma de pagamento</option>
                <option value="1">Boleto</option>
                <option value="2">Débito Automático</option>
                <option value="3">Carnê</option>
                <option value="4">Cobrança Recorrente</option>
                <option value="5">Cobrança Recorrente - Recarga Linha Telefônica</option>
            </select>

        </div>

        <div class="mt-3 col-md-4">
            <label for="vencimento" class="form-label" >Vencimento</label>
            <select name="vencimento" id="vencimento" class="form-control">
                <option value="" selected="">Selecione o vencimento</option>
                <option value="1">5</option>
                <option value="2">10</option>
                <option value="3">15</option>
                <option value="4">20</option>
                <option value="5">25</option>
                <option value="15">26</option>
                <option value="6">30</option>
            </select>
        </div>


        <div class="mt-3 col-md-4">
            <label for="">Nota fiscal de:</label>
            <input type="date" class="form-control" id="nota_de">
        </div>

        <div class="mt-3 col-md-4">
            <label for="">Nota fiscal até:</label>
            <input type="date" class="form-control" id="nota_ate">
        </div>

        <div class="mt-3 col-md-4">
            <label for="contrato" class="form-label" >Tipo de contrato</label>
            <select name="contrato" id="contrato" class="form-control">
                <option value="" selected="">TODOS</option>
                <option value="EMAIL">Email Pessoal</option>
                <option value="EMAIL_COBRANCA">Email Cobrança</option>
            </select>
        </div>
        
        <div class="mt-3 col-md-4">
            <label for="status" class="form-label" >Status</label>
            <select name="status" id="status" class="form-control">
                    <option value="" selected="">Selecione o status</option>
                    <option value="1"> Ativo </option>
                    <option value="2"> Inativo </option>
                    <option value="3"> Cancelado</option>
                    <option value="4"> Suspenso</option>
                    <option value="5"> Inviabilidade Técnica</option>
                    <option value="6"> Novo </option>
                    <option value="7"> Ativo V. Reduzida</option>
            </select>
        </div>

        <div class="mt-3 col-md-4">
            <label for="pessoa" class="form-label" >Tipo de pessoa</label>
            <select name="pessoa" id="pessoa" class="form-control">
                <option value="" selected="">Selecione o tipo de pessoa</option>
                <option value="1">Pessoa física</option>
                <option value="2">Pessoa jurídica</option>
            </select>
        </div>

        <div class="mt-3 col-md-4 ">
                <label class="form-label" for="termo">Termo de aceite do contrato:</label>
                <input type="checkbox" class="form-check-input" name="termo" id="termo" >
        </div>
        
        <div class="mt-3 col-md-4 ">
            <label class="form-label" for="fidelidade">Fidelidade dias restantes</label>
            <input type="number" class="form-control" name="fidelidade" id="fidelidade" >
        </div>
        
        <div class="mt-3 col-md-4 ">
            <label class="form-label" for="comodato">Comodato?</label>
            <input type="checkbox" class="form-check-input" name="comodato" id="comodato" >
        </div>
        
        <div class="mt-3 col-md-4 ">
            <label class="form-label" for="mesNasc">Mês nascimento</label>
            <input type="number" class="form-control" name="mesNasc" id="mesNasc" >
        </div>
        
        <div class="mt-3 col-md-4 ">
            <label class="form-label" for="diaNasc">Dia nascimento</label>
            <input type="number" class="form-control" name="diaNasc" id="diaNasc" >
        </div>

        <div class="mt-3 col-md-4 ">
                <label class="form-label" for="assunto">Assunto</label>
                <input type="text" class="form-control" name="assunto" id="assunto" >
        </div>
        
        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="name" class="form-label">Mensagem</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>

    </div>
    </form>
</div>
<?= $this->endSection() ?>