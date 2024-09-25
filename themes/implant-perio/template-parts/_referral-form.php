<form id="referral-form" method="post" action="https://www.securedent.net/submit.ashx" name="referral-form" enctype="multipart/form-data">
        
    <div class="form-input-left-wrapper form-inner-wrapper">

        <!-- name -->
        <input type="text" placeholder="Dentist name*" required name="dentist_name" />

        <!-- email -->
        <input type="email" placeholder="Dentist email*" required name="submit_by" />

        <!-- telephone -->
        <input type="tel" placeholder="Dentist telephone*" required name="dentist_telephone" />
        
        <!-- name -->
        <input type="text" placeholder="Patient name*" required name="patient_name" />

        <!-- email -->
        <input type="email" placeholder="Patient email*" required name="patient_email" />

        <!-- telephone -->
        <input type="tel" placeholder="Patient telephone*" required name="patient_telephone" />

        <!-- new-patient -->
        <select name="treatment_options" class="treatment-options-dropdown" aria-label="Treatment select dropdown">
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
                
                <input class="contact-form-checkbox" type="checkbox" value="By clicking 'Send message' you are consenting to us replying and storing your details (see our privacy policy)." name="checkbox" id="checkbox-checkbox" required />

                <span class="form-blurb small-text">By clicking 'Send message' you are consenting to us replying and storing your details (see our <a href="<?= esc_url(get_permalink('3')); ?>" class="text-link">privacy policy</a>).</span>
            </label>
        </div>

        <input type="hidden" name="form_uid" value="aa6b431f-23b3-4ba2-a750-f13308f11304">          
        <input name="required" type="hidden" value="dentist_name,submit_by,dentist_telephone,patient_name,patient_email,patient_telephone,checkbox">
        <input type="hidden" name="data_order" value="dentist_name,submit_by,dentist_telephone,patient_name,patient_email,patient_telephone,treatment_options,file,message,checkbox">
        <input name="ok_url" type="hidden" id="ok_url" value="<?= esc_url(get_permalink()); ?>?contact-form-success#footer-contact-section">
        <input name="not_ok_url" type="hidden" id="not_ok_url" value="<?= esc_url(get_permalink()); ?>?contact-form-failure#footer-contact-section">

        <input type="submit" class="button black-button transparent-button" value="Send message" />
    </div>

</form>