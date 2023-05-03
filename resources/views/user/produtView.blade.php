@extends('user.layout.main')
@section('content')

<!--product details start-->
<div class="product_details mt-60 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="assets/img/product/details-1.jpg" data-zoom-image="assets/img/product/details-1.jpg" alt="big-1">
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/details-2.jpg" data-zoom-image="assets/img/product/details-2.jpg">
                                    <img src="assets/img/product/details-2.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/details-3.jpg" data-zoom-image="assets/img/product/details-3.jpg">
                                    <img src="assets/img/product/details-3.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/details-4.jpg" data-zoom-image="assets/img/product/details-4.jpg">
                                    <img src="assets/img/product/details-4.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/details-1.jpg" data-zoom-image="assets/img/product/details-1.jpg">
                                    <img src="assets/img/product/details-1.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <form action="#">

                        <h1>Meyoji Robast Drone Fusce ultricies massa</h1>
                        <div class=" product_ratting">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="review"><a href="#"> (250 reviews) </a></li>
                            </ul>

                        </div>
                        <div class="price_box">
                            <span class="current_price">$70.00</span>
                            <span class="old_price">$80.00</span>
                        </div>
                        <div class="product_desc">
                            <ul>
                                <li>In Stock</li>
                                <li>Free delivery available*</li>
                                <li>Sale 30% Off Use Code : 'Drophut'</li>
                            </ul>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will</p>
                        </div>
                        <div class="product_timing">
                            <div data-countdown="2021/6/28"></div>
                        </div>
                        <div class="product_variant color">
                            <h3>Available Options</h3>
                            <label>color</label>
                            <ul>
                                <li class="color1"><a href="#"></a></li>
                                <li class="color2"><a href="#"></a></li>
                                <li class="color3"><a href="#"></a></li>
                                <li class="color4"><a href="#"></a></li>
                            </ul>
                        </div>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" value="1" type="number">
                            <button class="button" type="submit">Buy now</button>

                        </div>
                        <div class="product_meta">
                            <span>Category: <a href="#">Drone</a></span>
                        </div>

                    </form>
                    <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                            <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                            <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                            <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                            <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->

@endsection