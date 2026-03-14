<form method="post">
    Enter a number: <input type="number" name="num">
    <input type="submit" name="submit" value="Check Prime">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];
    $count = 0;

    for($i = 1; $i <= $num; $i++)
    {
        if($num % $i == 0)
        {
            $count++;
        }
    }

    if($count == 2)
    {
        echo $num . " is a Prime Number";
    }
    else
    {
        echo $num . " is Not a Prime Number";
    }
}
?>