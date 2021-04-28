<header class="container text-center mb-2 mt-4">
    <h2 class="font-bold text-xl sm:text-2xl md:text-3xl text-teal-500">Über uns:</h2>
</header>

<div class="flex flex-col xl:flex-row items-center xl:items-start justify-center relative">

    <div class="hidden xl:block absolute top-1/2 left-1/4 right-1/3 glow-line" style="width: 50%!important;"></div>

    <div class="xl:pr-8 xl:pt-6">
        <?php
        $kontakt = $pages->find('kontakt');
        
        ob_start();
        ?>
        <div class="mb-3"><?= $kontakt->address()->kt() ?></div>
        <div class="mb-3">
            <p>
                Tel: <?= $kontakt->phone() ?>
            </p>
            <p>
                Fax: <?= $kontakt->fax() ?>
            </p>
        </div>
        <div class="mb-3">
            E-mail: <?= $kontakt->email() ?>
        </div>
        <?php
        $kontakt_content = ob_get_clean();

        snippet('popup', [
            'popup_id' => 'contact-popup',
            'popup_label' => 'Standort <br />Kontakt',
            'popup_title' => $kontakt->company_name(),
            'popup_img_src' => asset('assets/images/haus-avatarec-blau.jpg')->url(),
            'popup_img_alt' => 'Das Geschäftshaus in Hamm',
            'popup_content' => $kontakt_content
        ]);
        ?>
    </div>    

    <section class="pt-6 lg:pb-6 xl:pl-8 xl:relative">
        <h2 class="pb-3 text-center text-base font-bold xl:absolute -left-3 bottom-3 xl:text-left">Geschäftsführer:</h2>
        <div class="lg:flex items-center justify-center">
            
            <?php
            $people = $page->children();
            foreach ($people as $person) : ?>
            <div class="pb-6 lg:pb-0 lg:pr-4">
                <?php snippet('popup', [
                    'popup_id' => $person->slug(),
                    'popup_label' => '',
                    'popup_title' => $person->title(),
                    'popup_img_src' => $person->portrait()->toFile()->url(),
                    'popup_img_alt' => $person->title(),
                    'popup_content' => $person->bio()->kt()
                ]);?>
                <h3 class="pt-3 text-center text-base"><?= $person->title() ?></h3>
            </div>
            <?php endforeach; ?>
        
        </div>
        
    
    </section>
</div>
<div class="container">
    <div class="divider my-4"></div>
</div>