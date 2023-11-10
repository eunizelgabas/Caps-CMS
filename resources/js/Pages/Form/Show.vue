<script setup>
    import Sidebar from '@/Layouts/Sidebar.vue'
    import { Head, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        form: Object,
        medicalhistory: Object,
        physicalexamination: Object,
        remark: Object,
        patient: Object

    })

    let forms = useForm({

    allergy: props.medicalhistory.allergy,
    amoebiasis:props.medicalhistory.amoebiasis,
    anemia:props.medicalhistory.anemia,
    asthma:props.medicalhistory.asthma,
    cancer:props.medicalhistory.cancer,
    chronic: props.medicalhistory.chronic,
    diabetes: props.medicalhistory.diabetes,
    dysmenorrhea: props.medicalhistory.dysmenorrhea,
    fainting: props.medicalhistory.fainting,
    deafness: props.medicalhistory.deafness,
    endocrine: props.medicalhistory.endocrine,
    frequent_headache: props.medicalhistory.frequent_headache,
    neck_injury: props.medicalhistory.neck_injury,
    heart_disease: props.medicalhistory.heart_disease,
    hernias: props.medicalhistory.hernias,
    highblood_pressure: props.medicalhistory.highblood_pressure,
    insomnia: props.medicalhistory.insomnia,
    kidney_disease: props.medicalhistory.kidney_disease,
    skeletal_disorder: props.medicalhistory.skeletal_disorder,
    nervous_breakdown: props.medicalhistory.nervous_breakdown,
    nose_trouble: props.medicalhistory.nose_trouble,
    peptic_ulcer: props.medicalhistory.peptic_ulcer,
    tuberculosis: props.medicalhistory.tuberculosis,
    hospitalization: props.medicalhistory.hospitalization,
    surgical_operation: props.medicalhistory.surgical_operation,
    height: props.physicalexamination.height,
    weight: props.physicalexamination.weight,
    bp: props.physicalexamination.bp,
    rr: props.physicalexamination.rr,
    pr: props.physicalexamination.pr,
    saturation: props.physicalexamination.saturation,
    lmp: props.physicalexamination.lmp,
    head_neck_scalp: props.physicalexamination.head_neck_scalp,
    head_neck_scalp_findings:props.physicalexamination.head_neck_scalp_findings,
    eyes: props.physicalexamination.eyes,
    eyes_findings: props.physicalexamination.eyes_findings,
    ears: props.physicalexamination.ears,
    ears_findings: props.physicalexamination.ears_findings,
    nose_sinuses: props.physicalexamination.nose_sinuses,
    nose_sinuses_findings:props.physicalexamination.nose_sinuses_findings,
    mouth: props.physicalexamination.mouth,
    mouth_findings: props.physicalexamination.mouth_findings,
    neck_thyroid: props.physicalexamination.neck_thyroid,
    neck_thyroid_findings: props.physicalexamination.neck_thyroid_findings,
    chest_breast_axilla: props.physicalexamination.chest_breast_axilla,
    chest_breast_axilla_findings: props.physicalexamination.chest_breast_axilla_findings,
    heart: props.physicalexamination.heart,
    heart_findings: props.physicalexamination.heart_findings,
    lungs: props.physicalexamination.lungs,
    lungs_findings: props.physicalexamination.lungs_findings,
    abdomen: props.physicalexamination.abdomen,
    abdomen_findings: props.physicalexamination.abdomen_findings,
    back: props.physicalexamination.back,
    back_findings: props.physicalexamination.back_findings,
    anus: props.physicalexamination.anus,
    anus_findings: props.physicalexamination.anus_findings,
    gut: props.physicalexamination.gut,
    gut_findings: props.physicalexamination.gut_findings,
    inguinals: props.physicalexamination.inguinals,
    inguinals_findings: props.physicalexamination.inguinals_findings,
    reflexes: props.physicalexamination.reflexes,
    reflexes_findings: props.physicalexamination.reflexes_findings,
    extremities: props.physicalexamination.extremities,
    extremities_findings: props.physicalexamination.extremities_findings,
    dental: props.physicalexamination.dental,
    dental_findings: props.physicalexamination.dental_findings,
    right_eye: props.physicalexamination.right_eye,
    left_eye: props.physicalexamination.left_eye,
    withg_right_eye: props.physicalexamination.withg_right_eye,
    withg_left_eye: props.physicalexamination.withg_left_eye,
    ishihara: props.physicalexamination.ishihara,
    colour_blind: props.physicalexamination.colour_blind,
    remarks: props.remark.remarks,

    fullname: `${props.form.patient.user.firstname} ${props.form.patient.user.middlename} ${props.form.patient.user.lastname}`,
    age: props.form.patient.age,
    gender: props.form.patient.user.gender,
    address: props.form.patient.address,
    course: props.form.patient.course,
    vaccine: props.form.patient.vaccine,
    doc_id: '',
    pat_id: props.form.patient.id,
    date: props.form.date
})

