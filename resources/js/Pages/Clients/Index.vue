<template>
    <MainLayout>

        <main class="flex-1 max-h-full p-5 overflow-hidden">
            <div
                class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                <h1 class="text-2xl font-semibold whitespace-nowrap">Clients</h1>
                <div class="space-y-6 md:space-x-2 md:space-y-0">
                    <Link :href="route('clients.create')" target="_blank"
                        class="btn-default">
                        <span>+ Add new Client</span>
                    </Link>
                </div>
            </div>
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                            <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Name/email
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Phone
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Instagram Tag
                                        </th>
                                        
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Actions
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
                                            <div class="text-sm text-gray-900">0677510644</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5">
                                                @ahmedKamel
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            
                                            <div>
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </div>
                                                
                                            <div>
                                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                            </div>
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
import MainLayout from '../../Layouts/MainLayout.vue';

</script>