<!DOCTYPE html>
<html>
<head>
    <title>MEDICAL CERTIFICATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    {{-- <p class="image" style="text-align: left; margin-bottom: 18pt">
    <img src="{{public_path('images/mdclogo.jpg')}}" style="width: 125px;" alt=""> <br>
    <br>
    </p>

    <div class="intro text-align text-center">
        <h1>{{ $title }}</h1>
        <h3>{{ $header }}</h3>
        <h4>{{ $address }}</h4>
        <h5>{{ $facility }}</h5>

    </div> --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <div style="max-height: 150px; overflow: hidden;">
                    <img src="{{ public_path('images/mdclogo.png') }}" alt="" style="max-height: 100%;">
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="intro">
                    <h1>{{ $title }}</h1>
                    <h3>{{ $header }}</h3>
                    <h4>{{ $address }}</h4>
                    <h5>{{ $facility }}</h5>
                </div>
            </div>


        </div>
    </div> --}}
     <div style="">
        <img src="{{ public_path('images/mdclogo.png') }}" alt="" style="max-width: 100%; height: auto; display: inline-block; margin-right: 20px;">
        <div class="intro" style="display: inline-block; margin-left:20%;">
            <h2>{{ $title }}</h2>
            <p style="font-size: 20px">{{ $address }}</p>
            <p style="font-size: 20px">{{ $facility }}</p>
            <h2>{{ $header }}</h2>
        </div>

        </div>



    <br>
    <p class="text-align text-end">{{ $date }}</p>
    <br>

    <p>This is to certify that I have personally examined <u>{{$patient->user->firstname}} {{$patient->user->lastname}}</u> &nbsp; Age/Sex <u>{{$patient->age}} &nbsp; {{$patient->user->gender}}</u> </p>
    <p>From <u>{{$patient->address}}</u> &nbsp; Course <u>{{$patient->course}}</u> Have found the he/she is Physically and mentally fit during the time of the examnination.</p>


    <p>This certificate is issued upon his/her request and should not be used for any medico-legal purposes.</p>


    {{-- {{$patient->age}}
    {{$patient->course}}
    {{$patient->address}} --}}
    <br>
    <p>Remarks:</p>
    <br>
    <hr class="styled-line">
        <br>
    <hr class="styled-line">

    <br>
    <br>
    <br><br>
    <u>Phoebe Caspe, MD</u><br>
    <p>School Physician</p>
    <p>Lic. no.0115415</p>
</body>
</html>

<style>
    * {
        font-family: Arial, Helvetica, sans-serif;

    }
    body{
        margin: {{ 0.5 * 72 }}pt;
    }
    image{

    }
    .styled-line {
    border: 1px solid #000; /* Set the color and thickness of the line */
    margin: 10px 0; /* Adjust the margin for spacing */
    width: 300px
}
</style>
