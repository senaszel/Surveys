<template>
  <div>
    <dialog id="addQuestionDialog" class="">
      <div class="flex flex-col flex-1 w-full">
        <h1 class="mx-4 mb-4 text-xl text-center">Wskaz typ pytania:</h1>
        <div class="flex flex-row items-stretch flex-1">
          <button id="BtnAddOpenTypeOfQuestion" @click="AddCertainTypeOfQuestion('open')" class="
              p-2
              mx-8
              my-4
              text-white
              bg-green-500
              text-l
              outline outline-green-500
              hover:text-green-500 hover:bg-white
            " type="button">
            otwarte
          </button>
          <button id="BtnAddABCDTypeOfQuestion" @click="AddCertainTypeOfQuestion('abcd')" class="
              p-2
              mx-8
              my-4
              text-white
              bg-green-500
              text-l
              outline outline-green-500
              hover:text-green-500 hover:bg-white
            " type="button">
            ABCD
          </button>
          <button id="BtnAddTrueOrFalseTypeOfQuestion" @click="AddCertainTypeOfQuestion('trueOrFalse')"
            class="
              p-2
              mx-8
              my-4
              text-white
              bg-green-500
              text-l
              outline outline-green-500
              hover:text-green-500 hover:bg-white
            " type="button">
            tak/nie
          </button>
        </div>

        <button class="
            p-2
            mt-4
            text-white
            bg-red-500
            outline outline-red-500
            hover:text-red-500 hover:bg-white hover:text-2xl
          " type="button" id="close-button" @click="closeModal">
          zamknij
        </button>
      </div>
    </dialog>

    <div class="
        flex flex-row flex-1
        w-full
        mx-auto
        p-8
        shadow-lg
        rounded-xl
        bg-red-50
      ">
      <button class="
          flex-1
          px-4
          py-4
          text-xl text-white
          rounded
          bg-green-400
          hover:bg-slate-300 hover:text-green-400 hover:text-2xl
          outline-none hover:font-bold
          hover:outline hover:outline-red-50 hover:outline-4
        " type="button" id="open-button" @click="showModal">
        Dodaj pytanie
      </button>
    </div>
  </div>
</template>

<script>

export default {
  components: {
    //components
  },
  data() {
    return {
      //data
    };
  },
  props: {
    //props
  },
  methods: {
    showModal() {
      this.$el.querySelector("#addQuestionDialog").showModal();
    },
    closeModal() {
      this.$el.querySelector("#addQuestionDialog").close();
    },
    AddCertainTypeOfQuestion(type) {
      this.$emit('AddCertainTypeOfQuestion', type),
      this.closeModal()
    },
  },
};
</script>
