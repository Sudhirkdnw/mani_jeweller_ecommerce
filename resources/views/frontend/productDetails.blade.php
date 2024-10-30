@include('frontend.layouts.header')
<div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Product </h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>

        
         <!-- Begin Hiraola's Single Product Area -->
         <div class="sp-area">
            <div class="container">
                <div class="sp-nav">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="sp-img_area">
                                <div class="zoompro-border">
                                @if ($product->image)
                                    <img class="zoompro" src="{{ asset('uploads/products_image/'.$product->image) }}" data-zoom-image="{{ asset('uploads/products_image/'.$product->image) }}" alt="Mani's Product Image" />
                               @endif
                                </div>
                                <div id="gallery" class="sp-img_slider">
                                @foreach([$product->thumbnail_1, $product->thumbnail_2, $product->thumbnail_3, $product->thumbnail_4, $product->thumbnail_5] as $index => $thumbnail)
                                @if ($thumbnail)
                                    <a class="active" data-image="{{ asset('uploads/products_image/product_thumbnail/'.$thumbnail) }}" data-zoom-image="{{ asset('uploads/products_image/product_thumbnail/'.$thumbnail) }}">
                                        <img src="{{ asset('uploads/products_image/product_thumbnail/'.$thumbnail) }}" alt="Mani's Product Image">
                                    </a>
                                    @endif
                                    @endforeach 
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h5><a href="#">{{ $product->name }}</a></h5>
                                </div>
                                <span class="reference">Reference: Demo</span>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                    </ul>
                                </div>
                                <div class="sp-essential_stuff">
                                    <ul>
                                        <li>Weight: <a href="javascript:void(0)"><span>{{ $product->weight }}</span></a></li>
                                        <li>Brands <a href="javascript:void(0)">Mani Jeweller</a></li>
                                        <li>Product Code: <a href="javascript:void(0)">{{ $product->product_id }}</a></li>
                                        <li>Category : <a href="javascript:void(0)">{{ $product->category }}</a></li>
                                        <li>Availability: <a href="javascript:void(0)">{{ $product->available }}</a></li>
                                    </ul>
                                </div>
                                <div class="product-size_box">
                                    <span>Size</span>
                                    <select class="myniceselect nice-select">
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>
                                    </select>
                                </div>
                                <div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <div class="qty-btn_area">
                                    <ul>
                                       <li> <a class="qty-cart_btn" href="https://api.whatsapp.com/send/?phone=919250119191&text=http://127.0.0.1:8000/productDetails/{{$product->id}}&type=phone_number&app_absent=0" target="_blank"  style="background:#21c063">WhatsApp</a></li>
                                        <li><a class="qty-wishlist_btn" href="wishlist.html" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li><a class="qty-compare_btn" href="compare.html" data-bs-toggle="tooltip" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    </ul>
                                </div>
                                <div class="hiraola-tag-line">
                                    <h6>Tags:</h6>
                                    <a href="javascript:void(0)">{{ $product->tags }}</a>,
                                    
                                </div>
                                <div class="hiraola-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fab fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Single Product Area End Here -->
          <!-- Begin Hiraola's Single Product Tab Area -->
        <div class="hiraola-product-tab_area-2 sp-product-tab_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sp-product-tab_nav ">
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    <li><a class="active" data-bs-toggle="tab" href="#description"><span>Description</span></a>
                                    </li>
                                    <li><a data-bs-toggle="tab" href="#specification"><span>Specification</span></a></li>
                                    <li><a data-bs-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>
                                </ul>
                            </div>
                            <div class="tab-content hiraola-tab_content">
                                <div id="description" class="tab-pane active show" role="tabpanel">
                                    <div class="product-description">
                                        <ul>
                                            <li>
                                                <strong>{{ $product->name }}</strong>
                                                <span>{{ $product->descriptions }}.</span>
                                            </li>
                                                                                        

                                        </ul>
                                    </div>
                                </div>
                                <div id="specification" class="tab-pane" role="tabpanel">
                                <div class="product-description">

                                <ul>
                                            <li>
                                                <strong>Karat Gold</strong>
                                                <span>24K gold is called pure gold or fine gold. (99.99% pure) The color of fine
                                            gold is a bright yellow with a bit of orange. Some say it is too soft for
                                            jewelry application, but high karat gold is commonly worn in some parts of
                                            the world, and it is growing in popularity in designer jewelry. Most will
                                            prefer karat golds for their engagement rings, because of the needed
                                            hardness to hold a gemstone.</span>
                                            </li>
                                            <li>
                                                <strong>Gold Colors</strong>
                                                <span>The most popular color is yellow which is made by adding silver and some
                                            copper. The metals are melted together to form an alloy of the desired color
                                            and karat. It is very important that all the ingredients are pure and that
                                            the amounts of each are weighed very accurately to prevent porosity, which
                                            weakens the alloy.</span>
                                            </li>
                                            <li>
                                                <strong>White alloys</strong>
                                                <span>There are two kinds of White Gold: Nickel based and Palladium based. Some
                                            people are allergic to Nickel, so Palladium white gold is a good
                                            alternative. Palladium white gold is the only legal alloy in Europe. It also
                                            self burnishes and keeps a polish.</span>
                                            </li>
                                            <li>
                                                <strong>The Most Expensive Diamond Color</strong>
                                                <span>D colored diamonds are the rarest and most expensive of diamonds within
                                            the D-Z scale. Certain fancy colored diamonds will command the highest
                                            prices overall, and these will be discussed in separate tutorial. Many
                                            people enjoy diamonds in the near colorless range G-J, as they find a
                                            balance of size, clarity, and price to meet their needs.</span>
                                            </li>

                                        </ul>
</div>
                                </div>
                                <div id="reviews" class="tab-pane" role="tabpanel">
                                    <div class="tab-pane active" id="tab-review">
                                        <form class="form-horizontal" id="form-review">
                                            <div id="review">
                                                <table class="table table-striped table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"><strong>Customer</strong></td>
                                                            <td class="text-right">25/04/2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p>Good product! Thank you very much</p>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12 p-0">
                                                    <label>Your Email <span class="required">*</span></label>
                                                    <input class="review-input" type="email" name="con_email" id="con_email" required>
                                                </div>
                                            </div>
                                            <div class="form-group required second-child">
                                                <div class="col-sm-12 p-0">
                                                    <label class="control-label">Share your opinion</label>
                                                    <textarea class="review-textarea" name="con_message" id="con_message"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                                        translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group last-child required">
                                                <div class="col-sm-12 p-0">
                                                    <div class="your-opinion">
                                                        <label>Your Rating</label>
                                                        <span>
                                                    <select class="star-rating">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="hiraola-btn-ps_right">
                                                    <a href="javascript:void(0)" class="hiraola-btn hiraola-btn_dark">Continue</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Single Product Tab Area End Here -->


<script>
  function shareOnInstagram(productUrl) {
    // Copy the product URL to the clipboard
    var dummy = document.createElement('input');
    document.body.appendChild(dummy);
    dummy.value = productUrl;
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);
    
    // Alert the user that the link is copied
    alert('Link copied to clipboard! Open Instagram to share the link.');
    
    // Open Instagram (this will open the Instagram app if installed)
    window.location.href = 'instagram://';
  }
  
  function shareOnFacebook(productUrl) {
    // Open Facebook share dialog with the product URL
    var facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(productUrl);
    window.open(facebookShareUrl, 'facebook-share-dialog', 'width=800,height=600');
  }
</script>

@include('frontend.layouts.footer')
