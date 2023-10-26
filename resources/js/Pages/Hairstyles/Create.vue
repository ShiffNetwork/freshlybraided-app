<template>
    <MainLayoutVue>
        <main class="flex-1 max-h-full p-5 overflow-hidden">
            <!-- Main content header -->
            <div
                class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                <h1 class="text-2xl font-semibold whitespace-nowrap">Hairstyles</h1>
                <div class="space-y-6 md:space-x-2 md:space-y-0">
                    <a href="#" target="_blank" class="btn-default">
                        <span> + Add new hairstyle</span>
                    </a>
                </div>
            </div>

            <!-- Start Content -->
            

            <div class="max-w-md mx-auto">
                <h2 class="mt-6 text-xl ">Add Hairstyle</h2>
                <form @submit.prevent="create" class="space-y-4 pt-5">
                    <div>
                        <label for="name" class="block font-medium">Name</label>
                        <input type="text" v-model="form.name"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="price" class="block font-medium">Price</label>
                        <input type="text" v-model="form.price"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="duration" class="block font-medium">Duration</label>
                        <input type="text" v-model.number="form.nb_hours"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="braidPacks" class="block font-medium">Number of Braid Packs</label>
                        <input type="number" v-model.number="form.nb_packs"
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
import { useForm} from '@inertiajs/inertia-vue3'

const form = useForm({
    name: null,
    nb_packs: 0,
    price: 0,
    nb_hours: 0, 
})

const create = () => form.post('/hairstyle', form)
</script>