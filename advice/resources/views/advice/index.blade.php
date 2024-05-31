<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Advice Generator</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #E0E0E0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #1F1F1F;
            padding: 20px 0;
            text-align: center;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin: 0;
            font-size: 2em;
            color: #BB86FC;
            text-transform: uppercase;
        }

        .container {
            max-width: 600px;
            width: 100%;
            margin-top: 10px;
            background-color: #1F1F1F;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 40px;
            color: #E0E0E0;
            font-style: italic;
            line-height: 1.6;
        }

        form {
            display: flex;
            justify-content: center;
        }

        button {
            padding: 15px 30px;
            font-size: 1em;
            color: #1F1F1F;
            background-color: #BB86FC;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #9A67EA;
            transform: translateY(-2px);
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #1F1F1F;
            padding: 5px 0;
            text-align: center;
            color: #9A67EA;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Random Advice Generator</h1>
    </div>

    <div class="container">
        @if ($randomAdvice)
            <p>"{{ $randomAdvice['slip']['advice'] }}"</p>
        @endif

        <form action="/advice" method="GET">
            <button type="submit">Generate Advice</button>
        </form>
    </div>

    <footer class="footer">
        <br>
        <p>&copy; 2024 Random Advice Generator</p>
    </footer>
</body>
</html>
