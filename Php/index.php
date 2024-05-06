<link rel="stylesheet" href="styles.css" />
<?php 
    echo "
    <div id='box'>
        <h1>Hello World</h1>
    </div>
    ";

    for($i = 0; $i < 5; $i++) {
        echo "
        <p>Ini teks ke-$i</p>
        ";
    }
?>
