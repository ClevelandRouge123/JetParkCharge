<template>
    <div>
    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 ">
        <div class="p-5">
            <div class="flex items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">Charging</a></div>
            </div>
            <div class="grid grid-cols-2">
                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
Only an example currently. NEEDS COMPLETING                    </div>

                    <a href="/charging">
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Explore Live Charging</div>

                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="arrow-right w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
                </div>

                <a href="/booking">
                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Explore Charge Booking</div>

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
name: "ChargingDashboard"
}
</script>

