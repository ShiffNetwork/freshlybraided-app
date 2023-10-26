<template>
    <MainLayoutVue>
        <main class="flex-1 max-h-full p-5 overflow-hidden">
            <!-- Main content header -->
            <div
                class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                <h1 class="text-2xl font-semibold whitespace-nowrap">Appointments</h1>
                <div class="space-y-6 md:space-x-2 md:space-y-0">
                    <a href="#" target="_blank"
                        class="btn-default">
                        <span> + Add new Appointment</span>
                    </a>
                </div>
            </div>

            <!-- Start Content -->
            <div class="max-w-md mx-auto">
                <h2 class="mt-6 text-xl ">Add Appointment</h2>
                <form class="space-y-4 pt-5">
                    <div>
                        <label for="duration" class="block font-medium">Date</label>
                        <input type="date" id="duration" name="duration"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="braidPacks" class="block font-medium">Time</label>
                        <input type="time" id="braidPacks" name="braidPacks"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full py-2 px-4 btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </main>
    </MainLayoutVue>
</template>


<script setup>

import MainLayoutVue from '../../Layouts/MainLayout.vue';
</script>