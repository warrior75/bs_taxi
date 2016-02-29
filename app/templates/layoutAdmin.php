<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Back Office</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $this->assetUrl('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= $this->assetUrl('bower_components/metisMenu/dist/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?= $this->assetUrl('css/timeline.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= $this->assetUrl('css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?= $this->assetUrl('bower_components/morrisjs/morris.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= $this->assetUrl('bower_components/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    
    <link href="<?= $this->assetUrl('css/style.css') ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <?php if (isset($_SESSION['message'])) : ?>
            <p class="bg-success" ><?php echo $_SESSION['message']; ?></p>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>


        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= $this->url('admin');?>"><i class="fa fa-home"></i> Gestion BS TAXI</a>
                </div>
                <!-- /.navbar-header -->


                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a  href="<?= $this->url('inscription');?>">
                           <i class="fa fa-user"></i> <i class="fa fa-plus-circle fa-fw"></i> 
                       </a>
                       
                   </li>
                   
               </li>
               <!-- /.dropdown -->
               <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   <i class="fa fa-gear"></i> <i class="fa fa-caret-down"></i>
               </a>
               <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="<?= $this->url('passwordForm');?>"><i class="fa fa-lock fa-fw"></i>Changer Mot de passe</a></li>
            </li>
            <li class="divider"></li>
            <li><a href="<?= $this->url('deconnexion'); ?>"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i>Liste des cours</a>
            </li>
            <?php foreach ($organisedThemes  as $themeKey => $key): ?>
                <li>

                    <a href="#"><i class="fa fa-book fa-fw"></i> <?php echo $themeKey;?>  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <?php foreach ($key as $value) :?>
                            <li> 
                                <a href="<?= $this->url('adminCours',['id'=>$value['id']]);?>"> <?php  echo $value['title']; ?> </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            <?php endforeach; ?>



        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Bonjour <?= $_SESSION['user']['firstname'] ;?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <!-- /.row -->
    <div class="col-lg-8">
       <section>
        <?= $this->section('main_content') ?>
    </section>
</div>
<!-- /.col-lg-8 -->
<div class="col-lg-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-bell fa-fw"></i> Contact
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">

        </div>
        <!-- /.panel-body -->
    </div>
    <div class="chat-panel panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-comments fa-fw"></i>
            Chat
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-default btn-xs">
                 <a href="<?= $this->url('admin')?>">
                    <i class="fa fa-refresh fa-fw"></i> Refresh
                </a>
            </button>

        </div>
    </div>

    <!-- /.panel-heading -->
    <div class="panel-body">
        <?php foreach($messages as $message) : ?>
            <ul class="chat">
                <li class="left clearfix">
                    <span class="chat-img pull-left">
                        <img src="http://placehold.it/50/F4A460/fff" alt="User Avatar" class="img-circle" />
                    </span>
                    <div class="chat-body clearfix">
                        <div class="header">
                            <strong class="primary-font"> <?= $message['firstname'];?> </strong>
                            <small class="pull-right text-muted">
                                <i class="fa fa-clock-o fa-fw"></i> <?= $message['created_at']; ?>
                            </small>
                        </div>
                        <p>
                           <?= $message['text_body'] ; ?>
                       </p>
                   </div>
               </li>
           </ul>
       <?php endforeach ; ?>

   </li>                               
</div>
<!-- /.panel .chat-panel -->
<div class="panel-footer">
    <div class="input-group">
        <form action="<?= $this->url('chat'); ?>" method="POST">
            <input id="btn-input" name="text_body" type="text" class="form-control input-sm" placeholder="Votre message . . ." required/>
            <span class="input-group-btn">
                <button class="btn btn-warning btn-sm" id="btn-chat" name="sendMessage">
                    Envoyer
                </button>
            </span>
        </form>
    </div>
</div>

<!-- /.panel-footer -->
</div>
<!-- /.col-lg-4 -->
</div>
<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?= $this->assetUrl('bower_components/jquery/dist/jquery.min.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= $this->assetUrl('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= $this->assetUrl('bower_components/metisMenu/dist/metisMenu.min.js') ?>"></script>




<!-- Custom Theme JavaScript -->
<script src="<?= $this->assetUrl('js/sb-admin-2.js') ?>"></script>

</body>

</html>
