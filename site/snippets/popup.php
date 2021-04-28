<div class="rounded-full w-36 h-36 border-gray-800 border overflow-hidden relative popup glow">
    <button 
        type="button"
        class="absolute inset-0 flex items-center justify-center z-20 w-full
        bg-transparent text-white font-bold uppercase text-center text-xl popup-open"
        aria-controls="<?= $popup_id ?>"
        title="Kontakt Info"
    >
        <?= $popup_label ?>
    </button>
    <!-- <div class="absolute inset-0 bg-photoblue opacity-40 z-10"></div> -->
    <img src="<?= $popup_img_src ?>" class="w-36 h-36 object-cover" alt="<?= $popup_img_alt ?>" />
    <div class="fixed inset-0 z-50 hidden" style="background-color:rgba(0,0,0,.5);" id="<?= $popup_id ?>" aria-labelledby="<?= $popup_id ?>-title">
        <div class="fixed overflow-y-scroll w-32 h-48 transform -translate-x-16 -translate-y-24 sm:w-48 sm:-translate-x-24 p-4 top-1/2 left-1/2 flex flex-col items-center justify-center
        bg-white text-center sm:text-base text-gray-300 shadow-2xl">
            <button type="button" title="close" class="absolute top-1 right-1 w-3 h-3 popup-close" aria-controls="<?= $popup_id ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M19 6.4L17.6 5 12 10.6 6.4 5 5 6.4l5.6 5.6L5 17.6 6.4 19l5.6-5.6 5.6 5.6 1.4-1.4-5.6-5.6z"/>
                  </svg>
            </button>
            <div class="h-full">
                <h2 class="text-teal-400 font-bold mb-3" id="<?= $popup_id ?>-title"><?= $popup_title ?></h2>
                <div>
                <?= $popup_content ?>
                </div>
            </div>
        </div>
    </div>
</div>