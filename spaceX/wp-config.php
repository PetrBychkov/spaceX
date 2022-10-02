<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'spacex' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i=PY@ThY4Lj+.m/?yAq.X-9>Yt4;C^|&{RI:kz>p3Zu&[CU4-EAWtVVRVEb[l-kl' );
define( 'SECURE_AUTH_KEY',  'Id~}#1O:{@C#2B[;AKmtdkxNwOIx0o@6bO!!|tu`1Ncb]Z#4eE?AI;+2CZ>PfLjh' );
define( 'LOGGED_IN_KEY',    'wd-TNYC0P2~/,,&[AcTZ]1*-{HRN80wAu4HM`soG*4e$N!8)$1$XHx/lhuc(Tzg[' );
define( 'NONCE_KEY',        'd$xf/64P8s{o8ucmEOHM$Zf H4=m1S3P]IGK[.J=4cgC5mr@60AY8H@~s/![hcVi' );
define( 'AUTH_SALT',        'o:tA1(zumS5)WfA.Uttyz}9&FUhJulhnJoAF}Xspt35Jbd:ISMV6k%4`LkSEDY3;' );
define( 'SECURE_AUTH_SALT', 'rYT[~Tc!eMoh?>1>p6(KMjK5hgaxA8>/d{ot1Gl{MXM[*~z+?q3AVQS@OV<(VpRa' );
define( 'LOGGED_IN_SALT',   'b0Gq4U}preR2rLq(:Xj7IOGqc^E4A+YNs<3b|%ifCcOJ;gH/dvOX--_G&jPz#(}B' );
define( 'NONCE_SALT',       'H@oRzf7&&ajuD@gzFS6xg%%$.%(hc X+AvrGmQmUYMJ)OXo&,+)[+2L;AgzExcRq' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
