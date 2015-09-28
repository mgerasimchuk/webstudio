<?
/**
 * @var $team \common\models\TeamMember[]
 */
?>
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
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?= $team[0]->picture ?>" class="img-responsive img-circle" alt="">
                    <h4><?= $team[0]->firstName . ' ' . $team[0]->lastName ?></h4>
                    <p class="text-muted"><?= $team[0]->position ?></p>
                    <ul class="list-inline social-buttons">
                        <li><a href="<?= $team[0]->socialTwitter ?>"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="<?= $team[0]->socialFacebook ?>"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="<?= $team[0]->socialLinkedIn ?>"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?= $team[1]->picture ?>" class="img-responsive img-circle" alt="">
                    <h4><?= $team[1]->firstName . ' ' . $team[1]->lastName ?></h4>
                    <p class="text-muted"><?= $team[1]->position ?></p>
                    <ul class="list-inline social-buttons">
                        <li><a href="<?= $team[1]->socialTwitter ?>"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="<?= $team[1]->socialFacebook ?>"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="<?= $team[1]->socialLinkedIn ?>"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?= $team[2]->picture ?>" class="img-responsive img-circle" alt="">
                    <h4><?= $team[2]->firstName . ' ' . $team[2]->lastName ?></h4>
                    <p class="text-muted"><?= $team[0]->position ?></p>
                    <ul class="list-inline social-buttons">
                        <li><a href="<?= $team[2]->socialTwitter ?>"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="<?= $team[2]->socialFacebook ?>"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="<?= $team[2]->socialLinkedIn ?>"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>