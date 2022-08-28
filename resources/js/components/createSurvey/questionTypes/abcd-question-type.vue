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
      <label class="w-[23%] mr-[2%] font-bold" for="pytanieABCD">Wpisz treść pytania</label>
      <input class="w-[75%]" type="text" name="pytanieABCD" id="pytanieABCD" placeholder="   wpisz treść pytania" />
    </div>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="self-center w-[23%] mr-[2%] font-bold" for="odpowiedzA">Wpisz treść mozliwej
        odpowiedzi</label>
      <input class="w-[75%]" type="text" name="pytanieABCD" id="odpowiedzA"
        placeholder="   wpisz treść mozliwej odpowiedzi A"/>
    </div>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="self-center w-[23%] mr-[2%] font-bold" for="odpowiedzB">Wpisz treść mozliwej
        odpowiedzi</label>
      <input class="w-[75%]" type="text" name="pytanieABCD" id="odpowiedzB"
        placeholder="   wpisz treść mozliwej odpowiedzi B"/>
    </div>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="self-center w-[23%] mr-[2%] font-bold" for="odpowiedzC">Wpisz treść mozliwej
        odpowiedzi</label>
      <input class="w-[75%]" type="text" name="pytanieABCD" id="odpowiedzC"
        placeholder="   wpisz treść mozliwej odpowiedzi C" />
    </div>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="self-center w-[23%] mr-[2%] font-bold" for="odpowiedzD">Wpisz treść mozliwej
        odpowiedzi</label>
      <input class="w-[75%]" type="text" name="pytanieABCD" id="odpowiedzD"
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
      pytanie_abcd: '',
      odpowiedzA: '',
      odpowiedzB: '',
      odpowiedzC: '',
      odpowiedzD: '',
    };
  },

  methods: {
    //methods
  },
};
</script>
  
  <style>
  </style>