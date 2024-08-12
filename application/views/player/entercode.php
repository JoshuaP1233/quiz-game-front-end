<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player waiting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<style>
        .input-group {
            position: relative;
        }
        .input-group input {
            border-radius: 0;
        }
        
        .input-group .btn {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            border-radius: 0;
        }
        

        .background-col {
            background: #b30000;
        }

        .bg-blue {
            background: #00cccc;

        }

        .custom-container {
            padding-bottom: 20vh; /* Adjust this value as needed */
        }

        .transparent-input {
            background-color: transparent;
            border: 1px solid #ced4da; /* Adjust the border as needed */
        }

        .bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }

        .btn-blue:hover, .btn-blue:focus, .btn-blue:active, .btn-blue.active, .open>.dropdown-toggle.btn-blue {
        
            color: #fff;
            background-color: #00b3b3;
            border-color: #285e8e; /*set the color you want here*/
                   
        }

        body {
            font-family: 'Press Start 2P', cursive;
        }

    </style>
<body class="bg background-col">
    
    <div class="container vh-100 d-flex justify-content-center align-items-center custom-container">
        <div class="w-75">
            <h1 class="text-white mb-4 text-center bounce">Quiz Game</h1>
            <form>
                <div class="form-group">
                    <label for="gameCodeInput" class="text-white">Enter Game Code</label>
                    <div class="input-group">
                        <input type="number" class="form-control form-control-lg transparent-input" id="gameCodeInput" placeholder="Game Code" aria-label="Game Code">
                        <div class="input-group-append">
                            <button type="submit" class="btn bg-primary btn-lg btn-primary">Enter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.from("h1", { duration: 2, y: -100, opacity: 0, ease: "bounce" });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>