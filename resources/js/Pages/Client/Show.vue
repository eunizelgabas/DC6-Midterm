<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import DangerButton from '@/Components/DangerButton.vue';
    import PrimaryButton from  '@/Components/PrimaryButton.vue';
    import { Head, router, useForm } from '@inertiajs/vue3';
    import moment from 'moment'

    const props = defineProps({
    client: Object,

    })
    let deleteForm = useForm({});

    function formattedDate(date){
        return moment(date).format('MMMM   D, YYYY');
    }

    function remove(client) {
        deleteForm.delete('/clients/' + props.client.id)

        // console.log(props.errors)
    }

    function edit(){
        router.visit('/clients/edit/' + props.client.id)
    }


</script>

<template>
    <Head title="View Client" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">View Client</h2>
            </div>

        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-between">
                <div class="bg-white p-4 rounded shadow w-[30%]">
                    <h4 class="text-2xl">Client Info</h4>
                    <hr>
                    <div>
                        <div class="w-80 m-auto lg:mt-2 max-w-sm">
                        <img src="https://i.pinimg.com/564x/68/d4/ef/68d4ef8bf810835a7b8b90bd445f10de.jpg" alt="" class="rounded-sm shadow-xl lg:w-full 2xl:w-full 2xl:h-44 object-cover"/>
                            <h2 class="text-center text-gray-800 text-2xl font-bold pt-6">{{ client.first_name }} {{ client.last_name }}</h2>
                            <div class="w-5/6 m-auto">
                            <p class="text-center text-gray-500 pt-5">
                                <span class="font-bold text-gray-900">
                                Address:
                                </span> {{ client.address }}
                            </p>
                            <p class="text-center text-gray-500 pt-5">
                                <span class="font-bold text-gray-900">
                                    Phone No:
                                </span> {{ client.phone }} </p>
                            </div>
                            <div class="grid grid-cols-4 w-72 lg:w-6/6 m-auto bg-indigo-50 mt-5 p-4 lg:p-4 rounded-2xl">
                                <div class="col-span-1">
                                    <img class="w-15 lg:w-12" src="https://i.pinimg.com/236x/d6/19/93/d61993f7fb1260300645192c2a0f7dc8.jpg" alt="music icon"/>
                                </div>
                                <div class="col-span-2 pt-1">
                                    <p class="text-gray-800 font-bold lg:text-sm">Credit Limit</p>
                                    <p class="text-gray-500 text-sm">PHP {{ client.credit_limit }}</p>
                                </div>
                            </div>
                            <div class="flex justify-between mt-3 ml-3 mr-4">
                                <DangerButton @click="remove(client)">
                                    Delete Client
                                </DangerButton>
                                <PrimaryButton @click="edit()">Edit Client</PrimaryButton>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow w-[68%]">
                    <h4 class="text-2xl mb-3">Transaction Log</h4>
                    <table class="w-full text-sm text-left text-black-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase text-center bg-gray-50 dark:bg-blue-500 dark:text-white-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Payment
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody v-for="cl in client.sales" :key="cl.id">

                            <tr class="bg-blue-200 hover:bg-s-50 text-center font-medium text-black  whitespace-nowrap ">

                                <td scope="row" >
                                    {{ formattedDate(cl.date)}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ cl.is_credit ? 'Credit' : 'Cash' }}
                                </td>
                                <td class="px-6 py-4">
                                  PHP {{cl.total}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
