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
	$Nav->addNavSeparator("MyProject", 	"/default");
	$Nav->addCustomNav("Download", "/project/download.php", "_self", 3);
	$Nav->addCustomNav("Documentation", "/project/documentation.php", "_blank", 3);
	$Nav->addCustomNav("Support", "/project/support.php", "_blank", 3);
	$Nav->addCustomNav("Getting Involved", "/project/developers", "_blank", 3);

	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;

?>
