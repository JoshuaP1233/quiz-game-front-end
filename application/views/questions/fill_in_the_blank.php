<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill in the blank</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .quiz-container {
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .question {
            margin-bottom: 40px; /* Increased space from the choices */
        }
        .answer-input {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            border: 2px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .answer-input:focus {
            border-color: #0047FF;
            outline: none;
        }
        .background-col {
            background: rgb(204,0,0);
            background: linear-gradient(90deg, rgba(204,0,0,1) 0%, rgba(255,255,255,1) 100%);
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-container img {
            height: 50px; /* Adjust based on your logo size */
        }
        .underscore {
            display: inline-block;
            width: 20px; /* Adjust the width of the underscore blocks */
            text-align: center;
            border-bottom: 2px solid #000;
            margin: 0 2px;
        }
    </style>
</head>
<body class="background-col">
    <div class="container-fluid mt-5">
        <div class="header-container">
            <h2 class="text text-white">1 out of 20</h2>
            <img src="your-logo-url.png" alt="Timer logo here" />
        </div>
    </div>
   
    <div class="container quiz-container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <div class="question">
                    <h2 id="question-text">Fill in the blank: The capital of France is <br> <span id="answer-placeholders"></span>.</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-center">
        <input type="text" class="form-control" placeholder="Type something...">
    </div>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Correct answer
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
    </script>
</body>
</html>
