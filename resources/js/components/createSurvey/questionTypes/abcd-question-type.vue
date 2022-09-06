<template>
  <div class="flex flex-row flex-1">
    <movingOnTheListBtns :index="index" :listLength="listLength" @moveUp="$emit('moveUp', index)"
      @moveDown="$emit('moveDown', index)">
    </movingOnTheListBtns>

    <div
      class="flex flex-col flex-1 items-stretch w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black">
      <div class="flex flex-row flex-1 items-stretch w-full p-4">
        <label class="w-[23%] mr-[2%] font-bold" :for="questionABCD">Wpisz treść pytania</label>
        <input class="w-[75%]" type="text" :name="questionABCD" :id="questionABCDId"
          placeholder="wpisz treść pytania" />
      </div>
      <div class="flex flex-row flex-1 items-stretch w-full p-4">
        <label class="self-center w-[23%] mr-[2%] font-bold" :for="answerA">Wpisz treść mozliwej
          odpowiedzi</label>
        <input class="w-[75%]" type="text" :name="questionABCD_answerA" :id="answerA"
          placeholder="   wpisz treść mozliwej odpowiedzi A" />
      </div>
      <div class="flex flex-row flex-1 items-stretch w-full p-4">
        <label class="self-center w-[23%] mr-[2%] font-bold" :for="answerB">Wpisz treść mozliwej
          odpowiedzi</label>
        <input class="w-[75%]" type="text" :name="questionABCD_answerB" :id="answerB"
          placeholder="   wpisz treść mozliwej odpowiedzi B" />
      </div>
      <div class="flex flex-row flex-1 items-stretch w-full p-4">
        <label class="self-center w-[23%] mr-[2%] font-bold" :for="answerC">Wpisz treść mozliwej
          odpowiedzi</label>
        <input class="w-[75%]" type="text" :name="questionABCD_answerC" :id="answerC"
          placeholder="   wpisz treść mozliwej odpowiedzi C" />
      </div>
      <div class="flex flex-row flex-1 items-stretch w-full p-4">
        <label class="self-center w-[23%] mr-[2%] font-bold" :for="answerD">Wpisz treść mozliwej
          odpowiedzi</label>
        <input class="w-[75%]" type="text" :name="questionABCD_answerD" :id="answerD"
          placeholder="   wpisz treść mozliwej odpowiedzi D" />
      </div>
    </div>

    <otherFunctionalBtns :id="id" :index="index" @deleteElement="$emit('deleteElement', id)"
      @swapElements="$emit('swapElements', index)">
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
})

const emit = defineEmits([
  'moveUp',
  'moveDown',
  'deleteElement',
  'swapElements'
])

const questionABCD = 'questions[' + props.index + '][abcd][question][name]';
const questionABCDId = 'questions-' + props.index + '-question-abcd';
const questionABCD_answerA = 'questions[' + props.index + '][abcd][answers][a]';
const answerA = 'questions-' + props.index + '-answer-a';
const questionABCD_answerB = 'questions[' + props.index + '][abcd][answers][b]';
const answerB = 'questions-' + props.index + '-answer-b';
const questionABCD_answerC = 'questions[' + props.index + '][abcd][answers][c]';
const answerC = 'questions-' + props.index + '-answer-c';
const questionABCD_answerD = 'questions[' + props.index + '][abcd][answers][d]';
const answerD = 'questions-' + props.index + '-answer-d';

</script>