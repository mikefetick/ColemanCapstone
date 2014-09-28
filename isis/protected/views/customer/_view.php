<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>
<?php Yii::app()-> clientScript-> registerCssFile(
    Yii::app()-> assetManager-> publish(
        Yii::getPathOfAlias('application.assets').'/customers.css'
    ))
?>

<div class="view">
    <li><h2>
            <?php
            $title = CHtml::encode($data-> ContactFirst.'
        '. $data-> ContactLast);
            echo CHtml::link($title, array(
                'view', 'id' => $data-> idCustomer));
            ?></h2>
        <ul>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('Company'));
                    ?>:</strong>
                <?php echo CHtml::encode($data-> Company);
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('ContactTitle'));
                    ?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
                <?php echo CHtml::encode($data-> ContactTitle);
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('BusinessAddress'));
                    ?>:&nbsp; </strong>
                <?php echo CHtml::encode($data-> BusinessAddress);
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('EMail'));
                    ?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
                <?php echo CHtml::encode($data-> EMail);
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('Phone'));
                    ?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                <?php echo CHtml::encode($data-> Phone);
                ?></li>
            <li><strong>
                    <?php echo CHtml::encode($data-> getAttributeLabel('Status'));
                    ?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                <?php echo CHtml::link(CHtml::encode($data-> StatusID ? 'Active' : 'Inactive'),
                    array('status/view', 'id'=>($data->StatusID)));
                ?></li>
        </ul>
    </li>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('BusinessAddress')); ?>:</b>
	<?php echo CHtml::encode($data->BusinessAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusID')); ?>:</b>
	<?php echo CHtml::encode($data->StatusID); ?>
	<br />

	*/ ?>
</div>