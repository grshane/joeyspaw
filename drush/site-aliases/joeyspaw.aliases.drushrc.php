<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site joeyspaw, environment dev.
$aliases['dev'] = array(
  'root' => '/var/www/html/joeyspaw.dev/docroot',
  'ac-site' => 'joeyspaw',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'joeyspawmwch84bnhk.devcloud.acquia-sites.com',
  'remote-host' => 'joeyspawmwch84bnhk.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'joeyspaw.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['dev.livedev'] = array(
  'parent' => '@joeyspaw.dev',
  'root' => '/mnt/gfs/joeyspaw.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site joeyspaw, environment prod.
$aliases['prod'] = array(
  'root' => '/var/www/html/joeyspaw.prod/docroot',
  'ac-site' => 'joeyspaw',
  'ac-env' => 'prod',
  'ac-realm' => 'devcloud',
  'uri' => 'joeyspaw7seygrixoc.devcloud.acquia-sites.com',
  'remote-host' => 'joeyspaw7seygrixoc.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'joeyspaw.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['prod.livedev'] = array(
  'parent' => '@joeyspaw.prod',
  'root' => '/mnt/gfs/joeyspaw.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site joeyspaw, environment test.
$aliases['test'] = array(
  'root' => '/var/www/html/joeyspaw.test/docroot',
  'ac-site' => 'joeyspaw',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'joeyspaw4npckmpgga.devcloud.acquia-sites.com',
  'remote-host' => 'joeyspaw4npckmpgga.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'joeyspaw.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['test.livedev'] = array(
  'parent' => '@joeyspaw.test',
  'root' => '/mnt/gfs/joeyspaw.test/livedev/docroot',
);
