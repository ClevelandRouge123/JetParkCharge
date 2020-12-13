<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Vehicle
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex space-x-4 mb-4 p-4">
                        <div class="w-full p-8 m-4">
                            <form class="mb-4" action="/vehicle_add" method="post">
                                <input type="hidden" name="_token" :value="csrf">

                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="first_name">Name</label>
                                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest"
                                           for="registration_number">Registration Number</label>
                                    <input class="border py-2 px-3 text-grey-darkest" type="text"
                                           name="registration_number" id="registration_number">
                                </div>
                                <button class="block bg-gray-800 text-white uppercase text-lg mx-auto p-4 rounded"
                                        type="submit">Add Vehicle
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
import AppLayout from './../Layouts/AppLayout'
import Button from "../Jetstream/Button";
import Input from "../Jetstream/Input";

export default {
    name: "vehicle_add",
    components: {
        Input,
        AppLayout,
    },
    computed: {
        csrf() {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
    }
}
</script>

