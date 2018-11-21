<template>
    <div class="container">
        <pre>
            {{ sortProperty, sortDirection | json }}
        </pre>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th><a href="#" @click="sort($event, 'name')"> Nome </a></th>
                    <th><a href="#" @click="sort($event, 'email')">E-mail</a></th>
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
                sortProperty: 'name',
                sortDirection: 1,
            }
        },

        /*filters: {
            orderBy(sortProperty, sortDirection);
            sortProperty: 'name',
            sortDirection: 1,
        },*/
        ready() {},

        mounted() {
            this.list = JSON.parse(this.users)
        }
    }

</script>

<style scoped>

</style>
