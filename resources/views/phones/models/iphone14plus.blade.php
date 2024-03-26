<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSpace</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Berkshire+Swash" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("build/assets/style2.css") }}">
    <link rel="stylesheet" href="{{ asset("build\assets\apple.css") }}">
    
</head>

<body>
    <div class="contact-card">
        <a href="https://www.google.com/maps/place/Tesco/@48.085762,19.2971635,17z/data=!3m1!4b1!4m6!3m5!1s0x476aa07c9e3ae7ef:0x8571ce022327611c!8m2!3d48.085762!4d19.298772!16s%2Fg%2F1hg4ts_ts?entry=ttu"><img src="{{ asset("/images/img/tesco.png") }}" alt="map image Neshaminy Mall"></a>
        <div href="https://www.google.com/maps/place/Tesco/@48.085762,19.2971635,17z/data=!3m1!4b1!4m6!3m5!1s0x476aa07c9e3ae7ef:0x8571ce022327611c!8m2!3d48.085762!4d19.298772!16s%2Fg%2F1hg4ts_ts?entry=ttu" class="contact-card-address">
            <svg version="1.1" id="location-marker" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 402.046 402.045" xml:space="preserve">
                <g>
                	<path fill="rgba(83, 114, 206, 1)" d="M401.789,15.302c-0.664-3.906-2.43-7.187-5.283-9.854c-3.426-3.612-7.707-5.424-12.848-5.424
                		c-3.045,0-5.804,0.662-8.281,1.997L9.933,184.746c-3.811,1.906-6.567,4.755-8.282,8.563c-1.713,3.809-2.092,7.808-1.143,11.99
                		c0.951,4.188,3.095,7.562,6.423,10.143c3.33,2.566,7.09,3.854,11.277,3.854h164.445v164.452c0,4.192,1.287,7.949,3.855,11.282
                		c2.572,3.33,5.951,5.476,10.138,6.424c1.903,0.373,3.333,0.568,4.283,0.568c7.612,0,13.04-3.33,16.274-9.996L399.935,26.578
                		C401.837,22.963,402.45,19.204,401.789,15.302z"/>
                </g>
            </svg>
            <h4>Balassagyarmat <br>Mikszáth Kálmán u. 56, 2660<br></h4>
            <h3><a href="{{ url("tel:4847149484") }}" class="contact-card-phonenumber">484-714-9484</a></h3>
        </div>
        <div class="contact-card-buttons">
            <a href="{{ url("tel:4847149484") }}" class="contact-card-button">Hívás</a>
            <a href="https://www.google.com/maps/place/Tesco/@48.085762,19.2971635,17z/data=!3m1!4b1!4m6!3m5!1s0x476aa07c9e3ae7ef:0x8571ce022327611c!8m2!3d48.085762!4d19.298772!16s%2Fg%2F1hg4ts_ts?entry=ttu" class="contact-card-button">Térkép</a>
            <a href="{{ url("") }}" class="contact-card-button">Email</a>
        </div>
        <div class="exit-menu">
            <svg version="1.1" id="exit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 339.177 339.177" xml:space="preserve">
            <g>
            	<path fill="white" d="M247.244,169.59l83.938-83.938c5.332-5.327,7.994-11.798,7.994-19.414c0-7.614-2.669-14.084-7.994-19.414L292.355,7.993
            		C287.026,2.665,280.556,0,272.944,0c-7.617,0-14.085,2.665-19.417,7.993L169.59,91.931L85.651,7.993
            		C80.325,2.665,73.854,0,66.237,0c-7.611,0-14.083,2.665-19.414,7.993L7.994,46.824C2.667,52.15,0,58.624,0,66.238
            		c0,7.616,2.664,14.084,7.994,19.414l83.937,83.938L7.994,253.528C2.667,258.859,0,265.327,0,272.945
            		c0,7.61,2.664,14.082,7.994,19.41l38.83,38.828c5.33,5.332,11.803,7.994,19.414,7.994c7.616,0,14.084-2.669,19.414-7.994
            		l83.939-83.938l83.944,83.938c5.328,5.332,11.793,7.994,19.417,7.994c7.611,0,14.082-2.669,19.411-7.994l38.82-38.828
            		c5.332-5.324,7.994-11.8,7.994-19.41c0-7.618-2.662-14.086-7.994-19.417L247.244,169.59z"/>
            </g>
        </svg>

        </div>
    </div>
    </div>
    <div class="loading-screen">
        <div class="loading-icon">
            <div class="loading-part"></div>
            <div class="loading-part"></div>
            <div class="loading-part"></div>
            <div class="loading-part"></div>
        </div>
    </div>
    <div class="wrapper">
        <!-- NAVIGATION -->
        <nav class="mobile-navigation">
            <a class="mobile-menu" href="{{ url("#") }}">
                <div class="mobile menu-bar1"></div>
                <div class="mobile menu-bar2"></div>
                <div class="mobile menu-bar3"></div>
            </a>
            <h2 class="menu-text"><a href="{{ url("#") }}">MENU</a></h2>
        </nav>
        <nav class="navigation flex-grid spc-btwn" role="navigation">
            <div class="flx col-5 spc-arnd">
                <a href="{{ url("dashboard") }}" class="nav-logo flx col-2 v-center"></a>
                <a href="{{ url("dashboard") }}" class="flx col-4 center v-center"><h5 class="button home-button button-clear">Kezdőlap</h5></a>
                <a href="{{ url("phones/services") }}" class="flx col-4 center v-center"><h5 class="button services-button button-clear">Javítás</h5></a>
            </div>
            <div id="contact" class="flx col-2 center">
                <a href="{{ url("#") }}" class="flx col-10 center v-center"><h5 class="contact button button-blue">Kapcsolat</h5></a>
            </div>
        </nav>
        <!--- HEADER -->
        <header class="header flex-grid center column" data-speed="10">
            <div class="services-logo-type flx col-4 column">
                <h1>TechSpace</h1>
                <h2>OKOS ESZKÖZÖK JAVÍTÁSA</h2>
                <img src="{{ asset("/images/img/scrolldown-icon.svg") }}" alt="Scroll Down Triangle">
            </div>
        </header>

        <main>
            <section class="services hardware-services">
                <div class="services-title h1-color">
                    <h1>Modellek</h1>
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt consequuntur eaque vitae alias eos quia porro est voluptatequasi, molestiae veritatis debitis nostrum sequi reprehenderit ipsum eum, deserunt, eligendi fuga. </h4>
                </div>
                <div class="services-grid">
                    <!-- ITEM ONE -->
                    <div class="service-item">
                        <div>
                            <img id="brand-image" src="{{ asset("/images/img/phone3.jpg") }}" alt="">
                        </div>
                        <div class="service-item-title">                                                    
                            <a href="{{ url("phones/models/iphone14plus") }}" class="flx col-4 center v-center"><h5 class="button home-button button-clear">Iphone 14 Plus</h5></a>
                            <div class="selected"></div>
                            
                        </div>                   
                    </div>

                    <!-- ITEM TWO -->
                    <div class="service-item">
                        <div>
                            <img id="brand-image" src="{{ asset("/images/img/phone2.jpg") }}" alt="">
                        </div>
                        <div class="service-item-title">
                            <a href="{{ url("Apple.html") }}" class="flx col-4 center v-center"><h5 class="button home-button button-clear">Iphone 14 Pro</h5></a>
                        </div>                   
                    </div>
                    <!-- ITEM THREE -->
                    <div class="service-item">
                        <div>
                            <img id="brand-image" src="{{ asset("/images/img/phone3.jpg") }}" alt="">
                        </div>
                        <div class="service-item-title">
                            <a href="{{ url("Apple.html") }}" class="flx col-4 center v-center"><h5 class="button home-button button-clear">Iphone SE 2.gen</h5></a>
                            <div class="selected"></div>
                            
                        </div>                   
                    </div>

                    <!-- ITEM FOUR -->
                    <div class="service-item">
                        <div>
                            <img id="brand-image" src="{{ asset("/images/img/phone2.jpg") }}" alt="">
                        </div>
                        <div class="service-item-title">
                            <a href="{{ url("Apple.html") }}" class="flx col-4 center v-center"><h5 class="button home-button button-clear">Iphone SE 3.gen</h5></a>
                        </div>                   
                    </div>
                
                </div>
            </section>


            <section class="map flex-grid spc-arnd v-center">
                <div class="map-card flx address col-4 column center">
                    <img src="{{ asset("/images/img/address-card-icon.svg") }}" alt="Address Card Icon" class="card-icon">
                    <h1>Cím</h1>
                    <h5><a href="{{ url("") }}">Balassagyarmat</a></h5>
                    <h5><a href="{{ url("") }}">Mikszáth Kálmán u. 56, 2660</a></h5>
                </div>
                <div class="map-card flx phone-number col-4 column center">
                    <img src="{{ asset("/images/img/phone-card-icon.svg") }}" alt="Address Card Icon" class="card-icon">
                    <h1>Telefonszám:</h1>
                    <h2>484-714-9484</h2>
                </div>
                <div class="map-card flx email col-4 column center">
                    <img src="{{ asset("/images/img/email-card-icon.svg") }}" alt="Address Card Icon" class="card-icon">
                    <h1>E-mail</h1>
                    <h5><a href="{{ url("") }}">TechSpaceRepair@gmail.com</a></h5>
                </div>
            </section>


    

            <section class="services supported-devices">
                <div class="services-title h1-color">
                    <h1>TÁMOGATOTT</h1>
                    <h1>eszközök</h1>
                    <h5>Más fajta mobileszköze van? Egyeztessen velünk és megpróbálunk megoldást találni a problémára.</h5>
                </div>
                <div class="flex-grid spc-arnd cellphone-providers">
                    <div class="flx col-2 cellphone-brand center">
                        <img src="{{ asset("/images/img/apple-iPhone-icon.svg") }}" alt="">
                        <h1 style="color:white">Apple</h1>
                    </div>
                    <div class="flx col-2 cellphone-brand center">
                        <img src="{{ asset("/images/img/android-phone-selection.svg") }}" alt="">
                        <h1 style="color:white">Android</h1>
                    </div>
                    <div class="flx col-2 cellphone-brand center">
                        <img src="{{ asset("/images/img/LG-android-phone-icon.svg") }}" alt="">
                        <h1 style="color:white">LG</h1>
                    </div>
                    <div class="flx col-2 cellphone-brand center">
                        <img src="{{ asset("/images/img/windows-phone-icon.svg") }}" alt="">
                        <h1 style="color:white">Windows</h1>
                    </div>
                </div>
            </section>

            <hr>
            <div class="sell-devices">
                <div class="services-title h1-color">
                    <h1>Eladná elavult telefonját</h1>
                    <h5>Ajánlunk önnek egy árajánlatot bármely mobileszközére és közös egyeztetés után felvásároljuk üzletünkben.</h5>
                </div>
            </div>

            <section class="cellphone-purchase flex-grid center spc-arnd v-bottom">
                <div class="phone-purchase iPhone-purchase flx col-3 column right">
                    <img class="money" src="{{ asset("/images/img/money-icon.svg") }}" alt="money icon we buy phones">
                    <img class="iPhone-7" src="{{ asset("/images/img/iPhone-6-icon.svg") }}" alt="we buy iPhone 6 and 7 phones">
                </div>
                <div class="phone-purchase android-purchase flx col-3 column right">
                    <img class="money" src="{{ asset("/images/img/money-icon.svg") }}" alt="money icon we buy phones">
                    <img class="android-phone" src="{{ asset("/images/img/android-phone.svg") }}" alt="we buy Android and Nexus phones">
                </div>
                <div class="phone-purchase iPhone-plus-purchase flx col-3 column right">
                    <img class="money" src="{{ asset("/images/img/money-icon.svg") }}" alt="money icon we buy phones">
                    <img class="iPhone-7" src="{{ asset("/images/img/iPhone-6-icon.svg") }}" alt="we buy iPhone 6 and 7 phones">
                </div>
            </section>

            <section class="flex-grid purchase-banner center v-center">
                <div class="banner-text flx-col-12">
                    <div class="selling-your-device">
                        <h2>Eladni kívánt telefon esetén ezt a számot hívja!</h2>
                    </div>
                    <div class="let-us-purchase">
                        <h1 class><a href="{{ url("#") }}">484-662-3823</a></h1>
                    </div>
                </div>
            </section>


        </main>

        <footer class="footer flex-grid center spc-arnd">
            <div class="footer-button-links flx col-3 column center">
                <div class="footer-button button contact-footer button-blue"><h5>Kapcsolat</h5></div>
                <div class="footer-button button contact-footer button-blue"><a href="{{ url("phones/services") }}"><h5>Javítás</h5></a></div>
            </div>
            <div class="footer-logo flx col-3 center">
                <img src="{{ asset("/images/img/logo2.png") }}" alt="footer-logo">
            </div>
            <div class="footer-type flx col-3">
                <div class="footer-logo-type flx col-12 center column">
                   <h1>TechSpace</h1>
                </div>
            </div>
    </footer>
    <footer class="footnote"><h6>Created and maintained by Bátonyi Dávid & Kövesdi Tamás</h6></footer>
    </div>
    <script src="{{ asset("build/assets/js/javascript.js") }}"></script>
</body>

</html>