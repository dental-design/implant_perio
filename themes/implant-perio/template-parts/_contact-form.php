<form id="footer-form" action="" name="footer-form">
        
        <div class="form-input-left-wrapper form-inner-wrapper">

            <!-- name -->
            <input type="text" placeholder="Your name*" required name="name" />

            <!-- email -->
            <input type="email" placeholder="Your email*" required name="email" />

            <!-- telephone -->
            <input type="tel" placeholder="Tel number*" required name="telephone" />

            <!-- new-patient -->
            <select name="patient_status" class="patient-status-dropdown">
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
                    
                    <input class="contact-form-checkbox" type="checkbox" value="y clicking 'Send message' you are consenting to us replying and storing your details (see our privacy policy)." name="Checkbox[]" id="checkbox-checkbox" style="display: none;">

                    <span class="form-blurb checkbox-check-text small-text">By clicking 'Send message' you are consenting to us replying and storing your details (see our <a href="<?= esc_url(get_permalink('3')); ?>" class="text-link">privacy policy</a>).</span>
                </label>
            </div>

            <input type="submit" class="button black-button transparent-button" value="Send message" />
        </div>

    </form>