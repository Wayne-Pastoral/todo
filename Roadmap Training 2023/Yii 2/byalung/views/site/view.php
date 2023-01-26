<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;

$this->title = 'YII2 CRUD Application';
?>

<div class="site-index">
    <h1>View Post </h1>
    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo$post['title']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post['description']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post['category']; ?>
            </li>
        </ul>
        <div class="row">
            <div class="go-back">
                <a href="<?php echo yii::$app->homeUrl;?>" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
</div>