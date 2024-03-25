<footer id="footer" class=".generic-footer">
    <div class="row-container">
        
        <div class="row">

            <div class="menu-footer">
                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            </div>

            
            <div class="extra-header">
<form class="newsletter">
        <p>La news letter</p>
        <input type="email" name="email" class="email-letter" placeholder="E-mail">
        <input type="submit" class ="subscribe-letter" value="Je m'abonne">
</form>

<div class="recherche">
                <?php get_search_form(); ?>
        </div>

</div>
            
            <div class="copyright">
                <p>&copy; <?php echo date("Y"); ?> DAL FERRO</p>
            </div>

          
        </div> 
    </div>
</footer>

</body>
</html>
