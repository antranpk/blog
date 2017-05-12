
<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>
<div class="center" style="width: 500px;">
<form action="" method="post" class="w3-container w3-card-4 w3-light-grey">

    <p><label for="email">Email:</label><br />
        <input type="email" name="email" id="email" required="required" class="w8-input w3-border w3-round"/>
    </p>

    <p><label for="password">Password:</label><br />
        <input type="password" name="password" id="password" required="required" class="w8-input w3-border w3-round" />
    </p>

    <p><input type="submit" value="Log In" /></p>
</form>
</div>
<?php require 'inc/footer.php' ?>
