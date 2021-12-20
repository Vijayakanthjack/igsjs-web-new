<?php
include 'db_conn.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $company_name = $_POST['company_name'];
    $city = $_POST['city'];
    $id_card_type = $_POST['id_card_type'];
    $id_card_no = $_POST['id_card_no'];
    $status = $_POST['status'];
    $booths = $_POST['booths'];
    
    $sql = "insert into `exhibitor` (name,email,contact,company_name,city,id_card_type,id_card_no,status,booths) values('$name','$email','$contact','$company_name','$city','$id_card_type','$id_card_no','$status','$booths')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Congratulation Your Data Sucessfully Updated!";
        //header('location:display.php');
        //echo '<script>alert("Congratulation Your Data Sucessfully Submitted");</script>';
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Exhibitor Registration" />
    <meta name="description" content="Exhibitor Registration" />
    <meta name="author" content="Exhibitor Registration" />

    <link rel="icon" href="public/images/fav.png" type="image/x-icon" />
    <title>Exhibitor Registration</title>
    <?php include "main_link_css.php"; ?>
</head>

<!-- <style type="text/css">
    .card-no {
        display: none;
    }
</style> -->

<body>

    <?php include "subpage-header.php"; ?>

    <section class="seat-allotment-sec">
        <div class="container">
            <div class="wrapper">
                <div class="col-12 col-md-12 p-0">
                    <h2>Exhibitor Registration</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="subpage-content">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-12">

                    <form method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Name: <span>*</span></label>

                            <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter your name" required="">
                            <small class="text-danger pull-right">As per your ID Proof</small>
                        </div>


                        <div class="form-group">
                            <label>Email: <span>*</span></label>
                            <input type="text" class="form-control" id="email" name="email" value="" placeholder="Email Address" required="">
                        </div>

                        <div class="form-group">
                            <label>Conatct number: <span>*</span></label>
                            <input type="text" class="form-control" id="number" name="contact" value="" placeholder="Conatct number" required="">
                        </div>

                        <div class="form-group">
                            <label>Company name: <span>*</span></label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="" placeholder="Company name" required="">
                        </div>




                        <div class="form-group">
                            <label>City:<span>*</span></label>
                            <input type="text" class="form-control" id="city" required="" name="city" value="" placeholder="City">

                        </div>

                        <!-- <div class="form-group">
                            <label>ID Proof:<span>*</span></label>
                            <input type="text" class="form-control" id="id_card_type" required="" name="id_card_type" value="" placeholder="id_card_type">

                        </div> -->




                        <div class="form-group">
                            <label for="idproof">ID Proof:<span>*</span></label>
                            <select class="form-control id-proof" id="idproof" name="id_card_type">
                                <option selected>Choose the card type</option>
                                <option value="Pan Card">Pan Card</option>
                                <option value="Passport">Passport</option>
                                <option value="Voter ID">Voter ID</option>
                                <option value="Aadhar ID">Aadhar ID</option>
                                <option value="Driving License">Driving License</option>
                            </select>
                            <small class="text-danger pull-right">As per your ID Proof</small>
                        </div>



                        <div class="form-group card-no">
                            <label>ID Proof No: <span>*</span></label>

                            <input type="text" class="form-control" id="id_card_no" name="id_card_no" value="" placeholder="ID Card No" required="">
                            <small class="text-danger pull-right">Carry the same ID in original</small>
                        </div>

                        <div class="form-group">
                            <label for="booths">Booths Need:<span>*</span></label>
                            <select class="form-control booths" id="booths" name="booths">
                                <option selected>Choose the Booth</option>
                                <option value="3 sq.mt">Three SQ.MT. Booth – Rs. 2,25000 / USD 3100</option>
                                <option value="5 sq.mt">Five SQ.MT. Booth – Rs. 2,50000 / USD 4100</option>

                            </select>

                            <small class="text-danger pull-right">Choose the booth</small>
                        </div>

                        <div class="form-group ">
                            <label>Status:<span></span></label>
                            <input type="text" class="form-control" id="status" disabled value="nil" name="status" placeholder="Status">

                        </div>

                        <div class="form-group text-center">


                            <button type="submit" name="submit" class="btn btn-danger btn-submit">Submit</button>
                            <p id="my-form-status"></p>


                        </div>
                    </form>



                </div>
            </div>

        </div>
    </section>
    <!-- About Us Conent Ends -->

    <?php include "footer.php"; ?>
    <?php include "main_link_js.php"; ?>



</body>

</html>