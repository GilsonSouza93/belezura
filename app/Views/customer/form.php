<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div>
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

        <h4>
            Informações Gerais
        </h4>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="nomeCliente" class="form-control" name="name" placeholder="Insira o Nome Completo" value="<?= isset($register) ? $register->name : '' ?>">
                    <label for="nomeCliente">Nome Completo</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <select class="form-select" id="plano" aria-label="plano" required>
                        <?php foreach ($subscription as $plan) : ?>
                            <option value="<?= $plan['id'] ?>"><?= $plan['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <label for="plano">Plano</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <select class="form-select" id="onu_id" name="onu_id" value="<?= isset($register) ? $register->onu_id : '' ?>">
                        <?php foreach ($onus as $onu) : ?>
                            <option value="<?= $onu['id'] ?>"><?= $onu['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="onu_id">ONU</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <select class="form-select" id="pop_id" name="pop_id">
                        <?php foreach ($pops as $pop) : ?>
                            <option value="<?= $pop['id'] ?>"><?= $pop['city'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="pop_id">POP</label>
                </div>
            </div>
        </div>

        <h4>
            Contato
        </h4>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="email" id="emailCliente" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= isset($register) ? $register->email : '' ?>">
                    <label for="emailCliente">E-mail</label>
                </div>
            </div>

            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="tel" id="telefone1Cliente" class="form-control" name="phones" id="phones" placeholder="Telefone" value="<?= isset($register) ? $register->phones : '' ?>">
                    <label for="telefone1Cliente">Telefone</label>
                </div>
            </div>
        </div>

        <h4>
            Endereço
        </h4>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Cep" value="<?= isset($register) ? $register->zipcode : '' ?>">
                    <label for="zipcode">Cep</label>
                </div>

                <div class="mt-3">
                    <button type="button" class="btn btn-success" onclick="searchCep()">Buscar Cep</button>
                </div>

            </div>

            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="address1" name="address1" placeholder="Rua" value="<?= isset($register) ? $register->address1 : '' ?>" onclick="showMessageToFillZipCode()">
                    <label for="address1">Rua</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Bairro" value="<?= isset($register) ? $register->address2 : '' ?>" onclick="showMessageToFillZipCode()">
                    <label for="address2">Bairro</label>
                </div>
            </div>

        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="number" name="number" placeholder="Número" value="<?= isset($register) ? $register->number : '' ?>" onclick="showMessageToFillZipCode()">
                    <label for="number">Número</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento" value="<?= isset($register) ? $register->complement : '' ?>" onclick="showMessageToFillZipCode()">
                    <label for="complement">Complemento</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="city" name="city" placeholder="Ponto de referência" value="<?= isset($register) ? $register->city : '' ?>" onclick="showMessageToFillZipCode()">
                    <label for="city">Cidade</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="state" name="state" placeholder="Ponto de referência" value="<?= isset($register) ? $register->state : '' ?>" onclick="showMessageToFillZipCode()">
                    <label for="state">Estado</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="reference_point" name="reference_point" placeholder="Ponto de referência" value="<?= isset($register) ? $register->reference_point : '' ?>" onclick="showMessageToFillZipCode()">
                    <label for="reference_point">Ponto de Referência</label>
                </div>
            </div>

        </div>

        <h4>
            Informações Pessoais
        </h4>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="rg" class="form-control" name="rg" placeholder="insira o RG" value="<?= isset($register) ? $register->rg : '' ?>">
                    <label for="rg">RG</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="cpf" class="form-control" name="cpf" placeholder="Insira o Cpf" value="<?= isset($register) ? $register->cpf : '' ?>">
                    <label for="cpf">CPF</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" placeholder="Data de nascimento" value="<?= isset($register) ? $register->date_of_birth : '' ?>">
                    <label for="date_of_birth">Data de Nascimento</label>
                </div>
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
                if (data.status === 'success') {
                    showToast(data.message, 'success');
                    setTimeout(() => {
                        window.location.href = '<?= $baseRoute ?>';
                    }, 1000);
                } else {
                    showToast(data.message, 'error');
                }
            }).catch(error => {
                console.log(error);
            });
    });

    const zipCode = document.querySelector('#zipcode');

    const showMessageToFillZipCode = () => {

        if (zipCode.value === '') {
            showToast('Preencha o CEP primeiro, para que os campos sejam preenchidos automaticamente', 'warning');
        }
    }

    const searchCep = () => {
        const zipCodeValue = zipCode.value.replace('-', '');
        if(!zipCodeValue) {
            showToast('Preencha o CEP primeiro', 'warning');
            return;
        }
        const url = `https://viacep.com.br/ws/${zipCodeValue}/json/`;


        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.erro) {
                    showToast('CEP não encontrado', 'error');
                } else {
                    document.querySelector('#address1').value = data.logradouro;
                    document.querySelector('#address2').value = data.bairro;
                    document.querySelector('#city').value = data.localidade;
                    document.querySelector('#state').value = data.uf;

                    showToast('CEP encontrado', 'success');
                }
            })
            .catch(error => {
                showToast('CEP não encontrado', 'error');
                console.log(error);
            });
    };
</script>

<?= $this->endSection() ?>