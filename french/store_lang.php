<?php if ( ! defined('BASEPATH')) exit('Aucun script d\'accès direct autorisé');

$lang = array(
    // module details
    'store'                             => 'Store',
    'store_module_name'                 => 'Store / Boutique',
    'store_module_description'          => 'Une solution de e-commerce très complète pour ExpressionEngine',
    'nav_store'                         => 'Store',

    // obvious shit
    'actions'                           => 'Actions',
    'enabled'                           => 'Activé',
    'disabled'                          => 'Inactif',
    'enable'                            => 'Activer',
    'disable'                           => 'Désactiver',
    'missing'                           => 'Manquant',
    'true'                              => 'Vrai',
    'false'                             => 'Faux',
    'none'                              => 'Aucun',
    'member'                            => 'Membre',
    'message'                           => 'Message',
    'options'                           => 'Options',
    'default'                           => 'Par défaut',
    'rename'                            => 'Renommer',
    'name'                              => 'Nom',
    'short_name'                        => 'Nom court',
    'new'                               => 'Nouveau',
    'manual'                            => 'Manuel',
    'from'                              => 'À partir de',
    'to'                                => 'Jusqu\'à',
    'advanced'                          => 'Avancé',

    // settings
    'settings_general'                  => 'Généralités',
    'settings_reports'                  => 'Rapports',
    'settings_conversions'              => 'Suivi des conversions',
    'settings_email'                    => 'Modèles de courriel',
    'settings_edit_email'               => 'Éditer les modèles de courriel',
    'settings_promo_codes'              => 'Codes Promo',
    'settings_order_fields'             => 'Champs pour la commande',
    'settings_order_statuses'           => 'Statuts de commande',
    'settings_payment'                  => 'Modes de règlement',
    'settings_shipping'                 => 'Modes d\'expédition',
    'settings_regions'                  => 'Pays / Régions',
    'settings_tax'                      => 'Taux de taxe',
    'settings_security'                 => 'Sécurité',

    'currency_symbol'                   => 'Symbole monétaire',
    'currency_suffix'                   => 'Suffixe de la devise',
    'currency_decimals'                 => 'Emplacements de la virgule pour la devise',  /** to be reviewed in context : nombre de décimale après la virgule ? */
    'currency_dec_point'                => 'Symbole décimal pour la devise',
    'currency_thousands_sep'            => 'Séparateur de millier pour la devise',
    'currency_code'                     => 'Code de la devise',
    'weight_units'                      => 'Unités de masse',
    'weight_units_kg'                   => 'kg',
    'weight_units_lb'                   => 'lb',
    'dimension_units'                   => 'Unités de dimension',
    'dimension_units_cm'                => 'cm',
    'dimension_units_m'                 => 'm',
    'dimension_units_ft'                => 'ft',
    'dimension_units_in'                => 'in',
    'tax_included'                      => 'Les prix incluent-ils la taxe ?',
    'tax_included_y'                    => 'Oui',
    'tax_included_n'                    => 'Non',
    'tax_rate'                          => 'Taux de taxe',
    'from_email'                        => 'Adresse mail de l\'expéditeur (courriels de la boutique)',
    'from_name'                         => 'Nom de l\'expéditeur (courriels de la boutique)',
    'track_stock'                       => 'Suivre les stocks',
    'limit_stock'                       => 'Limiter les stocks',
    'show_cp_menu'                      => 'Activer le menu Boutique',
    'default_order_address'             => 'Adresse d\'expédition par défaut',
    'shipping_same_as_billing'          => 'Adresse d\'expédition identique à l\'adresse de facturation',
    'billing_same_as_shipping'          => 'Adresse de facturation identique à l\'adresse d\'expédition',
    'tax_rounding'                      => 'Arrondir les prix des articles après taxe',
    'tax_rounding_subtext'              => 'Positionnez ceci à Oui si vous affichez habituellement des prix TTC sur votre site web. Cela permet de s\'assurer que le montant total de la commande sera calculé à partir du prix TTC des articles.',
    'cc_payment_method'                 => 'Mode de règlement carte de crédit',
    'cc_payment_method_subtext'         => 'Si positionné à Autorisation Uniquement, vous devrez collecter manuellement les règlements avant que les fonds ne soient tranférés sur votre compte.',
    'cc_payment_authorize'              => 'Autorisation Uniquement',
    'cc_payment_purchase'               => 'Acheter (Autoriser et Collecter)',
    'force_member_login'                => 'Exiger un compte de membre avant d\'accepter les commandes',
    'report_stats'                      => 'Communiquer les statistiques',
    'report_stats_subtext'              => 'Les versions de PHP &amp; EE utilisées seront communiquées à Solspace de façon anonyme afin d\'aider à l\'amélioration du produit.',
    'empty_cart_on_logout'              => 'Vider le panier lors de la déconnexion du membre',
    'cart_expiry'                       => 'Délai d\'expiration du panier',
    'cart_expiry_subtext'               => 'Le nombre de minute avant que les paniers inactifs ne soient vidés.<br />Par défaut : 1440 (24 heures).',
    'secure_template_tags'              => 'Exiger une connexion SSL pour les balises de commande et de passage en caisse',
    'mapped_member_field'               => 'Mappé au champ de membre',
    'optgroup_member_fields'            => 'Champs de membre',
    'optgroup_zoo_fields'               => 'Champs \'Zoo Visitor\'',
    'defaults'                          => 'Valeurs par défaut',
    'default_country'                   => 'Pays par défaut',
    'default_region'                    => 'Région par défaut',
    'region_code_error'                 => 'Les codes régionaux doivent être uniques.',
    'order_invoice_url'                 => 'Lien pour facture',
    'order_invoice_url_subtext'         => 'Affiche un lien "Montrer la facture" sur la page des détails de la commande.<br />ex. "boutique_exemple/commande/COMMANDE_HASH"',
    'google_analytics_ecommerce'        => 'Suivi e-commerce Google Analytics',
    'google_analytics_ecommerce_subtext' => 'Exige que le code de suivi GA soit placé dans l\'en-tête &lt;head&gt; de votre site. Le code de suivi e-commerce sera inséré automatiquement.',
    'conversion_tracking_extra'         => 'Code supplémentaire pour le suivi du taux de conversion',
    'conversion_tracking_extra_subtext' => 'ex. suivi du taux de conversion AdWords, ou tout autre logiciel d\'analyse. Vous pouvez utiliser des variables de commande comme {order_total_val} dans cet extrait de code.<br />Cet extrait de code ne sera affiché qu\'une fois, sur la page de résumé de la commande (quel que soit le nombre de fois que le client a visualisé sa facture).',

    // settings reports
    'export_pdf_orientation'            => 'Orientation (portrait ou paysage) de l\'export PDF',
    'export_pdf_page_format'            => 'Format de page de l\'export PDF',
    'pdf_orientation_portrait'          => 'Portrait',
    'pdf_orientation_landscape'         => 'Paysage',
    'pdf_page_format_a4'                => 'A4',
    'pdf_page_format_a3'                => 'A3',
    'pdf_page_format_letter'            => 'Lettre (US)',
    'order_details_header'              => 'En-tête pour les détails de la commande',
    'order_details_header_right'        => 'En-tête droit pour les détails de la commande',
    'order_details_footer'              => 'Pied de page pour les détails de la commande',

    // settings security
    'privileges'                        => 'Privilèges',
    'can_access_settings'               => 'Peut accéder aux pages de paramétrage de la boutique ?',
    'can_add_payments'                  => 'Peut ajouter des règlements manuels ?',
    'store_no_access'                   => 'Vous n\'êtes pas autorisé à accéder à cette page.',
    'tax_rate'                          => 'Taux de taxe (%)',
    'tax_name'                          => 'Nom de la taxe',
    'tax_rate_add'                      => 'Ajouter un taux de taxe',
    'no_tax_rates'                      => 'Aucun taux de taxe n\'est paramétré.',

    'shipping'                          => 'Expédition',
    'shipping_rule_desc'                => 'Description de la règle',
    'shipping_filters'                  => 'Filtres',
    'shipping_filters_desc'             => 'Pour quelle(s) commande(s) cette règle va-t-elle s\'appliquer ?',
    'shipping_charges'                  => 'Frais',
    'shipping_add_plugin'               => 'Ajouter un mode d\'expédition',
    'shipping_min_order_qty'            => 'Quantité minimum de commande', /** GS1 vocabulary */
    'shipping_max_order_qty'            => 'Quantité maximum de commande', /** GS1 vocabulary */
    'shipping_min_order_total'          => 'Montant minimum du total de la commande',
    'shipping_max_order_total'          => 'Montant maximum du total de la commande',
    'shipping_min_weight'               => 'Poids minimum de la commande',
    'shipping_max_weight'               => 'Poids maximum de la commande',
    'shipping_base_rate'                => 'Tarif de base',
    'shipping_per_item'                 => 'par article',
    'shipping_per_item_rate'            => 'Tarif par article',
    'shipping_per_weight_rate'          => 'Tarif au poids (par %s)',
    'shipping_per_weight_unit'          => 'par %s',
    'shipping_percent_rate'             => 'Tarif au pourcentage du montant de la commande',
    'shipping_priority_desc'            => 'Les valeurs les plus élevées seront évaluées en premier',
    'shipping_%_rate'                   => 'Tarif en % de la commande',
    'shipping_of_order_total'           => 'du montant total de la commande',
    'shipping_min_rate'                 => 'Tarif minimum',
    'shipping_max_rate'                 => 'Tarif maximum',
    'shipping_with_a_min_of'            => 'avec un minimum de %s',
    'shipping_up_to_a_max_of'           => 'jusqu\'à un maximum de %s',
    'shipping_method'                   => 'Mode d\'expédition',
    'shipping_method_id'                => 'ID du mode d\'expédition',
    'shipping_plugin'                   => 'Plug-in Expédition',
    'shipping_add_rule'                 => 'Ajouter une règle d\'expédition',
    'shipping_edit_rule'                => 'Modifier une règle d\'expédition',
    'add_rule_now'                      => 'Vous devriez maintenant ajouter une règle d\'expédition pour votre plug-in.',
    'shipping_default_help'             => '<li>Quand ce mode d\'expédition sera sélectionné, les règles suivantes seront évaluées selon l\'ordre affiché ici.</li><li>Seule la première règle en phase avec le panier du client sera appliquée,  les suivantes seront toutes ignorées.</li><li>Si aucune règle n\'est en phase avec le panier du client, un message d\'erreur sera affiché. Par conséquent, vérifiez que vous avez bien laissé une règle générique en bas de liste !</li><li>Vous pouvez définir une priorité spécifique pour contrôler l\'ordre dans lequel les règles seront évaluées. Les règles possédant une priorité plus forte seront évaluées les premières.</li>',
    'pre_selected_shipping_method'      => 'Mode d\'expédition pré-sélectionné pour les nouveaux paniers :',
    'store_shipping_default'            => 'Plug-in d\'expédition par défaut',
    'store_shipping_fedex'              => 'FedEx',
    'store_shipping_ups'                => 'UPS',
    'store_shipping_usps'               => 'USPS',
    'store_shipping_aus_post'           => 'Australia Post',
    'access_key'                        => 'Clef d\'accès',
    'pickup_type'                       => 'Type d\'enlèvement',
    'service'                           => 'Service',
    'packaging'                         => 'Emballage',
    'api_key'                           => 'Clef API',
    'user_id'                           => 'ID Utilisateur',
    'account_no'                        => 'Numéro de compte',
    'meter_no'                          => 'Numéro de \'mètre\'',
    'test_mode'                         => 'Mode Test',
    'source_city'                       => 'Ville Source',
    'source_zip'                        => 'Code ZIP Source',
    'source_postcode'                   => 'Code postal Source',
    'source_country'                    => 'Pays Source',
    'insure_order'                      => 'Assurer la commande',
    'machinable'                        => 'Mécanisable',
    'container'                         => 'Conteneur',
    'size'                              => 'Dimension',
    'first_class_mail_type'             => 'Type de courrier \'Première Classe\'',
    'surcharge'                         => 'Surcharge',
    'dropoff_type'                      => 'Type de distribution (remise)',
    'service_type'                      => 'Type de service',
    'packaging_type'                    => 'Type d\'emballage',
    'residential_delivery'              => 'Livraison résidentielle',
    'aus_post_communication_error'      => 'Erreur de communication avec Australia Post.',
    'shipping_communication_error'      => 'Erreur de communication avec le transporteur.',
    'no_rules_match_cart_error'         => 'Erreur de calcul des frais d\'expédition : aucune règle n\'est en phase avec le panier actuel.',
    'add_payment_method'                => 'Ajouter un mode de règlement',
    'payment_method'                    => 'Mode de règlement',
    'payment_plugin'                    => 'Plug-in de règlement',
    'always_authorize'                  => 'Toujours Autoriser',
    'always_decline'                    => 'Toujours Refuser',
    'payment_method_no_settings'        => 'Ce plug-in de règlement n\'a pas de paramètre.',
    'unique_payment_method_name'        => 'Un mode de règlement ayant ce nom court existe déjà !',
    'valid_payment_method'              => 'Mode de règlement invalide.',
    'require_accept_terms'              => 'Vous devez accepter les conditions.',
    'no_shipping_methods'               => 'Aucun mode d\'expédition n\'a été configuré.',
    'no_payment_methods'                => 'Aucun mode de règlement n\'a été configuré.',

    // cp pages
    'dashboard'                         => 'Tableau de Bord',
    'nav_dashboard'                     => 'Tableau de Bord',
    'recent_orders'                     => 'Commandes récentes',
    'orders'                            => 'Commandes',
    'nav_orders'                        => 'Commandes',
    'inventory'                         => 'Stocks',
    'nav_inventory'                     => 'Stocks',
    'reports'                           => 'Rapports',
    'nav_reports'                       => 'Rapports',
    'settings'                          => 'Paramètres',
    'nav_settings'                      => 'Paramètres',
    'product_details'                   => 'Détails produit',
    'order'                             => 'Commande',
    'order_details'                     => 'Détails commande',
    'show_invoice'                      => 'Afficher la facture',
    'stock'                             => 'Stock',
    'add_payment'                       => 'Ajouter un nouveau règlement',
    'country'                           => 'Pays',
    'countries'                         => 'Pays',
    'country_details'                   => 'Détails Pays',
    'region'                            => 'Région',
    'regions'                           => 'Régions',
    'region_any'                        => '(n\'importe laquelle)',
    'postcode'                          => 'Code postal',
    'iso_code'                          => 'Code ISO',
    'code'                              => 'Code',
    'add_region'                        => 'Ajouter une région...',
    'select_country'                    => 'Sélectionner le pays',
    'priority'                          => 'Priorité',
    'plugin'                            => 'Plug-in',
    'display_order'                     => 'Afficher Commande',
    'enable_selected'                   => 'Activé sélectionné',
    'disable_selected'                  => 'Inactif sélectionné',
    'delete_selected'                   => 'Supprimer sélectionné',
    'restore_defaults'                  => 'Restaurer les valeurs par défaut',
    'delete_confirm'                    => 'Confirmation de suppression',
    'delete_orders_question'            => 'Êtes-vous certain de vouloir supprimer ces commandes de manière définitive ?',
    'delete_order_question'             => 'Êtes-vous certain de vouloir supprimer cette commande de manière défintive ?',
    'delete_warning'                    => 'CETTE ACTION NE PEUT PAS ÊTRE ANNULÉE',
    'install_new_site'                  => 'Installer le nouveau site',
    'install_now'                       => 'Installer maintenant',
    'store_not_yet_installed'           => 'Store / Boutique n\'a pas encore été installé sur le site : %s',
    'duplicate_settings_from'           => 'Dupliquer les paramètres à partir de :',
    'install_example_templates'         => 'Installer les modèles d\'exemple',
    'site_installed_successfully'       => 'Site installé avec succès !',
    'install_store_super_admin'         => 'Afin de pouvoir installer Store / Boutique sur ce site, merci de vous connecter en tant que Super Administrateur.',

    // cp status messages
    'invalid_order_id'                  => 'Commande invalide !',
    'invalid_promo_code'                => 'Code promo invalide !',
    'invalid_shipping_method'           => 'Mode d\'expédition invalide !',
    'invalid_tax_rate'                  => 'Taux de taxe invalide !',
    'invalid_payment_id'                => 'Règlement invalide !',
    'settings_updated'                  => 'Paramètres mis à jour',
    'regions_updated'                   => 'Régions mises à jour',
    'payment_added'                     => 'Règlement ajouté',
    'payment_cancelled'                 => 'Règlement annulé',
    'store_ext_disabled'                => 'L\'extension Store / Boutique est inactive. Merci de cliquer ici pour l\'activer.',
    'store_ft_disabled'                 => 'Le type de champ Store / Boutique est inactif. Merci de cliquer ici pour l\'activer.',
    'plugin_no_settings'                => 'Ce plug-in n\'a aucun paramètre !',
    'no_orders_selected'                => 'Aucune commande n\'est sélectionnée !',

    // products
    'entry_id'                          => 'ID de l\'entrée',
    'product'                           => 'Produit',
    'price'                             => 'Prix',
    'sale_price'                        => 'Prix soldé/promo',
    'sale_price_enabled'                => 'Prix soldé/promo activé ?',
    'sale_start_date'                   => 'Date de démarrage de la période de solde/promo',
    'sale_end_date'                     => 'Date de fin de la période de solde/promo',
    'weight'                            => 'Poids',
    'dimension_l'                       => 'Longueur/profondeur',
    'dimension_w'                       => 'Largeur',
    'dimension_h'                       => 'Hauteur',
    'free_shipping'                     => 'Port gratuit',
    'stock_description'                 => 'Description du stock', /**to be verified in context */
    'sku'                               => 'Référence Produit',
    'stock_level'                       => 'Niveau de stock',
    'min_order_qty'                     => 'Qtté Min de Cde',
    'total_stock'                       => 'Stock total',
    'price_modifier'                    => 'Modificateur de prix', /** remise ? c'est traduit dans ce sens au niveau de GS1 ; A price modifier is usually translated as a kind of allowance that lowers the initial price, in French it's a "Remise" or sometimes a "Rabais" */
    'product_tax_exempt'                => 'Ce produit est vendu Hors-Taxe',

    // inventory
    'last_status_update'                => 'Dernier MAJ de statut',

    // orders
    'order_id'                          => 'ID de la commande',
    'billing_details'                   => 'Détails de facturation',
    'shipping_details'                  => 'Détails d\'expédition',
    'custom_details'                    => 'Détails spécifiques',
    'billing_name'                      => 'Nom pour la facturation',
    'billing_address'                   => 'Adresse de facturation',
    'billing_address1'                  => 'Adresse1 de facturation',
    'billing_address2'                  => 'Adresse2 de facturation',
    'billing_address3'                  => 'Adresse3 de facturation',
    'billing_region'                    => 'Région de facturation',
    'billing_country'                   => 'Pays de facturation',
    'billing_postcode'                  => 'Code postal de facturation',
    'billing_phone'                     => 'Téléphone de facturation',
    'shipping_name'                     => 'Nom pour l\'expédition',
    'shipping_address'                  => 'Adresse d\'expédition',
    'shipping_address1'                 => 'Adresse1 d\'expédition',
    'shipping_address2'                 => 'Adresse2 d\'expédition',
    'shipping_address3'                 => 'Adresse3 d\'expédition',
    'shipping_region'                   => 'Région d\'expédition',
    'shipping_country'                  => 'Pays d\'expédition',
    'shipping_postcode'                 => 'Code postal d\'expédition',
    'shipping_phone'                    => 'Téléphone d\'expédition',
    'order_email'                       => 'Courriel',
    'order_date'                        => 'Date de commande',
    'item'                              => 'Article',
    'items'                             => 'Articles',
    'quantity'                          => 'Quantité',
    'total'                             => 'Total',
    'order_total'                       => 'Total de la commande',
    'overpaid'                          => 'Trop Payé',
    'balance_due'                       => 'Solde',
    'with_selected'                     => 'Sélectionner une action',
    'gateway'                           => 'Passerelle',
    'modifiers'                         => 'Modificateurs',  /** remises ? */
    'order_subtotal'                    => 'Sous-total de la commande',
    'order_tax_subtotal'                => 'Sous-total des taxes',
    'order_discount'                    => 'Remise sur la commande',
    'order_shipping'                    => 'Expédition',
    'order_shipping_tax'                => 'Taxe sur l\'expédition',
    'order_tax'                         => 'Taxe',
    'order_status_history'              => 'Historique des statuts de la commande',
    'order_status_updated'              => 'Statut MAJ',
    'status'                            => 'Statut',
    'yesterday'                         => 'Hier',
    'prev_month'                        => 'Le mois dernier',
    'details'                           => 'Détails',
    'paid'                              => 'Réglé',
    'paid?'                             => 'Réglé ?',
    'unpaid'                            => 'Non réglé',
    'incomplete'                        => 'Incomplet',
    'filter_by_payment_status'          => 'Filtrer par statut de règlement',
    'edit_status'                       => 'Éditer le statut',
    'order_deleted'                     => 'Commande supprimée avec succès',
    'orders_deleted'                    => 'Commandes supprimées avec succès',
    'filter_by_order_status'            => 'Filtrer par statut de commande',
    'dataTables_info'                   => 'Affichage des entrées de _START_ à _END_ sur un total de _TOTAL_ ',
    'dataTables_info_empty'             => 'Aucune entrée en base de données',
    'dataTables_info_filtered'          => '(filtrées sur un nombre total d\'entrée de _MAX_ )',
    'dataTables_processing'             => 'En cours de traitement&hellip;',
    'error_processing_order'            => 'Une erreur inattendue s\'est produite lors du traitement de votre commande.',
    'submit_order_not_logged_in'        => 'Vous devez être loggé pour soumettre une commande.',

    // order payments
    'amount'                            => 'Montant',
    'owing'                             => 'Montant dû',
    'payments'                          => 'Règlements',
    'payment_id'                        => 'ID de transaction',
    'payment_date'                      => 'Date de règlement',
    'payment_dates'                     => 'Dates de règlement',
    'payment_reference'                 => 'Référence',
    'payment_message'                   => 'Message de règlement',
    'payment_status'                    => 'Statut',
    'payment_status_authorized'         => 'Autorisé',
    'payment_status_complete'           => 'Terminé',
    'payment_status_failed'             => 'Échec',
    'payment_status_pending'            => 'En attente',
    'payment_status_refunded'           => 'Remboursé',
    'reference'                         => 'Référence',
    'capture_payment'                   => 'Collecte',
    'capture_payment_confirm'           => 'Êtes-vous sûr de vouloir collecter ce règlement ?',
    'refund_payment'                    => 'Remboursement',
    'refund_payment_confirm'            => 'Êtes-vous sûr de vouloir rembourser ce règlement ?',
    'no_payments'                       => 'Aucun règlement enregistré pour cette commande.',
    'recorded_by'                       => 'Enregistré par',
    'payment_is_zero'                   => 'Le montant du règlement ne peut pas être zéro.',
    'store_currency_non_zero'           => 'Le champ %s ne peut pas être à zéro.',
    'payment_capture_success'           => 'Règlement collecté avec succès.',
    'payment_capture_failure'           => 'La collecte du règlement a échoué.',
    'payment_refund_success'            => 'Règlement remboursé avec succès.',
    'payment_refund_failure'            => 'Le remboursement du règlement a échoué.',
    'ideal_choose_bank'                 => 'Choisissez votre banque&hellip;',
    'ideal_other_banks'                 => '---Autres banques---',

    // module tags
    'add_to_cart'                       => 'Ajouter au panier',
    'buy_now'                           => 'Règler maintenant',
    'empty_cart'                        => 'Vider le panier',
    'update_totals'                     => 'Mettre à jour les totaux',
    'submit_order'                      => 'Soumettre la commande',
    'invalid_parameter'                 => 'Paramètre %s manquant ou invalide !',
    'required_field'                    => '%s requis !',
    'download_not_found'                => 'Impossible de localiser l\'ID de fichier',

    // dashboard page
    'graph_options'                     => 'Paramètres de graphique',
    'data_series'                       => 'Nom des séries de données : ',
    'dashboard_graph_daily'             => 'Ventes par jour',
    'dashboard_graph_weekly'            => 'Ventes par semaine',
    'dashboard_graph_monthly'           => 'Ventes par mois',
    'dashboard_graph_quarterly'         => 'Ventes par trimestre',
    'showing'                           => 'Affichage',
    'daily_sales'                       => 'Ventes quotidiennes',
    'weekly_sales'                      => 'Ventes hebdomadaires',
    'monthly_sales'                     => 'Ventes mensuelles',
    'quarterly_sales'                   => 'Ventes trimestrielles',

    // reports page
    'view_report'                       => 'Voir le rapport',
    'export_pdf'                        => 'Exporter en PDF',
    'export_csv'                        => 'Exporter en CSV',
    'sales_report1'                     => 'Commandes',
    'sales_report2'                     => 'Produits vendus',
    'stock_report1'                     => 'Meilleurs rotations',
    'stock_report2'                     => 'Stock à recommander',
    'stock_report3'                     => 'Catalogue des stocks',
    'orders_report'                     => 'Rapport des commandes',
    'orders_report_all_orders'          => 'Toutes les commandes',
    'orders_report_list_all'            => 'Lister toutes les commandes passées selon',
    'orders_report_with_status'         => 'avec le statut',
    'total_gross_sales'                 => 'Ventes brutes totales',
    'total_net_sales'                   => 'Ventes nettes totales',
    'quantity_sold'                     => 'Quantité vendue',
    'totals'                            => 'Totaux',
    'custom_range'                      => 'Plage de date spécifique',
    'product_title'                     => 'Titre du produit',
    'current_price'                     => 'Prix actuel',
    'average_price'                     => 'Prix moyen',
    'net_sales'                         => 'Ventes nettes',
    'current_stock_level'               => 'Niveau de stock actuel',
    'total_stock_value'                 => 'Valeur totale du stock',
    'date_paid'                         => 'Date du règlement',
    'item_qty'                          => 'Qtté article',
    'item_price'                        => 'Prix article',
    'item_subtotal'                     => 'Sous-total article',
    'order_qty'                         => 'Qtté commandée',
    'total_sales'                       => 'Ventes totales',
    'products_sold'                     => 'Produits vendus',
    'starting_from'                     => 'à partir de',
    'through'                           => 'jusqu\'à',
    'ordered_by'                        => 'commandé par',
    'sorted_by'                         => 'trié selon',
    'total_sales_report_desc'           => 'Toutes les commandes et les données de vente à partir de',
    'stock_products_report_desc'        => 'Produits vendus en',
    'stock_inventory_report_desc'       => 'Toutes les références de produits',
    'invalid_report'                    => 'Le rapport demandé est invalide !',

    // promo codes page
    'promo_type'                        => 'Type',
    'promo_type_p'                      => 'Remise promo en pourcentage',
    'promo_type_v'                      => 'Remise promo en valeur absolue',
    'promo_start_date'                  => 'Date de début',
    'promo_end_date'                    => 'Date de fin',
    'promo_value'                       => 'Montant',
    'promo_code'                        => 'Code Promo',
    'promo_cat_group'                   => 'Groupe de catégorie',
    'promo_member_group'                => 'Restreindre à un groupe de membre',
    'use_limit'                         => 'Limite maxi d\'utilisation',
    'per_user_limit'                    => 'Limite par utilisateur',
    'new_promo_code'                    => 'Nouveau Code Promo',
    'edit_promo_code'                   => 'Éditer le Code Promo',
    'applies_to'                        => 'S\'applique à',
    'free_shipping?'                    => 'Livraison gratuite ?',
    'specific_products'                 => 'Produits spécifiques',
    'no_promo_codes'                    => 'Aucun Code Promo n\'est défini.',
    'if_promo_code_empty_spiel'         => 'Si laissé vide, le Code Promo s\'appliquera automatiquement à toutes les commandes concernées.',
    'promo_code_invalid'                => 'Code Promo invalide.',
    'promo_code_expired'                => 'La date maxi d\'utilisation de ce Code Promo est  dépassée !',
    'promo_code_user_limit'             => 'Vous avez atteint la limite d\'utilisation fixée pour ce Code Promo !',
    'promo_code_no_longer_valid'        => 'Le Code Promo que vous utilisez n\'est plus valable !',

    // email page
    'new_email_template'                => 'Nouveau modèle de courriel',
    'email_template'                    => 'Modèle de courriel',
    'email_name'                        => 'Nom',
    'email_subject'                     => 'Objet du courriel',
    'order_confirmation'                => 'Confirmation de commande',
    'payment_confirmation'              => 'Confirmation de règlement',
    'invalid_template_id'               => 'ID de modèle invalide',
    'invalid_template_ids'              => 'IDs de modèle invalides',
    'no_system_email_delete'            => 'Le modèle %s ne peut pas être supprimé.',
    'invalid_selection'                 => 'Sélection invalide',
    'email_templates_can_contain'       => 'Les modèles de courriel peuvent contenir des informations spécifiques à une commande ou à un membre.',
    'email_templates_to_display_order_details' => 'Afin d\'afficher les détails de la commande, utilisez les balises de style de modèle. La plupart des variables disponibles dans les balises de commande sont également disponibles ici, comme (par exemple) :',
    'email_templates_to_display_items'  => 'Afin d\'afficher des informations sur les articles achetés, utilisez la boucle articles :',
    'email_templates_member_details'    => 'Si votre commande a été envoyée par un membre loggé, vous pouvez également afficher des informations sur ce membre :',

    // fields page
    'order_status'                      => 'Statut de commande',
    'order_statuses'                    => 'Statuts de commande',
    'status_color'                      => 'Couleur de statut',
    'orders_field_name'                 => 'Nom de champ de commande',
    'required'                          => 'Requis',
    'status_in_use'                     => 'Note : ce statut ne peut être renommé ou supprimé car une ou des commandes lui sont encore affectée(s) !',
    'status_is_default'                 => 'Note : ce statut ne peut être supprimé car c\'est actuellement le statut de commande par défaut !',
    'prices_excluding_tax'              => 'Tous les prix sont Hors-Taxe.',
    'tax_shipping'                      => 'Appliquer les taxes aux frais d\'expédition ?',
    'restore_fields_confirm'            => 'Êtes-vous sûr de vouloir restaurer les paramètres par défaut pour l\'ordre des champs ?',

    // payment gateway statuses
    'invalid_driver'                    => 'Driver invalide',
    'invalid_order'                     => 'Commande invalide',
    'invalid_submission'                => 'Soumission invalide',
    'payment_plugin_load_error'         => 'Impossible de charger le plugin de règlement',
    'order_already_paid'                => 'La commande a déjà été réglée',

    // publish page
    'shipping'                          => 'Expédition',
    'pricing'                           => 'Tarification',
    'product_modifiers'                 => 'Modificateurs de produit',
    'mod_type'                          => 'Type de modificateur',
    'mod_instructions'                  => 'Instructions',
    'variation'                         => 'Variante',
    'variation_single_sku'              => 'Variante (Référence produit unique)',
    'text_input'                        => 'Saisie de texte',
    'option'                            => 'Option',
    'add_new_option'                    => 'Nouvelle option',
    'add_product_modifier'              => 'Nouveau modificateur de produit',
    'no_product_modifiers_defined'      => 'Aucun modificateur de produit défini',
    'stock_control'                     => 'Contrôle des stocks',
    'remove'                            => 'Supprimer',
    'sku_required'                      => 'Le champ référence produit est requis',
    'sku_too_long'                      => 'La référence produit ne peut dépasser 40 caractères',
    'sku_not_unique'                    => 'La référence produit doit être unique',
    'handling'                          => 'Surcoût de manutention',

    // status pages
    'new_order_status'                  => 'Nouveau statut de commande',
    'edit_order_status'                 => 'Éditer le statut de commande',
    'status_field_name'                 => 'Nom du champ statut',
    'status_field_value'                => 'Valeur du champ statut',
    'status_name'                       => 'Nom',
    'status_highlight'                  => 'Couleur de surbrillance',
    'add_new_status'                    => 'Ajouter un nouveau statut',
    'make_default'                      => 'Par défaut ?',
    'updated_by'                        => 'Mis à jour part',
    'invalid_order_status'              => 'Statut de commande invalide',
    'duplicate_status_error'            => 'Les noms des statuts de commande doivent être uniques.',
);