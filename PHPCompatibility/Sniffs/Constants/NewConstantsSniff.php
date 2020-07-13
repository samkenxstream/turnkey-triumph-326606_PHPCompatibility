<?php
/**
 * PHPCompatibility, an external standard for PHP_CodeSniffer.
 *
 * @package   PHPCompatibility
 * @copyright 2012-2020 PHPCompatibility Contributors
 * @license   https://opensource.org/licenses/LGPL-3.0 LGPL3
 * @link      https://github.com/PHPCompatibility/PHPCompatibility
 */

namespace PHPCompatibility\Sniffs\Constants;

use PHPCompatibility\AbstractNewFeatureSniff;
use PHP_CodeSniffer_File as File;

/**
 * Detect use of new PHP native global constants.
 *
 * PHP version All
 *
 * @since 8.1.0
 */
class NewConstantsSniff extends AbstractNewFeatureSniff
{

    /**
     * A list of new PHP Constants, not present in older versions.
     *
     * The array lists : version number with false (not present) or true (present).
     * If's sufficient to list the first version where the constant appears.
     *
     * Note: PHP constants are case-sensitive!
     *
     * @since 8.1.0
     *
     * @var array(string => array(string => bool))
     */
    protected $newConstants = array(
        'E_STRICT' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        // Curl:
        'CURLOPT_FTP_USE_EPRT' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'CURLOPT_NOSIGNAL' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'CURLOPT_UNRESTRICTED_AUTH' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'CURLOPT_BUFFERSIZE' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'CURLOPT_HTTPAUTH' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'CURLOPT_PROXYPORT' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'CURLOPT_PROXYTYPE' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'CURLOPT_SSLCERTTYPE' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'CURLOPT_HTTP200ALIASES' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        // Math:
        'M_PI' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_E' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_LOG2E' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_LOG10E' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_LN2' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_LN10' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_PI_2' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_PI_4' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_1_PI' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_2_PI' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_2_SQRTPI' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_SQRT2' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'M_SQRT1_2' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'NAN' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'INF' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        // OpenSSL:
        'OPENSSL_ALGO_MD2' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'OPENSSL_ALGO_MD4' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'OPENSSL_ALGO_MD5' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'OPENSSL_ALGO_SHA1' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'OPENSSL_ALGO_DSS1' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        // Tokenizer:
        'T_ABSTRACT' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        'T_CATCH' => array(
            '4.4' => false,
            '5.0' => true,
        ),
        // Tidy:
        'TIDY_TAG_UNKNOWN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_A' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_ABBR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_ACRONYM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_ALIGN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_APPLET' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_AREA' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_B' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BASE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BASEFONT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BDO' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BGSOUND' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BIG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BLINK' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BLOCKQUOTE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BODY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BUTTON' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_CAPTION' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_CENTER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_CITE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_CODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_COL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_COLGROUP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_COMMENT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DD' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DEL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DFN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DIR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DIV' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_EM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_EMBED' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_FIELDSET' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_FONT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_FORM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_FRAME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_FRAMESET' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_H1' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_H2' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_H3' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_H4' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_H5' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_H6' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_HEAD' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_HR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_HTML' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_I' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_IFRAME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_ILAYER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_IMG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_INPUT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_INS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_ISINDEX' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_KBD' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_KEYGEN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_LABEL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_LAYER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_LEGEND' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_LI' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_LINK' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_LISTING' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_MAP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_MARQUEE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_MENU' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_META' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_MULTICOL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_NOBR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_NOEMBED' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_NOFRAMES' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_NOLAYER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_NOSAVE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_NOSCRIPT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_OBJECT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_OL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_OPTGROUP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_OPTION' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_P' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_PARAM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_PLAINTEXT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_PRE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_Q' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_RB' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_RBC' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_RP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_RT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_RTC' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_RUBY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_S' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SAMP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SCRIPT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SELECT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SERVER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SERVLET' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SMALL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SPACER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SPAN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_STRIKE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_STRONG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_STYLE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SUB' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SUP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TABLE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TBODY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TD' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TEXTAREA' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TFOOT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_THEAD' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TITLE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_U' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_UL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_VAR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_WBR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_XMP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_ROOT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_DOCTYPE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_COMMENT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_PROCINS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_TEXT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_START' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_END' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_STARTEND' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_CDATA' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_SECTION' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_ASP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_JSTE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_PHP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_NODETYPE_XMLDECL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'tidy',
        ),
        // Soap:
        'SOAP_1_1' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_1_2' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_PERSISTENCE_SESSION' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_PERSISTENCE_REQUEST' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_FUNCTIONS_ALL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_ENCODED' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_LITERAL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_RPC' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_DOCUMENT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_ACTOR_NEXT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_ACTOR_NONE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_ACTOR_UNLIMATERECEIVER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_COMPRESSION_ACCEPT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_COMPRESSION_GZIP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_COMPRESSION_DEFLATE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_AUTHENTICATION_BASIC' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_AUTHENTICATION_DIGEST' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'UNKNOWN_TYPE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_STRING' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_BOOLEAN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_DECIMAL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_FLOAT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_DOUBLE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_DURATION' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_DATETIME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_TIME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_DATE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_GYEARMONTH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_GYEAR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_GMONTHDAY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_GDAY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_GMONTH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_HEXBINARY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_BASE64BINARY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_ANYURI' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_QNAME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NOTATION' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NORMALIZEDSTRING' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_TOKEN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_LANGUAGE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NMTOKEN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NAME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NCNAME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_ID' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_IDREF' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_IDREFS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_ENTITY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_ENTITIES' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_INTEGER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NONPOSITIVEINTEGER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NEGATIVEINTEGER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_LONG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_INT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_SHORT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_BYTE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NONNEGATIVEINTEGER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_UNSIGNEDLONG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_UNSIGNEDINT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_UNSIGNEDSHORT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_UNSIGNEDBYTE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_POSITIVEINTEGER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NMTOKENS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_ANYTYPE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_ANYXML' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'APACHE_MAP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_ENC_OBJECT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_ENC_ARRAY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_1999_TIMEINSTANT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_NAMESPACE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XSD_1999_NAMESPACE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_SINGLE_ELEMENT_ARRAYS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_WAIT_ONE_WAY_CALLS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'SOAP_USE_XSI_ARRAY_TYPE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'WSDL_CACHE_NONE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'WSDL_CACHE_DISK' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'WSDL_CACHE_MEMORY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'WSDL_CACHE_BOTH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'soap',
        ),
        'XML_ELEMENT_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_TEXT_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_CDATA_SECTION_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ENTITY_REF_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ENTITY_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_PI_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_COMMENT_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_DOCUMENT_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_DOCUMENT_TYPE_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_DOCUMENT_FRAG_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_NOTATION_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_HTML_DOCUMENT_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_DTD_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ELEMENT_DECL_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_DECL_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ENTITY_DECL_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_NAMESPACE_DECL_NODE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_CDATA' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_ID' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_IDREF' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_IDREFS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_ENTITY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_NMTOKEN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_NMTOKENS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_ENUMERATION' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XML_ATTRIBUTE_NOTATION' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_PHP_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_INDEX_SIZE_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOMSTRING_SIZE_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_HIERARCHY_REQUEST_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_WRONG_DOCUMENT_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_INVALID_CHARACTER_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_NO_DATA_ALLOWED_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_NO_MODIFICATION_ALLOWED_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_NOT_FOUND_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_NOT_SUPPORTED_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_INUSE_ATTRIBUTE_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_INVALID_STATE_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_SYNTAX_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_INVALID_MODIFICATION_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_NAMESPACE_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_INVALID_ACCESS_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'DOM_VALIDATION_ERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'dom',
        ),
        'XSL_CLONE_AUTO' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_CLONE_NEVER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_CLONE_ALWAYS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_SECPREF_NONE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_SECPREF_READ_FILE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_SECPREF_WRITE_FILE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_SECPREF_CREATE_DIRECTORY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_SECPREF_READ_NETWORK' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_SECPREF_WRITE_NETWORK' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        'XSL_SECPREF_DEFAULT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'xsl',
        ),
        // SQLite
        'SQLITE_ASSOC' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_BOTH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_NUM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_OK' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_ERROR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_INTERNAL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_PERM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_ABORT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_BUSY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_LOCKED' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_NOMEM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_READONLY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_INTERRUPT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_IOERR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_NOTADB' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_CORRUPT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_FORMAT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_NOTFOUND' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_FULL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_CANTOPEN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_PROTOCOL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_EMPTY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_SCHEMA' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_TOOBIG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_CONSTRAINT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_MISMATCH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_MISUSE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_NOLFS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_AUTH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_ROW' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'SQLITE_DONE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'sqlite',
        ),
        'MYSQLI_READ_DEFAULT_GROUP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_READ_DEFAULT_FILE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_OPT_CONNECT_TIMEOUT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_OPT_LOCAL_INFILE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_INIT_COMMAND' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CLIENT_SSL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CLIENT_COMPRESS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CLIENT_INTERACTIVE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CLIENT_IGNORE_SPACE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CLIENT_NO_SCHEMA' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CLIENT_MULTI_QUERIES' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_STORE_RESULT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_USE_RESULT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_ASSOC' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_NUM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_BOTH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_NOT_NULL_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_PRI_KEY_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_UNIQUE_KEY_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_MULTIPLE_KEY_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_BLOB_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_UNSIGNED_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_ZEROFILL_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_AUTO_INCREMENT_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TIMESTAMP_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_SET_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_NUM_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_PART_KEY_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_GROUP_FLAG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_DECIMAL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_NEWDECIMAL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_BIT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_TINY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_SHORT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_LONG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_FLOAT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_DOUBLE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_NULL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_TIMESTAMP' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_LONGLONG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_INT24' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_DATE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_TIME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_DATETIME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_YEAR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_NEWDATE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_INTERVAL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_ENUM' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_SET' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_TINY_BLOB' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_MEDIUM_BLOB' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_LONG_BLOB' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_BLOB' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_VAR_STRING' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_STRING' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_CHAR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TYPE_GEOMETRY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_NEED_DATA' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_NO_DATA' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CURSOR_TYPE_FOR_UPDATE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CURSOR_TYPE_NO_CURSOR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CURSOR_TYPE_READ_ONLY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_CURSOR_TYPE_SCROLLABLE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_STMT_ATTR_CURSOR_TYPE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_STMT_ATTR_PREFETCH_ROWS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_SET_CHARSET_NAME' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REPORT_INDEX' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REPORT_ERROR' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REPORT_STRICT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REPORT_ALL' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REPORT_OFF' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_DEBUG_TRACE_ENABLED' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_SERVER_QUERY_NO_INDEX_USED' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REFRESH_GRANT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REFRESH_LOG' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REFRESH_TABLES' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REFRESH_HOSTS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REFRESH_STATUS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REFRESH_THREADS' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REFRESH_SLAVE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_REFRESH_MASTER' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TRANS_COR_AND_CHAIN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TRANS_COR_AND_NO_CHAIN' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TRANS_COR_RELEASE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TRANS_COR_NO_RELEASE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TRANS_START_READ_ONLY' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TRANS_START_READ_WRITE' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_TRANS_START_CONSISTENT_SNAPSHOT' => array(
            '4.4'       => false,
            '5.0'       => true,
            'extension' => 'mysqli',
        ),

        'SORT_LOCALE_STRING' => array(
            '5.0.1' => false,
            '5.0.2' => true,
        ),
        'PHP_EOL' => array(
            '5.0.1' => false,
            '5.0.2' => true,
        ),

        'PHP_INT_MAX' => array(
            '5.0.4' => false,
            '5.0.5' => true,
        ),
        'PHP_INT_SIZE' => array(
            '5.0.4' => false,
            '5.0.5' => true,
        ),

        '__COMPILER_HALT_OFFSET__' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'GLOB_ERR' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        // Curl:
        'CURLFTPAUTH_DEFAULT' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'CURLFTPAUTH_SSL' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'CURLFTPAUTH_TLS' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'CURLOPT_AUTOREFERER' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'CURLOPT_BINARYTRANSFER' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'CURLOPT_COOKIESESSION' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'CURLOPT_FTPSSLAUTH' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'CURLOPT_PROXYAUTH' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'CURLOPT_TIMECONDITION' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        // POSIX:
        'POSIX_F_OK' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'POSIX_R_OK' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'POSIX_W_OK' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'POSIX_X_OK' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'POSIX_S_IFBLK' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'POSIX_S_IFCHR' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'POSIX_S_IFIFO' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'POSIX_S_IFREG' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'POSIX_S_IFSOCK' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        // Streams:
        'STREAM_IPPROTO_ICMP' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_IPPROTO_IP' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_IPPROTO_RAW' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_IPPROTO_TCP' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_IPPROTO_UDP' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_PF_INET' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_PF_INET6' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_PF_UNIX' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_SOCK_DGRAM' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_SOCK_RAW' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_SOCK_RDM' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_SOCK_SEQPACKET' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        'STREAM_SOCK_STREAM' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        // Tokenizer:
        'T_HALT_COMPILER' => array(
            '5.0' => false,
            '5.1' => true,
        ),
        // LibXML:
        'LIBXML_COMPACT' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_DOTTED_VERSION' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_DTDATTR' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_DTDLOAD' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_DTDVALID' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_ERR_ERROR' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_ERR_FATAL' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_ERR_NONE' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_ERR_WARNING' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NOBLANKS' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NOCDATA' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NOEMPTYTAG' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NOENT' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NOERROR' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NONET' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NOWARNING' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NOXMLDECL' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_NSCLEAN' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_VERSION' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_XINCLUDE' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'libxml',
        ),
        // Mysqli.
        'MYSQLI_DATA_TRUNCATED' => array(
            '5.0'       => false,
            '5.1'       => true,
            'extension' => 'mysqli',
        ),

        // Date/Time:
        'DATE_ATOM' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_COOKIE' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_ISO8601' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_RFC822' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_RFC850' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_RFC1036' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_RFC1123' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_RFC2822' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_RFC3339' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_RSS' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),
        'DATE_W3C' => array(
            '5.1.0' => false,
            '5.1.1' => true,
        ),

        // Date/Time:
        'SUNFUNCS_RET_TIMESTAMP' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'SUNFUNCS_RET_STRING' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'SUNFUNCS_RET_DOUBLE' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        // Hash:
        'HASH_HMAC' => array(
            '5.1.1'     => false,
            '5.1.2'     => true,
            'extension' => 'hash',
        ),
        // XSL:
        'LIBXSLT_VERSION' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'LIBXSLT_DOTTED_VERSION' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'LIBEXSLT_VERSION' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'LIBEXSLT_DOTTED_VERSION' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        // URL:
        'PHP_URL_SCHEME' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_URL_HOST' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_URL_PORT' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_URL_USER' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_URL_PASS' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_URL_PATH' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_URL_QUERY' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_URL_FRAGMENT' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_QUERY_RFC1738' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),
        'PHP_QUERY_RFC3986' => array(
            '5.1.1' => false,
            '5.1.2' => true,
        ),

        // Curl:
        'CURLINFO_HEADER_OUT' => array(
            '5.1.2' => false,
            '5.1.3' => true,
        ),

        // Core:
        'E_RECOVERABLE_ERROR' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        // Math:
        'M_EULER' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'M_LNPI' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'M_SQRT3' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'M_SQRTPI' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'PATHINFO_FILENAME' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'UPLOAD_ERR_EXTENSION' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        // Curl:
        'CURLE_FILESIZE_EXCEEDED' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'CURLE_FTP_SSL_FAILED' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'CURLE_LDAP_INVALID_URL' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'CURLFTPSSL_ALL' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'CURLFTPSSL_CONTROL' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'CURLFTPSSL_NONE' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'CURLFTPSSL_TRY' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'CURLOPT_FTP_SSL' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        // Ming:
        'SWFTEXTFIELD_USEFONT' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWFTEXTFIELD_AUTOSIZE' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_NOT_COMPRESSED' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_ADPCM_COMPRESSED' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_MP3_COMPRESSED' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_NOT_COMPRESSED_LE' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_NELLY_COMPRESSED' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_5KHZ' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_11KHZ' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_22KHZ' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_44KHZ' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_8BITS' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_16BITS' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_MONO' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SWF_SOUND_STEREO' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        // OpenSSL:
        'OPENSSL_KEYTYPE_EC' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'OPENSSL_VERSION_NUMBER' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'OPENSSL_VERSION_TEXT' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        // PCRE:
        'PREG_BACKTRACK_LIMIT_ERROR' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'PREG_BAD_UTF8_ERROR' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'PREG_INTERNAL_ERROR' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'PREG_NO_ERROR' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'PREG_RECURSION_LIMIT_ERROR' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        // Snmp:
        'SNMP_OID_OUTPUT_FULL' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'SNMP_OID_OUTPUT_NUMERIC' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        // Semaphore:
        'MSG_EAGAIN' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        'MSG_ENOMSG' => array(
            '5.1' => false,
            '5.2' => true,
        ),
        // Filter:
        'INPUT_POST' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'INPUT_GET' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'INPUT_COOKIE' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'INPUT_ENV' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'INPUT_SERVER' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'INPUT_SESSION' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'INPUT_REQUEST' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_NONE' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_REQUIRE_SCALAR' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_REQUIRE_ARRAY' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FORCE_ARRAY' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_NULL_ON_FAILURE' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_VALIDATE_INT' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_VALIDATE_BOOLEAN' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_VALIDATE_FLOAT' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_VALIDATE_REGEXP' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_VALIDATE_URL' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_VALIDATE_EMAIL' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_VALIDATE_IP' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_DEFAULT' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_UNSAFE_RAW' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_STRING' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_STRIPPED' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_ENCODED' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_SPECIAL_CHARS' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_EMAIL' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_URL' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_NUMBER_INT' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_NUMBER_FLOAT' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_SANITIZE_MAGIC_QUOTES' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_CALLBACK' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_ALLOW_OCTAL' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_ALLOW_HEX' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_STRIP_LOW' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_STRIP_HIGH' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_ENCODE_LOW' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_ENCODE_HIGH' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_ENCODE_AMP' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_NO_ENCODE_QUOTES' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_EMPTY_STRING_NULL' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_ALLOW_FRACTION' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_ALLOW_THOUSAND' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_ALLOW_SCIENTIFIC' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_PATH_REQUIRED' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_QUERY_REQUIRED' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_SCHEME_REQUIRED' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_HOST_REQUIRED' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_IPV4' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_IPV6' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_NO_RES_RANGE' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),
        'FILTER_FLAG_NO_PRIV_RANGE' => array(
            '5.1'       => false,
            '5.2'       => true,
            'extension' => 'filter',
        ),

        // Curl:
        'CURLOPT_TCP_NODELAY' => array(
            '5.2.0' => false,
            '5.2.1' => true,
        ),

        // Stream:
        'STREAM_SHUT_RD' => array(
            '5.2.0' => false,
            '5.2.1' => true,
        ),
        'STREAM_SHUT_WR' => array(
            '5.2.0' => false,
            '5.2.1' => true,
        ),
        'STREAM_SHUT_RDWR' => array(
            '5.2.0' => false,
            '5.2.1' => true,
        ),

        'GMP_VERSION' => array(
            '5.2.1' => false,
            '5.2.2' => true,
        ),

        // Curl:
        'CURLOPT_TIMEOUT_MS' => array(
            '5.2.2' => false,
            '5.2.3' => true,
        ),
        'CURLOPT_CONNECTTIMEOUT_MS' => array(
            '5.2.2' => false,
            '5.2.3' => true,
        ),

        // Curl:
        'CURLOPT_PRIVATE' => array(
            '5.2.3' => false,
            '5.2.4' => true,
        ),
        'CURLINFO_PRIVATE' => array(
            '5.2.3' => false,
            '5.2.4' => true,
        ),
        // GD:
        'GD_VERSION' => array(
            '5.2.3' => false,
            '5.2.4' => true,
        ),
        'GD_MAJOR_VERSION' => array(
            '5.2.3' => false,
            '5.2.4' => true,
        ),
        'GD_MINOR_VERSION' => array(
            '5.2.3' => false,
            '5.2.4' => true,
        ),
        'GD_RELEASE_VERSION' => array(
            '5.2.3' => false,
            '5.2.4' => true,
        ),
        'GD_EXTRA_VERSION' => array(
            '5.2.3' => false,
            '5.2.4' => true,
        ),
        // PCRE:
        'PCRE_VERSION' => array(
            '5.2.3' => false,
            '5.2.4' => true,
        ),

        'PHP_MAJOR_VERSION' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        'PHP_MINOR_VERSION' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        'PHP_RELEASE_VERSION' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        'PHP_VERSION_ID' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        'PHP_EXTRA_VERSION' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        'PHP_ZTS' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        'PHP_DEBUG' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        'FILE_BINARY' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        'FILE_TEXT' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),
        // Sockets:
        'TCP_NODELAY' => array(
            '5.2.6' => false,
            '5.2.7' => true,
        ),

        // Curl:
        'CURLOPT_PROTOCOLS' => array(
            '5.2.9'  => false,
            '5.2.10' => true,
        ),
        'CURLOPT_REDIR_PROTOCOLS' => array(
            '5.2.9'  => false,
            '5.2.10' => true,
        ),
        'CURLPROXY_SOCKS4' => array(
            '5.2.9'  => false,
            '5.2.10' => true,
        ),

        // Libxml:
        'LIBXML_PARSEHUGE' => array(
            '5.2.11'    => false,
            '5.2.12'    => true,
            'extension' => 'libxml',
        ),

        // Core:
        'ENT_IGNORE' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'E_DEPRECATED' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'E_USER_DEPRECATED' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'INI_SCANNER_NORMAL' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'INI_SCANNER_RAW' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_MAXPATHLEN' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_NT_DOMAIN_CONTROLLER' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_NT_SERVER' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_NT_WORKSTATION' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_VERSION_BUILD' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_VERSION_MAJOR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_VERSION_MINOR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_VERSION_PLATFORM' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_VERSION_PRODUCTTYPE' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_VERSION_SP_MAJOR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_VERSION_SP_MINOR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_WINDOWS_VERSION_SUITEMASK' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        // Curl:
        'CURLINFO_CERTINFO' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'CURLOPT_PROGRESSFUNCTION' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'CURLE_SSH' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        // Enchant:
        'ENCHANT_MYSPELL' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'enchant',
        ),
        'ENCHANT_ISPELL' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'enchant',
        ),
        // GD:
        'IMG_FILTER_PIXELATE' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'IMAGETYPE_ICO' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        // Fileinfo:
        'FILEINFO_NONE' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_SYMLINK' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_MIME_TYPE' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_MIME_ENCODING' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_MIME' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_COMPRESS' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_DEVICES' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_CONTINUE' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_PRESERVE_ATIME' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        'FILEINFO_RAW' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'fileinfo',
        ),
        // Intl:
        'INTL_MAX_LOCALE_LEN' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'intl',
        ),
        'IDNA_DEFAULT' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ALLOW_UNASSIGNED' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'intl',
        ),
        'IDNA_USE_STD3_RULES' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'intl',
        ),
        // JSON:
        'JSON_ERROR_CTRL_CHAR' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_ERROR_DEPTH' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_ERROR_NONE' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_ERROR_STATE_MISMATCH' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_ERROR_SYNTAX' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_FORCE_OBJECT' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_HEX_TAG' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_HEX_AMP' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_HEX_APOS' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        'JSON_HEX_QUOT' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'json',
        ),
        // LDAP:
        'LDAP_OPT_NETWORK_TIMEOUT' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        // Libxml:
        'LIBXML_LOADED_VERSION' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'libxml',
        ),
        // Math:
        'PHP_ROUND_HALF_UP' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_ROUND_HALF_DOWN' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_ROUND_HALF_EVEN' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'PHP_ROUND_HALF_ODD' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        // Mysqli
        'MYSQLI_OPT_INT_AND_FLOAT_NATIVE' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_OPT_NET_CMD_BUFFER_SIZE' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_OPT_NET_READ_BUFFER_SIZE' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_OPT_SSL_VERIFY_SERVER_CERT' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_ENUM_FLAG' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'mysqli',
        ),
        'MYSQLI_BINARY_FLAG' => array(
            '5.2'       => false,
            '5.3'       => true,
            'extension' => 'mysqli',
        ),

        // OCI8:
        'OCI_CRED_EXT' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        // PCRE:
        'PREG_BAD_UTF8_OFFSET_ERROR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        // PCNTL:
        'BUS_ADRALN' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'BUS_ADRERR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'BUS_OBJERR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'CLD_CONTIUNED' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'CLD_DUMPED' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'CLD_EXITED' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'CLD_KILLED' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'CLD_STOPPED' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'CLD_TRAPPED' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'FPE_FLTDIV' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'FPE_FLTINV' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'FPE_FLTOVF' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'FPE_FLTRES' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'FPE_FLTSUB' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'FPE_FLTUND' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'FPE_INTDIV' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'FPE_INTOVF' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'ILL_BADSTK' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'ILL_COPROC' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'ILL_ILLADR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'ILL_ILLOPC' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'ILL_ILLOPN' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'ILL_ILLTRP' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'ILL_PRVOPC' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'ILL_PRVREG' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'POLL_ERR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'POLL_HUP' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'POLL_IN' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'POLL_MSG' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'POLL_OUT' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'POLL_PRI' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SEGV_ACCERR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SEGV_MAPERR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_ASYNCIO' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_KERNEL' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_MSGGQ' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_NOINFO' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_QUEUE' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_SIGIO' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_TIMER' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_TKILL' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SI_USER' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SIG_BLOCK' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SIG_SETMASK' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'SIG_UNBLOCK' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'TRAP_BRKPT' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'TRAP_TRACE' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        // Tokenizer:
        'T_DIR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'T_GOTO' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'T_NAMESPACE' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'T_NS_C' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'T_NS_SEPARATOR' => array(
            '5.2' => false,
            '5.3' => true,
        ),
        'T_USE' => array(
            '5.2' => false,
            '5.3' => true,
        ),

        // OCI8:
        'OCI_NO_AUTO_COMMIT' => array(
            '5.3.1' => false,
            '5.3.2' => true,
        ),
        // OpenSSL:
        'OPENSSL_TLSEXT_SERVER_NAME' => array(
            '5.3.1' => false,
            '5.3.2' => true,
        ),
        'FILTER_FLAG_STRIP_BACKTICK' => array(
            '5.3.1' => false,
            '5.3.2' => true,
        ),

        // JSON:
        'JSON_ERROR_UTF8' => array(
            '5.3.2'     => false,
            '5.3.3'     => true,
            'extension' => 'json',
        ),
        'JSON_NUMERIC_CHECK' => array(
            '5.3.2'     => false,
            '5.3.3'     => true,
            'extension' => 'json',
        ),

        'DEBUG_BACKTRACE_IGNORE_ARGS' => array(
            '5.3.5' => false,
            '5.3.6' => true,
        ),

        'CURLINFO_REDIRECT_URL' => array(
            '5.3.6' => false,
            '5.3.7' => true,
        ),
        'PHP_MANDIR' => array(
            '5.3.6' => false,
            '5.3.7' => true,
        ),

        'PHP_BINARY' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'SORT_NATURAL' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'SORT_FLAG_CASE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'ENT_HTML401' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'ENT_XML1' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'ENT_XHTML' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'ENT_HTML5' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'ENT_SUBSTITUTE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'ENT_DISALLOWED' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'IPPROTO_IP' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'IPPROTO_IPV6' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'IPV6_MULTICAST_HOPS' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'IPV6_MULTICAST_IF' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'IPV6_MULTICAST_LOOP' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'IP_MULTICAST_IF' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'IP_MULTICAST_LOOP' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'IP_MULTICAST_TTL' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'MCAST_JOIN_GROUP' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'MCAST_LEAVE_GROUP' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'MCAST_BLOCK_SOURCE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'MCAST_UNBLOCK_SOURCE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'MCAST_JOIN_SOURCE_GROUP' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'MCAST_LEAVE_SOURCE_GROUP' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        // Curl:
        'CURLOPT_MAX_RECV_SPEED_LARGE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'CURLOPT_MAX_SEND_SPEED_LARGE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        // Directories:
        'SCANDIR_SORT_ASCENDING' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'SCANDIR_SORT_DESCENDING' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'SCANDIR_SORT_NONE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        // LibXML:
        'LIBXML_HTML_NODEFDTD' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_HTML_NOIMPLIED' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'libxml',
        ),
        'LIBXML_PEDANTIC' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'libxml',
        ),
        // OpenSSL:
        'OPENSSL_CIPHER_AES_128_CBC' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'OPENSSL_CIPHER_AES_192_CBC' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'OPENSSL_CIPHER_AES_256_CBC' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'OPENSSL_RAW_DATA' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'OPENSSL_ZERO_PADDING' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        // Output buffering:
        'PHP_OUTPUT_HANDLER_CLEAN' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_CLEANABLE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_DISABLED' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_FINAL' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_FLUSH' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_FLUSHABLE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_REMOVABLE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_STARTED' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_STDFLAGS' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_OUTPUT_HANDLER_WRITE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        // Sessions:
        'PHP_SESSION_ACTIVE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_SESSION_DISABLED' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'PHP_SESSION_NONE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        // Streams:
        'STREAM_META_ACCESS' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'STREAM_META_GROUP' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'STREAM_META_GROUP_NAME' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'STREAM_META_OWNER' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'STREAM_META_OWNER_NAME' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'STREAM_META_TOUCH' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        // Intl:
        'U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_CHECK_BIDI' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_CHECK_CONTEXTJ' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_NONTRANSITIONAL_TO_ASCII' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_NONTRANSITIONAL_TO_UNICODE' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'INTL_IDNA_VARIANT_2003' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'INTL_IDNA_VARIANT_UTS46' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_EMPTY_LABEL' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_LABEL_TOO_LONG' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_DOMAIN_NAME_TOO_LONG' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_LEADING_HYPHEN' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_TRAILING_HYPHEN' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_HYPHEN_3_4' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_LEADING_COMBINING_MARK' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_DISALLOWED' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_PUNYCODE' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_LABEL_HAS_DOT' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_INVALID_ACE_LABEL' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_BIDI' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        'IDNA_ERROR_CONTEXTJ' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'intl',
        ),
        // Json:
        'JSON_PRETTY_PRINT' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'json',
        ),
        'JSON_UNESCAPED_SLASHES' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'json',
        ),
        'JSON_UNESCAPED_UNICODE' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'json',
        ),
        'JSON_BIGINT_AS_STRING' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'json',
        ),
        'JSON_OBJECT_AS_ARRAY' => array(
            '5.3'       => false,
            '5.4'       => true,
            'extension' => 'json',
        ),
        // Snmp:
        'SNMP_OID_OUTPUT_SUFFIX' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'SNMP_OID_OUTPUT_MODULE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'SNMP_OID_OUTPUT_UCD' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'SNMP_OID_OUTPUT_NONE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        // Tokenizer:
        'T_CALLABLE' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'T_INSTEADOF' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'T_TRAIT' => array(
            '5.3' => false,
            '5.4' => true,
        ),
        'T_TRAIT_C' => array(
            '5.3' => false,
            '5.4' => true,
        ),

        // Curl:
        'CURLINFO_PRIMARY_IP' => array(
            '5.4.6' => false,
            '5.4.7' => true,
        ),
        'CURLINFO_PRIMARY_PORT' => array(
            '5.4.6' => false,
            '5.4.7' => true,
        ),
        'CURLINFO_LOCAL_IP' => array(
            '5.4.6' => false,
            '5.4.7' => true,
        ),
        'CURLINFO_LOCAL_PORT' => array(
            '5.4.6' => false,
            '5.4.7' => true,
        ),

        // OpenSSL:
        'OPENSSL_ALGO_RMD160' => array(
            '5.4.7' => false,
            '5.4.8' => true,
        ),
        'OPENSSL_ALGO_SHA224' => array(
            '5.4.7' => false,
            '5.4.8' => true,
        ),
        'OPENSSL_ALGO_SHA256' => array(
            '5.4.7' => false,
            '5.4.8' => true,
        ),
        'OPENSSL_ALGO_SHA384' => array(
            '5.4.7' => false,
            '5.4.8' => true,
        ),
        'OPENSSL_ALGO_SHA512' => array(
            '5.4.7' => false,
            '5.4.8' => true,
        ),

        'SO_REUSEPORT' => array(
            '5.4.9' => false,
            '5.4.10' => true,
        ),

        // Filter:
        'FILTER_VALIDATE_MAC' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        // GD
        'IMG_AFFINE_TRANSLATE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_AFFINE_SCALE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_AFFINE_ROTATE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_AFFINE_SHEAR_HORIZONTAL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_AFFINE_SHEAR_VERTICAL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_CROP_DEFAULT' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_CROP_TRANSPARENT' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_CROP_BLACK' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_CROP_WHITE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_CROP_SIDES' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_FLIP_BOTH' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_FLIP_HORIZONTAL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_FLIP_VERTICAL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_BELL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_BESSEL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_BILINEAR_FIXED' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_BICUBIC' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_BICUBIC_FIXED' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_BLACKMAN' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_BOX' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_BSPLINE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_CATMULLROM' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_GAUSSIAN' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_GENERALIZED_CUBIC' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_HERMITE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_HAMMING' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_HANNING' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_MITCHELL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_POWER' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_QUADRATIC' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_SINC' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_NEAREST_NEIGHBOUR' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_WEIGHTED4' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'IMG_TRIANGLE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        // JSON:
        'JSON_ERROR_RECURSION' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'json',
        ),
        'JSON_ERROR_INF_OR_NAN' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'json',
        ),
        'JSON_ERROR_UNSUPPORTED_TYPE' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'json',
        ),
        'JSON_PARTIAL_OUTPUT_ON_ERROR' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'json',
        ),
        // MySQLi
        'MYSQLI_SERVER_PUBLIC_KEY' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'mysqli',
        ),
        // Curl:
        'CURLOPT_SHARE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLOPT_SSL_OPTIONS' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLOPT_COOKIELIST' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLOPT_TCP_KEEPALIVE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLOPT_TCP_KEEPIDLE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLOPT_TCP_KEEPINTVL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLSSLOPT_ALLOW_BEAST' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLOPT_USERNAME' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_RESPONSE_CODE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_HTTP_CONNECTCODE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_HTTPAUTH_AVAIL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_PROXYAUTH_AVAIL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_OS_ERRNO' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_NUM_CONNECTS' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_SSL_ENGINES' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_COOKIELIST' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_FTP_ENTRY_PATH' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_APPCONNECT_TIME' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_CONDITION_UNMET' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_RTSP_CLIENT_CSEQ' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_RTSP_CSEQ_RECV' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_RTSP_SERVER_CSEQ' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_RTSP_SESSION_ID' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLINFO_HTTP_CODE' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLMOPT_PIPELINING' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLMOPT_MAXCONNECTS' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLPAUSE_ALL' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLPAUSE_CONT' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLPAUSE_RECV' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLPAUSE_RECV_CONT' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLPAUSE_SEND' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'CURLPAUSE_SEND_CONT' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        // Soap:
        'SOAP_SSL_METHOD_TLS' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'soap',
        ),
        'SOAP_SSL_METHOD_SSLv2' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'soap',
        ),
        'SOAP_SSL_METHOD_SSLv3' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'soap',
        ),
        'SOAP_SSL_METHOD_SSLv23' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'soap',
        ),
        // Tokenizer:
        'T_FINALLY' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        'T_YIELD' => array(
            '5.4' => false,
            '5.5' => true,
        ),
        // Core/Password Hashing:
        'PASSWORD_BCRYPT' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'password',
        ),
        'PASSWORD_DEFAULT' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'password',
        ),
        'PASSWORD_BCRYPT_DEFAULT_COST' => array(
            '5.4'       => false,
            '5.5'       => true,
            'extension' => 'password',
        ),
        // Readline:
        'READLINE_LIB' => array(
            '5.4' => false,
            '5.5' => true,
        ),

        // Libxml:
        'LIBXML_SCHEMA_CREATE' => array(
            '5.5.1'     => false,
            '5.5.2'     => true,
            'extension' => 'libxml',
        ),

        // Curl:
        'CURL_SSLVERSION_TLSv1_0' => array(
            '5.5.18' => false,
            '5.5.19' => true,
        ),
        'CURL_SSLVERSION_TLSv1_1' => array(
            '5.5.18' => false,
            '5.5.19' => true,
        ),
        'CURL_SSLVERSION_TLSv1_2' => array(
            '5.5.18' => false,
            '5.5.19' => true,
        ),

        'CURLPROXY_SOCKS4A' => array(
            '5.5.22' => false,
            '5.5.23' => true,
        ),
        'CURLPROXY_SOCKS5_HOSTNAME' => array(
            '5.5.22' => false,
            '5.5.23' => true,
        ),

        'CURL_VERSION_HTTP2' => array(
            '5.5.23' => false,
            '5.5.24' => true,
        ),
        'CURL_HTTP_VERSION_2_0' => array(
            '5.5.23' => false,
            '5.5.24' => true,
        ),

        'ARRAY_FILTER_USE_KEY' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'ARRAY_FILTER_USE_BOTH' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        // FTP:
        'FTP_USEPASVADDRESS' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        // LDAP:
        'LDAP_ESCAPE_DN' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'LDAP_ESCAPE_FILTER' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        // OpenSSL:
        'OPENSSL_DEFAULT_STREAM_CIPHERS' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'STREAM_CRYPTO_METHOD_ANY_CLIENT' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'STREAM_CRYPTO_METHOD_ANY_SERVER' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'STREAM_CRYPTO_METHOD_TLSv1_0_SERVER' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'STREAM_CRYPTO_METHOD_TLSv1_1_SERVER' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'STREAM_CRYPTO_METHOD_TLSv1_2_SERVER' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        // PostgreSQL:
        'PGSQL_CONNECT_ASYNC' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_CONNECTION_AUTH_OK' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_CONNECTION_AWAITING_RESPONSE' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_CONNECTION_MADE' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_CONNECTION_SETENV' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_CONNECTION_SSL_STARTUP' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_CONNECTION_STARTED' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_DML_ESCAPE' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_POLLING_ACTIVE' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_POLLING_FAILED' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_POLLING_OK' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_POLLING_READING' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'PGSQL_POLLING_WRITING' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        // Tokenizer:
        'T_ELLIPSIS' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'T_POW' => array(
            '5.5' => false,
            '5.6' => true,
        ),
        'T_POW_EQUAL' => array(
            '5.5' => false,
            '5.6' => true,
        ),

        'INI_SCANNER_TYPED' => array(
            '5.6.0' => false,
            '5.6.1' => true,
        ),

        'JSON_PRESERVE_ZERO_FRACTION' => array(
            '5.6.5'     => false,
            '5.6.6'     => true,
            'extension' => 'json',
        ),

        'MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT' => array(
            '5.6.15'    => false,
            '5.6.16'    => true,
            'extension' => 'mysqli',
        ),

        // GD:
        // Also introduced in 7.0.10.
        'IMG_WEBP' => array(
            '5.6.24' => false,
            '5.6.25' => true,
        ),


        'TOKEN_PARSE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'FILTER_VALIDATE_DOMAIN' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'FILTER_FLAG_HOSTNAME' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'PHP_INT_MIN' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        // Curl:
        'CURLPIPE_NOTHING' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'CURLPIPE_HTTP1' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'CURLPIPE_MULTIPLEX' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        // DateTime:
        'DATE_RFC3339_EXTENDED' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        // JSON:
        'JSON_ERROR_INVALID_PROPERTY_NAME' => array(
            '5.6'       => false,
            '7.0'       => true,
            'extension' => 'json',
        ),
        'JSON_ERROR_UTF16' => array(
            '5.6'       => false,
            '7.0'       => true,
            'extension' => 'json',
        ),
        // LibXML:
        'LIBXML_BIGLINES' => array(
            '5.6'       => false,
            '7.0'       => true,
            'extension' => 'libxml',
        ),
        // PCRE:
        'PREG_JIT_STACKLIMIT_ERROR' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        // POSIX:
        'POSIX_RLIMIT_AS' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_CORE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_CPU' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_DATA' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_FSIZE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_LOCKS' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_MEMLOCK' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_MSGQUEUE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_NICE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_NOFILE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_NPROC' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_RSS' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_RTPRIO' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_RTTIME' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_SIGPENDING' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_STACK' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'POSIX_RLIMIT_INFINITY' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        // Tokenizer:
        'T_COALESCE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'T_SPACESHIP' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'T_YIELD_FROM' => array(
            '5.6' => false,
            '7.0' => true,
        ),

        // Zlib:
        // The first three are in the PHP 5.4 changelog, but the Extension constant page says 7.0.
        'ZLIB_ENCODING_RAW' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_ENCODING_DEFLATE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_ENCODING_GZIP' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_FILTERED' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_HUFFMAN_ONLY' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_FIXED' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_RLE' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_DEFAULT_STRATEGY' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_BLOCK' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_FINISH' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_FULL_FLUSH' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_NO_FLUSH' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_PARTIAL_FLUSH' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'ZLIB_SYNC_FLUSH' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        // LDAP:
        'LDAP_OPT_X_TLS_REQUIRE_CERT' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        // COM:
        'VT_I8' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'VT_UI8' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'DISP_E_DIVBYZERO' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'DISP_E_OVERFLOW' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'DISP_E_BADINDEX' => array(
            '5.6' => false,
            '7.0' => true,
        ),
        'MK_E_UNAVAILABLE' => array(
            '5.6' => false,
            '7.0' => true,
        ),

        'CURL_HTTP_VERSION_2' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_HTTP_VERSION_2TLS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_REDIR_POST_301' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_REDIR_POST_302' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_REDIR_POST_303' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_REDIR_POST_ALL' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_VERSION_KERBEROS5' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_VERSION_PSL' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURL_VERSION_UNIX_SOCKETS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLAUTH_NEGOTIATE' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLAUTH_NTLM_WB' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLFTP_CREATE_DIR' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLFTP_CREATE_DIR_NONE' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLFTP_CREATE_DIR_RETRY' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLHEADER_SEPARATE' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLHEADER_UNIFIED' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLMOPT_MAX_HOST_CONNECTIONS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLMOPT_MAX_PIPELINE_LENGTH' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLMOPT_MAX_TOTAL_CONNECTIONS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_CONNECT_TO' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_DEFAULT_PROTOCOL' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_DNS_INTERFACE' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_DNS_LOCAL_IP4' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_DNS_LOCAL_IP6' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_EXPECT_100_TIMEOUT_MS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_HEADEROPT' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_LOGIN_OPTIONS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_PATH_AS_IS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_PINNEDPUBLICKEY' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_PIPEWAIT' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_PROXY_SERVICE_NAME' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_PROXYHEADER' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_SASL_IR' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_SERVICE_NAME' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_SSL_ENABLE_ALPN' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_SSL_ENABLE_NPN' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_SSL_FALSESTART' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_SSL_VERIFYSTATUS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_STREAM_WEIGHT' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_TCP_FASTOPEN' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_TFTP_NO_OPTIONS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_UNIX_SOCKET_PATH' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLOPT_XOAUTH2_BEARER' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLPROTO_SMB' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLPROTO_SMBS' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLPROXY_HTTP_1_0' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLSSH_AUTH_AGENT' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),
        'CURLSSLOPT_NO_REVOKE' => array(
            '7.0.6' => false,
            '7.0.7' => true,
        ),

        'DNS_CAA' => array(
            '7.0.15' => false,
            '7.0.16' => true, // ... and 7.1.2.
        ),

        'DATE_RFC7231' => array(
            '7.0.18' => false,
            '7.0.19' => true,
        ),

        'PHP_FD_SETSIZE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        // Curl:
        'CURLMOPT_PUSHFUNCTION' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'CURL_PUSH_OK' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'CURL_PUSH_DENY' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        // Filter:
        'FILTER_FLAG_EMAIL_UNICODE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        // GD:
        'IMAGETYPE_WEBP' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        // Json:
        'JSON_UNESCAPED_LINE_TERMINATORS' => array(
            '7.0'       => false,
            '7.1'       => true,
            'extension' => 'json',
        ),
        // LDAP:
        'LDAP_OPT_X_SASL_NOCANON' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_SASL_USERNAME' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CACERTDIR' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CACERTFILE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CERTFILE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CIPHER_SUITE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_KEYFILE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_RANDOM_FILE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CRLCHECK' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CRL_NONE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CRL_PEER' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CRL_ALL' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_DHFILE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_CRLFILE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_PROTOCOL_MIN' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_PROTOCOL_SSL2' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_PROTOCOL_SSL3' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_PROTOCOL_TLS1_0' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_PROTOCOL_TLS1_1' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_PROTOCOL_TLS1_2' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_TLS_PACKAGE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_KEEPALIVE_IDLE' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_KEEPALIVE_PROBES' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'LDAP_OPT_X_KEEPALIVE_INTERVAL' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        // PostgreSQL:
        'PGSQL_NOTICE_LAST' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'PGSQL_NOTICE_ALL' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        'PGSQL_NOTICE_CLEAR' => array(
            '7.0' => false,
            '7.1' => true,
        ),
        // SPL:
        'MT_RAND_PHP' => array(
            '7.0' => false,
            '7.1' => true,
        ),

        // SQLite3:
        'SQLITE3_DETERMINISTIC' => array(
            '7.1.3'     => false,
            '7.1.4'     => true,
            'extension' => 'sqlite3',
        ),

        // Core:
        'PHP_OS_FAMILY' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'PHP_FLOAT_DIG' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'PHP_FLOAT_EPSILON' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'PHP_FLOAT_MIN' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'PHP_FLOAT_MAX' => array(
            '7.1' => false,
            '7.2' => true,
        ),

        // Core/Password Hashing:
        'PASSWORD_ARGON2I' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'password',
        ),
        'PASSWORD_ARGON2_DEFAULT_MEMORY_COST' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'password',
        ),
        'PASSWORD_ARGON2_DEFAULT_TIME_COST' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'password',
        ),
        'PASSWORD_ARGON2_DEFAULT_THREADS' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'password',
        ),

        // Fileinfo:
        'FILEINFO_EXTENSION' => array(
            '7.1' => false,
            '7.2' => true,
        ),

        // GD:
        'IMG_EFFECT_MULTIPLY' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'IMG_BMP' => array(
            '7.1' => false,
            '7.2' => true,
        ),

        // JSON:
        'JSON_INVALID_UTF8_IGNORE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'json',
        ),
        'JSON_INVALID_UTF8_SUBSTITUTE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'json',
        ),

        // LDAP:
        'LDAP_EXOP_START_TLS' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'LDAP_EXOP_MODIFY_PASSWD' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'LDAP_EXOP_REFRESH' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'LDAP_EXOP_WHO_AM_I' => array(
            '7.1' => false,
            '7.2' => true,
        ),
        'LDAP_EXOP_TURN' => array(
            '7.1' => false,
            '7.2' => true,
        ),

        // PCRE:
        'PREG_UNMATCHED_AS_NULL' => array(
            '7.1' => false,
            '7.2' => true,
        ),

        // Sodium:
        'SODIUM_LIBRARY_VERSION' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_LIBRARY_MAJOR_VERSION' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_LIBRARY_MINOR_VERSION' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_BASE64_VARIANT_ORIGINAL' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_BASE64_VARIANT_URLSAFE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_AES256GCM_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_AES256GCM_NSECBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_AES256GCM_NPUBBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_AES256GCM_ABYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_ABYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NSECBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_ABYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AUTH_BYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_AUTH_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_BOX_SEALBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_BOX_SECRETKEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_BOX_PUBLICKEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_BOX_KEYPAIRBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_BOX_MACBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_BOX_NONCEBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_BOX_SEEDBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KDF_BYTES_MIN' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KDF_BYTES_MAX' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KDF_CONTEXTBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KDF_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KX_SEEDBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KX_SESSIONKEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KX_PUBLICKEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KX_SECRETKEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_KX_KEYPAIRBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_GENERICHASH_BYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_GENERICHASH_BYTES_MIN' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_GENERICHASH_BYTES_MAX' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_GENERICHASH_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MIN' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MAX' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_ALG_DEFAULT' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_SALTBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_STRPREFIX' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SCALARMULT_BYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SCALARMULT_SCALARBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SHORTHASH_BYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SHORTHASH_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETBOX_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETBOX_MACBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETBOX_NONCEBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_ABYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_HEADERBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_MESSAGEBYTES_MAX' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PUSH' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SIGN_BYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SIGN_SEEDBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SIGN_SECRETKEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_SIGN_KEYPAIRBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_STREAM_NONCEBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),
        'SODIUM_CRYPTO_STREAM_KEYBYTES' => array(
            '7.1'       => false,
            '7.2'       => true,
            'extension' => 'sodium',
        ),

        'CURLAUTH_BEARER' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLAUTH_GSSAPI' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLE_WEIRD_SERVER_REPLY' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_APPCONNECT_TIME_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_CONNECT_TIME_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_CONTENT_LENGTH_DOWNLOAD_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_CONTENT_LENGTH_UPLOAD_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_FILETIME_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_HTTP_VERSION' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_NAMELOOKUP_TIME_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_PRETRANSFER_TIME_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_PROTOCOL' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_PROXY_SSL_VERIFYRESULT' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_REDIRECT_TIME_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_SCHEME' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_SIZE_DOWNLOAD_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_SIZE_UPLOAD_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_SPEED_DOWNLOAD_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_SPEED_UPLOAD_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_STARTTRANSFER_TIME_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLINFO_TOTAL_TIME_T' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_LOCK_DATA_CONNECT' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_LOCK_DATA_PSL' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_MAX_READ_SIZE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_ABSTRACT_UNIX_SOCKET' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_DISALLOW_USERNAME_IN_URL' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_DNS_SHUFFLE_ADDRESSES' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_HAPROXYPROTOCOL' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_KEEP_SENDING_ON_ERROR' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PRE_PROXY' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_CAINFO' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_CAPATH' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_CRLFILE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_KEYPASSWD' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_PINNEDPUBLICKEY' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSLCERT' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSLCERTTYPE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSL_CIPHER_LIST' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSLKEY' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSLKEYTYPE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSL_OPTIONS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSL_VERIFYHOST' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSL_VERIFYPEER' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_SSLVERSION' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_TLS13_CIPHERS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_TLSAUTH_PASSWORD' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_TLSAUTH_TYPE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_PROXY_TLSAUTH_USERNAME' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_REQUEST_TARGET' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_SOCKS5_AUTH' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_SSH_COMPRESSION' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_SUPPRESS_CONNECT_HEADERS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_TIMEVALUE_LARGE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLOPT_TLS13_CIPHERS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLPROXY_HTTPS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURLSSH_AUTH_GSSAPI' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_SSLVERSION_MAX_DEFAULT' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_SSLVERSION_MAX_NONE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_SSLVERSION_MAX_TLSv1_0' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_SSLVERSION_MAX_TLSv1_1' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_SSLVERSION_MAX_TLSv1_2' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_SSLVERSION_MAX_TLSv1_3' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_SSLVERSION_TLSv1_3' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_ASYNCHDNS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_BROTLI' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_CONV' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_DEBUG' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_GSSAPI' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_GSSNEGOTIATE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_HTTPS_PROXY' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_IDN' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_LARGEFILE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_MULTI_SSL' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_NTLM' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_NTLM_WB' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_SPNEGO' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_SSPI' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'CURL_VERSION_TLSAUTH_SRP' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'FILTER_SANITIZE_ADD_SLASHES' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'JSON_THROW_ON_ERROR' => array(
            '7.2'       => false,
            '7.3'       => true,
            'extension' => 'json',
        ),
        'LDAP_CONTROL_MANAGEDSAIT' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_PROXY_AUTHZ' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_SUBENTRIES' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_VALUESRETURNFILTER' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_ASSERT' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_PRE_READ' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_POST_READ' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_SORTREQUEST' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_SORTRESPONSE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_PAGEDRESULTS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_AUTHZID_REQUEST' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_AUTHZID_RESPONSE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_SYNC' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_SYNC_STATE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_SYNC_DONE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_DONTUSECOPY' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_PASSWORDPOLICYREQUEST' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_PASSWORDPOLICYRESPONSE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_X_INCREMENTAL_VALUES' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_X_DOMAIN_SCOPE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_X_PERMISSIVE_MODIFY' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_X_SEARCH_OPTIONS' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_X_TREE_DELETE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_X_EXTENDED_DN' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_VLVREQUEST' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'LDAP_CONTROL_VLVRESPONSE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'MB_CASE_FOLD' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'MB_CASE_UPPER_SIMPLE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'MB_CASE_LOWER_SIMPLE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'MB_CASE_TITLE_SIMPLE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'MB_CASE_FOLD_SIMPLE' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'PGSQL_DIAG_SCHEMA_NAME' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'PGSQL_DIAG_TABLE_NAME' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'PGSQL_DIAG_COLUMN_NAME' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'PGSQL_DIAG_DATATYPE_NAME' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'PGSQL_DIAG_CONSTRAINT_NAME' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'PGSQL_DIAG_SEVERITY_NONLOCALIZED' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'PASSWORD_ARGON2ID' => array(
            '7.2'       => false,
            '7.3'       => true,
            'extension' => 'password',
        ),
        'STREAM_CRYPTO_PROTO_SSLv3' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'STREAM_CRYPTO_PROTO_TLSv1_0' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'STREAM_CRYPTO_PROTO_TLSv1_1' => array(
            '7.2' => false,
            '7.3' => true,
        ),
        'STREAM_CRYPTO_PROTO_TLSv1_2' => array(
            '7.2' => false,
            '7.3' => true,
        ),

        'CURL_VERSION_ALTSVC' => array(
            '7.3.5' => false,
            '7.3.6' => true,
        ),
        'CURL_VERSION_CURLDEBUG' => array(
            '7.3.5' => false,
            '7.3.6' => true,
        ),

        'CURLOPT_HTTP09_ALLOWED' => array(
            '7.3.14' => false,
            '7.3.15' => true,
        ),

        'IMG_FILTER_SCATTER' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'MB_ONIGURUMA_VERSION' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'SO_LABEL' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'SO_PEERLABEL' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'SO_LISTENQLIMIT' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'SO_LISTENQLEN' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'SO_USER_COOKIE' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'PASSWORD_ARGON2_PROVIDER' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'password',
        ),
        'PHP_WINDOWS_EVENT_CTRL_C' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'PHP_WINDOWS_EVENT_CTRL_BREAK' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'T_BAD_CHARACTER' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'T_COALESCE_EQUAL' => array(
            '7.3' => false,
            '7.4' => true,
        ),
        'T_FN' => array(
            '7.3' => false,
            '7.4' => true,
        ),

        'TIDY_TAG_ARTICLE' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_ASIDE' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_AUDIO' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_BDI' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_CANVAS' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_COMMAND' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DATALIST' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DETAILS' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_DIALOG' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_FIGCAPTION' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_FIGURE' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_FOOTER' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_HEADER' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_HGROUP' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_MAIN' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_MARK' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_MENUITEM' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_METER' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_NAV' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_OUTPUT' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_PROGRESS' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SECTION' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SOURCE' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_SUMMARY' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TEMPLATE' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TIME' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_TRACK' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),
        'TIDY_TAG_VIDEO' => array(
            '7.3'       => false,
            '7.4'       => true,
            'extension' => 'tidy',
        ),

        'OPENSSL_ENCODING_DER' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_ENCODING_SMIME' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_ENCODING_PEM' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_CMS_DETACHED' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_CMS_TEXT' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_CMS_NOINTERN' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_CMS_NOVERIFY' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_CMS_NOCERTS' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_CMS_NOATTR' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_CMS_BINARY' => array(
            '7.4' => false,
            '8.0' => true,
        ),
        'OPENSSL_CMS_NOSIGS' => array(
            '7.4' => false,
            '8.0' => true,
        ),
    );


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @since 8.1.0
     *
     * @return array
     */
    public function register()
    {
        return array(\T_STRING);
    }

    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @since 8.1.0
     *
     * @param \PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param int                   $stackPtr  The position of the current token in the
     *                                         stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens       = $phpcsFile->getTokens();
        $constantName = $tokens[$stackPtr]['content'];

        if (isset($this->newConstants[$constantName]) === false) {
            return;
        }

        if ($this->isUseOfGlobalConstant($phpcsFile, $stackPtr) === false) {
            return;
        }

        $itemInfo = array(
            'name' => $constantName,
        );
        $this->handleFeature($phpcsFile, $stackPtr, $itemInfo);
    }


    /**
     * Get the relevant sub-array for a specific item from a multi-dimensional array.
     *
     * @since 8.1.0
     *
     * @param array $itemInfo Base information about the item.
     *
     * @return array Version and other information about the item.
     */
    public function getItemArray(array $itemInfo)
    {
        return $this->newConstants[$itemInfo['name']];
    }


    /**
     * Get the error message template for this sniff.
     *
     * @since 8.1.0
     *
     * @return string
     */
    protected function getErrorMsgTemplate()
    {
        return 'The constant "%s" is not present in PHP version %s or earlier';
    }
}
