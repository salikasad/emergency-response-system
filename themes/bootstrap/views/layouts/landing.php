<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/font-awesome-4.2.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.js">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/home.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
                <body>
                   
                    <div class="main">
                        <br>
                        <button class="btn btn-primary pull-right">Login</button>
                         <div class="container">
						 
                        <?php $this->widget('HeaderWidget')?>
                        
                        
                            
                            <hr>
                             <div class="jumbotron" style="background-image:url('emergency1.jpg');">
    <h1>Emergency Response System</h1>      
    <p>Come help the locals and the deserving ones</p>      
    <a href="chooseform.php" class="btn btn-info btn-lg">="<?php echo Yii::app()->request->baseUrl;?>/Register Now</a>
  </div><!--jumbotron ending here-->
<div class="content">
    <div class="row">
        <h3>Gallery</h3>
                                     <div class="col-md-3 gallery">
                                     <a href="#" class="thumbnail">
                                         <img src="<?php echo Yii::app()->request->baseUrl;?>/img/gallery3.jpg" class="img-responsive col-md-offset-2">
                                     </a>
                                     </div>
                                       <div class="col-md-3 gallery">
                                     <a href="#" class="thumbnail">
                                         <img src="<?php echo Yii::app()->request->baseUrl;?>/img/gallery3.jpg" class="img-responsive">
                                     </a>
                                     </div>
                                       <div class="col-md-3 gallery">
                                     <a href="#" class="thumbnail">
                                         <img src="<?php echo Yii::app()->request->baseUrl;?>/img/gallery3.jpg" class="img-responsive">
                                     </a>
                                     </div>
                                       <div class="col-md-3 gallery">
                                     <a href="#" class="thumbnail">
                                         <img src="<?php echo Yii::app()->request->baseUrl;?>/img/gallery3.jpg" class="img-responsive">
                                     </a>
                                     </div>
        <a href="<?php echo Yii::app()->request->baseUrl;?>/gallery.php"> <p class="view">View all</p></a>
                                                   
                                    </div><!--row ending here-->

