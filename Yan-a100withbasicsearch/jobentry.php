<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!--Gibsan: Job Postings form-->
  <head>
    <title>Membership Form</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
      .error { background: #d33; color: white; padding: 0.2em; }
    </style>
  </head>
  <body>


<?php

if ( isset( $_POST["submitButton"] ) ) {
  processForm();
} else {
  displayForm( array() );
}

function validateField( $fieldName, $missingFields ) {
  if ( in_array( $fieldName, $missingFields ) ) {
    echo ' class="error"';
  }
}

function setValue( $fieldName ) {
  if ( isset( $_POST[$fieldName] ) ) {
    echo $_POST[$fieldName];
  }
}

function setChecked( $fieldName, $fieldValue ) {
  if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
    echo ' checked="checked"';
  }
}

function setSelected( $fieldName, $fieldValue ) {
  if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
    echo ' selected="selected"';
  }
}

function processForm() {
  $requiredFields = array( "firstName", "lastName", "password1", "password2", "gender" );
  $missingFields = array();

  foreach ( $requiredFields as $requiredField ) {
    if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {
      $missingFields[] = $requiredField;
    }
  }

  if ( $missingFields ) {
    displayForm( $missingFields );
  } else {
    displayThanks();
  }
}

function displayForm( $missingFields ) {
?>
    <h1>Membership Form</h1>

    <?php if ( $missingFields ) { ?>
    <p class="error">There were some problems with the form you submitted. Please complete the fields highlighted below and click Send Details to resend the form.</p>
    <?php } else { ?>
    <p>Thanks for choosing to join The Widget Club. To register, please fill in your details below and click Send Details. Fields marked with an asterisk (*) are required.</p>
    <?php } ?>

    <form action="registration.php" method="post">
      <div style="width: 30em;">

        <p>
          <label for="firstName"<?php validateField( "firstName", $missingFields ) ?>>Company Name *</label>
          <input type="text" name="firstName" id="firstName" value="<?php setValue( "firstName" ) ?>" />
        </p>
        <p>
          <label for="firstName2"<?php validateField( "firstName", $missingFields ) ?>>Contact Person *</label>
          <input type="text" name="firstName2" id="firstName2" value="<?php setValue( "firstName" ) ?>" />
        </p>
        <p>
          
          <label for="lastName"<?php validateField( "lastName", $missingFields ) ?>>Email Address *</label>
          <input type="text" name="lastName" id="lastName" value="<?php setValue( "lastName" ) ?>" />
        </p>
        <p>
          <label for="favoriteWidget2">Job Title*</label>
          <select name="favoriteWidget2" id="favoriteWidget2" size="1">
            <option value="superWidget"<?php setSelected( "favoriteWidget", "superWidget" ) ?>>The SuperWidget</option>
            <option value="megaWidget"<?php setSelected( "favoriteWidget", "megaWidget" ) ?>>The MegaWidget</option>
            <option value="wonderWidget"<?php setSelected( "favoriteWidget", "wonderWidget" ) ?>>The WonderWidget</option>
          </select>
</p>
        <p>
          <label for="favoriteWidget3">Job Type *</label>
          <select name="favoriteWidget3" id="favoriteWidget3" size="1">
            <option value="superWidget"<?php setSelected( "favoriteWidget", "superWidget" ) ?>>The SuperWidget</option>
            <option value="megaWidget"<?php setSelected( "favoriteWidget", "megaWidget" ) ?>>The MegaWidget</option>
            <option value="wonderWidget"<?php setSelected( "favoriteWidget", "wonderWidget" ) ?>>The WonderWidget</option>
          </select>
        </p>
        <p>
          <label for="favoriteWidget4">Category *</label>
          <select name="favoriteWidget4" id="favoriteWidget4" size="1">
            <option value="superWidget"<?php setSelected( "favoriteWidget", "superWidget" ) ?>>The SuperWidget</option>
            <option value="megaWidget"<?php setSelected( "favoriteWidget", "megaWidget" ) ?>>The MegaWidget</option>
            <option value="wonderWidget"<?php setSelected( "favoriteWidget", "wonderWidget" ) ?>>The WonderWidget</option>
          </select>
        </p>
        <p>
          <label for="firstName3"<?php validateField( "firstName", $missingFields ) ?>>Job Code *</label>
          <input type="text" name="firstName3" id="firstName3" value="<?php setValue( "firstName" ) ?>" />
        </p>
        <p>Job Descriprion        </p>
        <p>
          <textarea name="comments2" id="comments2" rows="4" cols="50"><?php setValue( "comments" ) ?>
          </textarea>
        </p>
        <p>Skill</p>
        <p>
  <textarea name="comments3" id="comments3" rows="4" cols="50"><?php setValue( "comments" ) ?>
          </textarea>
        </p>
        <p>
          <label for="favoriteWidget5">Educational Level*</label>
          <select name="favoriteWidget5" id="favoriteWidget5" size="1">
            <option value="superWidget"<?php setSelected( "favoriteWidget", "superWidget" ) ?>>The SuperWidget</option>
            <option value="megaWidget"<?php setSelected( "favoriteWidget", "megaWidget" ) ?>>The MegaWidget</option>
            <option value="wonderWidget"<?php setSelected( "favoriteWidget", "wonderWidget" ) ?>>The WonderWidget</option>
          </select>
        </p>
        <p>
          <label for="firstName4"<?php validateField( "firstName", $missingFields ) ?>>Experience *</label>
          <input type="text" name="firstName4" id="firstName4" value="<?php setValue( "firstName" ) ?>" />
        </p>
        <p>
          <label for="firstName5"<?php validateField( "firstName", $missingFields ) ?>>City *</label>
          <input type="text" name="firstName5" id="firstName5" value="<?php setValue( "firstName" ) ?>" />
        </p>
        <p>
          <label for="favoriteWidget6">State*</label>
          <select name="favoriteWidget6" id="favoriteWidget6" size="1">
            <option value="superWidget"<?php setSelected( "favoriteWidget", "superWidget" ) ?>>The SuperWidget</option>
            <option value="megaWidget"<?php setSelected( "favoriteWidget", "megaWidget" ) ?>>The MegaWidget</option>
            <option value="wonderWidget"<?php setSelected( "favoriteWidget", "wonderWidget" ) ?>>The WonderWidget</option>
          </select>
</p>
        <p>
          <label for="favoriteWidget7">Country*</label>
          <select name="favoriteWidget7" id="favoriteWidget7" size="1">
            <option value="superWidget"<?php setSelected( "favoriteWidget", "superWidget" ) ?>>The SuperWidget</option>
            <option value="megaWidget"<?php setSelected( "favoriteWidget", "megaWidget" ) ?>>The MegaWidget</option>
            <option value="wonderWidget"<?php setSelected( "favoriteWidget", "wonderWidget" ) ?>>The WonderWidget</option>
          </select>
        </p>
        <p>
          <label for="firstName6"<?php validateField( "firstName", $missingFields ) ?>>Min. Salary *</label>
          <input type="text" name="firstName6" id="firstName6" value="<?php setValue( "firstName" ) ?>" />
</p>
        <p>
          <label for="firstName7"<?php validateField( "firstName", $missingFields ) ?>>Max. Salary *</label>
          <input type="text" name="firstName7" id="firstName7" value="<?php setValue( "firstName" ) ?>" />
</p>
        <p>
          <label for="firstName8"<?php validateField( "firstName", $missingFields ) ?>>Posting Date *</label>
          <input type="text" name="firstName8" id="firstName8" value="<?php setValue( "firstName" ) ?>" />
          <label for="comments"><br />
          </label>
        </p>
        <div style="clear: both;">
          <p>
                <input type="submit" name="submitButton" id="submitButton" value="Send Details" />
                <input type="reset" name="resetButton" id="resetButton" value="Reset Form" style="margin-right: 20px;" />
          </p>
          <p>&nbsp;</p>
        </div>

      </div>
    </form>
<?php
}

function displayThanks() {
?>
    <h1>Thank You</h1>
    <p>Thank you, your application has been received.</p>
<?php
}
?>

  </body>
</html>
