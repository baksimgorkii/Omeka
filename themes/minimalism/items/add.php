<?php head();?>
<ul id="secondary-nav" class="navigation">
	<?php nav(array('Browse' => uri('items'), 'Add Item' => uri('items/add')));?>
</ul>
<h2>Add an Item</h2>
<form method="post" enctype="multipart/form-data">
	<?php include 'form.php'; ?>
	<fieldset>
	<input type="submit" name="submit" value="Submit --&gt;" />
	</fieldset>
</form>
<?php foot();?>
