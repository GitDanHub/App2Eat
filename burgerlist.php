<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="liststyle.css">
    </head>
    <body>
    
    <div class="first"
    
    </body>
    
    
    
    
    
    
    
    
    
    
    
    


<?php

$price = $_GET["price"];
    
$hostname = '127.0.0.1';


$username = 'root';


$password = '';



	if (!$link = mysql_connect($hostname, $username, $password)) {
    echo 'Could not connect to mysql';
    exit;
}


if (!mysql_select_db('app2eat_v2', $link)) {
    echo 'Could not select database';
    exit;
}

$sql = "SELECT * FROM `restaurants` WHERE MinPrice <= '$price'";

$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

$div_count = 0;    

while ($row = mysql_fetch_assoc($result)) {
    $tmp_li = "";
    echo "<ul>";
    foreach($row as $col_name => $col_value){
        $tmp_li .='<li class="survey-item">';
        $tmp_li .='<span class="survey-country list-only">';
        $tmp_li .= $col_value;
        $tmp_li .='</span>';
        $tmp_li .='<span class="survey-name">';
        $tmp_li .=$col_value;
        $tmp_li .='</span>';
        $tmp_li .='<div class="pull-right">';
        $tmp_li .='<span class="survey-progress">';
        $tmp_li .='<span class="survey-progress-bg">';
        $tmp_li .='<span class="survey-progress-fg" style="width: 75%;"></span>';
        $tmp_li .='</span>';
        $tmp_li .='<span class="survey-progress-labels">';
        $tmp_li .='<span class="survey-progress-label">';
        $tmp_li .='76%';
        $tmp_li .='</span>';
        $tmp_li .='</span>';
        $tmp_li .='</span>';
        $tmp_li .='<span class="survey-stage">';
        $tmp_li .='<span class="stage draft">Draft</span>';
        $tmp_li .='<span class="stage awarded">Awarded</span>';
        $tmp_li .='<span class="stage live">Live</span>';
        $tmp_li .='<span class="stage ended active">Ended</span>';
        $tmp_li .='</span>';
        $tmp_li .='</div>';
        $tmp_li .='</li>';
        echo $tmp_li;
    }        
    echo "</ul>";
    echo "<br /> ";
    $div_count += 1;
}

mysql_free_result($result);



?>
<style>
@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
@import url(http://weloveiconfonts.com/api/?family=entypo);
/* entypo */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}

* {
  box-sizing: border-box;
}

body {
  background: #f5f5f5;
  max-width: 1200px;
  margin: 0 auto;
  padding: 10px;
  font-family: 'Lato', sans-serif;
  text-shadow: 0 0 1px rgba(255, 255, 255, 0.004);
  font-size: 100%;
  font-weight: 400;
}

.toggler {
  color: #A1A1A4;
  font-size: 1.25em;
  margin-left: 8px;
  text-align: center;
  cursor: pointer;
}
.toggler.active {
  color: #000;
}

.surveys {
  list-style: none;
  margin: 0;
  padding: 0;
}

.survey-item {
  display: block;
  margin-top: 10px;
  padding: 20px;
  border-radius: 2px;
  background: white;
  box-shadow: 0 2px 1px rgba(170, 170, 170, 0.25);
}

.survey-name {
  font-weight: 400;
}

.list .survey-item {
  position: relative;
  padding: 0;
  font-size: 14px;
  line-height: 40px;
}
.list .survey-item .pull-right {
  position: absolute;
  right: 0;
  top: 0;
}
@media screen and (max-width: 800px) {
  .list .survey-item .stage:not(.active) {
    display: none;
  }
}
@media screen and (max-width: 700px) {
  .list .survey-item .survey-progress-bg {
    display: none;
  }
}
@media screen and (max-width: 600px) {
  .list .survey-item .pull-right {
    position: static;
    line-height: 20px;
    padding-bottom: 10px;
  }
}
.list .survey-country,
.list .survey-progress,
.list .survey-completes,
.list .survey-end-date {
  color: #A1A1A4;
}
.list .survey-country,
.list .survey-completes,
.list .survey-end-date,
.list .survey-name,
.list .survey-stage {
  margin: 0 10px;
}
.list .survey-country {
  margin-right: 0;
}
.list .survey-end-date,
.list .survey-completes,
.list .survey-country,
.list .survey-name {
  vertical-align: middle;
}
.list .survey-end-date {
  display: inline-block;
  width: 100px;
  white-space: nowrap;
  overflow: hidden;
}

.survey-stage .stage {
  display: inline-block;
  vertical-align: middle;
  width: 16px;
  height: 16px;
  overflow: hidden;
  border-radius: 50%;
  padding: 0;
  margin: 0 2px;
  background: #f2f2f2;
  text-indent: -9999px;
  color: transparent;
  line-height: 16px;
}
.survey-stage .stage.active {
  background: #A1A1A4;
}

.list .list-only {
  display: auto;
}
.list .grid-only {
  display: none !important;
}

.grid .grid-only {
  display: auto;
}
.grid .list-only {
  display: none !important;
}

.grid .survey-item {
  position: relative;
  display: inline-block;
  vertical-align: top;
  height: 200px;
  width: 250px;
  margin: 10px;
}
@media screen and (max-width: 600px) {
  .grid .survey-item {
    display: block;
    width: auto;
    height: 150px;
    margin: 10px auto;
  }
}
.grid .survey-name {
  display: block;
  max-width: 80%;
  font-size: 16px;
  line-height: 20px;
}
.grid .survey-country {
  font-size: 11px;
  line-height: 16px;
  text-transform: uppercase;
}
.grid .survey-country,
.grid .survey-end-date {
  color: #A1A1A4;
}
.grid .survey-end-date:before {
  content: 'Ends\00a0';
}
.grid .survey-end-date.ended:before {
  content: 'Ended\00a0';
}
.grid .survey-progress {
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  padding: 20px;
  border-top: 1px solid #eee;
  font-size: 13px;
}
.grid .survey-progress-bg {
  width: 40%;
  display: block;
}
@media screen and (max-width: 200px) {
  .grid .survey-progress-bg {
    display: none;
  }
}
.grid .survey-progress-labels {
  position: absolute;
  right: 20px;
  top: 0;
  line-height: 40px;
}
@media screen and (max-width: 200px) {
  .grid .survey-progress-labels {
    right: auto;
    left: 10px;
  }
}
.grid .survey-progress-label {
  line-height: 21px;
  font-size: 13px;
  font-weight: 400;
}
.grid .survey-completes {
  line-height: 21px;
  font-size: 13px;
  vertical-align: middle;
}
.grid .survey-stage {
  position: absolute;
  top: 20px;
  right: 20px;
}
.grid .survey-stage .stage {
  display: none;
}
.grid .survey-stage .active {
  display: block;
}
.grid .survey-end-date {
  font-size: 12px;
  line-height: 20px;
}

.survey-progress-label {
  vertical-align: middle;
  margin: 0 10px;
  color: #8DC63F;
}

.survey-progress-bg {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  width: 100px;
  height: 4px;
  border-radius: 2px;
  overflow: hidden;
  background: #eee;
}

.survey-progress-fg {
  position: absolute;
  top: 0;
  bottom: 0;
  height: 100%;
  left: 0;
  margin: 0;
  background: #8DC63F;
}
        
</style>
<script>
(function () {
    $(function () {
        return $('[data-toggle]').on('click', function () {
            var toggle;
            toggle = $(this).addClass('active').attr('data-toggle');
            $(this).siblings('[data-toggle]').removeClass('active');
            return $('.surveys').removeClass('grid list').addClass(toggle);
        });
    });
}.call(this));
</script>