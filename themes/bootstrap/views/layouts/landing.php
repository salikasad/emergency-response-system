<?php
if (!empty($_POST['first-name']) && !empty($_POST['email-address'])) {
    $name = isset($_POST['first-name']);
    $email = isset($_POST['email-address']);
}
?>
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

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">

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



        <!-- Carousel
    ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>-->
            </ol>

            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <div class="main-slider">
                        <div class="container search-slide carousel-caption">
                            <div class="col-lg-12 col-md-12 col-xs-12 center cbp-qtrotator-chooza-sec">
                                <h1>Choose a</h1>
                                <div id="cbp-qtrotator-chooza" class="cbp-qtrotator-chooza">
                                    <div class="cbp-qtcontent">
                                        career 
                                    </div>
                                    <div class="cbp-qtcontent">
                                        field
                                    </div>
                                    <div class="cbp-qtcontent">
                                        future
                                    </div>
                                    <div class="cbp-qtcontent">
                                        university
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo CHtml::beginForm(Yii::app()->createUrl('fieldCareers/index'), 'get');
                            ?>
<!--
                            <select name="want" id="want-dropdown">
                                <option value="0">I want to be</option>
                                <option value="1">What i have done</option>
                            </select>-->
                                 
                            <?php
//                            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
//                                'name' => 'search',
//                                'value' => '',
//                                'id' => 'main-search',
//                                'source'=>'js: function(request, response) {
//                                $.ajax({
//                                    url: "'.$this->createUrl('fieldcareers/autocompletetest').'",
//                                    dataType: "json",
//                                    data: {
//                                        term: request.term,
//                                        wanttoknow: $("#want-text").val()
//                                    },
//                                    success: function (data) {
//                                            response(data);
//                                    }
//                                })
//                             }',
//                               //'source' => $this->createUrl('fieldcareers/autocompletetest'),
//                                'options' => array(
//                                    'showAnim' => 'fold',
//                                     'minLength'=>'2',
//                                ),
//                            ));
                            ?>
<!--                            <input type="hidden" value="" id="want-text">-->

                            <?php
//                            echo CHtml::submitButton('Submit', array(
//                                'id' => 'main-search-btn',
//                                'value' => 'Search',
//                            ));
                            ?>

<?php // echo CHtml::endForm(); ?>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/test" id="quiz-btn">Take a <span>Quiz</span></button></a>
                            <a href="http://chooza.polldaddy.com/s/career-choice-survey-2015" target="_blank" id="quiz-btn">Take a <span>Survey</span></button></a>


                        </div>
                    </div>
                </div>

                <!--		<div class="item">
                          <div class="container">
                            <div class="carousel-caption">
                              <h1>Another example headline.</h1>
                              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                          </div>
                        </div>
                        
                                <div class="item">
                          <div class="container">
                            <div class="carousel-caption">
                              <h1>One more for good measure.</h1>
                              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                          </div>
                        </div>-->
                <!--add slide here-->

            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->


        <div class="row">
            <!-- Example row of columns -->
            <div class="container" id="main-stats">
                <div class="col-lg-12 col-md-12 col-xs-12 center">
                    <div id="main-stats-content">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <h1>400</h1>
                            <p>Total Fields</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <h1>198</h1>
                            <p>Total Universities</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <h1>3</h1>
                            <p>Total Organizations</p>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="col-lg-12 col-md-12 col-xs-12 center">
                    <div id="main-stats-content">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <h1>1990</h1>
                            <p>Total Degrees Offerred</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <h1>1020</h1>
                            <p>Total Careers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="main-quote">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-xs-12 center">
                    <div class="main">
                        <div id="cbp-qtrotator" class="cbp-qtrotator">
                            <div class="cbp-qtcontent">
                                <blockquote>
                                    <p>Everyone is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.</p>
                                    <footer>Albert Einstein</footer>
                                </blockquote>
                            </div>
                            <div class="cbp-qtcontent">
                                <blockquote>
                                    <p>No man can succeed in a line of endeavor which he does not like.</p>
                                    <footer>Napoleon</footer>
                                </blockquote>
                            </div>
                            <div class="cbp-qtcontent">
                                <blockquote>
                                    <p>The best way to predict the future is to create it. </p>
                                    <footer>Abraham Lincoln</footer>
                                </blockquote>
                            </div>
                            <div class="cbp-qtcontent">
                                <blockquote>
                                    <p>If we did all the things we are capable of doing, we would astound ourselves.</p>
                                    <footer>Thomas A. Edison</footer>
                                </blockquote>
                            </div>
                        </div>
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
                ->registerScriptFile($themePath . '/js/jquery.cbpQTRotator.min.js', CClientScript::POS_END)
                ->registerScriptFile($themePath . '/js/main.js', CClientScript::POS_END)
                ->registerScriptFile($themePath . '/js/modernizr.custom.js', CClientScript::POS_END);
        ?>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>
        <script>

            $(function () {
                /*
                 - how to call the plugin:
                 $( selector ).cbpQTRotator( [options] );
                 - options:
                 {
                 // default transition speed (ms)
                 speed : 700,
                 // default transition easing
                 easing : 'ease',
                 // rotator interval (ms)
                 interval : 8000
                 }
                 - destroy:
                 $( selector ).cbpQTRotator( 'destroy' );
                 */

                $('#cbp-qtrotator').cbpQTRotator();
                $('#cbp-qtrotator-chooza').cbpQTRotator();


            });

        </script>
        <script>
            $(function() {
 $('#want-dropdown').change(function() {
        if($('#want-dropdown').val()==1) {
           $('#want-text').val('1'); 
       } else {
          $('#want-text').val('0')
       }
   });
});
            </script>
    </body>
</html>
