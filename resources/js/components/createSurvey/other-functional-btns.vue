<template>
    <div class="absolute left-[85%]">
        <div
            class="flex flex-col flex-1 items-stretch w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black space-y-16"
        >
            <button
                class="p-4 rounded-full bg-blue-400 text-xl font-bold hover:bg-red-500"
                @click.prevent="$emit('deleteElement', id)"
            >
                usuń pytanie
            </button>
            <button
                class="p-4 rounded-full bg-blue-400 text-xl font-bold hover:bg-red-500"
                @click.prevent="$emit('swapElements', index)"
            >
                zamień miejscami
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        id: { required: true, type: String },
        index: { required: true, type: Number },
    },
    emits: ["deleteElement", "swapElements"],
};
</script>
