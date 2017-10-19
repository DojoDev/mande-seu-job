<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Suport Mande Seu Job</title>
</head>
<body>
<h2>Suporte Manda Seu job - Agência Virtude</h2>
    <p>
    Obrigado {{ucfirst($user->name)}} por entrar em contato com nossa equipe de suporte. <br>Foi aberto um ticket de suporte para você. Você será notificado quando uma resposta for feita por e-mail. Os detalhes do seu bilhete são mostrados abaixo:
    </p>

    <p>Title: {{ $ticket->title }}</p>
    <p>Priority: {{ $ticket->priority }}</p>
    <p>Status: {{ $ticket->status }}</p>

    <p>
    Você pode ver o ingresso a qualquer momento em {{url('/tickets/'.$ticket->ticket_id)}}
    </p>

</body>
</html>