<section id="contact-container">
    <h2 id="contact-title">Contact</h2>
    <p class="">Do you have a question, an idea, or a project you need help with?
        Get in Touch with me!</p>

    <form action="mailto:eaaron25@gmail.com" method="post" enctype="text/plain" id="contact-me-form">
        Name:<br><input type="text" name="cName"> <br>
        Message:<br><input type="text" name="message"><br>
        <input type="submit" value="Send" class="button-1">
    </form>
    <a aria-label="Chat on WhatsApp" href="https://wa.me/256759720699"> <img alt="Chat on WhatsApp"
            src="https://res.cloudinary.com/the-pouch/image/upload/v1697667047/dev_dakii/WhatsAppButtonGreenSmall_rk8ydm.svg" class="whatsapp"/>
    </a>
</section>
<style>
    #contact-container {
        background-color: rgb(21, 152, 149);
        display: flex;
        flex-flow: column;
        align-items: center;
        scroll-margin-top: 10vh;
    }

    /* CSS */
    .button-1 {
        background-color: #EA4C89;
        border-radius: 8px;
        border-style: none;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        line-height: 20px;
        margin-top: 2rem;
        outline: none;
        padding: 10px 16px;
        text-align: center;
        transition: color 100ms;
        vertical-align: baseline;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-1:hover,
    .button-1:focus {
        background-color: #F082AC;
    }

    .whatsapp {
      
    }
</style>
