

@include('layouts.header')
<!-- Page Wrapper -->
<!-- Content Wrapper -->
@include('layouts.sideBar')
@include('layouts.topBar')


<div class="row">
<div class="col-lg-6">
<h3> Your Friends </h3>

<!-- List of friends -->
    @if (!$friends->count()) 
    <p> You have no friends </p>
    @else
                @foreach ($friends as $user)
                @include('user.partials.userblock')
                @endforeach
    @endif
</div>
<div class="col-lg-6">
<h3> Your Friend requests </h3>
<!--List of friend requests -->
    @if (!$requests->count()) 
    <p> You have no friend requests </p>
    @else
                @foreach ($requests as $user)
                @include('user.partials.userblock')
                @endforeach
    @endif
</div>
</div>