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
            position: relative;
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
        .notice {
            font-size: 14px;
            color: #333;
            background-color: #ffecec;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ffcccc;
            margin-top: 15px;
        }
        .reply-button {
            background-color: #223a66;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 14px;
            margin-left: 10px;
            transition: background-color 0.3s;
        }
        .reply-button:hover {
            background-color: #1a2d50;
        }
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 90%;
            max-width: 400px;
            z-index: 1000;
            display: none;
        }
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }
        .popup-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .popup textarea {
            width: 100%;
            height: 100px;
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 14px;
            resize: none;
        }
        .popup button {
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #223a66;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .popup button:hover {
            background-color: #1a2d50;
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
            <p class="section-title">Client's Name:</p>
            <p>{{ $dataReceived['name'] }}</p>
            @endif

            @if(isset($dataReceived['email']))
            <p class="section-title">Client's Email:</p>
            <p>
                <a href="mailto:{{ $dataReceived['email'] }}">{{ $dataReceived['email'] }}</a>
                <button class="reply-button btn btn-primary d-flex align-items-center"><i class="bi bi-arrow-left me-2"></i>
                Click the Email To Reply</button>

            </p>
            @endif

            @if(isset($dataReceived['phone']))
            <p class="section-title">Client's Phone:</p>
            <p>{{ $dataReceived['phone'] }}</p>
            @endif

            @if(isset($dataReceived['message']))
            <hr>
            <p class="section-title">Client's Message:</p>
            <p class="message">{{ $dataReceived['message'] }}</p>
            @endif
        </div>
        <div class="notice">
            <strong>Notice:</strong> This email is sent from a <strong>noreply</strong> address. Please reply to the email indicated in the form or use the reply button to send your response.
        </div>
    </div>
</body>
</html>