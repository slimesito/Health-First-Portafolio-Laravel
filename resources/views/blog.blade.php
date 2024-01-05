@extends('layouts.layout')

@section('content')

    <main>

        <div class="home_blog-area section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Oure recent news</span>
                            <h2>OurNews From Blog</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog1.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <div class="date-info">
                                    <span>Health</span>
                                    <p>Nov 30, 2020</p>
                                </div>
                                <h4><a href="html/blog_details.html">Amazing Places To Visit In Summer</a></h4>
                                <a href="html/blog_details.html" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog2.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <div class="date-info">
                                    <span>Checkup</span>
                                    <p>Nov 30, 2020</p>
                                </div>
                                <h4><a href="html/blog_details.html">Developing Creativithout Losing Visual</a></h4>
                                <a href="html/blog_details.html" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog3.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <div class="date-info">
                                    <span>Operation</span>
                                    <p>Nov 30, 2020</p>
                                </div>
                                <h4><a href="html/blog_details.html">Winter Photography Tips from Glenn</a></h4>
                                <a href="html/blog_details.html" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center mb-100">
                            <span>Our Gellary</span>
                            <h2>Our Medical Camp</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Left -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    
@endsection