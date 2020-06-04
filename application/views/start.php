<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=strtoupper(getenv('SITENAME'))." | ";echo (empty($page_name))?"":ucwords($page_name)?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link href="<?=s_url?>plugins/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=s_url?>css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=s_url?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=s_url?>plugins/icheck-bootstrap/icheck-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=s_url?>css/adminlte.min.css" rel="stylesheet" type="text/css" />

        <?php echo $this->loader_model->css_loader($this->uri->segment(1));?>
       
    </head>
    <body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Login Type</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
        <p class="login-box-msg">Account Type</p>
            <a href="<?=base_url("main/developerMode")?>" class="btn btn-primary btn-block">
                Developers <i class="fa fa-desktop"></i>
            </a>
            <a href="<?=base_url("main/adminMode")?>" class="btn btn-danger btn-block">
                Administrator <i class="fa fa-user"></i>
            </a>
            <a href="<?=base_url("main/teacherMode")?>" class="btn btn-success btn-block">
                Teacher <i class="fa fa-users"></i>
            </a>
            <a href="<?=base_url("main/guidanceMode")?>" class="btn btn-warning btn-block">
                Guidance <i class="fa fa-users"></i>
            </a>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

    <footer style="display: none">Copyright &copy <?=date('Y')?> <?=getenv('SITENAME')?> by <a href="#">Nexus</a><?php echo  (ENVIRONMENT === 'development') ?  'Framework Version <strong>' . CI_VERSION .' Build:001 </strong>' : '' ?></footer>
    <script src="<?=s_url?>plugins/jquery/jquery.min.js"></script>

    <?php $this->loader_model->js_pluginLoader($this->uri->segment(1))?>

    <script src="<?=s_url?>plugins/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="<?=s_url?>js/adminlte.min.js" type="text/javascript"></script>

    <?php
        $data['template_type']=$template_type;
        $data['category']=$this->uri->segment(1);
        $this->loader_model->js_loader($data['category'])
    ?>

</html>
