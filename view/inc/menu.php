<!---->

<div class="header-top">
    <div class="container">
        <div class="head-top">
            <div class="logo">

                <h1><a href="<?php amigable('?module=main'); ?>"><span> G</span>ames <span>C</span>enter</a></h1>

            </div>
            <div class="top-nav">
                <span class="menu"><img src="<?php echo IMAGES_PATH ?>menu.png" alt=""> </span>

                <ul>
                    <li class="active"><a class="color1" href="<?php amigable('?module=main'); ?>">Home</a></li>
                    <li><a class="color2" href="<?php amigable('?module=products&function=list_products'); ?>">Games</a></li>
                    <li><a class="color3" href="reviews.html">Reviews</a></li>
                    <li><a class="color4" href="404.html">News</a></li>
                    <li><a class="color5" href="blog.html">Blog</a></li>
                    <li><a class="color6" href="contact.html">Contact</a></li>
                    <div class="clearfix"> </div>
                </ul>

                <!--script-->
                <script>
                    $("span.menu").click(function() {
                        $(".top-nav ul").slideToggle(500, function() {});
                    });
                </script>

            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</div>
