<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <div class="sidebar">
    <img src="<?=base_url('support/img/AdminLTELogo.png')?>" class="img-fluid">

    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item has-treeview menu-open <?php if($page_name == 'Teacher' || $page_name == 'Adviser'): echo 'menu-open'; endif; ?>">

                <a href="#" class="nav-link <?php if($page_name == 'Teacher' || $page_name == 'Adviser'): echo 'active'; endif; ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Teachers
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="<?=base_url('teacher')?>" class="nav-link <?php if($page_name == 'Teacher'): echo 'active'; endif; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Teacher</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?=base_url('adviser')?>" class="nav-link <?php if($page_name == 'Adviser'): echo 'active'; endif; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advisers</p>
                        </a>
                    </li>

                </ul>

            </li>
                
            <li class="nav-item has-treeview menu-open <?php if($page_name == 'Section' || $page_name == 'Classroom' || $page_name == 'Schedule'): echo 'menu-open'; endif; ?>" >

                <a href="#" class="nav-link <?php if($page_name == 'Section' || $page_name == 'Classroom' || $page_name == 'Schedule'): echo 'active'; endif; ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Section
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="<?=base_url('section')?>" class="nav-link <?php if($page_name == 'Section'): echo 'active'; endif; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Sections</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?=base_url('classroom')?>" class="nav-link <?php if($page_name == 'Classroom'): echo 'active'; endif; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Classroom</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?=base_url('student_section')?>" class="nav-link <?php if($page_name == 'Student Section'): echo 'active'; endif; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Student Section</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?=base_url('subject_teacher')?>" class="nav-link <?php if($page_name == 'Subject Teachers'): echo 'active'; endif; ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Subject Teachers</p>
                        </a>
                    </li>
           
                </ul>
                
            </li>


            <li class="nav-item">

                <a href="<?=base_url('student')?>" class="nav-link <?php if($page_name == 'Student'): echo 'active'; endif; ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Students
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>

            </li>

            <li class="nav-item">

                <a href="<?=base_url('period_setting')?>" class="nav-link <?php if($page_name == 'Period Setting'): echo 'active'; endif; ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Settings
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>

            </li>
            
        </ul>

     </nav>
        
    </div>

  </aside>