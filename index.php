<?php
include 'header.php';

$conn = new PDO("mysql:host=192.168.56.1;dbname=gebruikersrollen", 'mainuser', 'dev01dev');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT userName, userPassword FROM users");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['btn-login'])) {
  $stmt = $conn->prepare("SELECT userName, userPassword, userFunction FROM users WHERE userName = '".$_POST['userName']."' AND userPassword = '".$_POST['userPassword']."'");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if (count($result) === 1) {
    $_SESSION['userName'] = $_POST['userName'];
    $_SESSION['userPassword'] = $_POST['userPassword'];
    $_SESSION['userFunction'] = $_POST['userFunction'];

    foreach ($result as $row) {
      $_SESSION['userFunction'] = $row['userFunction'];
    }
  } else {
    echo 'Wrong username/password combination.';
  }

}
?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Home</h1>
      <p>Deze site moet worden beveiligd. De volgende rollen moeten kunnen worden onderscheiden:</p>
      <ul>
          <li><strong>Voorraadbeheerder</strong>: heeft toegang tot voorraden en producten</li>
          <li><strong>Accountmanager</strong>: heeft toegang tot locaties, voorraden en producten</li>
          <li><strong>Manager</strong>: heeft toegang tot locaties, voorraden en producten</li>
          <li><strong>Systeembeheerder</strong>: heeft toegang tot gebruikersbeheer</li>
      </ul>
      <p>Wat is de meest praktisch manier om de site te beveiligen, rekening houdend met eventuele uitbreiding in de toekomst?</p>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Phasellus aenean</h6>
      <address class="btmspace-15">
        Company Name<br>
        Street Name &amp; Number<br>
        Town<br>
        Postcode/Zip
      </address>
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Imperdiet aliquam</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Neque porta elit</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Dignissim tellus vitae posuere laoreet dui nulla pulvinar dolor at ultricies lectus orci aliquam ipsum vestibulum at.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Iaculis mauris</h6>
      <ul class="nospace linklist">
        <li><a href="#">Consectetur commodo orci</a></li>
        <li><a href="#">Vitae tempus maecenas</a></li>
        <li><a href="#">Feugiat eget nisi vel</a></li>
        <li><a href="#">Scelerisque fusce suscipit</a></li>
        <li><a href="#">At sodales facilisis vivamus</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Quis auctor nulla</h6>
      <p>Risus vivamus consectetur neque augue eu tincidunt urna varius nec phasellus.</p>
      <p>Dapibus rutrum interdum nullam commodo lacus sed neque porttitor.</p>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include 'footer.php' ?>