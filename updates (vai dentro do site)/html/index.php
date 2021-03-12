<?php
require_once('config/config.php');
?>
<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $launcher["config"]["nome"] ?></title>
    <!--Meu Style-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background: #222 url(<?= $launcher['config']['background'] ?>) no-repeat top left fixed;">

<div class="box_logo">
<img src="<?= $launcher['config']['logo'] ?>" width="273" height="117">
</div>


<div class="box_info">
    <div class="box_info_nome">
        <a><?php echo $launcher["config"]["nome"] ?></a>
    </div>

    <div class="box_info_conteudo">
        <div class="paragrafo_box_conteudo">
            <div class="div_margin">
            <?= $news['ultima_news'] ?>
            </div>
        </div>
    </div>
</div>


<div class="box_evento">
    <div class="box_evento_nome">
        <a><?php echo $launcher["config"]["nome_evento"]; ?></a>
    </div>

    <div class="box_evento_conteudo tooltip">
        <img class="evento_conteudo" name="adBanner" src="<?= $boss['boss_atual']['local_gif'] ?>" width="64" height="64">
    </div>
</div>

<div class="box_top">
    <div class="box_top_nome">
        <a><?php echo $launcher["config"]["nome_top"]; ?></a>
    </div>
    <div class="box_top_conteudo">
        <div class="top_conteudo_gif" >
            <div class="outift_conteudo" style="background-image:url(<?= $top_level['outfit_player'] ?>);"></div>
        </div>
        <div class="top_conteudo">
            <a><?= $top_level['nome_player'] ?></a>
        </div>
        <div class="level_top">
            Level: <?= $top_level['level_player'] ?>
        </div>

    </div>
</div>

<div class="box_online">
    <div class="box_conteudo">
        <a><?= $status['onlines'] ?></a>
    </div>
</div>

<div class="box_status">
    <div class="box_conteudo_status">
        <?= $status['status_servidor'] ?>
    </div>
</div>

<div class="box_evento_boss_atual tooltip" style="position: absolute;left: 587px;top: 386px;">
    <img src="assets/info.gif">
    <span class="tooltiptext">Ultimo Boss <br> <?= $boss['boss_atual']['nome'] ?><br>as: <?= $boss['boss_atual']['horario'] ?> <br> No:<?= $boss['boss_atual']['dia'] ?> </span>
</div>

<div class="box_evento_boss_atual tooltip" style="position: absolute;top: 386px;left: 651px;">
    <img src="assets/proximo.gif">
    <span class="tooltiptext">Proximo Boss <br> <?= $boss['proximo_boss']['nome'] ?><br>as: <?= $boss['proximo_boss']['horario'] ?> <br> No:<?= $boss['boss_atual']['dia'] ?> </span>
</div>

</body>
</html>
