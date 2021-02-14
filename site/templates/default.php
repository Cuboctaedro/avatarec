<?php snippet('header'); ?>

<section class="container pt-16 pb-8">
    <h1 class="text-center font-bold text-xl sm:text-2xl md:text-3xl mb-3 md:mb-6 max-w-2xl mx-auto text-white"><?= $page->title() ?></h1>

    <div class="container mb-3">
        <div class="generated text-sm sm:text-base xl:text-lg text-gray-800">
            <?= $page->text()->kt() ?>
        </div>
    </div>
</section>

<?php snippet('footer'); ?>
