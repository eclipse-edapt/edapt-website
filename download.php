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

	$pageTitle 		= "Edapt - Download";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

Edapt is provided as a P2 repository URL. This URL can be pasted into the Eclipse IDE software installation section. 


<table>
<tr>
	<tc>0.0.3 (Latest)</tc>
	<tc>Latest:  - Experimental: install Edapt (Build with Git) in your Eclipse workbench</tc>
	<tc><a href="http://download.eclipse.org/edapt/p2/repository">P2 Site</a></tc>
</tr>
<tr>
	<tc>0.0.3 (SVN)</tc>
	<tc> install Edapt in your Eclipse workbench (NOT Maintained)</tc>
	<tc><a href="http://download.eclipse.org/edapt/update-site/">Update Site</a></tc>
</tr>
</table>


</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>