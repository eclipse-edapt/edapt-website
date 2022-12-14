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
	<td width="100"><b>1.5.x</b></td>
	<td width="200"><a href="http://download.eclipse.org/edapt/releases/15x">P2 Composite Site</a></td>
</tr>
<tr>
	<td></td>
	<td>1.5.0</td>
	<td><a href="http://download.eclipse.org/edapt/releases/15x/150a">P2 Site</a> / <a href="http://download.eclipse.org/edapt/releases/15x/150a/150a.zip">Zip</a> / <a href="http://download.eclipse.org/edapt/releases/15x/150/apidocs">JavaDocs</a></td>
</tr>

<tr>
	<td width="150"></td>
	<td width="100"><b>1.4.x</b></td>
	<td width="200"><a href="http://download.eclipse.org/edapt/releases/14x">P2 Composite Site</a></td>
</tr>
<tr>
	<td></td>
	<td>1.4.1</td>
	<td><a href="http://download.eclipse.org/edapt/releases/14x/141">P2 Site</a> / <a href="http://download.eclipse.org/edapt/releases/14x/141/141.zip">Zip</a> / <a href="http://download.eclipse.org/edapt/releases/14x/141/apidocs">JavaDocs</a></td>
</tr>
<tr>
	<td></td>
	<td>1.4.0</td>
	<td><a href="http://download.eclipse.org/edapt/releases/14x/140">P2 Site</a> / <a href="http://download.eclipse.org/edapt/releases/14x/140/140.zip">Zip</a> / <a href="http://download.eclipse.org/edapt/releases/14x/140/apidocs">JavaDocs</a></td>
</tr>

<tr>
	<td width="150"></td>
	<td width="100"><b>1.3.x</b></td>
	<td width="200"><a href="http://download.eclipse.org/edapt/releases/13x">P2 Composite Site</a></td>
</tr>
<tr>
	<td></td>
	<td>1.3.1</td>
	<td><a href="http://download.eclipse.org/edapt/releases/13x/131">P2 Site</a> / <a href="http://download.eclipse.org/edapt/releases/13x/131/131.zip">Zip</a> / <a href="http://download.eclipse.org/edapt/releases/13x/131/apidocs">JavaDocs</a></td>
</tr>
<tr>
	<td></td>
	<td>1.3.0</td>
	<td><a href="http://download.eclipse.org/edapt/releases/13x/130">P2 Site</a> / <a href="http://download.eclipse.org/edapt/releases/13x/130/130.zip">Zip</a> / <a href="http://download.eclipse.org/edapt/releases/13x/130/apidocs">JavaDocs</a></td>
</tr>
<tr>
	<td width="150"></td>
	<td width="100"><b>1.2.x</b></td>
	<td width="200"><a href="http://download.eclipse.org/edapt/releases/12x">P2 Composite Site</a></td>
</tr>
<tr>
	<td width="150"></td>
	<td width="100"><b>1.1.x</b></td>
	<td width="200"><a href="http://download.eclipse.org/edapt/releases/11x">P2 Composite Site</a></td>
</tr>
<tr>
	<td width="150"></td>
	<td width="100"><b>1.0.x</b></td>
	<td width="200"><a href="http://download.eclipse.org/edapt/releases/10x">P2 Composite Site</a></td>
</tr>
<!--<tr>
	<td>Release Candidates</td>
	<td><b>1.5.x</b></td>
	<td><a href="http://download.eclipse.org/edapt/releases/15x">P2 Composite Site</a></td>
</tr>
<tr>
	<td></td>
	<td>1.5.0 RC1</td>
	<td><a href="http://download.eclipse.org/edapt/releases/15x/150RC1">P2 Site</a></td>
</tr>-->
<tr>
	<td>Nightly</td>
	<td>1.6.0</td>
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
