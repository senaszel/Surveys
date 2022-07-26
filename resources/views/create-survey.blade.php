<x-layout>
    <h1 class="text-5xl text-center font-bold mt-16">Kreator ankiet</h1>
    <div class="w-full max-w-lg mx-auto mt-8">
        <form id="add-question" class="shadow-lg rounded-xl bg-brightRedSupLight p-8">
            <div class="flex flex-col space-y-4 w-1/2 mx-auto justify-center mb-8 mt-8">
                <button class="bg-brightRedLight hover:bg-brightRed text-white py-4 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Dodaj pytanie
                </button>

                <!--if statement: at least one question in survey is necessary to display this button-->
                <button class="hidden bg-green-600 hover:bg-green-700 text-white py-4 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Zatwierdź ankietę
                </button>
            </div>
        </form>
    </div>
</x-layout>