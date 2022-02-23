<script>
import { LMap, LTileLayer, LMarker, LPopup, LPolyline } from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css";

export default {
  components: {
    LMap,
    LTileLayer,
    LMarker,
    LPopup,
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
  updated() {
    console.log(this.ships.map((ship) => [ship.latitude, ship.longitude]))
  }
};
</script>

<template>
  <div id="map">
    <LMap :zoom="zoom" :center="center">
      <LTileLayer url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"></LTileLayer>
      <LMarker v-for="ship in this.ships" :lat-lng="[ship.latitude, ship.longitude]">
        <LPopup>{{ ship.name }}</LPopup>
      </LMarker>
      <LPolyline  :lat-lngs="this.ships.map(ship => [ship.latitude, ship.longitude])"></LPolyline>
    </LMap>
  </div>
</template>

<style>
#map {
  height: 100vh;
}
</style>
