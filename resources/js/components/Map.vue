
<script>
import {
  LMap,
  LIcon,
  LTileLayer,
  LMarker,
  LControlLayers,
  LTooltip,
  LPopup,
  LPolyline,
  LPolygon,
  LRectangle,
} from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css";
export default {
  components: {
    LMap,
    LIcon,
    LTileLayer,
    LMarker,
    LControlLayers,
    LTooltip,
    LPopup,
    LPolyline,
    LPolygon,
    LRectangle,
  },
  data() {
    return {
      zoom: 12,
    };
  },
};
</script>

<template>
  <div id="map">
    <l-map
      v-model="zoom"
      v-model:zoom="zoom"
      :center="[51.2364327, 4.4198728]"
    >
      <l-tile-layer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
      ></l-tile-layer>
    </l-map>
  </div>
</template>

<style>
  #map {
    height: 75vh;
  }
</style>
