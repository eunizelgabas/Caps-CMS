<html>
    <head>
       <title>History and Physical Examination Form</title>
    </head>
    <body>
        <div style="text-align:center">
            <span style="font-size: 40px">Mater Dei College</span><br>
           Cabulijan, Tubigon, Bohol
            <h6><u>History and Physical Examination</u></h6>
        </div>

        <br>
        <table>
            <tr>
                <td>
                    <p><span style="font-size: 18px">Name: </span><u>{{$form->patient->user->firstname}} {{$form->patient->user->middlename}} {{$form->patient->user->lastname}}</u></p>
                </td>
                <td style="padding-left:200px">
                    <p><span style="font-size: 18px">Age/Sex: </span> <u>{{$form->patient->age}} {{$form->patient->user->gender}}</u></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><span style="font-size: 18px">Address: </span><u>{{$form->patient->address}}</u></p>
                </td>
                <td style="padding-left:200px">
                    <p><span style="font-size: 18px">Course: </span> <u>{{$form->patient->course}}</u></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><span style="font-size: 18px">Covid Vaccine/Booster: </span><u>{{$form->patient->vaccine}}</u></p>
                </td>
                <td style="padding-left:200px">
                    <p><span style="font-size: 18px">Date: </span> <u>{{$form->date}}</u></p>
                </td>
            </tr>
        </table>

        <h2>A. <u>MEDICAL HISTORY</u></h2>
        <table>
            <tr>
                <td>
                    <table style="padding: 2px; border: 1px solid #333;width:350px">
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
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->allergy == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->allergy == 1 ? 'X' : ''}}

                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->allergy == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->allergy == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Allergy</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >2</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->amoebiases == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->amoebiases == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->amoebiases == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->amoebiases == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Amoebiases</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >3</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->anemia == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->anemia == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->anemia == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->anemia == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Anemia</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >4</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->asthma == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->asthma == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->asthma == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->asthma == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Asthma</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >5</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->cancer == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->cancer == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->cancer == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->cancer == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Cancer/Tumor</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >6</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->chronic == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->chronic == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->chronic == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->chronic == 0 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td >Chronic Cough</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >7</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->diabetes == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->diabetes == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->diabetes == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->diabetes == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Diabetes</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >8</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->dysmenorrhea == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->dysmenorrhea == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->dysmenorrhea == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->dysmenorrhea == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Dysmenorrhea</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >9</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->fainting == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->fainting == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->fainting == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->fainting == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Fainting/Specific Seizure</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >10</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->deafness == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->deafness == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->deafness == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->deafness == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Ear Trouble/Deafness</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >11</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->endocrine == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->endocrine == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->endocrine == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->endocrine == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Endocrine Disorder</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >12</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->frequent_headache == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->frequent_headache == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->frequent_headache == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->frequent_headache == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Frequent Headache</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >13</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->neck_injury == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->neck_injury == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->neck_injury == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->neck_injury == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Head or Neck Injury</td>
                            </tr>

                        </tbody>
                    </table>
                </td>
                <td style="padding-left:61.5px">
                    <table style="padding: 2px; border: 1px solid #333;width:350px">
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
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->heart_disease == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->heart_disease == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->heart_disease == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->heart_disease == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Heart Diseases</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >15</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->hernias == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->hernias == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->hernias == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->hernias == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Hernias</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >16</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->highblood_pressure == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->highblood_pressure == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->highblood_pressure == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->highblood_pressure == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >High Blood Pressure</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >17</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->insomia == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->insomia == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->insomia == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->insomia == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Insomia</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >18</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->kidney_disease == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->kidney_disease == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->kidney_disease == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->kidney_disease == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Kidney Disease</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >19</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->skeletal_disorder == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->skeletal_disorder == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->skeletal_disorder == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->skeletal_disorder == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Skeletal Disorder</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >20</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->nervous_breakdown == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->nervous_breakdown == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->nervous_breakdown == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->nervous_breakdown == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Nervous Breakdown</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >21</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->nose_trouble == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->nose_trouble == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->nose_trouble == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->nose_trouble == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Nose or Throat Trouble</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >22</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->peptic_ulcer == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->peptic_ulcer == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->peptic_ulcer == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->peptic_ulcer == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Peptic Ulcer/NUD/Gastritis</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >23</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->tuberculosis == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->tuberculosis == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->tuberculosis == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->tuberculosis == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Tuberculosis</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >24</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->hospitalization == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->hospitalization == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->hospitalization == 0 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->hospitalization == 0 ? 'X' : ''}}
                                    </div>
                                </td>
                                <td >Hospitalization</td>
                            </tr>
                            <tr  style="padding: 2px; border: 1px solid #333;">
                                <td >25</td>
                                <td style="padding: 2px; border: 1px solid #333; ">

                                    <div class="checkbox" style="background-color: {{ $medicalhistory->surgical_operation == 1 ? '#000' : 'transparent' }};">
                                        {{$medicalhistory->surgical_operation == 1 ? 'X' : ''}}
                                    </div>

                                </td>
                                <td style="padding: 2px; border: 1px solid #333; ">

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

        <h2>C. <u>PHYSICAL EXAMINATION</u></h2>


    </body>


</html>
<style>
    *{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 13pt;
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

</style>
