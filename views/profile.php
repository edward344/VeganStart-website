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
    <h1 class="w3-center comic">Welcome <?php echo $profile->name; ?></h1>
    <hr>
    
    <div class="w3-row-padding">
    
        <div class="w3-col w3-third">
            <img src="<?php echo site_url("uploads/" . $profile->image); ?>" alt="profile photo" style="width:100%">
            <?php echo anchor("profile/change_photo","Change Photo"); ?>
        </div>
    
        <div class="w3-col w3-twothird">
            <h3 class="w3-center comic">PROFILE INFORMATION</h3>
            
            <h3 class="comic">About</h3>
            <p class="w3-justify"><?php echo $profile->about; ?></p>
            
            <h3 class="comic">Email Address</h3>
            <p><?php echo $profile->email; ?></p>
            
            <h3 class="comic">Country</h3>
            <p><?php echo $profile->country; ?></p>
           
           <h3 class="comic">City</h3>
            <p><?php echo $profile->city; ?></p>
            
            <h3 class="comic">Gender</h3>
            <p><?php echo $profile->gender; ?></p>
            
            <div class="w3-right">
                <?php echo anchor("profile/edit_info","Edit Profile Information"); ?>
            </div>
        </div>
    </div>
    
</div>