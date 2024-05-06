<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body style="font-family: Arial, sans-serif; background-color: #f9f9f9; color: #333; padding: 20px; max-width: 600px; margin: 0 auto; line-height: 1.6;">

    <table cellpadding="0" cellspacing="0" width="100%" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); overflow: hidden;">
        @if(isset($dataReceived['name']))
        <tr>
            <td style="padding: 20px;">
                <p style="font-size: 18px; margin-bottom: 8px;"><strong>Name:</strong> {{ $dataReceived['name'] }}</p>
            </td>
        </tr>
        @endif

        @if(isset($dataReceived['email']))
        <tr>
            <td style="padding: 20px;">
                <p style="font-size: 18px; margin-bottom: 8px;"><strong>Email:</strong> {{ $dataReceived['email'] }}</p>
            </td>
        </tr>
        @endif

        @if(isset($dataReceived['phone']))
        <tr>
            <td style="padding: 20px;">
                <p style="font-size: 18px; margin-bottom: 8px;"><strong>Phone:</strong> {{ $dataReceived['phone'] }}</p>
            </td>
        </tr>
        @endif

        @if(isset($dataReceived['message']))
        <tr>
            <td style="padding: 20px;">
                <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">
                <p style="font-size: 16px; margin-bottom: 20px;"><strong>Message:</strong></p>
                <p style="font-size: 16px; line-height: 1.8;">{{ $dataReceived['message'] }}</p>
            </td>
        </tr>
        @endif
    </table>

</body>

</html>