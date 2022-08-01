<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Strona główna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-200 border border-gray-200 mb-8">
                    <pre class="text-center">Tutaj ma byc wyszukiwarka ankiet.</pre>
                </div>
                <div class="p-6 bg-gray-200 border border-gray-200 mb-8">
                    <a href="{{ route('surveys.ostatnio-dodane-index') }}">
                        <pre class="text-center">Tutaj mają być ostatnio dodane ankiety.</pre>
                    </a>
                </div>
                <div class="p-6 bg-gray-200 border border-gray-200 mb-8">
                    <a href="{{ route('surveys.najpopularniejsze-index') }}">
                        <pre class="text-center">Tutaj mają być najpopularniejsze ankiety.</pre>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
