<? use_helper('Date') ?>
<div class="box">
    <div class="title"><?=__('Fiche joueur')?></div>
    <div class="content">
    <h4><?=image_tag('/css/img/flag/'.$user->getCountry().'.png')?> <?= $user->getFirstName() ?> "<?= $user->getUsername() ?>" <?=substr($user->getLastName(), 0, 1);?>.</h4>
    <table class="profil1">
        <tr>
            <td align="center" valign="top" rowspan="6" width="160">
                <? if ($user->getLogourl()) { echo '<img src="'.$user->getLogourl().'" width="150">'; } else { echo image_tag('/uploads/profils/no-profil.png', array('width' => '150')); }?>
            </td>
            <td><?=__('Inscrit le')?></td>
            <td>
                <?= format_date($user->getCreatedAt(), 'dd/MM/yyyy')?>
            </td>
        </tr>
        <tr>
            <td><?=__('Equipe')?></td>
            <td><?php
                $teamPlayers = $user->getTeamPlayer();
                foreach ($teamPlayers as $teamPlayer): ?>
                    <a href="<?= url_for('team/view?slug=' . $teamPlayer->Team->slug) ?>"><?= $teamPlayer->Team->name ?></a>
                <?php endforeach;
                ?></td>
        </tr>
        <tr>
                <td><?=__('Ville')?></td>
                <td><?= $user->getCity() ?></td>
        </tr>
        <tr>
                <td><?=__('Site web')?></td>
                <td><a href="<?= $user->getWebsite() ?>"><?= $user->getWebsite() ?></a></td>
        </tr>
        <tr>
                <td><?=__('Carriere')?></td>
                <td><?= $user->getCarrer() ?></td>
        </tr>
    </table>
    <br/>
    <?if ($inviteteam == '1'): ?>
        <?=link_to(__('Inviter le joueur &agrave; rejoindre mon equipe'),'invite/addPlayer?username='.$user->getUsername(), array('class' => 'button'))?><br/>
    <? else: ?>
        <div class="flashbox info">
            <?=__('Pour inviter ce joueur a rejoindre votre equipe vous devez etre gerant. Vous ne pouvez pas inviter un joueur si celui ci appartient deja a une autre equipe.')?>
        </div>
    <?endif; ?>
    <? /* if ($invitefriend == '1'): ?>
    <?=link_to('Inviter le joueur &agrave; etre mon ami','invite/addFriend?username='.$user->getUsername())?>
    <?endif; */ ?>
    </div>
</div>