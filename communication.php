<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
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
		href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Edapt"
		title="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Edapt"
		rel="nofollow">File a bug</a></b> - file bugs and feature requests</li>
	<li><b><a href="http://git.eclipse.org/c/edapt/org.eclipse.emf.edapt.git/"
		title=http://git.eclipse.org/c/edapt/org.eclipse.emf.edapt.git/"
		>GIT Repository</a></b> - clone our code and contribute patches</li>
</ul>

<h3>How to setup your IDE</h3>
<ul>
	<li>
		Get the latest 
		<a href="https://eclipse.org/downloads/">Eclipse Modeling Tools</a>
		for your platform.
	</li>
	<li>
		Download the Zip of the latest Edapt release from the 
		<a href="https://www.eclipse.org/edapt/download.php">download section</a>
	</li>
	<li>
		In your IDE go to Preferences => Plug-In Development => API Baselines and set the unzipped Edapt release as the API Baseline.
	</li>
	<li>
		<p>Check out the Edapt source code from</p>
		<p><code>git://git.eclipse.org/gitroot/edapt/org.eclipse.emf.edapt.git</code> (anonymous)</p>
		<p>or</p>
		<p><code>ssh://committer_id@git.eclipse.org:29418/edapt/org.eclipse.emf.edapt</code> (Gerrit)</p>
	</li>
	<li>
		Import the source code and set the edapt_with_cdo.target target.
	</li>
</ul>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>