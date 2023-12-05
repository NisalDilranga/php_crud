<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Create user</h1>
  <form method="post" action="{{route('newUsr.add')}}" >
    @csrf
    @method('post')
    <input type="text" name="fstNme" placeholder="f name"><br>
    <input type="text" name="lstNme" placeholder="l name"><br>
    <input type="number" name="phn" placeholder="phone"><br>
    <input type="submit" value="submit">
  </form>
</body>
</html>