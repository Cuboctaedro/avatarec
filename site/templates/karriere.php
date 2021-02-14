<?php snippet('header'); ?>

<section>
    <?php snippet('blocks', ['blockfield' => $page->contentblocks()]); ?>

    <div class="flex flex-col md:flex-row items-stretch py-4 text-center container ">

        <div class="flex flex-col items-center justify-center bg-teal-400 text-white w-full md:w-2/5 py-4">
            <?= $page->address()->kt() ?>
        </div>
        <div class="flex flex-col items-center justify-center md:w-1/5 h-10 md:h-auto sm:text-lg">
            oder
        </div>
        <div class="flex flex-col items-center justify-center bg-teal-400 text-white w-full md:w-2/5 py-4">
            <p class="mb-2 sm:text-lg">per email an:</p>
            <p class="font-bold sm:text-lg">
                <a href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a>
            </p>
        </div>

    </div>
</section>

<?php snippet('footer'); ?>
