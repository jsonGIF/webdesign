<?php 

	include 'header.php';

?>

<style>

html {
  background-color: #000000;
}
	
body {
	background:  url(img/landingpage.jpg);
	background-size: 1320px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	min-width: 1200px;
	display: none;
}

#headline1 {
color: #E8E8E8;
font-family: "Duru Sans", sans-serif;
font-size: 77px;
width: 900px;
margin: 0;
margin-left: -60%;
margin-top: 200px;
}

#headline2 {
	margin-left: -7% !important;
}

#wrapper {
	background-color: #FFFFFF;
	height: 50%;
	width: 70%;
	margin: 120px 0 0 15%;
	position: absolute;
	opacity: 0.9;
}

h1 {
	font-family: 'whitney_htfbook';
	font-size: 2em;
}

h2 {
	font-family: 'whitney_htfbook';
	font-size: 1.8em;
}

#sec_par {
	margin-top: 60px;
	font-family: index-headline;
}

h1 {
	margin: 30px 30px 30px 30px;
}

h2 {
	margin: -10px 30px 30px 30px;
}

p {
	font-family: index-headline;
	margin: -20px 30px 30px 30px;
}

#back {
  width: 70px;
  height: 35px;
  margin-left: 30px;
  cursor: pointer;
}

#back a {
  text-decoration: none;
  font-size: 20px;
  color: red;
  font-family: next-button;
  letter-spacing: 1px;
}

#back a:hover{
  color: #000000;
      transition:0.3s;  
}

ul {
	font-family: index-headline;
	margin: 0;
	margin-left: -10px;
	margin-top: -20px;
	margin-bottom: 15px;
}

li {
	list-style-type: none;
	display: inline;
}

li:after {
	content: '  |  ';
	color: #000;
}

li:first-child:after {
	content:  "";
}

li:last-child:after {
	content: "";
}

li a {
	text-decoration: none;
	color: #000000;
}

li a:hover {
	color: #888;
}

li a:visited {
	color: #888;
}

</style>

</head>
<body>

	<div id="wrapper">

		<h1>The Sexelections</h1>
		<p>The ‘Sex Elections’ is a project created by four Hyper Island students. Working with a data set created by United Minds surveying over 
			3000 people in a national health study about the Swedes' sex habits, we choose to see if we could create stories around political and 
			sexual preferences.</p>

		<h2>How we did it</h2>
		<p id="sec_par">
		For the sake of simplicity we decided to focus on Sweden’s two biggest parties: the Social Democrats and the Moderaterna. Looking at the 
		views of a total of 1256 people we’re treating selected questions in the dataset as small “elections” where we set out to find the prefered 
		sexposition of the parties. Which party is having the most sex and where are they having it? The wins is determined in percentages. </p>


<ul>
<li>Made by:</li>
<li><a href="http://www.diegofria.com" alt="Diego Fria - Portfolio" title="To Diego Frias portfolio" target="_blank">Diego Fria</a></li>
<li><a href="http://cargocollective.com/vanjafolin" alt="Vanja Folin - Portfolio" title="To Vanja Folins portfolio" target="_blank">Vanja Folin</a></li>
<li><a href="http://www.jimkollevik.se" alt="Jim Kollevik - Portfolio" title="To Jim Kolleviks portfolio" target="_blank">Jim Kollevik</a></li>
<li><a href="http://www.joposselt.com" alt="Jo Posselt - Portfolio" title="To Jo Posselts portfolio" target="_blank">Jo Posselt</a></li>
</ul>
		<div id="back">
			<a onclick="goBack()">Go back</a>
		</div><!-- end back -->

	</div><!-- end wrapper -->

	<script>
	function goBack()
  {
  window.history.back()
  }
</script>

</body>
</html>