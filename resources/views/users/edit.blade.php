<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>edit</h1>
  <form method="post" action="{{route('newUsr.update', ['user' => $user])}}" >
    @csrf
    @method('post')
    <input type="text" name="fstNme" placeholder="f name" value="{{$user->fstNme}}"><br>
    <input type="text" name="lstNme" placeholder="l name" value="{{$user->fstNme}}"><br>
    <input type="number" name="phn" placeholder="phone" value="{{$user->fstNme}}"><br>
    <input type="submit" value="update">
  </form>
</body>
</html>