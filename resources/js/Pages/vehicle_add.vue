<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Vehicle
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                    <form class="mb-4" action="/vehicle" method="post">
                        <input type="hidden" name="_token" :value="csrf">
                        <div class="-mx-3 md:flex mb-6">

                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                       for="name">
                                    Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                    id="name" name="name" type="text" placeholder="Any Name here...">
                                <p class="text-red text-xs italic">Please fill out this field.</p>
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                       for="reg">
                                    Registration Number
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                                    id="reg" type="text" name="reg" placeholder="FV12 RWU">
                                <p class="text-red text-xs italic">Please fill out this field.</p>

                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-2">
                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                       for="make">
                                    Make
                                </label>
                                <div class="relative">
                                    <select
                                        class="block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                        id="make" name="make">
                                        <option></option>
                                        <option>Tesla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                       for="model">
                                    Model
                                </label>
                                <div class="relative">
                                    <select
                                        class="block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                        id="model" name="model">
                                        <option></option>
                                        <option>Model 3</option>
                                        <option>Model S</option>
                                        <option>Model X</option>
                                        <option>Model Y</option>
                                        <option>Roadster</option>
                                    </select>
                                </div>
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                       for="mileage">
                                    Current Mileage
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                    id="mileage" name="mileage" type="text" placeholder="12123">
                            </div>
                        </div>
                        <button class="block mt-10 bg-gray-800 text-white uppercase text-md mx-auto p-4 rounded"
                                type="submit">Add Vehicle
                        </button>
                    </form>

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
    },
    // methods: {
    //     getMakes: function () {
    //         axios.get("api/getMake").then(function (response) {
    //                 this.makes = response.data;
    //             }.bind(this)
    //         );
    //     },
    //     getModels: function () {
    //         axios.get("api/getModels", {
    //             params: {make: this.form.make}
    //         })
    //             .then(function (response) {
    //                     this.employees = response.data;
    //                 }.bind(this)
    //             );
    //     }
    // }
}
</script>

