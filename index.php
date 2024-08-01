<?php
$json = file_get_contents("./persons.json");
$data = json_decode($json,true);
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random People!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body class="bg-info">
  <div class="container bg-danger p-2">
    <div class="mt-4 mb-5 d-flex justify-content-between align-items-center">
      <h1 class="text-white">Random People Here! </h1>
    </div>

    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Profile</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $element): ?>
    <tr>
      <td>
        <img src="<?php echo $element["picture"]["medium"] ?>" alt="">
      </td>
      <td><?= $element["name"]["first"] ?></td>
      <td><?=$element["gender"] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  </div>
</body>

</html>