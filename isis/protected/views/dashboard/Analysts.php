<?php
/* @var $this DashboardController */
$this->pageTitle=Yii::app()->name;

$this->breadcrumbs=array(
	'Dashboard'=>array('/dashboard'),
	'Analyses',
);
?>
<script type="text/javascript">
    /* <![CDATA[ */
    function listSurveys() {
        // Open the contact page in same window
        window.open("./index.php?r=survey", "_self");
    }
    function listAnalysises() {
        // Open the contact page in same window
        window.open("./index.php?r=analysis", "_self");
    }
    function listProposals() {
        // Open survey page in same window
        window.open("./index.php?r=proposal", "_self");
    }
    /* ]]> */
</script>

<body style="text-align: center;
	  background: wheat url(./splash.jpg) no-repeat fixed center center" >
<div id="timestamp2"><h3><?php echo $time; ?></h3></div>
<h1>ANALYSTS DASHBOARD</h1>
<p><h1>
    <input type="button" value="SURVEYS" style="width: 150px"
           onclick="listSurveys();"/>&nbsp;
    <input type="button" value="ANALYSES" style="width: 150px"
           onclick="listAnalysises();"/>&nbsp;
    <input type="button" value="PROPOSALS" style="width: 150px"
           onclick="listProposals();"/>&nbsp;
    <br />
    <br />
</h1></p></body>
