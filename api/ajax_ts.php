<?php
if(isset($TopperSystemCpermAjax)){
	if(!empty($TopperSystemCpermAjax)){
		if($TopperSystemCpermAjax == "000019"){

            class TopperSystemAjaxRequestPage {
                public static function componentstoppersystem1ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("autoload.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem2ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("register.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem3ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("status.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem4ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("events.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem5ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("connect.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem6ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("download.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem7ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("LoadStatusDefer_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                function componentstoppersystem8ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("terms_condictions.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem9ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("deletepage.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem10ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("StatusOptimizationTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem11ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem12ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_co2app_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem14ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosCo2ApplicationTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem15ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_lazyloadingts_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem16ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_deferts_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem17ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosLazyLoadingTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem18ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SaveStatusCacheTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem19ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SaveStatusWpCronTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem20ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SaveStatusCo2ApplicationTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem21ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SaveStatusLazyLoadingTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem22ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SaveStatusAutoUpdateTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem23ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SaveStatusAspmTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem24ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosDeferTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem25ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("aspmts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem26ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("ReqExceptionsAspmts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem27ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SaveExceptionAspmts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem28ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("DelExceptionAspmts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem29ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("UpdatePagesTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem30ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("LoadStatusPages_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem31ajax_callback()
                {
                    $TopperSystemCpermFileinApi="0123";
                    include("send.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem33ajax_callback()
                {
                    if(str_replace("\\","",__DIR__) != __DIR__){
                        $hu="\minify\minifyts.php";
                        $pathfileminify=str_replace("toppersystem\api","toppersystem",__DIR__).$hu;
                    }else{
                        $hu="/minify/minifyts.php";
                        $pathfileminify=str_replace("toppersystem/api","toppersystem",__DIR__).$hu;
                    }
                    include("$pathfileminify");
                    die();
                }

                public static function componentstoppersystem34ajax_callback()
                {
                    if(str_replace("\\","",__DIR__) != __DIR__){
                        $hu="\co2\calcolate.php";
                        $pathfilecalcolate=str_replace("toppersystem\api","toppersystem",__DIR__).$hu;
                    }else{
                        $hu="/co2/calcolate.php";
                        $pathfilecalcolate=str_replace("toppersystem/api","toppersystem",__DIR__).$hu;
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("$pathfilecalcolate");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem35ajax_callback()
                {
                    if(str_replace("\\","",__DIR__) != __DIR__){
                        $hu="\aspmts\connect.php";
                        $pathfileconnect=str_replace("toppersystem\api","toppersystem",__DIR__).$hu;
                    }else{
                        $hu="/aspmts/connect.php";
                        $pathfileconnect=str_replace("toppersystem/api","toppersystem",__DIR__).$hu;
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("$pathfileconnect");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }
				
                public static function componentstoppersystem36ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_cssfilests_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem37ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosCssFilesTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem38ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("LoadStatusCssFiles_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem39ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_clean_cachets_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem40ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="1234";
                    include("SavePosCleanCacheTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem41ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_block_stage_websitets_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem42ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosBlockStageWebsiteTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem43ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("autoloadcheckTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem44ajax_callback()
                {
                    $TopperSystemCpermFileinApi="0123";
                    include("autoupdatedpageTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem45ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_autoupdatetimes_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem46ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosAutoUpdateTimesTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem47ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_import_export_csvts_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem48ajax_callback(){

                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }

	                $cxc_upload_dir = wp_upload_dir();
	                $cxc_success = "no";
                    $cxc_filename="";
	                if ( ! empty( $cxc_upload_dir['basedir'] ) ) {

		                $cxc_user_dirname = $cxc_upload_dir['basedir'].'/toppersystem/nosql/download/';
		                $cxc_user_baseurl = $cxc_upload_dir['baseurl'].'/toppersystem/nosql/download/';

		                if ( ! file_exists( $cxc_user_dirname ) ) {
			                wp_mkdir_p( $cxc_user_dirname );
		                }

		                $cxc_filename = $_FILES['file_csv_toppersystem']['name'];
		                $cxc_success = move_uploaded_file( $_FILES['file_csv_toppersystem']['tmp_name'], $cxc_user_dirname .''. $cxc_filename);
		                $cxc_image_url = $cxc_user_baseurl .''. $cxc_filename;

		                if( !empty( $cxc_success ) ){
			                $cxc_success = "ok";
		                }else{
			                $cxc_success = "no";
		                }                        
	                }
                    echo "$cxc_success||||$cxc_filename";

                    die();
                }

                public static function componentstoppersystem49ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosImportCsvTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem50ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosExportCsvTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem51ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosDeleteExportCsvTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem52ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("management_intelligence_artificial_ts.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

                public static function componentstoppersystem53ajax_callback()
                {
                    if(!wp_verify_nonce($_REQUEST['_nonce'], 'ajax_components_toppersystem_nonce_string')){
                       die(); 
                    }
                    $TopperSystemCpermFileinApi="0123";
                    include("SavePosIntelligenceArtificialTS.php");
                    unset($TopperSystemCpermFileinApi);
                    die();
                }

            }

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem1ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem1ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem1ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem1ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem2ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem2ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem2ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem2ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem3ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem3ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem3ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem3ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem4ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem4ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem4ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem4ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem5ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem5ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem5ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem5ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem6ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem6ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem6ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem6ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem7ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem7ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem7ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem7ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem8ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem8ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem8ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem8ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem9ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem9ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem9ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem9ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem10ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem10ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem10ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem10ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem11ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem11ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem11ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem11ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem12ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem12ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem12ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem12ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem14ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem14ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem14ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem14ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem15ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem15ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem15ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem15ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem16ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem16ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem16ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem16ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem17ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem17ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem17ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem17ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem18ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem18ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem18ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem18ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem19ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem19ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem19ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem19ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem20ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem20ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem20ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem20ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem21ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem21ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem21ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem21ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem22ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem22ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem22ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem22ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem23ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem23ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem23ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem23ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem24ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem24ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem24ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem24ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem25ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem25ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem25ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem25ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem26ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem26ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem26ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem26ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem27ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem27ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem27ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem27ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem28ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem28ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem28ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem28ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem29ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem29ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem29ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem29ajax_callback' );


            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem30ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem30ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem30ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem30ajax_callback' );

            // non Utenti autenticati
            add_action( 'wp_ajax_nopriv_componentstoppersystem31ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem31ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem31ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem31ajax_callback' );

			
            // non Utenti autenticati
            add_action( 'wp_ajax_nopriv_componentstoppersystem33ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem33ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem33ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem33ajax_callback' );


            // non Utenti autenticati
            add_action( 'wp_ajax_nopriv_componentstoppersystem34ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem34ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem34ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem34ajax_callback' );


            // non Utenti autenticati
            add_action( 'wp_ajax_nopriv_componentstoppersystem35ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem35ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem35ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem35ajax_callback' );
			
			
            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem36ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem36ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem36ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem36ajax_callback' );	

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem37ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem37ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem37ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem37ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem38ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem38ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem38ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem38ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem39ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem39ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem39ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem39ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem40ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem40ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem40ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem40ajax_callback' );	

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem41ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem41ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem41ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem41ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem42ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem42ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem42ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem42ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem43ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem43ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem43ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem43ajax_callback' );	

            // non Utenti autenticati
            add_action( 'wp_ajax_nopriv_componentstoppersystem44ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem44ajax_callback' );
            // Utenti autenticati
            #add_action( 'wp_ajax_componentstoppersystem44ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem44ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem45ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem45ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem45ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem45ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem46ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem46ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem46ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem46ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem47ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem47ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem47ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem47ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem48ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem48ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem48ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem48ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem49ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem49ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem49ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem49ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem50ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem50ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem50ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem50ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem51ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem51ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem51ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem51ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem52ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem52ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem52ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem52ajax_callback' );

            // non Utenti autenticati
            #add_action( 'wp_ajax_nopriv_componentstoppersystem53ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem53ajax_callback' );
            // Utenti autenticati
            add_action( 'wp_ajax_componentstoppersystem53ajax', 'TopperSystemAjaxRequestPage::componentstoppersystem53ajax_callback' );
		}
	}
}
?>