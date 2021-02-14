<nav>
    <ul class="w-full sm:h-6 py-2 flex flex-col sm:flex-row sm:flex-wrap items-center bg-magenta-400 justify-around">
        <?php foreach ($site->footer_menu()->toPages() as $footerpage) : ?>
        <li >
            <a class="px-2 py-1 text-white uppercase text-sm" href="<?= $footerpage->url() ?>">
            <?= $footerpage->title() ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>