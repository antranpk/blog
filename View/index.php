<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php require 'inc/header.php' ?>
<div class="w3-col l8 s12">
<!-- <?php var_dump($this->allPosts) ?> -->
<?php if (empty($this->oPosts)): ?>
    <p class="bold">There is no Blog Post.</p>
    <p><button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=add'" class="bold">Add Your First Blog Post!</button></p>
<?php else: ?>

    <?php foreach ($this->oPosts as $oPost): ?>
        <div class="w3-card-4 w3-margin w3-white">
        <img src="public/upload/woods.jpg" alt="Nature" style="width:100%">
        <div class="w3-container">
          <h3><b><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>"><?=htmlspecialchars($oPost->title)?></a></b></h3>
          <h5>Posted on: <span class="w3-opacity"><?=$oPost->createdDate?></span></h5>
        </div>

        <div class="w3-container">
          <p><?=nl2br(htmlspecialchars(mb_strimwidth($oPost->body, 0, 300, '...')))?></p>
          <div class="w3-row">
            <div class="w3-col m8 s12">
              <p><button class="w3-button w3-padding-large w3-white w3-border" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>'"><b>READ MORE »</b></button></p>
            </div>
            <div class="w3-col m8 s12">
                <?php require 'inc/control_buttons.php' ?>
              <p><span class="w3-padding-large w3-right"><b></b></span></p>
            </div>
          </div>
        </div>
      </div>
    <hr class="clear" />
    <?php endforeach ?>
  </div>  
    <div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card-2 w3-margin w3-margin-top">
  <img src="public/upload/avatar.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Tony Tran</b></h4>
      <p>Tình yêu là nguồn sức mạnh vĩnh cửu.</p>
      <p>Don't ask me, Who is she? She just a beautiful girl and she forever in my heart. There is only one happiness in this life, To LOVE and be LOVED</p>
    </div>
  </div>
  
  <!-- Posts -->
  <div class="w3-card-2 w3-margin" style="max-height: 700px;overflow: scroll;">
    <div class="w3-container w3-padding">
      <h4>All Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <?php foreach ($this->allPosts as $post):  ?>
      <li class="w3-padding-16">
        <img src="public/upload/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$post->id?>"><?=htmlspecialchars($post->title)?></a></span><br>
        <span><?=nl2br(htmlspecialchars(mb_strimwidth($post->body, 0, 120, '...')))?></span>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
  <hr>   
<!-- END Introduction Menu -->
</div>
<?php endif ?> 
<?php require 'inc/footer.php' ?>
