<!DOCTYPE html>
<html>
    <head>
        <?php include("include/headtag.php") ?>
    </head>

<body>
    <!-- Header -->
        <?php include("include/header.php"); ?>
        <?php include("login/login1.php"); ?>

    <div id="about" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Our Motive</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item first-service">
                        <div class="icon"></div>
                        <h4>Easy Food Management</h4>
                        <p>Cutting food waste is a delicious way of saving money, helping to feed the world and protect the planet.</p>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Creative Ideas</h4>
                        <p>A food waste reduction hierarchy-feeding people first, then animals, then recycling, then composting-serves to show how productive use can be made of much of the excess food that is currently contributing to leachate and methane formation in landfills.
</p>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>Good Utilization of waste food</h4>
                        <p>According to the 'food waste pyramid', ensuring that food is eaten by people is the top priority. Failing that, the next best thing is to feed it to farm animals.</p>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>Say No To Food Waste</h4>
                        <p>Throwing away food is like stealing from the table of those who are poor and hungry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contact Us</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14310.288829531984!2d78.2362218!3d26.2755441!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c0e647bece07%3A0xd848338a0d6a5393!2sAmity+University+Gwalior!5e0!3m2!1sen!2sin!4v1564333735943!5m2!1sen!2sin" width="455" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                      <form id="contact" action="query_script.php" method="post">
                        <div class="col-md-6">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required>
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required></textarea>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                          </fieldset>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("include/footer.php"); ?>

    <?php include("include/jscript.php"); ?>

    
</body>
</html>