@include ('frontend.layouts.header')
   <!-- Hiraola's Header Main Area Three End Here -->

   <div class="hiraola-slider_area-2 hiraola-slider_area-3 color-white">
            <div class="main-slider">
                <!-- Begin Single Slide Area -->
                <div class="single-slide animation-style-01 bg-6">
                    <div class="container">
                        <div class="slider-content slider-content-2">
                            <h5><span>Black Friday</span> This Week</h5>
                            <h2>Work Desk</h2>
                            <h3>Surface Studio 2022</h3>
                            <h4>Starting at <span>₹1599.00</span></h4>
                            <div class="hiraola-btn-ps_center slide-btn">
                                <a class="hiraola-btn" href="/shop">Shopping Now</a>
                            </div>
                        </div>
                        <div class="slider-progress"></div>
                    </div>
                </div>
                <!-- Single Slide Area End Here -->
                <!-- Begin Single Slide Area -->
                <div class="single-slide animation-style-02 bg-7">
                    <div class="container">
                        <div class="slider-content">
                            <h5><span>-10% Off</span> This Week</h5>
                            <h2>Phantom4</h2>
                            <h3>Pro+ Obsidian</h3>
                            <h4>Starting at <span>₹809.00</span></h4>
                            <div class="hiraola-btn-ps_center slide-btn">
                                <a class="hiraola-btn" href="/shop">Shopping Now</a>
                            </div>
                        </div>
                        <div class="slider-progress"></div>
                    </div>
                </div>
                <!-- Single Slide Area End Here -->
            </div>
        </div>

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

        <div class="hiraola-banner_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{asset ('frontend/assets/images/banner/3_1.jpg')}}" alt="Mani's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{asset ('frontend/assets/images/banner/3_2.jpg')}}" alt="Mani's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{asset ('frontend/assets/images/banner/3_3.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Hiraola's Product Area -->
        <div class="hiraola-product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hiraola-section_title">
                            <h4>New Arrival</h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider">
                            <!-- Begin Hiraola's Slide Item Area -->
                            @foreach ($product as $product)
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="{{ asset('uploads/products_image/'.$product->image) }}" alt="Mani's Product Image">
                                            <img class="secondary-img" src="{{ asset('uploads/products_image/product_thumbnail/'.$product->thumbnail_1) }}" alt="Mani's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                               
                                                
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="{{ route('frontend.productDetails', ['id' => $product->id]) }}" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                    class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="{{ route('frontend.productDetails', ['id' => $product->id]) }}">{{ $product->name }}</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">{{ $product->weight }}</span>
                                            </div>
                                            <div class="additional-add_action">
                                                <ul>
                                                    <li><a class="hiraola-add_compare" href="" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Hiraola's Slide Item Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Area End Here -->

        <div class="static-banner_area static-banner_area-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="static-banner-image static-banner-image-2">
                            <div class="static-banner-content">
                                <p><span>-25% Off</span>This Week</p>
                                <h2>Featured Product</h2>
                                <h3>Meito Accessories 2022</h3>
                                <p class="schedule">
                                    Starting at
                                    <span>₹ 1209.00</span>
                                </p>
                                <div class="hiraola-btn-ps_left">
                                    <a href="shop-left-sidebar.html" class="hiraola-btn">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Hiraola's Product Tab Area -->
        <div class="hiraola-product-tab_area-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-tab">
                            <div class="hiraola-tab_title">
                                <h4>Gold Jewellery</h4>
                            </div>
                            <ul class="nav product-menu">
                                <li><a class="active" data-bs-toggle="tab" href="#necklaces"><span>Necklaces</span></a></li>
                                <li><a data-bs-toggle="tab" href="#earrings"><span>Earrings</span></a></li>
                                <li><a data-bs-toggle="tab" href="#bracelet"><span>Bracelet</span></a></li>
                                <li><a data-bs-toggle="tab" href="#anklet"><span>Anklet</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content hiraola-tab_content">
                            <div id="necklaces" class="tab-pane active show" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    @foreach ($product_gold as $product)
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="{{ asset('uploads/products_image/'.$product->image) }}" alt="Mani's Product Image">
                                            <img class="secondary-img" src="{{ asset('uploads/products_image/product_thumbnail/'.$product->thumbnail_1) }}" alt="Mani's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                               
                                                
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="{{ route('frontend.productDetails', ['id' => $product->id]) }}" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                    class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="{{ route('frontend.productDetails', ['id' => $product->id]) }}">{{ $product->name }}</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">{{ $product->weight }}</span>
                                            </div>
                                            <div class="additional-add_action">
                                                <ul>
                                                    <li><a class="hiraola-add_compare" href="" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                             <!-- Hiraola's Slide Item Area End Here -->
                                   </div>
                            </div>
                            <div id="earrings" class="tab-pane" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Tab Area End Here -->

        <div class="hiraola-banner_area-2 hiraola-banner_area-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{asset ('frontend/assets/images/banner/3_4.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{asset ('frontend/assets/images/banner/3_5.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Hiraola's Product Tab Area Three -->
        <div class="hiraola-product-tab_area-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-tab">
                            <div class="hiraola-tab_title">
                                <h4>Silver Jewellery</h4>
                            </div>
                            <ul class="nav product-menu">
                                <li><a class="active" data-bs-toggle="tab" href="#necklaces-2"><span>Necklaces</span></a></li>
                                <li><a data-bs-toggle="tab" href="#earrings-2"><span>Earrings</span></a></li>
                                <li><a data-bs-toggle="tab" href="#bracelet-2"><span>Bracelet</span></a></li>
                                <li><a data-bs-toggle="tab" href="#anklet-2"><span>Anklet</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content hiraola-tab_content">
                            <div id="necklaces-2" class="tab-pane active show" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    @foreach ($product_silver as $product)
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="{{ asset('uploads/products_image/'.$product->image) }}" alt="Mani's Product Image">
                                            <img class="secondary-img" src="{{ asset('uploads/products_image/product_thumbnail/'.$product->thumbnail_1) }}" alt="Mani's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                               
                                                
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="{{ route('frontend.productDetails', ['id' => $product->id]) }}" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                    class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="{{ route('frontend.productDetails', ['id' => $product->id]) }}">{{ $product->name }}</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">{{ $product->weight }}</span>
                                            </div>
                                            <div class="additional-add_action">
                                                <ul>
                                                    <li><a class="hiraola-add_compare" href="" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                                    <!-- Hiraola's Slide Item Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Tab Area Three End Here -->

        <!-- Begin Hiraola's Latest Blog Area -->
        <div class="latest-blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hiraola-section_title">
                            <h4>Latest Blog</h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="latest-blog_slider">
                            <div class="blog-slide_item">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="{{ asset ('frontend/assets/images/blog/medium-size/1.jpg')}}" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">10</span>
                                                <span class="month">Oct</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="">Gt wisi enim ad minim veniam.</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-slide_item">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="{{ asset ('frontend/assets/images/blog/medium-size/3.jpg')}}" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">05</span>
                                                <span class="month">Oct</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Ht wisi enim ad minim veniam..</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-slide_item">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="{{ asset ('frontend/assets/images/blog/medium-size/4.jpg')}}" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">20</span>
                                                <span class="month">Oct</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Neque suscipit veniam</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-slide_item">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="{{ asset ('frontend/assets/images/blog/medium-size/2.jpg')}}" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">25</span>
                                                <span class="month">Oct</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Excepturi deleniti molestias</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-slide_item">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="{{ asset ('frontend/assets/images/blog/medium-size/3.jpg')}}" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">15</span>
                                                <span class="month">Oct</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Cum deserunt aperiam</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Latest Blog Area End Here -->

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