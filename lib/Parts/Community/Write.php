<?php

namespace Community;

class Write
{
    function __construct()
    {
        echo '
            <form action="/design/test.php" method="post">
                <p>
                    <input type="text" name="title" placeholder="title">
                </p>
                <p>
                    <textarea name="description" placeholder="description"></textarea>
                </p>
                <p>
                    <input type="submit" value="write">
                </p>
            </form>
             ';
    }
}
