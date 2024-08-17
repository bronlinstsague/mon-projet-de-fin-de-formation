<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des dons</title>
    <style>
        /* Reset default margins and paddings */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            color: #333;
        }
        .body {
    width: 80%;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

.navbar-brand ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

.navbar-brand ul li {
    display: inline;
    margin: 0 10px;
}

.navbar-brand ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

.accueil {
    padding: 20px;
    background-color: #f9f9f9;
    margin-top: 20px;
}

.accueil h1,
.accueil h3 {
    color: #333;
}

.accueil p {
    margin-bottom: 10px;
}

main {
    padding: 20px;
}

.bronlins {
    background-color: #fff;
    padding: 20px;
    margin-top: 20px;
}

.bronlins form {
    max-width: 400px;
    margin: auto;
}

.bronlins label {
    display: block;
    margin-bottom: 5px;
}

.bronlins input[type="text"],
.bronlins input[type="email"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.bronlins input[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
}

.bronlins input[type="submit"]:hover {
    background-color: #555;
}

.projet {
    padding: 20px;
    background-color: #f9f9f9;
    margin-top: 20px;
}

.projet h2 {
    color: #333;
}

.paragraphe {
    margin-bottom: 20px;
}

.paragraphe p {
    margin-bottom: 10px;
}

.renseignement {
    padding: 20px;
    background-color: #fff;
    margin-top: 20px;
}

.renseignement h2 {
    color: #333;
}

.contact a {
    display: block;
    margin-bottom: 10px;
    color: #333;
    text-decoration: none;
}

footer {
    text-align: center;
    margin-top: 20px;
    padding: 10px 0;
    background-color: #333;
    color: #fff;
    position: relative;
    bottom: 0px;
}

footer ion-icon {
    font-size: 30px;
    margin-left: 5px;
    color: #fff;
}

@media (max-width: 768px) {
    .body {
        width: 90%;
    }
}

    </style>
</head>
<body>
<div class="body">
  <header>
    <h1 class="dons">Gestion des dons</h1>
    <nav class="navbar-brand">
      <ul>
        <li class="detail"><a href="#accueil">Accueil</a></li>
        <li class="partage"><a href="#faire_un_don">Faire un don</a></li>
        <li class="objetif"><a href="#projet">Nos projets</a></li>
        <li class="rencontre"><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  
  <section class="accueil">
     <h1 class="ligne">Accueil</h1>
     <h3>C'est quoi le dons</h3>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda laboriosam culpa animi molestias sequi excepturi architecto, natus, rerum consectetur, itaque consequuntur commodi? Possimus aliquam numquam recusandae incidunt vitae soluta.</p>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit libero optio dicta sint, deserunt fugiat. Suscipit nam beatae enim officia nihil sequi natus quo praesentium minima itaque! Architecto, laudantium ullam.</p>
     <h3>Pourquoi est-il important de faire des dons</h3>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam corporis fugiat id eveniet pariatur consequatur quae, illum a repellat dolores distinctio ad ipsa laborum maxime nisi sint consequuntur consectetur vitae.</p>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni officiis iusto sequi ipsum ullam quia praesentium, reiciendis consequuntur magnam quibusdam quos nihil officia laudantium optio eos eum exercitationem ipsa quaerat?</p>
  </section>

  <main>
    <h2><span>Faire un don</span></h2>
    <div class="bronlins">
       <form action="#" method="POST">
         <label for="montant">Montant du don :</label>
         <input type="text" id="montant" name="montant"><br><br>
         <label for="nom">Nom :</label>
         <input type="text" id="nom" name="nom"><br><br>
         <label for="email">Email :</label>
         <input type="email" id="email" name="email"><br><br>
         <label for="localisation">Localisation du donneur :</label>
         <input type="text" id="localisation" name="localisation"><br><br>
         <label for="profession">Profession :</label>
         <input type="text" id="profession" name="profession"><br><br>
         <input type="submit" value="Faire un don">
        </form>
    </div> 
  </main>

  <section class="projet" id="projet">
    <h2>Nos <span>projets</span></h2>
    <div class="projets_d_evolution">
       <div class="paragraphe">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci itaque porro reiciendis, saepe aut cum quas molestias ab debitis in, consectetur tenetur fugiat minima maiores corrupti corporis delectus mollitia dolores.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe vel laboriosam a asperiores tenetur? Nihil qui aut animi quia voluptas rem ad, aspernatur minima laborum voluptatem aliquid cum impedit molestiae.</p>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vel labore, fugiat aliquid ipsa sit necessitatibus magni deleniti! Illo quis quae quasi eaque omnis eveniet iure quibusdam dolores exercitationem ipsa!</p>
       </div>
       <img src="/images/791691a1a9c620067636dc8258e58513.jpg" alt="Projets image">
    </div>
  </section>

  <section class="renseignement">
    <h2>Contact</h2>
   <div class="contact">
   <a href="tel:+673493377">Numéro WhatsApp</a><br><br>
   <a href="mailto:tbronlins@gmail.com">Adresse email</a>
   </div>
  </section>

  <footer>
    <p>&copy; 2022 Gestion des dons</p><br>
    <ion-icon name="logo-facebook"></ion-icon>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
