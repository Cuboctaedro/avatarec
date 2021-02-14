<?php snippet('header'); ?>
<section class="container mb-6 mt-16">
    <h1 class="text-center font-bold text-xl sm:text-2xl md:text-3xl mb-3 md:mb-6 max-w-2xl mx-auto text-white"><?= $page->title() ?></h1>

    <div class="lg:flex flex-row items-start">
        <div class="mb-6 flex flex-col justify-center items-center">
            <div class="rounded-full w-36 h-36 border-gray-800 border overflow-hidden relative">
                <div class="absolute inset-0 bg-teal-400 opacity-50"></div>
                <img src="<?= asset('assets/images/haus-avatarec.jpg')->url() ?>" class="w-36 h-36" alt="Das Geschäftshaus in Hamm" />
            </div> 
            <p class="pt-3 text-base text-center">Das Geschäftshaus in Hamm</p>
        </div>
        <div class="text-sm sm:text-base xl:text-lg px-4">

            <h2 class="text-teal-400 font-bold mb-3"><?= $page->company_name() ?></h2>
            <div class="mb-3 "><?= $page->address()->kt() ?></div>
            <div class="mb-3">
                <p>
                    Tel: <?= $page->phone() ?>
                </p>
                <p>
                    Fax: <?= $page->fax() ?>
                </p>
            </div>
            <div class="mb-3">
                E-mail: <a href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a>
            </div>
            <div class="mb-3">
                www: <?= $page->website() ?>
            </div>
            <div class="mb-3">
                <span class="text-teal-400">Geschäftsführer:</span> <?= $page->boss() ?>
            </div>
            <div class="mb-3">
                <p>
                    <span class="text-teal-400">Handelsregister:</span> <?= $page->register() ?>
                </p>
                <p>
                    <span class="text-teal-400">HRB:</span> <?= $page->hrb() ?>
                </p>
                <p>
                    <span class="text-teal-400">Sitz des Unternehmens:</span> <?= $page->sitz() ?>
                </p>
                <p>
                    <span class="text-teal-400">Ust.Id Nr:</span> <?= $page->ust() ?>
                </p>
            </div>

        </div>
    </div>
</section>

<?php snippet('footer'); ?>
