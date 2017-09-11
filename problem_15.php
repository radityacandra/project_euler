<?php

$grid = array(20, 20);

function searchRoute($grid)
{
    // base recursion
    if ($grid[0] == 0 && $grid[1] == 0) {
        return 1;
    }

    if ($grid[0] > 0) {
        $gridSisa[0] = $grid[0] - 1;
        $gridSisa[1] = $grid[1];
        $path        = $path + searchRoute($gridSisa);
    }

    if ($grid[1] > 0) {
        $gridSisa[0] = $grid[0];
        $gridSisa[1] = $grid[1] - 1;
        $path        = $path + searchRoute($gridSisa);
    }

    return $path;
}

echo "<pre>";
print_r(searchRoute($grid));
echo "</pre>";
