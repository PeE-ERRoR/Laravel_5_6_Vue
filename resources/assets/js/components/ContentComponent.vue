<template lang="html">
  <div class="">

    <h4>{{ title }}</h4>
    <!-- input box -->
    <p>{{ inputBox }}</p>
    <input v-model="inputBox" type="text" name="" value="">

    <!-- click -->
    <p>{{ message }}</p>
    <button v-on:click="reverseMessage" class="btn btn-warning">Reverse Message</button>

    <!-- for list -->
    <ol>
      <li v-for="item in groceryList">{{ item.text }}</li>
    </ol>

    <!-- css class -->
    <div v-bind:class="{ active: isActive, 'text-danger': hasError }">Class</div>
    <button v-on:click="reverseClass" class="btn btn-warning">Reverse Class</button>

    <!-- Conditional -->
    <h1 v-if="ok == false">Yes</h1>
    <h1 v-else>No</h1>

    show
    <h1 v-show="ok == false">Show</h1>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: "Contene",
      message: 'Hello Vue.js!',
      inputBox: 'value',
      groceryList: [
        { id: 0, text: 'Vegetables' },
        { id: 1, text: 'Cheese' },
        { id: 2, text: 'Whatever else humans are supposed to eat' }
      ],
      isActive: true,
      hasError: false,
      ok: true,
    }
  },
  watch : {
    message (inputBox) {
      this.message = this.inputBox;
    },
  },
  mounted() {
     this.getCoin();
     this.ok = false;
     console.log(this.classObject);
     // reverseMessage();
  },
  methods : {
    getCoin() {
      let uri = 'http://localhost:8000/api/get_coins';
      this.coins = uri;
    },
    reverseMessage() {
      this.message = this.message.split('').reverse().join('')
    },
    reverseClass(){
      this.hasError = true;
    },
  },

}
</script>

<style lang="css">
</style>
