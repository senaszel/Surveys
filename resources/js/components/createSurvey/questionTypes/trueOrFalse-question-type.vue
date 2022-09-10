<template>
    <div class="flex flex-row flex-1">
        <input type="hidden" :name="typeName" :value="type" />

        <movingOnTheListBtns
            :index="index"
            :list-length="listLength"
            @move-up="$emit('moveUp', index)"
            @move-down="$emit('moveDown', index)"
        >
        </movingOnTheListBtns>

        <div
            class="flex flex-col flex-1 items-stretch w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black"
        >
            <div class="flex flex-row flex-1 items-stretch w-full p-4">
                <label class="w-[15%] mr-[2%] font-bold" :for="questionTOrF"
                    >Wpisz treść pytania</label
                >
                <input
                    :id="questionTOrFId"
                    class="w-[83%]"
                    type="text"
                    :name="questionTOrF"
                    placeholder="   wpisz treść pytania"
                />
            </div>
            <div class="flex flex-row flex-1 items-stretch w-full p-4">
                <div class="flex flex-col flex-1 items-stretch w-full">
                    <label class="font-bold" :for="answerTrue"
                        >Wpisz treść mozliwej odpowiedzi
                    </label>
                    <input
                        :id="answerTrue"
                        class=""
                        type="text"
                        :name="questionTOrF_answerT"
                        placeholder="   wpisz treść mozliwej odpowiedzi"
                    />
                </div>
                <div class="w-[5%]"></div>
                <div class="flex flex-col flex-1 items-stretch w-full pl-4">
                    <label class="font-bold" :for="answerFalse"
                        >Wpisz treść mozliwej odpowiedzi</label
                    >
                    <input
                        :id="answerFalse"
                        class=""
                        type="text"
                        :name="questionTOrF_answerF"
                        placeholder="   wpisz treść mozliwej odpowiedzi B"
                    />
                </div>
            </div>
        </div>

        <otherFunctionalBtns
            :id="id"
            :index="index"
            @delete-element="$emit('deleteElement', id)"
            @swap-elements="$emit('swapElements', index)"
        >
        </otherFunctionalBtns>
    </div>
</template>

<script>
import movingOnTheListBtns from "../moving-on-the-list-btns.vue";
import otherFunctionalBtns from "../other-functional-btns.vue";

export default {
    components: {
        movingOnTheListBtns,
        otherFunctionalBtns,
    },
    props: {
        id: { required: true, type: String },
        type: { required: true, type: String },
        index: { required: true, type: Number },
        listLength: { required: true, type: Number },
    },
    emits: {
        moveDown: null,
        moveUp: null,
        deleteElement: null,
        swapElements: null,
    },

    data() {
        return {
            typeName: "questions[" + this.index + "][type]",
            questionTOrF: "questions[" + this.index + "][question][name]",
            questionTOrFId: "questions-" + this.index + "-question-trueOrFalse",
            questionTOrF_answerT:
                "questions[" + this.index + "][answers][true]",
            answerTrue: "questions-" + this.index + "-answer-true",
            questionTOrF_answerF:
                "questions[" + this.index + "][answers][false]",
            answerFalse: "questions-" + this.index + "-answer-false",
        };
    },
};
</script>
