<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">
    <h2>
        <?php if (isset($register)) : ?>
            Editar Cliente
        <?php else : ?>
            Novo Cliente
        <?php endif ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8"></div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id='submit-btn'>Salvar</button>
        </div>
    </div>

    <form>

        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

        <h4>
            Informações Gerais
        </h4>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="corporate_reason" class="form-control" name="corporate_reason" placeholder="Razão social" value="<?= isset($register) ? $register->corporate_reason : '' ?>" required>
                    <label for="corporate_reason">Razão Social</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="fantasy_name" class="form-control" name="fantasy_name" placeholder="Nome Fantasia" value="<?= isset($register) ? $register->fantasy_name : '' ?>">

                    <label for="fantasy_name">Nome Fantasia</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="responsible" class="form-control" name="responsible" placeholder="Responsável" value="<?= isset($register) ? $register->responsible : '' ?>">

                    <label for="responsible">Responsável</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="cpf_responsible" class="form-control" name="cpf_responsible" placeholder="CPF do Responsável" value="<?= isset($register) ? $register->cpf_responsible : '' ?>" required>

                    <label for="cpf_responsible">CPF do Responsável</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" id="cpnj" class="form-control" name="cpnj" placeholder="CNPJ" value="<?= isset($register) ? $register->cnpj : '' ?>">
                    <label for="cpnj">CNPJ</label>
                </div>
            </div>

            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="date" class="form-control" name="foundation_date" id="foundation_date" placeholder="Data Fundação" value="<?= isset($register) ? $register->foundation_date : '' ?>">
                    <label for="foundation_date">Data Fundação</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="state_registration" name="state_registration" placeholder="Inscrição Estadual" value="<?= isset($register) ? $register->state_registration : '' ?>">
                    <label for="state_registration">Inscrição Estadual</label>
                </div>
                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="municipal_registration" name="municipal_registration" placeholder="Inscrição Municipal" value="<?= isset($register) ? $register->municipal_registration : '' ?>">
                    <label for="municipal_registration">Inscrição Municipal</label>
                </div>
                <div class="mt-3 form-floating">
                    <select class="form-control" name="icms" id="icms">
                        <option value="">----</option>
                    </select>
                    <label for="icms">Contribuinte ICMS</label>
                </div>
                <div class="col">
                    <div class="mt-3 form-floating">
                        <select class="form-control" name="type" id="type">
                            <option value="">Outros</option>
                        </select>
                        <label for="type">Tipo</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="my-1 form-floating">
                        <label for="tax_substitute" class="form-check-label">Substituto Tributário</label>
                        <input type="checkbox" name="tax_substitute" id="tax_substitute" class="form-check-input" <?= (isset($register) and $register->tax_substitute == 1) ? 'checked' : '' ?>>
                    </div>
                </div>
            </div>
        </div>

        <h4>
            Dados para Contato
        </h4>

        <div class="row mb-4">
            <div class="col">
                <div class="mt-3 form-floating">
                    <input class="form-control" type="email" name="email" id="email" value="<?= isset($register) ? $register->email : '' ?>">
                    <label for="email">E-mail</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="mt-1 form-floating">
                    <input type="tel" class="form-control" name="phones" id="phones" placeholder="Telefone" value="<?= isset($register) ? $register->phones : '' ?>" readonly onclick="openPhoneModal()">
                    <label for="phones">Telefone</label>
                </div>
            </div>
            <div class="col">
                <div class="mt-1 form-floating">
                    <div class="mt-1 form-floating">
                        <input type="text" id="emailCliente" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= isset($register) ? $register->email : '' ?>">
                        <label for="emailCliente">E-mail</label>
                    </div>
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

    const zipCode = document.querySelector('#zipced');

    const showMenssageToFillZipCode = () => {

        const showMessageToFillZipCode = () => {

            if (zipCode.value === '') {
                showToast('Preencha o CEP primeiro, para que os campos sejam preenchidos automaticamente', 'warning');
            }
        }

        const searchCep = () => {
            const zipCodeValue = zipCode.value.replace('-', '');
            if (!zipCodeValue) {
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

        // function openPhoneModal() {
        //     const numberListModal = document.querySelector('#numberListModal');
        //     numberListModal.innerHTML = 'Nenhum telefone cadastrado';

        //     const phones = document.querySelector('#phones').value;

        //     if (phones) {
        //         numberListModal.innerHTML = '';
        //         const phonesArray = phones.split(',');

        //         phonesArray.forEach(phone => {
        //             const li = document.createElement('li');
        //             li.classList.add('list-group-item');
        //             li.classList.add('d-flex');
        //             li.classList.add('justify-content-between');
        //             li.classList.add('align-items-center');
        //             li.classList.add('mb-2');
        //             li.innerHTML = `
        //     ${phone}
        //     <button type="button" class="btn btn-danger" onclick="removePhoneFromList(this)">
        //         Remover
        //     </button>
        // `;
        //             li.dataset.value = phone;

        //             numberListModal.appendChild(li);
        //         });
        //     }

        //     $('#phoneModal').modal('show');
        // }


    }
</script>

<?= $this->endSection() ?>