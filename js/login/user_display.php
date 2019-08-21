                      <script type="text/javascript">  
                            function getLocation(){
                                          if(navigator.geolocation){
                                          navigator.geolocation.getCurrentPosition(showPosition);
                                                  }
                                            }
                                     function showPosition(position)
                                       {
                                            document.getElementById("lats").value=+position.coords.latitude;
                                             document.getElementById("longs").value=+position.coords.longitude;
                                         }
                         </script>

                                            <form action="search_food.php" method="POST">
                                           <input type="hidden" name="lats" id="lats" />
                                               <input type="hidden" name="longs" id="longs" />  
                                          <button  class="btn btn-danger" type="submit" name="subm" id="subm">Find Nearest Location</button>
                                        </form>