<html>
<head>
    <title>Lista de clientes cadastrado </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <a href="{{route('index')}}"><button type="button" class="btn btn-primary">Voltar</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cliente as $cliente)
    <tr>
      <th scope="row">{{$cliente->id}}</th>
      <td>{{$cliente->nome}}</td>
      <td>{{$cliente->email}}</td>
      <td>{{$cliente->telefone}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>