
<?php require 'inc/header.php' ?>

<!-- <?php if (empty($this->oPosts)): ?>
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
    <hr class="clear" /><br />
    <?php endforeach ?>

<?php endif ?> -->
        <!-- end div class w3-col l8 s12 -->
        <!-- </div> -->
    <div class="w3-col l8 s12">    
        <div class="w3-card-4 w3-margin w3-white">
            <div class="w3-container">
            <img src="public/upload/my-family.jpg" style="width:100%">
              <h3><b>DESCRIPTION</b></h3>
            </div>

            <div class="w3-container">
              <p>Xin chào mọi người, mình là Tony Tran. Mình là một người vui vẻ, hòa đồng, luôn luôn muốn giúp đỡ tất cả mọi người trong công việc cũng như cuộc sống. Đây là blog do mình lập nên để lưu trữ những bài viết thú vị của Dưọng Tony, vì học tập Dưọng nên mình cũng lấy tên là Tony. Để lấy động lực cho bản thân sống một cuộc sống thanh cao, hạnh phúc không hối hận. Đọc những bài viết Dượng Tony viết làm mình sống hào sảng hơn, giúp đỡ mọi người nhiều hơn. </p>
              <p style="font-size: 24px">Tony không chỉ là đôi mắt đẹp.........</p>
            </div>
        </div>
        <p class="center" style="font-size: 20px; color: lightblue;"><button style="border-radius: 5px; color: lightblue;" class="w3-button w3-padding-large w3-white w3-border" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>'"><b >Click để vào blog >></b></button></p>
    </div>    
        <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-card-2 w3-margin w3-margin-top">
      <img src="public/upload/avatar.jpg" style="width:100%">
        <div class="w3-container w3-white">
          <h4><b>Tony Tran</b></h4>
          <p>Don't ask me, Who is she? She just a beautiful girl and she always in my heart. There is only one happiness in this life, To LOVE and be LOVED</p>
        </div>
      </div>
      </div>
  <hr> 
<?php require 'inc/footer.php' ?>
