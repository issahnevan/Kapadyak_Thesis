
<?php 
session_start();

if (!isset($_SESSION['SessionEmail'])) {
 header("location:login.php?=LoginFirst");
 }
// $temp = $_SESSION['user_id'];
// session_destroy();
// session_start();
// $_SESSION['user_id'] = $temp;
// ob_start(); 
// // Establish Database Connection


// if(isset($_SESSION['MailingAddress'])){
//     $MailingAdd = $_SESSION["MailingAddress"];
//     echo "<script> sessionStorage.setItem('MailingAddress','$MailingAdd');</script>";
// }


// if(isset( $_SESSION["AccountType"])){

// $AccountType = $_SESSION["AccountType"];
//     echo"<script> sessionStorage.setItem('AccountType','$AccountType')</script>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="ICON" type="image/x-icon" href="Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home / Kapadyak</title>
</head>
<body>
    <div class="index-container">
		<div class="index-sidenav">
			<?php include 'Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include 'Includes/Header.php'; ?>
		</div>

		<div class="index-content">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor nunc sed nulla lacinia, id pretium dolor maximus. Aliquam at nulla faucibus, interdum leo eu, cursus justo. Phasellus facilisis sagittis congue. Etiam nec venenatis nibh. Nulla est diam, rhoncus vel viverra non, scelerisque ut dolor. Pellentesque ante justo, luctus non rutrum porttitor, accumsan elementum est. Aenean ut lectus efficitur, tristique ligula sit amet, suscipit ligula. Integer in orci in nisi dapibus sodales.

Maecenas consectetur enim nec imperdiet suscipit. Duis feugiat pretium ex, sed blandit nulla aliquam sit amet. Nulla vel turpis a odio fringilla commodo et in neque. Aenean rutrum, enim vel tempus eleifend, neque justo venenatis neque, vel bibendum est nulla egestas tellus. Nunc et sapien elementum, pellentesque nibh vel, lacinia urna. Curabitur ac convallis mi. In suscipit efficitur dictum. Donec facilisis, velit non placerat interdum, libero sem vestibulum felis, nec convallis justo neque id massa. Pellentesque lobortis dolor in dui sagittis, a elementum libero mattis. Etiam at metus nibh. Pellentesque suscipit ligula nulla, at tincidunt felis tristique et. Integer tristique quam urna, et mattis justo aliquet vel. Aliquam dictum tellus metus, vitae euismod diam ullamcorper vitae.

Nulla efficitur auctor diam sed tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec at accumsan leo, eu rutrum sapien. Nullam et euismod mi. Donec sodales quam lorem, eu ultricies nisi scelerisque sit amet. Mauris sit amet sollicitudin massa. Vivamus vulputate tellus ultrices ipsum malesuada consequat. Ut et egestas orci, at venenatis neque. Quisque dictum aliquet metus, quis fermentum purus consectetur eget. Nulla sit amet tortor ut arcu vehicula feugiat viverra vel sem. Phasellus convallis, justo et venenatis aliquam, sem massa convallis dolor, in lobortis eros diam vel nibh. Sed dictum lectus nunc, et vestibulum ligula tincidunt a.

Nam at metus consectetur, tincidunt nunc eu, lobortis massa. Duis vitae sem risus. Quisque elementum blandit dignissim. Suspendisse dignissim, lacus in ullamcorper blandit, libero arcu luctus est, id blandit dolor nisl in enim. Vivamus fermentum posuere nisi vel tincidunt. Duis a facilisis arcu, sed porta mauris. Morbi pharetra a augue eu euismod. Quisque id risus nulla. Quisque ac ante nec mi rhoncus auctor. Phasellus facilisis, odio in molestie consequat, diam erat posuere ante, eget euismod nulla est sed augue. Morbi imperdiet pharetra neque, ac tincidunt magna porta quis.

