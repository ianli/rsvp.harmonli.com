<?php
  require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
  use google\appengine\api\cloud_storage\CloudStorageTools;

  $options = [ 'gs_bucket_name' => 'rsvp-harmonli' ];
  $upload_url = CloudStorageTools::createUploadUrl('/submit', $options);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>RSVP to Beth &amp; Ian's Wedding</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
  <link rel="stylesheet" href="http://wedding.harmonli.com/fonts/mission-gothic/stylesheet.css">
  <link rel="stylesheet" href="http://wedding.harmonli.com/css/main.css">
  <link rel="stylesheet" href="/css/rsvp.css">
</head>
<body class="page-story">

  <?php include '_sidenav.php' ?>

  <form
      action="<?php echo $upload_url ?>"
      method="POST"
      enctype="multipart/form-data"
      id="form-rsvp"
      class="container">

    <div class="row">
      <div class="col-xs-12">
        <h1>RSVP</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-9">
        <div class="leadquote">
          First 20 will receive a prize in the mail.
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <h2 id="guest-field">Write your name(s)</h2>

        <div class="space-32"></div>

        <p>
          <input
              type="text"
              name="guest1"
              id="guest1"
              class="input-text" />

          <span class="space-8"></span>

          <input
              type="text"
              name="guest2"
              id="guest2"
              class="input-text" />
        </p>

        <div class="space-64"></div>

        <h2 id="coming-field">Are you coming?</h2>

        <div class="space-32"></div>

        <div class="radio-wrapper">
          <input
              type="radio"
              name="coming"
              value="Yes"
              id="coming-yes" />
        </div>

        <label
            for="coming-yes"
            class="input-label"
            style="padding-left: 52px;">
          Yes, <small>we'll leave our hearts<br>
          in San&nbsp;Francisco.</small>
        </label>

        <span class="space-12"></span>

        <div class="radio-wrapper">
          <input
              type="radio"
              name="coming"
              value="No"
              id="coming-no" />
        </div>

        <label
            for="coming-no"
            class="input-label"
            style="padding-left: 52px;">
          No, <small>we don't know the way<br>
          to San&nbsp;Jose.</small>
        </label>

        <div class="space-64"></div>

        <h2 id="meal-field">Meal Preference</h2>

        <div class="space-24"></div>

        <p>
          Write initials of each guest.
        </p>

        <div class="row">
          <div class="col-xs-4">
            <input
                type="text"
                name="meal_beef"
                class="input-meal input-meal-beef"
                id="input-meal-beef" />
            <label
                for="input-meal-beef"
                class="input-label text-center">
              Beef
            </label>
          </div>
          <div class="col-xs-4">
            <input
                type="text"
                name="meal_fish"
                class="input-meal input-meal-fish"
                id="input-meal-fish" />
            <label
                for="input-meal-fish"
                class="input-label text-center">
              Fish
            </label>
          </div>
          <div class="col-xs-4">
            <input
                type="text"
                name="meal_veggie"
                class="input-meal input-meal-veggie"
                id="input-meal-veggie" />
            <label
                for="input-meal-veggie"
                class="input-label text-center">
              Veggie
            </label>
          </div>
        </div>

        <div class="space-24"></div>

        <p>
          Any dietary restrictions?
        </p>

        <p>
          <input
              type="text"
              name="dietary_restrictions"
              id="dietary_restrictions"
              class="input-text" />
        </p>

        <div class="space-64"></div>

        <h2 id="brunch-field">Sunday brunch too?</h2>

        <div class="space-24"></div>

        <p>
          Sir Francis Drake Hotel at 10:00 AM
        </p>

        <div class="space-16"></div>

        <div class="row">
          <div class="col-xs-6">
            <div class="radio-wrapper">
              <input
                  type="radio"
                  name="brunch"
                  value="Yes"
                  id="brunch-yes" />
            </div>

            <label
                for="brunch-yes"
                class="input-label">
              Yes!
            </p>
          </div>
          <div class="col-xs-6">
            <div class="radio-wrapper">
              <input
                  type="radio"
                  name="brunch"
                  value="No"
                  id="brunch-no" />
            </div>

            <label
                for="brunch-no"
                class="input-label">
              No :(
            </label>
          </div>
        </div>

        <div class="space-64"></div>

        <h2>Send us a selfie</h2>

        <div class="space-24"></div>

        <div class="row">
          <div class="col-xs-12 col-sm-3 text-center">
            <img
                id="input-selfie-icon"
                src="/images/camera.svg" />

            <input
                type="file"
                name="selfie"
                id="input-selfie"
                accept="image/*" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <label
                for="input-selfie"
                class="input-label hidden-xs">
              Click on the camera to upload a selfie picture.
            </label>
            <label
                for="input-selfie"
                class="input-label visible-xs text-center">
              Click on the camera to upload a selfie picture.
            </label>
          </div>
        </div>

        <div class="space-64"></div>

        <h2>Suggest a song</h2>

        <div class="space-24"></div>

        <p>
          <input
              type="text"
              name="song"
              id="song"
              class="input-text" />
        </p>

        <div class="space-64"></div>

        <h2>Message us</h2>

        <div class="space-24"></div>

        <p>
          <textarea
              name="message"
              id="message"
              class="input-textarea"
              rows="5"></textarea>
        </p>

        <div class="space-64"></div>

        <p>
          <input
              type="submit"
              value="Send to Beth & Ian"
              class="input-submit" />
        </p>

        <div class="space-80"></div>

      </div>
    </div>

  </div>

  <!-- Javascripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
    $(function() {
      // Clicking on .radio-wrapper toggles the checked property
      // of the wrapped input.
      $('.radio-wrapper').click(function() {
        var $radio = $(this).find('input');
        var checked = $radio.prop('checked');

        $radio
            .prop('checked', !checked)
            // Trigger the change event.
            .change();
      });

      // Handle click and change on the radio inputs.
      $('.radio-wrapper > input')
        .click(function(event) {
          // Stop propagation,
          // so that .radio-wrapper doesn't get a click event.
          event.stopPropagation();
        })
        .change(function(event) {
          event.stopPropagation();
          event.preventDefault();

          var $this = $(this);
          var $wrapper = $this.parent();
          var name = $this.attr('name');

          // Cycle through all .radio-wrapper elements.
          // If .radio-wrapper > .input has the same name as the .input
          // that just changed, then mark the wrapper as active.
          // Otherwise, UN-mark the wrapper as active.
          $('.radio-wrapper').each(function() {
            var $this = $(this);
            var $radio = $this.children('input');

            if (name == $radio.attr('name')) {
              if ($radio.prop('checked')) {
                $this.addClass('active');
              } else {
                $this.removeClass('active');
              }
            }
          });
        });

      // Handle click on the selfie icon.
      $('#input-selfie-icon').click(function() {
        $('#input-selfie').click();
      });

      // Handle change on the selfie file input.
      $('#input-selfie').change(function(event) {
        var reader = new FileReader();
        reader.onload = function() {
          $('#input-selfie-icon').attr('src', reader.result);
        };
        reader.readAsDataURL(event.target.files[0]);
      });

      // Handle form submit.
      $('#form-rsvp').submit(function(event) {
        if (!$('input[name=guest1]').val()) {
          location.hash = 'guest-field';
          alert('Write at least one name.');
          return false;
        }

        if (!$('input[name=coming]:checked').val()) {
          location.hash = 'coming-field';
          alert('Are you coming?');
          return false;
        }

        if (!$('input[name=meal_beef]').val() &&
            !$('input[name=meal_fish]').val() &&
            !$('input[name=meal_veggie]').val()) {
          location.hash = 'meal-field';
          alert('Select a meal for each guest.');
          return false;
        }

        if (!$('input[name=brunch]:checked').val()) {
          location.hash = 'brunch-field';
          alert('Are you attending brunch on Sunday?');
          return false;
        }
      });
    });
  </script>

  <!-- StatCounter -->
  <script type="text/javascript">
    var sc_project=10621625;
    var sc_invisible=1;
    var sc_security="4c932313";
    var scJsHost = (("https:" == document.location.protocol) ?
    "https://secure." : "http://www.");
    document.write("<sc"+"ript type='text/javascript' src='" +
    scJsHost+
    "statcounter.com/counter/counter.js'></"+"script>");
  </script>
</body>
</html>
