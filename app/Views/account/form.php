<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row py-3 my-3">
        <div class="col-md-8">
            <h4>
                <?php if (isset($register)) : ?>
                    Editar formulário
                <?php else : ?>
                    Novo formulário
                <?php endif ?>
            </h4>        
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id='submit-btn'>Salvar</button>
        </div>
    </div>

    <form>

        <?php if (isset($register)) : ?>
            <input type="hidden" name="id" value="<?= $register->id ?>">
        <?php endif ?>

    <form id="form">
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Nome" name="name" required>
                    <label for="name">Nome</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phone1" placeholder="Celular" name="phone1">
                    <label for="phone1">Celular</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phone2" placeholder="Celular Adicional" name="phone2">
                    <label for="phone2">Telefone adicional</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating">
                    <input type="text" class="form-control" id="password" placeholder="Senha" name="password">
                    <label for="password">Senha</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <input type="text" class="form-control" id="passwordConfirm" placeholder="Confirmar Senha" name="passwordConfirm">
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
                                <label class="form-check-label" for="AddCustumer">Adicionar clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultCustomer">
                                <label class="form-check-label" for="consultCustomer">Consultar clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteCustomer">
                                <label class="form-check-label" for="deleteCustomer">Excluir clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editCostumer">
                                <label class="form-check-label" for="editCostumer">Editar clientes</label>
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
                                <label class="form-check-label" for="createContract">Criar contrato</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editContract">
                                <label class="form-check-label" for="editContract">Editar contrato</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="SeeReports">
                                <label class="form-check-label" for="SeeReports">Ver relatórios</label>
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