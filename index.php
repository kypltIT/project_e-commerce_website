<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ananas</title>
	<script src="https://kit.fontawesome.com/5a1b59b2e2.js" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.svg" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body class="animsition">
	<?php
	include "function.php"
	?>

	<?php
	include "header.php"
	?>

	<?php
	$action = "";
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	switch ($action) {
		case "":
		case "index":
			include "homepage.php";
			break;

		case "contact":
			include "contact.php";
			break;

		case "blog":
			include "blog.php";
			break;

		case "shoping-cart":
			include "shoping-cart.php";
			break;

		case "about-us":
			include "about-us.php";
			break;

		case "contact":
			include "contact.php";
			break;

		case "product":
			include "product.php";
			break;

		default:
			include "404.php";
			break;
	}
	?>

	<?php
	include "footer.php"
	?>
</body>
<!--===============================================================================================-->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<!--===============================================================================================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<!--===============================================================================================-->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!--===============================================================================================-->
<script>
	$('document').on('change', function() {
		if ($('#confirm').is(":check")) {
			$('#submit').prop('disable', '')
		} else {
			$('#submit').prop('disable', 'disable')
		}
	})

	$('document').ready(function() {
		<?php
		if (isset($_GET['error_login'])) {
		?>
			toastr.error('Invalid login info. Please check again!')
			$('$registerModal').modal('show')
		<?php
		} ?>
	})

	$('document').ready(function() {
		<?php
		if (isset($_GET['register_success'])) {
		?>
			Swal.fire({
			title: "Register Success",
			text: "#",
			icon: "success"
});
			
		<?php
		} ?>
	})
</script>
<!--===============================================================================================-->
<script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
	$('.js-pscroll').each(function() {
		$(this).css('position', 'relative');
		$(this).css('overflow', 'hidden');
		var ps = new PerfectScrollbar(this, {
			wheelSpeed: 1,
			scrollingThreshold: 1000,
			wheelPropagation: false,
		});

		$(window).on('resize', function() {
			ps.update();
		})
	});
</script>
<!--===============================================================================================-->
<script src="assets/vendor/sweetalert/sweetalert.min.js"></script>
<script>
	$('.js-addwish-b2').on('click', function(e) {
		e.preventDefault();
	});

	$('.js-addwish-b2').each(function() {
		var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-b2');
			$(this).off('click');
		});
	});

	$('.js-addwish-detail').each(function() {
		var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-detail');
			$(this).off('click');
		});
	});

	/*---------------------------------------------*/

	$('.js-addcart-detail').each(function() {
		var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
		$(this).on('click', function() {
			swal(nameProduct, "is added to cart !", "success");
		});
	});
</script>
<!--===============================================================================================-->
<!--===============================================================================================-->
<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/bootstrap/js/popper.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/select2/select2.min.js"></script>
<script>
	$(".js-select2").each(function() {
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});
	})
</script>
<!--===============================================================================================-->
<script src="assets/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/slick/slick.min.js"></script>
<script src="assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/parallax100/parallax100.js"></script>
<script>
	$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="assets/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
	$('.gallery-lb').each(function() { // the containers for all your galleries
		$(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
				enabled: true
			},
			mainClass: 'mfp-fade'
		});
	});
</script>
<!--===============================================================================================-->
<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="assets/js/main.js"></script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="assets/js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js
"></script>
</html> 