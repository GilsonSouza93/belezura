<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Poste</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>

    <div class="row">
            <div class="mt-3 col-md-4">
                <label for="price" class="form-label"></label>
                <input type="checkbox" name="active" id="">CTO
            </div>
            <div class="mt-3 col-md-4">
                <label for="price" class="form-label"></label>
                <input type="checkbox" name="active" id="">Caixa Hermétrica
            </div>
            <div class="mt-3 col-md-4">
                <label for="price" class="form-label"></label>
                <input type="checkbox" name="active" id="">Rádio
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Identificação</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="name" class="form-label">Latitude e Longitude</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4"
            >
                <label for="thel" class="form-label">POP</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Selecione o POP</option>
                    <option value="1">Rua Tabareu</option>
                    <option value="1">Av. Tabacudo</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="name" class="form-label">Observação</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-6">
                <label for="name" class="form-label">Localização</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="price" class="form-label"></label>
                <input type="checkbox" name="active" id="">Ativo
            </div>
            <div class="mt-3 col-md-4">
                <label for="price" class="form-label"></label>
                <input type="checkbox" name="active" id="">Caixa subterrânea
            </div>
            <div class="mt-3 col-md-4">
                <label for="price" class="form-label">DJSON</label>
                <input type="text" class="form-control" name="price" placeholder="Insira o parâmetro">
            </div>
        </div>


    </form>
</div>
<?= $this->endSection() ?>