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
    $sql = "insert into `visitor` (name,email,contact,company_name,city,id_card_type,id_card_no,status) values('$name','$email','$contact','$company_name','$city','$id_card_type','$id_card_no','$status')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Congratulation Your Data Saved Sucessfully!";
        //header('location:display.php');
        //echo '<script>alert("Congratulation Your Data Sucessfully Submitted");</script>';
    } else {
        die(mysqli_error($conn));
    }
    $subjectName = $_POST['subject'];
    $message = $_POST['message'];

    $to = $email;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . $fromEmail . '<' . $fromEmail . '>' . "\r\n" . 'Reply-To: ' . $fromEmail . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">' . $message . '</span>
				<div class="container">
                 ' . $message . '<br/>
                    Regards<br/>
                  ' . $fromEmail . '
				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="index.php";</script>';

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
    <title>Register to Visit</title>
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
                    <h2>Visitor Registration</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="subpage-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <form method="POST" action="" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="text" name="fromEmail" id="fromEmail" class="form-control"
                                value="info@codingbirdsonline.com" readonly required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Name: <span>*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value=""
                                placeholder="Enter your name" required="">
                            <small class="text-danger pull-right">As per your ID Proof</small>
                        </div>
                        <div class="form-group">
                            <label>Email: <span>*</span></label>
                            <input type="text" class="form-control" id="email" name="email" value=""
                                placeholder="Email Address" required="">
                        </div>
                        <div class="form-group">
                            <label>Conatct number: <span>*</span></label>
                            <input type="text" class="form-control" id="number" name="contact" value=""
                                placeholder="Conatct number" required="">
                        </div>
                        <div class="form-group">
                            <label>Company name: <span>*</span></label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value=""
                                placeholder="Company name" required="">
                        </div>
                        <div class="form-group">
                            <label>City:<span>*</span></label>
                            <input type="text" class="form-control" id="city" required="" name="city" value=""
                                placeholder="City">
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
                            <input type="text" class="form-control" id="id_card_no" name="id_card_no" value=""
                                placeholder="ID Card No" required="">
                            <small class="text-danger pull-right">Carry the same ID in original</small>
                        </div>
                        <div class="form-group">
                            <label>Status:<span></span></label>
                            <input type="text" class="form-control" id="status" disabled value="nil" name="status"
                                placeholder="Status">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Subject <span style="color: #FF0000">*</span></label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Message <span style="color: #FF0000">*</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Message"
                                required></textarea>
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