<?php
  // Sending mail in PHP
  // https://cloud.google.com/appengine/docs/php/mail/#PHP_Sending_mail_in_PHP
  // http://www.html-form-guide.com/email-form/php-email-form-attachment.html

  use \google\appengine\api\mail\Message;

  $submitted = filter_var_array($_POST, FILTER_SANITIZE_SPECIAL_CHARS);

  $guest1 = $submitted['guest1'] || '';
  $guest2 = $submitted['guest2'] || '';
  $coming = $submitted['coming'] || '';
  $meal_beef = $submitted['meal_beef'] || '';
  $meal_fish = $submitted['meal_fish'] || '';
  $meal_veggie = $submitted['meal_veggie'] || '';
  $dietary_restrictions = $submitted['dietary_restrictions'] || '';
  $brunch = $submitted['brunch'] || '';
  $song = $submitted['song'] || '';

  $email_message = '';

  $selfie = [];
  if (isset($_FILES['selfie']) && isset($_FILES['selfie']['tmp_name'])
      && is_uploaded_file($_FILES['selfie']['tmp_name'])) {
    $selfie['name'] = $_FILES['selfie']['name'];
    $selfie['tmp_name'] = $_FILES['selfie']['tmp_name'];
    $selfie['data'] = file_get_contents($selfie['tmp_name']);
    $selfie['type'] = $_FILES['selfie']['type'];

    $selfie['size'] = $_FILES['selfie']['size'];

    // If selfie size is more than 5MB...
    if ($selfie['size'] > 5242880) {
      $error_message = 'Size of selfie picture is too big (more than 5MB).';
      include 'views/error.php';
      exit;
    }
  }

  $email_message = <<<EMAIL
guest1: {$submitted['guest1']}
guest2: {$submitted['guest2']}
coming: {$submitted['coming']}
meal_beef: {$submitted['meal_beef']}
meal_fish: {$submitted['meal_fish']}
meal_veggie: {$submitted['meal_veggie']}
dietary_restrictions: {$submitted['dietary_restrictions']}
brunch: {$submitted['brunch']}
song: {$submitted['song']}
EMAIL;

  try {
    $message = new Message();
    $message->setSender('ianarli@gmail.com');
    $message->addTo('ianarli@gmail.com');
    $message->setSubject("RSVP to Beth & Ian's Wedding");
    $message->setTextBody($email_message);

    if (!empty($selfie)) {
      $message->addAttachment($selfie['name'], $selfie['data']);
    }

    $message->send();

    include 'views/thankyou.php';
  } catch (Exception $e) {
    $error_message = <<<HTML
The following error occurred when sending to Beth &amp; Ian:<br><br>
$e
HTML;

    include 'views/error.php';
  }
?>
