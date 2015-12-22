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
</head>
<body class="page-story">

  <?php include '_sidenav.php' ?>

  <div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h1>Thank you!</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <h2>Your RSVP is sent</h2>

        <div class="space-32"></div>

        <p>
          <b>Guest 1:</b> <?php echo $submitted['guest1']; ?>
        </p>

        <p>
          <b>Guest 2:</b> <?php echo $submitted['guest2']; ?>
        </p>

        <p>
          <b>Coming:</b> <?php echo $submitted['coming']; ?>
        </p>

        <p>
          <b>Meal (beef):</b> <?php echo $submitted['meal_beef']; ?>
        </p>

        <p>
          <b>Meal (fish):</b> <?php echo $submitted['meal_fish']; ?>
        </p>

        <p>
          <b>Meal (veggie):</b> <?php echo $submitted['meal_veggie']; ?>
        </p>

        <p>
          <b>Dietary restrictions:</b> <?php echo $submitted['dietary_restrictions']; ?>
        </p>

        <p>
          <b>Brunch:</b> <?php echo $submitted['brunch']; ?>
        </p>

        <p>
          <b>Selfie:</b> <?php echo empty($selfie) ? 'No' : 'Yes'; ?>
        </p>

        <p>
          <b>Song:</b> <?php echo $submitted['song']; ?>
        </p>

        <div class="space-32"></div>

        <p>
          <a href="/"
             class="button">
            Send another RSVP
          </a>
        </p>

        <div class="space-80"></div>

      </div>
    </div>

  </div>

</body>
</html>