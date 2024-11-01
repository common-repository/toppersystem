<?php
/**
 * Topper System SEO Plugin.
 *
 * @package TopperSystem[*]
 * @version 4.4.6
 * @copyright Copyright (C) 2021, toppersystem.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License, version 3 or higher
 *
 * Topper System include Class TopperSystemAndJSMin (minify/JSMin.php)
 * copyright Copyright (c) 2002 Douglas Crockford  (www.crockford.com)
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
 * of the Software, and to permit persons to whom the Software is furnished to do
 * so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * The Software shall be used for Good, not Evil.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 * 
 * Topper System include Class TopperSystemAndMinifyCSSCompressor (minify/Compressor.php)
 * copyright Copyright (c) 2008 Ryan Grove <ryan@wonko.com>
 * copyright Copyright (c) 2008 Steve Clay <steve@mrclay.org>
 * copyright All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice,
 * this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice,
 * this list of conditions and the following disclaimer in the documentation
 * and/or other materials provided with the distribution.
 * Neither the name of this project nor the names of its contributors may be
 * used to endorse or promote products derived from this software without
 * specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * 
 * @toppersystem
 * Plugin Name: Topper System SEO
 * Plugin URI: https://www.toppersystem.com/apicenter
 * Description: Topper System SEO improve your WordPress SEO rankings and traffic to your favorite keywords: SEO optimizations, Smart Image Lazy-load, Anti Spam, Caching, CO2 Application. 
 * Author: Team TopperSystem.com
 * Version: 4.4.6
 * Author URI: https://www.toppersystem.com
 * License: GPL v3
 * Requires at least: 6.1
 * Requires PHP: 7.2.5
 *
 * WC requires at least: 7.1
 * WC tested up to: 8.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
ini_set('default_charset', 'UTF-8');
if(!ini_get('allow_url_fopen')){
    ini_set('allow_url_fopen', 'On');
    if(ini_set('allow_url_fopen', 'On') === true){
        $TopperSystemPluginVerify="1";
    }else{
        $TopperSystemPluginVerify="0";
        if(function_exists('curl_init')) {
            $TopperSystemPluginVerify="1";
            if ( ! defined( 'TOPPERSYSTEM_PLUGIN_MOD_REQUEST' ) ) {
	            define( 'TOPPERSYSTEM_PLUGIN_MOD_REQUEST', '1');
            }
        }
    }
}else{
    $TopperSystemPluginVerify="1";
}
if ( ! defined( 'TOPPERSYSTEM_PLUGIN_VERSION' ) ) {
    define( 'TOPPERSYSTEM_PLUGIN_VERSION', '4.4.6');
} 
if((defined('ABSPATH'))&&($TopperSystemPluginVerify == "1")){
    if ( ! defined( 'TOPPERSYSTEM_PLUGIN_AJAXREQUESTPAGE' ) ) {
        define( 'TOPPERSYSTEM_PLUGIN_AJAXREQUESTPAGE', admin_url( 'admin-ajax.php' ));
    }
    if ( ! defined( 'TOPPERSYSTEM_PLUGIN_BASENAME' ) ) {
	    define( 'TOPPERSYSTEM_PLUGIN_BASENAME', plugin_basename(__FILE__));
    }
    if ( ! defined( 'TOPPERSYSTEM_PLUGIN_DIRECTORY' ) ) {
	    define( 'TOPPERSYSTEM_PLUGIN_DIRECTORY', dirname(__FILE__));
    }
    if ( ! defined( 'TOPPERSYSTEM_UPLOAD_FILES_NOSQL' ) ) {
	    define( 'TOPPERSYSTEM_UPLOAD_FILES_NOSQL', str_replace("\\","/",wp_upload_dir()['basedir']));
    }
    include("components/assetsts.php");

	require('api/toppersystem.php');
	include('aspmts/aspmts.php');
    ####Start Assets/Update TS plugin
    if(file_exists(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/par_service.php")){
        include(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/par_service.php");
        define( 'TOPPERSYSTEM_PLUGIN_GET_co2application', $par_co2application_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_activateautoupdatets', $par_activateautoupdatets_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_activatecachets', $par_activatecachets_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_activateasmpts', $par_activateasmpts_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_lazyloadingts', $par_lazyloadingts_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_status_co2applicationts', $par_status_co2applicationts_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_status_lazyloadingts', $par_status_lazyloadingts_toppersystem);
        if ( ! defined( 'TOPPERSYSTEM_PLUGIN_GET_SITE_URL' ) ) {
            if(isset($par_status_prtoppersystemts_toppersystem)){
                if(empty($par_status_prtoppersystemts_toppersystem)){
                    $par_status_prtoppersystemts_toppersystem=site_url();
                }
            }else{
                $par_status_prtoppersystemts_toppersystem=site_url();
            }
            define( 'TOPPERSYSTEM_PLUGIN_GET_SITE_URL', $par_status_prtoppersystemts_toppersystem);
        }else{
            if(isset($_GET["tstime"])){
                if(isset($par_status_prtoppersystemts_toppersystem)){
                    if(empty($par_status_prtoppersystemts_toppersystem)){
                        $par_status_prtoppersystemts_toppersystem=site_url();
                    }
                }else{
                    $par_status_prtoppersystemts_toppersystem=site_url();
                }
                define( 'TOPPERSYSTEM_PLUGIN_GET_SITE_URL', $par_status_prtoppersystemts_toppersystem);
            }
        }
        if(site_url() == "$par_status_prtoppersystemts_toppersystem"){
            define( 'TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL', '0');
        }else{
            define( 'TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL', '1');
        }
        if(!isset($par_get_timesautoupdate_spider_toppersystem)){
            $par_get_timesautoupdate_spider_toppersystem="3600";
            $par_get_timesautoupdate_user_toppersystem="600";
        }
        define( 'TOPPERSYSTEM_PLUGIN_GET_timesautoupdate_spider', (int)$par_get_timesautoupdate_spider_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_timesautoupdate_user', (int)$par_get_timesautoupdate_user_toppersystem);
    }else{
        $par_co2application_toppersystem="1";
        $par_activateautoupdatets_toppersystem="0";
        $par_activatecachets_toppersystem="0";
        $par_activateasmpts_toppersystem="0";
        $par_lazyloadingts_toppersystem="1";
        $par_status_co2applicationts_toppersystem="right";
        $par_status_lazyloadingts_toppersystem="medium";
        $par_status_prtoppersystemts_toppersystem=site_url();
        $par_get_timesautoupdate_spider_toppersystem="3600";
        $par_get_timesautoupdate_user_toppersystem="600";
        define( 'TOPPERSYSTEM_PLUGIN_GET_co2application', $par_co2application_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_activateautoupdatets', $par_activateautoupdatets_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_activatecachets', $par_activatecachets_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_activateasmpts', $par_activateasmpts_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_lazyloadingts', $par_lazyloadingts_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_status_co2applicationts', $par_status_co2applicationts_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_status_lazyloadingts', $par_status_lazyloadingts_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_SITE_URL', $par_status_prtoppersystemts_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL', '0');
        define( 'TOPPERSYSTEM_PLUGIN_GET_timesautoupdate_spider', $par_get_timesautoupdate_spider_toppersystem);
        define( 'TOPPERSYSTEM_PLUGIN_GET_timesautoupdate_user', $par_get_timesautoupdate_user_toppersystem);
    }
	
	#Woocommerce Compatibility
	add_action( 'before_woocommerce_init', function() {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
	} );
	
    include("components/upgradets.php");
    ####End Update TS plugin

	$TopperSystemCpermGeneral="1000000000000000";
	include("components/general.php");
	unset($TopperSystemCpermGeneral);

	$TopperSystemCpermAjax="000019";
	include("api/ajax_ts.php");
	unset($TopperSystemCpermAjax);

    if( !is_admin() ){
		$TopperSystemCpermPublic="1618033";
		include("components/public.php");
		unset($TopperSystemCpermPublic);
    }else{
		$TopperSystemCpermIsAdmin="299792458";
		include("components/isadmin.php");
		unset($TopperSystemCpermIsAdmin);
    }

    unset($par_co2application_toppersystem);
    unset($par_activateautoupdatets_toppersystem);
    unset($par_activatecachets_toppersystem);
    unset($par_activateasmpts_toppersystem);
    unset($par_lazyloadingts_toppersystem);
    unset($par_status_co2applicationts_toppersystem);
    unset($par_status_lazyloadingts_toppersystem);
    unset($par_get_timesautoupdate_spider_toppersystem);
    unset($par_get_timesautoupdate_user_toppersystem);
}else if((defined('ABSPATH'))&&($TopperSystemPluginVerify == "0")){
    if( !is_admin() ){
    }else{
        $TopperSystemCpermErrorServer="31415926535";
		include("components/error.php");
		unset($TopperSystemCpermErrorServer);
    }
}else{}