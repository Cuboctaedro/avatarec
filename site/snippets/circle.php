<div class="rounded-full w-36 h-36 border-gray-800 border overflow-hidden relative my-3 lg:m-6 glow">
    <a 
        href="<?= $circle_url ?>"
        class="absolute inset-0 flex items-center justify-center z-20 w-full
        bg-transparent text-white font-bold uppercase text-center text-xl "
    >
    <?= $circle_title ?>
    </a>
    <div class="absolute inset-0 bg-photoblue opacity-40 z-10"></div>
    <img src="<?= $circle_img ?>" class="w-36 h-36 object-cover" alt="<?= $circle_title ?>" />
</div>
