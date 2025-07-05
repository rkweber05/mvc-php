<x-layout title="Series">
    <a href="/series/create">Adicionar série</a>
    <ul>
        @foreach($series as $serie)
        <li>{{ $serie }}</li>
        @endforeach
    </ul>

    <script>
        const series = {{ Js::from($series)  }};
    </script>
</x-layout>
