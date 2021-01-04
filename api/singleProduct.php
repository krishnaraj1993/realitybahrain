<?php
$url = 'http://ec2-13-212-39-227.ap-southeast-1.compute.amazonaws.com/admin/public/api/properties/details?' . $_SERVER['QUERY_STRING'];
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$properties = json_decode($response, true);
$data = $properties['data'];
$property = $properties['data'][0];
$assets = $properties['assets'];
$features = $properties['features'];
?>


<div class="innercontent">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">

        <form>
          <div class="sidebar_form card card-body  wow fadeInUp">
            <h4 class="mb-15">Agency list</h4>

            <ul class="property_sec">
              <li>
                <div class="rec_proprty">
                  <div class="propertyImg"><img alt="" src="images/property_small01.jpg"></div>
                  <div class="property_info agencyList">
                    <h4><a href="#">SSRE</a></h4>
                    <div class="priceWrp"><a href="#.">View Listings</a></div>
                  </div>
                </div>
              </li>
            </ul>

            <div class="input-group">
              <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Select</span>
                <ul class="list">
                  <li data-value="buyer" class="option">I'm buyer</li>
                  <li data-value="tennant" class="option">I'm a tennant</li>
                  <li data-value="agent" class="option">I'm an agent</li>
                  <li data-value="Other" class="option">Other</li>
                </ul>
              </div>
            </div>

            <div class="input-group">
              <input type="text" name="" class="form-control" placeholder="Your Name">
            </div>
            <div class="input-group">
              <input type="text" name="" class="form-control" placeholder="Phone">
            </div>
            <div class="input-group">
              <input type="text" name="" class="form-control" placeholder="Email">
            </div>
            <div class="input-group">
              <textarea class="form-control" style="height:100px" placeholder="Your Message"></textarea>
            </div>
            <div class="input-group">
              <input type="submit" class="submit" value="Send Message">
            </div>
          </div>
        </form>


        <div class="single-widgets widget_category fadeInUp wow">
          <h4>Other property of agent</h4>
          <ul class="property_sec">
            <li>
              <div class="rec_proprty">
                <div class="propertyImg"><img alt="" src="images/property_small01.jpg"></div>
                <div class="property_info">
                  <h4><a href="#">1324 Tennessee Road</a></h4>
                  <p>Minneapolis, MN 55402</p>
                  <div class="priceWrp">$98.00</div>
                </div>
              </div>
            </li>
            <li>
              <div class="rec_proprty">
                <div class="propertyImg"><img alt="" src="images/property_small02.jpg"></div>
                <div class="property_info">
                  <h4><a href="#">1324 Tennessee Road</a></h4>
                  <p>Minneapolis, MN 55402</p>
                  <div class="priceWrp">$98.00</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-8">
        <!-- Place somewhere in the <body> of your page -->
        <div id="slider" class="flexslider wow fadeInUp">
          <ul class="slides">
          <?php
            foreach ($assets as $key => $value) {
                ?>
                        <li> <img alt="" src="<?php echo 'http://ec2-13-212-39-227.ap-southeast-1.compute.amazonaws.com/admin/public/'.$value['url']; ?>" /> </li>
                        <?php
            }
            ?>
            <!-- items mirrored twice, total of 12 -->
          </ul>
        </div>
        <div id="carousel" class="flexslider wow fadeInUp">
          <ul class="slides">
            <?php
            foreach ($assets as $key => $value) {
            ?>
            <li> <img alt="" src="<?php echo 'http://ec2-13-212-39-227.ap-southeast-1.compute.amazonaws.com/admin/public/'.$value['url']; ?>" /> </li>
            <?php
            }
            ?>
          </ul>
        </div>
        <div class="property_details">
          <div class="row property_head wow fadeInUp">
            <div class="col-lg-8 col-md-8">
              <h3><?php echo $property['Title'] ?></h3>
              <div class="property_address"><?php echo $property['location'] ?></div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="heart_info">
                <div class="heart_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>

                <div class="property_price">$ <?php echo $property['value'] ?></div>
              </div>
            </div>
          </div>
          <div class="property_widget wow fadeInUp">
            <h3 class="desc_head">Description</h3>
            <p>
            <?php echo $property['description']; ?>
            </p>
          </div>
          <div class="property_widget wow fadeInUp">
            <h3 class="desc_head">Property Details</h3>
            <div class="row prop_del">
              <div class="col-lg-6">
                <ul class="property_list">
                  <li><span>Property ID :</span> B<?php echo $property['id']; ?></li>
                  <li><span>Price :</span> $<?php echo $property['value']; ?></li>
                  <li><span>Property Size :</span> <?php echo $property['AreaWidth'].'X'.$property['AreaHight']; ?></li>
                  <li><span>Bathrooms :</span> <?php echo $property['BathRooms']; ?></li>
                  <li><span>Bedrooms :</span> <?php echo $property['bedRooms']; ?></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="property_list">
                  <li><span>Year Built :</span> 30-06-2020</li>
                  <li><span>Garage :</span> 1</li>
                  <li><span>Garage Size :</span> 150 SqFt</li>
                  <li><span>Property Type :</span> <?php echo $data['propertyType']; ?> </li>
                  <li><span>Property Status :</span> <?php echo $data['propertyStatus']; ?></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="property_widget wow fadeInUp">
            <h3 class="desc_head">Features</h3>
            <ul class="list-unstyled icon-checkbox">
            <?php foreach($features as $key=>$featur){ ?>
              <li><?php echo $featur['name']; ?></li>
            <?php } ?>
            </ul>
          </div>
          <div class="property_widget wow fadeInUp">
            <h3 class="desc_head">Floor PLans</h3>
            <div class="floor_plans faqs">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57303.03423156473!2d50.43466981000745!3d26.14980781615217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49b10909ffb773%3A0xeb1b218c2feeaef1!2sHamala%2C%20Bahrain!5e0!3m2!1sen!2sin!4v1608098902779!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>