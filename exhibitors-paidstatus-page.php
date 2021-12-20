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
        <meta name="keywords" content="Exhibitors" />
        <meta name="description" content="Exhibitors" />
        <meta name="author" content="Exhibitors" />

        <link rel="icon" href="public/images/fav.png" type="image/x-icon" />
        <title>Exhibitors Paid Status</title>
        <?php include "main_link_css.php"; ?>
    </head>

    <body>

        <?php include "subpage-header.php"; ?>

        <section class="seat-allotment-sec">
            <div class="container">
                <div class="wrapper">
                    <div class="col-12 col-md-12 p-0">
                        <h2>Exhibitors Paid Status</h2>
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
                                    <th width="10%">Total Value</th>
                                    <th width="10%">Balance</th>
                                    <th width="10%">Add Value 1</th>
                                    <th width="10%">Add Value 2</th>
                                    <th width="10%">Add Value 3</th>
                                    <th width="10%">Phone NO</th>
                                    <th width="10%">Reference No</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $sql = "select * from  `exhibitor_paid_status`";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    //$row = mysqli_fetch_assoc($result);
                                    //echo $row['name'];
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $total_value = $row['total_value'];
                                        $balance = $row['balance'];
                                        $value_one = $row['value_one'];
                                        $value_two = $row['value_two'];
                                        $value_three = $row['value_three'];
                                        $phone_no = $row['phone_no'];
                                        $reference_no = $row['reference_no'];

                                        echo '<tr>
      <th scope="row">' . $id . ' </th>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $total_value . '</td>
      <td>' . $balance . '</td>
      <td>' . $value_one . '</td>
      <td>' . $value_two . '</td>
      <td>' . $value_three . '</td>
       <td>' . $phone_no . '</td>
        <td>' . $reference_no . '</td>
     
      <td>
      <div class="btn-group">
      <button class="btn btn-primary btn-sm"><a href="exhibitor-edit.php?updateid=' . $id . '" class="text-light">Edit</a></button>
<button class="btn btn-danger btn-sm"><a href="exhibitor-delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
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
    header("Location: exhibitor-admin-login.php");
    exit();
}
?>