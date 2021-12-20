<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Stall Enquiry" />
    <meta name="description" content="Stall Enquiry" />
    <meta name="author" content="Stall Enquiry" />

    <link rel="icon" href="public/images/fav.png" type="image/x-icon" />
    <title>Stall Enquiry</title>
    <?php include "main_link_css.php"; ?>
</head>

<body>

    <?php include "subpage-header.php"; ?>

    <!-- Reason to Visit Conent Begins -->
    <section class="subheading-sec">
        <div class="container">
            <div class="wrapper">
                <div>
                    <h2>Stall Enquiry</h2>
                    <p>Post your stall enquiry here. Our marketing team will contact you</p>
                </div>
            </div>
        </div>
    </section>

    <section class="subpage-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2>POST YOUR STALL ENQUIRY</h2>
                </div>
                <div class="col-12 col-md-12">

                    <form id="my-form" action="https://formspree.io/f/xqkwrgeq" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Name: <span>*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter your name" required="">
                        </div>


                        <div class="form-group">
                            <label>Email: <span>*</span></label>
                            <input type="text" class="form-control" id="email" name="email" value="" placeholder="Email Address" required="">
                        </div>

                        <div class="form-group">
                            <label>Conatct number: <span>*</span></label>
                            <input type="text" class="form-control" id="number" name="number" value="" placeholder="Conatct number" required="">
                        </div>

                        <div class="form-group">
                            <label>Company name: <span>*</span></label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="" placeholder="Company name" required="">
                        </div>



                        <div class="form-group">
                            <label>City:<span>*</span></label>
                            <input type="text" class="form-control" id="city" required="" name="city" value="" placeholder="City">



                        </div>

                        <!--<div class="form-group">-->
                        <!--    <label>ID Proof:<span>*</span></label>-->
                        <!--    <input type="file" name="attachment" accept="image/png, image/jpeg">-->
                        <!--</div>-->
                        <div class="form-group">
                            <label>ID Card No: <span>*</span></label>
                            <input type="text" class="form-control" id="proof_no" name="proof_no" value="" placeholder="ID Card No" required="">
                        </div>

                        <div class="form-group text-center">
                            <input type="hidden" name="_subject" id="email-subject" value="Registration Form Submission">

                            <button id="my-form-button" class="btn btn-danger btn-submit">Submit</button>
                            <p id="my-form-status"></p>


                        </div>
                    </form>
                    <script>
                        var form = document.getElementById("my-form");

                        async function handleSubmit(event) {
                            event.preventDefault();
                            var status = document.getElementById("my-form-status");
                            var data = new FormData(event.target);
                            fetch(event.target.action, {
                                method: form.method,
                                body: data,
                                headers: {
                                    'Accept': 'application/json'
                                }
                            }).then(response => {
                                status.innerHTML = "Thanks for your submission!";
                                form.reset()
                            }).catch(error => {
                                status.innerHTML = "Oops! There was a problem submitting your form"
                            });
                        }
                        form.addEventListener("submit", handleSubmit)
                    </script>

                </div>
            </div>

        </div>
    </section>
    <!-- About Us Conent Ends -->

    <!-- Modal POP Up -->

    
    <?php include "footer.php"; ?>
    <?php include "main_link_js.php"; ?>


</body>

</html>