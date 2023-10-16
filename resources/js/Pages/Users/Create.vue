<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';

    const props  = defineProps({
        users : Object
    })
</script>

<template>
    <Head title="Create User" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create User</h2>
        </template>

        <div class="min-h flex justify-center mt-12">
        
            <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
                <div>
                    <h1 class="text-3xl font-bold text-center mb-2 cursor-pointer">Create a User</h1>
                    
                </div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <hr>
                <div class="space-y-4 mt-6">
                    <input type="text" placeholder="Name" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="email" placeholder="Email" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="password" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="password" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                </div>
                    <div class="text-center mt-6">
                        <button class="py-3 w-64 text-xl text-white bg-blue-400 rounded-2xl">Create Account</button>
                        <button class="ml-3 py-3 w-64 text-xl text-white bg-red-400 rounded-2xl">Cancel</button>
                        
                    </div>
            </div>
            
        </div>
    </AuthenticatedLayout>

</template>
