<?
/**
 * @var $partners \common\models\Partner[]
 */
?><!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="<?= $partners[0]->link ?>">
                    <img src="<?= $partners[0]->picture ?>" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="<?= $partners[1]->link ?>">
                    <img src="<?= $partners[1]->picture ?>" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="<?= $partners[2]->link ?>">
                    <img src="<?= $partners[2]->picture ?>" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="<?= $partners[3]->link ?>">
                    <img src="<?= $partners[3]->picture ?>" class="img-responsive img-centered" alt="">
                </a>
            </div>
        </div>
    </div>
</aside>