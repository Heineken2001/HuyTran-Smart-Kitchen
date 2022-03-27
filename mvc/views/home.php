<h1>This is home.php</h1>

<p>Category: </p>
    <?php
    foreach($data['category'] as $key => $value) {
        echo $value['name'].'<br/>';
    }
    ?>