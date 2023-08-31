
<?php
session_start();
$langs = array('tr','en');
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'tr';
}
if (isset($_GET['lang']) && $_GET['lang'] != '') {
    if (in_array($_GET['lang'], $langs)) {
        $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}

include('lang/' . $_SESSION['lang'] . '.php');
$language1 = "";
$language2 = "";


switch ($_SESSION['lang']) {

    case 'tr':
        $language1 = "<a  href='?lang=tr' ><img  src='assets/images/tr.webp' alt='tr' style='height: 20px;'/></a>";
        $language2 = "<a  href='?lang=en' ><img  src='assets/images/en.webp' alt='en' style='height: 20px;'/></a>";
     break;

    case 'en':
        $language1 = "<a  href='?lang=en' ><img  src='assets/images/en.webp' alt='en' style='height: 20px;'/></a>";
        $language2 = "<a  href='?lang=tr' ><img  src='assets/images/tr.webp ' alt='tr' style='height: 20px;'/></a>";
        break;
}
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">