<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

  <h2>
    <?= $tittle ?>
  </h2>

  <div class="row card-2 py-3 my-3">
    <div class="col-md-8">
    <h4>
                <?php if (isset($register)) : ?>
                    Editar cliente
                <?php else : ?>
                    Novo cliente
                <?php endif ?>
            </h4>    </div>
    <div class="col-md-4 btn-group">
      <a class="btn btn-success" href="<?= $baseRoute ?>">Voltar</a>
      <button class="btn btn-success" id="submit-btn" >Salvar</button>
    </div>
  </div>

  <form>

    <?php if (isset($register)) : ?>
      <input type="hidden" name="id" value="<?= $register->id ?>">
    <?php endif ?>

    <div class="row">
      <div class="mt-3 col-md-4">
        <label for="name" class="form-label">Nome do produto</label>
        <input type="text" class="form-control" name="name" placeholder="Insira o nome do produto">
      </div>
      <div class="mt-3 col-md-4">
        <label for="model" class="form-label">Modelo</label>
        <input type="text" class="form-control" name="model" placeholder="Insira o modelo">
      </div>
      <div class="mt-3 col-md-4">
        <label for="qty" class="form-label">Quantidade</label>
        <input type="text" class="form-control" name="qty" placeholder="Insira a quantidade de entrada">
      </div>

    </div>

    <div class="row">
      <div class="mt-3 col-md-2">
        <label for="price" class="form-label">Preço</label>
        <input type="text" class="form-control" name="price" placeholder="Insira o preço">
      </div>
      <div class="mt-3 col-md-2">
        <label for="id_valor_custo" class="form-label">Custo R$:</label>
        <input type="text" class="form-control" name="valor_custo" placeholder="Insira o preço">
      </div>
      <div class="mt-3 col-md-4">
        <label for="categoria" class="form-label">Categoria</label>
        <select class="form-control" aria-label="Default select example">
          <option selected>Selecione a categoria</option>
          <option value="1">Roteador</option>
          <option value="2">ONU</option>
          <option value="3">ONT</option>
          <option value="4">EPI</option>
          <option value="5">Splitter</option>
          <option value="6">OLT</option>
          <option value="7">Cabos</option>
          <option value="8">Adicionar nova categoria</option>
        </select>
      </div>
      <div class="mt-3 col-md-4">
        <label for="data" class="form-label">Data de entrada</label>
        <input type="date" class="form-control" name="date" placeholder="Insira a data de entrada">
      </div>
    </div>

    <div class="row">
      <div class="mt-3 col-md-4">
        <label for="uf" class="form-label">Fornecedor</label>
        <select class="form-control" aria-label="Default select example">
          <option selected>Selecione o fornecedor</option>
          <option value="1">Home Telecomunicações</option>
          <option value="2">TOPVendas</option>
          <option value="2">TechInfo</option>
          <option value="2">Adicionar um novo fornecedor</option>
        </select>
      </div>
      <div class="mt-3 col-md-4">
        <label for="uf" class="form-label">Marca</label>
        <select class="form-control" aria-label="Default select example">
          <option selected>Selecione a marca</option>
          <option value="1">Sumec</option>
          <option value="2">2Flex</option>
          <option value="2">Transcend</option>
          <option value="2">Adicionar uma nova marca</option>
        </select>
      </div>
      <div class="mt-3 col-md-4">
        <label for="sku" class="form-label">SKU</label>
        <input type="text" class="form-control" name="sku" placeholder="Insira o SKU">
      </div>
    </div>


    <div class="row">
      <div class="form-group mt-3 col-md-4">
        <label class="required" for="id_descricao">Descrição:</label>
        <input type="text" name="descricao" id="id_descricao" required class="form-control" maxlength="200">
      </div>
    </div>

    <div class="row">
      <div class="form-group mt-3 col-md-8">
        <label for="id_ean">Cód. Barras(GTIN/EAN):</label>
        <input type="text" name="ean" id="id_ean" class="form-control" maxlength="100">
      </div>
      <div class="form-group mt-3 col-md-4">
        <label for="id_tipo_referencia">Tipo de Referência:</label>
        <select name="tipo_referencia" id="id_tipo_referencia" class="form-control">
          <option value="" selected>---------</option>
          <option value="1">MAC Address</option>
          <option value="2">Serial</option>
          <option value="3">Tombamento</option>
        </select>
      </div>


      <div class="row">
        <div class="form-group mt-3 col-md-4">
          <label for="id_foto">Foto:</label>
          <input type="file" name="foto" id="id_foto" class="form-control-file">
        </div>

      </div>



  </form>


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