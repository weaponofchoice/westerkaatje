<?php
/*
 * Adding an extra admin page for tutorials
 * This page is information reference about the admin panel, created for clients
 */

add_action( 'admin_menu', 'custom_page_tutorial_register' );

function custom_page_tutorial_register(){
  add_submenu_page(
    'index.php', // Parent slug
    'Tutorial',                // page title
    'Tutorial',                // menu title
    'read',                    // capability
    'tutorial',                // menu slug
    'custom_page_tutorial_render'        // callback function
  );
}
function custom_page_tutorial_render(){
?>
  <div class="wrap tutorial">
    <div class="tutorial-header">
      <h1>Uitleg content elementen</h1>
      <p>Hieronder staan alle beschikbare content elementen onder elkaar. Van ieder element is een voorbeeldafbeelding te zien, met daarnaast informatie over het element.</p>
      <p style="font-weight:bold">Let op! Deze pagina is alleen bedoeld om voorbeelden te geven en te instrueren. Om de echte content in te vullen, gaat u naar "Pagina's".</p>
      
      <ul>
        <p style="margin-bottom: 5px;">Snel navigeren naar:</p>
        <li><a href="#add-content">01. Een element toevoegen</a></li>
        <li><a href="#tekst">02. Tekst</a></li>
        <li><a href="#blok-tekst">03. Blok (tekst)</a></li>
        <li><a href="#blok-afbeelding">04. Blok (afbeelding)</a></li>
        <li><a href="#afbeeldingen-grid">05. Afbeeldingen grid</a></li>
        <li><a href="#formulier">06. Formulier</a></li>
      </ul>
    </div>
    
    <!-- Tutorial Block -->
    <div id="add-content" class="tutorial-block">
      <div class="tutorial-block-left">
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/add-content.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/add-content.png">
        </a>
        <p>Figuur 1.0</p>
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/add-content2.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/add-content2.png">
        </a>
        <p>Figuur 1.1</p>
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/add-content3.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/add-content3.png">
        </a>
        <p>Figuur 1.2</p>
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/add-content4.gif" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/add-content4.gif">
        </a>
        <p>Figuur 1.3</p>
      </div>
      <div class="tutorial-block-right">
        <h2>01. Een element toevoegen</h2>
        <p>Als u een nieuwe pagina aanmaakt, komt er een vergelijkbaar scherm tevoorschijn zoals in figuur 1.0. <strong>Om een content element toe te voegen</strong> klikt u op de blauwe 'Voeg element toe' knop(zie figuur 1.1).</p>
        <p>Wanneer er al elementen aanwezig zijn kunt u ook op het plusje klikken, rechtsbovenaan het element(zie figuur 1.2). Het toegevoegde element komt dan boven het vorige element te staan.</p>
        <p>De <strong>volgorde van toegevoegde elementen</strong> kan op ieder moment veranderd worden. Het is handig om de elementen daarvoor eerste in te klappen(zie figuur 1.3).</p>
      </div>
    </div>
    
    <!-- Tutorial Block -->
    <div id="tekst" class="tutorial-block">
      <div class="tutorial-block-left">
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text.png">
        </a>
        <p>Figuur 2.0</p>
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text2.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text2.png">
        </a>
        <p>Figuur 2.1</p>
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text3.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text3.png">
        </a>
        <p>Figuur 2.2</p>
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text4.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text4.png">
        </a>
        <p>Figuur 2.3</p>
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text5.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/text5.png">
        </a>
        <p>Figuur 2.4</p>
      </div>
      <div class="tutorial-block-right">
        <h2>02. Tekst</h2>
        <ul>
          <strong>Inhoud:</strong>
          <p>Tekst</p>
        </ul>
        <p>In figuur 2.0 staat een normaal tekst element afgebeeld. Wanneer de <strong>checkbox onder "optie: achtergrond"</strong> is aangevinkt, krijgt het element een achtergrondkleur zoals in figuur 2.1</p>
        <p>In figuur 2.2 ziet u de <strong>tekst editor</strong>. Hier wordt alle tekst ingevuld. Rechtsbovenaan ziet u twee tabbladen: 'Visueel' en 'Tekst'. Wanneer u tekst kopieert van een andere plek(bijvoorbeeld een word document), klikt u eerst op het tabblad 'Tekst'. Wanneer u in de tekst editor tekst gaat typen, kan het tabblad 'Visueel' geselecteerd blijven.</p>
        <p><strong>Kopteksten</strong> kunnen gewoon in de tekst editor gemaakt worden. Klik daarvoor op het dropdown menu links van de editor(zie figuur 2.3). In figuur 2.4 ziet u welke koptekst welke stijl heeft.</p>
      </div>
    </div>
    
    <!-- Tutorial Block -->
    <div id="blok-tekst" class="tutorial-block">
      <div class="tutorial-block-left">
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/block-text.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/block-text.png">
        </a>
        <p>Figuur 3.0</p>
      </div>
      <div class="tutorial-block-right">
        <h2>03. Blok (tekst)</h2>
        <ul>
          <strong>Inhoud:</strong>
          <p>Tekst</p>
        </ul>
        <p>Dit element bevat tekst in een vierkant blok. De tekst zelf wordt op dezelfde manier ingevoerd als bij <a href="#tekst">een normaal tekst element.</a></p>
      </div>
    </div>
    
    <!-- Tutorial Block -->
    <div id="blok-afbeelding" class="tutorial-block">
      <div class="tutorial-block-left">
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/block-image.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/block-image.png">
        </a>
        <p>Figuur 4.0</p>
      </div>
      <div class="tutorial-block-right">
        <h2>04. Blok (afbeelding)</h2>
        <ul>
          <strong>Inhoud:</strong>
          <p>Afbeelding</p>
          <p>Titel (optioneel)</p>
        </ul>
        <p>Dit tweede blok element is in eerste instantie bedoeld om samen te werken met het tekst blok element(zie hierboven). Het heeft een achtegrond afbeelding en een simpele titel.</p>
      </div>
    </div>
    
    <!-- Tutorial Block -->
    <div id="afbeeldingen-grid" class="tutorial-block">
      <div class="tutorial-block-left">
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/grid.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/grid.png">
        </a>
        <p>Figuur 5.0</p>
      </div>
      <div class="tutorial-block-right">
        <h2>05. Afbeeldingen grid</h2>
        <ul>
          <strong>Inhoud:</strong>
          <p>Afbeeldingen</p>
        </ul>
        <p>Om afbeeldingen toe te voegen aan een afbeeldingen volgt u deze 3 stappen:</p>
        <ul>
          <li><p>- Klik op "Afbeelding(en) toevoegen"</p></li>
          <li><p>- Selecteer de gewenste afbeeldingen</p></li>
          <li><p>- Klik rechtsonder op "Selecteren"</p></li>
        </ul>
      </div>
    </div>
    
    <!-- Tutorial Block -->
    <div id="formulier" class="tutorial-block">
      <div class="tutorial-block-left">
        <a href="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/form.png" target="_blank">
          <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/tutorial/form.png">
        </a>
        <p>Figuur 6.0</p>
      </div>
      <div class="tutorial-block-right">
        <h2>06. Formulier</h2>
        <ul>
          <strong>Inhoud:</strong>
          <p>Titel</p>
          <p>Beschrijving</p>
          <p>Checkbox</p>
        </ul>
        <p>De inhoud van het formulier wordt ingevuld onder het menu item "contact". Het enige wat op de pagina zelf nog ingevuld moet worden, zijn de titel en een beschrijving. Als laatste moet de checkbox aangevinkt zijn.</p>
      </div>
    </div>
  <?php
}

