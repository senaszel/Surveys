<template>
    <div
        v-if="index !== 0 || index !== listLength - 1"
        class="absolute right-[85%]"
    >
        <div
            class="flex flex-col flex-1 w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black space-y-16"
        >
            <button
                v-if="index !== 0"
                class="justify-self-end bg-blue-400 hover:bg-blue-600 hover:text-white p-4 rounded-full"
                @click.prevent="controller.moveUp(index)"
            >
                przesuń w górę
            </button>
            <button
                v-if="index !== listLength - 1"
                class="justify-self-end bg-blue-400 hover:bg-blue-600 hover:text-white p-4 rounded-full"
                @click.prevent="controller.moveDown(index)"
            >
                przesuń w dół
            </button>
        </div>
    </div>
</template>

<script setup lang="ts">
import { inject } from "vue";
import { QuestionController } from "./question";

const props = defineProps({
    index: { required: true, type: Number },
    listLength: { required: true, type: Number },
});

const emit = defineEmits([
    "moveUp",
    "moveDown",
    "deleteElement",
    "swapElements",
]);

const controller = inject<QuestionController>("questionController");
if (controller == null) {
    throw new Error("not in question");
}
</script>
