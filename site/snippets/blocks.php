<?php foreach ($blockfield->toBuilderBlocks() as $block) : ?>

    <?php if ($block->_key()->value() === 'heading') : ?>

        <h2 class="container text-center mb-3 font-bold text-xl sm:text-2xl md:text-3xl text-teal-500"><?= $block->text() ?></h2>
    
    <?php elseif ($block->_key()->value() === 'subheading') : ?>
        
        <h3 class="container text-center mb-3 font-bold text-base sm:text-lg md:text-xl text-teal-500"><?= $block->text() ?></h3>

    <?php elseif ($block->_key()->value() === 'image') : ?>

        <?php $image = $block->image()->toFile(); ?>
        <div class="relative w-full h-0 overflow-hidden mb-6" style="padding-bottom:30%;">
            <div class="absolute inset-0">
                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" class="object-cover object-center w-full h-full">
            </div>
        </div>

    <?php elseif ($block->_key()->value() === 'text') : ?>

        <div class="container mb-3">
            <div class="generated text-sm sm:text-base xl:text-lg text-gray-800">
                <?= $block->text()->kt() ?>
            </div>
        </div>

    <?php elseif ($block->_key()->value() === 'ruler') : ?>

        <div class="container my-4">
            <hr class="divider "/>
        </div>

    <?php elseif ($block->_key()->value() === 'small_image') : ?>
        <?php $image = $block->image()->toFile(); ?>
        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" class="block mx-auto my-4 w-40 h-auto">

    <?php elseif ($block->_key()->value() === 'logolinks') : ?>

        <div class="container mb-3 flex items-center justify-center">

            <?php foreach ($block->linkslist()->toStructure() as $item) : ?>
                <?php $logo = $item->logo()->toFile(); ?>
                <div class="w-20 h-16 px-2">
                    <a href="<?= $item->link() ?>" target="_blank" class="flex w-full h-full items-center justify-center">
                        <img src="<?= $logo->thumb([
                            'height' => 128,
                            'width'  => 128,
                        ])->url() ?>" />
                    </a>
                </div>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

<?php endforeach; ?>
