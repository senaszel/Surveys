    <template>
    <div class="flex flex-row flex-1 h-full">

        <movingOnTheListBtns :index="index" :listLength="listLength" @moveUp="$emit('moveUp', index)"
            @moveDown="$emit('moveDown', index)">
        </movingOnTheListBtns>

        <div
            class="flex flex-row flex-1 w-full mx-auto p-8 shadow-lg rounded-xl bg-red-50 hover:bg-slate-300 hover:text-black h-[220px]">
            <div class="flex flex-row w-full p-4 items-center">
                <label class="self-center w-[18%] mr-[2%] font-bold" :for="questionOpen">Wpisz treść pytania</label>
                <input class="w-[80%]" type="text" :name="questionOpen"
                    placeholder="   wpisz treść pytania otwartego" />
            </div>
        </div>

        <otherFunctionalBtns :id="id" :index="index" @deleteElement="$emit('deleteElement', id)"
            @swapElements="$emit('swapElements', index)">
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

    data() {
        return {
            questionOpen: 'questions[' + this.index + '][open][question][name]',
        };
    },
    props: {
        id: { required: true, type: String },
        type: { required: true, type: String },
        index: { required: true, type: Number },
        listLength: { required: true, type: Number },
    },
};
</script>