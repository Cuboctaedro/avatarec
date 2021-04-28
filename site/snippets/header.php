<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php if ($page->isHomePage()) : ?>
        <title><?= $site->title() ?></title>
    <?php else: ?>
        <title><?= $page->title() ?> | <?= $site->title() ?></title>
    <?php endif; ?>
    
    <meta name="description" content="">

    <?= css('assets/app.css') ?>
    <?= js('assets/app.js', ['defer' => true]) ?>

</head>

<body class="font-sans text-sm sm:text-md text-gray-700 bg-gray-200 relative <?= $page->slug() ?> w-full min-h-screen" >
    <div 
        class="bg-right-bottom bg-no-repeat opacity-30 absolute inset-0 z-0" 
        style="background-image:url('<?= asset('assets/images/avatarec-background.jpg')->url() ?>');"
    ></div>
    <div class="relative z-10 flex flex-col min-h-screen">
    
    <?php if ($page->isHomePage()) : ?>
        <header class="w-full h-0  relative border-t-8 border-b-8 border-magenta-400 hero flex-none">
            <div class="flex flex-col items-center justify-center absolute inset-0" style="text-shadow: 0 0 12px rgba(0,0,0,.45);">
                <div class="relative z-10 max-w-30 {% if (record.slug == 'startseite') %} md:max-w-48 lg:max-w-64  {% else %} md:max-w-36 lg:max-w-48  {% endif %}">
                    <img src="<?= asset('assets/images/logo.png')->url() ?>" alt="Avatarec Logo">
                </div>
                <div class="background absolute inset-0 z-0">
                    <?php if ($site->hero_image()->is_not_empty()) : ?>
                        <?php $homeimage = $site->hero_image()->toFile(); ?>
                        <img src="<?= $homeimage->url() ?>" alt="" class="object-cover object-center w-full h-full relative z-0">
                    <?php else : ?>
                        <img src="<?= asset('assets/images/hero.jpg')->url() ?>" alt="" class="object-cover object-center w-full h-full relative z-0">
                    <?php endif; ?>
                </div>
                <h1 class="relative z-10 text-lg sm:text-xl md:text-4xl lg:text-5xl xl:text-6xl text-gray-1000 font-bold mt-1 sm:mt-2 md:mt-3 lg:mt-4">
                Alles im (Daten)Fluss
                </h1>
                <h2 class="relative z-10 text-lg sm:text-xl md:text-3xl lg:text-4xl xl:text-5xl text-gray-1000 font-light mt-1 sm:mt-2">
                Von der Quelle bis zur Mündung
                </h2>
            </div>
            <?php snippet('menu'); ?>
        </header>
        
    <?php endif; ?>
    
    <?php snippet('menu-inner'); ?>
        <main class="flex-1" id="main">
