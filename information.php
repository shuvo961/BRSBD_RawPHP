
<?php

require_once 'vendor/autoload.php';
use App\classes\check_status;


$message= "";
if(isset($_POST['btn']))
{
    check_status::verify($_POST);

}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Verify Birth Registration & Certificate , This is the Online Birth Registration System Bangladesh.">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Online Birth Registration Bangladesh | BRSBD | birthregbd" />
    <meta property="og:description" content="Apply for Birth Registration o a child & get certified , This is the Online Birth Registration System Bangladesh." />
    <meta property="og:section" content="Birth Registration Bangladesh" />
    <meta property="og:image" content="https://birthregbd.ml/assets/images/logo.png" />


    <title> Birth Information | Birth Registration System Bangladesh :: BRSBD </title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>

<?php include 'includes/nav.php'?>

<section class="w3l-about-breadcrum">
    <div class="breadcrum-bg">
        <div class="container py-5">
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; Info </p>
            <h2 class="my-3">Birth Information </h2>
            <p>Cehck & Verify Birth Information</p>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4" id="about">
    <div id="content-with-photo4-block" class="py-5">
        <div class="container py-md-3">
            <div class="cwp4-two row">

                <div class="cwp4-text col-lg-6">
                    <h3>Check Your Identety</h3>
                    <p>Get All Information at one place . <br>
                        An easy & effective way to verify birth information.
                    </p>
                    <ul class="cont-4">
                        <li><span class="mr-3 fa fa-long-arrow-right"></span>View Birth Information</li>
                        <li><span class="mr-3 fa fa-long-arrow-right"></span>Download Online Certificate </li>
                        <li><span class="mr-3 fa fa-long-arrow-right"></span>Verify Your Information</li>

                    </ul>
                    <a class="btn btn-secondary btn-theme3 mt-3 " href="contact.php">Need Help!</a>
                </div>
                <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5 py-2">

                    <div class="card">

                        <div class="card-body">
                            <form name="mform"  onsubmit="return validateForm()"  method="post">
                                <h4 id="vrf" align="center">Fill in your credentials</h4>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-12 col-form-label">Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="fullname" placeholder="Enter your full name here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-12 col-form-label">Fathers NID</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="fnid" placeholder="NID NO 0XXXXXXXXXX" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label >Select Birth Date</label>
                                        <input type="date" name="bdate" max="3000-12-31"
                                               min="1900-01-01" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button name="btn" type="submit" class="btn btn-theme2 btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'?>



<script type="text/javascript">

    function validateForm() {


        var x = document.forms["mform"]["bdate"].value;
        if (x == "") {
            alert("Pleasse Select Date");
            return false;
        }


    }

</script>

<!-- // grids block 5 -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>

<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Smooth scrolling -->

<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->

