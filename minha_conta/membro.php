<?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();

    // On récupère nos variables de session
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
    
    
    
    }else{
		
		
    // puis on le redirige vers la page d'accueil
    echo '<meta http-equiv="refresh" content="0;URL=../login/login.html">';
		
		}
    ?>


<!DOCTYPE html>
<html lang="pt-br" ng-app="CEUACA || Casa do Estudante Universitário Aparício Cora de Almeida">
<head>
<meta charset="utf-8">
<title>CEUACA || ..:: Casa do Estudante Universitário Aparício Cora de Almeida ::..</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Casa do Estudante Universitário Aparício Cora de Almeida">
<meta name="author" content="Brian Hooper">

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/extension.css" rel="stylesheet">
<link href="assets/css/typography.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="stylesheets/portfolio.css" rel="stylesheet"/>
<link href="stylesheets/isotope.css" rel="stylesheet">
<link href="stylesheets/colorbox.css" rel="stylesheet"/>
<link href="stylesheets/flexslider.css" rel="stylesheet"/>
<link href="stylesheets/hoverdir.css" rel="stylesheet"/>
<link href="stylesheets/jquery.fancybox-1.3.4.css" media="screen" rel="stylesheet"/>
<link href="stylesheets/price-table.css" rel="stylesheet" />
<link href="stylesheets/intro.css" rel="stylesheet" />
<link href="stylesheets/timeline.css" rel="stylesheet" />
<link href="stylesheets/jquery.tweet.css" rel="stylesheet"/>
<link href="stylesheets/responsive-nav.css" rel="stylesheet">
<link href="stylesheets/style.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">


<script src="javascripts/modernizr.custom.js"></script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link href="stylesheets/ie8.css" rel="stylesheet">
<![endif]-->



<style>
	
	
	
    #ticker ul.tweet_list {
        min-height: 80px;
        height:120px;
        overflow-y:hidden;
    }
    #ticker .tweet_list li {
        min-height: 80px;
        height:120px;
    }
    #colorbox{
        min-height: 1300px !important;
    }
    #cboxTitle{
        height: 30px !important;
        position: absolute !important;
        padding: 0px !important;
    }
    #cboxClose{
        position: absolute !important;
        margin-top: 15px !important;
        right: 0px !important
    }
    #cboxClose:hover{
        background: #777 url(images/close.png) no-repeat center center
    }
    #cboxContent{
        padding-top: 37px !important;
    }
</style>

<style>
<style>
	
	#inicio{
		background-color:red;
		}
		

</style>
</head>

<body >


<!--MAIN WRAPPER-->
<div class="main-wrapper">

<!-- Mobile Only Navigation - 2 types each for (480px to 640px) and (640px to 960px) wide device screens -->
<header id="mobile-header" class="clearfix hidden-desktop">
    <div id="nav">
      <ul>
        <!--<li><a class="scroll-link" href="#showcase" data-soffset="0">Showcase</a></li>-->
        <li><a class="scroll-link" href="membro.php" data-soffset="0">Início</a></li>
        
        <li><a class="scroll-link" href="#portfolio" data-soffset="0">Informes</a></li>
        <li><a class="scroll-link" href="user.php" data-soffset="0"><?php  echo  $_SESSION['login'] ;?></a></li>
        <!--<li><a class="scroll-link" href="#portfolio" data-soffset="0">Portfolio</a></li>-->
         <li><a class="scroll-link" href="#" data-soffset="0">Gerenciar</a></li>
        <li><a class="scroll-link" href="#contact" data-soffset="0">Contatos</a></li>
      </ul>
    </div>
</header>
    

<div   id="badge">
<a href="membro.php">
    <img style="width:100px;height:100px;" alt="Ceuaca" title="..: Inicio :.." src="images/ceuaca.gif"/>
</a>
</div>

