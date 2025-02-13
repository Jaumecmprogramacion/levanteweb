<article class="post-future">
  <h4 class="post-future-title">
  <img src="images/marca.jpeg" alt="Icono" width="20" height="20"> Marca</h4>
    <div class="post-future-main">
    <?php
$rss_feed_url = 'https://e00-marca.uecdn.es/rss/futbol/levante.xml';
$rss = simplexml_load_file($rss_feed_url);

if ($rss !== false) {
    $counter = 0;
    foreach ($rss->channel->item as $item) {
        if ($counter < 3) {
            echo '<div class="post-future">';
            echo '<a class="post-future-figure" href="' . $item->link . '" target="_blank">';

            // Buscar la imagen dentro de media:content o media:thumbnail
            $namespaces = $rss->getNamespaces(true);
            $media = $item->children($namespaces['media']);
            
            if ($media->content) {
                $image_url = (string) $media->content->attributes()->url;
            } elseif ($media->thumbnail) {
                $image_url = (string) $media->thumbnail->attributes()->url;
            } else {
                $image_url = ''; // Imagen de respaldo en caso de que no haya imagen
            }

            if (!empty($image_url)) {
                echo '<img src="' . $image_url . '" alt="Imagen de la noticia" width="368" height="287"/>';
            }

            echo '</a>';
            echo '<h4 class="post-future-title"><a href="' . $item->link . '" target="_blank">' . $item->title . '</a></h4>';
            echo '<hr/>';
            echo '<div class="post-future-text"><p>' . strip_tags($item->description) . '</p></div>';
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