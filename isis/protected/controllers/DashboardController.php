<?php

class DashboardController extends Controller
{
	public function actionAdmin()
	{
        // Setting a variable but we’re not refreshing it, so remove seconds
        $theTime = date("D, M j @ G:i T, Y");
        $this->render('Admin', array('time'=>$theTime));
        //$url = $this->createUrl('dashboard/admin');
	}

	public function actionAnalysts()
	{
        // Setting a variable but we’re not refreshing it, so remove seconds
        $theTime = date("D, M j @ G:i T, Y");
        $this->render('Analysts', array('time'=>$theTime));
        //$url = $this->createUrl('dashboard/analysts');

	}

	public function actionReports()
	{
		$this->render('Reports');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}