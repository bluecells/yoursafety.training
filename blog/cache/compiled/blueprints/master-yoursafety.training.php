<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledBlueprints',
    'timestamp' => 1559418296,
    'checksum' => '3873abfc7bba0ad959bf3c5e158f1d02',
    'files' => [
        'user/plugins/admin/blueprints/config' => [
            'media' => [
                'file' => 'user/plugins/admin/blueprints/config/media.yaml',
                'modified' => 1559406893
            ]
        ],
        'system/blueprints/config' => [
            'backups' => [
                'file' => 'system/blueprints/config/backups.yaml',
                'modified' => 1559406892
            ],
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1559406892
            ],
            'scheduler' => [
                'file' => 'system/blueprints/config/scheduler.yaml',
                'modified' => 1559406892
            ],
            'security' => [
                'file' => 'system/blueprints/config/security.yaml',
                'modified' => 1559406892
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1559406892
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1559406892
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1559406892
            ]
        ],
        'user/plugins' => [
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/blueprints.yaml',
                'modified' => 1559406893
            ],
            'plugins/customadmin' => [
                'file' => 'user/plugins/customadmin/blueprints.yaml',
                'modified' => 1559406893
            ],
            'plugins/git-sync' => [
                'file' => 'user/plugins/git-sync/blueprints.yaml',
                'modified' => 1559406893
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/blueprints.yaml',
                'modified' => 1559406893
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/markdown-fontawesome' => [
                'file' => 'user/plugins/markdown-fontawesome/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/jscomments' => [
                'file' => 'user/plugins/jscomments/blueprints.yaml',
                'modified' => 1559408441
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/image-captions' => [
                'file' => 'user/plugins/image-captions/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/comments' => [
                'file' => 'user/plugins/comments/blueprints.yaml',
                'modified' => 1559418228
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/presentation' => [
                'file' => 'user/plugins/presentation/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/presentation-deckset' => [
                'file' => 'user/plugins/presentation-deckset/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/shortcode-ui' => [
                'file' => 'user/plugins/shortcode-ui/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/tntsearch' => [
                'file' => 'user/plugins/tntsearch/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/auto-date' => [
                'file' => 'user/plugins/auto-date/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/external_links' => [
                'file' => 'user/plugins/external_links/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/page-inject' => [
                'file' => 'user/plugins/page-inject/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/youtube' => [
                'file' => 'user/plugins/youtube/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1559406894
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/blueprints.yaml',
                'modified' => 1559406894
            ]
        ]
    ],
    'data' => [
        'items' => [
            'media' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'media.types' => [
                'name' => 'media.types',
                'type' => 'list',
                'label' => 'PLUGIN_ADMIN.MEDIA_TYPES',
                'style' => 'vertical',
                'key' => 'extension',
                'controls' => 'both',
                'collapsed' => true,
                'validation' => 'loose',
                'array' => true
            ],
            'media.types.*' => [
                'type' => '_parent',
                'name' => 'media.types.*',
                'form_field' => false
            ],
            'media.types.*.type' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.TYPE',
                'name' => 'media.types.*.type',
                'validation' => 'loose'
            ],
            'media.types.*.thumb' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.THUMB',
                'name' => 'media.types.*.thumb',
                'validation' => 'loose'
            ],
            'media.types.*.mime' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.MIME_TYPE',
                'validate' => [
                    'type' => 'lower'
                ],
                'name' => 'media.types.*.mime',
                'validation' => 'loose'
            ],
            'media.types.*.image' => [
                'type' => 'textarea',
                'yaml' => true,
                'label' => 'PLUGIN_ADMIN.IMAGE_OPTIONS',
                'validate' => [
                    'type' => 'yaml'
                ],
                'name' => 'media.types.*.image',
                'validation' => 'loose'
            ],
            'backups' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'backups.history' => [
                'type' => 'backupshistory',
                'name' => 'backups.history',
                'validation' => 'loose'
            ],
            'backups.purge' => [
                'type' => '_parent',
                'name' => 'backups.purge',
                'form_field' => false
            ],
            'backups.purge.trigger' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.BACKUPS_STORAGE_PURGE_TRIGGER',
                'size' => 'medium',
                'default' => 'space',
                'options' => [
                    'space' => 'Maximum Backup Space',
                    'number' => 'Maximum Number of Backups',
                    'time' => 'maximum Retention Time'
                ],
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.purge.trigger',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_count' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_COUNT',
                'default' => 25,
                'size' => 'x-small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Must be a number 0 or greater'
                ],
                'name' => 'backups.purge.max_backups_count',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_space' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_SPACE',
                'append' => 'in GB',
                'size' => 'x-small',
                'default' => 5,
                'validate' => [
                    'min' => 1,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Space must be 1GB or greater'
                ],
                'name' => 'backups.purge.max_backups_space',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_time' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_RETENTION_TIME',
                'append' => 'PLUGIN_ADMIN.BACKUPS_MAX_RETENTION_TIME_APPEND',
                'size' => 'x-small',
                'default' => 365,
                'validate' => [
                    'min' => 7,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Rentenion days must be 7 or greater'
                ],
                'name' => 'backups.purge.max_backups_time',
                'validation' => 'loose'
            ],
            'backups.profiles' => [
                'type' => 'list',
                'style' => 'vertical',
                'label' => NULL,
                'classes' => 'backups-list compact',
                'sort' => false,
                'name' => 'backups.profiles',
                'validation' => 'loose',
                'array' => true
            ],
            'backups.profiles.*' => [
                'type' => '_parent',
                'name' => 'backups.profiles.*',
                'form_field' => false
            ],
            'backups.profiles.*.name' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.NAME',
                'validate' => [
                    'max' => 20,
                    'message' => 'Name must be less than 20 characters',
                    'required' => true
                ],
                'name' => 'backups.profiles.*.name',
                'validation' => 'loose'
            ],
            'backups.profiles.*.root' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ROOT_FOLDER',
                'default' => '/',
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.profiles.*.root',
                'validation' => 'loose'
            ],
            'backups.profiles.*.exclude_paths' => [
                'type' => 'textarea',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_PATHS',
                'rows' => 5,
                'name' => 'backups.profiles.*.exclude_paths',
                'validation' => 'loose'
            ],
            'backups.profiles.*.exclude_files' => [
                'type' => 'textarea',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_FILES',
                'rows' => 5,
                'name' => 'backups.profiles.*.exclude_files',
                'validation' => 'loose'
            ],
            'backups.profiles.*.schedule' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'backups.profiles.*.schedule',
                'validation' => 'loose'
            ],
            'backups.profiles.*.schedule_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE_AT',
                'default' => '* 3 * * *',
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.profiles.*.schedule_at',
                'validation' => 'loose'
            ],
            'scheduler' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'scheduler.status' => [
                'type' => 'cronstatus',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'scheduler.status',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs' => [
                'type' => 'list',
                'style' => 'vertical',
                'label' => NULL,
                'classes' => 'cron-job-list compact',
                'key' => 'id',
                'name' => 'scheduler.custom_jobs',
                'validation' => 'loose',
                'array' => true
            ],
            'scheduler.custom_jobs.*' => [
                'type' => '_parent',
                'name' => 'scheduler.custom_jobs.*',
                'form_field' => false
            ],
            'scheduler.custom_jobs.*.command' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.COMMAND',
                'validate' => [
                    'required' => true
                ],
                'name' => 'scheduler.custom_jobs.*.command',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.args' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.EXTRA_ARGUMENTS',
                'name' => 'scheduler.custom_jobs.*.args',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_RUNAT',
                'validate' => [
                    'required' => true
                ],
                'name' => 'scheduler.custom_jobs.*.at',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.output' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT',
                'name' => 'scheduler.custom_jobs.*.output',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.output_mode' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT_TYPE',
                'default' => 'append',
                'options' => [
                    'append' => 'Append',
                    'overwrite' => 'Overwrite'
                ],
                'name' => 'scheduler.custom_jobs.*.output_mode',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.email' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_EMAIL',
                'name' => 'scheduler.custom_jobs.*.email',
                'validation' => 'loose'
            ],
            'security' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'security.xss_whitelist' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_WHITELIST_PERMISSIONS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_whitelist',
                'validation' => 'loose'
            ],
            'security.xss_enabled' => [
                'type' => '_parent',
                'name' => 'security.xss_enabled',
                'form_field' => false
            ],
            'security.xss_enabled.on_events' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_ON_EVENTS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.on_events',
                'validation' => 'loose'
            ],
            'security.xss_enabled.invalid_protocols' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_INVALID_PROTOCOLS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.invalid_protocols',
                'validation' => 'loose'
            ],
            'security.xss_invalid_protocols' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_INVALID_PROTOCOLS_LIST',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_invalid_protocols',
                'validation' => 'loose'
            ],
            'security.xss_enabled.moz_binding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_MOZ_BINDINGS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.moz_binding',
                'validation' => 'loose'
            ],
            'security.xss_enabled.html_inline_styles' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_HTML_INLINE_STYLES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.html_inline_styles',
                'validation' => 'loose'
            ],
            'security.xss_enabled.dangerous_tags' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_DANGEROUS_TAGS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.dangerous_tags',
                'validation' => 'loose'
            ],
            'security.xss_dangerous_tags' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_DANGEROUS_TAGS_LIST',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_dangerous_tags',
                'validation' => 'loose'
            ],
            'security.uploads_dangerous_extensions' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.UPLOADS_DANGEROUS_EXTENSIONS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.uploads_dangerous_extensions',
                'validation' => 'loose'
            ],
            'site' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'name' => 'site.title',
                'validation' => 'loose'
            ],
            'site.default_lang' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_DEFAULT_LANG',
                'size' => 'x-small',
                'name' => 'site.default_lang',
                'validation' => 'loose'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author',
                'form_field' => false
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'name' => 'site.author.name',
                'validation' => 'loose'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email',
                'validation' => 'loose'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies',
                'validation' => 'loose'
            ],
            'site.summary' => [
                'type' => '_parent',
                'name' => 'site.summary',
                'form_field' => false
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled',
                'validation' => 'loose'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.CHARACTERS',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size',
                'validation' => 'loose'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format',
                'validation' => 'loose'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'name' => 'site.summary.delimiter',
                'validation' => 'loose'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.METADATA',
                'name' => 'site.metadata',
                'validation' => 'loose'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'name' => 'site.redirects',
                'validation' => 'loose'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_ROUTES',
                'name' => 'site.routes',
                'validation' => 'loose'
            ],
            'streams' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose',
                    'hidden' => true
                ]
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes',
                'form_field' => false
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx',
                'validation' => 'loose'
            ],
            'system' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home',
                'form_field' => false
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'show_slug' => true,
                'name' => 'system.home.alias',
                'validation' => 'loose'
            ],
            'system.home.hide_in_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.home.hide_in_urls',
                'validation' => 'loose'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages',
                'form_field' => false
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'name' => 'system.pages.theme',
                'validation' => 'loose'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process',
                'validation' => 'loose'
            ],
            'system.pages.types' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.PAGE_TYPES',
                'size' => 'small',
                'default' => [
                    0 => 'html',
                    1 => 'htm',
                    2 => 'json',
                    3 => 'xml',
                    4 => 'txt',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'value_only' => true,
                'name' => 'system.pages.types',
                'validation' => 'loose'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'data-options@' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)'
                ],
                'name' => 'system.timezone',
                'validation' => 'loose'
            ],
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat',
                'form_field' => false
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.short',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long',
                'validation' => 'loose'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order',
                'form_field' => false
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'system.pages.order.by',
                'validation' => 'loose'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir',
                'validation' => 'loose'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list',
                'form_field' => false
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PAGES',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count',
                'validation' => 'loose'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates',
                'validation' => 'loose'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events',
                'validation' => 'loose'
            ],
            'system.pages.append_url_extension' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                'name' => 'system.pages.append_url_extension',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_code' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                'options' => [
                    301 => '301 - Permanent',
                    302 => '302 - Found',
                    303 => '303 - Other',
                    304 => '304 - Not Modified'
                ],
                'name' => 'system.pages.redirect_default_code',
                'validation' => 'loose'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_trailing_slash',
                'validation' => 'loose'
            ],
            'system.pages.ignore_hidden' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.ignore_hidden',
                'validation' => 'loose'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files',
                'validation' => 'loose'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders',
                'validation' => 'loose'
            ],
            'system.pages.hide_empty_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.HIDE_EMPTY_FOLDERS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.hide_empty_folders',
                'validation' => 'loose'
            ],
            'system.pages.url_taxonomy_filters' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.url_taxonomy_filters',
                'validation' => 'loose'
            ],
            'system.pages.twig_first' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_FIRST',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.twig_first',
                'validation' => 'loose'
            ],
            'system.pages.never_cache_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.never_cache_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter' => [
                'type' => '_parent',
                'name' => 'system.pages.frontmatter',
                'form_field' => false
            ],
            'system.pages.frontmatter.process_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.frontmatter.process_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter.ignore_fields' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.frontmatter.ignore_fields',
                'validation' => 'loose'
            ],
            'system.languages' => [
                'type' => '_parent',
                'name' => 'system.languages',
                'form_field' => false
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported',
                'validation' => 'loose'
            ],
            'system.languages.default_lang' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DEFAULT_LANG',
                'name' => 'system.languages.default_lang',
                'validation' => 'loose'
            ],
            'system.languages.include_default_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang',
                'validation' => 'loose'
            ],
            'system.languages.pages_fallback_only' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PAGES_FALLBACK_ONLY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.pages_fallback_only',
                'validation' => 'loose'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations',
                'validation' => 'loose'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback',
                'validation' => 'loose'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active',
                'validation' => 'loose'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language',
                'validation' => 'loose'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale',
                'validation' => 'loose'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires',
                'validation' => 'loose'
            ],
            'system.pages.cache_control' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CACHE_CONTROL',
                'name' => 'system.pages.cache_control',
                'validation' => 'loose'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified',
                'validation' => 'loose'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag',
                'validation' => 'loose'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding',
                'validation' => 'loose'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown',
                'form_field' => false
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links',
                'validation' => 'loose'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup',
                'validation' => 'loose'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache',
                'form_field' => false
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled',
                'validation' => 'loose'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check',
                'form_field' => false
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'options' => [
                    'file' => 'Markdown + Yaml file timestamps',
                    'folder' => 'Folder timestamps',
                    'hash' => 'All files timestamps',
                    'none' => 'No timestamp checking'
                ],
                'name' => 'system.cache.check.method',
                'validation' => 'loose'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'apcu' => 'APCu',
                    'xcache' => 'Xcache',
                    'memcache' => 'Memcache',
                    'memcached' => 'Memcached',
                    'wincache' => 'WinCache',
                    'redis' => 'Redis'
                ],
                'name' => 'system.cache.driver',
                'validation' => 'loose'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'name' => 'system.cache.prefix',
                'validation' => 'loose'
            ],
            'system.cache.purge_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.CACHE_PURGE_JOB',
                'default' => '* 4 * * *',
                'name' => 'system.cache.purge_at',
                'validation' => 'loose'
            ],
            'system.cache.clear_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.CACHE_CLEAR_JOB',
                'default' => '* 3 * * *',
                'name' => 'system.cache.clear_at',
                'validation' => 'loose'
            ],
            'system.cache.clear_job_type' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CACHE_JOB_TYPE',
                'options' => [
                    'standard' => 'Standard Cache Folders',
                    'all' => 'All Cache Folders'
                ],
                'name' => 'system.cache.clear_job_type',
                'validation' => 'loose'
            ],
            'system.cache.clear_images_by_default' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLEAR_IMAGES_BY_DEFAULT',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.clear_images_by_default',
                'validation' => 'loose'
            ],
            'system.cache.cli_compatibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.cli_compatibility',
                'validation' => 'loose'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime',
                'validation' => 'loose'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip',
                'validation' => 'loose'
            ],
            'system.cache.allow_webserver_gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.allow_webserver_gzip',
                'validation' => 'loose'
            ],
            'system.cache.memcache' => [
                'type' => '_parent',
                'name' => 'system.cache.memcache',
                'form_field' => false
            ],
            'system.cache.memcache.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.MEMCACHE_SERVER',
                'name' => 'system.cache.memcache.server',
                'validation' => 'loose'
            ],
            'system.cache.memcache.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.MEMCACHE_PORT',
                'name' => 'system.cache.memcache.port',
                'validation' => 'loose'
            ],
            'system.cache.memcached' => [
                'type' => '_parent',
                'name' => 'system.cache.memcached',
                'form_field' => false
            ],
            'system.cache.memcached.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_SERVER',
                'name' => 'system.cache.memcached.server',
                'validation' => 'loose'
            ],
            'system.cache.memcached.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_PORT',
                'name' => 'system.cache.memcached.port',
                'validation' => 'loose'
            ],
            'system.cache.redis' => [
                'type' => '_parent',
                'name' => 'system.cache.redis',
                'form_field' => false
            ],
            'system.cache.redis.socket' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SOCKET',
                'name' => 'system.cache.redis.socket',
                'validation' => 'loose'
            ],
            'system.cache.redis.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SERVER',
                'name' => 'system.cache.redis.server',
                'validation' => 'loose'
            ],
            'system.cache.redis.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PORT',
                'name' => 'system.cache.redis.port',
                'validation' => 'loose'
            ],
            'system.cache.redis.password' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PASSWORD',
                'name' => 'system.cache.redis.password',
                'validation' => 'loose'
            ],
            'system.twig' => [
                'type' => '_parent',
                'name' => 'system.twig',
                'form_field' => false
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache',
                'validation' => 'loose'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug',
                'validation' => 'loose'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload',
                'validation' => 'loose'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape',
                'validation' => 'loose'
            ],
            'system.twig.umask_fix' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.umask_fix',
                'validation' => 'loose'
            ],
            'system.assets' => [
                'type' => '_parent',
                'name' => 'system.assets',
                'form_field' => false
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify',
                'validation' => 'loose'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows',
                'validation' => 'loose'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify',
                'validation' => 'loose'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp',
                'validation' => 'loose'
            ],
            'system.assets.collections' => [
                'type' => 'multilevel',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'system.assets.collections',
                'validation' => 'loose'
            ],
            'system.errors' => [
                'type' => '_parent',
                'name' => 'system.errors',
                'form_field' => false
            ],
            'system.errors.display' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'size' => 'medium',
                'highlight' => 1,
                'options' => [
                    -1 => 'PLUGIN_ADMIN.ERROR_SYSTEM',
                    0 => 'PLUGIN_ADMIN.ERROR_SIMPLE',
                    1 => 'PLUGIN_ADMIN.ERROR_FULL_BACKTRACE'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.errors.display',
                'validation' => 'loose'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log',
                'validation' => 'loose'
            ],
            'system.log' => [
                'type' => '_parent',
                'name' => 'system.log',
                'form_field' => false
            ],
            'system.log.handler' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.LOG_HANDLER',
                'default' => 'file',
                'options' => [
                    'file' => 'File',
                    'syslog' => 'Syslog'
                ],
                'name' => 'system.log.handler',
                'validation' => 'loose'
            ],
            'system.log.syslog' => [
                'type' => '_parent',
                'name' => 'system.log.syslog',
                'form_field' => false
            ],
            'system.log.syslog.facility' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SYSLOG_FACILITY',
                'default' => 'local6',
                'options' => [
                    'auth' => 'auth',
                    'authpriv' => 'authpriv',
                    'cron' => 'cron',
                    'daemon' => 'daemon',
                    'kern' => 'kern',
                    'lpr' => 'lpr',
                    'mail' => 'mail',
                    'news' => 'news',
                    'syslog' => 'syslog',
                    'user' => 'user',
                    'uucp' => 'uucp',
                    'local0' => 'local0',
                    'local1' => 'local1',
                    'local2' => 'local2',
                    'local3' => 'local3',
                    'local4' => 'local4',
                    'local5' => 'local5',
                    'local6' => 'local6',
                    'local7' => 'local7'
                ],
                'name' => 'system.log.syslog.facility',
                'validation' => 'loose'
            ],
            'system.debugger' => [
                'type' => '_parent',
                'name' => 'system.debugger',
                'form_field' => false
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled',
                'validation' => 'loose'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown',
                'form_field' => false
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection',
                'validation' => 'loose'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images',
                'form_field' => false
            ],
            'system.images.default_image_quality' => [
                'type' => 'range',
                'append' => '%',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'validate' => [
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality',
                'validation' => 'loose'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all',
                'validation' => 'loose'
            ],
            'system.images.cache_perms' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                'highlight' => '0755',
                'options' => [
                    '0755' => '0755',
                    '0775' => '0775'
                ],
                'name' => 'system.images.cache_perms',
                'validation' => 'loose'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug',
                'validation' => 'loose'
            ],
            'system.images.auto_fix_orientation' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.auto_fix_orientation',
                'validation' => 'loose'
            ],
            'system.images.seofriendly' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_SEOFRIENDLY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.seofriendly',
                'validation' => 'loose'
            ],
            'system.media' => [
                'type' => '_parent',
                'name' => 'system.media',
                'form_field' => false
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp',
                'validation' => 'loose'
            ],
            'system.media.auto_metadata_exif' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_AUTO_METADATA',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.auto_metadata_exif',
                'validation' => 'loose'
            ],
            'system.media.allowed_fallback_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FALLBACK_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.allowed_fallback_types',
                'validation' => 'loose'
            ],
            'system.media.unsupported_inline_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.INLINE_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.unsupported_inline_types',
                'validation' => 'loose'
            ],
            'system.session' => [
                'type' => '_parent',
                'name' => 'system.session',
                'form_field' => false
            ],
            'system.session.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled',
                'validation' => 'loose'
            ],
            'system.session.initialize' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_INITIALIZE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.initialize',
                'validation' => 'loose'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'system.session.timeout',
                'validation' => 'loose'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'system.session.name',
                'validation' => 'loose'
            ],
            'system.session.uniqueness' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.SESSION_UNIQUENESS',
                'highlight' => 'path',
                'default' => 'path',
                'options' => [
                    'path' => 'Grav\'s root file path',
                    'salt' => 'Grav\'s random security salt'
                ],
                'name' => 'system.session.uniqueness',
                'validation' => 'loose'
            ],
            'system.session.secure' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SECURE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.secure',
                'validation' => 'loose'
            ],
            'system.session.httponly' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_HTTPONLY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.httponly',
                'validation' => 'loose'
            ],
            'system.session.path' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_PATH',
                'name' => 'system.session.path',
                'validation' => 'loose'
            ],
            'system.session.split' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SPLIT',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.split',
                'validation' => 'loose'
            ],
            'system.gpm' => [
                'type' => '_parent',
                'name' => 'system.gpm',
                'form_field' => false
            ],
            'system.gpm.releases' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_RELEASES',
                'highlight' => 'stable',
                'options' => [
                    'stable' => 'PLUGIN_ADMIN.STABLE',
                    'testing' => 'PLUGIN_ADMIN.TESTING'
                ],
                'name' => 'system.gpm.releases',
                'validation' => 'loose'
            ],
            'system.gpm.proxy_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PROXY_URL',
                'name' => 'system.gpm.proxy_url',
                'validation' => 'loose'
            ],
            'system.gpm.method' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_METHOD',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'PLUGIN_ADMIN.AUTO',
                    'fopen' => 'PLUGIN_ADMIN.FOPEN',
                    'curl' => 'PLUGIN_ADMIN.CURL'
                ],
                'name' => 'system.gpm.method',
                'validation' => 'loose'
            ],
            'system.gpm.official_gpm_only' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_OFFICIAL_ONLY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.gpm.official_gpm_only',
                'validation' => 'loose'
            ],
            'system.gpm.verify_peer' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_VERIFY_PEER',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.gpm.verify_peer',
                'validation' => 'loose'
            ],
            'system.reverse_proxy_setup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REVERSE_PROXY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.reverse_proxy_setup',
                'validation' => 'loose'
            ],
            'system.username_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.USERNAME_REGEX',
                'name' => 'system.username_regex',
                'validation' => 'loose'
            ],
            'system.pwd_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.PWD_REGEX',
                'name' => 'system.pwd_regex',
                'validation' => 'loose'
            ],
            'system.intl_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INTL_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.intl_enabled',
                'validation' => 'loose'
            ],
            'system.wrapped_site' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.WRAPPED_SITE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.wrapped_site',
                'validation' => 'loose'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls',
                'validation' => 'loose'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep',
                'validation' => 'loose'
            ],
            'system.force_ssl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_SSL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_ssl',
                'validation' => 'loose'
            ],
            'system.force_lowercase_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_LOWERCASE_URLS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_lowercase_urls',
                'validation' => 'loose'
            ],
            'system.custom_base_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL',
                'name' => 'system.custom_base_url',
                'validation' => 'loose'
            ],
            'system.accounts' => [
                'type' => '_parent',
                'name' => 'system.accounts',
                'form_field' => false
            ],
            'system.accounts.type' => [
                'type' => 'hidden',
                'name' => 'system.accounts.type',
                'validation' => 'loose'
            ],
            'system.accounts.storage' => [
                'type' => 'hidden',
                'name' => 'system.accounts.storage',
                'validation' => 'loose'
            ],
            'system.strict_mode' => [
                'type' => '_parent',
                'name' => 'system.strict_mode',
                'form_field' => false
            ],
            'system.strict_mode.yaml_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.STRICT_YAML_COMPAT',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.yaml_compat',
                'validation' => 'loose'
            ],
            'system.strict_mode.twig_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.STRICT_TWIG_COMPAT',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.twig_compat',
                'validation' => 'loose'
            ],
            'plugins.breadcrumbs' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins',
                'form_field' => false
            ],
            'plugins.breadcrumbs.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.enabled',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.show_all' => [
                'type' => 'toggle',
                'label' => 'Show even with one item',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.show_all',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.include_home' => [
                'type' => 'toggle',
                'label' => 'Include Home',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.include_home',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.include_current' => [
                'type' => 'toggle',
                'label' => 'Include Current Page',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.include_current',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.icon_home' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Icon Home',
                'default' => '',
                'name' => 'plugins.breadcrumbs.icon_home',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.icon_divider_classes' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Icon Divider Classes',
                'default' => 'fa fa-angle-right',
                'name' => 'plugins.breadcrumbs.icon_divider_classes',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.link_trailing' => [
                'type' => 'toggle',
                'label' => 'Link Trailing',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.link_trailing',
                'validation' => 'strict'
            ],
            'plugins.customadmin' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    
                ]
            ],
            'plugins.git-sync' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.git-sync.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.git-sync.enabled',
                'validation' => 'strict'
            ],
            'plugins.git-sync.folders' => [
                'type' => 'selectize',
                'multiple' => true,
                'label' => 'Folders to Sync',
                'classes' => 'fancy',
                'description' => 'Removing folders after they have been synced may cause undesired results.',
                'default' => [
                    0 => 'pages'
                ],
                'options' => [
                    0 => 'pages',
                    1 => 'themes',
                    2 => 'plugins',
                    3 => 'config',
                    4 => 'data'
                ],
                'selectize' => [
                    'create' => true
                ],
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.git-sync.folders',
                'validation' => 'strict'
            ],
            'plugins.git-sync.sync' => [
                'type' => '_parent',
                'name' => 'plugins.git-sync.sync',
                'form_field' => false
            ],
            'plugins.git-sync.sync.on_save' => [
                'type' => 'toggle',
                'label' => 'Sync on Page Save',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.git-sync.sync.on_save',
                'validation' => 'strict'
            ],
            'plugins.git-sync.sync.on_delete' => [
                'type' => 'toggle',
                'label' => 'Sync on Page Delete',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.git-sync.sync.on_delete',
                'validation' => 'strict'
            ],
            'plugins.git-sync.sync.on_media' => [
                'type' => 'toggle',
                'label' => 'Sync on Media Changes',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.git-sync.sync.on_media',
                'validation' => 'strict'
            ],
            'plugins.git-sync.sync.cron_enable' => [
                'type' => 'toggle',
                'label' => 'Add Sync to Scheduler',
                'default' => 0,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.git-sync.sync.cron_enable',
                'validation' => 'strict'
            ],
            'plugins.git-sync.sync.cron_at' => [
                'type' => 'cron',
                'label' => 'Run Sync at',
                'default' => '0 12,23 * * *',
                'name' => 'plugins.git-sync.sync.cron_at',
                'validation' => 'strict'
            ],
            'plugins.git-sync.local_repository' => [
                'type' => 'hidden',
                'multiple' => false,
                'size' => 'medium',
                'label' => 'Local Repository Path',
                'name' => 'plugins.git-sync.local_repository',
                'validation' => 'strict'
            ],
            'plugins.git-sync.repository' => [
                'type' => 'text',
                'label' => 'Git Repository',
                'name' => 'plugins.git-sync.repository',
                'validation' => 'strict'
            ],
            'plugins.git-sync.user' => [
                'type' => 'text',
                'label' => 'Git User',
                'autocomplete' => 'off',
                'name' => 'plugins.git-sync.user',
                'validation' => 'strict'
            ],
            'plugins.git-sync.password' => [
                'type' => 'enc-password',
                'label' => 'Git Password or Token',
                'description' => 'Enter your password or token to encrypt and securely store it, then save the settings. It will not show up here for security reasons.',
                'autocomplete' => 'off',
                'name' => 'plugins.git-sync.password',
                'validation' => 'strict'
            ],
            'plugins.git-sync.webhook' => [
                'type' => 'text',
                'label' => 'Repository Web Hook URL',
                'data-default@' => '\\Grav\\Plugin\\GitSyncPlugin::generateRandomWebhook',
                'name' => 'plugins.git-sync.webhook',
                'validation' => 'strict'
            ],
            'plugins.git-sync.webhook_enabled' => [
                'type' => 'toggle',
                'label' => 'Web Hook Secret',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'description' => 'With this setting enabled, only authorized webhook calls will be able to trigger a synchronization (recommended)',
                'name' => 'plugins.git-sync.webhook_enabled',
                'validation' => 'strict'
            ],
            'plugins.git-sync.webhook_secret' => [
                'type' => 'text',
                'label' => 'Repository Web Hook Secret',
                'data-default@' => '\\Grav\\Plugin\\GitSyncPlugin::generateWebhookSecret',
                'description' => 'You can either use this randomly generated string or enter your own secret. <br /> **Bitbucket** does not yet support Webhook Secrets.',
                'markdown' => true,
                'name' => 'plugins.git-sync.webhook_secret',
                'validation' => 'strict'
            ],
            'plugins.git-sync.branch' => [
                'type' => 'text',
                'default' => 'master',
                'label' => 'Local Branch',
                'name' => 'plugins.git-sync.branch',
                'validation' => 'strict'
            ],
            'plugins.git-sync.remote' => [
                'type' => '_parent',
                'name' => 'plugins.git-sync.remote',
                'form_field' => false
            ],
            'plugins.git-sync.remote.name' => [
                'type' => 'text',
                'default' => 'origin',
                'label' => 'Remote Name',
                'name' => 'plugins.git-sync.remote.name',
                'validation' => 'strict'
            ],
            'plugins.git-sync.remote.branch' => [
                'type' => 'text',
                'default' => 'master',
                'label' => 'Remote Branch',
                'name' => 'plugins.git-sync.remote.branch',
                'validation' => 'strict'
            ],
            'plugins.git-sync.git' => [
                'type' => '_parent',
                'name' => 'plugins.git-sync.git',
                'form_field' => false
            ],
            'plugins.git-sync.git.author' => [
                'type' => 'select',
                'default' => 'gituser',
                'label' => 'Commits Author',
                'options' => [
                    'gituser' => 'Use Git User Name',
                    'gitsync' => 'Use GitSync Committer Name',
                    'gravuser' => 'Use Grav User Name',
                    'gravfull' => 'Use Grav User Full Name'
                ],
                'name' => 'plugins.git-sync.git.author',
                'validation' => 'strict'
            ],
            'plugins.git-sync.git.message' => [
                'type' => 'text',
                'default' => '(Grav GitSync) Automatic Commit',
                'label' => 'Commit message',
                'name' => 'plugins.git-sync.git.message',
                'validation' => 'strict'
            ],
            'plugins.git-sync.git.name' => [
                'type' => 'text',
                'default' => 'GitSync',
                'label' => 'Committer Name',
                'name' => 'plugins.git-sync.git.name',
                'validation' => 'strict'
            ],
            'plugins.git-sync.git.email' => [
                'type' => 'text',
                'default' => 'git-sync@trilby.media',
                'label' => 'Committer Email',
                'name' => 'plugins.git-sync.git.email',
                'validation' => 'strict'
            ],
            'plugins.git-sync.git.bin' => [
                'type' => 'text',
                'default' => 'git',
                'label' => 'Git Binary Path',
                'name' => 'plugins.git-sync.git.bin',
                'validation' => 'strict'
            ],
            'plugins.git-sync.logging' => [
                'type' => 'toggle',
                'default' => 0,
                'label' => 'Log Git Commands',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.git-sync.logging',
                'validation' => 'strict'
            ],
            'plugins.git-sync._wizard' => [
                'type' => 'git-wizard',
                'label' => 'Text Variable',
                'name' => 'plugins.git-sync._wizard',
                'validation' => 'strict'
            ],
            'plugins.form' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.form.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.enabled',
                'validation' => 'strict'
            ],
            'plugins.form.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.USE_BUILT_IN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.form.inline_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.USE_INLINE_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.inline_css',
                'validation' => 'strict'
            ],
            'plugins.form.refresh_prevention' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.REFRESH_PREVENTION',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.refresh_prevention',
                'validation' => 'strict'
            ],
            'plugins.form.client_side_validation' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.CLIENT_SIDE_VALIDATION',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.client_side_validation',
                'validation' => 'strict'
            ],
            'plugins.form.inline_errors' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.INLINE_ERRORS',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.inline_errors',
                'validation' => 'strict'
            ],
            'plugins.form.files' => [
                'type' => '_parent',
                'name' => 'plugins.form.files',
                'form_field' => false
            ],
            'plugins.form.files.multiple' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.ALLOW_MULTIPLE',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.multiple',
                'validation' => 'strict'
            ],
            'plugins.form.files.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_FORM.LIMIT',
                'default' => 10,
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.form.files.limit',
                'validation' => 'strict'
            ],
            'plugins.form.files.destination' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.DESTINATION',
                'default' => '@self',
                'name' => 'plugins.form.files.destination',
                'validation' => 'strict'
            ],
            'plugins.form.files.accept' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.ACCEPT',
                'classes' => 'fancy',
                'default' => [
                    0 => 'image/*'
                ],
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.form.files.accept',
                'validation' => 'strict'
            ],
            'plugins.form.files.filesize' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.FILESIZE',
                'size' => 'x-small',
                'default' => 5,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.form.files.filesize',
                'validation' => 'strict'
            ],
            'plugins.form.files.avoid_overwriting' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.AVOID_OVERWRITING',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.avoid_overwriting',
                'validation' => 'strict'
            ],
            'plugins.form.files.random_name' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.RANDOM_NAME',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.random_name',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha' => [
                'type' => '_parent',
                'name' => 'plugins.form.recaptcha',
                'form_field' => false
            ],
            'plugins.form.recaptcha.version' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.RECAPTCHA_VERSION',
                'default' => '2-checkbox',
                'options' => [
                    '2-checkbox' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_CHECKBOX',
                    '2-invisible' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_INVISIBLE',
                    3 => 'PLUGIN_FORM.RECAPTCHA_VERSION_V3_LATEST'
                ],
                'name' => 'plugins.form.recaptcha.version',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.theme' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.RECAPTCHA_THEME',
                'default' => 'light',
                'options' => [
                    'light' => 'PLUGIN_FORM.RECAPTCHA_THEME_LIGHT',
                    'dark' => 'PLUGIN_FORM.RECAPTCHA_THEME_DARK'
                ],
                'recaptcha.site_key' => NULL,
                'name' => 'plugins.form.recaptcha.theme',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.site_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.site_key',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.secret_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.secret_key',
                'validation' => 'strict'
            ],
            'plugins.admin' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.admin.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.cache_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ADMIN_CACHING',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.cache_enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.twofa_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.2FA_TITLE',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.twofa_enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.route' => [
                'type' => 'text',
                'label' => 'Administrator path',
                'size' => 'medium',
                'name' => 'plugins.admin.route',
                'validation' => 'loose'
            ],
            'plugins.admin.logo_text' => [
                'type' => 'text',
                'label' => 'Logo text',
                'size' => 'medium',
                'name' => 'plugins.admin.logo_text',
                'validation' => 'loose'
            ],
            'plugins.admin.content_padding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CONTENT_PADDING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.content_padding',
                'validation' => 'loose'
            ],
            'plugins.admin.body_classes' => [
                'type' => 'text',
                'label' => 'Body classes',
                'size' => 'medium',
                'name' => 'plugins.admin.body_classes',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar' => [
                'type' => '_parent',
                'name' => 'plugins.admin.sidebar',
                'form_field' => false
            ],
            'plugins.admin.sidebar.activate' => [
                'type' => 'select',
                'label' => 'Sidebar Activation',
                'size' => 'small',
                'default' => 'tab',
                'options' => [
                    'tab' => 'Tab',
                    'hover' => 'Hover'
                ],
                'name' => 'plugins.admin.sidebar.activate',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar.hover_delay' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'millseconds',
                'label' => 'Hover delay',
                'default' => 500,
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.sidebar.hover_delay',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar.size' => [
                'type' => 'select',
                'label' => 'Sidebar Size',
                'size' => 'medium',
                'default' => 'auto',
                'options' => [
                    'auto' => 'Automatic width',
                    'small' => 'Small width'
                ],
                'name' => 'plugins.admin.sidebar.size',
                'validation' => 'loose'
            ],
            'plugins.admin.theme' => [
                'type' => 'hidden',
                'label' => 'Theme',
                'default' => 'grav',
                'name' => 'plugins.admin.theme',
                'validation' => 'loose'
            ],
            'plugins.admin.edit_mode' => [
                'type' => 'select',
                'label' => 'Edit mode',
                'size' => 'small',
                'default' => 'normal',
                'options' => [
                    'normal' => 'Normal',
                    'expert' => 'Expert'
                ],
                'name' => 'plugins.admin.edit_mode',
                'validation' => 'loose'
            ],
            'plugins.admin.frontend_preview_target' => [
                'type' => 'select',
                'label' => 'Preview pages target',
                'size' => 'medium',
                'default' => 'inline',
                'options' => [
                    'inline' => 'Inline in Admin',
                    '_blank' => 'New tab',
                    '_self' => 'Current tab'
                ],
                'name' => 'plugins.admin.frontend_preview_target',
                'validation' => 'loose'
            ],
            'plugins.admin.pages' => [
                'type' => '_parent',
                'name' => 'plugins.admin.pages',
                'form_field' => false
            ],
            'plugins.admin.pages.show_parents' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Parent dropdown',
                'highlight' => 1,
                'options' => [
                    'both' => 'Show slug and folder',
                    'folder' => 'Show folder',
                    'fullpath' => 'Show fullpath'
                ],
                'name' => 'plugins.admin.pages.show_parents',
                'validation' => 'loose'
            ],
            'plugins.admin.pages.parents_levels' => [
                'type' => 'text',
                'label' => 'Parents Levels',
                'size' => 'small',
                'name' => 'plugins.admin.pages.parents_levels',
                'validation' => 'loose'
            ],
            'plugins.admin.pages.show_modular' => [
                'type' => 'toggle',
                'label' => 'Modular parents',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.pages.show_modular',
                'validation' => 'loose'
            ],
            'plugins.admin.google_fonts' => [
                'type' => 'toggle',
                'label' => 'Use Google Fonts',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.google_fonts',
                'validation' => 'loose'
            ],
            'plugins.admin.show_beta_msg' => [
                'type' => 'hidden',
                'name' => 'plugins.admin.show_beta_msg',
                'validation' => 'loose'
            ],
            'plugins.admin.show_github_msg' => [
                'type' => 'toggle',
                'label' => 'Show GitHub Link',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.show_github_msg',
                'validation' => 'loose'
            ],
            'plugins.admin.pages_list_display_field' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Pages List Display Field',
                'name' => 'plugins.admin.pages_list_display_field',
                'validation' => 'loose'
            ],
            'plugins.admin.enable_auto_updates_check' => [
                'type' => 'toggle',
                'label' => 'Automatically check for updates',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enable_auto_updates_check',
                'validation' => 'loose'
            ],
            'plugins.admin.session' => [
                'type' => '_parent',
                'name' => 'plugins.admin.session',
                'form_field' => false
            ],
            'plugins.admin.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Session Timeout',
                'append' => 'secs',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.session.timeout',
                'validation' => 'loose'
            ],
            'plugins.admin.warnings' => [
                'type' => '_parent',
                'name' => 'plugins.admin.warnings',
                'form_field' => false
            ],
            'plugins.admin.warnings.delete_page' => [
                'type' => 'toggle',
                'label' => 'Warn on page delete',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.warnings.delete_page',
                'validation' => 'loose'
            ],
            'plugins.admin.hide_page_types' => [
                'type' => 'array',
                'label' => 'Hide page types in Admin',
                'value_only' => true,
                'name' => 'plugins.admin.hide_page_types',
                'validation' => 'loose'
            ],
            'plugins.admin.hide_modular_page_types' => [
                'type' => 'array',
                'label' => 'Hide modular page types in Admin',
                'value_only' => true,
                'name' => 'plugins.admin.hide_modular_page_types',
                'validation' => 'loose'
            ],
            'plugins.admin.log_viewer_files' => [
                'type' => 'selectize',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.LOG_VIEWER_FILES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.admin.log_viewer_files',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia' => [
                'type' => '_parent',
                'name' => 'plugins.admin.pagemedia',
                'form_field' => false
            ],
            'plugins.admin.pagemedia.resize_width' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'pixels',
                'label' => 'Resize Width',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.resize_width',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.resize_height' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'pixels',
                'label' => 'Resize Height',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.resize_height',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.res_min_width' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'pixels',
                'label' => 'Resolution Min Width',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.res_min_width',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.res_min_height' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'pixels',
                'label' => 'Resolution Min Height',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.res_min_height',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.res_max_width' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'pixels',
                'label' => 'Resolution Max Width',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.res_max_width',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.res_max_height' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'pixels',
                'label' => 'Resolution Max Height',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.res_max_height',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.resize_quality' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => '0...1',
                'label' => 'Resize Quality',
                'default' => 0.8000000000000000444089209850062616169452667236328125,
                'validate' => [
                    'type' => 'number',
                    'step' => 0.01000000000000000020816681711721685132943093776702880859375
                ],
                'name' => 'plugins.admin.pagemedia.resize_quality',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets' => [
                'type' => '_parent',
                'name' => 'plugins.admin.widgets',
                'form_field' => false
            ],
            'plugins.admin.widgets.dashboard-maintenance' => [
                'type' => 'toggle',
                'label' => 'Maintenance Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-maintenance',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-statistics' => [
                'type' => 'toggle',
                'label' => 'Statistics Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-statistics',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-notifications' => [
                'type' => 'toggle',
                'label' => 'Notifications Feed Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-notifications',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-feed' => [
                'type' => 'toggle',
                'label' => 'News Feed Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-feed',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-pages' => [
                'type' => 'toggle',
                'label' => 'Latest Pages Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-pages',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications' => [
                'type' => '_parent',
                'name' => 'plugins.admin.notifications',
                'form_field' => false
            ],
            'plugins.admin.notifications.feed' => [
                'type' => 'toggle',
                'label' => 'Feed Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.feed',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.dashboard' => [
                'type' => 'toggle',
                'label' => 'Dashboard Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.dashboard',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.plugins' => [
                'type' => 'toggle',
                'label' => 'Plugins Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.plugins',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.themes' => [
                'type' => 'toggle',
                'label' => 'Themes Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.themes',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity',
                'form_field' => false
            ],
            'plugins.admin.popularity.enabled' => [
                'type' => 'toggle',
                'label' => 'Visitor tracking',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.popularity.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.dashboard' => [
                'type' => '_parent',
                'name' => 'plugins.admin.dashboard',
                'form_field' => false
            ],
            'plugins.admin.dashboard.days_of_stats' => [
                'type' => 'text',
                'label' => 'Days of stats',
                'append' => 'days',
                'size' => 'x-small',
                'default' => 7,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.admin.dashboard.days_of_stats',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.ignore' => [
                'type' => 'array',
                'label' => 'Ignore',
                'size' => 'large',
                'default' => [
                    0 => '/test*',
                    1 => '/modular'
                ],
                'value_only' => true,
                'name' => 'plugins.admin.popularity.ignore',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity.history',
                'form_field' => false
            ],
            'plugins.admin.popularity.history.daily' => [
                'type' => 'hidden',
                'label' => 'Daily history',
                'default' => 30,
                'name' => 'plugins.admin.popularity.history.daily',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history.monthly' => [
                'type' => 'hidden',
                'label' => 'Monthly history',
                'default' => 12,
                'name' => 'plugins.admin.popularity.history.monthly',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history.visitors' => [
                'type' => 'hidden',
                'label' => 'Visitors history',
                'default' => 20,
                'name' => 'plugins.admin.popularity.history.visitors',
                'validation' => 'loose'
            ],
            'plugins.taxonomylist' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.taxonomylist.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.taxonomylist.enabled',
                'validation' => 'strict'
            ],
            'plugins.taxonomylist.route' => [
                'type' => 'text',
                'label' => 'Route to blog',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.taxonomylist.route',
                'validation' => 'strict'
            ],
            'plugins.markdown-fontawesome' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.markdown-fontawesome.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.markdown-fontawesome.enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.shortcode-core.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Enabled',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.active' => [
                'type' => 'toggle',
                'label' => 'Activated',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.active',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.active_admin' => [
                'type' => 'toggle',
                'label' => 'Activated in Admin',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.active_admin',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.admin_pages_only' => [
                'type' => 'toggle',
                'label' => 'Admin Real-Pages Only',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.admin_pages_only',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.parser' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Processor',
                'options' => [
                    'wordpress' => 'WordpressParser',
                    'regex' => 'RegexParser',
                    'regular' => 'RegularParser'
                ],
                'name' => 'plugins.shortcode-core.parser',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.custom_shortcodes' => [
                'type' => 'text',
                'label' => 'Custom Shortcodes',
                'size' => 'large',
                'name' => 'plugins.shortcode-core.custom_shortcodes',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome' => [
                'type' => '_parent',
                'name' => 'plugins.shortcode-core.fontawesome',
                'form_field' => false
            ],
            'plugins.shortcode-core.fontawesome.load' => [
                'type' => 'toggle',
                'label' => 'Load Fontawesome Library',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.fontawesome.load',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome.url' => [
                'type' => 'text',
                'label' => 'Fontawesome URL',
                'size' => 'large',
                'name' => 'plugins.shortcode-core.fontawesome.url',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome.v5' => [
                'type' => 'toggle',
                'label' => 'Use Fontawesome Version 5',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.fontawesome.v5',
                'validation' => 'strict'
            ],
            'plugins.jscomments' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.jscomments.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.enabled',
                'validation' => 'strict'
            ],
            'plugins.jscomments.active' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PLUGIN_ACTIVE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.active',
                'validation' => 'strict'
            ],
            'plugins.jscomments.provider' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.TITLE',
                'data-options@' => '\\Grav\\Plugin\\JSCommentsPlugin::getProviders',
                'options' => [
                    '' => 'PLUGINS.JS_COMMENTS.NONE_SELECTED'
                ],
                'default' => '',
                'validate' => [
                    'required' => true,
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.provider',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers',
                'form_field' => false
            ],
            'plugins.jscomments.providers.discourse' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.discourse',
                'form_field' => false
            ],
            'plugins.jscomments.providers.discourse.host' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISCOURSE.FIELDS.HOST',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.discourse.host',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.disqus' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.disqus',
                'form_field' => false
            ],
            'plugins.jscomments.providers.disqus.shortname' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.SHORTNAME',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.disqus.shortname',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.disqus.show_count' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.COUNT',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.disqus.show_count',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.disqus.language' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.DEFAULT_LANGUAGE',
                'size' => 'x-small',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.disqus.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.facebook',
                'form_field' => false
            ],
            'plugins.jscomments.providers.facebook.app_id' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.APPID',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.app_id',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.num_posts' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.NUM_POSTS',
                'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.NUM_POSTS_APPEND',
                'validate' => [
                    'type' => 'int',
                    'min' => 1
                ],
                'name' => 'plugins.jscomments.providers.facebook.num_posts',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.colorscheme' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.TITLE',
                'default' => 'light',
                'options' => [
                    'light' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.OPTIONS.LIGHT',
                    'dark' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.OPTIONS.DARK'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.colorscheme',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.order_by' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.TITLE',
                'default' => 'social',
                'options' => [
                    'social' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.SOCIAL',
                    'reverse_time' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.REVERSE_TIME',
                    'time' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.TIME'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.order_by',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.language' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.LANGUAGE',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.width' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.WIDTH',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.width',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.googleplus' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.googleplus',
                'form_field' => false
            ],
            'plugins.jscomments.providers.googleplus.show_count' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.COUNT',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.googleplus.show_count',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.googleplus.language' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.DEFAULT_LANGUAGE',
                'size' => 'x-small',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.googleplus.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.googleplus.width' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.WIDTH',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.googleplus.width',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.intensedebate' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.intensedebate',
                'form_field' => false
            ],
            'plugins.jscomments.providers.intensedebate.account_number' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.INTENSEDEBATE.FIELDS.ACCOUNT_NUMBER',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.intensedebate.account_number',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.isso',
                'form_field' => false
            ],
            'plugins.jscomments.providers.isso.host' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.HOST',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.isso.host',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.builtin_css' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.isso.builtin_css',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.language' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.DEFAULT_LANGUAGE',
                'size' => 'x-small',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.isso.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.reply_to_self' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REPLY_TO_SELF',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.isso.reply_to_self',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.require' => [
                'type' => 'checkboxes',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.LABEL',
                'options' => [
                    'author' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.AUTHOR',
                    'email' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.EMAIL'
                ],
                'default' => [
                    'author' => true,
                    'email' => true
                ],
                'use' => 'keys',
                'name' => 'plugins.jscomments.providers.isso.require',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.comments' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.isso.comments',
                'form_field' => false
            ],
            'plugins.jscomments.providers.isso.comments.number' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.NUMBER_LABEL',
                'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                'default' => 10,
                'validate' => [
                    'min' => -1
                ],
                'name' => 'plugins.jscomments.providers.isso.comments.number',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.comments.nested_number' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.NESTED_LABEL',
                'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                'default' => 5,
                'validate' => [
                    'min' => -1
                ],
                'name' => 'plugins.jscomments.providers.isso.comments.nested_number',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.comments.reveal' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.REVEAL_LABEL',
                'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                'default' => 5,
                'validate' => [
                    'min' => -1
                ],
                'name' => 'plugins.jscomments.providers.isso.comments.reveal',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.avatar' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.isso.avatar',
                'form_field' => false
            ],
            'plugins.jscomments.providers.isso.avatar.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.LABEL',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.isso.avatar.enabled',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.avatar.background' => [
                'type' => 'colorpicker',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.BG_COLOR',
                'default' => '',
                'name' => 'plugins.jscomments.providers.isso.avatar.background',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.avatar.foreground' => [
                'type' => 'colorpicker',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.FG_COLOR',
                'default' => '',
                'name' => 'plugins.jscomments.providers.isso.avatar.foreground',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.vote' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.isso.vote',
                'form_field' => false
            ],
            'plugins.jscomments.providers.isso.vote.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LABEL',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.isso.vote.enabled',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.vote.levels' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LEVELS_LABEL',
                'description' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LEVELS_DESCRIPTION',
                'default' => '',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.isso.vote.levels',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.muut',
                'form_field' => false
            ],
            'plugins.jscomments.providers.muut.forum' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.FORUM',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.muut.forum',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.channel' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.CHANNEL',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.muut.channel',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.widget' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.WIDGET',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.widget',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.show_online' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHOW_ONLINE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.show_online',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.show_title' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHOW_TITLE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.show_title',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.upload' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.UPLOAD',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.upload',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.share' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHARE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.share',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.language' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.LANGUAGE',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.muut.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.hypercomments' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.hypercomments',
                'form_field' => false
            ],
            'plugins.jscomments.providers.hypercomments.widget_id' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.FIELDS.WIDGET_ID',
                'size' => 'x-small',
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.jscomments.providers.hypercomments.widget_id',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.hypercomments.social' => [
                'type' => 'selectize',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.FIELDS.SOCIAL',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.jscomments.providers.hypercomments.social',
                'validation' => 'strict'
            ],
            'plugins.email' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.email.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.enabled',
                'validation' => 'loose'
            ],
            'plugins.email.mailer' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer',
                'form_field' => false
            ],
            'plugins.email.mailer.engine' => [
                'type' => 'select',
                'label' => 'PLUGIN_EMAIL.MAIL_ENGINE',
                'size' => 'medium',
                'options' => [
                    'none' => 'PLUGIN_ADMIN.DISABLED',
                    'smtp' => 'SMTP',
                    'sendmail' => 'Sendmail'
                ],
                'name' => 'plugins.email.mailer.engine',
                'validation' => 'loose'
            ],
            'plugins.email.content_type' => [
                'type' => 'select',
                'label' => 'PLUGIN_EMAIL.CONTENT_TYPE',
                'size' => 'medium',
                'default' => 'text/html',
                'options' => [
                    'text/plain' => 'PLUGIN_EMAIL.CONTENT_TYPE_PLAIN_TEXT',
                    'text/html' => 'HTML'
                ],
                'name' => 'plugins.email.content_type',
                'validation' => 'loose'
            ],
            'plugins.email.charset' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.CHARSET',
                'name' => 'plugins.email.charset',
                'validation' => 'loose'
            ],
            'plugins.email.from' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_FORM',
                'validate' => [
                    'required' => true,
                    'type' => 'email'
                ],
                'name' => 'plugins.email.from',
                'validation' => 'loose'
            ],
            'plugins.email.from_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_FROM_NAME',
                'name' => 'plugins.email.from_name',
                'validation' => 'loose'
            ],
            'plugins.email.to' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_TO',
                'multiple' => true,
                'validate' => [
                    'required' => true,
                    'type' => 'email'
                ],
                'name' => 'plugins.email.to',
                'validation' => 'loose'
            ],
            'plugins.email.to_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_TO_NAME',
                'name' => 'plugins.email.to_name',
                'validation' => 'loose'
            ],
            'plugins.email.cc' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_CC',
                'multiple' => true,
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'plugins.email.cc',
                'validation' => 'loose'
            ],
            'plugins.email.cc_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_CC_NAME',
                'name' => 'plugins.email.cc_name',
                'validation' => 'loose'
            ],
            'plugins.email.bcc' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_BCC',
                'multiple' => true,
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'plugins.email.bcc',
                'validation' => 'loose'
            ],
            'plugins.email.reply_to' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_REPLY_TO',
                'multiple' => true,
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'plugins.email.reply_to',
                'validation' => 'loose'
            ],
            'plugins.email.reply_to_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_REPLY_TO_NAME',
                'name' => 'plugins.email.reply_to_name',
                'validation' => 'loose'
            ],
            'plugins.email.body' => [
                'type' => 'textarea',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.EMAIL_BODY',
                'name' => 'plugins.email.body',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.smtp',
                'form_field' => false
            ],
            'plugins.email.mailer.smtp.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.SMTP_SERVER',
                'name' => 'plugins.email.mailer.smtp.server',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_EMAIL.SMTP_PORT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 65535
                ],
                'name' => 'plugins.email.mailer.smtp.port',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.encryption' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.SMTP_ENCRYPTION',
                'options' => [
                    'none' => 'PLUGIN_EMAIL.SMTP_ENCRYPTION_NONE',
                    'ssl' => 'SSL',
                    'tls' => 'TLS'
                ],
                'name' => 'plugins.email.mailer.smtp.encryption',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.user' => [
                'type' => 'text',
                'size' => 'medium',
                'autocomplete' => 'nope',
                'label' => 'PLUGIN_EMAIL.SMTP_LOGIN_NAME',
                'name' => 'plugins.email.mailer.smtp.user',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.password' => [
                'type' => 'password',
                'size' => 'medium',
                'autocomplete' => 'nope',
                'label' => 'PLUGIN_EMAIL.SMTP_PASSWORD',
                'name' => 'plugins.email.mailer.smtp.password',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.sendmail' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.sendmail',
                'form_field' => false
            ],
            'plugins.email.mailer.sendmail.bin' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.PATH_TO_SENDMAIL',
                'name' => 'plugins.email.mailer.sendmail.bin',
                'validation' => 'loose'
            ],
            'plugins.email.queue' => [
                'type' => '_parent',
                'name' => 'plugins.email.queue',
                'form_field' => false
            ],
            'plugins.email.queue.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_EMAIL.QUEUE_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.queue.enabled',
                'validation' => 'loose'
            ],
            'plugins.email.queue.flush_frequency' => [
                'type' => 'cron',
                'label' => 'PLUGIN_EMAIL.QUEUE_FLUSH_FREQUENCY',
                'size' => 'medium',
                'default' => '* * * * *',
                'name' => 'plugins.email.queue.flush_frequency',
                'validation' => 'loose'
            ],
            'plugins.email.queue.flush_msg_limit' => [
                'type' => 'number',
                'label' => 'PLUGIN_EMAIL.QUEUE_FLUSH_MSG_LIMIT',
                'size' => 'x-small',
                'append' => 'PLUGIN_EMAIL.QUEUE_FLUSH_MSG_LIMIT_APPEND',
                'name' => 'plugins.email.queue.flush_msg_limit',
                'validation' => 'loose'
            ],
            'plugins.email.queue.flush_time_limit' => [
                'type' => 'number',
                'label' => 'PLUGIN_EMAIL.QUEUE_FLUSH_TIME_LIMIT',
                'size' => 'x-small',
                'append' => 'PLUGIN_EMAIL.QUEUE_FLUSH_TIME_LIMIT_APPEND',
                'name' => 'plugins.email.queue.flush_time_limit',
                'validation' => 'loose'
            ],
            'plugins.email.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_EMAIL.DEBUG',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.debug',
                'validation' => 'loose'
            ],
            'plugins.image-captions' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.image-captions.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.image-captions.enabled',
                'validation' => 'strict'
            ],
            'plugins.image-captions.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Built-in CSS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.image-captions.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.image-captions.entire_page' => [
                'type' => 'toggle',
                'label' => 'Scan the entire page',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.image-captions.entire_page',
                'validation' => 'strict'
            ],
            'plugins.image-captions.scope' => [
                'type' => 'text',
                'label' => 'Scope',
                'name' => 'plugins.image-captions.scope',
                'validation' => 'strict'
            ],
            'plugins.image-captions.figure_class' => [
                'type' => 'text',
                'label' => 'Figure class',
                'name' => 'plugins.image-captions.figure_class',
                'validation' => 'strict'
            ],
            'plugins.image-captions.figcaption_class' => [
                'type' => 'text',
                'label' => 'Figcaption class',
                'name' => 'plugins.image-captions.figcaption_class',
                'validation' => 'strict'
            ],
            'plugins.comments' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.comments.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.comments.enabled',
                'validation' => 'loose'
            ],
            'plugins.login' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.login.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_LOGIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.built_in_css',
                'validation' => 'loose'
            ],
            'plugins.login.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE',
                'name' => 'plugins.login.route',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_after_login' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN',
                'name' => 'plugins.login.redirect_after_login',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_after_logout' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGOUT',
                'name' => 'plugins.login.redirect_after_logout',
                'validation' => 'loose'
            ],
            'plugins.login.route_forgot' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_FORGOT',
                'name' => 'plugins.login.route_forgot',
                'validation' => 'loose'
            ],
            'plugins.login.route_reset' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_RESET',
                'name' => 'plugins.login.route_reset',
                'validation' => 'loose'
            ],
            'plugins.login.route_profile' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_PROFILE',
                'name' => 'plugins.login.route_profile',
                'validation' => 'loose'
            ],
            'plugins.login.parent_acl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.USE_PARENT_ACL_LABEL',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.parent_acl',
                'validation' => 'loose'
            ],
            'plugins.login.dynamic_page_visibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.DYNAMIC_VISIBILITY',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.dynamic_page_visibility',
                'validation' => 'loose'
            ],
            'plugins.login.twofa_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.2FA_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.twofa_enabled',
                'validation' => 'loose'
            ],
            'plugins.login.protect_protected_page_media' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_LABEL',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.protect_protected_page_media',
                'validation' => 'loose'
            ],
            'plugins.login.route_activate' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_ACTIVATE',
                'name' => 'plugins.login.route_activate',
                'validation' => 'loose'
            ],
            'plugins.login.route_register' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_REGISTER',
                'name' => 'plugins.login.route_register',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration',
                'form_field' => false
            ],
            'plugins.login.user_registration.redirect_after_registration' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION',
                'name' => 'plugins.login.user_registration.redirect_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.redirect_after_activation' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION',
                'name' => 'plugins.login.user_registration.redirect_after_activation',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme' => [
                'type' => '_parent',
                'name' => 'plugins.login.rememberme',
                'form_field' => false
            ],
            'plugins.login.rememberme.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.rememberme.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'default' => 604800,
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.rememberme.timeout',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'plugins.login.rememberme.name',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.fields' => [
                'type' => 'array',
                'value_only' => true,
                'label' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                'name' => 'plugins.login.user_registration.fields',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.default_values' => [
                'type' => 'array',
                'label' => 'PLUGIN_LOGIN.DEFAULT_VALUES',
                'name' => 'plugins.login.user_registration.default_values',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.groups' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.GROUPS',
                '@data-options' => '\\Grav\\User\\Groups::groups',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.login.user_registration.groups',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.access' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.access',
                'form_field' => false
            ],
            'plugins.login.user_registration.access.site' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.SITE_ACCESS',
                'multiple' => false,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.login.user_registration.access.site',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.options',
                'form_field' => false
            ],
            'plugins.login.user_registration.options.validate_password1_and_password2' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.set_user_disabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SET_USER_DISABLED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.set_user_disabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.login_after_registration' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.login_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_activation_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_activation_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.manually_enable' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.MANUALLY_ENABLE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.manually_enable',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_notification_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_notification_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_welcome_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_welcome_email',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT',
                'append' => 'PLUGIN_LOGIN.RESETS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_pw_resets_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_pw_resets_interval',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_login_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_login_interval',
                'validation' => 'loose'
            ],
            'plugins.login.ipv6_subnet_size' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.IPV6_SUBNET_SIZE',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.ipv6_subnet_size',
                'validation' => 'loose'
            ],
            'plugins.presentation' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.presentation.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.enabled',
                'validation' => 'strict'
            ],
            'plugins.presentation.theme' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.THEME.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.THEME.DESCRIPTION',
                'data-options@' => '\\Grav\\Plugin\\PresentationPlugin::getRevealThemes',
                'name' => 'plugins.presentation.theme',
                'validation' => 'strict'
            ],
            'plugins.presentation.order' => [
                'type' => '_parent',
                'name' => 'plugins.presentation.order',
                'form_field' => false
            ],
            'plugins.presentation.order.by' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.LABEL',
                'options' => [
                    'default' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.OPTIONS.DEFAULT',
                    'folder' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.OPTIONS.FOLDER',
                    'title' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.OPTIONS.TITLE',
                    'date' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.OPTIONS.DATE'
                ],
                'name' => 'plugins.presentation.order.by',
                'validation' => 'strict'
            ],
            'plugins.presentation.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.DIR.LABEL',
                'options' => [
                    'asc' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.DIR.OPTIONS.ASC',
                    'desc' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.DIR.OPTIONS.DESC'
                ],
                'name' => 'plugins.presentation.order.dir',
                'validation' => 'strict'
            ],
            'plugins.presentation.all_assets' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.ALL.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.ALL.DESCRIPTION',
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.all_assets',
                'validation' => 'strict'
            ],
            'plugins.presentation.theme_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.THEME_CSS.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.THEME_CSS.DESCRIPTION',
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.theme_css',
                'validation' => 'strict'
            ],
            'plugins.presentation.builtin_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.BUILTIN_CSS.LABEL',
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.builtin_css',
                'validation' => 'strict'
            ],
            'plugins.presentation.builtin_js' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.BUILTIN_JS.LABEL',
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.builtin_js',
                'validation' => 'strict'
            ],
            'plugins.presentation.textsizing' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TEXTSIZING.LABEL',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.textsizing',
                'validation' => 'strict'
            ],
            'plugins.presentation.breakpoints' => [
                'type' => 'array',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.BREAKPOINTS.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.BREAKPOINTS.DESCRIPTION',
                'required' => true,
                'name' => 'plugins.presentation.breakpoints',
                'validation' => 'strict'
            ],
            'plugins.presentation.textsize' => [
                'type' => '_parent',
                'name' => 'plugins.presentation.textsize',
                'form_field' => false
            ],
            'plugins.presentation.textsize.scale' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.SCALE.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.SCALE.DESCRIPTION',
                'data-options@' => '\\Grav\\Plugin\\PresentationPlugin::getModularScaleBlueprintOptions',
                'name' => 'plugins.presentation.textsize.scale',
                'validation' => 'strict'
            ],
            'plugins.presentation.textsize.modifier' => [
                'type' => 'number',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.MODIFIER.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.MODIFIER.DESCRIPTION',
                'default' => 1,
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.05000000000000000277555756156289135105907917022705078125
                ],
                'name' => 'plugins.presentation.textsize.modifier',
                'validation' => 'strict'
            ],
            'plugins.presentation.style' => [
                'type' => '_parent',
                'name' => 'plugins.presentation.style',
                'form_field' => false
            ],
            'plugins.presentation.style.header-font-family' => [
                'type' => 'text',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER.DESCRIPTION',
                'name' => 'plugins.presentation.style.header-font-family',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.header-color' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER_COLOR.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER_COLOR.DESCRIPTION',
                'name' => 'plugins.presentation.style.header-color',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.block-font-family' => [
                'type' => 'text',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK.DESCRIPTION',
                'name' => 'plugins.presentation.style.block-font-family',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.block-color' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK_COLOR.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK_COLOR.DESCRIPTION',
                'name' => 'plugins.presentation.style.block-color',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.background-color' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-COLOR.LABEL',
                'name' => 'plugins.presentation.style.background-color',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.background-image' => [
                'type' => 'filepicker',
                'folder' => 'user/pages/images',
                'preview_images' => true,
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-IMAGE.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-IMAGE.DESCRIPTION',
                'accept' => [
                    0 => '.png',
                    1 => '.jpg',
                    2 => '.gif',
                    3 => 'image/*'
                ],
                'name' => 'plugins.presentation.style.background-image',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.background-size' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.LABEL',
                'options' => [
                    '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                    'auto' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.AUTO',
                    'cover' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.COVER',
                    'contain' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.CONTAIN',
                    'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                    'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                ],
                'name' => 'plugins.presentation.style.background-size',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.background-repeat' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.LABEL',
                'options' => [
                    '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                    'no-repeat' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.NO-REPEAT',
                    'repeat' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT',
                    'repeat-x' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT-X',
                    'repeat-y' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT-Y',
                    'space' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.SPACE',
                    'round' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.ROUND',
                    'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                    'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                ],
                'name' => 'plugins.presentation.style.background-repeat',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.justify-content' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.LABEL',
                'options' => [
                    '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                    'center' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.CENTER',
                    'start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.START',
                    'end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.END',
                    'flex-start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.FLEX-START',
                    'flex-end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.FLEX-END',
                    'left' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.LEFT',
                    'right' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.RIGHT',
                    'normal' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.NORMAL',
                    'space-between' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.SPACE-BETWEEN',
                    'space-around' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.SPACE-AROUND',
                    'space-evenly' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.SPACE-EVENLY',
                    'stretch' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.STRETCH',
                    'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                    'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                ],
                'name' => 'plugins.presentation.style.justify-content',
                'validation' => 'strict'
            ],
            'plugins.presentation.style.align-items' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.LABEL',
                'options' => [
                    '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                    'center' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.CENTER',
                    'start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.START',
                    'end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.END',
                    'flex-start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.FLEX-START',
                    'flex-end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.FLEX-END',
                    'self-start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.SELF-START',
                    'self-end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.SELF-END',
                    'normal' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.NORMAL',
                    'baseline' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.BASELINE',
                    'first baseline' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.FIRST-BASELINE',
                    'last baseline' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.LAST-BASELINE',
                    'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                    'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                ],
                'name' => 'plugins.presentation.style.align-items',
                'validation' => 'strict'
            ],
            'plugins.presentation.horizontal' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.DESCRIPTION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.OPTIONS.HORIZONTAL',
                    0 => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.OPTIONS.VERTICAL'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.horizontal',
                'validation' => 'strict'
            ],
            'plugins.presentation.admin_async_save' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.ASYNC.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.ASYNC.DESCRIPTION',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.admin_async_save',
                'validation' => 'strict'
            ],
            'plugins.presentation.admin_async_save_typing' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.TYPING.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.TYPING.DESCRIPTION',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.admin_async_save_typing',
                'validation' => 'strict'
            ],
            'plugins.presentation.footer' => [
                'type' => 'text',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.FOOTER.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.FOOTER.DESCRIPTION',
                'name' => 'plugins.presentation.footer',
                'validation' => 'strict'
            ],
            'plugins.presentation.shortcodes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODES.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODES.DESCRIPTION',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.shortcodes',
                'validation' => 'strict'
            ],
            'plugins.presentation.shortcode_classes' => [
                'type' => 'text',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_CLASSES.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_CLASSES.DESCRIPTION',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.presentation.shortcode_classes',
                'validation' => 'strict'
            ],
            'plugins.presentation.transition' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TRANSITION.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TRANSITION.DESCRIPTION',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.transition',
                'validation' => 'strict'
            ],
            'plugins.presentation.unwrap_images' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.UNWRAP_IMAGES.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.UNWRAP_IMAGES.DESCRIPTION',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.unwrap_images',
                'validation' => 'strict'
            ],
            'plugins.presentation.content' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.CONTENT.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.CONTENT.DESCRIPTION',
                'data-options@' => [
                    0 => '\\Grav\\Plugin\\PresentationPlugin::getClassNamesBlueprintOptions',
                    1 => 'Content'
                ],
                'name' => 'plugins.presentation.content',
                'validation' => 'strict'
            ],
            'plugins.presentation.parser' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.PARSER.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.PARSER.DESCRIPTION',
                'data-options@' => [
                    0 => '\\Grav\\Plugin\\PresentationPlugin::getClassNamesBlueprintOptions',
                    1 => 'Parser'
                ],
                'name' => 'plugins.presentation.parser',
                'validation' => 'strict'
            ],
            'plugins.presentation.styles' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.STYLES.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.STYLES.DESCRIPTION',
                'data-options@' => [
                    0 => '\\Grav\\Plugin\\PresentationPlugin::getClassNamesBlueprintOptions',
                    1 => 'Transport'
                ],
                'name' => 'plugins.presentation.styles',
                'validation' => 'strict'
            ],
            'plugins.presentation.sync' => [
                'type' => 'select',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.DESCRIPTION',
                'options' => [
                    'none' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.OPTIONS.NONE',
                    'browser' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.OPTIONS.BROWSER',
                    'api' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.OPTIONS.API'
                ],
                'name' => 'plugins.presentation.sync',
                'validation' => 'strict'
            ],
            'plugins.presentation.api_route' => [
                'type' => 'text',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.API_ROUTE.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.API_ROUTE.DESCRIPTION',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.presentation.api_route',
                'validation' => 'strict'
            ],
            'plugins.presentation.poll_timeout' => [
                'type' => 'range',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.POLL_TIMEOUT.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.POLL_TIMEOUT.DESCRIPTION',
                'validate' => [
                    'type' => 'int',
                    'min' => 1000,
                    'max' => 10000,
                    'step' => 1000
                ],
                'name' => 'plugins.presentation.poll_timeout',
                'validation' => 'strict'
            ],
            'plugins.presentation.poll_retry_limit' => [
                'type' => 'number',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.POLL_RETRY_LIMIT.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.POLL_RETRY_LIMIT.DESCRIPTION',
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 10,
                    'step' => 1
                ],
                'name' => 'plugins.presentation.poll_retry_limit',
                'validation' => 'strict'
            ],
            'plugins.presentation.token_auth' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TOKEN_AUTH.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TOKEN_AUTH.DESCRIPTION',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation.token_auth',
                'validation' => 'strict'
            ],
            'plugins.presentation.token' => [
                'type' => 'text',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TOKEN.LABEL',
                'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TOKEN.DESCRIPTION',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.presentation.token',
                'validation' => 'strict'
            ],
            'plugins.presentation.options' => [
                'type' => 'array',
                'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.REVEAL.LABEL',
                'required' => false,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.presentation.options',
                'validation' => 'strict'
            ],
            'plugins.presentation-deckset' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.presentation-deckset.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.presentation-deckset.enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-ui' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.shortcode-ui.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Enabled',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-ui.enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-ui.theme' => [
                'type' => '_parent',
                'name' => 'plugins.shortcode-ui.theme',
                'form_field' => false
            ],
            'plugins.shortcode-ui.theme.tabs' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Tabs Theme',
                'default' => 'default',
                'options' => [
                    'default' => 'Default',
                    'lite' => 'Lite',
                    'badges' => 'Badges'
                ],
                'name' => 'plugins.shortcode-ui.theme.tabs',
                'validation' => 'strict'
            ],
            'plugins.tntsearch' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.tntsearch.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.enabled',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.index_status' => [
                'type' => 'indexstatus',
                'label' => 'Search Index Status',
                'name' => 'plugins.tntsearch.index_status',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.enable_admin_page_events' => [
                'type' => 'toggle',
                'label' => 'Enable Admin Page Events',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.enable_admin_page_events',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.scheduled_index' => [
                'type' => '_parent',
                'name' => 'plugins.tntsearch.scheduled_index',
                'form_field' => false
            ],
            'plugins.tntsearch.scheduled_index.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Index Scheduled Job',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.scheduled_index.enabled',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.scheduled_index.at' => [
                'type' => 'cron',
                'label' => 'Scheduled Job Frequency',
                'size' => 'medium',
                'default' => '0 */3 * * *',
                'name' => 'plugins.tntsearch.scheduled_index.at',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.scheduled_index.logs' => [
                'type' => 'text',
                'label' => 'Scheduled Job Log File',
                'size' => 'medium',
                'name' => 'plugins.tntsearch.scheduled_index.logs',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Built-in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.built_in_js' => [
                'type' => 'toggle',
                'label' => 'Built-in Javascript',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.built_in_js',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.built_in_search_page' => [
                'type' => 'toggle',
                'label' => 'Built-in Search Page',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.built_in_search_page',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.search_route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Search Page Route',
                'name' => 'plugins.tntsearch.search_route',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.query_route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Query Route',
                'name' => 'plugins.tntsearch.query_route',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.search_type' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Search Type',
                'default' => 'auto',
                'options' => [
                    'auto' => 'Auto',
                    'basic' => 'Basic',
                    'boolean' => 'Boolean'
                ],
                'name' => 'plugins.tntsearch.search_type',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.fuzzy' => [
                'type' => 'toggle',
                'label' => 'Fuzzy Search',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.fuzzy',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.phrases' => [
                'type' => 'toggle',
                'label' => 'Match quoted phrases',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.phrases',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.stemmer' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Stemmer',
                'options' => [
                    'default' => 'Default',
                    'arabic' => 'Arabic',
                    'german' => 'German',
                    'italian' => 'Italian',
                    'porter' => 'Porter',
                    'russian' => 'Russian',
                    'ukrainian' => 'Ukrainian'
                ],
                'name' => 'plugins.tntsearch.stemmer',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.display_route' => [
                'type' => 'toggle',
                'label' => 'Display Route',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.display_route',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.live_uri_update' => [
                'type' => 'toggle',
                'label' => 'Live URI Update',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.live_uri_update',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.display_hits' => [
                'type' => 'toggle',
                'label' => 'Display Hits',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.display_hits',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.display_time' => [
                'type' => 'toggle',
                'label' => 'Display Time',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.display_time',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.limit' => [
                'type' => 'text',
                'label' => 'Results Limit',
                'default' => 20,
                'name' => 'plugins.tntsearch.limit',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.min' => [
                'type' => 'text',
                'label' => 'Min Chars Before Search',
                'default' => 3,
                'name' => 'plugins.tntsearch.min',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.snippet' => [
                'type' => 'text',
                'label' => 'Results Text Limit',
                'default' => 300,
                'name' => 'plugins.tntsearch.snippet',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.index_page_by_default' => [
                'type' => 'toggle',
                'label' => 'Index Every Page',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.index_page_by_default',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.filter' => [
                'type' => '_parent',
                'name' => 'plugins.tntsearch.filter',
                'form_field' => false
            ],
            'plugins.tntsearch.filter.items' => [
                'type' => 'textarea',
                'size' => 'large',
                'rows' => 4,
                'label' => 'Search Filter',
                'yaml' => true,
                'validate' => [
                    'type' => 'yaml'
                ],
                'name' => 'plugins.tntsearch.filter.items',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.powered_by' => [
                'type' => 'toggle',
                'label' => 'Powered By',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.powered_by',
                'validation' => 'strict'
            ],
            'plugins.feed' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.feed.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.feed.enabled',
                'validation' => 'strict'
            ],
            'plugins.feed.limit' => [
                'type' => 'range',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'number',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.limit',
                'validation' => 'strict'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description',
                'validation' => 'strict'
            ],
            'plugins.feed.lang' => [
                'type' => 'text',
                'label' => 'Feed language code',
                'default' => 'en',
                'validate' => [
                    'pattern' => '[a-zA-Z]{2,3}(-[a-zA-Z]{2,3})?'
                ],
                'name' => 'plugins.feed.lang',
                'validation' => 'strict'
            ],
            'plugins.feed.length' => [
                'type' => 'range',
                'label' => 'Feed Length (0 for full-text feed)',
                'validate' => [
                    'type' => 'number',
                    'min' => 0,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length',
                'validation' => 'strict'
            ],
            'plugins.feed.enable_json_feed' => [
                'type' => 'toggle',
                'label' => 'JSON feed support',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.feed.enable_json_feed',
                'validation' => 'strict'
            ],
            'plugins.archives' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.archives.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.enabled',
                'validation' => 'strict'
            ],
            'plugins.archives.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.archives.date_display_format' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Date Format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS Y' => 'January 1st 2014',
                    'l jS of F' => 'Monday 1st of January',
                    'D, m M Y' => 'Mon, 01 Jan 2014',
                    'd-m-y' => '01-01-14',
                    'jS M Y' => '10th Feb 2014',
                    'F Y' => 'Jan 2015'
                ],
                'name' => 'plugins.archives.date_display_format',
                'validation' => 'strict'
            ],
            'plugins.archives.show_count' => [
                'type' => 'toggle',
                'label' => 'Show Count',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.show_count',
                'validation' => 'strict'
            ],
            'plugins.archives.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Count Limit',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.archives.limit',
                'validation' => 'strict'
            ],
            'plugins.archives.order' => [
                'type' => '_parent',
                'name' => 'plugins.archives.order',
                'form_field' => false
            ],
            'plugins.archives.order.dir' => [
                'type' => 'toggle',
                'label' => 'Order Direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.archives.order.dir',
                'validation' => 'strict'
            ],
            'plugins.archives.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Order Type',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'plugins.archives.order.by',
                'validation' => 'strict'
            ],
            'plugins.archives.filters' => [
                'type' => '_parent',
                'name' => 'plugins.archives.filters',
                'form_field' => false
            ],
            'plugins.archives.filters.category' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.archives.filters.category',
                'validation' => 'strict'
            ],
            'plugins.archives.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.archives.filter_combinator',
                'validation' => 'strict'
            ],
            'plugins.error' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.error.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.error.enabled',
                'validation' => 'strict'
            ],
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes',
                'form_field' => false
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ERROR.ROUTE_404',
                'default' => '/error',
                'name' => 'plugins.error.routes.404',
                'validation' => 'strict'
            ],
            'plugins.auto-date' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.auto-date.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.auto-date.enabled',
                'validation' => 'strict'
            ],
            'plugins.relatedpages' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.relatedpages.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.enabled',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.LIMIT',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'plugins.relatedpages.limit',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.show_score' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.SHOW_SCORE',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.show_score',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter',
                'form_field' => false
            ],
            'plugins.relatedpages.filter.items' => [
                'type' => 'multilevel',
                'label' => 'PLUGIN_REL_PAGES.ITEMS',
                'value_only' => true,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.relatedpages.filter.items',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter.order' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter.order',
                'form_field' => false
            ],
            'plugins.relatedpages.filter.order.by' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER_BY',
                'default' => 'date',
                'options' => [
                    'folder' => 'Folder',
                    'title' => 'Title',
                    'date' => 'Date',
                    'default' => 'Default'
                ],
                'name' => 'plugins.relatedpages.filter.order.by',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter.order.dir' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.relatedpages.filter.order.dir',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.page_in_filter' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.page_in_filter',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.explicit_pages' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.explicit_pages',
                'form_field' => false
            ],
            'plugins.relatedpages.explicit_pages.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.explicit_pages.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.explicit_pages.score' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 100
                ],
                'name' => 'plugins.relatedpages.explicit_pages.score',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy' => [
                'type' => 'textarea',
                'yaml' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.content_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.content_match',
                'form_field' => false
            ],
            'plugins.relatedpages.content_match.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.content_match.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale',
                'validation' => 'loose'
            ],
            'plugins.simplesearch' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.simplesearch.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.enabled',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.search_content' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Search Content',
                'default' => 'rendered',
                'options' => [
                    'rendered' => 'Rendered Content (Slower)',
                    'raw' => 'Raw Markdown Content (Faster)'
                ],
                'name' => 'plugins.simplesearch.search_content',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.built_in_js' => [
                'type' => 'toggle',
                'label' => 'Use built in JavaScript',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_js',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.display_button' => [
                'type' => 'toggle',
                'label' => 'Display Search Button',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.display_button',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.ignore_accented_characters' => [
                'type' => 'toggle',
                'label' => 'Ignore accented characters',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.ignore_accented_characters',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.min_query_length' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Minimum query length',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.simplesearch.min_query_length',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Route',
                'default' => '/random',
                'name' => 'plugins.simplesearch.route',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.template' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Template',
                'default' => 'simplesearch_results',
                'name' => 'plugins.simplesearch.template',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.filters' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.filters',
                'form_field' => false
            ],
            'plugins.simplesearch.filters.category' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters.category',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.simplesearch.filter_combinator',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.order' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.order',
                'form_field' => false
            ],
            'plugins.simplesearch.order.by' => [
                'type' => 'select',
                'size' => 'long',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'plugins.simplesearch.order.by',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'plugins.simplesearch.order.dir',
                'validation' => 'strict'
            ],
            'plugins.external_links' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.external_links.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.enabled',
                'validation' => 'strict'
            ],
            'plugins.external_links.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.external_links.weight' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.EXTERNAL_LINKS.WEIGHT',
                'default' => 0,
                'validate' => [
                    'type' => 'int',
                    'min' => -100,
                    'max' => 100
                ],
                'name' => 'plugins.external_links.weight',
                'validation' => 'strict'
            ],
            'plugins.external_links.links' => [
                'type' => '_parent',
                'name' => 'plugins.external_links.links',
                'form_field' => false
            ],
            'plugins.external_links.links.www' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.LINKS.WWW',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.links.www',
                'validation' => 'strict'
            ],
            'plugins.external_links.links.redirects' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.LINKS.REDIRECTS',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.links.redirects',
                'validation' => 'strict'
            ],
            'plugins.external_links.links.schemes' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGINS.EXTERNAL_LINKS.LINKS.SCHEMES',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.external_links.links.schemes',
                'validation' => 'strict'
            ],
            'plugins.external_links.exclude' => [
                'type' => '_parent',
                'name' => 'plugins.external_links.exclude',
                'form_field' => false
            ],
            'plugins.external_links.exclude.classes' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE.CLASSES',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.external_links.exclude.classes',
                'validation' => 'strict'
            ],
            'plugins.external_links.exclude.domains' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE.DOMAINS',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.external_links.exclude.domains',
                'validation' => 'strict'
            ],
            'plugins.external_links.process' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.PROCESS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.process',
                'validation' => 'strict'
            ],
            'plugins.external_links.title' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.TITLE',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.title',
                'validation' => 'strict'
            ],
            'plugins.external_links.no_follow' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.NO_FOLLOW',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.no_follow',
                'validation' => 'strict'
            ],
            'plugins.external_links.target' => [
                'type' => 'select',
                'size' => 'large',
                'label' => 'PLUGINS.EXTERNAL_LINKS.TARGET',
                'default' => '_blank',
                'selectize' => [
                    'create' => true
                ],
                'options' => [
                    '_blank' => 'PLUGINS.EXTERNAL_LINKS.TARGET_BLANK',
                    '_self' => 'PLUGINS.EXTERNAL_LINKS.TARGET_SELF',
                    '_parent' => 'PLUGINS.EXTERNAL_LINKS.TARGET_PARENT',
                    '_top' => 'PLUGINS.EXTERNAL_LINKS.TARGET_TOP'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.external_links.target',
                'validation' => 'strict'
            ],
            'plugins.external_links.mode' => [
                'type' => 'select',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGINS.EXTERNAL_LINKS.MODE',
                'default' => 'active',
                'options' => [
                    'active' => 'PLUGINS.EXTERNAL_LINKS.MODE_ACTIVE',
                    'passive' => 'PLUGINS.EXTERNAL_LINKS.MODE_PASSIVE'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.external_links.mode',
                'validation' => 'strict'
            ],
            'plugins.page-inject' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.page-inject.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.page-inject.enabled',
                'validation' => 'strict'
            ],
            'plugins.page-inject.active' => [
                'type' => 'toggle',
                'label' => 'Activate Site-Wide',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.page-inject.active',
                'validation' => 'strict'
            ],
            'plugins.page-inject.processed_content' => [
                'type' => 'toggle',
                'label' => 'Processed Content',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.page-inject.processed_content',
                'validation' => 'strict'
            ],
            'plugins.youtube' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.youtube.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.youtube.enabled',
                'validation' => 'strict'
            ],
            'plugins.youtube.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.youtube.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.youtube.add_editor_button' => [
                'type' => 'toggle',
                'label' => 'Add editor button',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.youtube.add_editor_button',
                'validation' => 'strict'
            ],
            'plugins.youtube.privacy_enhanced_mode' => [
                'type' => 'toggle',
                'label' => 'Privacy-enhanced mode',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.youtube.privacy_enhanced_mode',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters' => [
                'type' => '_parent',
                'name' => 'plugins.youtube.player_parameters',
                'form_field' => false
            ],
            'plugins.youtube.player_parameters.vq' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Preferred video quality',
                'default' => 'default',
                'options' => [
                    'default' => 'Default',
                    'small' => 'Small',
                    'medium' => 'Medium',
                    'large' => 'Large',
                    'highres' => 'High resolution',
                    'hd1080' => 'High definition (1080)',
                    'hd720' => 'High definition (720)'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.youtube.player_parameters.vq',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.autoplay' => [
                'type' => 'toggle',
                'label' => 'Autoplay',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.autoplay',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.loop' => [
                'type' => 'toggle',
                'label' => 'Loop',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.loop',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.showinfo' => [
                'type' => 'toggle',
                'label' => 'Show information',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.showinfo',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.rel' => [
                'type' => 'toggle',
                'label' => 'Related videos',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.rel',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.modestbranding' => [
                'type' => 'toggle',
                'label' => 'Modest branding',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.modestbranding',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.color' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Color',
                'default' => 'red',
                'options' => [
                    'red' => 'Red',
                    'white' => 'White'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.youtube.player_parameters.color',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.cc_load_policy' => [
                'type' => 'toggle',
                'label' => 'Show closed captions by default',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.cc_load_policy',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.iv_load_policy' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Video annotations',
                'default' => 1,
                'options' => [
                    1 => 'Displayed by default',
                    3 => 'Hidden by default'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.iv_load_policy',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.controls' => [
                'type' => 'toggle',
                'label' => 'Controls',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.controls',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.disablekb' => [
                'type' => 'toggle',
                'label' => 'Keyboard controls',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.disablekb',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.fs' => [
                'type' => 'toggle',
                'label' => 'Fullscreen button',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.fs',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.hl' => [
                'type' => 'text',
                'label' => 'Language',
                'default' => '',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.youtube.player_parameters.hl',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.enablejsapi' => [
                'type' => 'toggle',
                'label' => 'JavaScript API',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.enablejsapi',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.origin' => [
                'type' => 'text',
                'label' => 'Origin',
                'default' => '',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.youtube.player_parameters.origin',
                'validation' => 'strict'
            ],
            'plugins.youtube.player_parameters.playsinline' => [
                'type' => 'toggle',
                'label' => 'iOS playback behavior',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    0 => 'Fullscreen',
                    1 => 'Inline'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.youtube.player_parameters.playsinline',
                'validation' => 'strict'
            ],
            'plugins.markdown-notices' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.markdown-notices.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.markdown-notices.enabled',
                'validation' => 'strict'
            ],
            'plugins.markdown-notices.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.markdown-notices.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.markdown-notices.level_classes' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'Level classes',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.markdown-notices.level_classes',
                'validation' => 'strict'
            ],
            'plugins.problems' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.problems.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.enabled',
                'validation' => 'strict'
            ],
            'plugins.problems.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PROBLEMS.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.pagination' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.pagination.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.enabled',
                'validation' => 'strict'
            ],
            'plugins.pagination.delta' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_PAGINATION.DELTA',
                'default' => 0,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.pagination.delta',
                'validation' => 'strict'
            ],
            'plugins.pagination.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PAGINATION.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.built_in_css',
                'validation' => 'strict'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'media' => [
                'types' => [
                    '*' => [
                        'type' => 'media.types.*.type',
                        'thumb' => 'media.types.*.thumb',
                        'mime' => 'media.types.*.mime',
                        'image' => 'media.types.*.image'
                    ]
                ]
            ],
            'backups' => [
                'history' => 'backups.history',
                'purge' => [
                    'trigger' => 'backups.purge.trigger',
                    'max_backups_count' => 'backups.purge.max_backups_count',
                    'max_backups_space' => 'backups.purge.max_backups_space',
                    'max_backups_time' => 'backups.purge.max_backups_time'
                ],
                'profiles' => [
                    '*' => [
                        'name' => 'backups.profiles.*.name',
                        'root' => 'backups.profiles.*.root',
                        'exclude_paths' => 'backups.profiles.*.exclude_paths',
                        'exclude_files' => 'backups.profiles.*.exclude_files',
                        'schedule' => 'backups.profiles.*.schedule',
                        'schedule_at' => 'backups.profiles.*.schedule_at'
                    ]
                ]
            ],
            'scheduler' => [
                'status' => 'scheduler.status',
                'custom_jobs' => [
                    '*' => [
                        'command' => 'scheduler.custom_jobs.*.command',
                        'args' => 'scheduler.custom_jobs.*.args',
                        'at' => 'scheduler.custom_jobs.*.at',
                        'output' => 'scheduler.custom_jobs.*.output',
                        'output_mode' => 'scheduler.custom_jobs.*.output_mode',
                        'email' => 'scheduler.custom_jobs.*.email'
                    ]
                ]
            ],
            'security' => [
                'xss_whitelist' => 'security.xss_whitelist',
                'xss_enabled' => [
                    'on_events' => 'security.xss_enabled.on_events',
                    'invalid_protocols' => 'security.xss_enabled.invalid_protocols',
                    'moz_binding' => 'security.xss_enabled.moz_binding',
                    'html_inline_styles' => 'security.xss_enabled.html_inline_styles',
                    'dangerous_tags' => 'security.xss_enabled.dangerous_tags'
                ],
                'xss_invalid_protocols' => 'security.xss_invalid_protocols',
                'xss_dangerous_tags' => 'security.xss_dangerous_tags',
                'uploads_dangerous_extensions' => 'security.uploads_dangerous_extensions'
            ],
            'site' => [
                'title' => 'site.title',
                'default_lang' => 'site.default_lang',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'redirects' => 'site.redirects',
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias',
                    'hide_in_urls' => 'system.home.hide_in_urls'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'types' => 'system.pages.types',
                    'dateformat' => [
                        'default' => 'system.pages.dateformat.default',
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'append_url_extension' => 'system.pages.append_url_extension',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'redirect_default_code' => 'system.pages.redirect_default_code',
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_hidden' => 'system.pages.ignore_hidden',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
                    'hide_empty_folders' => 'system.pages.hide_empty_folders',
                    'url_taxonomy_filters' => 'system.pages.url_taxonomy_filters',
                    'twig_first' => 'system.pages.twig_first',
                    'never_cache_twig' => 'system.pages.never_cache_twig',
                    'frontmatter' => [
                        'process_twig' => 'system.pages.frontmatter.process_twig',
                        'ignore_fields' => 'system.pages.frontmatter.ignore_fields'
                    ],
                    'expires' => 'system.pages.expires',
                    'cache_control' => 'system.pages.cache_control',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'default_lang' => 'system.languages.default_lang',
                    'include_default_lang' => 'system.languages.include_default_lang',
                    'pages_fallback_only' => 'system.languages.pages_fallback_only',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'override_locale' => 'system.languages.override_locale'
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'purge_at' => 'system.cache.purge_at',
                    'clear_at' => 'system.cache.clear_at',
                    'clear_job_type' => 'system.cache.clear_job_type',
                    'clear_images_by_default' => 'system.cache.clear_images_by_default',
                    'cli_compatibility' => 'system.cache.cli_compatibility',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip',
                    'allow_webserver_gzip' => 'system.cache.allow_webserver_gzip',
                    'memcache' => [
                        'server' => 'system.cache.memcache.server',
                        'port' => 'system.cache.memcache.port'
                    ],
                    'memcached' => [
                        'server' => 'system.cache.memcached.server',
                        'port' => 'system.cache.memcached.port'
                    ],
                    'redis' => [
                        'socket' => 'system.cache.redis.socket',
                        'server' => 'system.cache.redis.server',
                        'port' => 'system.cache.redis.port',
                        'password' => 'system.cache.redis.password'
                    ]
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape',
                    'umask_fix' => 'system.twig.umask_fix'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_pipeline_include_externals' => 'system.assets.css_pipeline_include_externals',
                    'css_pipeline_before_excludes' => 'system.assets.css_pipeline_before_excludes',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_pipeline_include_externals' => 'system.assets.js_pipeline_include_externals',
                    'js_pipeline_before_excludes' => 'system.assets.js_pipeline_before_excludes',
                    'js_minify' => 'system.assets.js_minify',
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'collections' => 'system.assets.collections'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'log' => [
                    'handler' => 'system.log.handler',
                    'syslog' => [
                        'facility' => 'system.log.syslog.facility'
                    ]
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'cache_perms' => 'system.images.cache_perms',
                    'debug' => 'system.images.debug',
                    'auto_fix_orientation' => 'system.images.auto_fix_orientation',
                    'seofriendly' => 'system.images.seofriendly'
                ],
                'media' => [
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'auto_metadata_exif' => 'system.media.auto_metadata_exif',
                    'allowed_fallback_types' => 'system.media.allowed_fallback_types',
                    'unsupported_inline_types' => 'system.media.unsupported_inline_types'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'initialize' => 'system.session.initialize',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name',
                    'uniqueness' => 'system.session.uniqueness',
                    'secure' => 'system.session.secure',
                    'httponly' => 'system.session.httponly',
                    'path' => 'system.session.path',
                    'split' => 'system.session.split'
                ],
                'gpm' => [
                    'releases' => 'system.gpm.releases',
                    'proxy_url' => 'system.gpm.proxy_url',
                    'method' => 'system.gpm.method',
                    'official_gpm_only' => 'system.gpm.official_gpm_only',
                    'verify_peer' => 'system.gpm.verify_peer'
                ],
                'reverse_proxy_setup' => 'system.reverse_proxy_setup',
                'username_regex' => 'system.username_regex',
                'pwd_regex' => 'system.pwd_regex',
                'intl_enabled' => 'system.intl_enabled',
                'wrapped_site' => 'system.wrapped_site',
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep',
                'force_ssl' => 'system.force_ssl',
                'force_lowercase_urls' => 'system.force_lowercase_urls',
                'custom_base_url' => 'system.custom_base_url',
                'accounts' => [
                    'type' => 'system.accounts.type',
                    'storage' => 'system.accounts.storage'
                ],
                'strict_mode' => [
                    'yaml_compat' => 'system.strict_mode.yaml_compat',
                    'twig_compat' => 'system.strict_mode.twig_compat'
                ]
            ],
            'plugins' => [
                'breadcrumbs' => [
                    'enabled' => 'plugins.breadcrumbs.enabled',
                    'show_all' => 'plugins.breadcrumbs.show_all',
                    'built_in_css' => 'plugins.breadcrumbs.built_in_css',
                    'include_home' => 'plugins.breadcrumbs.include_home',
                    'include_current' => 'plugins.breadcrumbs.include_current',
                    'icon_home' => 'plugins.breadcrumbs.icon_home',
                    'icon_divider_classes' => 'plugins.breadcrumbs.icon_divider_classes',
                    'link_trailing' => 'plugins.breadcrumbs.link_trailing'
                ],
                'customadmin' => 'plugins.customadmin',
                'git-sync' => [
                    'enabled' => 'plugins.git-sync.enabled',
                    'folders' => 'plugins.git-sync.folders',
                    'sync' => [
                        'on_save' => 'plugins.git-sync.sync.on_save',
                        'on_delete' => 'plugins.git-sync.sync.on_delete',
                        'on_media' => 'plugins.git-sync.sync.on_media',
                        'cron_enable' => 'plugins.git-sync.sync.cron_enable',
                        'cron_at' => 'plugins.git-sync.sync.cron_at'
                    ],
                    'local_repository' => 'plugins.git-sync.local_repository',
                    'repository' => 'plugins.git-sync.repository',
                    'user' => 'plugins.git-sync.user',
                    'password' => 'plugins.git-sync.password',
                    'webhook' => 'plugins.git-sync.webhook',
                    'webhook_enabled' => 'plugins.git-sync.webhook_enabled',
                    'webhook_secret' => 'plugins.git-sync.webhook_secret',
                    'branch' => 'plugins.git-sync.branch',
                    'remote' => [
                        'name' => 'plugins.git-sync.remote.name',
                        'branch' => 'plugins.git-sync.remote.branch'
                    ],
                    'git' => [
                        'author' => 'plugins.git-sync.git.author',
                        'message' => 'plugins.git-sync.git.message',
                        'name' => 'plugins.git-sync.git.name',
                        'email' => 'plugins.git-sync.git.email',
                        'bin' => 'plugins.git-sync.git.bin'
                    ],
                    'logging' => 'plugins.git-sync.logging',
                    '_wizard' => 'plugins.git-sync._wizard'
                ],
                'form' => [
                    'enabled' => 'plugins.form.enabled',
                    'built_in_css' => 'plugins.form.built_in_css',
                    'inline_css' => 'plugins.form.inline_css',
                    'refresh_prevention' => 'plugins.form.refresh_prevention',
                    'client_side_validation' => 'plugins.form.client_side_validation',
                    'inline_errors' => 'plugins.form.inline_errors',
                    'files' => [
                        'multiple' => 'plugins.form.files.multiple',
                        'limit' => 'plugins.form.files.limit',
                        'destination' => 'plugins.form.files.destination',
                        'accept' => 'plugins.form.files.accept',
                        'filesize' => 'plugins.form.files.filesize',
                        'avoid_overwriting' => 'plugins.form.files.avoid_overwriting',
                        'random_name' => 'plugins.form.files.random_name'
                    ],
                    'recaptcha' => [
                        'version' => 'plugins.form.recaptcha.version',
                        'theme' => 'plugins.form.recaptcha.theme',
                        'site_key' => 'plugins.form.recaptcha.site_key',
                        'secret_key' => 'plugins.form.recaptcha.secret_key'
                    ]
                ],
                'admin' => [
                    'enabled' => 'plugins.admin.enabled',
                    'cache_enabled' => 'plugins.admin.cache_enabled',
                    'twofa_enabled' => 'plugins.admin.twofa_enabled',
                    'route' => 'plugins.admin.route',
                    'logo_text' => 'plugins.admin.logo_text',
                    'content_padding' => 'plugins.admin.content_padding',
                    'body_classes' => 'plugins.admin.body_classes',
                    'sidebar' => [
                        'activate' => 'plugins.admin.sidebar.activate',
                        'hover_delay' => 'plugins.admin.sidebar.hover_delay',
                        'size' => 'plugins.admin.sidebar.size'
                    ],
                    'theme' => 'plugins.admin.theme',
                    'edit_mode' => 'plugins.admin.edit_mode',
                    'frontend_preview_target' => 'plugins.admin.frontend_preview_target',
                    'pages' => [
                        'show_parents' => 'plugins.admin.pages.show_parents',
                        'parents_levels' => 'plugins.admin.pages.parents_levels',
                        'show_modular' => 'plugins.admin.pages.show_modular'
                    ],
                    'google_fonts' => 'plugins.admin.google_fonts',
                    'show_beta_msg' => 'plugins.admin.show_beta_msg',
                    'show_github_msg' => 'plugins.admin.show_github_msg',
                    'pages_list_display_field' => 'plugins.admin.pages_list_display_field',
                    'enable_auto_updates_check' => 'plugins.admin.enable_auto_updates_check',
                    'session' => [
                        'timeout' => 'plugins.admin.session.timeout'
                    ],
                    'warnings' => [
                        'delete_page' => 'plugins.admin.warnings.delete_page'
                    ],
                    'hide_page_types' => 'plugins.admin.hide_page_types',
                    'hide_modular_page_types' => 'plugins.admin.hide_modular_page_types',
                    'log_viewer_files' => 'plugins.admin.log_viewer_files',
                    'pagemedia' => [
                        'resize_width' => 'plugins.admin.pagemedia.resize_width',
                        'resize_height' => 'plugins.admin.pagemedia.resize_height',
                        'res_min_width' => 'plugins.admin.pagemedia.res_min_width',
                        'res_min_height' => 'plugins.admin.pagemedia.res_min_height',
                        'res_max_width' => 'plugins.admin.pagemedia.res_max_width',
                        'res_max_height' => 'plugins.admin.pagemedia.res_max_height',
                        'resize_quality' => 'plugins.admin.pagemedia.resize_quality'
                    ],
                    'widgets' => [
                        'dashboard-maintenance' => 'plugins.admin.widgets.dashboard-maintenance',
                        'dashboard-statistics' => 'plugins.admin.widgets.dashboard-statistics',
                        'dashboard-notifications' => 'plugins.admin.widgets.dashboard-notifications',
                        'dashboard-feed' => 'plugins.admin.widgets.dashboard-feed',
                        'dashboard-pages' => 'plugins.admin.widgets.dashboard-pages'
                    ],
                    'notifications' => [
                        'feed' => 'plugins.admin.notifications.feed',
                        'dashboard' => 'plugins.admin.notifications.dashboard',
                        'plugins' => 'plugins.admin.notifications.plugins',
                        'themes' => 'plugins.admin.notifications.themes'
                    ],
                    'popularity' => [
                        'enabled' => 'plugins.admin.popularity.enabled',
                        'ignore' => 'plugins.admin.popularity.ignore',
                        'history' => [
                            'daily' => 'plugins.admin.popularity.history.daily',
                            'monthly' => 'plugins.admin.popularity.history.monthly',
                            'visitors' => 'plugins.admin.popularity.history.visitors'
                        ]
                    ],
                    'dashboard' => [
                        'days_of_stats' => 'plugins.admin.dashboard.days_of_stats'
                    ]
                ],
                'taxonomylist' => [
                    'enabled' => 'plugins.taxonomylist.enabled',
                    'route' => 'plugins.taxonomylist.route'
                ],
                'markdown-fontawesome' => [
                    'enabled' => 'plugins.markdown-fontawesome.enabled'
                ],
                'shortcode-core' => [
                    'enabled' => 'plugins.shortcode-core.enabled',
                    'active' => 'plugins.shortcode-core.active',
                    'active_admin' => 'plugins.shortcode-core.active_admin',
                    'admin_pages_only' => 'plugins.shortcode-core.admin_pages_only',
                    'parser' => 'plugins.shortcode-core.parser',
                    'custom_shortcodes' => 'plugins.shortcode-core.custom_shortcodes',
                    'fontawesome' => [
                        'load' => 'plugins.shortcode-core.fontawesome.load',
                        'url' => 'plugins.shortcode-core.fontawesome.url',
                        'v5' => 'plugins.shortcode-core.fontawesome.v5'
                    ]
                ],
                'jscomments' => [
                    'enabled' => 'plugins.jscomments.enabled',
                    'active' => 'plugins.jscomments.active',
                    'provider' => 'plugins.jscomments.provider',
                    'providers' => [
                        'discourse' => [
                            'host' => 'plugins.jscomments.providers.discourse.host'
                        ],
                        'disqus' => [
                            'shortname' => 'plugins.jscomments.providers.disqus.shortname',
                            'show_count' => 'plugins.jscomments.providers.disqus.show_count',
                            'language' => 'plugins.jscomments.providers.disqus.language'
                        ],
                        'facebook' => [
                            'app_id' => 'plugins.jscomments.providers.facebook.app_id',
                            'num_posts' => 'plugins.jscomments.providers.facebook.num_posts',
                            'colorscheme' => 'plugins.jscomments.providers.facebook.colorscheme',
                            'order_by' => 'plugins.jscomments.providers.facebook.order_by',
                            'language' => 'plugins.jscomments.providers.facebook.language',
                            'width' => 'plugins.jscomments.providers.facebook.width'
                        ],
                        'googleplus' => [
                            'show_count' => 'plugins.jscomments.providers.googleplus.show_count',
                            'language' => 'plugins.jscomments.providers.googleplus.language',
                            'width' => 'plugins.jscomments.providers.googleplus.width'
                        ],
                        'intensedebate' => [
                            'account_number' => 'plugins.jscomments.providers.intensedebate.account_number'
                        ],
                        'isso' => [
                            'host' => 'plugins.jscomments.providers.isso.host',
                            'builtin_css' => 'plugins.jscomments.providers.isso.builtin_css',
                            'language' => 'plugins.jscomments.providers.isso.language',
                            'reply_to_self' => 'plugins.jscomments.providers.isso.reply_to_self',
                            'require' => 'plugins.jscomments.providers.isso.require',
                            'comments' => [
                                'number' => 'plugins.jscomments.providers.isso.comments.number',
                                'nested_number' => 'plugins.jscomments.providers.isso.comments.nested_number',
                                'reveal' => 'plugins.jscomments.providers.isso.comments.reveal'
                            ],
                            'avatar' => [
                                'enabled' => 'plugins.jscomments.providers.isso.avatar.enabled',
                                'background' => 'plugins.jscomments.providers.isso.avatar.background',
                                'foreground' => 'plugins.jscomments.providers.isso.avatar.foreground'
                            ],
                            'vote' => [
                                'enabled' => 'plugins.jscomments.providers.isso.vote.enabled',
                                'levels' => 'plugins.jscomments.providers.isso.vote.levels'
                            ]
                        ],
                        'muut' => [
                            'forum' => 'plugins.jscomments.providers.muut.forum',
                            'channel' => 'plugins.jscomments.providers.muut.channel',
                            'widget' => 'plugins.jscomments.providers.muut.widget',
                            'show_online' => 'plugins.jscomments.providers.muut.show_online',
                            'show_title' => 'plugins.jscomments.providers.muut.show_title',
                            'upload' => 'plugins.jscomments.providers.muut.upload',
                            'share' => 'plugins.jscomments.providers.muut.share',
                            'language' => 'plugins.jscomments.providers.muut.language'
                        ],
                        'hypercomments' => [
                            'widget_id' => 'plugins.jscomments.providers.hypercomments.widget_id',
                            'social' => 'plugins.jscomments.providers.hypercomments.social'
                        ]
                    ]
                ],
                'email' => [
                    'enabled' => 'plugins.email.enabled',
                    'mailer' => [
                        'engine' => 'plugins.email.mailer.engine',
                        'smtp' => [
                            'server' => 'plugins.email.mailer.smtp.server',
                            'port' => 'plugins.email.mailer.smtp.port',
                            'encryption' => 'plugins.email.mailer.smtp.encryption',
                            'user' => 'plugins.email.mailer.smtp.user',
                            'password' => 'plugins.email.mailer.smtp.password'
                        ],
                        'sendmail' => [
                            'bin' => 'plugins.email.mailer.sendmail.bin'
                        ]
                    ],
                    'content_type' => 'plugins.email.content_type',
                    'charset' => 'plugins.email.charset',
                    'from' => 'plugins.email.from',
                    'from_name' => 'plugins.email.from_name',
                    'to' => 'plugins.email.to',
                    'to_name' => 'plugins.email.to_name',
                    'cc' => 'plugins.email.cc',
                    'cc_name' => 'plugins.email.cc_name',
                    'bcc' => 'plugins.email.bcc',
                    'reply_to' => 'plugins.email.reply_to',
                    'reply_to_name' => 'plugins.email.reply_to_name',
                    'body' => 'plugins.email.body',
                    'queue' => [
                        'enabled' => 'plugins.email.queue.enabled',
                        'flush_frequency' => 'plugins.email.queue.flush_frequency',
                        'flush_msg_limit' => 'plugins.email.queue.flush_msg_limit',
                        'flush_time_limit' => 'plugins.email.queue.flush_time_limit'
                    ],
                    'debug' => 'plugins.email.debug'
                ],
                'image-captions' => [
                    'enabled' => 'plugins.image-captions.enabled',
                    'built_in_css' => 'plugins.image-captions.built_in_css',
                    'entire_page' => 'plugins.image-captions.entire_page',
                    'scope' => 'plugins.image-captions.scope',
                    'figure_class' => 'plugins.image-captions.figure_class',
                    'figcaption_class' => 'plugins.image-captions.figcaption_class'
                ],
                'comments' => [
                    'enabled' => 'plugins.comments.enabled'
                ],
                'login' => [
                    'enabled' => 'plugins.login.enabled',
                    'built_in_css' => 'plugins.login.built_in_css',
                    'route' => 'plugins.login.route',
                    'redirect_after_login' => 'plugins.login.redirect_after_login',
                    'redirect_after_logout' => 'plugins.login.redirect_after_logout',
                    'route_forgot' => 'plugins.login.route_forgot',
                    'route_reset' => 'plugins.login.route_reset',
                    'route_profile' => 'plugins.login.route_profile',
                    'parent_acl' => 'plugins.login.parent_acl',
                    'dynamic_page_visibility' => 'plugins.login.dynamic_page_visibility',
                    'twofa_enabled' => 'plugins.login.twofa_enabled',
                    'protect_protected_page_media' => 'plugins.login.protect_protected_page_media',
                    'route_activate' => 'plugins.login.route_activate',
                    'route_register' => 'plugins.login.route_register',
                    'user_registration' => [
                        'redirect_after_registration' => 'plugins.login.user_registration.redirect_after_registration',
                        'redirect_after_activation' => 'plugins.login.user_registration.redirect_after_activation',
                        'enabled' => 'plugins.login.user_registration.enabled',
                        'fields' => 'plugins.login.user_registration.fields',
                        'default_values' => 'plugins.login.user_registration.default_values',
                        'groups' => 'plugins.login.user_registration.groups',
                        'access' => [
                            'site' => 'plugins.login.user_registration.access.site'
                        ],
                        'options' => [
                            'validate_password1_and_password2' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                            'set_user_disabled' => 'plugins.login.user_registration.options.set_user_disabled',
                            'login_after_registration' => 'plugins.login.user_registration.options.login_after_registration',
                            'send_activation_email' => 'plugins.login.user_registration.options.send_activation_email',
                            'manually_enable' => 'plugins.login.user_registration.options.manually_enable',
                            'send_notification_email' => 'plugins.login.user_registration.options.send_notification_email',
                            'send_welcome_email' => 'plugins.login.user_registration.options.send_welcome_email'
                        ]
                    ],
                    'rememberme' => [
                        'enabled' => 'plugins.login.rememberme.enabled',
                        'timeout' => 'plugins.login.rememberme.timeout',
                        'name' => 'plugins.login.rememberme.name'
                    ],
                    'max_pw_resets_count' => 'plugins.login.max_pw_resets_count',
                    'max_pw_resets_interval' => 'plugins.login.max_pw_resets_interval',
                    'max_login_count' => 'plugins.login.max_login_count',
                    'max_login_interval' => 'plugins.login.max_login_interval',
                    'ipv6_subnet_size' => 'plugins.login.ipv6_subnet_size'
                ],
                'presentation' => [
                    'enabled' => 'plugins.presentation.enabled',
                    'theme' => 'plugins.presentation.theme',
                    'order' => [
                        'by' => 'plugins.presentation.order.by',
                        'dir' => 'plugins.presentation.order.dir'
                    ],
                    'all_assets' => 'plugins.presentation.all_assets',
                    'theme_css' => 'plugins.presentation.theme_css',
                    'builtin_css' => 'plugins.presentation.builtin_css',
                    'builtin_js' => 'plugins.presentation.builtin_js',
                    'textsizing' => 'plugins.presentation.textsizing',
                    'breakpoints' => 'plugins.presentation.breakpoints',
                    'textsize' => [
                        'scale' => 'plugins.presentation.textsize.scale',
                        'modifier' => 'plugins.presentation.textsize.modifier'
                    ],
                    'style' => [
                        'header-font-family' => 'plugins.presentation.style.header-font-family',
                        'header-color' => 'plugins.presentation.style.header-color',
                        'block-font-family' => 'plugins.presentation.style.block-font-family',
                        'block-color' => 'plugins.presentation.style.block-color',
                        'background-color' => 'plugins.presentation.style.background-color',
                        'background-image' => 'plugins.presentation.style.background-image',
                        'background-size' => 'plugins.presentation.style.background-size',
                        'background-repeat' => 'plugins.presentation.style.background-repeat',
                        'justify-content' => 'plugins.presentation.style.justify-content',
                        'align-items' => 'plugins.presentation.style.align-items'
                    ],
                    'horizontal' => 'plugins.presentation.horizontal',
                    'admin_async_save' => 'plugins.presentation.admin_async_save',
                    'admin_async_save_typing' => 'plugins.presentation.admin_async_save_typing',
                    'footer' => 'plugins.presentation.footer',
                    'shortcodes' => 'plugins.presentation.shortcodes',
                    'shortcode_classes' => 'plugins.presentation.shortcode_classes',
                    'transition' => 'plugins.presentation.transition',
                    'unwrap_images' => 'plugins.presentation.unwrap_images',
                    'content' => 'plugins.presentation.content',
                    'parser' => 'plugins.presentation.parser',
                    'styles' => 'plugins.presentation.styles',
                    'sync' => 'plugins.presentation.sync',
                    'api_route' => 'plugins.presentation.api_route',
                    'poll_timeout' => 'plugins.presentation.poll_timeout',
                    'poll_retry_limit' => 'plugins.presentation.poll_retry_limit',
                    'token_auth' => 'plugins.presentation.token_auth',
                    'token' => 'plugins.presentation.token',
                    'options' => 'plugins.presentation.options'
                ],
                'presentation-deckset' => [
                    'enabled' => 'plugins.presentation-deckset.enabled'
                ],
                'shortcode-ui' => [
                    'enabled' => 'plugins.shortcode-ui.enabled',
                    'theme' => [
                        'tabs' => 'plugins.shortcode-ui.theme.tabs'
                    ]
                ],
                'tntsearch' => [
                    'enabled' => 'plugins.tntsearch.enabled',
                    'index_status' => 'plugins.tntsearch.index_status',
                    'enable_admin_page_events' => 'plugins.tntsearch.enable_admin_page_events',
                    'scheduled_index' => [
                        'enabled' => 'plugins.tntsearch.scheduled_index.enabled',
                        'at' => 'plugins.tntsearch.scheduled_index.at',
                        'logs' => 'plugins.tntsearch.scheduled_index.logs'
                    ],
                    'built_in_css' => 'plugins.tntsearch.built_in_css',
                    'built_in_js' => 'plugins.tntsearch.built_in_js',
                    'built_in_search_page' => 'plugins.tntsearch.built_in_search_page',
                    'search_route' => 'plugins.tntsearch.search_route',
                    'query_route' => 'plugins.tntsearch.query_route',
                    'search_type' => 'plugins.tntsearch.search_type',
                    'fuzzy' => 'plugins.tntsearch.fuzzy',
                    'phrases' => 'plugins.tntsearch.phrases',
                    'stemmer' => 'plugins.tntsearch.stemmer',
                    'display_route' => 'plugins.tntsearch.display_route',
                    'live_uri_update' => 'plugins.tntsearch.live_uri_update',
                    'display_hits' => 'plugins.tntsearch.display_hits',
                    'display_time' => 'plugins.tntsearch.display_time',
                    'limit' => 'plugins.tntsearch.limit',
                    'min' => 'plugins.tntsearch.min',
                    'snippet' => 'plugins.tntsearch.snippet',
                    'index_page_by_default' => 'plugins.tntsearch.index_page_by_default',
                    'filter' => [
                        'items' => 'plugins.tntsearch.filter.items'
                    ],
                    'powered_by' => 'plugins.tntsearch.powered_by'
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'limit' => 'plugins.feed.limit',
                    'description' => 'plugins.feed.description',
                    'lang' => 'plugins.feed.lang',
                    'length' => 'plugins.feed.length',
                    'enable_json_feed' => 'plugins.feed.enable_json_feed'
                ],
                'archives' => [
                    'enabled' => 'plugins.archives.enabled',
                    'built_in_css' => 'plugins.archives.built_in_css',
                    'date_display_format' => 'plugins.archives.date_display_format',
                    'show_count' => 'plugins.archives.show_count',
                    'limit' => 'plugins.archives.limit',
                    'order' => [
                        'dir' => 'plugins.archives.order.dir',
                        'by' => 'plugins.archives.order.by'
                    ],
                    'filters' => [
                        'category' => 'plugins.archives.filters.category'
                    ],
                    'filter_combinator' => 'plugins.archives.filter_combinator'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'auto-date' => [
                    'enabled' => 'plugins.auto-date.enabled'
                ],
                'relatedpages' => [
                    'enabled' => 'plugins.relatedpages.enabled',
                    'limit' => 'plugins.relatedpages.limit',
                    'show_score' => 'plugins.relatedpages.show_score',
                    'filter' => [
                        'items' => 'plugins.relatedpages.filter.items',
                        'order' => [
                            'by' => 'plugins.relatedpages.filter.order.by',
                            'dir' => 'plugins.relatedpages.filter.order.dir'
                        ]
                    ],
                    'page_in_filter' => 'plugins.relatedpages.page_in_filter',
                    'explicit_pages' => [
                        'process' => 'plugins.relatedpages.explicit_pages.process',
                        'score' => 'plugins.relatedpages.explicit_pages.score'
                    ],
                    'taxonomy_match' => [
                        'taxonomy' => 'plugins.relatedpages.taxonomy_match.taxonomy',
                        'taxonomy_taxonomy' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale'
                        ],
                        'taxonomy_content' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale'
                        ]
                    ],
                    'content_match' => [
                        'process' => 'plugins.relatedpages.content_match.process'
                    ]
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'search_content' => 'plugins.simplesearch.search_content',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'built_in_js' => 'plugins.simplesearch.built_in_js',
                    'display_button' => 'plugins.simplesearch.display_button',
                    'ignore_accented_characters' => 'plugins.simplesearch.ignore_accented_characters',
                    'min_query_length' => 'plugins.simplesearch.min_query_length',
                    'route' => 'plugins.simplesearch.route',
                    'template' => 'plugins.simplesearch.template',
                    'filters' => [
                        'category' => 'plugins.simplesearch.filters.category'
                    ],
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator',
                    'order' => [
                        'by' => 'plugins.simplesearch.order.by',
                        'dir' => 'plugins.simplesearch.order.dir'
                    ]
                ],
                'external_links' => [
                    'enabled' => 'plugins.external_links.enabled',
                    'built_in_css' => 'plugins.external_links.built_in_css',
                    'weight' => 'plugins.external_links.weight',
                    'links' => [
                        'www' => 'plugins.external_links.links.www',
                        'redirects' => 'plugins.external_links.links.redirects',
                        'schemes' => 'plugins.external_links.links.schemes'
                    ],
                    'exclude' => [
                        'classes' => 'plugins.external_links.exclude.classes',
                        'domains' => 'plugins.external_links.exclude.domains'
                    ],
                    'process' => 'plugins.external_links.process',
                    'title' => 'plugins.external_links.title',
                    'no_follow' => 'plugins.external_links.no_follow',
                    'target' => 'plugins.external_links.target',
                    'mode' => 'plugins.external_links.mode'
                ],
                'page-inject' => [
                    'enabled' => 'plugins.page-inject.enabled',
                    'active' => 'plugins.page-inject.active',
                    'processed_content' => 'plugins.page-inject.processed_content'
                ],
                'youtube' => [
                    'enabled' => 'plugins.youtube.enabled',
                    'built_in_css' => 'plugins.youtube.built_in_css',
                    'add_editor_button' => 'plugins.youtube.add_editor_button',
                    'privacy_enhanced_mode' => 'plugins.youtube.privacy_enhanced_mode',
                    'player_parameters' => [
                        'vq' => 'plugins.youtube.player_parameters.vq',
                        'autoplay' => 'plugins.youtube.player_parameters.autoplay',
                        'loop' => 'plugins.youtube.player_parameters.loop',
                        'showinfo' => 'plugins.youtube.player_parameters.showinfo',
                        'rel' => 'plugins.youtube.player_parameters.rel',
                        'modestbranding' => 'plugins.youtube.player_parameters.modestbranding',
                        'color' => 'plugins.youtube.player_parameters.color',
                        'cc_load_policy' => 'plugins.youtube.player_parameters.cc_load_policy',
                        'iv_load_policy' => 'plugins.youtube.player_parameters.iv_load_policy',
                        'controls' => 'plugins.youtube.player_parameters.controls',
                        'disablekb' => 'plugins.youtube.player_parameters.disablekb',
                        'fs' => 'plugins.youtube.player_parameters.fs',
                        'hl' => 'plugins.youtube.player_parameters.hl',
                        'enablejsapi' => 'plugins.youtube.player_parameters.enablejsapi',
                        'origin' => 'plugins.youtube.player_parameters.origin',
                        'playsinline' => 'plugins.youtube.player_parameters.playsinline'
                    ]
                ],
                'markdown-notices' => [
                    'enabled' => 'plugins.markdown-notices.enabled',
                    'built_in_css' => 'plugins.markdown-notices.built_in_css',
                    'level_classes' => 'plugins.markdown-notices.level_classes'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'pagination' => [
                    'enabled' => 'plugins.pagination.enabled',
                    'delta' => 'plugins.pagination.delta',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ]
            ]
        ],
        'dynamic' => [
            'plugins.login.user_registration.groups' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\User\\Groups::groups'
                ]
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
