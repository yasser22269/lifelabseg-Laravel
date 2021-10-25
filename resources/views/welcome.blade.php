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

<body  class="form-signin-body">
   <div class="container">
    @include('Admin.layouts.alerts.alerts')

   <form class="form-signin" action="{{ route('admin.post.login') }}" method="POST">
    @csrf
       <div class="text-center mb-4">
         <img class="mb-4" src="images/logo.png" alt=""  width="200" height="240">
       </div>

       <div class="form-label-group">
         <label for="inputEmail">اسم المستخدم</label>
         <input type="email" id="inputEmail"name="email" class="form-control"
          placeholder="اسم المستخدم" required>
       </div>
       @error('email')
                 <span class="text-danger">{{$message}}</span>
        @enderror
       <div class="form-label-group">
         <label for="inputPassword">كلمة المرور</label>
         <input type="password" id="inputPassword" name="password" class="form-control"
          placeholder="كلمة المرور" required>
       </div>
       @error('Password')
       <span class="text-danger">{{$message}}</span>
        @enderror
       <br>
       <button class="btn btn-lg btn-primary btn-block" type="submit">تسجيل الدخول</button>
     </form>

   </div>



   <!-- -->   <!--  -->  <!-- -->  <!--  -->  <!-- -->  <!--  --> <!-- --> <!--  --> <!-- --><!--  -->

      <script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="{{asset('/')}}js/main.js"></script>
    <script src="{{asset('/')}}js/bootstrap.min.js"></script>

</body>


</html>
