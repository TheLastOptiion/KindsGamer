
    <section class="cd-hero">
        <ul class="cd-hero-slider">  
            <li class="selected first-slide">
                    <div class="tm-slide-content-div slide-caption">
                        <div style="height:150px">
                       
                        </div>
                        <center> <span>You are hope for Others</span></center>
                        <br>
                        <center><h2>Login</h2></center>
                       
                        
		<div class="container">
            <div class="col-md-11 ">
	            <div class="col-md-5 col-md-offset-4">
                   <div class="panel panel-primary" >     
                      <div class="panel-body" style="color:red">

                            
                      <form action="login_script.php" method="POST">
								
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                 <?php 
                                   
                                       if(isset($_GET['error'])){
                                        
                                        ?><p style="color:red;">Enter Correct Id and Password</p><?php
                                
                                        } 
                                 ?>
                            </form>
                    
                       </div>
                     </div>
                   </div>
                 </div>
              </div>
          </div>                          
        </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

   </section> <!-- .cd-hero -->