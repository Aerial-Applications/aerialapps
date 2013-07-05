<!-- margin-bottom: 40px; REQUIRED WHEN USING BELOW navbar-fixed-top -->
<div class="navbar-wrapper" style="margin-bottom: 40px;">


	<div class="container" style="">
	
	
		<!-- REMOVED navbar-inverse -->
		<div class="navbar" style="">
		
		
			<div class="navbar-inner navbar-fixed-top" style="">
			
			
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				<i class="icon-bolt icon-black pull-left" style="margin: 12px 0 0 0;"></i>
				
				<a href="/" class="brand">&nbsp;&nbsp;Aerial Applications</a>
				
				
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
								<li><a href="https://github.com/Aerial-Applications" target="_blank"><i class="icon-github-alt icon-black"></i>&nbsp;&nbsp;Github - Aerial Applications&nbsp; </a></li>
								<li><a href="https://github.com/Homegrown-Music-Festival" target="_blank"><i class="icon-github-alt icon-black"></i>&nbsp;&nbsp;Github - Homegrown Music Festival&nbsp; </a></li>
							</ul><!-- / .dropdown-menu -->
							
						</li><!-- / .dropdown -->
						
						<li <?php if ($pagename == 'contact'){ echo 'class="active"'; } ?>><a href="?pagename=contact"><i class="icon-envelope-alt icon-black"></i>&nbsp;&nbsp;Contact&nbsp;</a></li>
						
						<span class="divider">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						
						<!-- NOT ACTIVE -->
						<!-- margin: 5px 0 -10px 0; -->
						<form class="navbar-search pull-right" style="margin: 5px 0 0 0;">
							<input id="focusedInput" class="search-query" style="width: 100px;" type="text" placeholder="Search">&nbsp;&nbsp;<i class="icon-search"></i>
						</form><!-- / .navbar-search .pull-right -->
						
					</ul><!-- / .nav .pull-right -->
					
					
				</div><!-- / #fullnav .nav-collapse .collapse -->
				
				
			</div><!-- / .navbar-inner -->
			
			
		</div><!-- / .navbar .navbar-inverse .navbar-fixed-top -->
		
		
	</div><!-- / .container -->
	
	
</div><!-- / .navbar-wrapper -->