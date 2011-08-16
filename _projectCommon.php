<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	# $Nav->addNavSeparator("Project Home", 	"downloads.php");
	# $Nav->addCustomNav("Downloads", 		"downloads.php", 	"_self", 2);
	# $Nav->addCustomNav("Installation", 		"install.php", 		"_self", 2);
	# $Nav->addCustomNav("FAQ", 				"faq.php", 			"_self", 2);

	# Break the navigation into sections
	$Nav->addNavSeparator("Edapt", 	"/default");
	$Nav->addCustomNav("Home", "/edapt", "_self", 3);
	$Nav->addCustomNav("Download", "/edapt/download.php", "_self", 3);
	$Nav->addCustomNav("Documentation", "/edapt/documentation.php", "_blank", 3);
	$Nav->addCustomNav("Support", "/edapt/support.php", "_blank", 3);
	$Nav->addCustomNav("Getting Involved", "/edapt/communication.php", "_blank", 3);

	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/edapt", "_self");
	$Menu->addMenuItem("Download", "/edapt/download.php", "_self");
	$Menu->addMenuItem("Documentation", "/edapt/documentation.php", "_self");
	$Menu->addMenuItem("Support", "/edapt/support.php", "_self");
	$Menu->addMenuItem("Getting Involved", "/edapt/communication.php", "_self");
	# $Menu->addMenuItem("Getting started", "/edapt/gettingstarted.php", "_self");
	# $Menu->addMenuItem("Support", "/edapt/support.php", "_self");
	# $Menu->addMenuItem("Developers", "/edapt/developers", "_self");

	# To define additional CSS or other pre-body headers
	# $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;

?>
