<!--FOOTER-->
<footer>
    <div class="container">

        <div class="__logo">
            <a href="#">
                DEVELOPER
            </a>

            <span>Backend developer</span>
        </div><!--__logo-->

        <div class="__navigation">
            <nav>
                <ul>
                    <li><a href="index.php">Services</a></li>
                    <li><a href="index.php">Portfolio</a></li>
                    <li><a href="index.php">Contact me</a></li>
                </ul>
            </nav>
        </div><!--__navigation-->

        <div class="__social">
            <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-whatsapp"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
        </div><!--__social-->

    </div><!--container-->

    <div class="last_content">
        @FelipeMasson. All right reserved
    </div><!--last_content-->
</footer>

<script type="text/javascript" src="assets/js/modernizr.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script src="assets/js/swiper/swiper-bundle.min.js"></script>


<script>
    $(document).ready(function() {
        $('.menu_mobile').click(function() {
            $(this).toggleClass("ativo");
        });
    });
</script>

<script>
    var swiper = new Swiper('.mySwiperArchives', {
        slidesPerView: 1,
        slidesPerColumn: 2,
        spaceBetween: 60,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            630: {
                slidesPerView: 2,
                spaceBetween: 60,
            },
        },
    });
</script>


<script>
    var swiper = new Swiper('.mySwiperPorfolio', {
        slidesPerView: 1,
        slidesPerColumn: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            580: {
                slidesPerView: 2,
                spaceBetween: 80,
            },
            700: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });
</script>