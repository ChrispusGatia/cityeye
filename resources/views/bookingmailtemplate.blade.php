<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Appointment Booking Alert</title>
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
            text-align: center;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }
        .card {
            margin-top: 20px;
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
        .message {
            font-size: 14px;
            line-height: 1.5;
        }
        .note {
            color: #223a66;
            background-color: #cce5ff;
            padding: 10px;
            border: 1px solid #b8daff;
            border-radius: 4px;
            margin-top: 10px;
            font-size: 14px;
        }
        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">New Booking Alert!</div>
        <div class="card">
            <p><strong>Here are the details of the patient:</strong></p>
            @if(isset($dataReceived['name']))
            <p class="section-title">Patient Name:</p>
            <p>{{ $dataReceived['name'] }}</p>
            @endif

            @if(isset($dataReceived['email']))
            <p class="section-title">Patient Email:</p>
            <p>{{ $dataReceived['email'] }}</p>
            @endif

            @if(isset($dataReceived['doctor']))
            <p class="section-title">Preferred Doctor:</p>
            <p>{{ $dataReceived['doctor'] }}</p>
            @endif

            @if(isset($dataReceived['date']))
            <p class="section-title">Preferred Date of Appointment:</p>
            <p>{{ $dataReceived['date'] }}</p>
            @endif

            @if(isset($dataReceived['time']))
            <p class="section-title">Preferred Time:</p>
            <p>{{ $dataReceived['time'] }}</p>
            <div class="note">
                The preferred date and time indicated by the patient is open for discussion and based on availability. It is not the final booking time but a preferred or chosen time. Please call the patient to adjust the date and time accordingly. Thank you.
            </div>
            @endif

            @if(isset($dataReceived['phone']))
            <p class="section-title">Patient Phone Number:</p>
            <p>{{ $dataReceived['phone'] }}</p>
            @endif

            @if(isset($dataReceived['message']))
            <hr>
            <p class="section-title">Message from the Patient:</p>
            <p class="message">{{ $dataReceived['message'] }}</p>
            @endif
        </div>
    </div>
</body>
</html>
