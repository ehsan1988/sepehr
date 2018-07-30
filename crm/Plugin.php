<?php namespace Sepehr\Crm;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
  public function registerComponents()
  {
  }

  public function registerSettings()
  {
  }

  public function registerNavigation()
  {
    return [
      'status' => [
        'label' => 'وضعیت',
        'url' => Backend::url('sepehr/crm/forwardstatuscontroller'),
        'icon' => 'icon-database',
        'iconSvg' => 'plugins/sepehr/crm/assets/images/checked.svg',
//                'permissions' => ['ls.details.info.*'],
        'order' => 400,

        'sideMenu' => [
          'forwardstatus' => [
            'label' => 'ارجاعات',
            'icon' => 'icon-user',
            'url' => 'javascript:;',
//                        'attributes' => ['data-menu-item' => 'users'],
//                        'permissions' => ['ls.details.info.users.*']
          ],
        ]
      ],
//            'lessons' => [
//                'label' => 'دروس',
//                'url' => Backend::url('ls/details/lessons'),
//                'icon' => 'icon-book',
//                'iconSvg' => 'plugins/ls/details/assets/images/bookshelf(1).svg',
//                'permissions' => ['ls.details.lessons.*'],
//                'order' => 201,
//
//                'sideMenu' => [
//                    'list' => [
//                        'label' => 'لیست دروس',
//                        'icon' => 'icon-list',
//                        'url' => Backend::url('ls/details/lessons'),
//                        'permissions' => ['ls.details.lessons']
//                    ],
//                ]
//            ],
//            'courses' => [
//                'label' => 'دوره ها',
//                'url' => Backend::url('ls/details/course'),
//                'icon' => 'icon-mortar-board',
//                'iconSvg' => 'plugins/ls/details/assets/images/conversation2.svg',
//                'permissions' => ['ls.details.courses.*'],
//                'order' => 202,
//
//                'sideMenu' => [
//                    'list' => [
//                        'label' => 'لیست دوره ها',
//                        'icon' => 'icon-list',
//                        'url' => Backend::url('ls/details/courses'),
//                        'permissions' => ['ls.details.courses.index']
//                    ],
//                    'exams' => [
//                        'label' => 'آزمون ها',
//                        'icon' => 'icon-edit',
//                        'url' => Backend::url('ls/details/exams'),
//                        'permissions' => ['ls.details.courses.exam']
//                    ],
//                    'certificate' => [
//                        'label' => 'گواهینامه ها',
//                        'icon' => 'icon-id-card-o',
//                        'url' => Backend::url('ls/details/certificates'),
//                        'permissions' => ['ls.details.courses.access_certificate']
//                    ],
//                    'proccess' => [
//                        'label' => 'وضعیت ثبت نام',
//                        'icon' => 'icon-id-card-o',
//                        'url' => Backend::url('ls/details/proccessRegisterUserCourses'),
//                        'permissions' => ['ls.details.courses.access_certificate']
//                    ],
//                ]
//            ],
//            'subSystems' => [
//                'label' => 'زیر سیستم ها',
//                'url' => Backend::url('ls/details/subSystems'),
//                'icon' => 'icon-database',
//                'iconSvg' => 'plugins/ls/details/assets/images/molecule.svg',
//                'permissions' => ['ls.details.subSystems.*'],
//                'order' => 203,
//
//                'sideMenu' => [
//                    'news' => [
//                        'label' => 'اخبار و اطلاعیه ها',
//                        'icon' => 'icon-newspaper-o',
//                        'url' => 'javascript:;',
//                        'attributes' => ['data-menu-item' => 'news'],
//                        'permissions' => ['ls.details.subSystems.news.*']
//                    ],
//                    'evaluates' => [
//                        'label' => 'ارزیابی',
//                        'icon' => 'icon-check-square-o',
//                        'url' => 'javascript:;',
//                        'attributes' => ['data-menu-item' => 'evaluates'],
//                        'permissions' => ['ls.details.subSystems.evaluates.*']
//                    ],
//                    'requirements' => [
//                        'label' => 'نیازسنجی ها',
//                        'icon' => 'icon-qrcode',
//                        'url' => 'javascript:;',
//                        'attributes' => ['data-menu-item' => 'requirements'],
//                        'permissions' => ['ls.details.subSystems.requirements.*']
//                    ],
//                ]
//            ],

    ];
  }
}
