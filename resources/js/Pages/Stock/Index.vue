<script setup>
    import Sidebar from '@/Layouts/Sidebar.vue';
    import Modal from  '@/Components/Modal.vue';
    import DangerButton from '@/Components/DangerButton.vue';
    import SecondaryButton from '@/Components/SecondaryButton.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue'
    import Pagination from '@/Components/Pagination.vue';
    import { ref } from 'vue';
    import { Link, useForm, Head, router } from '@inertiajs/vue3';
    import moment from 'moment';
    import { watch } from 'vue';
    // import axios from 'axios';

    let showConfirmDelete = ref(false)
    let selectedPurchaseForDelete = null
    let selectedStock = null
    let deleteForm = useForm({});

    let form = useForm({
        med_id: '',
        purchase_date: '',
        qty: '',
        expiry_date: '',
    })

    let props = defineProps({
        stocks: Array,
        medicine:Object,
        filters: Object
    })

    function edit(sto) {
    form.med_id = sto.med_id,
    form.qty = sto.qty,
    form.purchase_date = sto.purchase_date
    form.expiry_date =  sto.expiry_date
    }

    function closeModal(){
        showConfirmDelete.value = false;
    }

    function remove(sto) {
        selectedPurchaseForDelete = sto
        showConfirmDelete.value = true;
    }

    function deletePurchase(){
        deleteForm.delete('/stock/' + selectedPurchaseForDelete.id)
        showConfirmDelete.value = false;
    }

    const submit = () =>{
        if(selectedStock) {
            form.put('/stock/' + selectedStock.id)
            }else {
            form.post('/stock')
        }
    }

    function formattedDate(date){
        return moment(date).format('MMMM   D, YYYY');
    }

    let search = ref(props.filters.search);
    watch(search, (value) => {
        router.get(
            "/stock",
            { search: value },
            {
                preserveState: true,
                replace: true,
            }
        );
    });
</script>

<template>
    <Head title="Purchase"/>
    <Sidebar>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Manage Purchase Medicine</h2>
        </template>

        <div class="px-2 mt-5">
            <div class="flex -mx-2">
                <div class="w-1/3 px-2">
                    <div class="h-12">
                        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                            <div class="max-w-md mx-auto">
                              <div class="flex items-center space-x-5">
                                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                  <h2 class="leading-relaxed">Purchase Stock Form</h2>
                                </div>
                              </div>
                              <hr>
                              <div class="divide-y divide-gray-200">
                                    <form class="" @submit.prevent="submit">
                                        <div class="py-5 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                            <div class="flex flex-col">
                                                <label class="leading-loose">Purchase Date</label>
                                                <input type="date" v-model="form.purchase_date" id="purchase_date" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="e.g. 350mg">
                                                <div class="text-sm text-red-500 italic" v-if="form.errors.purchase_date">{{ form.errors.purchase_date }}</div>
                                            </div>

                                                <div class="flex flex-col">
                                                    <label class="leading-loose">Medicine</label>
                                                    <div class="relative focus-within:text-gray-600 text-gray-400 sm:col-span-2 ">
                                                      <select id="med_id" name="med_id" v-model="form.med_id" class="pr-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                                          <option value="" disabled>Select</option>
                                                          <option v-for="med in medicine" :value="med.id" :key="med.id"> {{ med.name }}</option>
                                                      </select>
                                                    </div>
                                                  </div>

                                            <div class="flex flex-col">
                                                <label class="leading-loose">Quantity</label>
                                                <input type="number" v-model="form.qty" id="qty" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                                <div class="text-sm text-red-500 italic" v-if="form.errors.qty">{{ form.errors.qty }}</div>
                                            </div>
                                            <div class="flex flex-col">
                                                <label class="leading-loose">Expiry Date</label>
                                                <input type="date" v-model="form.expiry_date" id="expiry_date" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                                <div class="text-sm text-red-500 italic" v-if="form.errors.expiry_date">{{ form.errors.expiry_date }}</div>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <button type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-2 rounded-md focus:outline-none">Save</button>
                                        </div>
                                    </form>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            <div class="w-3/4 px-2">
                <div class="h-12">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <!-- <div class="p-6 text-gray-900">You're logged in!</div> -->
                        <div class="mt-4 mb-3 mr-0 mb-0 ml-0 sm:mt-0">
                            <p class="sr-only">Search Medicine Type</p>
                            <div class="relative">
                                <div class="flex items-center pt-0 pr-0 pb-0 pl-3 absolute inset-y-0 left-0 pointer-events-none">
                                    <p>
                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21
                                        21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                    </p>
                                </div>
                                <input placeholder="Search Medicine" type="search" class="border block pt-2 pr-0 pb-2 pl-10 py-2
                                    border-blue-300 rounded-lg focus:ring-blue-600 focus:border-blue-600 sm:text-sm"
                                    v-model="search"/>
                            </div>
                        </div>
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-center">Purchase Date</th>
                                    <th class="py-3 px-6 text-center">Medicine</th>
                                    <th class="py-3 px-6 text-center">Quantity</th>
                                    <th class="py-3 px-6 text-center">Expiry Date</th>
                                    <th class="py-3 px-6 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light" >

                                <tr  class="border-b border-gray-200 hover:bg-gray-100" v-for="sto in stocks.data" :key="sto.id">
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{  formattedDate(sto.purchase_date) }}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{ sto.medicine.name }}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{ sto.qty }}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium">{{ formattedDate(sto.expiry_date)}}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">

                                            <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                                <a href="#" class="btn" @click="edit(sto)" title="Edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="w-4  ml-2 mr-2 transform hover:text-red-500 hover:scale-110">
                                                <a href="#"  @click="remove(sto)" class="btn" title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                                <Modal :show="showConfirmDelete" @close="closeModal">
                                                    <div class="p-4 sm:p-10 text-center overflow-y-auto">
                                                        <!-- Icon -->
                                                        <span class="mb-4 inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                                        </svg>
                                                        </span>
                                                        <!-- End Icon -->

                                                        <h3 class="mb-2 text-2xl font-bold text-gray-800">
                                                            Delete Medicine Purchase
                                                        </h3>
                                                        <p class="text-gray-500">
                                                            Are you sure you want like to delete this Medicine Purchase?
                                                        </p>

                                                        <div class="mt-6 flex justify-center gap-x-4">
                                                            <SecondaryButton @click="closeModal">Cancel</SecondaryButton>
                                                            <DangerButton @click="deletePurchase()">Delete</DangerButton>
                                                        </div>
                                                    </div>
                                                </Modal>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="flex justify-between">
                        <div class="mt-2" v-if="stocks.data.length > 0">Showing page {{ stocks.current_page }} of {{ stocks.last_page }}</div>
                        <Pagination v-if="stocks.data.length > 0" :links="stocks.links" class="mt-6 text-center"/>
                        <!-- <Pagination v-if="medtypes.data.length > 0" :links="medtypes.links" class="mt-6"/> -->
                    </div>
                    <!-- <PrimaryButton class="mt-5 items-right" >Save</PrimaryButton> -->
                </div>
            </div>

            </div>
        </div>
    </Sidebar>
</template>
