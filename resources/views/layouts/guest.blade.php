<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title> Reach Take</title>
    <!-- Standard Favicon -->
    <link rel="icon" href="./frontend/img/fav/favicon-96x96.png">



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
                <img src="/frontend/img/logo.png" alt="logo" class="logo-default">
            </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                data-target="#xeronav">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="xeronav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item drop_menu"> <a class="nav-link active" href="#">Home <i
                                class="fas fa-caret-down"></i></a>
                        <ul>
                            <li><a href="index.html">Home one</a></li>
                            <li><a href="index-2.html">Home two</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_id">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features_id">features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product_id">product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testi_id">testimonial </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_id">contact </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" href="#">buy now </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.CONTAINER-->
    </nav>
    <!-- /.navbar -->
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

    <!--jquery-->
    <script src="/frontend/js/jquery-1.12.4.min.js"></script>
    <!--bootstrap v4 js-->
    <script src="/frontend/js/vendor/bootstrap.min.js"></script>
    <!--popper js-->
    <script src="/frontend/js/vendor/popper.min.js"></script>
    <!--video popup-->
    <script src="/frontend/js/vendor/video.popup.js"></script>
    <!--slick slider-->
    <script src="/frontend/js/vendor/slick-min.js"></script>
    <script src="/frontend/js/venobox.min.js"></script>
    <!-- counter js -->
    <script src="/frontend/js/vendor/counter.js"></script>
    <!--owl js-->
    <script src="/frontend/js/vendor/owl-carousel.js"></script>

    <!--easing js-->
    <script src="/frontend/js/vendor/easing.js"></script>
    <!--main script-->
    <script src="./frontend/js/main.js"></script>

</body>


</html>
