<template>
  <div v-if="type === 'abcd'">
    <abcdQuestionType :type="type" :id="id" :index="index" :listLength="listLength"
      @deleteElement="$emit('deleteElement', id)" 
      @moveUp="$emit('moveUp', index)"
      @moveDown="$emit('moveDown', index)">
    </abcdQuestionType>
  </div>
  <div v-if="type === 'trueOrFalse'">
    <trueOrFalseQuestionType @deleteElement="$emit('deleteElement', id)" :type="type" :id="id" :index="index"></trueOrFalseQuestionType>
  </div>
  <div v-if="type === 'open'">
    <openQuestionType @deleteElement="$emit('deleteElement', id)" :type="type" :index="index" :id="id"></openQuestionType>
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
    index: { required: true, type: Number },
    listLength: { required: true, type: Number },
  },

  emits: [
      'deleteElement',
      'moveUp',
      'moveDown',
    ],

  methods: {
    //methods
  },
};
</script>