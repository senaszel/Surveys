<template>
  <div v-if="type === 'abcd'">
    <abcdQuestionType :type="type" :id="id" :index="index" :listLength="listLength"
      @deleteElement="$emit('deleteElement', id)" 
      @moveUp="$emit('moveUp', index)"
      @moveDown="$emit('moveDown', index)"
      @swapElements="$emit('swapElements', index)">
    </abcdQuestionType>
  </div>
  <div v-if="type === 'trueOrFalse'">
    <trueOrFalseQuestionType :type="type" :id="id" :index="index" :listLength="listLength"
      @deleteElement="$emit('deleteElement', id)"
      @moveUp="$emit('moveUp', index)"
      @moveDown="$emit('moveDown', index)"
      @swapElements="$emit('swapElements', index)">
    </trueOrFalseQuestionType>
  </div>
  <div v-if="type === 'open'">
    <openQuestionType :type="type" :id="id" :index="index" :listLength="listLength"
      @deleteElement="$emit('deleteElement', id)" 
      @moveUp="$emit('moveUp', index)"
      @moveDown="$emit('moveDown', index)"
      @swapElements="$emit('swapElements', index)">
    </openQuestionType>
  </div>
</template>

<script>
import abcdQuestionType from "./questionTypes/abcd-question-type.vue";
import trueOrFalseQuestionType from "./questionTypes/trueOrFalse-question-type.vue";
import openQuestionType from "./questionTypes/open-question-type.vue";

export default {
  components: { 
    abcdQuestionType, 
    trueOrFalseQuestionType, 
    openQuestionType 
  },

  props: {
    id: { required: true, type: String },
    type: { required: true, type: String },
    index: { required: true, type: Number },
    listLength: { required: true, type: Number },
  },

  emits: [
      'moveUp',
      'moveDown',
      'deleteElement',
      'swapElements'
    ],

  methods: {
    //methods
  },
};
</script>