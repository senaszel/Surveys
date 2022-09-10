<template>
    <div v-if="type === 'abcd'">
        <AbcdQuestionType
            :id="id"
            :type="type"
            :index="index"
            :list-length="listLength"
            @deleteElement="$emit('deleteElement', id)"
            @moveUp="$emit('moveUp', index)"
            @moveDown="$emit('moveDown', index)"
            @swapElements="$emit('swapElements', index)"
        >
        </AbcdQuestionType>
    </div>
    <div v-if="type === 'trueOrFalse'">
        <TrueOrFalseQuestionType
            :id="id"
            :type="type"
            :index="index"
            :list-length="listLength"
            @deleteElement="$emit('deleteElement', id)"
            @moveUp="$emit('moveUp', index)"
            @moveDown="$emit('moveDown', index)"
            @swapElements="$emit('swapElements', index)"
        >
        </TrueOrFalseQuestionType>
    </div>
    <div v-if="type === 'open'">
        <OpenQuestionType
            :id="id"
            :type="type"
            :index="index"
            :list-length="listLength"
            @deleteElement="$emit('deleteElement', id)"
            @moveUp="$emit('moveUp', index)"
            @moveDown="$emit('moveDown', index)"
            @swapElements="$emit('swapElements', index)"
        >
        </OpenQuestionType>
    </div>
</template>

<script setup lang="ts">
import { provide } from "vue";
import AbcdQuestionType from "./questionTypes/abcd-question-type.vue";
import TrueOrFalseQuestionType from "./questionTypes/trueOrFalse-question-type.vue";
import OpenQuestionType from "./questionTypes/open-question-type.vue";
import { quesetionControllerKey, QuestionController } from "./question";

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

const controller: QuestionController = {
    moveUp: (index) => emit("moveUp", index),
    moveDown: (index) => emit("moveDown", index),
};

provide(quesetionControllerKey, controller);

//provide(quesetionControllerKey, controller)
</script>
