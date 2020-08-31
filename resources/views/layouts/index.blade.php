

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HSM - MiniBook</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="{{ asset('src/js/app.js') }}"></script>

  <style>
   #leftbox { 
                float:left;  
                background:white; 
                border : 1px solid #B8B8B8;
                border-radius:3px;
                box-shadow:0.1px 0.1px 2px 1px #ccc;
                width:19%; 
                height:250px; 
                margin-top:-95%; 
                
            } 
 #leftbox2 { 
                 
                background:white; 
                border : 1px solid #B8B8B8;
                border-radius:3px;
                box-shadow:0.1px 0.1px 2px 1px #ccc;
                width:100%; 
                height:250px; 
                color:black;
                text-align:center;
                margin-top:125%; 
                
            } 
            #middlebox{ 
                float:left; 
                margin-left:21%; 
                /*background:white; */
                width:50%; 
                height:90%;
                margin-top:-95%; 
            } 
           
            #middlebox .statut{
              border-radius:25px;
              background-color:whitesmoke;
              width:90%;
              
              margin-top:-49px;
              margin-left:58px;
              padding-left:13px;
              padding-top:13px;
              padding-bottom:13px;
              padding-right:13px;

            }
            #middlebox .statutMaker{
              width:100%;
              height:130px;
              background-color:white;
            }
            #middlebox .publication{
              margin-top:7%;
              width:100%;
              /*height:350px;*/
              height:auto;
              background-color:white;
            }

            #middlebox .publication a{
              float:right;
              margin-top:-30px;
            }

            #middlebox .publication .contenu{
              margin-top:34px;
              font-size:18px;
              font-weight:bold;
              color:black;
              height:100%;
            }
            
            #rightbox{ 
                float:right; 
                background:white; 
                border : 1px solid #B8B8B8;
                border-radius:3px;
                box-shadow:0.1px 0.1px 2px 1px #ccc;
                width:25%; 
                height:250px; 
                margin-top:-95%; 
            }
            #no-bullets {
    list-style-type: none;
    margin-top:25px;
} 
.image-edit>input {
  display: none;
  
}

.image-edit{
  cursor:pointer;
}
.video-edit>input {
  display: none;
  
}

.video-edit{
  cursor:pointer;
}

.commentaires textarea{
  outline: none;
  padding-left:15px;

}
.commentaire {
  background-color:white;
  height: 500px;
}

#submitbtn{display:none;}
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
@include('layouts.sideBar')

    <!-- Content Wrapper -->
   @include('layouts.topBar')
        <!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
       

          <!-- Content Row -->
          <div id="row">

          <div id="leftbox">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="font-size: 20px; font-weight:bold; color:#b2c7aa;">
          <i class="fas fa-warehouse" aria-hidden="true" style="font-size: 20px; color:#b2c7aa;"></i>

          Stories
          </a>
          <hr class="sidebar-divider">
              <h4 style="font-size: 16px; color:#b2c7aa;margin-left: 39px;margin-top: 40%;"> Coming Soon...!</h4>
          <div id="leftbox2">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="font-size: 20px; font-weight:bold; color:#b2c7aa; margin-left: -10px;">
          <i class="fas fa-images" aria-hidden="true" style="font-size: 20px;color:#b2c7aa;"></i>

          Feature Photos
          </a>
          <hr class="sidebar-divider">
          <h4 style="font-size: 16px; color:#b2c7aa;margin-left: 9px;margin-top: 40%;"> Coming Soon...!</h4>

          </div>

          
          </div>

         

          <div id="middlebox">
     <div class="statutMaker">   
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createModal">
          @if(file_exists(storage_path('app/public/' . config('chatify.user_avatar.folder') . '/' . Auth::user()->avatar)))  
              <img style="margin-left: -12px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .Auth::user()->avatar )}}" width="55" height="55"  alt="avatar">
              @else
              <img style="margin-right: 5px;" class="img-profile rounded-circle" src="{{ asset('/uploads/avatars/avatar.png') }}"width="50" alt="avatar"style="width:32px; height:32px; position:absolute; top:35px; margin-top:10px; left:20px; border-radius:50%">
               @endif 
          <div class="statut">
            What's In Your Mind ?.
            
          </div>
          </a>
          <hr class="sidebar-divider">
          <div class="multimedia">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="float:left;width:48%;margin-top:-12px;margin-left:3px;">
              <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 20px;"></i>

              Add a Photo
              </a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="float:right;width:48%;margin-top:-31px;">
              <i class="fa fa-video-camera" aria-hidden="true" style="font-size: 20px;"></i>

               Add a Video
              </a>
              
          </div>
     </div>  

     @if ($message = Session::get('success'))
        <div class="alert alert-success" id="msg">
        
        <button class="close" type="button"  onclick="hidemsg()">
            <span aria-hidden="true">×</span>
          </button>
            <p>{{ $message }}</p>

        </div>
    <script>
        function hidemsg(){
          document.getElementById('msg').style.display="none";
        }
    </script>
    @endif

    @if(count($errors) > 0)
 

 <div class="alert alert-danger" id="error">
     
     <button class="close" type="button"  onclick="hiderror()">
         <span aria-hidden="true">×</span>
       </button>
       <ul>
             @foreach($errors->all() as $error)
            
                 <li>{{$error}}</li>
           
             @endforeach
         </ul>

     </div>
 <script>
     function hiderror(){
       document.getElementById('error').style.display="none";
     }
 </script>

