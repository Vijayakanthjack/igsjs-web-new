<?php
include 'db_conn.php';
$id = $_GET['updateid'];
$sql = "Select * from `visitor` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$contact = $row['contact'];
$company_name = $row['company_name'];
$city = $row['city'];
$id_card_type = $row['id_card_type'];
$id_card_no = $row['id_card_no'];
$status = $row['status'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $company_name = $_POST['company_name'];
    $city = $_POST['city'];
    $id_card_type = $_POST['id_card_type'];
    $id_card_no = $_POST['id_card_no'];
    $status = $_POST['status'];

    $sql = "update `visitor` set id=$id, name='$name', email='$email', contact='$contact', company_name='$company_name', city='$city', id_card_type='$id_card_type', id_card_no='$id_card_no', status='$status' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Congratulation Your Data Sucessfully Submitted";
        header('location:visitors-page.php');
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
    <meta name="keywords" content="Register to Visit" />
    <meta name="description" content="Register to Visit" />
    <meta name="author" content="Register to Visit" />

    <link rel="icon" href="public/images/fav.png" type="image/x-icon" />
    <title>Edit Visitor </title>
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
                    <h2>Edit Visitor </h2>
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

                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required="" value="<?php echo $name; ?>">
                            <small class=" text-danger pull-right">As per your ID Proof</small>
                        </div>


                        <div class="form-group">
                            <label>Email: <span>*</span></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required="" value="<?php echo $email; ?>">
                        </div>

                        <div class=" form-group">
                            <label>Conatct number: <span>*</span></label>
                            <input type="text" class="form-control" id="number" name="contact" placeholder="Conatct number" required="" value="<?php echo $contact; ?>">
                        </div>

                        <div class=" form-group">
                            <label>Company name: <span>*</span></label>
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company name" required="" value="<?php echo $company_name; ?>">
                        </div>




                        <div class="form-group">
                            <label>City:<span>*</span></label>
                            <input type="text" class="form-control" id="city" required="" name="city" placeholder="City" value="<?php echo $city; ?>">

                        </div>

                        <!-- <div class="form-group">
                            <label>ID Proof:<span>*</span></label>
                            <input type="text" class="form-control" id="id_card_type" required="" name="id_card_type" placeholder="id_card_type" value="<?php echo $id_card_type; ?>">

                        </div> -->

                        <div class="form-group">
                            <label for="idproof">ID Proof:<span>*</span></label>
                            <select class="form-control id-proof" id="idproof" name="id_card_type">
                                <option selected><?php echo $id_card_type; ?></option>
                                <option value="Pan Card">Pan Card</option>
                                <option value="Passport">Passport</option>
                                <option value="Voter ID">Voter ID</option>
                                <option value="Aadhar ID">Aadhar ID</option>
                                <option value="Driving License">Driving License</option>
                            </select>
                            <small class="text-danger pull-right">As per your ID Proof</small>
                        </div>





                        <div class="form-group card-no">
                            <label>ID Card No: <span>*</span></label>

                            <input type="text" class="form-control" id="id_card_no" name="id_card_no" placeholder="ID Card No" required="" value="<?php echo $id_card_no; ?>">
                            <small class=" text-danger pull-right">Carry the same ID in original</small>
                        </div>

                        <!-- <div class="form-group">
                            <label>Status:<span>*</span></label>
                            <input type="text" class="form-control" id="status" required="" name="status" placeholder="Status" value="<?php echo $status; ?>">

                        </div> -->

                        <div class="form-group">
                            <label for="idproof">Status:<span>*</span></label>
                            <select class="form-control" id="status" name="status">
                                <option selected><?php echo $status; ?></option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                            </select>

                            <small class="text-danger pull-right">As per your ID Proof</small>
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