<?php
$angebot = $pages->find('angebot');
$partner = $pages->find('partner');
$karriere = $pages->find('karriere');
?>

<nav class="fixed lg:static w-full bg-gray-200 lg:bg-transparent z-40 inset-x-0 top-0 h-6 lg:h-auto">
    <button class="w-3 h-3 absolute top-2 left-2 text-magenta-500 z-40 lg:hidden" id="burger" aria-expanded="false" aria-controls="menu">
        <span class="visually-hidden">Menu</span>
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="fill-current"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
    </button>
    <ul 
        class="main-menu fixed z-30 left-0 right-0 h-full bg-teal-400 flex flex-col justify-center items-center text-xl
         lg:flex-row lg:text-sm lg:h-12 lg:top:0 <?php if (!$page->isHomePage()) : ?> is-scrolled <?php endif; ?>"
        id="menu"
    >
        <li class="">
            <a 
                class=" flex items-center  justify-center lg:px-2  lg:mx-1 w-32"
                href="<?= $site->url() ?>"
            >
                <img src="<?= asset('assets/images/logo.png')->url() ?>" alt="Avatarec Logo" class="block">
            </a>
        </li>
        
        <?php foreach ($angebot->children() as $child) : ?>
            <li class="menulink lg:px-2 hash-link" data-target="#<?= $child->slug() ?>">
                <a 
                    class=" text-white hover:text-magenta-500 text-center transition-colors duration-200 
                    lg:h-6 flex items-center lg:items-end justify-center lg:uppercase lg:pb-1 lg:hover:text-white"
                    href="<?= $angebot->isActive() ? '#' . $child->slug() : $angebot->url() . '/#' . $child->slug() ?>"
                >
                    <?= $child->title() ?>
                </a>
                
            </li>
        <?php endforeach; ?>
        <li class="menulink lg:px-2 <?php if ($partner->isActive()) : ?> is-current <?php endif; ?>">
            <a 
                class="text-white hover:text-magenta-500 text-center transition-colors duration-200 
                    lg:h-6 flex items-center lg:items-end justify-center lg:uppercase lg:pb-1 lg:hover:text-white"
                href="<?= $partner->url() ?>"
            >
                <?= $partner->title() ?>
            </a>
        </li>
        <li class="menulink lg:px-2 <?php if ($karriere->isActive()) : ?> is-current <?php endif; ?>">
            <a 
                class="text-white hover:text-magenta-500 text-center transition-colors duration-200 
                    lg:h-6 flex items-center lg:items-end justify-center lg:uppercase lg:pb-1 lg:hover:text-white"
                href="<?= $karriere->url() ?>"
            >
                <?= $karriere->title() ?>
            </a>
        </li>

    </ul>
</nav>