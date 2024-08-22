<!-- Sidebar  -->
<style>
    .iq-sidebar-menu .iq-menu li a {
        font-size: 20px !important;


    }
</style>
<?php
$branches = array(8, 9, 10, 21, 22,23);
?>

<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="#" style="text-transform: uppercase;">

            <span>Rao's</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <div class="iq-search-bar">
            <input type="text" id="search-input" class="form-control" placeholder="Search...">
        </div>
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                <?php
                if (!empty($session->get('role')) && in_array("Idcardvendor", $session->get('role'))) {?>
                <li><a href="<?php echo base_url('students_list');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students List</a></li>
                <?php } ?>    
                <?php
                if (!empty($session->get('role')) && in_array("HR", $session->get('role'))) {?>
                 <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Staff</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                             <li><a href="<?php echo base_url('staff_payroll');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Pay Roll</a></li>

                            <ul>
                                <li>
                                    <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Staff View</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('staff_list');?>"><i class="ri-record-circle-line"></i>View Staff</a></li>
                                        <li><a href="<?php echo base_url('staff_set_salary');?>"><i class="ri-record-circle-line"></i>Set Salary</a></li>
                                        <li><a href="<?php echo base_url('set_staff_attendance');?>"><i class="ri-record-circle-line"></i>Set Attendance</a></li>
                                        <li><a href="<?php echo base_url('view_staff_attendance');?>"><i class="ri-record-circle-line"></i>View Staff Attendance</a></li>
                                        <li><a href="<?php echo base_url('staff_attendance_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Staff Attendance month Report</a></li>

                                    </ul>
                                </li>
                            </ul>
                            </li>

                        </ul>
                </li>
                <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file" aria-hidden="true"></i><span>Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <ul>
                                <li>
                                    <a href="#biometric_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Biometric Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="biometric_report" class="iq-submenu iq-submenu-data collapse">
                                    <li><a href="<?php echo base_url('biometric_vs_manual_attendance');?>"><i class="fa fa-users"></i>Attendance data by date</a></li>
                                        <li><a href="<?php echo base_url('staff_attendance_logs');?>"><i class="fa fa-users"></i>Staff Attendance Logs</a></li>
                                        <li><a href="<?php echo base_url('attendance_logs');?>"><i class="fa fa-users"></i> Branch wise day Attendance logs</a></li>
                                        <li><a href="<?php echo base_url('invalid_attendances');?>"><i class="fa fa-users"></i>Late/Half/Single Entries Attendances</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </li>
                <?php } ?>
                <?php
                if (!empty($session->get('role')) && in_array("JDM Books Incharge", $session->get('role')) || in_array("Kukatpally Books Incharge", $session->get('role')) || in_array("Sangareddy Books Incharge", $session->get('role'))) {?>
                <li><a href="<?php echo base_url('division_books_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Book Details</a></li>
                <li><a href="<?php echo base_url('division_books_transfers');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Book transfer</a></li>
                <li><a href="<?php echo base_url('division_to_branch_books_transfer')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Divisions to branches Book Stock</a></li>
                <li><a href="<?php echo base_url('division_to_branch_books_transfer_acknowledge');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Recived Acknowledge</a></li>
                <li><a href="<?php echo base_url('division_book_stock')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division stock edit</a></li>
                <li><a href="<?php echo base_url('division_to_branch_books_transfer_stock')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division to branch tanfer edit</a></li>
                <?php }?>
                <?php
                if (!empty($session->get('role')) && in_array("JDM Uniform Incharge", $session->get('role')) || in_array("Kukatpally Uniform Incharge", $session->get('role')) || in_array("Sangareddy Uniform Incharge", $session->get('role'))) {?>
                <li><a href="<?php echo base_url('division_uniform_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Uniform Details</a></li>
                <li><a href="<?php echo base_url('division_uniform_transfers');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Uniform transfer</a></li>
                <li><a href="<?php echo base_url('division_to_branch_uniforms_transfer')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Divisions to branches Uniform Stock</a></li>
                <?php }?>
                <?php
                if (!empty($session->get('role')) && in_array("Teacher", $session->get('role'))) {?>
                    <li>
                        <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Lessons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('get_lessons_by_chapter');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Lessons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#questions" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Question Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="questions" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('add_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Question</a></li>
                            <!--<li><a href="<?php echo base_url('leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leave Request</a></li>-->
                            <li><a href="<?php echo base_url('questions_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Questions view</a></li>
                            <li><a href="<?php echo base_url('add_admission_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Admission Question</a></li>
                            <li><a href="<?php echo base_url('admission_question_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admission Questions view</a></li>
                            <li><a href="<?php echo base_url('add_paragraph');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add  Admission Para/Image</a></li>
                            <li><a href="<?php echo base_url('list_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Admission Para/Image view</a></li>


                        </ul>
                    </li>
                    <li>
                        <a href="#studentgroup" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-users" aria-hidden="true"></i><span>Student Groups</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="studentgroup" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('student_groups');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Groups</a></li>


                        </ul>
                    </li>
                <?php }?>
                <?php
                if (!empty($session->get('role')) && in_array("Super Admin", $session->get('role'))) {?>


                    <li>
                        <a href="<?php echo base_url('dashboard');?>" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard </span></a>
                    </li>
                    <li><a href="<?php echo base_url('users');?>"><i class="fa fa-users" aria-hidden="true"></i>User Managment</a></li>
                    <li><a href="<?php echo base_url('notification');?>"><i class="fa fa-bell" aria-hidden="true"></i>Notifications</a></li>
                    <li><a href="<?php echo base_url('roles');?>"><i class="fa fa-users" aria-hidden="true"></i>Roles</a></li>
                    <li><a href="<?php echo base_url('parent_complaints');?>"><i class="fa fa-bell" aria-hidden="true"></i>Parent Complaints</a></li>
                    <li>
                        <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Masters</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('branch');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branch</a></li>
                            <li><a href="<?php echo base_url('class_subjects');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Class</a></li>
                            <li><a href="<?php echo base_url('get_lessons_by_chapter');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Lessons</a></li>
                            <li><a href="<?php echo base_url('hostel');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Hostel</a></li>
                            <li><a href="<?php echo base_url('fee_structure');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Fee</a></li>
                            <li><a href="<?php echo base_url('incentive_amount');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Incentives</a></li>
                            <li><a href="<?php echo base_url('batch_fee');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Batch Increase Fee</a></li>
                            <li><a href="<?php echo base_url('batch_transfer');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Batch Transfer</a></li>
                            <li><a href="<?php echo base_url('set_term_fee/Fee');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Term Fee </a></li>
                            <li><a href="<?php echo base_url('set_term_fee/Transport');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Term Transport</a></li>

                            <li><a href="<?php echo base_url('set_term_fee/Hostel');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Term Hostel</a></li>
                            <li><a href="<?php echo base_url('target_amount');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Target Amount</a></li>
                            <li><a href="<?php echo base_url('loan_amount');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Loan Amount</a></li>
                            <li><a href="<?php echo base_url('branch_rent');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Rent</a></li>
                            <li><a href="<?php echo base_url('inactive_students');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Inactive Students</a></li>
                            <li><a href="<?php echo base_url('student');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Inactive Student Accounting Period</a></li>
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Bank Expenditure</a></li>-->
                            <li><a href="<?php echo base_url('bank_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Bank Detials</a></li>
                            <li><a href="<?php echo base_url('holidays');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Holidays</a></li>
                            <li><a href="<?php echo base_url('activity');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Activity Management</a></li>
                            <li><a href="<?php echo base_url('syllabus');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Syllabus</a></li>
                            <!--<li><a href="<?php echo base_url('add_test');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Test</a></li>-->
                            <!-- <li><a href="<?php echo base_url('upload_offline_test_marks');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Offline Exam </a></li>-->
                            <!--   <li><a href="<?php echo base_url('marks_list');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Total Marks List </a></li>-->
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Approvers List</a></li>-->

                        </ul>
                    </li>
                    <li>
                        <a href="#menu-design1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Approvals</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('finance_income');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Income</a></li>
                            <li><a href="<?php echo base_url('finance_expense');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Expenses</a></li>
                            <li><a href="<?php echo base_url('ot_payment_requests')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>OTP Approvals</a></li>
                            <li><a href="<?php echo base_url('set_concession'); ?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Fee Concession</a></li>
                            <li><a href="<?php echo base_url('get_vehicle_service_approve_list'); ?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vehicle Service Approval</a></li>
                            <!-- <li><a href="<?php echo base_url('fee_correction_report/'.raos_encode('1'))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Corrections</a></li> -->
                            <li><a href="<?php echo base_url('fee_correction_approvel')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Corrections Approvals</a></li>
                            <li><a href="<?php echo base_url('get_stock_return_list')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Get  Book Return stock list</a></li>
                            <li><a href="<?php echo base_url('get_uniform_stock_return_list')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Get Uniform Return stock list</a></li>
                            <li><a href="<?php echo base_url('book_fee_correction_approval/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Fee Correction Approval</a></li>
                            <li><a href="<?php echo base_url('uniform_fee_correction_approval')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Fee Correction Approval</a></li>
                            <li><a href="<?php echo base_url('cancel_request_list/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Book Receipt Cancel Approval</a></li>
                            <li><a href="<?php echo base_url('uniform_cancel_request_list')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Uniform Receipt Cancel Approval</a></li>
                            <li><a href="<?php echo base_url('concession_requests')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Concession Approval</a></li>
                            <li><a href="<?php echo base_url('free_transaction_cancel_request_list')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Free Transaction Cancellation  Approval</a></li>
                            <li><a href="<?php echo base_url('transport_concession_requests')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Transport Fee Concession Approval</a></li>


                        </ul>
                    </li>
                    <!--<li><a href="<?php echo base_url('admin');?>"><i class="ri-user-line"></i>Admin</a></li>-->
                    <!--<li><a href="<?php echo base_url('principle');?>"><i class="fa fa-users" aria-hidden="true"></i>Principle</a></li>-->
                    <!--<li><a href="<?php echo base_url('accountant');?>"><i class="fa fa-users" aria-hidden="true"></i>Accountants</a></li>-->
                    <!--  <li><a href="#">Class Time TableAccountant</a></li>-->
                    <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Staff</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('staff_type');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Staff Type</a></li>

                            <li><a href="<?php echo base_url('staff_payroll');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Pay Roll</a></li>

                            <ul>
                                <li>
                                    <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Staff View</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('staff_list');?>"><i class="ri-record-circle-line"></i>View Staff</a></li>
                                        <li><a href="<?php echo base_url('staff_set_salary');?>"><i class="ri-record-circle-line"></i>Set Salary</a></li>
                                        <li><a href="<?php echo base_url('set_staff_attendance');?>"><i class="ri-record-circle-line"></i>Set Attendance</a></li>
                                        <li><a href="<?php echo base_url('view_staff_attendance');?>"><i class="ri-record-circle-line"></i>View Staff Attendance</a></li>
                                        <li><a href="<?php echo base_url('staff_attendance_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Staff Attendance month Report</a></li>
                                        <li><a href="<?php echo base_url('inactive_staff_list');?>"><i class="ri-record-circle-line"></i>Inactive Staff List</a></li>
                                        <li><a href="<?php echo base_url('staff_document_reports');?>"><i class="ri-record-circle-line"></i>Staff Documents</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- <li><a href="<?php echo base_url('class_staff');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Class Staff Mapping</a></li> -->
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="#mailbox1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i><span>Student</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('enquiry');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Enquiry</a></li>
                            <li><a href="<?php echo base_url('parent_fill_enquiry');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Parent Enquiry Form</a></li>
                            <li><a href="<?php echo base_url('enquiry_list');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Enquiry List</a></li>
                            <li><a href="<?php echo base_url('student_admission');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student List</a></li>
                            <!--<li><a href="<?php echo base_url('student_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Attendance</a></li>-->
                            <!--<li><a href="<?php echo base_url('ot_payment_requests');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> OTP Requests</a></li>-->
                            <li><a href="<?php echo base_url('student_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Students Attendance</a></li>
                            <li><a href="<?php echo base_url('student_month_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Students Month Attendance</a></li>
                            <li><a href="<?php echo base_url('student_uniform_mapping');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Student wise uniform mapping</a></li> 
                            <li><a href="<?php echo base_url('student_qr_code');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Qr code</a></li>
                            <li><a href="<?php echo base_url('students_credientials');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Credientails</a></li>
                         </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('branch_timings')?>" class="iq-waves-effect">
                            <i class="ri-timer-line"></i><span>Branch Timings</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i>
                        </a>

                    </li>
                    <!--<li><a href="<?php echo base_url('timetable');?>"><i class="fa fa-calendar" aria-hidden="true"></i>Class Time Table</a></li>-->
                    <!--<li>-->
                    <!--    <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Exam</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>-->
                    <!--    <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">-->
                    <!--        <li><a href="<?php echo base_url('exam_timetable');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Time Table</a></li>-->
                    <!--        <li><a href="<?php echo base_url('exam_marks');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Marks</a></li>-->

                    <!--    </ul>-->
                    <!--</li>-->

                    <li>
                        <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-bus" aria-hidden="true"></i><span>Transport</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('routes');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Routes Management</a></li>
                            <li><a href="<?php echo base_url('vehicle_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vehicle Management</a></li>
                            <li><a href="<?php echo base_url('driver_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Drivers Management</a></li>
                            <!--<li><a href="<?php echo base_url('assign_student');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Assign Student</a></li>-->

                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Attendance</a></li>-->
                            <li><a href="<?php echo base_url('fuel_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vehicle Fuel</a></li>
                            <li><a href="<?php echo base_url('route_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Transport Attendance</a></li>
                            <li><a href="<?php echo base_url('transport_attendance_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Monthly Transport Attendance Report</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#questions" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Question Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="questions" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('add_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Question</a></li>
                            <!--<li><a href="<?php echo base_url('leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leave Request</a></li>-->
                            <li><a href="<?php echo base_url('questions_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Questions view</a></li>
                            <li><a href="<?php echo base_url('add_admission_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Admission Question</a></li>
                            <li><a href="<?php echo base_url('admission_question_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admission Questions view</a></li>
                            <li><a href="<?php echo base_url('add_paragraph');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add  Admission Para/Image</a></li>
                            <li><a href="<?php echo base_url('list_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Admission Para/Image view</a></li>




                        </ul>
                    </li>

                    <li>
                        <a href="#leaves" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Leave Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="leaves" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('self_leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Self Leave Request</a></li>
                            <!--<li><a href="<?php echo base_url('leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leave Request</a></li>-->
                            <li><a href="<?php echo base_url('leaves');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leaves</a></li>


                        </ul>
                    </li>

                    <!-------------------------------------------groups------------------------------------------------------------------>
                    <li>
                        <a href="#studentgroup" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-users" aria-hidden="true"></i><span>Student Groups</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="studentgroup" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('student_groups');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Groups</a></li>


                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('timetable');?>"><i class="fa fa-users" aria-hidden="true"></i>Staff Timetable</a></li>
                    <!-----------------------------------------------Finance------------------------------------------------------------->
                    <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-suitcase " aria-hidden="true"></i><span>Finance</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentive</a></li>-->
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Fee Payment</a></li>-->
                            <li><a href="<?php echo base_url('student_admission');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>fee payments</a></li>
                            <li><a href="<?php echo base_url('cheque_bounce_payments');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Cheque Bounce Payments</a></li>
                            <li><a href="<?php echo base_url('free_transactions');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Free Transactions</a></li>
                            <li><a href="<?php echo base_url('caution_deposit')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Caution Deposit</a></li>
                            <li><a href="<?php echo base_url('incentives')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentives List</a></li>
                            <li style="display:none"><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Mess</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#bank_expenditure" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-money" aria-hidden="true"></i><span>Bank Expenditure</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="bank_expenditure" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('bank_expenditure');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Bank Expenditure</a></li>
                            <li><a href="<?php echo base_url('bank_expenditure_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>bank Expenditure Report</a></li>
                        </ul>
                    </li>
                    <!---------------------------------------------------------------------------------------------------------------->
                    <!-----------------------------------------------SMS Notification------------------------------------------------------------->
                    <!--<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>SMS Module</a></li>-->
                    <!-----------------------------------------------SMS Notification------------------------------------------------------------->
                    <li>
                        <a href="#inventory_books" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Inventory Books</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="inventory_books" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="<?php echo base_url('books_publication_categories');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Publication Category</a></li>
                            <li><a href="<?php echo base_url('books_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Details</a></li>
                            <li><a href="<?php echo base_url('divisions');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Divisions</a></li>
                            <li><a href="<?php echo base_url('division_books_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Book Details</a></li>
                            <li><a href="<?php echo base_url('division_book_stock')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division stock edit</a></li>
                            <li><a href="<?php echo base_url('division_books_transfers');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Book transfer</a></li>
                            <li><a href="<?php echo base_url('division_to_branch_books_transfer_stock')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division to branch tanfer edit</a></li>
                            <li><a href="<?php echo base_url('book_sets');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Sets</a></li>
                            <li><a href="<?php echo base_url('branch_discount');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Discount</a></li>
                            <li><a href="<?php echo base_url('books_assignment');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Operations</a></li>
                            <li><a href="<?php echo base_url('books_not_issued_students');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Not Issued List</a></li>
                            <li><a href="<?php echo base_url('books_receipt_correction')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Receipt Correction</a></li>
                            <li><a href="<?php echo base_url('branch_book')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return Books</a></li>
                            <li><a href="<?php echo base_url('division_to_branch_books_transfer')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Divisions to branches Book Stock</a></li>
                            <li><a href="<?php echo base_url('division_to_branch_books_transfer_acknowledge');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Recived Acknowledge</a></li>
                            <li><a href="<?php echo base_url('absent_books_not_taken_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Today Absent and books not taken students</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#inventory_uniforms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-shirtsinbulk" aria-hidden="true"></i><span>Inventory Uniforms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="inventory_uniforms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo base_url('uniform_publication')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Publication</a></li>
                           <li><a href="<?php echo base_url('uniform_material')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Material</a></li>
                            <li><a href="<?php echo base_url('uniform_category')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Category</a></li>
                            <li><a href="<?php echo base_url('uniform_type')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Type</a></li>
                            <li><a href="<?php echo base_url('custom_uniform_sizes');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Custom Sizes</a></li>
                            <li><a href="<?php echo base_url('view_uniform_stock');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>View Uniform Stock</a></li>
                            <li><a href="<?php echo base_url('uniform_divisions');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Divisions</a></li>
                            <li><a href="<?php echo base_url('division_uniform_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Uniform Details</a></li>
                            <li><a href="<?php echo base_url('division_uniform_stock')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Uniform stock edit</a></li>
                            <li><a href="<?php echo base_url('division_uniform_transfers');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Uniform transfer</a></li>
                            <li><a href="<?php echo base_url('division_to_branch_uniform_transfer_acknowledge');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Uniform transfer Acknowledge</a></li> 
                            <li><a href="<?php echo base_url('division_to_branch_uniform_transfer');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform transfer stock edit</a></li> 
                            <li><a href="<?php echo base_url('assign_uniforms');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Operations</a></li>
                            <li><a href="<?php echo base_url('uniforms_receipt_correction')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Receipt Correction</a></li>
                            <li><a href="<?php echo base_url('branch_uniform')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return Uniforms</a></li>
                            <li><a href="<?php echo base_url('get_uniform_category_count_data')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Estimate Uniform Type stock</a></li>
                            <li><a href="<?php echo base_url('get_uniform_category_total')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Estimate uniform Category Stock </a></li>
                        </ul>
                    </li>

                    <!-- fee cancellation menu -->
                    <li>
                        <a href="<?php echo base_url('cancelled_receipts')?>" class="iq-waves-effect">
                            <i class="fa fa-list-alt" aria-hidden="true"></i><span>Cancelled Fee Receipts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
                        </a>

                    </li>
                    <!-- fee cancellation menu -->
                    <!-----------------------------------------------Reports------------------------------------------------------------->
                    <!--<li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i>Notification</a></li>-->
                    <!-----------------------------------------------SMS Notification------------------------------------------------------------->

                    <li>
                        <a href="#Vendors" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-suitcase " aria-hidden="true"></i><span>Vendors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="Vendors" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('ledgers');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Ledgers</a></li>
                            <li><a href="<?php echo base_url('vendors');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vendors</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#Observation" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Observation</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="Observation" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('observation_category');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Observation Category</a></li>
                            <li><a href="<?php echo base_url('observation_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Question</a></li>
                            <li><a href="<?php echo base_url('observation_question_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>question view</a></li>
                            <li>
                                <a href="#books_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-camera"></i><span>Observation Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="books_report" class="iq-submenu iq-submenu-data collapse">
                                    <li><a href="<?php echo base_url('camera_obseravtion');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Camera observation report</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file" aria-hidden="true"></i><span>Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <ul>
                                <li>
                                    <a href="#biometric_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Biometric Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="biometric_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('staff_attendance_logs');?>"><i class="fa fa-users"></i>Staff Attendance Logs</a></li>
                                        <li><a href="<?php echo base_url('attendance_logs');?>"><i class="fa fa-users"></i> Branch wise day Attendance logs</a></li>
                                        <li><a href="<?php echo base_url('invalid_attendances');?>"><i class="fa fa-users"></i>Late/Half/Single Entries Attendances</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#books_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-book"></i><span>Inventory Books Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="books_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('books_assigned_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Class wise Book sales report</a></li>
                                        <li><a href="<?php echo base_url('book_non_assigned')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Non Assigned List</a></li>
                                        <li><a href="<?php echo base_url('branch_wise_books_report');?>"><i class="fa fa-book"></i> Branch wise books transfer</a></li>
                                        <li><a href="<?php echo base_url('books_stock_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Stock Report</a></li>
                                        <li><a href="<?php echo base_url('overall_books_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Overall Book Report</a></li>
                                        <li><a href="<?php echo base_url('transfer_sheet_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Transfer sheet Report</a></li>
                                        <li><a href="<?php echo base_url('books_sales_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Sales Report</a></li>
                                        <li><a href="<?php echo base_url('books_return')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Branch Books Return  Report</a></li>
                                        <li><a href="<?php echo base_url('returns_books_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return Book  Report</a></li>
                                        <li><a href="<?php echo base_url('inventory_day_sheet/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('inventory_daywise_collection/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>branch wise books collection</a></li>
                                        <li><a href="<?php echo base_url('branch_inventory_sales_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branches Inventory slaes report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#uniform_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>Inventory Uniform Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="uniform_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('branch_wise_uniforms_report');?>"><i class="fas fa-tshirt"></i> Branch wise Uniform</a></li>
                                        <li><a href="<?php echo base_url('get_uniform_stock_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Stock Report</a></li>
                                        <li><a href="<?php echo base_url('uniforms_return')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branch Wise Return uniform Report</a></li>
                                        <li><a href="<?php echo base_url('returns_uniform_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return uniform  Report</a></li>
                                        <li><a href="<?php echo base_url('transfer_uniform_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Transfer sheet Report</a></li>
                                        <li><a href="<?php echo base_url('inventory_day_sheet/'.raos_encode(UNIFORMS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('inventory_daywise_collection/'.raos_encode(UNIFORMS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>branch wise Uniform Fee collection</a></li>
                                        <li><a href="<?php echo base_url('uniform_sales_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Sales Report</a></li>
                                        <li><a href="<?php echo base_url('uniform_sales');?>"><i class="fas fa-tshirt"></i> All Branches Uniform sales</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#fee_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>Fee Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="fee_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('day_sheet_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('get_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>All Branches Daysheet</a></li>
                                        <li><a href="<?php echo base_url('other_fee_collection')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Other Fee Collection Report</a></li>
                                        <li><a href="<?php echo base_url('otp_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>OTP REPORT</a></li>
                                        <li><a href="<?php echo base_url('dropout_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Dropout Report</a></li>
                                        <li><a href="<?php echo base_url('get_term_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Term Due Report</a></li>
                                        <li><a href="<?php echo base_url('fee_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Due Report</a></li>
                                        <li><a href="<?php echo base_url('due_collection_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> old Due Collection</a></li>
                                        <li><a href="<?php echo base_url('profit_loss')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Profit Loss Report</a></li>
                                        <li><a href="<?php echo base_url('transport_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Transport Dues report</a></li>
                                        <li><a href="<?php echo base_url('student_transport_fee_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Transport Report</a></li>
                                        <li><a href="<?php echo base_url('hostel_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Hostel Due Report</a></li>
                                        <li><a href="<?php echo base_url('all_fee_payments_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>All Fee Payments</a></li>
                                        <li><a href="<?php echo base_url('branch_daywise')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branch Wise Fee Collection Report</a></li>
                                        <li><a href="<?php echo base_url('terms_fee_collection')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Term Wise Fee collection Report</a></li>
                                        <li><a href="<?php echo base_url('dues_abstract')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Dues Abstract Report</a></li>
                                        <li><a href="<?php echo base_url('classwise_average_fee')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Class Avg Fee Report</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <a href="#finance_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>Finance Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="finance_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('finance_expense_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Expenses Report</a></li>
                                        <li><a href="<?php echo base_url('expenses_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Monthly Expenses Report</a></li>
                                        <li><a href="<?php echo base_url('free_transaction_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Free Transaction  Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('tc_amount_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>TC Amount Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('finance_income_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Income Summary</a></li>
                                        <li><a href="<?php echo base_url('caution_deposit_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Caution Deposit Report</a></li>
                                        <li><a href="<?php echo base_url('bank_reports')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Bank Balance Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#other_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>other Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="other_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('staff_certificates')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Staff Certificates</a></li>
                                        <li><a href="<?php echo base_url('inactive_student')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Inactive Reports</a></li>
                                        <li><a href="<?php echo base_url('student_leaves_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Leaves</a></li>
                                        <li><a href="<?php echo base_url('incentives_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentives  Report</a></li>
                                        <li><a href="<?php echo base_url('enquiry_admission_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Enquiry Report</a></li>
                                        <li><a href="<?php echo base_url('admission_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admissions Report</a></li>
                                        <li><a href="<?php echo base_url('admission_graphs')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admissions Graph Report</a></li>
                                        <li><a href="<?php echo base_url('phone_follow_up')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Phone Follow Up</a></li>
                                        <li><a href="<?php echo base_url('route_wise_student_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Routes Wise Students</a></li>
                                        <li><a href="<?php echo base_url('staff_payroll_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Payroll Report</a></li>

                                        <li><a href="<?php echo base_url('ledgers_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Ledger Report</a></li>
                                        <li><a href="<?php echo base_url('parent_visit_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Parent Visit Report</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#lms_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>LMS Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="lms_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('dairy_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Diary Report</a></li>
                                    </ul>
                                </li>
                            </ul>



                        </ul>
                    </li>

                    <!--<li>-->
                    <!--    <a href="#setting" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i><span>School Setting</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>-->
                    <!--    <ul id="setting" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">-->
                    <!--  <li><a href="<?php echo base_url('add_class');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Class</a></li>-->
                    <!--           <li><a href="<?php echo base_url('sections');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Sections List</a></li>-->
                    <!--<li><a href="<?php echo base_url('school_changes');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>School Changes</a></li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                <?php }?>
                <!----------------------Admin----------------------->
                <?php
                if (!empty($session->get('role')) && in_array("Admin", $session->get('role'))) {?>


                    <li>
                        <a href="<?php echo base_url('dashboard');?>" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard </span></a>
                    </li>
                    <li><a href="<?php echo base_url('users');?>"><i class="fa fa-users" aria-hidden="true"></i>User Managment</a></li>
                    <li><a href="<?php echo base_url('notification');?>"><i class="fa fa-bell" aria-hidden="true"></i>Notifications</a></li>
                    <li><a href="<?php echo base_url('roles');?>"><i class="fa fa-users" aria-hidden="true"></i>Roles</a></li>
                    <li><a href="<?php echo base_url('parent_complaints');?>"><i class="fa fa-bell" aria-hidden="true"></i>Parent Complaints</a></li>
                    <li>
                        <a href="#ticketing" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-ticket" aria-hidden="true"></i><span>Ticketing</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ticketing" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('parents_entry_ticketing');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Raise Ticket</a></li>
                            <li><a href="<?php echo base_url('parent_tickets');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Manage Tickets</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Masters</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('branch');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branch</a></li>
                            <li><a href="<?php echo base_url('class_subjects');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Class</a></li>
                            <li><a href="<?php echo base_url('get_lessons_by_chapter');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Lessons</a></li>
                            <li><a href="<?php echo base_url('hostel');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Hostel</a></li>
                            <li><a href="<?php echo base_url('fee_structure');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Fee</a></li>
                            <li><a href="<?php echo base_url('incentive_amount');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Incentives</a></li>
                            <li><a href="<?php echo base_url('batch_fee');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Batch Increase Fee</a></li>
                            <li><a href="<?php echo base_url('batch_transfer');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Batch Transfer</a></li>
                            <li><a href="<?php echo base_url('set_term_fee/Fee');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Term Fee </a></li>
                            <li><a href="<?php echo base_url('set_term_fee/Transport');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Term Transport</a></li>
                            <!--<li><a href="<?php echo base_url('set_concession'); ?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Fee Concession</a></li>-->

                            <li><a href="<?php echo base_url('set_term_fee/Hostel');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Term Hostel</a></li>
                            <li><a href="<?php echo base_url('target_amount');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Target Amount</a></li>
                            <li><a href="<?php echo base_url('loan_amount');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Loan Amount</a></li>
                            <li><a href="<?php echo base_url('branch_rent');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Rent</a></li>
                            <li><a href="<?php echo base_url('inactive_students');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Inactive Students</a></li>
                            <li><a href="<?php echo base_url('student');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Inactive Student Accounting Period</a></li>
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Bank Expenditure</a></li>-->
                            <li><a href="<?php echo base_url('bank_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Bank Detials</a></li>
                            <li><a href="<?php echo base_url('holidays');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Holidays</a></li>
                            <li><a href="<?php echo base_url('activity');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Activity Management</a></li>
                            <!--                        <li><a href="--><?php //echo base_url('syllabus');?><!--"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Syllabus</a></li>-->
                            <!--                       <li><a href="--><?php //echo base_url('add_test');?><!--"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Test</a></li>-->
                            <!--                        <li><a href="--><?php //echo base_url('upload_offline_test_marks');?><!--"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Offline Exam </a></li>-->
                            <!--                          <li><a href="--><?php //echo base_url('marks_list');?><!--"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Total Marks List </a></li>-->

                        </ul>
                    </li>
                    <li>
                        <a href="#menu-design1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Approvals</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('finance_income');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Income</a></li>
                            <li><a href="<?php echo base_url('finance_expense');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Expenses</a></li>
                            <li><a href="<?php echo base_url('ot_payment_requests')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>OTP Approvals</a></li>
                            <li><a href="<?php echo base_url('get_vehicle_service_approve_list'); ?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vehicle Service Approval</a></li>
                            <li><a href="<?php echo base_url('get_stock_return_list')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Get  Book Return stock list</a></li>
                            <li><a href="<?php echo base_url('get_uniform_stock_return_list')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Get Uniform Return stock list</a></li>
                            <li><a href="<?php echo base_url('book_fee_correction_approval/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Fee Correction Approval</a></li>
                            <li><a href="<?php echo base_url('uniform_fee_correction_approval')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Fee Correction Approval</a></li>
                            <li><a href="<?php echo base_url('fee_correction_approvel')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Corrections Approvals</a></li>
                            <li><a href="<?php echo base_url('cancel_request_list/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Book Receipt Cancel Approval</a></li>
                            <li><a href="<?php echo base_url('uniform_cancel_request_list')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Uniform Receipt Cancel Approval</a></li>
                            <li><a href="<?php echo base_url('concession_requests')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Concession Approval</a></li>
                            <li><a href="<?php echo base_url('free_transaction_cancel_request_list')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Free Transaction Cancellation  Approval</a></li>
                            <li><a href="<?php echo base_url('transport_concession_requests')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Transport Fee Concession Approval</a></li>


                        </ul>
                    </li>
                    <!--<li><a href="<?php echo base_url('admin');?>"><i class="ri-user-line"></i>Admin</a></li>-->
                    <!--<li><a href="<?php echo base_url('principle');?>"><i class="fa fa-users" aria-hidden="true"></i>Principle</a></li>-->
                    <!--<li><a href="<?php echo base_url('accountant');?>"><i class="fa fa-users" aria-hidden="true"></i>Accountants</a></li>-->
                    <!--  <li><a href="#">Class Time TableAccountant</a></li>-->
                    <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Staff</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('staff_type');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Staff Type</a></li>

                          <ul>
                                <li>
                                    <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Staff View</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('staff_list');?>"><i class="ri-record-circle-line"></i>View Staff</a></li>
                                        <!-- <li><a href="<?php echo base_url('staff_subject_mapping');?>"><i class="ri-record-circle-line"></i>Staff Subject Mapping</a></li> -->
                                        <!-- <li><a href="<?php echo base_url('staff_set_salary');?>"><i class="ri-record-circle-line"></i>Set Salary</a></li> -->
                                        <li><a href="<?php echo base_url('set_staff_attendance');?>"><i class="ri-record-circle-line"></i>Set Attendance</a></li>
                                        <li><a href="<?php echo base_url('view_staff_attendance');?>"><i class="ri-record-circle-line"></i>View Staff Attendance</a></li>
                                        <li><a href="<?php echo base_url('staff_attendance_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Staff Attendance month Report</a></li>
                                        <li><a href="<?php echo base_url('staff_attendance_edit')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Edit Staff Attendance</a></li>
                                        <li><a href="<?php echo base_url('staff_document_reports');?>"><i class="ri-record-circle-line"></i>Staff Documents</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- <li><a href="<?php echo base_url('class_staff');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Class Staff Mapping</a></li> -->
                            </li>

                        </ul>
                    </li>


                    <li>

                    <li>
                        <a href="#mailbox1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i><span>Student</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('enquiry');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Enquiry</a></li>
                            <li><a href="<?php echo base_url('parent_fill_enquiry');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Parent Enquiry Form</a></li>
                            <li><a href="<?php echo base_url('enquiry_list');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Enquiry List</a></li>
                            <li><a href="<?php echo base_url('student_admission');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student List</a></li>
                            <li><a href="<?php echo base_url('student_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Students Attendance</a></li>
                            <li><a href="<?php echo base_url('student_month_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Students Month Attendance</a></li>
                            <!--<li><a href="<?php echo base_url('student_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Attendance</a></li>-->
                            <!--<li><a href="<?php echo base_url('ot_payment_requests');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> OTP Requests</a></li>-->
                            <li><a href="<?php echo base_url('student_uniform_mapping');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Student wise uniform mapping</a></li>
                            <li><a href="<?php echo base_url('student_qr_code');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Qr code</a></li>
                            <li><a href="<?php echo base_url('students_credientials');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Credientails</a></li>
                        </ul>
                    </li>
                    <!-- Branch Timings menu -->
                    <li>
                        <a href="<?php echo base_url('branch_timings')?>" class="iq-waves-effect">
                            <i class="ri-timer-line"></i><span>Branch Timings</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i>
                        </a>

                    </li>
                    <!-- Branch Timings menu -->
                    <!--<li><a href="<?php echo base_url('timetable');?>"><i class="fa fa-calendar" aria-hidden="true"></i>Class Time Table</a></li>-->
                    <!--<li>-->
                    <!--    <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Exam</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>-->
                    <!--    <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">-->
                    <!--        <li><a href="<?php echo base_url('exam_timetable');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Time Table</a></li>-->
                    <!--        <li><a href="<?php echo base_url('exam_marks');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Marks</a></li>-->

                    <!--    </ul>-->
                    <!--</li>-->

                    <li>
                        <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-bus" aria-hidden="true"></i><span>Transport</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('routes');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Routes Management</a></li>
                            <li><a href="<?php echo base_url('vehicle_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vehicle Management</a></li>
                            <li><a href="<?php echo base_url('driver_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Drivers Management</a></li>
                            <!--<li><a href="<?php echo base_url('assign_student');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Assign Student</a></li>-->

                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Attendance</a></li>-->
                            <li><a href="<?php echo base_url('fuel_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vehicle Fuel</a></li>
                            <li><a href="<?php echo base_url('route_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Transport Attendance</a></li>
                            <li><a href="<?php echo base_url('transport_attendance_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Monthly Transport Attendance Report</a></li>

                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Vehicle Service</a></li>-->

                        </ul>
                    </li>
                    <!-------------------------------------------groups------------------------------------------------------------------>
                    <li>
                        <a href="#studentgroup" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-users" aria-hidden="true"></i><span>Student Groups</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="studentgroup" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('student_groups');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Groups</a></li>


                        </ul>
                    </li>
                    <!--<li><a href="<?php // echo base_url('timetable');?>"><i class="fa fa-users" aria-hidden="true"></i>Staff Timetable</a></li>-->
                    <!-----------------------------------------------Finance------------------------------------------------------------->
                    <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-suitcase " aria-hidden="true"></i><span>Finance</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentive</a></li>-->
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Fee Payment</a></li>-->
                            <li><a href="<?php echo base_url('student_admission');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>fee payments</a></li>
                            <li><a href="<?php echo base_url('cheque_bounce_payments');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Cheque Bounce Payments</a></li>
                            <li><a href="<?php echo base_url('free_transactions');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Free Transactions</a></li>
                            <li><a href="<?php echo base_url('caution_deposit')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Caution Deposit</a></li>
                            <li><a href="<?php echo base_url('incentives')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentives List</a></li>

                            <li style="display:none"><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Mess</a></li>

                        </ul>
                    </li>


                    <li>
                        <a href="#leaves" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Leave Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="leaves" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('self_leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leave Request</a></li>
                            <!--<li><a href="<?php echo base_url('leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Staff Leave Request</a></li>-->
                            <li><a href="<?php echo base_url('leaves');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leaves</a></li>


                        </ul>
                    </li>


                    <li>
                        <a href="#questions" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Question Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="questions" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('add_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Question</a></li>
                            <!--<li><a href="<?php echo base_url('leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leave Request</a></li>-->
                            <li><a href="<?php echo base_url('questions_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Questions view</a></li>
                            <li><a href="<?php echo base_url('add_admission_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Admission Question</a></li>
                            <li><a href="<?php echo base_url('admission_question_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admission Questions view</a></li>
                            <li><a href="<?php echo base_url('add_paragraph');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add  Admission Para/Image</a></li>
                            <li><a href="<?php echo base_url('list_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Admission Para/Image view</a></li>


                        </ul>
                    </li>


                    <!---------------------------------------------------------------------------------------------------------------->
                    <!-----------------------------------------------SMS Notification------------------------------------------------------------->
                    <!--<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>SMS Module</a></li>-->
                    <!-----------------------------------------------SMS Notification------------------------------------------------------------->
                    <li>
                        <a href="#inventory_books" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Inventory Books</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="inventory_books" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('books_publication_categories');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Publication Category</a></li>
                            <li><a href="<?php echo base_url('books_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Details</a></li>
                            <li><a href="<?php echo base_url('divisions');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Divisions</a></li>
                            <li><a href="<?php echo base_url('division_books_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Book Details</a></li>
                            <li><a href="<?php echo base_url('division_book_stock')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division stock edit</a></li>
                            <li><a href="<?php echo base_url('division_books_transfers');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Book transfer</a></li>
                            <li><a href="<?php echo base_url('division_to_branch_books_transfer_stock')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division to branch tanfer edit</a></li>
                            <li><a href="<?php echo base_url('book_sets');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Sets</a></li>
                            <li><a href="<?php echo base_url('branch_discount');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Discount</a></li>
                            <li><a href="<?php echo base_url('books_assignment');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Operations</a></li>
                            <li><a href="<?php echo base_url('books_not_issued_students');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Not Issued List</a></li>
                            <li><a href="<?php echo base_url('books_receipt_correction')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Receipt Correction</a></li>
                            <li><a href="<?php echo base_url('branch_book')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return Books</a></li>
                            <li><a href="<?php echo base_url('division_to_branch_books_transfer')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Divisions to branches Book Stock</a></li>
                            <li><a href="<?php echo base_url('division_to_branch_books_transfer_acknowledge');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Recived Acknowledge</a></li>
                            <li><a href="<?php echo base_url('absent_books_not_taken_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Today Absent and books not taken students</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#inventory_uniforms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-shirtsinbulk" aria-hidden="true"></i><span>Inventory Uniforms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="inventory_uniforms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="<?php echo base_url('uniform_publication')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Publication</a></li>
                            <li><a href="<?php echo base_url('uniform_material')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Material</a></li>
                            <li><a href="<?php echo base_url('uniform_category')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Category</a></li>
                            <li><a href="<?php echo base_url('uniform_type')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Type</a></li>
                            <li><a href="<?php echo base_url('custom_uniform_sizes');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Custom Sizes</a></li>
                            <li><a href="<?php echo base_url('view_uniform_stock');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>View Uniform Stock</a></li>
                            <li><a href="<?php echo base_url('uniform_divisions');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Divisions</a></li>
                            <li><a href="<?php echo base_url('division_uniform_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Uniform Details</a></li>
                            <li><a href="<?php echo base_url('division_uniform_transfers');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Division Uniform transfer</a></li>
                            <li><a href="<?php echo base_url('assign_uniforms');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Operations</a></li>
                            <li><a href="<?php echo base_url('uniforms_receipt_correction')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Receipt Correction</a></li>
                            <li><a href="<?php echo base_url('branch_uniform')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return Uniforms</a></li>
                            <li><a href="<?php echo base_url('get_uniform_category_count_data')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Estimate Uniform Type stock</a></li>
                            <li><a href="<?php echo base_url('get_uniform_category_total')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Estimate uniform Category Stock </a></li>
                        </ul>
                    </li>
                    <!-- fee cancellation menu -->
                    <li>
                        <a href="<?php echo base_url('cancelled_receipts')?>" class="iq-waves-effect">
                            <i class="fa fa-list-alt" aria-hidden="true"></i><span>Cancelled Fee Receipts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
                        </a>

                    </li>
                    <!-- fee cancellation menu -->
                    <!-----------------------------------------------Reports------------------------------------------------------------->
                    <!--<li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i>Notification</a></li>-->
                    <!-----------------------------------------------SMS Notification------------------------------------------------------------->
                    <li>
                        <a href="#Vendors" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-suitcase " aria-hidden="true"></i><span>Vendors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="Vendors" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('ledgers');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Ledgers</a></li>
                            <li><a href="<?php echo base_url('vendors');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vendors</a></li>


                        </ul>
                    </li>
                    <li>
                        <a href="#Observation" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Observation</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="Observation" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('observation_category');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Observation Category</a></li>
                            <li><a href="<?php echo base_url('observation_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Question</a></li>
                            <li><a href="<?php echo base_url('observation_question_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>question view</a></li>
                            <li>
                                <a href="#books_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><span>Observation Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="books_report" class="iq-submenu iq-submenu-data collapse">
                                    <li><a href="<?php echo base_url('camera_obseravtion');?>" class="pl-3"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Camera observation report</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file" aria-hidden="true"></i><span>Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <ul>
                                <li>
                                    <a href="#biometric_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Biometric Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="biometric_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('staff_attendance_logs');?>"><i class="fa fa-users"></i>Staff Attendance Logs</a></li>
                                        <li><a href="<?php echo base_url('attendance_logs');?>"><i class="fa fa-users"></i> Branch wise day Attendance logs</a></li>
                                        <li><a href="<?php echo base_url('invalid_attendances');?>"><i class="fa fa-users"></i>Late/Half/Single Entries Attendances</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#books_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-book"></i><span>Inventory Books Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="books_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('books_assigned_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Class wise Book sales report</a></li>
                                        <li><a href="<?php echo base_url('book_non_assigned')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Non Assigned List</a></li>
                                        <li><a href="<?php echo base_url('branch_wise_books_report');?>"><i class="fa fa-book"></i> Branch wise books transfer</a></li>
                                        <li><a href="<?php echo base_url('books_stock_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Stock Report</a></li>
                                        <li><a href="<?php echo base_url('overall_books_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Overall Book Report</a></li>
                                        <li><a href="<?php echo base_url('transfer_sheet_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Transfer sheet Report</a></li>
                                        <li><a href="<?php echo base_url('books_sales_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Sales Report</a></li>
                                        <li><a href="<?php echo base_url('books_return')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Branch Books Return  Report</a></li>
                                        <li><a href="<?php echo base_url('returns_books_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return Book  Report</a></li>
                                        <li><a href="<?php echo base_url('inventory_day_sheet/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('inventory_daywise_collection/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>branch wise books collection</a></li>
                                        <li><a href="<?php echo base_url('branch_inventory_sales_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branches Inventory slaes report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#uniform_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>Inventory Uniform Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="uniform_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('branch_wise_uniforms_report');?>"><i class="fas fa-tshirt"></i> Branch wise Uniform</a></li>
                                        <li><a href="<?php echo base_url('get_uniform_stock_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Stock Report</a></li>
                                        <li><a href="<?php echo base_url('uniforms_return')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branch Wise Return uniform Report</a></li>
                                        <li><a href="<?php echo base_url('returns_uniform_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return uniform  Report</a></li>
                                        <li><a href="<?php echo base_url('transfer_uniform_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Transfer sheet Report</a></li>
                                        <li><a href="<?php echo base_url('inventory_day_sheet/'.raos_encode(UNIFORMS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('inventory_daywise_collection/'.raos_encode(UNIFORMS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>branch wise Uniform Fee collection</a></li>
                                        <li><a href="<?php echo base_url('uniform_sales_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Sales Report</a></li>
                                        <li><a href="<?php echo base_url('uniform_sales');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> All Branches Uniform sales</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#fee_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>Fee Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="fee_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('day_sheet_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('get_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>All Branches Daysheet</a></li>
                                        <li><a href="<?php echo base_url('other_fee_collection')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Other Fee Collection Report</a></li>
                                        <li><a href="<?php echo base_url('otp_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>OTP REPORT</a></li>
                                        <li><a href="<?php echo base_url('dropout_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Dropout Report</a></li>
                                        <li><a href="<?php echo base_url('get_term_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Term Due Report</a></li>
                                        <li><a href="<?php echo base_url('fee_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Due Report</a></li>
                                        <li><a href="<?php echo base_url('due_collection_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> old Due Collection</a></li>
                                        <li><a href="<?php echo base_url('profit_loss')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Profit Loss Report</a></li>
                                        <li><a href="<?php echo base_url('transport_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Transport Dues report</a></li>
                                        <li><a href="<?php echo base_url('student_transport_fee_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Transport Report</a></li>
                                        <li><a href="<?php echo base_url('hostel_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Hostel Due Report</a></li>
                                        <li><a href="<?php echo base_url('all_fee_payments_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>All Fee Payments</a></li>
                                        <li><a href="<?php echo base_url('branch_daywise')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branch Wise Fee Collection Report</a></li>
                                        <li><a href="<?php echo base_url('terms_fee_collection')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Term Wise Fee collection Report</a></li>
                                        <li><a href="<?php echo base_url('dues_abstract')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Dues Abstract Report</a></li>
                                        <li><a href="<?php echo base_url('classwise_average_fee')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Class Avg Fee Report</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <a href="#finance_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>Finance Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="finance_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('finance_expense_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Expenses Report</a></li>
                                        <li><a href="<?php echo base_url('expenses_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Monthly Expenses Report</a></li>
                                        <li><a href="<?php echo base_url('free_transaction_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Free Transaction  Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('tc_amount_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>TC Amount Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('finance_income_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Income Summary</a></li>
                                        <li><a href="<?php echo base_url('caution_deposit_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Caution Deposit Report</a></li>
                                        <li><a href="<?php echo base_url('bank_reports')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Bank Balance Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#other_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>other Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="other_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('staff_certificates')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Staff Certificates</a></li>
                                        <li><a href="<?php echo base_url('inactive_student')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Inactive Reports</a></li>
                                        <li><a href="<?php echo base_url('student_leaves_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Leaves</a></li>
                                        <li><a href="<?php echo base_url('incentives_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentives  Report</a></li>
                                        <li><a href="<?php echo base_url('enquiry_admission_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Enquiry Report</a></li>
                                        <li><a href="<?php echo base_url('admission_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admissions Report</a></li>
                                        <li><a href="<?php echo base_url('admission_graphs')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admissions Graph Report</a></li>
                                        <li><a href="<?php echo base_url('phone_follow_up')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Phone Follow Up</a></li>
                                        <li><a href="<?php echo base_url('route_wise_student_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Routes Wise Students</a></li>
                                        <li><a href="<?php echo base_url('staff_payroll_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Payroll Report</a></li>
                                        <li><a href="<?php echo base_url('ledgers_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Ledger Report</a></li>
                                        <li><a href="<?php echo base_url('parent_visit_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Parent Visit Report</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#lms_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>LMS Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="lms_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('dairy_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Diary Report</a></li>
                                    </ul>
                                </li>
                            </ul>



                        </ul>
                    </li>
                    <li>
                        <a href="#bank_expenditure" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-money" aria-hidden="true"></i><span>Bank Expenditure</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="bank_expenditure" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('bank_expenditure');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Bank Expenditure</a></li>
                            <li><a href="<?php echo base_url('bank_expenditure_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>bank Expenditure Report</a></li>
                        </ul>
                    </li>

                    <!-- Timetable block -->
                    <li>
                        <a href="#timeTable" class="iq-waves-effect collapsed" data-toggle="collapse"
                           aria-expanded="false">
                            <i class="fa fa-calendar " aria-hidden="true"></i><span>Students Timetable</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="timeTable" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('periods_management');?>"><i
                                            class="ri-arrow-right-s-line iq-arrow-left" aria-hidden="true"></i>Class
                                    Period Management</a></li>
                            <li><a href="<?php echo base_url('timetable');?>"><i
                                            class="ri-arrow-right-s-line iq-arrow-left" aria-hidden="true"></i>Class
                                    Time Table</a></li>
                        </ul>
                    </li>
                    <!-- Timetable block ends -->

                    <!--<li>-->
                    <!--    <a href="#setting" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i><span>School Setting</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>-->
                    <!--    <ul id="setting" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">-->
                    <!--  <li><a href="<?php echo base_url('add_class');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Class</a></li>-->
                    <!--           <li><a href="<?php echo base_url('sections');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Sections List</a></li>-->
                    <!--<li><a href="<?php echo base_url('school_changes');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>School Changes</a></li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                <?php }?>
                <!-----------------Accountant----->
                <?php
                if (!empty($session->get('role')) && in_array("Accountant", $session->get('role'))) {?>
                    <li><a href="<?php echo base_url('parent_complaints');?>"><i class="fa fa-bell" aria-hidden="true"></i>Parent Complaints</a></li>
                    <li>
                        <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Masters</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                            <li><a href="<?php echo base_url('hostel');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Hostel</a></li>


                        </ul>
                    </li>

                    <li>
                        <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i><span>Staff</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                            <li><a href="<?php echo base_url('staff_list');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>View Staff</a></li>
                            <!-- <li><a href="<?php echo base_url('staff_subject_mapping');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Staff Subject Mapping</a></li> -->
                            <!-- <li><a href="<?php echo base_url('staff_set_salary');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Salary</a></li> -->
                            <?php  foreach ($session->get('user_branches') as $value) {?>
                            <?php if (!in_array($value, $branches)) {?>
                                <li><a href="<?php echo base_url('set_staff_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Set Attendance</a></li>
       
                             <?php }}?>
                            <!-- <li><a href="<?php echo base_url('view_staff_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>View Staff Attendance</a></li> -->
                            <!-- <li><a href="<?php echo base_url('view_staff_attendance');?>"><i class="ri-record-circle-line"></i>View Staff Attendance</a></li> -->
                            <li><a href="<?php echo base_url('staff_document_reports');?>"><i class="ri-record-circle-line"></i>Staff Documents</a></li>
                        </ul>
                    <!-- <li><a href="<?php echo base_url('class_staff');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Class Staff Mapping</a></li> -->


                    <!-- Branch Timings menu -->
                    <!-- <li>
                        <a href="<?php echo base_url('branch_timings')?>" class="iq-waves-effect">
                            <i class="ri-timer-line"></i><span>Branch Timings</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i>
                        </a>

                    </li> -->
                    <!-- Branch Timings menu -->

                    <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-suitcase " aria-hidden="true"></i><span>Finance</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentive</a></li>-->
                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Fee Payment</a></li>-->
                            <li><a href="<?php echo base_url('student_admission');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>fee payments</a></li>
                            <li><a href="<?php echo base_url('cheque_bounce_payments');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Cheque Bounce Payments</a></li>
                            <li><a href="<?php echo base_url('free_transactions');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Free Transactions</a></li>
                            <li><a href="<?php echo base_url('caution_deposit')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Caution Deposit</a></li>
                            <li><a href="<?php echo base_url('incentives')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentives List</a></li>
                            <li style="display:none"><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Mess</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#menu-design1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Approvals</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('finance_income');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Income</a></li>
                            <li><a href="<?php echo base_url('finance_expense');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Expenses</a></li>
                            <li><a href="<?php echo base_url('ot_payment_requests')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>OTP Approvals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#mailbox1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i><span>Student</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('enquiry');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Enquiry</a></li>
                            <li><a href="<?php echo base_url('parent_fill_enquiry');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Parent Enquiry Form</a></li>
                            <li><a href="<?php echo base_url('enquiry_list');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Enquiry List</a></li>
                            <li><a href="<?php echo base_url('student_admission');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student List</a></li>
                            <li><a href="<?php echo base_url('student_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Students Attendance</a></li>
                            <li><a href="<?php echo base_url('student_month_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Students Month Attendance</a></li>
                            <li><a href="<?php echo base_url('student_uniform_mapping');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Student wise uniform mapping</a></li>
                            <li><a href="<?php echo base_url('student_qr_code');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Qr code</a></li>
                            <li><a href="<?php echo base_url('students_credientials');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Credientails</a></li>
                            <li><a href="<?php echo base_url('students_list');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Id Card Students List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-bus" aria-hidden="true"></i><span>Transport</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('routes');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Routes Management</a></li>
                            <li><a href="<?php echo base_url('vehicle_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vehicle Management</a></li>
                            <li><a href="<?php echo base_url('driver_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Drivers Management</a></li>
                            <!--<li><a href="<?php echo base_url('assign_student');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Assign Student</a></li>-->

                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Students Attendance</a></li>-->
                            <li><a href="<?php echo base_url('fuel_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Vehicle Fuel</a></li>
                            <li><a href="<?php echo base_url('route_attendance');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Transport Attendance</a></li>
                            <li><a href="<?php echo base_url('transport_attendance_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Monthly Transport Attendance Report</a></li>

                            <!--<li><a href="#"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Vehicle Service</a></li>-->

                        </ul>
                    </li>
                    <li>
                        <a href="#leaves" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Leave Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="leaves" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('self_leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Self Leave Request</a></li>
                            <li><a href="<?php echo base_url('leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Staff Leave Request</a></li>
                            <li><a href="<?php echo base_url('leaves');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leaves</a></li>


                        </ul>
                    </li>
                    <li>
                        <a href="#questions" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Question Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="questions" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('add_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Question</a></li>
                            <!--<li><a href="<?php echo base_url('leave_request');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Leave Request</a></li>-->
                            <li><a href="<?php echo base_url('questions_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Questions view</a></li>
                            <li><a href="<?php echo base_url('add_admission_question');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add Admission Question</a></li>
                            <li><a href="<?php echo base_url('admission_question_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admission Questions view</a></li>
                            <li><a href="<?php echo base_url('add_paragraph');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Add  Admission Para/Image</a></li>
                            <li><a href="<?php echo base_url('list_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Admission Para/Image view</a></li>




                        </ul>
                    </li>

                    <li>
                        <a href="#inventory_books" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Inventory Books</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="inventory_books" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <!--<li><a href="<?php echo base_url('books_publication_categories');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Publication Category</a></li>-->
                            <!--<li><a href="<?php echo base_url('books_details');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Details</a></li>-->
                            <!--<li><a href="<?php echo base_url('books_transfer');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Transfer Books</a></li>-->
                            <li><a href="<?php echo base_url('division_to_branch_books_transfer_acknowledge');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Recived Acknowledge</a></li>
                            <li><a href="<?php echo base_url('books_assignment');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Operations</a></li>
                            <li><a href="<?php echo base_url('books_receipt_correction')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Receipt Correction</a></li>
                            <li><a href="<?php echo base_url('branch_book')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return Books</a></li>
                            <li><a href="<?php echo base_url('absent_books_not_taken_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Today Absent and books not taken students</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#inventory_uniforms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-shirtsinbulk" aria-hidden="true"></i><span>Inventory Uniforms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="inventory_uniforms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="<?php echo base_url('assign_uniforms');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Operations</a></li>
                            <li><a href="<?php echo base_url('uniforms_receipt_correction')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Receipt Correction</a></li>
                            <li><a href="<?php echo base_url('branch_uniform')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Return Uniforms</a></li>
                            <li><a href="<?php echo base_url('division_to_branch_uniform_transfer_acknowledge');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Recived Acknowledge</a></li>
                        </ul>
                    </li>
                    <li>

                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file" aria-hidden="true"></i><span>Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <ul>
                                <li>
                                    <a href="#fee_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Fee Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="fee_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('day_sheet_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('branch_daywise')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branch Wise Fee Collection Report</a></li>
                                        <li><a href="<?php echo base_url('fee_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Due Report</a></li>
                                        <li><a href="<?php echo base_url('due_collection_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> old Due Collection</a></li>
                                        <li><a href="<?php echo base_url('all_fee_payments_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>All Fee Payments</a></li>
                                        <li><a href="<?php echo base_url('transport_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Transport Dues report</a></li>
                                        <li><a href="<?php echo base_url('hostel_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Hostel Due Report</a></li>
                                        <li><a href="<?php echo base_url('get_term_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Term Due Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#biometric_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Biometric Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="biometric_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('staff_attendance_logs');?>"><i class="fa fa-users"></i>Staff Attendance Logs</a></li>
                                        <li><a href="<?php echo base_url('attendance_logs');?>"><i class="fa fa-users"></i> Branch wise day Attendance logs</a></li>
                                        <li><a href="<?php echo base_url('invalid_attendances');?>"><i class="fa fa-users"></i>Late/Half/Single Entries Attendances</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#books_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Inventory Books Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="books_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('inventory_day_sheet/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('inventory_daywise_collection/'.raos_encode(BOOKS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>branch wise books collection</a></li>
                                        <li><a href="<?php echo base_url('book_non_assigned')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Books Non Assigned List</a></li>
                                        <li><a href="<?php echo base_url('branch_wise_books_report');?>"><i class="fa fa-book"></i> Branch wise books transfer</a></li>
                                        <li><a href="<?php echo base_url('books_sales_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Book Sales Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#uniform_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Inventory Uniforms  Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="uniform_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('inventory_day_sheet/'.raos_encode(UNIFORMS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniforms Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('inventory_daywise_collection/'.raos_encode(UNIFORMS_PAYMENT))?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>branch wise uniform Fee collection</a></li>
                                        <li><a href="<?php echo base_url('uniform_sales_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Uniform Sales Report</a></li>
                                        <li><a href="<?php echo base_url('branch_wise_uniforms_report');?>"><i class="fas fa-tshirt"></i> Branch wise Uniform</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#finance_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Finance Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="finance_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('finance_expense_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Expenses Report</a></li>
                                        <li><a href="<?php echo base_url('expenses_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Monthly Expenses Report</a></li>
                                        <li><a href="<?php echo base_url('free_transaction_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Free Transaction  Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('tc_amount_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>TC Amount Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('finance_income_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Income Summary</a></li>
                                        <li><a href="<?php echo base_url('caution_deposit_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Caution Deposit Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#remaining_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid users"></i><span>Other Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="remaining_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('dropout_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Dropout Report</a></li>
                                        <li><a href="<?php echo base_url('student_transport_fee_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Transport Report</a></li>
                                        <li><a href="<?php echo base_url('inactive_student')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Inactive Reports</a></li>
                                        <li><a href="<?php echo base_url('admission_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admissions Report</a></li>
                                        <li><a href="<?php echo base_url('admission_graphs')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Admissions Graph Report</a></li>
                                        <li><a href="<?php echo base_url('phone_follow_up')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Phone Follow Up</a></li>
                                        <li><a href="<?php echo base_url('route_wise_student_view');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Routes Wise Students</a></li>
                                        <li><a href="<?php echo base_url('parent_visit_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Parent Visit Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </li>
                <?php }?>

                <?php
                if (!empty($session->get('role')) && in_array("Principal", $session->get('role'))) {?>
                <li>
                    <a href="#principle_rating" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Principle Rating On Parent</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="principle_rating" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="<?php echo base_url('principle_rating_parent');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Rating</a></li>
                        <li><a href="<?php echo base_url('principle_rating_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Report</a></li>
                    </ul>
                </li>
                <li>

                    <?php }?>
                <?php
                if (!empty($session->get('role')) && in_array("audit_manager", $session->get('role'))) {?>
                    <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file" aria-hidden="true"></i><span>Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        
                            <ul>
                                <li>
                                    <a href="#fee_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>Fee Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="fee_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('day_sheet_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('get_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>All Branches Daysheet</a></li>
                                        <li><a href="<?php echo base_url('other_fee_collection')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Other Fee Collection Report</a></li>
                                        <li><a href="<?php echo base_url('otp_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>OTP REPORT</a></li>
                                        <li><a href="<?php echo base_url('dropout_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Dropout Report</a></li>
                                        <li><a href="<?php echo base_url('get_term_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Term Due Report</a></li>
                                        <li><a href="<?php echo base_url('fee_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> Fee Due Report</a></li>
                                        <li><a href="<?php echo base_url('due_collection_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i> old Due Collection</a></li>
                                        <li><a href="<?php echo base_url('profit_loss')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Profit Loss Report</a></li>
                                        <li><a href="<?php echo base_url('transport_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Transport Dues report</a></li>
                                        <li><a href="<?php echo base_url('student_transport_fee_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Student Transport Report</a></li>
                                        <li><a href="<?php echo base_url('hostel_due_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Hostel Due Report</a></li>
                                        <li><a href="<?php echo base_url('all_fee_payments_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>All Fee Payments</a></li>
                                        <li><a href="<?php echo base_url('branch_daywise')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Branch Wise Fee Collection Report</a></li>
                                        <li><a href="<?php echo base_url('terms_fee_collection')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Term Wise Fee collection Report</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <a href="#finance_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>Finance Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="finance_report" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="<?php echo base_url('finance_expense_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Expenses Report</a></li>
                                        <li><a href="<?php echo base_url('expenses_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Monthly Expenses Report</a></li>
                                        <li><a href="<?php echo base_url('free_transaction_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Free Transaction  Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('tc_amount_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>TC Amount Day Sheet</a></li>
                                        <li><a href="<?php echo base_url('finance_income_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Income Summary</a></li>
                                        <li><a href="<?php echo base_url('caution_deposit_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Caution Deposit Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#other_report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-shirt"></i><span>other Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="other_report" class="iq-submenu iq-submenu-data collapse">
                                       <li><a href="<?php echo base_url('incentives_report')?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Incentives  Report</a></li>
                                        <li><a href="<?php echo base_url('ledgers_report');?>"><i class="ri-arrow-right-s-line iq-arrow-left"></i>Ledger Report</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                           
                        </ul>
                    </li>
                <?php }?>
        </nav>
        <div class="p-3"></div>
    </div>
</div>

<!-- side Nav Bar -->
<script>
    $(document).ready(function(){
        $('#search-input').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#iq-sidebar-toggle li').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>