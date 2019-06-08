<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Piyush Singh</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset("wordsmith/css/base.css")}}">
    <link rel="stylesheet" href="{{asset("wordsmith/css/vendor.css")}}">
    <link rel="stylesheet" href="{{asset("wordsmith/css/main.css")}}">

    <!-- script
    ================================================== -->
    <script src="{{asset("wordsmith/js/modernizr.js")}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset("wordsmith/favicon.ico")}}" type="image/x-icon">
    <link rel="icon" href="{{asset("wordsmith/favicon.ico")}}" type="image/x-icon">

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
        <a class="logo" href="" style="color: rgba(0, 0, 0, 0.6)">
            Piyush
        </a>
    </div> <!-- end header__logo -->
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Navigate to</h2>

        <ul class="header__nav">
            <li class="has-children">
                <a href="#0" title="">Auth</a>
                <ul class="sub-menu">
                    @auth

                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </ul>
            </li>
        </ul> <!-- end header__nav -->


    </nav>

</header> <!-- s-header -->


<!-- featured
================================================== -->
<section class="s-featured">
    <div class="row">
        <div class="col-full">

            <div class="featured-slider featured" data-aos="zoom-in">
                @foreach($posts as $post)
                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background"
                                 style="background-image:url('{{ $post->featured_image }}');"></div>

                            <div class="entry__content">

                                <h1><a href="/blog/{{ $post->slug }}" title="">{{ $post->title }}</a></h1>

                                <div class="entry__info">
                                    <ul class="entry__meta">
                                        <li><a href="/blog/{{ $post->slug }}">Piyush Singh</a></li>
                                        <li>{{$post->publish_date}}</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->
                @endforeach

            </div> <!-- end featured -->

        </div> <!-- end col-full -->
    </div>
</section> <!-- end s-featured -->


<!-- s-content
================================================== -->
<section class="s-content">

    <div class="row entries-wrap wide">
        <div class="entries">
            @foreach($posts as $post)

                <article class="col-block">

                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="/blog/{{ $post->slug }}" class="item-entry__thumb-link">
                                <img src="{{$post->featured_image}}"
                                     srcset="{{$post->featured_image}} 1x, {{$post->featured_image}} 2x" alt="">

                            </a>
                        </div>

                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="/blog/{{ $post->slug }}"></a>
                            </div>

                            <h1 class="item-entry__title"><a href="/blog/{{ $post->slug }}">{{$post->title}}</a></h1>

                            <div class="item-entry__date">
                                <a href="/blog/{{ $post->slug }}">{{$post->publish_date}}</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->
            @endforeach

        </div> <!-- end entries -->
    </div> <!-- end entries-wrap -->

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