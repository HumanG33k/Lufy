<div class="box">
    <div class="title">Galeries photos, vid&eacute;os et autres</div>
    <div class="content">
        Bienvenue dans la galerie des GA pass&eacute;es ...<br/>
        Vous trouverez ici les derniers vestiges d'artefacts num&eacute;riques repr&eacute;sentants un pass&eacute; glorieux ! (ou pas)<br/>
        Fait de pixels, de frags, de teamplay, et d'apm mais aussi de passion, de tension et de d&eacute;termination et surtout de joie et de bonne humeur.<br/>
    </div>
</div>
<div class="box" style="float: left; width: 460px;">
    <div class="title">Photos</div>
    <div class="content">
        <?php foreach ($gallerys as $gallery): ?>
            <ul class="gallery-box">
                <li class="gallery-title"><?php echo link_to($gallery->getTitle(), 'gallery/view?slug='.$gallery->getSlug()) ?></li>
                <li class="gallery-content"><?php echo $gallery->getDescription() ?></li>
            </ul>
        <?php endforeach; ?>
        <ul style="clear: left;"></ul>
    </div>
</div>
<div class="box" style="float: left; width: 230px;">
    <div class="title">Vid&eacute;os</div>
    <div class="content">
        <?php include_component('file', 'videos') ?>
    </div>
</div>
<div class="box" style="float: left; width: 220px;">
    <div class="title">Wallpapers</div>
    <div class="content"><i>&agrave; venir</i></div>
</div>
<div class="box" style="float: left; width: 220px;">
    <div class="title">Replays</div>
    <div class="content"><i>&agrave; venir</i></div>
</div>
<div class="box" style="float: left; width: 220px;">
    <div class="title">Fuuu</div>
    <div class="content"><i>&agrave; venir</i></div>
</div>
