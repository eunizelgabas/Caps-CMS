<template>
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
                                <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">{{form.patient.user.firstname}}</label>
                                <div class="mt-2">
                                <input type="text" name="firstname" id="firstname" readonly  autocomplete="firstname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <div class="text-sm text-red-500 italic" ></div>
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                                <div class="mt-2">
                                <input type="text"  readonly name="age" id="age" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <div class="text-sm text-red-500 italic" ></div>
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Sex</label>
                                <div class="mt-2">
                                <input type="text"  readonly  name="gender" id="gender" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <div class="text-sm text-red-500 italic" ></div>
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                <div class="mt-2">
                                <input type="text" readonly name="address" id="address" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <div class="text-sm text-red-500 italic" ></div>
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="course" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
                                <div class="mt-2">
                                <input type="text"  readonly name="course" id="course" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <div class="text-sm text-red-500 italic" ></div>
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="vaccine" class="block text-sm font-medium leading-6 text-gray-900">Covid Vaccine/Booster</label>
                                <div class="mt-2">
                                <input type="text"  readonly name="vaccine" id="vaccine" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <div class="text-sm text-red-500 italic" ></div>
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                                <div class="mt-2">
                                <input type="date" v-model="form.date"  name="date" id="date" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                                <!-- Repeat the following rows for 13 times -->
                                <!-- <tr v-for="(condition, index) in healthConditions.slice(0, 13)" :key="index">
                                    <td class="border border-gray-300 p-2">{{ index + 1 }}</td>
                                    <td class="border border-gray-300 p-2 text-center"><input type="checkbox"  v-model="conditionValues[index]" value="1"></td>
                                    <td class="border border-gray-300 p-2 text-center"><input type="checkbox" :name="'condition-' + index"   v-model="conditionValues[index]" value="0"></td>
                                    <td class="border border-gray-300 p-2">{{ condition }}</td>
                                </tr> -->
                                <tr>
                                    <td class="border border-gray-300 p-2">1</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="allergy-yes" value="1" >
                                        <label for="allergy-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="allergy-no"  value="0">
                                        <label for="allergy-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Allergy</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">2</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="amoebiasis-yes" value="1">
                                        <label for="amoebiasis-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="amoebiasis-no" value="0">
                                        <label for="amoebiasis-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Amoebiasis</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">3</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="anemia-yes" value="1">
                                        <label for="anemia-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="anemia-no" value="0">
                                        <label for="anemia-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Anemia</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">4</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="asthma-yes"  value="1">
                                        <label for="asthma-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio"  id="asthma-no"  value="0">
                                        <label for="asthma-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Asthma</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">5</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="cancer-yes"  value="1">
                                        <label for="cancer-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="cancer-no"  value="0">
                                        <label for="cancer-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Cancer/Tumor</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">6</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="chronic-yes"  value="1">
                                        <label for="chronic-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="chronic-no"  value="0">
                                        <label for="chronic-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Chronic Cough</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">7</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="diabetes-yes"  value="1">
                                        <label for="diabetes-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="diabetes-no"  value="0">
                                        <label for="diabetes-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Diabetes</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">8</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="dysmenorrhea-yes"  value="1">
                                        <label for="dysmenorrhea-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="dysmenorrhea-no"  value="0">
                                        <label for="dysmenorrhea-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Dysmenorrhea</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">9</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="fainting-yes"  value="1" >
                                        <label for="fainting-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="fainting-no"  value="0">
                                        <label for="fainting-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Fainting/Specific Seizure</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">10</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="deafness-yes" value="1">
                                        <label for="deafness-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="deafness-no" value="0">
                                        <label for="deafness-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Ear Trouble/Deafness</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">11</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="endocrine-yes" value="1">
                                        <label for="endocrine-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="endocrine-no" value="0">
                                        <label for="endocrine-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Endocrine Disorder</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">12</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="frequent_headache-yes"  value="1">
                                        <label for="frequent_headache-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="frequent_headache-no"  value="0">
                                        <label for="frequent_headache-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Frequent Headache</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">13</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="neck_injury-yes"  value="1">
                                        <label for="neck_injury-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="neck_injury-no"  value="0">
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
                                        <input type="radio" id="heart_disease-yes" value="1">
                                        <label for="heart_disease-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="heart_disease-no" value="0">
                                        <label for="heart_disease-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Heart Diseases</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">15</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="hernias-yes" value="1">
                                        <label for="hernias-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="hernias-no" value="0">
                                        <label for="hernias-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Hernias</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">16</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="highblood_pressure-yes" value="1">
                                        <label for="highblood_pressure-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="highblood_pressure-no" value="0">
                                        <label for="highblood_pressure-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">High Blood Pressure</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">17</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="insomnia-yes" value="1">
                                        <label for="insomnia-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="insomnia-no" value="0">
                                        <label for="insomnia-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Insomnia</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">18</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="kidney_disease-yes" value="1">
                                        <label for="kidney_disease-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="kidney_disease-no" value="0">
                                        <label for="kidney_disease-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Kidney Disease</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">19</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="skeletal_disorder-yes" value="1">
                                        <label for="skeletal_disorder-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="skeletal_disorder-no" value="0">
                                        <label for="skeletal_disorder-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Skeletal Disorder</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">20</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="nervous_breakdown-yes" value="1">
                                        <label for="nervous_breakdown-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="nervous_breakdown-no" value="0">
                                        <label for="nervous_breakdown-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Nervous Breakdown</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">21</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="nose_trouble-yes" value="1">
                                        <label for="nose_trouble-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="nose_trouble-no" value="0">
                                        <label for="nose_trouble-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Nose or Throat Trouble</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">22</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="peptic_ulcer-yes" value="1">
                                        <label for="peptic_ulcer-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="peptic_ulcer-no" value="0">
                                        <label for="peptic_ulcer-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Peptic Ulcer/NUD/Gastritis</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">23</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="tuberculosis-yes" value="1">
                                        <label for="tuberculosis-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="tuberculosis-no" value="0">
                                        <label for="tuberculosis-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Tuberculosis</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">24</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="hospitalization-yes" value="1">
                                        <label for="hospitalization-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="hospitalization-no" value="0">
                                        <label for="hospitalization-no" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2">Hospitalization</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2">25</td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="surgical_operation-yes" value="1">
                                        <label for="surgical_operation-yes" class="custom-checkbox"></label>
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <input type="radio" id="surgical_operation-no" value="0">
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
                        <input type="text"  name="height" id="height" class="block w-[500px] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <span class="text-gray-900 ml-1">cm</span>
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="weight" class="block text-sm font-medium leading-6 text-gray-900">Weight</label>
                        <div class="mt-2 flex items-center">
                        <input type="text"  name="weight" id="weight"  class="block w-[500px] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <span class="text-gray-900 ml-1">kg</span>
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>

                </div>
                <div class=" py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-5 mx-auto">
                    <div class="sm:col-span-1">
                        <label for="bp" class="block text-sm font-medium leading-6 text-gray-900">BP:</label>
                        <div class="mt-2">
                        <input type="text"  name="bp" id="bp"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="pr" class="block text-sm font-medium leading-6 text-gray-900">PR:</label>
                        <div class="mt-2">
                        <input type="text" name="pr" id="pr" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="rr" class="block text-sm font-medium leading-6 text-gray-900">RR:</label>
                        <div class="mt-2">
                        <input type="text"   name="rr" id="rr" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="saturation" class="block text-sm font-medium leading-6 text-gray-900">02 Saturation:</label>
                        <div class="mt-2">
                        <input type="text"  name="saturation" id="saturation" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="lmp" class="block text-sm font-medium leading-6 text-gray-900">LMP:</label>
                        <div class="mt-2">
                        <input type="text"  name="lmp" id="lmp" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                                    <input type="radio" id="head_neck_scalp-normal" value="1">
                                    <label for="head_neck_scalp-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="head_neck_scalp-abnormal" value="0">
                                    <label for="head_neck_scalp-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="eyes-normal"  value="1">
                                    <label for="eyes-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="eyes-abnormal"  value="0">
                                    <label for="eyes-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="ears-normal"  value="1">
                                    <label for="ears-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="ears-abnormal"  value="0">
                                    <label for="ears-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <input
                                    type="text"
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
                                    <input type="radio" id="nose_sinuses-normal" value="1">
                                    <label for="nose_sinuses-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="nose_sinuses-abnormal" value="0">
                                    <label for="nose_sinuses-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="mouth-normal"  value="1">
                                    <label for="mouth-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="mouth-abnormal"  value="0">
                                    <label for="mouth-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="neck_thyroid-normal" value="1">
                                    <label for="neck_thyroid-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="neck_thyroid-abnormal" value="0">
                                    <label for="neck_thyroid-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="chest_breast-normal"  value="1">
                                    <label for="chest_breast-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="chest_breast-abnormal"  value="0">
                                    <label for="chest_breast-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="heart-normal" value="1">
                                    <label for="heart-normal" class="custom-checkbox">

                                    </label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="heart-abnormal" value="0">
                                    <label for="heart-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="lungs-normal" value="1">

                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="lungs-abnormal" value="0">
                                    <label for="lungs-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                     <input
                                    type="text"

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
                                    <input type="radio" id="abdomen-normal" value="1">
                                    <label for="abdomen-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="abdomen-abnormal" value="0">
                                    <label for="abdomen-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <label for="lungs-normal" class="custom-checkbox">
                                        <input
                                        type="text"

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
                                    <input type="radio" id="back-normal" value="1">
                                    <label for="back-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="back-abnormal" value="0">
                                    <label for="back-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="anus-normal"  value="1">
                                    <label for="anus-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="anus-abnormal"  value="0">
                                    <label for="anus-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="gut-normal" value="1">
                                    <label for="gut-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="gut-abnormal" value="0">
                                    <label for="gut-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="inguinals-normal"  value="1">
                                    <label for="inguinals-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="inguinals-abnormal"  value="0">
                                    <label for="inguinals-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="reflexes-normal" value="1">
                                    <label for="reflexes-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="reflexes-abnormal" value="0">
                                    <label for="reflexes-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="extremities-normal" value="1">
                                    <label for="extremities-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="extremities-abnormal" value="0">
                                    <label for="extremities-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2"> <label for="lungs-normal" class="custom-checkbox">
                                    <input
                                    type="text"

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
                                    <input type="radio" id="dental-normal" value="1">
                                    <label for="dental-normal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <input type="radio" id="dental-abnormal" value="0">
                                    <label for="dental-abnormal" class="custom-checkbox"></label>
                                </td>
                                <td class="border border-gray-300 p-2">
                                    <label for="lungs-normal" class="custom-checkbox">
                                        <input
                                        type="text"

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
                        <input type="text" name="right_eye" id="right_eye" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="left_eye" class="block text-sm font-medium leading-6 text-gray-900">Left Eye:</label>
                        <div class="mt-2">
                        <input type="text"  name="left_eye" id="left_eye"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="withg_right_eye" class="block text-sm font-medium leading-6 text-gray-900">With Glasses: Right Eye</label>
                        <div class="mt-2">
                        <input type="text"  name="withg_right_eye" id="withg_right_eye" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="withg_left_eye" class="block text-sm font-medium leading-6 text-gray-900">Left Eye:</label>
                        <div class="mt-2">
                        <input type="text"   name="withg_left_eye" id="withg_left_eye"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="ishihara" class="block text-sm font-medium leading-6 text-gray-900">Ishihara Test Result:</label>
                        <div class="mt-2">
                        <input type="text"  name="ishihara" id="ishihara" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="colour_blind" class="block text-sm font-medium leading-6 text-gray-900">Colour Blind:</label>
                        <div class="mt-2">
                        <input type="text" name="colour_blind" id="colour_blind"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>

                </div>
                 <h2 class="text-xl mt-3">E. <span class="underline">Remarks</span> </h2>
                <div class="py-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-1 mx-auto">
                    <div class="sm:col-span-1">
                        <label for="remarks" class="block text-sm font-medium leading-6 text-gray-900">Remark</label>
                        <div class="mt-2">
                        <textarea type="text"  name="remarks" id="remarks" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        <div class="text-sm text-red-500 italic" ></div>
                        </div>
                    </div>


                </div>



        </div>
</template>
