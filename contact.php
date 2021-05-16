<!DOCTYPE html>

<head> 
    <title>Astronautest Nous Contacter</title>
</head>
<?php require 'header_base.php';?>

<?php require 'navigation.php';?>

<div id="bandeau_contact"><h2>Nous contacter</h2><br><p>atronautest@newpilot.com</p></div>

<div id="test_box"><div id="image"><a href="../ressources/cartevisite1.png"><img src="../ressources/cartevisite1.png" height="250" width="400"/></a></div>
                    <div id="image"><a href="../ressources/cartevisite2.png"><img src="../ressources/cartevisite2.png" height="250" width="400"/></a></div>
</div>

<?php require 'footer.php'?>

<style type='text/css'>

#bandeau_contact {
    text-align: center;
    border-bottom: 2px solid #000;
}

#bandeau_contact h2{
    margin: 0 0;
}
#bandeau contact  p {
    margin: 0 2;
}
#test_box{
    margin-left: 7%;
    margin-right: 7%;
    margin-top: 5%;
    margin-bottom: 5%;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}
</style>