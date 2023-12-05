<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Products</h1>
  <div>
    <table border="1">
        <tr>
          <th>id</th>
          <th>f name</th>
          <th>l name</th>
          <th>phone</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
        @foreach($users as $user)
        <tr>
          <td>{{$user -> id}}</td>
          <td>{{$user -> fstNme}}</td>
          <td>{{$user -> lstNme}}</td>
          <td>{{$user -> phn}}</td>
          <td><a href="{{route('newUsr.edit', ['user' => $user])}}">edit</a></td>
          <td>
            <form action="{{route('newUsr.delete', ['user' => $user])}}" method="post">
              @csrf
              @method('delete')
              <input type="submit" value="delete">
            </form>
          </td>
        </tr>
        @endforeach
    </table>
  </div>
</body>
</html>