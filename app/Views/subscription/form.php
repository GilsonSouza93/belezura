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
                    Editar plano
                <?php else : ?>
                    Novo plano
                <?php endif ?>
            </h4>        
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id="submit-btn" >Salvar</button>
        </div>
    </div>
    <div class="col-md-8">
        <h6>Dados básicos</h6>
    </div>
    <form>

        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

        <div class="row">
            <div class="mt-3 col-md-10">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-5 col-md-2 form-check">
                <label for="" class="form-label"></label>
                <input type="checkbox" name="debug" class="form-check-input">Pós-pago?
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Contrato</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o contrato</option>
                    <option value="1">Rua Tabareu</option>
                    <option value="1">Av. Tabacudo</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Plano Conta mensalidade</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o plano</option>
                    <option value="1">Rua Tabareu</option>
                    <option value="1">Av. Tabacudo</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Plano conta adesão</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione a adesão</option>
                    <option value="1">Rua Tabareu</option>
                    <option value="1">Av. Tabacudo</option>
                </select>
            </div>
        </div>

        <div class="row ">
            <div class="mt-3 col-md-3">
                <label for="nome" class="form-label" checked>Valor do plano</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="nome" class="form-label" checked>Valor do desconto</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="nome" class="form-label" checked>Desconto no vencimento:</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">Modo de desconto</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o modo</option>
                    <option value="1">Valor fixo</option>
                    <option value="1">Percentual</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="nome" class="form-label" checked>Valor da instalação</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="nome" class="form-label" checked>Instalação valor do desconto máximo</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="nome" class="form-label" checked>Instalação valor do desconto mínimo</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row px-3">
            <div class="mt-3 col-md-4 form-check">
                <label for="" class="form-label"></label>
                <input type="checkbox" name="debug" class="form-check-input">Ativo?
            </div>
            <div class="mt-3 col-md-4 form-check">
                <label for="" class="form-label"></label>
                <input type="checkbox" name="debug" class="form-check-input">Disponível pré-cadastro?
            </div>
            <div class="mt-3 col-md-4 form-check">
                <label for="" class="form-label"></label>
                <input type="checkbox" name="debug" class="form-check-input">Disponível Pré-Cadastro Público ?
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="nome" class="form-label" checked>Demonstrativo do boleto</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="nome" class="form-label" checked>Descrição Serviço Nota Fiscal</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="nome" class="form-label" checked>Observação</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        <div class="col-md-12 mt-4">
            <h6>Dados técnicos</h6>
        </div>
        <div class="row mt-3 col-md-12 py-2">
            <label for="typeInput" class="form-label">Selecione o tipo abaixo</label>
            <select id='typeInput' class="form-control" aria-label="Selecione o tipo">
                <option selected>Selecione o tipo de serviço</option>
                <option value="voip">VOIP</option>
                <option value="radio">Rádio</option>
                <option value="cabo">Cabo</option>
                <option value="fibra">Fibra</option>
                <option value="multimidia">Multimídia</option>
                <option value="tv">TV</option>
                <option value="telefonia">Telefonia</option>
            </select>
        </div>

        <div id="typeDiv">
            <div class="row" id="voip">
                <div class="row"> 
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="thel" class="form-label">Gateway</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Gateway</option>
                            <option value="1">Individual</option>
                        </select>
                    </div>
                    <div class="mt-3 col-md-3">
                        <label for="franquia" class="form-label">Tipo de franquia</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione a franquia</option>
                            <option value="1">Individual</option>
                            <option value="2">Individual local</option>
                            <option value="3">Geral</option>
                            <option value="4">Geral local</option>
                        </select>
                    </div>
                    <div class="mt-3 col-md-3">
                        <label for="nome" class="form-label" checked>Valor limite</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="mt-3 col-md-3">
                        <label for="nome" class="form-label" checked>Valor da franquia</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                
                <div class="row"> 
                    <div class="col-sm-5 col-md-6 mt-3">
                        <label for="uuid" class="form-label">UUID</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-6 mt-3">
                        <label for="parametros" class="form-label">Parâmetros</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Valor da mensalidade pela GateWay?
                    </div>
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Inserir Créditos Automaticamente pela Gateway:
                        </div>
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Auto Bloqueio?
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Tipo mensalidade gateway:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o tipo de mensalidade pela Gateway:</option>
                            <option value="3">-----------</option>
                            <option value="1">Integral</option>
                            <option value="2">Acrescentar</option>
                        </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="uuid" class="form-label">Dias após vencimento para Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Dias após vencimento para aviso de Bloqueio</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">STFC - Tipo de atendimento:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o tipo de zona:</option>
                            <option value="3">-----------</option>
                            <option value="1">Urbano</option>
                            <option value="2">Rural</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">STFC - Tipo de Meio:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o tipo de mensalidade pela Gateway:</option>
                            <option value="3">-----------</option>
                            <option value="1">Cabo Axial</option>
                            <option value="2">Cabo Metálico</option>
                            <option value="2">Satélite</option>
                            <option value="2">Rádio</option>
                            <option value="2">Fibra</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="row" id="radio">
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="parametros" class="form-label">Unidade de velocidade</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione a unidade que vai medir a velocidade</option>
                            <option value="3">-----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Upload</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Download</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Prioridade</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Upload mínimo</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Download mímino</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv4Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv4 Pool</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv6 Pref. Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv6 Pref. Pool</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Burst</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione Burst</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv6 PD Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv6 PD Pool</option>
                            <option value="1">-----------</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="mounth" class="form-label">Tráfego mensal</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Contabilização de tráfego mensal</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Download/Upload</option>
                            <option value="1">Download</option>
                            <option value="1">Download</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="mounth" class="form-label">Valor Tráfego Excedido</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Trafego Excedente Ação:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Reduzir a velocidade</option>
                            <option value="2">Suspender acessoDownload</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Duplicação norturna
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="noturna" class="form-label">Início da duplicação nortuna</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="noturna" class="form-label">Fim da duplicação nortuna</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Auto Bloqueio
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para aviso de Bloqueio</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para reduzir velocidade</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Exibir Sici?
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Faixa Sici:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Reduzir a velocidade</option>
                            <option value="2">Suspender acessoDownload</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">DICI - setor que será atendido:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Urbano</option>
                            <option value="2">Rural</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Lista de endereço</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="trafego" class="form-label">Modo Velocidade Reduzida</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>  
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Financeiro:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Upload Red. Financeiro</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Lista de endereço para redução</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="modo" class="form-label">Modo Velocidade Reduzida por Franquia</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>  
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Franquia</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Franquia</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Upload Red. Franquia:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy In:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy Out:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 In:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 Out:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy In(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy Out(redução)</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 In(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 Out(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="cmts_arch" class="form-label">CMTS Arquivo:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="cmts_arch" class="form-label">Filtro</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                </div>
                
            </div>   
            
            <div class="row" id="cabo">
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="parametros" class="form-label">Unidade de velocidade</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione a unidade que vai medir a velocidade</option>
                            <option value="3">-----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Upload</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Download</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Prioridade</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Upload mínimo</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Download mímino</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv4Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv4 Pool</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv6 Pref. Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv6 Pref. Pool</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Burst</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione Burst</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv6 PD Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv6 PD Pool</option>
                            <option value="1">-----------</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="mounth" class="form-label">Tráfego mensal</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Contabilização de tráfego mensal</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Download/Upload</option>
                            <option value="1">Download</option>
                            <option value="1">Download</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="mounth" class="form-label">Valor Tráfego Excedido</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Trafego Excedente Ação:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Reduzir a velocidade</option>
                            <option value="2">Suspender acessoDownload</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Duplicação norturna
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="noturna" class="form-label">Início da duplicação nortuna</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="noturna" class="form-label">Fim da duplicação nortuna</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Auto Bloqueio
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para aviso de Bloqueio</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para reduzir velocidade</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Exibir Sici?
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Faixa Sici:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Reduzir a velocidade</option>
                            <option value="2">Suspender acessoDownload</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">DICI - setor que será atendido:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Urbano</option>
                            <option value="2">Rural</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Lista de endereço</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="trafego" class="form-label">Modo Velocidade Reduzida</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>  
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Financeiro:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Upload Red. Financeiro</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Lista de endereço para redução</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="modo" class="form-label">Modo Velocidade Reduzida por Franquia</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>  
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Franquia</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Franquia</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Upload Red. Franquia:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy In:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy Out:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 In:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 Out:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy In(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy Out(redução)</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 In(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 Out(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="cmts_arch" class="form-label">CMTS Arquivo:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="cmts_arch" class="form-label">Filtro</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-6 mt-3">
                        <label for="cmts_arch" class="form-label">Parâmetros Radius</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                    <div class="col-sm-5 col-md-6 mt-3">
                        <label for="cmts_arch" class="form-label">Parâmetros ONU</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                </div>
                
            </div>   
            
            <div class="row" id="fibra">
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="parametros" class="form-label">Unidade de velocidade</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione a unidade que vai medir a velocidade</option>
                            <option value="3">-----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Upload</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Download</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Prioridade</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Upload mínimo</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="uuid" class="form-label">Download mímino</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv4Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv4 Pool</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv6 Pref. Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv6 Pref. Pool</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Burst</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione Burst</option>
                            <option value="3">-----------</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="parametros" class="form-label">Ipv6 PD Pool</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>Selecione o Ipv6 PD Pool</option>
                            <option value="1">-----------</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="mounth" class="form-label">Tráfego mensal</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Contabilização de tráfego mensal</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Download/Upload</option>
                            <option value="1">Download</option>
                            <option value="1">Download</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="mounth" class="form-label">Valor Tráfego Excedido</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Trafego Excedente Ação:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Reduzir a velocidade</option>
                            <option value="2">Suspender acessoDownload</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Duplicação norturna
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="noturna" class="form-label">Início da duplicação nortuna</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="noturna" class="form-label">Fim da duplicação nortuna</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Auto Bloqueio
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para aviso de Bloqueio</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Dias após vencimento para reduzir velocidade</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Exibir Sici?
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">Faixa Sici:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Reduzir a velocidade</option>
                            <option value="2">Suspender acessoDownload</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="trafego" class="form-label">DICI - setor que será atendido:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Urbano</option>
                            <option value="2">Rural</option>
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="noturna" class="form-label">Lista de endereço</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="trafego" class="form-label">Modo Velocidade Reduzida</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>  
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Financeiro:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Upload Red. Financeiro</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Lista de endereço para redução</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="modo" class="form-label">Modo Velocidade Reduzida por Franquia</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Kbps - Quilobits</option>
                            <option value="2">Mbps - Megabits</option>
                            <option value="2">Gbps - Gigabits</option>  
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Franquia</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Download Red. Franquia</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="red" class="form-label">Upload Red. Franquia:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy In:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy Out:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 In:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 Out:</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy In(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy Out(redução)</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 In(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="red" class="form-label">Policy V6 Out(redução):</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="cmts_arch" class="form-label">CMTS Arquivo:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-12 mt-3">
                        <label for="cmts_arch" class="form-label">Filtro</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-6 mt-3">
                        <label for="cmts_arch" class="form-label">Parâmetros Radius</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                    <div class="col-sm-5 col-md-6 mt-3">
                        <label for="cmts_arch" class="form-label">Parâmetros ONU</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                </div>
                
            </div>   
            <div class="row" id="multimidia">
                <div class="row">
                        <div class="col-sm-5 col-md-4 mt-3">
                            <label for="cmts_arch" class="form-label">UUID</label>
                            <input type="text" class="form-control" name="name" placeholder="">  
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="modo" class="form-label">Gateway</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option> 
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Parâmetros JSON</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                </div>    
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Auto Bloqueiro
                    </div>
                    
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Dias após vencimento para Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Dias após vencimento para aviso de Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                </div>    
            
            </div>
            <div class="row" id="tv">
                <div class="row">
                        <div class="col-sm-5 col-md-3 mt-3">
                            <label for="cmts_arch" class="form-label">UUID</label>
                            <input type="text" class="form-control" name="name" placeholder="">  
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="modo" class="form-label">Gateway</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option> 
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="cmts_arch" class="form-label">Gateway ID</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="cmts_arch" class="form-label">Parâmetros</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                </div>    
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Auto Bloqueiro
                    </div>
                    
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Nome do pacote</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Dias após vencimento para aviso de Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Dias após vencimento para Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                </div>    
            <div class="row" id="telefonia">
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="cmts_arch" class="form-label">Valor Limite:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="cmts_arch" class="form-label">Valor da franquia</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>
                
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="modo" class="form-label">Gateway</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option> 
                        </select>
                    </div>
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="modo" class="form-label">Tipo da franquia</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Individual</option>
                            <option value="2">Individual local</option>
                            <option value="3">Geral</option> 
                            <option value="4">Geral Local</option> 
                        </select>
                    </div>      
                </div>    
                
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Valor da Mensalidade pela Gateway:
                    </div>
                    
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">UUID</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Parâmetros:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                    <div class="col-sm-5 col-md-3 mt-3">
                        <label for="modo" class="form-label">Tipo mensalidade gateway:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Integral</option>
                            <option value="2">Acrescentar</option>
                        </select>
                    </div>      
                </div>    
                <div class="row">
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Inserir Créditos Automaticamente pela Gateway:
                    </div>
                    <div class="col-sm-5 col-md-3 mt-5">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                        <input type="checkbox" class="form-check-input" name="" id=""> Auto Bloqueio?
                    </div>
                    
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Dias após vencimento para Bloqueio:</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
                    <div class="col-sm-5 col-md-4 mt-3">
                        <label for="cmts_arch" class="form-label">Dias após vencimento para aviso de Bloqueio::</label>
                        <input type="text" class="form-control" name="name" placeholder="">  
                    </div>        
     
                </div>    
                <div class="row">
                    <div class="col-sm-5 col-md-6 mt-3">
                        <label for="modo" class="form-label">STFC - Tipo de atendimento:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Urbano</option>
                            <option value="2">Rural</option>
                        </select>
                    </div> 
                    <div class="col-sm-5 col-md-6 mt-3">
                        <label for="modo" class="form-label">STFC - Tipo de Meio:</label>
                        <select class="form-control" aria-label="Tipo de franquia">
                            <option selected>----------</option>
                            <option value="1">Cabo coaxial</option>
                            <option value="1">Cabo metálico</option>
                            <option value="1">Satélite</option>
                            <option value="1">Rádio</option>
                            <option value="1">Fibra</option>
                        </select>
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


        const updateType = () => {
            const typeInput = document.getElementById('typeInput');
        
            const typeDivChildren = document.querySelectorAll('#typeDiv > div')

            for (let i = 0; i < typeDivChildren.length; i++) {
                typeDivChildren[i].style.display = 'none'
            }

            const type = typeInput.value

            document.getElementById(type).style.display = 'block'
        }

        document.getElementById('typeInput').addEventListener('change', updateType)
        document.addEventListener('DOMContentLoaded', updateType);

    </script>

<?= $this->endSection() ?>