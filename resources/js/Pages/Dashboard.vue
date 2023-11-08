<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Card from '@/Components/Card.vue';
import { Head } from '@inertiajs/vue3';
import { inject } from 'vue';

const themeMode = inject('themeMode');
 const products = [{

    "id" : 1,
    'title': "Nissan Terra",
    'description' : 'Designed to turn heads, on-road or off-road, the Terra features a muscular stance, rugged design touches, and plenty of luxurious features inside.',
    'rating': 4.00,
    'price': 1540900,
    'thumbnail': "https://motorgrupo.network/uploads/vehicle_images/original-L520033-2023-Nissan-terra-33058.jpg"

 },
 {

"id" : 2,
'title': "Isuzu Dmax",
'description' : 'Isuzu D-Max is equipped to offer a blend of comfort and practicality in equal measure. Two-door, two-seater, single cab pick-up, with all-steel body mounted on steel ladder-frame chassis. ',
'rating': 5.00,
'price': 1200300,
'thumbnail': "https://images.drive.com.au/driveau/image/upload/c_fill,f_auto,g_auto,h_252,q_auto:good,w_448/v1/cms/uploads/w4dgf8slewfs7tabting"

},
{

"id" : 3,
'title': "Geely Okavango",
'description' : 'The all-new crossover brings with it contemporary styling along with a 7-seater capacity.',
'rating': 5.00,
'price': 1400300,
'thumbnail': "https://images.summitmedia-digital.com/topgear/images/2020/11/19/geely-okavango-2021-main-1605776402.jpg"

}
]


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Dashboard</h2>
        </template>

        <!-- <div class="py-12" :class="themeMode">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 ">You're logged in!</div>
                </div>
            </div>
        </div> -->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="grid">
                            <Card v-for="prod in products">
                                <template #head> 
                                    <h3 class=" text-center text-2xl text-black">{{ prod.title }}</h3>
                                </template>
                                <template #content1> 
                                    <img :src="prod.thumbnail" alt="" class="card-image">
                                </template>
                                <template #content2> 
                                   <div class="p-4 rounded bg-blue-500 text-gray-100">
                                    {{ prod.description }}
                                   </div>
                                </template>
                                <template #footer> 
                                    <div class="flex justify-between">
                                        <h2 class="text-2xl text-blue-500 font-bold">
                                            PhP {{ prod.price }}
                                        </h2>
                                    </div>
                                    
                                </template>
                                
                            </Card>
                    </div>
                </div>
            </div>
        </div> 

        
    </AuthenticatedLayout>
</template>

<style scoped>
.grid{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px 24px;
}

.card-image{
    width: 100%;
    aspect-ratio: 16/9;
    object-fit: cover;
}
</style>
