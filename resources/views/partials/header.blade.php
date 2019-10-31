<header>
    <div id="header-mobile">
        <ul>
            <li>
                <div id="icon">
                    <div id="hamburger"></div>
                </div>
            </li>
            <li><i class="fas fa-phone"></i></li>
            <li><i class="fas fa-envelope-square"></i></li>
        </ul>
    </div>
    <div id="header-responsive">
        <div class="header-responsive-sec">
            <nav>
                <ul>
                    <li>
                        <span id="logo-text">HOMMET</span><br /><span id="logo-aide">Real Estate Services</span>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-responsive-sec">
            <nav>
                <ul>
                    <li>HOMES</li>
                    <li>PROPERTIES</li>
                    <li>COMMUNITIES</li>
                    <li>BUYERS</li>
                    <li>SELLERS</li>
                    <li>ABOUT</li>
                    <li>CONTACT</li>
                </ul>
            </nav>
        </div>
        <div class="header-responsive-sec">
            <nav>
                <ul>
                    <li><i class="fas fa-phone"></i></li>
                    <li><i class="fas fa-envelope-square"></i></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="header-container">
        <nav id="left-side">
            <ul>
                <li>
                    <!--<i class="fab fa-autoprefixer fa-3x"></i>--><span id="logo-text">HOMMET</span><br /><span
                        id="logo-aide">Real Estate Services</span>
                </li>
            </ul>
        </nav>
        <nav id="right-side">
            <ul id="top-nav">
                <li class="top-main" id="social-media">
                    <ul>
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-youtube"></i></li>
                        <li><i class="fab fa-linkedin"></i></li>
                        <li><i class="fab fa-pinterest"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                    </ul>
                </li>
                <li class="top-main"><i class="fas fa-phone"></i> 123.456.7890</li>
                <li class="top-main"><i class="fas fa-envelope-square"></i> agent@hommet.com</li>
            </ul>
            <ul id="bottom-nav">
                <li class="main-categories">
                    <span class="main-categories-text">HOME</span>
                </li>
                <li class="main-categories">
                    <span class="main-categories-text">PROPERTIES</span>
                </li>
                <li class="main-categories">
                    <i class="caret fas fa-chevron-down fa-1x"></i>
                    <span class="main-categories-text">COMMUNITIES</span>
                </li>
                <li class="main-categories">
                    <i class="caret fas fa-chevron-down fa-1x"></i>
                    <span class="main-categories-text">BUYERS</span>
                </li>
                <li class="main-categories">
                    <span class="main-categories-text">SELLERS</span>

                </li>
                <li class="main-categories">
                    <span class="main-categories-text">ABOUT</span>
                </li>
                <li class="main-categories">
                    <span class="main-categories-text">CONTACT</span>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    $(function () {
        $(window).scroll(function () {
        if ($(window).scrollTop() >= 85 && $('header #header-responsive').width() > 1094) {
            $('header #header-responsive').css({
                position: 'fixed',
                width: '100%',
                top: '0',
                transition: '.5s ease',
                opacity: '1'
                });
        } else {
            $('header #header-responsive').css({
                top: '-100%',
                opacity: '0'
            });
        }
    });
    });

    

</script>
