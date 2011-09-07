<?

//var_dump($_POST);

$minletters = range(97,122);

$majletters = range(65, 90);

$numbers = range(48, 57);

$excludes = array(34, 38, 39, 47, 60, 62, 92, 96, 124, 127);

$specialcarac = array();

for ($i = 33; $i < 126; $i++)
{
    if (!in_array($i, $minletters) && !in_array($i, $majletters) && !in_array($i, $numbers) && !in_array($i, $excludes))
    {
        array_push($specialcarac,$i);
    }
}

$password = '';

for($j = 0; $j < 10; $j++)
{
    $total = rand($_POST['minlength'],$_POST['maxlength']);
    if (isset($_POST['special'])) $spe = rand(1,$_POST['num_special']);
    if (isset($_POST['number'])) $num = rand(2,$_POST['num_numbers']);
    if (isset($_POST['capital'])) $maj = rand(2,$_POST['num_capital']);
    $min = $total - ($spe + $num + $maj);
    
    //var_dump($total);
    
    $passOrder = Array();

    //generate the contents of the password
    for ($i = 0; $i < $min; $i++) {
        $passOrder[] = chr($minletters[array_rand($minletters)]);
    }
    for ($i = 0; $i < $maj; $i++) {
        $passOrder[] = chr($majletters[array_rand($majletters)]);
    }
    for ($i = 0; $i < $num; $i++) {
        $passOrder[] = chr($numbers[array_rand($numbers)]);
    }
    for ($i = 0; $i < $spe; $i++) {
        $passOrder[] = chr($specialcarac[array_rand($specialcarac)]);
    }    

    shuffle($passOrder); 

    $password  .= implode('',$passOrder).'<br />';
}
