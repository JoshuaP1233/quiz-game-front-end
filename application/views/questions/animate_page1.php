<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .animated-text {
            font-size: 4rem; /* Increased font size */
            color: #333;
            font-weight: bold;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 2s ease-out forwards;
            font-family: 'Press Start 2P', cursive; /* Applied custom font */
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .background-col {
            background: #4dc4bb;
        }

        .logo {
            width: 300px; /* Adjust the width as needed */
            margin-bottom: 20px;
            position: absolute;
            top: 260px; /* Adjust the top margin as needed */
            opacity: 0;
            animation: fadeInUp 2s ease-out 1s forwards; /* Starts zooming in after 1 second */
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

    </style>
</head>
<body class="background-col">


    <img src="<?php echo base_url('assets/img/multiplechoice-logo.png'); ?>" alt="Logo" class="logo">

    <div class="container">

        <div class="animated-text text-light">Fill in the blank</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <script>      
        setTimeout(function() {
            window.location.href = "<?= site_url('fill_in_the_blank_test') ?>";
        }, 3000); // Redirect after 3 seconds
    </script>
</body>
</html>
