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

	$pageTitle 		= "Edapt - Getting Involved";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>There are different ways to get involved:</p>

<ul>
	<li><b><a
		href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT&component=Edapt"
		title="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT&component=Edapt"
		rel="nofollow">File a bug</a></b> - file bugs and feature requests</li>
	<li><b><a href="svn+ssh://dev.eclipse.org/svnroot/modeling/org.eclipse.emft.edapt"
		title=svn+ssh://dev.eclipse.org/svnroot/modeling/org.eclipse.emft.edapt"
		>SVN Repository</a></b> - download the source code and contribute patches</li>
	<li><b><a
		href="mailto:herrmama@in.tum.de"
		title="mailto:herrmama@in.tum.de"
		rel="nofollow">Plain Email</a></b> - contact us directly</li>
</ul>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>