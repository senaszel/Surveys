<div>
    <dialog id="addQuestionDialog" class="">
        <div class="flex flex-col flex-1 w-full">
            <h1 class="mx-4 mb-4 text-xl text-center">Wskaz typ pytania:</h1>
            <div class="flex flex-row items-stretch flex-1">
                <button id="BtnAddOpenTypeOfQuestion"
                    class="p-2 mx-8 my-4 text-white bg-green-500 text-l outline outline-green-500 hover:text-green-500 hover:bg-white"
                    type="button">otwarte</button>
                <button id="BtnAddABCDTypeOfQuestion"
                    class="p-2 mx-8 my-4 text-white bg-green-500 text-l outline outline-green-500 hover:text-green-500 hover:bg-white"
                    type="button" wire:click="getABCD">ABCD</button>
                <button id="BtnAddTrueOrFalseTypeOfQuestion"
                    class="p-2 mx-8 my-4 text-white bg-green-500 text-l outline outline-green-500 hover:text-green-500 hover:bg-white"
                    type="button">tak/nie</button>
            </div>

            <button class="
            p-2 mt-4 
            text-white bg-red-500 
            outline outline-red-500 
            hover:text-red-500 hover:bg-white hover:text-2xl"
            type="button" id="close-button">zamknij</button>
        </div>
    </dialog>

    <div class="flex flex-row flex-1 w-full mx-auto p-8 shadow-lg rounded-xl bg-brightRedSupLight" id="btnAddQuestion">
        <button
            class="flex-1 px-4 py-4 text-xl text-white rounded bg-brightRedLight hover:bg-white hover:text-brightRedLight hover:text-2xl outline-none hover:outline hover:outline-brightRedLight hover:outline-4"
            type="button" id="open-button">
            Dodaj pytanie
        </button>
    </div>

    <script type="text/javascript">
        const modal = document.querySelector("#addQuestionDialog");
        const openModal = document.querySelector("#open-button");
        const closeModal = document.querySelector("#close-button");

        openModal.addEventListener("click", () => {
            modal.showModal();
        });

        closeModal.addEventListener("click", () => {
            modal.close();
        });

        const BtnAddABCDTypeOfQuestion = document.querySelector('#BtnAddABCDTypeOfQuestion');
        const BtnAddTrueOrFalseTypeOfQuestion = document.querySelector('#BtnAddTrueOrFalseTypeOfQuestion');
        const BtnAddOpenTypeOfQuestion = document.querySelector('#BtnAddOpenTypeOfQuestion');

        BtnAddABCDTypeOfQuestion.addEventListener('click', () => {
            const beforeBtnAddQuestion = document.querySelector('#btnAddQuestion');
            beforeBtnAddQuestion.prepend(
                {!! $SurveysController::renderComponent() !!}
            );
            modal.close();
        });

        BtnAddTrueOrFalseTypeOfQuestion.addEventListener('click', () => {
            test = "Pytanie Prawda/Falsz";
            const beforeBtnAddQuestion = document.querySelector('#btnAddQuestion');
            beforeBtnAddQuestion.prepend(test);
            modal.close();
        });

        BtnAddOpenTypeOfQuestion.addEventListener('click', () => {
            test = "Pytanie Otwarte";
            const beforeBtnAddQuestion = document.querySelector('#btnAddQuestion');
            beforeBtnAddQuestion.prepend(test);
            modal.close();
        });
    </script>

</div>
