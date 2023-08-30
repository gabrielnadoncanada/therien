<?php

use App\View\Components;

return [
    'components' => [
        'badge' => [
            'class'  => Components\Badge::class,
            'themes' => [
                'default' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-gray-100 text-gray-800',
                'red'     => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-red-100 text-red-800',
                'yellow'  => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-yellow-100 text-yellow-800',
                'green'   => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-green-100 text-green-800',
                'blue'    => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-blue-100 text-blue-800',
                'indigo'  => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-indigo-100 text-indigo-800',
                'purple'  => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-purple-100 text-purple-800',
                'pink'    => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-pink-100 text-pink-800',
            ],
        ],

        'button' => [
            'class'  => Components\Button::class,
            'themes' => [
                'default' => 'leading-6	rounded-[50px] bg-primary border border-primary px-[25px] py-[20px] text-[22px] font-[500] font-display text-secondary shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success',
                'light'   => 'leading-6 rounded-[50px] bg-secondary border border-secondary px-[25px] py-[20px] text-[22px] font-[500] font-display text-primary shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success',
                'large'   => 'leading-6 rounded-[50px] bg-primary border border-primary px-[50px] py-[30px] text-[36px] font-[500] font-display text-secondary shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success',
                'large-dark'   => 'rounded-[50px] bg-foreground border border-foreground px-[30px] py-[20px] text-[40px] font-[500] font-display text-primary shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success',
                'ghost'   => '',
                'outline' => [
                    'primary' => 'leading-6 rounded-md border border-primary px-6 py-2.5 text-base font-semibold text-primary shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success',
                ],
                'tab'     => [
                    'innactive' => 'saas',
                    'active'    => 'px-0 border-b-2 border-[#5377DD] rounded-none border-primary shadow-none	',

                ],
            ],
        ],

        'nav' => [
            'class'  => Components\Nav::class,
            'themes' => [
                'default' => '',
            ],
        ],

        'nav-link'  => [
            'class'  => Components\NavLink::class,
            'themes' => [
                'default' => 'min-w-[64px] min-h-[64px] p-4 relative rounded-md text-white hover:bg-white hover:text-primary',
                'active'  => 'min-w-[64px] min-h-[64px] p-4 bg-white relative rounded-md text-primary',
            ],
        ],
        'menu-item' => [
            'class'  => Components\MenuItem::class,
            'themes' => [
                'default' => [
                    'normal' => 'block text-gray-700 block px-4 py-2 text-sm',
                    'active' => 'block bg-gray-100 text-gray-900 block px-4 py-2 text-sm',
                ],
            ],
        ],

        'form' => [
            'class' => Components\Form::class,

            'field' => [
                'class'  => Components\Form\Field::class,
                'themes' => [
                    'default' => 'space-y-2 mb-4',
                ],
            ],

            'input' => [
                'class'  => Components\Form\Input::class,
                'themes' => [
                    'default' => [
                        'normal'   => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md',
                        'invalid'  => 'block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md',
                        'disabled' => 'bg-gray-50 shadow-sm focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border-gray-300 rounded-md',
                    ],
                ],
            ],

            'label' => [
                'class'  => Components\Form\Label::class,
                'themes' => [
                    'default' => 'block text-sm font-medium text-primary',
                ],
            ],

            'legend' => [
                'class'  => Components\Form\Legend::class,
                'themes' => [
                    'default' => 'block text-sm font-medium text-primary',
                ],
            ],

            'radio' => [
                'class'  => Components\Form\Radio::class,
                'themes' => [
                    'default' => [
                        'normal'   => 'focus:ring-radio-500 h-5 w-5 text-radio-600 border-primary',
                        'invalid'  => 'focus:ring-radio-500 h-5 w-5 text-red-600 border-primary',
                        'disabled' => 'focus:ring-radio-500 h-5 w-5 text-gray-600 border-primary',
                    ],
                ],
            ],

            'select' => [
                'class'  => Components\Form\Select::class,
                'themes' => [
                    'default' => [
                        'normal'   => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md',
                        'multiple' => 'relative bg-gray-50 border overflow-x-hidden divide-y divide-gray-200 overflow-y-scroll h-40',
                        'invalid'  => 'block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md',
                        'disabled' => 'bg-gray-50 shadow-sm focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border-gray-300 rounded-md',
                    ],
                ],
            ],

            'textarea' => [
                'class'  => Components\Form\Textarea::class,
                'themes' => [
                    'default' => [
                        'normal'   => 'max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
                        'invalid'  => 'max-w-lg shadow-sm block w-full focus:ring-red-500 focus:border-red-500 sm:text-sm border-gray-300 rounded-md',
                        'disabled' => 'bg-gray-50 max-w-lg shadow-sm block w-full focus:ring-gray-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md',
                    ],
                ],
            ],

            'checkbox' => [
                'class'  => Components\Form\Checkbox::class,
                'themes' => [
                    'default' => [
                        'normal'   => 'focus:ring-indigo-500 h-4 w-4 text-primary border-primary ',
                        'invalid'  => 'focus:ring-indigo-500 h-4 w-4 text-red-600 border-primary ',
                        'disabled' => 'focus:ring-indigo-500 h-4 w-4 text-gray-600 border-primary ',
                    ],
                ],
            ],

            'error' => [
                'class'  => Components\Form\Error::class,
                'themes' => [
                    'default' => 'mt-1 text-sm text-red-600',
                ],
            ],

            'description' => [
                'class'  => Components\Form\Description::class,
                'themes' => [
                    'default' => 'mt-2 block text-sm text-gray-600',
                ],
            ],
        ],
    ],

];