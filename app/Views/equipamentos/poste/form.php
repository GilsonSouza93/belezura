<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

    <h2>
        <?= $tittle ?>
    </h2>

    <div class="row card-2 py-3 my-3">
        <div class="col-md-8">
            <h4>Adicionar Poste</h4>
        </div>
        <div class="col-md-4 btn-group">
            <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
        <button class="btn btn-success" id="btnSave">Salvar</button>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="mt-3 col-md-4">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" placeholder="Insira o parâmetro">
            </div>
            <div class="mt-3 col-md-4">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" placeholder="Insira o parâmetro">
            </div>
            <div class="mt-3 col-md-4">
                <label for="pop" class="form-label">POP</label>
                <select class="form-control" id="pop">
                    <option selected>Selecione o POP</option>
                    <option value="1">Rua Tabareu</option>
                    <option value="1">Av. Tabacudo</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="mt-3 col-md-4">
                <label for="localizacao" class="form-label">Localização</label>
                <input id="localizacao" type="text" class="form-control" placeholder="Insira o parâmetro">
            </div>
            <div class="mt-3 col-md-4">
                <label for="djson" class="form-label">DJSON</label>
                <input id="djson" type="text" class="form-control" name="price" placeholder="Insira o parâmetro">
            </div>
        </div>

        <!-- tynmce -->

        <div class="row mt-3">
            <div class="col-md-4">
                <label for="observacao" class="form-label">Observação</label>
                <input id="observacao" type="text" class="form-control" placeholder="Insira o parâmetro">
            </div>
            <div class="mt-3 col-md-4 row">
                <div class="col">
                    <h6>Tipo de equipamento</h6>
                    <div class="form-check">
                        <input type="checkbox" id="cto">
                        <label for="cto" class="form-label">CTO</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="caixa_hermetica">
                        <label for="caixa_hermetica" class="form-label">Caixa Hermética</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="radio">
                        <label for="radio" class="form-label">Rádio</label>
                    </div>
                </div>
                <div class="col">
                    <h6>Status/Posição</h6>
                    <div class="form-check">
                        <input type="checkbox" id="active">
                        <label for="active" class="form-label">Ativo</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="caixa_subterranea">
                        <label for="caixa_subterranea" class="form-label">Caixa subterrânea</label>
                    </div>
                </div>
            </div>            
        </div>

    </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        autoFillLocation();
    });

    const btnSave = document.getElementById('btnSave');

    btnSave.addEventListener('click', async () => {
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
                    showToast(data.message, 'success');

                    setTimeout(() => {
                        window.location.href = '<?= $baseRoute ?>';
                    }, 2000);
                } else {
                    showToast(data.message, 'error');
                }
            });

        } catch (error) {
            hideLoading();

            Swal.fire({
                icon: 'error',
                title: 'Erro ao cadastrar o poste',
                text: 'Ocorreu um erro ao cadastrar o poste.',
            });
        }
    });

    const formatBody = () => {
        const body = {
            latitude: document.getElementById('latitude').value,
            longitude: document.getElementById('longitude').value,
            pop: document.getElementById('pop').value,
            localizacao: document.getElementById('localizacao').value,
            djson: document.getElementById('djson').value,
            observacao: document.getElementById('observacao').value,
            cto: document.getElementById('cto').checked,
            caixa_hermetica: document.getElementById('caixa_hermetica').checked,
            radio: document.getElementById('radio').checked,
            active: document.getElementById('active').checked,
            caixa_subterranea: document.getElementById('caixa_subterranea').checked,
        }

        return body;
    }

    const autoFillLocation = () => {
        Swal.fire({
            title: 'Você deseja preencher a localização automaticamente?',
            allowOutsideClick: false,
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, preencher!',
            cancelButtonText: 'Não, preencher manualmente'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Aguarde',
                    text: 'Estamos localizando sua posição',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                const geolocationOptions = {
                    enableHighAccuracy: true,
                    timeout: 10000,
                    maximumAge: 0
                };

                navigator.geolocation.getCurrentPosition(
                    async (position) => {
                        const { latitude, longitude } = position.coords;
                        try {
                            Swal.fire({
                                title: 'Localização encontrada',
                                html: `<div id="map" style="width: 100%; height: 300px;"></div>`,
                                showCancelButton: true,
                                confirmButtonText: 'Confirmar localização',
                                cancelButtonText: 'Cancelar',
                                didOpen: () => {
                                    // Inicializar o mapa do Google Maps
                                    const map = new google.maps.Map(document.getElementById('map'), {
                                        center: { lat: latitude, lng: longitude },
                                        zoom: 15
                                    });

                                    new google.maps.Marker({
                                        position: { lat: latitude, lng: longitude },
                                        map: map
                                    });
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    document.getElementById('latitude').value = latitude;
                                    document.getElementById('longitude').value = longitude;
                                }
                            });

                        } catch (error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erro ao obter a localização',
                                text: 'Ocorreu um erro ao buscar o endereço da localização.',
                            });
                        }
                    },
                    (error) => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao obter a localização',
                            text: 'Não foi possível obter a localização atual.',
                        });
                    },
                    geolocationOptions
                );
            }
        });
    };




</script>
<?= $this->endSection() ?>