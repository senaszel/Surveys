<x-layout>
    <div>
        <button>
            <a href="{{ route('upload') }}">Dodaj zdjęcie</a>
        </button>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="vue-create-survey"></div>

</x-layout>
