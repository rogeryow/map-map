<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <div class="sidebar">
    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>

    <img src="<?=base_url('support/img/AdminLTELogo.png')?>" class="img-fluid">

    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                
            


            <li class="nav-item">

                <?php if ($this->session->has_userdata('adviser_id')):?>
                    <a href="<?=base_url('advisory')?>" class="nav-link <?php if($page_name == 'Advisory'): echo 'active'; endif; ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Advisory
                            <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                <?php endif; ?>

            </li>

            <li class="nav-item">

                <a href="<?=base_url('class_under')?>" class="nav-link <?php if($page_name == 'Class Under'): echo 'active'; endif; ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Handled Classes
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>

            </li>

            <li class="nav-item">
                
                <a href="<?=base_url('section_performance')?>" class="nav-link <?php if($page_name == 'Student Performance'): echo 'active'; endif; ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Students' Performance
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>

            </li>

            <li class="nav-item">
                
                <a href="<?=base_url('grade_computation')?>" class="nav-link <?php if($page_name == 'Grade Computation'): echo 'active'; endif; ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Grade Computation
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>

            </li>
            
        </ul>   

     </nav>
        
    </div>

  </aside>