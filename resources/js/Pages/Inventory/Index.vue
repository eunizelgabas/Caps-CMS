<script setup>
    import Sidebar from '@/Layouts/Sidebar.vue';
    import ConfirmDialog from '@/Components/ConfirmDialog.vue';
    import Sample from '@/Components/Sample.vue';
    import { ref } from 'vue';
    import { Link, useForm,Head } from '@inertiajs/vue3';
    import moment from 'moment'



    let form = useForm({
        med_id: '',
        stocks: '',
        filteredInventory:props.inventory
    })


    let props = defineProps({
        inventories: Array,
        // medicine: Object,

    })


    function formattedDate(date){
        return moment(date).format('MMMM   D, YYYY');
    }


</script>

<template>
    <Head title="Inventory" />
    <Sidebar>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Medicine Inventory</h2>
        </template>

        <div class="px-2 mt-5">
            <div class="p-4 mx-2">
                <!-- <div class="flex justify-between">
                    <p>Filter Date</p>
                    <input type="date" v-model="startDate" />
                    <input type="date" v-model="endDate" />
                </div> -->
            <div class="w-full px-2">
                <div class="h-12">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <!-- <div class="p-6 text-gray-900">You're logged in!</div> -->
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Id</th>
                                    <th class="py-3 px-6 text-center">Medicine</th>
                                    <th class="py-3 px-6 text-center">Stock In</th>
                                    <th class="py-3 px-6 text-center">Stock Out</th>
                                    <th class="py-3 px-6 text-center">Stocks Available</th>
                                    <!-- <th class="py-3 px-6 text-center">Created Date</th> -->
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light" >

                                <tr  class="border-b border-gray-200 hover:bg-gray-100" v-for="inv in inventories" :key="inv.id">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">

                                            <p class="font-medium">{{ inv.id }}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{ inv.medicine?.name }}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{ inv.stock_in }}</p>
                                        </div>
                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{ inv.stock_out || 0}}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{ inv.Available }}</p>
                                        </div>
                                    </td>
                                    <!-- <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{ formattedDate(inv.updated_at)}}</p>
                                        </div>
                                    </td> -->
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <!-- <div>
                            <Sample></Sample>
                        </div> -->
                    </div>
                </div>
            </div>
            <div>

            </div>

            </div>
        </div>
    </Sidebar>
</template>
