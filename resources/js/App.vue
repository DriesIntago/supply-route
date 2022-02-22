<script>
  import ShipMap from './components/ShipMap.vue'

  export default {
    components: {
        ShipMap,
    },
    data() {
      return {
        shipIds: [205515690, 205448890, 205367990],
        shipData: [],
      }
    },
    created() {
      this.shipIds.forEach(shipId => {
        this.fetchData(shipId)
        console.log('oops')
      });
    },
    methods: {
      // Fetch vessel data
      async fetchData(shipId) {
        const uri = `${process.env.MIX_API_ENDPOINT}/ships/${shipId}`
        this.shipData.push(await (await fetch(uri)).json())
      }
    }
  }
</script>

<template>
  <header>
    <img alt="Vue logo" class="logo" src="../assets/logo.svg" width="125" height="125" />
  </header>

  <main>
    <ShipMap :ships="this.shipData"/>
  </main>
</template>

<style>
  @import '../css/base.css';

  #app {
    max-width: 1280px;
    margin: 0 auto;
    padding: 2rem;
    font-weight: normal;
  }

  header {
    line-height: 1.5;
  }

  .logo {
    display: block;
    margin: 0 auto 2rem;
  }
</style>
