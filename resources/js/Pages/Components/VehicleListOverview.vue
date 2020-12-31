<template>
    <div class="">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-center">
                <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <a v-bind:href="'/vehicle_view/'+vehicle.id">
                            <div class="bg-cover bg-center h-56 p-4"
                                 style="background-image: url(https://via.placeholder.com/450x450)">
                                <div class="flex justify-end">
                                    <!--                                <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">-->
                                    <!--                                    <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>-->
                                    <!--                                </svg>-->
                                </div>
                            </div>

                            <div class="p-4">
                                <p class="uppercase tracking-wide text-sm font-bold text-gray-700">{{ vehicle.name }} •
                                    {{ vehicle.reg }}</p>
                                <p class="text-3xl text-gray-900 ">
                                    <svg class="w-8 h-8 inline-block" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        :{{ Math.ceil(Math.random() * 100) }}%
                                    </svg>
                                    :{{ Math.ceil(Math.random() * 100) }}%
                                </p>
                                <p class="text-gray-700">Mileage: {{ vehicle.mileage.toLocaleString() }}</p>
                            </div>
                        </a>
                        <div class="flex p-4 border-t border-gray-300 text-gray-700">
                            <div class="flex-1 inline-flex items-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5l7 7-7 7"></path>
                                </svg>
                                <p><span class="text-gray-900 font-bold">{{ vehicle.make }}</span></p>
                            </div>
                            <div class="flex-1 inline-flex items-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5l7 7-7 7"></path>
                                </svg>
                                <p><span class="text-gray-900 font-bold">{{ vehicle.model }}</span></p>
                            </div>
                        </div>
                        <div class="flex p-4 border-t border-gray-300 text-gray-700">
                            <div class="flex-1 inline-flex">
                                <a v-bind:href="'/vehicle_edit/'+ vehicle.id"
                                   class="align-middle content-center block uppercase shadow bg-gray-800 hover:bg-gray-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Edit</a>
                            </div>
                            <div class="flex-1 inline-flex">
                                <a v-bind:href="'/vehicle_delete/'+ vehicle.id"
                                   class="align-middle block uppercase shadow bg-red-800 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Delete</a>

                            </div>
                        </div>
                        <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Assignee</div>
                            <div class="flex items-center pt-2">
                                <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3"
                                     style="background-image: url(https://via.placeholder.com/50x50)">
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Catherine Heffner</p>
                                    <p class="text-sm text-gray-700">(111) 111-1111</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Vehicle.vue",
    props: ['vehicle']

}
</script>

<style scoped>

</style>
