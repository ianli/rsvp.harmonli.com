<?php
  require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
  use google\appengine\api\cloud_storage\CloudStorageTools;

  $options = [ 'gs_bucket_name' => 'form2emailapp' ];
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
  <style>
    /**
     * Red    #FB561D
     * Blue   #375066
     * Yellow #FFCA48
     */

    .input-text {
      padding: 8px;
      width: 100%;
      border: none;
    }

    .radio-wrapper {
      float: left;
      margin-right: 16px;
      width: 36px;
      height: 36px;
      background-color: #fff;
      border-radius: 32px;
      cursor: pointer;
    }

    .radio-wrapper.active:after {
      content: ' ';
      display: block;
      margin: 6px;
      width: 24px;
      height: 24px;
      background-color: #FB561D;
      border-radius: 24px;
    }

    .radio-wrapper > input {
      display: none;
    }

    .input-meal {
      width: 100%;
      height: 96px;
      text-align: center;
      color: #375066;
      background-color: transparent;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: contain;
      border: none;
    }

    .input-meal.input-meal-beef {
      background-image: url(/images/beef.svg);
    }

    .input-meal.input-meal-fish {
      background-image: url(/images/fish.svg);
    }

    .input-meal.input-meal-veggie {
      background-image: url(/images/veggie.svg);
    }

    .input-submit {
      padding: 16px 24px;
      font-family: 'Mission Gothic';
      font-size: 24px;
      text-transform: uppercase;
      color: #FB561D;
      background-color: #fff;
      border: none;
    }

    .input-label {
      display: block;
      line-height: 36px;
      font-size: 24px;
      font-family: 'Roboto Slab';
      font-weight: normal;
      color: #375066;
      cursor: pointer;
    }

    #input-selfie {
      display: none;
    }

    #input-selfie-icon {
      margin-bottom: 8px;
      max-width: 96px;
      cursor: pointer;
    }
  </style>
</head>
<body class="page-story">

  <?php include '_sidenav.php' ?>

  <form
      action="<?php echo $upload_url ?>"
      method="POST"
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

        <input
            type="submit"
            value="Send to Beth & Ian"
            class="input-submit" />

        <div class="space-80"></div>

      </div>
    </div>

  </div>

  <!-- Javascripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
    $(function() {
      $('.radio-wrapper').click(function() {
        var $this = $(this);
        var $radio = $this.find('input');
        var checked = $radio.prop('checked');

        console.log('checked');

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

          console.log($this.prop('checked'));

          $('.radio-wrapper').each(function() {
            var $radio = $(this).children('input');

            if (name == $radio.attr('name')) {
              if ($radio.prop('checked')) {
                $(this).addClass('active');
              } else {
                $(this).removeClass('active');
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