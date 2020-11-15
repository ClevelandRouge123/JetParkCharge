<template>
    <div>
        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 ">
            <div class="p-5">
                <div class="flex items-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">Vehicles</a></div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="ml-12">
<!--                            <div class="shadow overflow-hidden rounded border-b border-gray-200">-->
                                <table class="table-auto">
                                    <thead>
                                    <tr>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Reg</th>
                                        <th class="px-4 py-2"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="border px-4 py-2">Cleve's Polo</td>
                                        <td class="border px-4 py-2">FV12 RWU</td>
                                        <td class="border px-4 py-2">64%</td>
                                    </tr>
                                    <tr class="bg-gray-100">
                                        <td class="border px-4 py-2">Sophs Fiesta</td>
                                        <td class="border px-4 py-2">FV12 XXX</td>
                                        <td class="border px-4 py-2">24%</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Cleve's Tesla</td>
                                        <td class="border px-4 py-2">RR12 RWU</td>
                                        <td class="border px-4 py-2">64%</td>
                                    </tr>
                                    </tbody>
                                </table>
<!--                        </div>-->
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
ParkCharge has no limit to the number of Vehicles you can add to your fleet. Include the whole business and manage at your fingertips. Click below to add more Vehicles!                        </div>

                        <a href="/management">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Explore Vehicle Management</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="arrow-right w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CarsDashboard"
}
</script>

