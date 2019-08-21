<section class="cd-hero">
        <ul class="cd-hero-slider autoplay">  
            <li class="selected second-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                  
                    <div>
                     <h2>You can help someone</h2>
                     <h3>Please add FOOD Details here :</h3>
                     </div>
                    <div class="container">
            <div class="col-md-10 ">
	            <div class="col-md-5 col-md-offset-5">
                   <div class="panel panel-primary" >     
                      <div class="panel-body">

                                <form action="upload_script.php" method="POST" enctype="multipart/form-data">

                                    <input type="hidden" name="lati" id="latii" />
                                    <input type="hidden" name="longi" id="longii" />  
                                    
                                    <div class="form-group">
                                      <h5 style="color:red">Upload Image : </h5>
                                      <input type="file" id="custom-button"  name="image" required = "true" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <h5 style="color:red">Add Description :</h5>
                                        <textarea style=" resize: none; color:black;"  name="description" rows="4" cols="30">
                                        </textarea>      
                                    </div>
                                    
                                    <button type="submit" name="subm" id="subm" class="btn btn-primary">Upload</button><br><br>
									
                                </form>

                    
                       </div>
                     </div>
                   </div>
                 </div>
              </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
                </div>
                    </div>                   
                </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>
                
                <ul>
                    <li class="selected"><a href="#0"></a></li>
                    <li><a href="#0"></a></li>
                    <li><a href="#0"></a></li>                        
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->
    </section> <!-- .cd-hero -->