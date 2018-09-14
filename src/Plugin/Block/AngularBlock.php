<?php
namespace Drupal\angular\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * @Block(
 * id = "angular_block",
 * admin_label = @Translation("Angular Block")
 * )
 */
class AngularBlock extends BlockBase
{
    public function build()
    {
        return [
            'input-firstName' => [
                '#type' => 'textfield',
                '#title' => $this->t('First Name'),
                '#placeholder' => $this->t('Enter your first name here'),
                '#attributes' => [
                    'ng-model' => 'firstName',
                ],
            ],
            'input-lastName' => [
                '#type' => 'textfield',
                '#title' => $this->t('Last Name'),
                '#placeholder' => $this->t('Enter your last name here'),
                '#attributes' => [
                    'ng-model' => 'lastName',
                ],
            ],
            'name' => [
                '#markup' => '<hr><h1>Hello {{firstName + " " + lastName}}!</h1>',
            ],
        ];
    }

}