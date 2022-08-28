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
    <button @click="$emit('deleteElement', id)"
      class="p-2 text-xl font-bold text-red-50 hover:text-red-500 place-self-end flex-grow-0">delete</button>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <label class="w-[15%] mr-[2%] font-bold" for="pytanieOtwarte">Wpisz treść pytania</label>
      <input class="w-[83%]" type="text" name="pytanieOtwarte" id="pytanieOtwarte" placeholder="   wpisz treść pytania" />
    </div>
    <div class="flex flex-row flex-1 items-stretch w-full p-4">
      <div class="flex flex-row flex-1 items-stretch w-full">
        <label class="self-center w-[23%] mr-[2%] font-bold" for="odpowiedzA">Wpisz treść mozliwej
          odpowiedzi </label>
        <input class="w-[75%]" type="text" name="odpowiedzA" id="odpowiedzA"
          placeholder="   wpisz treść mozliwej odpowiedzi" />
      </div>
      <div class="flex flex-row flex-1 items-stretch w-full pl-4">
        <label class="self-center w-[23%] mr-[2%] font-bold" for="odpowiedzB">Wpisz treść mozliwej
          odpowiedzi</label>
        <input class="w-[75%]" type="text" name="odpowiedzB" id="odpowiedzB"
          placeholder="   wpisz treść mozliwej odpowiedzi B" />
      </div>
    </div>
  </div>
</template>

  
  <script>
export default {
  props: {
    id: { required: true, type: String },
    type: { required: true, type: String },
  },
};
</script>
  
  <style>
  </style>