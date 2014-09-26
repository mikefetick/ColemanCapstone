<?php
/* @var $this DashboardController */
$this->pageTitle=Yii::app()->name;

$this->breadcrumbs=array(
	'Dashboard'=>array('/dashboard'),
	'Admin',
);
?>
<script type="text/javascript">
    /* <![CDATA[ */
    function listSurveys() {
        // Open the contact page in same window
        window.open("./index.php?r=survey", "_self");
        //$this->render('./index.php?r=survey');
    }
    function listAnalyses() {
        // Open the contact page in same window
        window.open("./index.php?r=analysis", "_self");
    }
    function listProposals() {
        // Open survey page in same window
        window.open("./index.php?r=proposal", "_self");
    }
    function listCustomers() {
        // Open the contact page in same window
        window.open("./index.php?r=customer", "_self");
    }
    function listQuestions() {
        // Open the contact page in same window
        window.open("./index.php?r=question", "_self");
    }
    function listUsers() {
        // Open the contact page in same window
        window.open("./index.php?r=user", "_self");
    }
    /* ]]> */
</script>

<body style="text-align: center;
	  background: wheat url(./splash.jpg) no-repeat fixed center center" >
<div id="timestamp"><h3><?php echo $time; ?></h3></div>
<h1>ADMIN DASHBOARD</h1>
<p><h1>
    <input type="button" value="SURVEYS" style="width: 100px"
           onclick="listSurveys();"/>&nbsp;
    <input type="button" value="ANALYSES" style="width: 100px"
           onclick="listAnalyses();"/>&nbsp;
    <input type="button" value="PROPOSALS" style="width: 100px"
           onclick="listProposals();"/>&nbsp;
    <br />
    <input type="button" value="CUSTOMERS" style="width: 100px"
           onclick="listCustomers();"/>&nbsp;
    <input type="button" value="QUESTIONS" style="width: 100px"
           onclick="listQuestions();"/>&nbsp;
    <input type="button" value="USERS" style="width: 100px"
           onclick="listUsers();"/>&nbsp;
</h1></p>
</body>

