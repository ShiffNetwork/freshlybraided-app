<template>
    <MainLayout>
        <main class="flex-1 max-h-full p-5 overflow-hidden">
            <!-- Main content header -->
            <div
                class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                <h1 class="text-2xl font-semibold whitespace-nowrap">Appointments</h1>
                <div class="space-y-6 md:space-x-2 md:space-y-0">
                    <Link :href="route('appointment.create')" target="_blank"
                        class="btn-default">
                        <span> + Add new Appointment</span>
                    </Link>
                </div>
            </div>

            <!-- Start Content -->
            <h2 class="mt-6 text-xl">Future Appointments</h2>
            <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- <template x-for="i in 4" :key="i"> -->
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-lg font-bold">Chirroc Breell</span>
                            <span class="text-md font-semibold"> 19 May 2023</span>
                            <span>80.00 €</span>
                            <span>Medium box Braids</span>
                        </div>
                        <div>
                            <span class="text-indigo-500 text-xl gap-2">
                                <ion-icon name="create-outline"></ion-icon>
                            </span>
                            <span class="text-red-500 text-xl gap-2">
                                <ion-icon name="trash-outline"></ion-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- </template> -->
            </div>
        </main>
    </MainLayout>
</template>


<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '../../Layouts/MainLayout.vue';
</script>