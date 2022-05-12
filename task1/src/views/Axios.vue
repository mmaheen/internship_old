<template>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, amet minus exercitationem iste repellat illo consequatur temporibus ex sit quam dolor incidunt explicabo assumenda ea tenetur dolorem eum earum harum!
    </div>
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
    mounted() {
        this.axios.get('https://jsonplaceholder.typicode.com/posts').then(res => {
            console.log();
        })
    }
}
</script>