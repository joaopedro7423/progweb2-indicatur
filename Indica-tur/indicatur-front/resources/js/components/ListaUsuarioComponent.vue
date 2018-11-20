<template>
    <div class="container">

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="u in list" v-bind:key="u.id">
                    <td>{{ u.name }}</td>
                    <td> {{u.email }}</td>
                </tr>

            </tbody>

        </table>

    </div>
</template>

<script>
    export default {

        props: ['users'],

        data() {
            return {
                list: [],
            }
        },

        ready() {},

        mounted() {
            this.list = JSON.parse(this.users)
        }
    }

</script>

<style scoped>

</style>
