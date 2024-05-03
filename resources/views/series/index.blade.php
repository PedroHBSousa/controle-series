<x-layout title="Séries">
  <a href="/series/criar" class="btn btn-dark mb-2">ADICIONAR</a>
  <ul class="list-group">
    <?php foreach ($series as $series) : ?>
      <li class="list-group-item"><?= $series; ?></li>
    <?php endforeach; ?>
  </ul>
</x-layout>