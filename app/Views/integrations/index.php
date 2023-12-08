<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="p-4">

    <h2><?= $tittle ?></h2>

    <div class="card p-4 mt-4">
        <h4>
            Integração Assas
        </h4>
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Nome do Fornecedor" name="name" required value="<?= isset($register) ? $register->name : '' ?>">
                    <label for="name">
                        Chave API
                    </label>
                </div>
                <span class="mt-2">
                    Sua chave de API oferece acesso total para visualizar e modificar seus dados do Asaas. Trate a chave como uma senha e tenha cuidado ao compartilhá-la.
                </span>
            </div>
            <div class="col-md-4">
                <button class="btn btn-success p-3 me-2" id="searchBtn">Salvar</button>
                <button class="btn btn-success p-3" onclick="openModalFilter()">Testar</button>
            </div>
        </div>
    </div>

    <div class="card p-4 mt-4">
        <h4>
            Outras integrações
        </h4>
    </div>
</div>
</div>
<!-- Filtro modal -->

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?= $this->endSection() ?>