<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Formulário de cadastro</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id='submit-btn'>Salvar</button>
        </div>
    </div>

    <form>

        <div class="row">
            <div class="mt-3 col">
                <label for="name" class="form-label">Nome completo</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o nome completo">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" name="rg" placeholder="insira o RG">
            </div>

            <div class="mt-3 col-md-5">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" placeholder="Insira o Cpf">
            </div>
            <div class="mt-3 col-md-4">
                <label for="data" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="date" placeholder="Data de nascimento">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="telefone" class="form-label">Telefone 1</label>
                <input type="tel" class="form-control" name="tel" id="tel" placeholder="Telefone">
            </div>
            <div class="mt-3 col-md-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <select class="form-control">
                    <option selected>Tipo do telefone</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                </select>
            </div>

            <div class="mt-3 col-md-3">
                <label for="telefone2" class="form-label">Telefone 2</label>
                <input type="tel" class="form-control" name="tel" id="tel" placeholder="Telefone">
            </div>
            <div class="mt-3 col-md-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Tipo do telefone</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="zipcode" class="form-label">Cep</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Cep">
            </div>

            <div class="mt-3 col-md-5">
                <label for="address1" class="form-label">Rua</label>
                <input type="text" class="form-control" id="address1" name="address1" placeholder="Rua">
            </div>
            <div class="mt-3 col-md-4">
                <label for="address2" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="address2" name="address2" placeholder="Bairro">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-2">
                <label for="number" class="form-label">Número</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="Número">
            </div>

            <div class="mt-3 col-md-3">
                <label for="complement" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento">
            </div>

            <div class="mt-3 col-md-3">
                <label for="referencia" class="form-label">Ponto de referência</label>
                <input type="text" class="form-control" id="referencia" name="referencia"
                    placeholder="Ponto de referência">
            </div>

            <div class="mt-3 col-md-3">
                <label for="uf" class="form-label">UF</label>
                <select class="form-control" aria-label="Default select example">
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

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>

    const submitBtn = document.querySelector('#submit-btn');
    const form = document.querySelector('form');
    const url = '<?= $baseRoute ?>/save';

    submitBtn.addEventListener('click', event => {
        event.preventDefault();

        const formData = new FormData(form);

        fetch(url, {
            method: 'POST',
            body: formData
        }).then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.message);
                } else {
                    alert(data.message);
                    window.location.href = '<?= $baseRoute ?>';
                }
            }).catch(error => {
                console.log(error);
            });
    });


</script>

<?= $this->endSection() ?>