<br>
<div class="w3-container w3-white w3-padding">
    <h1 class="w3-center comic"><?php echo $profile->name; ?>'s Page</h1>
    <hr>
    
    <div class="w3-row-padding">
    
        <div class="w3-col w3-third">
            <img src="<?php echo site_url("uploads/" . $profile->image); ?>" alt="profile photo" style="width:100%">
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
            
        </div>
    </div>
</div>