<!-- INTRO SPLASH -->
<section id="inico"  class="intro master-section">
        <nav id="intro-nav">
            <ul class="ca-menu">
                    <li style="width:150px; height:160px; background-color:#6495ED;">
                        <a class="scroll-link" href="membro.php" data-soffset="100">
                            <span class="ca-icon"><img alt="About" title="About" src="images/icons/01.png"/></span>
                            <div style="padding-top:10px;" class="ca-content">
                                <h2 class="ca-main">Início</h2>
                                <h3  class="ca-sub">home</h3>
                            </div>
                        </a>
                    </li>
                   
                                      
                                       
                    <li style="width:150px; height:160px; background-color:#6495ED;">
                        <a class="scroll-link" href="#portfolio" data-soffset="100">
                            <span class="ca-icon"><img alt="Portofolio" title="portfolio" src="images/icons/01.png"/></span>
                            <div style="padding-top:10px;" class="ca-content">
                                <h2 class="ca-main">Informes</h2>
                                <h3 class="ca-sub">Atividades na casa</h3>
                            </div>
                        </a>
                    </li>
                    
                    <li style="width:150px; height:160px; background-color:#6495ED;">
                        <a class="scroll-link" href="user.php" data-soffset="100">
                            <span class="ca-icon"><img alt="login" title="Login" src="images/icons/01.png"/></span>
                            <div style="padding-top:10px;" class="ca-content">
								<h2 class="ca-main"><?php  echo  $_SESSION['login'] ;?></h2>
                                <h3 class="ca-sub">Espaço Morador</h3>
                                
                            </div>
                        </a>
                    </li>
                    
                                       
                                        
                    <li style="width:150px; height:160px; background-color:#6495ED;">
                        <a class="scroll-link" href="gerencia/adm.php" data-soffset="100">
                            <span class="ca-icon"><img alt="About" title="About" src="images/icons/01.png"/></span>
                            <div style="padding-top:10px;" class="ca-content">
								<h2 class="ca-main">Gerenciar</h2>
                                <h3 class="ca-sub">Adm do site</h3>
                                
                            </div>
                        </a>
                    </li>
                    
                    <li style="width:150px; height:160px; background-color:#6495ED;">
                        <a class="scroll-link" href="#contact" data-soffset="100">
                            <span class="ca-icon"><img alt="About" title="About" src="images/icons/01.png"/></span>
                            <div style="padding-top:10px;" class="ca-content">
								<h2 class="ca-main">Contatos</h2>
                                <h3 class="ca-sub">Entre em contato</h3>
                                
                            </div>
                        </a>
                    </li>
                    
                    
                    
                    <li style="width:150px; height:160px; background-color:#6495ED;">
                        <a class="scroll-link" href="#manifesto" data-soffset="100">
                            <span class="ca-icon"><img alt="Ceuaca Viva" title="Ceuaca Viva" src="images/icons/01.png"/></span>
                            <div style="padding-top:10px;" class="ca-content">
								<h2 class="ca-main">Ceuaca Viva</h2>
                                <h3 class="ca-sub">O Manifesto</h3>
                                
                            </div>
                        </a>
                    </li>
                  
                    <!--<li>
<a class="scroll-link" href="#portfolio" data-soffset="100">
<span class="ca-icon"><img alt="Portfolio" title="Portfolio" src="images/icons/04.png"/></span>
<div class="ca-content">
<h2 class="ca-main">Portfolio</h2>
<h3 class="ca-sub">Sharing our work</h3>
</div>
</a>
</li>-->
                    
                </ul>
            
        </nav>

        <a class="scroll-link" href="#showcase" data-soffset="100"><div id="scroll"></div></a>
</section>


<!-- Desktop Only NAVIGATION -->
<div style="background-color:#6495ED;" class="navigation hidden-phone hidden-tablet" >
<ul id="main-nav">
<li>
            <a class="scroll-link" href="membro.php" id="about-linker" data-soffset="100">Início</a>
        </li>
       

<li>
            <a class="scroll-link" href="#portfolio" id="portfolio-linker" data-soffset="100">Informes</a>
        </li>
<li class="logo-wrap">
            <a class="scroll-link logo" href="membro.php" data-soffset="100"><img style="width:100px; height:100px;" alt="renova" title="renova" src="images/ceuaca.gif"/></a>
        </li>
<li>
            <a class="scroll-link" href="user.php" id="newsreel-linker" data-soffset="100"><?php  echo  $_SESSION['login'] ;?></a>
        </li>



        
<li style="padding-left:40px;">
            <a class="scroll-link" href="#contact" id="contact-linker" data-soffset="100">Contatos</a>
        </li>
        
<li style="padding-left:40px;">
            <a class="scroll-link" href="gerencia/adm.php" id="contact-linker" data-soffset="100">Gerenciar</a>
        </li>
        
</ul>
</div>

<section style="background-color:#6495ED;" id="showcase" class="clearfix master-section">
<div class="wrapper">
    <div id="container-folio" class="scroll-content beneath-intro">

   </div><!-- CONTAINER FOLIO-->
