<?

$path = $_SERVER['REQUEST_URI'];

$prior_versions = glob("201*");
rsort($prior_versions);
$latest = array_shift($prior_versions);

if ($path == '/latest') {
    header("Location: /$latest/bootstrap");
} else {
?>
<p>To get latest bootstrap:</p>
<code>curl -L <?= $_SERVER['HTTP_HOST'] ?>/latest</code>
<p> or </p>
<code>curl <?= $_SERVER['HTTP_HOST'] ?>/<?= $latest ?>/bootstrap</code>
<p>Prior versions:</p>
<?
?>
    <ul>
<?
    foreach ($prior_versions as $version) {
?>
        <li><a href="<?= $version ?>"><?= $version ?></a></li>
<?
    }
?>
    </ul>
<?
}
?>
