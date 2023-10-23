<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card p-4">

  <h2>
    <?= $tittle ?>
  </h2>

  <form id="form" class="p-4" enctype="multipart/form-data">
    <div class="row card-2 py-3 my-3">
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
          <input type="text" class="form-control" id="name" placeholder="Nome do Produto" name="name" required>
          <label for="name">Nome do Produto</label>
        </div>
      </div>
      <div class="col">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="price" placeholder="Preço" name="price" required>
          <label for="price">Preço</label>
        </div>
      </div>
    </div>


    <div class="form-floating mb-3">
      <textarea class="form-control" id="description" placeholder="Descrição" name="description" rows="4"></textarea>
      <label for="description">Descrição</label>
    </div>


    <div class="form-floating mb-3">
      <select class="form-select" id="manufacturer_id" name="manufacturer_id" required>
        <option value="" disabled selected>Selecione um Fabricante</option>
        <?php foreach ($manufacturers as $manufacturer) : ?>
          <option value="<?= $manufacturer['id'] ?>"><?= $manufacturer['name'] ?></option>
        <?php endforeach; ?>
      </select>
      <label for="manufacturer_id">Fabricante</label>
    </div>

    <div class="form-floating mb-3">
      <select class="form-select" id="category_id" name="category_id" required>
        <option value="" disabled selected>Selecione uma Categoria</option>
        <?php foreach ($categories as $category) : ?>
          <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
        <?php endforeach; ?>
      </select>
      <label for="category_id">Categoria</label>
    </div>

    <div class="form-floating mb-3">
      <select class="form-select" id="suppliers_id" name="suppliers_id" required>
        <option value="" disabled selected>Selecione um Fornecedor</option>
        <?php foreach ($suppliers as $supplier) : ?>
          <option value="<?= $supplier['id'] ?>"><?= $supplier['name'] ?></option>
        <?php endforeach; ?>
      </select>
      <label for="suppliers_id">Fornecedor</label>
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
      price: document.querySelector('#price').value,
      description: document.querySelector('#description').value,
      manufacturer_id: document.querySelector('#manufacturer_id').value,
      category_id: document.querySelector('#category_id').value,
      suppliers_id: document.querySelector('#suppliers_id').value,
    }

    return JSON.stringify(body);
  }
</script>

<?= $this->endSection() ?>