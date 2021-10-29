<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bertapsan PHP-M2 Task</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/main.css" />
  </head>
</html>
<body>
<div class="mainContainer">
  <?php include "header.php"; ?>
  
  <nav>
    <ul class="nav">
      <li class="nav__item"><a href="">Inicio</a>
      </li>
      <li class="nav__item"><a href="">Blog</a>
      </li>
      <li class="nav__item"><a href="">Destacados</a>
      </li>
      <li class="nav__item"><a href="">Sobre mí</a>
      </li>
      <li class="nav__item"><a href="">Contacto</a>
      </li>
    </ul>
  </nav>

  <section class="articles">
    <article class="articles__item article1">
      <h2 class="articles__item--title">Título del artículo 1
      </h2>
      <button class="articles__item--button">Ir...
      </button>
    </article>
    <article class="articles__item article2">
      <h2 class="articles__item--title">Título del artículo 2
      </h2>
      <button class="articles__item--button">Ir...
      </button>
    </article>
    <article class="articles__item article3">
      <h2 class="articles__item--title">Título del artículo 3
      </h2>
      <button class="articles__item--button">Ir...        
      </button>
    </article>
  </section>

  <section class="content">
    <div class="content__info">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
    <aside class="content__aside aside1">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</aside>
    <aside class="content__aside aside2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</aside>
</section>
  
  <?php include "footer.php"; ?>
</div>
</body>
</html>