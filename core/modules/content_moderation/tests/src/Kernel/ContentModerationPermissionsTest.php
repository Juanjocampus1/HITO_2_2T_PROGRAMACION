<?php

namespace Drupal\Tests\content_moderation\Kernel;

use Drupal\content_moderation\Permissions;
use Drupal\KernelTests\KernelTestBase;
use Drupal\workflows\Entity\Workflow;

/**
 * Test to ensure content moderation permissions are generated correctly.
 *
 * @group content_moderation
 */
class ContentModerationPermissionsTest extends KernelTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
  protected static $modules = [
    'workflows',
    'content_moderation',
    'workflow_type_test',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->installEntitySchema('workflow');
  }

  /**
   * Tests permissions generated by content moderation.
   *
   * @dataProvider permissionsTestCases
   */
  public function testPermissions($workflow, $permissions) {
    Workflow::create($workflow)->save();
    $this->assertEquals($permissions, (new Permissions())->transitionPermissions());
  }

  /**
   * Test cases for ::testPermissions.
   *
   * @return array
   *   Content moderation permissions based test cases.
   */
  public function permissionsTestCases() {
    return [
      'Simple Content Moderation Workflow' => [
        [
          'id' => 'simple_workflow',
          'label' => 'Simple Workflow',
          'type' => 'content_moderation',
          'type_settings' => [
            'states' => [
              'draft' => [
                'label' => 'Draft',
                'published' => FALSE,
                'default_revision' => FALSE,
                'weight' => 0,
              ],
              'published' => [
                'label' => 'Published',
                'published' => TRUE,
                'default_revision' => TRUE,
                'weight' => 1,
              ],
              'archived' => [
                'label' => 'Archived',
                'published' => FALSE,
                'default_revision' => TRUE,
                'weight' => 2,
              ],
            ],
            'transitions' => [
              'create_new_draft' => [
                'label' => 'Create New Draft',
                'to' => 'draft',
                'weight' => 0,
                'from' => [
                  'draft',
                  'published',
                ],
              ],
              'publish' => [
                'label' => 'Publish',
                'to' => 'published',
                'weight' => 1,
                'from' => [
                  'draft',
                  'published',
                ],
              ],
              'archive' => [
                'label' => 'Archive',
                'to' => 'archived',
                'weight' => 2,
                'from' => [
                  'published',
                ],
              ],
            ],
          ],
        ],
        [
          'use simple_workflow transition publish' => [
            'title' => 'Simple Workflow workflow: Use Publish transition.',
            'description' => 'Move content from Draft, Published states to Published state.',
            'dependencies' => [
              'config' => [
                'workflows.workflow.simple_workflow',
              ],
            ],
          ],
          'use simple_workflow transition create_new_draft' => [
            'title' => 'Simple Workflow workflow: Use Create New Draft transition.',
            'description' => 'Move content from Draft, Published states to Draft state.',
            'dependencies' => [
              'config' => [
                'workflows.workflow.simple_workflow',
              ],
            ],
          ],
          'use simple_workflow transition archive' => [
            'title' => 'Simple Workflow workflow: Use Archive transition.',
            'description' => 'Move content from Published state to Archived state.',
            'dependencies' => [
              'config' => [
                'workflows.workflow.simple_workflow',
              ],
            ],
          ],
        ],
      ],
      'Non Content Moderation Workflow' => [
        [
          'id' => 'morning',
          'label' => 'Morning',
          'type' => 'workflow_type_test',
          'transitions' => [
            'drink_coffee' => [
              'label' => 'Drink Coffee',
              'from' => ['tired'],
              'to' => 'awake',
              'weight' => 0,
            ],
          ],
          'states' => [
            'awake' => [
              'label' => 'Awake',
              'weight' => -5,
            ],
            'tired' => [
              'label' => 'Tired',
              'weight' => -0,
            ],
          ],
        ],
        [],
      ],
    ];
  }

}
