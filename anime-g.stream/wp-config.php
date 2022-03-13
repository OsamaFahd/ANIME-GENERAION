<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //
/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'yashiro_anim' );
/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'yashiro_anim' );
/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', 'Osama111' );
/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );
/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );
/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );
/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u9/CmY/09<e%:MF&F,*/x<xsyF&nz=]s|)dmH>Rxt}UY,I-?i,-,0%1*qSue-;+P' );
define( 'SECURE_AUTH_KEY',  '-k%$prp+vNY;(EY ?DF+e`%vg%p*KXVoS^>Wks~Ybf}6WImi|$]rf`@WH!1f6IdD' );
define( 'LOGGED_IN_KEY',    '2)7wPbW&`dtcW^v#q0?E} ~n[#L{lKf#t0-O.~/xCcM0X7vOR#ANb)Azs^<pbR:g' );
define( 'NONCE_KEY',        'Tge+0#)E=)lDTs9@r_j~BvaSdNbQNU8E#$_;IuEnhQlt#.4kf@`*jMvmfYogjd(b' );
define( 'AUTH_SALT',        '/S}NjzIM+L*g-4|6>kM9pO)Ovw3^!<a~FHbs&WxTaB]u-(dDE=BoW4u+wwXQGR1p' );
define( 'SECURE_AUTH_SALT', '+65q@gy^x(L)+0u`u^z5p#z;-hh1g3rp}n,?$V;=77;#~#a?] _fXTrxUYY0O].L' );
define( 'LOGGED_IN_SALT',   '=4ccNHu/TS2Q kLR0W[2Ylht<jf[~Md+B.!Vdmi$E$t&m?l${rv?@56 ~`I7-!4=' );
define( 'NONCE_SALT',       '^s.38;]O&C8 cD37xuY~ykhW;%S9k6 }g-q<4P@NEWMBcE*@m?>+pg2q,{V2=BeF' );
/**#@-*/
/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';
/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */
/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );