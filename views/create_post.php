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
    <h3 class="w3-center">Create Post</h3>
    <div class="login-form">
        <?php echo form_open_multipart("blog/save_post"); ?>
            <input type="file" name="image" size="20" />
            <hr>
            <label>Title:</label>
            <input type="text" name="title" class="w3-input w3-border w3-section" required>
            <label>About:</label>
            <textarea class="w3-input w3-border w3-section" name="about" rows="10" required></textarea>
            <button class="w3-button w3-blue" type="submit">Save</button>
        </form>
    </div>
</div>