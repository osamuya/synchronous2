<?php
/**
Packagist@ https://packagist.org/packages/albertofem/rsync-lib
Github@ https://github.com/albertofem/rsync-lib
**/

require __DIR__."/vendor/autoload.php";
use AFM\Rsync\Rsync;

$origin = "/Users/osamuyamakami/localhost/101.nowhite.site/test/";
$target = "/Users/osamuyamakami/localhost/101.nowhite.site/test2/";

$rsync_config = array(
    'delete_from_target' => true,
        'ssh' => array(
            'host' => 'myhost.com',
            'private_key' => '/Users/osamuyamakami/Dropbox/sshkey/osamuya/osamuya.pem '
        )
);

$rsync = new Rsync();
$rsync->sync($origin, $target);









echo "ok.\n";
