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
<h2>$pageTitle</h2>
There are different ways to get support:
<ul>
	<li><b><a href="documentation.php"
		title="Documentation">Documentation</a></b> - read to learn about Edapt</li>
	<li><b><a
		href="http://www.eclipse.org/forums/index.php/f/19/"
		title="http://www.eclipse.org/forums/index.php/f/19/"
		rel="nofollow">EMFT Newsgroup</a></b> - get an answer to your questions</li>
	<li><b><a
		href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT&component=Edapt"
		title="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT&component=Edapt"
		rel="nofollow">File a bug</a></b> - file bugs and feature requests</li>
	<li><b><a
		href="mailto:herrmama@in.tum.de"
		title="mailto:herrmama@in.tum.de"
		rel="nofollow">Professional Support</a></b> - contact us if you need professional support</li>
</ul>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>