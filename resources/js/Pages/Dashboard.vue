<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <charging-dashboard />
                </div>
            </div>
        </div>
        <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <cars-dashboard />
            </div>
        </div>
    </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../Layouts/AppLayout'
    // import Welcome from './../Jetstream/
    import ChargingDashboard from './../Jetstream/Dashboard/ChargingDashboard'
    // import Charging from "./Charging";
     import CarsDashboard from '../Jetstream/Dashboard/CarsDashboard'
    // import BillingGraph from './../Jetstream/Dashboard/BillingGraph'

    export default {
        components: {
            AppLayout,
            ChargingDashboard,
            CarsDashboard,
        },
    }
</script>
