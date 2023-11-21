<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>


    <form id="form">
        <input type="hidden" name="id" id="id" value="<?= $register->id ?? '' ?>">
        <div class="row py-3 my-3">
            <div class="col-md-8">
            </div>
            <div class="col-md-4 btn-group">
                <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
                <button class="btn btn-success" id="submit-btn">Salvar</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Nome" name="name" required value="<?= $register->name ?? '' ?>">
                    <label for="name">Nome</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" required value="<?= $register->email ?? '' ?>">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phone1" placeholder="Celular" name="phone1" required value="<?= $register->phone1 ?? '' ?>">
                    <label for="phone1">Celular</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phone2" placeholder="Celular Adicional" name="phone2" value="<?= $register->phone2 ?? '' ?>">
                    <label for="phone2">Telefone Adicional</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating">
                    <input type="text" class="form-control" id="password" placeholder="Senha" name="password" <?= isset($register) ? '' : 'required' ?>>
                    <label for="password">Senha</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <input type="text" class="form-control" id="passwordConfirm" placeholder="Confirmar Senha" name="passwordConfirm" <?= isset($register) ? '' : 'required' ?>>
                    <label for="passwordConfirm">Confirma Senha</label>
                </div>
            </div>
        </div>
        <!-- <div class="row " style="height: 300px;">
            <div class="col border m-4 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Clientes</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="AddCustomer">
                                <label class="form-check-label" for="AddCustumer">Adicionar Clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultCustomer">
                                <label class="form-check-label" for="consultCustomer">Consultar Clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteCustomer">
                                <label class="form-check-label" for="deleteCustomer">Excluir Clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editCostumer">
                                <label class="form-check-label" for="editCostumer">Editar Clientes</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-4 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Administrativo</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="createContract">
                                <label class="form-check-label" for="createContract">Criar Contrato</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editContract">
                                <label class="form-check-label" for="editContract">Editar Contrato</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="SeeReports">
                                <label class="form-check-label" for="SeeReports">Ver Relatórios</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-4 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Suporte</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultCTO">
                                <label class="form-check-label" for="consultCTO">Consultar CTO's</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addCTO">
                                <label class="form-check-label" for="addCTO">Adicionar CTO</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteCTO">
                                <label class="form-check-label" for="deleteCTO">Excluir CTO</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-4 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Financeiro</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addPay">
                                <label class="form-check-label" for="addPay">Adicionar conta a
                                    pagar</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="issueDRE">
                                <label class="form-check-label" for="issueDRE">Emitir DRE</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="issueNf">
                                <label class="form-check-label" for="issueNf">Emitir nota fiscal</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="issueTicket">
                                <label class="form-check-label" for="issueTicket">Emitir boleto</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteTicket">
                                <label class="form-check-label" for="deleteTicket">Excluir boleto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row " style="height: 300px;">
            <div class="col border m-4 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Frota</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultMap">
                                <label class="form-check-label" for="consultMap">Consultar mapa</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addVehicle">
                                <label class="form-check-label" for="addVehicle">Adicionar veiculo a
                                    rota</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteVehicle">
                                <label class="form-check-label" for="deleteVehicle">Excluir veiculo a
                                    rota</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-4 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Estoque</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addProduct">
                                <label class="form-check-label" for="addProduct">Adicionar produto</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editProduct">
                                <label class="form-check-label" for="editProduct">Editar protudo</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultStock">
                                <label class="form-check-label" for="consultStock">Consultar estoque</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-4 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Clientes</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                    input</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-4 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Configuração</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addCount">
                                <label class="form-check-label" for="addCount">Adicionar conta</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editCount">
                                <label class="form-check-label" for="editCount">Editar conta </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteCount">
                                <label class="form-check-label" for="deleteCount">Excluir conta</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </form>
</div>

</form>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
    const submitBtn = document.querySelector('#submit-btn');
    const form = document.querySelector('form');
    const url = '<?= $baseRoute ?>/save';

    form.addEventListener('submit', event => {
        event.preventDefault();
        const data = formatBody();
        if (!data) return;

        showLoading();

        fetch(url, {
                method: 'POST',
                body: data
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

    function formatBody() {
        const body = {
            name: document.querySelector('#name').value,
            email: document.querySelector('#email').value,
            phone1: document.querySelector('#phone1').value,
            phone2: document.querySelector('#phone2').value,
            password: document.querySelector('#password').value,
            passwordConfirm: document.querySelector('#passwordConfirm').value,
            <?php if (isset($register)) : ?>
                id: document.querySelector('#id').value,
            <?php endif ?>
        }

        if (body.password != body.passwordConfirm) {
            showToast('As senhas não conferem', 'error');
            return;
        }

        if (body.password.length < 6 && !body.id) {
            showToast('A senha deve ter no mínimo 6 caracteres', 'error');
            return;
        }

        return JSON.stringify(body);
    }
</script>

<?= $this->endSection() ?>