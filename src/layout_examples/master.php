<?php
/**
 * @var \yii\web\View $this
 */

use insolita\adminlte3bs4\assets\AdminLte3Asset;
use yii\helpers\Html;

$lteBundle=$this->registerAssetBundle(AdminLte3Asset::class);
Yii::$app->params['AdminlteWebUrl'] = $lteBundle->baseUrl;
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
    <?= $this->render('_nav') ?>
    <?= $this->render('_side') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?= Html::encode($this->title) ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <?= \yii\widgets\Breadcrumbs::widget([
                            'tag' => 'ol',
                            'options' => ['class' => 'breadcrumb float-sm-right'],
                            'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
                            'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>',
                            'links' => [
                                ['label' => 'First', 'url' => '#'],
                                ['label' => 'Second', 'url' => '#'],
                            ],
                        ]) ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <?= $content ?>
            </div>
        </section>
    </div>
    <?= $this->render('_footer') ?>
    <?= $this->render('_control_sidebar') ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
