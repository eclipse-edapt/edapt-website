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
</p><p>
Even established frameworks such as for example the Graphical Modeling Framework (GMF) have adapted their metamodel to changing requirements in the past and therefore had to implement a migrator. 
Conversely, not few existing modeling tools use aged metamodels that do no longer fully support the current requirements.
The reason is the enormous effort for the migration of existing models in response to changes to the metamodel. 
This migration is also more error prone and expensive to test.
</p><p>
Edapt supports the developer to migrate models, by largely automating the migration. 
Thereby it differs from languages for model transformation, which require manual specification of the migration. 
Furthermore, in case of model transformations, one must also define rules for metamodel elements that have not changed. 
With Edapt, however, it is sufficient to specify the migration only for changes to the metamodels.
</p><p>
Edapt follows an operation-based approach. 
Operations encapsulate the changes to the metamodel and the migration of models. 
Operations can be reused to help automate the migration.
A very simple example is an operation that renames an attribute and performs the renaming in the models. 
Edapt currently offers over 60 reusable operations that have been proven in case studies. 
If a migration can not be expressed by reusable operations, then it can also be manually specified for metamodel changes.
</p><p>
Edapt is very convenient for the developer because it is integrated directly into the Ecore editor. 
The operations can be performed directly in the editor and their execution is recorded in an explicit history. 
To e.g. rename an attribute, the attribute is selected, the Rename operation is selected and a new name be chosen, and even surgery can be performed. 
The history that is recorded when executing change operations can be used to automatically migrate the existing models.
</p><p>
Edapt is a framework. 
It consists of a runtime that is required to perform the migration, and an integration into the Ecore editor to record the history. 
The runtime can be integrated into an existing application to be able to migrate models. 
In addition, Edapt can be extended with new reusable operations. 
The runtime is based only on EMF, which is used to specify the manually defined migration, and the editor integration is based on EMF Compare, which is used for advanced features.
</p><p>
In this article, we describe the main features of Edapt to adapt metamodels and to migrate their models. 
Therefore, we show how a history can be created for a metamodel, how the different types of operations can be recorded, and how a history can be integrated into an existing application for migrating models. 
Finally, we provide a brief overview of the advanced features of Edapt.
</p>

<h3>Metamodel History</h3>

<p>
To record operations, a history need to be created for the metamodel. 
In order to do so, the metamodel must be opened in Ecore editor: in our case the library metamodel. 
The metamodel history can be created using the Eclipse-View OPERATION BROWSER (see Figure 2, right). 
The OPERATION BROWSER can be opened by means of WINDOW -> OTHER ... -> SHOW VIEW.
</p>
<p>
In the OPERATION BROWSER, there is the CREATE HISTORY button to create the history. 
In a dialog the location of the history can be selected. 
If the metamodel consists of several files, the set of files can be selected, for which history is recorded. 
If the dialog is finished, the file in which the history is recorded appears in the Ecore editor (see Figure 2, top left).
</p>
<p>
The history consists of a sequence of releases. 
A release is a version of the metamodel for which models may exist. 
A release in turn consists of a sequence of recorded operations. 
The initial history contains a release that contains the operations to create the metamodel. 
This initial release is still open, i.e. it must be completed to mark the initial version of the metamodel as a release. 
Completing the release can be performed by the RELEASE button in the OPERATION BROWSER. 
After that, a new release in the history appears in which the operations carried out from now on will be recorded.
</p>

<h3>Reusable Coupled Operations</h3>

<p>
Reusable operations allow to reuse recurring migrations. 
Using case studies, we found that most metamodel changes can be covered by reusable operations. 
Edapt already implements a large number of reusable operations, 
so that according to our case studies, more than 90% of the migrations that occur in practice can be covered by reusable operations. 
A reusable operation encapsulates both the adaptation of the metamodel and the specification of migration.
</p>
<p>
Reusable operations can be invoked via the OPERATION BROWSER. 
The OPERATION BROWSER shows the possible operations depending on the metamodel element which is selected in the Ecore editor (see Figure 2, right). 
Double clicking on an operation, the user receives a brief description of the operation. 
Furthermore, the OPERATION BROWSER shows the parameters of the operation, which must be assigned values​​, so that the operation can be applied. 
The first parameter is determined by the selection in the Ecore editor. 
Also, the OPERATION BROWSER shows constraints that must be satisfied before the operation can be executed.
</p>
<p>
We first show the application of a simple operation. 
In the library metamodel, the class Library currently has the attribute name. 
This attribute is no longer needed and should be removed. 
To remove the attribute, we choose it in the Ecore editor and the operation Delete feature in the OPERATION BROWSER. 
In addition, no other parameters are set. 
The operation can be executed via the EXECUTE button in the OPERATION BROWSER. 
Thus, the operation is applied to the metamodel and recorded in the history (see Figure 2, top right). 
The attribute can be deleted directly in the editor, but then the migration has to be specified manually.
</p>
<p>
Of course, Edapt also provides more complex operations. 
Currently, in the library metamodel, there are subclasses for different categories of books (see Figure 1). 
This makes it impossible for the category of a book to change at runtime, because EMF does not allow type changes. 
It is therefore better to model the category of the book as an enumeration. 
To convert the subclasses to an enumeration, the operation <i>Enumeration to Subclasses</i> can be used. 
For the first parameter, the superclass <i>Book</i> has to be selected in the Ecore editor. 
As an additional parameter, we must specify the name of the enumeration (<i>enumName</i> = "book category") and the name of the attribute (<i>attributeName</i> = "category"), before the operation can be executed. 
In the metamodel, the subclasses of the book will be removed and the attribute will be added to Book, which has the added type as enumeration.

</p>

<h3>Custom Coupled Operations</h3>

<h3>Migrator</h3>

<h3>Advanced Functions</h3>

<h3>Conclusion</h3>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>