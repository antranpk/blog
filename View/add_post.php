
<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>
<div class="center">
<form action="" method="post" class="w3-container w3-card-4 w3-light-grey">

    <p><label for="title">Title:</label><br />
        <input class="w3-input w3-border w3-round" type="text" name="title" id="title" required="required" />
    </p>

    <p><label for="body">Body:</label><br />
        <textarea class="w3-input w3-border w3-round" name="body" id="body" rows="5" cols="35" required="required"></textarea>
    </p>
    <p><label for="image">Image:</label>
    	<input lass="w3-input w3-border w3-round" type="file" name="image" id="fileToUpload" >
    </p>
    <p><input type="submit" name="add_submit" value="Add" /></p>
</form>
</div>
<?php require 'inc/footer.php' ?>
