<br>
<div class="w3-container w3-white w3-padding">
    <h3 class="w3-center comic"><?php echo $post->title; ?></h3>
    <p class="w3-center"> <?php echo date("F d, Y",strtotime($post->timestamp)) . " | By " . $post->username; ?></p>
    <div class="content">
        <img src="<?php echo site_url("uploads/" . $post->image); ?>" alt="post image" style="width:100%">
        <p class="w3-justify georgia"><?php echo $post->about; ?></p>
        <hr>
        
        <?php echo form_open("blog/save_comment/" . $post->id); ?>
            <textarea class="w3-input w3-border" name="comment" rows="3" placeholder="Add a comment..." required></textarea>
            <button class="w3-button w3-blue w3-section" type="submit">Submit</button>
        </form>
        
        <h3><b><?php echo $comment_count; ?> Comments</b></h3>

        <?php
            foreach ($comments as $comment)
            {
                echo '<div class="comments">';
                    echo '<h3 class="name">' . $comment->username . '</h3>';
                    echo '<p class="w3-small">' . date("F d, Y - h:ia",strtotime($comment->timestamp)) . '</p>';
                    echo '<p>' . $comment->comment . '</p>';
                    echo '<hr>';
                echo '</div>';
            }
        ?>

    </div>
</div>