
<?php
include 'index.view.php';
?>

<?php if (!empty($_POST)): ?>
<div>
"<?php
date_default_timezone_set('Asia/Kolkata'); //  Time zone of India

$currentHour = date('G'); 

if ($currentHour >= 2 && $currentHour < 11) {
    $greeting = "Morning";
} elseif ($currentHour >= 11 && $currentHour <= 16) {
    $greeting = "Afternoon";
} elseif ($currentHour > 16 && $currentHour <= 21) {
    $greeting = "Evening";
} else {
    $greeting = "Night";
}

echo "Good $greeting";
?>
   <?= htmlspecialchars($_POST['name']) ?>. 
    Your favorite Food is 
    <?php if ($_POST['food'] == 'Idli Sambhar'): ?>
        Idli Sambhar
        <?php elseif ($_POST['food'] == 'Pulao'): ?>
            Pulao
    <?php else: ?>
        Chole Bhature
   <?php endif; ?>"

</div>
<?php endif; ?>

