
<script>
import { LMap, LTileLayer } from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css";

export default {
  components: {
    LMap,
    LTileLayer,
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
    </LMap>
  </div>
</template>

<style>
  #map {
    height: 75vh;
  }
</style>
