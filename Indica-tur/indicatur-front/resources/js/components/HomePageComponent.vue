<template>
    <div class="container">
        <pre> {{ [sortProperty, sortDirection] | json }}
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
