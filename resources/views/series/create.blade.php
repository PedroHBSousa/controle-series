<x-layout title="Nova Série">
  <form action="{{route('series.index')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label"> Nome: </label>
      <input type="text" id="nome" name="title" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</x-layout>