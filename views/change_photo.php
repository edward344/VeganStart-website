<br>
<div class="w3-container w3-white w3-padding">

    <?php 
    if ($this->session->flashdata("message") !== null)
    {
        echo '<div class="alert w3-panel w3-pale-red w3-border w3-center">';
        echo '<p>' . $this->session->flashdata("message") . '</p>';
        echo '</div>';
    }    
    ?>
    
    <div class="login-form">
        <h3>Choose Photo</h3>
        <?php echo form_open_multipart("profile/save_image"); ?>
            <input type="file" name="image" size="20" />
            <button class="w3-button w3-blue" type="submit">Save</button>
        </form>
    </div>
</div>