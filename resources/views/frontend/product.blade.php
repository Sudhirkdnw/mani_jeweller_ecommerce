@include ('frontend.layouts.header')
<!-- Begin Hiraola's Breadcrumb Area -->
<div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Shop</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Shop Column Three</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->

        <!-- Begin Hiraola's Content Wrapper Area -->
        <div class="hiraola-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                            <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">Short By:</label>
                                    <select class="nice-select">
                                        <option value="1">Relevance</option>
                                        <option value="2">Name, A to Z</option>
                                        <option value="3">Name, Z to A</option>
                                        <option value="4">Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                        <option value="5">Rating (Highest)</option>
                                        <option value="5">Rating (Lowest)</option>
                                        <option value="5">Model (A - Z)</option>
                                        <option value="5">Model (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid gridview-3 row">
                            
                            <div class="col-lg-4">
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                            <img class="primary-img" src="{{asset ('frontend/assets/images/product/medium-size/1-7.jpg')}}" alt="Mani's Product Image">
                                            <img class="secondary-img" src="{{asset ('frontend/assets/images/product/medium-size/1-6.jpg')}}" alt="Mani's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="/productDetails/{id}" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
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
                                <div class="list-slide_item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset ('frontend/assets/images/product/medium-size/1-7.jpg')}}" alt="Mani's Product Image">
                                                <img class="secondary-img" src="{{asset ('frontend/assets/images/product/medium-size/1-6.jpg')}}" alt="Mani's Product Image">
                                            </a>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="product-short_desc">
                                                    <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                        considered that gold possessed an energy that brought warm, soothing
                                                        vibrations to the body to aid healing, for when the body relaxes and the
                                                        blood vessels in the cells aren't as constricted, blood can move through
                                                        the tissue spaces more easily.</p>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                                    <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Content Wrapper Area End Here -->




@include ('frontend.layouts.footer')