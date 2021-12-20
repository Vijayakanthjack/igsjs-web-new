<link rel="stylesheet" href="public/css/bootstrap.css">
<link rel="stylesheet" href="public/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/animate.min.css">
<link rel="stylesheet" href="public/css/responsive.css">
<link rel="stylesheet" href="public/css/jquery-ui.css" />
<link rel="stylesheet" href="public/css/owl.carousel.min.css" />
<link rel="stylesheet" href="public/css/owl.theme.default.min.css" />

<!-- <link rel="stylesheet" href="public/css/bsnav.min.css" /> -->
<link rel="stylesheet" href="public/css/hover-min.css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
<!-- Include Below JS After Your jQuery.min File -->
<script src="public/js/jquery-3.3.1.min.js"></script>

<style type="text/css">
    header .btm-subpage-header nav {
        padding: 0.1rem 0rem;
        width: 100%;
        background: #871b48;
    }

    body.offcanvas-active {
        overflow: hidden;
    }

    .offcanvas-header {
        display: none;
    }

    .screen-darken {
        height: 100%;
        width: 0%;
        z-index: 30;
        position: fixed;
        top: 0;
        right: 0;
        opacity: 0;
        visibility: hidden;
        background-color: rgba(34, 34, 34, 0.6);
        transition: opacity .2s linear, visibility 0.2s, width 2s ease-in;
    }

    .screen-darken.active {
        z-index: 2;
        transition: opacity .3s ease, width 0s;
        opacity: 1;
        width: 100%;
        visibility: visible;
    }

    /* ============ mobile view ============ */
    @media all and (max-width: 991px) {

        .offcanvas-header {
            display: block;
            text-align: right;
        }

        .mobile-offcanvas {
            visibility: hidden;
            transform: translateX(-100%);
            border-radius: 0;
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1200;
            width: 80%;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: visibility .3s ease-in-out, transform .3s ease-in-out;
        }

        .mobile-offcanvas.show {
            visibility: visible;
            transform: translateX(0);
            z-index: 99999;
        }

        .mobile-offcanvas .container,
        .mobile-offcanvas .container-fluid {
            display: block;
        }

    }

    /* ============ mobile view .end// ============ */
</style>

<script type="text/javascript">
    function darken_screen(yesno) {
        if (yesno == true) {
            document.querySelector('.screen-darken').classList.add('active');
        } else if (yesno == false) {
            document.querySelector('.screen-darken').classList.remove('active');
        }
    }

    function close_offcanvas() {
        darken_screen(false);
        document.querySelector('.mobile-offcanvas.show').classList.remove('show');
        document.body.classList.remove('offcanvas-active');
    }

    function show_offcanvas(offcanvas_id) {
        darken_screen(true);
        document.getElementById(offcanvas_id).classList.add('show');
        document.body.classList.add('offcanvas-active');
    }

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('[data-trigger]').forEach(function(everyelement) {

            let offcanvas_id = everyelement.getAttribute('data-trigger');

            everyelement.addEventListener('click', function(e) {
                e.preventDefault();
                show_offcanvas(offcanvas_id);

            });
        });

        document.querySelectorAll('.btn-close').forEach(function(everybutton) {

            everybutton.addEventListener('click', function(e) {
                e.preventDefault();
                close_offcanvas();
            });
        });

        document.querySelector('.screen-darken').addEventListener('click', function(event) {
            close_offcanvas();
        });

    });
    // DOMContentLoaded  end
</script>


<!-- <style>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #163c54;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;


    }

    .sidenav .nav-link {
        padding: 8px 15px;
    }

    .sidenav a {
        padding: 8px 8px 8px 5px;
        text-decoration: none;
        font-size: 14px;
        color: #afafaf;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #afafaf;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 35px;
        margin-left: 30px;
    }

    #main {
        transition: margin-left .5s;
        padding: 0px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
</style> -->