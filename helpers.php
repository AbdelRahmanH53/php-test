<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . "/" . $path;
}


/**
 * Load a view 
 * 
 * @param string $name
 * @return void
 */

function loadView($name)
{
    $viewPath = basePath("view/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "{$viewPath} dose not exist";
    }
}


/**
 * Load a partial 
 * 
 * @param string $name
 * @return void
 */

function loadPartials($name)
{
    $partialPath = basePath("view/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "{$partialPath} dose not exist";
    }
}


/**
 * Inspect value(s)
 * 
 * @param string $value
 * @return void
 */

function inspect($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

/**
 * Inspect and die value(s)
 * 
 * @param string $value
 * @return void
 */

function inspectAndDie($value)
{
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}
