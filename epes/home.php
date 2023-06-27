<?php include('db.php') ?>

<!-- Info boxes -->
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
  <title>EAE</title>
  <?php require 'sidebar.php';?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php //echo //$conn->query("SELECT * FROM department_list ")->num_rows; ?></h3>

                <p>Total Departments</p>
              </div>
              <div class="icon">
                <i class="fa fa-th-list"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php //echo //$conn->query("SELECT * FROM designation_list")->num_rows; ?></h3>

                <p>Total Designations</p>
              </div>
              <div class="icon">
                <i class="fa fa-list-alt"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php //echo// $conn->query("SELECT * FROM users")->num_rows; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php //echo// $conn->query("SELECT * FROM employee_list")->num_rows; ?></h3>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-friends"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php //echo $conn->query("SELECT * FROM evaluator_list")->num_rows; ?></h3>

                <p>Total Evaluators</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-secret"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php //echo $conn->query("SELECT * FROM task_list")->num_rows; ?></h3>

                <p>Total Tasks</p>
              </div>
              <div class="icon">
                <i class="fa fa-tasks"></i>
              </div>
            </div>
          </div>
      </div>


   <div class="col-12">
          <div class="card">
            <div class="card-body">
              Welcome <?php //echo $_SESSION['login_name'] ?>!
            </div>
          </div>
      </div>
          

