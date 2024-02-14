<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
    <style>
        body {
            background: url('/yes.webp') 
            background-size: cover;
            color: #fff; 
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Black layer with transparency */
            z-index: -1;
        }

        h2 {
            color: #4CAF50;
        }
    </style>
</head>
<body>

<h2>Thank you for your submission!</h2>
<p>We've received your request and will get back to you soon. Thank you for choosing Budlight.</p>

</body>
</html>