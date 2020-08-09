
<section class="cta" id="contact" >
    <div class="cta-content">
      <div class="container">
         <div class="cta-mainfrm">
         <h2>Stop waiting.<br>Contact me</h2>
          <form class="cta-form" method="POST">
           <input type="email" name="email" id="" class="btn btn-outline btn-xl js-scroll-trigger" placeholder="Email">
           <textarea name="message" id="" cols="30" rows="5" class="btn btn-outline btn-xl js-scroll-trigger" placeholder ="Short message" resizable="false"></textarea>
           
           <?php
             if($_SERVER['REQUEST_METHOD']=="POST"):?>
                 <?php
                   if(validate_form_input($_POST) ):
                 ?>
                 <div class="message__form">
                     <h5>Your message has been successfully sent</h5>
                 </div>
                 <?php
                   else:
                 ?>
                 <div class="message__form">
                     <h5>The invalid email or message</h5>
                 </div>
                 <?php
                   endif;
                 ?>
            <?php
              endif;
            ?>  
           <button href="#contact" class="btn btn-outline btn-xl js-scroll-trigger btn-submit">Send</button>
          </div>
         </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>