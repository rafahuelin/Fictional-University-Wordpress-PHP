<?php
    function greet($name, $color) {
        echo "<p>Hi, my $name is blank and my favourite color is $color.</p>";
    }

    greet('John', 'blue');
    greet('Jane', 'pink');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
