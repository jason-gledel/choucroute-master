<?php

function cptui_register_my_cpts() {

/**
 * Post Type: recettes.
 */

$labels = [
    "name" => esc_html__( "recettes", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "recette", "custom-post-type-ui" ),
    "menu_name" => esc_html__( "Mes recettes", "custom-post-type-ui" ),
    "all_items" => esc_html__( "Toutes les recettes", "custom-post-type-ui" ),
    "add_new" => esc_html__( "Ajouter", "custom-post-type-ui" ),
    "add_new_item" => esc_html__( "Ajouter une nouvelle recette", "custom-post-type-ui" ),
    "edit_item" => esc_html__( "Modifier la recette", "custom-post-type-ui" ),
    "new_item" => esc_html__( "Nouvelle recette", "custom-post-type-ui" ),
    "view_item" => esc_html__( "Voir la recette", "custom-post-type-ui" ),
    "view_items" => esc_html__( "Voir les recettes", "custom-post-type-ui" ),
    "search_items" => esc_html__( "Rechercher une recettes", "custom-post-type-ui" ),
    "not_found" => esc_html__( "Aucune recette trouvée", "custom-post-type-ui" ),
    "not_found_in_trash" => esc_html__( "Aucune recette trouvée dans la corbeille", "custom-post-type-ui" ),
    "parent" => esc_html__( "recette parent :", "custom-post-type-ui" ),
    "featured_image" => esc_html__( "Image mise en avant pour cette recette", "custom-post-type-ui" ),
    "set_featured_image" => esc_html__( "Définir l’image mise en avant pour cette recette", "custom-post-type-ui" ),
    "remove_featured_image" => esc_html__( "Retirer l’image mise en avant pour cette recette", "custom-post-type-ui" ),
    "use_featured_image" => esc_html__( "Utiliser comme image mise en avant pour cette recette", "custom-post-type-ui" ),
    "archives" => esc_html__( "Archives de recettes", "custom-post-type-ui" ),
    "insert_into_item" => esc_html__( "Insérer dans recette", "custom-post-type-ui" ),
    "uploaded_to_this_item" => esc_html__( "Téléverser sur cette recette", "custom-post-type-ui" ),
    "filter_items_list" => esc_html__( "Filtrer la liste de recettes", "custom-post-type-ui" ),
    "items_list_navigation" => esc_html__( "Navigation de liste de recettes", "custom-post-type-ui" ),
    "items_list" => esc_html__( "Liste de recettes", "custom-post-type-ui" ),
    "attributes" => esc_html__( "Attributs de recettes", "custom-post-type-ui" ),
    "name_admin_bar" => esc_html__( "recette", "custom-post-type-ui" ),
    "item_published" => esc_html__( "recette publiée", "custom-post-type-ui" ),
    "item_published_privately" => esc_html__( "recette publiée en privé.", "custom-post-type-ui" ),
    "item_reverted_to_draft" => esc_html__( "recette repassée en brouillon.", "custom-post-type-ui" ),
    "item_trashed" => esc_html__( "recette mise à la corbeille.", "custom-post-type-ui" ),
    "item_scheduled" => esc_html__( "recette planifiée", "custom-post-type-ui" ),
    "item_updated" => esc_html__( "recette mise à jour.", "custom-post-type-ui" ),
    "parent_item_colon" => esc_html__( "recette parent :", "custom-post-type-ui" ),
];

$args = [
    "label" => esc_html__( "recettes", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "recette", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-food",
    "supports" => [ "title" ],
    "show_in_graphql" => false,
];

register_post_type( "recette", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );




function cptui_register_my_cpts_recette() {

	/**
	 * Post Type: recettes.
	 */

	$labels = [
		"name" => esc_html__( "recettes", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "recette", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Mes recettes", "custom-post-type-ui" ),
		"all_items" => esc_html__( "Toutes les recettes", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Ajouter", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Ajouter une nouvelle recette", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Modifier la recette", "custom-post-type-ui" ),
		"new_item" => esc_html__( "Nouvelle recette", "custom-post-type-ui" ),
		"view_item" => esc_html__( "Voir la recette", "custom-post-type-ui" ),
		"view_items" => esc_html__( "Voir les recettes", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Rechercher une recettes", "custom-post-type-ui" ),
		"not_found" => esc_html__( "Aucune recette trouvée", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "Aucune recette trouvée dans la corbeille", "custom-post-type-ui" ),
		"parent" => esc_html__( "recette parent :", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Image mise en avant pour cette recette", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Définir l’image mise en avant pour cette recette", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Retirer l’image mise en avant pour cette recette", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Utiliser comme image mise en avant pour cette recette", "custom-post-type-ui" ),
		"archives" => esc_html__( "Archives de recettes", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insérer dans recette", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Téléverser sur cette recette", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filtrer la liste de recettes", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Navigation de liste de recettes", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Liste de recettes", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Attributs de recettes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "recette", "custom-post-type-ui" ),
		"item_published" => esc_html__( "recette publiée", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "recette publiée en privé.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "recette repassée en brouillon.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "recette mise à la corbeille.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "recette planifiée", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "recette mise à jour.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "recette parent :", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "recettes", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "recette", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-food",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "recette", $args );
}

add_action( 'init', 'cptui_register_my_cpts_recette' );



function cptui_register_my_taxes() {

	/**
	 * Taxonomy: niveaux.
	 */

	$labels = [
		"name" => esc_html__( "niveaux", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "niveau", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "niveaux", "custom-post-type-ui" ),
		"all_items" => esc_html__( "Tous les niveaux", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Modifier niveau", "custom-post-type-ui" ),
		"view_item" => esc_html__( "Voir niveau", "custom-post-type-ui" ),
		"update_item" => esc_html__( "Mettre à jour le nom de niveau", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Ajouter un nouveau niveau", "custom-post-type-ui" ),
		"new_item_name" => esc_html__( "Nom du nouveau niveau", "custom-post-type-ui" ),
		"parent_item" => esc_html__( "Parent dniveau", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "niveau parent :", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Recherche de niveaux", "custom-post-type-ui" ),
		"popular_items" => esc_html__( "niveaux populaires", "custom-post-type-ui" ),
		"separate_items_with_commas" => esc_html__( "Séparer les niveaux avec des virgules", "custom-post-type-ui" ),
		"add_or_remove_items" => esc_html__( "Ajouter ou supprimer des niveaux", "custom-post-type-ui" ),
		"choose_from_most_used" => esc_html__( "Choisir parmi les niveaux les plus utilisés", "custom-post-type-ui" ),
		"not_found" => esc_html__( "Aucun niveaux trouvé", "custom-post-type-ui" ),
		"no_terms" => esc_html__( "Aucun niveaux", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Navigation de liste de niveaux", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Liste de niveaux", "custom-post-type-ui" ),
		"back_to_items" => esc_html__( "Retourner à niveaux", "custom-post-type-ui" ),
		"name_field_description" => esc_html__( "Le nom tel qu’il apparaîtra sur votre site.", "custom-post-type-ui" ),
		"parent_field_description" => esc_html__( "Assigner un terme parent pour créer une hiérarchie. Le terme « Jazz », par exemple, serait le parent de « Bebop » et « Big Band ».", "custom-post-type-ui" ),
		"slug_field_description" => esc_html__( "Le « slug » est une version du nom compatible avec les URL. Il est généralement entièrement en minuscules et contient uniquement des lettres, chiffres et tirets.", "custom-post-type-ui" ),
		"desc_field_description" => esc_html__( "La description n’est pas mise en évidence par défaut ; toutefois, certains thèmes peuvent l’afficher.", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "niveaux", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'niveau', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "niveau",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "niveau", [ "recette" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );



function cptui_register_my_taxes_niveau() {

	/**
	 * Taxonomy: niveaux.
	 */

	$labels = [
		"name" => esc_html__( "niveaux", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "niveau", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "niveaux", "custom-post-type-ui" ),
		"all_items" => esc_html__( "Tous les niveaux", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Modifier niveau", "custom-post-type-ui" ),
		"view_item" => esc_html__( "Voir niveau", "custom-post-type-ui" ),
		"update_item" => esc_html__( "Mettre à jour le nom de niveau", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Ajouter un nouveau niveau", "custom-post-type-ui" ),
		"new_item_name" => esc_html__( "Nom du nouveau niveau", "custom-post-type-ui" ),
		"parent_item" => esc_html__( "Parent dniveau", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "niveau parent :", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Recherche de niveaux", "custom-post-type-ui" ),
		"popular_items" => esc_html__( "niveaux populaires", "custom-post-type-ui" ),
		"separate_items_with_commas" => esc_html__( "Séparer les niveaux avec des virgules", "custom-post-type-ui" ),
		"add_or_remove_items" => esc_html__( "Ajouter ou supprimer des niveaux", "custom-post-type-ui" ),
		"choose_from_most_used" => esc_html__( "Choisir parmi les niveaux les plus utilisés", "custom-post-type-ui" ),
		"not_found" => esc_html__( "Aucun niveaux trouvé", "custom-post-type-ui" ),
		"no_terms" => esc_html__( "Aucun niveaux", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Navigation de liste de niveaux", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Liste de niveaux", "custom-post-type-ui" ),
		"back_to_items" => esc_html__( "Retourner à niveaux", "custom-post-type-ui" ),
		"name_field_description" => esc_html__( "Le nom tel qu’il apparaîtra sur votre site.", "custom-post-type-ui" ),
		"parent_field_description" => esc_html__( "Assigner un terme parent pour créer une hiérarchie. Le terme « Jazz », par exemple, serait le parent de « Bebop » et « Big Band ».", "custom-post-type-ui" ),
		"slug_field_description" => esc_html__( "Le « slug » est une version du nom compatible avec les URL. Il est généralement entièrement en minuscules et contient uniquement des lettres, chiffres et tirets.", "custom-post-type-ui" ),
		"desc_field_description" => esc_html__( "La description n’est pas mise en évidence par défaut ; toutefois, certains thèmes peuvent l’afficher.", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "niveaux", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'niveau', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "niveau",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "niveau", [ "recette" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_niveau' );



?>