
 <?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2><?= $tittle ?></h2>
    
    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar um produto</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Nome do produto</label>
                <input type="text" class="form-control"  name="name" placeholder="Insira o nome do produto">
            </div>
            <div class="mt-3 col-md-4">
                <label for="model" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="model" placeholder="Insira o modelo">
            </div>
            <div class="mt-3 col-md-4">
                <label for="qty" class="form-label">Quantidade</label>
                <input type="text" class="form-control" name="qty" placeholder="Insira a quantidade de entrada">
            </div>

        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="price" class="form-label">Preço</label>
                <input type="text" class="form-control" name="price" placeholder="Insira o preço">
            </div>

            <div class="mt-3 col-md-4">
                <label for="uf" class="form-label">Categoria</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione a categoria</option>
                    <option value="1">Roteador</option>
                    <option value="2">ONU</option>
                    <option value="2">ONT</option>
                    <option value="2">EPI</option>
                    <option value="2">Splitter</option>
                    <option value="2">OLT</option>
                    <option value="2">Cabos</option>
                    <option value="2">Adicionar nova categoria</option>                    
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="data" class="form-label">Data de entrada</label>
                <input type="date" class="form-control" name="date" placeholder="Insira a data de entrada">
            </div>
        </div>
        
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="uf" class="form-label">Fornecedor</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o fornecedor</option>
                    <option value="1">Home Telecomunicações</option>
                    <option value="2">TOPVendas</option>
                    <option value="2">TechInfo</option>
                    <option value="2">Adicionar um novo fornecedor</option>                    
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="uf" class="form-label">Marca</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione a marca</option>
                    <option value="1">Sumec</option>
                    <option value="2">2Flex</option>
                    <option value="2">Transcend</option>
                    <option value="2">Adicionar uma nova marca</option>                    
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="sku" class="form-label">SKU</label>
                <input type="text" class="form-control" name="sku" placeholder="Insira o SKU">
            </div>
        </div>

    </form>
</div>

<?= $this->endSection() ?>