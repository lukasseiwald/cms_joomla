<header id="header">
        <section id="header_container" class="clearfix">
        <h1 class="logo">
            <a href="/" title="Custom Template">Custom Template</a>
        </h1>
        <?php if($this->countModules('main_nav')) : ?>
 
        <nav id="main_nav">
 
            <jdoc:include type="modules" name="main_nav" style="raw" />
 
        </nav>
 
        <?php endif;?>
        </section>
    </header>