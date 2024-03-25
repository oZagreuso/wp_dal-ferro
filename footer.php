<footer id="footer" class=".generic-footer">
    <div class="row-container">
        
        <div class="row">

            <div class="menu-footer">
                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            </div>

            
            <div class="newsletter">
                <?php get_template_part( 'newsletter' ); ?>
            </div>
            
            <div class="copyright">
                <p>&copy; <?php echo date("Y"); ?> DAL FERRO</p>
            </div>

          
        </div> 
    </div>
</footer>

</body>
</html>
