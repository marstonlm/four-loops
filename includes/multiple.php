<?php 
/**
* multiple.php is a postback application designed to provide a 
* contact form for users to email our clients.  
* 
* multiple.php provides a larger form with more elements to provide 
* a richer example form.
*
* @package nmCAPTCHA2
* @author Luann Marston <luann.webster@seattlecentral.edu>
* @version 2 2021/02/21
* @link http://www.luannmarston.com/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see contact_include.php 
* @todo none
*/

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

  <div>
    <p>How would you like us to get back to you?</p>
    <input type="radio" id="no_reply" name="no_reply" value="no_reply">
    <label for="no_reply" tabindex="10">No reply Needed</label>
    <input type="radio" id="phone" name="phone" value="phone">
    <label for="phone" tabindex="11">Phone</label>

    <input type="radio" id="email" name="email" value="email">
    <label for="email" tabindex="12">Email</label>
  </div>

    <div class="row">
      <div class="col-l">
        <label for="First_Name">First Name</label><br />
        <input type="text" name="First_Name" required="required" placeholder="First Name (required)" title="Name is required" tabindex="13" autofocus />
      </div>

      <div class="col-r">
        <label for="Last_Name">Last Name</label><br />
        <input type="text" name="Last_Name" required="required" placeholder="Last Name (required)" title="Last Name is required" tabindex="14" autofocus />
      </div>
    </div>

    <div class="row">
      <div class="col-l">
        <label for="Phone_Number">Phone Number</label><br />
        <input type="tel" name="Phone_Number" placeholder="Phone Number" tabindex="15">
      </div>
      <div class="col-r">
        <label for="email_address">Email Address</label>
        <input type="email" name="Email_Address" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="16"/>
      </div>
    </div>

  <div class="message">
    <label for="message">Message</label><br />
    <textarea  name="message" placeholder="Please tell us why your writing (required)" required="required" tabindex="17" ></textarea>
  </div>

  <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>" tabindex="71" ></div>
  <div>
    <input type="submit" value="submit" tabindex="72" />
  </div>
</form>
<!-- END OF HTML FORM -->