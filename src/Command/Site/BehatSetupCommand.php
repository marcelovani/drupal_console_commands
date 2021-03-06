<?php

/**
 * @file
 * Contains \DennisDigital\Drupal\Console\Command\Site\BehatSetupCommand.
 *
 * Create behat.yml from template.
 */

namespace DennisDigital\Drupal\Console\Command\Site;

/**
 * Class SiteBehatSetupCommand
 *
 * @package DennisDigital\Drupal\Console\Command
 */
class BehatSetupCommand extends AbstractConfigCommand {

  /**
   * The file name to generate.
   *
   * @var
   */
  protected $filename = 'tests/behat.yml';

  /**
   * The template.
   *
   * @var
   */
  protected $template = 'tests/behat.yml.dist';

  /**
   * The console command.
   *
   * @var
   */
  protected $commandName = 'site:behat:setup';
}
