<?
/**
 * @var $about \common\models\About
 */
?>
<li class="<?= $timelineClass ?>">
    <div class="timeline-image">
        <img class="img-circle img-responsive" src="<?= $about->picture ?>" alt="">
    </div>
    <div class="timeline-panel">
        <div class="timeline-heading">
            <h4><?= $about->firstTitle ?></h4>
            <h4 class="subheading"><?= $about->secondTitle ?></h4>
        </div>
        <div class="timeline-body">
            <p class="text-muted"><?= $about->description ?></p>
        </div>
    </div>
</li>