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
define( 'DB_NAME', 'C5CTjjXhqo' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'C5CTjjXhqo' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Eu6f3raCnq' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'bayrPibTA)?I#w@&d!Q5)tnhY/dG?*5i(T2l`a+> j:=CR!`6rd6[M^u*)&#cPPu' );
define( 'SECURE_AUTH_KEY',  '{mhcFsrf%AH3b..D-qpLTw]`jhp>E@zE?#^do3@nd-2. UKGfmFUrb8;@Dr7/MAM' );
define( 'LOGGED_IN_KEY',    'FI_WxrkDz#Yb;rmi.{%>;!k[8TWblfZLWta751<Nd?LROJzM}:x%$rRqK,)R[[<H' );
define( 'NONCE_KEY',        '#goBO yI3b;j%g19$f1KQ]pvVX+WhXuyLN^YB6X}TgN0P(_gmbwK2sFv,.tb/E/n' );
define( 'AUTH_SALT',        'b}]EQ)h^](^$;z:jIli@y=NK@$JTxk2,GNII>PkG+(b4&3>v1N=}Hz:aVSy)qu?B' );
define( 'SECURE_AUTH_SALT', 'C&6y~Q{-?V8$%:v#HN:d!`Z su_W&JC-[_zfqFjvzzu_1s@MpCFX3/gR (}&4%p@' );
define( 'LOGGED_IN_SALT',   '4C#UTFu:<r=nVe/qOpaw5$)l3^^eC3=ao<16p2EidCK(Bi`l5`AZw!$^eTOU/ 3:' );
define( 'NONCE_SALT',       'NfLn1he6k<p?DeH[1s|M,Gx/BPG4gO$#Q^^:`OWU9i;PRA+NGQ2+nebt~]Z:X%XM' );

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
