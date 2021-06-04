<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$id=$_SESSION["id"];
require_once "config.php";
$sql = "SELECT * FROM user WHERE id=$id";
$result = $link->query($sql);
$data = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome User</title>
  
 

<link rel="stylesheet" href="public/css/style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="public/css/welcome.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
              section
              {
                text-align: right;
                margin: 10px;
              }

            </style>
</head>
<body>
   <div class="bar teal card left-align medium container=100%">
    <div class="row">
           <!--  <a class="bar-item button hide-medium hide-large right padding-large hover-white large teal" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a> -->
           <div class="col" >
            <a href="index.html" class="bar-item button padding-large white homebtn">Home</a>
          </div>
          
           <div class="col order-1 right">
            
            <section>
                    

                <i class="fa fa-user" aria-hidden="true"></i>
                <select class="right" name="profile" id="profile">
                <option value="profile">Profile</option>
                <option value="Books">Your Books</option> 
                <option value="change-profile">Change Profile</option>
              </select>
            </section>
              </div>
        </div>
            <!--<a href="#" class="bar-item button hide-small padding-large hover-white">Vendor</a>-->
        </div>
   <br>
   <br>

 <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $data["fname"]." ".$data["lname"]?></h4>
                     
                    </div>
                  </div>
                </div>
              </div>
            <!--   <div class="card mt-3">
                
              </div> -->
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data["fname"]." ".$data["lname"]?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data["email"]?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data["contact"]?>
                    </div>
                  </div>
                  <hr>
                
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data["address"]?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="  btn btn-primary " target="__blank" href="#">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
<!--  -->


            </div>
          </div>

        </div>
    </div>


</body>
</html>