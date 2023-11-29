<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="row d-flex mt-5 justify-content-center">
    <div class="col-md-3 card mx-3">
      <label for="payments" class="mt-2">Receita</label>
      <canvas id="payments" height="300"></canvas>
    </div>
    <div class="col-md-3 card mx-3">
      <label for="payments" class="mt-2">Clientes</label>
      <canvas id="customers"></canvas>
    </div>
    <div class="col-md-3 card mx-3">
      <label for="payments" class="mt-2">POPs</label>
        <canvas id="popChart"></canvas>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
  const ctx = document.getElementById('payments');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado','Domingo'],
      datasets: [
        {
        label: 'Entrada',
        data: [12, 19, 3, 5, 2, 3,8],
        borderWidth: 1
      },
        {
        label: 'Saída',
        data: [6, 7, 2, 2, 1, 2,4,3],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  const customers = document.getElementById('customers');

  new Chart(customers, {
    type: 'pie',
    data: {
      labels: ['Ativo', 'Suspenso', 'Reduzido','Cancelado'],
      datasets: [{
        label: 'Quantidade de clientes',
        data: [120, 17, 29, 7],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }

      }
    }
  });

  var popsChart = document.getElementById('popChart').getContext('2d');
var myChart = new Chart(popsChart, {
    type: 'doughnut',
    data: {
        labels: ['Pernambuco', 'São Paulo', 'Minas Gerais'],
        datasets: [{
          label:'POPS',
            data: [30, 50, 20],
            //  
        }]
    }
});
</script>

<?= $this->endSection() ?>