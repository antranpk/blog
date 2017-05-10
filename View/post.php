
<?php require 'inc/header.php' ?>

<?php if (empty($this->oPost)): ?>
    <p class="error">The post can't be be found!</p>
<?php else: ?>

    <article>
        <div class="w3-card-4 w3-margin w3-white">
        <img src="public/upload/woods.jpg" alt="Nature" style="width:100%">
        <div class="w3-container">
          <h3><b><?=htmlspecialchars($this->oPost->title)?></b></h3>
          <h5>Posted on: <span class="w3-opacity"><?=$this->oPost->createdDate?></span></h5>
        </div>

        <div class="w3-container">
          <p><?=nl2br(htmlspecialchars($this->oPost->body))?></p>
          <div class="w3-row">
            <div class="w3-col m8 s12">
                <?php
                    $oPost = $this->oPost;
                    require 'inc/control_buttons.php';
                ?>
              <p><span class="w3-padding-large w3-right"><b></b></span></p>
            </div>
          </div>
        </div>
      </div>
    </article>

<?php endif ?>

<?php require 'inc/footer.php' ?>
