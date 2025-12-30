<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Argon Dashboard 3 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/argon/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
    <style>
        /* 🔧 Match Argon default: ensure pinned sidenav pushes content on desktop */
        @media (min-width: 1200px) {

            /* when sidenav is fixed and pinned, move main content to the right */
            body.g-sidenav-show.g-sidenav-pinned .sidenav.fixed-start+.main-content,
            .sidenav.fixed-start+.main-content {
                margin-left: 17.125rem;
                /* 17.125rem ≈ 274px (Argon default) */
            }
        }

        /* keep a smooth transition and bring content above overlays if needed */
        .main-content {
            transition: margin-left .2s ease;
            z-index: 1;
            position: relative;
        }

        /* Topnav user dropdown and spacing */
        .nav-username {
            color: #fff;
            margin-right: 0.5rem;
        }

        .navbar .dropdown-menu.dropdown-menu-end {
            right: 0;
            left: auto;
        }

        .nav-user .dropdown-toggle {
            color: #fff;
        }

        .nav-user .dropdown-menu {
            min-width: 10rem;
        }

        /* Ensure sidenav width and main-content offset match to prevent overlay */
        @media (min-width: 1200px) {

            /* set a fixed width for pinned sidenav so we can rely on it */
            .sidenav.fixed-start {
                width: 280px !important;
                min-width: 280px !important;
                max-width: 280px !important;
            }

            /* push main content to start right after the sidenav */
            .main-content {
                margin-left: 320px !important;
                /* extra gap to avoid visual overlap */
                padding-top: 1.25rem;
            }

            .main-content .container-fluid {
                max-width: 1180px;
                margin: 0;
                /* anchored to left beside sidebar */
                padding-left: 1.5rem;
                /* extra left breathing room */
                padding-right: 1rem;
            }
        }

        /* Provide a fallback for other screen sizes and ensure responsiveness */
        .sidenav {
            width: 280px;
        }

        @media (max-width: 1199.98px) {

            body.g-sidenav-show.g-sidenav-pinned .sidenav.fixed-start+.main-content,
            .sidenav.fixed-start+.main-content {
                margin-left: 0;
                /* don't push content on smaller devices */
            }

            .main-content {
                margin-left: 0 !important;
            }

            .main-content .container-fluid {
                max-width: 100%;
                margin: 0 auto;
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        /* Small spacing under topnav so first row doesn't touch it */
        .navbar+.container-fluid,
        .navbar+.container {
            margin-top: 0.5rem;
        }
    </style>
</head>

<body class="g-sidenav-show g-sidenav-pinned bg-gray-100">
    <div class="min-height-300 bg-dark position-absolute w-100"></div>