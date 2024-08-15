<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill in the blank</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Montserrat:wght@700&family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #cc0000; ; /* A darker shade to distinguish the navbar */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: white;
        }
        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #fff8dc;
        }
        /* Apply the custom fonts */
        .navbar-custom .navbar-brand {
            font-family: 'Fredoka One', cursive;
        }
        .navbar-custom .navbar-nav .nav-link {
            font-family: 'Press Start 2P', cursive;
        }
        /* Style for the image */
        .navbar-custom .nav-item img {
            max-height: 50px; /* Adjust the height as needed */
        }
        /* Center input at the bottom */
        .bottom-center {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            max-width: 500px;
        }
        /* Center the timer */
        .navbar-custom .timer {
            font-family: 'Press Start 2P', cursive;
            color: #fff;
            text-align: center;
            font-size: 1.5rem;
        }

        .topnav-centered li {
            position: relative;
            top: 0;
            left: 0;
            transform: none;
        }
        
        .navbar-nav1 {
            display: flex;
            justify-content: center; /* Center items horizontally */
            flex-grow: 1; /* Ensure it takes up available space */
        }


        @media (max-width: 768px) {
            .navbar-nav1 {
                display: contents;
            }

            .navbar-nav1 .timer {
                font-size: 1rem; /* Smaller font size for mobile */
            }

            .navbar-nav1 .nav-item img {
                max-height: 40px; /* Adjust image size for mobile */
            }

            .navbar-custom .navbar-brand {
                display: none;
                font-size: 1rem; /* Smaller font size for mobile */
            }

        }

        @media (max-width: 992px) {
            .navbar-custom .navbar-brand {
                font-size: 1.2rem; /* Adjust font size for tablet and mobile */
            }

            .navbar-custom .timer {
                font-size: 1.2rem; /* Adjust font size for tablet and mobile */
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">Dominiquiz</a>
            <ul class="navbar-nav1">
                <li class="nav-item active">          
                    <img src="<?php echo base_url('assets/img/logo-white.png'); ?>" alt="Logo" class="img-fluid">
                </li>
            </ul>        
            <ul class="navbar-nav">
                <li class="nav-item active img-1">
                    <div id="timer" class="timer">00:30</div>     
                </li>
            </ul>
    </nav>

    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Countdown Timer JavaScript -->
    <script>
        /*
        function startCountdown() {
            var timerElement = document.getElementById('timer');
            var countdownTime = 30; // Countdown time in seconds

            function updateTimer() {
                var minutes = Math.floor(countdownTime / 60);
                var seconds = countdownTime % 60;
                
                minutes = (minutes < 10) ? '0' + minutes : minutes;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                
                timerElement.innerHTML = minutes + ':' + seconds;

                if (countdownTime <= 0) {
                    clearInterval(timerInterval);
                    timerElement.innerHTML = 'Time\'s up!';
                    window.location.href = "<?= site_url('ranking_per') ?>";

                } else {
                    countdownTime--;
                }
            }

            var timerInterval = setInterval(updateTimer, 1000);
        }

        window.onload = startCountdown;
    </script>
</body>
</html>
