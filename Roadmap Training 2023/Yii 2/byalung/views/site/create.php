<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <h1>Create Post</h1>

    <div class="body-content">
        <?php $form = ActiveForm::begin() ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'title'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'description')->textarea(['rows'=>"6"]); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?php $items = ['Pending','Ongoing','Done']; ?>
                    <?= $form->field($post, 'category')->dropDownList($items); ?>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-2">
                <?= html::submitButton('Create Post', ['class' => 'btn btn-primary']) ?>
            </div>
            <div class="col-lg-em">
                <a href=<?php echo yii::$app->homeUrl; ?> class="btn btn-primary">Go Back</a>
            </div>
        </div>

        <?php ActiveForm::end() ?>
    </div>
</div>
