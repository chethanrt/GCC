

<?php
get_header();
?>

<main>
    <section class="pnf-content">
        <div class="pnf-container">
            <div class="pnf-row">
                <div class="pnf-wace">
                    <h1 class="pnf-text-center">Sorry, page not found</h1>
                    <h3 class="pnf-text-center">
                        The page you are searching does not exist or has been moved to some other URL
                    </h3>

                    <div class="pnf-cont-mok">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="bkjl">
                            Go back and start again
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>