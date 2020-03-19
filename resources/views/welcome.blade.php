@extends('layouts.frontend.app')

@section('title','Mirpurit')
@section('content')
<section class="banner-one" id="banner" style="background-image:
      url(frontend/assets/images/background/bbbbb.jpg);
      height: 600px;" >

          <img src="frontend/assets/images/shape/banner-shapes-1-1.png" alt="" class="banner-one__shape-1">
          <img src="frontend/assets/images/shape/laravel.png" alt="" class="banner-one__shape-2">

          <img src="frontend/assets/images/shape/cart.png" alt="" class="banner-one__shape-4">
          <img src="frontend/assets/images/shape/android.png" alt="" class="banner-one__shape-5">
          <img src="frontend/assets/images/shape/apple.png" alt="" class="banner-one__shape-6">
          <img src="frontend/assets/images/shape/web.png" alt="" class="banner-one__shape-7">

          <div class="container" >
              <img src="frontend/assets/images/shape/globe.png" alt="" class="banner-one__shape-moc-1">
              <!-- <img src="frontend/assets/images/mocs/banner-moc-1-1.png" alt="" class="banner-one__moc"> -->
              <div class="row">
                  <div class="col-lg-7">
                      <div class="banner-one__content">
                          <!-- <p class="banner-one__tag-line">Welcome to SEO Business <a href="#">free trial</a></p> -->
                          <h3>Make Your Dream Comes True</h3>
                          <!-- <p>We are committed to providing our customers with exceptional service <br> while offering our
                              employees
                              the best training.</p> -->
                          <a href="#contact" data-target="#contact" class="thm-btn banner-one__btn scroll-to-target hvr-wobble-vertical" style="background: green;">Get Started</a><!-- /.thm-btn banner-one__btn -->
                          <br>

                      </div><!-- /.banner-one__content -->

                  </div><!-- /.col-lg-7 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </section><!-- /.banner-one -->



      <section class="service-one" id="features">
          <div class="container">
              <div class="block-title text-center">

                  <h3>Which Kind of Service We Provide?</h3>
              </div><!-- /.block-title -->
              <div class="row">

                  <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                    <a href="servicepackweb.html">
                      <div class="service-one__single">
                          <i><img src="frontend/assets/images/web.png" alt="" style="width: 80px;height:80px;"> </i>
                          <h3>Web Develop</h3>
                      </div><!-- /.service-one__single --></a>

                  </div><!-- /.service-one__col -->


                  <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <a href="servicepackapp.html">
                      <div class="service-one__single">
                        <i><img src="frontend/assets/images/ap.png" alt="" style="width: 80px;height:80px;"> </i>
                          <h3>App Develop</h3>
                      </div><!-- /.service-one__single -->
                    </a>
                  </div><!-- /.service-one__col -->
                  <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <a href="servicepackdgm.html">
                      <div class="service-one__single">
                        <i><img src="frontend/assets/images/dgm.png" alt="" style="width: 80px;height:80px;"> </i>
                          <h3>Digital Marketing</h3>
                      </div><!-- /.service-one__single -->
                    </a>
                  </div><!-- /.service-one__col -->

                  <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <a href="servicepackgrp.html">
                      <div class="service-one__single">
                            <i><img src="frontend/assets/images/gra.png" alt="" style="width: 80px;height:80px;"> </i>
                          <h3>Graphic Design</h3>
                      </div><!-- /.service-one__single -->
                    </a>
                  </div><!-- /.service-one__col -->

              </div><!-- /.row -->
          </div><!-- /.container -->
      </section><!-- /.service-one -->

      <section class="pricing-one" id="pricing" style="background-color: var(--thm-gray);">
          <div class="container-fluid" style=" padding-bottom: 74px;">

              <div class="block-title text-center">
                  <span class="block-title__bubbles"></span>
                  <h3>Choose Pricing Plans</h3>
              </div><!-- /.block-title -->
              <ul class="list-inline text-center switch-toggler-list" role="tablist" id="switch-toggle-tab">
                  <li class="month active"><a href="#">Most Uses</a></li>


              </ul><!-- /.list-inline -->
              <div class="tabed-content">
                  <div id="month">
                      <div class="row">
                        <div class="col-lg-3 wow fadeInLeft mb-3" data-wow-duration="1500ms">
                            <div class="pricing-one__single">
                                <div class="pricing-one__inner">
                                  <img src="frontend/assets/images/shapes/pricing-line-1-1.png" alt="" class="pricing-one__line">
                                  <img src="frontend/assets/images/shapes/pricing-icon-1-1.png" alt="" class="pricing-one__icon">
                                    <h3 style="font-size:25px;">E-commerce</h3>
                                    <p>25000 TK</p>
                                    <ul class="list-unstyled pricing-one__list">
                                        <li><i class="fa fa-check"></i> Extra features</li>
                                        <li><i class="fa fa-check"></i> Lifetime free support</li>
                                        <li><i class="fa fa-check"></i> Upgrate options</li>
                                        <li><i class="fa fa-check"></i> Full access</li>
                                    </ul><!-- /.list-unstyled pricing-one__list -->
                                    <a href="#" class="thm-btn pricing-one__btn">Get Started</a><!-- /.thm-btn -->

                                </div><!-- /.pricing-one__inner -->
                            </div><!-- /.pricing-one__single -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-3 wow fadeInLeft mb-3" data-wow-duration="1500ms">
                            <div class="pricing-one__single">
                                <div class="pricing-one__inner">
                                    <img src="frontend/assets/images/shapes/pricing-line-1-1.png" alt="" class="pricing-one__line">
                                    <img src="frontend/assets/images/shapes/pricing-icon-1-1.png" alt="" class="pricing-one__icon">
                                    <h3 style="font-size: 25px;">E-commerce App</h3>
                                    <p>$20.00</p>
                                    <ul class="list-unstyled pricing-one__list">
                                        <li><i class="fa fa-check"></i> Extra features</li>
                                        <li><i class="fa fa-check"></i> Lifetime free support</li>
                                        <li><i class="fa fa-check"></i> Upgrate options</li>
                                        <li><i class="fa fa-check"></i> Full access</li>
                                    </ul><!-- /.list-unstyled pricing-one__list -->
                                    <a href="#" class="thm-btn pricing-one__btn">Get Started</a><!-- /.thm-btn -->

                                </div><!-- /.pricing-one__inner -->
                            </div><!-- /.pricing-one__single -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-3 wow fadeInLeft mb-3" data-wow-duration="1500ms">
                            <div class="pricing-one__single">
                                <div class="pricing-one__inner">
                                    <img src="frontend/assets/images/shapes/pricing-line-1-1.png" alt="" class="pricing-one__line">
                                    <img src="frontend/assets/images/shapes/pricing-icon-1-1.png" alt="" class="pricing-one__icon">
                                    <h3 style="font-size:25px;">Facebook Marketing</h3>
                                    <p>8000 TK/Month</p>
                                    <ul class="list-unstyled pricing-one__list">
                                        <li><i class="fa fa-check"></i> Extra features</li>
                                        <li><i class="fa fa-check"></i> Lifetime free support</li>
                                        <li><i class="fa fa-check"></i> Upgrate options</li>
                                        <li><i class="fa fa-check"></i> Full access</li>
                                    </ul><!-- /.list-unstyled pricing-one__list -->
                                    <a href="#" class="thm-btn pricing-one__btn">Get Started</a><!-- /.thm-btn -->

                                </div><!-- /.pricing-one__inner -->
                            </div><!-- /.pricing-one__single -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-3 wow fadeInLeft " data-wow-duration="1500ms">
                            <div class="pricing-one__single">
                                <div class="pricing-one__inner">
                                    <img src="frontend/assets/images/shapes/pricing-line-1-1.png" alt="" class="pricing-one__line">
                                    <img src="frontend/assets/images/shapes/pricing-icon-1-1.png" alt="" class="pricing-one__icon">
                                    <h3 style="font-size:25px;">Logo Design</h3>
                                    <p>2000 TK</p>
                                    <ul class="list-unstyled pricing-one__list">
                                        <li><i class="fa fa-check"></i> Extra features</li>
                                        <li><i class="fa fa-check"></i> Lifetime free support</li>
                                        <li><i class="fa fa-check"></i> Upgrate options</li>
                                        <li><i class="fa fa-check"></i> Full access</li>
                                    </ul><!-- /.list-unstyled pricing-one__list -->
                                    <a href="#" class="thm-btn pricing-one__btn">Get Started</a><!-- /.thm-btn -->

                                </div><!-- /.pricing-one__inner -->
                            </div><!-- /.pricing-one__single -->
                        </div><!-- /.col-lg-4 -->
                      </div><!-- /.row -->
                  </div><!-- /#month -->

              </div><!-- /.tabed-content -->

          </div><!-- /.container -->
      </section><!-- /.pricing-one -->

      <section class="app-shot-one" id="app-shots">
          <img src="frontend/assets/images/shapes/contact-shape-3.png" alt="" class="app-shot__shape-1">
          <img src="frontend/assets/images/shapes/contact-shape-2.png" alt="" class="app-shot__shape-2">

          <div class="container-fluid">
              <div class="block-title text-center">

                  <h3>Our Clint's Project</h3>
              </div><!-- /.block-title -->
              <div class="app-shot-one__carousel thm__owl-carousel owl-theme owl-carousel" data-options='{ "loop": true, "margin": 43, "nav": false, "dots": true, "autoWidth": false, "autoplay": true, "smartSpeed": 700, "autoplayTimeout": 5000, "autoplayHoverPause": true, "slideBy": 5, "responsive": { "0": { "items": 1 }, "480": { "items": 2 }, "600": { "items": 3 }, "991": { "items": 4 }, "1000": { "items": 5 }, "1200": { "items": 5 } } }'>
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-1.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-2.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-3.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-4.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-5.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-1.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-2.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-3.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-4.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-5.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-1.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-2.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-3.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-4.jpg" alt="">
                  </div><!-- /.item -->
                  <div class="item">
                      <img src="frontend/assets/images/app-shots/app-shot-1-5.jpg" alt="">
                  </div><!-- /.item -->
              </div><!-- /.app-shot-one__carousel owl-theme owl-carousel -->
          </div><!-- /.container-fluid -->
      </section><!-- /.app-shot-one -->

      <section class="testimonials__one" id="testimonials">
          <img src="frontend/assets/images/shapes/map-1-1.png" alt="Awesome Image" class="map-img" />
          <img src="frontend/assets/images/shapes/testi-shape-1.png" alt="" class="testimonials__one-shape-1">
          <img src="frontend/assets/images/shapes/testi-shape-2.png" alt="" class="testimonials__one-shape-2">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 d-flex">
                      <div class="my-auto wow fadeInUp" data-wow-duration="1500ms">
                          <div id="testimonials-slider-pager">
                              <div class="testimonials-slider-pager-one">
                                  <a href="#" class="pager-item active" data-slide-index="0"><img src="frontend/assets/images/testimonials/testi-1-1.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="1"><img src="frontend/assets/images/testimonials/testi-1-2.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="2"><img src="frontend/assets/images/testimonials/testi-1-3.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="3"><img src="frontend/assets/images/testimonials/testi-1-4.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="4"><img src="frontend/assets/images/testimonials/testi-1-5.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="5"><img src="frontend/assets/images/testimonials/testi-1-6.jpg" alt="Awesome Image" /></a>
                              </div><!-- /.testimonials-slider-pager-one -->
                              <div class="testimonials-slider-pager-two">
                                  <a href="#" class="pager-item active" data-slide-index="0"><img src="frontend/assets/images/testimonials/testi-1-1.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="1"><img src="frontend/assets/images/testimonials/testi-1-2.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="2"><img src="frontend/assets/images/testimonials/testi-1-3.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="3"><img src="frontend/assets/images/testimonials/testi-1-4.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="4"><img src="frontend/assets/images/testimonials/testi-1-5.jpg" alt="Awesome Image" /></a>
                                  <a href="#" class="pager-item" data-slide-index="5"><img src="frontend/assets/images/testimonials/testi-1-6.jpg" alt="Awesome Image" /></a>
                              </div><!-- /.testimonials-slider-pager-two -->
                          </div><!-- /#testimonials-slider-pager -->
                      </div><!-- /.my-auto -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                      <div class="block-title text-left">
                          <span class="block-title__bubbles"></span>
                          <h3>What Our Clients Are Saying</h3>
                      </div><!-- /.block-title -->
                      <ul class="slider testimonials-slider">
                          <li class="slide-item">
                              <div class="testimonials__one__single">
                                  <p>This is due to their excellent service, competitive pricing and customer support. It’s
                                      throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit
                                      in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                  <h3>Delila Rayam</h3>
                              </div><!-- /.testimonials__one__single -->
                          </li>
                          <li class="slide-item">
                              <div class="testimonials__one__single">
                                  <p>This is due to their excellent service, competitive pricing and customer support. It’s
                                      throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit
                                      in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                  <h3>Saiful Islam</h3>
                              </div><!-- /.testimonials__one__single -->
                          </li>
                          <li class="slide-item">
                              <div class="testimonials__one__single">
                                  <p>This is due to their excellent service, competitive pricing and customer support. It’s
                                      throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit
                                      in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                  <h3>Kyle Demayo</h3>
                              </div><!-- /.testimonials__one__single -->
                          </li>
                          <li class="slide-item">
                              <div class="testimonials__one__single">
                                  <p>This is due to their excellent service, competitive pricing and customer support. It’s
                                      throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit
                                      in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                  <h3>Minta Hadad</h3>
                              </div><!-- /.testimonials__one__single -->
                          </li>
                          <li class="slide-item">
                              <div class="testimonials__one__single">
                                  <p>This is due to their excellent service, competitive pricing and customer support. It’s
                                      throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit
                                      in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                  <h3>Sherman Cibrian</h3>
                              </div><!-- /.testimonials__one__single -->
                          </li>
                          <li class="slide-item">
                              <div class="testimonials__one__single">
                                  <p>This is due to their excellent service, competitive pricing and customer support. It’s
                                      throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit
                                      in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                  <h3>Adrianne Hagans</h3>
                              </div><!-- /.testimonials__one__single -->
                          </li>
                      </ul>
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </section><!-- /.testimonials__one -->







      <section class="contact-one" id="contact">
          <img src="frontend/assets/images/shapes/contact-shape-1.png" alt="" class="contact-one__shape-1">
          <img src="frontend/assets/images/shapes/contact-shape-2.png" alt="" class="contact-one__shape-2">
          <img src="frontend/assets/images/shapes/contact-shape-3.png" alt="" class="contact-one__shape-3">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="contact-one__content">
                          <div class="contact-one__images">
                              <img src="frontend/assets/images/resources/contact-1.jpg" class="wow fadeInUp" data-wow-duration="1500ms" alt="">
                              <img src="frontend/assets/images/resources/contact-2.jpg" class="wow fadeInUp" data-wow-duration="1500ms" alt="">
                          </div><!-- /.contact-one__images -->
                          <div class="contact-one__infos">
                              <div class="contact-one__infos-single">
                                  <div class="contact-one__infos-icon">
                                      <i class="zimed-icon-placeholder"></i>
                                  </div><!-- /.contact-one__infos-icon -->
                                  <div class="contact-one__infos-content">
                                      <h3>Addresss</h3>
                                      <p>House No.09. Road 09, H-Block, Mirpur 2<br> Bangladesh </p>
                                  </div><!-- /.contact-one__infos-content -->
                              </div><!-- /.contact-one__infos-single -->
                              <div class="contact-one__infos-single">
                                  <div class="contact-one__infos-icon">
                                      <i class="zimed-icon-message"></i>
                                  </div><!-- /.contact-one__infos-icon -->
                                  <div class="contact-one__infos-content">
                                      <h3>Email</h3>
                                      <p><a href="#">mirpurit2020@gmail.com</a></p>
                                  </div><!-- /.contact-one__infos-content -->
                              </div><!-- /.contact-one__infos-single -->
                              <div class="contact-one__infos-single">
                                  <div class="contact-one__infos-icon">
                                      <i class="zimed-icon-phone-call"></i>
                                  </div><!-- /.contact-one__infos-icon -->
                                  <div class="contact-one__infos-content">
                                      <h3>Phone</h3>
                                      <p><a href="#">+8801707116461</a></p>
                                  </div><!-- /.contact-one__infos-content -->
                              </div><!-- /.contact-one__infos-single -->
                          </div><!-- /.contact-one__infos -->
                      </div><!-- /.contact-one__content -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                      <div class="contact-one__form-wrap">
                          <div class="block-title">
                              <span class="block-title__bubbles"></span>
                              <p>Contact Us Now</p>
                              <h3>Write a Message</h3>
                          </div><!-- /.block-title -->
                          <form action="assets/inc/sendemail.php" class="contact-form-validated contact-one__form">
                              <div class="row">
                                  <div class="col-md-6">
                                      <input type="text" name="name" placeholder="Name">
                                  </div><!-- /.col-md-6 -->
                                  <div class="col-md-6">
                                      <input type="text" name="email" placeholder="Email">
                                  </div><!-- /.col-md-6 -->
                                  <div class="col-md-6">
                                      <input type="text" name="subject" placeholder="Subject">
                                  </div><!-- /.col-md-6 -->
                                  <div class="col-md-6">
                                      <select name="discuss" class="selectpicker">
                                          <option value="">Discussion For</option>
                                          <option value="">Free Trial</option>
                                          <option value="">Busniess Inquery</option>
                                      </select>
                                  </div><!-- /.col-md-6 -->
                                  <div class="col-md-12">
                                      <textarea name="message" placeholder="Message"></textarea>
                                      <button type="submit" class="thm-btn contact-one__form-btn">Send Message</button>
                                  </div><!-- /.col-md-12 -->
                              </div><!-- /.row -->
                          </form><!-- /.contact-one__form -->
                          <div class="result"></div><!-- /.result -->
                      </div><!-- /.contact-one__form-wrap -->
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </section><!-- /.contact-one -->

@endsection
