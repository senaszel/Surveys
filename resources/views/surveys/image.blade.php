<x-layout>
    <div>
        <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <div class="p-4">
                <label class="mr-2">Wybierz grafikę:</label>
                <input type="file" name="surveyImage">

            </div>
            <div class="p-4">
                <button type="submit"> Upload </button>
            </div>
        </form>
    </div>



</x-layout>
