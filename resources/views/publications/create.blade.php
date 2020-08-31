<style>
.modal-footer .btn:hover{
  background-color: green;
        
}
.image-upload>input {
  display: none;
  
}

.image-upload{
  cursor:pointer;
}

.image-upload label i:hover{
  background-color:#b2c7aa;
  border-radius:50%;
  padding:7px;
}
.video-upload>input {
  display: none;
  
}

.video-upload{
  cursor:pointer;
}


.video-upload label i:hover{
  background-color:#f0e091;
  border-radius:50%;
  padding:7px;
}
</style>
 <!-- Create Post Modal-->
 <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Your Post</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <form  action="{{ route('publications.store') }}" method="POST" enctype="multipart/form-data" >
        <span  class="mr-2 d-none d-lg-inline text-gray-600 small" style="margin-left:10px;">
          {{ Auth::user()->name }} {{ Auth::user()->last_name }} </span>
            <span style="float:left;">
            @if(file_exists(storage_path('app/public/' . config('chatify.user_avatar.folder') . '/' . Auth::user()->avatar)))  
              <img style="margin-right: 5px; width:60px; height:60px" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .Auth::user()->avatar )}}" width="55" height="55"  alt="avatar">
              @else
              <img style="margin-right: 5px; width:60px; height:60px" class="img-profile rounded-circle" src="{{ asset('/uploads/avatars/avatar.png') }}"width="50" alt="avatar"style="width:32px; height:32px; position:absolute; top:35px; margin-top:10px; left:20px; border-radius:50%">
               @endif 

               </span>
               <br>
               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <textarea class="form-control" style="height:180px;margin-top:10%" name="content" placeholder="What's In Your Mind ?"></textarea>
               
                <img id="blah" src="#" alt="your image" style="visibility:hidden; margin-top:10px;"/>
             
                <video id="videoo" src="#"  controls style="visibility:hidden;" ></video>
              
            </div>
            <div style="border-radius:12px;border: 0.3px solid #B8B8B8;padding:13px;margin-top:-130px;padding-top:17px;">
             <h5 style="margin-left:1px; font-weight:bold;color:black; ">Add to your Post  </h5> 
              <!--FOR IMAAAGE +++++++++++++-->

             <div class="image-upload"style="margin-left:220px;margin-top:-34px;">
              <label for="file-input">
              <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 27px; color: green;cursor:pointer;"></i>
              </label>

              <input id="file-input" type="file" name="image" onchange="readURL(this);">
             </div>

            <!--=================================================-->


        <!--FOR VIDEEEEEEEEOOOOOO ++++++++++++++++++-->
             <div class="video-upload" style="margin-left:290px;margin-top:-35px;">
              <label for="video-input">
              <i class="fa fa-video-camera" aria-hidden="true" style="font-size: 27px; color:rgb(247,185,40); cursor:pointer;"></i>
                 </label>

              <input id="video-input" type="file" name="video" onchange="readVURL(this);">
             </div>
 <!--=================================================-->

      <!--FOR IMAAAGE +++++++++++++-->
            <script>
                function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(450)
                        .height(450)
                        .css("visibility", "visible");
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
            </script>

        <!--=================================================-->


        <!--FOR VIDEEEEEEEEOOOOOO ++++++++++++++++++-->
        <script>
                function readVURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#videoo')
                        .attr('src', e.target.result)
                        .width(450)
                        .height(450)
                        .css("visibility", "visible");
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
            </script>
<!--=================================================-->
             
            </div>
              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn" style="
                background-color: green;
                color:white;
                ">
          Publish</button>
          
     
          @csrf
          
      </form>
      
        </div>
      </div>
    </div>
  </div>
