<?php
/**
 * @var $portfolioItem \common\models\Project
 */
?>
<div class="col-md-4 col-sm-6 portfolio-item">
    <a href="<?= '#' . $portfolioItem->id ?>" class="portfolio-link" data-toggle="modal">
        <div class="portfolio-hover">
            <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
            </div>
        </div>
        <img src="<?= $portfolioItem->picture ?>" class="img-responsive" alt="">
    </a>
    <div class="portfolio-caption">
        <h4><?= $portfolioItem->name ?></h4>
        <p class="text-muted"><?= $portfolioItem->category->name ?></p>
    </div>
</div>