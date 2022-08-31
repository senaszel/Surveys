    <template>
  <div class="
      flex flex-col flex-1
      w-full
      mx-auto
      p-8
      shadow-lg
      rounded-xl
      bg-red-50
      hover:bg-slate-300 hover:text-black
    ">
    <button @click.prevent="$emit('deleteElement', id)"
      class="p-2 text-xl font-bold text-red-50 hover:text-red-500 place-self-end flex-grow-0">delete</button>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="w-[15%] mr-[2%] font-bold" :for="questionTOrF">Wpisz treść pytania</label>
      <input class="w-[83%]" type="text" :name="questionTOrF" :id="questionTOrFId" placeholder="   wpisz treść pytania" />
    </div>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <div class="flex flex-row flex-1 items-stretch w-full">
        <label class="self-center w-[23%] mr-[2%] font-bold" :for="answerTrue">Wpisz treść mozliwej
          odpowiedzi </label>
        <input class="w-[75%]" type="text" :name="questionTOrF_answerT" :id="answerTrue"
          placeholder="   wpisz treść mozliwej odpowiedzi" />
      </div>
      <div class="flex flex-row flex-1 items-stretch w-full pl-4">
        <label class="self-center w-[23%] mr-[2%] font-bold" :for="answerFalse">Wpisz treść mozliwej
          odpowiedzi</label>
        <input class="w-[75%]" type="text" :name="questionTOrF_answerF" :id="answerFalse"
          placeholder="   wpisz treść mozliwej odpowiedzi B" />
      </div>
    </div>
  </div>
</template>

  
  <script>
export default {
  data() {
        return {
          questionTOrF: 'questions[' + this.id + '][trueOrFalse][question][name]',
          questionTOrFId: 'questions-' + this.id + '-question-trueOrFalse',
          questionTOrF_answerT: 'questions[' + this.id + '][trueOrFalse][answers][true]',
          answerTrue: 'questions-' + this.id + '-answer-true',
          questionTOrF_answerF: 'questions[' + this.id + '][trueOrFalse][answers][false]',
          answerFalse: 'questions-' + this.id + '-answer-false',
        };
    },
  props: {
    id: { required: true, type: String },
    type: { required: true, type: String },
  },
};
</script>
  
  <style>
  </style>