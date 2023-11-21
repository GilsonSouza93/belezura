<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="p-4">
    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>
                <?php if (isset($register)) : ?>
                    Editar Cliente
                <?php else : ?>
                    Novo Cliente
                <?php endif ?>
            </h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id='submit-btn'>Salvar</button>
        </div>
    </div>

    <form class="card p-4">
        
        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

        <div class="row">
            <div class="mt-3 col-md-6">
                <label for="nomeCliente" class="form-label">Nome Completo</label>
                <input type="text" id="nomeCliente" class="form-control" name="name" placeholder="Insira o Nome Completo" value="<?= isset($register) ? $register->name : '' ?>">
            </div>
            <div class="mt-3 col-md-3">
                <label for="plano" class="form-label">Plano</label>
                <select class="form-control select2" id="plano" aria-label="plano">
                    <option selected>Selecione o Plano</option>
                    <?php foreach ($subscription as $plan) : ?>
                        <option value="<?= $plan['id'] ?>"><?= $plan['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mt-3 col-md-3">
                <label for="onus_id">ONU</label>
                <select class="form-select select2" id="onus_id" name="onus_id" aria-label="Default select example" alue="<?= isset($register) ? $register->onu : '' ?>">
                    <option selected>Selecione a Onu</option>
                    <?php foreach ($onus as $onu) : ?>
                        <option value="<?= $onu['id'] ?>"><?= $onu['onu_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" id="rg" class="form-control" name="rg" placeholder="insira o RG" value="<?= isset($register) ? $register->rg : '' ?>">
            </div>

            <div class="mt-3 col-md-5">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" id="cpf" class="form-control" name="cpf" placeholder="Insira o Cpf" value="<?= isset($register) ? $register->cpf : '' ?>">
            </div>
            <div class="mt-3 col-md-4">
                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                <input type="date" id="dataNascimento" class="form-control" name="date" placeholder="Data de nascimento" value="<?= isset($register) ? $register->date_of_birth : '' ?>">
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-8">
                <label for="emailCliente" class="form-label">E-mail</label>
                <input type="email" id="emailCliente" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= isset($register) ? $register->email : '' ?>">
            </div>
            <div class="mt-3 col-md-4">
                <label for="estadoCivil" class="form-label">Estado Civil</label>
                <select class="form-control select2" id="estadoCivil" aria-label="Estado civil">
                    <option selected>Selecione o Estado Civil</option>
                    <option value="1">----------</option>
                    <option value="1">Solteiro(a)</option>
                    <option value="2">Casado(a)</option>
                    <option value="2">Divórciado(a)</option>
                    <option value="2">Viúvo(a)</option>
                </select>
            </div>

        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="telefone1Cliente" class="form-label">Telefone 1</label>
                <input type="tel" id="telefone1Cliente" class="form-control" name="tel" id="tel" placeholder="Telefone" value="<?= isset($register) ? $register->phone1 : '' ?>">
            </div>
            <div class="mt-3 col-md-3">
                <label for="tipoContato1" class="form-label">Tipo:</label>
                <select class="form-control select2" id="tipoContato1" >
                    <option selected>Tipo do Telefone</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                </select>
            </div>

            <div class="mt-3 col-md-3">
                <label for="telefone2Cliente" class="form-label">Telefone 2</label>
                <input type="tel" id="telefone2Cliente" class="form-control" name="tel" id="tel" placeholder="Telefone" value="<?= isset($register) ? $register->phone2 : '' ?>">
            </div>
            <div class="mt-3 col-md-3">
                <label for="tipoContato2" class="form-label">Tipo:</label>
                <select class="form-control select2" id="tipoContato2" aria-label="Default select example">
                    <option selected>Tipo do Telefone</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="cepCliente" class="form-label">Cep</label>
                <input type="text" id="cepCliente"  class="form-control" id="zipcode" name="zipcode" placeholder="Cep" value="<?= isset($register) ? $register->zipcode : '' ?>">
            </div>

            <div class="mt-3 col-md-5">
                <label for="ruaCliente" class="form-label">Rua</label>
                <input type="text" id="ruaCliente" class="form-control" id="address1" name="address1" placeholder="Rua" value="<?= isset($register) ? $register->address1 : '' ?>">
            </div>
            <div class="mt-3 col-md-4">
                <label for="bairroCliente" class="form-label">Bairro</label>
                <input type="text" id="bairroCliente" class="form-control" id="address2" name="address2" placeholder="Bairro" value="<?= isset($register) ? $register->address2 : '' ?>">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-2">
                <label for="numeroCasaCliente" class="form-label">Número</label>
                <input type="text" id="numeroCasaCliente" class="form-control" id="number" name="number" placeholder="Número" value="<?= isset($register) ? $register->number : '' ?>">
            </div>

            <div class="mt-3 col-md-3">
                <label for="complementoCliente" class="form-label">Complemento</label>
                <input type="text" id="complementoCliente" class="form-control" id="complement" name="complement" placeholder="Complemento" value="<?= isset($register) ? $register->complement : '' ?>">
            </div>

            <div class="mt-3 col-md-3">
                <label for="referenciaCliente" class="form-label">Ponto de Referência</label>
                <input type="text" id="referenciaCliente" class="form-control" id="referencia" name="referencia" placeholder="Ponto de referência" value="<?= isset($register) ? $register->reference_point : '' ?>">
            </div>

            <div class="mt-3 col-md-4">
                <label for="ufCliente" class="form-label">UF</label>
                <select class="form-control select2" id="ufcliente" aria-label="uf cliente">
                    <option selected>UF</option>
                    <option value="1">Acre</option>
                    <option value="2">Alagoas</option>
                    <option value="2">Amapá</option>
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


</script>

<?= $this->endSection() ?>