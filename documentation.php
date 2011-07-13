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
In the meantime, there is some documentation available for the predecessor project COPE:</p>

<ul>
	<li><b><a href="http://cope.in.tum.de/pmwiki.php?n=Demo.Main"
		title="http://cope.in.tum.de/pmwiki.php?n=Demo.Main"
		rel="nofollow">Demo</a></b> - getting started with COPE</li>
	<li><b><a
		href="http://cope.in.tum.de/pmwiki.php?n=Documentation.Main"
		title=http://cope.in.tum.de/pmwiki.php?n=Documentation.Main"
		rel="nofollow">Documentation</a></b> - read about the details</li>
	<li><b><a
		href="http://cope.in.tum.de/pmwiki.php?n=Publications.Main"
		title="http://cope.in.tum.de/pmwiki.php?n=Publications.Main"
		rel="nofollow">Publications</a></b> - learn about scientific results</li>
</ul>


</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>