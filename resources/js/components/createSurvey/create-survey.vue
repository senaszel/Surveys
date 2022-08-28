<template>
    <div class="flex flex-col justify-center w-full mx-auto mt-8 mb-8 space-y-4">
        <h1 class="my-4 text-4xl font-bold text-center">Kreator ankiet</h1>
    </div>

    <div class="flex flex-col justify-center w-[80%] mx-auto mt-8 mb-8 space-y-4">
        <div class="
        flex flex-col flex-1
        items-stretch
        w-full
        p-8
        shadow-lg
        rounded-xl
        bg-red-50
      ">
            <div class="flex flex-row flex-1 items-stretch w-full">
                <label class="self-center w-[18%] mr-[2%] font-bold" for="nazwa_ankiety">Wpisz Nazwę
                    ankiety</label>
                <input class="w-[80%] h-[125%]" type="text" name="nazwa_ankiety" id="nazwa_ankiety"
                    placeholder="   podaj nazwę ankiety" />
            </div>
        </div>

        <div class="
        flex flex-col flex-1
        items-stretch
        w-full
        justify-center 
        mx-auto mt-8 mb-8 space-y-4
      ">
            <ul class="">
                <li class="py-8" v-for="el in list" :key="el.id">
                    <elementOfTheList @deleteElement="deleteElement" :id="el.id" :type="el.type"></elementOfTheList>
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
</template>

<script>
import addQuestionBtn from "./add-question-btn.vue";
import saveSurveyBtn from "./save-survey-btn.vue";
import elementOfTheList from "./element-of-the-list.vue";
// import uniqueId from "lodash.uniqueid";
import {uniqueId} from 'lodash';


export default {
        components: {
            addQuestionBtn,
            saveSurveyBtn,
            elementOfTheList,
        },

    methods: {
        deleteElement(id_arg) {
            this.list = this.list.filter((elementOfTheList) => elementOfTheList.id !== id_arg);
        },
        AddCertainTypeOfQuestion(passedType) {
            this.list.push({ id: uniqueId("el-id-"), type: passedType });
        }
    },

    props: {
        //props
    },

    data() {
        return {
            list: [
                // { id: uniqueId("el-id-"), type: "abcd" },
                // { id: uniqueId("el-id-"), type: "trueOrFalse" },
                // { id: uniqueId("el-id-"), type: "open" },
            ],
            nazwa_ankiety: "",
        };
    },
};
</script>

<style>
</style>