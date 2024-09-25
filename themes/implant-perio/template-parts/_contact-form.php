<form id="footer-form" method="post" action="https://www.securedent.net/submit.ashx" name="footer-form">
        
    <div class="form-input-left-wrapper form-inner-wrapper">

        <!-- name -->
        <input type="text" placeholder="Your name*" required name="name" />

        <!-- email -->
        <input type="email" placeholder="Your email*" required name="submit_by" />

        <!-- telephone -->
        <input type="tel" placeholder="Tel number*" required name="telephone" />

        <!-- new-patient -->
        <select name="patient_status" class="patient-status-dropdown" aria-label="Dentist or patient dropdown">
            <option value="" disabled selected>Dentist or patient?</option>
            <option value="dentist">Dentist</option>
            <option value="patient">Patient</option>
        </select>

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

                <span class="form-blurb checkbox-check-text small-text">By clicking 'Send message' you are consenting to us replying and storing your details (see our <a href="<?= esc_url(get_permalink('3')); ?>" class="text-link">privacy policy</a>).</span>
            </label>
        </div>

        <input type="submit" class="button black-button transparent-button" value="Send message" />
    </div>

    <input type="hidden" name="form_uid" value="16ec2a23-12a0-4633-bc61-346d620dbf42">          
    <input name="required" type="hidden" value="name,submit_by,telephone,checkbox">
    <input type="hidden" name="data_order" value="name,submit_by,telephone,patient_status,message,checkbox">
    <input name="ok_url" type="hidden" id="ok_url" value="<?= esc_url(get_permalink()); ?>?contact-form-success#footer-contact-section">
    <input name="not_ok_url" type="hidden" id="not_ok_url" value="<?= esc_url(get_permalink()); ?>?contact-form-failure#footer-contact-section">

</form>