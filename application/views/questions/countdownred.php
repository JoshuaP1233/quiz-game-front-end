<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #FFFBAA;
        }
        #countdown {
            font-size: 15vw;
            color: #A7C7E7;
            text-align: center;
            font-family: 'Press Start 2P', cursive;
            display: none; /* Hide initially for fade-in effect */
        }
    </style>
</head>
<body>
    <div id="countdown">5</div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            var counter = 5;
            $('#countdown').text(counter).fadeIn(500); // Initial fade-in for the first number
            var interval = setInterval(function() {
                $('#countdown').fadeOut(500, function() {
                    counter--;
                    if (counter >= 0) {
                        $('#countdown').text(counter).fadeIn(500);
                    } else {
                        clearInterval(interval);
                        window.location.href = "<?= site_url('animatepagered') ?>";
                    }
                });
            }, 1500); // Adjust the interval to match the fade duration and delay
        });
    </script>
</body>
</html>
