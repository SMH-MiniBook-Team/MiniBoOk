
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars" style="color:#b2c7aa;"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" role="search" action="{{route('search.results')}}
">
      <div class="input-group">
        <input type="text" name="query" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn" type="submit"
           style="
           background-color:#b2c7aa;
           color:white;
           ">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown"
         role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false" style="color:#b2c7aa;">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn" type="button"style="background-color:#b2c7aa;">
                  <i class="fas fa-search fa-sm" style="background-color:#b2c7aa;color:white;"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <!-- Invit Item - Invits -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-friends" style="
            color:#b2c7aa;
          "></i>
        
          <!-- Counter - Invits -->
          <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Invits -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header" 
           style="
           background-color:#b2c7aa;
            color:white;
            border: 1px solid #b2c7aa;
          ">
           Invitations
          </h6>
        
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
              <div class="rounded-circle "
               style="
               margin-top : -15px;
               margin-left: 30px;
               ">
              <i class="fas fa-user-plus" 
              style="
              font-size:18px;
              margin-top : -13%;
               margin-left: -5px;
               color:#b2c7aa;"></i>
              </div>

            </div>
            <div class="font-weight-bold">
              <div class="text-truncate"style="font-size:12px;height:40px"><strong>EL AAKKOUCHI SALMA</strong>
               sent <br>you an invitation.</div>
              <div class="small text-gray-500">(3 ami(e)s en commun) · 58m</div>
            </div>
          </a>
          
          <div class="font-weight-bold">
          <button class="btn"
           style="
           background-color:#b2c7aa;;
           color:white;
           width:30%;
           font-size:bold;
           margin-top:5px;
           margin-left:51px"
           > Confirm </button>
          <button class="btn " 
          style="
          background-color:gray;
          width:30%;
          font-size:bold;
          color:white;
          margin-top:5px;
          margin-left: 9%; "
         > Reject </button>
          </div>
          <a class="dropdown-item text-center small text-gray-500" href="#">Show All Invitations.</a>
        </div>
      </li>

<!-- Nav Item - Messages -->
<li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"
           style="
            color:#b2c7aa;
          "></i>
          <!-- Counter - Messages -->
          <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header" 
          style="
           background-color:#b2c7aa;
            color:white;
            border: 1px solid #b2c7aa;
          ">
            Message Center
          </h6>
         
         {{-- Contact --}}
               <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);"></div>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
              <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
              <div class="small text-gray-500">Emily Fowler · 58m</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
              <div class="status-indicator"></div>
            </div>
            <div>
              <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
              <div class="small text-gray-500">Jae Chun · 1d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
              <div class="status-indicator bg-warning"></div>
            </div>
            <div>
              <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
              <div class="small text-gray-500">Morgan Alvarez · 2d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div>
              <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
              <div class="small text-gray-500">Chicken the Dog · 2w</div>
            </div>
          </a>
          <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
      </li>
      
     
      
      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"  style="
            color:#b2c7aa;
          "></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter">{{ auth()->user()->unreadNotifications->count() }}</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header" 
          style="
            background-color:#b2c7aa;
            color:white;
            border: 1px solid #b2c7aa;
  
          ">
           Notification
          </h6>
        
       
          @if (Auth::user()->unreadNotifications)
          <a class="dropdown-item text-center small text-gray-500" href="#">
          @foreach(Auth::user()->unreadNotifications as $notification)

        

           <a href="{{ route('publications.show' , $notification->data['publication_id']) }}" class="dropdown-item">

                        
          <span  class="mr-2 d-none d-lg-inline text-black-600 small" style="margin-left:33px;margin-top:1%;  font-weight:bold; color:black">
              <strong>  {{ $notification->data['name']}} {{ $notification->data['last_name']}}</strong> has posted a comment to a publication 
            
          </span>
          <span style="float:left;margin-top:1%;margin-left:2%;">
          <img style="margin-right: px;margin-left: -25px;margin-top: -30px;" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' . $notification->data['avatar'] )}}" width="45" height="45" alt="avatar"
        >
    
          </span>


                    @endforeach
          </a>
          @endif
         </div>
      </li>

       

      

      <div class="topbar-divider d-none d-sm-block"></div>
      <!-- Nav Item - User Information -->

      <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span  class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }} </span>
                @if(file_exists(storage_path('app/public/' . config('chatify.user_avatar.folder') . '/' . Auth::user()->avatar)))  
              <img style="margin-right: 5px; width:40px; height:40px" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .Auth::user()->avatar )}}" width="55" height="55"  alt="avatar">
              @else
              <img style="margin-right: 5px; width:40px; height:40px" class="img-profile rounded-circle" src="{{ asset('/uploads/avatars/avatar.png') }}"width="50" alt="avatar"style="width:32px; height:32px; position:absolute; top:35px; margin-top:10px; left:20px; border-radius:50%">
               @endif 

               
            </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
         role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false" style="color: #b2c7aa;font-weight:bold;">
          @if(file_exists(storage_path('app/public/' . config('chatify.user_avatar.folder') . '/' . Auth::user()->avatar)))  
              <img style="margin-right: 5px; width:40px; height:40px" class="img-profile rounded-circle" src="{{asset('storage/' . config('chatify.user_avatar.folder') . '/' .Auth::user()->avatar )}}" width="55" height="55"  alt="avatar">
              @else
              <img style="margin-right: 5px; width:40px; height:40px" class="img-profile rounded-circle" src="{{ asset('/uploads/avatars/avatar.png') }}"width="50" alt="avatar"style="width:32px; height:32px; position:absolute; top:35px; margin-top:10px; left:20px; border-radius:50%">
               @endif 

           Show Profile

            </a>
            
            <hr class="sidebar-divider my-0"></hr><br>

          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Edit Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
          </a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>

      </li>

    </ul>

  </nav>
 @include('layouts.logout')
