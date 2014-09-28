<?php
/* @var $this CategoryController */
/* @var $data Category */
?>
<?php Yii::app()-> clientScript-> registerCssFile(
    Yii::app()-> assetManager-> publish(
        Yii::getPathOfAlias('application.assets').'/categories.css'
    ))
?>

<div class="view">
    <li><h2>
            <?php
            $title = CHtml::encode($data-> Category);
            echo CHtml::link($title, array('view', 'id' => $data-> idCategory));
            ?>
    <ul></ul>
    </li>
</div>