@endif   
<div class="allPub">

         <!-- foreach (Auth::user()->contents as $publication)-->
  @foreach($publications as $publication)

  <article class="publication" id="publi">
      <span  class="mr-2 d-none d-lg-inline text-black-600 small" style="margin-left:2%;margin-top:1%;  font-weight:bold; color:black">
          {{ $publication->user->name }} {{$publication->user->last_name }} 
          <a href="{{ route('publications.show' , $publication) }}" style="margin-top:7px;margin-right:5%;font-size:10px;color:black;">
     
          {{ $publication->created_at}}
      
      </a>
      </span>
      <span style="float:left;margin-top:1%;margin-left:2%;">
      @if(file_exists(storage_path('app/public/' . config('chatify.user_avatar.folder') . '/' . Auth::user()->avatar)))  
              <img style="margin-left: -12px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .$publication->user->avatar )}}" width="55" height="55"  alt="avatar">
              @else
              <img style="margin-right: 5px;" class="img-profile rounded-circle" src="{{ asset('/uploads/avatars/avatar.png') }}"width="50" alt="avatar"style="width:32px; height:32px; position:absolute; top:35px; margin-top:10px; left:20px; border-radius:50%">
               @endif 
      
 
      </span>
                   <!-- Plus Item - Plus -->
      <li id="no-bullets">
        <a href="#" id="PlusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:12px;">
            <i class="fa fa-circle" aria-hidden="true" style="font-size:7px; color:gray">
              <i class="fa fa-circle" aria-hidden="true"style="font-size:7px; color:grayy">
                  <i class="fa fa-circle" aria-hidden="true"style="font-size:7px;color:gray"></i>
              </i>
            </i>
          
        </a>
        <!-- Dropdown - Plus -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="PlusDropdown" id="editing">
                <br>
                @if( Auth::user() != $publication->user)
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="float:left;width:95%;height:10%;margin-top:-12px;margin-left:3px;padding-top:3px;padding-bottom:3px;">
                <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size: 13px;"></i>
                  Report the post
                </a><br>
                @endif
                @if( Auth::user() == $publication->user)

                <a class="dropdown-item" id="change" href="javascript:;" data-toggle="modal" data-mycontent="{{$publication->content}}" data-myimage="{{asset('uploads/postimage/' . $publication->image)}}" data-myvideo="{{asset('uploads/postvideos/' . $publication->video) }}" onclick="editData({{$publication->id}})"  data-target="#editmodal" style="float:left;width:95%;margin-top:-12px;margin-left:3px;">
                <i class="fa fa-pencil" aria-hidden="true" style="font-size: 13px;"></i>
                  Edit the post 
                </a><br>
                <a class="dropdown-item" href="javascript:;" data-toggle="modal" onclick="deleteData({{$publication->id}})" data-target="#deletemodal" style="float:left;width:95%;margin-top:-12px;margin-left:3px;">
              
                <i class="fa fa-trash" aria-hidden="true" style="font-size: 13px;"></i>
                    Delete the post
                </a>
                @endif
                
        </div>
        
         
    </li>

          
         <p class="contenu" style="margin-left:3%; margin-top:10%;" id="ctn"> 
            {{$publication->content}}
            <br><br>
            @if($publication->image)
              <img src="{{ asset('uploads/postimage/' . $publication->image) }}" width="490px;" height="490px;" alt="postImage">
                       <br><br>
                            
                       


            @endif

            @if($publication->video)
            <video src="{{ asset('uploads/postvideos/' . $publication->video) }}"  controls width="490px;" height="490px;"alt="postVideo" ></video>

            @endif
         </p>
         <div style="font-size:12px;">
              <i class="fa fa-thumbs-up" aria-hidden="true"
                 style="font-size: 8px; margin-left:37px;"></i>
                    3 Likes
             <i class="fa fa-comment" aria-hidden="true"
                 style="font-size: 8px; margin-left:263px;"></i>
                5 Comments

            <i class="fa fa-share" aria-hidden="true"
                  style="font-size: 8px; margin-left:4px;"></i>
                     2 Shares
          </div>
         <hr class="sidebar-divider">
  <div class="react" style="padding-bottom:10px;">
                  
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="width:18%; margin-right:80%;margin-top:-3.5%;">
                <i class="fa fa-thumbs-up" aria-hidden="true"
                    style="font-size: 13px;"></i>
                       Like
            </a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="width:28%;margin-top:-6%;margin-right:36%;">
                <i class="fa fa-comment" aria-hidden="true"
                    style="font-size: 13px;"></i>
                       Comment
            </a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sharemodal" onclick="ShareData({{$publication->id}})" style="width:18%;margin-top:-6%;margin-left:3%">
                <i class="fa fa-share" aria-hidden="true"
                    style="font-size: 13px;"></i>
                       Share
            </a>

        <br>
            <hr class="sidebar-divider" style="
                  margin-top: -2px;
                  padding-top: 13px;
              ">



                                              <!-- Modal For Deleting Post-->

                                              <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this Post ?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                                </button>
                                              </div>
                                            <div class="modal-body">
                                              <form id="deleteForm"  action="#" method="POST" >
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}
                                              <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <button type=submit class="btn" name="" data-dismiss="modal" onclick="formSubmit()" style="
                                                      background-color: red;
                                                      color:white;
                                                      "
                                                      >
                                                Delete </button>
                                                </div>
                                                
                                              </form>
                                              <script type=text/javascript>
                                          function deleteData(id)
                                          {
                                              var id = id;
                                              var url = '{{ route("publications.destroy", ":id") }}';
                                              url = url.replace(':id', id);
                                              $("#deleteForm").attr('action', url);
                                          }

                                          function formSubmit()
                                          {
                                              $("#deleteForm").submit();
                                          }
                                        </script>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
           <!--END MODEL ====================================================-->



                                   
                                    <!-- Modal For Editing Post-->



                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit Your Post.</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                  <div class="modal-body">
                                    <form  id="editForm"action="#" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                  
                                    <div class="form-gourp">
                                      <label for="publication-content"> Edit The Post</label>
                                      <textarea class="form-control" name="content" id="publication-content" rows="5"></textarea>
                                      <center>
                                      @if($publication->image)
                                      <br><br><img id="editimg" src="#" alt="your image" width="400px;" height="400px;"/>
                                      
                                    </div>
                                  
                                    <div class="image-edit">
                                        <center>
                                          <br><br><label for="edit-file-input" style="cursor:pointer;border:1px solid green;background-color:#b2c7aa;color:white;border-radius:12px;padding:13px;float:center;"> Change Picture
                                          <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 20px; color: green;cursor:pointer;"></i>
                                          </label>
                                          </center>
                                          <input id="edit-file-input" type="file" name="image" onchange="editURL(this);">
                                          
                                      </div>
                                        </center>
                                        @endif

                                        @if($publication->video)
                                        <br><br> <video id="editvideo" src="#"  controls  width="400px;" height="400px;" ></video>
                                        </div>
                                        <div class="video-edit">
                                            <center>
                                              <br><br><label for="edit-video-input" style="cursor:pointer;border:1px solid green;background-color:#b2c7aa;color:white;border-radius:12px;padding:13px;float:center;"> Change Video
                                              <i class="fa fa-video-camera" aria-hidden="true" style="font-size: 27px; color:rgb(247,185,40); cursor:pointer;"></i>
                                          </label>
                                            </center>
                                            <input id="edit-video-input" type="file" name="video"  onchange="editVURL(this);">
                                        </div>
                                            <br>
                                        @endif
                                        </center>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <button type=submit class="btn" name="" data-dismiss="modal" onclick="formSubmiit()" style="
                                            background-color: green;
                                            color:white;
                                            ">
                                      Save changes</button>
                                    
                                      </div>


                                      <script>
                                            function editVURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#editvideo')
                                                    .attr('src', e.target.result)
                                                    .width(450)
                                                    .height(450)
                                                    
                                            };

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                        </script>




                                      <script>
                                            function editURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#editimg')
                                                    .attr('src', e.target.result)
                                                    .width(450)
                                                    .height(450)
                                                    
                                            };

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                        </script>
                                    </form>
                                    <script type=text/javascript>
                                function editData(id)
                                {
                                    
                                    var id = id;
                                    var url = '{{ route("publications.update", ":id") }}';
                                    
                                    url = url.replace(':id', id);
                                    $("#editForm").attr('action', url);
                                    $('#editmodal').on('show.bs.modal',function(event){
                                  
                                      var button = $(event.relatedTarget);
                                      var myContent = button.data('mycontent');
                                      var myImage = button.data('myimage');
                                      var myVideo = button.data('myvideo');
                                      var modal = $(this)

                                      modal.find('.modal-body #publication-content').val(myContent);
                                      modal.find('.modal-body #editimg').attr('src',myImage);
                                      modal.find('.modal-body #editvideo').attr('src',myVideo);

                                });
                                }

                              
                                function formSubmiit()
                                {
                                    $("#editForm").submit();
                                }


                                
                              </script>
                                  </div>
                                </div>
                              </div>
                            </div>



                            <!--ENDMODAL+++++++++++++++++++++++++++-->



                          <!-- Share Modal -->


                    <div class="modal fade" id="sharemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Do you want to share this post in your profile ?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                          <div class="modal-body">
                            <form  id="shareForm" action="#" method="POST" >

                            <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn" style="
                                    background-color: green;
                                    color:white;
                                    " data-dismiss="modal" onclick="formShareSubmit()">
                              Share Now</button>
                              @csrf
                          
                              </div>
                              
                            </form>
                          
                          <script type=text/javascript>

                            function ShareData(id)
                            {
                              var id = id;
                              var url = '{{ route("post.share", ":id") }}';
                              url = url.replace(':id',id);
                              $("#shareForm").attr('action',url);
                            }

                            function formShareSubmit(){
                              $("#shareForm").submit();
                            }
                          </script>


                          </div>
                        </div>
                      </div>
                    </div>

                    <!--END MODAL SHARE -->

