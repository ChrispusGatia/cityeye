<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }
        .header {
            background-color: #223a66;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
            margin-bottom: 15px;
        }
        .card {
            padding: 15px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card p {
            margin: 0;
            padding: 5px 0;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #223a66;
        }
        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }
        .message {
            font-size: 14px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            {{ $dataReceived['subject'] ?? 'Enquiring' }}
        </div>
        <div class="card">
            @if(isset($dataReceived['name']))
            <p class="section-title">Name:</p>
            <p>{{ $dataReceived['name'] }}</p>
            @endif

            @if(isset($dataReceived['email']))
            <p class="section-title">Email:</p>
            <p>{{ $dataReceived['email'] }}</p>
            @endif

            @if(isset($dataReceived['phone']))
            <p class="section-title">Phone:</p>
            <p>{{ $dataReceived['phone'] }}</p>
            @endif

            @if(isset($dataReceived['message']))
            <hr>
            <p class="section-title">Message:</p>
            <p class="message">{{ $dataReceived['message'] }}</p>
            @endif
        </div>
    </div>
</body>
</html>
