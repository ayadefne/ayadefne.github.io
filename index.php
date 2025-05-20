<?php
// ===============================
// index.php
// Dark themed, modern CV script
// ===============================
?><!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aya Defne ÖZKUL – CV & Portfolio</title>

  <!-- SEO Meta -->
  <meta name="description" content="Aya Defne Özkul'un modern, dinamik ve dark tema CV sayfası.">
  <meta name="keywords" content="Aya Özkul, CV, Bilgisayar Mühendisliği, Portfolio">
  <link rel="canonical" href="https://seninsiten.com/">

  <!-- Open Graph -->
  <meta property="og:title" content="Aya Defne ÖZKUL – CV & Portfolio">
  <meta property="og:description" content="Bilgisayar mühendisliği öğrencisi Aya Defne Özkul'un modern, dinamik ve dark tema CV sayfası.">
  <meta property="og:url" content="https://seninsiten.com/">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://seninsiten.com/img/profile-dark.jpg">

  <!-- JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Aya Defne ÖZKUL",
    "url": "https://seninsiten.com/",
    "image": "https://seninsiten.com/img/profile-dark.jpg",
    "jobTitle": "Bilgisayar Mühendisliği Öğrencisi",
    "alumniOf": "Karabük University",
    "sameAs": [
      "https://www.linkedin.com/in/aya-defne-özkul-77a088353/"
    ]
  }
  </script>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="nav-bar">
    <div class="logo">Aya ÖZKUL</div>
    <ul class="nav-links">
      <li><a href="#about">Hakkımda</a></li>
      <li><a href="#education">Eğitim</a></li>
      <li><a href="#skills">Yetenekler</a></li>
      <li><a href="#experience">Deneyimler</a></li>
      <li><a href="#contact">İletişim</a></li>
    </ul>
    <div class="toggle-theme" id="toggleTheme">🌙</div>
  </nav>

  <header id="about">
    <div class="intro">
      <img src="https://media.licdn.com/dms/image/.../profile-displayphoto-shrink_400_400.jpg" alt="Profil" class="profile-img">
      <div class="intro-text">
        <h1>Aya Defne ÖZKUL</h1>
        <p>2210206052 | Bilgisayar Mühendisliği Öğrencisi</p>
      </div>
    </div>
  </header>

  <main>
    <section id="education" class="card">
      <h2>Eğitim</h2>
      <ul>
        <li><strong>2018–2022</strong> Private Form Kampus College Science High School</li>
        <li><strong>2022–...</strong> Karabük Üniversitesi, Bilgisayar Mühendisliği</li>
      </ul>
    </section>

    <section id="skills" class="card">
      <h2>Yetenekler</h2>
      <ul id="skillsList">
        <?php
          $skills = ['C Programming','Flutter (Beginner)','SQL (Intermediate)','Bartender'];
          foreach($skills as $skill){
            echo "<li>✔ $skill</li>";
          }
        ?>
      </ul>
    </section>

    <section id="experience" class="card">
      <h2>Deneyimler</h2>
      <ul>
        <li><strong>GDC On Campus:</strong> Core Team Member</li>
        <li><strong>TEMA Youth Foundation:</strong> Management Team Member</li>
      </ul>
    </section>

    <section id="contact" class="card">
      <h2>İletişim</h2>
      <ul>
        <li>Tel: <a href="tel:+905327600648">+90 532 760 06 48</a></li>
        <li>Email: <a href="mailto:ayadefne@gmail.com">ayadefne@gmail.com</a></li>
        <li>Konum: Karabük, Türkiye</li>
        <li>LinkedIn: <a href="https://www.linkedin.com/in/aya-defne-özkul-77a088353/">Profil</a></li>
      </ul>
    </section>
  </main>

  <footer>
    <p>© <?= date('Y') ?> Aya Defne ÖZKUL</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
