<?php
/**
 * Generated stub declarations for ACF PRO
 * @see https://www.advancedcustomfields.com/
 * @see https://github.com/php-stubs/acf-pro-stubs
 */

class ACF
{
    /** @var string The plugin version number */
    var $version = '5.7.3';
    /** @var array The plugin settings array */
    var $settings = array();
    /** @var array The plugin data array */
    var $data = array();
    /** @var array Storage for class instances */
    var $instances = array();
    /**
     *  __construct
     *
     *  A dummy constructor to ensure ACF is only initialized once
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  initialize
     *
     *  The real constructor to initialize ACF
     *
     *  @type	function
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function initialize()
    {
    }
    /**
     *  init
     *
     *  This function will run after all plugins and theme functions have been included
     *
     *  @type	action (init)
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function init()
    {
    }
    /**
     *  load_plugin_textdomain
     *
     *  This function will load the textdomain file
     *
     *  @type	function
     *  @date	3/5/17
     *  @since	5.5.13
     *
     *  @param	void
     *  @return	void
     */
    function load_plugin_textdomain()
    {
    }
    /**
     *  register_post_types
     *
     *  This function will register post types and statuses
     *
     *  @type	function
     *  @date	22/10/2015
     *  @since	5.3.2
     *
     *  @param	void
     *  @return	void
     */
    function register_post_types()
    {
    }
    /**
     *  register_post_status
     *
     *  This function will register custom post statuses
     *
     *  @type	function
     *  @date	22/10/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function register_post_status()
    {
    }
    /**
     *  posts_where
     *
     *  This function will add in some new parameters to the WP_Query args allowing fields to be found via key / name
     *
     *  @type	filter
     *  @date	5/12/2013
     *  @since	5.0.0
     *
     *  @param	string $where
     *  @param	object $wp_query
     *  @return	string $where
     */
    function posts_where($where, $wp_query)
    {
    }
    /**
     *  define
     *
     *  This function will safely define a constant
     *
     *  @type	function
     *  @date	3/5/17
     *  @since	5.5.13
     *
     *  @param	string $name
     *  @param	mixed $value
     *  @return	void
     */
    function define($name, $value = \true)
    {
    }
    /**
     *  has_setting
     *
     *  Returns true if has setting.
     *
     *  @date	2/2/18
     *  @since	5.6.5
     *
     *  @param	string $name
     *  @return	boolean
     */
    function has_setting($name)
    {
    }
    /**
     *  get_setting
     *
     *  Returns a setting.
     *
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	string $name
     *  @return	mixed
     */
    function get_setting($name)
    {
    }
    /**
     *  update_setting
     *
     *  Updates a setting.
     *
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	string $name
     *  @param	mixed $value
     *  @return	void
     */
    function update_setting($name, $value)
    {
    }
    /**
     *  get_data
     *
     *  Returns data.
     *
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	string $name
     *  @return	mixed
     */
    function get_data($name)
    {
    }
    /**
     *  set_data
     *
     *  Sets data.
     *
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	string $name
     *  @param	mixed $value
     *  @return	void
     */
    function set_data($name, $value)
    {
    }
    /**
     *  get_instance
     *
     *  Returns an instance.
     *
     *  @date	13/2/18
     *  @since	5.6.9
     *
     *  @param	string $class The instance class name.
     *  @return	object
     */
    function get_instance($class)
    {
    }
    /**
     *  new_instance
     *
     *  Creates and stores an instance.
     *
     *  @date	13/2/18
     *  @since	5.6.9
     *
     *  @param	string $class The instance class name.
     *  @return	object
     */
    function new_instance($class)
    {
    }
}
class acf_admin_field_group
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  post_updated_messages
     *
     *  This function will customize the message shown when editing a field group
     *
     *  @type	action (post_updated_messages)
     *  @date	30/04/2014
     *  @since	5.0.0
     *
     *  @param	array $messages
     *  @return	$messages
     */
    function post_updated_messages($messages)
    {
    }
    /**
     *  current_screen
     *
     *  This function is fired when loading the admin page before HTML has been rendered.
     *
     *  @type	action (current_screen)
     *  @date	21/07/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function current_screen()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This action is run after post query but before any admin script / head actions. 
     *  It is a good place to register all actions.
     *
     *  @type	action (admin_enqueue_scripts)
     *  @date	30/06/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  admin_head
     *
     *  This function will setup all functionality for the field group edit page to work
     *
     *  @type	action (admin_head)
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_head()
    {
    }
    /**
     *  edit_form_after_title
     *
     *  This action will allow ACF to render metaboxes after the title
     *
     *  @type	action
     *  @date	17/08/13
     *
     *  @param	void
     *  @return	void
     */
    function edit_form_after_title()
    {
    }
    /**
     *  form_data
     *
     *  This function will add extra HTML to the acf form data element
     *
     *  @type	function
     *  @date	31/05/2016
     *  @since	5.3.8
     *
     *  @param	void
     *  @return	void
     */
    function form_data($args)
    {
    }
    /**
     *  admin_l10n
     *
     *  This function will append extra l10n strings to the acf JS object
     *
     *  @type	function
     *  @date	31/05/2016
     *  @since	5.3.8
     *
     *  @param	array $l10n
     *  @return	$l10n
     */
    function admin_l10n($l10n)
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type	function
     *  @date	11/01/2016
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_footer()
    {
    }
    /**
     *  admin_footer_js
     *
     *  description
     *
     *  @type	function
     *  @date	31/05/2016
     *  @since	5.3.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_footer_js()
    {
    }
    /**
     *  screen_settings
     *
     *  description
     *
     *  @type	function
     *  @date	26/01/13
     *  @since	3.6.0
     *
     *  @param	string $current
     *  @return	$current
     */
    function screen_settings($html)
    {
    }
    /**
     *  post_submitbox_misc_actions
     *
     *  This function will customize the publish metabox
     *
     *  @type	function
     *  @date	17/07/2015
     *  @since	5.2.9
     *
     *  @param	void
     *  @return	void
     */
    function post_submitbox_misc_actions()
    {
    }
    /**
     *  save_post
     *
     *  This function will save all the field group data
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	1.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function save_post($post_id, $post)
    {
    }
    /**
     *  mb_fields
     *
     *  This function will render the HTML for the medtabox 'acf-field-group-fields'
     *
     *  @type	function
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function mb_fields()
    {
    }
    /**
     *  mb_options
     *
     *  This function will render the HTML for the medtabox 'acf-field-group-options'
     *
     *  @type	function
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function mb_options()
    {
    }
    /**
     *  mb_locations
     *
     *  This function will render the HTML for the medtabox 'acf-field-group-locations'
     *
     *  @type	function
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function mb_locations()
    {
    }
    /**
     *  ajax_render_location_rule
     *
     *  This function can be accessed via an AJAX action and will return the result from the render_location_value function
     *
     *  @type	function (ajax)
     *  @date	30/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function ajax_render_location_rule()
    {
    }
    /**
     *  ajax_render_field_settings
     *
     *  This function will return HTML containing the field's settings based on it's new type
     *
     *  @type	function (ajax)
     *  @date	30/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function ajax_render_field_settings()
    {
    }
    /**
     *  ajax_move_field
     *
     *  description
     *
     *  @type	function
     *  @date	20/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_move_field()
    {
    }
}
class acf_admin_field_groups
{
    // vars
    var $url = 'edit.php?post_type=acf-field-group', $sync = array();
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  current_screen
     *
     *  This function is fired when loading the admin page before HTML has been rendered.
     *
     *  @type	action (current_screen)
     *  @date	21/07/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function current_screen()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This function will add the already registered css
     *
     *  @type	function
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  check_duplicate
     *
     *  This function will check for any $_GET data to duplicate
     *
     *  @type	function
     *  @date	17/10/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function check_duplicate()
    {
    }
    /**
     *  check_sync
     *
     *  This function will check for any $_GET data to sync
     *
     *  @type	function
     *  @date	9/12/2014
     *  @since	5.1.5
     *
     *  @param	void
     *  @return	void
     */
    function check_sync()
    {
    }
    /**
     *  list_table_views
     *
     *  This function will add an extra link for JSON in the field group list table
     *
     *  @type	function
     *  @date	3/12/2014
     *  @since	5.1.5
     *
     *  @param	array $views
     *  @return	$views
     */
    function list_table_views($views)
    {
    }
    /**
     *  trashed_post
     *
     *  This function is run when a post object is sent to the trash
     *
     *  @type	action (trashed_post)
     *  @date	8/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	void
     */
    function trashed_post($post_id)
    {
    }
    /**
     *  untrashed_post
     *
     *  This function is run when a post object is restored from the trash
     *
     *  @type	action (untrashed_post)
     *  @date	8/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	void
     */
    function untrashed_post($post_id)
    {
    }
    /**
     *  deleted_post
     *
     *  This function is run when a post object is deleted from the trash
     *
     *  @type	action (deleted_post)
     *  @date	8/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	void
     */
    function deleted_post($post_id)
    {
    }
    /**
     *  field_group_columns
     *
     *  This function will customize the columns for the field group table
     *
     *  @type	filter (manage_edit-acf-field-group_columns)
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	array $columns
     *  @return	array $columns
     */
    function field_group_columns($columns)
    {
    }
    /**
     *  field_group_columns_html
     *
     *  This function will render the HTML for each table cell
     *
     *  @type	action (manage_acf-field-group_posts_custom_column)
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	string $column
     *  @param	int $post_id
     *  @return	void
     */
    function field_group_columns_html($column, $post_id)
    {
    }
    function render_column($column, $field_group)
    {
    }
    /**
     *  admin_footer
     *
     *  This function will render extra HTML onto the page
     *
     *  @type	action (admin_footer)
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	void
     *  @return	void
     */
    function admin_footer()
    {
    }
    /**
     *  sync_admin_footer
     *
     *  This function will render extra HTML onto the page
     *
     *  @type	action (admin_footer)
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	void
     *  @return	void
     */
    function sync_admin_footer()
    {
    }
}
class acf_admin_tools
{
    /** @var array Contains an array of admin tool instances */
    var $tools = array();
    /** @var string The active tool */
    var $active = '';
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  register_tool
     *
     *  This function will store a tool tool class
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	string $class
     *  @return	void
     */
    function register_tool($class)
    {
    }
    /**
     *  get_tool
     *
     *  This function will return a tool tool class
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	string $name
     *  @return	void
     */
    function get_tool($name)
    {
    }
    /**
     *  get_tools
     *
     *  This function will return an array of all tools
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	array
     */
    function get_tools()
    {
    }
    /**
     *  admin_menu
     *
     *  This function will add the ACF menu item to the WP admin
     *
     *  @type	action (admin_menu)
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_menu()
    {
    }
    /**
     *  load
     *
     *  description
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function load()
    {
    }
    /**
     *  include_tools
     *
     *  description
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function include_tools()
    {
    }
    /**
     *  check_submit
     *
     *  description
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function check_submit()
    {
    }
    /**
     *  html
     *
     *  description
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html()
    {
    }
    /**
     *  meta_box_html
     *
     *  description
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function metabox_html($post, $metabox)
    {
    }
}
class acf_admin
{
    // vars
    var $notices = array();
    /**
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  add_notice
     *
     *  This function will add the notice data to a setting in the acf object for the admin_notices action to use
     *
     *  @type	function
     *  @date	17/10/13
     *  @since	5.0.0
     *
     *  @param	string $text
     *  @param	string $class
     *  @param	wrap (string)
     *  @return	void
     */
    function add_notice($text = '', $class = '', $wrap = 'p')
    {
    }
    /**
     *  get_notices
     *
     *  This function will return an array of admin notices
     *
     *  @type	function
     *  @date	17/10/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	array
     */
    function get_notices()
    {
    }
    /**
     *  admin_menu
     *
     *  This function will add the ACF menu item to the WP admin
     *
     *  @type	action (admin_menu)
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_menu()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This function will add the already registered css
     *
     *  @type	function
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  admin_notices
     *
     *  This function will render any admin notices
     *
     *  @type	function
     *  @date	17/10/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_notices()
    {
    }
}
class acf_admin_install_network
{
    /**
     *  __construct
     *
     *  A good place to add actions / filters
     *
     *  @type	function
     *  @date	11/08/13
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  network_admin_menu
     *
     *  This function will chck for available updates and add actions if needed
     *
     *  @type	function
     *  @date	2/04/2015
     *  @since	5.1.5
     *
     *  @param	void
     *  @return	void
     */
    function network_admin_menu()
    {
    }
    /**
     *  load
     *
     *  This function will look at the $_POST data and run any functions if needed
     *
     *  @type	function
     *  @date	7/01/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function network_load()
    {
    }
    /**
     *  network_admin_notices
     *
     *  This function will render the update notice
     *
     *  @type	function
     *  @date	2/04/2015
     *  @since	5.1.5
     *
     *  @param	void
     *  @return	void
     */
    function network_admin_notices()
    {
    }
    /**
     *  network_html
     *
     *  This function will render the HTML for the network upgrade page
     *
     *  @type	function
     *  @date	19/02/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function network_html()
    {
    }
}
class acf_admin_install
{
    // vars
    var $db_updates = array('5.0.0' => 'acf_update_500', '5.5.0' => 'acf_update_550');
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_menu
     *
     *  This function will chck for available updates and add actions if needed
     *
     *  @type	function
     *  @date	19/02/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_menu()
    {
    }
    /**
     *  load
     *
     *  This function will look at the $_POST data and run any functions if needed
     *
     *  @type	function
     *  @date	7/01/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function load()
    {
    }
    /**
     *  admin_notices
     *
     *  This function will render the DB Upgrade notice
     *
     *  @type	function
     *  @date	17/10/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_notices()
    {
    }
    /**
     *  html
     *
     *  description
     *
     *  @type	function
     *  @date	19/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function html()
    {
    }
    /**
     *  ajax_db_update
     *
     *  description
     *
     *  @type	function
     *  @date	24/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_db_update()
    {
    }
    /**
     *  run_db_update
     *
     *  This function will perform a db upgrade
     *
     *  @type	function
     *  @date	10/09/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function run_update($callback = '')
    {
    }
    /**
     *  wp_upgrade
     *
     *  This function will run when the WP database is updated
     *
     *  @type	function
     *  @date	10/09/2016
     *  @since	5.4.0
     *
     *  @param	string $wp_db_version The new $wp_db_version
     *  @return	string $wp_current_db_version The old (current) $wp_db_version
     */
    function wp_upgrade($wp_db_version, $wp_current_db_version)
    {
    }
}
class acf_settings_addons
{
    var $view;
    /**
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_menu
     *
     *  This function will add the ACF menu item to the WP admin
     *
     *  @type	action (admin_menu)
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_menu()
    {
    }
    /**
     *  load
     *
     *  description
     *
     *  @type	function
     *  @date	7/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function load()
    {
    }
    /**
     *  html
     *
     *  description
     *
     *  @type	function
     *  @date	7/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function html()
    {
    }
}
class acf_settings_info
{
    /**
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_menu
     *
     *  This function will add the ACF menu item to the WP admin
     *
     *  @type	action (admin_menu)
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_menu()
    {
    }
    /**
     *  html
     *
     *  description
     *
     *  @type	function
     *  @date	7/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function html()
    {
    }
}
class ACF_Admin_Tool
{
    /** @var string Tool name */
    var $name = '';
    /** @var string Tool title */
    var $title = '';
    /** @var string Dashicon slug */
    //var $icon = '';
    /** @var boolean Redirect form to single */
    //var $redirect = false;
    /**
     *  get_name
     *
     *  This function will return the Tool's name
     *
     *  @date	19/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function get_name()
    {
    }
    /**
     *  get_title
     *
     *  This function will return the Tool's title
     *
     *  @date	19/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function get_title()
    {
    }
    /**
     *  get_url
     *
     *  This function will return the Tool's title
     *
     *  @date	19/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function get_url()
    {
    }
    /**
     *  is_active
     *
     *  This function will return true if the tool is active
     *
     *  @date	19/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	bool
     */
    function is_active()
    {
    }
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	27/6/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  initialize
     *
     *  This function will initialize the admin tool
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  load
     *
     *  This function is called during the admin page load
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function load()
    {
    }
    /**
     *  html
     *
     *  This function will output the metabox HTML
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html()
    {
    }
    /**
     *  submit
     *
     *  This function will run when the tool's form has been submit
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function submit()
    {
    }
}
class ACF_Admin_Tool_Export extends \ACF_Admin_Tool
{
    /** @var string View context */
    var $view = '';
    /** @var array Export data */
    var $json = '';
    /**
     *  initialize
     *
     *  This function will initialize the admin tool
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  submit
     *
     *  This function will run when the tool's form has been submit
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function submit()
    {
    }
    /**
     *  submit_download
     *
     *  description
     *
     *  @date	17/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function submit_download()
    {
    }
    /**
     *  submit_generate
     *
     *  description
     *
     *  @date	17/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function submit_generate()
    {
    }
    /**
     *  load
     *
     *  description
     *
     *  @date	21/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function load()
    {
    }
    /**
     *  html
     *
     *  This function will output the metabox HTML
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html()
    {
    }
    /**
     *  html_field_selection
     *
     *  description
     *
     *  @date	24/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html_field_selection()
    {
    }
    /**
     *  html_panel_selection
     *
     *  description
     *
     *  @date	21/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html_panel_selection()
    {
    }
    /**
     *  html_panel_settings
     *
     *  description
     *
     *  @date	21/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html_panel_settings()
    {
    }
    /**
     *  html_archive
     *
     *  description
     *
     *  @date	20/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html_archive()
    {
    }
    /**
     *  html_single
     *
     *  description
     *
     *  @date	20/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html_single()
    {
    }
    /**
     *  html_generate
     *
     *  description
     *
     *  @date	17/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html_generate()
    {
    }
    /**
     *  get_selected_keys
     *
     *  This function will return an array of field group keys that have been selected
     *
     *  @date	20/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function get_selected_keys()
    {
    }
    /**
     *  get_selected
     *
     *  This function will return the JSON data for given $_POST args
     *
     *  @date	17/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	array
     */
    function get_selected()
    {
    }
}
class ACF_Admin_Tool_Import extends \ACF_Admin_Tool
{
    /**
     *  initialize
     *
     *  This function will initialize the admin tool
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  html
     *
     *  This function will output the metabox HTML
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function html()
    {
    }
    /**
     *  submit
     *
     *  This function will run when the tool's form has been submit
     *
     *  @date	10/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function submit()
    {
    }
}
class ACF_Ajax
{
    /** @var string The AJAX action name */
    var $action = '';
    /** @var array The $_REQUEST data */
    var $request;
    /** @var bool Prevents access for non-logged in users */
    var $public = \false;
    /**
     *  __construct
     *
     *  Sets up the class functionality.
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  initialize
     *
     *  Allows easy access to modifying properties without changing constructor.
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  has
     *
     *  Returns true if the request has data for the given key
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	string $key The data key
     *  @return	boolean
     */
    function has($key = '')
    {
    }
    /**
     *  get
     *
     *  Returns request data for the given key
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	string $key The data key
     *  @return	mixed
     */
    function get($key = '')
    {
    }
    /**
     *  set
     *
     *  Sets request data for the given key
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	string $key The data key
     *  @return	mixed
     */
    function set($key = '', $value)
    {
    }
    /**
     *  add_actions
     *
     *  Adds the ajax actions for this response.
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	void
     *  @return	void
     */
    function add_actions()
    {
    }
    /**
     *  request
     *
     *  Callback for ajax action. Sets up properties and calls the get_response() function.
     *
     *  @date	1/8/18
     *  @since	5.7.2
     *
     *  @param	void
     *  @return	void
     */
    function request()
    {
    }
    /**
     *  response
     *
     *  The actual logic for this AJAX request.
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	void
     *  @return	mixed The response data to send back or WP_Error.
     */
    function response()
    {
    }
    /**
     *  send
     *
     *  Sends back JSON based on the $response as either success or failure.
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	mixed $response The response to send back.
     *  @return	void
     */
    function send($response)
    {
    }
}
class ACF_Ajax_Check_Screen extends \ACF_Ajax
{
    /** @var string The AJAX action name */
    var $action = 'acf/ajax/check_screen';
    /** @var bool Prevents access for non-logged in users */
    var $public = \false;
    /**
     *  get_response
     *
     *  The actual logic for this AJAX request.
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	void
     *  @return	mixed The response data to send back or WP_Error.
     */
    function response()
    {
    }
}
class ACF_Ajax_Query extends \ACF_Ajax
{
    /** @var array The ACF field used for querying */
    var $field = \false;
    /** @var int The page of results to return */
    var $page = 1;
    /** @var int The number of results per page */
    var $per_page = 20;
    /** @var string The searched term */
    var $search = '';
    /** @var int The number of results found */
    var $count = 0;
    /**
     *  response
     *
     *  The actual logic for this AJAX request.
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	void
     *  @return	void
     */
    function response()
    {
    }
    /**
     *  get_args
     *
     *  description
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function get_args()
    {
    }
    /**
     *  get_results
     *
     *  description
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function get_results($args)
    {
    }
    /**
     *  get_result
     *
     *  description
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function get_result($item)
    {
    }
    /**
     *  get_response
     *
     *  description
     *
     *  @date	31/7/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function get_response($results, $args)
    {
    }
}
class ACF_Ajax_Query_Terms extends \ACF_Ajax_Query
{
    /** @var string The AJAX action name */
    var $action = 'acf/ajax/query_terms';
    /**
     *  get_args
     *
     *  description
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function get_args()
    {
    }
    /**
     *  get_results
     *
     *  description
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function get_results($args)
    {
    }
    /**
     *  get_result
     *
     *  description
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function get_result($term)
    {
    }
}
class ACF_Ajax_User_Setting extends \ACF_Ajax
{
    /** @var string The AJAX action name */
    var $action = 'acf/ajax/user_setting';
    /** @var bool Prevents access for non-logged in users */
    var $public = \true;
    /**
     *  get_response
     *
     *  The actual logic for this AJAX request.
     *
     *  @date	31/7/18
     *  @since	5.7.2
     *
     *  @param	void
     *  @return	mixed The response data to send back or WP_Error.
     */
    function response()
    {
    }
}
class ACF_Assets
{
    /** @var array Storage for translations */
    var $text = array();
    /** @var array Storage for data */
    var $data = array();
    /**
     *  __construct
     *
     *  description
     *
     *  @date	10/4/18
     *  @since	5.6.9
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  add_text
     *
     *  description
     *
     *  @date	13/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function add_text($text)
    {
    }
    /**
     *  add_data
     *
     *  description
     *
     *  @date	13/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function add_data($data)
    {
    }
    /**
     *  register_scripts
     *
     *  description
     *
     *  @date	13/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function register_scripts()
    {
    }
    /**
     *  enqueue_scripts
     *
     *  Enqueue scripts for input
     *
     *  @date	13/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function enqueue_scripts($args = array())
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  description
     *
     *  @date	16/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  admin_print_scripts
     *
     *  description
     *
     *  @date	18/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function admin_print_scripts()
    {
    }
    /**
     *  admin_head
     *
     *  description
     *
     *  @date	16/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function admin_head()
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @date	16/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function admin_footer()
    {
    }
    /**
     *  admin_print_footer_scripts
     *
     *  description
     *
     *  @date	18/4/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function admin_print_footer_scripts()
    {
    }
    /**
     *  enqueue_uploader
     *
     *  This function will render a WP WYSIWYG and enqueue media
     *
     *  @type	function
     *  @date	27/10/2014
     *  @since	5.0.9
     *
     *  @param	void
     *  @return	void
     */
    function enqueue_uploader()
    {
    }
}
class acf_cache
{
    // vars
    var $reference = array(), $active = \true;
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  is_active
     *
     *  This function will return true if caching is enabled
     *
     *  @type	function
     *  @date	26/6/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	bool
     */
    function is_active()
    {
    }
    /**
     *  enable
     *
     *  This function will enable ACF caching
     *
     *  @type	function
     *  @date	26/6/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	void
     */
    function enable()
    {
    }
    /**
     *  disable
     *
     *  This function will disable ACF caching
     *
     *  @type	function
     *  @date	26/6/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	void
     */
    function disable()
    {
    }
    /**
     *  get_key
     *
     *  This function will check for references and modify the key
     *
     *  @type	function
     *  @date	30/06/2016
     *  @since	5.4.0
     *
     *  @param	string $key
     *  @return	$key
     */
    function get_key($key = '')
    {
    }
    /**
     *  isset_cache
     *
     *  This function will return true if a cached data exists for the given key
     *
     *  @type	function
     *  @date	30/06/2016
     *  @since	5.4.0
     *
     *  @param	string $key
     *  @return	boolean
     */
    function isset_cache($key = '')
    {
    }
    /**
     *  get_cache
     *
     *  This function will return cached data for a given key
     *
     *  @type	function
     *  @date	30/06/2016
     *  @since	5.4.0
     *
     *  @param	string $key
     *  @return	mixed
     */
    function get_cache($key = '')
    {
    }
    /**
     *  set_cache
     *
     *  This function will set cached data for a given key
     *
     *  @type	function
     *  @date	30/06/2016
     *  @since	5.4.0
     *
     *  @param	string $key
     *  @param	mixed $data
     *  @return	void
     */
    function set_cache($key = '', $data = '')
    {
    }
    /**
     *  set_cache_reference
     *
     *  This function will set a reference to cached data for a given key
     *
     *  @type	function
     *  @date	30/06/2016
     *  @since	5.4.0
     *
     *  @param	string $key
     *  @param	string $reference
     *  @return	void
     */
    function set_cache_reference($key = '', $reference = '')
    {
    }
    /**
     *  delete_cache
     *
     *  This function will delete cached data for a given key
     *
     *  @type	function
     *  @date	30/06/2016
     *  @since	5.4.0
     *
     *  @param	string $key
     *  @return	void
     */
    function delete_cache($key = '')
    {
    }
}
class acf_compatibility
{
    /**
     *  __construct
     *
     *  description
     *
     *  @type	function
     *  @date	30/04/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function __construct()
    {
    }
    /**
     *  validate_field
     *
     *  This function will provide compatibility with ACF4 fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_field($field)
    {
    }
    /**
     *  validate_relationship_field
     *
     *  This function will provide compatibility with ACF4 fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_relationship_field($field)
    {
    }
    /**
     *  validate_textarea_field
     *
     *  This function will provide compatibility with ACF4 fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_textarea_field($field)
    {
    }
    /**
     *  validate_image_field
     *
     *  This function will provide compatibility with ACF4 fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_image_field($field)
    {
    }
    /**
     *  validate_wysiwyg_field
     *
     *  This function will provide compatibility with ACF4 fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_wysiwyg_field($field)
    {
    }
    /**
     *  validate_date_picker_field
     *
     *  This function will provide compatibility with ACF4 fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_date_picker_field($field)
    {
    }
    /**
     *  validate_taxonomy_field
     *
     *  This function will provide compatibility with ACF4 fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_taxonomy_field($field)
    {
    }
    /**
     *  validate_date_time_picker_field
     *
     *  This function will provide compatibility with existing 3rd party fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_date_time_picker_field($field)
    {
    }
    /**
     *  validate_user_field
     *
     *  This function will provide compatibility with ACF4 fields
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_user_field($field)
    {
    }
    /**
     *  validate_field_group
     *
     *  This function will provide compatibility with ACF4 field groups
     *
     *  @type	function
     *  @date	23/04/2014
     *  @since	5.0.0
     *
     *  @param	array $field_group
     *  @return	$field_group
     */
    function validate_field_group($field_group)
    {
    }
}
class acf_deprecated
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	30/1/17
     *  @since	5.5.6
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  acf_settings_show_admin
     *
     *  This function will add compatibility for previously named hooks
     *
     *  @type	function
     *  @date	19/05/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function acf_settings_show_admin($setting)
    {
    }
    /**
     *  acf_settings_l10n_textdomain
     *
     *  This function will add compatibility for previously named hooks
     *
     *  @type	function
     *  @date	19/05/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function acf_settings_l10n_textdomain($setting)
    {
    }
    /**
     *  acf_settings_l10n_field
     *
     *  This function will add compatibility for previously named hooks
     *
     *  @type	function
     *  @date	19/05/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function acf_settings_l10n_field($setting)
    {
    }
    /**
     *  acf_settings_url
     *
     *  This function will add compatibility for previously named hooks
     *
     *  @date	12/12/17
     *  @since	5.6.8
     *
     *  @param	void
     *  @return	void
     */
    function acf_settings_url($value)
    {
    }
    /**
     *  acf_validate_setting
     *
     *  description
     *
     *  @date	2/2/18
     *  @since	5.6.5
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function acf_validate_setting($name)
    {
    }
    /**
     *  acf_validate_field
     *
     *  This function will add compatibility for previously named hooks
     *
     *  @type	function
     *  @date	30/1/17
     *  @since	5.5.6
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function acf_validate_field($field)
    {
    }
    /**
     *  acf_validate_field_group
     *
     *  This function will add compatibility for previously named hooks
     *
     *  @type	function
     *  @date	30/1/17
     *  @since	5.5.6
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function acf_validate_field_group($field_group)
    {
    }
    /**
     *  acf_validate_post_id
     *
     *  This function will add compatibility for previously named hooks
     *
     *  @type	function
     *  @date	6/2/17
     *  @since	5.5.6
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function acf_validate_post_id($post_id, $_post_id)
    {
    }
}
class acf_fields
{
    /** @var array Contains an array of field type instances */
    var $types = array();
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  register_field_type
     *
     *  This function will register a field type instance
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	string $class
     *  @return	void
     */
    function register_field_type($class)
    {
    }
    /**
     *  get_field_type
     *
     *  This function will return a field type instance
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	string $name
     *  @return	mixed
     */
    function get_field_type($name)
    {
    }
    /**
     *  is_field_type
     *
     *  This function will return true if a field type exists
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	string $name
     *  @return	mixed
     */
    function is_field_type($name)
    {
    }
    /**
     *  register_field_type_info
     *
     *  This function will store a basic array of info about the field type
     *  to later be overriden by the above register_field_type function
     *
     *  @type	function
     *  @date	29/5/17
     *  @since	5.6.0
     *
     *  @param	array $info
     *  @return	void
     */
    function register_field_type_info($info)
    {
    }
    /**
     *  get_field_types
     *
     *  This function will return an array of all field types
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	string $name
     *  @return	mixed
     */
    function get_field_types()
    {
    }
}
class acf_field
{
    // vars
    var $name = '', $label = '', $category = 'basic', $defaults = array(), $l10n = array(), $public = \true;
    /**
     *  __construct
     *
     *  This function will initialize the field type
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  initialize
     *
     *  This function will initialize the field type
     *
     *  @type	function
     *  @date	27/6/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  add_filter
     *
     *  This function checks if the function is_callable before adding the filter
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	string $tag
     *  @param	string $function_to_add
     *  @param	int $priority
     *  @param	int $accepted_args
     *  @return	void
     */
    function add_filter($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  add_field_filter
     *
     *  This function will add a field type specific filter
     *
     *  @type	function
     *  @date	29/09/2016
     *  @since	5.4.0
     *
     *  @param	string $tag
     *  @param	string $function_to_add
     *  @param	int $priority
     *  @param	int $accepted_args
     *  @return	void
     */
    function add_field_filter($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  add_action
     *
     *  This function checks if the function is_callable before adding the action
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	string $tag
     *  @param	string $function_to_add
     *  @param	int $priority
     *  @param	int $accepted_args
     *  @return	void
     */
    function add_action($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  add_field_action
     *
     *  This function will add a field type specific filter
     *
     *  @type	function
     *  @date	29/09/2016
     *  @since	5.4.0
     *
     *  @param	string $tag
     *  @param	string $function_to_add
     *  @param	int $priority
     *  @param	int $accepted_args
     *  @return	void
     */
    function add_field_action($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  validate_field
     *
     *  This function will append default settings to a field
     *
     *  @type	filter ("acf/validate_field/type={$this->name}")
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	array $field
     *  @return	array $field
     */
    function validate_field($field)
    {
    }
    /**
     *  admin_l10n
     *
     *  This function will append l10n text translations to an array which is later passed to JS
     *
     *  @type	filter ("acf/input/admin_l10n")
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	array $l10n
     *  @return	array $l10n
     */
    function input_admin_l10n($l10n)
    {
    }
}
class acf_field__accordion extends \acf_field
{
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @date	30/10/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field
     *
     *  Create the HTML interface for your field
     *
     *  @date	30/10/17
     *  @since	5.6.3
     *
     *  @param	array $field
     *  @return	void
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @param	$field	- an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
}
class acf_field_button_group extends \acf_field
{
    /**
     *  initialize()
     *
     *  This function will setup the field type data
     *
     *  @date	18/9/17
     *  @since	5.6.3
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Creates the field's input HTML
     *
     *  @date	18/9/17
     *  @since	5.6.3
     *
     *  @param	array $field The field settings array
     *  @return	void
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Creates the field's settings HTML
     *
     *  @date	18/9/17
     *  @since	5.6.3
     *
     *  @param	array $field The field settings array
     *  @return	void
     */
    function render_field_settings($field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @date	18/9/17
     *  @since	5.6.3
     *
     *  @param	array $field The field array holding all the field options
     *  @return	$field
     */
    function update_field($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is appied to the $value after it is loaded from the db
     *
     *  @date	18/9/17
     *  @since	5.6.3
     *
     *  @param	mixed	$value		The value found in the database
     *  @param	mixed	$post_id	The post ID from which the value was loaded from
     *  @param	array	$field		The field array holding all the field options
     *  @return	$value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @date	18/9/17
     *  @since	5.6.3
     *
     *  @param	array $field The field array holding all the field options
     *  @return	$field
     */
    function translate_field($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @date	18/9/17
     *  @since	5.6.3
     *
     *  @param	mixed	$value		The value found in the database
     *  @param	mixed	$post_id	The post ID from which the value was loaded from
     *  @param	array	$field		The field array holding all the field options
     *  @return	$value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_checkbox extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	array $field the $field being rendered
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	array $field the $field being edited
     *  @return	void
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_choices
     *
     *  description
     *
     *  @type	function
     *  @date	15/7/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_field_choices($field)
    {
    }
    /**
     *  render_field_toggle
     *
     *  description
     *
     *  @type	function
     *  @date	15/7/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_field_toggle($field)
    {
    }
    /**
     *  render_field_custom
     *
     *  description
     *
     *  @type	function
     *  @date	15/7/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_field_custom($field)
    {
    }
    function walk($choices = array(), $args = array(), $depth = 0)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the field group ID (post_type = acf)
     *
     *  @return	$field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type	function
     *  @date	8/03/2016
     *  @since	5.3.2
     *
     *  @param	array $field
     *  @return	$field
     */
    function translate_field($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_color_picker extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
}
class acf_field_date_picker extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_date_and_time_picker extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_email extends \acf_field
{
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
}
class acf_field_file extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  get_media_item_args
     *
     *  description
     *
     *  @type	function
     *  @date	27/01/13
     *  @since	3.6.0
     *
     *  @param	array $vars
     *  @return	$vars
     */
    function get_media_item_args($vars)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  This function will validate a basic file input
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
}
class acf_field_google_map extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
}
class acf_field__group extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value found in the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *  @return	$value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the $post_id of which the value will be saved
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  prepare_field_for_db
     *
     *  This function will modify sub fields ready for update / load
     *
     *  @type	function
     *  @date	4/11/16
     *  @since	5.5.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function prepare_field_for_db($field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_block
     *
     *  description
     *
     *  @type	function
     *  @date	12/07/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_field_block($field)
    {
    }
    /**
     *  render_field_table
     *
     *  description
     *
     *  @type	function
     *  @date	12/07/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_field_table($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  duplicate_field()
     *
     *  This filter is appied to the $field before it is duplicated and saved to the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the modified field
     */
    function duplicate_field($field)
    {
    }
    /**
     *  prepare_field_for_export
     *
     *  description
     *
     *  @type	function
     *  @date	11/03/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function prepare_field_for_export($field)
    {
    }
    /**
     *  prepare_field_for_import
     *
     *  description
     *
     *  @type	function
     *  @date	11/03/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function prepare_field_for_import($field)
    {
    }
    /**
     *  delete_value
     *
     *  Called when deleting this field's value.
     *
     *  @date	1/07/2015
     *  @since	5.2.3
     *
     *  @param	mixed $post_id The post ID being saved
     *  @param	string $meta_key The field name as seen by the DB
     *  @param	array $field The field settings
     *  @return	void
     */
    function delete_value($post_id, $meta_key, $field)
    {
    }
}
class acf_field_image extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  get_media_item_args
     *
     *  description
     *
     *  @type	function
     *  @date	27/01/13
     *  @since	3.6.0
     *
     *  @param	array $vars
     *  @return	$vars
     */
    function get_media_item_args($vars)
    {
    }
    /**
     *  wp_prepare_attachment_for_js
     *
     *  this filter allows ACF to add in extra data to an attachment JS object
     *  This sneaky hook adds the missing sizes to each attachment in the 3.5 uploader. 
     *  It would be a lot easier to add all the sizes to the 'image_size_names_choose' filter but 
     *  then it will show up on the normal the_content editor
     *
     *  @type	function
     *  @since:	3.5.7
     *  @date	13/01/13
     *
     *  @param	{int}	$post_id
     *  @return	{int}	$post_id
     */
    function wp_prepare_attachment_for_js($response, $attachment, $meta)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  This function will validate a basic file input
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
}
class acf_field_link extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  get_link
     *
     *  description
     *
     *  @type	function
     *  @date	16/5/17
     *  @since	5.5.13
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function get_link($value = '')
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
}
class acf_field_message extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @param	$field	- an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type	function
     *  @date	8/03/2016
     *  @since	5.3.2
     *
     *  @param	array $field
     *  @return	$field
     */
    function translate_field($field)
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
}
class acf_field_number extends \acf_field
{
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the $post_id of which the value will be saved
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
}
class acf_field_oembed extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  prepare_field
     *
     *  This function will prepare the field for input
     *
     *  @type	function
     *  @date	14/2/17
     *  @since	5.5.8
     *
     *  @param	array $field
     *  @return	int
     */
    function prepare_field($field)
    {
    }
    /**
     *  wp_oembed_get
     *
     *  description
     *
     *  @type	function
     *  @date	24/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function wp_oembed_get($url = '', $width = 0, $height = 0)
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type	function
     *  @date	24/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type	function
     *  @date	15/10/2014
     *  @since	5.0.9
     *
     *  @param	array $options
     *  @return	array
     */
    function get_ajax_query($args = array())
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @param	$field	- an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_output extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	array $field the $field being rendered
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	array $field the $field being edited
     *  @return	void
     */
    function render_field($field)
    {
    }
}
class acf_field_page_link extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type	function
     *  @date	24/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_post_result
     *
     *  This function will return an array containing id, text and maybe description data
     *
     *  @type	function
     *  @date	7/07/2016
     *  @since	5.4.0
     *
     *  @param	mixed $id
     *  @param	string $text
     *  @return	array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     *  get_post_title
     *
     *  This function returns the HTML for a result
     *
     *  @type	function
     *  @date	1/11/2013
     *  @since	5.0.0
     *
     *  @param	object $post
     *  @param	array $field
     *  @param	int $post_id the post_id to which this value is saved to
     *  @return	string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     *  get_posts
     *
     *  This function will return an array of posts for a given field value
     *
     *  @type	function
     *  @date	13/06/2014
     *  @since	5.0.0
     *
     *  @param	array $value
     *  @return	$value
     */
    function get_posts($value, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
}
class acf_field_password extends \acf_field
{
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
}
class acf_field_post_object extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type	function
     *  @date	24/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type	function
     *  @date	15/10/2014
     *  @since	5.0.9
     *
     *  @param	array $options
     *  @return	array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     *  get_post_result
     *
     *  This function will return an array containing id, text and maybe description data
     *
     *  @type	function
     *  @date	7/07/2016
     *  @since	5.4.0
     *
     *  @param	mixed $id
     *  @param	string $text
     *  @return	array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     *  get_post_title
     *
     *  This function returns the HTML for a result
     *
     *  @type	function
     *  @date	1/11/2013
     *  @since	5.0.0
     *
     *  @param	object $post
     *  @param	array $field
     *  @param	int $post_id the post_id to which this value is saved to
     *  @return	string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value found in the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *  @return	$value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  get_posts
     *
     *  This function will return an array of posts for a given field value
     *
     *  @type	function
     *  @date	13/06/2014
     *  @since	5.0.0
     *
     *  @param	array $value
     *  @return	$value
     */
    function get_posts($value, $field)
    {
    }
}
class acf_field_radio extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	array $field the $field being rendered
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	array $field the $field being edited
     *  @return	void
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the field group ID (post_type = acf)
     *
     *  @return	$field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *  @todo	Fix bug where $field was found via json and has no ID
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is appied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	5.2.9
     *  @date	23/01/13
     *
     *  @param	$value - the value found in the database
     *  @param	$post_id - the $post_id from which the value was loaded from
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the value to be saved in te database
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type	function
     *  @date	8/03/2016
     *  @since	5.3.2
     *
     *  @param	array $field
     *  @return	$field
     */
    function translate_field($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_range extends \acf_field_number
{
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
}
class acf_field_relationship extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type	function
     *  @date	24/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type	function
     *  @date	15/10/2014
     *  @since	5.0.9
     *
     *  @param	array $options
     *  @return	array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     *  get_post_result
     *
     *  This function will return an array containing id, text and maybe description data
     *
     *  @type	function
     *  @date	7/07/2016
     *  @since	5.4.0
     *
     *  @param	mixed $id
     *  @param	string $text
     *  @return	array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     *  get_post_title
     *
     *  This function returns the HTML for a result
     *
     *  @type	function
     *  @date	1/11/2013
     *  @since	5.0.0
     *
     *  @param	object $post
     *  @param	array $field
     *  @param	int $post_id the post_id to which this value is saved to
     *  @return	string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
}
class acf_field_select extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type	function
     *  @date	24/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type	function
     *  @date	15/10/2014
     *  @since	5.0.9
     *
     *  @param	array $options
     *  @return	array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value found in the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *  @return	$value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the field group ID (post_type = acf)
     *
     *  @return	$field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type	function
     *  @date	8/03/2016
     *  @since	5.3.2
     *
     *  @param	array $field
     *  @return	$field
     */
    function translate_field($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    function format_value_single($value, $post_id, $field)
    {
    }
}
class acf_field_separator extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
}
class acf_field_tab extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @param	$field	- an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
}
class acf_field_taxonomy extends \acf_field
{
    // vars
    var $save_post_terms = array();
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type	function
     *  @date	24/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type	function
     *  @date	15/10/2014
     *  @since	5.0.9
     *
     *  @param	array $options
     *  @return	array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     *  get_term_title
     *
     *  This function returns the HTML for a result
     *
     *  @type	function
     *  @date	1/11/2013
     *  @since	5.0.0
     *
     *  @param	object $post
     *  @param	array $field
     *  @param	int $post_id the post_id to which this value is saved to
     *  @return	string
     */
    function get_term_title($term, $field, $post_id = 0)
    {
    }
    /**
     *  get_terms
     *
     *  This function will return an array of terms for a given field value
     *
     *  @type	function
     *  @date	13/06/2014
     *  @since	5.0.0
     *
     *  @param	array $value
     *  @return	$value
     */
    function get_terms($value, $taxonomy = 'category')
    {
    }
    /**
     *  load_value()
     *
     *  This filter is appied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value found in the database
     *  @param	$post_id - the $post_id from which the value was loaded from
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the value to be saved in te database
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the $post_id of which the value will be saved
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  save_post
     *
     *  This function will save any terms in the save_post_terms array
     *
     *  @type	function
     *  @date	26/11/2014
     *  @since	5.0.9
     *
     *  @param	int $post_id
     *  @return	void
     */
    function save_post($post_id)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - an array holding all the field's data
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_select()
     *
     *  Create the HTML interface for your field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - an array holding all the field's data
     */
    function render_field_select($field)
    {
    }
    /**
     *  render_field_checkbox()
     *
     *  Create the HTML interface for your field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - an array holding all the field's data
     */
    function render_field_checkbox($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  ajax_add_term
     *
     *  description
     *
     *  @type	function
     *  @date	17/04/2015
     *  @since	5.2.3
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_add_term()
    {
    }
}
class acf_field_text extends \acf_field
{
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @param	$field	- an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field_settings($field)
    {
    }
}
class acf_field_textarea extends \acf_field
{
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @param	$field	- an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is applied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_time_picker extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_true_false extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type	function
     *  @date	8/03/2016
     *  @since	5.3.2
     *
     *  @param	array $field
     *  @return	$field
     */
    function translate_field($field)
    {
    }
}
class acf_field_url extends \acf_field
{
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
}
class acf_field_user extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type	function
     *  @date	24/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type	function
     *  @date	15/10/2014
     *  @since	5.0.9
     *
     *  @param	array $options
     *  @return	array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     *  get_result
     *
     *  This function returns the HTML for a result
     *
     *  @type	function
     *  @date	1/11/2013
     *  @since	5.0.0
     *
     *  @param	object $post
     *  @param	array $field
     *  @param	int $post_id the post_id to which this value is saved to
     *  @return	string
     */
    function get_result($user, $field, $post_id = 0)
    {
    }
    /**
     *  user_search_columns
     *
     *  This function will modify the columns which the user AJAX search looks in
     *
     *  @type	function
     *  @date	17/06/2014
     *  @since	5.0.0
     *
     *  @param	array $columns
     *  @return	$columns
     */
    function user_search_columns($columns, $search, $WP_User_Query)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - an array holding all the field's data
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value found in the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *  @return	$value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    function format_value_single($value, $post_id, $field)
    {
    }
}
class acf_field_wysiwyg extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  add_filters
     *
     *  This function will add filters to 'acf_the_content'
     *
     *  @type	function
     *  @date	20/09/2016
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function add_filters()
    {
    }
    /**
     *  get_toolbars
     *
     *  This function will return an array of toolbars for the WYSIWYG field
     *
     *  @type	function
     *  @date	18/04/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	array
     */
    function get_toolbars()
    {
    }
    /**
     *  acf_enqueue_uploader
     *
     *  Registers toolbars data for the WYSIWYG field.
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	void
     *  @return	void
     */
    function acf_enqueue_uploader()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
}
class ACF_Form
{
    /** @var array Storage for data */
    var $data = array();
    /**
     *  __construct
     *
     *  This function will setup the class functionality.
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  set_data
     *
     *  Sets data.
     *
     *  @type	function
     *  @date	4/03/2016
     *  @since	5.3.2
     *
     *  @param	array $data An array of data.
     *  @return	array
     */
    function set_data($data = array())
    {
    }
    /**
     *  get_data
     *
     *  Returns data.
     *
     *  @type	function
     *  @date	4/03/2016
     *  @since	5.3.2
     *
     *  @param	string $name The data anme.
     *  @return	mixed The data.
     */
    function get_data($name = \false)
    {
    }
    /**
     *  render_data
     *
     *  Renders the <div id="acf-form-data"> element with hidden "form data" inputs
     *
     *  @date	17/4/18
     *  @since	5.6.9
     *
     *  @param	array $data An array of data.
     *  @return	void
     */
    function render_data($data = array())
    {
    }
    /**
     *  save_post
     *
     *  Calls the 'acf/save_post' action allowing $_POST data to be saved
     *
     *  @date	17/4/18
     *  @since	5.6.9
     *
     *  @param	mixed $post_id The $post_id used to save data to the DB
     *  @param	array $values Optional. An optional array of data to be saved (modifies $_POST['acf'])
     *  @return	boolean Returns true on success.
     */
    function save_post($post_id = 0, $values = \null)
    {
    }
    /**
     *  _save_post
     *
     *  Saves the actual $_POST['acf'] data.
     *  Performing this logic within an action allows developers to hook in before and after data is saved.
     *
     *  @date	24/10/2014
     *  @since	5.0.9
     *
     *  @param	mixed $post_id The $post_id used to save data to the DB
     *  @return	void.
     */
    function _save_post($post_id)
    {
    }
}
class acf_form_attachment
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This action is run after post query but before any admin script / head actions. 
     *  It is a good place to register all actions.
     *
     *  @type	action (admin_enqueue_scripts)
     *  @date	26/01/13
     *  @since	3.6.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  admin_footer
     *
     *  This function will add acf_form_data to the WP 4.0 attachment grid
     *
     *  @type	action (admin_footer)
     *  @date	11/09/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_footer()
    {
    }
    /**
     *  edit_attachment
     *
     *  description
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function edit_attachment($form_fields, $post)
    {
    }
    /**
     *  save_attachment
     *
     *  description
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function save_attachment($post, $attachment)
    {
    }
}
class acf_form_comment
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  validate_page
     *
     *  This function will check if the current page is for a post/page edit form
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	void
     *  @return	boolean
     */
    function validate_page()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This action is run after post query but before any admin script / head actions. 
     *  It is a good place to register all actions.
     *
     *  @type	action (admin_enqueue_scripts)
     *  @date	26/01/13
     *  @since	3.6.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  edit_comment
     *
     *  This function is run on the admin comment.php page and will render the ACF fields within custom metaboxes to look native
     *
     *  @type	function
     *  @date	19/10/13
     *  @since	5.0.0
     *
     *  @param	object $comment
     *  @return	void
     */
    function edit_comment($comment)
    {
    }
    /**
     *  comment_form_field_comment
     *
     *  description
     *
     *  @type	function
     *  @date	18/04/2016
     *  @since	5.3.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function comment_form_field_comment($html)
    {
    }
    /**
     *  save_comment
     *
     *  This function will save the comment data
     *
     *  @type	function
     *  @date	19/10/13
     *  @since	5.0.0
     *
     *  @param	comment_id (int)
     *  @return	void
     */
    function save_comment($comment_id)
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type	function
     *  @date	27/03/2015
     *  @since	5.1.5
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_footer()
    {
    }
}
class acf_form_customizer
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This action is run after post query but before any admin script / head actions. 
     *  It is a good place to register all actions.
     *
     *  @type	action (admin_enqueue_scripts)
     *  @date	26/01/13
     *  @since	3.6.0
     *
     *  @param	void
     *  @return	void
     */
    function customize_controls_init()
    {
    }
    /**
     *  save_widget
     *
     *  This function will hook into the widget update filter and save ACF data
     *
     *  @type	function
     *  @date	27/05/2015
     *  @since	5.2.3
     *
     *  @param	array $instance widget settings
     *  @param	array $new_instance widget settings
     *  @param	array $old_instance widget settings
     *  @param	object $widget widget info
     *  @return	$instance
     */
    function save_widget($instance, $new_instance, $old_instance, $widget)
    {
    }
    /**
     *  settings
     *
     *  This function will return an array of cutomizer settings that include ACF data
     *  similar to `$customizer->settings();`
     *
     *  @type	function
     *  @date	22/03/2016
     *  @since	5.3.2
     *
     *  @param	object $customizer
     *  @return	mixed $value
     */
    function settings($customizer)
    {
    }
    /**
     *  customize_preview_init
     *
     *  This function is called when customizer preview is initialized
     *
     *  @type	function
     *  @date	22/03/2016
     *  @since	5.3.2
     *
     *  @param	object $customizer
     *  @return	void
     */
    function customize_preview_init($customizer)
    {
    }
    /**
     *  pre_load_value
     *
     *  Used to inject preview value
     *
     *  @date	2/2/18
     *  @since	5.6.5
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function pre_load_value($value, $post_id, $field)
    {
    }
    /**
     *  pre_load_reference
     *
     *  Used to inject preview value
     *
     *  @date	2/2/18
     *  @since	5.6.5
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function pre_load_reference($field_key, $field_name, $post_id)
    {
    }
    /**
     *  customize_save
     *
     *  This function is called when customizer saves a widget.
     *  Normally, the widget_update_callback filter would be used, but the customizer disables this and runs a custom action
     *  class-customizer-settings.php will save the widget data via the function set_root_value which uses update_option
     *
     *  @type	function
     *  @date	22/03/2016
     *  @since	5.3.2
     *
     *  @param	object $customizer
     *  @return	void
     */
    function customize_save($customizer)
    {
    }
    /**
     *  pre_update_option
     *
     *  this function will remove the [acf] data from widget insance
     *
     *  @type	function
     *  @date	22/03/2016
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function pre_update_option($value, $option, $old_value)
    {
    }
    /**
     *  admin_footer
     *
     *  This function will add some custom HTML to the footer of the edit page
     *
     *  @type	function
     *  @date	11/06/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_footer()
    {
    }
}
class acf_form_front
{
    /** @var array An array of registered form settings */
    private $forms = array();
    /** @var array An array of default fields */
    public $fields = array();
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  validate_form
     *
     *  description
     *
     *  @type	function
     *  @date	28/2/17
     *  @since	5.5.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_form($args)
    {
    }
    /**
     *  add_form
     *
     *  description
     *
     *  @type	function
     *  @date	28/2/17
     *  @since	5.5.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function add_form($args = array())
    {
    }
    /**
     *  get_form
     *
     *  description
     *
     *  @type	function
     *  @date	28/2/17
     *  @since	5.5.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function get_form($id = '')
    {
    }
    /**
     *  validate_save_post
     *
     *  This function will validate fields from the above array
     *
     *  @type	function
     *  @date	7/09/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_save_post()
    {
    }
    /**
     *  pre_save_post
     *
     *  description
     *
     *  @type	function
     *  @date	7/09/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function pre_save_post($post_id, $form)
    {
    }
    /**
     *  enqueue
     *
     *  This function will enqueue a form
     *
     *  @type	function
     *  @date	7/09/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function enqueue_form()
    {
    }
    /**
     *  check_submit_form
     *
     *  This function will maybe submit form data
     *
     *  @type	function
     *  @date	3/3/17
     *  @since	5.5.10
     *
     *  @param	void
     *  @return	void
     */
    function check_submit_form()
    {
    }
    /**
     *  submit_form
     *
     *  This function will submit form data
     *
     *  @type	function
     *  @date	3/3/17
     *  @since	5.5.10
     *
     *  @param	void
     *  @return	void
     */
    function submit_form($form)
    {
    }
    /**
     *  render
     *
     *  description
     *
     *  @type	function
     *  @date	7/09/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_form($args = array())
    {
    }
}
class ACF_Form_Gutenberg
{
    /**
     *  __construct
     *
     *  Setup for class functionality.
     *
     *  @date	13/2/18
     *  @since	5.6.9
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  replace_editor
     *
     *  Check if Gutenberg is replacing the editor.
     *
     *  @date	13/2/18
     *  @since	5.6.9
     *
     *  @param	boolean $replace True if the editor is being replaced by Gutenberg.
     *  @param	object $post The WP_Post being edited.
     *  @return	boolean
     */
    function replace_editor($replace, $post)
    {
    }
    /**
     *  admin_footer
     *
     *  Append missing HTML to Gutenberg editor.
     *
     *  @date	13/2/18
     *  @since	5.6.9
     *
     *  @param	void
     *  @return	void
     */
    function admin_footer()
    {
    }
}
class acf_form_nav_menu
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This action is run after post query but before any admin script / head actions. 
     *  It is a good place to register all actions.
     *
     *  @type	action (admin_enqueue_scripts)
     *  @date	26/01/13
     *  @since	3.6.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  wp_nav_menu_item_custom_fields
     *
     *  description
     *
     *  @date	30/7/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function wp_nav_menu_item_custom_fields($item_id, $item, $depth, $args, $id = '')
    {
    }
    /**
     *  update_nav_menu
     *
     *  description
     *
     *  @type	function
     *  @date	26/5/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function update_nav_menu($menu_id)
    {
    }
    /**
     *  update_nav_menu_items
     *
     *  description
     *
     *  @type	function
     *  @date	26/5/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function update_nav_menu_items($menu_id)
    {
    }
    /**
     *  wp_get_nav_menu_items
     *
     *  WordPress does not provide an easy way to find the current menu being edited.
     *  This function listens to when a menu's items are loaded and stores the menu.
     *  Needed on nav-menus.php page for new menu with no items
     *
     *  @date	23/2/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
    function wp_get_nav_menu_items($items, $menu, $args)
    {
    }
    /**
     *  wp_edit_nav_menu_walker
     *
     *  description
     *
     *  @type	function
     *  @date	26/5/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function wp_edit_nav_menu_walker($class, $menu_id = 0)
    {
    }
    /**
     *  acf_validate_save_post
     *
     *  This function will loop over $_POST data and validate
     *
     *  @type	action 'acf/validate_save_post' 5
     *  @date	7/09/2016
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function acf_validate_save_post()
    {
    }
    /**
     *  admin_footer
     *
     *  This function will add some custom HTML to the footer of the edit page
     *
     *  @type	function
     *  @date	11/06/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_footer()
    {
    }
}
class ACF_Form_Post
{
    var $post_id = 0, $typenow = '', $style = '';
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  validate_page
     *
     *  This function will check if the current page is for a post/page edit form
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	void
     *  @return	boolean
     */
    function validate_page()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This action is run after post query but before any admin script / head actions. 
     *  It is a good place to register all actions.
     *
     *  @type	action (admin_enqueue_scripts)
     *  @date	26/01/13
     *  @since	3.6.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  admin_head
     *
     *  This action will find and add field groups to the current edit page
     *
     *  @type	action (admin_head)
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	void
     *  @return	void
     */
    function admin_head()
    {
    }
    /**
     *  edit_form_after_title
     *
     *  This action will allow ACF to render metaboxes after the title
     *
     *  @type	action
     *  @date	17/08/13
     *
     *  @param	void
     *  @return	void
     */
    function edit_form_after_title()
    {
    }
    /**
     *  render_meta_box
     *
     *  description
     *
     *  @type	function
     *  @date	20/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_meta_box($post, $args)
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type	function
     *  @date	21/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_footer()
    {
    }
    /**
     *  wp_insert_post_empty_content
     *
     *  This function will allow WP to insert a new post without title / content if ACF data exists
     *
     *  @type	function
     *  @date	16/07/2014
     *  @since	5.0.1
     *
     *  @param	bool $maybe_empty whether the post should be considered "empty"
     *  @param	array $postarr Array of post data
     *  @return	$maybe_empty
     */
    function wp_insert_post_empty_content($maybe_empty, $postarr)
    {
    }
    /**
     *  allow_save_post
     *
     *  This function will return true if the post is allowed to be saved
     *
     *  @type	function
     *  @date	26/06/2016
     *  @since	5.3.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function allow_save_post($post)
    {
    }
    /**
     *  save_post
     *
     *  This function will validate and save the $_POST data
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	1.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function save_post($post_id, $post)
    {
    }
    /**
     *  is_protected_meta
     *
     *  This function will remove any ACF meta from showing in the meta postbox
     *
     *  @type	function
     *  @date	12/04/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function is_protected_meta($protected, $meta_key, $meta_type)
    {
    }
}
class acf_form_taxonomy
{
    var $view = 'add';
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  validate_page
     *
     *  This function will check if the current page is for a post/page edit form
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	void
     *  @return	boolean
     */
    function validate_page()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This action is run after post query but before any admin script / head actions. 
     *  It is a good place to register all actions.
     *
     *  @type	action (admin_enqueue_scripts)
     *  @date	26/01/13
     *  @since	3.6.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  add_term
     *
     *  description
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function add_term($taxonomy)
    {
    }
    /**
     *  edit_term
     *
     *  description
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function edit_term($term, $taxonomy)
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type	function
     *  @date	27/03/2015
     *  @since	5.1.5
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_footer()
    {
    }
    /**
     *  save_term
     *
     *  description
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function save_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     *  delete_term
     *
     *  description
     *
     *  @type	function
     *  @date	15/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function delete_term($term, $tt_id, $taxonomy, $deleted_term)
    {
    }
}
class ACF_Form_User
{
    /** @var string The current view (new, edit, register) */
    var $view = '';
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  Checks current screen and enqueues scripts
     *
     *  @date	17/4/18
     *  @since	5.6.9
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  login_form_register
     *
     *  Customizes and enqueues scripts
     *
     *  @date	17/4/18
     *  @since	5.6.9
     *
     *  @param	void
     *  @return	void
     */
    function login_form_register()
    {
    }
    /**
     *  register_user
     *
     *  Called during the user register form
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function render_register()
    {
    }
    /**
     *  render_edit
     *
     *  Called during the user edit form
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function render_edit($user)
    {
    }
    /**
     *  user_new_form
     *
     *  description
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_new()
    {
    }
    /**
     *  render
     *
     *  This function will render ACF fields for a given $post_id parameter
     *
     *  @type	function
     *  @date	7/10/13
     *  @since	5.0.0
     *
     *  @param	int $user_id this can be set to 0 for a new user
     *  @param	string $user_form used for location rule matching. edit | add | register
     *  @param	string $el
     *  @return	void
     */
    function render($args = array())
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type	function
     *  @date	27/03/2015
     *  @since	5.1.5
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_footer()
    {
    }
    /**
     *  save_user
     *
     *  description
     *
     *  @type	function
     *  @date	8/10/13
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function save_user($user_id)
    {
    }
}
class acf_form_widget
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This action is run after post query but before any admin script / head actions. 
     *  It is a good place to register all actions.
     *
     *  @type	action (admin_enqueue_scripts)
     *  @date	26/01/13
     *  @since	3.6.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  acf_validate_save_post
     *
     *  This function will loop over $_POST data and validate
     *
     *  @type	action 'acf/validate_save_post' 5
     *  @date	7/09/2016
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function acf_validate_save_post()
    {
    }
    /**
     *  edit_widget
     *
     *  This function will render the fields for a widget form
     *
     *  @type	function
     *  @date	11/06/2014
     *  @since	5.0.0
     *
     *  @param	object $widget
     *  @param	null $return
     *  @param	object $instance
     *  @return	int $post_id
     */
    function edit_widget($widget, $return, $instance)
    {
    }
    /**
     *  save_widget
     *
     *  This function will hook into the widget update filter and save ACF data
     *
     *  @type	function
     *  @date	27/05/2015
     *  @since	5.2.3
     *
     *  @param	array $instance widget settings
     *  @param	array $new_instance widget settings
     *  @param	array $old_instance widget settings
     *  @param	object $widget widget info
     *  @return	$instance
     */
    function save_widget($instance, $new_instance, $old_instance, $widget)
    {
    }
    /**
     *  admin_footer
     *
     *  This function will add some custom HTML to the footer of the edit page
     *
     *  @type	function
     *  @date	11/06/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_footer()
    {
    }
}
class acf_json
{
    function __construct()
    {
    }
    /**
     *  update_field_group
     *
     *  This function is hooked into the acf/update_field_group action and will save all field group data to a .json file 
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	array $field_group
     *  @return	void
     */
    function update_field_group($field_group)
    {
    }
    /**
     *  delete_field_group
     *
     *  This function will remove the field group .json file
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	array $field_group
     *  @return	void
     */
    function delete_field_group($field_group)
    {
    }
    /**
     *  include_json_folders
     *
     *  This function will include all registered .json files
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function include_json_folders()
    {
    }
    /**
     *  include_json_folder
     *
     *  This function will include all .json files within a folder
     *
     *  @type	function
     *  @date	1/5/17
     *  @since	5.5.13
     *
     *  @param	void
     *  @return	void
     */
    function include_json_folder($path = '')
    {
    }
}
class acf_local
{
    // vars
    var $temp_groups = array(), $temp_fields = array(), $groups = array(), $fields = array(), $reference = array(), $parents = array();
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  get_key
     *
     *  This function will check for references and modify the key
     *
     *  @type	function
     *  @date	30/06/2016
     *  @since	5.4.0
     *
     *  @param	string $key
     *  @return	$key
     */
    function get_key($key = '')
    {
    }
    /**
     *  reset
     *
     *  This function will remove (reset) all field group and fields
     *
     *  @type	function
     *  @date	2/06/2016
     *  @since	5.3.8
     *
     *  @param	void
     *  @return	void
     */
    function reset()
    {
    }
    /**
     *  is_enabled
     *
     *  This function will return true if acf_local functionality is enabled
     *
     *  @type	function
     *  @date	14/07/2016
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function is_enabled()
    {
    }
    /**
     *  is_ready
     *
     *  This function will return true when ACF has included all field types and is ready to import
     *  Importing fields too early will cause issues where sub fields have not been extracted correctly
     *
     *  @type	function
     *  @date	13/3/17
     *  @since	5.5.10
     *
     *  @param	void
     *  @return	boolean
     */
    function is_ready()
    {
    }
    /**
     *  acf_include_fields
     *
     *  This function include any $temp data
     *
     *  @type	function
     *  @date	8/2/17
     *  @since	5.5.6
     *
     *  @param	void
     *  @return	void
     */
    function acf_include_fields()
    {
    }
    /**
     *  add_parent_reference
     *
     *  This function will add a child reference for a given parent
     *
     *  @type	function
     *  @date	14/07/2016
     *  @since	5.4.0
     *
     *  @param	string $parent_key
     *  @param	string $field_key
     *  @return	mixed
     */
    function add_parent_reference($parent_key = '', $field_key = '')
    {
    }
    /**
     *  remove_parent_reference
     *
     *  This function will remove a child reference for a given parent
     *
     *  @type	function
     *  @date	14/07/2016
     *  @since	5.4.0
     *
     *  @param	string $parent_key
     *  @param	string $field_key
     *  @return	mixed
     */
    function remove_parent_reference($parent_key = '', $field_key = '')
    {
    }
    /**
     *  maybe_add_field
     *
     *  This function will either import or add to temp
     *
     *  @type	function
     *  @date	9/2/17
     *  @since	5.5.6
     *
     *  @param	array $field
     *  @return	void
     */
    function maybe_add_field($field)
    {
    }
    /**
     *  add_field
     *
     *  This function will add a $field
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	array $field
     *  @return	void
     */
    function add_field($field)
    {
    }
    /**
     *  is_field
     *
     *  This function will return true if a field exists for a given key
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function is_field($key = '')
    {
    }
    function is_field_key($key)
    {
    }
    function is_field_name($name)
    {
    }
    /**
     *  get_field
     *
     *  This function will return a local field for a given key
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function get_field($key = '')
    {
    }
    /**
     *  remove_field
     *
     *  This function will remove a $field
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	void
     */
    function remove_field($key = '')
    {
    }
    /**
     *  maybe_add_field_group
     *
     *  This function will either import or add to temp
     *
     *  @type	function
     *  @date	9/2/17
     *  @since	5.5.6
     *
     *  @param	array $field_group
     *  @return	void
     */
    function maybe_add_field_group($field_group)
    {
    }
    /**
     *  add_field_group
     *
     *  This function will add a $field group to the local placeholder
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	array $field_group
     *  @return	void
     */
    function add_field_group($field_group)
    {
    }
    /**
     *  is_field_group
     *
     *  This function will return true if a field group exists for a given key
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function is_field_group($key = '')
    {
    }
    /**
     *  get_field_group
     *
     *  This function will return a local field group for a given key
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function get_field_group($key = '')
    {
    }
    /**
     *  count_field_groups
     *
     *  This function will return the number of field groups
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function count_field_groups()
    {
    }
    /**
     *  have_field_groups
     *
     *  This function will true if local field groups exist
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	int
     */
    function have_field_groups()
    {
    }
    /**
     *  get_field_groups
     *
     *  This function will return an array of field groups
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function get_field_groups()
    {
    }
    /**
     *  count_fields
     *
     *  This function will return the number of fields for a given parent
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function count_fields($parent_key = '')
    {
    }
    /**
     *  have_fields
     *
     *  This function will true if local fields exist
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	int
     */
    function have_fields($parent_key = '')
    {
    }
    /**
     *  get_fields
     *
     *  This function will return an array of fields for a given 'parent' key (field group key or field key)
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function get_fields($parent_key = '')
    {
    }
    /**
     *  remove_fields
     *
     *  This function will remove the field reference for a field group
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	string $key
     *  @return	bolean
     */
    function remove_fields($parent_key = '')
    {
    }
    /**
     *  acf_get_field_groups
     *
     *  This function will override and add field groups to the `acf_get_field_groups()` results
     *
     *  @type	filter (acf/get_field_groups)
     *  @date	5/12/2013
     *  @since	5.0.0
     *
     *  @param	array $field_groups
     *  @return	$field_groups
     */
    function acf_get_field_groups($field_groups)
    {
    }
}
class acf_locations
{
    /** @var array Contains an array of location rule instances */
    var $locations = array();
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  register_location
     *
     *  This function will store a location rule class
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	object $instance
     *  @return	void
     */
    function register_location($class)
    {
    }
    /**
     *  get_rule
     *
     *  This function will return a location rule class
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	string $name
     *  @return	mixed
     */
    function get_location($name)
    {
    }
    /**
     *  get_rules
     *
     *  This function will return a grouped array of location rules (category => name => label)
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	array
     */
    function get_locations()
    {
    }
}
class acf_location
{
    /** @var string Rule name */
    var $name = '';
    /** @var string Rule label */
    var $label = '';
    /** @var string Rule category */
    var $category = 'post';
    /** @var bool Rule availability */
    var $public = \true;
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  initialize
     *
     *  This function will initialize the location rule
     *
     *  @type	function
     *  @date	27/6/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  add_filter
     *
     *  This function checks if the function is_callable before adding the filter
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	string $tag
     *  @param	string $function_to_add
     *  @param	int $priority
     *  @param	int $accepted_args
     *  @return	void
     */
    function add_filter($tag = '', $specific = \false, $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  add_action
     *
     *  This function checks if the function is_callable before adding the action
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	string $tag
     *  @param	string $function_to_add
     *  @param	int $priority
     *  @param	int $accepted_args
     *  @return	void
     */
    function add_action($tag = '', $specific = \false, $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  compare
     *
     *  This function will compare a value to a location rule and return a boolean result
     *
     *  @type	function
     *  @date	25/11/16
     *  @since	5.5.0
     *
     *  @param	mixed $value
     *  @param	rule (array)
     *  @return	boolean
     */
    function compare($value, $rule)
    {
    }
}
class acf_location_attachment extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_comment extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_current_user_role extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_current_user extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_nav_menu_item extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_nav_menu extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_page_parent extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_page_template extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_page_type extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_page extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_post_category extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_post_format extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  get_post_type
     *
     *  This function will return the current post_type
     *
     *  @type	function
     *  @date	25/11/16
     *  @since	5.5.0
     *
     *  @param	int $options
     *  @return	mixed
     */
    function get_post_type($screen)
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_post_status extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  get_post_type
     *
     *  This function will return the current post_type
     *
     *  @type	function
     *  @date	25/11/16
     *  @since	5.5.0
     *
     *  @param	int $options
     *  @return	mixed
     */
    function get_post_type($screen)
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_post_taxonomy extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_post_template extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  get_post_type
     *
     *  This function will return the current post_type
     *
     *  @type	function
     *  @date	25/11/16
     *  @since	5.5.0
     *
     *  @param	int $options
     *  @return	mixed
     */
    function get_post_type($screen)
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_post_type extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  get_post_type
     *
     *  This function will return the current post_type
     *
     *  @type	function
     *  @date	25/11/16
     *  @since	5.5.0
     *
     *  @param	int $options
     *  @return	mixed
     */
    function get_post_type($screen)
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_post extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_taxonomy extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_user_form extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_user_role extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_location_widget extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_loop
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  is_empty
     *
     *  This function will return true if no loops exist
     *
     *  @type	function
     *  @date	3/03/2016
     *  @since	5.3.2
     *
     *  @param	void
     *  @return	boolean
     */
    function is_empty()
    {
    }
    /**
     *  is_loop
     *
     *  This function will return true if a loop exists for the given array index
     *
     *  @type	function
     *  @date	3/03/2016
     *  @since	5.3.2
     *
     *  @param	int $i
     *  @return	boolean
     */
    function is_loop($i = 0)
    {
    }
    /**
     *  get_i
     *
     *  This function will return a valid array index for the given $i
     *
     *  @type	function
     *  @date	3/03/2016
     *  @since	5.3.2
     *
     *  @param	mixed $i
     *  @return	int
     */
    function get_i($i = 0)
    {
    }
    /**
     *  add_loop
     *
     *  This function will add a new loop
     *
     *  @type	function
     *  @date	3/03/2016
     *  @since	5.3.2
     *
     *  @param	array $loop
     *  @return	void
     */
    function add_loop($loop = array())
    {
    }
    /**
     *  update_loop
     *
     *  This function will update a loop's setting
     *
     *  @type	function
     *  @date	3/03/2016
     *  @since	5.3.2
     *
     *  @param	mixed $i
     *  @param	string $key the loop setting name
     *  @param	mixed $value the loop setting value
     *  @return	boolean true on success
     */
    function update_loop($i = 'active', $key = \null, $value = \null)
    {
    }
    /**
     *  get_loop
     *
     *  This function will return a loop, or loop's setting for a given index & key
     *
     *  @type	function
     *  @date	3/03/2016
     *  @since	5.3.2
     *
     *  @param	mixed $i
     *  @param	string $key the loop setting name
     *  @return	mixed false on failure
     */
    function get_loop($i = 'active', $key = \null)
    {
    }
    /**
     *  remove_loop
     *
     *  This function will remove a loop
     *
     *  @type	function
     *  @date	3/03/2016
     *  @since	5.3.2
     *
     *  @param	mixed $i
     *  @return	boolean true on success
     */
    function remove_loop($i = 'active')
    {
    }
}
class ACF_Media
{
    /**
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  enqueue_scripts
     *
     *  Localizes data
     *
     *  @date	27/4/18
     *  @since	5.6.9
     *
     *  @param	void
     *  @return	void
     */
    function enqueue_scripts()
    {
    }
    /**
     *  handle_upload_prefilter
     *
     *  description
     *
     *  @type	function
     *  @date	16/02/2015
     *  @since	5.1.5
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function handle_upload_prefilter($file)
    {
    }
    /**
     *  save_files
     *
     *  This function will save the $_FILES data
     *
     *  @type	function
     *  @date	24/10/2014
     *  @since	5.0.9
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function save_files($post_id = 0)
    {
    }
    /**
     *  wp_ajax_query_attachments
     *
     *  description
     *
     *  @type	function
     *  @date	26/06/2015
     *  @since	5.2.3
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function wp_ajax_query_attachments()
    {
    }
    function wp_prepare_attachment_for_js($response, $attachment, $meta)
    {
    }
}
class acf_revisions
{
    // vars
    var $cache = array();
    /**
     *  __construct
     *
     *  A good place to add actions / filters
     *
     *  @type	function
     *  @date	11/08/13
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  wp_preview_post_fields
     *
     *  This function is used to trick WP into thinking that one of the $post's fields has changed and
     *  will allow an autosave to be updated. 
     *  Fixes an odd bug causing the preview page to render the non autosave post data on every odd attempt
     *
     *  @type	function
     *  @date	21/10/2014
     *  @since	5.1.0
     *
     *  @param	array $fields
     *  @return	$fields
     */
    function wp_preview_post_fields($fields)
    {
    }
    /**
     *  wp_save_post_revision_check_for_changes
     *
     *  This filter will return false and force WP to save a revision. This is required due to
     *  WP checking only post_title, post_excerpt and post_content values, not custom fields.
     *
     *  @type	filter
     *  @date	19/09/13
     *
     *  @param	boolean $return defaults to true
     *  @param	object $last_revision the last revision that WP will compare against
     *  @param	object $post the $post that WP will compare against
     *  @return	boolean $return
     */
    function wp_save_post_revision_check_for_changes($return, $last_revision, $post)
    {
    }
    /**
     *  wp_post_revision_fields
     *
     *  This filter will add the ACF fields to the returned array
     *  Versions 3.5 and 3.6 of WP feature different uses of the revisions filters, so there are
     *  some hacks to allow both versions to work correctly
     *
     *  @type	filter
     *  @date	11/08/13
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function wp_post_revision_fields($fields, $post = \null)
    {
    }
    /**
     *  wp_post_revision_field
     *
     *  This filter will load the value for the given field and return it for rendering
     *
     *  @type	filter
     *  @date	11/08/13
     *
     *  @param	mixed $value should be false as it has not yet been loaded
     *  @param	string $field_name The name of the field
     *  @param	mixed $post Holds the $post object to load from - in WP 3.5, this is not passed!
     *  @param	string $direction to / from - not used
     *  @return	string $value
     */
    function wp_post_revision_field($value, $field_name, $post = \null, $direction = \false)
    {
    }
    /**
     *  wp_restore_post_revision
     *
     *  This action will copy and paste the metadata from a revision to the post
     *
     *  @type	action
     *  @date	11/08/13
     *
     *  @param	int $parent_id the destination post
     *  @return	int $revision_id the source post
     */
    function wp_restore_post_revision($post_id, $revision_id)
    {
    }
    /**
     *  acf_validate_post_id
     *
     *  This function will modify the $post_id and allow loading values from a revision
     *
     *  @type	function
     *  @date	6/3/17
     *  @since	5.5.10
     *
     *  @param	int $post_id
     *  @param	int $_post_id
     *  @return	int $post_id
     */
    function acf_validate_post_id($post_id, $_post_id)
    {
    }
}
class acf_third_party
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  acf_get_post_types
     *
     *  EE post types do not use the native post.php edit page, but instead render their own.
     *  Show the EE post types in lists where 'show_ui' is used.
     *
     *  @date	24/2/18
     *  @since	5.6.9
     *
     *  @param	array $post_types
     *  @param	array $args
     *  @return	array
     */
    function ee_get_post_types($post_types, $args)
    {
    }
    /**
     *  tabify_posttypes
     *
     *  This function removes ACF post types from the tabify edit screen (post type selection sidebar)
     *
     *  @type	function
     *  @date	9/10/12
     *  @since	3.5.1
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function tabify_posttypes($posttypes)
    {
    }
    /**
     *  tabify_add_meta_boxes
     *
     *  This function creates dummy metaboxes on the tabify edit screen page
     *
     *  @type	function
     *  @date	9/10/12
     *  @since	3.5.1
     *
     *  @param	string $post_type
     *  @return	void
     */
    function tabify_add_meta_boxes($post_type)
    {
    }
    /**
     *  pts_allowed_pages
     *
     *  This filter will prevent PTS from running on the field group page!
     *
     *  @type	function
     *  @date	25/09/2014
     *  @since	5.0.0
     *
     *  @param	array $pages
     *  @return	$pages
     */
    function pts_allowed_pages($pages)
    {
    }
    /**
     *  doing_dark_mode
     *
     *  Runs during 'admin_enqueue_scripts' if dark mode is enabled
     *
     *  @date	13/8/18
     *  @since	5.7.3
     *
     *  @param	void
     *  @return	void
     */
    function doing_dark_mode()
    {
    }
}
class ACF_Updates
{
    /** @var string The ACF_Updates version */
    var $version = '2.4';
    /** @var array The array of registered plugins */
    var $plugins = array();
    /** @var boolean Dev mode */
    var $dev = \false;
    /** @var int Counts the number of plugin update checks */
    var $checked = 0;
    /**
     *  __construct
     *
     *  Sets up the class functionality.
     *
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  add_plugin
     *
     *  Registeres a plugin for updates.
     *
     *  @date	8/4/17
     *  @since	5.5.10
     *
     *  @param	array $plugin The plugin array.
     *  @return	void
     */
    function add_plugin($plugin)
    {
    }
    /**
     *  get_plugin_by
     *
     *  Returns a registered plugin for the give key and value.
     *
     *  @date	3/8/18
     *  @since	5.7.2
     *
     *  @param	string $key The array key to compare
     *  @param	string $value The value to compare against
     *  @return	array|false
     */
    function get_plugin_by($key = '', $value = \null)
    {
    }
    /**
     *  request
     *
     *  Makes a request to the ACF connect server.
     *
     *  @date	8/4/17
     *  @since	5.5.10
     *
     *  @param	string $query The api path. Defaults to 'index.php'
     *  @param	array $body The body to post
     *  @return	array|string|WP_Error
     */
    function request($query = 'index.php', $body = \null)
    {
    }
    /**
     *  get_plugin_info
     *
     *  Returns update information for the given plugin id.
     *
     *  @date	9/4/17
     *  @since	5.5.10
     *
     *  @param	string $id The plugin id such as 'pro'.
     *  @param	boolean $force_check Bypasses cached result. Defaults to false.
     *  @return	array|WP_Error
     */
    function get_plugin_info($id = '', $force_check = \false)
    {
    }
    /**
     *  get_plugin_update
     *
     *  Returns specific data from the 'update-check' response.
     *
     *  @date	3/8/18
     *  @since	5.7.2
     *
     *  @param	string $basename The plugin basename.
     *  @param	boolean $force_check Bypasses cached result. Defaults to false
     *  @return	array
     */
    function get_plugin_update($basename = '', $force_check = \false)
    {
    }
    /**
     *  get_plugin_updates
     *
     *  Checks for plugin updates.
     *
     *  @date	8/7/18
     *  @since	5.6.9
     *  @since	5.7.2 Added 'checked' comparison
     *
     *  @param	boolean $force_check Bypasses cached result. Defaults to false.
     *  @return	array|WP_Error.
     */
    function get_plugin_updates($force_check = \false)
    {
    }
    /**
     *  get_expiration
     *
     *  This function safely gets the expiration value from a response.
     *
     *  @date	8/7/18
     *  @since	5.6.9
     *
     *  @param	mixed $response The response from the server. Default false.
     *  @param	int $min The minimum expiration limit. Default 0.
     *  @param	int $max The maximum expiration limit. Default 0.
     *  @return	int
     */
    function get_expiration($response = \false, $min = 0, $max = 0)
    {
    }
    /**
     *  refresh_plugins_transient
     *
     *  Deletes transients and allows a fresh lookup.
     *
     *  @date	11/4/17
     *  @since	5.5.10
     *
     *  @param	void
     *  @return	void
     */
    function refresh_plugins_transient()
    {
    }
    /**
     *  modify_plugins_transient
     *
     *  Called when WP updates the 'update_plugins' site transient. Used to inject ACF plugin update info.
     *
     *  @date	16/01/2014
     *  @since	5.0.0
     *
     *  @param	object $transient
     *  @return	$transient
     */
    function modify_plugins_transient($transient)
    {
    }
    /**
     *  modify_plugin_details
     *
     *  Returns the plugin data visible in the 'View details' popup
     *
     *  @date	17/01/2014
     *  @since	5.0.0
     *
     *  @param	object $result
     *  @param	string $action
     *  @param	object $args
     *  @return	$result
     */
    function modify_plugin_details($result, $action = \null, $args = \null)
    {
    }
}
class acf_validation
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  add_error
     *
     *  This function will add an error message for a field
     *
     *  @type	function
     *  @date	25/11/2013
     *  @since	5.0.0
     *
     *  @param	string $input name attribute of DOM elmenet
     *  @param	string $message error message
     *  @return	int $post_id
     */
    function add_error($input, $message)
    {
    }
    /**
     *  get_error
     *
     *  This function will return an error for a given input
     *
     *  @type	function
     *  @date	5/03/2016
     *  @since	5.3.2
     *
     *  @param	string $input name attribute of DOM elmenet
     *  @return	mixed
     */
    function get_error($input)
    {
    }
    /**
     *  get_errors
     *
     *  This function will return validation errors
     *
     *  @type	function
     *  @date	25/11/2013
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	array|boolean
     */
    function get_errors()
    {
    }
    /**
     *  reset_errors
     *
     *  This function will remove all errors
     *
     *  @type	function
     *  @date	4/03/2016
     *  @since	5.3.2
     *
     *  @param	void
     *  @return	void
     */
    function reset_errors()
    {
    }
    /**
     *  ajax_validate_save_post
     *
     *  This function will validate the $_POST data via AJAX
     *
     *  @type	function
     *  @date	27/10/2014
     *  @since	5.0.9
     *
     *  @param	void
     *  @return	void
     */
    function ajax_validate_save_post()
    {
    }
    /**
     *  acf_validate_save_post
     *
     *  This function will loop over $_POST data and validate
     *
     *  @type	function
     *  @date	7/09/2016
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function acf_validate_save_post()
    {
    }
}
class ACF_Walker_Nav_Menu_Edit extends \Walker_Nav_Menu_Edit
{
    /**
     * Starts the element output.
     *
     * Calls the Walker_Nav_Menu_Edit start_el function and then injects the custom field HTML  
     *
     * @since 5.0.0
     * @since 5.7.2 Added preg_replace based on https://github.com/ineagu/wp-menu-item-custom-fields
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param WP_Post  $item   Menu item data object.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     * @param int      $id     Current item ID.
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
    }
    /**
     * Get custom fields HTML
     *
     * @since 5.0.0
     * @since 5.7.2 Added action based on https://github.com/ineagu/wp-menu-item-custom-fields
     *
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   Menu item args.
     * @param int    $id     Nav menu ID.
     * @return string
     */
    function get_fields($item, $depth, $args = array(), $id = 0)
    {
    }
}
class ACF_Taxonomy_Field_Walker extends \Walker
{
    var $field = \null, $tree_type = 'category', $db_fields = array('parent' => 'parent', 'id' => 'term_id');
    function __construct($field)
    {
    }
    function start_el(&$output, $term, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    function end_el(&$output, $term, $depth = 0, $args = array())
    {
    }
    function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
}
class acf_wpml_compatibility
{
    var $lang = '';
    /**
     *  Constructor
     *
     *  This function will construct all the neccessary actions and filters
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  is_translatable
     *
     *  This fucntion will return true if the acf-field-group post type is translatable
     *
     *  @type	function
     *  @date	10/04/2015
     *  @since	5.2.3
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function is_translatable()
    {
    }
    /**
     *  update_500
     *
     *  This function will update the WPML settings to allow 'acf-field-group' to be translatable
     *
     *  @type	function
     *  @date	10/04/2015
     *  @since	5.2.3
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function update_500()
    {
    }
    /**
     *  update_500_field_group
     *
     *  This function will update the icl_translations table data when creating the fiedl groups
     *
     *  @type	function
     *  @date	10/04/2015
     *  @since	5.2.3
     *
     *  @param	array $field_group
     *  @return	void
     */
    function update_500_field_group($field_group, $ofg)
    {
    }
    /**
     *  update_field_group
     *
     *  This function will update the lang when saving a field group
     *
     *  @type	function
     *  @date	10/03/2014
     *  @since	5.0.0
     *
     *  @param	array $field_group
     *  @return	void
     */
    function update_field_group($field_group)
    {
    }
    /**
     *  settings_save_json
     *
     *  This function is hooked into the acf/update_field_group action and will save all field group data to a .json file 
     *
     *  @type	function
     *  @date	19/05/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function settings_save_json($path)
    {
    }
    /**
     *  settings_load_json
     *
     *  description
     *
     *  @type	function
     *  @date	19/05/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function settings_load_json($paths)
    {
    }
    /**
     *  icl_make_duplicate
     *
     *  description
     *
     *  @type	function
     *  @date	26/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function icl_make_duplicate($master_post_id, $lang, $postarr, $id)
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type	function
     *  @date	27/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_footer()
    {
    }
    /**
     *  verify_ajax
     *
     *  This function will help avoid WPML conflicts when performing an ACF ajax request
     *
     *  @type	function
     *  @date	7/08/2015
     *  @since	5.2.3
     *
     *  @param	void
     *  @return	void
     */
    function verify_ajax()
    {
    }
    /**
     *  acf_input_form_data
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/16
     *  @since	5.5.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function acf_input_form_data($data)
    {
    }
    /**
     *  get_translatable_documents
     *
     *  This filter will remove 'acf-field' from the available post types for translation
     *
     *  @type	function
     *  @date	17/8/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function get_translatable_documents($icl_post_types)
    {
    }
}
class acf_pro
{
    /**
     *  __construct
     *
     *  
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  include_field_types
     *
     *  description
     *
     *  @type	function
     *  @date	21/10/2015
     *  @since	5.2.3
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function include_field_types()
    {
    }
    /**
     *  include_location_rules
     *
     *  description
     *
     *  @type	function
     *  @date	10/6/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function include_location_rules()
    {
    }
    /**
     *  register_assets
     *
     *  description
     *
     *  @type	function
     *  @date	4/11/2013
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function register_assets()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	4/11/2013
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  field_group_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	4/11/2013
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function field_group_admin_enqueue_scripts()
    {
    }
}
class acf_admin_options_page
{
    /** @var array Contains the current options page */
    var $page;
    /**
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  admin_menu
     *
     *  description
     *
     *  @type	function
     *  @date	24/02/2014
     *  @since	5.0.0
     *
     *  @param	
     *  @return	
     */
    function admin_menu()
    {
    }
    /**
     *  load
     *
     *  description
     *
     *  @type	function
     *  @date	2/02/13
     *  @since	3.6
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function admin_load()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This function will enqueue the 'post.js' script which adds support for 'Screen Options' column toggle
     *
     *  @type	function
     *  @date	23/03/2016
     *  @since	5.3.2
     *
     *  @param	
     *  @return	
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  admin_head
     *
     *  This action will find and add field groups to the current edit page
     *
     *  @type	action (admin_head)
     *  @date	23/06/12
     *  @since	3.1.8
     *
     *  @param	void
     *  @return	void
     */
    function admin_head()
    {
    }
    /**
     *  postbox_submitdiv
     *
     *  This function will render the submitdiv metabox
     *
     *  @type	function
     *  @date	23/03/2016
     *  @since	5.3.2
     *
     *  @param	void
     *  @return	void
     */
    function postbox_submitdiv($post, $args)
    {
    }
    /**
     *  render_meta_box
     *
     *  description
     *
     *  @type	function
     *  @date	24/02/2014
     *  @since	5.0.0
     *
     *  @param	object $post
     *  @param	array $args
     *  @return	void
     */
    function postbox_acf($post, $args)
    {
    }
    /**
     *  html
     *
     *  @description: 
     *  @since: 2.0.4
     *  @created: 5/12/12
     */
    function html()
    {
    }
}
class acf_admin_settings_updates
{
    // vars
    var $view = array();
    /**
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  show_notice
     *
     *  This function will show a notice (only once)
     *
     *  @type	function
     *  @date	11/4/17
     *  @since	5.5.10
     *
     *  @param	string $message
     *  @param	class (string)
     *  @return	void
     */
    function show_notice($message = '', $class = '')
    {
    }
    /**
     *  show_error
     *
     *  This function will show an error notice (only once)
     *
     *  @type	function
     *  @date	11/4/17
     *  @since	5.5.10
     *
     *  @param	mixed $error
     *  @return	void
     */
    function show_error($error = '')
    {
    }
    /**
     *  get_changelog_section
     *
     *  This function will find and return a section of content from a plugin changelog
     *
     *  @type	function
     *  @date	11/4/17
     *  @since	5.5.10
     *
     *  @param	string $changelog
     *  @param	string $h4
     *  @return	string
     */
    function get_changelog_section($changelog, $h4 = '')
    {
    }
    /**
     *  admin_menu
     *
     *  This function will add the ACF menu item to the WP admin
     *
     *  @type	action (admin_menu)
     *  @date	28/09/13
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function admin_menu()
    {
    }
    /**
     *  load
     *
     *  description
     *
     *  @type	function
     *  @date	7/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function load()
    {
    }
    /**
     *  activate_pro_licence
     *
     *  description
     *
     *  @type	function
     *  @date	16/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function activate_pro_licence()
    {
    }
    /**
     *  deactivate_pro_licence
     *
     *  description
     *
     *  @type	function
     *  @date	16/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function deactivate_pro_licence()
    {
    }
    /**
     *  html
     *
     *  description
     *
     *  @type	function
     *  @date	7/01/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function html()
    {
    }
}
class acf_field_clone extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  is_enabled
     *
     *  This function will return true if acf_local functionality is enabled
     *
     *  @type	function
     *  @date	14/07/2016
     *  @since	5.4.0
     *
     *  @param	void
     *  @return	void
     */
    function is_enabled()
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     *  acf_get_fields
     *
     *  This function will hook into the 'acf/get_fields' filter and inject/replace seamless clones fields
     *
     *  @type	function
     *  @date	17/06/2016
     *  @since	5.3.8
     *
     *  @param	array $fields
     *  @param	array $parent
     *  @return	$fields
     */
    function acf_get_fields($fields, $parent)
    {
    }
    /**
     *  get_cloned_fields
     *
     *  This function will return an array of fields for a given clone field
     *
     *  @type	function
     *  @date	28/06/2016
     *  @since	5.3.8
     *
     *  @param	array $field
     *  @param	array $parent
     *  @return	array
     */
    function get_cloned_fields($field)
    {
    }
    /**
     *  acf_clone_field
     *
     *  This function is run when cloning a clone field
     *  Important to run the acf_clone_field function on sub fields to pass on settings such as 'parent_layout' 
     *
     *  @type	function
     *  @date	28/06/2016
     *  @since	5.3.8
     *
     *  @param	array $field
     *  @param	array $clone_field
     *  @return	$field
     */
    function acf_clone_field($field, $clone_field)
    {
    }
    /**
     *  acf_clone_clone_field
     *
     *  This function is run when cloning a clone field
     *  Important to run the acf_clone_field function on sub fields to pass on settings such as 'parent_layout'
     *  Do not delete! Removing this logic causes major issues with cloned clone fields within a flexible content layout.
     *
     *  @type	function
     *  @date	28/06/2016
     *  @since	5.3.8
     *
     *  @param	array $field
     *  @param	array $clone_field
     *  @return	$field
     */
    function acf_clone_clone_field($field, $clone_field)
    {
    }
    /**
     *  prepare_field_for_db
     *
     *  description
     *
     *  @type	function
     *  @date	4/11/16
     *  @since	5.5.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function prepare_field_for_db($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value found in the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *  @return	$value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the $post_id of which the value will be saved
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_block
     *
     *  description
     *
     *  @type	function
     *  @date	12/07/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_field_block($field)
    {
    }
    /**
     *  render_field_table
     *
     *  description
     *
     *  @type	function
     *  @date	12/07/2016
     *  @since	5.4.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_field_table($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @param	$field	- an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  get_clone_setting_choices
     *
     *  This function will return an array of choices data for Select2
     *
     *  @type	function
     *  @date	17/06/2016
     *  @since	5.3.8
     *
     *  @param	mixed $value
     *  @return	array
     */
    function get_clone_setting_choices($value)
    {
    }
    /**
     *  get_clone_setting_choice
     *
     *  This function will return the label for a given clone choice
     *
     *  @type	function
     *  @date	17/06/2016
     *  @since	5.3.8
     *
     *  @param	mixed $selector
     *  @return	string
     */
    function get_clone_setting_choice($selector = '')
    {
    }
    /**
     *  get_clone_setting_field_choice
     *
     *  This function will return the text for a field choice
     *
     *  @type	function
     *  @date	20/07/2016
     *  @since	5.4.0
     *
     *  @param	array $field
     *  @return	string
     */
    function get_clone_setting_field_choice($field)
    {
    }
    /**
     *  get_clone_setting_group_choice
     *
     *  This function will return the text for a group choice
     *
     *  @type	function
     *  @date	20/07/2016
     *  @since	5.4.0
     *
     *  @param	array $field_group
     *  @return	string
     */
    function get_clone_setting_group_choice($field_group)
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type	function
     *  @date	17/06/2016
     *  @since	5.3.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  acf_prepare_field
     *
     *  This function will restore a field's key ready for input
     *
     *  @type	function
     *  @date	6/09/2016
     *  @since	5.4.0
     *
     *  @param	array $field
     *  @return	$field
     */
    function acf_prepare_field($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
}
class acf_field_flexible_content extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  get_valid_layout
     *
     *  This function will fill in the missing keys to create a valid layout
     *
     *  @type	function
     *  @date	3/10/13
     *  @since	1.1.0
     *
     *  @param	array $layout
     *  @return	array $layout
     */
    function get_valid_layout($layout = array())
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     *  get_sub_field
     *
     *  This function will return a specific sub field
     *
     *  @type	function
     *  @date	29/09/2016
     *  @since	5.4.0
     *
     *  @param	$sub_field 
     *  @param	string $selector
     *  @param	array $field
     *  @return	int $post_id
     */
    function get_sub_field($sub_field, $selector, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_layout
     *
     *  description
     *
     *  @type	function
     *  @date	19/11/2013
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_layout($field, $layout, $i, $value)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value found in the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *  @return	$value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  get_layout
     *
     *  This function will return a specific layout by name from a field
     *
     *  @type	function
     *  @date	15/2/17
     *  @since	5.5.8
     *
     *  @param	string $name
     *  @param	array $field
     *  @return	array
     */
    function get_layout($name = '', $field)
    {
    }
    /**
     *  delete_row
     *
     *  This function will delete a value row
     *
     *  @type	function
     *  @date	15/2/17
     *  @since	5.5.8
     *
     *  @param	int $i
     *  @param	array $field
     *  @param	mixed $post_id
     *  @return	boolean
     */
    function delete_row($i = 0, $field, $post_id)
    {
    }
    /**
     *  update_row
     *
     *  This function will update a value row
     *
     *  @type	function
     *  @date	15/2/17
     *  @since	5.5.8
     *
     *  @param	int $i
     *  @param	array $field
     *  @param	mixed $post_id
     *  @return	boolean
     */
    function update_row($row, $i = 0, $field, $post_id)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the $post_id of which the value will be saved
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  delete_value
     *
     *  description
     *
     *  @type	function
     *  @date	1/07/2015
     *  @since	5.2.3
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function delete_value($post_id, $key, $field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the field group ID (post_type = acf)
     *
     *  @return	$field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  delete_field
     *
     *  description
     *
     *  @type	function
     *  @date	4/04/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function delete_field($field)
    {
    }
    /**
     *  duplicate_field()
     *
     *  This filter is appied to the $field before it is duplicated and saved to the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the modified field
     */
    function duplicate_field($field)
    {
    }
    /**
     *  ajax_layout_title
     *
     *  description
     *
     *  @type	function
     *  @date	2/03/2016
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_layout_title()
    {
    }
    function get_layout_title($field, $layout, $i, $value)
    {
    }
    /**
     *  clone_any_field
     *
     *  This function will update clone field settings based on the origional field
     *
     *  @type	function
     *  @date	28/06/2016
     *  @since	5.3.8
     *
     *  @param	array $clone
     *  @param	array $field
     *  @return	$clone
     */
    function clone_any_field($field, $clone_field)
    {
    }
    /**
     *  prepare_field_for_export
     *
     *  description
     *
     *  @type	function
     *  @date	11/03/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function prepare_field_for_export($field)
    {
    }
    function prepare_any_field_for_export($field)
    {
    }
    /**
     *  prepare_field_for_import
     *
     *  description
     *
     *  @type	function
     *  @date	11/03/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function prepare_field_for_import($field)
    {
    }
    /**
     *  validate_any_field
     *
     *  This function will add compatibility for the 'column_width' setting
     *
     *  @type	function
     *  @date	30/1/17
     *  @since	5.5.6
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_any_field($field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type	function
     *  @date	8/03/2016
     *  @since	5.3.2
     *
     *  @param	array $field
     *  @return	$field
     */
    function translate_field($field)
    {
    }
}
class acf_field_gallery extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  ajax_get_attachment
     *
     *  description
     *
     *  @type	function
     *  @date	13/12/2013
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_get_attachment()
    {
    }
    /**
     *  ajax_update_attachment
     *
     *  description
     *
     *  @type	function
     *  @date	13/12/2013
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_update_attachment()
    {
    }
    /**
     *  ajax_get_sort_order
     *
     *  description
     *
     *  @type	function
     *  @date	13/12/2013
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function ajax_get_sort_order()
    {
    }
    /**
     *  render_attachment
     *
     *  description
     *
     *  @type	function
     *  @date	13/12/2013
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function render_attachment($id = 0, $field)
    {
    }
    /**
     *  get_attachments
     *
     *  This function will return an array of attachments for a given field value
     *
     *  @type	function
     *  @date	13/06/2014
     *  @since	5.0.0
     *
     *  @param	array $value
     *  @return	$value
     */
    function get_attachments($value)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  update_single_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$post_id - the $post_id of which the value will be saved
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$value - the modified value
     */
    function update_single_value($value)
    {
    }
}
class acf_field_repeater extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type	function
     *  @date	16/12/2015
     *  @since	5.3.2
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param	$field - an array holding all the field's data
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type	action
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field	- an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value found in the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *  @return	$value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	mixed $value the value which was loaded from the database
     *  @param	mixed $post_id the $post_id from which the value was loaded
     *  @param	array $field the field array holding all the field options
     *
     *  @return	mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type	function
     *  @date	11/02/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_row
     *
     *  This function will update a value row
     *
     *  @type	function
     *  @date	15/2/17
     *  @since	5.5.8
     *
     *  @param	int $i
     *  @param	array $field
     *  @param	mixed $post_id
     *  @return	boolean
     */
    function update_row($row, $i = 0, $field, $post_id)
    {
    }
    /**
     *  delete_row
     *
     *  This function will delete a value row
     *
     *  @type	function
     *  @date	15/2/17
     *  @since	5.5.8
     *
     *  @param	int $i
     *  @param	array $field
     *  @param	mixed $post_id
     *  @return	boolean
     */
    function delete_row($i = 0, $field, $post_id)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$value - the value which will be saved in the database
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the $post_id of which the value will be saved
     *
     *  @return	$value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  delete_value
     *
     *  description
     *
     *  @type	function
     *  @date	1/07/2015
     *  @since	5.2.3
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function delete_value($post_id, $key, $field)
    {
    }
    /**
     *  delete_field
     *
     *  description
     *
     *  @type	function
     *  @date	4/04/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function delete_field($field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *  @param	$post_id - the field group ID (post_type = acf)
     *
     *  @return	$field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  duplicate_field()
     *
     *  This filter is appied to the $field before it is duplicated and saved to the database
     *
     *  @type	filter
     *  @since	3.6
     *  @date	23/01/13
     *
     *  @param	$field - the field array holding all the field options
     *
     *  @return	$field - the modified field
     */
    function duplicate_field($field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type	function
     *  @date	8/03/2016
     *  @since	5.3.2
     *
     *  @param	array $field
     *  @return	$field
     */
    function translate_field($field)
    {
    }
    /**
     *  validate_any_field
     *
     *  This function will add compatibility for the 'column_width' setting
     *
     *  @type	function
     *  @date	30/1/17
     *  @since	5.5.6
     *
     *  @param	array $field
     *  @return	$field
     */
    function validate_any_field($field)
    {
    }
    /**
     *  prepare_field_for_export
     *
     *  description
     *
     *  @type	function
     *  @date	11/03/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function prepare_field_for_export($field)
    {
    }
    /**
     *  prepare_field_for_import
     *
     *  description
     *
     *  @type	function
     *  @date	11/03/2014
     *  @since	5.0.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function prepare_field_for_import($field)
    {
    }
}
class acf_location_options_page extends \acf_location
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type	function
     *  @date	5/03/2014
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function initialize()
    {
    }
    /**
     *  rule_match
     *
     *  This function is used to match this location $rule to the current $screen
     *
     *  @type	function
     *  @date	3/01/13
     *  @since	3.5.7
     *
     *  @param	boolean $match 
     *  @param	array $rule
     *  @return	array $options
     */
    function rule_match($result, $rule, $screen)
    {
    }
    /**
     *  rule_operators
     *
     *  This function returns the available values for this rule type
     *
     *  @type	function
     *  @date	30/5/17
     *  @since	5.6.0
     *
     *  @param	void
     *  @return	array
     */
    function rule_values($choices, $rule)
    {
    }
}
class acf_options_page
{
    /** @var array Contains an array of optiions page settings */
    var $pages = array();
    /**
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  validate_page
     *
     *  description
     *
     *  @type	function
     *  @date	28/2/17
     *  @since	5.5.8
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function validate_page($page)
    {
    }
    /**
     *  add_page
     *
     *  This function will store an options page settings
     *
     *  @type	function
     *  @date	9/6/17
     *  @since	5.6.0
     *
     *  @param	array $page
     *  @return	void
     */
    function add_page($page)
    {
    }
    /**
     *  add_sub_page
     *
     *  description
     *
     *  @type	function
     *  @date	9/6/17
     *  @since	5.6.0
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function add_sub_page($page)
    {
    }
    /**
     *  update_page
     *
     *  This function will update an options page settings
     *
     *  @type	function
     *  @date	9/6/17
     *  @since	5.6.0
     *
     *  @param	string $slug
     *  @param	array $data
     *  @return	array
     */
    function update_page($slug = '', $data = array())
    {
    }
    /**
     *  get_page
     *
     *  This function will return an options page settings
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	string $slug
     *  @return	mixed
     */
    function get_page($slug)
    {
    }
    /**
     *  get_pages
     *
     *  This function will return all options page settings
     *
     *  @type	function
     *  @date	6/07/2016
     *  @since	5.4.0
     *
     *  @param	string $slug
     *  @return	mixed
     */
    function get_pages()
    {
    }
}
class acf_pro_updates
{
    /**
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type	function
     *  @date	23/06/12
     *  @since	5.0.0
     *
     *  @param	void
     *  @return	void
     */
    function __construct()
    {
    }
    /**
     *  init
     *
     *  description
     *
     *  @type	function
     *  @date	10/4/17
     *  @since	5.5.10
     *
     *  @param	int $post_id
     *  @return	int $post_id
     */
    function init()
    {
    }
    /**
     *  modify_plugin_update_message
     *
     *  Displays an update message for plugin list screens.
     *
     *  @type	function
     *  @date	14/06/2016
     *  @since	5.3.8
     *
     *  @param	string $message
     *  @param	array $plugin_data
     *  @param	object $r
     *  @return	$message
     */
    function modify_plugin_update_message($plugin_data, $response)
    {
    }
}
/**
*  acf
*
*  The main function responsible for returning the one true acf Instance to functions everywhere.
*  Use this function like you would a global variable, except without needing to declare the global.
*
*  Example: <?php $acf = acf(); ?>
*
*  @type	function
*  @date	4/09/13
*  @since	4.3.0
*
*  @param	void
*  @return	object
*/
function acf()
{
}
// class_exists check
/**
*  acf_register_admin_tool
*
*  alias of acf()->admin_tools->register_tool()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_register_admin_tool($class)
{
}
/**
*  acf_get_admin_tools_url
*
*  This function will return the admin URL to the tools page
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_get_admin_tools_url()
{
}
/**
*  acf_get_admin_tool_url
*
*  This function will return the admin URL to the tools page
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_get_admin_tool_url($tool = '')
{
}
// class_exists check
/**
*  acf_add_admin_notice
*
*  This function will add the notice data to a setting in the acf object for the admin_notices action to use
*
*  @type	function
*  @date	17/10/13
*  @since	5.0.0
*
*  @param	string $text
*  @param	string $class
*  @return	int message ID (array position)
*/
function acf_add_admin_notice($text, $class = '', $wrap = 'p')
{
}
/**
*  acf_get_admin_notices
*
*  This function will return an array containing any admin notices
*
*  @type	function
*  @date	17/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	array
*/
function acf_get_admin_notices()
{
}
// class_exists check
/**
*  acf_get_sites
*
*  This function will return an array of site data
*
*  @type	function
*  @date	29/08/2016
*  @since	5.4.0
*
*  @param	void
*  @return	array
*/
function acf_get_sites()
{
}
// Exit if accessed directly
/**
*  acf_update_500
*
*  These functions will update the DB for ACF v5.0.0
*
*  @type	function
*  @date	10/09/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_update_500()
{
}
function acf_update_500_field_groups()
{
}
function acf_update_500_field_group($ofg)
{
}
function acf_update_500_field($field)
{
}
/**
*  acf_update_550
*
*  These functions will update the DB for ACF v5.5.0
*
*  @type	function
*  @date	10/09/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_update_550()
{
}
/**
*  acf_update_550_termmeta
*
*  This function will migrate all term meta
*
*  @type	function
*  @date	3/09/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_update_550_termmeta()
{
}
/**
*  acf_update_550_taxonomy
*
*  This function will migrate term meta for a specific taxonomy
*
*  @type	function
*  @date	3/09/2016
*  @since	5.4.0
*
*  @param	string $taxonomy
*  @return	void
*/
function acf_update_550_taxonomy($taxonomy)
{
}
// class_exists check
/**
*  acf_get_db_version
*
*  This function will return the current ACF DB version
*
*  @type	function
*  @date	10/09/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_get_db_version()
{
}
/**
*  acf_update_db_version
*
*  This function will update the current ACF DB version
*
*  @type	function
*  @date	10/09/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_update_db_version($version = '')
{
}
/**
*  acf_get_db_updates
*
*  This function will return available db updates
*
*  @type	function
*  @date	12/05/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_get_db_updates()
{
}
/**
*  acf_is_field_group_key
*
*  This function will return true or false for the given $group_key parameter
*
*  @type	function
*  @date	6/12/2013
*  @since	5.0.0
*
*  @param	string $group_key
*  @return	boolean
*/
function acf_is_field_group_key($key = '')
{
}
/**
*  acf_get_valid_field_group
*
*  This function will fill in any missing keys to the $field_group array making it valid
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	array $field_group
*  @return	array $field_group
*/
function acf_get_valid_field_group($field_group = \false)
{
}
/**
*  acf_translate_field_group
*
*  This function will translate field group's settings
*
*  @type	function
*  @date	8/03/2016
*  @since	5.3.2
*
*  @param	array $field_group
*  @return	$field_group
*/
function acf_translate_field_group($field_group)
{
}
/**
*  acf_get_field_groups
*
*  This function will return an array of field groupss for the given args. Similar to the WP get_posts function
*
*  @type	function
*  @date	30/09/13
*  @since	5.0.0
*
*  @param	array $args
*  @return	array $field_groups
*/
function acf_get_field_groups($args = \false)
{
}
/**
*  acf_filter_field_groups
*
*  This function is used by acf_get_field_groups to filter out fields groups based on location rules
*
*  @type	function
*  @date	29/11/2013
*  @since	5.0.0
*
*  @param	array $field_groups
*  @param	array $args
*  @return	array $field_groups
*/
function acf_filter_field_groups($field_groups, $args = \false)
{
}
/**
*  acf_get_field_group_visibility
*
*  This function will look at the given field group's location rules and compare them against
*  the args given to see if this field group is to be shown or not.
*
*  @type	function
*  @date	7/10/13
*  @since	5.0.0
*
*  @param	$field group (array)
*  @param	array $args
*  @return	boolean
*/
function acf_get_field_group_visibility($field_group, $args = array())
{
}
/**
*  acf_get_field_group
*
*  This function will take either a post object, post ID or even null (for global $post), and
*  will then return a valid field group array
*
*  @type	function
*  @date	30/09/13
*  @since	5.0.0
*
*  @param	mixed $selector
*  @return	array $field_group
*/
function acf_get_field_group($selector = \null)
{
}
/**
*  _acf_get_field_group_by_id
*
*  This function will get a field group by its ID
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	array $field_group
*/
function _acf_get_field_group_by_id($post_id = 0)
{
}
/**
*  _acf_get_field_group_by_key
*
*  This function will get a field group by its key
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	string $key
*  @return	array $field_group
*/
function _acf_get_field_group_by_key($key = '')
{
}
/**
*  acf_get_field_group_id
*
*  This function will lookup a field group's ID from the DB
*  Useful for local fields to find DB sibling
*
*  @type	function
*  @date	25/06/2015
*  @since	5.5.8
*
*  @param	string $key
*  @return	int $post_id
*/
function acf_get_field_group_id($key = '')
{
}
/**
*  acf_update_field_group
*
*  This function will update a field group into the database.
*  The returned field group will always contain an ID
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	array $field_group
*  @return	array $field_group
*/
function acf_update_field_group($field_group = array())
{
}
function acf_update_field_group_wp_unique_post_slug($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug)
{
}
/**
*  acf_duplicate_field_group
*
*  This function will duplicate a field group into the database
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	mixed $selector
*  @param	int $new_post_id allow specific ID to override (good for WPML translations)
*  @return	array $field_group
*/
function acf_duplicate_field_group($selector = 0, $new_post_id = 0)
{
}
/**
*  acf_get_field_count
*
*  This function will return the number of fields for the given field group
*
*  @type	function
*  @date	17/10/13
*  @since	5.0.0
*
*  @param	int $field_group_id
*  @return	int
*/
function acf_get_field_count($field_group)
{
}
/**
*  acf_delete_field_group
*
*  This function will delete the field group and its fields from the DB
*
*  @type	function
*  @date	5/12/2013
*  @since	5.0.0
*
*  @param	mixed $selector
*  @return	boolean
*/
function acf_delete_field_group($selector = 0)
{
}
/**
*  acf_trash_field_group
*
*  This function will trash the field group and its fields
*
*  @type	function
*  @date	5/12/2013
*  @since	5.0.0
*
*  @param	mixed $selector
*  @return	boolean
*/
function acf_trash_field_group($selector = 0)
{
}
/**
*  acf_untrash_field_group
*
*  This function will restore from trash the field group and its fields
*
*  @type	function
*  @date	5/12/2013
*  @since	5.0.0
*
*  @param	mixed $selector
*  @return	boolean
*/
function acf_untrash_field_group($selector = 0)
{
}
/**
*  acf_get_field_group_style
*
*  This function will render the CSS for a given field group
*
*  @type	function
*  @date	20/10/13
*  @since	5.0.0
*
*  @param	array $field_group
*  @return	void
*/
function acf_get_field_group_style($field_group)
{
}
/**
*  acf_import_field_group
*
*  This function will import a field group from JSON into the DB
*
*  @type	function
*  @date	10/12/2014
*  @since	5.1.5
*
*  @param	array $field_group
*  @return	int $id
*/
function acf_import_field_group($field_group)
{
}
/**
*  acf_prepare_field_group_for_export
*
*  description
*
*  @type	function
*  @date	4/12/2015
*  @since	5.3.2
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_prepare_field_group_for_export($field_group)
{
}
/**
*  acf_is_field_key
*
*  This function will return true or false for the given $field_key parameter
*
*  @type	function
*  @date	6/12/2013
*  @since	5.0.0
*
*  @param	string $field_key
*  @return	boolean
*/
function acf_is_field_key($key = '')
{
}
/**
*  acf_get_valid_field
*
*  This function will fill in any missing keys to the $field array making it valid
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	array $field
*  @return	array $field
*/
function acf_get_valid_field($field = \false)
{
}
/**
*  acf_translate_field
*
*  This function will translate field's settings
*
*  @type	function
*  @date	8/03/2016
*  @since	5.3.2
*
*  @param	array $field
*  @return	$field
*/
function acf_translate_field($field)
{
}
/**
*  acf_clone_field
*
*  This function will allow customization to a field when it is cloned
*  Cloning a field is the act of mimicing another. Some settings may need to be altered
*
*  @type	function
*  @date	8/03/2016
*  @since	5.3.2
*
*  @param	array $field
*  @return	$field
*/
function acf_clone_field($field, $clone_field)
{
}
/**
*  acf_prepare_field
*
*  This function will prepare the field for input
*
*  @type	function
*  @date	12/02/2014
*  @since	5.0.0
*
*  @param	array $field
*  @return	array $field
*/
function acf_prepare_field($field)
{
}
/**
*  acf_is_sub_field
*
*  This function will return true if the field is a sub field
*
*  @type	function
*  @date	17/05/2014
*  @since	5.0.0
*
*  @param	array $field
*  @return	boolean
*/
function acf_is_sub_field($field)
{
}
/**
*  acf_get_field_label
*
*  This function will return the field label with appropriate required label
*
*  @type	function
*  @date	4/11/2013
*  @since	5.0.0
*
*  @param	array $field
*  @return	string $label
*/
function acf_get_field_label($field, $context = '')
{
}
function acf_the_field_label($field)
{
}
/**
*  acf_render_fields
*
*  This function will render an array of fields for a given form.
*  Becasue the $field's values have not been loaded yet, this function will also load values
*
*  @type	function
*  @date	8/10/13
*  @since	5.0.0
*
*  @param	int $post_id the post to load values from
*  @param	array $fields the fields to render
*  @param	string $el the wrapping element type
*  @param	int $instruction the instructions position
*  @return	void
*/
function acf_render_fields($fields, $post_id = 0, $el = 'div', $instruction = 'label')
{
}
/**
*  acf_render_field
*
*  This function will render a field input
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	array $field
*  @return	void
*/
function acf_render_field($field = \false)
{
}
/**
*  acf_render_field_wrap
*
*  This function will render the complete HTML wrap with label & field
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	array $field must be a valid ACF field array
*  @param	string $el modifys the rendered wrapping elements. Default to 'div', but can be 'tr', 'ul', 'ol', 'dt' or custom
*  @param	string $instruction specifys the placement of the instructions. Default to 'label', but can be 'field'
*  @param	array $atts an array of custom attributes to render on the $el
*  @return	void
*/
function acf_render_field_wrap($field, $el = 'div', $instruction = 'label')
{
}
/**
*  acf_render_field_label
*
*  This function will maybe output the field's label
*
*  @date	19/9/17
*  @since	5.6.3
*
*  @param	array $field
*  @return	void
*/
function acf_render_field_label($field)
{
}
/* depreciated since 5.6.5 */
function acf_render_field_wrap_label($field)
{
}
/**
*  acf_render_field_instructions
*
*  This function will maybe output the field's instructions
*
*  @date	19/9/17
*  @since	5.6.3
*
*  @param	array $field
*  @return	void
*/
function acf_render_field_instructions($field)
{
}
/* depreciated since 5.6.5 */
function acf_render_field_wrap_description($field)
{
}
/**
*  acf_render_field_setting
*
*  This function will render a tr element containing a label and field cell, but also setting the tr data attribute for AJAX 
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	array $field the origional field being edited
*  @param	array $setting the settings field to create
*  @return	void
*/
function acf_render_field_setting($field, $setting, $global = \false)
{
}
/**
*  acf_get_fields
*
*  This function will return an array of fields for the given $parent
*
*  @type	function
*  @date	30/09/13
*  @since	5.0.0
*
*  @param	array $parent a field or field group
*  @return	array
*/
function acf_get_fields($parent = \false)
{
}
/**
*  acf_get_fields_by_id
*
*  This function will get all fields for the given parent
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	array $fields
*/
function acf_get_fields_by_id($parent_id = 0)
{
}
/**
*  acf_get_field
*
*  This function will return a field for the given selector. 
*
*  @type	function
*  @date	30/09/13
*  @since	5.0.0
*
*  @param	mixed $selector identifyer of field. Can be an ID, key, name or post object
*  @param	boolean $db_only return $field in it's raw form without filters or cache
*  @return	array $field
*/
function acf_get_field($selector = \null, $db_only = \false)
{
}
/**
*  _acf_get_field_by_id
*
*  This function will get a field via its ID
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	array $field
*/
function _acf_get_field_by_id($post_id = 0, $db_only = \false)
{
}
/**
*  _acf_get_field_by_key
*
*  This function will get a field via its key
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	string $key
*  @return	array $field
*/
function _acf_get_field_by_key($key = '', $db_only = \false)
{
}
/**
*  _acf_get_field_by_name
*
*  This function will get a field via its name
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	string $key
*  @return	array $field
*/
function _acf_get_field_by_name($name = '', $db_only = \false)
{
}
/**
*  acf_maybe_get_field
*
*  This function will return a field for the given selector.
*  It will also review the field_reference to ensure the correct field is returned which makes it useful for the template API
*
*  @type	function
*  @date	4/08/2015
*  @since	5.2.3
*
*  @param	mixed $selector identifyer of field. Can be an ID, key, name or post object
*  @param	mixed $post_id the post_id of which the value is saved against
*  @param	boolean $strict if true, return a field only when a field key is found.
*  @return	array $field
*/
function acf_maybe_get_field($selector, $post_id = \false, $strict = \true)
{
}
/**
*  acf_get_field_id
*
*  This function will lookup a field's ID from the DB
*  Useful for local fields to find DB sibling
*
*  @type	function
*  @date	25/06/2015
*  @since	5.2.3
*
*  @param	string $key
*  @return	int $post_id
*/
function acf_get_field_id($key = '')
{
}
/**
*  acf_update_field
*
*  This function will update a field into the DB.
*  The returned field will always contain an ID
*
*  @type	function
*  @date	1/10/13
*  @since	5.0.0
*
*  @param	array $field
*  @return	array $field
*/
function acf_update_field($field = \false, $specific = \false)
{
}
function acf_update_field_wp_unique_post_slug($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug)
{
}
/**
*  acf_duplicate_fields
*
*  This function will duplicate an array of fields and update conditional logic references
*
*  @type	function
*  @date	16/06/2014
*  @since	5.0.0
*
*  @param	array $fields
*  @param	int $new_parent
*  @return	void
*/
function acf_duplicate_fields($fields, $new_parent = 0)
{
}
/**
*  acf_duplicate_field
*
*  This function will duplicate a field and attach it to the given field group ID
*
*  @type	function
*  @date	17/10/13
*  @since	5.0.0
*
*  @param	int $selector
*  @param	int $new_parent
*  @return	array $field the new field
*/
function acf_duplicate_field($selector = 0, $new_parent = 0)
{
}
/**
*  acf_delete_field
*
*  This function will delete a field from the databse
*
*  @type	function
*  @date	2/10/13
*  @since	5.0.0
*
*  @param	int $id
*  @return	boolean
*/
function acf_delete_field($selector = 0)
{
}
/**
*  acf_trash_field
*
*  This function will trash a field from the databse
*
*  @type	function
*  @date	2/10/13
*  @since	5.0.0
*
*  @param	int $id
*  @return	boolean
*/
function acf_trash_field($selector = 0)
{
}
/**
*  acf_untrash_field
*
*  This function will restore a field from the trash
*
*  @type	function
*  @date	2/10/13
*  @since	5.0.0
*
*  @param	int $id
*  @return	boolean
*/
function acf_untrash_field($selector = 0)
{
}
/**
*  acf_prepare_fields_for_export
*
*  description
*
*  @type	function
*  @date	11/03/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_prepare_fields_for_export($fields = \false)
{
}
/**
*  acf_prepare_field_for_export
*
*  description
*
*  @type	function
*  @date	11/03/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_prepare_field_for_export($field)
{
}
/**
*  acf_prepare_fields_for_import
*
*  description
*
*  @type	function
*  @date	11/03/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_prepare_fields_for_import($fields = \false)
{
}
/**
*  acf_prepare_field_for_import
*
*  description
*
*  @type	function
*  @date	11/03/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_prepare_field_for_import($field)
{
}
/**
*  acf_get_sub_field
*
*  This function will return a field for the given selector, and $field (parent). 
*
*  @type	function
*  @date	30/09/13
*  @since	5.0.0
*
*  @param	string $selector
*  @param	mixed $field
*  @return	array $field
*/
function acf_get_sub_field($selector, $field)
{
}
/**
*  acf_is_field
*
*  This function will compare a $selector against a $field array
*
*  @type	function
*  @date	1/7/17
*  @since	5.6.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_is_field($field, $selector = '')
{
}
/**
*  acf_get_field_ancestors
*
*  This function will return an array of all ancestor fields
*
*  @type	function
*  @date	22/06/2016
*  @since	5.3.8
*
*  @param	array $field
*  @return	array
*/
function acf_get_field_ancestors($field)
{
}
/**
*  acf_maybe_get_sub_field
*
*  This function will attempt to find a sub field
*
*  @type	function
*  @date	3/10/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_maybe_get_sub_field($selectors, $post_id = \false, $strict = \true)
{
}
/**
*  acf_prefix_fields
*
*  This funtion will safely change the prefix for an array of fields
*  Needed to allow clone field to continue working on nave menu item and widget forms
*
*  @type	function
*  @date	5/9/17
*  @since	5.6.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_prefix_fields(&$fields, $prefix = 'acf')
{
}
/**
*  acf_is_array
*
*  This function will return true for a non empty array
*
*  @type	function
*  @date	6/07/2016
*  @since	5.4.0
*
*  @param	array $array
*  @return	boolean
*/
function acf_is_array($array)
{
}
/**
*  acf_is_empty
*
*  This function will return true for an empty var (allows 0 as true)
*
*  @type	function
*  @date	6/07/2016
*  @since	5.4.0
*
*  @param	mixed $value
*  @return	boolean
*/
function acf_is_empty($value)
{
}
/**
*  acf_idify
*
*  Returns an id friendly string
*
*  @date	24/12/17
*  @since	5.6.5
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_idify($str = '')
{
}
/**
*  acf_slugify
*
*  Returns a slug friendly string
*
*  @date	24/12/17
*  @since	5.6.5
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_slugify($str = '')
{
}
/**
*  acf_has_setting
*
*  alias of acf()->has_setting()
*
*  @date	2/2/18
*  @since	5.6.5
*
*  @param	void
*  @return	void
*/
function acf_has_setting($name = '')
{
}
/**
*  acf_raw_setting
*
*  alias of acf()->get_setting()
*
*  @date	2/2/18
*  @since	5.6.5
*
*  @param	void
*  @return	void
*/
function acf_raw_setting($name = '')
{
}
/**
*  acf_update_setting
*
*  alias of acf()->update_setting()
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	string $name
*  @param	mixed $value
*  @return	void
*/
function acf_update_setting($name, $value)
{
}
/**
*  acf_validate_setting
*
*  Returns the changed setting name if available.
*
*  @date	2/2/18
*  @since	5.6.5
*
*  @param	void
*  @return	void
*/
function acf_validate_setting($name = '')
{
}
/**
*  acf_get_setting
*
*  alias of acf()->get_setting()
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_get_setting($name, $value = \null)
{
}
/**
*  acf_append_setting
*
*  This function will add a value into the settings array found in the acf object
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	string $name
*  @param	mixed $value
*  @return	void
*/
function acf_append_setting($name, $value)
{
}
/**
*  acf_get_data
*
*  Returns data.
*
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	string $name
*  @return	mixed
*/
function acf_get_data($name)
{
}
/**
*  acf_set_data
*
*  Sets data.
*
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	string $name
*  @param	mixed $value
*  @return	void
*/
function acf_set_data($name, $value)
{
}
/**
*  acf_new_instance
*
*  description
*
*  @date	13/2/18
*  @since	5.6.5
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_new_instance($class)
{
}
/**
*  acf_get_instance
*
*  description
*
*  @date	13/2/18
*  @since	5.6.5
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_get_instance($class)
{
}
/**
*  acf_init
*
*  alias of acf()->init()
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_init()
{
}
/**
*  acf_get_compatibility
*
*  This function will return true or false for a given compatibility setting
*
*  @type	function
*  @date	20/01/2015
*  @since	5.1.5
*
*  @param	string $name
*  @return	boolean
*/
function acf_get_compatibility($name)
{
}
/**
*  acf_has_done
*
*  This function will return true if this action has already been done
*
*  @type	function
*  @date	16/12/2015
*  @since	5.3.2
*
*  @param	string $name
*  @return	boolean
*/
function acf_has_done($name)
{
}
/**
*  acf_get_path
*
*  This function will return the path to a file within the ACF plugin folder
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	string $path the relative path from the root of the ACF plugin folder
*  @return	string
*/
function acf_get_path($path = '')
{
}
/**
*  acf_get_url
*
*  This function will return the url to a file within the ACF plugin folder
*
*  @date	12/12/17
*  @since	5.6.8
*
*  @param	string $path The relative path from the root of the ACF plugin folder
*  @return	string
*/
function acf_get_url($path = '')
{
}
/**
*  acf_get_dir
*
*  Deprecated in 5.6.8. Use acf_get_url() instead.
*
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	string
*  @return	string
*/
function acf_get_dir($path = '')
{
}
/**
*  acf_include
*
*  This function will include a file
*
*  @type	function
*  @date	10/03/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_include($file)
{
}
/**
*  acf_get_external_path
*
*  This function will return the path to a file within an external folder
*
*  @type	function
*  @date	22/2/17
*  @since	5.5.8
*
*  @param	string $file
*  @param	string $path
*  @return	string
*/
function acf_get_external_path($file, $path = '')
{
}
/**
*  acf_get_external_dir
*
*  This function will return the url to a file within an external folder
*
*  @type	function
*  @date	22/2/17
*  @since	5.5.8
*
*  @param	string $file
*  @param	string $path
*  @return	string
*/
function acf_get_external_dir($file, $path = '')
{
}
/**
*  acf_plugin_dir_url
*
*  This function will calculate the url to a plugin folder.
*  Different to the WP plugin_dir_url(), this function can calculate for urls outside of the plugins folder (theme include).
*
*  @date	13/12/17
*  @since	5.6.8
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_plugin_dir_url($file)
{
}
/**
*  acf_parse_args
*
*  This function will merge together 2 arrays and also convert any numeric values to ints
*
*  @type	function
*  @date	18/10/13
*  @since	5.0.0
*
*  @param	array $args
*  @param	array $defaults
*  @return	array $args
*/
function acf_parse_args($args, $defaults = array())
{
}
/**
*  acf_parse_types
*
*  This function will convert any numeric values to int and trim strings
*
*  @type	function
*  @date	18/10/13
*  @since	5.0.0
*
*  @param	mixed $var
*  @return	mixed $var
*/
function acf_parse_types($array)
{
}
/**
*  acf_parse_type
*
*  description
*
*  @type	function
*  @date	11/11/2014
*  @since	5.0.9
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_parse_type($v)
{
}
/**
*  acf_get_view
*
*  This function will load in a file from the 'admin/views' folder and allow variables to be passed through
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	string $view_name
*  @param	array $args
*  @return	void
*/
function acf_get_view($path = '', $args = array())
{
}
/**
*  acf_merge_atts
*
*  description
*
*  @type	function
*  @date	2/11/2014
*  @since	5.0.9
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_merge_atts($atts, $extra = array())
{
}
/**
*  acf_nonce_input
*
*  This function will create a basic nonce input
*
*  @type	function
*  @date	24/5/17
*  @since	5.6.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_nonce_input($nonce = '')
{
}
/**
*  acf_extract_var
*
*  This function will remove the var from the array, and return the var
*
*  @type	function
*  @date	2/10/13
*  @since	5.0.0
*
*  @param	array $array
*  @param	string $key
*  @return	mixed
*/
function acf_extract_var(&$array, $key, $default = \null)
{
}
/**
*  acf_extract_vars
*
*  This function will remove the vars from the array, and return the vars
*
*  @type	function
*  @date	8/10/13
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_extract_vars(&$array, $keys)
{
}
/**
*  acf_get_sub_array
*
*  This function will return a sub array of data
*
*  @type	function
*  @date	15/03/2016
*  @since	5.3.2
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_get_sub_array($array, $keys)
{
}
/**
*  acf_get_post_types
*
*  Returns an array of post type names.
*
*  @date	7/10/13
*  @since	5.0.0
*
*  @param	array $args Optional. An array of key => value arguments to match against the post type objects. Default empty array.
*  @return	array A list of post type names.
*/
function acf_get_post_types($args = array())
{
}
function acf_get_pretty_post_types($post_types = array())
{
}
/**
*  acf_get_post_type_label
*
*  This function will return a pretty label for a specific post_type
*
*  @type	function
*  @date	5/07/2016
*  @since	5.4.0
*
*  @param	string $post_type
*  @return	string
*/
function acf_get_post_type_label($post_type)
{
}
/**
*  acf_verify_nonce
*
*  This function will look at the $_POST['_acf_nonce'] value and return true or false
*
*  @type	function
*  @date	15/10/13
*  @since	5.0.0
*
*  @param	string $nonce
*  @return	boolean
*/
function acf_verify_nonce($value)
{
}
/**
*  acf_verify_ajax
*
*  This function will return true if the current AJAX request is valid
*  It's action will also allow WPML to set the lang and avoid AJAX get_posts issues
*
*  @type	function
*  @date	7/08/2015
*  @since	5.2.3
*
*  @param	void
*  @return	boolean
*/
function acf_verify_ajax()
{
}
/**
*  acf_get_image_sizes
*
*  This function will return an array of available image sizes
*
*  @type	function
*  @date	23/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	array
*/
function acf_get_image_sizes()
{
}
function acf_get_image_size($s = '')
{
}
/**
*  acf_version_compare
*
*  This function will compare version left v right
*
*  @type	function
*  @date	21/11/16
*  @since	5.5.0
*
*  @param	string $compare
*  @param	string $version
*  @return	boolean
*/
function acf_version_compare($left = 'wp', $compare = '>', $right = '1')
{
}
/**
*  acf_get_full_version
*
*  This function will remove any '-beta1' or '-RC1' strings from a version
*
*  @type	function
*  @date	24/11/16
*  @since	5.5.0
*
*  @param	string $version
*  @return	string
*/
function acf_get_full_version($version = '1')
{
}
/**
*  acf_get_locale
*
*  This function is a wrapper for the get_locale() function
*
*  @type	function
*  @date	16/12/16
*  @since	5.5.0
*
*  @param	void
*  @return	string
*/
function acf_get_locale()
{
}
/**
*  acf_get_terms
*
*  This function is a wrapper for the get_terms() function
*
*  @type	function
*  @date	28/09/2016
*  @since	5.4.0
*
*  @param	array $args
*  @return	array
*/
function acf_get_terms($args)
{
}
/**
*  acf_get_taxonomy_terms
*
*  This function will return an array of available taxonomy terms
*
*  @type	function
*  @date	7/10/13
*  @since	5.0.0
*
*  @param	array $taxonomies
*  @return	array
*/
function acf_get_taxonomy_terms($taxonomies = array())
{
}
function acf_get_term_title($term)
{
}
/**
*  acf_decode_taxonomy_terms
*
*  This function decodes the $taxonomy:$term strings into a nested array
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	array $terms
*  @return	array
*/
function acf_decode_taxonomy_terms($strings = \false)
{
}
/**
*  acf_decode_taxonomy_term
*
*  This function will return the taxonomy and term slug for a given value
*
*  @type	function
*  @date	31/03/2014
*  @since	5.0.0
*
*  @param	string $string
*  @return	array
*/
function acf_decode_taxonomy_term($value)
{
}
/**
*  acf_get_array
*
*  This function will force a variable to become an array
*
*  @type	function
*  @date	4/02/2014
*  @since	5.0.0
*
*  @param	mixed $var
*  @return	array
*/
function acf_get_array($var = \false, $delimiter = '')
{
}
/**
*  acf_get_numeric
*
*  This function will return numeric values
*
*  @type	function
*  @date	15/07/2016
*  @since	5.4.0
*
*  @param	mixed $value
*  @return	mixed
*/
function acf_get_numeric($value = '')
{
}
/**
*  acf_get_posts
*
*  This function will return an array of posts making sure the order is correct
*
*  @type	function
*  @date	3/03/2015
*  @since	5.1.5
*
*  @param	array $args
*  @return	array
*/
function acf_get_posts($args = array())
{
}
/**
*  _acf_query_remove_post_type
*
*  This function will remove the 'wp_posts.post_type' WHERE clause completely
*  When using 'post__in', this clause is unneccessary and slow.
*
*  @type	function
*  @date	4/03/2015
*  @since	5.1.5
*
*  @param	string $sql
*  @return	$sql
*/
function _acf_query_remove_post_type($sql)
{
}
/**
*  acf_get_grouped_posts
*
*  This function will return all posts grouped by post_type
*  This is handy for select settings
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	array $args
*  @return	array
*/
function acf_get_grouped_posts($args)
{
}
function _acf_orderby_post_type($ordeby, $wp_query)
{
}
function acf_get_post_title($post = 0, $is_search = \false)
{
}
function acf_order_by_search($array, $search)
{
}
/**
*  acf_get_pretty_user_roles
*
*  description
*
*  @type	function
*  @date	23/02/2016
*  @since	5.3.2
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_get_pretty_user_roles($allowed = \false)
{
}
/**
*  acf_get_grouped_users
*
*  This function will return all users grouped by role
*  This is handy for select settings
*
*  @type	function
*  @date	27/02/2014
*  @since	5.0.0
*
*  @param	array $args
*  @return	array
*/
function acf_get_grouped_users($args = array())
{
}
/**
*  acf_json_encode
*
*  This function will return pretty JSON for all PHP versions
*
*  @type	function
*  @date	6/03/2014
*  @since	5.0.0
*
*  @param	array $json
*  @return	string
*/
function acf_json_encode($json)
{
}
/**
*  acf_str_exists
*
*  This function will return true if a sub string is found
*
*  @type	function
*  @date	1/05/2014
*  @since	5.0.0
*
*  @param	string $needle
*  @param	string $haystack
*  @return	boolean
*/
function acf_str_exists($needle, $haystack)
{
}
/**
*  acf_debug
*
*  description
*
*  @type	function
*  @date	2/05/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_debug()
{
}
function acf_debug_start()
{
}
function acf_debug_end()
{
}
/**
*  acf_encode_choices
*
*  description
*
*  @type	function
*  @date	4/06/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_encode_choices($array = array(), $show_keys = \true)
{
}
function acf_decode_choices($string = '', $array_keys = \false)
{
}
/**
*  acf_str_replace
*
*  This function will replace an array of strings much like str_replace
*  The difference is the extra logic to avoid replacing a string that has alread been replaced
*  This is very useful for replacing date characters as they overlap with eachother
*
*  @type	function
*  @date	21/06/2016
*  @since	5.3.8
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_str_replace($string = '', $search_replace = array())
{
}
/**
*  acf_split_date_time
*
*  This function will split a format string into seperate date and time
*
*  @type	function
*  @date	26/05/2016
*  @since	5.3.8
*
*  @param	string $date_time
*  @return	array $formats
*/
function acf_split_date_time($date_time = '')
{
}
/**
*  acf_convert_date_to_php
*
*  This fucntion converts a date format string from JS to PHP
*
*  @type	function
*  @date	20/06/2014
*  @since	5.0.0
*
*  @param	string $date
*  @return	string
*/
function acf_convert_date_to_php($date = '')
{
}
/**
*  acf_convert_date_to_js
*
*  This fucntion converts a date format string from PHP to JS
*
*  @type	function
*  @date	20/06/2014
*  @since	5.0.0
*
*  @param	string $date
*  @return	string
*/
function acf_convert_date_to_js($date = '')
{
}
/**
*  acf_convert_time_to_php
*
*  This fucntion converts a time format string from JS to PHP
*
*  @type	function
*  @date	20/06/2014
*  @since	5.0.0
*
*  @param	string $time
*  @return	string
*/
function acf_convert_time_to_php($time = '')
{
}
/**
*  acf_convert_time_to_js
*
*  This fucntion converts a date format string from PHP to JS
*
*  @type	function
*  @date	20/06/2014
*  @since	5.0.0
*
*  @param	string $time
*  @return	string
*/
function acf_convert_time_to_js($time = '')
{
}
/**
*  acf_update_user_setting
*
*  description
*
*  @type	function
*  @date	15/07/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_update_user_setting($name, $value)
{
}
/**
*  acf_get_user_setting
*
*  description
*
*  @type	function
*  @date	15/07/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_get_user_setting($name = '', $default = \false)
{
}
/**
*  acf_in_array
*
*  description
*
*  @type	function
*  @date	22/07/2014
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_in_array($value = '', $array = \false)
{
}
/**
*  acf_get_valid_post_id
*
*  This function will return a valid post_id based on the current screen / parameter
*
*  @type	function
*  @date	8/12/2013
*  @since	5.0.0
*
*  @param	mixed $post_id
*  @return	mixed $post_id
*/
function acf_get_valid_post_id($post_id = 0)
{
}
/**
*  acf_get_post_id_info
*
*  This function will return the type and id for a given $post_id string
*
*  @type	function
*  @date	2/07/2016
*  @since	5.4.0
*
*  @param	mixed $post_id
*  @return	array $info
*/
function acf_get_post_id_info($post_id = 0)
{
}
/**
acf_log( acf_get_post_id_info(4) );
acf_log( acf_get_post_id_info('post_4') );
acf_log( acf_get_post_id_info('user_123') );
acf_log( acf_get_post_id_info('term_567') );
acf_log( acf_get_post_id_info('category_204') );
acf_log( acf_get_post_id_info('comment_6') );
acf_log( acf_get_post_id_info('options_lol!') );
acf_log( acf_get_post_id_info('option') );
acf_log( acf_get_post_id_info('options') );
*/
/**
*  acf_isset_termmeta
*
*  This function will return true if the termmeta table exists
*  https://developer.wordpress.org/reference/functions/get_term_meta/
*
*  @type	function
*  @date	3/09/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_isset_termmeta($taxonomy = '')
{
}
/**
*  acf_get_term_post_id
*
*  This function will return a valid post_id string for a given term and taxonomy
*
*  @type	function
*  @date	6/2/17
*  @since	5.5.6
*
*  @param	string $taxonomy
*  @param	int $term_id
*  @return	string
*/
function acf_get_term_post_id($taxonomy, $term_id)
{
}
/**
*  acf_upload_files
*
*  This function will walk througfh the $_FILES data and upload each found
*
*  @type	function
*  @date	25/10/2014
*  @since	5.0.9
*
*  @param	array $ancestors an internal parameter, not required
*  @return	void
*/
function acf_upload_files($ancestors = array())
{
}
/**
*  acf_upload_file
*
*  This function will uploade a $_FILE
*
*  @type	function
*  @date	27/10/2014
*  @since	5.0.9
*
*  @param	array $uploaded_file array found from $_FILE data
*  @return	int $id new attachment ID
*/
function acf_upload_file($uploaded_file)
{
}
/**
*  acf_update_nested_array
*
*  This function will update a nested array value. Useful for modifying the $_POST array
*
*  @type	function
*  @date	27/10/2014
*  @since	5.0.9
*
*  @param	array $array target array to be updated
*  @param	array $ancestors array of keys to navigate through to find the child
*  @param	mixed $value The new value
*  @return	boolean
*/
function acf_update_nested_array(&$array, $ancestors, $value)
{
}
/**
*  acf_is_screen
*
*  This function will return true if all args are matched for the current screen
*
*  @type	function
*  @date	9/12/2014
*  @since	5.1.5
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_is_screen($id = '')
{
}
/**
*  acf_maybe_get
*
*  This function will return a var if it exists in an array
*
*  @type	function
*  @date	9/12/2014
*  @since	5.1.5
*
*  @param	array $array the array to look within
*  @param	key $key the array key to look for. Nested values may be found using '/'
*  @param	mixed $default the value returned if not found
*  @return	int $post_id
*/
function acf_maybe_get($array = array(), $key = 0, $default = \null)
{
}
function acf_maybe_get_POST($key = '', $default = \null)
{
}
function acf_maybe_get_GET($key = '', $default = \null)
{
}
/**
*  acf_get_attachment
*
*  This function will return an array of attachment data
*
*  @type	function
*  @date	5/01/2015
*  @since	5.1.5
*
*  @param	mixed $post either post ID or post object
*  @return	array
*/
function acf_get_attachment($attachment)
{
}
/**
*  acf_get_truncated
*
*  This function will truncate and return a string
*
*  @type	function
*  @date	8/08/2014
*  @since	5.0.0
*
*  @param	string $text
*  @param	int $length
*  @return	string
*/
function acf_get_truncated($text, $length = 64)
{
}
/**
*  acf_get_current_url
*
*  This function will return the current URL
*
*  @type	function
*  @date	23/01/2015
*  @since	5.1.5
*
*  @param	void
*  @return	string
*/
function acf_get_current_url()
{
}
/**
*  acf_current_user_can_admin
*
*  This function will return true if the current user can administrate the ACF field groups
*
*  @type	function
*  @date	9/02/2015
*  @since	5.1.5
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_current_user_can_admin()
{
}
/**
*  acf_get_filesize
*
*  This function will return a numeric value of bytes for a given filesize string
*
*  @type	function
*  @date	18/02/2015
*  @since	5.1.5
*
*  @param	mixed $size
*  @return	int
*/
function acf_get_filesize($size = 1)
{
}
/**
*  acf_format_filesize
*
*  This function will return a formatted string containing the filesize and unit
*
*  @type	function
*  @date	18/02/2015
*  @since	5.1.5
*
*  @param	mixed $size
*  @return	int
*/
function acf_format_filesize($size = 1)
{
}
/**
*  acf_get_valid_terms
*
*  This function will replace old terms with new split term ids
*
*  @type	function
*  @date	27/02/2015
*  @since	5.1.5
*
*  @param	int|array $terms
*  @param	string $taxonomy
*  @return	$terms
*/
function acf_get_valid_terms($terms = \false, $taxonomy = 'category')
{
}
/**
*  acf_esc_html_deep
*
*  Navigates through an array and escapes html from the values.
*
*  @type	function
*  @date	10/06/2015
*  @since	5.2.7
*
*  @param	mixed $value
*  @return	$value
*/
/**
function acf_esc_html_deep( $value ) {
	
	// array
	if( is_array($value) ) {
		
		$value = array_map('acf_esc_html_deep', $value);
	
	// object
	} elseif( is_object($value) ) {
		
		$vars = get_object_vars( $value );
		
		foreach( $vars as $k => $v ) {
			
			$value->{$k} = acf_esc_html_deep( $v );
		
		}
		
	// string
	} elseif( is_string($value) ) {

		$value = esc_html($value);

	}
	
	
	// return
	return $value;

}
*/
/**
*  acf_validate_attachment
*
*  This function will validate an attachment based on a field's resrictions and return an array of errors
*
*  @type	function
*  @date	3/07/2015
*  @since	5.2.3
*
*  @param	array $attachment attachment data. Cahnges based on context
*  @param	array $field field settings containing restrictions
*  @param	string $context $file is different when uploading / preparing
*  @return	array $errors
*/
function acf_validate_attachment($attachment, $field, $context = 'prepare')
{
}
function _acf_settings_uploader($uploader)
{
}
/**
*  acf_translate_keys
*
*  description
*
*  @type	function
*  @date	7/12/2015
*  @since	5.3.2
*
*  @param	int $post_id
*  @return	int $post_id
*/
/**
function acf_translate_keys( $array, $keys ) {
	
	// bail early if no keys
	if( empty($keys) ) return $array;
	
	
	// translate
	foreach( $keys as $k ) {
		
		// bail ealry if not exists
		if( !isset($array[ $k ]) ) continue;
		
		
		// translate
		$array[ $k ] = acf_translate( $array[ $k ] );
		
	}
	
	
	// return
	return $array;
	
}
*/
/**
*  acf_translate
*
*  This function will translate a string using the new 'l10n_textdomain' setting
*  Also works for arrays which is great for fields - select -> choices
*
*  @type	function
*  @date	4/12/2015
*  @since	5.3.2
*
*  @param	mixed $string string or array containins strings to be translated
*  @return	$string
*/
function acf_translate($string)
{
}
/**
*  acf_maybe_add_action
*
*  This function will determine if the action has already run before adding / calling the function
*
*  @type	function
*  @date	13/01/2016
*  @since	5.3.2
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_maybe_add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)
{
}
/**
*  acf_is_row_collapsed
*
*  This function will return true if the field's row is collapsed
*
*  @type	function
*  @date	2/03/2016
*  @since	5.3.2
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_is_row_collapsed($field_key = '', $row_index = 0)
{
}
/**
*  acf_get_attachment_image
*
*  description
*
*  @type	function
*  @date	24/10/16
*  @since	5.5.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_get_attachment_image($attachment_id = 0, $size = 'thumbnail')
{
}
/**
*  acf_get_post_thumbnail
*
*  This function will return a thumbail image url for a given post
*
*  @type	function
*  @date	3/05/2016
*  @since	5.3.8
*
*  @param	obj $post
*  @param	mixed $size
*  @return	string
*/
function acf_get_post_thumbnail($post = \null, $size = 'thumbnail')
{
}
/**
*  acf_get_browser
*
*  This functino will return the browser string for major browsers
*
*  @type	function
*  @date	17/01/2014
*  @since	5.0.0
*
*  @param	void
*  @return	string
*/
function acf_get_browser()
{
}
/**
*  acf_is_ajax
*
*  This function will reutrn true if performing a wp ajax call
*
*  @type	function
*  @date	7/06/2016
*  @since	5.3.8
*
*  @param	void
*  @return	boolean
*/
function acf_is_ajax($action = '')
{
}
/**
*  acf_format_date
*
*  This function will accept a date value and return it in a formatted string
*
*  @type	function
*  @date	16/06/2016
*  @since	5.3.8
*
*  @param	string $value
*  @return	string $format
*/
function acf_format_date($value, $format)
{
}
/**
*  acf_log
*
*  description
*
*  @type	function
*  @date	24/06/2016
*  @since	5.3.8
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_log()
{
}
/**
*  acf_doing
*
*  This function will tell ACF what task it is doing
*
*  @type	function
*  @date	28/06/2016
*  @since	5.3.8
*
*  @param	string $event
*  @param	context (string)
*  @return	void
*/
function acf_doing($event = '', $context = '')
{
}
/**
*  acf_is_doing
*
*  This function can be used to state what ACF is doing, or to check
*
*  @type	function
*  @date	28/06/2016
*  @since	5.3.8
*
*  @param	string $event
*  @param	context (string)
*  @return	boolean
*/
function acf_is_doing($event = '', $context = '')
{
}
/**
*  acf_is_plugin_active
*
*  This function will return true if the ACF plugin is active
*  - May be included within a theme or other plugin
*
*  @type	function
*  @date	13/07/2016
*  @since	5.4.0
*
*  @param	int $basename
*  @return	int $post_id
*/
function acf_is_plugin_active()
{
}
/**
*  acf_get_filters
*
*  Returns the registered filters
*
*  @date	2/2/18
*  @since	5.6.5
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_get_filters()
{
}
/**
*  acf_update_filters
*
*  Updates the registered filters
*
*  @date	2/2/18
*  @since	5.6.5
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_update_filters($filters)
{
}
/**
*  acf_enable_filter
*
*  This function will enable a filter
*
*  @type	function
*  @date	15/07/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_enable_filter($filter = '')
{
}
/**
*  acf_disable_filter
*
*  This function will disable a filter
*
*  @type	function
*  @date	15/07/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_disable_filter($filter = '')
{
}
/**
*  acf_enable_filters
*
*  ACF uses filters to modify field group and field data
*  This function will enable them allowing ACF to interact with all data
*
*  @type	function
*  @date	14/07/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_enable_filters()
{
}
/**
*  acf_disable_filters
*
*  ACF uses filters to modify field group and field data
*  This function will disable them allowing ACF to interact only with raw DB data
*
*  @type	function
*  @date	14/07/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_disable_filters()
{
}
/**
*  acf_is_filter_enabled
*
*  ACF uses filters to modify field group and field data
*  This function will return true if they are enabled
*
*  @type	function
*  @date	14/07/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_is_filter_enabled($filter = '')
{
}
/**
*  acf_send_ajax_results
*
*  This function will print JSON data for a Select2 AJAX query
*
*  @type	function
*  @date	19/07/2016
*  @since	5.4.0
*
*  @param	array $response
*  @return	void
*/
function acf_send_ajax_results($response)
{
}
/**
*  acf_is_sequential_array
*
*  This function will return true if the array contains only numeric keys
*
*  @source	http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential
*  @type	function
*  @date	9/09/2016
*  @since	5.4.0
*
*  @param	array $array
*  @return	boolean
*/
function acf_is_sequential_array($array)
{
}
/**
*  acf_is_associative_array
*
*  This function will return true if the array contains one or more string keys
*
*  @source	http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential
*  @type	function
*  @date	9/09/2016
*  @since	5.4.0
*
*  @param	array $array
*  @return	boolean
*/
function acf_is_associative_array($array)
{
}
/**
*  acf_add_array_key_prefix
*
*  This function will add a prefix to all array keys
*  Useful to preserve numeric keys when performing array_multisort
*
*  @type	function
*  @date	15/09/2016
*  @since	5.4.0
*
*  @param	array $array
*  @param	string $prefix
*  @return	array
*/
function acf_add_array_key_prefix($array, $prefix)
{
}
/**
*  acf_remove_array_key_prefix
*
*  This function will remove a prefix to all array keys
*  Useful to preserve numeric keys when performing array_multisort
*
*  @type	function
*  @date	15/09/2016
*  @since	5.4.0
*
*  @param	array $array
*  @param	string $prefix
*  @return	array
*/
function acf_remove_array_key_prefix($array, $prefix)
{
}
/**
*  acf_strip_protocol
*
*  This function will remove the proticol from a url 
*  Used to allow licences to remain active if a site is switched to https 
*
*  @type	function
*  @date	10/01/2017
*  @since	5.5.4
*  @author	Aaron 
*
*  @param	string $url
*  @return	string 
*/
function acf_strip_protocol($url)
{
}
/**
*  acf_connect_attachment_to_post
*
*  This function will connect an attacment (image etc) to the post 
*  Used to connect attachements uploaded directly to media that have not been attaced to a post
*
*  @type	function
*  @date	11/01/2017
*  @since	5.5.4
*
*  @param	int $attachment_id
*  @param	int $post_id
*  @return	boolean 
*/
function acf_connect_attachment_to_post($attachment_id = 0, $post_id = 0)
{
}
/**
*  acf_encrypt
*
*  This function will encrypt a string using PHP
*  https://bhoover.com/using-php-openssl_encrypt-openssl_decrypt-encrypt-decrypt-data/
*
*  @type	function
*  @date	27/2/17
*  @since	5.5.8
*
*  @param	string $data
*  @return	string
*/
function acf_encrypt($data = '')
{
}
/**
*  acf_decrypt
*
*  This function will decrypt an encrypted string using PHP
*  https://bhoover.com/using-php-openssl_encrypt-openssl_decrypt-encrypt-decrypt-data/
*
*  @type	function
*  @date	27/2/17
*  @since	5.5.8
*
*  @param	string $data
*  @return	string
*/
function acf_decrypt($data = '')
{
}
/**
*  acf_get_post_templates
*
*  This function will return an array of all post templates (including parent theme templates)
*
*  @type	function
*  @date	29/8/17
*  @since	5.6.2
*
*  @param	void
*  @return	array
*/
function acf_get_post_templates()
{
}
/**
*  acf_parse_markdown
*
*  A very basic regex-based Markdown parser function based off [slimdown](https://gist.github.com/jbroadway/2836900).
*
*  @date	6/8/18
*  @since	5.7.2
*
*  @param	string $text The string to parse.
*  @return	string
*/
function acf_parse_markdown($text = '')
{
}
/**
*  acf_esc_html
*
*  This function will encode <script> tags for safe output
*
*  @type	function
*  @date	25/6/17
*  @since	5.6.0
*
*  @param	string (string)
*  @return	string
*/
function acf_esc_html($string = '')
{
}
/**
*  acf_clean_atts
*
*  This function will remove empty attributes
*
*  @date	3/10/17
*  @since	5.6.3
*
*  @param	array $atts
*  @return	array
*/
function acf_clean_atts($atts = array())
{
}
/**
*  acf_get_atts
*
*  This function will return an array of HTML attributes
*
*  @date	2/10/17
*  @since	5.6.3
*
*  @param	void
*  @return	void
*/
/**
function acf_get_atts( $array, $keys ) {
	
	// vars
	$atts = array();
	
	
	// append attributes
	foreach( $keys as $k ) {
		if( isset($array[ $k ]) ) $atts[ $k ] = $array[ $k ];
	}
	
	
	// modify special attributes
	foreach( array('readonly', 'disabled', 'required') as $k ) {
		$atts[ $k ] = $atts[ $k ] ? $k : '';
	}
	
	
	// clean up blank attributes
	foreach( $atts as $k => $v ) {
		if( $v === '' ) unset( $atts[ $k ] );
	}
	
	
	// return
	return $atts;
	
}
*/
/**
*  acf_esc_atts
*
*  This function will escape an array of attributes and return as HTML
*
*  @type	function
*  @date	27/6/17
*  @since	5.6.0
*
*  @param	array $atts
*  @return	string
*/
function acf_esc_atts($atts = array())
{
}
/**
*  acf_esc_atts_e
*
*  This function will echo acf_esc_atts
*
*  @type	function
*  @date	27/6/17
*  @since	5.6.0
*
*  @param	array $atts
*  @return	void
*/
function acf_esc_atts_e($atts = array())
{
}
/**
*  acf_get_text_input
*
*  This function will return HTML for a text input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	string
*/
function acf_get_text_input($atts = array())
{
}
/**
*  acf_text_input
*
*  This function will output HTML for a text input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	void
*/
function acf_text_input($atts = array())
{
}
/**
*  acf_get_hidden_input
*
*  This function will return HTML for a hidden input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	string
*/
function acf_get_hidden_input($atts = array())
{
}
/**
*  acf_hidden_input
*
*  This function will output HTML for a generic input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	void
*/
function acf_hidden_input($atts = array())
{
}
/**
*  acf_get_textarea_input
*
*  This function will return HTML for a textarea input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	string
*/
function acf_get_textarea_input($atts = array())
{
}
/**
*  acf_textarea_input
*
*  This function will output HTML for a textarea input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	void
*/
function acf_textarea_input($atts = array())
{
}
/**
*  acf_get_checkbox_input
*
*  This function will return HTML for a checkbox input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	string
*/
function acf_get_checkbox_input($atts = array())
{
}
/**
*  acf_checkbox_input
*
*  This function will output HTML for a checkbox input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	void
*/
function acf_checkbox_input($atts = array())
{
}
/**
*  acf_get_radio_input
*
*  This function will return HTML for a radio input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	string
*/
function acf_get_radio_input($atts = array())
{
}
/**
*  acf_radio_input
*
*  This function will output HTML for a radio input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	void
*/
function acf_radio_input($atts = array())
{
}
/**
*  acf_get_select_input
*
*  This function will return HTML for a select input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	string
*/
function acf_get_select_input($atts = array())
{
}
/**
*  acf_walk_select_input
*
*  This function will return the HTML for a select input's choices
*
*  @type	function
*  @date	27/6/17
*  @since	5.6.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_walk_select_input($choices = array(), $values = array(), $depth = 0)
{
}
/**
*  acf_select_input
*
*  This function will output HTML for a select input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	void
*/
function acf_select_input($atts = array())
{
}
/**
function acf_test_esc_html( $string = '' ) {
	
	$s = '';
	
	
	$time_start = microtime(true);
	$s .= wp_kses_post( $string );
	$s .= ' = ('. (microtime(true) - $time_start) .')';
	
	$s .= '-----';

	
	$time_start = microtime(true);
	$s .= str_replace(array('<script', '</script'), array(htmlspecialchars('<script'), htmlspecialchars('</script')), $string);
	$s .= ' = ('. (microtime(true) - $time_start) .')';
	

	$time_start = microtime(true);
	if( strpos($string, '<script') ) {
		$s .= str_replace(array('<script', '</script'), array(htmlspecialchars('<script'), htmlspecialchars('</script')), $string);
	}
	$s .= ' = ('. (microtime(true) - $time_start) .')';
	
	return $s;
	
}
*/
/**
*  acf_get_file_input
*
*  This function will return HTML for a file input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	string
*/
function acf_get_file_input($atts = array())
{
}
/**
*  acf_file_input
*
*  This function will output HTML for a file input
*
*  @type	function
*  @date	3/02/2014
*  @since	5.0.0
*
*  @param	$atts
*  @return	void
*/
function acf_file_input($atts = array())
{
}
/**
*  acf_esc_attr
*
*  Deprecated since 5.6.0
*
*  @type	function
*  @date	1/10/13
*  @since	5.0.0
*
*  @param	array $atts
*  @return	void
*/
function acf_esc_attr($atts)
{
}
/**
*  acf_esc_attr_e
*
*  Deprecated since 5.6.0
*
*  @type	function
*  @date	1/10/13
*  @since	5.0.0
*
*  @param	array $atts
*  @return	void
*/
function acf_esc_attr_e($atts)
{
}
/**
*  get_field()
*
*  This function will return a custom field value for a specific field name/key + post_id.
*  There is a 3rd parameter to turn on/off formating. This means that an image field will not use 
*  its 'return option' to format the value but return only what was saved in the database
*
*  @type	function
*  @since	3.6
*  @date	29/01/13
*
*  @param	string $selector the field name or key
*  @param	mixed $post_id the post_id of which the value is saved against
*  @param	boolean $format_value whether or not to format the value as described above
*  @return	mixed
*/
function get_field($selector, $post_id = \false, $format_value = \true)
{
}
/**
*  the_field()
*
*  This function is the same as echo get_field().
*
*  @type	function
*  @since	1.0.3
*  @date	29/01/13
*
*  @param	string $selector the field name or key
*  @param	mixed $post_id the post_id of which the value is saved against
*  @return	void
*/
function the_field($selector, $post_id = \false, $format_value = \true)
{
}
/**
*  get_field_object()
*
*  This function will return an array containing all the field data for a given field_name
*
*  @type	function
*  @since	3.6
*  @date	3/02/13
*
*  @param	string $selector the field name or key
*  @param	mixed $post_id the post_id of which the value is saved against
*  @param	boolean $format_value whether or not to format the field value
*  @param	boolean $load_value whether or not to load the field value
*  @return	array $field
*/
function get_field_object($selector, $post_id = \false, $format_value = \true, $load_value = \true)
{
}
/**
*  get_fields()
*
*  This function will return an array containing all the custom field values for a specific post_id.
*  The function is not very elegant and wastes a lot of PHP memory / SQL queries if you are not using all the values.
*
*  @type	function
*  @since	3.6
*  @date	29/01/13
*
*  @param	mixed $post_id the post_id of which the value is saved against
*  @param	boolean $format_value whether or not to format the field value
*  @return	array	associative array where field name => field value
*/
function get_fields($post_id = \false, $format_value = \true)
{
}
/**
*  get_field_objects()
*
*  This function will return an array containing all the custom field objects for a specific post_id.
*  The function is not very elegant and wastes a lot of PHP memory / SQL queries if you are not using all the fields / values.
*
*  @type	function
*  @since	3.6
*  @date	29/01/13
*
*  @param	mixed $post_id the post_id of which the value is saved against
*  @param	boolean $format_value whether or not to format the field value
*  @param	boolean $load_value whether or not to load the field value
*  @return	array	associative array where field name => field
*/
function get_field_objects($post_id = \false, $format_value = \true, $load_value = \true)
{
}
/**
*  have_rows
*
*  This function will instantiate a global variable containing the rows of a repeater or flexible content field,
*  after which, it will determine if another row exists to loop through
*
*  @type	function
*  @date	2/09/13
*  @since	4.3.0
*
*  @param	string $field_name the field name
*  @param	mixed $post_id the post_id of which the value is saved against
*  @return	boolean
*/
function have_rows($selector, $post_id = \false)
{
}
/**
*  the_row
*
*  This function will progress the global repeater or flexible content value 1 row
*
*  @type	function
*  @date	2/09/13
*  @since	4.3.0
*
*  @param	void
*  @return	array the current row data
*/
function the_row($format = \false)
{
}
function get_row($format = \false)
{
}
function get_row_index()
{
}
function the_row_index()
{
}
/**
*  get_row_sub_field
*
*  This function is used inside a 'has_sub_field' while loop to return a sub field object
*
*  @type	function
*  @date	16/05/2016
*  @since	5.3.8
*
*  @param	string $selector
*  @return	array
*/
function get_row_sub_field($selector)
{
}
/**
*  get_row_sub_value
*
*  This function is used inside a 'has_sub_field' while loop to return a sub field value
*
*  @type	function
*  @date	16/05/2016
*  @since	5.3.8
*
*  @param	string $selector
*  @return	mixed
*/
function get_row_sub_value($selector)
{
}
/**
*  reset_rows
*
*  This function will find the current loop and unset it from the global array.
*  To bo used when loop finishes or a break is used
*
*  @type	function
*  @date	26/10/13
*  @since	5.0.0
*
*  @param	boolean $hard_reset completely wipe the global variable, or just unset the active row
*  @return	boolean
*/
function reset_rows()
{
}
/**
*  has_sub_field()
*
*  This function is used inside a while loop to return either true or false (loop again or stop).
*  When using a repeater or flexible content field, it will loop through the rows until 
*  there are none left or a break is detected
*
*  @type	function
*  @since	1.0.3
*  @date	29/01/13
*
*  @param	string $field_name the field name
*  @param	mixed $post_id the post_id of which the value is saved against
*  @return	boolean
*/
function has_sub_field($field_name, $post_id = \false)
{
}
function has_sub_fields($field_name, $post_id = \false)
{
}
/**
*  get_sub_field()
*
*  This function is used inside a 'has_sub_field' while loop to return a sub field value
*
*  @type	function
*  @since	1.0.3
*  @date	29/01/13
*
*  @param	string $field_name the field name
*  @return	mixed
*/
function get_sub_field($selector = '', $format_value = \true)
{
}
/**
*  the_sub_field()
*
*  This function is the same as echo get_sub_field
*
*  @type	function
*  @since	1.0.3
*  @date	29/01/13
*
*  @param	string $field_name the field name
*  @return	void
*/
function the_sub_field($field_name, $format_value = \true)
{
}
/**
*  get_sub_field_object()
*
*  This function is used inside a 'has_sub_field' while loop to return a sub field object
*
*  @type	function
*  @since	3.5.8.1
*  @date	29/01/13
*
*  @param	string $child_name the field name
*  @return	array	
*/
function get_sub_field_object($selector, $format_value = \true, $load_value = \true)
{
}
/**
*  get_row_layout()
*
*  This function will return a string representation of the current row layout within a 'have_rows' loop
*
*  @type	function
*  @since	3.0.6
*  @date	29/01/13
*
*  @param	void
*  @return	string
*/
function get_row_layout()
{
}
/**
*  acf_shortcode()
*
*  This function is used to add basic shortcode support for the ACF plugin
*  eg. [acf field="heading" post_id="123" format_value="1"]
*
*  @type	function
*  @since	1.1.1
*  @date	29/01/13
*
*  @param	string $field the field name or key
*  @param	mixed $post_id the post_id of which the value is saved against
*  @param	boolean $format_value whether or not to format the field value
*  @return	string
*/
function acf_shortcode($atts)
{
}
/**
*  update_field()
*
*  This function will update a value in the database
*
*  @type	function
*  @since	3.1.9
*  @date	29/01/13
*
*  @param	string $selector the field name or key
*  @param	mixed $value the value to save in the database
*  @param	mixed $post_id the post_id of which the value is saved against
*  @return	boolean
*/
function update_field($selector, $value, $post_id = \false)
{
}
/**
*  update_sub_field
*
*  This function will update a value of a sub field in the database
*
*  @type	function
*  @date	2/04/2014
*  @since	5.0.0
*
*  @param	mixed $selector the sub field name or key, or an array of ancestors
*  @param	mixed $value the value to save in the database
*  @param	mixed $post_id the post_id of which the value is saved against
*  @return	boolean
*/
function update_sub_field($selector, $value, $post_id = \false)
{
}
/**
*  delete_field()
*
*  This function will remove a value from the database
*
*  @type	function
*  @since	3.1.9
*  @date	29/01/13
*
*  @param	string $selector the field name or key
*  @param	mixed $post_id the post_id of which the value is saved against
*  @return	boolean
*/
function delete_field($selector, $post_id = \false)
{
}
/**
*  delete_sub_field
*
*  This function will delete a value of a sub field in the database
*
*  @type	function
*  @date	2/04/2014
*  @since	5.0.0
*
*  @param	mixed $selector the sub field name or key, or an array of ancestors
*  @param	mixed $value the value to save in the database
*  @param	mixed $post_id the post_id of which the value is saved against
*  @return	boolean
*/
function delete_sub_field($selector, $post_id = \false)
{
}
/**
*  add_row
*
*  This function will add a row of data to a field
*
*  @type	function
*  @date	16/10/2015
*  @since	5.2.3
*
*  @param	string $selector
*  @param	array $row
*  @param	mixed $post_id
*  @return	boolean
*/
function add_row($selector, $row = \false, $post_id = \false)
{
}
/**
*  add_sub_row
*
*  This function will add a row of data to a field
*
*  @type	function
*  @date	16/10/2015
*  @since	5.2.3
*
*  @param	string $selector
*  @param	array $row
*  @param	mixed $post_id
*  @return	boolean
*/
function add_sub_row($selector, $row = \false, $post_id = \false)
{
}
/**
*  update_row
*
*  This function will update a row of data to a field
*
*  @type	function
*  @date	19/10/2015
*  @since	5.2.3
*
*  @param	string $selector
*  @param	int $i
*  @param	array $row
*  @param	mixed $post_id
*  @return	boolean
*/
function update_row($selector, $i = 1, $row = \false, $post_id = \false)
{
}
/**
*  update_sub_row
*
*  This function will add a row of data to a field
*
*  @type	function
*  @date	16/10/2015
*  @since	5.2.3
*
*  @param	string $selector
*  @param	array $row
*  @param	mixed $post_id
*  @return	boolean
*/
function update_sub_row($selector, $i = 1, $row = \false, $post_id = \false)
{
}
/**
*  delete_row
*
*  This function will delete a row of data from a field
*
*  @type	function
*  @date	19/10/2015
*  @since	5.2.3
*
*  @param	string $selector
*  @param	int $i
*  @param	mixed $post_id
*  @return	boolean
*/
function delete_row($selector, $i = 1, $post_id = \false)
{
}
/**
*  delete_sub_row
*
*  This function will add a row of data to a field
*
*  @type	function
*  @date	16/10/2015
*  @since	5.2.3
*
*  @param	string $selector
*  @param	array $row
*  @param	mixed $post_id
*  @return	boolean
*/
function delete_sub_row($selector, $i = 1, $post_id = \false)
{
}
/**
*  Depreceated Functions
*
*  These functions are outdated
*
*  @type	function
*  @date	4/03/2014
*  @since	1.0.0
*
*  @param	void
*  @return	void
*/
function create_field($field)
{
}
function render_field($field)
{
}
function reset_the_repeater_field()
{
}
function the_repeater_field($field_name, $post_id = \false)
{
}
function the_flexible_field($field_name, $post_id = \false)
{
}
function acf_filter_post_id($post_id)
{
}
/**
*  acf_get_taxonomies
*
*  Returns an array of taxonomy names.
*
*  @date	7/10/13
*  @since	5.0.0
*
*  @param	array $args An array of args used in the get_taxonomies() function.
*  @return	array An array of taxonomy names.
*/
function acf_get_taxonomies($args = array())
{
}
/**
*  acf_get_taxonomy_labels
*
*  Returns an array of taxonomies in the format "name => label" for use in a select field.
*
*  @date	3/8/18
*  @since	5.7.2
*
*  @param	array $taxonomies Optional. An array of specific taxonomies to return.
*  @return	array
*/
function acf_get_taxonomy_labels($taxonomies = array())
{
}
/**
*  acf_get_grouped_terms
*
*  Returns an array of terms for the given query $args and groups by taxonomy name.
*
*  @date	2/8/18
*  @since	5.7.2
*
*  @param	array $args An array of args used in the get_terms() function.
*  @return	array
*/
function acf_get_grouped_terms($args)
{
}
/**
*  _acf_terms_clauses
*
*  Used in the 'terms_clauses' filter to order terms by taxonomy name.
*
*  @date	2/8/18
*  @since	5.7.2
*
*  @param	array $pieces     Terms query SQL clauses.
*  @param	array $taxonomies An array of taxonomies.
*  @param	array $args       An array of terms query arguments.
*  @return	array $pieces
*/
function _acf_terms_clauses($pieces, $taxonomies, $args)
{
}
/**
*  acf_get_pretty_taxonomies
*
*  Deprecated in favor of acf_get_taxonomy_labels() function.
*
*  @date		7/10/13
*  @since		5.0.0
*  @deprecated	5.7.2
*/
function acf_get_pretty_taxonomies($taxonomies = array())
{
}
/**
*  acf_get_term
*
*  Similar to get_term() but with some extra functionality.
*
*  @date	19/8/18
*  @since	5.7.3
*
*  @param	mixed $term_id The term ID or a string of "slug:taxonomy".
*  @param	string $taxonomy The taxonomyname.
*  @return	WP_Term
*/
function acf_get_term($term_id, $taxonomy = '')
{
}
/**
*  acf_get_metadata
*
*  This function will get a value from the DB
*
*  @type	function
*  @date	16/10/2015
*  @since	5.2.3
*
*  @param	mixed $post_id
*  @param	string $name
*  @param	boolean $hidden
*  @return	mixed $return
*/
function acf_get_metadata($post_id = 0, $name = '', $hidden = \false)
{
}
/**
*  acf_update_metadata
*
*  This function will update a value from the DB
*
*  @type	function
*  @date	16/10/2015
*  @since	5.2.3
*
*  @param	mixed $post_id
*  @param	string $name
*  @param	mixed $value
*  @param	boolean $hidden
*  @return	boolean $return
*/
function acf_update_metadata($post_id = 0, $name = '', $value = '', $hidden = \false)
{
}
/**
*  acf_delete_metadata
*
*  This function will delete a value from the DB
*
*  @type	function
*  @date	16/10/2015
*  @since	5.2.3
*
*  @param	mixed $post_id
*  @param	string $name
*  @param	boolean $hidden
*  @return	boolean $return
*/
function acf_delete_metadata($post_id = 0, $name = '', $hidden = \false)
{
}
/**
*  acf_update_option
*
*  This function is a wrapper for the WP update_option but provides logic for a 'no' autoload
*
*  @type	function
*  @date	4/01/2014
*  @since	5.0.0
*
*  @param	string $option
*  @param	mixed $value
*  @param	autoload (mixed)
*  @return	boolean
*/
function acf_update_option($option = '', $value = '', $autoload = \null)
{
}
/**
*  acf_get_reference
*
*  Finds the field key for a given field name and post_id.
*
*  @date	26/1/18
*  @since	5.6.5
*
*  @param	string	$field_name	The name of the field. eg 'sub_heading'
*  @param	mixed	$post_id	The post_id of which the value is saved against
*  @return	string	$reference	The field key
*/
function acf_get_reference($field_name, $post_id)
{
}
// deprecated in 5.6.8
function acf_get_field_reference($field_name, $post_id)
{
}
/**
*  acf_get_value
*
*  This function will load in a field's value
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	int $post_id
*  @param	array $field
*  @return	mixed
*/
function acf_get_value($post_id = 0, $field)
{
}
/**
*  acf_format_value
*
*  This function will format the value for front end use
*
*  @type	function
*  @date	3/07/2014
*  @since	5.0.0
*
*  @param	mixed $value
*  @param	mixed $post_id
*  @param	array $field
*  @return	$value
*/
function acf_format_value($value, $post_id, $field)
{
}
/**
*  acf_update_value
*
*  updates a value into the db
*
*  @type	action
*  @date	23/01/13
*
*  @param	mixed $value
*  @param	mixed $post_id
*  @param	array $field
*  @return	boolean
*/
function acf_update_value($value = \null, $post_id = 0, $field)
{
}
/**
*  acf_delete_value
*
*  This function will delete a value from the database
*
*  @type	function
*  @date	28/09/13
*  @since	5.0.0
*
*  @param	mixed $post_id
*  @param	array $field
*  @return	boolean
*/
function acf_delete_value($post_id = 0, $field)
{
}
/**
*  acf_copy_postmeta
*
*  This function will copy postmeta from one post to another.
*  Very useful for saving and restoring revisions
*
*  @type	function
*  @date	25/06/2016
*  @since	5.3.8
*
*  @param	int $from_post_id
*  @param	int $to_post_id
*  @return	void
*/
function acf_copy_postmeta($from_post_id, $to_post_id)
{
}
/**
*  acf_preview_value
*
*  This function will return a human freindly 'preview' for a given field value
*
*  @type	function
*  @date	24/10/16
*  @since	5.5.0
*
*  @param	mixed $value
*  @param	mixed $post_id
*  @param	array $field
*  @return	string
*/
function acf_preview_value($value, $post_id, $field)
{
}
// class_exists check
/**
*  acf_localize_text
*
*  description
*
*  @date	13/4/18
*  @since	5.6.9
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_localize_text($text)
{
}
/**
*  acf_localize_data
*
*  description
*
*  @date	13/4/18
*  @since	5.6.9
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_localize_data($data)
{
}
/**
*  acf_enqueue_scripts
*
*  
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_enqueue_scripts($args = array())
{
}
/**
*  acf_enqueue_uploader
*
*  This function will render a WP WYSIWYG and enqueue media
*
*  @type	function
*  @date	27/10/2014
*  @since	5.0.9
*
*  @param	void
*  @return	void
*/
function acf_enqueue_uploader()
{
}
// class_exists check
/**
*  acf_is_cache_active
*
*  alias of acf()->cache->is_active()
*
*  @type	function
*  @date	26/6/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_is_cache_active()
{
}
/**
*  acf_disable_cache
*
*  alias of acf()->cache->disable()
*
*  @type	function
*  @date	26/6/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_disable_cache()
{
}
/**
*  acf_enable_cache
*
*  alias of acf()->cache->enable()
*
*  @type	function
*  @date	26/6/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_enable_cache()
{
}
/**
*  acf_isset_cache
*
*  alias of acf()->cache->isset_cache()
*
*  @type	function
*  @date	30/06/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_isset_cache($key = '')
{
}
/**
*  acf_get_cache
*
*  alias of acf()->cache->get_cache()
*
*  @type	function
*  @date	30/06/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_get_cache($key = '')
{
}
/**
*  acf_set_cache
*
*  alias of acf()->cache->set_cache()
*
*  @type	function
*  @date	30/06/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_set_cache($key = '', $data)
{
}
/**
*  acf_set_cache_reference
*
*  alias of acf()->cache->set_cache_reference()
*
*  @type	function
*  @date	30/06/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_set_cache_reference($key = '', $reference = '')
{
}
/**
*  acf_delete_cache
*
*  alias of acf()->cache->delete_cache()
*
*  @type	function
*  @date	30/06/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_delete_cache($key = '')
{
}
// class_exists check
/**
*  acf_register_field_type
*
*  alias of acf()->fields->register_field_type()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_register_field_type($class)
{
}
/**
*  acf_register_field_type_info
*
*  alias of acf()->fields->register_field_type_info()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_register_field_type_info($info)
{
}
/**
*  acf_get_field_type
*
*  alias of acf()->fields->get_field_type()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_get_field_type($name)
{
}
/**
*  acf_get_field_types
*
*  alias of acf()->fields->get_field_types()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_get_field_types($args = array())
{
}
/**
*  acf_get_field_types_info
*
*  Returns an array containing information about each field type
*
*  @date	18/6/18
*  @since	5.6.9
*
*  @param	type $var Description. Default.
*  @return	type Description.
*/
function acf_get_field_types_info($args = array())
{
}
/**
*  acf_is_field_type
*
*  alias of acf()->fields->is_field_type()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_is_field_type($name = '')
{
}
/**
*  acf_get_field_type_prop
*
*  This function will return a field type's property
*
*  @type	function
*  @date	1/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	array
*/
function acf_get_field_type_prop($name = '', $prop = '')
{
}
/**
*  acf_get_field_type_label
*
*  This function will return the label of a field type
*
*  @type	function
*  @date	1/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	array
*/
function acf_get_field_type_label($name = '')
{
}
/**
*  acf_field_type_exists (deprecated)
*
*  deprecated in favour of acf_is_field_type()
*
*  @type	function
*  @date	1/10/13
*  @since	5.0.0
*
*  @param	string $type
*  @return	boolean
*/
function acf_field_type_exists($type = '')
{
}
/**
*  acf_get_grouped_field_types
*
*  Returns an multi-dimentional array of field types "name => label" grouped by category
*
*  @type	function
*  @date	1/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	array
*/
function acf_get_grouped_field_types()
{
}
// class_exists check
/**
*  acf_get_form_data
*
*  alias of acf()->form->get_data()
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_get_form_data($name = '')
{
}
/**
*  acf_set_form_data
*
*  alias of acf()->form->set_data()
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_set_form_data($data = array())
{
}
/**
*  acf_form_data
*
*  description
*
*  @type	function
*  @date	15/10/13
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_form_data($data = array())
{
}
/**
*  acf_save_post
*
*  description
*
*  @type	function
*  @date	15/10/13
*  @since	5.0.0
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_save_post($post_id = 0, $values = \null)
{
}
// class_exists check
/**
*  Functions
*
*  alias of acf()->form->functions
*
*  @type	function
*  @date	11/06/2014
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_form_head()
{
}
function acf_form($args = array())
{
}
function acf_get_form($id = '')
{
}
function acf_register_form($args)
{
}
// class_exists check
/**
*  acf_write_json_field_group
*
*  This function will save a field group to a json file within the current theme
*
*  @type	function
*  @date	5/12/2014
*  @since	5.1.5
*
*  @param	array $field_group
*  @return	boolean
*/
function acf_write_json_field_group($field_group)
{
}
/**
*  acf_delete_json_field_group
*
*  This function will delete a json field group file
*
*  @type	function
*  @date	5/12/2014
*  @since	5.1.5
*
*  @param	string $key
*  @return	boolean
*/
function acf_delete_json_field_group($key)
{
}
// class_exists check
/**
*  Helpers
*
*  alias of acf()->local->functions
*
*  @type	function
*  @date	11/06/2014
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_local()
{
}
function acf_disable_local()
{
}
function acf_enable_local()
{
}
function acf_reset_local()
{
}
// field group
function acf_add_local_field_group($field_group)
{
}
function acf_remove_local_field_group($key = '')
{
}
function acf_is_local_field_group($key = '')
{
}
function acf_get_local_field_group($key = '')
{
}
// field groups
function acf_count_local_field_groups()
{
}
function acf_have_local_field_groups()
{
}
function acf_get_local_field_groups()
{
}
// field
function acf_add_local_field($field)
{
}
function acf_remove_local_field($key = '')
{
}
function acf_is_local_field($key = '')
{
}
function acf_is_local_field_key($key = '')
{
}
function acf_is_local_field_name($name = '')
{
}
function acf_get_local_field($key = '')
{
}
// fields
function acf_count_local_fields($key = '')
{
}
function acf_have_local_fields($key = '')
{
}
function acf_get_local_fields($key = '')
{
}
function acf_remove_local_fields($key = '')
{
}
// deprecated
function register_field_group($field_group)
{
}
// class_exists check
/**
*  acf_register_location_rule
*
*  alias of acf()->locations->register_location()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_register_location_rule($class)
{
}
/**
*  acf_get_location_rule
*
*  alias of acf()->locations->get_location()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_get_location_rule($name)
{
}
/**
*  acf_get_location_rule_types
*
*  alias of acf()->locations->get_locations()
*
*  @type	function
*  @date	31/5/17
*  @since	5.6.0
*
*  @param	void
*  @return	void
*/
function acf_get_location_rule_types()
{
}
/**
*  acf_get_valid_location_rule
*
*  This function will return a valid location rule array
*
*  @type	function
*  @date	30/5/17
*  @since	5.6.0
*
*  @param	array $rule
*  @return	array
*/
function acf_get_valid_location_rule($rule)
{
}
/**
*  acf_get_location_rule_operators
*
*  This function will return the operators for a given rule
*
*  @type	function
*  @date	30/5/17
*  @since	5.6.0
*
*  @param	array $rule
*  @return	array
*/
function acf_get_location_rule_operators($rule)
{
}
/**
*  acf_get_location_rule_values
*
*  This function will return the values for a given rule 
*
*  @type	function
*  @date	30/5/17
*  @since	5.6.0
*
*  @param	array $rule
*  @return	array
*/
function acf_get_location_rule_values($rule)
{
}
/**
*  acf_match_location_rule
*
*  This function will match a given rule to the $screen
*
*  @type	function
*  @date	30/5/17
*  @since	5.6.0
*
*  @param	array $rule
*  @param	array $screen
*  @return	boolean
*/
function acf_match_location_rule($rule, $screen)
{
}
/**
*  acf_get_location_screen
*
*  This function will return a valid location screen array
*
*  @type	function
*  @date	30/5/17
*  @since	5.6.0
*
*  @param	array $screen
*  @param	array $field_group
*  @return	array
*/
function acf_get_location_screen($screen, $field_group)
{
}
// class_exists check
/**
*  acf_add_loop
*
*  alias of acf()->loop->add_loop()
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_add_loop($loop = array())
{
}
/**
*  acf_update_loop
*
*  alias of acf()->loop->update_loop()
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_update_loop($i = 'active', $key = \null, $value = \null)
{
}
/**
*  acf_get_loop
*
*  alias of acf()->loop->get_loop()
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_get_loop($i = 'active', $key = \null)
{
}
/**
*  acf_remove_loop
*
*  alias of acf()->loop->remove_loop()
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_remove_loop($i = 'active')
{
}
// class_exists check
/**
*  acf_save_post_revision
*
*  This function will copy meta from a post to it's latest revision
*
*  @type	function
*  @date	26/09/2016
*  @since	5.4.0
*
*  @param	int $post_id
*  @return	void
*/
function acf_save_post_revision($post_id = 0)
{
}
/**
*  acf_get_post_latest_revision
*
*  This function will return the latest revision for a given post
*
*  @type	function
*  @date	25/06/2016
*  @since	5.3.8
*
*  @param	int $post_id
*  @return	int $post_id
*/
function acf_get_post_latest_revision($post_id)
{
}
/**
*  acf_updates
*
*  The main function responsible for returning the one true acf_updates instance to functions everywhere.
*  Use this function like you would a global variable, except without needing to declare the global.
*
*  Example: <?php $acf_updates = acf_updates(); ?>
*
*  @date	9/4/17
*  @since	5.5.12
*
*  @param	void
*  @return	object
*/
function acf_updates()
{
}
/**
*  acf_register_plugin_update
*
*  Alias of acf_updates()->add_plugin().
*
*  @type	function
*  @date	12/4/17
*  @since	5.5.10
*
*  @param	array $plugin
*  @return	void
*/
function acf_register_plugin_update($plugin)
{
}
// class_exists check
/**
*  Public functions
*
*  alias of acf()->validation->function()
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_add_validation_error($input, $message = '')
{
}
function acf_get_validation_errors()
{
}
function acf_get_validation_error()
{
}
function acf_reset_validation_errors()
{
}
/**
*  acf_validate_save_post
*
*  This function will validate $_POST data and add errors
*
*  @type	function
*  @date	25/11/2013
*  @since	5.0.0
*
*  @param	boolean $show_errors if true, errors will be shown via a wp_die screen
*  @return	boolean
*/
function acf_validate_save_post($show_errors = \false)
{
}
/**
*  acf_validate_values
*
*  This function will validate an array of field values
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	values (array)
*  @param	string $input_prefix
*  @return	void
*/
function acf_validate_values($values, $input_prefix = '')
{
}
/**
*  acf_validate_value
*
*  This function will validate a field's value
*
*  @type	function
*  @date	6/10/13
*  @since	5.0.0
*
*  @param	void
*  @return	void
*/
function acf_validate_value($value, $field, $input)
{
}
/**
*  acf_options_page
*
*  This function will return the options page instance
*
*  @type	function
*  @date	9/6/17
*  @since	5.6.0
*
*  @param	void
*  @return	object
*/
function acf_options_page()
{
}
function acf_add_options_page($page = '')
{
}
function acf_add_options_sub_page($page = '')
{
}
function acf_update_options_page($slug = '', $data = array())
{
}
function acf_get_options_page($slug)
{
}
function acf_get_options_pages()
{
}
function acf_set_options_page_title($title = 'Options')
{
}
function acf_set_options_page_menu($title = 'Options')
{
}
function acf_set_options_page_capability($capability = 'edit_posts')
{
}
function register_options_page($page = '')
{
}
// class_exists check
/**
*  acf_pro_get_license
*
*  This function will return the license
*
*  @type	function
*  @date	20/09/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_pro_get_license()
{
}
/**
*  acf_pro_get_license_key
*
*  This function will return the license key
*
*  @type	function
*  @date	20/09/2016
*  @since	5.4.0
*
*  @param	void
*  @return	void
*/
function acf_pro_get_license_key()
{
}
/**
*  acf_pro_update_license
*
*  This function will update the DB license
*
*  @type	function
*  @date	20/09/2016
*  @since	5.4.0
*
*  @param	string $key
*  @return	void
*/
function acf_pro_update_license($key = '')
{
}