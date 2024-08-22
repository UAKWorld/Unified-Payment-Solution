<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
d */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------time
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

// custom
//SYSTEM CODES & MSG
define('SYSTEM_ERROR_CODE', 500);
define('SYSTEM_ERROR_MSG', 'Error! System Encountered an Error, Please try again');

define('EMAIL_NOT_FOUND', 'ENF');
define('EMAIL_NOT_FOUND_MSG', 'Email does not exists');

define('PASSWORD_INCORRECT', 'PASIC');
define('PASSWORD_INCORRECT_MSG', 'Password is not correct');

//generic status
define('ACTIVE', 'Active');
define('PENDING', 'Pending');
define('INACTIVE', 'Inactive');
define('YES', 'Yes');
define('NO', 'No');
define('ALL', 'All');

// OTP status
define('OTP_APPROVED', 'Approved');
define('OTP_PENDING', 'Pending');
define('OTP_REJECTED', 'Rejected');

//system codes
define('SYSTEM_ID', '-1');
define('SYSTEM_STATUS_CODE_SUCCESS', 200);
define('SYSTEM_STATUS_MESSAGE_SUCCESS', 'Process Completed Successfully');
define('SYSTEM_STATUS_CODE_FAILURE', 500);
define('SYSTEM_STATUS_MESSAGE_FAILURE', 'Unable to process the request, Please try again.');

// Term Category
define('FEE_TERM_CATEGORY_FEE', 'Fee');
define('FEE_TERM_CATEGORY_HOSTEL', 'Hostel');
define('FEE_TERM_CATEGORY_TRANSPORT', 'Transport');

// class menu items
define('CLASS_MENU_CLASS_SUBJECTS', 'class_subjects');
define('CLASS_MENU_SUBJECTS', 'subject');
define('CLASS_MENU_SUBJECT_TYPE', 'subject_type');
define('CLASS_MENU_CLASS_TYPE', 'class_type');
define('CLASS_MENU_CLASSES', 'classes');
define('CLASS_MENU_SECTION', 'section');

// payment options
define('PAYMENT_OPTIONS_CASH', 'cash');
define('PAYMENT_OPTIONS_CHEQUE', 'cheque');
define('PAYMENT_OPTIONS_PARENT_DEPOSIT', 'parent_deposit');
define('PAYMENT_OPTIONS_SWIPE', 'swipe');
define('PAYMENT_OPTIONS_BANK', 'bank');
define('PAYMENT_PHONE_PAY', 'PhonePe');

// payment types
define('PAYMENT_TYPE_FEE', 'fee');
define('PAYMENT_TYPE_HOSTEL', 'hostel');
define('PAYMENT_TYPE_TRANSPOSRT', 'transport');
define('PAYMENT_TYPE_OTHER', 'other');
define('PAYMENT_TYPE_BOOKS', 'books');
define('PAYMENT_TYPE_UNIFORM', 'uniform');
define('PAYMENT_TYPE_RA', 'ra');

// 0ther payment categories
define('OTHER_PAYMENT_TYPE_REGISTRATION', 'registration');
define('OTHER_PAYMENT_TYPE_APPLICATION', 'application');
define('OTHER_PAYMENT_TYPE_ANNUAL', 'annual');
define('OTHER_PAYMENT_TYPE_OTHER', 'other');

//Staff Type
define('STAFF_TYPE_TEACHING', 'Teaching');
define('STAFF_TYPE_SYSTEM_KEY_1', '1');
define('STAFF_TYPE_SYSTEM_KEY_0', '0');
define('STAFF_MENU_LIST', 'staff_list');
define('STAFF_MENU_SUBJECT_MAPPING', 'subject_mapping');
define('STAFF_MENU_SET_SALARY', 'set_salary');
define('STAFF_MENU_SET_ATTENDANCE', 'set_staff_attendance');
define('STAFF_MENU_ATTENDANCE', 'staff_attendance');
define('STAFF_ATTENDANCE_TYPE_PRESENT', 'Present');
define('STAFF_ATTENDANCE_TYPE_ABSENT', 'Absent');
define('STAFF_ATTENDANCE_TYPE_LEAVE', 'Leave');
define('STAFF_ATTENDANCE_TYPE_LATE', 'Late');
define('STAFF_ATTENDANCE_TYPE_HALF', 'Half');
define('STAFF_ATTENDANCE_TYPE_PERMISSION', 'Permission');

define('STAFF_ATTENDANCE_TYPE_ABSENT_VALUE', '2');
define('STAFF_ATTENDANCE_TYPE_LEAVE_VALUE', '1');
define('STAFF_ATTENDANCE_TYPE_LATE_VALUE', '.25');
define('STAFF_ATTENDANCE_TYPE_HALF_VALUE', '.5');

