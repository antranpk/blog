            
<!-- end div class="w3-content" -->
    </div>    
        <footer>
            <div class="w3-padding w3-xlarge w3-lavender">
            <a href="<?=ROOT_URL?>" title="Homeage"><i class="fa fa-home"> Home Blog</i></a><br>
            <?php if (!empty($_SESSION['is_logged'])): ?>
                You are Admin - <a href="<?=ROOT_URL?>?p=admin&amp;a=logout" style="font-size: 34px">Logout</a><br>
                <a href="<?=ROOT_URL?>?p=blog&amp;a=all">View All Blog Posts</a>
            <?php else: ?>
                <a href="<?=ROOT_URL?>?p=admin&amp;a=login">Backend Login</a>
            <?php endif ?>
            </p>
            </div>
        </footer>
    </body>
</html>
