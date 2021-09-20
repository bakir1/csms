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

            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row">0.3</td>
                    <td scope="row">2</td>
                    <td scope="row">1</td>
                    <td scope="row">234</td>
                    <td scope="row">2341</td>
                    

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