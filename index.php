<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maquette</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="#section1">Accueil</a>
            <a href="#section2">Contactez-moi</a>
        </nav>
    </header>
    
    <main>
        <section id="section1">
            <div class="image-container">
                <div class="image">
                    <img src="image/tokyo.jpg" alt="Tokyo">
                </div>
                <p>Tokyo : Plongez au cœur de l’innovation et de la tradition : Tokyo vous attend, entre néons étincelants et temples ancestraux.</p>
            </div>
            
            <div class="image-container">
                <div class="image">
                    <img src="image/losangeles.jpg" alt="Los Angeles">
                </div>
                <p>Los Angeles : Vivez le rêve californien : soleil, plages dorées et étoiles à chaque coin de rue à Los Angeles !</p>
            </div>
            
            <div class="image-container">
                <div class="image">
                    <img src="image/laponie.jpg" alt="Laponie">
                </div>
                <p>Laponie : Émerveillez-vous sous les aurores boréales : la Laponie, un monde magique de neige et de silence féerique.</p>
            </div>
        </section>
        
        <section id="section2">
            <div class="image">
                <img src="image/TYDIAN AIRLINES.png" alt="Tydian Airlines">
            </div>
            <form id="form">
                <input type="text" id="nom" placeholder="Nom">
                <input type="text" id="prenom" placeholder="Prénom">
                <input type="email" id="email" placeholder="Email">
                <button type="submit">Validez</button>
                <div id="msg"></div>
            </form>
        </section>
    </main>
    
    <footer>
        <p>Page web faite par 
            <?php include 'data.php'; echo $prenom; ?> 
            venant de la base de données Php
        </p>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>