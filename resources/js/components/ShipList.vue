<script>
import { SlickList, SlickItem } from 'vue-slicksort';
import ShipCard from "./ShipCard.vue";

export default {
    components: {
        SlickList,
        SlickItem,
        ShipCard,
    },
    props: {
        ships: Array,
    },
    emits: ['update:ships'],
    data() {
        return {
            zoom: 11,
            center: [51.2364327, 4.4198728],
        };
    },
};
</script>

<template>
    <SlickList
        class="long-list"
        axis="y"
        lockAxis="y"
        v-model:list="ships"
        @update:list="$emit('update:ships', $event)"
    >
        <SlickItem v-for="(ship, i) in ships" :key="ship" :index="i">
            <ShipCard :ship="ship"></ShipCard>
        </SlickItem>
    </SlickList>
</template>

<style lang="scss">
.long-list {
  max-height: 100vh;
  overflow-y: scroll;
}
</style>
