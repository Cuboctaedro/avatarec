<?php
$angebot = $pages->find('angebot');
$partner = $pages->find('partner');
$karriere = $pages->find('karriere');
?>

<nav class="hidden lg:block">
    <ul 
        class=" fixed z-30 left-0 right-0 h-full bg-teal-400 flex flex-col justify-center items-center text-xl
        lg:relative lg:-top-6 lg:bg-transparent lg:flex-row lg:text-sm lg:border-b-8 border-magenta-400"
    >
        <?php if ($page->isHomePage()): ?>
            <li class="">
                <a 
                    class="text-white hover:text-magenta-500 text-center transition-colors duration-200 
                 lg:bg-magenta-400 lg:h-6 flex items-center justify-center lg:px-2  lg:mx-1 lg:uppercase lg:hover:text-white lg:hover:bg-magenta-400"
                    href="<?= $page->url() ?>"
                >
                    Avatarec
                </a>
            </li>

        <?php else : ?>
            <li class="">
                <a 
                    class=" flex items-center justify-center lg:px-2  lg:mx-1 "
                    href="<?= $page->url() ?>"
                >
                    Avatarec Logo
                </a>
            </li>
        <?php endif; ?>
        
        <?php foreach ($angebot->children() as $child) : ?>
            <li class="">
                <a 
                    class="text-white hover:text-magenta-500 text-center transition-colors duration-200 
                    <?php if ($angebot->isActive()) : ?> lg:bg-magenta-400 <?php else : ?> lg:bg-teal-600 <?php endif; ?>
                    lg:h-6 flex items-center justify-center lg:px-2  lg:mx-1 lg:uppercase lg:hover:text-white lg:hover:bg-magenta-400"
                    href="<?= $angebot->isActive() ? '#' . $child->slug() : $angebot->url() . '#' . $child->slug() ?>"
                >
                    <?= $child->title() ?>
                </a>
            </li>
        <?php endforeach; ?>
        <li class="">
            <a 
                class="text-white hover:text-magenta-500 text-center transition-colors duration-200 
                <?php if ($partner->isActive()) : ?> lg:bg-magenta-400 <?php else : ?> lg:bg-teal-600 <?php endif; ?>
                lg:h-6 flex items-center justify-center lg:px-2  lg:mx-1 lg:uppercase lg:hover:text-white lg:hover:bg-magenta-400"
                href="<?= $partner->url() ?>"
            >
                <?= $partner->title() ?>
            </a>
        </li>
        <li class="">
            <a 
                class="text-white hover:text-magenta-500 text-center transition-colors duration-200 
                <?php if ($karriere->isActive()) : ?> lg:bg-magenta-400 <?php else : ?> lg:bg-teal-600 <?php endif; ?>
                lg:h-6 flex items-center justify-center lg:px-2  lg:mx-1 lg:uppercase lg:hover:text-white lg:hover:bg-magenta-400"
                href="<?= $karriere->url() ?>"
            >
                <?= $karriere->title() ?>
            </a>
        </li>

    </ul>
</nav>