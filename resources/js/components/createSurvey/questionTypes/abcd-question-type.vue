<template>
  <div class="
      flex flex-col flex-1
      items-stretch
      w-full
      mx-auto
      p-8
      shadow-lg
      rounded-xl
      bg-red-50
      hover:bg-slate-300 hover:text-black
    ">
    <button @click="$emit('deleteElement', id)"
      class="p-2 text-xl font-bold text-red-50 hover:text-red-500 place-self-end flex-grow-0">delete</button>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="w-[23%] mr-[2%] font-bold" for="questionABCD">Wpisz treść pytania</label>
      <input class="w-[75%]" type="text" :name="questionABCD" :id="questionABCDId" placeholder="wpisz treść pytania" />
    </div>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="self-center w-[23%] mr-[2%] font-bold" :for="answerA">Wpisz treść mozliwej
        odpowiedzi</label>
      <input class="w-[75%]" type="text" :name="questionABCD_answerA" :id="answerA"
        placeholder="   wpisz treść mozliwej odpowiedzi A"/>
    </div>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="self-center w-[23%] mr-[2%] font-bold" :for="answerB">Wpisz treść mozliwej
        odpowiedzi</label>
      <input class="w-[75%]" type="text" :name="questionABCD_answerB" :id="answerB"
        placeholder="   wpisz treść mozliwej odpowiedzi B"/>
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
</template>
  
  <script>
  export default {

    props: {
      id: { required: true, type: String },
      type: { required: true, type: String },
    },

    data() {
      return {
        questionABCD: 'questions[' + this.id + '][abcd][question][name]',
        questionABCDId: 'questions-' + this.id + '-question-abcd',
        questionABCD_answerA: 'questions[' + this.id + '][abcd][answers][a]',
        answerA: 'questions-' + this.id + '-answer-a',
        questionABCD_answerB: 'questions[' + this.id + '][abcd][answers][b]',
        answerB: 'questions-' + this.id + '-answer-b',
        questionABCD_answerC: 'questions[' + this.id + '][abcd][answers][c]',
        answerC: 'questions-' + this.id + '-answer-c',
        questionABCD_answerD: 'questions[' + this.id + '][abcd][answers][d]',
        answerD: 'questions-' + this.id + '-answer-d',
      };
    },

    methods: {
      //methods
    },
  };
  </script>
  
  <style>
  </style>