<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to PubChem-BioAssay</title>
<meta name="description" content="Custom Login Form Styling with CSS3" />
<meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/modernizr.custom.63321.js"></script>
<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
<style>
body {
background: #e1c192 url(images/wood_pattern.jpg);
}
</style>
</head>
<body>
<div class="container">
<section class="main">
<form class="form-2" action="logincheck.php" method="POST">
<h1 align="center"><span class="log-in">PubChem-BioAssay</span></h1>
<p class="float">
<label for="login"><i class="icon-user"></i>Username</label>
<input type="text" name="username" placeholder="Username or email">
</p>
<p class="float">
<label for="password"><i class="icon-lock"></i>Password</label>
<input type="password" name="password" placeholder="Password" class="showpassword">
</p>
<p class="clearfix">
<a href="Usersignup.php" class="log-twitter">Sign Up Here</a>
<input type="submit" name="submit" value="Log in">
</p>
</form>​​
</section>
</div>
<!-- jQuery if needed -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
$(".showpassword").each(function(index,input) {
var $input = $(input);
$("<p class='opt'/>").append(
$("<input type='checkbox' class='showpasswordcheckbox' id='showPassword'
/>").click(function() {
var change = $(this).is(":checked") ? "text" : "password";
var rep = $("<input placeholder='Password' type='" + change + "' />")
.attr("id", $input.attr("id"))
.attr("name", $input.attr("name"))
.attr('class', $input.attr('class'))
.val($input.val())
.insertBefore($input);
$input.remove();
$input = rep;
})
).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
});
$('#showPassword').click(function(){
if($("#showPassword").is(":checked")) {
$('.icon-lock').addClass('icon-unlock');
$('.icon-unlock').removeClass('icon-lock');
} else {
$('.icon-unlock').addClass('icon-lock');
$('.icon-lock').removeClass('icon-unlock');
}
});
});
</script>
</body>
</html>