<template>
    <div>Home Component</div>
</template>
<script>
export default {
    data() {
        return {
            pokemons: []
        }
    },
    mounted() {
        axios
            .get('/test-axios')
            .then((result) => {
                console.log(result);
            }).catch((err) => {
                console.log(err);
            });
    }
}
</script>