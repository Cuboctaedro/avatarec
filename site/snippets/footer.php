        </main>
        <footer class="flex-none">
            <aside class="container py-6 lg:py-12">

                <h2 class="text-center font-bold text-xl sm:text-2xl md:text-3xl mb-3 md:mb-6 max-w-2xl mx-auto">
                    <span class="text-teal-600 block"><?= $site->footer_heading() ?></span>
                    <span class="text-white block"><?= $site->footer_subheading() ?></span>
                </h2>
                <div class="text-center text-base xl:text-lg">
                    <h3 class="font-bold text-teal-500"><?= $site->footer_company() ?></h3>
                    <div class="mb-3 text-white"><?= $site->footer_address()->kt() ?></div>
                    <div class="mb-3 text-white">
                        <p>
                            Tel: <?= $site->footer_phone() ?>
                        </p>
                        <p>
                            Fax: <?= $site->footer_fax() ?>
                        </p>
                    </div>
                    <div class="mb-3 text-white">
                        E-mail: <a href="mailto:<?= $site->footer_email() ?>"><?= $site->footer_email() ?></a>
                    </div>
                </div>
            </aside>
            <?php snippet('footermenu'); ?>
        </footer>
    </div>
</body>

</html>