<div class="row">
        <h3>Events</h3>
                                     <div class="col-md-3">
                                     <div class="thumbnail">
                                               <img src="<?php echo Yii::app()->request->baseUrl;?>/img/eventa1.jpg">
                                            <div class="caption">
                                                <a href="<?php echo Yii::app()->request->baseUrl;?>/join.php"> <button class="btn btn-primary center-block">Join</button></a>
                                              </div>
                                                </div>
                                     </div>
                                       <div class="col-md-3">
                                    <div class="thumbnail">
                                               <img src="<?php echo Yii::app()->request->baseUrl;?>/img/eventa1.jpg">
                                            <div class="caption">
                                          <a href="<?php echo Yii::app()->request->baseUrl;?>/join.php"> <button class="btn btn-primary center-block">Join</button></a>
                                              </div>
                                                </div>
                                     </div>
                                       <div class="col-md-3">
                                     <div class="thumbnail">
                                               <img src="<?php echo Yii::app()->request->baseUrl;?>/img/eventa1.jpg">
                                            <div class="caption">
                                          <a href="<?php echo Yii::app()->request->baseUrl;?>/join.php"> <button class="btn btn-primary center-block">Join</button></a>
                                              </div>
                                                </div>
                                     </div>
                                       <div class="col-md-3">
                                    <div class="thumbnail">
                                               <img src="<?php echo Yii::app()->request->baseUrl;?>/img/eventa1.jpg">
                                            <div class="caption">
                                          <a href="<?php echo Yii::app()->request->baseUrl;?>/join.php"> <button class="btn btn-primary center-block">Join</button></a>
                                              </div>
                                                </div>
                                     </div>
        <a href="<?php echo Yii::app()->request->baseUrl;?>/events.php"> <p class="view">View all</p></a>
                                                   
                                    </div><!--row ending here-->
                                    <div class="row">
                                   <h3>NGO's</h3>
                                     <div class="col-md-3">
                                    <div class="thumbnail">
                                               <img src="<?php echo Yii::app()->request->baseUrl;?>/img/building2.jpg">
                                            <div class="caption">
                                          <h3>Al-noor welfare</h3>
                                          <a href="<?php echo Yii::app()->request->baseUrl;?>/ngo-profile.php"> <button class="btn btn-primary center-block">View Profile</button></a>
                                              </div>
                                                </div>
                                     </div>
                                       <div class="col-md-3">
                                   <div class="thumbnail">
                                               <img src="<?php echo Yii::app()->request->baseUrl;?>/img/building2.jpg">
                                            <div class="caption">
                                          <h3>Al-noor welfare</h3>
                                          <a href="<?php echo Yii::app()->request->baseUrl;?>/ngo-profile.php"> <button class="btn btn-primary center-block">View Profile</button></a>
                                              </div>
                                                </div>
                                     </div>
                                       <div class="col-md-3">
                                   <div class="thumbnail">
                                               <img src="<?php echo Yii::app()->request->baseUrl;?>/img/building2.jpg">
                                            <div class="caption">
                                          <h3>Al-noor welfare</h3>
                                          <a href="<?php echo Yii::app()->request->baseUrl;?>/ngo-profile.php"> <button class="btn btn-primary center-block">View Profile</button></a>
                                              </div>
                                                </div>
                                     </div>
                                       <div class="col-md-3">
                                    <div class="thumbnail">
                                               <img src="<?php echo Yii::app()->request->baseUrl;?>/img/building2.jpg">
                                            <div class="caption">
                                          <h3>Al-noor welfare</h3>
                                          <a href="<?php echo Yii::app()->request->baseUrl;?>/ngo-profile.php"> <button class="btn btn-primary center-block">View Profile</button></a>
                                              </div>
                                                </div>
                                     </div>
                                   <a href="<?php echo Yii::app()->request->baseUrl;?>/ngo.php"> <p class="view">View all</p></a>
                                                   
                                    </div><!--row ending here-->
                                      <h3 >Meet our top members</h3>
                                    <div class="row col-md-offset-2">
                                        <div class="col-md-3 col-md-offset-0">
                                            <a href="<?php echo Yii::app()->request->baseUrl;?>/user-profile.php"> <img src="<?php echo Yii::app()->request->baseUrl;?>/img/member1.jpg" class="img-responsive img-circle"></a>
                                            </div>
                                          <div class="col-md-3">
                                             <a href="<?php echo Yii::app()->request->baseUrl;?>/user-profile.php"><img src="<?php echo Yii::app()->request->baseUrl;?>/img/member2.jpg" class="img-responsive img-circle"></a>
                                            </div>
                                          <div class="col-md-3">
                                            <a href="<?php echo Yii::app()->request->baseUrl;?>/user-profile.php"><img src="<?php echo Yii::app()->request->baseUrl;?>/img/member3.jpg" class="img-responsive img-circle"></a>
                                            </div>
                                        
                                    </div><!--row ending here--><br>
    <div class="foot">
                                   <div class="row">
                                          <div class="col-md-4">
                                           
                                            <br>
                                            <div class="volunteer-inner">
                                               <div class="form"> 
                                                   <a href="<?php echo Yii::app()->request->baseUrl;?>/volunteer-reg.php">  <img src="<?php echo Yii::app()->request->baseUrl;?>/img/volunteer.jpg" class="img-responsive"></a>
                                               </div><!--volunteer-from ending-->
                                            </div><!--volunteer-inner-->
                                        </div><!--1st lg closing-->
                                        <div class="col-md-4">
                                            <br>
                                        <div class="story-inner">
                                            <div class="story">
                                                <a href="<?php echo Yii::app()->request->baseUrl;?>/stories.php"><img src="<?php echo Yii::app()->request->baseUrl;?>/img/story.jpg" class="img-responsive"></a>
                                            </div>
                                            
                                        </div><!--story-inner closing-->
                                        </div><!--2nd lg closing-->
                                     
                                        <div class="col-md-4">
                                            <br>
                                            <div class="videos-inner">
                                               <video  width="400" controls>
                                                   <source src="video.mp4" type="video/mp4">
                                        <source src="video.ogg" type="video/ogg">
                                           </video>
                                                <div>
                                                    <a href="videos.php"><p class="view">View all</p></a>
                                                </div>
                                               </div> <!--video-inner closing-->
                                        </div><!--3rd lg closing-->
                                    </div><!--row ending here-->
                                </div><!--footer ending here-->
    
    
</div><!--content ending here-->
                                <div class="footer">
                                   <?php $this->widget('FooterWidget');?>
                               </div><!--footer ending here-->
                            
                           </div><!--container ending here-->
                    </div><!--main-->
                </body>
                </html>
                    
                                 
                                     
                                  
    
                                 
                                  

                                
                                    
                               
                    
             
                    
                 

                          
                        
                          
                          
                           
                                
                      
                        
                        
                        
                    
                              
   
                            
                        
 
                
                                
                                
                            
                

