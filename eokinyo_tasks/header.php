<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!--Our css styles load after the bootstrap css files, and is therefore a priority-->
        <link rel="stylesheet" href="bootstrapstyles.css">
    </head>
    <body>
        <div class="container">
    
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
    
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="ex1.php">Exercise 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="ex2.php">Exercise 2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="ex3.php">Exercise 3</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="ex4.php">Exercise 4</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://github.com/eokinyo/Team_21/blob/02ca7c89ea3d8499eee5e31021b252072a276268/README.md" target="_blank">Exercise 5</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../crud/index.php">Exercise 6</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="ex7.php">Exercise 7</a>
                      </li>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
              <div class="row">