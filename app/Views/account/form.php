<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Formulário</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" id='submit-btn'>Salvar</button>
        </div>
    </div>

    <form>

        <div class="row">
            <div class="mt-3 col md-2">
                <label for="name" class="form-label">Nome completo</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o nome completo">
            </div>

        </div>
        <div class="row">
            <div class="mt-3 col col-md-5">
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

</div>
<div class="row " style="height: 300px;">
    <div class="col border m-4 ">
        <div class="d-flex">
            <div class="d-flex flex-column justify-content-around">
                <h5 class="m-4 text-white">Clientes</h5>
                <div class="ms-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Adicionar clientes</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Consultar clientes</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Excluir clientes</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Editar clientes</label>
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
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Criar contrato</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Editar contrato</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Ver relatórios</label>
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
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Consultar CTO's</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Adicionar CTO</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Excluir CTO</label>
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
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Adicionar conta a
                            pagar</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Emitir DRE</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Emitir nota fiscal</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Emitir boleto</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Excluir boleto</label>
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
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Consultar mapa</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Adicionar veiculo a
                            rota</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Excluir veiculo a
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
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Adicionar produto</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Editar protudo</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Consultar estoque</label>
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
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Adicionar conta</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Editar conta </label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Excluir conta</label>
                    </div>
                </div>
            </div>
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