// finance
define('FINANCE_MENU_OTHER_INCOME', 'other_income');
define('FINANCE_MENU_EXPENSES', 'expense');
define('FINANCE_MENU_EXPENSE_TYPE', 'expense_type');
define('FINANCE_MENU_FREE_TRANSACTIONS', 'free_transactions');

define('FINANCE_APPROVED', 'Approved');
define('FINANCE_PENDING', 'Pending');
define('FINANCE_REJECTED', 'Rejected');

define('FINANCE_EXPENSE_TYPE_ADVANCE', 'Advance');
define('FINANCE_EXPENSE_TYPE_CASH', 'Cash');
define('FINANCE_EXPENSE_TYPE_SALARY', 'Salary');

// transport
define('TRANSPORT_MENU_FUEL', 'fuel');
define('SERVICE_MENU', 'service');

// payment description list
define('PAYMENT_DESCRIPTION_TYPE_NOT_PAID', 'Not Paid');
define('PAYMENT_DESCRIPTION_TYPE_PARTIALLY_PAID', 'Partial Paid');
define('PAYMENT_DESCRIPTION_TYPE_FULLY_PAID', 'Full Paid');
//caution
define('CAUTION_DEPOSIT_AMOUNT', 'caution');

// Tables
define('ACCOUNTING_PERIOD_TABLE', 'accounting_period');
define('BRANCH_TABLE', 'branch');
define('CLASS_TYPE_TABLE', 'class_type');
define('CLASSES_TABLE', 'class');
define('FEE_STRUCTURE_TABLE', 'fee_structure');
define('BATCH_FEE_TABLE', 'batch_fee');
define('FEE_TERMS_TABLE', 'fee_terms');
define('HOSTEL_TABLE', 'hostel');
define('ROLL_NUMBERS_TABLE', 'roll_numbers');
define('SECTION_TABLE', 'section');
define('STUDENT_FEE_SETTINGS_TABLE', 'student_fee_settings');
define('STUDENTS_TABLE', 'students');
define('CLASS_SUBJECT_MAPPING_TABLE', 'class_subject_mapping');
define('SUBJECT_TABLE', 'subject');
define('TARGET_AMOUNT_TABLE', 'target_amount');
define('USERS_TABLE', 'users');
define('HOSTEL_STUDENTS_MAPPING_TABLE', 'hostel_students_mapping');
define('ROUTES_TABLE', 'routes');
define('ROUTE_POINTS_TABLE', 'route_points');
define('ROUTE_POINT_STUDENTS_MAPPING_TABLE', 'route_point_students_mapping');
define('VEHICLE_TABLE', 'vehicles');
define('DRIVER_TABLE', 'drivers');
define('FUEL_TABLE', 'fuel');
define('BOOKS_PUBLICATIONS', 'books_publications');
define('BOOKS_DETAILS', 'books_details');
define('BOOKS_STOCK_SNAPSHOT', 'books_stock_snapshot');
define('BRANCH_BOOKS_INVENTORY', 'branch_books_inventory');
define('STUDENTS_BOOKS_MAPPING', 'students_books_mapping');
define('FEE_PAYMENT_DETAILS_TABLE', 'fee_payment_details');
define('BANK_DETAILS_TABLE', 'bank_details');
define('BOOKS_PAYMENT_DETAILS_TABLE', 'books_payment_details');
define('UNIFORM_DETAILS_TABLE', 'uniform_details');
define('UNIFORMS_STOCK_SNAPSHOT_TABLE', 'uniforms_stock_snapshot');
define('UNIFORMS_CUSTOM_SIZES_TABLE', 'uniforms_custom_sizes');
define('BRANCH_UNIFORMS_INVENTORY_TABLE', 'branch_uniforms_inventory');
define('OT_PAYMENT_REQUESTS_TABLE', 'ot_payment_requests');
define('STUDENTS_UNIFORMS_MAPPING_TABLE', 'students_uniforms_mapping');
define('BOOKS_PAYMENT', 'payment_for_books');
define('UNIFORMS_PAYMENT', 'payment_for_uniforms');
define('FINAL_PAYMENT_DETAILS_TABLE', 'final_payment_details');
define('RECEIPT_COUNT_TABLE', 'receipt_count');
define('PAYMENT_RECEIPTS_TABLE', 'payment_receipts');
define('FEE_PAYMENT', 'payment_for_students_fee');
define('FEE_PAYMENT_RECEIPT', 'Fee Payment Receipt');
define('UNIFORM_PAYMENT_RECEIPT', 'Uniform Payment Receipt');
define('BOOK_PAYMENT_RECEIPT', 'Books Payment Receipt');
define('SCHOOL_TABLE', 'school');
define('STAFF_TABLE', 'staff');
define('STAFF_TYPE_TABLE', 'staff_type');
define('SUBJECT_TYPE_TABLE', 'subject_type');
define('STAFF_SUBJECTS_TABLE', 'staff_subjects');
define('STAFF_ATTENDANCE_TABLE', 'staff_attendance');
define('INCOME_REQUEST_TABLE', 'income_request');
define('EXPENSE_TABLE', 'expenses');
define('EXPENSE_TYPE_TABLE', 'expense_type');
define('PAY_ROLL_TABLE', 'staff_payroll');
define('FREE_TRANSACTIONS_TABLE', 'free_transactions');
define('STAFF_ATTENDANCE_MODIFY_TABLE', 'staff_attendance_modify');
define('STAFF_PAYMENT_DETAILS_TABLE', 'staff_payment_details');
define('CAUTION_DEPOSIT_TABLE', 'caution_deposit');
define('CAUTION_DEPOSIT', 'Deposit');
define('CAUTION_WITHDRAW', 'Withdraw');
define('LOAN_TABLE', 'loan');
define('HOLIDAY_TABLE', 'holidays');
define('CHEQUE_BOUNCE_DETAILS_TABLE', 'cheque_bounce_details');
define('FREE_TRANSACTION_MAPPING_TABLE', 'free_transaction_mapping');
define('ROLES_TABLE', 'roles');
define('MODULES_TABLE', 'modules');
define('ROLE_MODULE_TABLE', 'role_module');
define('URI_ACTION_TABLE', 'uri_action');
define('ACTION_MODULE_TABLE', 'action_module');
define('USER_ROLES_TABLE', 'user_roles');
define('BRANCH_RENT_TABLE', 'branch_rent');
define('BRANCH_RENT_PAYMENT_TABLE', 'branch_rent_payment');
define('FEE_PAYMENT_RECEIPT_BY_DATE', 'receipt_by_date');
define('FEE_PAYMENT_RECEIPT_BY_SEARCH', 'receipt_by_search');
define('ROLE_TABLE', 'roles');
define('USER_ROLE_TABLE', 'user_roles');
define('USER_BRANCHES', 'user_branches');
define('CLASS_CATEGORY', 'class_category');
define('STAFF_DOCUMENT', 'staff_document');
define('STUDENT_ATTENDANCE_TABLE', 'student_attendance');
define('ENQUIRY_TABLE', 'enquiry');
define('FEE_APPROVEL', 'fee_payment_details_approvels');
define('INCENTIVE_TABLE', 'incentive_table');
define('BRANCH_DISCOUNT_TABLE', 'branch_discount');
define('RETURN_BOOK_TABLE', 'return_books');
define('CANCEL_RECEIPTS_REQUESTS_TABLE', 'cancel_receipts_requests_table');
define('FINAL_PAYMENT_APPROVAL', 'final_payment_approval');
define('BOOK_RECEIPT_CANCEL', 'book_receipt_cancelation');
define('RETURN_UNIFORM_TABLE', 'return_uniform');
define('INCENTIVES_AMOUNT_TABLE', 'incentives_amount');
define('STUDENT_STAFF_INCENTIVES_TABLE', 'student_staff_incentives_mapping');
define('INCENTIVE_PAYMENT_TABLE', 'incentive_payments');
define('CONCESSION_REQUEST_TABLE', 'concession_request');
define('CONCESSION_APPROVED', 'Approved');
define('CONCESSION_PENDING', 'Pending');
define('CONCESSION_REJECTED', 'Rejected');
define('VEHICLE_SERVICE_TABLE', 'vehicle_service');
define('VEHICLE_SERVICE_TYPE_TABLE', 'vehicle_service_type');
define('COMMENTS_TABLE', 'comment');
define('LEAVE_TABLE', 'leaves');
define('QUESTIONS_TABLE', 'questions');
define('QUESTIONS_OPTIONS_MAPPING_TABLE', 'question_options_mapping');
define('CHAPTERS_TABLE', 'chapters');
define('CLASS_MENU_SUBJECT_CHAPTERS', 'chapters');
define('TEACHER', 'Teacher');
define('USER_STAFF_MAPPING_TABLE', 'staff_user_mapping');
define('ADMISSION_NUMBER_COUNT', 'admission_number_count');
define('UNIFORM_TYPE_TABLE', 'uniform_type');
define('UNIFORM_MATERIAL_TABLE', 'uniform_material');
////////////////////////
define('STUDENT_GROUP_TABLE', 'student_groups');
define('STUDENT_GROUP_MAPS_TABLE', 'student_groups_mapping');
define('CLASS_MENU_CHAPTER_LESSONS', 'lessons');
define('LESSONS_TABLE', 'lessons');
define('NOTIFICATIONS_TABLE', 'notifications');
define('ROUTE_ATTENDANCE_TABLE', 'route_attendance');

