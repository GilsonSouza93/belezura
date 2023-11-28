<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="row d-flex justify-content-around">
    <div class="col-md-4 card md-3">
        <canvas id="payments" height="20" width="40" ></canvas>
    </div>
    <div class="col-md-2 card md-3">
        <canvas id="pizza"></canvas>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
  const ctx = document.getElementById('payments');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Junho', 'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
      datasets: [
        {
        label: 'Receita',
        data: [12, 19, 3, 5, 2, 3,8,6,2,8,4,9,2],
        borderWidth: 1
      },
        {
        label: 'Despesa',
        data: [6, 7, 2, 2, 1, 2,4,3,1,4,2,5,1],
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
  const pizza = document.getElementById('pizza');

  new Chart(pizza, {
    type: 'pie',
    data: {
      labels: ['Janeiro', 'Fevereiro', 'Março'],
      datasets: [{
        label: 'Quantidade de clientes cadastrados no mês',
        data: [12, 19, 3],
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
</script>

<?= $this->endSection() ?>