// Styling this content
add_action('admin_head', 'custom_css_tutorial');

function custom_css_tutorial(){
  echo '<style>
    .tutorial-header{
      width: 50%;
      margin-bottom: 40px;
    }
    
    .tutorial-header a{
      text-decoration: none;
    }
    
    .tutorial-header a:hover,
    .tutorial-header a:focus{
      text-decoration: underline;
    }
    
    .tutorial .tutorial-block{
      width: 100%;
      height: auto;
      padding: 50px 0 40px;
      overflow: hidden;
      
      border-bottom: thin dotted black;
    }
    
    .tutorial .tutorial-block .tutorial-block-left{
      width: 50%;
      float: left;
    }
    
    .tutorial .tutorial-block .tutorial-block-left p{
      margin-bottom: 0;
    }
    
    .tutorial .tutorial-block .tutorial-block-left a{
      display: block
    }
    
    .tutorial .tutorial-block .tutorial-block-left a:nth-of-type(2),
    .tutorial .tutorial-block .tutorial-block-left a:nth-of-type(3),
    .tutorial .tutorial-block .tutorial-block-left a:nth-of-type(4),
    .tutorial .tutorial-block .tutorial-block-left a:nth-of-type(5),
    .tutorial .tutorial-block .tutorial-block-left a:nth-of-type(6){
      margin-top: 40px;
    }
    
    .tutorial .tutorial-block .tutorial-block-left a img{
      max-width: 100%;
      border: 1px solid #ababab;
    }
    
    .tutorial .tutorial-block .tutorial-block-right{
      width: calc(50% - 40px);
      max-width: 500px;
      padding: 0;
      margin-bottom: 40px;
      padding-left: 40px;
      float: left;
    }
    
    .tutorial .tutorial-block .tutorial-block-right ul li{
      margin: 0
    }
    
    .tutorial .tutorial-block .tutorial-block-right ul p{
      margin: 0
    }
  </style>';
}
?>