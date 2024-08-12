<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Choice</title>
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
        .answer-btn {
            margin: 10px;
            padding: 30px;
            font-size: 18px;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        .answer-btn.red { background-color: #FF0000; } /* Red */
        .answer-btn.green { background-color: #169A00; } /* Green */
        .answer-btn.blue { background-color: #0047FF; } /* Blue */
        .answer-btn.orange { background-color: #C3BC00; } /* Orange */

        .answers-row {
            display: flex;
            justify-content: center!important;
        }
        .answer-col {
            flex: 1;
            margin: 0 5px;
            width: 100%;
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
    </style>
</head>
<body class="background-col">
    <div class="container-fluid mt-5">
        <div class="header-container">
            <h1 class="text text-white">1 out of 20</h1>
            <img src="your-logo-url.png" alt="Timer logo here" />
        </div>
    </div>
   
    <div class="container quiz-container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <div class="question">
                    <h2 id="question-text">What is the capital of France?</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row container-fluid mt-5">
        <div class="col">
            <button class="btn answer-btn red btn-block">A) Berlin</button>
        </div>
        <div class="col">
            <button class="btn answer-btn green btn-block">B) Madrid</button>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <button class="btn answer-btn blue btn-block">C) Paris</button>
        </div>
        <div class="col">
            <button class="btn answer-btn orange btn-block">D) Rome</button>
        </div>
        
    </div> 

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
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

        // Placeholder for next question button if needed
        // document.getElementById('next-question').addEventListener('click', function() {
        //     alert('Load next question!');
        // });
    </script>
</body>
</html>
