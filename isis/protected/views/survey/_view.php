<?php
/* @var $this SurveyController */
/* @var $data Survey */
?>
<?php Yii::app()-> clientScript-> registerCssFile(
    Yii::app()-> assetManager-> publish(
        Yii::getPathOfAlias('application.assets').'/surveys.css'
    ))
?>

<div class="view">

    <li><h2>
            <?php
            //$title = CHtml::encode($data-> Customer.ContactFirst.'
            //'. $data-> Customer-> ContactLast);
            //echo CHtml::link($title, array(
            //    'view', 'id' => $data-> Customer-> idCustomer));
            ?></h2>
        <ul>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('Survey'));
                    ?>:&nbsp;&nbsp;&nbsp;</strong>
                <?php echo CHtml::link(CHtml::encode($data->idSurvey), array('view', 'id'=>$data->idSurvey));
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('Answer'));
                    ?>:&nbsp;&nbsp;</strong>
                <?php echo CHtml::encode($data-> Answer);
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('Analysis'));
                    ?>:</strong>
                <?php echo CHtml::link(CHtml::encode($data->idAnalysis), array('analysis/view', 'id'=>($data->idAnalysis)));
                ?></li>
        </ul>
    </li>
</div>
