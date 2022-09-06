<template>
    <div class="flex flex-col justify-center w-full mx-auto mt-8 mb-8 space-y-4">
        <h1 class="my-4 text-4xl font-bold text-center">Kreator ankiet</h1>
    </div>

    <form action="/api/post" method="POST">
        <slot></slot>
        <div class="flex flex-col justify-center mx-auto mt-8 mb-8 space-y-4">
            <div
                class="flex flex-col flex-1 items-stretch w-full p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black">
                <div class="flex flex-row flex-1 items-stretch w-full">
                    <label class="self-center w-[18%] mr-[2%] font-bold" for="title">Wpisz Nazwę
                        ankiety</label>
                    <input class="w-[80%] h-[125%]" type="text" name="title" id="title"
                        placeholder="   podaj nazwę ankiety" />
                </div>
            </div>

            <div class="flex flex-col flex-1 items-stretch w-full justify-center mx-auto mt-8 mb-8 space-y-4">
                <ul class="">
                    <li class="py-8" v-for="(el, index) in list" :key="el.id">
                        <questionForSurvey :id="el.id" :type="el.type" :index="index" :listLength="list.length"
                            @deleteElement="deleteElement" @moveUp="moveUp" @moveDown="moveDown"
                            @swapElements="swapElements"></questionForSurvey>
                    </li>
                </ul>
            </div>

        </div>


        <div class="flex flex-col justify-center w-[80%] mx-auto mt-8 mb-8 space-y-4">
            <addQuestionBtn @AddCertainTypeOfQuestion="AddCertainTypeOfQuestion"></addQuestionBtn>
        </div>

        <div class="flex flex-col justify-center w-[80%] mx-auto mt-8 mb-8 space-y-4">
            <saveSurveyBtn></saveSurveyBtn>
        </div>
    </form>
</template>

<script setup>
import addQuestionBtn from "./add-question-btn.vue";
import saveSurveyBtn from "./save-survey-btn.vue";
import questionForSurvey from "./question-for-survey.vue";
import { uniqueId } from 'lodash';
import { ref } from 'vue';

const list = ref([]);
const swapElementFirst = ref({ nb: null });
const swapElementSecond = ref({ nb: null });

function swapElements(index) {
    if (swapElementFirst.value.nb === null) {
        swapElementFirst.value.nb = index;
        return;
    }
    if (swapElementFirst.value.nb === index) {
        return;
    }
    swapElementSecond.value.nb = index;
    const temp = list.value[swapElementFirst.value.nb];
    list.value[swapElementFirst.value.nb] = list.value[swapElementSecond.value.nb];
    list.value[swapElementSecond.value.nb] = temp;
    swapElementFirst.value.nb = null;
    swapElementSecond.value.nb = null;
};

function moveUp(index) {
    if (index != 0) {
        const temp = list.value[index - 1];
        list.value[index - 1] = list.value[index];
        list.value[index] = temp;
    }
};

function moveDown(index) {
    if (index != list.length - 1) {
        const temp = list.value[index + 1];
        list.value[index + 1] = list.value[index];
        list.value[index] = temp;
    }
};

function deleteElement(id_arg) {
    list.value = list.value.filter((elementOfTheList) => elementOfTheList.id !== id_arg);
};

function AddCertainTypeOfQuestion(passedType) {
    list.value.push({ id: uniqueId(), type: passedType });
};
</script>