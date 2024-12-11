<?php

function content(){
    if (!isset($_GET["c"])){
        include("content/index.html");
    } else {
        $result = $_GET["c"];
        if (file_exists($result)) {
            include($result);
        } else {
            echo "<p>Page not found!</p>";
        }
    }
}



function navbar() {
    echo '
    <section class="navbar">
        <ul>
            <li><a href="/index.php?c=content/index.html">Home</a></li>
            <li><a href="/index.php?c=content/about.html">About us</a></li>
            <li><a href="/index.php?c=content/blog.html">Blog</a></li>
            <li><a href="/index.php?c=content/contact.html">Contact</a></li>
        </ul>
    </section>';
}


?>