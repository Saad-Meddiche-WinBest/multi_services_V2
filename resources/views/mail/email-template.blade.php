<!DOCTYPE html>
<html>
<head>
    <title>Email Received</title>
</head>
<body>
    <p>You have received an email from <strong>{{ $fromNom }}</strong> with the email: <a href="mailto:{{ $fromEmail }}">{{ $fromEmail }}</a></p>
    @if(isset($tel))
    <p>Tel: {{$tel}}</p>
    @endif  
    <p>The message contains:</p>
    <p><strong>{{ $body }}</strong></p>
</body>
</html>