Nunc tincidunt, est eu mollis interdum, orci quam finibus enim, ac elementum arcu nibh vitae enim. Aliquam sagittis lectus magna, eu posuere enim sodales sed. Aliquam neque ex, eleifend sed felis eget, egestas luctus metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer lacinia quam eu massa rhoncus, sed varius risus interdum. Morbi lacinia, odio a bibendum maximus, eros tellus posuere mauris, bibendum vehicula velit velit eget nisl. Sed at lobortis velit, at commodo dui. Mauris elementum dolor ac risus finibus, eget rhoncus risus porta.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor nunc sed nulla lacinia, id pretium dolor maximus. Aliquam at nulla faucibus, interdum leo eu, cursus justo. Phasellus facilisis sagittis congue. Etiam nec venenatis nibh. Nulla est diam, rhoncus vel viverra non, scelerisque ut dolor. Pellentesque ante justo, luctus non rutrum porttitor, accumsan elementum est. Aenean ut lectus efficitur, tristique ligula sit amet, suscipit ligula. Integer in orci in nisi dapibus sodales.

Maecenas consectetur enim nec imperdiet suscipit. Duis feugiat pretium ex, sed blandit nulla aliquam sit amet. Nulla vel turpis a odio fringilla commodo et in neque. Aenean rutrum, enim vel tempus eleifend, neque justo venenatis neque, vel bibendum est nulla egestas tellus. Nunc et sapien elementum, pellentesque nibh vel, lacinia urna. Curabitur ac convallis mi. In suscipit efficitur dictum. Donec facilisis, velit non placerat interdum, libero sem vestibulum felis, nec convallis justo neque id massa. Pellentesque lobortis dolor in dui sagittis, a elementum libero mattis. Etiam at metus nibh. Pellentesque suscipit ligula nulla, at tincidunt felis tristique et. Integer tristique quam urna, et mattis justo aliquet vel. Aliquam dictum tellus metus, vitae euismod diam ullamcorper vitae.

Nulla efficitur auctor diam sed tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec at accumsan leo, eu rutrum sapien. Nullam et euismod mi. Donec sodales quam lorem, eu ultricies nisi scelerisque sit amet. Mauris sit amet sollicitudin massa. Vivamus vulputate tellus ultrices ipsum malesuada consequat. Ut et egestas orci, at venenatis neque. Quisque dictum aliquet metus, quis fermentum purus consectetur eget. Nulla sit amet tortor ut arcu vehicula feugiat viverra vel sem. Phasellus convallis, justo et venenatis aliquam, sem massa convallis dolor, in lobortis eros diam vel nibh. Sed dictum lectus nunc, et vestibulum ligula tincidunt a.

Nam at metus consectetur, tincidunt nunc eu, lobortis massa. Duis vitae sem risus. Quisque elementum blandit dignissim. Suspendisse dignissim, lacus in ullamcorper blandit, libero arcu luctus est, id blandit dolor nisl in enim. Vivamus fermentum posuere nisi vel tincidunt. Duis a facilisis arcu, sed porta mauris. Morbi pharetra a augue eu euismod. Quisque id risus nulla. Quisque ac ante nec mi rhoncus auctor. Phasellus facilisis, odio in molestie consequat, diam erat posuere ante, eget euismod nulla est sed augue. Morbi imperdiet pharetra neque, ac tincidunt magna porta quis.


Nunc tincidunt, est eu mollis interdum, orci quam finibus enim, ac elementum arcu nibh vitae enim. Aliquam sagittis lectus magna, eu posuere enim sodales sed. Aliquam neque ex, eleifend sed felis eget, egestas luctus metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer lacinia quam eu massa rhoncus, sed varius risus interdum. Morbi lacinia, odio a bibendum maximus, eros tellus posuere mauris, bibendum vehicula velit velit eget nisl. Sed at lobortis velit, at commodo dui. Mauris elementum dolor ac risus finibus, eget rhoncus risus porta.</p>
		</div>
	</div>
</body>
</html>