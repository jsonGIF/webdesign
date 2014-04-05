<html>

<meta charset="UTF-8">
<meta name="description" content="Sexelections - Which is the more potent party">
<meta name="author" content="Jim Kollevik, Diego Fria, Vanja Folin, Jo Posselt">

<meta property="og:title" content="Sexelections - Which is the more potent party" />
<meta property="og:description" content="Sexelections - a project made by four students at the program Digital Data Strategy (Hyper Island)." />

<link rel="icon" type="image/png" href="img/favicon_sexelection.jpg">

<head>

  <title>Sex Elections</title>
  <link href="http://fonts.googleapis.com/css?family=Arbutus+Slab" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Duru+Sans" rel="stylesheet" type="text/css">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-lightbox.min.css" type="text/css">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


	<script type="text/javascript">
	
	$(document).ready(function() {
    $("body").css("display", "none");
 
    $("body").fadeIn(2000);
 
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(2000, redirectPage);      
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30373155-6', 'sexelections.se');
  ga('send', 'pageview');

</script>