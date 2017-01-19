<?

$path = $_SERVER['REQUEST_URI'];

$prior_versions = glob("201*");
rsort($prior_versions);
$latest = array_shift($prior_versions);

if ($path == '/latest') {
    header("Location: /$latest/bootstrap");
} else {
?>
<h1>Personal Message Bus downloads</h1>
<h2>Bootstrap:</h2>
<code>curl -L <?= $_SERVER['HTTP_HOST'] ?>/latest</code>
<p> or </p>
<code>curl <?= $_SERVER['HTTP_HOST'] ?>/<?= $latest ?>/bootstrap</code>
<h2>Manual downloads</h2>
latest version:
<ul>
    <li><a href="<?= $latest ?>"><?= $latest ?></a></li>
</ul>
<p>or prior versions:</p>
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
