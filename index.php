<!DOCTYPE html>

<?php include "includes/header.inc.php"; ?>

<?php include "includes/navbar.inc.php"; ?>


<script type="text/javascript" src="scripts/initializeMap.js"></script>

<!--<div class="container">-->
    <div class="carousel slide" data-ride="carousel" id="lifechurch-carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#lifechurch-carousel"></li>
            <li data-slide-to="1" data-target="#lifechurch-carousel"></li>
            <li data-slide-to="2" data-target="#lifechurch-carousel"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item item slide1 active">
                <img class="d-block img-fluid" alt="..." src="images/banner/banner_yellowflower_1200x315.png" height="100%">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
            <div class="carousel-item item slide2">
                <img class="d-block img-fluid" alt="..." src="images/banner/banner_dognearpool_1200x315.png">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
            <div class="carousel-item item slide3">
                <img class="d-block img-fluid" alt="... " src="images/banner/banner_hills_1200x315.png">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="carousel-control-prev" href="#lifechurch-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#lifechurch-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel -->
<!--</div>-->

<!-- Content Area - widget boxes -->

<div class="container widget-box-area">
	
	<div class="row">
  <div class="col-md-4">

    <div class="widget widget-outline widget-height">
      <div class="widget-header">
        <h4 class="widget-title">Welcome to Life Church</h4>
      </div>
      <div class="widget-block">
        <span>We are equipping people to...</span>
        <ul>
          <li>DISCOVER God’s calling for their lives,</li>
          <li>DEVELOP their giftedness, and</li>
          <li>DEMONSTRATE the fulfillment of God’s plan through them.</li>
        </ul>
        <a href="visionandmission.php">Read More...</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="widget widget-outline widget-height">
      <div class="widget-header">
        <h4 class="widget-title">I'm New</h4>
      </div>
      <div class="widget-block">
        <span>We invite you to join us for a service, group, class or activity at LifeChurch.</span>
        <br>
        <br>
        <a href="imnew.php">Here’s what you can expect...</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="widget widget-outline widget-height">
      <div class="widget-header">
        <h4 class="widget-title">Connect With Us</h4>
      </div>

      <div class="widget-block">
        <span>Address:</span>
        <address>
          West 108th Street<br>
          Bloomington, Minnesota 55431<br>
          <abbr title="Phone">Ph:</abbr> (952) 884-0594
        </address>
        <div class="input-group">
          <input class="form-control" placeholder="Join our email list" type="text">
          <span class="input-group-btn">
            <button class="btn btn-primary" type="button">Join</button>
          </span>
        </div>
      </div>
    </div>

  </div>

</div> <!-- row --> 


<div class="row mt-2">
  <div class="col-md-4">

    <div class="widget widget-outline widget-height">
      <div class="widget-header">
        <h4 class="widget-title">Upcoming Events</h4>
      </div>
      <div class="widget-block">
        <ul class="list-unstyled">
          <li>
            <a href="#">Thanksgiving Praise Service 7pm</a>
            <br>
            <small>Wed, November 23, 2016</small></li>
          <li>
            <a href="#">HAPPY THANKSGIVING!!</a>
            <br>
            <small>Thu, November 24, 2016</small></li>
          <li>
            <a href="#">Sunday Worship 10:00am</a>
            <br>
            <small>Sun, November 27, 2016</small></li>
          <li>
            <a href="#">Christmas choir practice 7pm</a>
            <br>
            <small>Wed, November 30, 2016</small></li>
        </ul>
      </div>
    </div>

  </div>

  <div class="col-md-4">
    <div class="widget widget-outline widget-height">
      <div class="widget-header">
        <h4 class="widget-title">Pastor's Blog</h4>
      </div>
      <div class="widget-block">

      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="widget widget-outline widget-height">
      <div class="widget-header">
        <h4 class="widget-title">Social Media</h4>
      </div>

      <div class="widget-block">

        <a href="https://www.facebook.com/LifeChurch.COG" target="_blank" class="social-icon">
          <div class="facebook-container">
            <span class="facebook-text">facebook</span>
          </div>
        </a>

        <a href="https://twitter.com/LifeChurchMN" target="_blank" class="social-icon">
          <div class="twitter-container">
            <span class="twitter-text">twitter</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

</div>



<?php include "includes/footer.inc.php"; ?>