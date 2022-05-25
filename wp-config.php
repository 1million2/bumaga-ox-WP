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
define( 'DB_NAME', 'bumaga-ox' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'bumaga-ox' );

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
define( 'AUTH_KEY',         'A<{NJ}f9M+|/R|iWy`FI4]Vf^-=eJ}Nj;a=JJ1CXZ;#MlN)75O,Bm&_%?UhWbY;k' );
define( 'SECURE_AUTH_KEY',  'cv&h};^cQtdX8Sx$Qpy#Q?gT6gM$^/Ec^la<dW9B!*ZFGqJl?XxYhQrJ3*aZuV-B' );
define( 'LOGGED_IN_KEY',    ',a<EYFAgZf$upJ5DqOdN:17mp.EhX?iGdq)Y*|mhJS+w1gx,ly1bR13SAS?p=fap' );
define( 'NONCE_KEY',        'zX1 UpLfQ@1hV#3[)2~2P)@K86xE^MP;)t%ok[xIga%)1Me}/&<T y+H>OU5Re{u' );
define( 'AUTH_SALT',        'gH<2w,O;gnr&az>#M4oy&Icf%NHzKi!z]r{S$5:4s,Wzdp6ez H2RUA-X3EZS$~y' );
define( 'SECURE_AUTH_SALT', '0Mg&1/W=(/?VBzPGZq}(pQ`EC7}4?11@Pq8u2B2(rhDY2-8T=tQ1BZC]q4kApQHR' );
define( 'LOGGED_IN_SALT',   '9|HZ)!6!S1ph%6@fDpqk.h+o@Jfk(1Q:FT;GV7_6t![8pAI/rP0/|/^e3Y4=_jdb' );
define( 'NONCE_SALT',       'DIF3CUlBcB_!|)t5Wn;6BsomoDt[O>hP1[G5IpP}3B]<s!9elNc@/RJxLw4:uNP%' );

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
