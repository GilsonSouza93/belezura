<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card bg-black m-2 p-4">
    <h1 class="text-white">
        <?= $tittle ?>
    </h1>

    <form>
        <div class="row">
            <div class="col">
                <label for="name" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" placeholder="insira o RG">
            </div>

            <div class="col-md-5">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira o Cpf">
            </div>
            <div class="col-md-4">
                <label for="data" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="date" id="date" placeholder="Data de nascimento">
            </div>
        </div>


        <h3 class="mt-2">Contatos</h3>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3">
                <label for="telefone" class="form-label">Telefone 1</label>
                <input type="tel" class="form-control" name="tel" id="tel" placeholder="Telefone">
            </div>
            <div class="col-md-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <select class="form-label" aria-label="Default select example">
                    <option selected>Tipo do telefone</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="telefone2" class="form-label">Telefone 2</label>
                <input type="tel" class="form-control" name="tel" id="tel" placeholder="Telefone">
            </div>
            <div class="col-md-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <select class="form-label" aria-label="Default select example">
                    <option selected>Tipo do telefone</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                </select>
            </div>
        </div>

        <h3 class="mt-2">Endereço</h3>

        <div class="row mt-2">
            <div class="col-md-3">
                <label for="zipcode" class="form-label">Cep</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Cep">
            </div>

            <div class="col-md-5">
                <label for="address1" class="form-label">Rua</label>
                <input type="text" class="form-control" id="address1" name="address1" placeholder="Rua">
            </div>
            <div class="col-md-4">
                <label for="address2" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="address2" name="address2" placeholder="Bairro">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="number" class="form-label">Número</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="Número">
            </div>

            <div class="col-md-3">
                <label for="complement" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento">
            </div>

            <div class="col-md-3">
                <label for="referencia" class="form-label">Ponto de referência</label>
                <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Ponto de referência">
            </div>

            <div class="col-md-3">
                <label for="uf" class="form-labe">UF</label>
                <select class="form-label" aria-label="Default select example">
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
    </form>
</div>

<div class="card bg-black m-2 p-4">

    <?= $this->endSection() ?>