</div><!-- WRAPPER -->
</section>




<section id="manifesto" class="clearfix master-section">

<section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid">
        <section class="container">
            <div class="row add-top-main">
                <article class="span12">
                 <div class="thumb-icon"><img alt="" title="Ceuaca Viva" src="images/icons/01.png"/></div>
                 <h1 class="main-heading"><span>Ceuaca Viva</span></h1>
                 <h3 class="promo-text"><span>O Manifesto</span></h3>
                </article>
            </div>
        </section><!--/ container-->
    </div><!--/ row-fluid-->
    </section><!--/ container-->

</section><!--/ page-->



<section id="about-end">

    <section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid">
        <section class="container">

            <div class="row add-top">
                <article class="span12">
                    <div class="wrap-pad">
                         <div class="shoutout">NoogaJS is an open source JavaScript community based in <a href="http://thegigcity.com" target="_blank">The Gig City</a>.<br/><br/> Chattanooga has quickly emerged as a hotbed of innovation. Our vibrant community of starters, artists, designers, and developers is focused on crowd accelerated innovation and blazing new trails in the technology landscape.<br/></div>
                        <div class="shoutout">In much the same way that <a href="http://thegigcity.com" target="_blank">The Gig City</a> is opening doors to new models of learning, playing, and working on a 600 square mile gigabit-per-second fiber network... JavaScript is just as dramatically changing the way in which we design, deliver, and scale real-time web and mobile applications.<br/><br/>
                        We are a passionate group of workafrolics who enjoy working and playing with all things open source, and of course... JavaScript.
                       
                            <h4 style="margin-bottom:50px;">Brian Hooper &amp; Andrew Pierce</h4>
                        </div>
                    </div>
                </article>
            </div>

           

<!--
<article class="span3 bg-white team-block">
<div class="team-block-inner">
<img alt="renova" title="renova" src="images/team/03.png" >
<h3 class="col-blue text-center">Karl Bendner</h3>
<h6 class="text-center"><span>CEO / Founder</span></h6>
<nav class="team-social text-center">
<a href="#"><img alt="renova" title="renova" src="images/social/cool/twitter.png" ></a>
<a href="#"><img alt="renova" title="renova" src="images/social/cool/dribbble.png" ></a>
<a href="#"><img alt="renova" title="renova" src="images/social/cool/facebook.png" ></a>
</nav>
</div>
</article>

<article class="span3 bg-white team-block">
<div class="team-block-inner">
<img alt="renova" title="renova" src="images/team/04.png" >
<h3 class="col-blue text-center">Karl Bendner</h3>
<h6 class="text-center"><span>CEO / Founder</span></h6>
<nav class="team-social text-center">
<a href="#"><img alt="renova" title="renova" src="images/social/cool/twitter.png" ></a>
<a href="#"><img alt="renova" title="renova" src="images/social/cool/dribbble.png" ></a>
<a href="#"><img alt="renova" title="renova" src="images/social/cool/facebook.png" ></a>
</nav>
</div>
</article>
-->
            
        </section><!--/ container-->
    </div><!--/ row-fluid-->
    </section><!--/ container-->

</section><!--/ page-->



