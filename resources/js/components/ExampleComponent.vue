<template>
    <div style="height: 350px;">
    <div class="info" style="height: 15%">
      <span>Center: {{ center }}</span>
      <span>Zoom: {{ zoom }}</span>
      <span>Bounds: {{ bounds }}</span>
    </div>
    <l-map
      style="height: 80%; width: 100%"
      :zoom="zoom"
      :center="center"
      @update:zoom="zoomUpdated"
      @update:center="centerUpdated"
      @update:bounds="boundsUpdated"
    >
      <l-tile-layer :url="url"></l-tile-layer>
      <l-marker :lat-lng="markerLatLng" ></l-marker>
    </l-map>
  </div>
</template>

<script>
import L from 'leaflet';
import { LMap, LTileLayer, LMarker } from 'vue2-leaflet';
import { Icon } from 'leaflet';

delete Icon.Default.prototype._getIconUrl;
Icon.Default.mergeOptions({
  iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
  iconUrl: require('leaflet/dist/images/marker-icon.png'),
  shadowUrl: require('leaflet/dist/images/marker-shadow.png'),
});
    export default {
        name: 'MyAwesomeMap',
        components: {
            LMap,
            LTileLayer,
            LMarker,
        },
        data() {
            return {
                url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                zoom: 3,
                center: [47.413220, -1.219482],
                bounds: null,
                markerLatLng: [47.313220, -1.319482]
            }
        },
       methods: {
            zoomUpdated (zoom) {
            this.zoom = zoom;
            },
            centerUpdated (center) {
            this.center = center;
            },
            boundsUpdated (bounds) {
            this.bounds = bounds;
            }
        }
    }
</script>
