<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block 
                             
          <?php if( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'Admin' )  { 
                echo 'bg-dark';               
                             
            } else if ( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'Teacher' ) {
    echo 'bg-success'; 
    
}   else if ( isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Student' ) {
    echo 'bg-info'; 
    
}else if ( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'Accountant' ) {
    echo 'bg-primary'; 
    
}else if ( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'Librarian' ) {
    echo 'bg-warning'; 
    
}else if ( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'parent' ) {
    echo 'bg-danger'; 
    
}  ?> sidebar collapse">
    <div class="position-sticky pt-3">
        <ul id="dash-sidebar" class="nav flex-column">
            
            <?php if( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'Admin' )  { ?>
            
            <li class="nav-item">
                <a class="nav-link" href="admin_add_student.php">
                Add Students
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="admin_add_employee.php">
                Add Employee
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_student_class_reg.php">
                Student Registration
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_add_class.php">
                Add Class
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_add_subject.php">
               Add Subject
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_add_group.php">
                Add Group
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_add_fee.php">
                Add Fee
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_view_student.php">
               View Students
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="admin_view_employee.php">
                View Employee
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="admin_view_class.php">
                View Class
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_view_subject.php">
              View Subject
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_view_group.php">
                View Group
                </a>
            </li>
            
            <?php } ?>
            
            
            <?php if( isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Student' )  { ?>
            <li class="nav-item">
                <a class="nav-link" href="student_profile.php">
                Profile
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="students_check_result.php">
                Check result
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="student_attemp_test.php">
               Attempt Test
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="student_download_fee_challan.php">
               Download Fee Challan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="student_download_lecture.php">
              Download Lectures
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="student_upload_exam.php">
              Upload Exams
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="student_upload_homework.php">
              Upload Homework
                </a>
            </li>
         
            
            <?php } ?>
            <?php if( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'Teacher' )  { ?>
             <li class="nav-item">
                <a class="nav-link" href="employee_profile.php">
                Profile
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="teacher_add_exam.php">
              Add Exams
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="teacher_add_exam_marks.php">
                Add Exam Marks
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="teacher_add_homework.php">
              Add Homework
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="teacher_add_lecture.php">
               Add Lectures
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="teacher_add_test-_MCQ.php">
               Add Test
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="teacher_add_test_marks.php">
              Add Test Marks
                </a>
            </li>
            <?php } ?>
            
          <?php if( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'Accountant' )  { ?>
             <li class="nav-item">
                <a class="nav-link" href="employee_profile.php">
                Profile
                </a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link" href="acc_update_fee.php">
                Update Fee
                </a>
            </li>
            <?php } ?>
            
            <?php if( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'Librarian' )  { ?>
             <li class="nav-item">
                <a class="nav-link" href="employee_profile.php">
                Profile
                </a>
            </li>
            <?php } ?>
            <?php if( isset($_SESSION['employee_type']) && $_SESSION['employee_type'] == 'parent' )  { ?>
             <li class="nav-item">
                <a class="nav-link" href="parent_profile.php">
               profile
                </a>
            </li> <li class="nav-item">
                <a class="nav-link" href="parent_view_result.php">
                view result
                </a>
            </li>
            <?php } ?>
            
        </ul>

    </div>
</nav>