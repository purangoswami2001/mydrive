

@extends('layout.main')
@push('title')
    <title>About</title>    
@endpush
@section('main-section')

<div class="container mr-auto  shadow-lg">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand ml-5" style="color: skyblue;" href="#">MyDrive</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-5">
    <li class="nav-item ">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Portfolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">service</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">contact</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="mr-sm-2  border  rounded " type="search" placeholder="  Enter text" aria-label="Search">
    <button class="btn btn border  rounded search-btn " type="submit">Search</button>
  </form>
</div>
</nav>

<div id="carouselExampleIndicators"  class="carousel slide " data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="carousel-item active">
    <img class="d-block w-100" src="https://blog.addthiscdn.com/wp-content/uploads/2018/05/11124555/3-Things-Great-Websites-Have-in-Common1-672x372.png"" alt="First slide">
  </div>
  <div class="carousel-item ">
    <img class="d-block w-100" src="https://blog.addthiscdn.com/wp-content/uploads/2018/05/11124555/3-Things-Great-Websites-Have-in-Common1-672x372.png"" alt="second slide">
  </div>
  <div class="carousel-item ">
    <img class="d-block w-100" src="https://blog.addthiscdn.com/wp-content/uploads/2018/05/11124555/3-Things-Great-Websites-Have-in-Common1-672x372.png"" alt="Third slide">
  </div>
</div>
  <section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
  <div class="flex flex-wrap -m-5">
    <div class="p-4 md:w-1/4">
      <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
        <div class="flex items-center mb-3">
          <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          
        </div>
        <div class="flex-grow">
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
        </div>
      </div>
    </div>
    <div class="p-4 md:w-1/4">
      <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
        <div class="flex items-center mb-3">
          <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
         
        </div>
        <div class="flex-grow">
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
      
        </div>
      </div>
    </div>
    <div class="p-4 md:w-1/4">
      <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
        <div class="flex items-center mb-3">
          <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
        </div>
        <div class="flex-grow">
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
      
        </div>
      </div>
    </div>
    <div class="p-4 md:w-1/4">
      <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
        <div class="flex items-center mb-3">
          <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
         
        </div>
        <div class="flex-grow">
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

  </div>

</div>
<img class="mr-auto" style=" width:100%"  src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d2VifGVufDB8fDB8fA%3D%3D&w=1000&q=80">
<section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
  <div class="text-center"><h2>MEET OUR TEAM</h2></div>
  <div class="flex flex-wrap -m-4">
    <div class="p-4 lg:w-1/4">
      <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
        <img alt="team" class="flex-shrink-0 rounded-lg w-30 h-30 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/200x200">
        
      </div>
    </div>
    <div class="p-4 lg:w-1/4">
      <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
        <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/201x201">
      </div>
    </div>
    <div class="p-4 lg:w-1/4">
      <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
        <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/204x204">
      </div>
    </div>
    <div class="p-4 lg:w-1/4">
      <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
        <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/206x206">
      </div>
    </div>
  </div>
</div>
</section>
   
    <img class="mr-auto" style=" width:100%"  src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" <div class="container item-align-center mt-5 ">
  <div class="row centered-form mt-5 mb-5 ">
  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 mb-5 col-md-offset-4 m-auto border shadow-lg rounded p-3 ">
      <div class="panel panel-default">
          <div class="panel-heading">
                  <h4 class="panel-title text-center  mb-3">Contact Us</h4>
                   </div>
                   <div class="panel-body">
                  <form action="" method="POST">
                  
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" >
                              </div>
                              
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                  <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" >
                              </div>
                              
                          </div>
                      </div>

                      <div class="form-group">
                          <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" >

                      </div>

                      </div>
                      
                      <input type="submit" value="Submit" class="btn btn-info btn-block">
                      
                  </form>
  
              </div>
          </div>
      </div>
  </div>
</div>>
</div>
</div>

@endsection


