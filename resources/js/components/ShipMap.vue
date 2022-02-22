<script>
import { LMap, LTileLayer, LMarker, LPolyline } from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css";

export default {
  components: {
    LMap,
    LTileLayer,
    LMarker,
    LPolyline,
  },
  props: {
    ships: Array,
  },
  data() {
    return {
      zoom: 11,
      center: [51.2364327, 4.4198728],
    };
  },
};
</script>

<template>
  <div id="map">
    <LMap :zoom="zoom" :center="center">
      <LTileLayer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
      ></LTileLayer>
      <LMarker v-for="ship in this.ships" :lat-lng="[ship.latitude, ship.longitude]"></LMarker>
    </LMap>
  </div>
</template>

<style>
  #map {
    height: 75vh;
  }
</style>
