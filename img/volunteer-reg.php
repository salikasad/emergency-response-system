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
<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.js">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/volunteer-reg.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
                <body>
                    <div class="main">
                        <div class="container">
                            <?php include("header.php");?>
                            <div class="row">
                           <hr>
                                <div class="col-md-6 col-md-offset-3">
                                    <form>
                                        <div class="form-group">
    <label for="exampleInputteamname">Team Name</label>
    <input type="name" class="form-control" id="exampleInputName" placeholder="Team name">
  </div>
                                        <div class="form-group">
    <label for="exampleInputngoname">Ngo to serve</label>
    <input type="name" class="form-control" id="exampleInputName" placeholder="Ngo name">
  </div>
                                        <div class="form-group">
    <label for="exampleInputemail">Email</label>
    <input type="email" class="form-control" id="exampleInputName" placeholder="Email">
  </div>
                                         <strong>Address</strong><textarea class="form-control" rows="3"></textarea><br>
                                             <div class="form-group">
                                         <label for="sel1"><strong>No. of members</strong></label>
                                         <select class="form-control" id="sel1">
                                         <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        </select>
                                        </div>
                                         <strong>Past Experience</strong><textarea class="form-control" rows="3"></textarea><br>
                                        <strong>Upload Image</strong><div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
    <img data-src="holder.js/100%x100%" alt="...">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div><br>
                                       <button type="button" class="btn btn-primary" onclick="Sendinfo()">Submit</button>
                                       <script>
                                            function Sendinfo() {
                                                alert("Congratulaions! Your team has been registered, you will be contacted soon.");
                                            }
                                           
                                       </script>
                                    </form>
                                </div>
                            </div><!--row ending here-->
                            <br>
                             <div class="foot">
                                   <div class="row">
                                          <div class="col-md-4">
                                           
                                            <br>
                                            <div class="volunteer-inner">
                                               <div class="form"> 
                                                   <a href="volunteer-reg.php">  <img src="volunteer.jpg" class="img-responsive"></a>
                                               </div><!--volunteer-from ending-->
                                            </div><!--volunteer-inner-->
                                        </div><!--1st lg closing-->
                                        <div class="col-md-4">
                                            <br>
                                        <div class="story-inner">
                                            <div class="story">
                                                <a href="stories.php"><img src="story.jpg" class="img-responsive"></a>
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
                                </div><!--foot ending here-->
                             <div class="footer">
                                   <?php include("footer.php");?>
                               </div><!--footer ending here-->
                        </div><!--container-->
                        
                    </div><!--main-->
                </body>
                </html>
                    
                                 
                                     
                                  
    
                                 
                                  

                                
                                    
                               
                    
             
                    
                 

                          
                        
                          
                          
                           
                                
                      
                        
                        
                        
                    
                              
   
                            
                        
 
                
                                
                                
                            
                

