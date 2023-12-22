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

        <div class="row mb-4">
                <div class="form-floating col-md-10 ">
                    <input type="text" class="form-control" id="name" placeholder="Nome" name="name" required value="<?= $register->name ?? '' ?>">
                    <label for="name">Nome do Grupo</label>
                </div>
                <div class="form-check form-switch mt-2 col-md-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="admin" name="admin">
                    <label class="form-check-label" for="admin">Todas as permissões (Admin)</label>
                </div>
        </div>

        <div class="row " style="height: 300px;">
            <div class="col border m-3 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Clientes</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="AddCustomer" name="AddCustomer">
                                <label class="form-check-label" for="AddCustumer">Adicionar Clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultCustomer" name="consultCustomer">
                                <label class="form-check-label" for="consultCustomer">Consultar Clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteCustomer" name="deleteCustomer">
                                <label class="form-check-label" for="deleteCustomer">Excluir Clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editCostumer" name="editCostumer">
                                <label class="form-check-label" for="editCostumer">Editar Clientes</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="all_costumer" name="all_costumer">
                                <label class="form-check-label" for="all_costumer">Todas as permissões de Clientes</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-3 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Administrativo</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="createContract" name="createContract">
                                <label class="form-check-label" for="createContract">Criar Contrato</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editContract" name="editContract">
                                <label class="form-check-label" for="editContract">Editar Contrato</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="SeeReports" name="SeeReports">
                                <label class="form-check-label" for="SeeReports">Ver Relatórios</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="all_administrative" name="all_administrative">
                                <label class="form-check-label" for="all_administrative">Todas as permissões de Administrativo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-3 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Suporte</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultCTO" name="consultCTO">
                                <label class="form-check-label" for="consultCTO">Consultar CTO's</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addCTO" name="addCTO">
                                <label class="form-check-label" for="addCTO">Adicionar CTO</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteCTO" name="deleteCTO">
                                <label class="form-check-label" for="deleteCTO">Excluir CTO</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="all_support" name="all_support">
                                <label class="form-check-label" for="all_support">Todas as permissões de Suporte</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-3 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Financeiro</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addPay" name="addPay">
                                <label class="form-check-label" for="addPay">Adicionar conta a
                                    pagar</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="issueDRE" name="issueDRE">
                                <label class="form-check-label" for="issueDRE">Emitir DRE</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="issueNf" name="issueNf">
                                <label class="form-check-label" for="issueNf">Emitir nota fiscal</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="issueTicket" name="issueTicket">
                                <label class="form-check-label" for="issueTicket">Emitir boleto</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteTicket" name="deleteTicket">
                                <label class="form-check-label" for="deleteTicket">Excluir boleto</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="all_financial" name="all_financial">
                                <label class="form-check-label" for="all_financial">Todas as permissões de Financeiro</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row " style="height: 300px;">
            <div class="col border m-3 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Frota</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultMap" name="consultMap">
                                <label class="form-check-label" for="consultMap">Consultar mapa</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addVehicle" name="addVehicle">
                                <label class="form-check-label" for="addVehicle">Adicionar veiculo a
                                    rota</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteVehicle" name="deleteVehicle">
                                <label class="form-check-label" for="deleteVehicle">Excluir veiculo a
                                    rota</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="all_fleet" name="all_fleet">
                                <label class="form-check-label" for="all_fleet">Todas as permissões de Frota</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-3 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Estoque</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addProduct" name="addProduct">
                                <label class="form-check-label" for="addProduct">Adicionar produto</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editProduct" name="editProduct">
                                <label class="form-check-label" for="editProduct">Editar protudo</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="consultStock" name="consultStock">
                                <label class="form-check-label" for="consultStock">Consultar estoque</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="all_stock" name="all_stock">
                                <label class="form-check-label" for="all_stock">Todas as permissões de Estoque</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-3 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Configuração</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="addCount" name="addCount">
                                <label class="form-check-label" for="addCount">Adicionar conta</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="editCount" name="editCount">
                                <label class="form-check-label" for="editCount">Editar conta </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="deleteCount" name="deleteCount">
                                <label class="form-check-label" for="deleteCount">Excluir conta</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="all_settings" name="all_settings">
                                <label class="form-check-label" for="all_settings">Todas as permissões de Configurações</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border m-3 ">
                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-around">
                        <h5 class="m-4 text-white">Gerencial</h5>
                        <div class="ms-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="manage_email" name="manage_email">
                                <label class="form-check-label" for="manage_email">Gerenciar E-mails</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="manage_pop" name="manage_pop">
                                <label class="form-check-label" for="manage_pop">Gerenciar POPS</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="manage_sms" name="manage_sms">
                                <label class="form-check-label" for="manage_sms">Gerenciar SMS</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="manage_vehicle" name="manage_vehicle">
                                <label class="form-check-label" for="manage_vehicle">Gerenciar Veículos</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="manage_all" name="manage_all">
                                <label class="form-check-label" for="manage_all">Todas as Permissões de Gerencial</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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