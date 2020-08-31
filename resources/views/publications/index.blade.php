@extends('publications.layout')

@section('content')

<script>

function create(){
    ("{{ route('publications.create') }}").show();
  //  window.show ("{{ route('publications.create') }}",'_self',true);
}
</script>
<div class="row" style="margin-top:40%;width:30%;margin-left:50%;border-radius:12px;background-color:rgb(36,37,38);height:80px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <img class="img-responsive img-circle" style="margin-top:15px" src="/storage/app/avatars/'.$this->id.'/'.$this->avatar" alt="Pdp">
            
            </div>
            <div class="pull-right">
                <a onclick="create()" class="btn" style="background-color:rgb(58,59,60);margin-right:50px;color:white;margin-top:13px;width:180px;border-radius:18px"> What's in your mind ?</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    
     

   
     
       
 @endsection