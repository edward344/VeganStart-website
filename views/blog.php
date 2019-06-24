<br>
<div class="w3-container w3-white w3-padding">
    <?php 
    if ($this->session->flashdata("message") !== null)
    {
        echo '<div class="alert w3-panel w3-pale-green w3-border w3-center">';
        echo '<p>' . $this->session->flashdata("message") . '</p>';
        echo '</div>';
    }    
    ?>
    <h1 class="comic w3-center">Welcome to the VeganStart blog!</h1>
    
    <?php echo anchor("blog/create_post","Create Post"); ?>
    
    <hr>
    
    <?php
        foreach ($results as $post)
        {
            echo '<div class="w3-row-padding">';
                echo '<div class="w3-col w3-third">';
                    echo '<img src="' . site_url("uploads/" . $post->image) . '" class="w3-border w3-padding" style="width:100%">';
                echo '</div>';
                echo '<div class="w3-col w3-twothird">';
                    echo '<h3>' . anchor("blog/detail/" . $post->id , $post->title) . '</h3>';
                    echo date("F d, Y",strtotime($post->timestamp)) . " | By " . $post->username;
                    echo '<p>' . substr($post->about,0,200) . ".." . '</p>';
                echo '</div>';
            echo '</div>';
            echo '<hr>';
        }
    ?>
    <div class="w3-center">
        <?php echo $links; ?>
    </div>
</div>