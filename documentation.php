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

	$pageTitle 		= "Edapt - Documentation";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>We are currently setting up the documentation for Edapt.
The following first items are already available:</p> 

<ul>
	<li><b><a href="libraryexample.php"
		title="libraryexample.php"
		rel="nofollow">Tutorial</a></b> - overview of Edapt using the library example</li>
	<li><b><a
		href="operations.php"
		title="operations.php"
		rel="nofollow">Operations</a></b> - get an overview of the reusable operations and their semantics</li>
</ul>

<h3>Presentations</h3>
<a href="http://www.infoq.com/presentations/edapt" title="Model Migration with Edapt" rel="nofollow">Model Migration with Edapt</a> by Maximilian Koegel @ EclipseCon NA 2015
</div>

<div id="rightcolumn">
<img style="border: 1px solid #1d1d1d; border-radius: 0.4em;" width="255" height="170" src="images/book.jpg"/>
<div style="font-size: 0.8em"> Photo from <a href="http://www.flickr.com/photos/horiavarlan/">horiavarlan Flickr</a></div>
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>