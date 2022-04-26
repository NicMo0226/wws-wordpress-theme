<?php get_header();?>

<div class="container-fluid main-page">

    <div class="row">
        <div class="col-12">
            <?php
                if(is_active_sidebar('main-section-2')){
                dynamic_sidebar('main-section-2');
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
                if(is_active_sidebar('main-section-3')){
                dynamic_sidebar('main-section-3');
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <?php
                if(is_active_sidebar('main-section-third-1')){
                dynamic_sidebar('main-section-third-1');
            }
            ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <?php
                if(is_active_sidebar('main-section-third-2')){
                dynamic_sidebar('main-section-third-2');
            }
            ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <?php
                if(is_active_sidebar('main-section-third-3')){
                dynamic_sidebar('main-section-third-3');
            }
            ?>
        </div>
    </div>


</div>
<?php get_footer();