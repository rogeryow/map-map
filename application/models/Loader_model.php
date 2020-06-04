<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Loader_model extends CI_Model{

    public function css_loader($uri_string)
    {
        echo '<link href="'.s_url.'mycss/datatable.css" rel="stylesheet" type="text/css" />';
        
        echo '<link href="'.s_url.'/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />';
        // echo '<link href="' . s_url . 'libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />';
        
        $dt_tables=array(
        "admin",
        "adviser",
        "developer",
        "school",
        'administrator',
        'teacher',
        'section',
        'classroom',
        'student',
        'adviser',
        'advisory',
        'student_section',
        'subject_teacher',
        'written_work',
        'performance_task',
        'quarterly_assessment',
        'written_work_topic',
        'performance_task_topic',
        'quarterly_assessment_topic',
        'handled_class',
        'class_under',
        'class_section',
        'section_performance',
        'grade_computation',
        'period_setting',
        'guidance',
        'enkai',
        'schedule');

        if (in_array($uri_string,$dt_tables)) 
        {
            echo '<link href="' . s_url . 'plugins/overlayScrollbars/css/OverlayScrollbars.min.css" rel="stylesheet" type="text/css" />';
            echo '<link href="' . s_url . 'plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />';
            // echo '<link href="' . s_url . 'plugins/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />';

            //DATA TABLES SCRIPT
            // echo '<link href="' . s_url . 'plugins/datatables/buttons/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />';
            // echo '<link href="' . s_url . 'plugins/datatables/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />';
            echo '<link href="' . s_url . 'plugins/datatables-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />';
        }
    } 

    public function js_pluginLoader($uri_string)
    {
        // echo '<script src="' . s_url . 'libs/sweetalert2/sweetalert2.min.js" type="text/javascript"></script>';
        $chart = array(
            'section_performance'
        );
        if(in_array($uri_string,$chart)){
            echo '<script src="'.s_url.'plugins/flot/jquery.flot.js"></script>
            
            <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
            <script src="'.s_url.'plugins/flot-old/jquery.flot.resize.min.js"></script>

            <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
            <script src="'.s_url.'plugins/flot-old/jquery.flot.pie.min.js"></script>';
        }
        $dt_tables=array(
        "admin",
        "adviser",
        "developer",
        "school",
        "administrator",
        'teacher',
        'section',
        'classroom',
        'student',
        'adviser',
        'advisory',
        'student_section',
        'subject_teacher',
        'written_work',
        'performance_task',
        'quarterly_assessment',
        'written_work_topic',
        'performance_task_topic',
        'quarterly_assessment_topic',
        'class_under',
        'handled_class',
        'class_section',
        'section_performance',
        'period_setting',
        'grade_computation',
        'enkai',
        'guidance',
        'schedule');
        
        if (in_array($uri_string,$dt_tables)) 
        {
            echo '<script src="' . s_url . 'plugins/moment/moment.min.js" type="text/javascript" defer></script>';
            echo '<script src="' . s_url . 'plugins/daterangepicker/daterangepicker.js" type="text/javascript" defer></script>';
            echo '<script src="' . s_url . 'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js" type="text/javascript" defer></script>';
            echo '<script src="' . s_url . 'plugins/summernote/summernote-bs4.min.js" type="text/javascript" defer></script>';
            echo '<script src="' . s_url . 'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js" type="text/javascript" defer></script>';

            //DATA TABLES SCRIPT
            echo '<script src="' . s_url . 'plugins/datatables/jquery.dataTables.js" type="text/javascript" defer></script>';
            echo '<script src="' . s_url . 'plugins/datatables-bs4/js/dataTables.bootstrap4.js" type="text/javascript" defer></script>';
            // echo '<script src="' . s_url . 'plugins/datatables/buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>';
            // echo '<script src="' . s_url . 'plugins/datatables/buttons/js/buttons.bootstrap4.min.js" type="text/javascript"></script>';
            // echo '<script src="' . s_url . 'plugins/datatables/buttons/js/buttons.colVis.min.js" type="text/javascript"></script>';

            // echo '<script src="' . s_url . 'js/demo.js" type="text/javascript"></script>';


        }

    }
    public function js_loader($uri_string)
    {
        echo '<script src="'.s_url.'/plugins/sweetalert2/sweetalert2.min.js" type="text/javascript"></script>';

        if(uri_string()=="admin/dashboard")
        {
            // echo '<script src="'.s_url.'js/my_js/admin/keygen.js" type="text/javascript"></script>';
        }
        if(uri_string()=='main/developerMode' || 
        uri_string()=='main/adminMode' || 
        uri_string()=='main/teacherMode' ||
        uri_string()=='main/adminRegister' ||
        uri_string()=='main/guidanceMode' ||
        uri_string()=='main/guidanceRegister' ||
        uri_string() == 'main/teacherRegister')
        {
            echo '<script src="'.s_url.'myjs/module/main.js" type="module" defer></script>';
        }
        if(uri_string()=='school')
        {
            echo '<script src="'.s_url.'myjs/module/school/school.js" type="module" defer></script>';
        }
        if(uri_string()=='administrator')
        {
            echo '<script src="'.s_url.'myjs/module/administrator/administrator.js" type="module" defer></script>';
        }
        if(uri_string()=='teacher')
        {
            echo '<script src="'.s_url.'myjs/module/teacher/teacher.js" type="module" defer></script>';
        }
        if(uri_string()=='section')
        {
            echo '<script src="'.s_url.'myjs/module/section/section.js" type="module" defer></script>';
        }
        if(uri_string()=='student_section')
        {
            echo '<script src="'.s_url.'myjs/module/student_section/student_section.js" type="module" defer></script>';
        }
        if(uri_string()=='classroom')
        {
            echo '<script src="'.s_url.'myjs/module/classroom/classroom.js" type="module" defer></script>';
        }
        if(uri_string()=='student')
        {
            echo '<script src="'.s_url.'myjs/module/student/student.js" type="module" defer></script>';
        }
        if(uri_string()=='adviser')
        {
            echo '<script src="'.s_url.'myjs/module/adviser/adviser.js" type="module" defer></script>';
        }
        if(uri_string()=='schedule')
        {
            echo '<script src="'.s_url.'myjs/module/schedule/schedule.js" type="module" defer></script>';
        }
        if(uri_string()=='advisory')
        {
            echo '<script src="'.s_url.'myjs/module/advisory/advisory.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='class_section/index/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/class_section/class_section.js" type="module" defer></script>';
        }
        if(uri_string()=='subject_teacher')
        {
            echo '<script src="'.s_url.'myjs/module/subject_teacher/subject_teacher.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='subject_teacher/load_section_subject/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/load_section/load_section.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='written_work/index/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/written_work/written_work.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='written_work_topic/index/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/written_work_topic/written_work_topic.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='handled_class/index/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/handled_class/handled_class.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='performance_task/index/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/performance_task/performance_task.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='performance_task_topic/index/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/performance_task_topic/performance_task_topic.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='quarterly_assessment/index/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/quarterly_assessment/quarterly_assessment.js" type="module" defer></script>';
        }
        $val = $this->uri->segment(3);
        if(uri_string()=='quarterly_assessment_topic/index/'.$val)
        {
            echo '<script src="'.s_url.'myjs/module/quarterly_assessment_topic/quarterly_assessment_topic.js" type="module" defer></script>';
        }
        if(uri_string()=='class_under')
        {
            echo '<script src="'.s_url.'myjs/module/class_under/class_under.js" type="module" defer></script>';
        }
        if(uri_string() =='section_performance')
        {
            echo '<script src="'.s_url.'myjs/module/section_performance/chart.js" type="module" defer></script>';
        }
        if(uri_string() =='period_setting')
        {
            echo '<script src="'.s_url.'myjs/module/period_setting/period_setting.js" type="module" defer></script>';
        }
        if(uri_string() =='grade_computation')
        {
            echo '<script src="'.s_url.'myjs/module/grade_computation/grade_computation.js" type="module" defer></script>';
        }
        if(uri_string() =='enkai')
        {
            echo '<script src="'.s_url.'myjs/module/enkai/enkai.js" type="module" defer></script>';
        }
    }

    public function loadMdl($models) 
    {
        foreach($models as $mdlk=>$mdlv)
        {
            $this->load->model($mdlk,$mdlv);
        }
    }

    
}
