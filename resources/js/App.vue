<script>
import ShipList from './components/ShipList.vue'
import ShipMap from './components/ShipMap.vue'

export default {
  components: {
    ShipMap,
    ShipList,
  },
  data() {
    return {
      shipIds: [205515690, 205448890, 205367990, 205535590, 244001996, 205346790],
      shipData: [],
    }
  },
  async created() {
    this.shipData = []
    this.shipIds.forEach(async shipId => {
      this.fetchData(shipId)
        .then(data => this.shipData.push(data))
    });
  },
  methods: {
    // Fetch vessel data
    async fetchData(shipId) {
      const uri = `${process.env.MIX_API_ENDPOINT}/ships/${shipId}`
      var response = await fetch(uri)
      var data = await response.json()
      return data
    }
  }
}
</script>

<template>
  <main>
    <ShipList v-model:ships="shipData" />
    <ShipMap v-model:ships="shipData" />
  </main>
</template>

<style>
@import "../css/base.css";

main {
  display: grid;
  grid-template-columns: 1fr 3fr;
}
</style>
