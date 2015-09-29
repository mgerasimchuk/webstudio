<?
/**
 * @var \common\models\Service[] $services
 * @var \common\models\Project[] $portfolio
 * @var \common\models\About[] $about
 * @var \common\models\TeamMember[] $team
 * @var \common\models\Partner[] $partners
 * @var \frontend\models\ContactForm $this
 */
?>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our Studio!</div>
            <div class="intro-heading">It's Nice To Meet You</div>
            <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
</header>

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
            <?php foreach($services as $item) : ?>
                <div class="col-md-4">
                    <img class="text-center" src="<?= $item->picture ?>" class="img-responsive" width="150" height="150" alt="">
                    <h4 class="service-heading"><?= $item->name ?></h4>
                    <p class="text-muted"><?= $item->description ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>

        <?php foreach($portfolio as $key => $item) : ?>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="<?= '#' . $item->id ?>" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?= $item->picture ?>" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4><?= $item->name ?></h4>
                    <p class="text-muted"><?= $item->category->name ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    </div>
</section>


<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">

                    <?php
                    foreach ($about as $key => $item) : ?>
                        <li class="<?= ($key % 2) ? 'timeline' : 'timeline-inverted' ?>">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= $item->picture ?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?= $item->firstTitle ?></h4>
                                    <h4 class="subheading"><?= $item->secondTitle ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?= $item->description ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach?>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach($team as $item) : ?>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?= $item->picture ?>" class="img-responsive img-circle" alt="">
                        <h4><?= $item->firstName . ' ' . $item->lastName ?></h4>
                        <p class="text-muted"><?= $item->position ?></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="<?= $item->socialTwitter ?>"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="<?= $item->socialFacebook ?>"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="<?= $item->socialLinkedIn ?>"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <?php foreach($partners as $item) : ?>
                <div class="col-md-3 col-sm-6">
                    <a href="<?= $item->link ?>">
                        <img src="<?= $item->picture ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</aside>


<?= $this->render('_contact', ['model' => $contact]) ?>

<!-- Portfolio Modal  -->
<?php foreach($portfolio as $item) : ?>
    <div class="portfolio-modal modal fade" id="<?= $item->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2><?= $item->name ?></h2>
                            <p class="item-intro text-muted"><?= $item->description ?></p>
                            <img class="img-responsive img-centered" src="<?= $item->picture?>" alt="">
                            <p><?= $item->note ?></p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
