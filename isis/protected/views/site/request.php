<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 9/25/14
 * Time: 9:16 PM
 */
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
    'Request',
);
?>
    <h1>Request Proposal</h1>

<span style="text-align: left" >
<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

    <p>
        Please fill out the following form to request a proposal.
    </p>

    <div class="form">

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'request-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <div class="column" span="2">
                <?php echo $form->labelEx($model,'firstname'); ?>
                <?php echo $form->textField($model,'firstname'); ?>
                <?php echo $form->error($model,'firstname'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'lastname'); ?>
                <?php echo $form->textField($model,'lastname',array('size'=>33,'maxlength'=>33)); ?>
                <?php echo $form->error($model,'lastname'); ?>
            </div>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('size'=>58,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'category'); ?>
            <?php echo $form->textField($model,'category',array('size'=>58,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'category'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'Short Description'); ?>
            <?php echo $form->textArea($model,'body',array('rows'=>4, 'cols'=>43)); ?>
            <?php echo $form->error($model,'body'); ?>
        </div>

        <?php if(CCaptcha::checkRequirements()): ?>
            <div class="row">
                <?php echo $form->labelEx($model,'verifyCode'); ?>
                <div>
                    <?php $this->widget('CCaptcha'); ?>
                    <?php echo $form->textField($model,'verifyCode'); ?>
                </div>
                <div class="hint">Please enter the letters as shown in the image above.
                    <br/>Letters are not case-sensitive.</div>
                <?php echo $form->error($model,'verifyCode'); ?>
            </div>
        <?php endif; ?>

        <div class="row buttons">
            <?php echo CHtml::submitButton('Submit'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</span>
<?php endif; ?>