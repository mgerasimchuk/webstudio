<?
/**
 * @var $services \common\models\Service[]
*/
?>
<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img class="text-center" src="<?= $services[0]->picture ?>" class="img-responsive" width="150" height="150" alt="">
                <h4 class="service-heading"><?= $services[0]->name ?></h4>
                <p class="text-muted"><?= $services[0]->description ?></p>
            </div>
            <div class="col-md-4">
                <img class="text-center" src="<?= $services[1]->picture ?>" class="img-responsive" width="150" height="150" alt="">
                <h4 class="service-heading"><?= $services[1]->name ?></h4>
                <p class="text-muted"><?= $services[1]->description ?></p>
            </div>
            <div class="col-md-4">
                <img class="text-center" src="<?= $services[2]->picture ?>" class="img-responsive" width="150" height="150" alt="">
                <h4 class="service-heading"><?= $services[2]->name ?></h4>
                <p class="text-muted"><?= $services[2]->description ?></p>
            </div>
        </div>
    </div>
</section>