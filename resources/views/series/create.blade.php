<x-layout title="Nova série">
    <form action="/series/save" method="post" class="mb-3">
        @csrf
        <label for="" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
    </form>

    <button type="submit" class="btn btn-primary btn-dark">Adicionar série</button>
</x-layout>
