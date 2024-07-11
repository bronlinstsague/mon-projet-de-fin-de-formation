<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion des dons</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1 class="dons">Gestion des dons</h1>
    <nav class="navbar-dons">
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Faire un don</a></li>
        <li><a href="#">Nos projets</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
  <active>
          <div class="accueil">
             <h1 class="ligne">accueil</h1>
             <h3>c'est quoi le dons</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda laboriosam culpa animi molestias sequi excepturi architecto, natus, rerum consectetur, itaque consequuntur commodi? Possimus aliquam numquam recusandae incidunt vitae soluta.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit libero optio dicta sint, deserunt fugiat. Suscipit nam beatae enim officia nihil sequi natus quo praesentium minima itaque! Architecto, laudantium ullam.</p>
             <h3>pourquoi est il important de faire des dons</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam corporis fugiat id eveniet pariatur consequatur quae, illum a repellat dolores distinctio ad ipsa laborum maxime nisi sint consequuntur consectetur vitae.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni officiis iusto sequi ipsum ullam quia praesentium, reiciendis consequuntur magnam quibusdam quos nihil officia laudantium optio eos eum exercitationem ipsa quaerat?</p>
          </div>
  </active>
  <main>
    <h2>Faire un don</h2>
    <form action="/submit_don" method="post">
      <label for="montant">Montant du don :</label>
      <input type="text" id="montant" name="montant"><br><br>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom"><br><br>
      <label for="email">Email :</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="localisation">localisation du donneur</label>
      <input type="text" id="localisation" name="localisation"><br><br>
      <label for="proffetion">proffetion</label>
      <input type="text" id="proffetion" name="proffetion"><br><br>
      <input type="submit" value="Faire un don">
    </form>
  </main>

  <section class="projet">
    <h2>Nos projets</h2>
    <div class="projets_d_evolution">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci itaque porro reiciendis, saepe aut cum quas molestias ab debitis in, consectetur tenetur fugiat minima maiores corrupti corporis delectus mollitia dolores.</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe vel laboriosam a asperiores tenetur? Nihil qui aut animi quia voluptas rem ad, aspernatur minima laborum voluptatem aliquid cum impedit molestiae.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vel labore, fugiat aliquid ipsa sit necessitatibus magni deleniti! Illo quis quae quasi eaque omnis eveniet iure quibusdam dolores exercitationem ipsa!</p>
       <img src="/images/791691a1a9c620067636dc8258e58513.jpg" alt="imges10">
    </div>
  </section>

  <section>
    <h2>Contact</h2>
   <div class="contact">
   <a href="673493377">numero whatsapp</a><br><br>
   <a href="tbronlins@gmail.com">adresse email</a>
   </div>
  </section>

  <footer>
    <p>&copy; 2022 Gestion des dons</p>
  </footer>


</body>
</html>