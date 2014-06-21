<?

$path = $_SERVER['REQUEST_URI'];

if ($path == '/testing/bootstrap') {
    header("Location: /2014-06-19-0630-d23dd81/bootstrap");
} else {
    # TODO change to version listing
    header("Location: https://github.com/justone/pmb");
}
?>
