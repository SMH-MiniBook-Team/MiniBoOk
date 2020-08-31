
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>MiniBoOk</title>

       
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Pangolin' rel='stylesheet'>

        <!-- Bootstrap -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
      
        <!-- jQuery -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        
        

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <!-- VUE JS-->
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <!-- Font awesome -->
        <link 
            href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
            rel="stylesheet"  type='text/css'> 
            

         <!--JAVASCRIPT CODE HERE-->           
      


                <script type="text/javascript">
                        function show_sidebar()
                        {
                        document.getElementById('sidebar').style.visibility="visible";
                        }
                        
                        function hide_sidebar()
                        {
                        document.getElementById('sidebar').style.visibility="hidden";
                        }
                        </script>
     <!--   ============================================== -->



<style>
      
      @import url(https://fonts.googleapis.com/css?family=Indie+Flower);
    
    body{
                background-color: rgb(106, 180, 181);
               /* background-image: url("img/fond_ecran3.jpg");*/
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.8;
                font-family: 'Indie Flower';
                
                           
            }
    .container {
                width: 520px;
                height: 550px;
                background-color:white;
                background: url("img/note.png");
                background-repeat: no-repeat;
                position: relative;
                margin-top: 350px;
                margin-right : 570px;
                margin-bottom: 100px;
                opacity: 1;
                font-family: 'Indie Flower';
               
                transition: "box-shadow" 0.2s ease-in-out 0s;
               
                
              
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                perspective: 1000px;
              
            }    
    .container:hover{
                box-shadow: 10px 10px;
            }

         
    .cover {
                width: 500px;
                height: 100%;
            
                position: absolute;
                left: 40px;
                background-color: white;
                background-image:  url("img/selk.png");
                background-repeat: no-repeat;
                transform: rotateY(0deg);
                transform-style: preserve-3d;
                transform-origin: left;
                transition: all .9s ease-in-out;
                opacity: 1;
                border-top-right-radius: 30px;
                border-bottom-right-radius: 30px;
                
               
                

            }
    .container:hover .cover{
                transform: rotateY(-180deg);
               
            }

         
           

    figure {
                margin: 0;
                display : block;
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
                opacity: 1;
                animation-duration: 5s;
                
                }

    figure.front {
                background: url("img/image.jpg");
                opacity: 1;
                
                

            }

    figure.back {
        background: url("img/note2.png");
                background-repeat: no-repeat;
                width:511px;
                transform: rotateY(180deg);
              
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
                box-shadow: -10px 10px ;

               
            }
     .navbar {
                 
                 background: rgb(13,26,70);
                 opacity: 0.8;
                 font-size: 23px;
                
             }

     .login-box{
                 
                 width: 280px;
                 position: absolute;
                 transition: all .2s ease-in;
                 top: 50%;
                 left: 50%;
                 transform: translate(-50%,-50%);
                 color: blue;
                 transition-delay: 0.35s;
          }

      input#email{
                 width: 200%;
                 margin-left: 13px; 
                 border-bottom:1px solid black;
                 border-top: none;
                 border-left: none;
                 border-right: none;
                 outline: none;
                 background: none;
                 color: blue;

             }

     
       input#password{

                 margin-left: 13px;
                 border-bottom:1px solid black;
                 border-top: none;
                 border-left: none;
                 border-right: none;
                 outline: none;
                 background: none;
                 color: blue;
                
           
             }
            .btn{
                width: 100%;
                background: none;
                border: 2px solid #87CEEB;
                color: blue;
                padding: 5px;
                font-size: 18px;
                cursor: pointer;
                margin-bottom: 12px;
                margin-left: 22px;
            }


            
    </style>
   
    </head>

    <body id='page-top' class='index'>

            <!--Naviguation (for small views) -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
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
                               <a class="navbar-brand" href="#page-top" style="font-size:23px;"> MiniBoOk </a>
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

            <div class="container" style="border:1px solid #cecece; border-radius: 30px"  onMouseOver="show_sidebar()" onMouseOut="hide_sidebar()">
                <div class="cover" >
                    <figure class="front" style="border:1px solid #cecece;font-family:'Indie Flower'; border-top-right-radius: 30px; border-bottom-right-radius: 30px" >
                        <div>
                            <h1> &nbsp &nbsp Welcome To MiniBoOk</h1>
                            
                        </div>
                    
                    </figure>
                    <!-- container page (lisser) => -->
                    <figure class="back" >
                    <div class="paperback">
                                <div class="linesback">
                                  
                                        </div>
                                        </div>
                        <h1 style="text-align:center; width:70%;margin-top:150px;margin-left:40px;font-size:50px;transform: rotate(-20deg); color:blue; font-style: italic;">  "Don't use social media to impress people; use it to impact people." </h1>
                        <p style="text-align:center; width:70%;margin-top:10px;margin-left:150px;font-size:25px;transform: rotate(-20deg); color:blue;">-- DaveWillis --</p>
                    </figure>

                    
                </div>
                      <!-- container page (limen) => login -->
                <div id="sidebar" style="visibility: hidden">
                                           
                       <div class="login-box">
                          <h1 class="log">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Login&nbsp; &nbsp;</h1>
   
   
   
                          <form method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}
                        
                           <div class="form-group row">
                           
   
                               <label for="email" class="col-md-4 col-form-label text-md-right" style="margin-left:6%;font-size: 18px;margin-bottom: -7px;">E-Mail :</label>
                               <label for="email" class="col-md-4 col-form-label text-md-right" style="margin-left:6%;font-size: 18px;margin-bottom: -7px;"><br>
                               </label>
                               <div class="col-md-6">
                               <input id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email" autofocus="">
                               <span style="font-weight: 700; background-color: initial;"><br>
                               </span></div>
                               <div class="col-md-6">
                               <span style="font-weight: 700; background-color: initial;"><br>
                               </span></div>
                               <div class="col-md-6"><span style="font-weight: 700; background-color: initial;"><br>
                               </span>
                               </div>
                               <div class="col-md-6">
                               <span style="font-weight: 700; background-color: initial;">
                               <br></span></div><div class="col-md-6">
                               <span style="font-weight: 700; background-color: initial;">
                               &nbsp; &nbsp;Password :</span></div></div><div class="form-group row">
   
                               <div class="col-md-6">
                                   <input id="password" type="password" class="form-control " name="password" required="" autocomplete="current-password">
   
                                                               </div>
                           </div>
   
                           <div class="form-group row">
                               <div class="col-md-6 offset-md-4">
                                   <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember"><span style="font-size: 18px;margin-left:5px;"><b>Remember Me</b></span></div>
                               </div>
                           </div>
   
                           <div class="form-group row mb-0">
                               <div class="col-md-8 offset-md-4">
                                   <button type="submit" class="btn btn-primary">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Login&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</button>
                                   <a href="http://127.0.0.1:8000/password/reset" style="color:blue;font-size:15px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;Forgot Your Password?</a><br><br>
                                   
                                    <a href="http://127.0.0.1:8000/register" class="btn btn-primary">Sign Up</a>
                               </div>
                           </form>
                        </div>
                       
   
                   <h1>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; </h1>
   
                </div>
            
            <header>

            </header>                    
    </body>
</html>