<section id="portfolio" class="bg-dark master-section">

    <section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid add-bottom-main">
        <section class="container">
            <div class="row add-top-main">
                <article class="span12">
                    <div class="thumb-icon"><img alt="renova" title="renova" src="images/icons/04-in.png"/></div>
                    <h1 class="main-heading"><span>..: Informes da CEUACA :..</span></h1>
                    <h3 class="promo-text-alt darken"><span>Atividades na casa...</span></h3>
                </article>
            </div>

            <div class="row">
            <article class="span12">
            <section id="options" class="clearfix">
                <ul id="filters" class="option-set clearfix" data-option-key="filter">
                <li class="inner-link"><a href="#filter" data-option-value="*" class="selected">all</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".Assembleia">Assembleia</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".rateio">Rateio</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".Deliberativo">Con. Deliberativo</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".Fiscal">Con. Fiscal</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".Cultural">Dept. Cultural</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".Interno">Dept. Interno</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".Infra">Dept. Infra</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".Financeiro">Dept. Financeiro</a></li>
                
                </ul>
            </section> <!-- #options -->
            </article><!-- span12 : ends -->
        </div><!-- row : ends -->


        <div class="row">
                <article class="span12">

                    <div id="container" class="clearfix portfolio">
    
      
          
    
    <div class="element rateio height-02 folio-item">
            <iframe width="500" height="450" src="informes/rateio.php" frameborder="0" allowfullscreen></iframe>
            <a class="fancythumb" href="informes/rateio.php" title="Rateio"><div class="icon-zoom-sosa folio-trigger-icon"></div></a>
            
            <h5 class="folio-subtitle titles">Data e hora do rateio</h5>
            
            
        </div>
       

        <div class="element Assembleia height-01 folio-item">
            <iframe width="500" height="450" src="informes/assembleia.php" frameborder="0" allowfullscreen></iframe>
            <a class="fancythumb" href="informes/assembleia.php" title="Assembleia"><div class="icon-zoom-sosa folio-trigger-icon"></div></a>
            
            <h5 class="folio-subtitle titles">Data de Assembleia</h5>
        </div>



        <div class="element Cultural height-01 folio-item">
            <iframe width="500" height="450" src="informes/cultural.php" frameborder="0" allowfullscreen></iframe>
            <a class="fancythumb" href="informes/cultural.php" title="Cultural"><div class="icon-zoom-sosa folio-trigger-icon"></div></a>
            
            <h5 class="folio-subtitle titles">Reunião</h5>
            
        </div>
    


        <div class="element Fiscal height-02 folio-item">
           <iframe width="500" height="450" src="informes/fiscal.php" frameborder="0" allowfullscreen></iframe>
            <a class="fancythumb" href="informes/fiscal.php" title=" Conselho Fiscal"><div class="icon-zoom-sosa folio-trigger-icon"></div></a>
            
            <h5 class="folio-subtitle titles">Reunião</h5>
        </div>


        <div class="element Infra height-02 folio-item">
            <iframe width="500" height="450" src="informes/infra.php" frameborder="0" allowfullscreen></iframe>
            <a class="fancythumb" href="informes/infra.php" title="Infra"><div class="icon-zoom-sosa folio-trigger-icon"></div></a>
            
            <h5 class="folio-subtitle titles">Reunião</h5>
        </div>


        <div class="element Interno height-01 folio-item">
            <iframe width="500" height="450" src="informes/interno.php" frameborder="0" allowfullscreen></iframe>
            <a class="fancythumb" href="test.html" title="Interno"><div class="icon-zoom-sosa folio-trigger-icon"></div></a>
            
            <h5 class="folio-subtitle titles">Reunião</h5>
        </div>



        <div class="element Deliberativo height-01 folio-item">
            <iframe width="500" height="450" src="informes/deliberativo.php" frameborder="0" allowfullscreen></iframe>
            <a class="fancythumb" href="informes/deliberativo.php" title="Conselho Deliberativo"><div class="icon-zoom-sosa folio-trigger-icon"></div></a>
            
            <h5 class="folio-subtitle titles">Reunião</h5>
        </div>

 
    
      <div class="element Financeiro height-01 folio-item">
           <iframe width="500" height="450" src="informes/financeiro.php" frameborder="0" allowfullscreen></iframe>
            <a class="fancythumb" href="informes/financeiro.php" title="Financeiro"><div class="icon-zoom-sosa folio-trigger-icon"></div></a>
            
            <h5 class="folio-subtitle titles">Reunião</h5>
        </div>


        


        
      
        



        
   
  </div> <!-- #container -->
                    
                </article><!-- span12 : ends -->
            </div><!-- row : ends -->


            
        </section><!--/ container-->
    </div><!--/ row-fluid-->
</section>
</section><!--/ page-->




<section id="contact" class="bg-dark master-section">

    <section class="container-fluid inner mob-bg-remove">
		<div class="row-fluid">
			<section class="container">
				<div class="row add-top-main">
					<article class="span12">
						<div class="thumb-icon"><img  title="renova" src="images/icons/13.png"/></div>
						<h1 class="main-heading"><span>Contato</span></h1>
                    
                    
                    <div class="container">
						<p class="navbar-text pull-left">Envie uma mensagem</p>
						<a href="./messagInterno/contatoInterno.php"  class="navbar-btn btn btn-warning pull-right btn-lg">Enviar uma mensagem</a>
					</div>
                 
					</article>
				</div>

            
			</section>
		</div><!--/ row-fluid-->
    </section><!--/ container-->
	
