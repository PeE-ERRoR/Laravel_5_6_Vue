<template lang="html">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="coin in coins">
        <th scope="row">{{ coin.id }}</th>
        <td>{{ coin.name }}</td>
        <td>{{ coin.price }}</td>
      </tr>
    </tbody>
  </table>

</template>

<script>
export default {
  data() {
    return {
      coins: [],
      coin: {
        id : 0,
        name : "",
        price : "",
      }
    }
  },
  mounted() {
     this.getCoin();
  },
  methods : {
     getCoin() {
       let uri = 'http://localhost:8000/api/get_coins';
       axios.get(uri).then((response) => {
        console.log(response);
        this.coins = response.data;
       });
     }
  }
}
</script>

<style lang="css">
</style>
