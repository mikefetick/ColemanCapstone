<?php
/* @var $this AnalysisController */
/* @var $data Analysis */
?>
<?php Yii::app()-> clientScript-> registerCssFile(
    Yii::app()-> assetManager-> publish(
        Yii::getPathOfAlias('application.assets').'/analyses.css'
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
                    <?php echo CHtml::encode($data-> getAttributeLabel('CustomerID'));
                    ?>:&nbsp;&nbsp;</strong>
                <?php echo CHtml::link(CHtml::encode($data->CustomerID), array('customer/view', 'id'=>($data->CustomerID)));
                ?><i>
                </i></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('idAnalysis'));
                    ?>:&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                <?php echo CHtml::link(CHtml::encode($data->idAnalysis), array('view', 'id'=>$data->idAnalysis));
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('UserID'));
                    ?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                <?php echo CHtml::link(CHtml::encode($data->UserID), array('user/view', 'id'=>($data->UserID)));
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('Comments'));
                    ?>:&nbsp;</strong>
                <?php echo CHtml::encode($data-> Comments);
                ?></li>
        </ul>
    </li>
</div>
