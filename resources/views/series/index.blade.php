<x-layout title="Séries">
  <a href="{{route('series.create')}}" class="btn btn-dark mb-2">ADICIONAR</a>

  @isset($mensagemSucesso)
  <div class="alert alert-success">
    {{$mensagemSucesso}}
  </div>
  @endisset

  <ul class="list-group">
    <?php foreach ($series as $series) : ?>
      <li class="list-group-item d-flex justify-content-between align-items-center"><?= $series->title ?>
        <form action="{{route('series.destroy', $series->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class=" btn btn-danger">Excluir</button>
        </form>
      </li>
    <?php endforeach; ?>
  </ul>
</x-layout>