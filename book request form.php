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
          <h5 class="m-0 px-4">ABC NAME</h5>
          <p class="font-weight-normal text-muted mb-0 px-4">ADMIN</p>
        </div>
      </div>
    </div>

    <a href="admin_dashboard.php">
      <p class="text-black font-weight-bold text-uppercase px-4 small pb-3 mb-1">Dashboard</p>
    </a>

    <ul class="nav flex-column bg-white mb-0">
      <!-- <li class="nav-item">
      <a href="admin_dashboard.php" class="nav-link active text-dark bg-light">
         <i class="bi mr-3 bi-house-fill"></i> 
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> 
              home
            </a>
    </li> -->
      <li class="nav-item">
        <a href="add books form.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-bag-plus-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
          </svg>
          <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
          Add Books
        </a>
      </li>
      <li class="nav-item">
        <a href="book report form.php" class="nav-link  text-dark ">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-flag-fill" viewBox="0 0 16 16">
            <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
          </svg>
          <!-- <i class="fa fa-cubes mr-3 text-primary fa-fw"></i> -->
          Book Report
        </a>
      </li>
      <li class="nav-item">
        <a href="book request form.php" class="nav-link active text-dark bg-light">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-bell-fill" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
          </svg>
          <!-- <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> -->
          <b>Book Request</b>
        </a>
      </li>
      <li class="nav-item">
        <a href="add person form.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3  bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
          </svg>
          <!-- <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> -->
          Add Person
        </a>
      </li>
      <li class="nav-item">
        <a href="student report form.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-file-earmark-person-fill" viewBox="0 0 16 16">
            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z" />
          </svg>
          <!-- <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> -->
          Student Report
        </a>
      </li>
      <li class="nav-item">
        <a href="issue book form.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-book-half" viewBox="0 0 16 16">
            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
          </svg>
          <!-- <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> -->
          Issue Book
        </a>
      </li>
      <li class="nav-item">
        <a href="issue report form.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mr-3 bi-book-fill" viewBox="0 0 16 16">
            <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
          </svg>
          <!-- <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> -->
          Issue Report
        </a>
      </li>
    </ul>
    <hr style="border: 1px solid black;">

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark bg-light">
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

  <div class="page-content p-5" id="content">
    
      <div class="table" style="color: white;">


        <?php
        include("data_class.php");
        $u = new data;
        $u->setconnection();
        $u->requestbookdata();
        $recordset = $u->requestbookdata();

                    $table = "<table>
              <tr>
              <th>USER ID</th>  
              <th>PERSON NAME</th>  
              <th>PERSON TYPE</th>
              <th>BOOK NAME</th>
              <th>DAYS</th>
              </tr>";
        foreach ($recordset as $row) {  //this means that every recored represent in the form of the rows
          $table .= "<tr>";

          $table .= "<td>$row[1]</td>";
          $table .= "<td>$row[3]</td>";   //$row[1] means it represents to  the sequence of the database
          $table .= "<td>$row[4]</td>";
          $table .= "<td>$row[5]</td>";
          $table .= "<td>$row[6]</td>";

          $table .= "<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'>Approved</a></td>";
          // $table.="<td><a href='deleteuser.php?useriddelete=$row[0]'>Delete</a></td>";
          $table .= "</tr>";
          // $table.=$row[0];
        }
        $table .= "</table>";

        echo $table;
        ?>


      </div>
    </h1>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- <script src="main.js"></script> -->
</body>

</html>