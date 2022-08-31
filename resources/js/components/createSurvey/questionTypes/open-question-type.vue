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
            <label class="w-[18%] mr-[2%] font-bold" :for="questionOpen">Wpisz treść pytania</label>
            <input class="w-[80%] h-[125%]" type="text" :name="questionOpen"
                placeholder="   wpisz treść pytania otwartego" />
        </div>
    </div>
</template>
  
  <script>
export default {
    data() {
        return {
            questionOpen: 'questions['+this.id+'][open][question][name]',
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