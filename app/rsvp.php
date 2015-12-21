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
      class="container">

    <div class="row">
      <div class="col-xs-12">
        <h1>RSVP</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-9">
        <div class="leadquote">
          Kindly respond by February 29, 2016
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <h2>Write your name(s)</h2>

        <div class="space-32"></div>

        <p>
          <input
              type="text"
              name="guest1"
              class="input-text" />

          <span class="space-8"></span>

          <input
              type="text"
              name="guest2"
              class="input-text" />
        </p>

        <div class="space-64"></div>

        <h2>Are you coming?</h2>

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
          Yay, let's celebrate!
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
          Sorry, can't make it.
        </label>

        <div class="space-64"></div>

        <h2>Meal Preference</h2>

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
              class="input-text" />
        </p>

        <div class="space-64"></div>

        <h2>Sunday brunch too?</h2>

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
                id="input-selfie"
                type="file"
                name="selfie"
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
              class="input-text" />
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

      $('#input-selfie-icon').click(function() {
        $('#input-selfie').click();
      });

      $('#input-selfie').change(function(event) {
        var reader = new FileReader();
        reader.onload = function() {
          $('#input-selfie-icon').attr('src', reader.result);
        };
        reader.readAsDataURL(event.target.files[0]);
      });
    });
  </script>

</body>
</html>