define('COMPLAINTS_TABLE', 'student_complaints');
define('COMPLAINTS_MAPPING_TABLE', 'complaints_mapping');

define('CLASS_STAFF_MAPPING_TABLE', 'class_staff_mapping');
define('ADMISSION_RESULT_TABLE', 'admission_result');
define('QUESTION_CATEGORY_TABLE', 'question_category');
define('PARAGRAPH_IMAGE_AUDIO_TABLE', 'paragraph_image_audio');
define('RFID_ATTENDANCE_LOGS_TABLE', 'rfid_attendance_logs');

//sms table
define('SMS_LOGS_TABLE', 'sms_logs');
//diary table
define('DIARY_TABLE', 'diary');
define('NOTIFICATION_TABLE', 'approval_notifications');
define('PHONE_FOLLOWUP_TABLE', 'phone_followup');
define('FREE_TRANSACTION_APPROVEL_TABLE', 'free_transaction_approvels');

define('ADMISSION_QUESTION_TABLE', 'admission_question');
define('ADMISSION_QUESTION_OPTIONS_MAPPING_TABLE', 'admission_question_mapping');
define('STUDENT_LOGS_TABLE', 'students_logs');
// sms gateway
define('SMS_USERNAME', 'raosgroup');
define('SMS_PASSWORD', 'Raos123@');
define('SMS_SENDER_ID', 'RAOSGP');
define('SMS_TYPE_NORMAL', 1);
define('SMS_URL', 'https://www.smsstriker.com/API/sms.php?');

