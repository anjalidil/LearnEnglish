<?php
    include('sessionConfig.php');
    if(!isset($_SESSION['login_user'])){
    header("location:login.php"); // Redirecting To Home Page
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn English</title>
    <link rel = "stylesheet" type = "text/css" href = "homeEnglish.css"/>
    <script type="text/javascript" src="javascript.js"> </script>
</head>
<body>

    <div class ="pagetitle"> 
            <nav>
               <a href="englishIndex.php"> <h1>LEARN ENGLISH</h1></a>    
                <ul>
                    <li><a href="#parts">Parts of Speech</a></li>
                    <li><a href="tenses.php">English Tenses </a></li> 
                    <li><a href="login.php">Login </a></li>   
                    <li><a href="#" onclick="timeStamp()">profile </a></li> 
                </ul>
             </nav>   
    </div>

    <div class="containerr">
        <span class="text1">Welcome </span>
        <span class="text2"> Learn English.com</span>
        <h1>Learn English grammar and usage easily.</h1>
      </div>

      <center><div class="slidershow"><img src="images/girl.jpg" class="x" > </div></center>
      <center><div id="slider">
		<figure>
			<img src="images/s1.jpg">
			<img src="images/s2.jpeg">
			<img src="images/s3.jpg">
			<img src="images/s4.jpg">
		</figure>
		</div></center>

        <div class="container" id="parts">
            <span class="textcontainer">Parts of a Speech</span>
          
          </div>
       <br>

       <!--buttons form-->
       <form class="box1">
        <table align="center">
            <tr>
                <td width="350">
                   <a href="#noun"> <input type="button"  value="NOUNS"></a>
                </td>
                <td width="350">
                    <a href="#pronoun"><input type="button"  value="PRONOUNS"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#verb"> <input type="button"  value="VERBS"></a>
                </td>
                <td>
                    <a href="#adjective"><input type="button"  value="ADJECTIVES"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#adverb"><input type="button"  value="ADVERBS"></a>
                </td>
                <td>
                    <a href="#preposition"> <input type="button"  value="PREPOSITIONS"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#conjunction"> <input type="button"  value="CONJUNCTIONS"></a>
                </td>
                <td>
                    <a href="#interjection"> <input type="button"  value="INTERJECTIONS"></a>
                </td>
            </tr>
        </table>
    </form>

        <!--nouns-->
        <div id="noun" class="noun-box">
            <div class="title-box">
               <h1>1. NOUNS</h1>              
           </div>
           <div class="info-box">
               <p> <b>A noun is a word that identifies a person, place or thing.</b> </p>
               <br>
               Examples: <p style="color: blue;">Man, Woman, Teacher, John, Home, Office, Town, Countryside, America, Cat, Dog</p></p>
               <br><h3 align="center">The  <span style="color: rgb(233, 165, 20);"><u>sun </u></span> shines. <br> <span style="color: rgb(233, 165, 20);"><u> Anna</u></span> goes to <span style="color: rgb(233, 165, 20);"><u>school</u></span> .</h3>
           </div>
        </div>

       <!--pronouns-->
       <div id="pronoun" class="pronoun-box">
           <div class="title-box">
              <h1>2. PRONOUNS</h1>               
          </div>
          <div class="info-box">
              <p> <b> A pronoun is a word that takes the place of a noun.</b></p>
              <br>
              <p>Examples: <p style="color: blue;">He, She, It, They, Someone, Who.</p></p>
              <br><h3 align="center">John is hungry. <span style="color: rgb(51, 172, 51);"><u> He</u></span> wants to eat.</h3>
          </div>
       </div>

       <!--verbs-->
       <div id="verb" class="verb-box">
           <div class="title-box">
              <h1>3. VERBS</h1>               
          </div>
          <div class="info-box">
              <p><b>A verb is a kind of word that tells about an action or a state.</b> </p>
              <br>
              <p>Examples: <p style="color: blue;">Run, Cut, Laughed, Go, Have, Invite, Singing, Playing</p>
              <br><h3 align="center">The dog and cat <span style="color: rgb(172, 51, 146);"><u> are running</u></span> </h3>
          </div>
       </div>

       <!--adjectives-->
       <div id="adjective" class="adjective-box">
           <div class="title-box">
              <h1>4. ADJECTIVES</h1>                
          </div>
          <div class="info-box">
              <p> <b>An adjective describes or modifies a noun.</b> </p>
              <br>
              <p>Examples: <p style="color: blue;" >Angry, Brave, Healthy, Little, Old, Red, Smart, Big</p></p>
              <br><h3 align="center"><span style="color: rgb(231, 20, 13);"><u>Brown</u></span> Dog,<span style="color: rgb(231, 20, 13);"><u> Fat</u></span> Cat,<span style="color: rgb(231, 20, 13);"><u> Big</u></span> Garden </h3>
          </div>
       </div>

       <!--adverbs-->
       <div id="adverb" class="adverbs-box">
           <div class="title-box">
              <h1>5. ADVERBS</h1>                
          </div>
          <div class="info-box">
              <p><b>An adverb is a word that describes a verb, an adjective , another adverb, or even a whole sentence.</b></p>
              <br>
              <p>Examples: <p style="color: blue;">Badly, Fully, Hardly, Nearly, Never, Almost, Silently</p></p>
              <br><h3 align="center">Runs <span style="color: rgb(10, 121, 136);"><u> quickly.</u></span> Eats <span style="color: rgb(10, 121, 136);"><u> very</u><u> slowly</u></span>.</h3>
          </div>
       </div>

        <!--Prepositions-->
        <div id="preposition" class="prepositions-box">
            <div class="title-box">
               <h1>6. PREPOSITIONS</h1>                 
           </div>
           <div class="info-box">
               <p><b>A preposition is a word or phrase that connects a noun or pronoun to a verb or adjective in a sentence.<br>
                They show relationship between words in a sentence.</b></p>
               <br>
               <p>Examples: <p style="color: blue;">To, Above, On, Since, Of, Between, Upon, With</p></p>
               <br><h3 align="center">I am going <span style="color: rgba(40, 202, 49, 0.781);"><u>to</u></span> my garden. </h3>
           </div>
        </div>

        <!--conjunctions-->
        <div id="conjunction" class="conjunctions-box">
            <div class="title-box">
               <h1>7. CONJUNCTIONS</h1>              
           </div>
           <div class="info-box">
               <p><b>A conjunction is the joining together of elements and it is a word that connects sentences, phrases or clauses.</b></p>
               <br>
               <p>Examples: <p style="color: blue;">And, Or, But, So, Unless, Either, Because</p></p>
               <br><h3 align="center">I was tired <span style="color: rgba(107, 52, 211, 0.795);"><u>so,</u></span> i went to sleep. </h3>
           </div>
        </div>

        <!--interjections-->
        <div id="interjection" class="interjections-box">
            <div class="title-box">
               <h1>8. INTERJECTIONS</h1>               
           </div>
           <div class="info-box">
               <p><b>An interjection is a part of speech that demonstrates the emotion or feeling of the author.</b></p>
               <br>
               <p>Examples: <p style="color: blue;">Aha!, Gosh!, Great!, Hey!, Hooray!, OOPS!</p></p>
               <br><h3 align="center"><span style="color: rgba(255, 5, 17, 0.74);"><u>Oops!</u></span> I spilled the milk. </h3>
           </div>
        </div>

    <!--Footer-->
    <footer class="footer1" >
		<br>
			<p>Copyright &copy 2020 Learn English. All rights reserved.</font></p>
		<br>
    </footer>
</body>
</html>