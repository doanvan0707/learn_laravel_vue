<template>
  <div>
    List Product
  </div>
</template>
<script>
export default {
  data() {
    return {
      products: []
    }
  },
  created() {
    axios.get(`http://localhost:8000/products`)
      .then(res => {
        this.products = res.data
        console.log(this.products);
      })
      .catch(e => {
        this.errors.push(e);
      })
  }
}
</script>