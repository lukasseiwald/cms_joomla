<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>
<body>
<jdoc:include type="modules" name="top" />
<jdoc:include type="component" /> <!-- für die Navigation -->
<jdoc:include type="modules" name="footer" />

<header id="header">
  <h1>Alex Sumner</h1>
  <nav id='mainnav'>

      <section class="dropdown">
        <section class="container" onclick="func(); myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </section>
        <div id="myDropdown" class="dropdown-content">
            <a href="index.html">Start</a>
            <a href="index.html">Leistungen</a>
            <a href="index.html">Blog</a>
            <a href="about.html">Über mich</a>
            <a href="index.html">Kontakt</a>
        </div>
      </section>

  </nav>
</header>

<section id="hero">

  <section id="hero2">
    <h1>Webdesign mit </h1>
    <h1>Sinn und Zweck</h1>
    <h1>und XYZ</h1>
  </section>
  <section id="hero2">
    <a href="#">Angebot einholen</a>
  </section>

</section>

<section id="services">
  <h1>Leistungen</h1>
  <section id="serv">
    <section id="serv-content">
      <h2>Design</h2>
      <img src="templates/alex-sumner-temp/images/design.png" alt="design-icon">
    </section>
    <section id="serv-content">
      <h2>Strategie</h2>
      <img src="templates/alex-sumner-temp/images/strategy.png" alt="strategy-icon">
    </section>
    <section id="serv-content">
      <h2>Consulting</h2>
      <img src="templates/alex-sumner-temp/images/consulting.png" alt="consulting-icon">
    </section>
  </section>
</section>

<section id="news">
  <h1>News</h1>
  <section id="newsnews">
    <section id="news-content">
      <h1>NEWS ALARM !!!</h1>
      <div class="article">
          Wir freuen uns, unsere neuesten Teammitglieder willkommen heißen zu dürfen. Vor zirka 5 Stunden haben wir beschlossen Johannes, Johannes und Johannes bei uns aufzunehmen.
      </div>
    </section>
    <section id="news-content">
      <h1>NEU</h1>
      <div class="article">
          Du hast Lust auf spannende neue Artikel? Du kannst es kaum erwarten, die News zu erfahren, die diese Woche bei uns passiert sind? Tja, Pech gehabt, diese News sind FAKE.
          Du hast Lust auf spannende neue Artikel? Du kannst es kaum erwarten, die News zu erfahren, die diese Woche bei uns passiert sind? Tja, Pech gehabt, diese News sind FAKE.
      </div>
    </section>
    <section id="news-content">
      <h1>BUFFET</h1>
      <div class="article">
          lol wie als würds hier was zum Essen geben. Außerdem ist heute nicht Mittwoch, des heißt es gibt kein Schnitzel. :(
      </div>
    </section>
 </section>
</section>

<section id="refs">
  <h1>Referenzen</h1>
    <section id="refsrefs">
        <section id="refs-content">
            <div class="avatar">
              <img src="templates/alex-sumner-temp/images/johannes.jpg" alt="johannes">
            </div>
            <div class="article">
               <h1>Johannes</h1>
                unterstützt bei Problemen, sowohl bezüglich Web-Dev als auch persönlicher Natur
            </div>
        </section>
        <section id="refs-content">
            <div class="avatar">
              <img src="templates/alex-sumner-temp/images/johannes2.jpg" alt="johannes2">
            </div>
            <div class="article">
                <h1>Johannes</h1>
                bringt gute Laune mit, egal wie anstrengend der Tag schon war
            </div>
        </section>
        <section id="refs-content">
            <div class="avatar">
              <img src="templates/alex-sumner-temp/images/johannes3.png" alt="johannes3">
            </div>
            <div class="article">
              <h1>Johannes</h1>
                bietet den neusten heißen shit und das kostenlos (so fast)
            </div>
        </section>
    </section>
</section>



<footer>
    <p>© Alex Sumner, Webdesigner in Salzburg</p>
</footer>

<script src="templates/alex-sumner-temp/js/script.js"></script>

</body>
</html>
