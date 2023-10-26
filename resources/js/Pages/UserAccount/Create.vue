<template>
    <MainLayoutVue>
        <main class="flex-1 max-h-full p-5 overflow-hidden">
            <!-- Main content header -->
            <div
                class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                <h1 class="text-2xl font-semibold whitespace-nowrap">Users</h1>
                <div class="space-y-6 md:space-x-2 md:space-y-0">
                    <Link :href="route('user-account.create')" target="_blank" class="btn-default">
                        <span> + Add new users</span>
                    </Link>
                </div>
            </div>

            <!-- Start Content -->
            

            <div class="max-w-md mx-auto">
                <h2 class="mt-6 text-xl ">Add Users</h2>
                <form class="space-y-4 pt-5">
                    <div>
                        <label for="name" class="block font-medium">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="price" class="block font-medium">Email</label>
                        <input type="text" id="price" name="price"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="password" class="block font-medium">Password</label>
                        <input type="password" id="duration" name="password"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="braidPacks" class="block font-medium">Role</label>
                        <select type="text" id="braidPacks" name="braidPacks"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" >
                            <option value="">Choose Role</option>
                            <option value="">Admin</option>
                            <option value="">Client</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full py-2 px-4 btn-primary">Create</button>
                    </div>
                </form>
            </div>

        </main>
    </MainLayoutVue>
</template>


<script setup>

import { Link } from '@inertiajs/vue3';
import MainLayoutVue from '../../Layouts/MainLayout.vue';
</script>