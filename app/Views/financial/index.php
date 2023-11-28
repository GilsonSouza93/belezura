<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-6">
        <canvas id="payments" width="400" height="400"></canvas>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
  const ctx = document.getElementById('payments');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Entra', 'Sai', 'Entra', 'Sai', 'Entra', 'Sai'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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