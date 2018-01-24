<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/setup.php'); ?>
  <?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/head.php'); ?>
</head>

<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/header.php'); ?>

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
          <img src= "<?php echo $this->baseurl ?>/images/<?php echo design?>" alt="design-icon">
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

    <!-- NEWS SECTION -->

   <section id="news">
     <h1>NEWS</h1>
     <section id="newsnews">
     <?php
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('*')
        ->from('#__content')
        ->where('catid = 8');
        $db->setQuery($query);
        $rows = $db->loadObjectList();

        foreach($rows as $row){
          ?>
            <p>
              <section id="news-content">

                <h1><?php echo $row->title ?> </h1>


                <div class="article">
                    <?php echo $row->introtext ?>
                </div>
            </p>
          </section>
          <?php
        }
     ?>
   </section>
  </section>

  <section id="refs">
    <h1>Referenzen</h1>
    <section id="refsrefs">
      <?php
         $db = JFactory::getDbo();
         $query = $db->getQuery(true);
         $query->select('*')
         ->from('#__content')
         ->where('catid = 9');
         $db->setQuery($query);
         $rows = $db->loadObjectList();

         foreach($rows as $row){
           $images  = json_decode($row->images);

           ?>
           </p>
           <section id="refs-content">
             <div class="avatar">
               <img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="johannes">
             </div>
             <div class="article">
                <h1><?php echo $row->title ?></h1>
                <?php echo $row->introtext ?>
             </div>
           </section>
           <?php
         }
      ?>
    </section>
  </section>



<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/footer.php'); ?>
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/scripts.php'); ?>
