<?php
    $dato1 = $_POST['inputNumber1'];
    $dato2 = $_POST['inputNumber2'];
    $dato3 = $_POST['inputNumber3'];

    $total = $dato1 + $dato2 + $dato3;
    if ($total == 100) {
        $url = "../Index.php?success=1&dato1=" . $dato1 . "&dato2=" . $dato2 . "&dato3=" . $dato3;
        header('Location: ' . $url);
        exit();
    }
    else if($total !== 100){
        header('Location: ../Index.php?error=1');
        exit();
    }
?>
