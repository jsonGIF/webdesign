<?php 

  include 'header.php';

?>


</head>
<body>

<div id="headline">
	
  <h1 id="headline1">Which party is more of a kinky party?</h1>

</div>


<div class="hover_s"></div>
<div class="hover_s_bw"></div>

<div id="buttonleft">
  <h2>Social Democrats</h2>
</div>

<div id="q1_answer">
  <h1>66%*</h1>
</div><!-- end q1 answer -->

<div class="answer" style="margin-left: 15%; margin-top: 380px;">

  <h2>The Social Democrats might be against a police state, but they do love them handcuffs and whips in the bedroom.</h2>

</div><!-- end answer -->

<div class="hover_m"></div>
<div class="hover_m_bw"></div>

<div id="buttonright">
  <h2>Moderates</h2>
</div>

<div id="q1_answer_m">
  <h1>34%*</h1>
</div><!-- end q1 answer -->

<div class="progress">

  <h2 id="r_answer">Hell yeah!</h2>
  <h2 id="w_answer">No no no!</h2>

</div><!-- end progress -->

<div id="bottom">

  <div id="lang">
  <ul>
    <li><a href="#" alt="English" title="English">EN</a></li>
    <li><a href="http://www.sexelections.se" alt="Swedish" title="Swedish">SV</a></li>
  </ul>

</div><!-- end lang -->

<div id="icons">
    <a href="http://twitter.com/share?text=text goes here&url=http://url goes here&hashtags=sexelection,website" target="_blank"><img class="icons" src="img/twitter.png"></a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=sexelections.se" target="_blank"><img class="icons" src="img/facebook.png"></a>
    <a href="http://www.eng.sexelections.se" title="home" alt="Home page"><img src="img/home.png" class="icons"></a>
    <a href="info.php"><img class="icons" src="img/info.png"></a>
</div>

<div id="buttonnext">
  <a href="q6.php">NEXT!</a>

</div>

</div>

<script type="text/javascript">

  $('#buttonleft').hover(function() {
    $('.hover_s').fadeIn('slow');
      $('#buttonleft').mouseleave(function() {
        $('.hover_s').fadeOut('slow');
      });
  });

</script>

<script type="text/javascript">

  $('#buttonright').hover(function() {
    $('.hover_m').fadeIn('slow');
      $('#buttonright').mouseleave(function() {
        $('.hover_m').fadeOut('slow');
      });
  });

</script>

<script type="text/javascript">

$( "#buttonleft" ).click(function() {
  $( "#q1_answer" ).fadeIn( "slow" );
  $( "#q1_answer_m").fadeIn( "slow");
  $( "#q1_answer_m h1").css( "color", "#b7b7b7");
  $( ".hover_m_bw").fadeIn( "slow" );
  $( ".answer").fadeIn( "slow" );
  $( "#buttonright").css("background-color","#DBDCDC");
  $( "#buttonnext").fadeIn("slow");
  $( ".progress #r_answer").fadeIn("slow").delay( 1000).fadeOut();;
  $( "div" ).off();
});

</script>

<script type="text/javascript">

$( "#buttonright" ).click(function() {
  $( "#q1_answer" ).fadeIn( "slow" );
  $( "#q1_answer_m").fadeIn( "slow");
  $( "#q1_answer_m h1").css( "color", "#b7b7b7");
  $( ".hover_s").fadeIn( "slow" );
  $( ".hover_m_bw").fadeIn( "slow" );
  $( "#buttonright").css("background-color","#DBDCDC");
  $( ".answer").fadeIn( "slow" );
  $( "#buttonnext").fadeIn("slow");
  $( ".progress #w_answer").fadeIn("slow").delay( 1000).fadeOut();;
  $( "div" ).off();
});

</script>

</body>
</html>