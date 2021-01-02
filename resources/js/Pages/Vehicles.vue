<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Vehicles
                <a href="vehicle/create"
                   class="float-right mb-4 block uppercase shadow bg-gray-800 hover:bg-gray-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Add</a>
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div v-for="vehicle in vehicles" v-bind:key="vehicle.id">
                        <vehicle-list-overview :vehicle='vehicle'/>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from './../Layouts/AppLayout'
import VehicleListOverview from "./Components/VehicleListOverview";
import Button from "../Jetstream/Button";

export default {
    props: ['vehicles'],
    components: {
        Button,
        AppLayout,
        VehicleListOverview,
    },
}
</script>
