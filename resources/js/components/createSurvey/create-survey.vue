<template>
    <div class="flex flex-col justify-center w-full mx-auto mt-8 mb-8 space-y-4">
        <h1 class="my-4 text-4xl font-bold text-center">Kreator ankiet</h1>
    </div>

    <form action="/api/post" method="POST">
        <slot></slot>
        <div class="flex flex-col justify-center w-[80%] mx-auto mt-8 mb-8 space-y-4">
            <div class="flex flex-col flex-1 items-stretch w-full p-8 shadow-lg rounded-xl bg-red-50">
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

<script>
import addQuestionBtn from "./add-question-btn.vue";
import saveSurveyBtn from "./save-survey-btn.vue";
import questionForSurvey from "./question-for-survey.vue";
import { uniqueId } from 'lodash';
import { reactive } from 'vue';

export default {
    components: {
        addQuestionBtn,
        saveSurveyBtn,
        questionForSurvey,
    },

    methods: {

        async swapElements(index) {
            if (this.swapElementFirst.nb === null) {
                this.swapElementFirst.nb = index;
            } else {
                this.swapElementSecond.nb = index;
                const temp = await this.list[this.swapElementFirst.nb];
                this.list[this.swapElementFirst.nb] = await this.list[this.swapElementSecond.nb];
                this.list[this.swapElementSecond.nb] = await temp;
                this.swapElementFirst.nb = null;
                this.swapElementSecond.nb = null;
            }
        },

        moveUp(index) {
            if (index != 0) {
                const temp = this.list[index - 1];
                this.list[index - 1] = this.list[index];
                this.list[index] = temp;
            }
        },

        moveDown(index) {
            if (index != this.list.length - 1) {
                const temp = this.list[index + 1];
                this.list[index + 1] = this.list[index];
                this.list[index] = temp;
            }
        },

        deleteElement(id_arg) {
            this.list = this.list.filter((elementOfTheList) => elementOfTheList.id !== id_arg);
        },

        AddCertainTypeOfQuestion(passedType) {
            this.list.push({ id: uniqueId(), type: passedType });
        },

    },

    props: {
        //props
    },

    data() {
        return {
            list: [],
            nazwa_ankiety: "",
            swapElementFirst: reactive({nb:null}),
            swapElementSecond: reactive({nb:null}),
        };
    },
};
</script>

<style>
</style>