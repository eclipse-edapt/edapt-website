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

<p>
<table cellspacing="10">
<tr>
	<td width="150">Releases</td>
	<td width="100">1.0.x</td>
	<td width="200"><a href="http://download.eclipse.org/edapt/releases/10x">P2 Composite Site</a></td>
</tr>
<tr>
	<td></td>
	<td>1.0.1</td>
	<td><a href="http://download.eclipse.org/edapt/releases/10x/101s">P2 Site</a> <a href="http://download.eclipse.org/edapt/releases/10x/101/101.zip">Zip</a></td>
</tr>
<tr>
	<td></td>
	<td>1.0.0</td>
	<td><a href="http://download.eclipse.org/edapt/releases/10x/100">P2 Site</a> <a href="http://download.eclipse.org/edapt/releases/10x/100/100.zip">Zip</a></td>
</tr>
<tr>
	<td width="150">Milestones</td>
	<td width="100">1.1.x</td>
	<td width="200"><a href="http://download.eclipse.org/edapt/releases/11x">P2 Composite Site</a></td>
</tr>
<tr>
	<td></td>
	<td>1.1.0 MS1</td>
	<td><a href="http://download.eclipse.org/edapt/releases/11x/110MS1">P2 Site</a></td>
</tr>
<tr>
	<td>Nightly</td>
	<td>1.1.0</td>
	<td><a href="http://download.eclipse.org/edapt/p2/nightly">P2 Site</a></td>
</tr>
</table>
</p>
</div>

<div id="rightcolumn">
<img style="border: 1px solid #1d1d1d; border-radius: 0.4em;" width="255" height="170" src="images/shoppingcart.jpg"/>
<div style="font-size: 0.8em">
	Photo from <a href="http://www.flickr.com/photos/polycart/">Polycart on Flickr</a>
</div>
</div>

EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>