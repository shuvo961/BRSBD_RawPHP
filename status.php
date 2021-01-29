
<?php

require_once 'vendor/autoload.php';
$status = new \App\classes\check_status();


$message= "";
if(isset($_POST['btn']))
{
    $query=$status->checkStatus($_POST['uid']);
    if ($query=='false'){
        echo "enter valid id";
    }

    else {

        $st=$query['status'];

        if($st==0){
            $message = "Status : Pending";
        } elseif ($st==1){
            $message='Status : Approved';
        }

    }


}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Check Status of your Application , This is the Online Birth Registration System Bangladesh.">

    <title>Application Status | Birth Registration System Bangladesh :: BRSBD </title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>

<?php include 'includes/nav.php'; ?>

<section class="w3l-contact-breadcrum">
    <div class="breadcrum-bg">
        <div class="container py-5">
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; Status</p>
            <h2 class="my-3">Application Status</h2>

            <p>Check Status of your online Application</p>
        </div>
    </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3 mb-lg-5" align="center">

            <div class="col-sm-6 pb-3">
                <div class="card">
                    <div class="card-body">

                        <form method="post">
                             <div align="center">
                                 <div class="form-group ">
                                     <h3> <?php echo $message ;?>  </h3>
                                     <div class="col-sm-10">
                                         <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Enter You Application ID Below :">
                                     </div>
                                 </div>
                                 <div class="form-group ">

                                     <div class="col-sm-10">
                                         <input type="number" class="form-control" name="uid" placeholder="0XX-XXX-XX0" required>
                                     </div>
                                 </div>
                                 <button type="submit" name="btn" class="btn btn-theme2 mb-2">Check Status</button>

                             </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- //contact -->

<?php include 'includes/footer.php'?>



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


