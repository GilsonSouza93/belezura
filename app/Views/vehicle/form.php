<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Veículo</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success">Salvar</button>
        </div>
    </div>

    <form>
    

        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" id="modelo" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" id="placa" class="form-control" name="name" placeholder="">
            </div>
            <div class="mt-3 col-md-4">
                <label for="ufveiculo" class="form-label">UF</label>
                <select class="form-control" id="ufveiculo" aria-label="uf cliente">
                    <option selected>UF</option>
                    <option value="1">Acre</option>
                    <option value="2">Alagoas</option>
                    <option value="2">amapá</option>
                    <option value="2">Amazonas</option>
                    <option value="2">Bahia</option>
                    <option value="2">Ceará</option>
                    <option value="2">Espírito Santo</option>
                    <option value="2">Goiás</option>
                    <option value="2">Maranhão</option>
                    <option value="2">Mato Grosso</option>
                    <option value="2">Mato Grosso do Sul</option>
                    <option value="2">Minas</option>
                    <option value="2">Pará</option>
                    <option value="2">Paraíba</option>
                    <option value="2">Pernambuco</option>
                    <option value="2">Piauí</option>
                    <option value="2">Rio Grande do Norte</option>
                    <option value="2">Rio Grande do Sul</option>
                    <option value="2">Rondônia</option>
                    <option value="2">Roraima</option>
                    <option value="2">Santa Catarina</option>
                    <option value="2">São Paulo</option>
                    <option value="2">Sergipe</option>
                    <option value="2">Tocatins</option>
                    <option value="2">Distrito Federal</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="mt-3 col-md-4">
                    <label for="local" class="form-label">Local</label>
                    <input type="text" id="local" class="form-control" name="name" placeholder="">
                </div>
                <div class="mt-5 col-md-4">
                    <label for="disponivel" class="form-label "></label>
                    <input type="checkbox" name="" id="disponivel"> Disponível para OS?
                </div>
                <div class="mt-3 col-md-4">
                    <label for="obsveiculo" class="form-label">Observação</label>
                    <input type="text" id="obsveiculo" class="form-control" name="name" placeholder="">
                </div>
            </div>
        </div>       

    </form>
</div>
<?= $this->endSection() ?>