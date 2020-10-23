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
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('/') ?>">Home </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('/users') ?>">User</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?= url('/accounts') ?>">Accounts <span class="sr-only">(current)</span></a>
                </li>
                
            </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Accounts</h1>

                <table class="table table-striped table-bordered">
                    <div class="thead">
                        <tr class="bg-primary">
                            <th>Accounts #</th>
                            <th>Accounts Name</th>
                            <th>Initial Investments</th>
                            <th>Date Started</th>
                        </tr>
                    </div>
                    <div class="tbody">
                        <?php foreach($accounts as $a): ?>
                            <tr>
                                <td><?= $a->user_id?></td>
                                <td><?= $a->acct_name?></td>
                                <td><?= $a->init_invest?></td>
                                <td><?= $a->start_date?></td>
                            </tr>
                        <?php endforeach; ?>
                    </div>
                </table>
            </div>
        </div>
    </div>
</body>
</html>