<template>
    <MainLayout>
        <!-- Main content -->
        <main class="flex-1 max-h-full p-5 overflow-hidden">
            <!-- Main content header -->
            <div
                class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                <h1 class="text-2xl font-semibold whitespace-nowrap">Dashboard</h1>
                <div class="space-y-6 md:space-x-2 md:space-y-0">
                    <Link :href="route('appointment.create')" target="_blank"
                        class="btn-primary">
                        <span>Add new Appointment</span>
                    </Link>
                    <Link :href="route('hairstyle.create')" target="_blank"
                        class="btn-primary">
                        <span>Add Hairstyle</span>
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
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Appointment</span>
                            <span class="text-lg font-semibold"> 19 May 2023</span>
                            <span>Medium box Braids</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                </div>
                <!-- </template> -->
            </div>

            <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
            <h2 class="mt-6 text-xl">Users</h2>
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                            <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Role
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- <template x-for="i in 10" :key="i"> -->
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                                        alt="" />
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Ahmed Kamel</div>
                                                    <div class="text-sm text-gray-500">ahmed.kamel@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                            <div class="text-sm text-gray-500">Optimization</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin</td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    <!-- </template> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </MainLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Box from '../../Components/UI/Box.vue';
import MainLayout from '../../Layouts/MainLayout.vue'


</script>