<x-layout>
    <div class="w-full mx-auto mt-8">
        <form id="add-question" class="p-8 shadow-lg rounded-xl bg-brightRedSupLight">
            <h1 class="my-4 text-4xl font-bold text-center">Kreator ankiet</h1>
            <div class="flex flex-col justify-center w-full mx-auto mt-8 mb-8 space-y-4">
                @component('components.createSurvey.createSurvey')
                @endcomponent

                @component('components.createSurvey.addQuestion')
                @endcomponent

                @component('components.createSurvey.acceptSurvey')
                @endcomponent

            </div>
        </form>
    </div>
</x-layout>