// sms template
define('SMS_FEE_COLLECTION', 'sms.fee_collection');
define('SMS_STUDENT_ABSENT', 'sms.student_absent');
define('SMS_STUDENT_ADMISSION', 'sms.student_admission');
define('SMS_STUDENT_MARKS', 'sms.marks');
define('SMS_STUDENT_CREDENTIAL', 'sms.student_credentials');
// sms template id
define('SMS_FEE_COLLECTION_ID', 'fee_collection_id');
define('ABSENT_ID', 'absent_id');
define('ADMISSION_ID', 'admission_id');
define('SMS_STUDENT_MARKS_ID', 'marks_id');
define('CREDENTIAL_ID', 'credential_id');

define('TEST_TABLE', 'test');
define('OFFLINE_EXAM_MARKS_TABLE', 'offline_exam_marks');
define('PARAGRAPH_TABLE', 'paragraph_images');
define('SYLLABUS_TABLE', 'syllabus');
define('PARENT_RATING_QUESTION', 'parent_rating_questions');
define('PARENT_RATING', 'parent_rating');
define('PARENT_RATING_MAPPING', ' parent_rating_mapping');
// notification status table
define('NOTIFICATION_STATUS_TABLE', 'notification_status_table');
//timetable
define('TIME_TABLE', 'timetable');
define('ACTIVITY_TABLE', 'activities');
define('SALARY_PAYMENTS', 'salary_payments');
//dropoutcomplaints
define('DROPOUT_COMPLAINTS', 'dropout_complaints_on');
define('DROPOUT_COMPLAINTS_MAPPING', 'student_dropout_complaint_mapping');
define('STATUS_LEFT_GRAPH_MAPPING', 'student_tc_left_graph_table');

// observation category
define('OBSERVATION_CATEGORY', 'observation_category');
define('OBSERVATION_QUESTION', 'observation_question');
define('OBSERVATION_OPTIONS', 'observation_options');
define('CAMERA_OBSERVATIONS', 'observations');
define('OBSERVATION_REPORT_TABLE', 'observation_reports');
define('OBSERVATION_REMARKS_TABLE', 'observation_remarks');


// syllabus types
define('SYL_LESSONS', '1');
define('SYL_ACTIVITY', '2');


// activity types
define('GENERAL_ACTIVITY', '1');
define('RECORDING_ACTIVITY', '2');
define('WRITING_ACTIVITY', '3');


// branch timings
define('BRANCH_TIMINGS_TABLE', 'branch_timings');
define('BRANCH_WEEKLY_TIMINGS_TABLE', 'branch_weekly_timings');


