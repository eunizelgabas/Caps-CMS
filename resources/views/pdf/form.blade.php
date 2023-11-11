<html>
    <head>
       <title>History and Physical Examination Form</title>
    </head>
    <body>
        <div style="text-align:center">
            <span style="font-size: 40px">Mater Dei College</span><br>
                Cabulijan, Tubigon, Bohol
            <h6><u>History and Physical Examination Form</u></h6>
        </div>

        {{-- <div>
            <p style="display: inline-block; margin-right: 220px;"><span style="  font-size: 18px" >Name: </span><u>{{$form->patient->user->firstname}} {{$form->patient->user->middlename}} {{$form->patient->user->lastname}}</u></p>
            <p style="display: inline-block; margin-right: 20px;"><span style="font-size: 18px">Age/Sex: </span> <u>{{$form->patient->age}} {{$form->patient->user->gender}}</u></p>
        </div>
        <div>
            <p style="display: inline-block; margin-right: 220px; "><span style="font-size: 18px" >Address: </span><u>{{$form->patient->address}}</u></p>
            <p style="display: inline-block; margin-right: 20px;"><span style="font-size: 18px">Course: </span> <u>{{$form->patient->course}}</u></p>
        </div>
        <div>
            <p style="display: inline-block; margin-right: 220px;" ><span style="font-size: 18px" >Covid Vaccine/Booster: </span><u>{{$form->patient->vaccine}}</u></p>
            <p style="display: inline-block; margin-right: 20px;"><span style="font-size: 18px">Date: </span> <u>{{$form->date}}</u></p>
        </div> --}}
        <table style="width: 100%;">
            <tr>
                <td style="">
                    <span style="font-size: 18px;">Name: </span> <u>{{$form->patient->user->firstname}} {{$form->patient->user->middlename}} {{$form->patient->user->lastname}}</u>
                </td>
                <td style="text-align: right;">
                    <span style="font-size: 18px;">Age/Sex: </span> <u>{{$form->patient->age}} {{$form->patient->user->gender}}</u>
                </td>

            </tr>
            <tr>
                <td style="">
                    <span style="font-size: 18px;">Address: </span><u>{{$form->patient->address}}</u>
                </td>
                <td style="text-align: right;">
                    <span style="font-size: 18px;">Course: </span> <u>{{$form->patient->course}}</u>
                </td>

            </tr>
            <tr>
                <td style="">
                    <span style="font-size: 18px;">Covid Vaccine/Booster: </span>  <u>{{$form->patient->vaccine}}</u>
                </td>
                <td style="text-align: right;">
                    <span style="font-size: 18px;">Date: </span> <u>{{$form->date}}</u>
                </td>

            </tr>

        </table>


        <!-- Repeat the structure for other sections -->


        <h2>A. <u>MEDICAL HISTORY</u></h2>
        <table>
            <tr>
                <td>
                    <table style="padding: 2px; border: 1px solid #333;width:300px">
                        <thead>
                            <tr style="padding: 2px; border: 1px solid #333;">
                                <th style="padding: 2px; border: 1px solid #333;"></th>
                                <th style="padding: 2px; border: 1px solid #333;">Yes</th>
                                <th style="padding: 2px; border: 1px solid #333;" >No</th>
                                <th style="padding: 2px; border: 1px solid #333;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >1</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->allergy == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->allergy == 1 ? 'X' : ''}}

                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->allergy == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->allergy == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Allergy</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >2</td>
                                <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->amoebiases == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->amoebiases == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->amoebiases == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->amoebiases == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Amoebiases</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >3</td>
                                <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->anemia == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->anemia == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->anemia == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->anemia == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Anemia</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >4</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->asthma == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->asthma == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->asthma == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->asthma == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Asthma</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >5</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->cancer == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->cancer == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->cancer == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->cancer == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Cancer/Tumor</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >6</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->chronic == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->chronic == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->chronic == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->chronic == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Chronic Cough</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >7</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->diabetes == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->diabetes == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->diabetes == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->diabetes == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Diabetes</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >8</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->dysmenorrhea == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->dysmenorrhea == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->dysmenorrhea == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->dysmenorrhea == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Dysmenorrhea</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >9</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->fainting == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->fainting == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->fainting == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->fainting == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Fainting/Specific Seizure</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >10</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->deafness == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->deafness == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->deafness == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->deafness == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Ear Trouble/Deafness</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >11</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->endocrine == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->endocrine == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->endocrine == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->endocrine == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Endocrine Disorder</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >12</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->frequent_headache == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->frequent_headache == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle;">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->frequent_headache == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->frequent_headache == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Frequent Headache</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >13</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->neck_injury == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->neck_injury == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->neck_injury == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->neck_injury == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Head or Neck Injury</td>
                            </tr>

                        </tbody>
                    </table>
                </td>
                <td style="padding-left:10px">
                    <table style="padding: 2px; border: 1px solid #333;width:300px">
                        <thead>
                            <tr style="padding: 2px; border: 1px solid #333;">
                                <th style="padding: 2px; border: 1px solid #333;"></th>
                                <th style="padding: 2px; border: 1px solid #333;">Yes</th>
                                <th style="padding: 2px; border: 1px solid #333;">No</th>
                                <th style="padding: 2px; border: 1px solid #333;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >14</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->heart_disease == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->heart_disease == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->heart_disease == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->heart_disease == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Heart Diseases</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >15</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->hernias == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->hernias == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->hernias == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->hernias == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Hernias</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >16</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->highblood_pressure == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->highblood_pressure == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->highblood_pressure == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->highblood_pressure == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >High Blood Pressure</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >17</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->insomia == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->insomia == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->insomia == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->insomia == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Insomia</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >18</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->kidney_disease == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->kidney_disease == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->kidney_disease == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->kidney_disease == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Kidney Disease</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >19</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->skeletal_disorder == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->skeletal_disorder == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->skeletal_disorder == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->skeletal_disorder == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Skeletal Disorder</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >20</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->nervous_breakdown == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->nervous_breakdown == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->nervous_breakdown == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->nervous_breakdown == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Nervous Breakdown</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >21</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->nose_trouble == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->nose_trouble == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->nose_trouble == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->nose_trouble == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Nose or Throat Trouble</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >22</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->peptic_ulcer == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->peptic_ulcer == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->peptic_ulcer == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->peptic_ulcer == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Peptic Ulcer/NUD/Gastritis</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >23</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->tuberculosis == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->tuberculosis == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->tuberculosis == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->tuberculosis == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Tuberculosis</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >24</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->hospitalization == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->hospitalization == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->hospitalization == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->hospitalization == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Hospitalization</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >25</td>
                                <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                                    <div class="checkbox " style="background-color: {{ $medicalhistory->surgical_operation == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->surgical_operation == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->surgical_operation == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->surgical_operation == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Surgical Operation: if any</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td style="padding: 2px; border: 1px solid #333; " ></td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="border:none" >

                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; " ></td>
                            </tr>

                        </tbody>
                    </table>
                </td>

            </tr>

        </table>
        <h2>B. <u>HISTORY</u></h2>
        <div class="rectangle"></div>
        <h2>C. <u>PHYSICAL EXAMINATION</u></h2>
        <div>
            <p style="display: inline-block; margin-right: 20px;">Height: <u>{{$physicalexamination->height}}</u> cm</p>
            <p style="display: inline-block;">Weight: <u>{{$physicalexamination->weight}} </u>kg</p>
        </div>
        <div>
            <p style="display: inline-block; margin-right: 20px;">BP: <u>{{$physicalexamination->bp}}</u></p>
            <p style="display: inline-block; margin-right: 20px;">PR: <u>{{$physicalexamination->pr}}</u></p>
            <p style="display: inline-block; margin-right: 20px;">RR: <u>{{$physicalexamination->rr}}</u></p>
            <p style="display: inline-block; margin-right: 20px;">02 saturation: <u>{{$physicalexamination->saturation}}</u></p>
            <p style="display: inline-block; margin-right: 20px;">LMP: <u>{{$physicalexamination->lmp}}</u></p>
        </div>

        <table style="padding: 2px; border: 1px solid #333;width:100%; text-center">
            <thead>
                <tr style="padding: 2px; border: 1px solid #333;">
                    <th style="padding: 2px; border: 1px solid #333;">Description</th>
                    <th style="padding: 2px; border: 1px solid #333;">Normal</th>
                    <th style="padding: 2px; border: 1px solid #333;">Abnormal</th>
                    <th style="padding: 2px; border: 1px solid #333;">Findings</th>
                </tr>
            </thead>
            <tbody>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Head, Neck, Scalp</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->head_neck_scalp == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->head_neck_scalp == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->head_neck_scalp == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->head_neck_scalp == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >{{$physicalexamination->head_neck_scalp_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Eyes</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->eyes == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->eyes == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->eyes == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->eyes == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >{{$physicalexamination->eyes_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Ears</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->ears == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->ears == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->ears == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->ears == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->ears_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Nose, Sinuses</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->nose_sinuses == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->nose_sinuses == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->nose_sinuses == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->nose_sinuses == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->nose_sinuses_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Mouth Throat</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->mouth == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->mouth == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->mouth == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->mouth == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->mouth_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Neck, Thyroid</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->nect_thyroid == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->nect_thyroid == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->nect_thyroid == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->nect_thyroid == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->neck_thyroid_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Chest, Breast, Axilla</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->chest_breast_axilla == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->chest_breast_axilla == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->chest_breast_axilla == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->chest_breast_axilla == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->chest_breast_axilla_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Heart</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->heart == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->heart == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->heart == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->heart == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->heart_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Lungs</td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->lungs == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->lungs == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->lungs == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->lungs == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->lungs_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Abdomen</td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->abdomen == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->abdomen == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->abdomen == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->abdomen == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->abdomen}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Back</td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->back == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->back == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->back == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->back == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->back}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Anus/Rectum(Hemorrhoids)</td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->anus == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->anus == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->anus == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->anus == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->anus_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >GUT</td>
                    <td style="padding: 2px; border: 1px solid #333;text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->gut == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->gut == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->gut == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->gut == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->gut_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Inguinals/Genitals(Hernias)</td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle;">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->inguinals == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->inguinals == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->inguinals == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->inguinals == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->inguinals_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Reflexes</td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->reflexes == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->reflexes == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->reflexes == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->reflexes == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->reflexes_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Extremities</td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->extremities == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->extremities == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->extremities == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->extremities == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->extremities_findings}}</td>
                </tr>
                <tr  style="padding: 2px; border: 1px solid #333;">
                    <td >Dental</td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">

                        <div class="checkbox" style="background-color: {{ $physicalexamination->dental == 1 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->dental == 1 ? 'X' : ''}}
                        </div>

                    </td>
                    <td style="padding: 2px; border: 1px solid #333; text-align: center; vertical-align: middle; ">
                        <div class="checkbox" style="background-color: {{ $physicalexamination->dental == 0 ? '#000' : 'transparent' }};">
                            {{$physicalexamination->dental == 0 ? 'X' : ''}}
                        </div>
                    </td>
                    <td >  {{$physicalexamination->dental_findings}}</td>
                </tr>

            </tbody>
        </table>
        <br>
        <div>
            <p style="display: inline-block; margin-right: 150px;">Visual Acuity: Right Eye: <u>{{$physicalexamination->right_eye}}</u></p>
            <p style="display: inline-block;">Left Eye: <u>{{$physicalexamination->left_eye}}</u></p>

        </div>
        <div>
            <p style="display: inline-block; margin-right: 150px;">With Glasses: Right Eye: <u>{{$physicalexamination->withg_right_eye}}</u></p>
            <p style="display: inline-block;">Left Eye: <u>{{$physicalexamination->withg_left_eye}}</u></p>
        </div>
        <div>
            <p style="display: inline-block; margin-right: 150px;">Ishihara Test Result: <u>{{$physicalexamination->ishihara}}</u></p>
            <p style="display: inline-block;">Colour Blind: <u>{{$physicalexamination->colour_blind}}</u></p>
        </div>
        <br>
        <br><br>
        <br><br>
        <br>
        <br>
        <br><br>
        <br>
        <h2>D. <u>RADIOLOGIC AND LABORATORIES EXAMINATION RESULTS</u></h2>
        <div class="rectangle"></div>
        <h2>E. <u>REMARKS</u></h2>
        <div>
            <p style="display: inline-block; margin-right: 150px;"> <u>{{$remark->remarks}}</u></p>
            {{-- <p style="display: inline-block;">Colour Blind: <u>{{$physicalexamination->colour_blind}}</u></p> --}}
        </div>

        <br>
        <h2>Examining Physician:</h2>
       <p style=""><u>{{$form->doctor->user->firstname}} {{$form->doctor->user->middlename}} {{$form->doctor->user->lastname}} </u> <b>MD</b></p>
       <p><b>Lic. No.:</b><u> 098777</u></p>
       <p><b>PTR: </b><u> 098777</u></p>
       <p><b>S2 No: </b><u> 098777</u></p>
    </body>


</html>
<style>
    *{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 13pt;
    }
    body{
        margin: {{ 0.5 * 72 }}pt;
    }

    h1{
        font-size: 22pt;
    }

    table{
        border-collapse: collapse;
    }

    table th, table td{
       border: none
    }

    .checked {
        background-color: #000;
    }

    .checkbox {
        width: 15px;
        height: 15px;
        border: 1px solid #000;
        display: inline-block;
    }
    .rectangle {
            width: 100%;
            height: 200px;
            background-color: #ffffff; /* Set background color */
            border: 2px solid #000; /* Set border color and thickness */
        }

</style>
