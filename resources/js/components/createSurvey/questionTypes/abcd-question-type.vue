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
                <label class="w-[23%] mr-[2%] font-bold" :for="questionABCD"
                    >Wpisz treść pytania</label
                >
                <input
                    :id="questionABCDId"
                    class="w-[75%]"
                    type="text"
                    :name="questionABCD"
                    placeholder="wpisz treść pytania"
                />
            </div>
            <div class="flex flex-row flex-1 items-stretch w-full p-4">
                <label
                    class="self-center w-[23%] mr-[2%] font-bold"
                    :for="answerA"
                    >Wpisz treść mozliwej odpowiedzi</label
                >
                <input
                    :id="answerA"
                    class="w-[75%]"
                    type="text"
                    :name="questionABCD_answerA"
                    placeholder="   wpisz treść mozliwej odpowiedzi A"
                />
            </div>
            <div class="flex flex-row flex-1 items-stretch w-full p-4">
                <label
                    class="self-center w-[23%] mr-[2%] font-bold"
                    :for="answerB"
                    >Wpisz treść mozliwej odpowiedzi</label
                >
                <input
                    :id="answerB"
                    class="w-[75%]"
                    type="text"
                    :name="questionABCD_answerB"
                    placeholder="   wpisz treść mozliwej odpowiedzi B"
                />
            </div>
            <div class="flex flex-row flex-1 items-stretch w-full p-4">
                <label
                    class="self-center w-[23%] mr-[2%] font-bold"
                    :for="answerC"
                    >Wpisz treść mozliwej odpowiedzi</label
                >
                <input
                    :id="answerC"
                    class="w-[75%]"
                    type="text"
                    :name="questionABCD_answerC"
                    placeholder="   wpisz treść mozliwej odpowiedzi C"
                />
            </div>
            <div class="flex flex-row flex-1 items-stretch w-full p-4">
                <label
                    class="self-center w-[23%] mr-[2%] font-bold"
                    :for="answerD"
                    >Wpisz treść mozliwej odpowiedzi</label
                >
                <input
                    :id="answerD"
                    class="w-[75%]"
                    type="text"
                    :name="questionABCD_answerD"
                    placeholder="   wpisz treść mozliwej odpowiedzi D"
                />
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

<script setup>
import movingOnTheListBtns from "../moving-on-the-list-btns.vue";
import otherFunctionalBtns from "../other-functional-btns.vue";

const props = defineProps({
    id: { required: true, type: String },
    type: { required: true, type: String },
    index: { required: true, type: Number },
    listLength: { required: true, type: Number },
});

const emit = defineEmits([
    "moveUp",
    "moveDown",
    "deleteElement",
    "swapElements",
]);

const typeName = "questions[" + props.index + "][type]";
const questionABCD = "questions[" + props.index + "][question][name]";
const questionABCDId = "questions-" + props.index + "-question-abcd";
const questionABCD_answerA = "questions[" + props.index + "][answers][a]";
const answerA = "questions-" + props.index + "-answer-a";
const questionABCD_answerB = "questions[" + props.index + "][answers][b]";
const answerB = "questions-" + props.index + "-answer-b";
const questionABCD_answerC = "questions[" + props.index + "][answers][c]";
const answerC = "questions-" + props.index + "-answer-c";
const questionABCD_answerD = "questions[" + props.index + "][answers][d]";
const answerD = "questions-" + props.index + "-answer-d";
</script>
