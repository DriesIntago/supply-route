<script>
export default {
  props: {
    ship: Object,
  },
};
</script>

<template>
  <div class="card-body">
    <h5 class="card-title">{{ this.ship.name }}</h5>
    <p class="card-text">
      <span class="label">Location: </span>
      <span class="value">{{ this.ship.location }}</span>
    </p>
    <p class="card-text">
      <span class="label">MMSI: </span>
      <span class="value">{{ this.ship.mmsi }}</span>
    </p>
  </div>
</template>

<style lang="scss">
.card-body {
  padding: 14px;
  margin: 7px;
  border: solid;
  background-color: black;
  .card-title {
      text-decoration: underline;
      font-weight: bold;
  }
  .card-text {
    margin-bottom: 0;
    .value {
      float: right;
    }
  }
}
</style>
