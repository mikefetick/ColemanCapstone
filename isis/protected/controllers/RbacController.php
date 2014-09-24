o <?php

class RbacController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array(
                'allow',
                'actions' => array('deletePost'),
                'roles' => array('deletePost'),
            ),
            array(
                'allow',
                'actions' => array('init', 'test'),
            ),
            array('deny'),
        );
    }

    public function actionInit()
    {
        $auth = Yii::app()-> authManager;

        $auth-> createOperation('createPost','create a post');
        $auth-> createOperation('readPost','read a post');
        $auth-> createOperation('updatePost','update a post');
        $auth-> createOperation('deletePost','delete a post');

        $bizRule = 'return Yii::app()-> user-> id == $params["post"]-> authID;';
        $task = $auth-> createTask('updateOwnPost','update a post by author himself', $bizRule);
        $task-> addChild('updatePost');

        $role = $auth-> createRole('reader');
        $role-> addChild('readPost');

        $role = $auth-> createRole('author');
        $role-> addChild('reader');
        $role-> addChild('createPost');
        $role-> addChild('updateOwnPost');

        $role = $auth-> createRole('editor');
        $role-> addChild('reader');
        $role-> addChild('updatePost');

        $role = $auth-> createRole('admin');
        $role-> addChild('editor');
        $role-> addChild('author');
        $role-> addChild('deletePost');

        $auth-> assign('reader','readerA');
        $auth-> assign('author','authorB');
        $auth-> assign('editor','editorC');
        $auth-> assign('admin','adminD');

        echo "Done.";
    }

    public function actionDeletePost()
	{
        echo "Post deleted.";
	}

	public function actionTest()
	{
        $post = new stdClass();
        $post-> authID = 'authorB';
        echo "Current permissions: <br />";
        echo "<ul>";
            echo "<li>Create post: ".Yii::app()-> user-> checkAccess('createPost')."</li>";
            echo "<li>Read post: ".Yii::app()-> user-> checkAccess('readPost')."</li>";
            echo "<li>Update post: ".Yii::app()-> user-> checkAccess('updatePost', array('post' => $post))."</li>";
            echo "<li> Delete post: ". Yii:: app()-> user-> checkAccess('deletePost')." </ li >";
        echo "</ul>";
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