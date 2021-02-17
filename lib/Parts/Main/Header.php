<?php

namespace Main;

class Header {
    function __construct()
    {
        echo '<header>
                  <div class="logo">this is header</div>
                  <a href="/index.php">home</a>
                  <a href="/index.php?subject=topic">topic</a>
                  <a href="/community">community</a>
              </header>';
    }
}