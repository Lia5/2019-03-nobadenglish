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
define( 'DB_NAME', 'teache7q_nbe' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'teache7q_nbe' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'jxat0X9FYdGZ2h6S' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Xjdm(G[:Vz(J){V,^L`3vq1J`bR}c*T}g0Db|-[m@4e_TjUBaXBU[7}aA.bURIAC' );
define( 'SECURE_AUTH_KEY',  '2>[Y8CJUGi2-<b2-d@RjkJ4)AjO=,2 P~11Ii=<5!(9SwW+>BrPTJ:=jDY!S>!L=' );
define( 'LOGGED_IN_KEY',    'FptX/~PDJ2N,^b_oM@fn;UFp:Yra !=i}_5PBKq/FC9U8rf,2S&<X_+k?8-Eu&/g' );
define( 'NONCE_KEY',        ';(@Pm-P CKW@e6IOyZb!vm<as9D%BUolT}wER^+82>w4cg| VsjETaS#6$|Z{{G(' );
define( 'AUTH_SALT',        't(}qtAE2-0YX,dmE50B3vA>kIfeaNBKr4uj_S$M,GE0!ygvaOv%`@EF*+qs[6G%r' );
define( 'SECURE_AUTH_SALT', 'Ie0/WSrZ_|63VtZ_B#)mg]~rU0-u*%oy{Gnd 9s,NJ@ rnwnJbJuQ8gLV>e*d00*' );
define( 'LOGGED_IN_SALT',   'B:kY,[x?-OQ!T:Rfu`*L)I_R=;yGUnd-4qu}!zhbKsagz0>NYOSAa>#c~l1wPt#[' );
define( 'NONCE_SALT',       '3;Z)Qzt>NqE`)DN)yT3F`&9~$1IM#7S-{yyB9`R@Z3nIL@i`O)6#@fsxx-J~|Q]D' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
