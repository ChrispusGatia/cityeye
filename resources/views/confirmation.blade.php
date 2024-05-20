<!DOCTYPE html>
<html>
<head>
    <title>Appointment Request Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        .card h1 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 20px;
        }
        .card p {
            font-size: 16px;
            color: #555555;
            line-height: 1.5;
        }
        .card ul {
            list-style-type: none;
            padding: 0;
        }
        .card ul li {
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
        }
        .card ul li strong {
            color: #333333;
        }
        .card-footer {
            margin-top: 20px;
            font-size: 16px;
            color: #555555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Appointment Request Received</h1>
            <p>Dear {{ $dataReceived['name'] }},</p>
            <p>Thank you for requesting an appointment with City Eye Hospital. We have received your request and one of our team members will get back to you shortly to confirm your booking.</p>
            <p>Here are the details of your request:</p>
            <ul>
                <li><strong>Patient Name:</strong> {{ $dataReceived['name'] }}</li>
                <li><strong>Email:</strong> {{ $dataReceived['email'] }}</li>
                <li><strong>Preferred Doctor:</strong> {{ $dataReceived['doctor'] }}</li>
                <li><strong>Date of Appointment:</strong> {{ $dataReceived['date'] }}</li>
                <li><strong>Preferred Time:</strong> {{ $dataReceived['time'] }}</li>
                <li><strong>Phone Number:</strong> {{ $dataReceived['phone'] }}</li>
                <li><strong>Your Message:</strong> {{ $dataReceived['message'] }}</li>
            </ul>
            <div class="card-footer">
                <p>Thank you,</p>
                <p>City Eye Hospital Team</p>
                <p>Call Us: 0714 617 782</p>
            </div>
        </div>
    </div>
</body>
</html>