</script>


<template>
    <Sidebar>
        <Head title="View Sample"/>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight"> View History and Physical Examination Form</h2>
                <div class="flex-justify-between">
                    <a as="button" :href="'/healthForm/pdf/' + form.id"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fa-solid fa-receipt" style="color: #fffff;"></i> Export PDF
                </a>
                <a as="button" :href="'/generate-pdf/' + forms.pat_id"  class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fa-solid fa-receipt" style="color: #fffff;"></i> Generate Medical Certificate
                </a>
                </div>
            </div>
        </template>
        <div class="justify-center text-center mt-4">
            <h2 class="text-3xl">Mater Dei College</h2>
            <p>Cabulijan, Tubigon, Bohol</p>
        </div>
        <div class="w-full mt-10 mx-auto px-4 ">

<div class="space-y-6">
    <div class="block pl-12 font-semibold text-xl text-center text-gray-700">
        <h1 class="leading-relaxed ">History and Physical Examination Form</h1>
        <hr>
    </div>
  <div class="border-b border-gray-900/10 pb-12">

        <div class="py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4 mx-auto">
            <div class="sm:col-span-1">
                <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <div class="mt-2">
                <input type="text" :value="forms.fullname" name="firstname" id="firstname" readonly  autocomplete="firstname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <div class="text-sm text-red-500 italic" ></div>
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                <div class="mt-2">
                <input type="text" :value="forms.age"  readonly name="age" id="age" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <div class="text-sm text-red-500 italic" ></div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Sex</label>
                <div class="mt-2">
                <input type="text" :value="forms.gender"  readonly  name="gender" id="gender" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <div class="text-sm text-red-500 italic" ></div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                <div class="mt-2">
                <input type="text" :value="forms.address" readonly name="address" id="address" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <div class="text-sm text-red-500 italic" ></div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="course" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
                <div class="mt-2">
                <input type="text" :value="forms.course" readonly name="course" id="course" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <div class="text-sm text-red-500 italic" ></div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="vaccine" class="block text-sm font-medium leading-6 text-gray-900">Covid Vaccine/Booster</label>
                <div class="mt-2">
                <input type="text" :value="forms.vaccine"  readonly name="vaccine" id="vaccine" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <div class="text-sm text-red-500 italic" ></div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                <div class="mt-2">
                <input type="date" :value="forms.date" readonly  name="date" id="date" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <div class="text-sm text-red-500 italic" ></div>
                </div>
            </div>
            <!-- <div class="sm:col-span-1" >
                <label for="doctor" class="block text-sm font-medium leading-6 text-gray-900">Doctor</label>
                <div class="mt-2">
                <select id="doctor" v-model="form.doc_id" name="doctor"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option selected disabled >Select doctor</option>
                    <option v-for="doc in doctor" :key="doc.id" :value="doc.id">{{ doc.user.firstname }} {{ doc.user.lastname }}</option>
                </select>
                <div class="text-sm text-red-500 italic" v-if="form.errors.doc_id">{{ form.errors.doc_id }}</div>
            </div>

          </div> -->
        </div>
    </div>
