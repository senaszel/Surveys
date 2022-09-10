<template>
    <div v-if="type === 'abcd'">
        <abcdQuestionType
            :id="id"
            :type="type"
            :index="index"
            :list-length="listLength"
            @delete-element="$emit('deleteElement', id)"
            @move-up="$emit('moveUp', index)"
            @move-down="$emit('moveDown', index)"
            @swap-elements="$emit('swapElements', index)"
        >
        </abcdQuestionType>
    </div>
    <div v-if="type === 'trueOrFalse'">
        <trueOrFalseQuestionType
            :id="id"
            :type="type"
            :index="index"
            :list-length="listLength"
            @delete-element="$emit('deleteElement', id)"
            @move-up="$emit('moveUp', index)"
            @move-down="$emit('moveDown', index)"
            @swap-elements="$emit('swapElements', index)"
        >
        </trueOrFalseQuestionType>
    </div>
    <div v-if="type === 'open'">
        <openQuestionType
            :id="id"
            :type="type"
            :index="index"
            :list-length="listLength"
            @delete-element="$emit('deleteElement', id)"
            @move-up="$emit('moveUp', index)"
            @move-down="$emit('moveDown', index)"
            @swap-elements="$emit('swapElements', index)"
        >
        </openQuestionType>
    </div>
</template>

<script setup lang="ts">
import { provide } from "vue";
import abcdQuestionType from "./questionTypes/abcd-question-type.vue";
import trueOrFalseQuestionType from "./questionTypes/trueOrFalse-question-type.vue";
import openQuestionType from "./questionTypes/open-question-type.vue";

const props = defineProps({
    id: { required: true, type: String },
    type: { required: true, type: String },
    index: { required: true, type: Number },
    listLength: { required: true, type: Number },
});

const emit = defineEmits([
    "moveUp",
    "moveDown",
    "deleteElement",
    "swapElements",
]);

const controller = {
    moveUp: (index) => emit("moveUp", index),
    moveDown: (index) => emit("moveDown", index),
};

provide("questionController", controller);
</script>
