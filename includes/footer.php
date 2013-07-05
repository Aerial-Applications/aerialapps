		<!-- 
		<h4 style="text-align: center;">Check back easily by bookmarking this in your favorite browser!<br />
		You can also <a id="bookmarker" href="#" rel="sidebar" title="Bookmark this Page!">Click Here</a>, or use a shortcut like Ctrl+D.</h4><br />
		-->
		
		
		<!-- NEW, AND OLD DYNAMIC breadcrumb 
		
		NEW: 
		< ?php if ($pagename == 'home'){ echo '<li class="active"><strong><i class="icon-home icon-black" title="Home"></i></strong></li>'; } else { echo '<li><strong><a href="/"><i class="icon-home icon-black" title="Home"></i></a></strong></li>'; }?>
		
		OLD: 
		<li < ?php if ($pagename == 'home'){ echo 'class="active" style="background-color: red;"'; } ?>><strong><a href="/"><i class="icon-home icon-black" title="Home"></i></a></strong></li>
		
		-->
		
		
		<!-- 
		Fluorine Uranium Carbon Potassium Bismuth Technetium Helium Sulfur Germanium Thulium Oxygen Neon Yttrium
		-->
		
		
		<div class="container marketing" style="margin-top: 40px;">
		
		
			<!-- margin: 0px 10% 20px 10%; -->
			<ul class="breadcrumb">
				<li><strong><a href="info" id="info" rel="clickover"><i class="icon-info-sign icon-black" title="Information Clickover"></i></a></strong></li>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'info'){ echo '<li class="active"><strong><i class="icon-info icon-black" title="Information Page"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=info"><i class="icon-info icon-black" title="Information Page"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'home'){ echo '<li class="active"><strong><i class="icon-bolt icon-black" title="Home"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=home"><i class="icon-bolt icon-black" title="Home"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'news'){ echo '<li class="active"><strong><i class="icon-bullhorn icon-black" title="News"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=news"><i class="icon-bullhorn icon-black" title="News"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'about'){ echo '<li class="active"><strong><i class="icon-question-sign icon-black" title="About"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=about"><i class="icon-question-sign icon-black" title="About"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'about/services'){ echo '<li class="active"><strong><i class="icon-key icon-black" title="Services"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=about/services"><i class="icon-key icon-black" title="Services"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'about/products'){ echo '<li class="active"><strong><i class="icon-shopping-cart icon-black" title="Products"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=about/products"><i class="icon-shopping-cart icon-black" title="Products"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'about/portfolio'){ echo '<li class="active"><strong><i class="icon-briefcase icon-black" title="Portfolio"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=about/portfolio"><i class="icon-briefcase icon-black" title="Portfolio"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'tools'){ echo '<li class="active"><strong><i class="icon-wrench icon-black" title="Tools"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=tools"><i class="icon-wrench icon-black" title="Tools"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'tools/software'){ echo '<li class="active"><strong><i class="icon-laptop icon-black" title="Software"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=tools/software"><i class="icon-laptop icon-black" title="Software"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'tools/code'){ echo '<li class="active"><strong><i class="icon-code icon-black" title="Code"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=tools/code"><i class="icon-code icon-black" title="Code"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'tools/frameworks'){ echo '<li class="active"><strong><i class="icon-building icon-black" title="Frameworks"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=tools/frameworks"><i class="icon-building icon-black" title="Frameworks"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'tools/hardware'){ echo '<li class="active"><strong><i class="icon-hdd icon-black" title="Hardware"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=tools/hardware"><i class="icon-hdd icon-black" title="Hardware"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'links'){ echo '<li class="active"><strong><i class="icon-link icon-black" title="Links"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=links"><i class="icon-link icon-black" title="Links"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<li><a href="https://github.com/Aerial-Applications" target="_blank"><i class="icon-github-alt icon-black" title="GitHub"></i></a></li>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<?php if ($pagename == 'contact'){ echo '<li class="active"><strong><i class="icon-envelope-alt icon-black" title="Contact"></i></strong></li>'; } else { echo '<li><strong><a href="?pagename=contact"><i class="icon-envelope-alt icon-black" title="Contact"></i></a></strong></li>'; }?>
					&nbsp;<span class="divider" style="color: black;">&raquo;</span>&nbsp;
				<li><strong><a id="bookmarker" href="#" rel="sidebar" title=""><i class="icon-bookmark-empty icon-black" title="Bookmark this Page!"></i></a></strong></li>
			</ul><!-- / .breadcrumb -->
			
			
		</div><!-- / .container .marketing -->
		
		
		<div id="credit" style="text-align: center;">
		
		
		<!-- pull-left DISABLED -->
		<!-- With HTML5 small is now a wrapper for 'Small Print'. Perfect for Copyright! -->
		<small class="muted credit"><strong>Copyright &copy; 2007-13 <a href="http://jessegangi.com" target="_blank">Jesse Gangi</a>, <a href="http://aerialapps.com" target="_blank">Aerial Applications</a><!-- , <a href="http://aerialmediadesign.com">Aerial Media Design</a>, <a href="http://aerialadvertising.com">Aerial Advertising</a>, and <a href="http://aerialcorporations.com" target="_blank">Aerial Corporations</a> --> - Duluth, Minnesota<br />
		Built with <a href="http://html5boilerplate.com">HTML5 Boilerplate</a>, <a href="http://twitter.github.io/bootstrap" target="_blank">Bootstrap</a>, and <a href="http://fortawesome.github.io/Font-Awesome" target="_blank">Font Awesome</a><br />
		<span style="color: red;">I &nbsp;&hearts;&nbsp; <a href="http://en.wikipedia.org/wiki/HTML5" target="_blank" style="color: red;">HTML5</a> &nbsp;&amp;&nbsp; <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets#CSS_3" target="_blank" style="color: red;">CSS3</a> &nbsp;&amp;&nbsp; <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" style="color: red;">JavaScript</a> &nbsp;&amp;&nbsp; <a href="https://en.wikipedia.org/wiki/PHP" target="_blank" style="color: red;">PHP</a></span></strong></small><!-- / .muted .credit -->
		
		
		</div><!-- / #credit -->
		
		
		<!-- pull-right DISABLED -->
		<!-- <p class=""><a href="pages/privacy.html">Privacy</a> &middot; <a href="pages/toc.html">Terms</a> &middot; <a href="#">Back to top</a> &middot; <a href="#" id="info" rel="clickover" class=""><i class="icon-info icon-black"> Info</i></a></p> -->
		
		
	<!-- 
		Jesse Gangi
		jessegangi.com
		218 310 2447
		jgangi @ aerialapps.com
		@Ganginator
	-->