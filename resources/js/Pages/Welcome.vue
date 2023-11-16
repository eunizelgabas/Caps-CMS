<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Sample from '@/Layouts/Sample.vue'
import Login from '@/Pages/Auth/Login.vue';

import { ref, reactive, computed, watch, onMounted } from 'vue';
    import axios from 'axios';
    // import { Link , Head} from '@inertiajs/vue3';
    import { useForm } from '@inertiajs/vue3';
// defineProps({
//     canLogin: {
//         type: Boolean,
//     },
//     canRegister: {
//         type: Boolean,
//     },
//     laravelVersion: {
//         type: String,
//         required: true,
//     },
//     phpVersion: {
//         type: String,
//         required: true,
//     },
// });




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

// const filteredDoctors = computed(() => {
//     return props.doctors.filter(doctor => doctor.user.status === 1);
// });

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

        <Head title="Login" />

    <!-- <div>
        <div v-if="$page.props.flash.error" id="flash-error-message" class=" absolute top-20 right-1 p-4 bg-red-300 border border-gray-300 rounded-md shadow-md">
            {{ $page.props.flash.error }}
        </div>
        <Login/>
    </div> -->

    <div class="bg-image"></div>

<!-- Overlay with Opacity -->
<div class="overlay"></div>

<div >

    <section class="flex items-center justify-center h-screen">
    <div class="relative  items-center  w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
        <div class="flex w-full mx-auto text-left">
        <div class="relative inline-flex items-center mx-auto align-middle">
            <div class="text-center">
            <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
                Mater Dei College <br class="hidden lg:block">
                Clinic Management System
            </h1>
            <!-- <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-gray-500">Free and Premium themes, UI Kit's, templates and landing pages built with Tailwind CSS, HTML &amp; Next.js.</p> -->
            <div class="flex justify-center w-full max-w-2xl gap-2 mx-auto mt-6">
                <div class="mt-3 rounded-lg sm:mt-0">
                    <Link :href="route('login')"  as="button" class="px-5 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 lg:px-10 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Log in</Link>
                </div>
                <div class="mt-3 rounded-lg sm:mt-0 sm:ml-3">
                    <Link :href="route('app')"  as="button" class="items-center block px-5 lg:px-10 py-3.5 text-base font-medium text-center text-black transition duration-500 bg-blue-400 ease-in-out transform  rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:bg-blue-500 hover:text-white">Book Appointment</Link>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

</div>

</template>

<!-- <style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style> -->

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
      z-index: 0;
    }
</style>

