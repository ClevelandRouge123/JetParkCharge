<template>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Live Charging
            </div>
            <div class="activeCharging" v-for="charging in activeCharging" v-text="activeCharging.reg">

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LiveCharging",
    data() {
        return {
            activeCharging: ["car2"],
            chargersToAdd: ''
        }
    },
    mounted() {
        Echo.channel('charging').listen('chargersToAdd', (e) => {
            this.activeCharging = e.activeCharging;
        });
    },
    methods: {
        AddCharger() {
            axios.post('/api/activeCharging/add', {
                activeCharging: this.chargersToAdd
            })
                .then((response) => {
                })
                .catch((error) => {
                });
        }
    }
}
</script>

<style scoped>

</style>
