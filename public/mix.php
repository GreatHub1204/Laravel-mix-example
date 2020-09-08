<?php

/**
 * Get the path to a versioned Mix file.
 *
 * @param string $path
 *
 * @return string
 * @throws \Exception
 */
function mix($path)
{
    $manifest = json_decode(file_get_contents('mix-manifest.json'), true);

    if ( ! array_key_exists("/" . $path, $manifest)) {
        throw new Exception("Unable to locate Mix file: {$path}");
    }

    if ( ! file_exists($path)) {
        throw new Exception('Included file does not exist');
    }

    return $manifest["/" . $path];
}
