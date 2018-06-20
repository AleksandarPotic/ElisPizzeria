<div class="row">
    <div id="header-container" class="col-12">
        <a class="navbar-brand ml-3" href="{{ route('home') }}">
            <div class="col-12" id="logo"></div></a>

        <!--//////////////////////////////////////////// MOBILE NAVIGATION START ///////////////////////////////////-->
        <div class="mobile">
            <nav class="navbar navbar-expand-lg" style="display: flex; width: 100%;" style="display: none; width: 100%;" id="nav1">
                <!--ovde menjaj flex sa none i sa ovim dole nav2, znaci nav1 je kad nije ulogovan a nav2 ide display flex kad je ulogovan -->
                <a class="navbar-brand" id="brand" href="{{ route('home') }}"><img class="img-fluid" src="{{asset('user/assets/images/elis-logo-mobile.png')}}"></a>
                <div id="red pull-right">
                    <ul class="list-inline" id="whole-list">
                         <li class="list-inline-item" id="facebook">
                            <a href="https://www.facebook.com/elis.494.4444/"><i style="padding-bottom: 2px;" id="mobile-cart" class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <button style="outline: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars" id="mobile-cart"></i>

                            </button>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end w-100">
                        <li class="bottom-row nav-item">
                            <a class="nav-link" id="bottom-row2" href="{{ route('menu') }}"><span>MENU</span><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bottom-row2" href="{{ route('wings') }}"><span>ELI'S WING FACTORY</span><span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bottom-row2" href="{{ route('special') }}"><span>SPECIALS</span><span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bottom-row2" href="{{ route('contact') }}"><span>CONTACT</span><span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bottom-row2" href="{{ route('online.order') }}"><span>ORDER ONLINE</span><span class="sr-only"></span></a>
                        </li>

                    </ul>

                </div>

            </nav>
            <!-- OVO JE MOBILNI MENI KADA JE ULOGOVAN -->

        </div>

        <!-- OVO JE MOBILNI MENI KADA JE ULOGOVAN -->

        <!--//////////////////////////////////////////// MOBILE NAVIGATION END /////////////////////////////-->


        <!--//////////////////////////////////////////// DESKTOP NAVIGATION START /////////////////////////-->
        <div class="desktop">

            <nav class="navbar navbar-expand-md" style="width: 100%;" style="display: none; width: 100%;" id="nav">
                <div class="navbar-toggler-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse flex-column" id="navbar">

                    <ul class="navbar-nav justify-content-end w-100">
                        <li class="bottom-row nav-item">
                            <a class="nav-link" id="bottom-row" href="{{ route('menu') }}"><span>MENU</span><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bottom-row" href="{{ route('wings') }}"><span>ELI'S WING FACTORY</span><span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bottom-row" href="{{ route('special') }}"><span>SPECIALS</span><span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bottom-row" href="{{ route('contact') }}"><span>CONTACT</span><span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bottom-row" href="{{ route('online.order') }}"><span>ORDER ONLINE</span><span class="sr-only"></span></a>
                        </li>

                        <li class="nav-item" id="numbers">
                            <a class="nav-link" id="bottom-row" href="#">902-494-4444<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item" id="facebook">
                            <a class="nav-link" id="bottom-row" href="https://www.facebook.com/elis.494.4444/"><i class="fab fa-facebook-square"></i></a>
                        </li>

                    </ul>

                </div>

            </nav>

        </div>

        <!--//////////////////////////////////////////// DESKTOP NAVIGATION END /////////////////////////-->

    </div> <!-- HEADER CONTAINER END -->

</div>	<!-- ROW END -->


