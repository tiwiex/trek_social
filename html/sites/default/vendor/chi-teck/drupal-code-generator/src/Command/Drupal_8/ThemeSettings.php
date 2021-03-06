<?php

namespace DrupalCodeGenerator\Command\Drupal_8;

use DrupalCodeGenerator\Command\BaseGenerator;
use DrupalCodeGenerator\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

/**
 * Implements d8:theme-settings command.
 */
class ThemeSettings extends BaseGenerator {

  protected $name = 'd8:theme-settings';
  protected $description = 'Generates Drupal 8 theme-settings.php file';
  protected $alias = 'theme-settings';
  protected $destination = 'themes/%';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $questions['name'] = new Question('Theme name');
    $questions['name']->setValidator([Utils::class, 'validateRequired']);
    $questions['machine_name'] = new Question('Theme machine name');
    $questions['machine_name']->setValidator([Utils::class, 'validateMachineName']);
    $vars = $this->collectVars($input, $output, $questions);

    $this->setFile('theme-settings.php', 'd8/theme-settings-form.twig', $vars);

    $schema_path = 'config/install/' . $vars['machine_name'] . '.settings.yml';
    $this->setFile($schema_path, 'd8/theme-settings-config.twig', $vars);

    $schema_path = 'config/schema/' . $vars['machine_name'] . '.schema.yml';
    $this->setFile($schema_path, 'd8/theme-settings-schema.twig', $vars);
  }

}