</div>
 <h2 class="text-xl  mt-5">A. <span class="underline">Medical History</span></h2>
<div class="grid grid-cols-4 mt-3">
    <!-- First Part (13 rows) -->

    <div class="col-span-2">

        <table class="w-full ">
            <!-- Header row -->
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2"></th>
                    <th class="border border-gray-300 p-2">Yes</th>
                    <th class="border border-gray-300 p-2">No</th>
                    <th class="border border-gray-300 p-2"></th>
                </tr>
            </thead>
            <!-- Data rows with inputs -->
            <tbody>

                <tr>
                    <td class="border border-gray-300 p-2">1</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="allergy-yes" v-model="forms.allergy"  readonly value="1" disabled >
                        <label for="allergy-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="allergy-no" v-model="forms.allergy" readonly  value="0" disabled>
                        <label for="allergy-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Allergy</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">2</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="amoebiasis-yes" v-model="forms.amoebiasis" value="1" disabled>
                        <label for="amoebiasis-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="amoebiasis-no" v-model="forms.amoebiasis" value="0" disabled>
                        <label for="amoebiasis-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Amoebiasis</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">3</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="anemia-yes" v-model="forms.anemia" value="1" disabled>
                        <label for="anemia-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="anemia-no" v-model="forms.anemia" value="0" disabled>
                        <label for="anemia-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Anemia</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">4</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="asthma-yes" v-model="forms.asthma" value="1" disabled>
                        <label for="asthma-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio"  id="asthma-no" v-model="forms.asthma"  value="0" disabled>
                        <label for="asthma-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Asthma</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">5</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="cancer-yes" v-model="forms.cancer" value="1" disabled>
                        <label for="cancer-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="cancer-no" v-model="forms.cancer"  value="0" disabled>
                        <label for="cancer-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Cancer/Tumor</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">6</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="chronic-yes" v-model="forms.chronic"  value="1" disabled>
                        <label for="chronic-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="chronic-no" v-model="forms.chronic" value="0" disabled>
                        <label for="chronic-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Chronic Cough</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">7</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="diabetes-yes" v-model="forms.diabetes"  value="1" disabled>
                        <label for="diabetes-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="diabetes-no" v-model="forms.diabetes" value="0" disabled>
                        <label for="diabetes-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Diabetes</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">8</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="dysmenorrhea-yes" v-model="forms.dysmenorrhea"  value="1" disabled>
                        <label for="dysmenorrhea-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="dysmenorrhea-no" v-model="forms.dysmenorrhea"  value="0" disabled>
                        <label for="dysmenorrhea-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Dysmenorrhea</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">9</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="fainting-yes" v-model="forms.fainting"  value="1" disabled >
                        <label for="fainting-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="fainting-no" v-model="forms.fainting" value="0" disabled>
                        <label for="fainting-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Fainting/Specific Seizure</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">10</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="deafness-yes" v-model="forms.deafness" value="1" disabled>
                        <label for="deafness-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="deafness-no" v-model="forms.deafness" value="0" disabled>
                        <label for="deafness-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Ear Trouble/Deafness</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">11</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="endocrine-yes" v-model="forms.endocrine" value="1" disabled>
                        <label for="endocrine-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="endocrine-no" v-model="forms.endocrine" value="0" disabled>
                        <label for="endocrine-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Endocrine Disorder</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">12</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="frequent_headache-yes" v-model="forms.frequent_headache"  value="1" disabled>
                        <label for="frequent_headache-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="frequent_headache-no" v-model="forms.frequent_headache"  value="0" disabled>
                        <label for="frequent_headache-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Frequent Headache</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">13</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="neck_injury-yes" v-model="forms.neck_injury"  value="1" disabled>
                        <label for="neck_injury-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="neck_injury-no" v-model="forms.neck_injury"  value="0" disabled>
                        <label for="neck_injury-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Head or Neck Injury</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Second Part (13 rows) -->
    <div class="col-span-2">
        <table class="w-full border border-gray-300">
            <!-- Header row -->
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2"></th>
                    <th class="border border-gray-300 p-2">Yes</th>
                    <th class="border border-gray-300 p-2">No</th>
                    <th class="border border-gray-300 p-2"></th>
                </tr>
            </thead>
            <!-- Data rows with inputs -->
            <tbody>
                <!-- Repeat the following rows for 13 times -->
                <!-- <tr v-for="(condition, index) in healthConditions.slice(13, 25)" :key="index">
                    <td class="border border-gray-300 p-2">{{ index + 14 }}</td>
                    <td class="border border-gray-300 p-2 text-center"><input type="checkbox"  v-model="conditionValues[index]" value="1"></td>
                    <td class="border border-gray-300 p-2 text-center"><input type="checkbox"  v-model="conditionValues[index]" value="0"></td>
                    <td class="border border-gray-300 p-2">{{ condition }}</td>
                </tr> -->
                <tr>
                    <td class="border border-gray-300 p-2">14</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="heart_disease-yes" v-model="forms.heart_disease" value="1" disabled>
                        <label for="heart_disease-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="heart_disease-no" v-model="forms.heart_disease" value="0" disabled>
                        <label for="heart_disease-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Heart Diseases</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">15</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="hernias-yes" v-model="forms.hernias" value="1" disabled>
                        <label for="hernias-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="hernias-no" v-model="forms.hernias" value="0" disabled>
                        <label for="hernias-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Hernias</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">16</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="highblood_pressure-yes" v-model="forms.highblood_pressure" value="1" disabled>
                        <label for="highblood_pressure-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="highblood_pressure-no" v-model="forms.highblood_pressure" value="0" disabled>
                        <label for="highblood_pressure-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">High Blood Pressure</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">17</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="insomnia-yes" v-model="forms.insomnia" value="1" disabled>
                        <label for="insomnia-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="insomnia-no" v-model="forms.insomnia" value="0" disabled>
                        <label for="insomnia-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Insomnia</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">18</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="kidney_disease-yes" v-model="forms.kidney_disease" value="1" disabled>
                        <label for="kidney_disease-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="kidney_disease-no" v-model="forms.kidney_disease" value="0" disabled>
                        <label for="kidney_disease-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Kidney Disease</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">19</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="skeletal_disorder-yes" v-model="forms.skeletal_disorder" value="1" disabled>
                        <label for="skeletal_disorder-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="skeletal_disorder-no" v-model="forms.skeletal_disorder" value="0" disabled>
                        <label for="skeletal_disorder-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Skeletal Disorder</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">20</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="nervous_breakdown-yes" v-model="forms.nervous_breakdown" value="1" disabled>
                        <label for="nervous_breakdown-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="nervous_breakdown-no" v-model="forms.nervous_breakdown" value="0" disabled>
                        <label for="nervous_breakdown-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Nervous Breakdown</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">21</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="nose_trouble-yes" v-model="forms.nose_trouble"  value="1" disabled>
                        <label for="nose_trouble-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="nose_trouble-no" v-model="forms.nose_trouble" value="0" disabled>
                        <label for="nose_trouble-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Nose or Throat Trouble</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">22</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="peptic_ulcer-yes" v-model="forms.peptic_ulcer" value="1" disabled>
                        <label for="peptic_ulcer-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="peptic_ulcer-no" v-model="forms.peptic_ulcer" value="0" disabled>
                        <label for="peptic_ulcer-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Peptic Ulcer/NUD/Gastritis</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">23</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="tuberculosis-yes" v-model="forms.tuberculosis" value="1" disabled>
                        <label for="tuberculosis-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="tuberculosis-no" v-model="forms.tuberculosis" value="0" disabled>
                        <label for="tuberculosis-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Tuberculosis</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">24</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="hospitalization-yes" v-model="forms.hospitalization" value="1" disabled>
                        <label for="hospitalization-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="hospitalization-no" v-model="forms.hospitalization" value="0" disabled>
                        <label for="hospitalization-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Hospitalization</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">25</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="surgical_operation-yes" v-model="forms.surgical_operation" value="1" disabled>
                        <label for="surgical_operation-yes" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        <input type="radio" id="surgical_operation-no" v-model="forms.surgical_operation" value="0" disabled>
                        <label for="surgical_operation-no" class="custom-checkbox"></label>
                    </td>
                    <td class="border border-gray-300 p-2">Surgical Operation: if any</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 p-2">&nbsp;</td>
                    <td class="border border-gray-300 p-2 text-center">&nbsp;</td>
                    <td class="border border-gray-300 p-2 text-center">&nbsp;</td>
                    <td class="border border-gray-300 p-2">&nbsp;</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
 <h2 class="text-xl mt-3">C. <span class="underline">Physical Examination</span> </h2>
