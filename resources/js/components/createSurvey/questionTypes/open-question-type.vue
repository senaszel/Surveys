<template>
    <div class="flex flex-row flex-1 h-full">
        <input type="hidden" :name="typeName" :value="type" />

        <movingOnTheListBtns
            :index="index"
            :list-length="listLength"
            @move-up="$emit('moveUp', index)"
            @move-down="$emit('moveDown', index)"
        >
        </movingOnTheListBtns>

        <div
            class="flex flex-row flex-1 w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black h-[220px]"
        >
            <div class="flex flex-row w-full p-4 items-center">
                <label
                    class="self-center w-[18%] mr-[2%] font-bold"
                    :for="questionOpen"
                    >Wpisz treść pytania</label
                >
                <input
                    class="w-[80%]"
                    type="text"
                    :name="questionOpen"
                    placeholder="   wpisz treść pytania otwartego"
                />
            </div>
        </div>

        <otherFunctionalBtns
            :id="id"
            :index="index"
            @delete-element="$emit('deleteElement', id)"
            @swap-elements="$emit('swapElements', index)"
        >
        </otherFunctionalBtns>
    </div>
</template>

<script>
import movingOnTheListBtns from "../moving-on-the-list-btns.vue";
import otherFunctionalBtns from "../other-functional-btns.vue";

export default {
    components: {
        movingOnTheListBtns,
        otherFunctionalBtns,
    },

    props: {
        id: { required: true, type: String },
        type: { required: true, type: String },
        index: { required: true, type: Number },
        listLength: { required: true, type: Number },
    },
    emits: {
        moveUp: null,
        moveDown: null,
        deleteElement: null,
        swapElements: null,
    },

    data() {
        return {
            typeName: "questions[" + this.index + "][type]",
            questionOpen: "questions[" + this.index + "][question][name]",
        };
    },
};
</script>
