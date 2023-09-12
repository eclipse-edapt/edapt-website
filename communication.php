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
		href="https://github.com/eclipse-edapt/edapt/issues/new"
		title="https://github.com/eclipse-edapt/edapt/issues/new"
		rel="nofollow">File a bug</a></b> - file bugs and feature requests</li>
	<li><b><a href="https://github.com/eclipse-edapt/edapt"
		title="https://github.com/eclipse-edapt/edapt">Github</a></b> 
		- use Github Pull Requests to create and submit your patches</li>
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
		<p><code>https://github.com/eclipse-edapt/edapt.git</code> (HTTPS)</p>
		<p>or</p>
		<p><code>git@github.com:eclipse-edapt/edapt.git</code> (SSH)</p>
	</li>
	<li>
		Import the source code and set the edapt_with_cdo.target target.
	</li>
</ul>

<h3>Commit Message Guidelines</h3>
        <p>
        	We have the following commit message template:
			<pre>
(Bug &lt;Bug ID&gt; - &lt;Bug Title&gt;) | (TCI - &lt;Fix&gt;)

&lt;Commit Description&gt;?
Signed-off-by: &lt;sign off name and email&gt;
			</pre>
			<strong>Instructions (Please continue READING):</strong>
			<ul>
			<li><em>TCI commits</em>: For trivial code changes please use a TCI commit message. See list below for examples. If in doubt please discuss with reviewer.</li>
			<li><em>Normal Commits</em>: For all other commits use a commit message starting with 'Bug'. Bug reports with Proper Titles: Before using a Bug title for a commit, committer must update the Bug title to a reasonable and descriptive title for the task they have worked on</li>
			<li><em>Commit Description</em>: Additionally to the title, the commit message can describe briefly (2-3 sentences) how this commit fixes the bug from a technical perspective</li>
			<li><em>Multiple Commits for same bug</em>: Of course you may use the same bug and therefore bug title for multiple commits and their message, in this case please provide a unique description</li>
			<li><em>Reviewers responsibility</em>: The reviewer is responsible also for checking that the bug title is descriptive and reflects the committed change and that the description if any reflects the technical change</li>
			</ul>
			<strong>TCI message examples: </strong>
			<ul>
			<li>JavaDoc</li>
			<li>NPE</li>
			<li>Version Update of manifest and pom</li>
			<li>anonymous to inner class Conversion</li>
			<li>Renaming local vars, e.g. because of typos</li>
			<li>Externalizing strings</li>
			</ul>
        </p>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>