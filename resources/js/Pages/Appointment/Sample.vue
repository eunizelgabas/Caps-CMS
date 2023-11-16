<script setup>
    import Sample from '@/Layouts/Sample.vue';
    import { ref, reactive, computed, watch, onMounted } from 'vue';
    import axios from 'axios';
    import { Link , Head} from '@inertiajs/vue3';
    import { useForm } from '@inertiajs/vue3';



    let form = useForm({
       'date' : '',
       'time' : '',
       'student_id': '',
       'firstname': '',
       'lastname':'',
       'reason': '',
       'doc_id': '',
       'service_id': '',


    })

    let props = defineProps({
        appointment: Array,
        doctors: Array,
        services: Object,
        users:Array,
        isAdminOrDoctor:Boolean,
        isDoctor: Boolean,

    });

    const availableServices = ref([]);
    const searchTerm = ref('');
    const searchResults = ref([]);
    const selectedUser = reactive({
        id: null,
        lastname: '',
        firstname: ''
    });

    const searchUsers = async () => {
        try {
            const response = await axios.get(`/api/users/search?term=${searchTerm.value}`);
            const data = response.data; // Assuming the API response contains the search results.
            const activeUsers = data.users.filter(user => user.status === 1);
            searchResults.value = activeUsers; // Update searchResults with the retrieved user data.
        } catch (error) {
            console.error('Error searching for users:', error);
        }
    };


    const selectUser = (user) => {

        // Set the selected user and populate the form fields
        selectedUser.id = user.id;
        selectedUser.fullname = `${user.firstname} ${user.lastname}`;
        form.user_id = user.id; // Populate the user_id field with the selected user's ID

        searchTerm.value = '';
    };

    const fetchServicesByDoctorId = async () => {
        if (form.doc_id) {
            try {
            // Make an API request to fetch services offered by the selected doctor
            const response = await axios.get(`/api/doctors/${form.doc_id}/services`);
            const data = response.data; // Assuming the API response contains the services

            // Update the availableServices array with the fetched services
            availableServices.value = data.services;
            } catch (error) {
            console.error('Error fetching services:', error);
            }
        } else {
            // Clear availableServices if no doctor is selected
            availableServices.value = [];
        }
    };



    onMounted(() => {
  // Fetch services based on the logged-in user's role
  if (props.isDoctor) {
    // User is a doctor, set doctor and services automatically
    const doctor = props.doctors[0]; // You might need to get the correct doctor based on your data
    form.doc_id = doctor.id;
    availableServices.value = doctor.services;
  }
});

const filteredDoctors = computed(() => {
    return props.doctors.filter(doctor => doctor.user.status === 1);
});

    const submit = () =>{
        // console.log(props.appointment);
        form.post('/app')
        form.date ="" ,
       form.time ="" ,
       form.student_id="" ,
       form.firstname="" ,
       form.lastname="",
       form.reason="" ,
       form.doc_id="" ,
       form.service_id=""
    }


</script>

<template>
    <Head title="Create Appointment"/>
    <div class="bg-image"></div>

