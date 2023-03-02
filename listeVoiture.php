la page existe
<br>

<?php
set_time_limit(10000);



$url = 'https://www.autokoo.com/marque';

$html = file_get_contents($url);

$doc = new DOMDocument();

$doc->loadHTML($html);

$carArticles = $doc->getElementsByTagName('article');
foreach ($carArticles as $carArticle) {
    $classAttr = $carArticle->getAttribute('class');
    //var_dump($classAttr);
    if ($classAttr == 'marque pop i-block v-align-center mb10') {

        $model = $carArticle->getElementsByTagName('h2')[0]->textContent;
        ?> <br> <?php
        echo "Modèle : $model";
        ?> <br> <?php
        $aElements = $carArticle->getElementsByTagName('a');
        foreach ($aElements as $a) {
            $href = $a->getAttribute('href');
            
            
        }
        
    }

?> <br> <?php

    $html2 = file_get_contents($href);
    $doc2 = new DOMDocument();
    $doc2->loadHTML($html2);
    
    $carArticles2 = $doc2->getElementsByTagName('article');
    foreach ($carArticles2 as $carArticle2) {
        $classAttr2 = $carArticle2->getAttribute('class');
        //var_dump($classAttr2);
        if ($classAttr2 == 'modele mb10 col-lg-6 col-sm-6 col-xs-12') {
    
            $modele2 = $carArticle2->getElementsByTagName('h2')[0]->textContent;
            ?> <br> <?php
            //var_dump($modele2);
            echo "Modèle2 : $modele2";
            
            /* ?> <br> <?php
            $aElements2 = $carArticle2->getElementsByTagName('a');
            foreach ($aElements2 as $a) {
                $href2 = $a->getAttribute('href');
                echo "URL2 : $href2";
                
            } */
            
        }
    }    

}


$carDivs = $doc->getElementsByTagName('div');
foreach ($carDivs as $carDiv) {
    $classAttr = $carDiv->getAttribute('class');
    //var_dump($classAttr);
    if ($classAttr == 'marque i-block v-align-center mb10') {

        $model = $carDiv->getElementsByTagName('h2')[0]->textContent;
        ?> <br> <?php
        echo "Modèle : $model";
        ?> <br> <?php
        $aElements = $carDiv->getElementsByTagName('a');
        foreach ($aElements as $a) {
            $href = $a->getAttribute('href');
            //echo "URL : $href";
            
        }
        
        ?> <br> <?php

    $html2 = file_get_contents($href);
    $doc2 = new DOMDocument();
    $doc2->loadHTML($html2);
    
    $carArticles2 = $doc2->getElementsByTagName('article');
    foreach ($carArticles2 as $carArticle2) {
        $classAttr2 = $carArticle2->getAttribute('class');
        //var_dump($classAttr2);
        if ($classAttr2 == 'modele mb10 col-lg-6 col-sm-6 col-xs-12') {
    
            $modele2 = $carArticle2->getElementsByTagName('h2')[0]->textContent;
            ?> <br> <?php
            //var_dump($modele2);
            echo "Modèle2 : $modele2";
            
            /* ?> <br> <?php
            $aElements2 = $carArticle2->getElementsByTagName('a');
            foreach ($aElements2 as $a) {
                $href2 = $a->getAttribute('href');
                echo "URL2 : $href2";
                
            } */
            
        }
    }    
    }


}
    //var_dump($class);

?>