</div>

      
                                <!-- COncerning Commentaires -->


<div class="commentaires" style="height:140px;background-color:white;width:100%;margin-bottom:10px;">
     
  <div style="background-color:white;height: 55%;">
      <form id="form"  action="#" method="POST" style="height:140%; background-color:white;">
            
            <span style="
      background-color: white;
      ">
                  <textarea id="textareaId" style="
                
                background-color: white;
                  margin-top:0%;
                  width: 76%;
                  float: inherit;
                  margin-right:8px;
                  border-radius:18px;
                  padding-top:5px;
                  margin-left: 10px;
                  padding:left:15px;
                  overflow: hidden;
                  overflow-wrap: break-word;
                  
                  " placeholder="Write a comment..."></textarea>
                  <button type=submit style="
                      border: none;
                      border-radius: 10px;
                      background-color: #b2c7aa;
                      float: right;
                      margin-top: 8px;
                      margin-right: 7px;
                      padding: 8px;
                  "> <i class="fas fa-comment" style="color:white;"></i> </button>
            </span>
            <span style="float:left;">
            @if(file_exists(storage_path('app/public/' . config('chatify.user_avatar.folder') . '/' . Auth::user()->avatar)))  
              <img style="margin-left: -12px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .Auth::user()->avatar )}}" width="55" height="55"  alt="avatar">
              @else
              <img style="margin-right: 5px;" class="img-profile rounded-circle" src="{{ asset('/uploads/avatars/avatar.png') }}"width="50" alt="avatar"style="width:32px; height:32px; position:absolute; top:35px; margin-top:10px; left:20px; border-radius:50%">
               @endif 

            </span>
           
      </form>      
  </div>  
</div>


                    <!-- ======================================================== -->


  </article>
  <br>
  @endforeach
  
             </div>
            <!--hna l endforeach-->

</div>


          <div id="rightbox">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="font-size: 20px; font-weight:bold; color:#b2c7aa;">
          <i class="fas fa-users" style="font-size:20px;color :#b2c7aa;"></i>
            Online Friends
          </a>
         
          <hr class="sidebar-divider">
          <h4 style="font-size: 16px; color:#b2c7aa;margin-left: 69px;margin-top: 30%;"> Coming Soon...!</h4>

          </div>
         
          
        

          @yield('content')
      
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer "style="margin-top:100%;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto" style="float:center;">
           
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 @include('layouts.logout')
 @include('publications.create')



  <!-- Bootstrap core JavaScript-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>



</body>

</html>
