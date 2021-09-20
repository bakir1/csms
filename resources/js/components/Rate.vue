<template>
    <div class="container">
        <h2 class="text-center p-2 text-white bg-secondary mt-5">Charging System</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">energy</th>
                    <th scope="col">time</th>
                    <th scope="col">transaction</th>
                    <th scope="col">timeStart</th>
                    <th scope="col">timeStop</th>

                </tr>
            </thead>

            <tbody v-for="rate in rates" :key="rate.id">
                <tr>
                    <td scope="row">{{ rate.id }}</td>
                    <td scope="row">{{ eprice(rate) }}</td>
                    <td scope="row">{{ timePrice(rate) }}</td>
                    <td scope="row">{{ rate.transaction }}</td>
                    <td scope="row">{{ rate.meterStart }}</td>
                    <td scope="row">{{ rate.meterStop }}</td>                    
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'Rate',
    created(){
        this.loadData();
    },
    methods: {
        loadData(){
            let url = this.url + '/api/rates';
            this.axios.get(url).then(response => {
                this.rates = response.data
                console.log(this.rates);
            });
         },
         eprice(rate, a){
            a = (rate.energy * (rate.meterStop-rate.meterStart));
            rate = Math.round(a)/1000;
            return rate.toFixed(2);
            },
         timePrice(rate, date1, date2, res, days, hours, minutes, seconds){
          date1 = new Date( rate.timestampStart );
          date2 = new Date(  rate.timestampStop  );
          res = Math.abs(date1 - date2) / 1000;
          days = Math.floor(res / 86400);
          hours = Math.floor(res / 3600) % 24;        
          minutes = Math.floor(res / 60) % 60;
          seconds = res % 60;

          return rate = hours +':'+ minutes;
         },
        },
        mounted(){
            console.log('Rate list component mounted')
        },
        data(){
            return{

            url: document.head.querySelector('meta[name="url"]').content,
            rates: []
           } 
        }
} 
</script>