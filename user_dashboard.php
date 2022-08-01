<?php
// include("data_class.php");
include("data_class.php");
session_start();

$userloginid = $_SESSION["userid"] = $_GET['userlogid'];

// session_start();
// function email($useremail){}
// $userloginid
// session_start();
// $adminid=$_SESSION["adminid"]; comment for html only
// echo "$adminid";
// if ($adminid==null) {
//     header("location: index.php");
// }
?>


<!DOCTYPE html>
<html>

<head>
    <title>DAV LIBRARY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styleadmin.css">
</head>

<body>

    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center">
                <!-- <img loading="lazy" src="dp.jpg" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm"> -->
                <div class="media-body">


                    <?php
                    // include("data_class.php");
                    $u = new data;
                    $u->setconnection();
                    $u->userdetail($userloginid);
                    $recordset = $u->userdetail($userloginid);
                    foreach ($recordset as $row) {

                        $id = $row[0];
                        $name = $row[1];
                        $email = $row[2];
                        $pass = $row[3];
                        $type = $row[4];
                    }
                    ?>




                    <h5 class="m-0 px-4"> <?php echo $name ?></h5>
                    <p class="font-weight-normal text-muted mb-0 px-4"> <?php echo $email ?></p>
                    <p class="font-weight-normal text-muted mb-0 px-4"> <?php echo $type ?></p>
                </div>
            </div>
        </div>

        <!-- <a href="#"> -->
        <p class="text-black font-weight-bold text-uppercase px-4 small pb-3 mb-1">Dashboard</p>
        <!-- </a> -->

        <ul class="nav flex-column bg-white mb-0">



            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                    </svg>
                    <!-- <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> -->
                    Book Request
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-flag-fill" viewBox="0 0 16 16">
                        <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                    </svg>
                    <!-- <i class="fa fa-cubes mr-3 text-primary fa-fw"></i> -->
                    Book Report
                </a>
            </li>
        </ul>
        <hr style="border: 1px solid black;">

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="logout.php" class="nav-link text-dark bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-door-closed-fill" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                    <b>Logout</b>
                </a>
            </li>
        </ul>

    </div>
    <!-- End vertical navbar -->


    <!-- Page content -->
    <div class="page-content p-5" style="color: white;" id="content">

        <!-- <form action="issuebook_server_page.php" method="POST" enctype="multipart/form-data"> -->
        <u>
            <h1>Book Request</h1>
        </u>
        <div class="table">
            <div id="requestbook">
                <?php
                $u = new data;
                $u->setconnection();
                $u->getbookissue();
                $recordset = $u->getbookissue();

                $table = "<table>
            <tr>
            <th>ID</th>  
            <th>IMAGE</th>  
            <th>NAME</th>
            <th>DETAIL</th>
            <th>AUTHOR</th>
            <th>PUBLICATION</th>
            <th>BRANCH</th>
            <th>PRICE</th>
            <th>REQUEST BOOK</th>
            </tr>";
                foreach ($recordset as $row) {  //this means that every recored represent in the form of the rows
                    $table .= "<tr>";
                    $table .= "<td>$row[0]</td>";
                    $table .= "<td><img src='uploads/$row[1]' width='100px' height='100px' ></td>";
                    $table .= "<td>$row[2]</td>";
                    $table .= "<td>$row[3]</td>";   //$row[1] means it represents to  the sequence of the database
                    $table .= "<td>$row[4]</td>";
                    $table .= "<td>$row[5]</td>";
                    $table .= "<td>$row[6]</td>";
                    $table .= "<td>$row[7]</td>";
                    $table .= "<td><a href='requestbook.php?bookid=$row[0]&userid=$userloginid'><button type='button' class='btn btn-primary'>Request Book</button></a></td>";
                    // $table.="<td><a href='deleteuser.php?useriddelete=$row[0]'>Delete</a></td>";
                    $table .= "</tr>";
                }
                $table .= "</table>";

                echo $table;


                ?>
            </div>
        </div>


        <u>
            <h1>Book Report</h1>
        </u>

        <div class="table">

            <?php

            $userloginid = $_SESSION["userid"] = $_GET['userlogid'];
            $u = new data;
            $u->setconnection();
            $u->getissuebook($userloginid);
            $recordset = $u->getissuebook($userloginid);

            $table = "<table>
            <tr>
            <th>USER ID</th>
            <th>NAME</th>
            <th>BOOK NAME</th>
            <th>USER TYPE</th>
            <th>ISSUE DATE</th>
            <th>RETURN DATE</th>
            <th>FINE</th>
            <th>RETURN</th>
            </tr>";
            foreach ($recordset as $row) {  //this means that every recored represent in the form of the rows
                $table .= "<tr>";
                $table .= "<td>$row[1]</td>";
                $table .= "<td>$row[2]</td>";
                $table .= "<td>$row[3]</td>";   //$row[1] means it represents to  the sequence of the database
                $table .= "<td>$row[4]</td>";
                $table .= "<td>$row[6]</td>";
                $table .= "<td>$row[7]</td>";
                $table .= "<td>$row[8]</td>";
                $table .= "<td><a href='user_dashboard.php?userlogid=$userloginid&returnid=$row[0]'><button type='button' class='btn btn-primary'>Return</button></a></td>";
                // $table.="<td><a href='deleteuser.php?useriddelete=$row[0]'>Delete</a></td>";
                $table .= "</tr>";
            }
            $table .= "</table>";

            echo $table;
            ?>
        </div>

        <div id="return"  style="<?php if (!empty($_REQUEST['returnid'])) {
            $returnid = $_REQUEST['returnid'];
            }
             else {echo "display:none";} ?>
             ">
   

            <?php

            $u = new data;
            $u->setconnection();
            $u->returnbook($returnid);
            $recordset = $u->returnbook($returnid);
            ?>

        </div>



    </div>
    <!-- End demo content -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script src="main.js"></script> -->
</body>

</html>