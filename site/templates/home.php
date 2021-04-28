<?php snippet('header'); ?>

<section class="pt-4">
    <?php snippet('blocks', ['blockfield' => $page->contentblocks_one()]); ?>
</section>

<section>
    <?php snippet('uber-uns'); ?>
</section>

<section>
    <?php snippet('blocks', ['blockfield' => $page->contentblocks_two()]); ?>
</section>

<section class="py-8 container bg-no-repeat circles-container" >
    <h2 class="font-bold text-xl sm:text-2xl md:text-3xl text-teal-500 text-center">Unser Angebot:</h2>
    <div class="flex flex-col lg:flex-row flex-wrap items-center justify-center relative circles" >

        <?php
        $angebot = $pages->find('angebot');
        foreach ($angebot->children() as $child) {
            $image = $child->homepage_image()->exists() ? $child->homepage_image()->toFile()->thumb([
                'width'   => 300,
                'height'  => 300,
                'quality' => 80,
                'crop' => true
            ]) : '';
            snippet('circle', [
                'circle_url' => $angebot->url() . '#' . $child->slug(),
                'circle_title' => $child->title(),
                'circle_img' => $image !== '' ? $image->url() : '',
            ]);
        }
        ?>
    </div>
</section>

<?php snippet('footer'); ?>
