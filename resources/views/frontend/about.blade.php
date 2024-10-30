@include ('frontend.layouts.header')

  <!-- Begin Hiraola's Breadcrumb Area -->
  <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Other</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Hiraola's About Us Area -->
        <div class="about-us-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex align-items-center">
                        <div class="overview-content">
                            <h2>Welcome To <span>Hiraola's</span> Store!</h2>
                            <p class="short_desc">We Provide Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Repudiandae nisi fuga facilis, consequuntur, maiores eveniet voluptatum, omnis possimus
                                temporibus aspernatur nobis animi in exercitationem vitae nulla! Adipisci ullam illum quisquam.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, nulla veniam? Magni aliquid
                                asperiores magnam. Veniam ex tenetur.</p>
                            <div class="hiraola-about-us_btn-area">
                                <a class="about-us_btn" href="shop-left-sidebar.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="overview-img text-center img-hover_effect">
                            <a href="#">
                                <img class="img-full" src="{{asset ('frontend/assets/images/about-us/1.jpg')}}" alt="Hiraola's About Us Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's About Us Area End Here -->

        <!-- Begin Hiraola's Project Countdown Area -->
        <div class="project-count-area" >
            <center><h2 >TODAY'S RATE</h2></center>
              <div class="container">
                  <div class="row">
                  @foreach ($rate as $rate)
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="single-count text-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#e5b80b" d="m1 22l1.5-5h7l1.5 5zm12 0l1.5-5h7l1.5 5zm-7-7l1.5-5h7l1.5 5zm17-8.95l-3.86 1.09L18.05 11l-1.09-3.86l-3.86-1.09l3.86-1.09l1.09-3.86l1.09 3.86z"/></svg>
                              <div class="count-title">
                                  <h2 class="">₹{{ $rate->gold1 }}</h2>
                                  <span>24K GOLD</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="single-count text-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#e5b80b" d="m1 22l1.5-5h7l1.5 5zm12 0l1.5-5h7l1.5 5zm-7-7l1.5-5h7l1.5 5zm17-8.95l-3.86 1.09L18.05 11l-1.09-3.86l-3.86-1.09l3.86-1.09l1.09-3.86l1.09 3.86z"/></svg>
                              <div class="count-title">
                                  <h2 class="">₹{{ $rate->gold2 }}</h2>
                                  <span>22K GOLD</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="single-count text-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#e5b80b" d="m1 22l1.5-5h7l1.5 5zm12 0l1.5-5h7l1.5 5zm-7-7l1.5-5h7l1.5 5zm17-8.95l-3.86 1.09L18.05 11l-1.09-3.86l-3.86-1.09l3.86-1.09l1.09-3.86l1.09 3.86z"/></svg>
                              <div class="count-title">
                                  <h2 class="">₹{{ $rate->gold3 }}</h2>
                                  <span>18 K GOLD</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="single-count text-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#a8a9ad" d="m1 22l1.5-5h7l1.5 5zm12 0l1.5-5h7l1.5 5zm-7-7l1.5-5h7l1.5 5zm17-8.95l-3.86 1.09L18.05 11l-1.09-3.86l-3.86-1.09l3.86-1.09l1.09-3.86l1.09 3.86z"/></svg>
                              <div class="count-title">
                                  <h2 class="">₹{{ $rate->silver }}</h2>
                                  <span>SILVER</span>
                              </div>
                          </div>
                      </div>
                      <div class="rate" style="text-align: center ;"><h5>*RATE 10 GMS UPDATED:  {{ $rate->from1 }} | VALID TILL: {{ $rate->to1 }}</h5> </div>

                  </div>
              </div>
              @endforeach
          </div>
        <!-- Hiraola's Project Countdown Area End Here -->

        <!-- Begin Hiraola's Brand Area -->
        <div class="brand-area">
            <div class="container">
                <div class="brand-slider_nav">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-slider">
                                <div class="slide-item">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/assets/images/footer/logo/logopink.png')}}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="slide-item">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/assets/images/footer/logo/logopink.png')}}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="slide-item">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/assets/images/footer/logo/logopink.png')}}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="slide-item">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/assets/images/footer/logo/logopink.png')}}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="slide-item">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/assets/images/footer/logo/logopink.png')}}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="slide-item">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/assets/images/footer/logo/logopink.png')}}" alt="Brand Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Brand Area End Here -->


      
        @include ('frontend.layouts.footer')