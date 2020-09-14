
<?php

function verificationPassword($str){
    if (strlen($str) >= 8){
       return "True";}
    else {
        return "False";
    }
}
echo '<p>'.verificationPassword('1524').'</p>';
echo '<p>'.verificationPassword('15azcfe24').'</p>';


function verificationPassword2($str){
    $test = "/[0-9]/";
    if (strlen($str) >= 8 && strtolower($str) != $str && preg_match($test, $str)){
       return "True";}
    else {
        return "False";
    }
}
echo '<p>'.verificationPassword2('1524').'</p>';
echo '<p>'.verificationPassword2('15azcfe24').'</p>';
echo '<p>'.verificationPassword2('Pazedf1524').'</p>';
echo '<p>'.verificationPassword2('15azcfe24').'</p>';


function capital($str)
{
    switch ($str) {
        case 'France':
            return 'Paris';
            break;
        case 'Allemagne':
            return 'Berlin';
            break;
        case 'Italie':
            return 'Rome';
            break;
        case 'Maroc':
            return 'Rabat';
            break;
        case 'Espagne':
            return 'Madrid';
            break;
        case 'Portugal':
            return 'Lisbonne';
            break;
        case 'Angleterre':
            return 'Londre';
            break;
        default:
            return 'Inconnu';
            break;
    }
};

echo '<p>' . capital('France') . '</p>';
echo '<p>' . capital('Tunisie') . '</p>';



function listHTML($title, $liste)
{
    echo '<h3>' . $title . '</h3>';
    echo '<ul>';
    for ($i = 0; $i < count($liste); $i++) {
        echo '<li>' . $liste[$i] . '</li>';
    }
    echo '</ul>';
};

echo listHTML('Capitale', ['Paris', 'Berlin', 'Moscou']);



function remplacerLesLettres($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == "e") {
            $str[$i] = '3';
        } elseif ($str[$i] == "i") {
            $str[$i] = '1';
        } elseif ($str[$i] == "o") {
            $str[$i] = '0';
        }
    }
    return $str;
};

echo '<p>'.remplacerLesLettres("Bonjour les amis").'</p>';
echo '<p>'.remplacerLesLettres("La programmation Web est trop cool").'</p>';


function quelleAnnee()
{  return date("Y");
};
echo '<p>'.quelleAnnee().'</p>';



function quelleDate()
{  return date("d/m/Y");
};

echo '<p>'.quelleDate().'</p>';