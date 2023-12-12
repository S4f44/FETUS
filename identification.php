<<?php get_header(); ?>




<!------------------MAIN----------------->
   <main>
    <section>
        <div class="container text-center">
            <div class="row">
              <div class="col-md-10 offset-md-1 formulaire">
                <form action="/action_page.php">

                    <h1 class="col-md-6 offset-md-3">Identification</h1>

                    <label for="fname" class="col-md-6 offset-md-3">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.."> 
                
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name.."> 
                
                    <label>
                      <input type="radio" name="options" value="femme"> <p>Femme</p>
                    </label>
                    <label>
                      <input type="radio" name="options" value="homme"> <p>Homme</p> 
                    </label>
                    <label>
                      <input type="radio" name="options" value="autre"> <p>Autre</p>
                    </label>


                <label for="email">Enter your email:</label>
                <input type="email" id="email" name="email" placeholder="@gmail.be">

                     <div class="col-md-2 offset-md-5 "><a href="formulaire.html" class="btnprimaire">Suivant</a> </div>

                    </form> 

                      

                </div>
                </div>
            </div>
        </section>
    </main> 
   


<?php get_footer(); ?>