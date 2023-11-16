<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Modal from  '@/Components/Modal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    flash: {
        type:Object
    }
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

let showAbout = ref(false)

function closeModal(){
    showAbout.value = false;
    }

    function about() {

        showAbout.value = true;
    }


const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in"/>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <template #log>

            <div class="min-w-screen min-h-screen  flex items-center justify-center px-5 py-5">
                <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
                    <div class="md:flex w-full">
                        <div class="hidden md:block w-1/2">
                            <img src="/images/mdcs.jpg" class="w-full h-full object-cover" alt="">

                        </div>
                        <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                            <div class="text-center mb-10">

                                <h1 class="font-bold text-3xl text-gray-900">Login to MDC-CMS</h1>
                                <p>Enter your information to log in</p>
                            </div>
                            <div>
                                <form @submit.prevent="submit">
                                    <div>
                                        <InputLabel for="email" value="Email" />
                                        <TextInput
                                            id="email"
                                            v-model="form.email"
                                            type="email"
                                            class="mt-1 block w-full"
                                            required
                                            autofocus
                                            autocomplete="email"
                                        />
                                        <InputError class="mt-2" :message="form.errors.email" />
                                    </div>

                                    <div class="mt-4">
                                        <InputLabel for="password" value="Password" />
                                        <TextInput
                                            id="password"
                                            v-model="form.password"
                                            type="password"
                                            class="mt-1 block w-full"
                                            required
                                            autocomplete="current-password"
                                        />
                                        <InputError class="mt-2" :message="form.errors.password" />
                                    </div>

                                    <div class="block mt-4">
                                        <label class="flex items-center">
                                            <Checkbox v-model:checked="form.remember" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center mt-4">
                                        <!-- <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Forgot your password?
                                        </Link> -->

                                        <PrimaryButton class="w-full justify-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                            <span class="text-white">Login</span>
                                        </PrimaryButton>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
                <div>
                    <a title="Developers" @click="about()" href="#" class="block w-10 h-10 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                        <img class="object-cover object-center w-10 h-10 rounded-full" src="/images/question.png"/>
                    </a>
                    <Modal :show="showAbout" @close="closeModal">
                        <div class="p-4 sm:p-10 text-center overflow-y-auto flex flex-col items-center">
                            <button @click="closeModal" class="mt-5 ml-auto p-3 shadow-2xl rounded-xl text-black font-bold hover:text-red-800">X</button>
                            <div class="px-10 py-10 max-w-md m-auto lg:col-span-2 shadow-xl rounded-xl lg:mt-10 md:shadow-xl md:rounded-xl lg:shadow-none lg:rounded-none lg:w-full lg:mb-10 lg:px-5 lg:pt-5 lg:pb-5 lg:max-w-lg bg-white">
                                <div class="flex flex-col items-center">
                                    <img class="h-full" src="/images/mdclogo.png" alt="MDC Logo">
                                    <h1 class="mt-5 font-bold text-lg lg:mt-7">About The System</h1>

                                    <h1 class="text-lg text-gray-600 text-justify pt-2">MDC CMS was developed by MDC IT students as their capstone project in 2023. This aims to enhance the efficiency of the MDC clinic by providing a faster and easier workflow.</h1>
                                </div>
                            </div>

                        </div>
                    </Modal>
                </div>
            </div>
        </template>

    </GuestLayout>
</template>
