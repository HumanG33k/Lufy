<? foreach ($videos as $gallery): ?>
   <ul class="gallery-box">
       <li class="gallery-title"><?=link_to($gallery->getName(), 'file/view?slug='.$gallery->getSlug()) ?></li>
       <li class="gallery-content"><?php echo $gallery->getDescription() ?>&nbsp;</li>
   </ul>
<? endforeach; ?>

<ul style="clear: left;"></ul>