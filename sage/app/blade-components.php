<?php

use App\View\Components;

return [
	'components' => [
		'button' => [
			'class' => Components\Button::class,
			'themes' => [
				'default' => 'inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition bg-neutral-950 text-white hover:bg-neutral-800',
				'invert' => 'inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition bg-white text-neutral-950 hover:bg-neutral-200',
				'menu' => 'group relative isolate -mx-6 bg-neutral-950 px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16',
				'ghost' => '',
				'outline' => [
					'primary' => 'leading-6 rounded-md border border-primary px-6 py-2.5 text-base font-semibold text-primary shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success',
				]
			]
		],
		'form' => [
			'class' => Components\Form::class,
			'input' => [
				'class' => Components\Form\Input::class,
				'themes' => [
					'default' => [
						'normal' => 'peer block w-full border border-neutral-300 bg-transparent px-6 pb-4 pt-12 text-base/6 text-neutral-950 ring-4 ring-transparent transition focus:border-neutral-950 focus:outline-none focus:ring-neutral-950/5 group-first:rounded-t-2xl group-last:rounded-b-2xl',
						'invalid' => '',
						'disabled' => '',
					],
				],
			],
			'label' => [
				'class' => Components\Form\Label::class,
				'themes' => [
					'default' => 'pointer-events-none absolute left-6 top-1/2 -mt-3 origin-left text-base/6 text-neutral-500 transition-all duration-200 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:font-semibold peer-focus:text-neutral-950 peer-[:not(:placeholder-shown)]:-translate-y-4 peer-[:not(:placeholder-shown)]:scale-75 peer-[:not(:placeholder-shown)]:font-semibold peer-[:not(:placeholder-shown)]:text-neutral-950',
				],
			],
			'legend' => [
				'class' => Components\Form\Legend::class,
				'themes' => [
					'default' => 'block text-sm font-medium text-primary',
				],
			],
			'radio' => [
				'class' => Components\Form\Radio::class,
				'themes' => [
					'default' => [
						'normal' => 'focus:ring-radio-500 h-5 w-5 text-radio-600 border-primary',
						'invalid' => 'focus:ring-radio-500 h-5 w-5 text-red-600 border-primary',
						'disabled' => 'focus:ring-radio-500 h-5 w-5 text-gray-600 border-primary',
					],
				],
			],
			'select' => [
				'class' => Components\Form\Select::class,
				'themes' => [
					'default' => [
						'normal' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md',
						'multiple' => 'relative bg-gray-50 border overflow-x-hidden divide-y divide-gray-200 overflow-y-scroll h-40',
						'invalid' => 'block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md',
						'disabled' => 'bg-gray-50 shadow-sm focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border-gray-300 rounded-md',
					],
				],
			],
			'textarea' => [
				'class' => Components\Form\Textarea::class,
				'themes' => [
					'default' => [
						'normal' => 'max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
						'invalid' => 'max-w-lg shadow-sm block w-full focus:ring-red-500 focus:border-red-500 sm:text-sm border-gray-300 rounded-md',
						'disabled' => 'bg-gray-50 max-w-lg shadow-sm block w-full focus:ring-gray-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md',
					],
				],
			],
			'checkbox' => [
				'class' => Components\Form\Checkbox::class,
				'themes' => [
					'default' => [
						'normal' => 'focus:ring-indigo-500 h-4 w-4 text-primary border-primary ',
						'invalid' => 'focus:ring-indigo-500 h-4 w-4 text-red-600 border-primary ',
						'disabled' => 'focus:ring-indigo-500 h-4 w-4 text-gray-600 border-primary ',
					],
				],
			],
			'description' => [
				'class' => Components\Form\Description::class,
				'themes' => [
					'default' => 'mt-2 block text-sm text-gray-600',
				],
			],
			'error' => [
				'class' => Components\Form\Error::class,
				'themes' => [
					'default' => 'mt-1 text-sm text-red-600',
				],
			],
			'field' => [
				'class' => Components\Form\Field::class,
				'themes' => [
					'default' => 'group relative z-0 transition-all focus-within:z-10',
				],
			],
		],
		//		'badge' => [
//			'class' => Components\Badge::class,
//			'themes' => [
//				'default' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-gray-100 text-gray-800',
//				'red' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-red-100 text-red-800',
//				'yellow' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-yellow-100 text-yellow-800',
//				'green' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-green-100 text-green-800',
//				'blue' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-blue-100 text-blue-800',
//				'indigo' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-indigo-100 text-indigo-800',
//				'purple' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-purple-100 text-purple-800',
//				'pink' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-pink-100 text-pink-800',
//			],
//		],
		//		'menu' => [
//			'class' => Components\Menu::class,
//		],
	]
];