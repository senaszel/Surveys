<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Strona główna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-bold text-2xl text-center">Topka najbardziej opiniotwórczych uzytkowników</h1>
                </div>
                <div>

                    <div class="bg-white rounded-lg shadow-lg py-6">
                        <div class="block overflow-x-auto mx-6">
                            <table class="w-full text-left rounded-lg">
                                <thead>
                                    <tr class="text-gray-800 border border-b-0">
                                        <th class="px-4 py-3">#</th>
                                        <th class="px-4 py-3">Nazwa</th>
                                        <th class="px-4 py-3">Liczba opini którymi się podzielił</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                            $counter = 1;
                                            @endphp
                                        @foreach ($opinionFormingUsers as $user)
                                        <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                        <td class="px-4 py-4">{{ $counter }}</td>
                                        @php
                                            $counter++;
                                        @endphp
                                        <td class="px-4 py-4">{{ $user->name }}</td>
                                        <td class="px-4 py-4">
                                            {{ $user->personals ?$user->personals->filled_surveys_count : ''}}
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>
