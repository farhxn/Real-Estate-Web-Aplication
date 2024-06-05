<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bery-Real Estate | Error Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            color: #333;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            animation: fadeIn 1.5s ease-in-out;
        }
        h1 {
            font-size: 5em;
            margin: 0;
            color: #007BFF;
        }
        h2 {
            font-size: 1.8em;
            margin: 20px 0;
            color: #555;
        }
        p {
            font-size: 1.1em;
            margin: 20px 0;
            color: #777;
        }
        .btn {
            text-decoration: none;
            background: #007BFF;
            color: #ffffff;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 1.2em;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: background 0.3s, color 0.3s;
        }
        .btn:hover {
            background: #0056b3;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .background-bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        .bubble {
            position: absolute;
            bottom: -50px;
            width: 40px;
            height: 40px;
            background: rgba(0, 123, 255, 0.3);
            border-radius: 50%;
            opacity: 0.7;
            animation: rise 6s infinite ease-in-out;
        }
        .bubble:nth-child(2) {
            width: 80px;
            height: 80px;
            left: 20%;
            animation-duration: 8s;
            animation-delay: 2s;
        }
        .bubble:nth-child(3) {
            width: 60px;
            height: 60px;
            left: 40%;
            animation-duration: 10s;
            animation-delay: 4s;
        }
        .bubble:nth-child(4) {
            width: 100px;
            height: 100px;
            left: 60%;
            animation-duration: 7s;
            animation-delay: 1s;
        }
        .bubble:nth-child(5) {
            width: 50px;
            height: 50px;
            left: 80%;
            animation-duration: 9s;
            animation-delay: 3s;
        }
        @keyframes rise {
            0% {
                bottom: -50px;
                transform: translateX(0);
            }
            50% {
                transform: translateX(20px);
            }
            100% {
                bottom: 100%;
                transform: translateX(-20px);
            }
        }
    </style>
</head>
<body>
    <div class="background-bubbles">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>
    <div class="container">
        <h1>Oops!</h1>
        <h2>Something went wrong</h2>
        <p>We can't seem to find the page you're looking for.</p>
        <a href="{{ url('/') }}" class="btn">Go Home</a>
    </div>
</body>
</html>
