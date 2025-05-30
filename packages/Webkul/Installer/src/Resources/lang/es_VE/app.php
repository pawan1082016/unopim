<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => 'Familias de atributos',
            'attribute-groups'   => [
                'description'      => 'Descripción',
                'general'          => 'General',
                'inventories'      => 'Inventarios',
                'meta-description' => 'Meta Descripción',
                'price'            => 'Precio',
                'technical'        => 'Técnico',
                'shipping'         => 'Envío',
            ],
            'attributes' => [
                'brand'                => 'Marca',
                'color'                => 'Color',
                'cost'                 => 'Costo',
                'description'          => 'Descripción',
                'featured'             => 'Destacado',
                'guest-checkout'       => 'Compra como invitado',
                'height'               => 'Altura',
                'length'               => 'Longitud',
                'manage-stock'         => 'Gestionar stock',
                'meta-description'     => 'Meta Descripción',
                'meta-keywords'        => 'Meta Palabras Clave',
                'meta-title'           => 'Meta Título',
                'name'                 => 'Nombre',
                'new'                  => 'Nuevo',
                'price'                => 'Precio',
                'product-number'       => 'Número de Producto',
                'short-description'    => 'Descripción Corta',
                'size'                 => 'Tamaño',
                'sku'                  => 'SKU',
                'special-price-from'   => 'Precio Especial Desde',
                'special-price-to'     => 'Precio Especial Hasta',
                'special-price'        => 'Precio Especial',
                'status'               => 'Estado',
                'tax-category'         => 'Categoría Fiscal',
                'url-key'              => 'Clave URL',
                'visible-individually' => 'Visible Individualmente',
                'weight'               => 'Peso',
                'width'                => 'Ancho',
            ],
            'attribute-options' => [
                'black'  => 'Negro',
                'green'  => 'Verde',
                'l'      => 'Grande',
                'm'      => 'Mediano',
                'red'    => 'Rojo',
                's'      => 'Pequeño',
                'white'  => 'Blanco',
                'xl'     => 'Muy Grande',
                'yellow' => 'Amarillo',
            ],
        ],
        'category' => [
            'categories' => [
                'description' => 'Descripción de la Categoría',
                'name'        => 'Categoría Principal',
            ],
            'category_fields' => [
                'name'        => 'Nombre',
                'description' => 'Descripción',
            ],
        ],
        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'Contenido sobre nosotros',
                    'title'   => 'Acerca de nosotros',
                ],
                'contact-us' => [
                    'content' => 'Contenido de contacto',
                    'title'   => 'Contáctenos',
                ],
                'customer-service' => [
                    'content' => 'Contenido de servicio al cliente',
                    'title'   => 'Servicio al cliente',
                ],
                'payment-policy' => [
                    'content' => 'Contenido de política de pago',
                    'title'   => 'Política de Pago',
                ],
                'privacy-policy' => [
                    'content' => 'Contenido de política de privacidad',
                    'title'   => 'Política de Privacidad',
                ],
                'refund-policy' => [
                    'content' => 'Contenido de política de reembolso',
                    'title'   => 'Política de Reembolso',
                ],
                'return-policy' => [
                    'content' => 'Contenido de política de devoluciones',
                    'title'   => 'Política de Devoluciones',
                ],
                'shipping-policy' => [
                    'content' => 'Contenido de política de envío',
                    'title'   => 'Política de Envío',
                ],
                'terms-conditions' => [
                    'content' => 'Contenido de términos y condiciones',
                    'title'   => 'Términos y Condiciones',
                ],
                'terms-of-use' => [
                    'content' => 'Contenido de términos de uso',
                    'title'   => 'Términos de Uso',
                ],
                'whats-new' => [
                    'content' => 'Contenido de lo nuevo',
                    'title'   => 'Lo Nuevo',
                ],
            ],
        ],
        'core' => [
            'channels' => [
                'meta-title'       => 'Tienda de Ejemplo',
                'meta-keywords'    => 'Palabras clave meta de la tienda de ejemplo',
                'meta-description' => 'Descripción meta de la tienda de ejemplo',
                'name'             => 'Estándar',
            ],
            'currencies' => [
                'AED' => 'Dirham de Emiratos Árabes Unidos',
                'AFN' => 'Afgani',
                'CNY' => 'Yuan Chino',
                'EUR' => 'Euro',
                'GBP' => 'Libra Esterlina',
                'INR' => 'Rupia India',
                'IRR' => 'Rial Iraní',
                'JPY' => 'Yen Japonés',
                'RUB' => 'Rublo Ruso',
                'SAR' => 'Riyal Saudí',
                'TRY' => 'Lira Turca',
                'UAH' => 'Grivna Ucraniana',
                'USD' => 'Dólar Estadounidense',
            ],
        ],
        'customer' => [
            'customer-groups' => [
                'general'   => 'General',
                'guest'     => 'Invitado',
                'wholesale' => 'Mayorista',
            ],
        ],
        'inventory' => [
            'inventory-sources' => [
                'name' => 'Estándar',
            ],
        ],
        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name'    => 'Todos los productos',
                    'options' => [
                        'title' => 'Todos los productos',
                    ],
                ],
                'bold-collections' => [
                    'content' => [
                        'btn-title'   => 'Ver todos',
                        'description' => 'Explora nuestras colecciones audaces! Realza tu estilo con colores vibrantes y diseños atrevidos. Agrega un toque de color y estilo a tu guardarropa con estos patrones brillantes y colores saturados. ¡Prepárate para una nueva aventura audaz!',
                        'title'       => '¡Prepárate para nuestras nuevas colecciones audaces!',
                    ],
                    'name' => 'Colecciones Audaces',
                ],
                'categories-collections' => [
                    'name' => 'Colecciones por Categorías',
                ],
                'featured-collections' => [
                    'name'    => 'Colecciones Destacadas',
                    'options' => [
                        'title' => 'Productos Destacados',
                    ],
                ],
                'footer-links' => [
                    'name'    => 'Enlaces del Pie de Página',
                    'options' => [
                        'about-us'         => 'Acerca de Nosotros',
                        'contact-us'       => 'Contáctenos',
                        'customer-service' => 'Servicio al Cliente',
                        'payment-policy'   => 'Política de Pago',
                        'privacy-policy'   => 'Política de Privacidad',
                        'refund-policy'    => 'Política de Reembolso',
                        'return-policy'    => 'Política de Devoluciones',
                        'shipping-policy'  => 'Política de Envío',
                        'terms-conditions' => 'Términos y Condiciones',
                        'terms-of-use'     => 'Términos de Uso',
                        'whats-new'        => 'Lo Nuevo',
                    ],
                ],
                'game-container' => [
                    'content' => [
                        'sub-title-1' => 'Nuestras Colecciones',
                        'sub-title-2' => 'Nuestras Colecciones',
                        'title'       => '¡Juega con nuevos productos!',
                    ],
                    'name' => 'Contenedor de Juegos',
                ],
                'image-carousel' => [
                    'name'    => 'Carrusel de Imágenes',
                    'sliders' => [
                        'title' => 'Prepárate para nuevas colecciones',
                    ],
                ],
                'new-products' => [
                    'name'    => 'Nuevos Productos',
                    'options' => [
                        'title' => 'Nuevos Productos',
                    ],
                ],
                'offer-information' => [
                    'content' => [
                        'title' => '¡Empieza a explorar con un 40% de descuento en tu primera compra!',
                    ],
                    'name' => 'Información sobre Ofertas',
                ],
                'services-content' => [
                    'description' => [
                        'emi-available-info'   => 'Todos los principales métodos de pago ofrecen financiamiento gratuito',
                        'free-shipping-info'   => 'Envio gratuito para todos los pedidos',
                        'product-replace-info' => 'Reemplazo de producto simple',
                        'time-support-info'    => 'Soporte en línea y correo electrónico 24/7',
                    ],
                    'name'  => 'Contenido de Servicios',
                    'title' => [
                        'emi-available'   => 'Financiamiento gratuito',
                        'free-shipping'   => 'Envio gratuito',
                        'product-replace' => 'Reemplazo de productos',
                        'time-support'    => 'Soporte 24/7',
                    ],
                ],
                'top-collections' => [
                    'content' => [
                        'sub-title-1' => 'Nuestras Colecciones',
                        'sub-title-2' => 'Nuestras Colecciones',
                        'sub-title-3' => 'Nuestras Colecciones',
                        'sub-title-4' => 'Nuestras Colecciones',
                        'sub-title-5' => 'Nuestras Colecciones',
                        'sub-title-6' => 'Nuestras Colecciones',
                        'title'       => '¡Juega con nuevos productos!',
                    ],
                    'name' => 'Colecciones Destacadas',
                ],
            ],
        ],
        'user' => [
            'roles' => [
                'description' => 'Este rol tendrá acceso completo a todas las funciones',
                'name'        => 'Administrador',
            ],
            'users' => [
                'name' => 'Ejemplo',
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Administrador',
                'unopim'           => 'UnoPim',
                'confirm-password' => 'Confirmar Contraseña',
                'email-address'    => 'admin@example.com',
                'email'            => 'Correo Electrónico',
                'password'         => 'Contraseña',
                'title'            => 'Crear Administrador',
            ],

            'environment-configuration' => [
                'allowed-currencies'  => 'Monedas Permitidas',
                'allowed-locales'     => 'Idiomas Permitidos',
                'application-name'    => 'Nombre de la Aplicación',
                'unopim'              => 'UnoPim',
                'chinese-yuan'        => 'Yuan Chino (CNY)',
                'database-connection' => 'Conexión de Base de Datos',
                'database-hostname'   => 'Nombre del Servidor de Base de Datos',
                'database-name'       => 'Nombre de la Base de Datos',
                'database-password'   => 'Contraseña de la Base de Datos',
                'database-port'       => 'Puerto de la Base de Datos',
                'database-prefix'     => 'Prefijo de la Base de Datos',
                'database-username'   => 'Usuario de la Base de Datos',
                'default-currency'    => 'Moneda Predeterminada',
                'default-locale'      => 'Idioma Predeterminado',
                'default-timezone'    => 'Zona Horaria Predeterminada',
                'default-url-link'    => 'https://localhost',
                'default-url'         => 'URL Predeterminada',
                'dirham'              => 'Dírham (AED)',
                'euro'                => 'Euro (EUR)',
                'iranian'             => 'Rial Iraní (IRR)',
                'israeli'             => 'Shekel Israelí (ILS)',
                'japanese-yen'        => 'Yen Japonés (JPY)',
                'mysql'               => 'MySQL',
                'pgsql'               => 'pgSQL',
                'pound'               => 'Libra Esterlina (GBP)',
                'rupee'               => 'Rupia India (INR)',
                'russian-ruble'       => 'Rublo Ruso (RUB)',
                'saudi'               => 'Riyal Saudí (SAR)',
                'select-timezone'     => 'Seleccionar Zona Horaria',
                'sqlsrv'              => 'SQLSRV',
                'title'               => 'Configuración de Base de Datos',
                'turkish-lira'        => 'Lira Turca (TRY)',
                'ukrainian-hryvnia'   => 'Grivna Ucraniana (UAH)',
                'usd'                 => 'Dólar Estadounidense (USD)',
                'warning-message'     => '¡Advertencia! Las configuraciones de idioma y moneda predeterminadas son permanentes y no se pueden cambiar.',
            ],

            'installation-processing' => [
                'unopim'      => 'Instalación de UnoPim',
                'unopim-info' => 'Creando las tablas de la base de datos, esto puede tardar un momento',
                'title'       => 'Instalación',
            ],

            'installation-completed' => [
                'admin-panel'               => 'Panel de Administración',
                'unopim-forums'             => 'Foro de UnoPim',
                'explore-unopim-extensions' => 'Explorar Extensiones de UnoPim',
                'title-info'                => 'UnoPim se ha instalado correctamente en tu sistema.',
                'title'                     => 'Instalación Completada',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Crear las tablas de la base de datos',
                'install-info-button'     => 'Haz clic en el botón de abajo para',
                'install-info'            => 'UnoPim para la instalación',
                'install'                 => 'Instalación',
                'populate-database-table' => 'Poblar las tablas de la base de datos',
                'start-installation'      => 'Iniciar Instalación',
                'title'                   => 'Listo para la Instalación',
            ],

            'start' => [
                'locale'        => 'Idioma',
                'main'          => 'Comenzar',
                'select-locale' => 'Seleccionar Idioma',
                'title'         => 'Instalación de UnoPim',
                'welcome-title' => 'Bienvenido a UnoPim :version',
            ],

            'server-requirements' => [
                'calendar'    => 'Calendario',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'DOM',
                'fileinfo'    => 'FileInfo',
                'filter'      => 'Filtro',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'Intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'OpenSSL',
                'pcre'        => 'PCRE',
                'pdo'         => 'PDO',
                'php-version' => '8.2 o superior',
                'php'         => 'PHP',
                'session'     => 'Sesión',
                'title'       => 'Requisitos del Sistema',
                'tokenizer'   => 'Tokenizador',
                'xml'         => 'XML',
            ],

            'back'                     => 'Volver',
            'unopim-info'              => 'Un Proyecto Comunitario de',
            'unopim-logo'              => 'Logo de UnoPim',
            'unopim'                   => 'UnoPim',
            'continue'                 => 'Continuar',
            'installation-description' => 'La instalación de UnoPim generalmente involucra varios pasos. Aquí tienes una guía general:',
            'wizard-language'          => 'Idioma del Asistente de Instalación',
            'installation-info'        => '¡Estamos encantados de verte aquí!',
            'installation-title'       => 'Bienvenido a la Instalación',
            'save-configuration'       => 'Guardar Configuración',
            'skip'                     => 'Omitir',
            'title'                    => 'Asistente de Instalación de UnoPim',
            'webkul'                   => 'Webkul',
        ],
    ],
];
