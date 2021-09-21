<template>
  <div class="container">
    <h2 class="text-center p-2 text-white bg-secondary mt-5">
      Charging Process
    </h2>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">energy</th>
          <th scope="col">time(consumed)</th>
          <th scope="col">meterStart</th>
          <th scope="col">meterStop</th>
          <th scope="col">timestampStart</th>
          <th scope="col">timestampStop</th>

          
        </tr>
      </thead>

      <tbody >
        <tr v-for="(rate,index) in rates" :key="index">
          <td scope="row">{{ rate.id }}</td>
          <td scope="row">{{ rate.energy }}</td>
          <td scope="row">{{ timeConsumed(rate) }}</td>
          <td scope="row">{{ rate.meterStart }}</td>
          <td scope="row">{{ rate.meterStop }}</td>
          <td scope="row">{{ rate.timestampStart }}</td>
          <td scope="row">{{ rate.timestampStop }}</td>
        </tr>
      </tbody>
    </table>

    <h2 class="text-center p-3 text-white bg-secondary mt-4">
      Charging Process Rating
    </h2>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">energy</th>
          <th scope="col">time(2€ hour)</th>
          <th scope="col">transaction</th>
          <th scope="col">price</th>
        </tr>
      </thead>

      <tbody >
        <tr v-for="(rate,index) in rates" :key="index">
          <td scope="row">{{ rate.id }}</td>
          <td scope="row">{{ '€' + eprice(rate) }}</td>
          <td scope="row">{{ '€' + timePrice(rate.id) }}</td>
          <td scope="row">{{ '€' + rate.transaction }}</td>
          <td scope="row">
            {{ '€' + (sum = +eprice(rate) + +timePrice(rate.id) + +rate.transaction).toFixed(2) }}
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: "Rate",
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      let url = this.url + "/api/rates";
      this.axios.get(url).then((response) => {
        this.rates = response.data;
        console.log(this.rates);
      });
    },
    eprice(rate) {
      let a = rate.energy * (rate.meterStop - rate.meterStart);
      return (a / 1000).toFixed(2);
    },
    timeConsumed(rate) {
      const date1 = new Date(rate.timestampStart);
      const date2 = new Date(rate.timestampStop);
      const res = Math.abs(date1 - date2) / 1000;
      const hours = Math.floor(res / 3600) % 24;
      const minutes = Math.floor(res / 60) % 60;
      this.allMinutes.push({
          rateId: rate.id,
          timeInMin: Math.floor(res / 60)
      })
      
      return (hours + "hr" + ":" + minutes + "min");
    },
    timePrice(id) {
      let a = (this.allMinutes.find(item => item.rateId === id).timeInMin * 2) / 60;
      return a.toFixed(3);
    },
  },
  mounted() {
    console.log("Rate list component mounted");
  },
  data() {
    return {
      url: document.head.querySelector('meta[name="url"]').content,
      rates: [],
      allMinutes: []
    };
  },
};
</script>