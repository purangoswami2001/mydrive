<!doctype html>
<html lang="en">
  <head>
    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="images/x-icon" href="https://toppng.com/uploads/preview/bildresultat-for-raven-bird-claw-jewelry-jewellery-11563263290kga3gi1vxd.png"/></head>
    <!-- Bootstrap CSS -->


    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    


    
    <link rel="stylesheet" href="/../css/drive.css">
    
  </head>
  <body>
     <!-- Nav tabs -->
    
     <nav class="navbar bg-light  p-0">
        <div class="container-fluid">
          
            <div class="navbar-brand" ><img src="https://miro.medium.com/max/1400/1*EyuGaXE7-AlkKLjvIvRcuA.png" alt="opps" style="height:39px; width:69px ;margin:auto"></div>
          <ul class="nav mr-auto  ">
            <li  ><a  class=" link " href="/">Home</a></li>
            <li   ><a  class=" link" href="/about">About </a></li>
            <li  ><a  class="link" href="/directory">MyDrive</a></li>
          </ul>
          <ul class="nav navbar-right">
              @if(session()->has('loginId'))
              <form class="form-inline my-2 my-lg-0">
                <input class="btn search-btn mr-sm-2   rounded input-sm" type="search" placeholder="Type to search" aria-label="Search">
                <button class="btn search-btn " type="submit"> <i class="material-icons ">search</i></button>
              </form>
              @endif

              @if(!session()->has('loginId'))
            <li ><a href="/register"  class="link"> Register</a></li>
            <li ><a href="/login"  class="link"> Login</a></li>
            @endif
          </ul>
        </div>
      </nav>