<div class="dialog" id="footerDialog">
    <div class="dialog__inner">
        <button class="dialog__close" id="closeDialog">
            <span>
                <svg role="img">
                    <use xlink:href="#close" href="#close"></use>
                </svg>
            </span>
            
            <span class="hidden">Close</span>
        </button>

        <div class="dialog__body">
            Regrettably, our NHS services will end 31<sup>st</sup> March 2024. The practice has been providing dental care for over 40 years and have come to the difficult decision to cease to offer NHS care. All NHS treatments commenced before 1<sup>st</sup> April 2024 will be completed by the 31<sup>st</sup> March 2024. <strong>We will not be taking any further NHS appointments from 1<sup>st</sup> April 2024</strong>. If you wish to continue to receive NHS treatment you can find an NHS dentist from the NHS website at <a href="https://www.nhs.uk/" target="_blank" rel="noopener noreferrer">www.nhs.uk</a> online or by contacting <strong>NHS111</strong>.
            If you wish to discuss your treatment options, please do not hesitate to contact our team on 01202 672138 and they will be more than happy to help you.
        </div>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="close" width="100%" height="100%" viewBox="0 0 320 320" preserveAspectRatio="none">
        <path d="M310.6,265.4c12.5,12.5,12.5,32.8,0,45.2c-6.2,6.2-14.4,9.4-22.6,9.4s-16.4-3.1-22.6-9.4L160,205.3L54.6,310.6
    c-6.2,6.3-14.4,9.4-22.6,9.4s-16.4-3.1-22.6-9.4c-12.5-12.5-12.5-32.8,0-45.2L114.8,160L9.4,54.6C-3.1,42.1-3.1,21.9,9.4,9.4
    s32.8-12.5,45.2,0L160,114.8L265.4,9.4c12.5-12.5,32.8-12.5,45.2,0s12.5,32.7,0,45.2L205.2,160.1L310.6,265.4z" />
    </symbol>
</svg>

<script type="text/javascript">
    window.getDialogCookie = function(name) {
        let nameEQ = name + "=";
        let ca = document.cookie.split(';');

        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }

        return null;
    }

    function addDialogCookie(name) {
        let now = new Date();
        let time = now.getTime();
        let expireTime = time + 24 * 60 * 60 * 1000;
        
        now.setTime(expireTime);
        document.cookie = name + '=true; Path=/; Expires=' + now.toGMTString();
    }

    let dialog = document.getElementById("footerDialog");
    let dialogCookie = getDialogCookie('dialogCookie');
    let closeDialog = document.getElementById("closeDialog");

    window.addEventListener('load', function() {

        if (!dialogCookie) {

            addDialogCookie('dialogCookie');
            dialog.classList.add("dialog--active");

        } else if (dialogCookie == 'false') {

            dialog.classList.add("dialog--active");

        } else if (dialogCookie == 'true') {

            dialog.classList.remove("dialog--active");

        }

    });

    closeDialog.addEventListener('click', () => {
        dialog.classList.remove("dialog--active");
        document.cookie = 'cookieConsent' + '=true; Path=/;';
    });
</script>