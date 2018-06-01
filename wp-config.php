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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'KTLR+_lSLmN|BF+4N@f+5/$l`kQ87TgJ@?!S{{i,K,Uh;Oe$q88v9!c`5#s?n*/n');
define('SECURE_AUTH_KEY',  'QO|@r>X@,Mg~fax?82$q.PDxQntm<$4sO<Eqi&E3nf;tB?h>V{^Hi[8mi5bIyt8g');
define('LOGGED_IN_KEY',    '(:>.<vC@xYP$YRfA-0YP/o@n{j(sV>4 ]iopJfP!:IL1d?LuDp}ASh}fTsZnZ/8;');
define('NONCE_KEY',        '$!dQ8![ll!o>kCY!}?rv6ECcE^4[$!QBVX}9!`uhT7!fsIV@pN3m ]2T:S*p!tv/');
define('AUTH_SALT',        'YhOe0Hg(MrS-$+NZD!r2U[pAXd3|i&gWYgfM20i ~w*dEFsrym:5m59 ??8;0[%P');
define('SECURE_AUTH_SALT', 'onIv2%Yh|E6!*{_.LzRkJ4WSUit^h|>J89c&2mH}y0myFI&0 d@rM~n(Ps9+JeHH');
define('LOGGED_IN_SALT',   'sQT<9kuHJ>@4-v(U0<v)q/JSb`cq$D##ua0VU#{_Uv&cC3L4Y) o.P[{K3+(Vz],');
define('NONCE_SALT',       '(,ArfEsqxU^T4oem7`GC3*LsjC?t.E+:;C,V P`Ox4([1qi23h s2d]+7.V:Ejh[');

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
define('WP_DEBUG', true);
//define('WP_DEBUG', false);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

define('CONCATENATE_SCRIPTS', false);


/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