<div class=" py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 mx-auto">
    <div class="sm:col-span-1">
        <label for="height" class="block text-sm font-medium leading-6 text-gray-900">Height</label>
        <div class="mt-2 flex items-center">
        <input type="text" v-model="forms.height" readonly  name="height" id="height" class="block w-[500px] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <span class="text-gray-900 ml-1">cm</span>
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="weight"  class="block text-sm font-medium leading-6 text-gray-900">Weight</label>
        <div class="mt-2 flex items-center">
        <input type="text" v-model="forms.weight" readonly name="weight" id="weight"  class="block w-[500px] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <span class="text-gray-900 ml-1">kg</span>
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>

</div>
<div class=" py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-5 mx-auto">
    <div class="sm:col-span-1">
        <label for="bp" class="block text-sm font-medium leading-6 text-gray-900">BP:</label>
        <div class="mt-2">
        <input type="text" v-model="forms.bp" readonly  name="bp" id="bp"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="pr" class="block text-sm font-medium leading-6 text-gray-900">PR:</label>
        <div class="mt-2">
        <input type="text" v-model="forms.pr" readonly name="pr" id="pr" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="rr" class="block text-sm font-medium leading-6 text-gray-900">RR:</label>
        <div class="mt-2">
        <input type="text" v-model="forms.rr" readonly  name="rr" id="rr" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="saturation" class="block text-sm font-medium leading-6 text-gray-900">02 Saturation:</label>
        <div class="mt-2">
        <input type="text"  v-model="forms.saturation" readonly name="saturation" id="saturation" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="lmp" class="block text-sm font-medium leading-6 text-gray-900">LMP:</label>
        <div class="mt-2">
        <input type="text" v-model="forms.lmp" readonly  name="lmp" id="lmp" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>

