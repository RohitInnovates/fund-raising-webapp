<?php
session_start();
if (isset($_SESSION["aid"])) {
} else {
    echo "<script>alert('First Login Then Goto NextZone');window.location.href='../login.php'</script>";
}
?>
<html>

<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/hover-min.css" rel="stylesheet" />
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style>
        #menu a {
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="min-height:90px;background:blue;text-align:center;color:white;font-size:40px">Welcome to Admin Zone</div>
        </div>
        <div class="row">
            <div id="menu" class="col-sm-2" style="min-height:600px;background:silver">
                <br />
                <span class="fa fa-dashboard" style="font-size:25px"></span><a href="dashboard.php">Dashboard</a><br /><br />
                <span class="fa fa-users" style="font-size:20px"></span><a href="volunteermgmt.php">Volunteer Mgmt</a><br /><br />
                <span class="fa fa-users" style="font-size:20px"></span><a href="donatemgmt.php">Donate Mgmt</a><br /><br />
                <span class="fa fa-users" style="font-size:20px"></span><a href="contactmgmt.php">Contact Mgmt</a><br /><br />
                <span class="fa fa-edit" style="font-size:20px"></span><a href="addnews.php">Add News</a><br /><br />
                <span class="fa fa-pencil" style="font-size:20px"></span><a href="newsmgmt.php">New Mgmt</a><br /><br />
                <span class="fa fa-edit" style="font-size:20px"></span><a href="changepass.php">Chanage Pass</a><br /><br />
                <span class="fa fa-user" style="font-size:20px;color:red"></span><a href="logout.php">Logout</a><br /><br />
            </div>
            <div class="col-sm-10" style="min-height:550px;">
                <!--Page Block section -->
                <div class="row">
                    <div class="col-sm-12">
                        <h1 style="text-align:center">Volunteer Management</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-responsiv">
                            <tr>
                                <th>Sr.No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email Address</th>
                                <th>Mobile</th>
                                <th>Profile</th>
                                <th>Address</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            require "../config.php";
                            $db = (new Db())->dbConnection();
                            $cmd = "select * from volunteer";
                            $stm = $db->query($cmd);
                            if ($rows = $stm->fetchAll()) {
                                $a = 0;
                                foreach ($rows as $row) {
                                    $a++;
                                    echo "<tr><td>$a</td><td>" . $row["name"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["email"] . "</td><td>" . $row["mob"] . "</td><td><img src=../volunteers/" . $row["profile"] . " height='40px' width='50px'/></td><td>" . $row["address"] . "</td><td>" . $row["vdt"] . "</td><td><a href='../codes/delvol.php/?v=" . $row["email"] . "'><span class='fa fa-trash' style='color:red;font-size:15px'></span></a></td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No Record Available into Database </td></tr>";
                            }

                            ?>
                        </table>
                    </div>
                </div>
                <!--End Page block section --->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="min-height:50px;background:blue;text-align:center;font-size:20px;color:white;">
                Copyright &copy Mecatredz Technology Developed & Designed By Er. Ram
            </div>
        </div>
    </div>
</body>

</html>