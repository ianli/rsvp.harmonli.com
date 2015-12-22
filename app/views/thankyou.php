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

  <div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h1>RSVP Sent</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-9">
        <div class="leadquote">
          As I write this letter,<br>
          Send my love to you.
          <div class="text-right">
            &mdash;
            <a href="https://www.youtube.com/watch?v=6jLCDlHsVk4">P.S. I Love You</a>,
            Beatles
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <h2>Thanks for the message!</h2>

        <div class="space-32"></div>

        <div class="imageframe-169"
             style="background-image:url('/images/tiffanys-phone.jpg')"></div>

        <div class="space-32"></div>

        <p>
          Beth and Ian will receive this message:
        </p>

        <div class="space-16"></div>

        <table class="table">
          <tbody>
            <tr>
              <td>
                <b>Guest 1:</b>
              </td>
              <td>
                <?php echo $submitted['guest1']; ?>
              </td>
            </tr>

            <tr>
              <td>
                <b>Guest 2:</b>
              </td>
              <td>
                <?php echo $submitted['guest2']; ?>
              </td>
            </tr>

            <tr>
              <td>
                <b>Coming:</b>
              </td>
              <td>
                <?php echo $submitted['coming']; ?>
              </td>
            </tr>

            <tr>
              <td>
                <b>Meal (beef):</b>
              </td>
              <td>
                <?php echo $submitted['meal_beef']; ?>
              </td>
            </tr>

            <tr>
              <td>
                <b>Meal (fish):</b>
              </td>
              <td>
                <?php echo $submitted['meal_fish']; ?>
              </td>
            </tr>

            <tr>
              <td>
                <b>Meal (veggie):</b>
              </td>
              <td>
                <?php echo $submitted['meal_veggie']; ?>
              </td>
            </tr>

            <tr>
              <td>
                <b>Dietary restrictions:</b>
              </td>
              <td>
                <?php echo $submitted['dietary_restrictions']; ?>
            </td>
            </tr>

            <tr>
              <td>
                <b>Brunch:</b>
              </td>
              <td>
                <?php echo $submitted['brunch']; ?>
            </td>
            </tr>

            <tr>
              <td>
                <b>Selfie:</b>
              </td>
              <td>
                <?php echo empty($selfie) ? 'No' : 'Yes'; ?>
            </td>
            </tr>

            <tr>
              <td>
                <b>Song:</b>
              </td>
              <td>
                <?php echo $submitted['song']; ?>
              </td>
            </tr>

            <tr>
              <td>
                <b>Message:</b>
              </td>
              <td>
                <?php echo $submitted['message']; ?>
              </td>
            </tr>
          </tbody>
        </table>

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