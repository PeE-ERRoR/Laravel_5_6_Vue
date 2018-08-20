<script type="text/javascript">
  import {Bar} from 'vue-chartjs'
  import {Line} from 'vue-chartjs'

  // export default {
  //   extends: Bar,
  //   data () {
  //     return {
  //       datacollection: {
  //         labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
  //         datasets: [
  //           {
  //             label: '1',
  //             backgroundColor: '#f87979',
  //             data: [40, 20, 30, 100, 13, 20, 50, 50, 50, 30]
  //           },
  //           {
  //             label: '2',
  //             backgroundColor: '#000',
  //             data: [40, 20, 30, 12, 13, 20, 14, 24, 50, 35]
  //           },
  //         ]
  //       }
  //     }
  //   },
  //   mounted () {
  //     this.renderChart(this.datacollection, {responsive: true, maintainAspectRatio: false})
  //   }
  // }
  export default {
   extends: Line,
   mounted() {
         let uri = 'http://localhost:8000/coins';
         let Years = new Array();
         let Labels = new Array();
         let Prices = new Array();
         this.axios.get(uri).then((response) => {
           console.log(response);

            let data = response.data;
            if(data) {
               data.forEach(element => {
               Years.push(element.year);
               Labels.push(element.name);
               Prices.push(element.price);
               });
               this.renderChart({
               labels: Years,
               datasets: [{
                  label: 'Bitcoin',
                  backgroundColor: '#FC2525',
                  data: Prices
            }]
         }, {responsive: true, maintainAspectRatio: false})
       }
       else {
          console.log('No data');
       }
      });
   }
}
</script>
