<script>

import Registration from './components/form/Registration.vue'


const routes = {

  '/registration': Registration
}

export default {
  data() {
    return {
      currentPath: window.location.hash
    }
  },
  computed: {
    currentView() {
      return routes[this.currentPath.slice(1) || '/'] || NotFound
    }
  },
  mounted() {
    window.addEventListener('hashchange', () => {
		  this.currentPath = window.location.hash
		})
  }
}
</script>

<template>
  <a href="#/">Home</a>
  <a href="#/">Registration</a>

  <header>

  </header>

  <main>
    <Registration/>
  </main>
</template>

