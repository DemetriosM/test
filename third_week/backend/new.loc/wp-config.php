<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'blackandwhite');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Mz(2X)?9=O!eY?c~c~kV~[/O$X9XLFPZq7NR2vaW<dS!;v0|Z4J9y8Uz-^f{-s.R');
define('SECURE_AUTH_KEY',  't`qC-s]d-S{--z>@ki+PJ&d5+80D:sX#cQKS3titSdx,D71lkVq7o&)%NKROFz,F');
define('LOGGED_IN_KEY',    'mkt eAk7v@qN:Djj?JyIl;L9L6`gFWcfw4#Q4<<JJ%$QYz]ZFRtvm1gT/%[2CW2Z');
define('NONCE_KEY',        'p!Q3`_J]@&rZ&euu KdV~$1chrgG~4Pr<gB](GEEDSrmO`Nw<zCaJ;z4vr8NR1oA');
define('AUTH_SALT',        'gC .}~jDj;K6r5>.K`*GYsyr]q`;~|Q35V8[Ez[`fO5-U$^>.vzy&Q`%U.}!xWe4');
define('SECURE_AUTH_SALT', 'vDldL_k1An!bsRCB.{AH-S(oB_Hi;pI3XozB?Z=p0tzmIara*yJ%4IXrH[f>#.f9');
define('LOGGED_IN_SALT',   'K6p;XmxV#fh0w@ &PLu9OY*<I0L$7rLd?9Z%=ith|SVF}CiZ3^B,@@^.^U#<3<PN');
define('NONCE_SALT',       ']JKHfjV_]6$|c $YC3qR{&@]2 hzQ5z1?&:TX!J4Pf9&yr(DIwPr#V88i@|HC:lR');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
