<template>
    <div>
        <dialog id="addQuestionDialog" class="">
            <div class="flex flex-col flex-1 w-full">
                <h1 class="mx-4 mb-4 text-xl text-center">
                    Wskaz typ pytania:
                </h1>
                <div class="flex flex-row items-stretch flex-1">
                    <button
                        id="BtnAddOpenTypeOfQuestion"
                        class="p-2 mx-8 my-4 text-white bg-green-500 text-l outline outline-green-500 hover:text-green-500 hover:bg-white"
                        type="button"
                        @click="AddCertainTypeOfQuestion('open')"
                    >
                        otwarte
                    </button>
                    <button
                        id="BtnAddABCDTypeOfQuestion"
                        class="p-2 mx-8 my-4 text-white bg-green-500 text-l outline outline-green-500 hover:text-green-500 hover:bg-white"
                        type="button"
                        @click="AddCertainTypeOfQuestion('abcd')"
                    >
                        ABCD
                    </button>
                    <button
                        id="BtnAddTrueOrFalseTypeOfQuestion"
                        class="p-2 mx-8 my-4 text-white bg-green-500 text-l outline outline-green-500 hover:text-green-500 hover:bg-white"
                        type="button"
                        @click="AddCertainTypeOfQuestion('trueOrFalse')"
                    >
                        tak/nie
                    </button>
                </div>

                <button
                    id="close-button"
                    class="p-2 mt-4 text-white bg-red-500 outline outline-red-500 hover:text-red-500 hover:bg-white hover:text-2xl"
                    type="button"
                    @click="closeModal"
                >
                    zamknij
                </button>
            </div>
        </dialog>

        <div
            class="flex flex-row flex-1 w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50"
        >
            <button
                id="open-button"
                class="flex-1 px-4 py-4 text-xl text-white rounded bg-green-400 hover:bg-slate-300 hover:text-green-400 hover:text-2xl outline-none hover:font-bold hover:outline hover:outline-red-50 hover:outline-4"
                type="button"
                @click="showModal"
            >
                Dodaj pytanie
            </button>
        </div>
    </div>
</template>

<script>
export default {
    components: {
        //components
    },
    props: {
        //props
    },
    emits: ["AddCertainTypeOfQuestion"],
    data() {
        return {
            //data
        };
    },
    methods: {
        showModal() {
            this.$el.querySelector("#addQuestionDialog").showModal();
        },
        closeModal() {
            this.$el.querySelector("#addQuestionDialog").close();
        },
        AddCertainTypeOfQuestion(type) {
            this.$emit("AddCertainTypeOfQuestion", type);
            this.closeModal();
        },
    },
};
</script>
