<footer class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                 <small>
        &copy; <?php the_author(); ?>
        <?php date('Y'); ?>
    </small>
            </div>
           
    <div class="col-md-4">
        <?php dynamic_sidebar( 'onder' ) ?>
    </div>
        </div>
    
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>