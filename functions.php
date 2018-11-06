<?php

/*
 * Calculates the max. distance of fence able to be build with posts and rails with the condition that one more
 * post than rail is always needed
 *
 * @param int $postsUsed represents the number of posts used
 * @param float $post represents the length of 1 post
 * @param int $railsUsed represents the number of rails used
 * @param float $rail represents the length of 1 rail
 *
 * @return float $distance is the max distance able to be built to 2 decimal places
 */
function calculateDistance($postsUsed, float $post, $railsUsed, float $rail) : string {
    $distance = ($postsUsed * $post) + ($railsUsed * $rail);
    return number_format($distance,2) . ' metres';
}

/*
 * Divides $distanceReq, minus the value of $post, by the combined values of $post and $rail
 *
 * @param int $distanceReq is the fence length entered into 'distanceReq' input of form.php
 * @param float $post represents the length of 1 post
 * @param float $rail represents the length of 1 rail
 *
 * @return int $postsAndRails is the number of posts and rails each that equates to $distanceReq minus 1 post
 */
function calculatePostsAndRails($distanceReq, float $post, float $rail) : int {
    $postsAndRails = ceil(($distanceReq - $post) / ($post + $rail));
    return $postsAndRails;
}
