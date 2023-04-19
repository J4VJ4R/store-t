<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>store-t</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</head>

<body>
  <div id="container">
    <!-- header -->
    <header id="header">
      <div id="logo">
        <img src="assets/img/tshirt.png" alt="tshirt logo" srcset="">
        <a href="index.php">
          Tshirt Store
        </a>
      </div>
    </header>
    <!-- menu -->
    <nav id="menu">
      <ul>
        <li><a href="">Category 1</a></li>
        <li><a href="">Category 2</a></li>
        <li><a href="">Category 3</a></li>
        <li><a href="">Category 4</a></li>
        <li><a href="">Category 5</a></li>
      </ul>
    </nav>
    <div id="content">
      <!-- asside-->
      <aside id="aside">
        <div id="login" class="block_aside">
          <h3>Enter to the website</h3>
          <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="button" value="Send">
          </form>
          <ul>
            <li>
              <a href="">Orders</a>
            </li>
            <li>
              <a href="">Manage orders</a>
            </li>
            <li>
              <a href="">Manage categories</a>
            </li>
          </ul>
        </div>
      </aside>

      <!-- center content -->

      <div id="center">
        <h1>Principal products</h1>
        <div class="product">
          <img src="assets/img/tshirt.png" alt="">
          <h2>Blue tshirt</h2>
          <p>25.000 COP</p>
          <a href="#" class="button">Comprar</a>
        </div>
        <div class="product">
          <img src="assets/img/tshirt.png" alt="">
          <h2>Blue tshirt</h2>
          <p>25.000 COP</p>
          <a href="#" class="button">Comprar</a>

        </div>
        <div class="product">
          <img src="assets/img/tshirt.png" alt="">
          <h2>Blue tshirt</h2>
          <p>25.000 COP</p>
          <a href="#" class="button">Comprar</a>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer id="footer">
      <h2>Jara Software Developer &copy <?= date('Y') ?></h2>
    </footer>
  </div>
</body>

</html>