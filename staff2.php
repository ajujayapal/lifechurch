<!DOCTYPE html>

<?php include "includes/header.inc.php"; ?>

<?php include "includes/navbar.inc.php"; ?>



<div class="container widget-box-area">

    <div class="col-lg-9 col-sm-12">
        <!-- staff outer column - has nested container with staff photos. this is to make space of another container for the side-navigation -->

        <div class="card-deck-wrapper">
            <div class="card-deck">

                <div class="card">
                    <div class="card-image-top staff-image-area">
                        <img src="images/staff/dennis-whitter.jpg" alt="" class="img-circle img-fluid">
                    </div>
                    <div class="card-header">
                        <h6>Pastor Dennis Whitter</h6>
                    </div>
                    <div class="card-block">
                        Ext: 1
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-image-top staff-image-area">
                        <img src="images/staff/carol-whitter.jpg" alt="" class="img-circle img-fluid">
                    </div>
                    <div class="card-header">
                        <h6>Carol Whitter</h6>
                    </div>
                    <div class="card-block">
                        Ext: 1
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-image-top staff-image-area">
                        <img src="images/staff/john-campbell.jpg" alt="John Campbell" class="img-circle img-fluid">
                    </div>
                    <div class="card-header">
                        <h6>John Campbell</h6>
                    </div>
                    <div class="card-block">
                        Ext: 1
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- end of staff outer column -->


    <div class="col-lg-3 col-sm-12">

        <?php include "includes/sidenav-aboutus.inc.php" ?>

    </div>

</div>

<?php include "includes/footer.inc.php"; ?>