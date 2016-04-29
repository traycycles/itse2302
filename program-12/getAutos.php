<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 4/1/16
 * Time: 3:04 PM
 */
$q=$_GET["q"];


$xmlDoc = new DOMDocument();
$xmlDoc->load("autodata.xml");

$x=$xmlDoc->getElementsByTagName('model');

for($i=0; $i<$x->length; $i++){
    if($x->item($i)->nodeType==1){
        if($x->item($i)->childNodes->item(0)->nodeValue == $q){
            $y=($x->item($i)->parentNode);
        }
    }
}

$auto = ($y->childNodes);

for($i=0;$i<$auto->length;$i++){
    if($auto->item($i)->nodeType==1){
    ?>
        <strong><?=$auto->item($i)->nodeName?>:</strong>
            <?=$auto->item($i)->childNodes->item(0)->nodeValue?><br/>
    <?php
    }
}