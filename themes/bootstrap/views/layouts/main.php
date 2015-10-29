<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo Yii::app()->baseUrl; ?>/img/favicon.ico">

        <title>Chooza</title>

        <!-- Bootstrap core CSS -->


        <!-- Custom styles for this template -->
        <?php
        $baseUrl = Yii::app()->baseUrl;
        $cs = Yii::app()->getClientScript();
        $cs->registerCssFile($baseUrl . '/css/style.css');
        ?>

        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div id="loading-container" class="loading-container"></div>
        <div id="content-container" class="content-container"></div> 
       <?php $this->widget('MenuWidget'); ?>

        <div class="row" id="chooza-page">
            <!-- Example row of columns -->
            <div class="container" >

                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div id="main-content-inner">
                        <?php
                        $flashMessages = Yii::app()->user->getFlashes();
                        if ($flashMessages) :
                            ?>
    <?php foreach ($flashMessages as $key => $message) : ?>
                                <div class="alert alert-dismissable alert-<?php echo $key; ?>">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong><?php echo $message; ?></strong>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>

<?php $this->widget('FooterWidget'); ?>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <?php
        $cs = Yii::app()->clientScript;
        $themePath = Yii::app()->theme->baseUrl;

        /**
         * StyleSHeets
         */
        $cs
                ->registerCssFile($themePath . '/assets/css/bootstrap.css')
                ->registerCssFile($themePath . '/assets/css/bootstrap-theme.css');

        /**
         * JavaScripts
         */
        $cs
                ->registerCoreScript('jquery', CClientScript::POS_END)
                ->registerCoreScript('jquery.ui', CClientScript::POS_END)
                ->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END)
                ->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();
        $('[data-toggle=\"popover\"]').tooltip()"
                        , CClientScript::POS_READY);
        ?>
         <?php
        $cs = Yii::app()->clientScript;
        $themePath = Yii::app()->request->baseUrl;

        /**
         * JavaScripts
         */
        $cs
                ->registerScriptFile($themePath . '/js/main.js', CClientScript::POS_END);
        ?>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>

    </body>
</html>
