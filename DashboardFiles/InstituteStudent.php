<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title></title>
    </head>
    <body>

        <!--  nav bar start-->
        <div class="navbardah fixed-top d-flex flex-row-reverse">
            <a class="p-3" href="#" style="margin-right: 30px;">
                <i class="fa-solid fa-user fa-lg" style="color: #24457f;"></i>
            </a>

            <h6 class="p-3" href="#">
                User Name
            </h6>

            <div id= "resimage" class="p-1 w-50 d-block d-sm-none">
                <a href="#">
                    <img src="../Images/Logo.png" alt="Home" class="img-fluid" style="width: 20%">
                </a>
            </div>
        </div>

        <!--  nav bar end-->
        <br>

        <!-- add button -->
        <div class="container w-25 mt-5" >
            <div class="backcolor m-2 admincount p-2 mb-4 rounded-4 ">
                <div class="row">
                    <div class="col-1 text-center">   
                        <i  href="" class="fa-solid fa-users fa-2xl p-5 ps-1"></i>
                    </div>
                    <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                        <h7>Students</h7>
                        <h2>1234</h2>
                    </div>
                </div> 
            </div> 
        </div>

        <!-- add button -->

        <!-- Table -->

        <div class="p-5 ">


            <div class="rounded-top-4 p-0 border border-dark-subtle" style="padding-left: 12px;padding-right: 22px;">
                <div class="row align-items-center">
                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-3"> 
                        <div class="dropdown p-3 ">
                            <a class="btn btn-secondary dropdown-toggle bgcolli" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Department
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Department</a></li>
                                <li><a class="dropdown-item" href="#">Department</a></li>
                                <li><a class="dropdown-item" href="#">Department</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-3"> 
                        <div class="dropdown p-3 ">
                            <a class="btn btn-secondary dropdown-toggle bgcolli" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Course
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> Course</a></li>
                                <li><a class="dropdown-item" href="#"> Course</a></li>
                                <li><a class="dropdown-item" href="#"> Course</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 "> 
                        <button type="button" class="btn btn-primary bgcol" onclick="Addstudent()">Add Student</button>
                    </div>
                </div>



                <!-- Table Head -->
                <table class="table mb-0">


                    <tr>

                        <th class="col-1 bgcol p-2">ID</th>
                        <th class="col-3 bgcol p-2">Name</th>
                        <th class="col-2 bgcol p-2">Gender</th>
                        <th class="col-3 bgcol p-2">Contact No</th>
                        <th class="col-1 bgcol p-2">View</th>
                        <th class="col-1 bgcol p-2">Edit</th>

                    </tr>


                </table>
                <!-- Table Head -->
            </div>
            <!-- Table body -->
            <div class="container bg-white mt-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table">

                    <!-- Table row -->
                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>


                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>

                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->
            <div class="text-end" >
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>

        <!-- Table -->




        <!-- Student Details Modal -->
        <div class="modal fade" id="StudentDetail" tabindex="-1" aria-labelledby="StudentDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="StudentDetail">Student Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <h6>Department</h6>
                                </div>
                                <div class="col-8">
                                    <p>Computer Science And Informatics</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Enrollment Number</h6>
                                </div>
                                <div class="col-8">
                                    <p>UWU/CST/20/031</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Year</h6>
                                </div>
                                <div class="col-8">
                                    <p>Second Year</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>First Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>Mohamed</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Last Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>Aasath</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>DOB</h6>
                                </div>
                                <div class="col-8">
                                    <p>2000/12/11</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Gender</h6>
                                </div>
                                <div class="col-8">
                                    <p>Male</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Contact</h6>
                                </div>
                                <div class="col-8">
                                    <p>0755701765</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-8">
                                    <p>aasadh2000@gmail.com</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-8">
                                    <p>185,A/1,Hajiyar Road Sainthamaruthu-13</p>
                                </div>
                            </div> 






                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary bgcolli" id="openModal2" onclick="openGuardianDetail()" >Guardian Details</button>
                        <button type="button" class="btn btn-primary bgcolli" onclick="openCourseDetail()">Course Details</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Student Details Modal -->





        <!-- Guardian Details Modal -->
        <div class="modal fade" id="GuardianDetail" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="GuardianDetail">Guardian Detail</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <h6>Full Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>Seeni Muhammadhu Amiza Umma</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Relationship</h6>
                                </div>
                                <div class="col-8">
                                    <p>Mother</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Contact NO</h6>
                                </div>
                                <div class="col-8">
                                    <p>0755701347</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-8">
                                    <p>N/A</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-8">
                                    <p>185,A/1,Hajiyar Road Sainthamaruthu-13</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Occupation</h6>
                                </div>
                                <div class="col-8">
                                    <p>Taylor</p>
                                </div>
                            </div> 







                        </div>
                    </div>
                    <div class="modal-footer">


                        <button type="button" class="btn btn-secondary" onclick="closeModals()" >Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Guardian Details Modal -->

        <!-- Course Details Modal -->
        <div class="modal fade" id="CourseDetail" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="CourseDetail">Course Detail</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <table class="table mb-0">


                                <tr>

                                    <th class="col-3">ID</th>
                                    <th class="col-6">Course Name</th>
                                    <th class="col-3">Score</th>


                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>
                                    <td class="col-3">88%</td>


                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>
                                    <td class="col-3">88%</td>


                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>
                                    <td class="col-3">88%</td>


                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>
                                    <td class="col-3">88%</td>


                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>
                                    <td class="col-3">88%</td>


                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>
                                    <td class="col-3">88%</td>


                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>
                                    <td class="col-3">88%</td>


                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>
                                    <td class="col-3">88%</td>


                                </tr>



                            </table>








                        </div>
                    </div>
                    <div class="modal-footer">


                        <button type="button" class="btn btn-secondary" onclick="closeModals()" >Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Details Modal -->






        <!-- Add Student Details Modal -->
        <div class="modal fade" id="AddStudentDetail" tabindex="-1" aria-labelledby="AddStudentDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="AddStudentDetail">Add Student Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <h6>Department</h6>
                            </div>
                            <div class="col-9">
                                <div class="dropdown p-3">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Department
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Department</a></li>
                                        <li><a class="dropdown-item" href="#">Department</a></li>
                                        <li><a class="dropdown-item" href="#">Department</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>First Name</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Last Name</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Enrollment No</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>DOB</h6>
                            </div>
                            <div class="col-9">
                                <input type="Date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Contact No</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Email</h6>
                            </div>
                            <div class="col-9">
                                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Address</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <hr>
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>User Name</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Password</h6>
                            </div>
                            <div class="col-9">
                                <input type="Password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>








                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary bgcolli" id="AddGuardian" onclick="AddGuardianDetail()" >Add Guardian</button>

                        <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Student Details Modal -->





        <!-- Add Guardian Details Modal -->
        <div class="modal fade" id="AddGuardianDetail" tabindex="-1" aria-labelledby="AddGuardianDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="AddGuardianDetail">Add Guardian Detail</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">



                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Full Name</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Relationship</h6>
                                </div>
                                <div class="col-9">
                                    <div class="dropdown p-3">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Relationship
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Father</a></li>
                                            <li><a class="dropdown-item" href="#">Mother</a></li>
                                            <li><a class="dropdown-item" href="#">Guardian</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Contact No</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>





                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-9">
                                    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>


                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Occupation</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>









                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary bgcolli" data-bs-target="#AddStudentDetail" data-bs-toggle="modal">Back</button>
                            <button type="button" class="btn btn-primary bgcolli" id="AddStudent" onclick="savestudent()" >Save Student</button>

                            <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Guardian Details Modal -->
            <?php
            // put your code here
            ?>




            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
