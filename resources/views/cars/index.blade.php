<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">mark</th>
      <th scope="col">model</th>
      <th scope="col">year</th>
      <th scope="col">run</th>
      <th scope="col">color</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cars as $car)
    <tr>
      <th scope="row">{{$car->id}}</th>
      <td>{{$car->mark}}</td>
      <td>{{$car->model}}</td>
      <td>{{$car->year}}</td>
      <td>{{$car->run}}</td>
      <td>{{$car->color}}</td>
      <td>{{$car->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