</section><!--/ page-->
	

	




    <!-- page:starts-->
    <section class="footer container-fluid section">
        <div class="row-fluid">
            <section class="container">
                <div class="row">
                    <article class="contactus span12 text-center">
                        <h1>Ceuaca <span>|</span> <a href="http://www.ceuaca.com.br" target="_blank">Casa de Estudante</a>
                            <br/>email <span>|</span> <a href="#">ceuaca@gmail.com</a>
                            <p style="color:white;">End.: <strong style="color:#DAA520;">Rua Riachuelo 1355</strong> -Esquina com
					a Borges de Medeiros - Centro Histórico <br> Porto Alegre - Rio Grande do
					Sul - Brasil <strong style="color:#DAA520;"> CEP: 90.010-271</strong> <br>  Telefone: <strong style="color:#DAA520;">(51) 3224.7215 </strong> </h1>
                    </article>
                 </div>



                 <div class="row foot-soc">
                    <article class="span12 text-center">
                        <nav class="social-links">
                            <a class="facebook" href="http://facebook.com/" target="_blank">
                                <img alt="renova" title="Facebook" src="images/footer_facebook.png" >
                            </a>
                            <a class="twitter" href="http://twitter.com/" target="_blank">
                                <img alt="renova" title="Twitter" src="images/footer_twitter.png" >
                            </a>
                            <a class="google" href="http://google.com/" target="_blank">
                                <img alt="renova" title="Google+" src="images/footer_google.png" >
                            </a>
                            <a class="linkedin" href="http://linkedin.com/" target="_blank">
                                <img alt="renova" title="Linkedin" src="images/footer_linkedin.png" >
                            </a>
                                                       
                        </nav>
                    </article>
                 </div>

            </section>
        </div>
    </section>



<!--
<section class="footer-down container-fluid section">
<div class="row-fluid">

<section class="container">
<div class="row">
<article class="span12">
<div class="copyright text-center">
<p>Copyright &copy; 2013 Designova.<br/>A premium theme from <a href="http://www.designova.net">Designova</a></p>
</div>
</article>
</div>

</section>
</div>
</section>-->
    <!--page:ends-->



<!--main-wrapper:ends-->





<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="javascripts/jquery.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-transition.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-alert.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-dropdown.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-scrollspy.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-tab.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-popover.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-button.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-collapse.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-carousel.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-affix.js" type="text/javascript"></script>
<script src="javascripts/jquery.waitforimages.js"></script>
<script src="javascripts/modernizr.custom.js" type="text/javascript"></script>
<script src="javascripts/waypoints.min.js" type="text/javascript"></script>
<script src="javascripts/jquery.hoverdir.js" type="text/javascript"></script>
<script src="javascripts/jquery.backstretch.min.js" type="text/javascript"></script>	
<script src="javascripts/jquery.colorbox.js" type="text/javascript"></script>
<script src="javascripts/jquery.isotope.min.js" type="text/javascript"></script>
<script src="javascripts/jquery.fancybox-1.3.4.js" type="text/javascript" ></script>
<script type="text/javascript" src="javascripts/jquery.tweet.js"></script>
<script defer src="javascripts/jquery.flexslider.js"></script>
<script src="javascripts/form-validation.js" type="text/javascript"></script>
<script src="javascripts/responsive-nav.js" type="text/javascript" ></script>
<script src="javascripts/scroll.js" type="text/javascript"></script>
<script src="javascripts/script.js" type="text/javascript"></script>

    <script>
        var navigation = responsiveNav("#nav", { // Selector: The ID of the wrapper
          animate: true, // Boolean: Use CSS3 transitions, true or false
          transition: 400, // Integer: Speed of the transition, in milliseconds
          label: "Menu", // String: Label for the navigation toggle
          insert: "after", // String: Insert the toggle before or after the navigation
          customToggle: "", // Selector: Specify the ID of a custom toggle
          openPos: "relative", // String: Position of the opened nav, relative or static
          jsClass: "js", // String: 'JS enabled' class which is added to <html> el
          init: function(){}, // Function: Init callback
          open: function(){}, // Function: Open callback
          close: function(){} // Function: Close callback
        });
    </script>


<!-- Full Screen Background Images are defined via JS here: -->
    <script>
        $.backstretch([
          "images/bg1.jpg",
          //"images/bg2.jpg",
          //"images/bg3.jpg"
        ], {
            fade: 3000,
            duration: 4000
        });
    </script>

</body>
</html>
