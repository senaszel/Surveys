<x-layout>
    <div class="w-full mx-auto mt-8">
        <form id="form-for-survey" action="{{ route('surveys.store') }}" method="POST">
            <h1 class="my-4 text-4xl font-bold text-center">Kreator ankiet</h1>
            <div class="flex flex-col justify-center w-full mx-auto mt-8 mb-8 space-y-4">
                @include('components.createSurvey.createSurvey')

                @include('components.createSurvey.addQuestion')

                @include('components.createSurvey.acceptSurvey')

            </div>
        </form>
    </div>
</x-layout>
