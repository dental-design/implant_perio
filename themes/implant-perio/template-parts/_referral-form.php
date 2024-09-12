<form id="referral-form" action="" name="referral-form">
        
        <div class="form-input-left-wrapper form-inner-wrapper">
    
            <!-- name -->
            <input type="text" placeholder="Dentist name*" required name="dentist_name" />

            <!-- email -->
            <input type="email" placeholder="Dentist email*" required name="dentist_email" />

            <!-- telephone -->
            <input type="tel" placeholder="Dentist telephone*" required name="dentist_telephone" />
            
            <!-- name -->
            <input type="text" placeholder="Patient name*" required name="patient_name" />

            <!-- email -->
            <input type="email" placeholder="Patient email*" required name="patient_email" />

            <!-- telephone -->
            <input type="tel" placeholder="Patient telephone*" required name="patient_telephone" />

            <!-- new-patient -->
            <select name="treatment_options" class="treatment-options-dropdown">
                <option value="" disabled selected>Treatment*</option>
                <option value="dental implants">Dental Implants</option>
                <option value="oral surgery">Advanced Procedures</option>
                <option value="periodontics">Periodontics</option>
            </select>

            <!-- file upload -->
            <div class="full-width file-upload-wrapper">
                <input type="file" name="file" id="file" class="file-upload" accept="image/*,.pdf" hidden />
            </div>

        </div>

        <div class="form-textarea-wrapper form-inner-wrapper">
            <!-- message -->
            <textarea type="textarea" placeholder="Your message" name="message"></textarea>
        </div>

        <div class="checkbox-submit flex-row">
            <div class="checkbox-wrapper flex-row">
                
                <label>
                    <div class="check checkbox-check">
                        <svg width="14px" height="14px" viewBox="0 0 18 18">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                    </div>
                    
                    <input class="contact-form-checkbox" type="checkbox" value="y clicking 'Send message' you are consenting to us replying and storing your details (see our privacy policy)." name="Checkbox[]" id="checkbox-checkbox" style="display: none;">

                    <span class="form-blurb small-text">By clicking 'Send message' you are consenting to us replying and storing your details (see our <a href="<?= esc_url(get_permalink('3')); ?>" class="text-link">privacy policy</a>).</span>
                </label>
            </div>

            <input type="submit" class="button black-button transparent-button" value="Send message" />
        </div>

    </form>