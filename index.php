<?php
	defined('_JEXEC') or die;
	JHtml::_('behavior.framework', true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700|Open+Sans&subset=latin,greek-ext' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="templates/<?php echo $this->template ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="templates/<?php echo $this->template ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">

	
	<!-- Template CSS -->
	<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />	
	<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/system.css" type="text/css" />	

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="templates/<?php echo $this->template ?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="templates/<?php echo $this->template ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="templates/<?php echo $this->template ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="templates/<?php echo $this->template ?>/images/ico/apple-touch-icon-57-precomposed.png">
	
	<!-- JDOC Head tag loads all the header and meta information from site config and content. -->
	<jdoc:include type="head" />	
	<style type="text/css">
      .container-fluid {
        margin: 0 auto;
        max-width: 1140px;
      }
    </style>	
	
  </head>

  <body id="page">
<div id="block-main">
<div id="block-bg">

	<header id="branding" role="banner">
		<div class="fill">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span8">
						<h1 id="site-title">
						<jdoc:include type="modules" name="logo" style="logo" />
						</h1>
					</div>
					<div class="span4">
						<jdoc:include type="modules" name="toolbar-r" style="toolbar-r" />
					</div>
				</div>
			</div>
			
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
			
						<div class="appsmenu-wrapper">
						<div class="navbar" id="appsmenu">
						  <div class="navbar-inner2">
							<div class="container">
							  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </a>
							  <div class="nav-collapse">
								<ul class="nav">
								  <jdoc:include type="modules" name="headermenu" style="headermenu" />
								</ul>
							  </div><!--/.nav-collapse -->
							</div>
						  </div>
						</div>			
						</div>
			
					</div>
				</div>
			</div>
			
			
			
			
		</div><!-- .fill -->
	</header><!-- #branding -->

	<div class="container-fluid">
		
		<div id="mainmenu">
			<div class="row-fluid">
				<div class="span12">

					<div class="navbar">
					  <div class="navbar-inner">
						
						  <a class="brand" href="index.php"><jdoc:include type="modules" name="top-a" style="top-a" /></a>

							<ul class="nav pull-right">
							  <jdoc:include type="modules" name="menu" style="" />
							</ul>

						
					  </div>
					</div>					
					
				</div>
			</div>
		</div>
		
		<!-- main component content -->
		<?php if($this->countModules('sidebar-a')) : ?>
		
		<div class="row-fluid">
			<div class="span9">
				<div id="content">
				<div id="content-main">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
				</div>
			</div>
			<div class="span3">
				<div id="sidebar">
				
					<jdoc:include type="modules" name="sidebar-a" style="sidebar" />	
				
				</div>
			</div>
		</div>
		
		<?php else : ?>
		<div id="content">
		<div class="row-fluid">
			<div class="span12">
				<div id="content-main">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
			</div>
		</div>
		</div>
		<?php endif; ?>
		
		
		<!-- end of main component -->

	</div> <!-- /container -->

	<footer id="colophon" role="contentinfo">
		<div id="beta">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
						<jdoc:include type="modules" name="bottom-b" style="bottom-b" />
					</div><!-- .span12 -->				
				</div>
			</div><!-- .container -->
		</div><!-- #beta -->
		<div id="credits">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
						<jdoc:include type="modules" name="footer" style="footer" />
					</div><!-- .span12 -->				
				</div>
			</div><!-- .container -->
		</div><!-- #beta -->		
	</footer>	
	
</div><!-- #block-bg -->	
</div><!-- #block-main -->	

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!--
	
	<script src="templates/<?php echo $this->template ?>/js/jquery-ui-1.8.18.custom.min.js"></script>
	-->
    <script src="templates/<?php echo $this->template ?>/js/jquery-1.7.2.min.js"></script>
    <script src="templates/<?php echo $this->template ?>/assets/js/bootstrap.min.js"></script>
	
  </body>
</html>
