<template>
  <div v-if="type === 'abcd'">
    <abcdQuestionType @deleteElement="$emit('deleteElement', id)" :type="type" :id="id"></abcdQuestionType>
  </div>
  <div v-if="type === 'trueOrFalse'">
    <trueOrFalseQuestionType @deleteElement="$emit('deleteElement', id)" :type="type" :id="id"></trueOrFalseQuestionType>
  </div>
  <div v-if="type === 'open'">
    <openQuestionType @deleteElement="$emit('deleteElement', id)" :type="type" :id="id"></openQuestionType>
  </div>
</template>

<script>
import abcdQuestionType from "./questionTypes/abcd-question-type.vue";
import trueOrFalseQuestionType from "./questionTypes/trueOrFalse-question-type.vue";
import openQuestionType from "./questionTypes/open-question-type.vue";

export default {
  components: { abcdQuestionType, trueOrFalseQuestionType, openQuestionType },

  props: {
    id: { required: true, type: String },
    type: { required: true, type: String },
  },

  emits: ["deleteElement"],

  methods: {
    //methods
  },
};
</script>