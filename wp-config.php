<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'guitar' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g$r7yfYt$OQ,0&rV@? W>T?#]2:UBcBXA(FKVF[NQ3[@5/Zpcs9{[Ltb6[I_@kX_' );
define( 'SECURE_AUTH_KEY',  ')A}U!ku00kU<n~!<{2EC,e<lfZcC;1O4ud52s7f)zze14H)wk:f=b|1}Q2bnVk6{' );
define( 'LOGGED_IN_KEY',    '|ic4N.0x<b1?hCv3OV)z2nG}zJ$f#X!<Cgu|jP3Z %esPbGDMdEz?$ql[ly*m&u~' );
define( 'NONCE_KEY',        'mBt:z&~-{kDD*rAo[!~z3u(txX>acceciy~n&)wVX]C,scgL^G):!5z!p}`-C8Ha' );
define( 'AUTH_SALT',        'wo9``gIH76;&fLP]6I``9aQfIn(J].w4]/`sVm@05&?fzW)0H[v-lP<-so3@:7e/' );
define( 'SECURE_AUTH_SALT', 'T:pCq9stI:iO>g}rbsfTPf~@c`u/F}dD@K{Sjd03s17{!b04D7*u)OjsZ!BFori[' );
define( 'LOGGED_IN_SALT',   'x w&=(w_UCk`$?Z[$!oU_#<_G^=dNiL^zO*`V^z6?T)sb=1Ks$6(!EeW66QF!PVj' );
define( 'NONCE_SALT',       'ZKT{jK]Bp&;8n19!)Im< jJ{TD!g dO4l{HPePRfzR9k?lH01|s5GHh4Qp|{KSq{' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
