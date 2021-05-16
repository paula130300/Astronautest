<!DOCTYPE html>
<html>
<head> 
	<title>Astronautest FAQ</title>
</head>

<?php require 'header_base.php';?>

<?php require 'navigation.php';?>


<div id="bandeau_FAQ"><h2>FAQ</h2><br><p>Informations et questions fréquentes</p></div>



<div id="FAQ_premier_bloc">
    <div id="faq_titre"><p>Qui sommes nous</p></div>
    <div id="faq_texte"><p>NewPilot est une jeune start-up composée de six membres :</p></div>
    <div id="test_box"><div id="faq_image"><a href ="../ressources/PaulaFAQ.jpg"><img src="../ressources/PaulaFAQ.jpg" height="150" width="150"/></a><p>Paula DA ROCHA PROL</p></div>
                        <div id="faq_image"><a href ="../ressources/Matthieu.jpg"><img src="../ressources/Matthieu.jpg" height="150" width="150"/></a><p> Matthieu FERHAT</p></div>
                        <div id="faq_image"><a href ="../ressources/Xavier.jpg"><img src="../ressources/Xavier.jpg" height="150" width="150"/></a><p>Xavier FOLSCHEID</p></div>
                        <div id="faq_image"><a href ="../ressources/Wilhem.jpg"><img src="../ressources/Wilhem.jpg" height="150" width="150"/></a><p>Wilhem GARDARIN</p></div>
                        <div id="faq_image"><a href ="../ressources/Pauline.jpg"><img src="../ressources/Pauline.jpg" height="150" width="150"/></a><p>Pauline PHILIPPE</p></div>
                        <div id="faq_image"><a href ="../ressources/Maxime.jpg"><img src="../ressources/Maxime.jpg" height="150" width="150"/></a><p>Maxime THOMAS-GUIROY</p></div>
    </div>
</div>
<div id="FAQ_deuixime_bloc">
    <div id="faq_titre"><p>Notre projet</p></div>
    <div id="faq_texte"><p>Notre mission s’affecte au domaine spatial en proposant des tests psychotechniques pour des personnes destinées à effectuer des missions dans l’espace. <br>Le slogan de NewPilot est “Innover, tester et accompagner”, ce slogan est représenté par les trois carrés présents sur le logo.<br>Les clients visés par nos produits sont Infinite Measures, l’Agence spatiale européenne ou encore la NASA. </p></div>
    <div id="test_box2"><div id="faq_image2"><a href ="../ressources/Logo_np.png"><img src="../ressources/Logo_np.png" height="100" width="100"/></a></div>
</div>
</div>

<div id="FAQ_troisieme_bloc">
<div id="faq_titre"><p>Questions fréquentes</p></div>

<div class="container-faq">

    <div class="questions">
        <div class="visible-pannel">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <img src="ressources/croix.png" alt="croix animation">
        </div>
        <div class="invisible-pannel">
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem et asperiores, quod qui in ducimus rerum nisi dolorum. Optio, vel?</p>
        </div>
    </div>

    <div class="questions">
        <div class="visible-pannel">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <img src="ressources/croix.png" alt="croix animation">
        </div>
        <div class="invisible-pannel">
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus neque et, excepturi sequi laboriosam at sit exercitationem repellat voluptate aliquam? Officiis inventore quibusdam doloremque amet quidem dolor quod praesentium in, ullam tenetur corrupti ducimus commodi, minima, nam maiores temporibus assumenda necessitatibus natus voluptas! Mollitia distinctio consequuntur eos aut voluptatibus pariatur?</p>
        </div>
    </div>

    <div class="questions">
        <div class="visible-pannel">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <img src="ressources/croix.png" alt="croix animation">
        </div>
        <div class="invisible-pannel">
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, est!</p>
        </div>
    </div>

    <div class="questions">
        <div class="visible-pannel">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <img src="ressources/croix.png" alt="croix animation">
        </div>
        <div class="invisible-pannel">
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati iusto soluta sunt quos ex, quidem a. Perferendis non corporis dolore reiciendis corrupti temporibus voluptatum veniam aperiam nemo cumque fugit atque facere eius veritatis facilis, qui vero libero, molestias optio fuga labore, similique sint. Tempora enim, eum quia, repellendus rerum repellat quae quas error reprehenderit dolorum est nesciunt ducimus provident tenetur!</p>
        </div>
    </div>


    <script>
    const allCross = document.querySelectorAll('.visible-pannel img');
console.log(allCross);


allCross.forEach(element => {

    element.addEventListener('click', function(){

        const height = this.parentNode.parentNode.childNodes[3].scrollHeight;

        const currentChoice = this.parentNode.parentNode.childNodes[3];

        // console.log(this.src);
        if(this.src.includes('croix')){
            this.src = '/ressources/moin.png';
            //document.getElementById(visible-pannel).style.display=none;

            gsap.to(currentChoice, {duration: 0.2, height: height + 40, opacity: 1, padding: '20px 15px'})
        } else if (this.src.includes('minus')){
            this.src = '/ressources/croix.png';
           // document.getElementById(visible-pannel).style.display=block;


            gsap.to(currentChoice, {duration: 0.2, height: 0, opacity: 0, padding: '0px 15px'})
        }
        
    })

})
    
    
    
    
    </script>


</div>

</div>
<?php require 'footer.php'?>

<style type='text/css'>

#bandeau_FAQ {
    text-align: center;
    border-bottom: 2px solid #000;
}

#bandeau_FAQ h2{
    margin: 0 0;
}
#bandeau_FAQ p {
    margin: 0 2;
}

 #faq_titre {
    font-size: 16pt;
    text-align: center;
 }
 #faq_texte {
    text-align: center;
 }

 #faq_image{
	width: 200px;
    display: flex;
    flex-direction: column;
	text-align: center;
	align-items:center  ;
 }
 #faq_image2{

    display: flex;
    flex-direction: column;
	text-align: center;
	align-items:center  ;

 }
 #test_box{
    margin-left: 7%;
    margin-right: 7%;
    margin-top: 5%;
    margin-bottom: 5%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
#test_box2{

}
*, ::before, ::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    padding: 35px 0;
}
.container-faq {
    width: 70%;
    max-width: 900px;
    min-width: 700px;
    height: auto;
    margin: 10px auto 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}
.questions {
    width: 100%;
    height: auto;
    margin: 5px;
}
.visible-pannel {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #f1f1f1;
    border-radius: 10px;
    position: relative;
    z-index: 100;
}
.visible-pannel h2 {
    margin-left: 10px;
    padding: 15px 5px;
    font-size: 25px;
}
.visible-pannel img {
    margin-right: 10px;
    width: 25px;
    cursor: pointer;
}
.invisible-pannel {
    padding: 0px 15px;
    height: 0px;
    opacity: 0;
}
.invisible-pannel h4 {
    font-size: 18px;
    padding-bottom: 10px;
}
.invisible-pannel p {
    line-height: 1.5;
}