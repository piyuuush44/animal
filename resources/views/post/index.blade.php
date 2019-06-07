{{--<h1>{{ $post->title }}</h1>--}}
{{--<img src="">--}}
{{--<div> {!! $post->body !!} </div>--}}


        <!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ $post->title }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('wordsmith/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('wordsmith/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('wordsmith/css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('wordsmith/js/modernizr.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('wordsmith/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('wordsmith/favicon.ico')}}" type="image/x-icon">

</head>

<body id="top">

<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<header class="s-header header">

    <div class="header__logo">
        <a class="logo" href="/blog" style="color: white">
            Piyush
        </a>
    </div> <!-- end header__logo -->


</header> <!-- s-header -->

<!-- s-content
================================================== -->
<section class="s-content s-content--top-padding s-content--narrow">

    <article class="row entry format-standard">
        <div class="entry__header col-full">
            <h1 class="entry__header-title display-1">
                {{$post->title}}
            </h1>
            <ul class="entry__header-meta">
                <li class="date">{{$post->publish_date}}</li>
                <li class="byline">
                    By
                    <a href="#0">Piyush Singh</a>
                </li>
            </ul>
        </div>


        <div class="entry__media col-full">
            <div class="entry__post-thumb">
                <img id="internal_image" src="{{$post->featured_image}}"
                     srcset="{{$post->featured_image}} 2000w,
                                 {{$post->featured_image}} 1000w,
                                 {{$post->featured_image}} 500w"
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="">
            </div>
        </div>


        <div class="col-full entry__main">
            <p>
                {{$post->body}}
            </p>
            <p class="lead drop-cap">
            </p>

            <div class="entry__author">
                <img src="{{asset('piy.jpg')}}" alt="">

                <div class="entry__author-about">
                    <h5 class="entry__author-name">
                        <span>Posted by</span>
                        <a href="#0">Piyush Singh</a>
                    </h5>

                    <div class="entry__author-desc">
                        <p>
                            Author loves to code so much, a total entertainment freak and always eager to learn new
                            things
                        </p>
                    </div>
                </div>
            </div>

        </div> <!-- s-entry__main -->

    </article> <!-- end entry/article -->


</section> <!-- end s-content -->


<!-- s-footer
================================================== -->
<footer class="s-footer">


    <div class="s-footer__bottom">
        <div class="row">

            <div class="col-six">
                <ul class="footer-social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-six">
                <div class="s-footer__copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                                    class="fa fa-heart" aria-hidden="true"></i> by Piyush
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                </div>
            </div>

        </div>
    </div> <!-- end s-footer__bottom -->

    <div class="go-top">
        <a class="smoothscroll" title="Back to Top" href="#top"></a>
    </div>

</footer> <!-- end s-footer -->

<!-- Java Script
================================================== -->
<script src="{{asset("wordsmith/js/jquery-3.2.1.min.js")}}"></script>
<script src="{{asset("wordsmith/js/plugins.js")}}"></script>
<script src="{{asset("wordsmith/js/main.js")}}"></script>

</body>

</html>