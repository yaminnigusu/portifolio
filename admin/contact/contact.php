<?php
// Include database connection and retrieve data from tblcontactus
include("../../config.php");

// Check if form was submitted for record deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['record_id'])) {
    $record_id = mysqli_real_escape_string($conn, $_POST['record_id']);

    // Prepare and execute SQL query to delete record from tblcontactus
    $sql = "DELETE FROM tblcontactus WHERE ID = '$record_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Retrieve data from tblcontactus and populate table rows
$sql = "SELECT * FROM tblcontactus";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>yamin's portifolio dashboard-contactus</title>
    <link rel="stylesheet" href="style.css" />


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <style>
            /* Add these CSS rules to fix the navbar at the top */
            .navbar {
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              background-color: #ffffff; /* Change this to your desired background color */
              z-index: 1000; /* Ensure it's above other content */
              box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Add shadow if desired */
            }
            
            /* Ensure the footer stays at the bottom */
            footer {
              position: fixed;
              bottom: 0;
              width: 100%;
            }
            
            /* Container to hold the sidebar and content */
            .container {
              display: flex;
              justify-content: flex-start; /* Sidebar on the left, content on the right */
              align-items: stretch; /* Stretch both to the same height */
            }
            
            /* Style the sidebar */
            .sidebar {
              width: 250px; /* Adjust the width as needed */
              background-color: #f0f0f0; /* Add your desired background color */
              padding: 20px;
              box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1); /* Add shadow if desired */
            }
            
            /* Style the content */
            .content {
              flex-grow: 1; /* Allow content to grow and fill remaining space */
              padding: 20px;
              padding-top: 100px;
              margin-left: 250px; /* Ensure content is to the right of the sidebar */
            }

            /* Pagination styles */
    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination a {
        display: inline-block;
        padding: 5px 10px;
        margin: 0 5px;
        background-color: #06A3DA;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .pagination a.active {
        background-color: #333;
    }

    .pagination a:hover {
        background-color: #444;
    }

    /* Table styles */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #06A3DA;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
            
            /* Add media query for responsive design if needed */
            @media (max-width: 768px) {
              .container {
                flex-direction: column; /* Stack sidebar on top of content for smaller screens */
              }
              .sidebar {
                width: 100%; /* Full width sidebar on smaller screens */
              }
              .content {
                margin-left: 0; /* Remove margin on smaller screens to stack content below navbar */
              }
            }
          </style>
  </head>
  <body>
    
    
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
       </i>Yamin
      </div>

      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        
      </div>
    </nav>

    <div class="container">
  <!-- sidebar -->
  <nav class="sidebar">
      <div class="menu_content">

        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate these li tag if you want to add or remove navlink only -->
          <!-- Start -->
          <li class="item">
            <a href="../home.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-magic-wand"></i>
              </span>
              <span class="navlink">Home</span>
            </a>
          </li>
          <!-- End -->

          <li class="item">
            <a href="../skills/skills.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">services</span>
            </a>
          </li>
          
          <li class="item">
            <a href="contact.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Contact</span>
            </a>
          </li>

          <li class="item">
            <a href="../client/client.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">project</span>
            </a>
          </li>

          <li class="item">
            <a href="../testimonial/testimonial.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-filter"></i>
              </span>
              <span class="navlink">Testimonial</span>
            </a>
          </li>
          <li class="item">
            <a href="../user/user.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cloud-upload"></i>
              </span>
              <span class="navlink">Manage users</span>
            </a>
          </li>
        </ul>
       

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>

    <div class="content">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List of Customers </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <form action="" Method="POST">
        <div class="table-responsive">
            <table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">
                <thead>
                    <tr>
                    <th style="color: black;">id</th>
                    <th style="color: black;">name</th>
                    <th style="color: black;">email</th>
                    
                    <th style="color: black;">message</th>
                    <th style="color: black;">Date of message</th>
                    <th style="color: black;" width="10%" align="center">Action</th>
                    </tr>
                </thead>
                 <tbody>
                 <?php
                                    // Retrieve data from tblcontactus and populate table rows
                                    include("../../config.php");
                                    $sql = "SELECT * FROM tblcontactus";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>{$row['ID']}</td>";
                                            echo "<td>{$row['name']}</td>";
                                            echo "<td>{$row['email']}</td>";
                                            echo "<td>{$row['message']}</td>";
                                            echo "<td>{$row['date']}</td>";
                                            echo "<td>
                                            <form method='POST' action=''>
                                                <input type='hidden' name='record_id' value='{$row['ID']}' />
                                                <button type='submit' class='btn btn-danger'>Delete</button>
                                            </form>
                                        </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No records found</td></tr>";
                                    }
                                    
                                    $conn->close();
                                    ?>
               

    </tbody> 
    
    
            </table>
        </div>

         <!-- Pagination Links -->
         <div class="pagination">
                    </div>

    </form>
  </div>
</div>

    <footer>
      <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="row gx-5">
             
    <div class="container-fluid text-white" style="background: #061429;">
      <div class="container text-center">
          <div class="row justify-content-end">
              <div class="col-lg-8 col-md-6">
                  <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                      <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Eyonadab</a>. All Rights Reserved. 
          
          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Developed by <a class="text-white border-bottom" href="https://htmlcodex.com">yonadab digital Technologies, PLC</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->
    <!-- JavaScript -->
    <script src="script.js"></script>
  </body>
</html>
