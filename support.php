<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "Edapt - Support";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2><a href="http://eclipsesource.com/en/services/consulting-support/">Professional Support</a></h2>

		<p>
				Open-source software is free of licensing fees. Furthermore, it is
				easy to adapt and enhance with new features. Nevertheless, using
				open-source frameworks is not for free. Like in closed-source
				software, no one is an expert on every framework. The total
				cost of ownership also includes training, adoption, enhancement and
				maintainance of a framework. It might take significantly more time for
				somebody new to the project to extend a certain feature than for the
				person who is familiar with the framework. Furthermore, software
				has to be maintained. Even if this can be done literally by
				everybody for open-source software, a professional maintainance
				agreement with fixed response times is often mandatory in an
				industrial setting. This ensures your productivity. EclipseSource
				employs several Edapt committers and 
				<a
					href="http://eclipsesource.com/en/services/consulting-support/"
					target="_blank">
					offers professional support
				</a> 
				and 
				<a href="http://eclipsesource.com/en/services/training/training-details/eclipse-modeling/"
				   target="_blank">
				   training</a>.
			</p>

<ul>
	<li><b><a href="libraryexample.php"
		title="libraryexample.php"
		rel="nofollow">Tutorial</a></b> - getting started</li>
	<li><b><a
		href="news://news.eclipse.org/eclipse.technology.emft"
		title="news://news.eclipse.org/eclipse.technology.emft"
		rel="nofollow">Newsgroup</a></b> - register to the newsgroup</li>
			<li><b><a
		href="http://www.eclipse.org/forums/index.php/f/19/"
		title="http://www.eclipse.org/forums/index.php/f/19/"
		rel="nofollow">Forum</a></b> - post on the Eclipse forum</li>
	<li><b><a
		href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Edapt"
		title="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Edapt"
		rel="nofollow">File a bug</a></b> - file bugs and feature requests</li>
	<li><b><a href="documentation.php"
		title="Documentation">Documentation</a></b> - read to learn about Edapt</li>
<!--	
	<li><b><a
		href="mailto:herrmama@in.tum.de"
		title="mailto:herrmama@in.tum.de"
		rel="nofollow">Professional Support</a></b> - contact us if you need professional support</li>
-->
</ul>

</div>

<div id="rightcolumn">
	<img style="border: 1px solid #1d1d1d; border-radius: 0.4em;" src="images/helppoint.jpg"/>
	<div style="font-size: 0.8em">
		Photo from <a href="http://www.flickr.com/photos/richardland/">richardland on Flickr</a>
	</div>
</div>

EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>