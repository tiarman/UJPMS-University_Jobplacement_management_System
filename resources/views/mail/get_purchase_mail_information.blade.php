<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Touch and Solve</title>
</head>
<body>
<section style="background-color: whitesmoke">
    <div class="container" style="background-color: white; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 15px" >
        <h2 style="text-align: center; font-weight: bold">Clients Transaction Information</h2>
        <p><strong>Transaction ID:</strong> {{$trx_id}}</p>
        <p><strong>Mobile Number:</strong> {{$phone}}</p>
        <p><strong>Total Amount:</strong> {{$amount}}</p>
    </div>
</section>
</body>
</html>
