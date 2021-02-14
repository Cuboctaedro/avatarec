<?php snippet('header'); ?>

<section>
    <?php snippet('blocks', ['blockfield' => $page->contentblocks()]); ?>
</section>

<section class="flex flex-row flex-wrap items-center justify-between py-6 container">
    <?php foreach ($page->partnerlist()->toStructure() as $partner) : ?>
    <div class="w-24 h-24 px-2 pb-4">
        <a class="w-20 h-20 flex items-center justify-center bg-white glow" href="<?= $partner->link() ?>" title="<?= $partner->name() ?>" target="_blank">
            <img src="<?= $partner->logo()->toFile()->url() ?>" alt="<?= $partner->name() ?>" class="object-contain object-center w-full h-auto" />
        </a>
    </div>
    <?php endforeach; ?>
</section>


<?php snippet('footer'); ?>
