<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="src/images/eventlify-favicon.png">
    <title>Eventlify | Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
    <link href="src/css/bootstrap-select.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.2.5/jquery.bootstrap-touchspin.min.css">
    <link href="src/css/slick.css" rel="stylesheet">
    <link href="src/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="src/css/main.css" type="text/css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.2.5/jquery.bootstrap-touchspin.min.js">
    </script>
    <script src="src/js/slick.js"></script>
    <script src="src/js/moment.min.js"></script>
    <script src="src/js/bootstrap-select.js"></script>
    <script src="src/js/jquery.mCustomScrollbar.js"></script>
    <script src="src/js/jquery.mousewheel.min.js"></script>
    <script src="src/js/custom.js"></script>
</head>

<body>

    <!-- modal -->
    <div class="modal custom-modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-head">
                    <h2>Cart</h2>
                    <button type="button" class="popup-cross-icon" data-dismiss="modal" aria-hidden="true">
                    </button>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <header>
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="left-side">
                        <a href="index" class="logo">
                            <img src="src/images/svg/Eventlify_shop-logo.svg" alt="">
                        </a>
                    </div>
                    <div class="right-side">
                        <ul>
                            <!-- <li><a href="#" data-path="src/data/cart.html" data-toggle="custom-modal"
                                    data-size="medium">Donate</a></li> -->
                            <li class="account">
                                <a href="#">LOGIN</a>
                                <a href="#">Signup</a>

                            </li>
                            <li>
                                <a href="#" data-path="src/data/cart.html" data-toggle="custom-modal"
                                    data-size="medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.548" height="23.595"
                                        viewBox="1272 40 26.548 23.595">
                                        <path
                                            d="M1281.408 47.035h7.711a16.602 16.602 0 0 1-.071-.161c-.049-.111-.093-.212-.142-.31a1143.253 1143.253 0 0 0-.694-1.379l-.016-.031a436.668 436.668 0 0 1-1.867-3.734 1.401 1.401 0 0 1-.143-.764.619.619 0 0 1 .186-.367.84.84 0 0 1 .507-.215.898.898 0 0 1 .083-.004c.259 0 .467.118.62.322a1.159 1.159 0 0 1 .105.173 1502.993 1502.993 0 0 0 1.158 2.297l.773 1.531.292.577a83.328 83.328 0 0 1 .88 1.769.737.737 0 0 0 .084.14c.106.134.243.176.444.176a1.464 1.464 0 0 0 .012 0c.876-.007 1.752-.011 2.628-.011a232.623 232.623 0 0 1 1.967.008c1.993.017 3.022 1.683 2.48 3.555a1.78 1.78 0 0 1-1.226 1.242 2.345 2.345 0 0 1-.31.074 1.03 1.03 0 0 0-.214.057.577.577 0 0 0-.323.315 1.168 1.168 0 0 0-.056.146 608.86 608.86 0 0 1-1.143 3.599l-.004.012a431.667 431.667 0 0 0-1.595 5.058 3.465 3.465 0 0 1-3.337 2.485 3.597 3.597 0 0 1-.047 0 358.273 358.273 0 0 0-4.765-.03h-.781a490.48 490.48 0 0 0-4.267.027 3.325 3.325 0 0 1-.035 0c-1.35 0-2.772-.82-3.276-2.425a1141.314 1141.314 0 0 0-1.374-4.337 1106.21 1106.21 0 0 1-1.42-4.48 1.001 1.001 0 0 0-.058-.152.39.39 0 0 0-.247-.215.665.665 0 0 0-.122-.025 1.995 1.995 0 0 1-1.554-1.076 2.357 2.357 0 0 1-.251-1.09 2.872 2.872 0 0 1 .002-.117 2.937 2.937 0 0 1 .399-1.391 2.156 2.156 0 0 1 1.588-1.069c.556-.07 1.122-.075 1.685-.078a72.055 72.055 0 0 0 .331-.003 141.774 141.774 0 0 1 1.314-.01h.223a88.069 88.069 0 0 1 1.617.014 1.442 1.442 0 0 0 .027 0c.281 0 .435-.087.566-.353a897.872 897.872 0 0 1 3.104-6.208 1.266 1.266 0 0 1 .201-.294c.35-.375.854-.387 1.194.022a1.08 1.08 0 0 1 .01.012.829.829 0 0 1 .107.171c.095.205.08.417.001.63a1.646 1.646 0 0 1-.078.177c-.708 1.401-1.416 2.802-2.122 4.204-.195.388-.387.778-.594 1.197a249.502 249.502 0 0 1-.167.339Zm-2.642 1.669a20.917 20.917 0 0 0 .001 0 77.062 77.062 0 0 0-.331.644l-.016.03a13.412 13.412 0 0 1-.372.683c-.265.448-.286.899-.054 1.28a1.377 1.377 0 0 0 .273.32 1.194 1.194 0 0 0 .777.28h.008a1.18 1.18 0 0 0 .721-.234 1.47 1.47 0 0 0 .228-.219c.324-.386.373-.889.09-1.363a.606.606 0 0 1-.025-.047c-.078-.161-.032-.273.015-.436a3.08 3.08 0 0 0 0-.003 1.89 1.89 0 0 1 .137-.353c.277-.536.761-.665 1.47-.648a140.896 140.896 0 0 0 3.49.038c1.472 0 2.944-.014 4.415-.02a1.874 1.874 0 0 1 .007 0c.21 0 .365.037.46.188a.567.567 0 0 1 .062.14c.037.121.101.237.167.347a3.725 3.725 0 0 1 .043.074c.151.267.236.512.111.828a1.21 1.21 0 0 1-.072.15.884.884 0 0 0-.014.026.898.898 0 0 0-.074.616 1.261 1.261 0 0 0 .555.77 1.334 1.334 0 0 0 .087.05c.261.14.55.18.82.127a1.208 1.208 0 0 0 .624-.336 1.297 1.297 0 0 0 .09-.102c.265-.327.321-.735.185-1.135a1.57 1.57 0 0 0-.133-.287c-.193-.328-.362-.67-.545-1.036a37.325 37.325 0 0 0-.21-.414h1.86l1.44.001a145.455 145.455 0 0 0 .858-.002 1.733 1.733 0 0 1 .01 0c.75 0 1.044.49 1.004 1.065a1.717 1.717 0 0 1-.054.317.197.197 0 0 1-.009.026c-.05.12-.23.253-.377.294a.353.353 0 0 1-.065.013 2.385 2.385 0 0 0-.312.047c-.416.092-.732.295-.96.61a2.113 2.113 0 0 0-.298.612 2126.277 2126.277 0 0 1-1.261 3.979c-.513 1.613-1.025 3.226-1.533 4.84-.216.69-.541 1.26-1.3 1.447a1.928 1.928 0 0 1-.34.05 2.527 2.527 0 0 1-.157.005c-2.863.003-5.725.003-8.588.003a53596.918 53596.918 0 0 0-1.342 0c-.668 0-1.154-.216-1.477-.678a2.24 2.24 0 0 1-.288-.598c-.5-1.539-.985-3.082-1.475-4.624l-.727-2.297a2495.18 2495.18 0 0 0-.68-2.148 2.507 2.507 0 0 0-.115-.298c-.186-.398-.457-.662-.836-.807a2.148 2.148 0 0 0-.599-.127c-.224-.018-.373-.109-.454-.274a.706.706 0 0 1-.06-.205 1.998 1.998 0 0 1-.013-.104c-.055-.571.173-.952.643-1.09a1.57 1.57 0 0 1 .438-.056 731.555 731.555 0 0 1 .478 0l2.91.003a8474.091 8474.091 0 0 0 .546.001.11.11 0 0 1 .026.004c.022.005.054.016.117.033Zm12.287 5.085a35.802 35.802 0 0 0-.003.01c-.086.268-.206.654-.334 1.038a1612.764 1612.764 0 0 1-1.327 3.983 1.046 1.046 0 0 1-.182.34.822.822 0 0 1-.506.285 1.167 1.167 0 0 1-.142.016.915.915 0 0 1-.049.002.66.66 0 0 1-.627-.4.992.992 0 0 1-.036-.087.893.893 0 0 1-.045-.478.488.488 0 0 1 .012-.042 393.613 393.613 0 0 1 1.674-5.004 1.034 1.034 0 0 1 .148-.288c.177-.235.44-.332.75-.29a1.125 1.125 0 0 1 .033.006.705.705 0 0 1 .487.344c.089.148.143.339.147.565Zm-9.946-.336a1.199 1.199 0 0 0-.03-.08c-.13-.307-.374-.504-.75-.497a.863.863 0 0 0-.09.005.79.79 0 0 0-.713.842.811.811 0 0 0 .039.188 499.39 499.39 0 0 0 1.647 4.927c.166.487.647.737 1.06.589a.797.797 0 0 0 .356-.25.828.828 0 0 0 .164-.639 1.088 1.088 0 0 0-.045-.194 432.438 432.438 0 0 0-1.638-4.891Zm4.967 2.693c0 .751.005 1.502-.003 2.253a4.661 4.661 0 0 1-.004.178 1.424 1.424 0 0 1-.066.395c-.105.303-.519.526-.816.481a.84.84 0 0 1-.595-.386.668.668 0 0 1-.093-.298 14.537 14.537 0 0 1-.023-.948v-.33a41.46 41.46 0 0 0 0-.12 991.497 991.497 0 0 0-.002-.582c-.002-.477-.003-.955-.003-1.432a130.611 130.611 0 0 1 .008-1.558c.002-.192.05-.409.145-.576a.793.793 0 0 1 .025-.04.715.715 0 0 1 .2-.206c.187-.124.423-.143.662-.07a.834.834 0 0 1 .323.175c.119.108.195.251.22.427a.904.904 0 0 1 .007.113 97.237 97.237 0 0 1 .006 1.07l-.002.727a337.564 337.564 0 0 0 0 .727h.011Zm-10.422.684v-.002"
                                            fill="currentColor" fill-rule="evenodd" data-name="Shape 5" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>