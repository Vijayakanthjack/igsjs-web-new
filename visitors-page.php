<?php
include 'db_conn.php';
?>
<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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
        <title>visitors Page</title>
        <?php include "main_link_css.php"; ?>
    </head>

    <body>

        <?php include "subpage-header.php"; ?>

        <section class="seat-allotment-sec">
            <div class="container">
                <div class="wrapper">
                    <div class="col-12 col-md-12 p-0">
                        <h2>Visitors</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="subpage-content-visitors">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 text-right">
                        <a href="visitor-admin-login.php" class="btn btn-danger">Logout</a>
                    </div>

                    <div class="col-md-12 col-12 mt-3">
                        <table class="table table-striped" width="100%">
                            <thead>
                                <tr style="background:#0195b5; color:#fff; font-size:1rem;">
                                    <th width="2%">#</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Email</th>
                                    <th width="10%">Contact No</th>
                                    <th width="15%">Company Name</th>
                                    <th width="5%">City</th>
                                    <th width="10%">ID Card type</th>
                                    <th width="10%">ID Card No</th>
                                    <th width="10%">Status</th>
                                    <th width="15%">Operations</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $sql = "select * from  `visitor`";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    //$row = mysqli_fetch_assoc($result);
                                    //echo $row['name'];
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $contact = $row['contact'];
                                        $company_name = $row['company_name'];
                                        $city = $row['city'];
                                        $id_card_type = $row['id_card_type'];
                                        $id_card_no = $row['id_card_no'];
                                        
                                        $status = $row['status'];
                                        echo '<tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $contact . '</td>
      <td>' . $company_name . '</td>
      <td>' . $city .'</td>
      <td>' . $id_card_type . '</td>
      <td>' . $id_card_no . '</td>
      <td>' . $status . '</td>

      <td>
      <div class="btn-group">
      <button class="btn btn-primary btn-sm"><a href="visitor-edit.php?updateid=' . $id . '" class="text-light">Edit</a></button>
<button class="btn btn-danger btn-sm"><a href="visitor-delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
</div>
      </td>
    </tr>';
                                    }
                                }

                                ?>

                         

                            </tbody>
                        </table>
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

<?php
} else {
    header("Location: visitor-admin-login.php");
    exit();
}
?>