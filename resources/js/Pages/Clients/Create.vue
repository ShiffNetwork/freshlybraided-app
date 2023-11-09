<template>
    <MainLayoutVue>
        <main class="flex-1 max-h-full p-5 overflow-hidden">
            <!-- Main content header -->
            <div
                class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                <h1 class="text-2xl font-semibold whitespace-nowrap">Users</h1>
                <!-- <div class="space-y-6 md:space-x-2 md:space-y-0">
                    <Link :href="route('user-account.create')" target="_blank" class="btn-default">
                        <span> + Add new users</span>
                    </Link>
                </div> -->
            </div>

            <!-- Start Content -->
            

            <div class="max-w-md mx-auto">
                <h2 class="mt-6 text-xl ">Add Client</h2>
                <form @submit.prevent="create()" class="space-y-4 pt-5">
                    <div>
                        <label for="name" class="block font-medium">Name</label>
                        <input type="text" id="name" name="name" v-model="form.name"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <div v-if="form.errors.name">{{ form.errors.name }}</div>
                    </div>

                    <div>
                        <label for="email" class="block font-medium">Email</label>
                        <input type="text" id="email" name="email" v-model="form.email"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <div v-if="form.errors.email">{{ form.errors.email }}</div>
                    </div>

                    <div>
                        <label for="phone" class="block font-medium">Phone Number</label>
                        <input type="text" id="phone" name="phone" v-model="form.phone"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <div v-if="form.errors.phone">{{ form.errors.phone }}</div>
                    </div>

                    <div>
                        <label for="instagram_tag" class="block font-medium">Instagram Tag</label>
                        <input type="text" id="instagram_tag" name="instagram_tag" v-model="form.instagram_tag"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <div v-if="form.errors.instagram_tag">{{ form.errors.instagram_tag }}</div>
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
import { useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    name: null,
    email: null,
    phone: null,
    instagram_tag: null,
})

const create = () => form.post(route('clients.store'))

</script>