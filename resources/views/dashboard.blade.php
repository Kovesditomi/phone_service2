<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TechSpace Phone Repair">
    <title>TechSpace</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Berkshire+Swash" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("build/assets/style2.css") }}">


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
    <div class="loading-screen">
        <div class="loading-icon">
            <div class="loading-part"></div>
            <div class="loading-part"></div>
            <div class="loading-part"></div>
            <div class="loading-part"></div>
        </div>
    </div>
    <div class="wrapper">
        <!--NAVIGATION FLEX ROW-->
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
                <a href="{{ url('dashboard') }}" class="nav-logo flx col-2 v-center"></a>
                <a href="{{ url('dashboard') }}" class="flx col-4 center v-center"><h5 class="button home-button button-clear">Kezdőlap</h5></a>
                <a href="{{ url('services') }}" class="flx col-4 center v-center"><h5 class="button services-button button-clear">Javítás</h5></a>
            </div>
            <div id="contact" class="flx col-2 center">
                <a href="{{ url("#") }}" class="flx col-10 center v-center"><h5 class="contact button button-blue">Kapcsolat</h5></a>
            </div>
        </nav>
        <!--- HEADER ROW-->
        <header class="header flex-grid center" role="banner">
            <div class="header-left flx col-4 center column">
               <div class="logo flx col-6 center">
                   <img src="{{ asset("/images/img/logo2.png") }}" alt="TechSpaceRepair" >
               </div>
               <div class="logo-type flx col-4 center column">
                   <h1>TechSpace</h1>
                   <h2>OKOS ESZKÖZÖK JAVÍTÁSA</h2>
               </div>
               <div class="flx col-2 center v-center">

                   <a href="{{ url('public/services') }}" class="button hero-button button-blue"><h1>JAVÍTÁS</h1></a>
               </div>
            </div>
            <div class="header-right flx col-6 left column">
                <div class="iPhone flx col-6 center v-top">
                    <img src="{{ asset("/images/img/iPhone.svg") }}" alt="">
                </div>
                <div class="motto flx col-2 column center v-center">
                    <h4>Telefonokat javítunk.</h4>
                </div>
                <div class="iPhone-charger flx col-2">
                    <img src="{{ asset("/images/img/iPhonecharger.svg") }}" alt="">
                </div>
            </div>
        </header>

        <main>
            
            <section class="hero">
                
                <div class="hero-images flex-grid spc-btwn">
                    <div class="apple-repair flx col-6">
                        <div class="overlay">
                            <div class="selected"></div>
                            <h1 class="title">Apple</h1>
                            <h1 class="subheading">JAVÍTÁS</h1>
                            <div class="selected"></div>
                            <a href="{{ url("phones/apple") }}" class="view-all button button-clear"><h4>Tovább</h4></a>
                        </div>
                    </div>
                    <div class="samsung-repair flx col-6">
                        <div class="overlay">
                            <div class="selected"></div>
                            <h1 class="title">Samsung</h1>
                            <h1 class="subheading">JAVÍTÁS</h1>
                            <div class="selected"></div>
                            <a href="{{ route('samsung.index') }}" class="view-all button button-clear"><h4>Tovább</h4></a>
                        </div>
                    </div>
                </div>
                <div class="hero-images flex-grid spc-btwn">
                    <div class="xiaomi-repair flx col-4">
                       <div class="overlay">
                            <div class="selected"></div>
                            <h1 class="title">Xiaomi</h1>
                            <h1 class="subheading">JAVÍTÁS</h1>
                            <div class="selected"></div>
                            <a href="{{ url("phones/xiaomi") }}" class="view-all button button-clear"><h4>Tovább</h4></a>
                        </div>
                    </div>
                    <div class="pixel-services flx col-4">
                        <div class="overlay">
                            <div class="selected"></div>
                            <h1 class="title">Pixel</h1>
                            <h1 class="subheading">JAVÍTÁS</h1>
                            <div class="selected"></div>
                            <a href="{{ url("phones/pixel") }}" class="view-all button button-clear"><h4>Tovább</h4></a>
                        </div>
                    </div>
                    <div class="nokia-repair flx col-4">
                        <div class="overlay">
                            <div class="selected"></div>
                            <h1 class="title">Nokia</h1>
                            <h1 class="subheading">JAVÍTÁS</h1>
                            <div class="selected"></div>
                            <a href="{{ url("phones/nokia") }}" class="view-all button button-clear"><h4>Tovább</h4></a>
                        </div>
                    </div>                   
                </div>
               
            </section>
        
        
         
        
        </main>
        <section class="appointment-wrapper flex-grid spc-arnd">
            <div class="appointment flx col-11">
                <div class="appointment-overlay">
                    <a href="{{ url("tel:4842933823") }}" class="set-up-appointment button button-blue"><h1>KATTINTS AZ EGYEZTETÉSHEZ</h1></a>
                    <h1>IDŐPONT EGYEZTETÉS</h1>
                    <h3><a href="{{ url("tel:4847149484") }}">484-714-9484</a></h3>
                </div>
            </div>
         </section> 

         <section class="map flex-grid spc-arnd v-center">
             <div class="map-card flx address col-4 column center">
                 <img src="{{ asset("images/img/address-card-icon.svg") }}" alt="Address Card Icon" class="card-icon">
                 <h1>Cím</h1>
                 <h5><a href="{{ url("") }}">Balassagyarmat</a></h5>
                 <h5><a href="{{ url("") }}">Mikszáth Kálmán u. 56, 2660</a></h5>
             </div>
             <div class="map-card flx phone-number col-4 column center">
                 <img src="{{ asset("images/img/phone-card-icon.svg") }}" alt="Address Card Icon" class="card-icon">
                 <h1>Telefonszám:</h1>
                 <h2>484-714-9484</h2>
             </div>
             <div class="map-card flx email col-4 column center">
                 <img src="{{ asset("images/img/email-card-icon.svg") }}" alt="Address Card Icon" class="card-icon">
                 <h1>E-mail</h1>
                 <h5><a href="{{ url("") }}">TechSpaceRepair@gmail.com</a></h5>
             </div>
         </section>

        <footer class="footer flex-grid center spc-arnd">
                <div class="footer-button-links flx col-3 column center">
                    <div class="footer-button button contact-footer button-blue"><h5>Kapcsolat</h5></div>
                    <div class="footer-button button contact-footer button-blue"><a href="{{ url("services") }}"><h5>Javítás</h5></a></div>
                </div>
                <div class="footer-logo flx col-3 center">
                    <img src="{{ asset("images/img/logo2.png") }}" alt="footer-logo">
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

