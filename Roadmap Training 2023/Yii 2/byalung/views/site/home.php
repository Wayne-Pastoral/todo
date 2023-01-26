<?php
use yii\helpers\html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4 p-5">Yii2 Todo list app</h1>
    </div>

    <div class="body-content">
        <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Task Title</th>
                <th scope="col">Task Description</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                    <th scope="row">Active</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>
                        <span><?= Html::a('View') ?></span>
                        <span><?= Html::a('Update') ?></span>
                        <span><?= Html::a('Delete') ?></span>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
