



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sign Up - MiniBoOk</title>

    <!-- Icons font CSS-->
    <link href="colorlib-regform-4/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="colorlib-regform-4/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="colorlib-regform-4/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="colorlib-regform-4/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="colorlib-regform-4/css/main.css" rel="stylesheet" media="all">








    
  
<!-- Bootstrap -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>






    <style>
@import url(https://fonts.googleapis.com/css?family=Indie+Flower);
.navbar {
                 
                 background: rgb(13,26,70);
                 opacity: 0.8;
                 font-size: 23px;
                
             }
             .connect a:link, a:visited {
            font-family: 'Quicksand', sans-serif;
            background: darkslateblue;
            border-radius: 3px;
            color: white;
            padding: 8px 10px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: -37px;
            width:200px;
            }
          
            .connect{
                float :right;
                
            }
            .connect a:hover{
                background: green;

            }
    </style>
</head>

<body>



            <!--Naviguation (for small views) -->
            <nav class="navbar navbar-inverse navbar-fixed-top" style="font-family: 'Indie Flower'; font-size: 30px;">
                <div class="container-fluid">
                    <!-- Breand and toggle get grouped for better mobile display-->
                         <div class="navbar-header page-scroll">
                              <button type="button" class="navbar-toggle" data-toggle="collapse"
                               data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle naviguation</span>
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span>   
                               </button>
                               <a class="navbar-brand" href="http://127.0.0.1:8000" style="font-size:30px;"> MiniBoOk </a>
                         </div>

                         <!-- collect the nav links,forms,and other content for toggling-->

                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                             @if (Route::has('login'))
                            <ul class="nav navbar-nav navbar-right">
                            @auth
                                <li class="hidden">
                                    <a href="{{ url('/home') }}"> MiniBoOk</a>
                                </li>
                            @else    

                                <li class="page-scroll">
                                    <a href="{{ route('login') }}">Login</a>
                                </li>   
                                @if (Route::has('register'))
                                <li class="page-scroll">
                                    <a href="{{ route('register') }}">Register</a>
                                </li>     
                                @endif
                            @endauth    
                         </ul>
                    @endif
                   </div> 
                   <!-- /.navbar-collapse--> 
               </div>
               <!-- /.container-fluid -->
            </nav> 
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body" style="
                    background-color: lavenderblush;
                ">
                    <h2 class="title" style="color:darkblue; font-family: 'Dancing Script', cursive; font-size:35px">Registration Form</h2>
                   
                    <form method="POST" action="{{ route('signup') }}">
                    @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">first name</label>
                                    <input class="input--style-4  @error('name') is-invalid @enderror" type="text" name="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">last name</label>
                                    <input class="input--style-4 @error('last_name') is-invalid @enderror" type="text" name="last_name">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">Birth Date</label>
                                    <div class="input-group-icon">
                                        <input  id="birth_date" type="date" class="input--style-4 js-datepicker @error('birth_date') is-invalid @enderror" name="birth_date">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45 @error('gender') is-invalid @enderror">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container @error('gender') is-invalid @enderror">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">Email</label>
                                    <input class="input--style-4 @error('email') is-invalid @enderror" type="email" name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>


                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">Password</label>
                                    <input class="input--style-4  @error('password') is-invalid @enderror " type="password" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">Confirm Password</label>
                                    <input class="input--style-4  @error('password') is-invalid @enderror " type="password" name="password_confirmation" required autocomplete="new-password">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">Phone Number</label>
                                    <input class="input--style-4  @error('phone') is-invalid @enderror" type="text" name="phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:darkblue; opacity:0.7; font-size:24px;font-family: 'Dancing Script', cursive;">Country</label>
                                    <input class="input--style-4 @error('country') is-invalid @enderror" type="text" name="country">
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 " type="submit" style="background-color:green;">Create Account</button>
                        </div>
                        <div class="connect">
                        <a class="connect" href="{{ route('login') }}" >Connect</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>
<!-- end document-->