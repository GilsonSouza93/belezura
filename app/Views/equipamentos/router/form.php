<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Roteador</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="thel" class="form-label">Fonte</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione a Fonte</option>
                    <option value="1">Fonte 01</option>
                    <option value="1">Fonte 02</option>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="name" class="form-label">Código</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o código da onu">
            </div>
            <div class="mt-3 col-md-3">
                <label for="model" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="model" placeholder="Insira a descrição">
            </div>
            <div class="mt-3 col-md-3">
                <label for="qty" class="form-label">Portas</label>
                <input type="text" class="form-control" name="qty" placeholder="Insira a porta">
            </div>

        </div>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="price" class="form-label">Parâmetros</label>
                <input type="text" class="form-control" name="price" placeholder="Insira o parâmetro">
            </div>
            <div class="mt-3 col-md-6">
                <label for="id_valor_custo" class="form-label">Olts</label>
                <input type="text" class="form-control" name="valor_custo" placeholder="OLTS">
            </div>
        </div>


    </form>


    <?= $this->endSection() ?>