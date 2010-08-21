<?php

/**
 * Look for a page with a given name in current NS and parent NSs.
 * For example, can be used to find the lowest level menu page available.
 *
 * @author George Lesica <glesica@gmail.com>
 */
function locate_page($name) {
    global $ID;
    $ns = '';
    $path  = explode(':', $ID);
    while (count($path) > 0) {
        array_pop($path);
        $ns = implode(':', $path).':'.$name;
        if (@page_exists($ns) && auth_quickaclcheck($ns) >= AUTH_READ) {
            // found page an have permission to read it
            return $ns;
        }
    }
    // no luck
    return false;
}

?>
