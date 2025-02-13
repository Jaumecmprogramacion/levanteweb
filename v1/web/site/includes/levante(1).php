<article class="post-future">
  <h4 class="post-future-title">
  <img src="images/lv.png" alt="Icono" width="20" height="20"> Levante EMV</h4>
    <div class="post-future-main">
      <?php
      $rss_feed_url = 'https://www.levante-emv.com/rss/section/4551';
      $rss = simplexml_load_file($rss_feed_url);
      
      if ($rss !== false) {
          $counter = 0;
          foreach ($rss->channel->item as $item) {
              if ($counter < 3) {
                  echo '<div class="post-future">';
                  echo '<a class="post-future-figure" href="' . $item->link . '" target="_blank">';
                  if (isset($item->enclosure)) {
                      echo '<img src="' . $item->enclosure['url'] . '" alt="Imagen de la noticia" width="368" height="287"/>';
                  }
                  echo '</a>';
                  echo '<h4 class="post-future-title"><a href="' . $item->link . '" target="_blank">' . $item->title . '</a></h4>';
                  echo '<hr/>';
                  echo '<div class="post-future-text"><p>' . $item->description . '</p></div>';
                  echo '<div class="post-future-footer group-flex group-flex-xs">';
                  echo '<a class="button button-gray-outline" href="' . $item->link . '" target="_blank">Leer más</a>';
                  echo '</div>';
                  echo '</div>';
                  $counter++;
              }
          }
      } else {
          echo '<p>Hubo un problema al cargar el RSS.</p>';
      }
      ?>
    </div>
  </article>