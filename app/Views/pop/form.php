<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Ip Pool</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
            <button class="btn btn-success" onclick="save()">Salvar</button>
        </div>
    </div>

    <form>


        <div class="row">
            <div class="mt-3 col-md-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade">
            </div>
            <div class="mt-3 col-md-3">
                <label for="populacao" class="form-label">População</label>
                <input type="text" class="form-control" id="populacao">
            </div>
            <div class="mt-3 col-md-3">
                <label for="codigo_ibge" class="form-label">Código IBGE</label>
                <input type="text" class="form-control" id="codigo_ibge">
            </div>
            <div class="mt-3 col-md-3">
                <label for="uf" class="form-label">UF</label>
                <select class="form-control" id="uf">
                    <option selected>-------</option>
                    <option value="1">PE</option>
                    <option value="2">AL</option>
                    <option value="3">BA</option>
                    <option value="4">PB</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mt-3 col">
                <label for="portador_padrao" class="form-label">Portador Padrão</label>
                <select class="form-control" id="portador_padrao">
                    <option selected>-------</option>
                    <option value="1">Banco do Brasil</option>
                    <option value="2">Caixa Economica Federal</option>
                    <option value="3">Banco do Nordente</option>
                    <option value="4">Banco Itau</option>
                </select>
            </div>
            <div class="mt-3 col">
                <label for="identificador" class="form-label">Identificador</label>
                <input type="text" id="identificador" class="form-control">
            </div>
            
            <div class="mt-5 col py-1 form-check">
                <label class="form-check-label" for="active">Ativo</label>
                <input type="checkbox" class="form-check-input" id="active">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="plano" class="form-label">Plano</label>
                <select class="form-control" id="plano">
                    <option selected>Selecione o Plano</option>
                    <option value="1">100mb -</option>
                    <option value="2">50 mb</option>
                    <option value="3">1GB</option>
                    <option value="3">Rádio - 1GB</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="nas" class="form-label">NAS</label>
                <select class="form-control" id="nas">
                    <option selected>Selecione o NAS</option>
                    <option value="1">Monsenhor Tabosa</option>
                    <option value="1">Ria Rural</option>
                </select>
            </div>
            <div class="mt-3 col-md-4">
                <label for="usuario" class="form-label">Usuário</label>
                <select class="form-control" id="usuario">
                    <option selected>----------</option>
                    <option value="1">SGP</option>
                    <option value="2">Tecnico</option>
                    <option value="3">Fabiana - Financeiro</option>
                    <option value="2">Eduarda - Financeiro</option>
                    <option value="2">Inviabilidade Tec.</option>
                </select>
            </div>>

        </div>


    </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    const save = async () => {
        const body = formatBody();

        showLoading();

        try {
            await fetch('<?= $baseRoute ?>/save', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(body),
            })
            .then(response => response.json())
            .then(data => {
                hideLoading();

                if (data.status === 'success') {
                    showToast('Salvo com sucesso', 'success');

                    setTimeout(() => {
                        window.location.href = '<?= $baseRoute ?>';
                    }, 2000);
                } else {
                    showToast('Houve um erro', 'error');
                }
            });

        } catch (error) {
            hideLoading();
            showToast('Houve um erro', 'error');
        }
    }

    function formatBody() {
        const body = {
            "cidade": getValue("cidade"),
            "populacao": getValue("populacao"),
            "codigo_ibge": getValue("codigo_ibge"),
            "uf": getValue("uf"),
            "portador_padrao": getValue("portador_padrao"),
            "plano": getValue("plano"),
            "nas": getValue("nas"),
            "usuario": getValue("usuario"),
            "active": document.getElementById("active").checked,
            "identification": getValue("identificador")
        }

        return body
    }

    function getValue(id) {
        return document.getElementById(id).value;
    }
</script>
<?= $this->endSection() ?>