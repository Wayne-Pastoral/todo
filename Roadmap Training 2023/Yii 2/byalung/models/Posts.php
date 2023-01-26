<?php
    namespace app\models;
    use yii\db\ActiveRecord;

    class Posts extends ActiveRecord
    {
        public $title;
        public $description;
        public $category;

        public function rules() {
            return[
                [['title', 'description', 'category'], 'required']
            ];
        }
    }

?>