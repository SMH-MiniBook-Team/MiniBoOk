
@include('layouts.header')
<!-- Page Wrapper -->
<!-- Content Wrapper -->
@include('layouts.sideBar')
@include('layouts.topBar')

<style>
#middlebox{ 
                float:left; 
                margin-left:21%; 
                /*background:white; */
                width:50%; 
                height:90%;
                margin-top:-2%; 
                margin-left:-5px;
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
              height:auto;
            }
            #middlebox .publication .react{
              margin-top:-10px;
              height:auto;
            }
            #no-bullets {
    list-style-type: none;
    margin-top:25px;
} 

</style>
@section('extra-js')
<script>
    function toggleReplyComment(id)
    {
        let element = document.grtElementByid('replyComment-' + id); //au niveau de JS on utilise  + pour concatiner
        element.classList.toggle('d-none'); // quand on clic sur button;si le contenue exist on le retire si n'esiste pas on l'affiche
    }
</script>
@endsection
<div class="container">

<div id="middlebox">
<article class="publication" id="publi">
      <span  class="mr-2 d-none d-lg-inline text-black-600 small" style="margin-left:2%;margin-top:1%;  font-weight:bold; color:black">
          {{ $publication->user->name }} {{$publication->user->last_name }} 
          <a href="#" style="margin-top:7px;margin-right:5%;font-size:10px;color:black;">
     
          {{ $publication->created_at}}
      
      </a>
      </span>
      <span style="float:left;margin-top:1%;margin-left:2%;">
      <img style="margin-right: 5px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .$publication->user->avatar )}}" width="55" height="55" alt="avatar"
     >
 
      </span>
                   <!-- Plus Item - Plus -->
      <li id="no-bullets">
        <a href="#" id="PlusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:12px;margin-top: -10px;">
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
           
            @if($publication->image)
              <img src="{{ asset('uploads/postimage/' . $publication->image) }}" width="490px;" height="490px;" alt="postImage">
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
                     {{ $publication->comments->count() }} Comments
            <i class="fa fa-share" aria-hidden="true"
                  style="font-size: 8px; margin-left:4px;"></i>
                     2 Shares
          </div>
         <hr class="sidebar-divider">
  <div class="react">
                  
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="width:18%;margin-top:-30px;margin-right:405px;">
                <i class="fa fa-thumbs-up" aria-hidden="true"
                    style="font-size: 13px;"></i>
                       Like
            </a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#" style="width:28%;margin-top:-30px;margin-right:171px;">
                <i class="fa fa-comment" aria-hidden="true"
                    style="font-size: 13px;"></i>
                       Comment
            </a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sharemodal" style="width:18%;margin-top:-30px;margin-left:3px;">
                <i class="fa fa-share" aria-hidden="true"
                    style="font-size: 13px;"></i>
                       Share
            </a>





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
                            <form  action="{{ route('post.share',$publication->id) }}" method="POST" >
                            <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn" style="
                                    background-color: green;
                                    color:white;
                                    ">
                              Share Now</button>
                              @csrf
                          
                              </div>
                              
                            </form>
                          
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--END MODAL SHARE -->

</div>
            <br><br>            <!-- COncerning Commentaires -->
    <div>

<div class="commentaires" style="height:auto;background-color:white;width:100%;margin-bottom:10px;">
 
 <!-- Si un comment st vide : -->

 @if (($publication->comments->count() == 0))
 <a class="dropdown-item text-center small text-gray-500" href="#" style="margin-top:5px;margin-bottom:3px;">No Comment for this post, Be The first one ! </a>
 @else 

 @foreach($publication->comments as $comment)
     

     <img style="margin-left: 9px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .$comment->user->avatar )}}" width="55" height="55" alt="avatar">         
     <div style="
 background-color:#f1f5f0;
 boorder:none !important;
 border-radius:12px;
 width: fit-content;

 box-sizing: inherit;
 margin-top: -55px;
 margin-bottom: 40px;
 margin-left: 70px;">
<strong style="margin-left:7px;margin-top:-50px; width: fit-content;font-size:12px;"> {{ $comment->user->name }} {{ $comment->user->last_name }} &nbsp;&nbsp; </strong>
  <p style="margin-left: 9px;"> {{ $comment->body }}</p>
  </div>
  <div style="margin-top:-10px;padding-bottom: 20px;">
  <a href="#" style="margin-right: 420px;font-size: 12px;"> Like . </a> 
  @if ($comment->comments->count() == 0)
 <a href="#" style="margin-right: 380px;font-size: 12px;" onclick="toggleReplyComment({{ $comment->id }})"> Reply .</a> 
 <a href="#" style="margin-right: 285px;font-size: 12px;" > {{ $comment->created_at->diffForHumans() }}</a>

  @else
<a href="#" style="margin-right: 300px;font-size: 12px;" onclick="toggleReplyComment({{ $comment->id }})"> Reply (   + {{ $comment->comments->count() }} Replies  ) .</a> 
<a href="#" style="margin-right: 205px;font-size: 12px;" > {{ $comment->created_at->diffForHumans() }}</a>

@endif
  <div id="reply" style="margin-left:45px;" > 
  @foreach($comment->comments as $Commentreply)

<img style="margin-left: 9px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .$Commentreply->user->avatar )}}" width="55" height="55" alt="avatar">         
    <div style="
background-color:#f1f5f0;
boorder:none !important;
border-radius:12px;
width: fit-content;

box-sizing: inherit;
margin-top: -55px;
margin-bottom: 40px;
margin-left: 70px;">
<strong style="margin-left:7px;margin-top:-50px; width: fit-content;font-size:12px;"> {{ $Commentreply->user->name }} {{ $Commentreply->user->last_name }} &nbsp;&nbsp; </strong>
<p style="margin-left: 9px;"> {{ $Commentreply->body }}</p>
</div>
<div style="margin-top:-10px;padding-bottom: 20px;">
<a href="#" style="margin-right: 360px;font-size: 12px;"> Like . </a> 
<a href="#" style="margin-right: 320px;font-size: 12px;" > Reply . </a> 
<a href="#" style="margin-right: 230px;font-size: 12px;" > {{ $Commentreply->created_at->diffForHumans() }}</a>

@endforeach

  
     <form id="form"  action="{{ route('comments.storeReply', $comment) }}" method="POST" >
                        @csrf
                        <span style="
                    background-color: white;
                    ">
                            <textarea id="textareaId" 
                            style="
         
                       
         background-color: white;
         margin-top:0%;
         width: 66%;
         float: inherit;
         margin-left: 13px;
         /* margin-right: 2px; */
         border-radius:18px;
         padding-top:5px;
         /* margin-left: 90px; */
         padding:left:15px;
         overflow: hidden;
         overflow-wrap: break-word;
         
                        " name="replyComment" placeholder="Reply to this comment..."></textarea>
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
                        <img style="margin-left: 10px;margin-top:-2px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .Auth::user()->avatar )}}" width="55" height="55"  alt="avatar">

                        </span>
                        
  </form>      


</div>
</div>
  
                
       




  @endforeach
  
 @endif
 


<div style="background-color:white;height: 55%;">
<form id="form"  action="{{ route('comments.store' , $publication) }}" method="POST" style="height:140%; background-color:white;">
     @csrf
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
           
           " name="body" placeholder="Write a comment..."></textarea>
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
     <img style="margin-left: -36px;margin-top:-10px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .Auth::user()->avatar )}}" width="55" height="55"  alt="avatar">

     </span>
    
</form>      
</div>  
</div>

</div>
       

</article>
                            </div>


                            </div>