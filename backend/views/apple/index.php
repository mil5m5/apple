<?php
use yii\helpers\Url;

/* @var $fallenApples backend\controllers\SiteController */
/* @var $apples backend\controllers\SiteController */
$session = Yii::$app->session;
?>
<div class="container-fluid">
    <div class="row">
        <a href="<?= Url::toRoute(['apple/index', 'create' => 'create'])?>" class="links"><button class="btn btn-success btn-lg btn-block">Создать яблоко</button></a>
        <?php if ($session->has('error')) :?>
            <p style="text-align: center;"><?= $session->get('error');?></p>
            <?php $session->remove('error');?>
        <?php endif;?>
    </div>
</div>
<div class="conteiner">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="flex-wrap"> 5


            <?php foreach ($apples as $apple) : ?>
            <div class="space-between">
                <div class="apple-parent">
                    <img src="<?= Url::to('/uploads/' . $apple->image)?>" class="apple-image"/>
                    <div class="options">
                        <a href="<?= Url::toRoute(['drop', 'id' => $apple->id])?>" class="links"><button type="button" class="btn btn-success btn-sm btn-block">Сорвать яблоко с дерева &#8659;</button></a>
                        <a href="<?= Url::toRoute(['bite', 'id' => $apple->id])?>" class="links"><button type="button" class="btn btn-warning btn-sm btn-block">Съесть яблоко</button></a>
                        <a href="<?= Url::toRoute(['delete', 'id' => $apple->id])?>" class="links"><button type="button" class="btn btn-danger btn-sm btn-block">Выбросить </button></a>

                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="flex">
            <?php foreach ($fallenApples as $fallenApple) : ?>
                <div class="space-between">
                    <div class="apple-parent">
                        <div class="percent"><?= $fallenApple->percentage_eaten?> %</div>
                        <img src="/uploads/<?= $fallenApple->image?>" alt="" class="apple-image"/>
                        <div class="options">
                            <a href="<?= Url::toRoute(['bite', 'id' => $fallenApple->id])?>" class="links"><button type="button" class="btn btn-warning btn-sm btn-block">Съесть яблоко</button></a>
                            <a href="<?= Url::toRoute(['delete', 'id' => $fallenApple->id])?>" class="links"><button type="button" class="btn btn-danger btn-sm btn-block">Выбросить </button></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
