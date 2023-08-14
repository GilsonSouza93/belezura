<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Plano</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>
    <div class="col-md-8">
        <h6>Dados básicos</h6>
    </div>
    <form>

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
        <div class="row ">
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
        <div class="row ">
            <div class="mt-3 col-md-6">
                <label for="nome" class="form-label" checked>Demonstrativo do boleto</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="nome" class="form-label" checked>Descrição Serviço Nota Fiscal</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row ">
            <div class="mt-3 col-md-12">
                <label for="nome" class="form-label" checked>Observação</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        <div class="col-md-12 mt-4">
            <h6>Dados técnicos</h6>
        </div>
        <div class="mt-3 col-md-12">
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
            <div id="voip">
               <div class="mt-3 col-md-4">
                <label for="thel" class="form-label">Tipo de franquia</label>
                    <select class="form-control" aria-label="Tipo de franquia">
                        <option selected>Selecione a franquia</option>
                        <option value="1">Individual</option>
                        <option value="2">Individual local</option>
                        <option value="3">Geral</option>
                        <option value="4">Geral local</option>
                    </select>
               </div>
            </div>
    
            <div id="radio">
                RADIO
            </div>
        </div>
    </form>
 
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
    <script>
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