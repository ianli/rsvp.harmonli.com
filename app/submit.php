<?php
  // Sending mail in PHP
  // https://cloud.google.com/appengine/docs/php/mail/#PHP_Sending_mail_in_PHP
  // http://www.html-form-guide.com/email-form/php-email-form-attachment.html

  use \google\appengine\api\mail\Message;

  $email_message = '';

  $fields = array();
  if (array_key_exists('__FIELDS__', $_POST)) {
    $fields = preg_split("/\s*,\s*/", $_POST['__FIELDS__']);
  }

  foreach ($fields as $field) {
    $email_message .= $field . ': ' . $_POST[$field] . "\n";
  }

  foreach ($_POST as $key => $value) {
    if ($key == '__FIELDS__' || in_array($key, $fields)) {
      continue;
    }

    $email_message .= $key . ': ' . $value . "\n";
  }

  $files = array();
  foreach ($_FILES as $key => $value) {
    if (!in_array($key, $fields)) {
      continue;
    }

    $files[] = array(
          'name' => $value['name'],
          'data' => file_get_contents($value['tmp_name'])
        );
  }

  try {
    $message = new Message();
    $message->setSender('ianarli@gmail.com');
    $message->addTo('ianarli@gmail.com');
    $message->setSubject("RSVP to Beth & Ian's Wedding");
    $message->setTextBody($email_message);

    foreach ($files as $file) {
      $message->addAttachment($file['name'], $file['data']);
    }

    $message->send();
  } catch (InvalidArgumentException $e) {
    echo $e;
  }
?>
