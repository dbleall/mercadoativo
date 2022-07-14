<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail de Contato</title>
</head>
<body>
    <h1>Mensagem de Contato</h1>
    <p>Nome: {{ $details['name'] }}</p>
    <p>E-mail: {{ $details['email'] }}</p>
    <p>Assunto: {{ $details['subject'] }}</p>
    <p>Mensagem: {{ $details['message'] }}</p>
</body>
</html>