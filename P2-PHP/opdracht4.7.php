<h1>Sparen voor een nieuwe Iphone 14 €1000</h1>
<form action="" method="post">
    <input type="text" name="geld" placeholder="Hoeveel spaargeld heb je?">
    <input type="submit" value="verzenden"></form>
    <?php
    {
        $spaargeld = $_POST ["geld"];
        $kosten = 1000;
        $over = $spaargeld - $kosten;
        $tekort = $kosten - $spaargeld;


        if($spaargeld < 750)
        {
            $uitkomst = $kosten - $spaargeld;
            echo "Je spaargeld is nu: &euro;$spaargeld, je komt dus &euro;$tekort te kort!
            maar er is nog &euro;$tekort te weinig.";
        }
        elseif ($spaargeld > 750 && $spaargeld < 1000) {
            echo "Je hebt &euro;$spaargeld, je hebt bijna genoeg,
            maar er is nog &euro;$tekort te weinig.";
        }
        else {
            echo "Je spaargeld is nu &euro;$spaargeld,- hiermee
            is het mogelijk om de iphone te kopen!
            Je hebt nog &euro;$over,- over voor bijvoorbeeld een hoesje.";
        }
    }
    ?>