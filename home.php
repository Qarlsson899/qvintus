<?php
require_once 'includes/class.user.php';
require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qvintus</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/card.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <div class="d-flex justify-content-center mb-4">
            <form class="d-flex w-50" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>

        <h2 class="text-center mb-4">Kategorier</h2>


        <div class="row d-flex justify-content-center">
            <!-- First Card -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <a href="https://your-link1.com" class="card-link">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/book1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Antiken</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Second Card -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <a href="https://your-link2.com" class="card-link">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/book2.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Historia</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Third Card -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <a href="https://your-link3.com" class="card-link">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/book3.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Kategori</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Fourth Card -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <a href="https://your-link4.com" class="card-link">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/book4.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Kategori</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Button Row Below Cards -->
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-md-1 mb-4">
                <button class="btn btn-primary w-100">Se fler</button>
            </div>
        </div>
    </div>
    <h2 class="text-center mb-4">Sällsynt och värdefullt</h2>
    <!-- New Container with 4 Custom Cards -->
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <!-- Fifth Card (Custom Card 1) -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <div class="card custom-left-align" style="width: 12rem; border: 1px solid #ccc;">
                    <img src="images/book1.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body text-start">
                        <h4 style="margin-bottom: 0.5rem;">Name</h4>
                        <p class="card-text" style="margin-bottom: 0;">Författare:</p>
                    </div>
                </div>
            </div>

            <!-- Sixth Card (Custom Card 2) -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <div class="card custom-left-align" style="width: 12rem; border: 1px solid #ccc;">
                    <img src="images/book2.png" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body text-start">
                        <h4 style="margin-bottom: 0.5rem;">Name</h4>
                        <p class="card-text" style="margin-bottom: 0;">Författare:</p>
                    </div>
                </div>
            </div>

            <!-- Seventh Card (Custom Card 3) -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <div class="card custom-left-align" style="width: 12rem; border: 1px solid #ccc;">
                    <img src="images/book3.png" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body text-start">
                        <h4 style="margin-bottom: 0.5rem;">Name</h4>
                        <p class="card-text" style="margin-bottom: 0;">Författare:</p>
                    </div>
                </div>
            </div>

            <!-- Eighth Card (Custom Card 4) -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <div class="card custom-left-align" style="width: 12rem; border: 1px solid #ccc;">
                    <img src="images/book4.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body text-start">
                        <h4 style="margin-bottom: 0.5rem;">Name</h4>
                        <p class="card-text" style="margin-bottom: 0;">Författare:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-md-1 mb-4">
            <button type="button" class="btn btn-outline-primary btn-lg px-4 me-sm-2 fw-bold">Se fler</button>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-4">Populärt just nu</h2>

        <!-- New Container with 4 Custom Cards -->
        <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <!-- Fifth Card (Custom Card 1) -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <div class="card custom-left-align" style="width: 12rem; border: 1px solid #ccc;">
                    <img src="images/book1.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body text-start">
                        <h4 style="margin-bottom: 0.5rem;">Name</h4>
                        <p class="card-text" style="margin-bottom: 0;">Författare:</p>
                    </div>
                </div>
            </div>

            <!-- Sixth Card (Custom Card 2) -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <div class="card custom-left-align" style="width: 12rem; border: 1px solid #ccc;">
                    <img src="images/book2.png" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body text-start">
                        <h4 style="margin-bottom: 0.5rem;">Name</h4>
                        <p class="card-text" style="margin-bottom: 0;">Författare:</p>
                    </div>
                </div>
            </div>

            <!-- Seventh Card (Custom Card 3) -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <div class="card custom-left-align" style="width: 12rem; border: 1px solid #ccc;">
                    <img src="images/book3.png" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body text-start">
                        <h4 style="margin-bottom: 0.5rem;">Name</h4>
                        <p class="card-text" style="margin-bottom: 0;">Författare:</p>
                    </div>
                </div>
            </div>

            <!-- Eighth Card (Custom Card 4) -->
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <div class="card custom-left-align" style="width: 12rem; border: 1px solid #ccc;">
                    <img src="images/book4.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body text-start">
                        <h4 style="margin-bottom: 0.5rem;">Name</h4>
                        <p class="card-text" style="margin-bottom: 0;">Författare:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-md-1 mb-4">
            <button type="button" class="btn btn-outline-primary btn-lg px-4 me-sm-2 fw-bold">Se fler</button>
            </div>
        </div>
    </div>

    <div class="bg-light text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-dark">Hittar inte det du söker?</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-4 mb-4">Inga problem, vi fixar det flesta önskemål, stora som små.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-primary btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
        </div>
      </div>
    </div>
  </div>

<!-- Aligned 50/50 Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Left Side: Text -->
        <div class="col-md-6">
            <h2>Hälsning från Qvintus</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel risus at ipsum faucibus
                pellentesque nec ac purus. Fusce quis neque at est vestibulum ultrices sed eu mauris.
            </p>
            <p>
                Sed dapibus, libero at cursus suscipit, neque quam congue purus, ac lacinia odio neque a enim.
                Integer in varius nulla, et egestas lorem.
            </p>
            <button type="button" class="btn btn-outline-primary btn-lg px-4 me-sm-2 fw-bold">Läs mer</button>
        </div>

        <!-- Right Side: Image -->
        <div class="col-md-6">
            <img src="images/qvintus.png" class="img-fluid" alt="Placeholder Image">
        </div>
    </div>
</div>

<h2 class="text-center mb-4">Kundhistorier</h2>

<div class="container my-5">
    <div class="d-flex justify-content-center flex-wrap gap-4">
      <!-- Card 1 -->
      <div class="card" style="width: 18rem;">
        <img src="images/historia.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Historia</h5>
          <p class="card-text">Some quick example text to build on the card title.</p>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card 2</h5>
          <p class="card-text">Some quick example text to build on the card title.</p>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card 3</h5>
          <p class="card-text">Some quick example text to build on the card title.</p>
        </div>
      </div>
      
      <!-- Card 4 -->
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card 4</h5>
          <p class="card-text">Some quick example text to build on the card title.</p>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
require_once 'includes/footer.php';
?>
</html>
