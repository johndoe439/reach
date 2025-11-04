{{-- <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="description" content="Reach Take | Staking " />
    <title> Reach Take </title>

    <!-- Standard Favicon -->
    <link rel="icon" href="./frontend/img/logo.png">



    <!--bootstrap v4.0.0-->
    <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css">

    <!--reset css-->
    <link rel="stylesheet" type="text/css" href="/frontend/css/normalize.css">
    <!--main style-->
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    <!--slick slider-->
    <link rel="stylesheet" type="text/css" href="/frontend/css/slick.css" />
    <!-- venobox -->
    <link rel="stylesheet" href="/frontend/css/venobox.css">
    <!--owl slider-->
    <link rel="stylesheet" type="text/css" href="/frontend/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/owl.carousel.min.css" />
    <!--fontawesome cdn-->
    <link href="/frontend/use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">


    <!-- responsive css -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">


    <!--modernizr-->
    <script src="/frontend/js/vendor/modernizr.js"></script>

    <!--[if lt IE 9]>
    <script src="/frontend/js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="se-pre-con"></div>

    <!-- main nav start -->

    <nav class="navbar navbar-expand-lg fixed-top center-brand static-nav home2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/frontend/img/logo.png" height="70" width="100" alt="logo" class="logo-default">
            </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                data-target="#xeronav">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="xeronav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item drop_menu"> <a class="nav-link active" href="#">Home <i
                                class="fas fa-caret-down"></i></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_id">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features_id">features</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#testi_id">testimonial </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_id">contact </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login </a>
                    </li>

                </ul>
            </div>
        </div>
        <!--/.CONTAINER-->
    </nav>
    <!-- /.navbar --> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <!-- HTML Meta Tags -->
    <meta name="description" content="Reach Take | Staking " />
    <title> Reach Take </title>

    <!-- Standard Favicon -->
    <link rel="icon" href="/frontend/img/logo.png">
    <meta name="description" content="Best crypto trading  , portfolio management " />




    <link href="/frontend/assets/brand/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="/frontend/assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="/frontend/assets/plugins/slick/slick.css" rel="stylesheet" />
    <link href="/frontend/assets/css/pages/landing-page-v2.css" rel="stylesheet" />
</head>

<body class="">
    <nav class="navbar navbar-expand-lg header-navbar header-navbar--v2">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="/frontend/img/logo.png" width="150px" alt="Tradrax-Ai" /> </a><button
                class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <img src="/frontend/assets/media/images/icons/menu.svg" alt="MENU" />
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-collapse__content">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms</a>
                        </li>

                    </ul>
                    <div class="navbar-buttons">
                        <a href="{{ route('login') }}" class="btn btn-secondary btn-sm">Sign in</a>
                        <a href=" {{ route('register') }}" class="btn btn-sm" style="background: #605dff">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{ $slot }}


    <div>
        <div class="notification-container" id="notificationContainer"></div>

        <style>
            .notification-container {
                position: fixed;
                top: 20vh;
                right: 2vw;
                width: clamp(250px, 80vw, 350px);
                z-index: 1000;
            }

            .notification {
                background-color: #333;
                color: #fff;
                padding: 1rem;
                margin-bottom: 0.5rem;
                border-radius: 0.5rem;
                box-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.2);
                opacity: 0;
                transform: translateX(100%);
                transition: opacity 0.5s ease, transform 0.5s ease;
                font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            }

            .notification.show {
                opacity: 1;
                transform: translateX(0);
            }

            .notification.deposit {
                background-color: #28a745;
            }

            .notification.withdraw {
                background-color: #dc3545;
            }

            /* Small devices (phones, < 600px) */
            @media (max-width: 600px) {
                .notification-container {
                    width: 90vw;
                    right: 1vw;
                    top: 15vh;
                }

                .notification {
                    padding: 0.8rem;
                    font-size: 0.85rem;
                }
            }

            /* Medium devices (tablets, 600px - 900px) */
            @media (min-width: 601px) and (max-width: 900px) {
                .notification-container {
                    width: 85vw;
                    right: 1.5vw;
                }

                .notification {
                    padding: 0.9rem;
                    font-size: 1rem;
                }
            }

            /* Large devices (desktops, > 900px) */
            @media (min-width: 901px) {
                .notification-container {
                    width: 350px;
                    right: 2vw;
                }

                .notification {
                    padding: 1rem;
                    font-size: 1.1rem;
                }
            }
        </style>

        <script>
            const names = [
                'John Smith', 'Kate Johnson', 'Michael Brown', 'Abel Davis', 'Sarah Wilson',
                'David Martinez', 'Emma Taylor', 'James Anderson', 'Lisa Thomas', 'Thomas Lee',
                'Anna Garcia', 'Chris Walker', 'Julia Hall', 'Mark Allen', 'Sophie Young',
                'Paul Hernandez', 'Laura King', 'Steven Wright', 'Grace Lopez', 'Robert Scott',
                'Emily Green', 'Daniel Adams', 'Olivia Baker', 'William Gonzalez', 'Sophia Nelson',
                'Jacob Carter', 'Isabella Mitchell', 'Liam Perez', 'Charlotte Roberts', 'Ethan Turner',
                'Mia Phillips', 'Alexander Campbell', 'Amelia Parker', 'Lucas Evans', 'Harper Collins',
                'Benjamin Edwards', 'Evelyn Stewart', 'Jack Sanchez', 'Ava Morris', 'Logan Rogers',
                'Lily Reed', 'Mason Cook', 'Chloe Morgan', 'Henry Bell', 'Zoe Murphy', 'Gabriel Rivera',
                'Ella Cooper', 'Noah Bailey', 'Aria Howard', 'Jackson Kim', 'Scarlett Ward',
                'Sebastian Torres', 'Layla Peterson', 'Owen Gray', 'Mila Foster', 'Elijah Cox',
                'Hannah Brooks', 'Carter Butler', 'Avery Ross', 'Landon Hughes', 'Violet Sanders',
                'Luke Price', 'Madeline Kelly', 'Dylan Simmons', 'Penelope Bennett', 'Isaac Wood',
                'Victoria Myers', 'Samuel Ford', 'Hazel James', 'Julian Watson'
            ];

            function getRandomName() {
                return names[Math.floor(Math.random() * names.length)];
            }

            function getRandomAction() {
                return Math.random() > 0.5 ? 'deposited' : 'withdrew';
            }

            function getRandomAmount() {
                return Math.floor(Math.random() * (50000 - 2000 + 10)) + 500;
            }

            function createNotification() {
                const container = document.getElementById('notificationContainer');
                const notification = document.createElement('div');
                const name = getRandomName();
                const action = getRandomAction();
                const amount = getRandomAmount();
                notification.className = `notification ${action === 'deposited' ? 'deposit' : 'withdraw'}`;
                notification.textContent = `${name} ${action} $${amount}`;
                container.appendChild(notification);

                setTimeout(() => {
                    notification.classList.add('show');
                }, 100);

                setTimeout(() => {
                    notification.classList.remove('show');
                    setTimeout(() => {
                        notification.remove();
                    }, 500);
                }, 3000);
            }

            let notificationCount = 0;
            const interval = setInterval(() => {
                if (notificationCount < 20) {
                    createNotification();
                    notificationCount++;
                } else {
                    clearInterval(interval);
                }
            }, 6000);
        </script>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__item footer-item-main">
                    <img class="footer-item-main__logo" src="/frontend/assets/brand/light.png" width="150px"
                        alt="Tradrax-Ai" />
                    {{-- <p class="fb-lg footer-item-main__desc">
                        Best crypto trading bots, algorithmic orders, portfolio management
                        and free Demo mode — all in one place.
                    </p>

                    <p class="fb-lg footer-item-main__desc">
                        892 Woodland Road, New Charleyhaven, Minnesota - 03884, US
                    </p> --}}
                    <div class="footer-item-main__socmed">
                        <a href="#" class="footer-socmed"><img class="footer-item-main__logo"
                                src="/frontend/assets/media/images/icons/logo-linkedin.svg" alt="Linkedin" /> </a><a
                            href="#" class="footer-socmed"><img class="footer-item-main__logo"
                                src="/frontend/assets/media/images/icons/logo-facebook.svg" alt="Facebook" /> </a><a
                            href="#" class="footer-socmed"><img class="footer-item-main__logo"
                                src="/frontend/assets/media/images/icons/logo-ig.svg" alt="Instagram" /></a>
                    </div>
                </div>
                <div class="footer__item footer-item-quick-links">
                    <h6 class="footer__item-title">Company</h6>
                    <div class="footer-quick-links">
                        <a href="#" class="fb-md footer-quick-links__link">About</a>
                        <a href="#" class="fb-md footer-quick-links__link">Terms & Conditions</a>
                        <a href="#" class="fb-md footer-quick-links__link">Privacy Policy</a>
                    </div>
                </div>
                <div class="footer__item footer-item-quick-links">
                    <h6 class="footer__item-title">Resources</h6>
                    <div class="footer-quick-links">
                        <a href="{{ route('login') }}" class="fb-md footer-quick-links__link">Buy/Sell</a>

                        <a href="{{ route('login') }}" class="fb-md footer-quick-links__link">Trade
                            Now</a>
                        <a href="{{ route('register') }}" class="fb-md footer-quick-links__link">Investments</a>
                    </div>
                </div>
                <div class="footer__item footer-item-updates">
                    <h6 class="footer__item-title">Submit for updates.</h6>
                    <p class="fb-md footer-item-updates__desc">
                        Subscribe to get update and notifications on our latest products &
                        offers.
                    </p>
                    <div class="mini-form-sm__box">
                        <form class="mini-form">
                            <input class="form-control form-control-sm mini-form__input"
                                placeholder="Enter you email address" autocomplete="off" />
                            <input type="submit" class="btn btn-sm mini-form__submit" style="background: #605dff"
                                value="Send" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer__foot">
                <p class="fb-md footer-foot__copyright">
                    Reach Take ©. All rights reserved.
                </p>
                <div class="footer-foot__tos-privacy">
                    <a href="#" class="fb-md footer-foot__link">Term of Service</a>
                    <span class="separator"></span>
                    <a href="#" class="fb-md footer-foot__link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="/frontend/assets/js/scripts.bundle.js"></script>
    <script src="/frontend/assets/plugins/slick/slick.min.js"></script>
    <script src="/frontend/assets/js/custom/custom-select.js"></script>
    <script src="/frontend/assets/js/pages/landing-page-v2.js"></script>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '0064f1e7df3ea50f32fadc06785c39a89606ed24';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>


</html>
