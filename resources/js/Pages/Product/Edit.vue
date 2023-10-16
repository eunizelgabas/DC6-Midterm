<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';

    const props  = defineProps({
        products : Object
    })
</script>

<template>
    <Head title="Update Product" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Product</h2>
        </template>

        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <!-- <div class="h-14 w-14 bg-blue-200 rounded-full flex flex-shrink-0 justify-center items-center text-blue-500 text-2xl font-mono">p</div> -->
                    <h2 class="leading-relaxed mt-3 font-semibold text-xl self-start text-gray-700">Edit the Product</h2>

                </div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-2 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="flex flex-col">
                        <label class="leading-loose">Brand</label>
                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose">Name</label>
                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" >
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col">
                        <label class="leading-loose">Retail Price</label>
                        <div class="relative focus-within:text-gray-600 text-gray-400">
                            <input type="decimal" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" >
                        </div>
                        </div>
                        <div class="flex flex-col">
                        <label class="leading-loose">Qty Stock</label>
                        <div class="relative focus-within:text-gray-600 text-gray-400">
                            <input type="number" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" >
                        </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose">Category</label>
                        <select id="category_id" name="category_id"  class="pr-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                            <option value="" disabled>Select Category</option>
                            <option>Smartphones</option>
                        </select>
                    </div>
                    </div>
                    <div class="pt-4 flex items-center space-x-4">
                        <button class=" bg-red-400 flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                        </button>
                        <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

    </AuthenticatedLayout>

</template>
