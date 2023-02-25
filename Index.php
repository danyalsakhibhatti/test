<?php
include ('config.php');
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
        <script src="js/bootstrap.bundle.js"></script>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <title>Home|Web Based College Portal</title>
    </head>
    <body>
        <?php
  include('frontend_header.php');
  ?>
        <section id="home-section">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="display-2 text-center text-light"> <span class="fw-bold"> Web based </span> College Portal</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-justify">
                        <h2>About us</h2>
                        <p>This project is online website to manage all the activities of college.It provide  good interface between students with college administrative.On implementing this projectstudents can get all the information easily.They can check their marks, attendance, homework easily.</p>
                        <p>There will be a library portal which will contain all the information about library This system can maintain huge number of college records, course, attendance etc.This project is designed to remove all the deficiency of the current system.All information like attendance , course and fee, quiz and homework are available on this portal.</p>
                        
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid" src="images/phone-feature.png" />
                    </div>
                </div>
            </div>
        </section>
       
        <section class="bg-light py-5" id="highlight-section">
          <div class="container">
            <h1 class="py-5">System Modules</h1>
            <div class="row">
                <div class="col-lg-3">
                  <div class="card my-2 h-100 my-md-0 bg-primary bg-gradient text-light">
                    <div class="card-body">
                      <h5 class="card-title">Admin</h5>
                      <p class="card-text">Admin can add students,teachers and all faculty members.Admin can manage all activites.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card h-100 my-2 my-md-0 bg-info bg-gradient text-light">
                    <div class="card-body">
                      <h5 class="card-title">Student</h5>
                      <p class="card-text">Students can upload/download their homework, download lectures.They can check their marks, attendance easily.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card my-2 h-100 my-md-0 bg-success bg-gradient text-light">
                    <div class="card-body">
                      <h5 class="card-title">Teacher</h5>
                      <p class="card-text">Teachers can mark attendence.They can upload lectuers ,homework,weeklytest and marks.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card my-2 h-100 my-md-0 bg-dark bg-gradient text-light">
                    <div class="card-body">
                      <h5 class="card-title">Librarian</h5>
                      <p class="card-text"> Librarian  will contain all the information about library such as book’s serial number,issue books etc</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
       </section>

       <section id="comparison-section">
         <div class="container h-100">
           <h1 class="text-center" >Existing Vs Proposed System</h1>
          <div class="row">
            <div class="h-50"></div>
            <div class="col-lg-6 text-center">
                <h3 class="pt-5 text-uppercase">Existing System</h3>
                <ul class="list-group">
                  <li class="list-group-item">It is very difficult to maintain the record of students and teachers manually
                  </li>
                  <li class="list-group-item">The record of results and fee updating of the students,uses to maintain on files so there might be chances of missing.
                  </li>
                  <li class="list-group-item">This process is so much time consuming.Suppose if some student comes and asks for the status of his fee after one month then the worker will open his file and search it manually for the student’s name which will take time. </li>
                  <li class="list-group-item">There is proper way of getting to know about the curriculum activities happening in colleges we want to organize an event in college we need to create banners and make an announcement in classes so that students participate but if any student got absent on that day, then he will remain unnotified.</li>
                </ul>
            </div>
            <div class="col-lg-6 h-100 text-center">
              <h3 class="pt-5 text-uppercase">Proposed System</h3>
              <ul id="mylistgroup" class="list-group bg-success">
                <li class="list-group-item text-light">To reduce the headache of maintaining the record of students and teachers related documents.
                </li>
                <li class="list-group-item text-light">It will eliminate the delays in the generation of results and free updating of the students, this system will help in maintaining the records of absent students.All record will be saved in system.
                </li>
                <li class="list-group-item text-light">This process is so much time consuming and  more efficient .</li>
                <li class="list-group-item text-light">There is proper way of getting to know about the events and extra curriculum activities happening in colleges.</li>
              </ul>
            </div>
          </div>
        </div>
       </section>
 <?php
  include('frontend_footer.php');
  ?>

        
    </body>
</html>