// Timings Type
define('FULL_DAY', '0');
define('HALF_DAY', '1');

// Biometric Related constants
define('BIOMETRIC_STAFF_ATTENDANCE_TABLE', 'biometric_staff_attendance');
define('LATE_ATTENDANCE_ENTRIES_TABLE', 'late_attendance_entries');
define('BIOMETRIC_ATTENDANCE_LOGS_TABLE', 'biometric_attendance_logs');

// ticketing system
define('PARENT_TICKETING_TABLE', 'parent_ticketing');

define('DEFAULT_ACCOUNTING_PERIOD', '9');

// observation report slugs
define('CAMERA_OBSERVATION', 'camera_observation');
define('PRINCIPAL_DAY_REPORT', 'principal_day_report');
define('TEACHER_DIARY_REPORT', 'teacher_diary_report');
define('PRINCIPAL_ADMIN_RATING', 'principal_admin_rating');
define('CLASS_TEACHER_RATING', 'class_teacher_rating');
define('CORRECTION_REPORT', 'correction_report');

//vehicle fuel approval table
define('VEHICLE_SERVICE_APPROVE_TABLE', 'vehicle_service_approve');
define('BANK_EXPENDITURE_TABLE', 'bank_expenditures');
define('LOAN_PAYMENT_TABLE', 'loan_payment_table');


// CLASS PERIODS
define('CLASS_PERIODS_TABLE', 'class_periods');
define('CLASS_PERIODS_MAPPING_TABLE', 'class_periods_mapping');

define('TRANSPORT_FEE_CONCESSION_REQUESTS_TABLE', 'transport_fee_concession_requests');
// concession status
define('TRANSPORT_CONCESSION_APPROVED', 'Approved');
define('TRANSPORT_CONCESSION_PENDING', 'Pending');
define('TRANSPORT_CONCESSION_REJECTED', 'Rejected');
//vendors
define('VENDORS_TABLE', 'vendors');
//vendors
define('LEDGERS_TABLE', 'ledgers');

//holiday type
define('HOLIDAY_TYPE_STAFF', 'staff');
define('HOLIDAY_TYPE_STUDENT', 'student');
//vendor uniform per cost
define('VENDOR_UNIFORM_PER_COST_TABLE', 'vendor_uniform_per_cost');
//vendor uniform per cost
define('STAFF_ATTENDANCE_AUDIT_TABLE', 'staff_attendance_audit');

define('LMS_TEACHER', 'LMS Teacher');

define('PARENT_INCENTIVE_PAYMENT_TABLE', 'parent_incentive_payments');
define('BOOK_SETS_TABLE', 'book_sets');
define('BOOK_SET_MAPPING_TABLE', 'book_set_mapping_table');
define('CLASS_PERIOD_SUBJECT_MAPPING_TABLE', 'class_period_subject_mapping');
define('INACTIVE_STUDENT_TC_TABLE', 'inactive_student_tc');
define('SETS_STOCK_TABLE', 'sets_stock_snapshot');
define('BRANCH_BOOK_SET_INVENTORY_TABLE', 'branch_book_sets_inventory');
define('STUDENT_BOOK_SET_MAPPING_TABLE', 'student_book_set_mapping');
define('STUDENT_TC_AMOUNT_TABLE', 'student_tc_amount');
define('STUDENT_UNIFORM_SIZES_TABLE', 'student_uniform_sizes');
define('BOOK_NOT_ISSUED_STUDENTS_TABLE', 'book_not_issued_students');
define('DIVISONS_TABLE', 'divisons');
define('DIVISON_ROLE_MAPPING_TABLE', 'division_role_mapping');
define('DIVISON_BOOK_DETAILS_TABLE', 'division_book_details');
define('UNIFORM_DIVISONS_TABLE', 'uniform_divisons');
define('UNIFORM_DIVISON_ROLE_MAPPING_TABLE', 'uniform_division_role_mapping');
define('DIVISON_UNIFORM_DETAILS_TABLE', 'division_uniform_details');
define('UNIFORM_CATEGORY_TABLE', 'uniform_category');
define('UNIFORM_PUBLICATIONS_TABLE', 'uniform_publications');
define('SYLLABUS_TIME_TABLE', 'syllabus_timetable');
define('PERIOD_ASSIGN_TO_STAFF_TABLE', 'period_assign_to_staff');
define('STAFF_COMPLETED_TOPICS_TABLE', 'staff_completed_topics');
define('BOOK_CORRECTION_TABLE', 'teacher_day_rating_books_correction');
