<?php

namespace Part;

class Header {
    function __construct()
    {
        echo '<header>
                  <div>this is header</div>
                  <a href="/index.php">home</a>
                  <a href="/index.php?subject=topic">topic</a>
                  <a href="/index.php?subject=community">community</a>
              </header>';
    }
}