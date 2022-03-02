<script>
import { LMap, LTileLayer, LMarker, LPopup, LPolyline, LGeoJson } from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css";
import * as poaGeojson from "../../assets/PortOfAntwerp.geojson";
import * as osmGeojson from "../../assets/OpenStreetMap.geojson";

export default {
  components: {
    LMap,
    LTileLayer,
    LMarker,
    LPopup,
    LPolyline,
    LGeoJson,
  },
  props: {
    ships: Array,
  },
  data() {
    return {
      zoom: 11,
      center: [51.2364327, 4.4198728],
      geojson: osmGeojson,
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
      <LMarker v-for="ship in this.ships" :lat-lng="[ship.latitude, ship.longitude]" color="red">
        <LPopup>{{ ship.name }}</LPopup>
      </LMarker>
      <LGeoJson :geojson="geojson"></LGeoJson>
      <LPolyline  :lat-lngs="this.ships.map(ship => [ship.latitude, ship.longitude])" color="red"></LPolyline>
    </LMap>
  </div>
</template>

<style>
#map {
  height: 100vh;
}
</style>
