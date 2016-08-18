<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>
<h4 class="theme-subheading" id="komentare">Komentáre</h4>

<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
		<p>This post is password protected. Enter the password to view comments.</p>
  	<?php endif; ?>
<?php endif; ?>

<?php if($comments) : ?>
        
    	<?php foreach($comments as $comment) : ?>
            <div class="media comment">
                <div class="media-body">
                    <h4 class="media-heading"><?php comment_author_link(); ?> <small><?php comment_date(); ?> o <?php comment_time(); ?></small></h4>
                    <?php comment_text(); ?>
                </div>
            </div>
        <?php endforeach; ?>
        
<?php else : ?>
	<p>Zatiaľ neboli pridané žiadne komentáre.</p>
<?php endif; ?>

<?php if(comments_open()) : ?>
    <h4 class="theme-subheading" id="pridat-novy-komentar">Pridať nový komentár</h4>
    <?php if(get_option('comment_registration') && !$user_ID) : ?>
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            <?php if($user_ID) : ?>
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
            <?php else : ?>
                <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                <input type="hidden" name="token" value="<?php echo generate_token(); ?>" />
                <div class="form-group">
                    <label for="author">Meno</label>
                    <input type="text" name="author" class="form-control" id="author" placeholder="meno" value="<?php echo $comment_author; ?>" />
                </div>
                 
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="e-mail" value="<?php echo $comment_author_email; ?>" />
                </div>
                
                <div class="form-group">
                    <label for="url">Web</label>
                    <input type="text" name="url" class="form-control" id="url" placeholder="url" value="<?php echo $comment_author_url; ?>" />
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="comment">Text</label>
                <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Pridať</button>
            
            <?php do_action('comment_form', $post->ID); ?>
        </form>
    <?php endif; ?>
<?php else : ?>
	<p>The comments are closed.</p>
<?php endif; ?>