<!-- Overlay with Opacity -->
<div class="overlay"></div>
    <Sample>
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Appointment</h2>

        </template> -->


        <div v-if="$page.props.flash.success" id="flash-success-message" class="absolute top-20 right-1 p-4 bg-green-300 border border-gray-300 rounded-md shadow-md">
                {{ $page.props.flash.success }}
            </div>

            <div v-if="$page.props.flash.error" id="flash-error-message" class=" absolute top-20 right-1 p-4 bg-red-300 border border-gray-300 rounded-md shadow-md">
                {{ $page.props.flash.error }}
            </div>
        <!-- <div class="flex items-center justify-center p-12">

            <div class="mx-auto w-full max-w-[550px] bg-white">
                <form @submit.prevent="submit">
                    <div class="mb-5">
                        <label for="id" class="mb-3 block text-base font-medium text-[#07074D]">
                            Student ID
                        </label>
                        <input type="text" name="id" id="id" v-model="form.student_id" placeholder="Student ID"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 mx-auto">
                        <div class="sm:col-span-1 mb-3">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Firstname
                            </label>
                            <input type="text" v-model="form.firstname" name="firstname" id="firstname" placeholder="Firstname"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="sm:col-span-1 mb-3">
                            <label for="lastname" class="mb-3 block text-base font-medium text-[#07074D]">
                                Lastname
                            </label>
                            <input type="text" v-model="form.lastname" name="lastname" id="lastname" placeholder="Lastname"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class=" sm:col-span-1 mb-5">
                            <label for="doctor" class="mb-3 block text-base font-medium text-[#07074D]">
                                Doctor
                            </label>
                            <select id="doctor" v-model="form.doc_id" name="doctor" @change="fetchServicesByDoctorId"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option selected disabled >Select doctor</option>
                                <option v-for="doc in filteredDoctors" :key="doc.id" :value="doc.id">{{ doc.user.firstname }} {{ doc.user.lastname }}</option>
                            </select>
                        </div>
                        <div class="sm:col-span-1mb-5">
                            <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            Service
                            </label>
                            <select id="service" v-model="form.service_id" placeholder=""
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option selected disabled >Select services</option>
                                <option v-for="service in availableServices" :key="service.id" :value="service.id">{{ service.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Date
                                </label>
                                <input type="date" v-model="form.date" name="date" id="date"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Time
                                </label>
                                <input type="time" v-model="form.time" name="time" id="time"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-full">
                            <div class="mb-5">
                                <label for="reason" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Reason
                                </label>
                                <input type="text"  v-model="form.reason" name="reason" id="reason"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    <div>
                        <button type="submit"
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Book Appointment
                        </button>
                    </div>
                </form>
            </div>
</div> -->
<div class="flex justify-center">
    <div class="w-full max-w-lg mx-auto p-8 ">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-lg font-medium mb-6">Appointment Form</h2>
                        <form @submit.prevent="submit">
                            <div class="col-span-2 sm:col-span-1">
                                    <label for="student_id" class="block text-sm font-medium text-gray-700 mb-2">Student ID</label>
                                    <input type="text"  v-model="form.student_id"  name="student_id" id="student_id"  class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2 sm:col-span-1 mt-2">
                                    <label for="firstname" class="block text-sm font-medium text-gray-700 mb-2">Firstname</label>
                                    <input type="text"  v-model="form.firstname"  name="firstname" id="firstname"  class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                                </div>
                                <div class="col-span-2 sm:col-span-1 mt-2">
                                    <label for="lastname" class="block text-sm font-medium text-gray-700 mb-2">Lastname</label>
                                    <input type="text"  v-model="form.lastname"  name="lastname" id="lastname" placeholder="" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="doctor" class="block text-sm font-medium text-gray-700 mb-2">Doctor</label>
                                    <select id="doctor"  v-model="form.doc_id" name="doctor" @change="fetchServicesByDoctorId"
                                        class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                                        <option selected disabled >Select doctor</option>
                                        <option v-for="doc in filteredDoctors" :key="doc.id" :value="doc.id">{{ doc.user.firstname }} {{ doc.user.lastname }}</option>
                                    </select>
                                    <!-- <input type="text" name="cvv" id="cvv" placeholder="000" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500"> -->
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="card-holder" class="block text-sm font-medium text-gray-700 mb-2">Service</label>
                                    <!-- <input type="text" name="card-holder" id="card-holder" placeholder="Full Name" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500"> -->
                                    <select id="service" v-model="form.service_id" placeholder=""
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                        <option selected disabled >Select services</option>
                                        <option v-for="service in availableServices" :key="service.id" :value="service.id">{{ service.name }}</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1 mt-2">
                                    <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                                    <input type="date"  v-model="form.date"  name="date" id="date" placeholder="0000 0000 0000 0000" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                                </div>
                                <div class="col-span-2 sm:col-span-1 mt-2">
                                    <label for="time" class="block text-sm font-medium text-gray-700 mb-2">Time</label>
                                    <input type="time"  v-model="form.time"  name="time" id="time" placeholder="" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                                </div>
                            </div>
                            <div class="sm:col-span-1 mt-2">
                                    <label for="reason" class="block text-sm font-medium text-gray-700 mb-2">Reason</label>
                                    <input type="text"  v-model="form.reason"  name="reason" id="reason" placeholder="" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                                </div>
                            <div class="mt-8">
                                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-400 text-white font-medium py-3 rounded-lg focus:outline-none">Book Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


    </Sample>


</template>


<style scoped>
    .bg-image {
      background-image: url('images/mdcs.jpg');
      background-size: cover;
      background-position: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    /* Overlay with Opacity */
    .overlay {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(203, 199, 199, 0.2); /* Adjust the opacity as needed */
      z-index: -1;
    }
</style>
