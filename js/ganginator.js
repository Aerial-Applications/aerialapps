/*!
 * Custom JavaScript for jessegangi.com
 * Copyright 2012-13 Jesse Gangi
 * Built by Ganginator for jessegangi.com
 */
 
/*
	Jesse Gangi
	jessegangi.com
	218 310 2447
	jgangi @ aerialapps.com
	@Ganginator
*/

/*
Added scripts, for added awesomeness.
*/

/* POPOVERS */
/* PER: 
http://jsfiddle.net/weuWk/
http://www.joostrap.com/popovers#
https://groups.google.com/forum/#!topic/twitter-bootstrap/_DqQsRZRz6E
http://stackoverflow.com/questions/7703878/how-can-i-hold-twitter-bootstrap-popover-open-until-my-mouse-moves-into-it
https://github.com/twitter/bootstrap/issues/512
*/


$("#blob").popover({ 
placement: 'bottom', 
html: true, /* IT SEEMS THIS IS UNECESSARY? */
title: '<div style="text-align: center;"><h3><a href="http://notepad-plus-plus.org/" target="_blank">Notepad++ IDE</a></h3></div>', 
content: '<div style="text-align: center;"><p>This might sound underwhelming,<br />but this is my top Tool.<br /><br />I use it for almost every project.</p><p><a class="btn" href="http://notepad-plus-plus.org/" target="_blank">Go &raquo;</a></p></div>', 
trigger: 'hover' /* THIS WAS ALL I NEEDED FOR HOVERING AT FIRST */
});


/* CLICKOVERS */
/* PER: 
http://www.leecarmichael.com/bootstrapx-clickover/examples.html
https://github.com/lecar-red/bootstrapx-clickover
*/


/* Software Page Clickovers */


/* Notepad++ */
$('#auto-close-co-1').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom',
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://notepad-plus-plus.org/" target="_blank">Notepad++</a></h3></div>', 
	content: '<div style="text-align: center;"><h4><strong>Source Code Editor</strong></h4><p>I use it for every project.<br /><br /><a class="btn btn-mini" href="http://notepad-plus-plus.org/" target="_blank">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* FileZilla */
$('#auto-close-co-2').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://filezilla-project.org/">FileZilla</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>FTP Client</h4><p>I use this for all my projects. I helps me organize my different servers.<br /><br /><a class="btn btn-mini" href="http://filezilla-project.org/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* PuTTY */
$('#auto-close-co-3').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">PuTTY</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Telnet/SSH Client</h4><p>This Tool gets me in, and out as quickly as possible, and it makes it easy.<br /><br /><a class="btn btn-mini" href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Adobe Photoshop */
$('#auto-close-co-4').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="">Adobe Photoshop</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Graphics Editor</h4><p>I simply love Photoshop. I use it all the time, even when not necessary.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* HandBreak */
$('#auto-close-co-5').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="">HandBreak</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Video Transcoder</h4><p>I always run into situations where I need to convert video from one format to another. HandBreak makes this simple, and fast.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Microsoft Excel */
$('#auto-close-co-6').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="">Microsoft Excel</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Spreadsheet Application</h4><p>A lot of people say that this is a useless program, unnecessary, pointless, but I find it very usefull for organizing my projects, and data.<br /><br /><a class="btn btn-mini" href="http://success.adobe.com/en/na/sem/products/photoshopfamily.html/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* git */
$('#auto-close-co-7').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://git-scm.com">git</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Version Control</h4><p>Who knows? Maybe a quick backup version control system is not for you?<br /><br /><a class="btn btn-mini" href="http://git-scm.com">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Contact Page Clickovers */


/* email */
$('#auto-close-co-email').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Email Me!</h3></div>', 
	content: '<div style="text-align: center;"><p><a href="mailto:jgangi@aerialapps.com?subject=I am contacting you via your Online Resume!">jgangi@aerialapps.com</a></p></div>',
	allow_multiple: false, 
});


/* Twitter */
$('#auto-close-co-twitter').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Send me a Tweet!</h3></div>', 
	content: '<div style="text-align: center;"><p><a href="http://www.twitter.com/Ganginator" target="_blank">@Ganginator</a></p></div>', 
	allow_multiple: false, 
});


/* Phone */
$('#auto-close-co-smsphone').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Text, or Call me!</h3></div>', 
	content: '<div style="text-align: center;"><p><a href="tel:2183102447">(218) 310-2447</a></p></div>',
	allow_multiple: false, 
});


 /* Snail-Mail */
$('#auto-close-co-snailmail').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Snail Mail me!</h3></div>', 
	content: '<div style="text-align: center;"><p>P.O. Box 16681<br />Duluth, MN, 55816</p></div>', 
	allow_multiple: false, 
});


/* Frameworks Page Clickovers */


/* Drupal */
$('#co-drupal').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://drupal.org/">Drupal</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Content Management Platform</h4><p>I love Drupal. I use it whenever necessary.<br /><br /><a class="btn btn-mini" href="http://drupal.org/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Bootstrap */
$('#co-bootstrap').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://twitter.github.com/bootstrap/">Bootstrap</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Front-end Framework</h4><p>Slick, and quick. This site is built with Bootstrap.<br /><br /><a class="btn btn-mini" href="http://twitter.github.com/bootstrap/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Boilerplate */
$('#co-boilerplate').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://html5boilerplate.com/">HTML5 Boilerplate</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Front-end Template</h4><p>Fast, and adaptable. Great with PHP templates.<br /><br /><a class="btn btn-mini" href="http://html5boilerplate.com/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Wordpress */
$('#co-wordpress').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3><a href="http://wordpress.org/">Wordpress</a></h3></div>', 
	content: '<div style="text-align: center;"><h4>Blogging Tool</h4><p>Though I purposely avoid using this as much as possible, I often find it the best fit for certain clients needs.<br /><br /><a class="btn btn-mini" href="http://wordpress.org/">Would you like to know more?</a></p></div>', 
	allow_multiple: false, 
});


/* Code Page Clickovers */


/* HTML(5) */
$('#co-html5').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>HTML5</h3></div>', 
	content: '<div style="text-align: center;"><p>It is nice to progress, and make things easier.</p></div>',
	allow_multiple: false, 
});


/* CSS(3) */
$('#co-css3').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>CSS3</h3></div>', 
	content: '<div style="text-align: center;"><p>Making things beautiful, and functional.</p></div>',
	allow_multiple: false, 
});


/* PHP */
$('#co-php').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>PHP</h3></div>', 
	content: '<div style="text-align: center;"><p>Templates, in templates, including templates.</p></div>',
	allow_multiple: false, 
});


/* JavaScript */
$('#co-javascript').clickover({
	auto_close: 10 * 1000, 
	placement: 'bottom', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>JavaScript</h3></div>', 
	content: '<div style="text-align: center;"><p>Adding funtionality, like these Click Overs.</p></div>',
	allow_multiple: false, 
});


/* JavaScript */
$('#info').clickover({
	auto_close: 10 * 1000, 
	placement: 'top', 
	html: true, /* IT SEEMS THIS IS UNECESSARY? */
	title: '<div style="text-align: center;"><h3>Information</h3></div>', 
	content: '<div style="text-align: center;"><br />Coming soon.</div><br />',
	allow_multiple: false, 
});

