<x-layout title="Nova série">
    <form action="/series/salvar" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <button type="submit" class="btn btn-dark">Enviar</button>
    </form>
</x-layout>
