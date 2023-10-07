<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
  $resourcesCss = ["css/login/style.css"];
  $resourcesJs = [];
  $resourcesJs[] = "js/login/javascript.js";
  $resourcesJs[] = "js/login/sprite/Bird.js";

	require_once("partial/header.php");
?>

<div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
      </div>
      <form method="post" class="form">
        <label for="user-email" style="padding-top:13px">Email</label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">Password</label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
      </form>
    </div>
  </div>
<?php
	require_once("partial/footer.php");