<script setup>
    import Sidebar from '@/Layouts/Sidebar.vue';
    import { onMounted, ref, watch } from 'vue';
    import { Link , Head, usePage} from '@inertiajs/vue3';
    import { useForm } from '@inertiajs/vue3';

    const { data } = usePage().props;
    let form = useForm({

        lastname: props.user.lastname,
        firstname:props.user.firstname,
        middlename:props.user.middlename,
        suffix: props.user.suffix,
        email:props.user.email,
        status:props.user.status,
        gender:props.user.gender,
        type: props.user.type,
        password: props.user.password,
        role: props.currentRole,
        contact_no: props.user.contact_no,
        selectedServiceIds: [],
        specialization: "",
        age: '',
        address: '',
        course: '',
        vaccine: ''
    })



if (props.user.type === 'doctor' && props.user.doctor) {
    console.log('Doctor Data:', props.user.doctor);
    form.specialization = props.user.doctor.specialization;
    form.selectedServiceIds = props.user.doctor.services.map((service) => service.id);
}

if (props.user.type === 'patient' && props.user.patient) {
    console.log('Patient Data:', props.user.patient);
    form.age = props.user.patient.age;
    form.course = props.user.patient.course;
    form.address = props.user.patient.address;
    form.vaccine = props.user.patient.vaccine;

}

    let props = defineProps({
        user:Object,
        roles:Object,
        doctor: Object,
        services: Array,
        currentRole: Object,
        patient: Object
    })

    function toggleFields() {
        if (form.type === 'patient') {
            form.age = '';
            form.course = '';
            form.vaccine = '';
        } else if (form.type === 'doctor') {
            form.specialization = '';
            form.services = '';
        }
    }
    onMounted(() => {
  const selectRole = document.getElementById('select-role');

  if (selectRole) {
    new TomSelect(selectRole, {
      maxItems: 3,
    });
  }
});

    const submit = () =>{
        form.put('/users/'+props.user.id)
    }


</script>


