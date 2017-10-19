<?php require_once __DIR__ . '/../vendor/autoload.php';

/**
 * @file constructs xDruple Application
 *
 * @see  xdruple_application()
 */
/** @var $databases - declared in settings.php, if Drupal is installed */
/** @var $GLOBALS['install'] - declared in \Xtuple\Xdruple\Application\Console\Command\Install\InstallDrupalCommand */
if ((!empty($databases) || !empty($GLOBALS['install']))
  && empty($GLOBALS['application'])
  && empty($GLOBALS['__PHPUNIT_BOOTSTRAP'])
) {
  $environment = new \Xtuple\Util\XML\Element\XMLElementFile(
    new \Xtuple\Common\File\File(__DIR__ . '/environment.xml')
  );
  $GLOBALS['application'] = new \Xtuple\Xdruple\Flywheel\FlywheelApplication(
    new \Xtuple\Xdruple\Commerce\Configuration\Environment\CommerceEnvironmentXMLElement(
      $environment,
      new \Xtuple\Xdruple\Application\Configuration\Environment\EnvironmentXMLElement(
        realpath(__DIR__ . '/..'),
        !empty($databases) ? $databases : $GLOBALS['install']['databases'],
        $environment
      )
    ),
    new \Xtuple\Xdruple\Flywheel\FlywheelApplicationConfigXML(
      new \Xtuple\Util\XML\Element\XMLElementFile(
        new \Xtuple\Common\File\File(__DIR__ . '/application.xml')
      )
    )
  );
}
