<?

$path = $_SERVER['REQUEST_URI'];

if ($path == '/') {
    header("Location: /latest/bootstrap");
} else {
    # TODO change to version listing
    header("Location: https://github.com/justone/pmb");
}
?>
