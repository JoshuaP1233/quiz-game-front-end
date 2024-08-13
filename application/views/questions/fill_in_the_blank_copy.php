<?php include 'navbarblue.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill in the Blank</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Gupter' rel='stylesheet'>

    <style>
        .navbar {
            margin-bottom: 20px;
        }

        .question-number {
            text-align: center;
            font-size: 24px;
            font-family: 'Press Start 2P', cursive;
            margin-bottom: 20px;
        }

        .quiz-container {
            height: 50vh;
            display: grid;
            flex-direction: column;
            justify-content: center;
            animation: fadeIn 2s ease-out forwards;
        }

        .background-col {
            background: #4dc4bb;
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
        body {
            font-family: 'Press Start 2P', cursive;
        }

        .text-change {
            font-family: 'Roboto', cursive;
            font-size: 30px;
        }

        .fit-text {
            display: inline-block;
            width: 100%;
        }

        .image-container {
            margin-top: 20px;
            text-align: center;
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

        #speak-button {
            font-size: 30px; 
            color: #fdfbf2; 
            background: none; 
            border: none; 
            padding: 0; 
            cursor: pointer; 
        }

        #speak-button:hover {
            color: #ddd; 
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

<div class="container mt-2">
    <div class="question-number text text-light text-center">
        Question 1 out of 20
    </div>
</div>

<div class="container quiz-container">
    <h5 class="text-white text-change mt-5">Fill in the blank:</h5>
    <div class="row">
        <div class="col-md-11 offset-md-1">
            <h1 id="question-text" class="fit-text">The capital of France is  <span id="answer-placeholders"></span>.<button id="speak-button" class="btn btn-link">
            <i class="fas fa-volume-up"></i></button></h1>
        </div>
    </div>

    <div class="image-container">
        <img src="<?php echo base_url('assets/img/france-flag.jpg'); ?>" alt="Flag of France">
    </div>
</div>

<div class="bottom-center">
    <div class="input-group input-group-lg mb-3 mt-4">
        <input type="text" class="form-control py-2 px-3" placeholder="Enter Answer" aria-label="Input answer" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Enter</button>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // displaying the correct answer
    const answer = 'paris';

    // Get the placeholders span
    const placeholdersElement = document.getElementById('answer-placeholders');

    // Create underscores based on the answer length
    for (let i = 0; i < answer.length; i++) {
        const span = document.createElement('span');
        span.classList.add('underscore');
        span.textContent = '_';
        placeholdersElement.appendChild(span);
    }

    // Adjust the fontsize
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

    // Call the function on document ready
    document.addEventListener('DOMContentLoaded', () => {
        adjustFontSize();

        // Text-to-Speech functionality
        const speakButton = document.getElementById('speak-button');
        const questionText = document.getElementById('question-text').innerText;

        speakButton.addEventListener('click', () => {
            if ('speechSynthesis' in window) {
                const utterance = new SpeechSynthesisUtterance(questionText);
                utterance.lang = 'en-US'; // English Language
                speechSynthesis.speak(utterance);
            } else {
                alert('Sorry, your browser does not support text-to-speech.');
            }
        });
    });
</script>
</body>
</html>
