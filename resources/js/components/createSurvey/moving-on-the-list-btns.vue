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
                @click.prevent="controller.moveUp(index)"
                class="justify-self-end bg-blue-400 hover:bg-blue-600 hover:text-white p-4 rounded-full"
            >
                przesuń w górę
            </button>
            <button
                v-if="index !== listLength - 1"
                @click.prevent="controller.moveDown(index)"
                class="justify-self-end bg-blue-400 hover:bg-blue-600 hover:text-white p-4 rounded-full"
            >
                przesuń w dół
            </button>
        </div>
    </div>
</template>

<script setup>
import { inject } from "vue";

const props = defineProps({
    index: { required: true, type: Number },
    listLength: { required: true, type: Number },
});

const controller = inject("questionController");
if (controller == null) {
    throw new Error("not in question");
}

const emit = defineEmits([
    "moveUp",
    "moveDown",
    "deleteElement",
    "swapElements",
]);
</script>
