<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
        $title = CFS()->get( 'title' );
        $imgsrc = CFS()->get( 'img' );
        $text = CFS()->get( 'about_text' );

		
    }
}
?>
<div class="about">
            <div class="aboutContainer">
                <div class="imageLogo">
                    <img src="<?php echo $imgsrc; ?>" class="logo">
                </div>
                <div class="aboutContent">
                    <h1 class="aboutText"><?php echo $title; ?></h1>  
                    <h2 class="aboutTextContent"><?php echo $text; ?></h2>  
                </div>

            </div>

        </div>

        <div class="full-screen-container">
            <form action = "signUpReceive.php" method = "POST">
                <fieldset>
                    <legend>Contact Us</legend>
                    <label for="fnamn">First Name:</label>
                    <input placeholder="John" type = "text" id= "fnamn" name="fnamn"><br><br>
                    <label for="enamn">Surname:</label>
                    <input placeholder="Doe" type = "text" id= "enamn" name="enamn"><br><br>
                    <label for="email">Email:</label>
                    <input placeholder="Youremail@email.com" type = "text" id= "email" name="email"><br><br>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </form>
        </div>
    </div>

 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>
</html>

