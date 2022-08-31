<template>
  <div class="flex flex-row flex-1">
    <div v-show="index !== 0 || index !== listLength-1" class="absolute right-[80%]">
      <div class="flex flex-col flex-1 w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black space-y-28">
        <button v-show="index !== 0" @click.prevent="$emit('moveUp',index)" class="justify-self-start bg-blue-400 hover:bg-blue-600 hover:text-white p-4 rounded-full">przesuń w górę</button>
        <button v-show="index !== listLength-1" @click.prevent="$emit('moveDown',index)" class="justify-self-end bg-blue-400 hover:bg-blue-600 hover:text-white p-4 rounded-full">przesuń w dół</button>
      </div>
    </div>

    <div class="flex flex-col flex-1 items-stretch w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black">
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
   
    <div class="absolute left-[80%]">
      <div class="flex flex-col flex-1 items-stretch w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black space-y-8">
        <button @click.prevent="$emit('deleteElement', id)"
        class="p-4 rounded-full bg-blue-400 text-xl font-bold hover:bg-red-500">delete</button>
        <button @click.prevent="" class="bg-blue-400 p-4 rounded-full">dłuszy tekst w buttonie</button>
        <button @click.prevent="" class="bg-blue-400 p-4 rounded-full">raz</button>
    </div>
  </div>
  </div>
</template>
  
  <script>
export default {

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