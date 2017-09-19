<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GFDIN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
    <!-- Header -->
    <header id="header" class="alt">
        <div class="logo"><a href="index.html">GRASSROOTS FARMERS <span>DEVELOPMENT INITIATIVE OF NIGERIA</span></a></div>
        <a href="#menu">Menu</a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html">Sign Up</a></li>
            <li><a href="elements.html">Invest in our company</a></li>
        </ul>
    </nav>

    <!-- Banner -->
    <section class="banner full">
        <article>
            <img src="images/slide01.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>a global agricultural community that facilitates growth</p>
                    <h2>Who we are</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="images/slide02.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Lorem ipsum dolor sit amet nullam feugiat</p>
                    <h2>Our aim</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="images/slide03.jpg"  alt="" />
            <div class="inner">
                <header>
                    <p>Sed cursus aliuam veroeros lorem ipsum nullam</p>
                    <h2>Our goals</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="images/slide04.jpg"  alt="" />
            <div class="inner">
                <header>
                    <p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p>
                    <h2>Our community</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="images/slide05.jpg"  alt="" />
            <div class="inner">
                <header>
                    <p>Ipsum dolor sed magna veroeros lorem ipsum</p>
                    <h2>Our resolution</h2>
                </header>
            </div>
        </article>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style2">
        <div class="inner">
            <div class="grid-style">

                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic02.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>maecenas sapien feugiat ex purus</p>
                                <h2>Lorem ipsum dolor</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                            <footer class="align-center">
                                <a href="#" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic03.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>mattis elementum sapien pretium tellus</p>
                                <h2>Vestibulum sit amet</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                            <footer class="align-center">
                                <a href="#" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
                <h2>Morbi maximus justo</h2>
            </header>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style2">
        <div class="inner">
            <header class="align-center">
                <p class="special">Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
                <h2>Morbi maximus justo</h2>
            </header>
            <div class="gallery">
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic01.jpg" alt="" /></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic02.jpg" alt="" /></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic03.jpg" alt="" /></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic04.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
        </div>
        <div class="copyright">
            &copy; GFDIN. All rights reserved. Designed by Caesar.
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
