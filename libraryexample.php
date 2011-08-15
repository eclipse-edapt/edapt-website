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

<h3>Reusable Operations</h3>

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
In the library metamodel, the class <i>Library</i> currently has the attribute <i>name</i>. 
This attribute is no longer needed and should be removed. 
To remove the attribute, we choose it in the Ecore editor and the operation <i>Delete Feature</i> in the OPERATION BROWSER. 
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
In the metamodel, the subclasses of <i>Book</i> will be removed and the attribute will be added to <i>Book</i>, which has the added type as enumeration.
</p>
<p>
These were just two examples of operations. 
Edapt currently offers the user over 60 reusable operations. 
In addition, new operations can be added via an extension point. 
Listing 1 shows the implementation of Operation <i>Delete Feature</i> for which Edapt provides a language embedded in Java. 
Reusable operations are implemented as Java classes, parameters of the operation as attributes of the class and preconditions as methods. 
In addition, the metamodel change and the model migration must be defined by implemeting the method <i>execute</i>. 
In the case of <i>Delete Feature</i>, only the feature is deleted on the metamodel level, but on the model level, the values ​​of the feature are removed. 
Therefor, a helper method is used, which ensures that in case of a containment reference, also all values ​​of all children will be deleted.
</p>

<pre class="codebox">
@EdaptOperation(identifier = "deleteFeature2", label = "Delete Feature", 
		description = "In the metamodel, a feature is deleted. "
		+ "In the model, its values are deleted, too.")
public class DeleteFeature2 extends OperationImplementation {

	/** {@description} */
	@EdaptParameter(main = true, description = "The feature to be deleted")
	public EStructuralFeature feature;

	/** {@inheritDoc} */
	@Override
	public void execute(Metamodel metamodel, Model model) {
		EClass eClass = feature.getEContainingClass();

		// model migration
		for (Instance instance : model.getAllInstances(eClass)) {
			deleteFeatureValue(instance, feature);
		}

		// metamodel adaptation
		metamodel.delete(feature);
		if (feature instanceof EReference) {
			EReference reference = (EReference) feature;
			if (reference.getEOpposite() != null) {
				metamodel.delete(reference.getEOpposite());
			}
		}
	}
}
</pre>

<h3>Manually Specifying a Migration</h3>

<p>
Our case studies have also shown that the migrations are sometimes so specific that reuse makes no sense. 
In these cases, the migration can be specified manually. 
In order to do so, the metamodel change is first performed manually in the Ecore editor and the recorded changes are later enriched by the migration.
</p>
<p>
In the library metamodel, the author of a book is currently modeled by the attribute <i>author</i> type <i>EString</i> (see Figure 1). 
However, it would be better to define a separate class for authors so that recurring author names can be grouped together. 
To specify the necessary migration manually, the corresponding metamodel changes have to be carried out first: 
the class <i>Writer</i> for authors must be created and suitably connected.
</p>
<p>
To create classes and references, reusable operations can be used. 
Using <i>Create Class</i>, we create the class <i>Writer</i>, and using <i>Create Reference</i>, we create the containment reference <i>writers</i> from <i>Library</i> to <i>Writer</i>. 
Then, we move the attribute <i>author</i> from <i>Book</i> to <i>Writer</i> in the Ecore editor and rename it to "name" using the operation <i>Rename</i>. 
Finally, we create the cross reference <i>author</i> from <i>Book</i> to <i>Writer</i> using <i>Create Reference</i>. 
The recorded operations should look like in Figure 2, top left. 
In this case, the metamodel can also be changed directly in Ecore editor, since migration is specified manually anyway.
</p>
<p>
By means of EDAPT -> CUSTOM MIGRATION TO ATTACH CHANGES in the context menu, a migration can be added to the changes.
A Java class creation wizard opens that lets the user select the name of the class that implements the custom migration.
After that, the Java editor opens for the newly created class that inherits from a special superclass (see Figure 2). 
The user only needs to specify the model migration embedded using an API that is embedded in Java (see Listing 2). 
The migration iterates over all the books, removes the author and associates a book with the appropriate writer. 
The writer must either be created or has already been created.
</p>

<pre class="codebox">
public class WriterCustomMigration extends CustomMigration {

	private EAttribute authorAttribute;

	@Override
	public void migrateBefore(Model model, Metamodel metamodel)
			throws MigrationException {
		authorAttribute = metamodel.getEAttribute("library.Book.author");
	}

	@Override
	public void migrateAfter(Model model, Metamodel metamodel)
			throws MigrationException {
		for (Instance book : model.getAllInstances("library.Book")) {
			String author = book.unset(authorAttribute);
			Instance library = book.getContainer();
			Instance writer = findWriter(library, author);
			// if writer with name of author cannot be found, create a new
			// writer
			if (writer == null) {
				writer = model.newInstance("library.Writer");
				writer.set("name", author);
				library.add("writers", writer);
			}
			book.set("author", writer);
		}
	}

	private Instance findWriter(Instance lib, String author) {
		for (Instance writer : lib.getLinks("writers")) {
			if (author.equals(writer.get("name"))) {
				return writer;
			}
		}
		return null;
	}
}
</pre>
<h3>Migrator</h3>

<h3>Advanced Functions</h3>

<h3>Conclusion</h3>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>