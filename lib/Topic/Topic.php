<?php

namespace Topic;

use Database\Database as Database;

class Topic extends Database {
    function __construct($subject)
    {
        echo '<div>
                  <h1>this is '.$subject.'</h1>
              </div>';
    }
}