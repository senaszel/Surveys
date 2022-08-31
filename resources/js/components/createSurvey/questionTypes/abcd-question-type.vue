<template>
  <div class="flex flex-row flex-1">
    <movingOnTheListBtns :index="index" :listLength="listLength"
      @moveUp="$emit('moveUp',index)" 
      @moveDown="$emit('moveDown',index)">
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

    <otherFunctionalBtns :id="id" :index="index"
      @deleteElement="$emit('deleteElement', id)"
      @swapElements="$emit('swapElements', index)" >
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

  data() {
    return {
      questionABCD: 'questions[' + this.index + '][abcd][question][name]',
      questionABCDId: 'questions-' + this.index + '-question-abcd',
      questionABCD_answerA: 'questions[' + this.index + '][abcd][answers][a]',
      answerA: 'questions-' + this.index + '-answer-a',
      questionABCD_answerB: 'questions[' + this.index + '][abcd][answers][b]',
      answerB: 'questions-' + this.index + '-answer-b',
      questionABCD_answerC: 'questions[' + this.index + '][abcd][answers][c]',
      answerC: 'questions-' + this.index + '-answer-c',
      questionABCD_answerD: 'questions[' + this.index + '][abcd][answers][d]',
      answerD: 'questions-' + this.index + '-answer-d',
    };
  },

  methods: {
    //methods
  },
};
</script>
  
  <style>
  </style>