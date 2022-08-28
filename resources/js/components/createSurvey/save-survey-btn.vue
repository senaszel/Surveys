<template>
  <div
    class="
      flex flex-row flex-1
      w-full
      mx-auto
      p-8
      shadow-lg
      rounded-xl
      bg-red-50
    "
  >
    <button
      class="
        flex-1
        px-4
        py-4
        text-xl text-white
        rounded
        bg-orange-400
        hover:bg-slate-300 hover:text-orange-400 hover:text-2xl
        outline-none
        hover:font-bold hover:outline hover:outline-red-50 hover:outline-4
      "
      type="button"
      id="open-button"
      @click="saveSurvey"
    >
      Zapisz ankiete
    </button>
  </div>
</template>

<script>
export default {
  methods: {
    saveSurvey() {

    },
  },
};
</script>

<style>
</style>