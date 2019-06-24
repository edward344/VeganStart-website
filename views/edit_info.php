<br>
<div class="w3-container w3-white w3-padding">
    <div class="login-form">
        
        <h3>Edit your Profile</h3>
        
        <?php echo form_open("profile/edit_info"); ?>
            <p>
            <?php echo form_error('email','<p class="w3-text-red">','</p>'); ?>
            <label class="w3-text-blue"><b>Email Address:</b></label>
            <input class="w3-input w3-border" type="text" name="email" value="<?php echo $profile->email; ?>"></p>
            <p>
            <?php echo form_error('name','<p class="w3-text-red">','</p>'); ?>
            <label class="w3-text-blue"><b>Full Name:</b></label>
            <input class="w3-input w3-border" type="text" name="name" value="<?php echo $profile->name; ?>"></p>
            
            <p>
            <label class="w3-text-blue"><b>Gender:</b></label></p>
            <p>
            <input class="w3-radio" type="radio" name="gender" value="male" <?php if ($profile->gender == "male") echo "checked"; ?>>
            <label>Male</label></p>
            <p>
            <input class="w3-radio" type="radio" name="gender" value="female" <?php if ($profile->gender == "female") echo "checked"; ?>>
            <label>Female</label></p>
            
            <p>
            <label class="w3-text-blue"><b>Select your Country:</b></label>
            <select class="w3-select" name="country">
                <option <?php if ($profile->country == "Afghanistan") echo "selected";?>>Afghanistan</option>
                <option <?php if ($profile->country == "Albania") echo "selected";?>>Albania</option>
                <option <?php if ($profile->country == "Algeria") echo "selected";?>>Algeria</option>
                <option <?php if ($profile->country == "Andorra") echo "selected";?>>Andorra</option>
                <option <?php if ($profile->country == "Angola") echo "selected";?>>Angola</option>
                <option <?php if ($profile->country == "Antigua & Deps") echo "selected";?>>Antigua & Deps</option>
                <option <?php if ($profile->country == "Argentina") echo "selected";?>>Argentina</option>
                <option <?php if ($profile->country == "Armenia") echo "selected";?>>Armenia</option>
                <option <?php if ($profile->country == "Australia") echo "selected";?>>Australia</option>
                <option <?php if ($profile->country == "Austria") echo "selected";?>>Austria</option>
                <option <?php if ($profile->country == "Azerbaijan") echo "selected";?>>Azerbaijan</option>
                <option <?php if ($profile->country == "Bahamas") echo "selected";?>>Bahamas</option>
                <option <?php if ($profile->country == "Bahrain") echo "selected";?>>Bahrain</option>
                <option <?php if ($profile->country == "Bangladesh") echo "selected";?>>Bangladesh</option>
                <option <?php if ($profile->country == "Barbados") echo "selected";?>>Barbados</option>
                <option <?php if ($profile->country == "Belarus") echo "selected";?>>Belarus</option>
                <option <?php if ($profile->country == "Belgium") echo "selected";?>>Belgium</option>
                <option <?php if ($profile->country == "Belize") echo "selected";?>>Belize</option>
                <option <?php if ($profile->country == "Benin") echo "selected";?>>Benin</option>
                <option <?php if ($profile->country == "Bhutan") echo "selected";?>>Bhutan</option>
                <option <?php if ($profile->country == "Bolivia") echo "selected";?>>Bolivia</option>
                <option <?php if ($profile->country == "Bosnia Herzegovina") echo "selected";?>>Bosnia Herzegovina</option>
                <option <?php if ($profile->country == "Botswana") echo "selected";?>>Botswana</option>
                <option <?php if ($profile->country == "Brazil") echo "selected";?>>Brazil</option>
                <option <?php if ($profile->country == "Brunei") echo "selected";?>>Brunei</option>
                <option <?php if ($profile->country == "Bulgaria") echo "selected";?>>Bulgaria</option>
                <option <?php if ($profile->country == "Burkina") echo "selected";?>>Burkina</option>
                <option <?php if ($profile->country == "Burundi") echo "selected";?>>Burundi</option>
                <option <?php if ($profile->country == "Cambodia") echo "selected";?>>Cambodia</option>
                <option <?php if ($profile->country == "Cameroon") echo "selected";?>>Cameroon</option>
                <option <?php if ($profile->country == "Canada") echo "selected";?>>Canada</option>
                <option <?php if ($profile->country == "Cape Verde") echo "selected";?>>Cape Verde</option>
                <option <?php if ($profile->country == "Central African Rep") echo "selected";?>>Central African Rep</option>
                <option <?php if ($profile->country == "Chad") echo "selected";?>>Chad</option>
                <option <?php if ($profile->country == "Chile") echo "selected";?>>Chile</option>
                <option <?php if ($profile->country == "China") echo "selected";?>>China</option>
                <option <?php if ($profile->country == "Colombia") echo "selected";?>>Colombia</option>
                <option <?php if ($profile->country == "Comoros") echo "selected";?>>Comoros</option>
                <option <?php if ($profile->country == "Congo") echo "selected";?>>Congo</option>
                <option <?php if ($profile->country == "Congo {Democratic Rep}") echo "selected";?>>Congo {Democratic Rep}</option>
                <option <?php if ($profile->country == "Costa Rica") echo "selected";?>>Costa Rica</option>
                <option <?php if ($profile->country == "Croatia") echo "selected";?>>Croatia</option>
                <option <?php if ($profile->country == "Cuba") echo "selected";?>>Cuba</option>
                <option <?php if ($profile->country == "Cyprus") echo "selected";?>>Cyprus</option>
                <option <?php if ($profile->country == "Czech Republic") echo "selected";?>>Czech Republic</option>
                <option <?php if ($profile->country == "Denmark") echo "selected";?>>Denmark</option>
                <option <?php if ($profile->country == "Djibouti") echo "selected";?>>Djibouti</option>
                <option <?php if ($profile->country == "Dominica") echo "selected";?>>Dominica</option>
                <option <?php if ($profile->country == "Dominican Republic") echo "selected";?>>Dominican Republic</option>
                <option <?php if ($profile->country == "East Timor") echo "selected";?>>East Timor</option>
                <option <?php if ($profile->country == "Ecuador") echo "selected";?>>Ecuador</option>
                <option <?php if ($profile->country == "Egypt") echo "selected";?>>Egypt</option>
                <option <?php if ($profile->country == "El Salvador") echo "selected";?>>El Salvador</option>
                <option <?php if ($profile->country == "Equatorial Guinea") echo "selected";?>>Equatorial Guinea</option>
                <option <?php if ($profile->country == "Eritrea") echo "selected";?>>Eritrea</option>
                <option <?php if ($profile->country == "Estonia") echo "selected";?>>Estonia</option>
                <option <?php if ($profile->country == "Ethiopia") echo "selected";?>>Ethiopia</option>
                <option <?php if ($profile->country == "Fiji") echo "selected";?>>Fiji</option>
                <option <?php if ($profile->country == "Finland") echo "selected";?>>Finland</option>
                <option <?php if ($profile->country == "France") echo "selected";?>>France</option>
                <option <?php if ($profile->country == "Gabon") echo "selected";?>>Gabon</option>
                <option <?php if ($profile->country == "Gambia") echo "selected";?>>Gambia</option>
                <option <?php if ($profile->country == "Georgia") echo "selected";?>>Georgia</option>
                <option <?php if ($profile->country == "Germany") echo "selected";?>>Germany</option>
                <option <?php if ($profile->country == "Ghana") echo "selected";?>>Ghana</option>
                <option <?php if ($profile->country == "Greece") echo "selected";?>>Greece</option>
                <option <?php if ($profile->country == "Grenada") echo "selected";?>>Grenada</option>
                <option <?php if ($profile->country == "Guatemala") echo "selected";?>>Guatemala</option>
                <option <?php if ($profile->country == "Guinea") echo "selected";?>>Guinea</option>
                <option <?php if ($profile->country == "Guinea-Bissau") echo "selected";?>>Guinea-Bissau</option>
                <option <?php if ($profile->country == "Guyana") echo "selected";?>>Guyana</option>
                <option <?php if ($profile->country == "Haiti") echo "selected";?>>Haiti</option>
                <option <?php if ($profile->country == "Honduras") echo "selected";?>>Honduras</option>
                <option <?php if ($profile->country == "Hungary") echo "selected";?>>Hungary</option>
                <option <?php if ($profile->country == "Iceland") echo "selected";?>>Iceland</option>
                <option <?php if ($profile->country == "India") echo "selected";?>>India</option>
                <option <?php if ($profile->country == "Indonesia") echo "selected";?>>Indonesia</option>
                <option <?php if ($profile->country == "Iran") echo "selected";?>>Iran</option>
                <option <?php if ($profile->country == "Iraq") echo "selected";?>>Iraq</option>
                <option <?php if ($profile->country == "Ireland {Republic}") echo "selected";?>>Ireland {Republic}</option>
                <option <?php if ($profile->country == "Israel") echo "selected";?>>Israel</option>
                <option <?php if ($profile->country == "Italy") echo "selected";?>>Italy</option>
                <option <?php if ($profile->country == "Ivory Coast") echo "selected";?>>Ivory Coast</option>
                <option <?php if ($profile->country == "Jamaica") echo "selected";?>>Jamaica</option>
                <option <?php if ($profile->country == "Japan") echo "selected";?>>Japan</option>
                <option <?php if ($profile->country == "Jordan") echo "selected";?>>Jordan</option>
                <option <?php if ($profile->country == "Kazakhstan") echo "selected";?>>Kazakhstan</option>
                <option <?php if ($profile->country == "Kenya") echo "selected";?>>Kenya</option>
                <option <?php if ($profile->country == "Kiribati") echo "selected";?>>Kiribati</option>
                <option <?php if ($profile->country == "Korea North") echo "selected";?>>Korea North</option>
                <option <?php if ($profile->country == "Korea South") echo "selected";?>>Korea South</option>
                <option <?php if ($profile->country == "Kosovo") echo "selected";?>>Kosovo</option>
                <option <?php if ($profile->country == "Kuwait") echo "selected";?>>Kuwait</option>
                <option <?php if ($profile->country == "Kyrgyzstan") echo "selected";?>>Kyrgyzstan</option>
                <option <?php if ($profile->country == "Laos") echo "selected";?>>Laos</option>
                <option <?php if ($profile->country == "Latvia") echo "selected";?>>Latvia</option>
                <option <?php if ($profile->country == "Lebanon") echo "selected";?>>Lebanon</option>
                <option <?php if ($profile->country == "Lesotho") echo "selected";?>>Lesotho</option>
                <option <?php if ($profile->country == "Liberia") echo "selected";?>>Liberia</option>
                <option <?php if ($profile->country == "Libya") echo "selected";?>>Libya</option>
                <option <?php if ($profile->country == "Liechtenstein") echo "selected";?>>Liechtenstein</option>
                <option <?php if ($profile->country == "Lithuania") echo "selected";?>>Lithuania</option>
                <option <?php if ($profile->country == "Luxembourg") echo "selected";?>>Luxembourg</option>
                <option <?php if ($profile->country == "Macedonia") echo "selected";?>>Macedonia</option>
                <option <?php if ($profile->country == "Madagascar") echo "selected";?>>Madagascar</option>
                <option <?php if ($profile->country == "Malawi") echo "selected";?>>Malawi</option>
                <option <?php if ($profile->country == "Malaysia") echo "selected";?>>Malaysia</option>
                <option <?php if ($profile->country == "Maldives") echo "selected";?>>Maldives</option>
                <option <?php if ($profile->country == "Mali") echo "selected";?>>Mali</option>
                <option <?php if ($profile->country == "Malta") echo "selected";?>>Malta</option>
                <option <?php if ($profile->country == "Marshall Islands") echo "selected";?>>Marshall Islands</option>
                <option <?php if ($profile->country == "Mauritania") echo "selected";?>>Mauritania</option>
                <option <?php if ($profile->country == "Mauritius") echo "selected";?>>Mauritius</option>
                <option <?php if ($profile->country == "Mexico") echo "selected";?>>Mexico</option>
                <option <?php if ($profile->country == "Micronesia") echo "selected";?>>Micronesia</option>
                <option <?php if ($profile->country == "Moldova") echo "selected";?>>Moldova</option>
                <option <?php if ($profile->country == "Monaco") echo "selected";?>>Monaco</option>
                <option <?php if ($profile->country == "Mongolia") echo "selected";?>>Mongolia</option>
                <option <?php if ($profile->country == "Montenegro") echo "selected";?>>Montenegro</option>
                <option <?php if ($profile->country == "Morocco") echo "selected";?>>Morocco</option>
                <option <?php if ($profile->country == "Mozambique") echo "selected";?>>Mozambique</option>
                <option <?php if ($profile->country == "Myanmar, {Burma}") echo "selected";?>>Myanmar, {Burma}</option>
                <option <?php if ($profile->country == "Namibia") echo "selected";?>>Namibia</option>
                <option <?php if ($profile->country == "Nauru") echo "selected";?>>Nauru</option>
                <option <?php if ($profile->country == "Nepal") echo "selected";?>>Nepal</option>
                <option <?php if ($profile->country == "Netherlands") echo "selected";?>>Netherlands</option>
                <option <?php if ($profile->country == "New Zealand") echo "selected";?>>New Zealand</option>
                <option <?php if ($profile->country == "Nicaragua") echo "selected";?>>Nicaragua</option>
                <option <?php if ($profile->country == "Niger") echo "selected";?>>Niger</option>
                <option <?php if ($profile->country == "Nigeria") echo "selected";?>>Nigeria</option>
                <option <?php if ($profile->country == "Norway") echo "selected";?>>Norway</option>
                <option <?php if ($profile->country == "Oman") echo "selected";?>>Oman</option>
                <option <?php if ($profile->country == "Pakistan") echo "selected";?>>Pakistan</option>
                <option <?php if ($profile->country == "Palau") echo "selected";?>>Palau</option>
                <option <?php if ($profile->country == "Panama") echo "selected";?>>Panama</option>
                <option <?php if ($profile->country == "Papua New Guinea") echo "selected";?>>Papua New Guinea</option>
                <option <?php if ($profile->country == "Paraguay") echo "selected";?>>Paraguay</option>
                <option <?php if ($profile->country == "Peru") echo "selected";?>>Peru</option>
                <option <?php if ($profile->country == "Philippines") echo "selected";?>>Philippines</option>
                <option <?php if ($profile->country == "Poland") echo "selected";?>>Poland</option>
                <option <?php if ($profile->country == "Portugal") echo "selected";?>>Portugal</option>
                <option <?php if ($profile->country == "Qatar") echo "selected";?>>Qatar</option>
                <option <?php if ($profile->country == "Romania") echo "selected";?>>Romania</option>
                <option <?php if ($profile->country == "Russian Federation") echo "selected";?>>Russian Federation</option>
                <option <?php if ($profile->country == "Rwanda") echo "selected";?>>Rwanda</option>
                <option <?php if ($profile->country == "St Kitts & Nevis") echo "selected";?>>St Kitts & Nevis</option>
                <option <?php if ($profile->country == "St Lucia") echo "selected";?>>St Lucia</option>
                <option <?php if ($profile->country == "Saint Vincent & the Grenadines") echo "selected";?>>Saint Vincent & the Grenadines</option>
                <option <?php if ($profile->country == "Samoa") echo "selected";?>>Samoa</option>
                <option <?php if ($profile->country == "San Marino") echo "selected";?>>San Marino</option>
                <option <?php if ($profile->country == "Sao Tome & Principe") echo "selected";?>>Sao Tome & Principe</option>
                <option <?php if ($profile->country == "Saudi Arabia") echo "selected";?>>Saudi Arabia</option>
                <option <?php if ($profile->country == "Senegal") echo "selected";?>>Senegal</option>
                <option <?php if ($profile->country == "Serbia") echo "selected";?>>Serbia</option>
                <option <?php if ($profile->country == "Seychelles") echo "selected";?>>Seychelles</option>
                <option <?php if ($profile->country == "Sierra Leone") echo "selected";?>>Sierra Leone</option>
                <option <?php if ($profile->country == "Singapore") echo "selected";?>>Singapore</option>
                <option <?php if ($profile->country == "Slovakia") echo "selected";?>>Slovakia</option>
                <option <?php if ($profile->country == "Slovenia") echo "selected";?>>Slovenia</option>
                <option <?php if ($profile->country == "Solomon Islands") echo "selected";?>>Solomon Islands</option>
                <option <?php if ($profile->country == "Somalia") echo "selected";?>>Somalia</option>
                <option <?php if ($profile->country == "South Africa") echo "selected";?>>South Africa</option>
                <option <?php if ($profile->country == "South Sudan") echo "selected";?>>South Sudan</option>
                <option <?php if ($profile->country == "Spain") echo "selected";?>>Spain</option>
                <option <?php if ($profile->country == "Sri Lanka") echo "selected";?>>Sri Lanka</option>
                <option <?php if ($profile->country == "Sudan") echo "selected";?>>Sudan</option>
                <option <?php if ($profile->country == "Suriname") echo "selected";?>>Suriname</option>
                <option <?php if ($profile->country == "Swaziland") echo "selected";?>>Swaziland</option>
                <option <?php if ($profile->country == "Sweden") echo "selected";?>>Sweden</option>
                <option <?php if ($profile->country == "Switzerland") echo "selected";?>>Switzerland</option>
                <option <?php if ($profile->country == "Syria") echo "selected";?>>Syria</option>
                <option <?php if ($profile->country == "Taiwan") echo "selected";?>>Taiwan</option>
                <option <?php if ($profile->country == "Tajikistan") echo "selected";?>>Tajikistan</option>
                <option <?php if ($profile->country == "Tanzania") echo "selected";?>>Tanzania</option>
                <option <?php if ($profile->country == "Thailand") echo "selected";?>>Thailand</option>
                <option <?php if ($profile->country == "Togo") echo "selected";?>>Togo</option>
                <option <?php if ($profile->country == "Tonga") echo "selected";?>>Tonga</option>
                <option <?php if ($profile->country == "Trinidad & Tobago") echo "selected";?>>Trinidad & Tobago</option>
                <option <?php if ($profile->country == "Tunisia") echo "selected";?>>Tunisia</option>
                <option <?php if ($profile->country == "Turkey") echo "selected";?>>Turkey</option>
                <option <?php if ($profile->country == "Turkmenistan") echo "selected";?>>Turkmenistan</option>
                <option <?php if ($profile->country == "Tuvalu") echo "selected";?>>Tuvalu</option>
                <option <?php if ($profile->country == "Uganda") echo "selected";?>>Uganda</option>
                <option <?php if ($profile->country == "Ukraine") echo "selected";?>>Ukraine</option>
                <option <?php if ($profile->country == "United Arab Emirates") echo "selected";?>>United Arab Emirates</option>
                <option <?php if ($profile->country == "United Kingdom") echo "selected";?>>United Kingdom</option>
                <option <?php if ($profile->country == "United States") echo "selected";?>>United States</option>
                <option <?php if ($profile->country == "Uruguay") echo "selected";?>>Uruguay</option>
                <option <?php if ($profile->country == "Uzbekistan") echo "selected";?>>Uzbekistan</option>
                <option <?php if ($profile->country == "Vanuatu") echo "selected";?>>Vanuatu</option>
                <option <?php if ($profile->country == "Vatican City") echo "selected";?>>Vatican City</option>
                <option <?php if ($profile->country == "Venezuela") echo "selected";?>>Venezuela</option>
                <option <?php if ($profile->country == "Vietnam") echo "selected";?>>Vietnam</option>
                <option <?php if ($profile->country == "Yemen") echo "selected";?>>Yemen</option>
                <option <?php if ($profile->country == "Zambia") echo "selected";?>>Zambia</option>
                <option <?php if ($profile->country == "Zimbabwe") echo "selected";?>>Zimbabwe</option> 
            </select>
            </p>
                
            <p>
            <?php echo form_error('city','<p class="w3-text-red">','</p>'); ?>
            <label class="w3-text-blue"><b>City, State:</b></label>
            <input class="w3-input w3-border" type="text" name="city" value="<?php echo $profile->city; ?>"></p>
            <p>
            <?php echo form_error('about','<p class="w3-text-red">','</p>'); ?>
            <label class="w3-text-blue"><b>About:</b></label>
            <textarea class="w3-input w3-border" name="about" rows="6"><?php echo $profile->about; ?></textarea>
            </p>
                
            <button class="w3-btn w3-blue" type="submit">Save</button>
        </form>
    </div>
</div>