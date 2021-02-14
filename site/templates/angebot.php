<?php snippet('header'); ?>

    <?php foreach ($page->children() as $child) : ?>

    <section class="my-3" id="<?= $child->slug() ?>">
        <?php if ($child->section_image()->exists() && $child->section_image()->isNotEmpty()) : ?>
            <div class="relative w-full h-0 overflow-hidden my-6" style="padding-bottom:30%;">
                <div class="absolute inset-0">
                    <img src="<?= $child->section_image()->toFile()->url() ?>" alt="<?= $child->title() ?>" class="object-cover object-center w-full h-full">
                </div>
            </div>
        <?php endif; ?>
        <?php snippet('blocks', ['blockfield' => $child->contentblocks()]); ?>
    </section>

    <?php endforeach; ?>

<?php snippet('footer'); ?>
