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

	$pageTitle 		= "Edapt - Library Example";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>

<p>
The Eclipse Modeling Framework (EMF) supports the developers to build modeling tools using metamodels in Ecore. 
Due to the changing requirements of these modeling tools, the metamodels are often subject to change. 
But when the metamodel changes, models created with the modeling tools often can not be loaded. 
In order not to lose the information stored in these models, the models must be migrated.
<br/>
Even established frameworks such as for example the Graphical Modeling Framework (GMF) have adapted their metamodel to changing requirements in the past and therefore had to implement a migrator. 
Conversely, not few existing modeling tools use aged metamodels that do no longer fully support the current requirements.
The reason is the enormous effort for the migration of existing models in response to changes to the metamodel. 
This migration is also more error prone and expensive to test.
<br/>
Edapt supports the developer to migrate models, by largely automating the migration. 
Thereby it differs from languages for model transformation, which require manual specification of the migration. 
Furthermore, in case of model transformations, one must also define rules for metamodel elements that have not changed. 
With Edapt, however, it is sufficient to specify the migration only for changes to the metamodels.
<br/>
Edapt follows an operation-based approach. 
Operations encapsulate the changes to the metamodel and the migration of models. 
Operations can be reused to help automate the migration.
A very simple example is an operation that renames an attribute and performs the renaming in the models. 
Edapt currently offers over 60 reusable operations that have been proven in case studies. 
If a migration can not be expressed by reusable operations, then it can also be manually specified for metamodel changes.
<br/>
Edapt is very convenient for the developer because it is integrated directly into the Ecore editor. 
The operations can be performed directly in the editor and their execution is recorded in an explicit history. 
To e.g. rename an attribute, the attribute is selected, the Rename operation is selected and a new name be chosen, and even surgery can be performed. 
The history that is recorded when executing change operations can be used to automatically migrate the existing models.
<br/>
Edapt is a framework. 
It consists of a runtime that is required to perform the migration, and an integration into the Ecore editor to record the history. 
The runtime can be integrated into an existing application to be able to migrate models. 
In addition, Edapt can be extended with new reusable operations. 
The runtime is based only on EMF, which is used to specify the manually defined migration, and the editor integration is based on EMF Compare, which is used for advanced features.
<br/>
In this article, we describe the main features of Edapt to adapt metamodels and to migrate their models. 
Therefore, we show how a history can be created for a metamodel, how the different types of operations can be recorded, and how a history can be integrated into an existing application for migrating models. 
Finally, we provide a brief overview of the advanced features of Edapt.
</p>

<h3>Ecore Model History</h3>

<h3>Reusable Coupled Operations</h3>

<h3>Custom Coupled Operations</h3>

<h3>Migrator</h3>

<h3>Advanced Functions</h3>

<h3>Conclusion</h3>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>