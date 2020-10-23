<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">IPT Midterm Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= url('/') ?>">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= url('/users') ?>">User</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= url('/accounts') ?>">Accounts</a>
                </li>
               
            </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card" style="margin-top:70px;">
                    <div class="card-header">
                        <h4 style="text-align:center;">Main Menu</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <a href="<?= url('/') ?>" class="btn btn-primary form-control">Home</a>
                        </div>

                        <div class="form-group">
                            <a href="<?= url('/users') ?>" class="btn btn-info form-control">Users</a>
                        </div>

                        <div class="form-group">
                            <a href="<?= url('/accounts') ?>" class="btn btn-secondary form-control">Accounts</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>