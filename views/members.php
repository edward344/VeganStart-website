<br>
<div class="w3-container w3-white w3-padding">
    <h1>All Members (<?php echo $total_users; ?>)</h1>
    
    <hr>
    <?php
        foreach ($results as $user)
        {
            echo '<div class="w3-row-padding content">';
                echo '<div class="w3-col w3-half">';
                    echo '<img src="' . site_url("uploads/" . $user->image) . '" class="w3-border w3-padding" style="width:100%">';
                echo '</div>';
                echo '<div class="w3-col w3-half">';
                    echo '<h3>' . anchor("members/detail/" . $user->id , $user->name) . '</h3>';
                    echo '<p>' . $user->city . ', ' . $user->country . '</p>';
                echo '</div>';
            echo '</div>';
            echo '<hr>';
        }
    ?>
    <div class="w3-container w3-center">
        <?php echo $links; ?>
    </div>
    
</div>