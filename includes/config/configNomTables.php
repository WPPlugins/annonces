<?php
	global $wpdb;
	
	/**
	 * Tables name define variables
	 */
	DEFINE('PREFIXE_ANNONCES', $wpdb->prefix . "ctlg_petiteannonce");
	
	// Tables
	DEFINE('ANNONCES_TABLE_ANNONCES', PREFIXE_ANNONCES);
	DEFINE('ANNONCES_TABLE_VERSION', PREFIXE_ANNONCES . "__version");
	DEFINE('ANNONCES_TABLE_ATTRIBUT', PREFIXE_ANNONCES . "__attribut");
	DEFINE('ANNONCES_TABLE_ATTRIBUTCHAR', PREFIXE_ANNONCES . "__attributchar");
	DEFINE('ANNONCES_TABLE_ATTRIBUTDATE', PREFIXE_ANNONCES . "__attributdate");
	DEFINE('ANNONCES_TABLE_ATTRIBUTDEC', PREFIXE_ANNONCES . "__attributdec");
	DEFINE('ANNONCES_TABLE_ATTRIBUTINT', PREFIXE_ANNONCES . "__attributint");
	DEFINE('ANNONCES_TABLE_ATTRIBUTTEXT', PREFIXE_ANNONCES . "__attributtext");
	DEFINE('ANNONCES_TABLE_GEOLOCALISATION', PREFIXE_ANNONCES . "__geolocalisation");
	DEFINE('ANNONCES_TABLE_GROUPEATTRIBUT', PREFIXE_ANNONCES . "__groupeattribut");
	DEFINE('ANNONCES_TABLE_GROUPEATTRIBUTATTRIBUT', PREFIXE_ANNONCES . "__groupeattribut_attribut");
	DEFINE('ANNONCES_TABLE_OPTION', PREFIXE_ANNONCES . "__option");
	DEFINE('ANNONCES_TABLE_PASSERELLE', PREFIXE_ANNONCES . "__passerelle");
	DEFINE('ANNONCES_TABLE_PHOTOS', PREFIXE_ANNONCES . "__photos");
	DEFINE('ANNONCES_TABLE_TEMPPHOTO', PREFIXE_ANNONCES . "__tempphoto");
	DEFINE('ANNONCES_TABLE_TXT', PREFIXE_ANNONCES . "__txt");
	
	
	
	
	DEFINE('TRASH__ANNONCES_TABLE_OPTION', PREFIXE_ANNONCES . "_trash__option");
	
?>