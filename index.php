<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .jumbotron {
            margin-bottom: 0;
            background-image: url('header-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Header -->
    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">Welcome to My Portfolio</h1>
            <p class="lead">I am a Full Stack Developer</p>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About Me</h2>
            <p class="text-center">I am a passionate developer with experience in web development. I enjoy building everything from small business sites to rich interactive web apps.</p>
        </div>
    </section>

    <?php  include("project_fetch.php");   ?>

    <!-- Projects Section -->
    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Projects</h2>
            <div class="row">

                <?php  if(!empty($project)):?>
                  <?php foreach($project as $projects):?>  

                    

                <div class="col-md-4">
                    <div class="card mb-4">
                        <?php if(!empty($projects['git_hub'])): ?>

                    <a href="<?php echo $projects['git_hub']  ?>">
                        <img src="<?php echo $projects['image'] ?>" class="card-img-top" alt="Project 1">
                        </a>

                         <?php else:?>

                             <img src="<?php echo $projects['image'] ?>" class="card-img-top" alt="Project 1">

                         <?php endif;?>
                         




                        <div class="card-body">
                            <h5 class="card-title"><?php echo $projects['title'] ?></h5>
                            <p class="card-text"><?php echo $projects['description'] ?></p> 
                        </div>
                    </div>
                </div>

          

                <?php endforeach;?>

                <?php endif; ?>
             
             



            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center">Contact</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="msg" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit"  class="btn btn-primary btn-block">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Name. All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
