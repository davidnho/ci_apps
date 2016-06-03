<h2>Create a To-do item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('todos/create') ?>

<label for="title">Title: </label> 
<input type="input" name="title"  value="<?php echo $todo['title'];?>"/>

<label for="text">Description: </label>
<textarea name="description" ><?php echo $todo['description'];?></textarea>

<input type="submit" name="submit" value="Update" /> 

</form>