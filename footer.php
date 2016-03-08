 <footer>
            <section id="ft_widgets">
               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
               
            </section>
            <p id="copyright">My blog copyrigth @ 2015</p>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