<template>
    <Head title="Create User"/>
    <Sidebar>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit User</h2>
        </template>
        <div>
            <div class="w-full mt-10 mx-auto px-4 ">
                <form @submit.prevent="submit">
                    <div class="space-y-6">
                        <div class="block pl-12 font-semibold text-xl self-start text-gray-700">
                            <h1 class="leading-relaxed">User Details Form</h1>
                            <hr>
                          </div>
                      <div class="border-b border-gray-900/10 pb-12">

                        <div class=" px-12 py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-3 mx-auto">
                          <div class="sm:col-span-1">
                            <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                            <div class="mt-2">
                              <input type="text" v-model="form.firstname" name="firstname" id="firstname" autocomplete="firstname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.firstname">{{ form.errors.firstname }}</div>
                            </div>
                          </div>
                          <div class="sm:col-span-1">
                            <label for="middlename" class="block text-sm font-medium leading-6 text-gray-900">Middlename</label>
                            <div class="mt-2">
                              <input type="text" v-model="form.middlename" name="middlename" id="middlename" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.middlename">{{ form.errors.middlename }}</div>
                            </div>
                          </div>
                          <div class="sm:col-span-1">
                            <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                            <div class="mt-2">
                              <input type="text" v-model="form.lastname" name="lastname" id="lastname" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.lastname">{{ form.errors.lastname }}</div>
                            </div>
                          </div>

                          <div class="sm:col-span-1">
                            <label for="suffix" class="block text-sm font-medium leading-6 text-gray-900">Suffix</label>
                            <div class="mt-2">
                              <input id="suffix" v-model="form.suffix" name="suffix" type="text" autocomplete="suffix" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.suffix">{{ form.errors.suffix }}</div>
                            </div>
                          </div>

                          <div class="m:col-span-1">
                            <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                            <div class="mt-2">
                              <select id="gender" v-model="form.gender" name="gender" autocomplete="gender" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option selected disabled>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                              <div class="text-sm text-red-500 italic" v-if="form.errors.gender">{{ form.errors.gender }}</div>
                            </div>
                          </div>

                          <!-- <div class="m:col-span-2">
                            <label for="services" class="block text-sm font-medium leading-6 text-gray-900">Services</label>
                            <div class="mt-2">
                                <select id="services"  v-model="form.selectedServiceIds" name="selectedServiceIds[]" multiple  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:max-w-xs sm:text-sm sm:leading-6" >
                                  <option selected disabled >Select services</option>
                                  <option v-for="service in services" :key="service.id" :value="service.id">{{ service.name }}</option>
                                </select>
                                <div class="text-sm text-red-500 italic" v-if="form.errors.services">{{ form.errors.services }}</div>
                              </div>

                          </div> -->
                          <div class="m:col-span-1">
                            <!-- <p>Current Role: {{ user.roles.map(role => role.name).join(', ') }}</p> -->
                            <label for="roles" class="block text-sm font-medium leading-6 text-gray-900">Roles</label>
                            <div class="mt-2">
                              <select id="role" v-model="form.role" name="role" autocomplete="role" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option selected disabled   >Select Role</option>
                                <option v-for="role in roles" :key="role.id" :value="role.name">{{ role.name }}</option>
                                <!-- <option value="Role">Patient</option> -->
                              </select>
                              <div class="text-sm text-red-500 italic" v-if="form.errors.role">{{ form.errors.role }}</div>
                            </div>
                          </div>

                          <div class="sm:col-span-2">
                            <label for="contact_no" class="block text-sm font-medium leading-6 text-gray-900">Contact No</label>
                            <div class="mt-2">
                              <input id="contact_no" v-model="form.contact_no" name="contact_no" type="number" autocomplete="contact_no" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.contact_no">{{ form.errors.contact_no }}</div>
                            </div>
                          </div>

                          <div class="m:col-span-1">
                            <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Type</label>
                            <div class="mt-2">
                              <select id="type" v-model="form.type" name="type" @change="toggleFields" autocomplete="type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option selected disabled>Select Type</option>
                                <option value="patient">Patient</option>
                                <option value="doctor">Doctor</option>
                                <option value="admin">Admin</option>
                              </select>
                              <div class="text-sm text-red-500 italic" v-if="form.errors.type">{{ form.errors.type }}</div>
                            </div>
                          </div>
                          <div class="sm:col-span-1" v-if="form.type === 'doctor'">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Specialization</label>
                            <div class="mt-2">
                              <input id="specialization" v-model="form.specialization" name="specialization" type="text" autocomplete="specialization" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.specialization">{{ form.errors.specialization }}</div>
                            </div>
                          </div>
                          <!-- <div class="m:col-span-1" v-if="form.type === 'doctor'">
                                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Services</label>
                                <div class="mt-2">
                                    <select id="services" v-model="form.selectedServiceIds" name="selectedServiceIds[]" multiple  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:max-w-xs sm:text-sm sm:leading-6" >
                                        <option selected disabled >Select services</option>
                                        <option v-for="service in services" :key="service.id" :value="service.id">{{ service.name }}</option>
                                    </select>
                                <div class="text-sm text-red-500 italic" v-if="form.errors.service_id">{{ form.errors.service_id }}</div>
                                </div>
                          </div> -->
                          <div class="m:col-span-2" v-show="form.type === 'doctor'">
                            <label for="services" class="block text-sm font-medium leading-6 text-gray-900">Services</label>
                            <div class="mt-2">

                                <select
                                    id="select-role"
                                    name="selectedServiceIds[]"
                                    multiple
                                    placeholder="Select services..."
                                    autocomplete="off"
                                    v-model="form.selectedServiceIds"
                                    class="block w-full rounded-sm cursor-pointer focus:outline-none"

                                    >
                                    <option selected disabled>Select a service</option>
                                    <option v-for="service in services" :key="service.id" :value="service.id">{{ service.name }}</option>

                                </select>
                                <div class="text-sm text-red-500 italic" v-if="form.errors.services">{{ form.errors.services }}</div>
                            </div>
                        </div>
                          <div class="sm:col-span-1" v-if="form.type === 'patient'">
                            <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                            <div class="mt-2">
                            <input id="age" v-model="form.age" name="age" type="text" autocomplete="age" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <div class="text-sm text-red-500 italic" v-if="form.errors.age">{{ form.errors.age }}</div>
                            </div>
                        </div>
                        <div class="sm:col-span-1" v-if="form.type === 'patient'">
                            <label for="course" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
                            <div class="mt-2">
                            <input id="course" v-model="form.course" name="course" type="text" autocomplete="course" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <div class="text-sm text-red-500 italic" v-if="form.errors.course">{{ form.errors.course }}</div>
                            </div>
                        </div>
                        <div class="sm:col-span-1" v-if="form.type === 'patient'">
                            <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                            <div class="mt-2">
                            <input id="address" v-model="form.address" name="address" type="text" autocomplete="address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <div class="text-sm text-red-500 italic" v-if="form.errors.address">{{ form.errors.address }}</div>
                            </div>
                        </div>
                        <div class="sm:col-span-1" v-if="form.type === 'patient'">
                            <label for="vaccine" class="block text-sm font-medium leading-6 text-gray-900">Vaccine</label>
                            <div class="mt-2">
                            <input id="vaccine" v-model="form.vaccine" name="vaccine" type="text" autocomplete="vaccine" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <div class="text-sm text-red-500 italic" v-if="form.errors.vaccine">{{ form.errors.vaccine }}</div>
                            </div>
                        </div>


                          <div class="sm:col-span-1">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                              <input id="email" v-model="form.email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.email">{{ form.errors.email }}</div>
                            </div>
                          </div>

                          <div class="sm:col-span-1 ">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="mt-2">
                              <input type="password" v-model="form.password" name="password" id="password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.password">{{ form.errors.password }}</div>
                            </div>
                          </div>


                          <div class="sm:col-span-1">
                            <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                            <div class="mt-2">
                              <input type="password" v-model="form.password_confirmation" name="password_confirmation" id="password_confirmation" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <div class="text-sm text-red-500 italic" v-if="form.errors.gender">{{ form.errors.password_confirmation }}</div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6 mb-3">
                      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                  </form>
            </div>
        </div>
    </Sidebar>

</template>
