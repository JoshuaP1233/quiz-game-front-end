<?php include 'navbarred.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Choice</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <style>
        html, body {
            height: 100%; /* Ensure the body and html take up the full height */
            margin: 0; /* Remove default margins */
        /*  overflow: hidden; */  /* Prevent scrolling */
        }
        .quiz-container {
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
        }

        .card {
            border: none; /* Remove default card border */
            opacity: 0;
            animation: fadeInUp 2s ease-out 0.5s forwards;
        }
        .card-body {
            position: relative;
            z-index: 1; /* Ensure text is above background */
        }
        .answer-btn {
            margin: 10px 0;
            padding: 30px;
            font-size: 18px;
            color: #ffff;
            border: none;
            border-radius: 5px;
            width: 100%; /* Make buttons take full width */
            opacity: 0;
            animation: fadeIn 2s ease-out 1s forwards; /* Staggered fade-in for buttons */
        }
        .answer-btn.red { background-color: #FFD700; } /* Red */
        .answer-btn.green { background-color: #FFD700; } /* Green */
        .answer-btn.blue { background-color: #FFD700; } /* Blue */
        .answer-btn.orange { background-color: #FFD700; } /* Orange */

        .background-col {
            background: #ffffff;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-container img {
            height: 50px; /* Adjust based on your logo size */
        }

        /* Apply the custom font */
        body, .card-title, .answer-btn {
            font-family: 'Press Start 2P', cursive;
        }

        /* Add text shadow to the question */
        .card-title {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Adjust values as needed */
        }

        .image-container {
            margin-top: 20px;
            text-align: center;
            opacity: 0;
            animation: fadeIn 2s ease-out 1.5s forwards; /* Staggered fade-in for image */
        }
        .image-container img {
            max-width: 100%; /* Ensure image scales with container */
            height: auto;
        }

        .bottom-left {
            position: fixed;
            bottom: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-size: 1rem;
            font-family: 'Roboto', sans-serif;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        @keyframes bubble {
            0% {
                transform: translateX(50%) translateY(0);
                opacity: 1;
            }
            50% {
                transform: translateX(50%) translateY(-50px);
                opacity: 0.5;
            }
            100% {
                transform: translateX(50%) translateY(-100px);
                opacity: 0;
            }
        }

        .question-number {
            position: relative;
            font-size: 1.5rem;
            padding: 20px;
            background-color: #444;
            border-radius: 10px;
            overflow: hidden;
        }

        .question-number::before {
            content: "";
            position: absolute;
            top: -20px;
            right: 50%;
            width: 80px;
            height: 80px;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 80%);
            border-radius: 50%;
            transform: translateX(50%);
            animation: bubble 1s infinite;
        }

        .text-change {
            font-family: 'Roboto', cursive;
            font-size: 30px;
        }
        
        #speak-button {
            font-size: 24px; 
            color: #000000; 
            background: none; 
            border: none; 
            padding: 0; 
            cursor: pointer;
        }

        #speak-button:hover {
            color: #ddd; /* Change color on hover */
        }

        /* Mobile and Tablet View */
        @media (max-width: 768px) {
            .quiz-container {
                height: auto; /* Allow height to adjust for small screens */
            }

            .answer-btn {
                padding: 15px; /* Adjust padding for mobile */
                font-size: 16px; /* Adjust font size for mobile */
            }

            .header-container img {
                height: 40px; /* Adjust based on your logo size */
            }

            .bottom-left {
                font-size: 0.8rem; /* Adjust font size for mobile */
            }

            .question-number {
                font-size: 1.2rem; /* Adjust font size for mobile */
                padding: 10px;
            }

            .text-change {
                font-size: 24px; /* Adjust font size for mobile */
            }

            #speak-button {
                font-size: 20px; /* Adjust font size for mobile */
            }
            
            .bottom-left {
                display: none;
            }

            h1 {
                text-align: center;
            }
        }
    </style>
</head>
<body class="background-col">
    
    <div class="container mt-3">
        <div class="question-number text text-light text-center">
            Question 1 out of 20
        </div>
    </div>

    <div class="container-fluid quiz-container">
        <h5 class="text-dark text-change mt-5">Multiple Choice:</h5> 
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="card-body">
                    <h1 id="question-text" class="fit-text">What is the capital of France?
                        <button id="speak-button" class="btn btn-link">
                            <i class="fas fa-volume-up"></i></button>
                    </h1>
                </div>
                <div class="image-container">
                    <img src="<?php echo base_url('assets/img/france-flag.jpg'); ?>" alt="...">
                </div>       
            </div>
            <div class="col-md-4 mt-4">
                <button class="btn answer-btn red btn-block">A) Berlin</button>
                <button class="btn answer-btn green btn-block">B) Madrid</button>
                <button class="btn answer-btn blue btn-block">C) Paris</button>
                <button class="btn answer-btn orange btn-block">D) Rome</button>
            </div>
        </div>
    </div>

    <div class="bottom-left">
        <h3>Display Username</h3>
        <?php 
        //session_start();
        //echo "Logged in as: " . $_SESSION['username'];
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function adjustFontSize() {
            const questionText = document.getElementById('question-text');
            const maxLength = 50; // Maximum length before resizing
            const baseFontSize = 35; // Base font size in pixels
            const minFontSize = 25; // Minimum font size in pixels

            let textLength = questionText.innerText.length;
            if (textLength > maxLength) {
                let newFontSize = baseFontSize - ((textLength - maxLength) / 2);
                if (newFontSize < minFontSize) {
                    newFontSize = minFontSize;
                }
                questionText.style.fontSize = `${newFontSize}px`;
            } else {
                questionText.style.fontSize = `${baseFontSize}px`;
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            adjustFontSize();
            
            document.querySelectorAll('.answer-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove selected state from all buttons
                    document.querySelectorAll('.answer-btn').forEach(button => {
                        button.classList.remove('selected');
                    });
                    // Add selected state to the clicked button
                    this.classList.add('selected');
                });
            });

            // Speech functionality
            const speakButton = document.getElementById('speak-button');
            const questionText = document.getElementById('question-text').innerText;

            speakButton.addEventListener('click', () => {
                if ('speechSynthesis' in window) {
                    const utterance = new SpeechSynthesisUtterance(questionText);
                    utterance.lang = 'en-US'; // You can change this to the desired language
                    speechSynthesis.speak(utterance);
                } else {
                    alert('Sorry, your browser does not support text-to-speech.');
                }
            });
        });
    </script>
</body>
</html>
