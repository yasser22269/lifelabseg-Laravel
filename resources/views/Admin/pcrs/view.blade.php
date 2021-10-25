<html><head>
    <!-- -->   <!--  -->  <!-- -->  <!--  -->  <!-- -->  <!--  --> <!-- --> <!--  --> <!-- --><!--  -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
   <link rel="stylesheet" href="{{asset('/')}}css/fontawesome.min.css">
   <link rel="stylesheet" href="{{asset('/')}}css/style.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,500;0,700;1,500&amp;display=swap" rel="stylesheet">
    <!-- -->   <!--  -->  <!-- -->  <!--  -->  <!-- -->  <!--  --> <!-- --> <!--  --> <!-- --><!--  -->
</head>

<body  >
    <div class="result text-center" >

    <div class="container">

        <div class="text-center" >
            <img class="mb-4" src="{{asset('/')}}images/logo.png" alt="" width="200" height="270">
        </div>

        <h3 class="TestResultHead">Covid-19 PCR Test Result</h3>

        <h2 class="PatientHead">Patient Name: {{$Pcr->name}} </h2>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputEmail">Date of Birth</label>
                    <input type="text" class="form-control" value="{{$Pcr->DateOfBirth}}" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputPassword">Gender</label>
                    <input type="text" class="form-control" value=" {{$Pcr->gender}} " disabled>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputEmail">File No.</label>
                    <input type="text" class="form-control" value="{{$Pcr->FileNumber}}" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputPassword">Passport No.</label>
                    <input type="text" class="form-control" value="{{$Pcr->PassportNumber}}" disabled>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputEmail">Request Date</label>
                    <input type="text" class="form-control" value="{{$Pcr->RequestDate}}" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputPassword">Result Date</label>
                    <input type="text" class="form-control" value="{{$Pcr->ResultDate}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <h5 class="company">بدعم من <a href="https://www.technnovera.com/">شركة عصر الإبتكار التقني </a> </h5>
    </div>
    </div>
     
         

   <!-- -->   <!--  -->  <!-- -->  <!--  -->  <!-- -->  <!--  --> <!-- --> <!--  --> <!-- --><!--  -->

      <script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="{{asset('/')}}js/main.js"></script>
    <script src="{{asset('/')}}js/bootstrap.min.js"></script>
  
</body>


</html>