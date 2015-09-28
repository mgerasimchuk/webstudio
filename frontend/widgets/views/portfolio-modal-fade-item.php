<?php
/**
 * @var $portfolioItem \common\models\Project
 */
?>
<!-- Portfolio Modal  -->
<div class="portfolio-modal modal fade" id="<?= $portfolioItem->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2><?= $portfolioItem->name ?></h2>
                        <p class="item-intro text-muted"><?= $portfolioItem->description ?></p>
                        <img class="img-responsive img-centered" src="<?= $portfolioItem->picture?>" alt="">
                        <p><?= $portfolioItem->note ?></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>