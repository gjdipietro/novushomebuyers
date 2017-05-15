<!-- contactform -->
<div class="c-contact">
    <div class="o-container__inner">
        <form method="post" name="myForm" action="https://www.myclientgenie.com/FormHTML.aspx"> 
            <input type="hidden" name="accountid" value="7601"> 
            <input type="hidden" name="key" value="<?php echo get_post_meta($post->ID, 'contactFormID', true); ?>"> 
            <h2 class="c-contact__title">
                <?php echo (!get_post_meta($post->ID, 'contactFormHeading', true)) ? 'Contact us for a free consultation and a free real estate book.' : get_post_meta($post->ID, 'contactFormHeading', true); ?>
            </h2>
            <div class="c-contact__form">
                <input type="text" name="firstname" value="" size="25" placeholder="Name" class="c-contact__form__entry">
                <input type="email" name="email" value="" size="25" placeholder="Email" class="c-contact__form__entry">
                <input type="tel" name="phone" value="" size="25" placeholder="Phone" class="c-contact__form__entry">
                <button type="submit" class="e-btn e-btn--blue e-btn--skew c-contact__form__entry c-contact__form__entry--button">
                    <span>
                        <?php echo (!get_post_meta($post->ID, 'contactFormButton', true)) ? 'Get your free book' : get_post_meta($post->ID, 'contactFormButton', true); ?>
                    </span>
                </button>
            </div>
            <p class="c-contact__fineprint">
                Your information will never be shared with any third party.
            </p>
        </form>
    </div>
</div>
<!-- /contactform -->
