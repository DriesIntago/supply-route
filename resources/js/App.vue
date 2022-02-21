<script setup>
  import Map from './components/Map.vue'
</script>

<template>
  <header>
    <img alt="Vue logo" class="logo" src="../assets/logo.svg" width="125" height="125" />
  </header>

  <main>
    <Map />
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
