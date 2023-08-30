<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Ip Pool</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>
    

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Nome do Pool</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Range</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Next Range</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Radius Args</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-5 col-md-4">
                <label for="name" class="form-label"></label>
                <input type="checkbox" name="" id="">Ordenar IPs por Rede /24:
            </div>
            <div class="mt-5 col-md-4">
                <label for="name" class="form-label"></label>
                <input type="checkbox" name="" id="">Ativo?
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-12">
                <label for="name" class="form-label">Observação</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>
        

    </form>
</div>
<?= $this->endSection() ?>