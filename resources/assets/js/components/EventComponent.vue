<template lang="html">
  <div class="">
    <button v-on:click="counter += 1">Add 1</button>
    <button v-on:click="counter -= 1">Delete 1</button>
    <p>The button above has been clicked {{ counter }} times.</p>

    <!-- `greet` is the name of a method defined below -->
    <button v-on:click="greet">Greet</button>

    <input v-on:keyup.enter="greet">

    <!-- this will fire even if Alt or Shift is also pressed -->
    <button @click.ctrl="onClick">Ctrl + click</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      counter: 10,
      name : 'Vue.js',
    }
  },
  watch : {

  },
  mounted() {

  },
  methods : {
    greet (event) {
      // `this` inside methods points to the Vue instance
      alert('Hello ' + this.name + '!')
      // `event` is the native DOM event
      if (event) {
        alert(event.target.tagName)
      }
    },
    onClick(){
      alert('Event')
    },
  },

}
</script>

<style lang="css">
</style>
