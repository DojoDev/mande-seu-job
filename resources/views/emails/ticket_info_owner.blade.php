<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Suport Mande Seu Job</title>
</head>
<body>
<div class="container">
<h2>Olá, recebemos mais um pedido de {{ucfirst($user->name)}}</h2>
   <small>{{$ticket->id}}</small>
   <h3>{{$ticket->title}}</h3>
   <small>{{$ticket->category_id}}</small>
   <b>{{$ticket->message}}</b>
</div>

    <p>Title: {{ $ticket->title }}</p>
    <p>Priority: {{ $ticket->priority }}</p>
    <p>Status: {{ $ticket->status }}</p>

    <p>
    Você pode ver o ingresso a qualquer momento em {{url('/tickets/'.$ticket->ticket_id)}}
    </p>

</body>
</html>