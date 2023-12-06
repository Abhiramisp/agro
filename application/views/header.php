<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?php echo base_url();?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/profile.css" rel="stylesheet" />

        <link href="<?php echo base_url();?>assets/css/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/css/bootstrap.min.css" rel="stylesheet" />
        <style>
	.box {
  display: flex;
  justify-content: space-between;
}
	body {
  min-height: 100vh;

  background-image: url(../img/carousel-1.jpg");

}
	.blink_me {
  animation: blinker 2s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}


/* Tabs Start */

.ease {
	-webkit-transition: all .5s;
	   -moz-transition: all .5s;
		 -o-transition: all .5s;
			transition: all .5s;
}

.container {
	width: 100%;
	max-width: 1000px;
	margin: 0 auto;
}

.tabs {
	background: #fff;
	position: relative;
	margin-bottom: 50px;
}

.tabs > input,
.tabs > span {
	width: 20%;
	height: 60px;
	line-height: 60px;
	position: absolute;
	top: 0;
}

.tabs > input {
	cursor: pointer;
	filter: alpha(opacity=0);
	opacity: 0;
	position: absolute;
	z-index: 99;
}

.tabs > span {
	background: #f0f0f0;
	text-align: center;
	overflow: hidden;
}

.tabs > span i,
.tabs > span {
	-webkit-transition: all .5s;
	   -moz-transition: all .5s;
		 -o-transition: all .5s;
			transition: all .5s;
}

.tabs > input:hover + span {
	background:#46c6ce;
}

.tabs > input:checked + span {
	background: #194376;
}

.tabs > input:checked + span,
.tabs > input:hover + span {
	color: #3498DB;
}

#tab-1, #tab-1 + span {
	left: 0;
}

#tab-2, #tab-2 + span {
	left: 20%;
}

#tab-3, #tab-3 + span {
	left: 40%;
}

#tab-4, #tab-4 + span {
	left: 60%;
}

#tab-5, #tab-5 + span {
	left: 80%;
}

.tab-content {
	padding: 80px 20px 20px;
	width: 100%;
	min-height: 340px;
}

.tab-content section {
	width: 100%;
	display: none;
}

.tab-content section h1 {
	margin-top: 15px;
	font-size: 100px;
	font-weight: 100;
	text-align: center;
}

#tab-1:checked ~ .tab-content #tab-item-1  {
	display: block;
}

#tab-2:checked ~ .tab-content #tab-item-2  {
	display: block;
}

#tab-3:checked ~ .tab-content #tab-item-3  {
	display: block;
}

#tab-4:checked ~ .tab-content #tab-item-4  {
	display: block;
}

#tab-5:checked ~ .tab-content #tab-item-5  {
	display: block;
}

/* effect-1 */

.effect-1 > input:checked + span {
	background: #fff;
}


/* effect-2 */

.effect-2 span i{
	padding-right: 15px;
}

@media (max-width: 600px) {
	.effect-2 span span {display: none;}
	.effect-2 span i {padding: 0;}
}

/* effect-3 */

.effect-3 .line{
	background: #3498DB;
	width: 20%;
	height: 4px;
	position: absolute;
	top: 56px;
}

#tab-1:checked ~ .line {
	left: 0;
}

#tab-2:checked ~ .line {
	left: 20%;
}

#tab-3:checked ~ .line {
	left: 40%;
}

#tab-4:checked ~ .line {
	left: 60%;
}

#tab-5:checked ~ .line {
	left: 80%;
}


/* effect-4 */

.effect-4 span i{
	font-size: 18px;
	display: block;
	position: absolute;
	left: 50%;
	top: 0;
	opacity: 0;
	transform: translateX(-50%);
}

.effect-4 span span{
	position: relative;
	top: 10px;
}

.effect-4 > input:checked + span i,
.effect-4 > input:hover + span i {
	top: 20%;
	opacity: 1;
}

/* effect-5 */

.effect-5 > input:checked + span i,
.effect-5 > input:hover + span i {
	font-size: 25px;
}

	</style>

    </head>