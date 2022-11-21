<nav class="navigation" id="navigation">
    <div class="nav-items">
        <button class="button nav-toggle">
            Meny
        </button>
        <button class="button button-overlay button-close">
            Lukk
        </button>
    </div>

    <div class="nav-overlay">
        <div class="container">           
            <div class="overlay">
                <h2 class="overlay-title">
                    Meny
                </h2>
                <a href="content-page-sys.php" class="link-list">
                	Systemutviklingsmetoder
                </a>
                <a href="content-page-agile.php" class="link-list">
                	Agile metoder
                </a>
                <a href="content-page-project.php" class="link-list">
                	Prosjektledelse og prosjektarbeid
                </a>
                <a href="content-page-web.php" class="link-list">
                	Webutvikling og UX
                </a>
                <a href="sources.php" class="link-list">
                	Kilder
                </a>
                <a href="about.php" class="link-list">
                    Om dette nettstedet
                </a>
            </div>
          
        </div>
        <div class="background-left"></div>
        <div class="background-right"></div>
    </div>
</nav>

<script>
	var navElement = document.querySelector('#navigation');
    var prevScrollTop = 0;
    var initialScrollEvent = true;

    // ------------------------------
    //    Nav behaviour on scroll
    // ------------------------------
    if (navElement) {
        window.addEventListener('scroll', function() {
            if (window.innerWidth >= 350) {
                if (!initialScrollEvent && !navElement.classList.contains('active')) {
                    var newScrollTop = window.pageYOffset || document.documentElement.prevScrollTop;

                    if (newScrollTop > prevScrollTop){
                        // scrolling down
                        if (newScrollTop >= 40) {
                            if (!navElement.classList.contains('is-scrolling')) {
                                navElement.classList.add('is-scrolling');
                            }
                        } else {
                            navElement.classList.remove('is-scrolling');
                        }

                        navElement.classList.remove('scrolling-up');

                        if (newScrollTop > 0) {
                            if (!navElement.classList.contains('scrolling-down')) {
                                navElement.classList.add('scrolling-down');
                            }
                        }
                    } else {
                        // scrolling up
                        if (newScrollTop >= 40) {
                            if (!navElement.classList.contains('is-scrolling')) {
                                navElement.classList.add('is-scrolling');
                            }
                        } else {
                            navElement.classList.remove('is-scrolling');
                        }

                        navElement.classList.remove('scrolling-down');

                        if (!navElement.classList.contains('scrolling-up')) {
                            navElement.classList.add('scrolling-up');
                        }
                    }

                    prevScrollTop = newScrollTop <= 0 ? 0 : newScrollTop;
                }

                initialScrollEvent = false;
            }
        });
    }

    //Function for opening and closing nav overlay
	$(function() {
        $('.nav-toggle').click(function() {
            $('.nav-overlay').toggleClass('open');
            $('.nav-toggle').toggleClass('hide');
            $('.button-close').toggleClass('button-overlay');
            $('.about-link').toggleClass('about-button');
        });

        $('.button-close').click(function() {
            $('.button-close').addClass('button-overlay');
            $('.nav-overlay').removeClass('open');
            $('.nav-toggle').removeClass('hide');
            $('.about-link').removeClass('about-button');
        });

        $('.background-left').click(function() {
            $('.button-close').addClass('button-overlay');
            $('.nav-overlay').removeClass('open');
            $('.nav-toggle').removeClass('hide');
            $('.about-link').removeClass('about-button');
        });
    });



</script>

