<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery-ui.min.js"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/js/prism.js"></script>
<script src="public/js/numscroller-1.0.js"></script>
<!-- <script src="/public/js/bsnav.min.js"></script> -->

<script>
    $(".hovermenu").click(function(e) {
        e.stopPropagation();
    });

    $('body').click(function() {
        $('.hovermenu').hide();
    });
</script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>

<script>
    $(document).ready(function() {
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: true // default
        })
        wow.init();
    });
</script>

<script type="text/javascript">
    $(".dropdown").hover(
        function() {
            $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
            $(this).addClass('open');
        },
        function() {
            $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
            $(this).removeClass('open');
        });
</script>

<script type="text/javascript">
    $(document).on("scroll", function() {
        if ($(document).scrollTop() > 150) {
            $("#header-bottom").addClass("shrink");

            $(".menu-in a").css({
                'color': '#000'
            });
            $(".l-heading").css({
                'color': '#000'
            });

        } else {
            $("#header-bottom").removeClass("shrink");
            $(".menu-in a").css({
                'color': '#000'
            });
            $(".l-heading").css({
                'color': '#000'
            });
        }
    });
</script>