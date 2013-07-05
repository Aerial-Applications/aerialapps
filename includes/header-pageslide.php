<div class="navbar-wrapper">


	<div class="container">
	
	
		<!-- navbar-fixed-top REMOVED navbar-inverse -->
		<div class="navbar">
		
		
			<div class="navbar-inner">
			
			
				<!-- DISABLED pageslide nav button 
				<a class="btn btn-navbar" href="javascript:$.pageslide({ direction: 'right', href:'#modal' })" data-toggle="collapse" data-target="#modal" style="float: left;">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				-->
				
				
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				
				<a href="/" class="brand"><i class="icon-bolt icon-black"></i>&nbsp;&nbsp;Aerial Applications</a>
				
				
				<div id="fullnav" class="nav-collapse collapse" style=" text-align: center;">
				
				
					<ul class="nav">
					
						<li <?php if ($pagename == 'news'){ echo 'class="active"'; } ?>><a href="?pagename=news"><i class="icon-bullhorn icon-black"></i>&nbsp;&nbsp;News&nbsp; </a></li>
						
						<li class="dropdown <?php if ($pagename == 'about'){ echo 'active'; } ?>">
							<a href="?pagename=about" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-question-sign icon-black"></i>&nbsp;&nbsp;About <b class="caret"></b>&nbsp; </a>
							<ul class="dropdown-menu">
								<li <?php if ($pagename == 'about/services'){ echo 'class="active"'; } ?>><a href="?pagename=about/services"><i class="icon-key icon-black"></i>&nbsp;&nbsp;Services&nbsp; </a></li>
								<li <?php if ($pagename == 'about/products'){ echo 'class="active"'; } ?>><a href="?pagename=about/products"><i class="icon-shopping-cart icon-black"></i>&nbsp;&nbsp;Products&nbsp; </a></li>
								<li <?php if ($pagename == 'about/portfolio'){ echo 'class="active"'; } ?>><a href="?pagename=about/portfolio"><i class="icon-briefcase icon-black"></i>&nbsp;&nbsp;Portfolio</a></li>
							</ul><!-- / .dropdown-menu -->
						</li><!-- / .dropdown -->
						
						<li class="dropdown <?php if ($pagename == 'tools'){ echo 'active'; } ?>">
							<a href="?pagename=tools" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-black"></i>&nbsp;&nbsp;Tools <b class="caret"></b>&nbsp; </a>
							<ul class="dropdown-menu">
								<li <?php if ($pagename == 'tools/software'){ echo 'class="active"'; } ?>><a href="?pagename=tools/software"><i class="icon-laptop icon-black"></i>&nbsp;&nbsp;Software</a></li>
								<li <?php if ($pagename == 'tools/code'){ echo 'class="active"'; } ?>><a href="?pagename=tools/code"><i class="icon-code icon-black"></i>&nbsp;&nbsp;Code</a></li>
								<li <?php if ($pagename == 'tools/frameworks'){ echo 'class="active"'; } ?>><a href="?pagename=tools/frameworks"><i class="icon-building icon-black"></i>&nbsp;&nbsp;Frameworks</a></li>
								<li <?php if ($pagename == 'tools/hardware'){ echo 'class="active"'; } ?>><a href="?pagename=tools/hardware"><i class="icon-hdd icon-black"></i>&nbsp;&nbsp;Hardware&nbsp; </a></li>
							</ul><!-- / .dropdown-menu -->
						</li><!-- / .dropdown -->
						
					</ul><!-- / .nav -->
					
					<ul class="nav pull-right">
					
						<li class="dropdown <?php if ($pagename == 'links'){ echo 'active'; } ?>">
							<a href="?pagename=links" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-link icon-black"></i>&nbsp;&nbsp;Links <b class="caret"></b>&nbsp; </a>
							<ul class="dropdown-menu">
								<li><a href="https://jessegangi.com" target="_blank"><i class="icon-user icon-black"></i>&nbsp;&nbsp;Jesse Gangi .Com&nbsp; </a></li>
								<li><a href="http://www.linkedin.com/pub/jesse-gangi/20/244/b14" target="_blank"><i class="icon-linkedin icon-black"></i>&nbsp;&nbsp;LinkedIn - Jesse Gangi&nbsp; </a></li>
								<li><a href="https://github.com/Ganginator" target="_blank"><i class="icon-github-alt icon-black"></i>&nbsp;&nbsp;Github - Ganginator&nbsp; </a></li>
							</ul><!-- / .dropdown-menu -->
						</li><!-- / .dropdown -->
						
						<li <?php if ($pagename == 'contact'){ echo 'class="active"'; } ?>><a href="?pagename=contact"><i class="icon-envelope-alt icon-black"></i>&nbsp;&nbsp;Contact&nbsp;</a></li>
						
					</ul><!-- / .nav .pull-right -->
					
					
				</div><!-- / #fullnav .nav-collapse .collapse -->
				
				
				<!-- UNECESSARY? WAS USED FOR pageslide -->
				<div id="modal" class="navbar navbar-inverse" style="display: none; text-align: center;">
				
				
					<a href="/" class="brand">Jesse Gangi</a>
					
					
					<ul class="nav nav-pills nav-stacked">
					
						<li class="active"><a href="/"><i class="icon-home icon-black"></i>&nbsp;&nbsp;Home</a></li>
						<li><a href="?pagename=contact"><i class="icon-envelope icon-black"></i>&nbsp;&nbsp;Contact</a></li>
						
						<li class="dropdown">
							<a href="?pagename=about" class="dropdown-toggle" data-toggle="dropdown">&nbsp;&nbsp;About <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?pagename=about/experience"><i class="icon-certificate icon-black"></i>&nbsp;&nbsp;Experience</a></li>
								<li><a href="?pagename=about/portfolio"><i class="icon-briefcase icon-black"></i>&nbsp;&nbsp;Portfolio</a></li>
								<li><a href="?pagename=about/activities"><i class="icon-star-empty icon-black"></i>&nbsp;&nbsp;Activities</a></li>
								<li><a href="?pagename=about/education"><i class="icon-eye-open icon-black"></i>&nbsp;&nbsp;Education</a></li>
							</ul><!-- / .dropdown-menu -->
						</li><!-- / .dropdown -->
						
						<li class="dropdown">
							<a href="?pagename=links" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-link icon-black"></i>&nbsp;&nbsp;Links <b class="caret"></b>&nbsp; </a>
							<ul class="dropdown-menu">
								<li><a href="http://www.linkedin.com/pub/jesse-gangi/20/244/b14" target="_blank"><i class="icon-linkedin icon-black"></i>&nbsp;&nbsp;LinkedIn&nbsp; </a></li>
								<li><a href="https://github.com/Ganginator" target="_blank"><i class="icon-github-alt icon-black"></i>&nbsp;&nbsp;Github&nbsp; </a></li>
							</ul><!-- / .dropdown-menu -->
						</li><!-- / .dropdown -->
						
						<li class="dropdown">
							<a href="?pagename=tools" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-black"></i>&nbsp;&nbsp;Tools <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?pagename=tools/software"><i class="icon-laptop icon-black"></i>&nbsp;&nbsp;Software</a></li>
								<li><a href="?pagename=tools/code"><i class="icon-code icon-black"></i>&nbsp;&nbsp;Code</a></li>
								<li><a href="?pagename=tools/frameworks"><i class="icon-building icon-black"></i>&nbsp;&nbsp;Frameworks</a></li>
								<li><a href="?pagename=tools/hardware"><i class="icon-hdd icon-black"></i>&nbsp;&nbsp;Hardware</a></li>
							</ul><!-- / .dropdown-menu -->
						</li><!-- / .dropdown -->
						
						<li><a href="?pagename=contact"><i class="icon-envelope-alt icon-black"></i>&nbsp;&nbsp;Contact&nbsp; </a></li>
						
						<li><a class="nav nav-pills nav-stacked" href="javascript:$.pageslide.close()"><i class="icon-x icon-black"></i>&nbsp;&nbsp;Close</a></li>
						
						<form class="navbar-search pull-right" style="margin: 5px 0 -10px 0;">
							<input id="focusedInput" type="text" class="search-query" placeholder="Search"><i class="icon-search"></i>
						</form><!-- / .navbar-search .pull-right -->
						
					</ul><!-- / .nav .nav-pills .nav-stacked -->
					
					
				</div><!-- / #modal .navbar .navbar-inverse -->
				
				
			</div><!-- / .navbar-inner -->
			
			
		</div><!-- / .navbar .navbar-inverse .navbar-fixed-top -->
		
		
	</div><!-- / .container -->
	
	
</div><!-- / .navbar-wrapper -->