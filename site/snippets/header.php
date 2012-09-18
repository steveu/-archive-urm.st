<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title><?php if ($page->title() != '') echo html($page->title()) . ' - ' ?><?php echo html($site->title()) ?></title>

    <meta name="description" content="<?= ($page->description()) ? html($page->description()) : html($site->description()) ?>" />
    <meta name="author" content="<?= $site->author() ?>">

    <!-- I can scale myself -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- STILL Apple, still. -->
    <script type="text/javascript">
        (function(doc) {
            var addEvent = 'addEventListener',
            type = 'gesturestart',
            qsa = 'querySelectorAll',
            scales = [1, 1],
            meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

            function fix() {
                meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
                doc.removeEventListener(type, fix, true);
            }

            if ((meta = meta[meta.length - 1]) && addEvent in doc) {
                fix();
                scales = [.25, 1.6];
                doc[addEvent](type, fix, true);
            }
        }(document));
    </script>

    <!-- look nice in a browser tab -->
    <link rel="icon shortcut" id="favicon" href="/assets/favicons/<?=$page->fragment()?>.png" />

    <!-- When (if) I add IE specific code, this will be useful -->
    <?php echo js('assets/scripts/libs/modernizr.custom.89936.js') ?>

    <!-- Make text pretty -->
    <script type="text/javascript" src="http://use.typekit.com/mqf3dsx.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
    <!-- CSS compressed SASS - source at https://github.com/steveu/urm.st/tree/master/sass -->
    <?php echo css('assets/styles/screen.css') ?>

</head>

<body class="paused">

    <div class="container">

        <header id="top">
            <div class="wrapper">

                <h1>
                    <a href="/"<?php if ($page->uri == 'home') echo ' class="active"'; ?> title="Home">
                        Steven Urmston
                        <em>Freelance Web &amp; <abbr title="User Interface">UI</abbr> Designer</em>
                    </a>
                </h1>
            
                <nav class="main fadeInDown">
                    <ul>
                    <?php foreach($pages->visible() AS $p): ?>
                    <li class="<?php echo $p->fragment() ?>">
                        <a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>" title="<?php echo $p->title() ?>">
                            <span aria-hidden="true" data-icon="&<?= html($p->icon()) ?>;"></span>
                            <?= html($p->title()) ?>
                        </a>
                    </li>
                    <?php endforeach ?>
                    </ul>
                </nav>

            </div>
        </header>

        <div id="page">