</div>
<div class="w-full">
    <table class="w-full border border-gray-300">
        <!-- Header row -->
        <thead>
            <tr>
                <th class="border border-gray-300 p-2">Description</th>
                <th class="border border-gray-300 p-2">Normal</th>
                <th class="border border-gray-300 p-2">Abnormal</th>
                <th class="border border-gray-300 p-2">Findings</th>
            </tr>
        </thead>
        <!-- Data rows with inputs -->
        <tbody>

            <tr>
                <td class="border border-gray-300 p-2">Head, Neck, Scalp</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" v-model="forms.head_neck_scalp" disabled id="head_neck_scalp-normal" value="1">
                    <label for="head_neck_scalp-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" v-model="forms.head_neck_scalp" disabled id="head_neck_scalp-abnormal" value="0">
                    <label for="head_neck_scalp-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <input
                    type="text"
                    v-model="forms.head_neck_scalp_findings" readonly
                    name="head_neck_scalp_findings"
                    id="head_neck_scalp_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Eyes</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="eyes-normal" v-model="forms.eyes" disabled  value="1">
                    <label for="eyes-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="eyes-abnormal" v-model="forms.eyes" disabled value="0">
                    <label for="eyes-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <input
                    type="text"
                    v-model="forms.eyes_findings" readonly
                    name="eyes_findings"
                    id="eyes_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                    >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Ears</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="ears-normal" v-model="forms.ears" disabled  value="1">
                    <label for="ears-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="ears-abnormal" v-model="forms.ears" disabled  value="0">
                    <label for="ears-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <input
                    type="text"
                    v-model="forms.ears_findings" readonly
                    name="ears_findings"
                    id="ears_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Nose, Sinuses</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="nose_sinuses-normal" v-model="forms.nose_sinuses" disabled value="1">
                    <label for="nose_sinuses-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="nose_sinuses-abnormal" v-model="forms.nose_sinuses" disabled value="0">
                    <label for="nose_sinuses-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <input
                    type="text"
                    v-model="forms.nose_sinuses_findings" readonly
                    name="nose_sinuses_findings"
                    id="nose_sinuses_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Mouth Throat</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="mouth-normal" v-model="forms.mouth" disabled  value="1">
                    <label for="mouth-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="mouth-abnormal" v-model="forms.mouth" disabled  value="0">
                    <label for="mouth-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <input
                    type="text"
                    v-model="forms.mouth_findings" readonly
                    name="mouth_findings"
                    id="mouth_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Neck, Thyroid</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="neck_thyroid-normal" v-model="forms.neck_thyroid" disabled value="1">
                    <label for="neck_thyroid-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="neck_thyroid-abnormal" v-model="forms.neck_thyroid" disabled value="0">
                    <label for="neck_thyroid-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <input
                    type="text"
                    v-model="forms.neck_thyroid_findings" readonly
                    name="neck_thyroid_findings"
                    id="neck_thyroid_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Chest, Breast, Axilla</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="chest_breast-normal" v-model="forms.chest_breast_axilla" disabled  value="1">
                    <label for="chest_breast-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="chest_breast-abnormal" v-model="forms.chest_breast_axilla" disabled value="0">
                    <label for="chest_breast-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <input
                    type="text"
                    v-model="forms.chest_breast_axilla_findings" readonly
                    name="chest_breast_axilla_findings"
                    id="chest_breast_axilla_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Heart</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="heart-normal" v-model="forms.heart" disabled value="1">
                    <label for="heart-normal" class="custom-checkbox">

                    </label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="heart-abnormal" v-model="forms.heart" disabled value="0">
                    <label for="heart-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <input
                    type="text"
                    v-model="forms.heart_findings" readonly
                    name="heart_findings"
                    id="heart_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Lungs</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="lungs-normal" v-model="forms.lungs" disabled value="1">

                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="lungs-abnormal" v-model="forms.lungs" disabled value="0">
                    <label for="lungs-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                     <input
                    type="text"
                    v-model="forms.lungs_findings" readonly
                    name="lungs_findings"
                    id="lungs_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Abdomen</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="abdomen-normal" v-model="forms.abdomen" disabled value="1">
                    <label for="abdomen-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="abdomen-abnormal" v-model="forms.abdomen" disabled value="0">
                    <label for="abdomen-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <label for="lungs-normal" class="custom-checkbox">
                        <input
                        type="text"
                        v-model="forms.abdomen_findings" readonly
                        name="abdomen_findings"
                        id="abdomen_findings"
                        autocomplete="family-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                      >
                    </label>
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Back</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="back-normal" v-model="forms.back" disabled value="1">
                    <label for="back-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="back-abnormal" v-model="forms.back" disabled value="0">
                    <label for="back-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                    <input
                    type="text"
                    v-model="forms.back_findings" readonly
                    name="back_findings"
                    id="back_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </label></td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Anus/Rectum(Hemorrhoids)</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="anus-normal" v-model="forms.anus" disabled  value="1">
                    <label for="anus-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="anus-abnormal" v-model="forms.anus" disabled  value="0">
                    <label for="anus-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                    <input
                    type="text"
                    v-model="forms.anus_findings" readonly
                    name="anus_findings"
                    id="anus_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </label></td>
            </tr>

            <tr>
                <td class="border border-gray-300 p-2">GUT</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="gut-normal" v-model="forms.gut" disabled value="1">
                    <label for="gut-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="gut-abnormal" v-model="forms.gut" disabled value="0">
                    <label for="gut-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                    <input
                    type="text"
                    v-model="forms.gut" readonly
                    name="gut_findings"
                    id="gut_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </label></td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Inguinals/Genitals(Hernias)</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="inguinals-normal" v-model="forms.inguinals" disabled  value="1">
                    <label for="inguinals-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="inguinals-abnormal"  v-model="forms.inguinals" disabled value="0">
                    <label for="inguinals-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                    <input
                    type="text"
                    v-model="forms.inguinals_findings" readonly
                    name="inguinals_findings"
                    id="inguinals_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </label></td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Reflexes</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="reflexes-normal" v-model="forms.reflexes" disabled value="1">
                    <label for="reflexes-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="reflexes-abnormal" v-model="forms.reflexes" disabled value="0">
                    <label for="reflexes-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                    <input
                    type="text"
                    v-model="forms.reflexes_findings" readonly
                    name="reflexes_findings"
                    id="reflexes_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </label></td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Extremities</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="extremities-normal" v-model="forms.extremities" disabled value="1">
                    <label for="extremities-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="extremities-abnormal" v-model="forms.extremities" disabled value="0">
                    <label for="extremities-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                    <input
                    type="text"
                    v-model="forms.extremities_findings" readonly
                    name="extremities_findings"
                    id="extremities_findings"
                    autocomplete="family-name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                  >
                </label></td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Dental</td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="dental-normal" v-model="forms.dental" disabled value="1">
                    <label for="dental-normal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2 text-center">
                    <input type="radio" id="dental-abnormal" v-model="forms.dental" disabled value="0">
                    <label for="dental-abnormal" class="custom-checkbox"></label>
                </td>
                <td class="border border-gray-300 p-2">
                    <label for="lungs-normal" class="custom-checkbox">
                        <input
                        type="text"
                        v-model="forms.dental_findings" disabled
                        name="dental_findings"
                        id="dental_findings"
                        autocomplete="family-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"

                      >
                    </label>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<div class="  py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 mx-auto">
    <div class="sm:col-span-1">
        <label for="right_eye" class="block text-sm font-medium leading-6 text-gray-900">Visual Acuity: Right Eye:</label>
        <div class="mt-2">
        <input type="text" v-model="forms.right_eye" readonly name="right_eye" id="right_eye" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="left_eye" class="block text-sm font-medium leading-6 text-gray-900">Left Eye:</label>
        <div class="mt-2">
        <input type="text" v-model="forms.left_eye" readonly  name="left_eye" id="left_eye"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="withg_right_eye" class="block text-sm font-medium leading-6 text-gray-900">With Glasses: Right Eye</label>
        <div class="mt-2">
        <input type="text" v-model="forms.withg_right_eye" readonly  name="withg_right_eye" id="withg_right_eye" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="withg_left_eye" class="block text-sm font-medium leading-6 text-gray-900">Left Eye:</label>
        <div class="mt-2">
        <input type="text" v-model="forms.withg_left_eye" readonly  name="withg_left_eye" id="withg_left_eye"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="ishihara" class="block text-sm font-medium leading-6 text-gray-900">Ishihara Test Result:</label>
        <div class="mt-2">
        <input type="text" v-model="forms.ishihara" readonly name="ishihara" id="ishihara" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>
    <div class="sm:col-span-1">
        <label for="colour_blind" class="block text-sm font-medium leading-6 text-gray-900">Colour Blind:</label>
        <div class="mt-2">
        <input type="text" :value="forms.colour_blind" name="colour_blind" id="colour_blind"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>

</div>
 <h2 class="text-xl mt-3">E. <span class="underline">Remarks</span> </h2>
<div class="py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-1 mx-auto">
    <div class="sm:col-span-1">
        <label for="remarks" class="block text-sm font-medium leading-6 text-gray-900">Remark</label>
        <div class="mt-2">
        <textarea type="text" v-model="forms.remarks" readonly  name="remarks" id="remarks" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        <div class="text-sm text-red-500 italic" ></div>
        </div>
    </div>


</div>



</div>
    </Sidebar>
</template>
