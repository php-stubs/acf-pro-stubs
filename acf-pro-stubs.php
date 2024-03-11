<?php
/**
 * Generated stub declarations for ACF PRO
 * @see https://www.advancedcustomfields.com/
 * @see https://github.com/php-stubs/acf-pro-stubs
 */

/**
 * The main ACF class
 */
#[\AllowDynamicProperties]
class ACF
{
    /**
     * The plugin version number.
     *
     * @var string
     */
    public $version = '6.2.7';
    /**
     * The plugin settings array.
     *
     * @var array
     */
    public $settings = array();
    /**
     * The plugin data array.
     *
     * @var array
     */
    public $data = array();
    /**
     * Storage for class instances.
     *
     * @var array
     */
    public $instances = array();
    /**
     * A dummy constructor to ensure ACF is only setup once.
     *
     * @date    23/06/12
     * @since   5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Sets up the ACF plugin.
     *
     * @date    28/09/13
     * @since   5.0.0
     */
    public function initialize()
    {
    }
    /**
     * Completes the setup process on "init" of earlier.
     *
     * @date    28/09/13
     * @since   5.0.0
     * @phpstan-return void
     */
    public function init()
    {
    }
    /**
     * Registers the ACF post types.
     *
     * @date    22/10/2015
     * @since   5.3.2
     */
    public function register_post_types()
    {
    }
    /**
     * Registers the ACF post statuses.
     *
     * @date    22/10/2015
     * @since   5.3.2
     */
    public function register_post_status()
    {
    }
    /**
     * Checks if another version of ACF/ACF PRO is active and deactivates it.
     * Hooked on `activated_plugin` so other plugin is deactivated when current plugin is activated.
     *
     * @param string $plugin The plugin being activated.
     * @phpstan-return void
     */
    public function deactivate_other_instances($plugin)
    {
    }
    /**
     * Displays a notice when either ACF or ACF PRO is automatically deactivated.
     * @phpstan-return void
     */
    public function plugin_deactivated_notice()
    {
    }
    /**
     * Filters the $where clause allowing for custom WP_Query args.
     *
     * @date    31/8/19
     * @since   5.8.1
     *
     * @param  string   $where    The WHERE clause.
     * @param  WP_Query $wp_query The query object.
     * @return string
     */
    public function posts_where($where, $wp_query)
    {
    }
    /**
     * Defines a constant if doesnt already exist.
     *
     * @date    3/5/17
     * @since   5.5.13
     *
     * @param   string $name  The constant name.
     * @param   mixed  $value The constant value.
     * @return  void
     */
    public function define($name, $value = \true)
    {
    }
    /**
     * Returns true if a setting exists for this name.
     *
     * @date    2/2/18
     * @since   5.6.5
     *
     * @param   string $name The setting name.
     * @return  boolean
     */
    public function has_setting($name)
    {
    }
    /**
     * Returns a setting or null if doesn't exist.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   string $name The setting name.
     * @return  mixed
     */
    public function get_setting($name)
    {
    }
    /**
     * Updates a setting for the given name and value.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   string $name  The setting name.
     * @param   mixed  $value The setting value.
     * @return  true
     */
    public function update_setting($name, $value)
    {
    }
    /**
     * Returns data or null if doesn't exist.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   string $name The data name.
     * @return  mixed
     */
    public function get_data($name)
    {
    }
    /**
     * Sets data for the given name and value.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   string $name  The data name.
     * @param   mixed  $value The data value.
     * @return  void
     */
    public function set_data($name, $value)
    {
    }
    /**
     * Returns an instance or null if doesn't exist.
     *
     * @date    13/2/18
     * @since   5.6.9
     *
     * @param   string $class The instance class name.
     * @return  object
     */
    public function get_instance($class)
    {
    }
    /**
     * Creates and stores an instance of the given class.
     *
     * @date    13/2/18
     * @since   5.6.9
     *
     * @param   string $class The instance class name.
     * @return  object
     */
    public function new_instance($class)
    {
    }
    /**
     * Magic __isset method for backwards compatibility.
     *
     * @date    24/4/20
     * @since   5.9.0
     *
     * @param   string $key Key name.
     * @return  boolean
     */
    public function __isset($key)
    {
    }
    /**
     * Magic __get method for backwards compatibility.
     *
     * @date    24/4/20
     * @since   5.9.0
     *
     * @param   string $key Key name.
     * @return  mixed
     */
    public function __get($key)
    {
    }
    /**
     * Plugin Activation Hook
     *
     * @since 6.2.6
     */
    public function acf_plugin_activated()
    {
    }
}
class ACF_Admin_Internal_Post_Type_List
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = '';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = '';
    /**
     * Array of post objects available for sync.
     *
     * @since 5.9.0
     * @var array
     */
    public $sync = array();
    /**
     * The current view (post_status).
     *
     * @since 5.9.0
     * @var string
     */
    public $view = '';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = '';
    /**
     * If this is a pro feature or not.
     *
     * @var boolean
     */
    public $is_pro_feature = \false;
    /**
     * Constructs the class.
     */
    public function __construct()
    {
    }
    /**
     * Add any menu items required for post types.
     *
     * @since 6.1
     */
    public function admin_menu()
    {
    }
    /**
     * Returns the admin URL for the current post type edit page.
     *
     * @date    27/3/20
     * @since   5.9.0
     *
     * @param   string $params Extra URL params.
     * @return  string
     */
    public function get_admin_url($params = '')
    {
    }
    /**
     * Returns the post type admin URL taking into account the current view.
     *
     * @date    27/3/20
     * @since   5.9.0
     *
     * @param   string $params Extra URL params.
     * @return  string
     */
    public function get_current_admin_url($params = '')
    {
    }
    /**
     * Constructor for all ACF internal post type admin list pages.
     *
     * @since   5.0.0
     * @phpstan-return void
     */
    public function current_screen()
    {
    }
    /**
     * Sets up the field groups ready for sync.
     *
     * @since   5.9.0
     */
    public function setup_sync()
    {
    }
    /**
     * Enqueues admin scripts.
     *
     * @since   5.9.0
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Modifies the admin body class.
     *
     * @date    18/4/20
     * @since   5.9.0
     *
     * @param string $classes Space-separated list of CSS classes.
     * @return string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * Returns the disabled post state HTML.
     *
     * @since 5.9.0
     *
     * @return string
     */
    public function get_disabled_post_state()
    {
    }
    /**
     * Returns the registration error state.
     *
     * @since 6.1
     *
     * @return string
     */
    public function get_registration_error_state()
    {
    }
    /**
     * Adds the "disabled" post state for the admin table title.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param array   $post_states An array of post display states.
     * @param WP_Post $post        The current post object.
     * @return array
     */
    public function display_post_states($post_states, $post)
    {
    }
    /**
     * Get the HTML for when there are no post objects found.
     *
     * @since 6.0.0
     *
     * @return string
     */
    public function get_not_found_html()
    {
    }
    /**
     * Customizes the admin table columns.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $_columns The columns array.
     * @return  array
     */
    public function admin_table_columns($_columns)
    {
    }
    /**
     * Renders the admin table column HTML
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   string  $column_name The name of the column to display.
     * @param   integer $post_id     The current post ID.
     * @return  void
     */
    public function admin_table_columns_html($column_name, $post_id)
    {
    }
    /**
     * Renders a specific admin table column.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param string $column_name The name of the column to display.
     * @param array  $post        The main ACF post array.
     * @return void
     */
    public function render_admin_table_column($column_name, $post)
    {
    }
    /**
     * Returns a human-readable file location.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param   string $file The full file path.
     * @return  string
     */
    public function get_human_readable_file_location($file)
    {
    }
    /**
     * Displays the local JSON status of an ACF post.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param array $post The main ACF post array.
     * @return void
     */
    public function render_admin_table_column_local_status($post)
    {
    }
    /**
     * Customizes the page row actions visible on hover.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   array   $actions The array of actions HTML.
     * @param   WP_Post $post    The post.
     * @return  array
     */
    public function page_row_actions($actions, $post)
    {
    }
    /**
     * Modifies the admin table bulk actions dropdown.
     *
     * @date    15/4/20
     * @since   5.9.0
     *
     * @param   array $actions The actions array.
     * @return  array
     */
    public function admin_table_bulk_actions($actions)
    {
    }
    /**
     * Gets the translated action notice text for list table actions (activate, deactivate, sync, etc.).
     *
     * @since 6.1
     *
     * @param string  $action The action being performed.
     * @param integer $count  The number of items the action was performed on.
     * @return string
     */
    public function get_action_notice_text($action, $count = 1)
    {
    }
    /**
     * Checks for the custom "Activate" bulk action.
     *
     * @since 6.0
     * @phpstan-return void
     */
    public function check_activate()
    {
    }
    /**
     * Checks for the custom "Deactivate" bulk action.
     *
     * @since 6.0
     * @phpstan-return void
     */
    public function check_deactivate()
    {
    }
    /**
     * Checks for the custom "duplicate" action.
     *
     * @since   5.9.0
     * @phpstan-return void
     */
    public function check_duplicate()
    {
    }
    /**
     * Checks for the custom "acfsync" action.
     *
     * @since   5.9.0
     * @phpstan-return void
     */
    public function check_sync()
    {
    }
    /**
     * Customizes the admin table subnav.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param   array $views The available views.
     * @return  array
     */
    public function admin_table_views($views)
    {
    }
    /**
     * Prints scripts into the admin footer.
     *
     * @since   5.9.0
     */
    public function admin_footer()
    {
    }
    /**
     * Customizes the admin table HTML when viewing "sync" post_status.
     *
     * @since   5.9.0
     */
    public function admin_footer__sync()
    {
    }
    /**
     * Fires when trashing an internal post type.
     *
     * @since 5.0.0
     *
     * @param integer $post_id The post ID.
     */
    public function trashed_post($post_id)
    {
    }
    /**
     * Fires when untrashing an internal post type.
     *
     * @date    8/01/2014
     * @since   5.0.0
     *
     * @param   integer $post_id The post ID.
     * @return  void
     */
    public function untrashed_post($post_id)
    {
    }
    /**
     * Fires when deleting an internal post type.
     *
     * @date    8/01/2014
     * @since   5.0.0
     *
     * @param   integer $post_id The post ID.
     * @return  void
     */
    public function deleted_post($post_id)
    {
    }
}
/**
 * ACF Internal Post Type class.
 *
 * Adds logic to the edit page for ACF internal post types.
 */
class ACF_Admin_Internal_Post_Type
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = '';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = '';
    /**
     * Constructs the class.
     */
    public function __construct()
    {
    }
    /**
     * Prevents the block editor from loading when editing an ACF field group.
     *
     * @since   5.8.0
     *
     * @param boolean $use_block_editor Whether the post type can be edited or not. Default true.
     * @param string  $post_type        The post type being checked.
     * @return boolean
     */
    public function use_block_editor_for_post_type($use_block_editor, $post_type)
    {
    }
    /**
     * This function will customize the message shown when editing a field group
     *
     * @since 5.0.0
     *
     * @param array $messages Post type messages.
     * @return array
     */
    public function post_updated_messages($messages)
    {
    }
    /**
     * This function is fired when loading the admin page before HTML has been rendered.
     *
     * @since 5.0.0
     * @phpstan-return void
     */
    public function current_screen()
    {
    }
    /**
     * Modifies the admin body class.
     *
     * @since 6.0.0
     *
     * @param string $classes Space-separated list of CSS classes.
     * @return string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * Enqueues any scripts necessary for internal post type.
     *
     * @since 5.0.0
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Set up functionality for the field group edit page.
     *
     * @since 3.1.8
     */
    public function admin_head()
    {
    }
    /**
     * Adds extra HTML to the acf form data element.
     *
     * @since 5.3.8
     *
     * @param array $args Arguments array to pass through to action.
     * @return void
     */
    public function form_data($args)
    {
    }
    /**
     * Admin footer third party hook support
     *
     * @since 5.3.2
     */
    public function admin_footer()
    {
    }
    /**
     * This function will append extra l10n strings to the acf JS object
     *
     * @since   5.3.8
     *
     * @param array $l10n The array of translated strings.
     * @return array $l10n
     */
    public function admin_l10n($l10n)
    {
    }
    /**
     * Ran during the `save_post` hook to verify that the post should be saved.
     *
     * @since 6.1
     *
     * @param integer $post_id The ID of the post being saved.
     * @param WP_Post $post    The post object.
     * @return boolean
     */
    public function verify_save_post($post_id, $post)
    {
    }
    /**
     * Powers the modal for linking field groups to newly-created CPTs/taxonomies.
     *
     * @since 6.1
     * @phpstan-return never
     */
    public function ajax_link_field_groups()
    {
    }
}
#[\AllowDynamicProperties]
class ACF_Data
{
    /** @var string Unique identifier. */
    var $cid = '';
    /** @var array Storage for data. */
    var $data = array();
    /** @var array Storage for data aliases. */
    var $aliases = array();
    /** @var boolean Enables unique data per site. */
    var $multisite = \false;
    /**
     * __construct
     *
     * Sets up the class functionality.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   array $data Optional data to set.
     * @return  void
     */
    function __construct($data = \false)
    {
    }
    /**
     * initialize
     *
     * Called during constructor to setup class functionality.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * prop
     *
     * Sets a property for the given name and returns $this for chaining.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   string|array $name  The data name or an array of data.
     * @param   mixed          $value The data value.
     * @return  ACF_Data
     */
    function prop($name = '', $value = \null)
    {
    }
    /**
     * _key
     *
     * Returns a key for the given name allowing aliasses to work.
     *
     * @date    18/1/19
     * @since   5.7.10
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function _key($name = '')
    {
    }
    /**
     * has
     *
     * Returns true if this has data for the given name.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   string $name The data name.
     * @return  boolean
     */
    function has($name = '')
    {
    }
    /**
     * is
     *
     * Similar to has() but does not check aliases.
     *
     * @date    7/2/19
     * @since   5.7.11
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function is($key = '')
    {
    }
    /**
     * get
     *
     * Returns data for the given name of null if doesn't exist.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   string $name The data name.
     * @return  mixed
     */
    function get($name = \false)
    {
    }
    /**
     * get_data
     *
     * Returns an array of all data.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   void
     * @return  array
     */
    function get_data()
    {
    }
    /**
     * set
     *
     * Sets data for the given name and returns $this for chaining.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   string|array $name  The data name or an array of data.
     * @param   mixed          $value The data value.
     * @return  ACF_Data
     */
    function set($name = '', $value = \null)
    {
    }
    /**
     * append
     *
     * Appends data for the given name and returns $this for chaining.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   mixed $value The data value.
     * @return  ACF_Data
     */
    function append($value = \null)
    {
    }
    /**
     * remove
     *
     * Removes data for the given name.
     *
     * @date    9/1/19
     * @since   5.7.10
     *
     * @param   string $name The data name.
     * @return  ACF_Data
     */
    function remove($name = '')
    {
    }
    /**
     * reset
     *
     * Resets the data.
     *
     * @date    22/1/19
     * @since   5.7.10
     *
     * @param   void
     * @return  void
     */
    function reset()
    {
    }
    /**
     * count
     *
     * Returns the data count.
     *
     * @date    23/1/19
     * @since   5.7.10
     *
     * @param   void
     * @return  integer
     */
    function count()
    {
    }
    /**
     * query
     *
     * Returns a filtered array of data based on the set of key => value arguments.
     *
     * @date    23/1/19
     * @since   5.7.10
     *
     * @param   void
     * @return  integer
     */
    function query($args, $operator = 'AND')
    {
    }
    /**
     * alias
     *
     * Sets an alias for the given name allowing data to be found via multiple identifiers.
     *
     * @date    18/1/19
     * @since   5.7.10
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function alias($name = '')
    {
    }
    /**
     * switch_site
     *
     * Triggered when switching between sites on a multisite installation.
     *
     * @date    13/2/19
     * @since   5.7.11
     *
     * @param   integer                       $site_id New blog ID.
     * @param   int prev_blog_id Prev blog ID.
     * @return  void
     * @phpstan-return void
     */
    function switch_site($site_id, $prev_site_id)
    {
    }
}
class ACF_Admin_Notice extends \ACF_Data
{
    /** @var array Storage for data. */
    var $data = array(
        /** @type string Text displayed in notice. */
        'text' => '',
        /** @type string The type of notice (warning, error, success, info). */
        'type' => 'info',
        /** @type bool If the notice can be dismissed. */
        'dismissible' => \true,
        /** @type bool If the dismissed state should be persisted to ACF user preferences. */
        'persisted' => \false,
    );
    /**
     * render
     *
     * Renders the notice HTML.
     *
     * @date    27/12/18
     * @since   5.8.0
     *
     * @param   void
     * @return  void
     */
    function render()
    {
    }
}
class ACF_Admin_Options_Preview
{
    /**
     * Constructor.
     *
     * @since   6.2.2
     */
    public function __construct()
    {
    }
    /**
     * Adds the Options Pages menu item to the admin menu.
     *
     * @since   6.2.2
     * @phpstan-return void
     */
    public function admin_menu()
    {
    }
    /**
     * Load the body class and scripts.
     *
     * @since 6.2.2
     */
    public function load()
    {
    }
    /**
     * Modifies the admin body class.
     *
     * @since 6.2.2
     *
     * @param string $classes Space-separated list of CSS classes.
     * @return string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * The render for the options page preview view.
     *
     * @since 6.2.2
     */
    public function render()
    {
    }
}
#[\AllowDynamicProperties]
class acf_admin_tools
{
    /** @var array Contains an array of admin tool instances */
    var $tools = array();
    /** @var string The active tool */
    var $active = '';
    /**
     * __construct
     *
     * This function will setup the class functionality
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * register_tool
     *
     * This function will store a tool tool class
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   string $class
     * @return  void
     */
    function register_tool($class)
    {
    }
    /**
     * get_tool
     *
     * This function will return a tool tool class
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   string $name
     * @return  void
     */
    function get_tool($name)
    {
    }
    /**
     * get_tools
     *
     * This function will return an array of all tools
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  array
     */
    function get_tools()
    {
    }
    /**
     * This function will add the ACF menu item to the WP admin
     *
     * @type    action (admin_menu)
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function admin_menu()
    {
    }
    /**
     * load
     *
     * description
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function load()
    {
    }
    /**
     * Modifies the admin body class.
     *
     * @since 6.0.0
     *
     * @param string $classes Space-separated list of CSS classes.
     * @return string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * include_tools
     *
     * description
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function include_tools()
    {
    }
    /**
     * check_submit
     *
     * description
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function check_submit()
    {
    }
    /**
     * html
     *
     * description
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function html()
    {
    }
    /**
     * Output the metabox HTML for specific tools
     *
     * @since 5.6.3
     *
     * @param mixed $post    The post this metabox is being displayed on, should be an empty string always for us on a tools page.
     * @param array $metabox An array of the metabox attributes.
     */
    public function metabox_html($post, $metabox)
    {
    }
}
class ACF_Admin_Upgrade
{
    /**
     * The name of the transient to store the network update check status.
     *
     * @var string
     */
    public $network_upgrade_needed_transient;
    /**
     * __construct
     *
     * Sets up the class functionality.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * admin_menu
     *
     * Setus up logic if DB Upgrade is needed on a single site.
     *
     * @date    24/8/18
     * @since   5.7.4
     *
     * @param   void
     * @return  void
     */
    function admin_menu()
    {
    }
    /**
     * Displays a “Database Upgrade Required” network admin notice and adds
     * the “Upgrade Database” submenu under the “Dashboard” network admin
     * menu item if an ACF upgrade needs to run on any network site.
     *
     * @since   5.7.4
     * @since   6.0.0 Reduce memory usage, cache network upgrade checks.
     * @phpstan-return void
     */
    function network_admin_menu()
    {
    }
    /**
     * Checks if an ACF database upgrade is required on any site in the
     * multisite network.
     *
     * Stores the result in `$this->network_upgrade_needed_transient`,
     * which is version-linked to ACF_UPGRADE_VERSION: the highest ACF
     * version that requires an upgrade function to run. Bumping
     * ACF_UPGRADE_VERSION will trigger new upgrade checks but incrementing
     * ACF_VERSION alone will not.
     *
     * @since 6.0.0
     * @return string 'yes' if any site in the network requires an upgrade,
     *               otherwise 'no'. String instead of boolean so that
     *               `false` returned from a get_site_transient check can
     *               denote that an upgrade check is needed.
     */
    public function check_for_network_upgrades()
    {
    }
    /**
     * admin_load
     *
     * Runs during the loading of the admin page.
     *
     * @date    24/8/18
     * @since   5.7.4
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function admin_load()
    {
    }
    /**
     * network_admin_load
     *
     * Runs during the loading of the network admin page.
     *
     * @date    24/8/18
     * @since   5.7.4
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function network_admin_load()
    {
    }
    /**
     * Modifies the admin body class.
     *
     * @since 6.0.0
     *
     * @param string $classes Space-separated list of CSS classes.
     * @return string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * admin_notices
     *
     * Displays the DB Upgrade prompt.
     *
     * @date    23/8/18
     * @since   5.7.3
     *
     * @param   void
     * @return  void
     */
    function admin_notices()
    {
    }
    /**
     * network_admin_notices
     *
     * Displays the DB Upgrade prompt on a multi site.
     *
     * @date    23/8/18
     * @since   5.7.3
     *
     * @param   void
     * @return  void
     */
    function network_admin_notices()
    {
    }
    /**
     * admin_html
     *
     * Displays the HTML for the admin page.
     *
     * @date    24/8/18
     * @since   5.7.4
     *
     * @param   void
     * @return  void
     */
    function admin_html()
    {
    }
    /**
     * network_admin_html
     *
     * Displays the HTML for the network upgrade admin page.
     *
     * @date    24/8/18
     * @since   5.7.4
     *
     * @param   void
     * @return  void
     */
    function network_admin_html()
    {
    }
}
class ACF_Admin
{
    /**
     * Constructor.
     *
     * @since 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Adds the ACF menu item.
     *
     * @date    28/09/13
     * @since   5.0.0
     * @phpstan-return void
     */
    public function admin_menu()
    {
    }
    /**
     * Enqueues global admin styling.
     *
     * @since   5.0.0
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Appends custom admin body classes.
     *
     * @date    5/11/19
     * @since   5.8.7
     *
     * @param   string $classes Space-separated list of CSS classes.
     * @return  string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * Adds custom functionality to "ACF" admin pages.
     *
     * @date    7/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function current_screen($screen)
    {
    }
    /**
     * Sets up the admin help tab.
     *
     * @date    20/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function setup_help_tab()
    {
    }
    /**
     * Shows a notice to import post types and taxonomies from CPTUI if that plugin is active.
     *
     * @since 6.1
     * @phpstan-return void
     */
    public function maybe_show_import_from_cptui_notice()
    {
    }
    /**
     * Notifies the user that fields rendered via shortcode or the_field() have
     * had HTML removed/altered due to unsafe HTML being escaped.
     *
     * @since 6.2.5
     * @phpstan-return void
     */
    public function maybe_show_escaped_html_notice()
    {
    }
    /**
     * Dismisses the escaped unsafe HTML notice by clearing the stored log.
     *
     * @since 6.2.5
     * @phpstan-return void
     */
    public function dismiss_escaped_html_notice()
    {
    }
    /**
     * Renders the admin navigation element.
     *
     * @date    27/3/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    function in_admin_header()
    {
    }
    /**
     * Modifies the admin footer text.
     *
     * @date    7/4/20
     * @since   5.9.0
     *
     * @param   string $text The current admin footer text.
     * @return  string
     */
    public function admin_footer_text($text)
    {
    }
    /**
     * Modifies the admin footer version text.
     *
     * @since 6.2
     *
     * @param   string $text The current admin footer version text.
     * @return  string
     */
    public function admin_footer_version_text($text)
    {
    }
    /**
     * Ensure the ACF parent menu is selected for add-new.php
     *
     * @since 6.1
     * @param string $parent_file The parent file checked against menu activation.
     * @return string The modified parent file
     */
    public function ensure_menu_selection($parent_file)
    {
    }
    /**
     * Ensure the correct ACF submenu item is selected when in post-new versions of edit pages
     *
     * @since 6.1
     * @param string $submenu_file The submenu filename.
     * @return string The modified submenu filename
     */
    public function ensure_submenu_selection($submenu_file)
    {
    }
}
/**
 * ACF Admin Field Group Class
 *
 * All the logic for editing a field group
 */
class acf_admin_field_group extends \ACF_Admin_Internal_Post_Type
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = 'acf-field-group';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = 'acf-admin-single-field-group';
    /**
     * Constructs the class.
     *
     * @since 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * This function will customize the message shown when editing a field group
     *
     * @since   5.0.0
     *
     * @param array $messages Post type messages.
     * @return array
     */
    public function post_updated_messages($messages)
    {
    }
    /**
     * Enqueues any scripts necessary for internal post type.
     *
     * @since 5.0.0
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Set up functionality for the field group edit page.
     *
     * @since 3.1.8
     */
    public function admin_head()
    {
    }
    /**
     * This action will allow ACF to render metaboxes after the title.
     */
    public function edit_form_after_title()
    {
    }
    /**
     * This function will add extra HTML to the acf form data element
     *
     * @since   5.3.8
     *
     * @param array $args Arguments array to pass through to action.
     * @return void
     */
    public function form_data($args)
    {
    }
    /**
     * This function will append extra l10n strings to the acf JS object
     *
     * @since   5.3.8
     *
     * @param array $l10n The array of translated strings.
     * @return array $l10n
     */
    public function admin_l10n($l10n)
    {
    }
    /**
     * Admin footer third party hook support
     *
     * @since 5.3.2
     */
    public function admin_footer()
    {
    }
    /**
     * Renders HTML for the ACF PRO features upgrade notice.
     * @phpstan-return void
     */
    public function include_pro_features()
    {
    }
    /**
     * Screen settings html output
     *
     * @since   3.6.0
     *
     * @param string $html Current screen settings HTML.
     * @return string $html
     */
    public function screen_settings($html)
    {
    }
    /**
     * Sets the "Edit Field Group" screen to use a one-column layout.
     *
     * @param  integer $columns Number of columns for layout.
     * @return integer
     */
    public function screen_layout($columns = 0)
    {
    }
    /**
     * This function will customize the publish metabox
     *
     * @since   5.2.9
     */
    public function post_submitbox_misc_actions()
    {
    }
    /**
     * Saves field group data.
     *
     * @since 1.0.0
     *
     * @param integer $post_id The post ID.
     * @param WP_Post $post    The post object.
     * @return integer $post_id
     */
    public function save_post($post_id, $post)
    {
    }
    /**
     * This function will render the HTML for the metabox 'acf-field-group-fields'
     *
     * @since  5.0.0
     */
    public function mb_fields()
    {
    }
    /**
     * This function will render the HTML for the metabox 'acf-field-group-pro-features'
     *
     * @since 6.0.0
     */
    public function mb_pro_features()
    {
    }
    /**
     * This function will render the HTML for the metabox 'acf-field-group-options'
     *
     * @since 5.0.0
     */
    public function mb_options()
    {
    }
    /**
     * This function can be accessed via an AJAX action and will return the result from the render_location_value function
     *
     * @since 5.0.0
     * @phpstan-return never
     */
    public function ajax_render_location_rule()
    {
    }
    /**
     * This function will return HTML containing the field's settings based on it's new type
     *
     * @since 5.0.0
     * @phpstan-return never
     */
    public function ajax_render_field_settings()
    {
    }
    /**
     * Move field AJAX function
     *
     * @since 5.0.0
     * @phpstan-return never
     */
    public function ajax_move_field()
    {
    }
}
#[\AllowDynamicProperties]
class ACF_Admin_Field_Groups extends \ACF_Admin_Internal_Post_Type_List
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = 'acf-field-group';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = 'acf-admin-field-groups';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = 'field-groups';
    /**
     * Constructor.
     *
     * @since   5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Renders HTML for the ACF PRO features upgrade notice.
     * @phpstan-return void
     */
    public function include_pro_features()
    {
    }
    /**
     * Add any menu items required for field groups.
     *
     * @since 6.1
     */
    public function admin_menu()
    {
    }
    /**
     * Redirects users from ACF 4.0 admin page.
     *
     * @since 5.7.6
     */
    public function handle_redirection()
    {
    }
    /**
     * Customizes the admin table columns.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param array $_columns The columns array.
     * @return array
     */
    public function admin_table_columns($_columns)
    {
    }
    /**
     * Renders a specific admin table column.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param string $column_name The name of the column to display.
     * @param array  $post        The main ACF post array.
     * @return void
     */
    public function render_admin_table_column($column_name, $post)
    {
    }
    /**
     * Displays a visual representation of the field group's locations.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param array $field_group The field group.
     * @return void
     */
    public function render_admin_table_column_locations($field_group)
    {
    }
    /**
     * Renders the number of fields created for the field group in the list table.
     *
     * @since 6.1.5
     *
     * @param array $field_group The main field group array.
     * @return void
     * @phpstan-return void
     */
    public function render_admin_table_column_num_fields($field_group)
    {
    }
    /**
     * Fires when trashing a field group.
     *
     * @date    8/01/2014
     * @since   5.0.0
     *
     * @param   integer $post_id The post ID.
     * @return  void
     */
    public function trashed_post($post_id)
    {
    }
    /**
     * Fires when untrashing a field group.
     *
     * @date    8/01/2014
     * @since   5.0.0
     *
     * @param   integer $post_id The post ID.
     * @return  void
     */
    public function untrashed_post($post_id)
    {
    }
    /**
     * Fires when deleting a field group.
     *
     * @date    8/01/2014
     * @since   5.0.0
     *
     * @param   integer $post_id The post ID.
     * @return  void
     */
    public function deleted_post($post_id)
    {
    }
    /**
     * Gets the translated action notice text for list table actions (activate, deactivate, sync, etc.).
     *
     * @since 6.1
     *
     * @param string  $action The action being performed.
     * @param integer $count  The number of items the action was performed on.
     * @return string
     */
    public function get_action_notice_text($action, $count = 1)
    {
    }
}
/**
 * ACF Admin Post Type Class
 *
 * All the logic for editing a post type.
 */
class ACF_Admin_Post_type extends \ACF_Admin_Internal_Post_Type
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = 'acf-post-type';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = 'acf-admin-single-post-type';
    /**
     * This function will customize the message shown when editing a post type.
     *
     * @since 5.0.0
     *
     * @param array $messages Post type messages.
     * @return array
     */
    public function post_updated_messages($messages)
    {
    }
    /**
     * Renders the post type created message.
     *
     * @since 6.1
     *
     * @param boolean $created True if the post was just created.
     * @return string
     */
    public function post_type_created_message($created = \false)
    {
    }
    /**
     * Enqueues any scripts necessary for internal post type.
     *
     * @since 5.0.0
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Sets up all functionality for the post type edit page to work.
     *
     * @since 3.1.8
     */
    public function admin_head()
    {
    }
    /**
     * This action will allow ACF to render metaboxes after the title.
     */
    public function edit_form_after_title()
    {
    }
    /**
     * This function will add extra HTML to the acf form data element
     *
     * @since   5.3.8
     *
     * @param array $args Arguments array to pass through to action.
     * @return void
     */
    public function form_data($args)
    {
    }
    /**
     * This function will append extra l10n strings to the acf JS object
     *
     * @since   5.3.8
     *
     * @param array $l10n The array of translated strings.
     * @return array $l10n
     */
    public function admin_l10n($l10n)
    {
    }
    /**
     * Admin footer third party hook support
     *
     * @since 5.3.2
     */
    public function admin_footer()
    {
    }
    /**
     * Screen settings html output
     *
     * @since   3.6.0
     *
     * @param string $html Current screen settings HTML.
     * @return string $html
     */
    public function screen_settings($html)
    {
    }
    /**
     * Sets the "Edit Post Type" screen to use a one-column layout.
     *
     * @param integer $columns Number of columns for layout.
     * @return integer
     */
    public function screen_layout($columns = 0)
    {
    }
    /**
     * Force basic settings to always be visible
     *
     * @param  array $hidden_metaboxes The metaboxes hidden on this page.
     * @return array
     */
    public function force_basic_settings($hidden_metaboxes)
    {
    }
    /**
     * Force advanced settings to be visible
     *
     * @param array $hidden_metaboxes The metaboxes hidden on this page.
     * @return array
     */
    public function force_advanced_settings($hidden_metaboxes)
    {
    }
    /**
     * This function will customize the publish metabox
     *
     * @since 5.2.9
     */
    public function post_submitbox_misc_actions()
    {
    }
    /**
     * Saves post type data.
     *
     * @since 1.0.0
     *
     * @param  integer $post_id The post ID.
     * @param  WP_Post $post    The post object.
     * @return integer $post_id
     */
    public function save_post($post_id, $post)
    {
    }
    /**
     * Renders HTML for the basic settings metabox.
     *
     * @since 5.0.0
     */
    public function mb_basic_settings()
    {
    }
    /**
     * Renders the HTML for the advanced settings metabox.
     *
     * @since 5.0.0
     */
    public function mb_advanced_settings()
    {
    }
}
/**
 * The ACF Post Types admin controller class
 */
#[\AllowDynamicProperties]
class ACF_Admin_Post_Types extends \ACF_Admin_Internal_Post_Type_List
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = 'acf-post-type';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = 'acf-admin-post-types';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = 'post-types';
    /**
     * Constructor.
     *
     * @since 6.2
     */
    public function __construct()
    {
    }
    /**
     * Renders HTML for the ACF PRO features upgrade notice.
     * @phpstan-return void
     */
    public function include_pro_features()
    {
    }
    /**
     * Current screen actions for the post types list admin page.
     *
     * @since 6.1
     * @phpstan-return void
     */
    public function current_screen()
    {
    }
    /**
     * Add any menu items required for post types.
     *
     * @since 6.1
     */
    public function admin_menu()
    {
    }
    /**
     * Customizes the admin table columns.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param array $_columns The columns array.
     * @return array
     */
    public function admin_table_columns($_columns)
    {
    }
    /**
     * Renders a specific admin table column.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param string $column_name The name of the column to display.
     * @param array  $post        The main ACF post array.
     * @return void
     */
    public function render_admin_table_column($column_name, $post)
    {
    }
    /**
     * Renders the field groups attached to the post type in the list table.
     *
     * @since 6.1
     *
     * @param array $post_type The main post type array.
     * @return void
     * @phpstan-return void
     */
    public function render_admin_table_column_field_groups($post_type)
    {
    }
    /**
     * Renders the taxonomies attached to the post type in the list table.
     *
     * @since 6.1
     *
     * @param array $post_type The main post type array.
     * @return void
     * @phpstan-return void
     */
    public function render_admin_table_column_taxonomies($post_type)
    {
    }
    /**
     * Renders the number of posts created for the post type in the list table.
     *
     * @since 6.1
     *
     * @param array $post_type The main post type array.
     * @return void
     * @phpstan-return void
     */
    public function render_admin_table_column_num_posts($post_type)
    {
    }
    /**
     * Gets the translated action notice text for list table actions (activate, deactivate, sync, etc.).
     *
     * @since 6.1
     *
     * @param string  $action The action being performed.
     * @param integer $count  The number of items the action was performed on.
     * @return string
     */
    public function get_action_notice_text($action, $count = 1)
    {
    }
    /**
     * Returns the registration error state.
     *
     * @since   6.1
     *
     * @return  string
     */
    public function get_registration_error_state()
    {
    }
}
/**
 * The ACF Post Types admin controller class
 */
#[\AllowDynamicProperties]
class ACF_Admin_Taxonomies extends \ACF_Admin_Internal_Post_Type_List
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = 'acf-taxonomy';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = 'acf-admin-taxonomies';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = 'taxonomies';
    /**
     * Constructor.
     * @since 6.2
     */
    public function __construct()
    {
    }
    /**
     * Renders HTML for the ACF PRO features upgrade notice.
     * @phpstan-return void
     */
    public function include_pro_features()
    {
    }
    /**
     * Current screen actions for the taxonomies list admin page.
     *
     * @since 6.1
     * @phpstan-return void
     */
    public function current_screen()
    {
    }
    /**
     * Add any menu items required for taxonomies.
     *
     * @since 6.1
     */
    public function admin_menu()
    {
    }
    /**
     * Customizes the admin table columns.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param array $_columns The columns array.
     * @return array
     */
    public function admin_table_columns($_columns)
    {
    }
    /**
     * Renders a specific admin table column.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param string $column_name The name of the column to display.
     * @param array  $post        The main ACF post array.
     * @return void
     */
    public function render_admin_table_column($column_name, $post)
    {
    }
    /**
     * Renders the field groups attached to the taxonomy in the list table.
     *
     * @since 6.1
     *
     * @param array $taxonomy The main taxonomy array.
     * @return void
     * @phpstan-return void
     */
    public function render_admin_table_column_field_groups($taxonomy)
    {
    }
    /**
     * Renders the post types attached to the taxonomy in the list table.
     *
     * @since 6.1
     *
     * @param array $taxonomy The main taxonomy array.
     * @return void
     * @phpstan-return void
     */
    public function render_admin_table_column_post_types($taxonomy)
    {
    }
    /**
     * Renders the number of terms created for the taxonomy in the list table.
     *
     * @since 6.1
     *
     * @param array $taxonomy The main taxonomy array.
     * @return void
     * @phpstan-return void
     */
    public function render_admin_table_column_num_terms($taxonomy)
    {
    }
    /**
     * Gets the translated action notice text for list table actions (activate, deactivate, sync, etc.).
     *
     * @since 6.1
     *
     * @param string  $action The action being performed.
     * @param integer $count  The number of items the action was performed on.
     * @return string
     */
    public function get_action_notice_text($action, $count = 1)
    {
    }
    /**
     * Returns the registration error state.
     *
     * @since 6.1
     *
     * @return string
     */
    public function get_registration_error_state()
    {
    }
}
/**
 * ACF Admin Field Group Class
 *
 * All the logic for editing a taxonomy.
 */
class ACF_Admin_Taxonomy extends \ACF_Admin_Internal_Post_Type
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = 'acf-taxonomy';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = 'acf-admin-single-taxonomy';
    /**
     * This function will customize the message shown when editing a field group
     *
     * @since   5.0.0
     *
     * @param array $messages Post type messages.
     * @return array
     */
    public function post_updated_messages($messages)
    {
    }
    /**
     * Renders the post type created message.
     *
     * @since 6.1
     *
     * @param boolean $created True if the post was just created.
     * @return string
     */
    public function taxonomy_saved_message($created = \false)
    {
    }
    /**
     * Enqueues any scripts necessary for internal post type.
     *
     * @since 5.0.0
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Sets up all functionality for the taxonomy edit page to work.
     *
     * @since   3.1.8
     */
    public function admin_head()
    {
    }
    /**
     * This action will allow ACF to render metaboxes after the title.
     */
    public function edit_form_after_title()
    {
    }
    /**
     * This function will add extra HTML to the acf form data element
     *
     * @since   5.3.8
     *
     * @param array $args Arguments array to pass through to action.
     * @return void
     */
    public function form_data($args)
    {
    }
    /**
     * This function will append extra l10n strings to the acf JS object
     *
     * @since   5.3.8
     *
     * @param array $l10n The array of translated strings.
     * @return array $l10n
     */
    public function admin_l10n($l10n)
    {
    }
    /**
     * Admin footer third party hook support
     *
     * @since 5.3.2
     */
    public function admin_footer()
    {
    }
    /**
     * Screen settings html output
     *
     * @since   3.6.0
     *
     * @param string $html Current screen settings HTML.
     * @return string $html
     */
    public function screen_settings($html)
    {
    }
    /**
     * Sets the "Edit Field Group" screen to use a one-column layout.
     *
     * @param integer $columns Number of columns for layout.
     * @return integer
     */
    public function screen_layout($columns = 0)
    {
    }
    /**
     * Force basic settings to always be visible
     *
     * @param  array $hidden_metaboxes The metaboxes hidden on this page.
     * @return array
     */
    public function force_basic_settings($hidden_metaboxes)
    {
    }
    /**
     * Force advanced settings to be visible
     *
     * @param  array $hidden_metaboxes The metaboxes hidden on this page.
     * @return array
     */
    public function force_advanced_settings($hidden_metaboxes)
    {
    }
    /**
     * This function will customize the publish metabox
     *
     * @since 5.2.9
     */
    public function post_submitbox_misc_actions()
    {
    }
    /**
     * Saves taxonomy data.
     *
     * @since 1.0.0
     *
     * @param  integer $post_id The post ID.
     * @param  WP_Post $post    The post object.
     * @return integer $post_id
     */
    public function save_post($post_id, $post)
    {
    }
    /**
     * Renders HTML for the 'acf-taxonomy-fields' metabox.
     *
     * @since 5.0.0
     */
    public function mb_basic_settings()
    {
    }
    /**
     * Renders the HTML for the 'acf-taxonomy-options' metabox.
     *
     * @since 5.0.0
     */
    public function mb_advanced_settings()
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
    var $icon = '';
    /** @var boolean Redirect form to single */
    // var $redirect = false;
    /**
     * get_name
     *
     * This function will return the Tool's name
     *
     * @date    19/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function get_name()
    {
    }
    /**
     * get_title
     *
     * This function will return the Tool's title
     *
     * @date    19/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function get_title()
    {
    }
    /**
     * get_url
     *
     * This function will return the Tool's title
     *
     * @date    19/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function get_url()
    {
    }
    /**
     * is_active
     *
     * This function will return true if the tool is active
     *
     * @date    19/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  boolean
     */
    function is_active()
    {
    }
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    27/6/17
     * @since   5.6.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * initialize
     *
     * This function will initialize the admin tool
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * load
     *
     * This function is called during the admin page load
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function load()
    {
    }
    /**
     * html
     *
     * This function will output the metabox HTML
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function html()
    {
    }
    /**
     * submit
     *
     * This function will run when the tool's form has been submit
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
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
     * initialize
     *
     * This function will initialize the admin tool
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * submit
     *
     * This function will run when the tool's form has been submit
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function submit()
    {
    }
    /**
     * submit_download
     *
     * description
     *
     * @date    17/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function submit_download()
    {
    }
    /**
     * submit_generate
     *
     * description
     *
     * @date    17/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function submit_generate()
    {
    }
    /**
     * load
     *
     * description
     *
     * @date    21/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function load()
    {
    }
    /**
     * html
     *
     * This function will output the metabox HTML
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function html()
    {
    }
    /**
     * Renders the checkboxes to select items to export.
     *
     * @since 5.6.3
     */
    public function html_field_selection()
    {
    }
    /**
     * Renders the side panel for selecting ACF items to export via PHP.
     *
     * @since 5.6.3
     */
    public function html_panel_selection()
    {
    }
    /**
     * html_archive
     *
     * description
     *
     * @date    20/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function html_archive()
    {
    }
    /**
     * Renders the PHP export screen.
     *
     * @since 5.6.3
     */
    public function html_single()
    {
    }
    /**
     * Generates the HTML for the PHP export functionality.
     *
     * @since   5.6.3
     */
    public function html_generate()
    {
    }
    /**
     * Return an array of keys that have been selected in the export tool.
     *
     * @since 5.6.3
     *
     * @return array|boolean
     */
    public function get_selected_keys()
    {
    }
    /**
     * Returns the JSON data for given $_POST args.
     *
     * @since 5.6.3
     *
     * @return array|boolean
     */
    public function get_selected()
    {
    }
}
class ACF_Admin_Tool_Import extends \ACF_Admin_Tool
{
    /**
     * initialize
     *
     * This function will initialize the admin tool
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * html
     *
     * This function will output the metabox HTML
     *
     * @date    10/10/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function html()
    {
    }
    /**
     * Imports the selected ACF posts and returns an admin notice on completion.
     *
     * @since 5.6.3
     *
     * @return ACF_Admin_Notice
     */
    public function submit()
    {
    }
    /**
     * Handles the import of CPTUI post types and taxonomies.
     *
     * @since 6.1
     *
     * @param array $import_args What to import.
     * @return ACF_Admin_Notice
     */
    public function import_cpt_ui($import_args)
    {
    }
}
class ACF_Ajax
{
    /** @var string The AJAX action name. */
    var $action = '';
    /** @var array The $_REQUEST data. */
    var $request;
    /** @var boolean Prevents access for non-logged in users. */
    var $public = \false;
    /**
     * __construct
     *
     * Sets up the class functionality.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * has
     *
     * Returns true if the request has data for the given key.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   string $key The data key.
     * @return  boolean
     */
    function has($key = '')
    {
    }
    /**
     * get
     *
     * Returns request data for the given key.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   string $key The data key.
     * @return  mixed
     */
    function get($key = '')
    {
    }
    /**
     * Sets request data for the given key.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   string $key   The data key.
     * @param   mixed  $value The data value.
     * @return  ACF_Ajax
     */
    function set($key = '', $value = \null)
    {
    }
    /**
     * initialize
     *
     * Allows easy access to modifying properties without changing constructor.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * add_actions
     *
     * Adds the ajax actions for this response.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   void
     * @return  void
     */
    function add_actions()
    {
    }
    /**
     * request
     *
     * Callback for ajax action. Sets up properties and calls the get_response() function.
     *
     * @date    1/8/18
     * @since   5.7.2
     *
     * @param   void
     * @return  void
     */
    function request()
    {
    }
    /**
     * Verifies the request.
     *
     * @date    9/3/20
     * @since   5.8.8
     *
     * @param   array $request The request args.
     * @return  bool|WP_Error True on success, WP_Error on fail.
     */
    function verify_request($request)
    {
    }
    /**
     * get_response
     *
     * Returns the response data to sent back.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array $request The request args.
     * @return  mixed The response data or WP_Error.
     */
    function get_response($request)
    {
    }
    /**
     * send
     *
     * Sends back JSON based on the $response as either success or failure.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   mixed $response The response to send back.
     * @return  void
     */
    function send($response)
    {
    }
    /**
     * Sends a JSON response for the given WP_Error object.
     *
     * @date    8/3/20
     * @since   5.8.8
     *
     * @param   WP_Error error The error object.
     * @return  void
     * @phpstan-return never
     */
    function send_error($error)
    {
    }
}
class ACF_Ajax_Check_Screen extends \ACF_Ajax
{
    /** @var string The AJAX action name. */
    var $action = 'acf/ajax/check_screen';
    /** @var boolean Prevents access for non-logged in users. */
    var $public = \false;
    /**
     * get_response
     *
     * Returns the response data to sent back.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array $request The request args.
     * @return  mixed The response data or WP_Error.
     */
    function get_response($request)
    {
    }
}
class ACF_Ajax_Local_JSON_Diff extends \ACF_Ajax
{
    /**
     * The AJAX action name.
     *
     * @var string
     */
    public $action = 'acf/ajax/local_json_diff';
    /**
     * Prevents access for non-logged in users.
     *
     * @var boolean
     */
    public $public = \false;
    /**
     * Returns the response data to sent back.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param array $request The request args.
     * @return array|WP_Error The response data or WP_Error.
     */
    public function get_response($request)
    {
    }
}
class ACF_Ajax_Query extends \ACF_Ajax
{
    /** @var boolean Prevents access for non-logged in users. */
    var $public = \true;
    /** @var integer The page of results to return. */
    var $page = 1;
    /** @var integer The number of results per page. */
    var $per_page = 20;
    /** @var boolean Signifies whether or not this AJAX query has more pages to load. */
    var $more = \false;
    /** @var string The searched term. */
    var $search = '';
    /** @var boolean Signifies whether the current query is a search. */
    var $is_search = \false;
    /** @var (int|string) The post_id being edited. */
    var $post_id = 0;
    /** @var array The ACF field related to this query. */
    var $field = \false;
    /**
     * get_response
     *
     * Returns the response data to sent back.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array $request The request args.
     * @return  array|WP_Error The response data or WP_Error.
     */
    function get_response($request)
    {
    }
    /**
     * init_request
     *
     * Called at the beginning of a request to setup properties.
     *
     * @date    23/5/19
     * @since   5.8.1
     *
     * @param   array $request The request args.
     * @return  void
     */
    function init_request($request)
    {
    }
    /**
     * get_args
     *
     * Returns an array of args for this query.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array $request The request args.
     * @return  array
     */
    function get_args($request)
    {
    }
    /**
     * get_items
     *
     * Returns an array of results for the given args.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array args The query args.
     * @return  array
     */
    function get_results($args)
    {
    }
    /**
     * get_item
     *
     * Returns a single result for the given item object.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   mixed $item A single item from the queried results.
     * @return  array An array containing "id" and "text".
     */
    function get_result($item)
    {
    }
}
class ACF_Ajax_Query_Users extends \ACF_Ajax_Query
{
    /** @var string The AJAX action name. */
    var $action = 'acf/ajax/query_users';
    /**
     * init_request
     *
     * Called at the beginning of a request to setup properties.
     *
     * @date    23/5/19
     * @since   5.8.1
     *
     * @param   array $request The request args.
     * @return  void
     */
    function init_request($request)
    {
    }
    /**
     * get_args
     *
     * Returns an array of args for this query.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array $request The request args.
     * @return  array
     */
    function get_args($request)
    {
    }
    /**
     * Prepares args for the get_results() method.
     *
     * @date    23/3/20
     * @since   5.8.9
     *
     * @param   array args The query args.
     * @return  array
     */
    function prepare_args($args)
    {
    }
    /**
     * get_results
     *
     * Returns an array of results for the given args.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array args The query args.
     * @return  array
     */
    function get_results($args)
    {
    }
    /**
     * get_result
     *
     * Returns a single result for the given item object.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   mixed $item A single item from the queried results.
     * @return  string
     */
    function get_result($user)
    {
    }
    /**
     * Filters the WP_User_Query search columns.
     *
     * @date    9/3/20
     * @since   5.8.8
     *
     * @param   array         $columns       An array of column names to be searched.
     * @param   string        $search        The search term.
     * @param   WP_User_Query $WP_User_Query The WP_User_Query instance.
     * @return  array
     */
    function filter_search_columns($columns, $search, $WP_User_Query)
    {
    }
}
class ACF_Ajax_Upgrade extends \ACF_Ajax
{
    /** @var string The AJAX action name */
    var $action = 'acf/ajax/upgrade';
    /**
     * get_response
     *
     * Returns the response data to sent back.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array $request The request args.
     * @return  mixed The response data or WP_Error.
     */
    function get_response($request)
    {
    }
}
class ACF_Ajax_User_Setting extends \ACF_Ajax
{
    /** @var string The AJAX action name. */
    var $action = 'acf/ajax/user_setting';
    /** @var boolean Prevents access for non-logged in users. */
    var $public = \true;
    /**
     * get_response
     *
     * Returns the response data to sent back.
     *
     * @date    31/7/18
     * @since   5.7.2
     *
     * @param   array $request The request args.
     * @return  mixed The response data or WP_Error.
     */
    function get_response($request)
    {
    }
}
class ACF_Assets
{
    /**
     * Storage for i18n data.
     *
     * @since 5.6.9
     * @var array
     */
    public $text = array();
    /**
     * Storage for l10n data.
     *
     * @since 5.6.9
     * @var array
     */
    public $data = array();
    /**
     * Constructor.
     *
     * @date    10/4/18
     * @since   5.6.9
     *
     * @param   void
     * @return  void
     */
    public function __construct()
    {
    }
    /**
     * Magic __call method for backwards compatibility.
     *
     * @date    10/4/20
     * @since   5.9.0
     *
     * @param   string $name      The method name.
     * @param   array  $arguments The array of arguments.
     * @return  mixed
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Appends an array of i18n data.
     *
     * @date    13/4/18
     * @since   5.6.9
     *
     * @param   array $text An array of text for i18n.
     * @return  void
     */
    public function add_text($text)
    {
    }
    /**
     * Appends an array of l10n data.
     *
     * @date    13/4/18
     * @since   5.6.9
     *
     * @param   array $data An array of data for l10n.
     * @return  void
     */
    public function add_data($data)
    {
    }
    /**
     * Registers the ACF scripts and styles.
     *
     * @date    10/4/18
     * @since   5.6.9
     *
     * @param   void
     * @return  void
     */
    public function register_scripts()
    {
    }
    /**
     * Enqueues a script and sets up actions for priting supplemental scripts.
     *
     * @date    27/4/20
     * @since   5.9.0
     *
     * @param   string $name The script name.
     * @return  void
     */
    public function enqueue_script($name)
    {
    }
    /**
     * Enqueues a style.
     *
     * @date    27/4/20
     * @since   5.9.0
     *
     * @param   string $name The style name.
     * @return  void
     */
    public function enqueue_style($name)
    {
    }
    /**
     * Extends the add_action() function with two additional features:
     * 1. Renames $action depending on the current page (customizer, login, front-end).
     * 2. Alters the priotiry or calls the method directly if the action has already passed.
     *
     * @date    28/4/20
     * @since   5.9.0
     *
     * @param   string  $action        The action name.
     * @param   string  $method        The method name.
     * @param   integer $priority      See add_action().
     * @param   integer $accepted_args See add_action().
     * @return  void
     */
    public function add_action($action, $method, $priority = 10, $accepted_args = 1)
    {
    }
    /**
     * Generic controller for enqueuing scripts and styles.
     *
     * @date    28/4/20
     * @since   5.9.0
     *
     * @param   array $args {
     * @type bool $uploader Whether or not to enqueue uploader scripts.
     * }
     * @return  void
     */
    public function enqueue($args = array())
    {
    }
    /**
     * Enqueues the scripts and styles needed for the WP media uploader.
     *
     * @date    27/10/2014
     * @since   5.0.9
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    public function enqueue_uploader()
    {
    }
    /**
     * Enqueues and localizes scripts.
     *
     * @date    27/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Prints scripts in head.
     *
     * @date    27/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function print_scripts()
    {
    }
    /**
     * Prints scripts in footer.
     *
     * @date    27/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    public function print_footer_scripts()
    {
    }
    /**
     * Prints uploader scripts in footer.
     *
     * @date    11/06/2020
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function print_uploader_scripts()
    {
    }
}
abstract class ACF_Internal_Post_Type
{
    /**
     * The ACF internal post type name.
     *
     * @var string
     */
    public $post_type = '';
    /**
     * The prefix for the key used in the main post array.
     *
     * @var string
     */
    public $post_key_prefix = '';
    /**
     * The cache key for a singular post.
     *
     * @var string
     */
    public $cache_key = '';
    /**
     * The cache key for a collection of posts.
     *
     * @var string
     */
    public $cache_key_plural = '';
    /**
     * The hook name for a singular post.
     *
     * @var string
     */
    public $hook_name = '';
    /**
     * The hook name for a collection of posts.
     *
     * @var string
     */
    public $hook_name_plural = '';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = '';
    /**
     * Constructs the class.
     */
    public function __construct()
    {
    }
    /**
     * Get an ACF CPT object as an array.
     *
     * @since 6.1
     *
     * @param integer|WP_Post $id The post ID being queried.
     * @return array|boolean The main ACF array for the post, or false on failure.
     */
    public function get_post($id = 0)
    {
    }
    /**
     * Retrieves raw post data for the given identifier.
     *
     * @since 6.1
     *
     * @param integer|string $id The field ID, key or name.
     * @return array|false The field group array, or false on failure.
     */
    public function get_raw_post($id = 0)
    {
    }
    /**
     * Retrieves the WP_Post object for an ACF internal CPT.
     *
     * @since 6.1
     *
     * @param integer|string $id The post ID, key, or name.
     * @return WP_Post|bool The post object, or false on failure.
     */
    public function get_post_object($id = 0)
    {
    }
    /**
     * Returns true if the given identifier is an ACF post key.
     *
     * @since 6.1
     *
     * @param string $id The identifier.
     * @return boolean
     */
    public function is_post_key($id = '')
    {
    }
    /**
     * Validates an ACF internal post type.
     *
     * @since 6.1
     *
     * @param array $post The main post array.
     * @return array
     */
    public function validate_post($post = array())
    {
    }
    /**
     * Validates post type values before allowing save from the global $_POST object.
     * Errors are added to the form using acf_add_internal_post_type_validation_error().
     *
     * @since 6.1
     */
    public function ajax_validate_values()
    {
    }
    /**
     * Ensures the given ACF post is valid.
     *
     * @since 6.1
     *
     * @param array $post The main post array.
     * @return array
     */
    public function get_valid_post($post = \false)
    {
    }
    /**
     * Gets the default settings array for an ACF post type.
     *
     * @return array
     */
    public function get_settings_array()
    {
    }
    /**
     * Translates an ACF post.
     *
     * @since 6.1
     *
     * @param array $post The field group array.
     * @return array
     */
    public function translate_post($post = array())
    {
    }
    /**
     * Returns an array of ACF posts for the given $filter.
     *
     * @since 6.1
     *
     * @param array $filter An array of args to filter by.
     * @return array
     */
    public function get_posts($filter = array())
    {
    }
    /**
     * Returns an array of raw ACF post data.
     *
     * @since 6.1
     *
     * @return array
     */
    public function get_raw_posts()
    {
    }
    /**
     * Filter the posts returned by $this->get_posts().
     *
     * @since 6.1
     *
     * @param array $posts An array of posts to filter.
     * @param array $args  An array of args to filter by.
     * @return array
     */
    public function filter_posts($posts, $args = array())
    {
    }
    /**
     * Updates an ACF post.
     *
     * @since 6.1
     *
     * @param array $post The ACF post to update.
     * @return array
     */
    public function update_post($post)
    {
    }
    /**
     * Allows full control over ACF post slugs.
     *
     * @since 6.1
     *
     * @param string  $slug          The post slug.
     * @param integer $post_ID       Post ID.
     * @param string  $post_status   The post status.
     * @param string  $post_type     Post type.
     * @param integer $post_parent   Post parent ID.
     * @param string  $original_slug The original post slug.
     * @return string
     */
    public function apply_unique_post_slug($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug)
    {
    }
    /**
     * Deletes all caches for this ACF post.
     *
     * @since 6.1
     *
     * @param array $post The ACF post array.
     * @return void
     */
    public function flush_post_cache($post)
    {
    }
    /**
     * Deletes an ACF post.
     *
     * @since 6.1
     *
     * @param integer|string $id The ID of the ACF post to delete.
     * @return boolean
     */
    public function delete_post($id = 0)
    {
    }
    /**
     * Trashes an ACF post.
     *
     * @since 6.1
     *
     * @param integer|string $id The ID of the ACF post to trash.
     * @return boolean
     */
    public function trash_post($id = 0)
    {
    }
    /**
     * Restores an ACF post from the trash.
     *
     * @since 6.1
     *
     * @param integer|string $id The ID of the ACF post to untrash.
     * @return boolean
     */
    public function untrash_post($id = 0)
    {
    }
    /**
     * Returns the previous post_status instead of "draft" for the ACF internal post types.
     * Prior to WordPress 5.6.0, this filter was not needed as restored posts were always assigned their original status.
     *
     * @since 6.1
     *
     * @param string  $new_status      The new status of the post being restored.
     * @param integer $post_id         The ID of the post being restored.
     * @param string  $previous_status The status of the post at the point where it was trashed.
     * @return string
     */
    public function untrash_post_status($new_status, $post_id, $previous_status)
    {
    }
    /**
     * Returns true if the given params match an ACF post.
     *
     * @since 6.1
     *
     * @param array $post The post array to check.
     * @return boolean
     */
    public function is_post($post = \false)
    {
    }
    /**
     * Duplicates an ACF post.
     *
     * @since 6.1
     *
     * @param integer|string $id          The ID of the post to duplicate.
     * @param integer        $new_post_id Optional post ID to override.
     * @return array The new ACF post array.
     */
    public function duplicate_post($id = 0, $new_post_id = 0)
    {
    }
    /**
     * Activates or deactivates an ACF post.
     *
     * @since 6.1
     *
     * @param integer|string $id       The ID of the ACF post to activate/deactivate.
     * @param boolean        $activate True if the post should be activated.
     * @return boolean
     */
    public function update_post_active_status($id, $activate = \true)
    {
    }
    /**
     * Checks if the current user can edit ACF posts and returns the edit url.
     *
     * @since 6.1
     *
     * @param integer $post_id The ACF post ID.
     * @return string
     */
    public function get_post_edit_link($post_id)
    {
    }
    /**
     * Returns a modified ACF post array ready for export.
     *
     * @since 6.1
     *
     * @param array $post The ACF post array.
     * @return array
     */
    public function prepare_post_for_export($post = array())
    {
    }
    /**
     * Returns a string containing PHP code that can be used to create the post in ACF.
     *
     * @since 6.1
     *
     * @param array $post The post being exported.
     * @return string
     */
    public function export_post_as_php($post = array())
    {
    }
    /**
     * Formats code used for PHP exports.
     *
     * @since 6.1
     *
     * @param string $code The code being formatted.
     * @return string
     */
    public function format_code_for_export($code = '')
    {
    }
    /**
     * Prepares an ACF post for import.
     *
     * @since 6.1
     *
     * @param array $post The ACF post array.
     * @return array
     */
    public function prepare_post_for_import($post)
    {
    }
    /**
     * Imports an ACF post into the database.
     *
     * @since 6.1
     *
     * @param array $post The ACF post array.
     * @return array
     */
    public function import_post($post)
    {
    }
}
class ACF_Compatibility
{
    /**
     * __construct
     *
     * Sets up the class functionality.
     *
     * @date    30/04/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * init
     *
     * Adds compatibility for deprecated settings.
     *
     * @date    10/6/19
     * @since   5.8.1
     *
     * @param   void
     * @return  void
     */
    function init()
    {
    }
    /**
     * field_wrapper_attributes
     *
     * Adds compatibility with deprecated field wrap attributes.
     *
     * @date    21/1/19
     * @since   5.7.10
     *
     * @param   array $wrapper The wrapper attributes array.
     * @param   array $field   The field array.
     */
    function field_wrapper_attributes($wrapper, $field)
    {
    }
    /**
     * validate_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.0.0
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_field($field)
    {
    }
    /**
     * validate_textarea_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.0.0
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_textarea_field($field)
    {
    }
    /**
     * validate_relationship_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.0.0
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_relationship_field($field)
    {
    }
    /**
     * validate_image_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.0.0
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_image_field($field)
    {
    }
    /**
     * validate_wysiwyg_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.0.0
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_wysiwyg_field($field)
    {
    }
    /**
     * validate_date_picker_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.0.0
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_date_picker_field($field)
    {
    }
    /**
     * validate_taxonomy_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.2.7
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_taxonomy_field($field)
    {
    }
    /**
     * validate_date_time_picker_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.2.7
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_date_time_picker_field($field)
    {
    }
    /**
     * validate_user_field
     *
     * Adds compatibility with deprecated settings
     *
     * @date    23/04/2014
     * @since   5.2.7
     *
     * @param   array $field The field array.
     * @return  array $field
     */
    function validate_user_field($field)
    {
    }
    /**
     * This function will provide compatibility with ACF4 field groups
     *
     * @type    function
     * @date    23/04/2014
     * @since   5.0.0
     *
     * @param   array $field_group
     * @return  $field_group
     */
    function validate_field_group($field_group)
    {
    }
    /**
     * validate_post_taxonomy_location_rule
     *
     * description
     *
     * @date    27/8/18
     * @since   5.7.4
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function validate_post_taxonomy_location_rule($rule)
    {
    }
}
#[\AllowDynamicProperties]
class acf_fields
{
    /** @var array Contains an array of field type instances */
    var $types = array();
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.4.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This function will register a field type instance
     *
     * @type    function
     * @date    6/07/2016
     * @since   5.4.0
     *
     * @param   string $class
     * @return  void
     */
    function register_field_type($class)
    {
    }
    /**
     * This function will return a field type instance
     *
     * @type    function
     * @date    6/07/2016
     * @since   5.4.0
     *
     * @param   string $name
     * @return  mixed
     */
    function get_field_type($name)
    {
    }
    /**
     * This function will return true if a field type exists
     *
     * @type    function
     * @date    6/07/2016
     * @since   5.4.0
     *
     * @param   string $name
     * @return  mixed
     */
    function is_field_type($name)
    {
    }
    /**
     * This function will store a basic array of info about the field type
     * to later be overriden by the above register_field_type function
     *
     * @type    function
     * @date    29/5/17
     * @since   5.6.0
     *
     * @param   array $info
     * @return  void
     */
    function register_field_type_info($info)
    {
    }
    /**
     * This function will return an array of all field types
     *
     * @type    function
     * @date    6/07/2016
     * @since   5.4.0
     *
     * @param   string $name
     * @return  mixed
     */
    function get_field_types()
    {
    }
}
#[\AllowDynamicProperties]
class acf_field
{
    // field information properties.
    public $name = '';
    public $label = '';
    public $category = 'basic';
    public $description = '';
    public $doc_url = \false;
    public $tutorial_url = \false;
    public $preview_image = \false;
    public $pro = \false;
    public $defaults = array();
    public $l10n = array();
    public $public = \true;
    public $show_in_rest = \true;
    public $supports = array(
        'escaping_html' => \false,
        // Set true when a field handles its own HTML escaping in format_value
        'required' => \true,
    );
    /**
     * Initializes the `acf_field` class. To initialize a field type that is
     * extending this class, use the `initialize()` method in the child class instead.
     *
     * @since 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Initializes the field type. Overridden in child classes.
     *
     * @since 5.6.0
     */
    public function initialize()
    {
    }
    /**
     * Checks a function `is_callable()` before adding the filter, since
     * classes that extend `acf_field` might not implement all filters.
     *
     * @since 5.0.0
     *
     * @param string  $tag             The name of the filter to add the callback to.
     * @param string  $function_to_add The callback to be run when the filter is applied.
     * @param integer $priority        The priority to add the filter on.
     * @param integer $accepted_args   The number of args to pass to the function.
     * @return void
     * @phpstan-return void
     */
    public function add_filter($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     * Adds a filter specific to the current field type.
     *
     * @since 5.4.0
     *
     * @param string  $tag             The name of the filter to add the callback to.
     * @param string  $function_to_add The callback to be run when the filter is applied.
     * @param integer $priority        The priority to add the filter on.
     * @param integer $accepted_args   The number of args to pass to the function.
     * @return void
     */
    public function add_field_filter($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     * Checks a function `is_callable()` before adding the action, since
     * classes that extend `acf_field` might not implement all actions.
     *
     * @since 5.0.0
     *
     * @param string  $tag             The name of the action to add the callback to.
     * @param string  $function_to_add The callback to be run when the action is ran.
     * @param integer $priority        The priority to add the action on.
     * @param integer $accepted_args   The number of args to pass to the function.
     * @return void
     * @phpstan-return void
     */
    public function add_action($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     * Adds an action specific to the current field type.
     *
     * @since 5.4.0
     *
     * @param string  $tag             The name of the action to add the callback to.
     * @param string  $function_to_add The callback to be run when the action is ran.
     * @param integer $priority        The priority to add the action on.
     * @param integer $accepted_args   The number of args to pass to the function.
     * @return void
     */
    public function add_field_action($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     * Appends default settings to a field.
     * Runs on `acf/validate_field/type={$this->name}`.
     *
     * @since 3.6
     *
     * @param array $field The field array.
     * @return array $field
     */
    public function validate_field($field)
    {
    }
    /**
     * Append l10n text translations to an array which is later passed to JS.
     * Runs on `acf/input/admin_l10n`.
     *
     * @since 3.6
     *
     * @param array $l10n
     * @return array $l10n
     */
    public function input_admin_l10n($l10n)
    {
    }
    /**
     * Add additional validation for fields being updated via the REST API.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP_Error
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Return an array of links for addition to the REST API response. Each link is an array and must have both `rel` and
     * `href` keys. The `href` key must be a REST API resource URL. If a link is marked as `embeddable`, the `_embed` URL
     * parameter will trigger WordPress to dispatch an internal sub request and load the object within the same request
     * under the `_embedded` response property.
     *
     * e.g;
     *   [
     *       [
     *           'rel' => 'acf:post',
     *           'href' => 'https://example.com/wp-json/wp/v2/posts/497',
     *           'embeddable' => true,
     *       ],
     *       [
     *           'rel' => 'acf:user',
     *           'href' => 'https://example.com/wp-json/wp/v2/users/2',
     *           'embeddable' => true,
     *       ],
     *   ]
     *
     * @param mixed          $value   The raw (unformatted) field value.
     * @param string|integer $post_id
     * @param array          $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
    /**
     * Renders the "Required" setting on the field type "Validation" settings tab.
     *
     * @since 6.2.5
     *
     * @param array $field The field type being rendered.
     * @return void
     * @phpstan-return void
     */
    public function render_required_setting($field)
    {
    }
}
class acf_field__accordion extends \acf_field
{
    public $show_in_rest = \false;
    /**
     * initialize
     *
     * This function will setup the field type data
     *
     * @date  30/10/17
     * @since 5.6.3
     *
     * @param  void
     * @return void
     */
    function initialize()
    {
    }
    /**
     * render_field
     *
     * Create the HTML interface for your field
     *
     * @date  30/10/17
     * @since 5.6.3
     *
     * @param  array $field
     * @return void
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @param   $field  - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     * This filter is appied to the $field after it is loaded from the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
}
class acf_field_button_group extends \acf_field
{
    /**
     * initialize()
     *
     * This function will setup the field type data
     *
     * @date    18/9/17
     * @since   5.6.3
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Creates the field's input HTML
     *
     * @since   5.6.3
     *
     * @param   array $field The field settings array
     * @phpstan-return void
     */
    public function render_field($field)
    {
    }
    /**
     * render_field_settings()
     *
     * Creates the field's settings HTML
     *
     * @date    18/9/17
     * @since   5.6.3
     *
     * @param   array $field The field settings array
     * @return  void
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is appied to the $field before it is saved to the database
     *
     * @date    18/9/17
     * @since   5.6.3
     *
     * @param   array $field The field array holding all the field options
     * @return  $field
     */
    function update_field($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db
     *
     * @date    18/9/17
     * @since   5.6.3
     *
     * @param   mixed $value   The value found in the database
     * @param   mixed $post_id The post ID from which the value was loaded from
     * @param   array $field   The field array holding all the field options
     * @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     * This function will translate field settings
     *
     * @date    18/9/17
     * @since   5.6.3
     *
     * @param   array $field The field array holding all the field options
     * @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @date    18/9/17
     * @since   5.6.3
     *
     * @param   mixed $value   The value found in the database
     * @param   mixed $post_id The post ID from which the value was loaded from
     * @param   array $field   The field array holding all the field options
     * @return  $value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    function get_rest_schema(array $field)
    {
    }
}
class acf_field_checkbox extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   array $field the $field being rendered
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   array $field the $field being edited
     * @return  void
     */
    function render_field($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    15/7/17
     * @since   5.6.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_field_choices($field)
    {
    }
    /**
     * Validates values for the checkbox field
     *
     * @since 6.0.0
     *
     * @param  boolean $valid If the field is valid.
     * @param  mixed   $value The value to validate.
     * @param  array   $field The main field array.
     * @param  string  $input The input element's name attribute.
     * @return boolean
     */
    public function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    15/7/17
     * @since   5.6.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_field_toggle($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    15/7/17
     * @since   5.6.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_field_custom($field)
    {
    }
    function walk($choices = array(), $args = array(), $depth = 0)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is appied to the $field before it is saved to the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     * @param   $post_id - the field group ID (post_type = acf)
     *
     * @return  $field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * This function will translate field settings
     *
     * @type    function
     * @date    8/03/2016
     * @since   5.3.2
     *
     * @param   array $field
     * @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class acf_field_color_picker extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Format the value for use in templates. At this stage, the value has been loaded from the
     * database and is being returned by an API function such as get_field(), the_field(), etc.
     *
     * @since 5.10
     *
     * @param  mixed   $value   The field value
     * @param  integer $post_id The post ID
     * @param  array   $field   The field array
     * @return string|array
     */
    public function format_value($value, $post_id, $field)
    {
    }
}
class acf_field_date_picker extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return void
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is applied to the $field after it is loaded from the database
     * and ensures the return and display values are set.
     *
     * @type    filter
     * @since   5.11.0
     * @date    28/09/21
     *
     * @param  array $field The field array holding all the field options.
     * @return array
     */
    public function load_field($field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param  array $field The field array
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_date_and_time_picker extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return void
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type  filter
     * @since 3.6
     *
     * @param  mixed $value   The value which was loaded from the database
     * @param  mixed $post_id The post_id from which the value was loaded
     * @param  array $field   The field array holding all the field options
     * @return mixed $value   The modified value
     */
    public function format_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is applied to the $field after it is loaded from the database
     * and ensures the return and display values are set.
     *
     * @type  filter
     * @since 5.11.0
     *
     * @param  array $field The field array holding all the field options.
     * @return array
     */
    public function load_field($field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class acf_field_email extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * Validate the email value. If this method returns TRUE, the input value is valid. If
     * FALSE or a string is returned, the input value is invalid and the user is shown a
     * notice. If a string is returned, the string is show as the message text.
     *
     * @param  boolean $valid Whether the value is valid.
     * @param  mixed   $value The field value.
     * @param  array   $field The field array.
     * @param  string  $input The request variable name for the inbound field.
     * @return boolean|string
     */
    public function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class acf_field_file extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    27/01/13
     * @since   3.6.0
     *
     * @param   array $vars
     * @return  $vars
     */
    function get_media_item_args($vars)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * validate_value
     *
     * This function will validate a basic file input
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Validates file fields updated via the REST API.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP_Error
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
#[\AllowDynamicProperties]
class acf_field_google_map extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return void
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * load_value
     *
     * Filters the value loaded from the database.
     *
     * @date    16/10/19
     * @since   5.8.1
     *
     * @param   mixed $value   The value loaded from the database.
     * @param   mixed $post_id The post ID where the value is saved.
     * @param   array $field   The field settings array.
     * @return  array|false
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
#[\AllowDynamicProperties]
class acf_field__group extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * This filter is appied to the $field after it is loaded from the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value found in the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     * @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     *
     * @param  mixed   $value       The value which was loaded from the database.
     * @param  mixed   $post_id     The $post_id from which the value was loaded.
     * @param  array   $field       The field array holding all the field options.
     * @param  boolean $escape_html Should the field return a HTML safe formatted value.
     * @return mixed the modified value
     */
    public function format_value($value, $post_id, $field, $escape_html = \false)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $field - the field array holding all the field options
     * @param   $post_id - the post_id of which the value will be saved
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * This function will modify sub fields ready for update / load
     *
     * @type    function
     * @date    4/11/16
     * @since   5.5.0
     *
     * @param   array $field
     * @return  $field
     */
    function prepare_field_for_db($field)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     * @phpstan-return void
     */
    function render_field($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    12/07/2016
     * @since   5.4.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_field_block($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    12/07/2016
     * @since   5.4.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_field_table($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This filter is appied to the $field before it is duplicated and saved to the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the modified field
     */
    function duplicate_field($field)
    {
    }
    /**
     * prepare_field_for_export
     *
     * Prepares the field for export.
     *
     * @date    11/03/2014
     * @since   5.0.0
     *
     * @param   array $field The field settings.
     * @return  array
     */
    function prepare_field_for_export($field)
    {
    }
    /**
     * prepare_field_for_import
     *
     * Returns a flat array of fields containing all sub fields ready for import.
     *
     * @date    11/03/2014
     * @since   5.0.0
     *
     * @param   array $field The field settings.
     * @return  array
     */
    function prepare_field_for_import($field)
    {
    }
    /**
     * Called when deleting this field's value.
     *
     * @date    1/07/2015
     * @since   5.2.3
     *
     * @param   mixed  $post_id  The post ID being saved
     * @param   string $meta_key The field name as seen by the DB
     * @param   array  $field    The field settings
     * @return  void
     */
    function delete_value($post_id, $meta_key, $field)
    {
    }
    /**
     * delete_field
     *
     * Called when deleting a field of this type.
     *
     * @date    8/11/18
     * @since   5.8.0
     *
     * @param   arra $field The field settings.
     * @return  void
     */
    function delete_field($field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param integer|string $post_id
     * @param array          $field
     * @return array|mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_image extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * Renders the field HTML.
     *
     * @date    23/01/13
     * @since   3.6.0
     *
     * @param   array $field The field settings.
     * @return  void
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    27/01/13
     * @since   3.6.0
     *
     * @param   array $vars
     * @return  $vars
     */
    function get_media_item_args($vars)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * This function will validate a basic file input
     *
     * @type    function
     * @since   5.0.0
     *
     * @param  boolean $valid The current validity status.
     * @param  mixed   $value The field value.
     * @param  array   $field The field array.
     * @param  string  $input The name of the input in the POST object.
     * @return boolean The validity status.
     */
    public function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Additional validation for the image field when submitted via REST.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP_Error
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param  array $field The field array
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param  mixed          $value   The field value
     * @param  string|integer $post_id The post ID
     * @param  array          $field   The field array
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_link extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/5/17
     * @since   5.5.13
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function get_link($value = '')
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     */
    public function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class acf_field_message extends \acf_field
{
    public $show_in_rest = \false;
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @param   $field  - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     * This function will translate field settings
     *
     * @type    function
     * @date    8/03/2016
     * @since   5.3.2
     *
     * @param   array $field
     * @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     * This filter is appied to the $field after it is loaded from the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
}
class acf_field_number extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $field - the field array holding all the field options
     * @param   $post_id - the post_id of which the value will be saved
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
#[\AllowDynamicProperties]
class acf_field_oembed extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * This function will prepare the field for input
     *
     * @type    function
     * @date    14/2/17
     * @since   5.5.8
     *
     * @param   array $field
     * @return  int
     */
    function prepare_field($field)
    {
    }
    /**
     * Attempts to fetch the HTML for the provided URL using oEmbed.
     *
     * @date    24/01/2014
     * @since   5.0.0
     *
     * @param string         $url    The URL that should be embedded.
     * @param integer|string $width  Optional maxwidth value passed to the provider URL.
     * @param integer|string $height Optional maxheight value passed to the provider URL.
     * @return string|false The embedded HTML on success, false on failure.
     */
    function wp_oembed_get($url = '', $width = 0, $height = 0)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    24/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return never
     */
    function ajax_query()
    {
    }
    /**
     * This function will return an array of data formatted for use in a select2 AJAX response
     *
     * @type    function
     * @date    15/10/2014
     * @since   5.0.9
     *
     * @param   array $options
     * @return  array
     */
    function get_ajax_query($args = array())
    {
    }
    /**
     * render_field()
     *
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @param   $field  - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template.
     *
     * @type    filter
     * @since   3.6
     *
     * @param  mixed $value   The value which was loaded from the database.
     * @param  mixed $post_id The $post_id from which the value was loaded.
     * @param  array $field   The field array holding all the field options.
     * @return mixed the modified value
     */
    public function format_value($value, $post_id, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class acf_field_output extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   array $field the $field being rendered
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   array $field the $field being edited
     * @return  void
     * @phpstan-return void
     */
    function render_field($field)
    {
    }
}
class acf_field_page_link extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    24/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     * This function will return an array containing id, text and maybe description data
     *
     * @type    function
     * @date    7/07/2016
     * @since   5.4.0
     *
     * @param   mixed $id
     * @param   string $text
     * @return  array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     * This function returns the HTML for a result
     *
     * @type    function
     * @date    1/11/2013
     * @since   5.0.0
     *
     * @param   object $post
     * @param   array $field
     * @param   int $post_id the post_id to which this value is saved to
     * @return  string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     * This function will return an array of posts for a given field value
     *
     * @type    function
     * @date    13/06/2014
     * @since   5.0.0
     *
     * @param   array $value
     * @return  $value
     */
    function get_posts($value, $field)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Validates page link fields updated via the REST API.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP_Error
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * @see \acf_field::get_rest_links()
     * @param mixed          $value   The raw (unformatted) field value.
     * @param integer|string $post_id
     * @param array          $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_password extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
}
class acf_field_post_object extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     */
    public function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    24/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     * This function will return an array of data formatted for use in a select2 AJAX response
     *
     * @type    function
     * @date    15/10/2014
     * @since   5.0.9
     *
     * @param   array $options
     * @return  array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     * This function will return an array containing id, text and maybe description data
     *
     * @type    function
     * @date    7/07/2016
     * @since   5.4.0
     *
     * @param   mixed $id
     * @param   string $text
     * @return  array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     * This function returns the HTML for a result
     *
     * @type    function
     * @date    1/11/2013
     * @since   5.0.0
     *
     * @param   object $post
     * @param   array $field
     * @param   int $post_id the post_id to which this value is saved to
     * @return  string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Advanced" tab.
     *
     * @since 6.2
     *
     * @param array $field The field settings array.
     * @return void
     */
    public function render_field_advanced_settings($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value found in the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     * @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * Filters the field value before it is saved into the database.
     *
     * @since 3.6
     *
     * @param  mixed   $value   The value which will be saved in the database.
     * @param  integer $post_id The post_id of which the value will be saved.
     * @param  array   $field   The field array holding all the field options.
     * @return mixed   $value   The modified value.
     */
    public function update_value($value, $post_id, $field)
    {
    }
    /**
     * This function will return an array of posts for a given field value
     *
     * @type    function
     * @date    13/06/2014
     * @since   5.0.0
     *
     * @param   array $value
     * @return  $value
     */
    function get_posts($value, $field)
    {
    }
    /**
     * Validates post object fields updated via the REST API.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP_Error
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * @see \acf_field::get_rest_links()
     * @param mixed          $value   The raw (unformatted) field value.
     * @param integer|string $post_id
     * @param array          $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_radio extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   array $field the $field being rendered
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   array $field the $field being edited
     * @return  void
     * @phpstan-return void
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is appied to the $field before it is saved to the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     * @param   $post_id - the field group ID (post_type = acf)
     *
     * @return  $field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     * @todo    Fix bug where $field was found via json and has no ID
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db
     *
     * @type    filter
     * @since   5.2.9
     * @date    23/01/13
     *
     * @param   $value - the value found in the database
     * @param   $post_id - the post_id from which the value was loaded from
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the value to be saved in te database
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     * This function will translate field settings
     *
     * @type    function
     * @date    8/03/2016
     * @since   5.3.2
     *
     * @param   array $field
     * @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    function get_rest_schema(array $field)
    {
    }
}
class acf_field_range extends \acf_field_number
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_relationship extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     */
    public function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    24/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     * This function will return an array of data formatted for use in a select2 AJAX response
     *
     * @type    function
     * @date    15/10/2014
     * @since   5.0.9
     *
     * @param   array $options
     * @return  array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     * This function will return an array containing id, text and maybe description data
     *
     * @type    function
     * @date    7/07/2016
     * @since   5.4.0
     *
     * @param   mixed $id
     * @param   string $text
     * @return  array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     * This function returns the HTML for a result
     *
     * @type    function
     * @date    1/11/2013
     * @since   5.0.0
     *
     * @param   object $post
     * @param   array $field
     * @param   int $post_id the post_id to which this value is saved to
     * @return  string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Advanced" tab.
     *
     * @since 6.2
     *
     * @param array $field The field settings array.
     * @return void
     */
    public function render_field_advanced_settings($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Filters the field value before it is saved into the database.
     *
     * @since 3.6
     *
     * @param mixed   $value   The value which will be saved in the database.
     * @param integer $post_id The post_id of which the value will be saved.
     * @param array   $field   The field array holding all the field options.
     *
     * @return mixed $value The modified value.
     */
    public function update_value($value, $post_id, $field)
    {
    }
    /**
     * Validates relationship fields updated via the REST API.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP_Error
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * @see \acf_field::get_rest_links()
     * @param mixed          $value   The raw (unformatted) field value.
     * @param integer|string $post_id
     * @param array          $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_select extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return void
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    24/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     * This function will return an array of data formatted for use in a select2 AJAX response
     *
     * @since   5.0.9
     *
     * @param array $options An array of options.
     * @return array A select2 compatible array of options.
     */
    public function get_ajax_query($options = array())
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value found in the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     * @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *
     * This filter is appied to the $field before it is saved to the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     * @param   $post_id - the field group ID (post_type = acf)
     *
     * @return  $field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * This function will translate field settings
     *
     * @type    function
     * @date    8/03/2016
     * @since   5.3.2
     *
     * @param   array $field
     * @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    function format_value_single($value, $post_id, $field)
    {
    }
    /**
     * Validates select fields updated via the REST API.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP_Error
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Formats the choices available for the REST API.
     *
     * @since 6.2
     *
     * @param array $choices The choices for the field.
     * @return array
     */
    public function format_rest_choices($choices)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field The main field array.
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class acf_field_separator extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * This filter is appied to the $field after it is loaded from the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
}
class acf_field_tab extends \acf_field
{
    public $show_in_rest = \false;
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @param   $field  - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     * This filter is appied to the $field after it is loaded from the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the field array holding all the field options
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
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     */
    public function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    24/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     * This function will return an array of data formatted for use in a select2 AJAX response
     *
     * @type    function
     * @date    15/10/2014
     * @since   5.0.9
     *
     * @param   array $options
     * @return  array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     * Returns the Term's title displayed in the field UI.
     *
     * @date    1/11/2013
     * @since   5.0.0
     *
     * @param   WP_Term $term    The term object.
     * @param   array   $field   The field settings.
     * @param   mixed   $post_id The post_id being edited.
     * @return  string
     */
    function get_term_title($term, $field, $post_id = 0)
    {
    }
    /**
     * This function will return an array of terms for a given field value
     *
     * @type    function
     * @date    13/06/2014
     * @since   5.0.0
     *
     * @param   array $value
     * @return  $value
     */
    function get_terms($value, $taxonomy = 'category')
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value found in the database
     * @param   $post_id - the post_id from which the value was loaded from
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the value to be saved in te database
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     * Filters the field value before it is saved into the database.
     *
     * @since 3.6
     *
     * @param  mixed   $value   The value which will be saved in the database.
     * @param  integer $post_id The post_id of which the value will be saved.
     * @param  array   $field   The field array holding all the field options.
     * @return mixed $value The modified value.
     */
    public function update_value($value, $post_id, $field)
    {
    }
    /**
     * This function will save any terms in the save_post_terms array
     *
     * @since   5.0.9
     *
     * @param  mixed $post_id The ACF post ID to save to.
     * @return void
     */
    public function save_post($post_id)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - an array holding all the field's data
     * @phpstan-return void
     */
    function render_field($field)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - an array holding all the field's data
     */
    function render_field_select($field)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @since   3.6
     *
     * @param array $field an array holding all the field's data.
     */
    public function render_field_checkbox($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Advanced" tab.
     *
     * @since 6.2
     *
     * @param array $field The field settings array.
     * @return void
     */
    public function render_field_advanced_settings($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    17/04/2015
     * @since   5.2.3
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return never
     */
    function ajax_add_term()
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * @see \acf_field::get_rest_links()
     * @param mixed          $value   The raw (unformatted) field value.
     * @param integer|string $post_id
     * @param array          $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
}
class acf_field_text extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @param   $field  - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * validate_value
     *
     * Validates a field's value.
     *
     * @date    29/1/19
     * @since   5.7.11
     *
     * @param   bool|string Whether the value is vaid or not.
     * @param   mixed                                          $value The field value.
     * @param   array                                          $field The field array.
     * @param   string                                         $input The HTML input name.
     * @return  bool|string
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    function get_rest_schema(array $field)
    {
    }
}
class acf_field_textarea extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @param   $field  - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * validate_value
     *
     * Validates a field's value.
     *
     * @date    29/1/19
     * @since   5.7.11
     *
     * @param   bool|string Whether the value is vaid or not.
     * @param   mixed                                          $value The field value.
     * @param   array                                          $field The field array.
     * @param   string                                         $input The HTML input name.
     * @return  bool|string
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    function get_rest_schema(array $field)
    {
    }
}
class acf_field_time_picker extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     * @return  mixed $value the modified value
     */
    public function format_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is applied to the $field after it is loaded from the database
     * and ensures the return and display values are set.
     *
     * @type  filter
     * @since 5.11.0
     *
     * @param  array $field The field array holding all the field options.
     * @return array
     */
    public function load_field($field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param  array $field The field array.
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class acf_field_true_false extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This function will translate field settings
     *
     * @type    function
     * @date    8/03/2016
     * @since   5.3.2
     *
     * @param   array $field
     * @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
/**
 * The URL field class.
 */
class acf_field_url extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @since 5.0.0
     */
    public function initialize()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @since 3.6
     *
     * @param array $field An array holding all the field's data.
     */
    public function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @since 3.6
     *
     * @param array $field An array holding all the field's data.
     */
    public function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    public function render_field_presentation_settings($field)
    {
    }
    /**
     * Validate the fields value is correctly formatted as a URL
     *
     * @since   5.0.0
     *
     * @param  mixed  $valid The current validity of the field value. Boolean true if valid, a validation error message string if not.
     * @param  string $value The value of the field.
     * @param  array  $field Field object array.
     * @param  string $input The form input name for this field.
     * @return mixed Boolean true if valid, a validation error message string if not.
     */
    public function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db, and before it is returned to the template
     *
     * @since 6.2.6
     *
     * @param  mixed   $value       The value which was loaded from the database.
     * @param  mixed   $post_id     The $post_id from which the value was loaded.
     * @param  array   $field       The field array holding all the field options.
     * @param  boolean $escape_html Should the field return a HTML safe formatted value.
     * @return mixed $value The modified value
     */
    public function format_value($value, $post_id, $field, $escape_html)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param  array $field The field object.
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class ACF_Field_User extends \ACF_Field
{
    /**
     * Initializes the field type.
     *
     * @date    5/03/2014
     * @since   5.0.0
     */
    function initialize()
    {
    }
    /**
     * Renders the field settings HTML.
     *
     * @date    23/01/13
     * @since   3.6.0
     *
     * @param   array $field The ACF field.
     * @return  void
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Advanced" tab.
     *
     * @since 6.2
     *
     * @param array $field The field settings array.
     * @return void
     */
    public function render_field_advanced_settings($field)
    {
    }
    /**
     * Renders the field input HTML.
     *
     * @date    23/01/13
     * @since   3.6.0
     *
     * @param   array $field The ACF field.
     * @return  void
     */
    function render_field($field)
    {
    }
    /**
     * Returns the result text for a fiven WP_User object.
     *
     * @date    1/11/2013
     * @since   5.0.0
     *
     * @param   WP_User      $user    The WP_User object.
     * @param   array        $field   The ACF field related to this query.
     * @param   int|string $post_id The post_id being edited.
     * @return  string
     */
    function get_result($user, $field, $post_id = 0)
    {
    }
    /**
     * Filters the field value after it is loaded from the database.
     *
     * @date    23/01/13
     * @since   3.6.0
     *
     * @param   mixed $value   The field value.
     * @param   mixed $post_id The post ID where the value is saved.
     * @param   array $field   The field array containing all settings.
     * @return  mixed
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     * Filters the field value after it is loaded from the database but before it is returned to the front-end API.
     *
     * @date    23/01/13
     * @since   3.6.0
     *
     * @param   mixed $value   The field value.
     * @param   mixed $post_id The post ID where the value is saved.
     * @param   array $field   The field array containing all settings.
     * @return  mixed
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * Filters the field value before it is saved into the database.
     *
     * @since   3.6.0
     *
     * @param  mixed $value   The field value.
     * @param  mixed $post_id The post ID where the value is saved.
     * @param  array $field   The field array containing all settings.
     * @return mixed $value   The modified value.
     */
    public function update_value($value, $post_id, $field)
    {
    }
    /**
     * Callback for the AJAX query request.
     *
     * @date    24/10/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function ajax_query()
    {
    }
    /**
     * Runs during the AJAX query initialization.
     *
     * @date    9/3/20
     * @since   5.8.8
     *
     * @param   array          $request The query request.
     * @param   ACF_Ajax_Query $query   The query object.
     * @return  void
     */
    function ajax_query_init($request, $query)
    {
    }
    /**
     * Filters the AJAX query args.
     *
     * @date    9/3/20
     * @since   5.8.8
     *
     * @param   array          $args    The query args.
     * @param   array          $request The query request.
     * @param   ACF_Ajax_Query $query   The query object.
     * @return  array
     */
    function ajax_query_args($args, $request, $query)
    {
    }
    /**
     * Filters the WP_User_Query search columns.
     *
     * @date    9/3/20
     * @since   5.8.8
     *
     * @param   array         $columns       An array of column names to be searched.
     * @param   string        $search        The search term.
     * @param   WP_User_Query $WP_User_Query The WP_User_Query instance.
     * @return  array
     */
    function ajax_query_search_columns($columns, $search, $WP_User_Query, $query)
    {
    }
    /**
     * Filters the AJAX Query result.
     *
     * @date    9/3/20
     * @since   5.8.8
     *
     * @param   array          $item  The choice id and text.
     * @param   WP_User        $user  The user object.
     * @param   ACF_Ajax_Query $query The query object.
     * @return  array
     */
    function ajax_query_result($item, $user, $query)
    {
    }
    /**
     * Return an array of data formatted for use in a select2 AJAX response.
     *
     * @date    15/10/2014
     * @since   5.0.9
     * @deprecated 5.8.9
     *
     * @param   array $args An array of query args.
     * @return  array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     * Filters the WP_User_Query search columns.
     *
     * @date    15/10/2014
     * @since   5.0.9
     * @deprecated 5.8.9
     *
     * @param   array         $columns       An array of column names to be searched.
     * @param   string        $search        The search term.
     * @param   WP_User_Query $WP_User_Query The WP_User_Query instance.
     * @return  array
     */
    function user_search_columns($columns, $search, $WP_User_Query)
    {
    }
    /**
     * Validates user fields updated via the REST API.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP_Error
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * @see \acf_field::get_rest_links()
     * @param mixed          $value   The raw (unformatted) field value.
     * @param integer|string $post_id
     * @param array          $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_wysiwyg extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * This function will add filters to 'acf_the_content'
     *
     * @type    function
     * @date    20/09/2016
     * @since   5.4.0
     *
     * @param   void
     * @return  void
     */
    function add_filters()
    {
    }
    /**
     * This function will return an array of toolbars for the WYSIWYG field
     *
     * @type    function
     * @date    18/04/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  array
     */
    function get_toolbars()
    {
    }
    /**
     * Registers toolbars data for the WYSIWYG field.
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   void
     * @return  void
     */
    function acf_enqueue_uploader()
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param array $field An array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db, and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     *
     * @param  mixed   $value       The value which was loaded from the database.
     * @param  mixed   $post_id     The $post_id from which the value was loaded.
     * @param  array   $field       The field array holding all the field options.
     * @param  boolean $escape_html Should the field return a HTML safe formatted value.
     * @return mixed   $value       The modified value
     */
    public function format_value($value, $post_id, $field, $escape_html)
    {
    }
}
class acf_form_attachment
{
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This action is run after post query but before any admin script / head actions.
     * It is a good place to register all actions.
     *
     * @type    action (admin_enqueue_scripts)
     * @date    26/01/13
     * @since   3.6.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     * This function will add acf_form_data to the WP 4.0 attachment grid
     *
     * @type    action (admin_footer)
     * @date    11/09/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function admin_footer()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function edit_attachment($form_fields, $post)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function save_attachment($post, $attachment)
    {
    }
}
class acf_form_comment
{
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This function will check if the current page is for a post/page edit form
     *
     * @type    function
     * @date    23/06/12
     * @since   3.1.8
     *
     * @param   void
     * @return  boolean
     */
    function validate_page()
    {
    }
    /**
     * This action is run after post query but before any admin script / head actions.
     * It is a good place to register all actions.
     *
     * @type    action (admin_enqueue_scripts)
     * @date    26/01/13
     * @since   3.6.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     * This function is run on the admin comment.php page and will render the ACF fields within custom metaboxes to look native
     *
     * @type    function
     * @date    19/10/13
     * @since   5.0.0
     *
     * @param   object $comment
     * @return  void
     */
    function edit_comment($comment)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    18/04/2016
     * @since   5.3.8
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function comment_form_field_comment($html)
    {
    }
    /**
     * This function will save the comment data
     *
     * @type    function
     * @date    19/10/13
     * @since   5.0.0
     *
     * @param   comment_id (int)
     * @return  void
     */
    function save_comment($comment_id)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    27/03/2015
     * @since   5.1.5
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function admin_footer()
    {
    }
}
#[\AllowDynamicProperties]
class acf_form_customizer
{
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This action is run after post query but before any admin script / head actions.
     * It is a good place to register all actions.
     *
     * @type    action (admin_enqueue_scripts)
     * @date    26/01/13
     * @since   3.6.0
     *
     * @param   void
     * @return  void
     */
    function customize_controls_init()
    {
    }
    /**
     * This function will hook into the widget update filter and save ACF data
     *
     * @type    function
     * @date    27/05/2015
     * @since   5.2.3
     *
     * @param   array $instance widget settings
     * @param   array $new_instance widget settings
     * @param   array $old_instance widget settings
     * @param   object $widget widget info
     * @return  $instance
     */
    function save_widget($instance, $new_instance, $old_instance, $widget)
    {
    }
    /**
     * This function will return an array of cutomizer settings that include ACF data
     * similar to `$customizer->settings();`
     *
     * @type    function
     * @date    22/03/2016
     * @since   5.3.2
     *
     * @param   object $customizer
     * @return  mixed $value
     */
    function settings($customizer)
    {
    }
    /**
     * This function is called when customizer preview is initialized
     *
     * @type    function
     * @date    22/03/2016
     * @since   5.3.2
     *
     * @param   object $customizer
     * @return  void
     * @phpstan-return void
     */
    function customize_preview_init($customizer)
    {
    }
    /**
     * pre_load_value
     *
     * Used to inject preview value
     *
     * @date    2/2/18
     * @since   5.6.5
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function pre_load_value($value, $post_id, $field)
    {
    }
    /**
     * pre_load_reference
     *
     * Used to inject preview value
     *
     * @date    2/2/18
     * @since   5.6.5
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function pre_load_reference($field_key, $field_name, $post_id)
    {
    }
    /**
     * This function is called when customizer saves a widget.
     * Normally, the widget_update_callback filter would be used, but the customizer disables this and runs a custom action
     * class-customizer-settings.php will save the widget data via the function set_root_value which uses update_option
     *
     * @type    function
     * @date    22/03/2016
     * @since   5.3.2
     *
     * @param   object $customizer
     * @return  void
     * @phpstan-return void
     */
    function customize_save($customizer)
    {
    }
    /**
     * This function will remove the [acf] data from widget insance
     *
     * @type    function
     * @date    22/03/2016
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function pre_update_option($value, $option, $old_value)
    {
    }
    /**
     * This function will add some custom HTML to the footer of the edit page
     *
     * @type    function
     * @date    11/06/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function admin_footer()
    {
    }
}
#[\AllowDynamicProperties]
class acf_form_front
{
    /** @var array An array of default fields */
    public $fields = array();
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    28/2/17
     * @since   5.5.8
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_form($args)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    28/2/17
     * @since   5.5.8
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function add_form($args = array())
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    28/2/17
     * @since   5.5.8
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function get_form($id = '')
    {
    }
    /**
     * This function will validate fields from the above array
     *
     * @type    function
     * @date    7/09/2016
     * @since   5.4.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_save_post()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    7/09/2016
     * @since   5.4.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function pre_save_post($post_id, $form)
    {
    }
    /**
     * This function will enqueue a form
     *
     * @type    function
     * @date    7/09/2016
     * @since   5.4.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function enqueue_form()
    {
    }
    /**
     * This function will maybe submit form data
     *
     * @type    function
     * @date    3/3/17
     * @since   5.5.10
     *
     * @param   void
     * @return  void
     */
    function check_submit_form()
    {
    }
    /**
     * This function will submit form data
     *
     * @type    function
     * @date    3/3/17
     * @since   5.5.10
     *
     * @param   void
     * @return  void
     */
    function submit_form($form)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    7/09/2016
     * @since   5.4.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_form($args = array())
    {
    }
}
class ACF_Form_Gutenberg
{
    /**
     * __construct
     *
     * Setup for class functionality.
     *
     * @date    13/12/18
     * @since   5.8.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * enqueue_block_editor_assets
     *
     * Allows a safe way to customize Guten-only functionality.
     *
     * @date    14/12/18
     * @since   5.8.0
     *
     * @param   void
     * @return  void
     */
    function enqueue_block_editor_assets()
    {
    }
    /**
     * add_meta_boxes
     *
     * Modify screen for Gutenberg.
     *
     * @date    13/12/18
     * @since   5.8.0
     *
     * @param   void
     * @return  void
     */
    function add_meta_boxes()
    {
    }
    /**
     * block_editor_meta_box_hidden_fields
     *
     * Modify screen for Gutenberg.
     *
     * @date    13/12/18
     * @since   5.8.0
     *
     * @param   void
     * @return  void
     */
    function block_editor_meta_box_hidden_fields()
    {
    }
    /**
     * filter_block_editor_meta_boxes
     *
     * description
     *
     * @date    5/4/19
     * @since   5.7.14
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function filter_block_editor_meta_boxes($wp_meta_boxes)
    {
    }
    /**
     * modify_user_option_meta_box_order
     *
     * Filters the `meta-box-order_{$post_type}` value by prepending "acf_after_title" data to "normal".
     * Fixes a bug where metaboxes with position "acf_after_title" do not appear in the block editor.
     *
     * @date    11/7/19
     * @since   5.8.2
     *
     * @param   array $stored_meta_box_order User's existing meta box order.
     * @return  array Modified array with meta boxes moved around.
     */
    function modify_user_option_meta_box_order($locations)
    {
    }
    /**
     * acf_validate_save_post
     *
     * Ignore errors during the Gutenberg "save metaboxes" AJAX request.
     * Allows data to save and prevent UX issues.
     *
     * @date    16/12/18
     * @since   5.8.0
     *
     * @param   void
     * @return  void
     */
    function acf_validate_save_post()
    {
    }
}
class acf_form_nav_menu
{
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This action is run after post query but before any admin script / head actions.
     * It is a good place to register all actions.
     *
     * @type    action (admin_enqueue_scripts)
     * @date    26/01/13
     * @since   3.6.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     * wp_nav_menu_item_custom_fields
     *
     * description
     *
     * @date    30/7/18
     * @since   5.6.9
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function wp_nav_menu_item_custom_fields($item_id, $item, $depth, $args, $id = '')
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    26/5/17
     * @since   5.6.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function update_nav_menu($menu_id)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    26/5/17
     * @since   5.6.0
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return void
     */
    function update_nav_menu_items($menu_id)
    {
    }
    /**
     * wp_get_nav_menu_items
     *
     * WordPress does not provide an easy way to find the current menu being edited.
     * This function listens to when a menu's items are loaded and stores the menu.
     * Needed on nav-menus.php page for new menu with no items
     *
     * @date    23/2/18
     * @since   5.6.9
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    function wp_get_nav_menu_items($items, $menu, $args)
    {
    }
    /**
     * Called when WP renders a menu edit form.
     * Used to set global data and customize the Walker class.
     *
     * @date    26/5/17
     * @since   5.6.0
     *
     * @param   string  $class   The walker class to use. Default 'Walker_Nav_Menu_Edit'.
     * @param   integer $menu_id ID of the menu being rendered.
     * @return  string
     */
    function wp_edit_nav_menu_walker($class, $menu_id = 0)
    {
    }
    /**
     * This function will loop over $_POST data and validate
     *
     * @type    action 'acf/validate_save_post' 5
     * @date    7/09/2016
     * @since   5.4.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function acf_validate_save_post()
    {
    }
    /**
     * This function will add some custom HTML to the footer of the edit page
     *
     * @type    function
     * @date    11/06/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function admin_footer()
    {
    }
}
class ACF_Form_Post
{
    /** @var string The first field groups style CSS. */
    var $style = '';
    /**
     * __construct
     *
     * Sets up the class functionality.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * initialize
     *
     * Sets up Form functionality.
     *
     * @date    19/9/18
     * @since   5.7.6
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function initialize()
    {
    }
    /**
     * add_meta_boxes
     *
     * Adds ACF metaboxes for the given $post_type and $post.
     *
     * @date    19/9/18
     * @since   5.7.6
     *
     * @param   string  $post_type The post type.
     * @param   WP_Post $post      The post being edited.
     * @return  void
     */
    function add_meta_boxes($post_type, $post)
    {
    }
    /**
     * Called after the title and before the content editor to render the after title metaboxes.
     * Also renders the CSS required to hide the "hide-on-screen" elements on the page based on the field group settings.
     *
     * @since 5.7.6
     */
    public function edit_form_after_title()
    {
    }
    /**
     * render_meta_box
     *
     * Renders the ACF metabox HTML.
     *
     * @date    19/9/18
     * @since   5.7.6
     *
     * @param   WP_Post                               $post The post being edited.
     * @param   array metabox The add_meta_box() args.
     * @return  void
     */
    function render_meta_box($post, $metabox)
    {
    }
    /**
     * wp_insert_post_empty_content
     *
     * Allows WP to insert a new post without title or post_content if ACF data exists.
     *
     * @date    16/07/2014
     * @since   5.0.1
     *
     * @param   boolean $maybe_empty Whether the post should be considered "empty".
     * @param   array   $postarr     Array of post data.
     * @return  boolean
     */
    function wp_insert_post_empty_content($maybe_empty, $postarr)
    {
    }
    /**
     * Checks if the $post is allowed to be saved.
     * Used to avoid triggering "acf/save_post" on dynamically created posts during save.
     *
     * @type    function
     * @date    26/06/2016
     * @since   5.3.8
     *
     * @param   WP_Post $post The post to check.
     * @return  boolean
     */
    function allow_save_post($post)
    {
    }
    /**
     * Triggers during the 'save_post' action to save the $_POST data.
     *
     * @since   1.0.0
     *
     * @param integer $post_id The post ID.
     * @param WP_Post $post    The post object.
     * @return integer
     */
    public function save_post($post_id, $post)
    {
    }
}
class acf_form_taxonomy
{
    var $view = 'add';
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This function will check if the current page is for a post/page edit form
     *
     * @type    function
     * @date    23/06/12
     * @since   3.1.8
     *
     * @param   void
     * @return  boolean
     */
    function validate_page()
    {
    }
    /**
     * This action is run after post query but before any admin script / head actions.
     * It is a good place to register all actions.
     *
     * @type    action (admin_enqueue_scripts)
     * @date    26/01/13
     * @since   3.6.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function add_term($taxonomy)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function edit_term($term, $taxonomy)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    27/03/2015
     * @since   5.1.5
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function admin_footer()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function save_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    15/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
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
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * admin_enqueue_scripts
     *
     * Checks current screen and enqueues scripts
     *
     * @date    17/4/18
     * @since   5.6.9
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     * login_form_register
     *
     * Customizes and enqueues scripts
     *
     * @date    17/4/18
     * @since   5.6.9
     *
     * @param   void
     * @return  void
     */
    function login_form_register()
    {
    }
    /**
     * Called during the user register form
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function render_register()
    {
    }
    /**
     * Called during the user edit form
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function render_edit($user)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return void
     */
    function render_new()
    {
    }
    /**
     * This function will render ACF fields for a given $post_id parameter
     *
     * @type    function
     * @since   5.0.0
     *
     * @param   int $user_id this can be set to 0 for a new user
     * @param   string $user_form used for location rule matching. edit | add | register
     * @param   string $el
     * @return  void
     * @phpstan-return void
     */
    function render($args = array())
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    27/03/2015
     * @since   5.1.5
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function admin_footer()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    8/10/13
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function save_user($user_id)
    {
    }
    /**
     * filter_registration_errors
     *
     * Validates $_POST data and appends any errors to prevent new user registration.
     *
     * @date    12/7/19
     * @since   5.8.1
     *
     * @param   WP_Error $errors               A WP_Error object containing any errors encountered during registration.
     * @param   string   $sanitized_user_login User's username after it has been sanitized.
     * @param   string   $user_email           User's email.
     * @return  WP_Error
     */
    function filter_registration_errors($errors, $sanitized_user_login, $user_email)
    {
    }
    /**
     * filter_pre_load_value
     *
     * Checks if a $_POST value exists for this field to allow persistent values.
     *
     * @date    12/7/19
     * @since   5.8.2
     *
     * @param   null         $null    A null placeholder.
     * @param   int|string $post_id The post id.
     * @param   array        $field   The field array.
     * @return  mixed
     */
    function filter_pre_load_value($null, $post_id, $field)
    {
    }
}
#[\AllowDynamicProperties]
class acf_form_widget
{
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This action is run after post query but before any admin script / head actions.
     * It is a good place to register all actions.
     *
     * @type    action (admin_enqueue_scripts)
     * @date    26/01/13
     * @since   3.6.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     * This function will loop over $_POST data and validate
     *
     * @type  action 'acf/validate_save_post' 5
     * @since 5.4.0
     * @phpstan-return void
     */
    public function acf_validate_save_post()
    {
    }
    /**
     * This function will render the fields for a widget form
     *
     * @type    function
     * @date    11/06/2014
     * @since   5.0.0
     *
     * @param   object $widget
     * @param   null $return
     * @param   object $instance
     * @return  int $post_id
     */
    function edit_widget($widget, $return, $instance)
    {
    }
    /**
     * This function will hook into the widget update filter and save ACF data
     *
     * @type    function
     * @date    27/05/2015
     * @since   5.2.3
     *
     * @param   array $instance widget settings
     * @param   array $new_instance widget settings
     * @param   array $old_instance widget settings
     * @param   object $widget widget info
     * @return  $instance
     */
    function save_widget($instance, $new_instance, $old_instance, $widget)
    {
    }
    /**
     * This function will add some custom HTML to the footer of the edit page
     *
     * @type    function
     * @date    11/06/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function admin_footer()
    {
    }
}
class ACF_Legacy_Locations
{
    /**
     * Magic __isset method for backwards compatibility.
     *
     * @date    10/4/20
     * @since   5.9.0
     *
     * @param   string $key Key name.
     * @return  boolean
     */
    public function __isset($key)
    {
    }
    /**
     * Magic __get method for backwards compatibility.
     *
     * @date    10/4/20
     * @since   5.9.0
     *
     * @param   string $key Key name.
     * @return  mixed
     */
    public function __get($key)
    {
    }
    /**
     * Magic __call method for backwards compatibility.
     *
     * @date    10/4/20
     * @since   5.9.0
     *
     * @param   string $name      The method name.
     * @param   array  $arguments The array of arguments.
     * @return  mixed
     */
    public function __call($name, $arguments)
    {
    }
}
class ACF_Local_JSON
{
    /**
     * Constructor.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function __construct()
    {
    }
    /**
     * Returns true if this component is enabled.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  boolean
     */
    public function is_enabled()
    {
    }
    /**
     * Gets the path(s) to load JSON from.
     *
     * @since 6.2
     *
     * @return array
     */
    public function get_load_paths()
    {
    }
    /**
     * Gets the path(s) to save JSON to.
     *
     * @since 6.2
     *
     * @param string $key  The key to get paths for (optional).
     * @param array  $post The main ACF post array (optional).
     * @return array
     */
    public function get_save_paths($key = '', $post = array())
    {
    }
    /**
     * Writes field group data to JSON file.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   array $field_group The field group.
     * @return  void
     */
    public function update_field_group($field_group)
    {
    }
    /**
     * Writes ACF posts to the JSON file.
     *
     * @since 6.1
     *
     * @param array $post The main ACF post array.
     * @return boolean
     */
    public function update_internal_post_type($post)
    {
    }
    /**
     * Deletes a field group JSON file.
     *
     * @date 14/4/20
     * @since 5.9.0
     *
     * @param  array $field_group The field group.
     * @return boolean
     */
    public function delete_field_group($field_group)
    {
    }
    /**
     * Deletes an ACF JSON file.
     *
     * @since 6.1
     *
     * @param array $post The main ACF post array.
     * @return boolean
     */
    public function delete_internal_post_type($post)
    {
    }
    /**
     * Includes all local JSON fields.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function include_fields()
    {
    }
    /**
     * Includes all local JSON post types.
     *
     * @since 6.1
     */
    public function include_post_types()
    {
    }
    /**
     * Includes all local JSON taxonomies.
     *
     * @since 6.1
     */
    public function include_taxonomies()
    {
    }
    /**
     * Scans for JSON field groups.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @return array
     */
    function scan_field_groups()
    {
    }
    /**
     * Scans for JSON files.
     *
     * @since 6.1
     *
     * @param string $post_type The ACF post type to scan for.
     * @return array
     */
    function scan_files($post_type = 'acf-field-group')
    {
    }
    /**
     * Returns an array of found JSON files.
     *
     * @date 14/4/20
     * @since 5.9.0
     *
     * @param string $post_type The ACF post type to get files for.
     * @return array
     */
    public function get_files($post_type = 'acf-field-group')
    {
    }
    /**
     * Saves an ACF JSON file.
     *
     * @date 17/4/20
     * @since 5.9.0
     *
     * @param string $key  The ACF post key.
     * @param array  $post The main ACF post array.
     * @return boolean
     */
    public function save_file($key, $post)
    {
    }
    /**
     * Deletes an ACF JSON file.
     *
     * @date 17/4/20
     * @since 5.9.0
     *
     * @param string $key  The ACF post key.
     * @param array  $post The main ACF post array.
     * @return boolean
     */
    public function delete_file($key, $post = array())
    {
    }
    /**
     * Includes all local JSON files.
     *
     * @date       10/03/2014
     * @since      5.0.0
     * @deprecated 5.9.0
     */
    public function include_json_folders()
    {
    }
    /**
     * Includes local JSON files within a specific folder.
     *
     * @date    01/05/2017
     * @since   5.5.13
     * @deprecated 5.9.0
     *
     * @param   string $path The path to a specific JSON folder.
     * @return  void
     */
    public function include_json_folder($path = '')
    {
    }
}
class ACF_Local_Meta
{
    /** @var array Storage for meta data. */
    var $meta = array();
    /** @var mixed Storage for the current post_id. */
    var $post_id = 0;
    /**
     * __construct
     *
     * Sets up the class functionality.
     *
     * @date    8/10/18
     * @since   5.8.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * add
     *
     * Adds postmeta to storage.
     * Accepts data in either raw or request format.
     *
     * @date    8/10/18
     * @since   5.8.0
     *
     * @param   array   $meta    An array of metdata to store.
     * @param   mixed   $post_id The post_id for this data.
     * @param   boolean $is_main Makes this postmeta visible to get_field() without a $post_id value.
     * @return  array
     */
    function add($meta = array(), $post_id = 0, $is_main = \false)
    {
    }
    /**
     * is_request
     *
     * Returns true if the supplied $meta is from a REQUEST (serialized <form> data).
     *
     * @date    11/3/19
     * @since   5.7.14
     *
     * @param   array $meta An array of metdata to check.
     * @return  boolean
     */
    function is_request($meta = array())
    {
    }
    /**
     * capture
     *
     * Returns a flattened array of meta for the given postdata.
     * This is achieved by simulating a save whilst capturing all meta changes.
     *
     * @date    26/2/19
     * @since   5.7.13
     *
     * @param   array $values  An array of raw values.
     * @param   mixed $post_id The post_id for this data.
     * @return  array
     */
    function capture($values = array(), $post_id = 0)
    {
    }
    /**
     * capture_update_metadata
     *
     * Records all meta activity and returns a non null value to bypass DB updates.
     *
     * @date    26/2/19
     * @since   5.7.13
     *
     * @param   null         $null    .
     * @param   int|string $post_id The post id.
     * @param   string       $name    The meta name.
     * @param   mixed        $value   The meta value.
     * @param   boolean      $hidden  If the meta is hidden (starts with an underscore).
     * @return  false.
     */
    function capture_update_metadata($null, $post_id, $name, $value, $hidden)
    {
    }
    /**
     * remove
     *
     * Removes postmeta from storage.
     *
     * @date    8/10/18
     * @since   5.8.0
     *
     * @param   mixed $post_id The post_id for this data.
     * @return  void
     */
    function remove($post_id = 0)
    {
    }
    /**
     * pre_load_meta
     *
     * Injects the local meta.
     *
     * @date    8/10/18
     * @since   5.8.0
     *
     * @param   null  $null    An empty parameter. Return a non null value to short-circuit the function.
     * @param   mixed $post_id The post_id for this data.
     * @return  mixed
     */
    function pre_load_meta($null, $post_id)
    {
    }
    /**
     * pre_load_metadata
     *
     * Injects the local meta.
     *
     * @date    8/10/18
     * @since   5.8.0
     *
     * @param   null         $null    An empty parameter. Return a non null value to short-circuit the function.
     * @param   int|string $post_id The post id.
     * @param   string       $name    The meta name.
     * @param   boolean      $hidden  If the meta is hidden (starts with an underscore).
     * @return  mixed
     */
    function pre_load_metadata($null, $post_id, $name, $hidden)
    {
    }
    /**
     * pre_load_post_id
     *
     * Injects the local post_id.
     *
     * @date    8/10/18
     * @since   5.8.0
     *
     * @param   null  $null    An empty parameter. Return a non null value to short-circuit the function.
     * @param   mixed $post_id The post_id for this data.
     * @return  mixed
     */
    function pre_load_post_id($null, $post_id)
    {
    }
}
abstract class ACF_Legacy_Location
{
    /**
     * Constructor.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function __construct()
    {
    }
    /**
     * Magic __call method for backwards compatibility.
     *
     * @date    10/4/20
     * @since   5.9.0
     *
     * @param   string $name      The method name.
     * @param   array  $arguments The array of arguments.
     * @return  mixed
     */
    public function __call($name, $arguments)
    {
    }
}
abstract class ACF_Location extends \ACF_Legacy_Location
{
    /**
     * The location rule name.
     *
     * @since 5.9.0
     * @var string
     */
    public $name = '';
    /**
     * The location rule label.
     *
     * @since 5.9.0
     * @var string
     */
    public $label = '';
    /**
     * The location rule category.
     *
     * Accepts "post", "page", "user", "forms" or a custom label.
     *
     * @since 5.9.0
     * @var string
     */
    public $category = 'post';
    /**
     * Whether or not the location rule is publicly accessible.
     *
     * @since 5.0.0
     * @var boolean
     */
    public $public = \true;
    /**
     * The object type related to this location rule.
     *
     * Accepts an object type discoverable by `acf_get_object_type()`.
     *
     * @since 5.9.0
     * @var string
     */
    public $object_type = '';
    /**
     * The object subtype related to this location rule.
     *
     * Accepts a custom post type or custom taxonomy.
     *
     * @since 5.9.0
     * @var string
     */
    public $object_subtype = '';
    /**
     * Constructor.
     *
     * @date    8/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function __construct()
    {
    }
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Returns an array of operators for this location.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public static function get_operators($rule)
    {
    }
    /**
     * Returns an array of possible values for this location.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
    /**
     * Returns the object_type connected to this location.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  string
     */
    public function get_object_type($rule)
    {
    }
    /**
     * Returns the object_subtype connected to this location.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  string|array
     */
    public function get_object_subtype($rule)
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Compares the given value and rule params returning true when they match.
     *
     * @date    17/9/19
     * @since   5.8.1
     *
     * @param   array $rule  The location rule data.
     * @param   mixed $value The value to compare against.
     * @return  boolean
     */
    public function compare_to_rule($value, $rule)
    {
    }
}
class ACF_Location_Attachment extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Comment extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Current_User_Role extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Current_User extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Nav_Menu_Item extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Nav_Menu extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Page_Parent extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Page_Template extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Page_Type extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Page extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Post_Category extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
    /**
     * Returns the object_subtype connected to this location.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  string|array
     */
    public function get_object_subtype($rule)
    {
    }
}
class ACF_Location_Post_Format extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Post_Status extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Post_Taxonomy extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
    /**
     * Returns the object_subtype connected to this location.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  string|array
     */
    public function get_object_subtype($rule)
    {
    }
}
class ACF_Location_Post_Template extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
    /**
     * Returns the object_subtype connected to this location.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  string|array
     */
    public function get_object_subtype($rule)
    {
    }
}
class ACF_Location_Post_Type extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
    /**
     * Returns the object_subtype connected to this location.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  string|array
     */
    public function get_object_subtype($rule)
    {
    }
}
class ACF_Location_Post extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Taxonomy extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
    /**
     * Returns the object_subtype connected to this location.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  string|array
     */
    function get_object_subtype($rule)
    {
    }
}
class ACF_Location_User_Form extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_User_Role extends \ACF_Location
{
    /**
     * initialize
     *
     * Sets up the class functionality.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Widget extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
#[\AllowDynamicProperties]
class acf_loop
{
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This function will return true if no loops exist
     *
     * @type    function
     * @date    3/03/2016
     * @since   5.3.2
     *
     * @param   void
     * @return  boolean
     */
    function is_empty()
    {
    }
    /**
     * This function will return true if a loop exists for the given array index
     *
     * @type    function
     * @date    3/03/2016
     * @since   5.3.2
     *
     * @param   int $i
     * @return  boolean
     */
    function is_loop($i = 0)
    {
    }
    /**
     * This function will return a valid array index for the given $i
     *
     * @type    function
     * @date    3/03/2016
     * @since   5.3.2
     *
     * @param   mixed $i
     * @return  int
     */
    function get_i($i = 0)
    {
    }
    /**
     * This function will add a new loop
     *
     * @type    function
     * @date    3/03/2016
     * @since   5.3.2
     *
     * @param   array $loop
     * @return  void
     */
    function add_loop($loop = array())
    {
    }
    /**
     * This function will update a loop's setting
     *
     * @type    function
     * @date    3/03/2016
     * @since   5.3.2
     *
     * @param   mixed $i
     * @param   string $key the loop setting name
     * @param   mixed $value the loop setting value
     * @return  boolean true on success
     */
    function update_loop($i = 'active', $key = \null, $value = \null)
    {
    }
    /**
     * This function will return a loop, or loop's setting for a given index & key
     *
     * @type    function
     * @date    3/03/2016
     * @since   5.3.2
     *
     * @param   mixed $i
     * @param   string $key the loop setting name
     * @return  mixed false on failure
     */
    function get_loop($i = 'active', $key = \null)
    {
    }
    /**
     * This function will remove a loop
     *
     * @type    function
     * @date    3/03/2016
     * @since   5.3.2
     *
     * @param   mixed $i
     * @return  boolean true on success
     */
    function remove_loop($i = 'active')
    {
    }
}
class ACF_Media
{
    /**
     * Constructor.
     *
     * @date    23/06/12
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function __construct()
    {
    }
    /**
     * Fires when ACF scrtips are enqueued.
     *
     * @date    27/4/18
     * @since   5.6.9
     *
     * @param   void
     * @return  void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Uploads attachments found in the basic `$_FILES` array.
     *
     * @date    24/10/2014
     * @since   5.0.9
     *
     * @param   string|integer $post_id The post ID being saved.
     * @return  void
     */
    public function save_files($post_id = 0)
    {
    }
    /**
     * Filters data for the current file being uploaded.
     *
     * @date    16/02/2015
     * @since   5.1.5
     *
     * @param   array $file An array of data for a single file.
     * @return  array
     */
    public function handle_upload_prefilter($file)
    {
    }
    /**
     * Fires during the WP Modal Query AJAX call.
     *
     * @date    26/06/2015
     * @since   5.2.3
     *
     * @param   void
     * @return  void
     */
    function wp_ajax_query_attachments()
    {
    }
    /**
     * Append acf_errors false for non-acf media library calls to prevent media library caching.
     *
     * @date    31/8/21
     * @since   5.10.2
     *
     * @param   array       $response   Array of prepared attachment data.
     * @param   WP_Post     $attachment Attachment object.
     * @param   array|false $meta       Array of attachment meta data, or false if there is none.
     * @return  array
     */
    function clear_acf_errors_for_core_requests($response, $attachment, $meta)
    {
    }
    /**
     * Filters attachment data as it is being prepared for JS.
     *
     * @date    21/5/21
     * @since   5.9.7
     *
     * @param   array       $response   Array of prepared attachment data.
     * @param   WP_Post     $attachment Attachment object.
     * @param   array|false $meta       Array of attachment meta data, or false if there is none.
     * @return  array
     */
    function wp_prepare_attachment_for_js($response, $attachment, $meta)
    {
    }
    /**
     * Filters the names and labels of the default image sizes.
     *
     * @date    21/5/21
     * @since   5.9.7
     *
     * @param   array $size_names Array of image size labels keyed by their name.
     * @return  array
     */
    function image_size_names_choose($size_names)
    {
    }
}
class ACF_Field_Group extends \ACF_Internal_Post_Type
{
    /**
     * The ACF internal post type name.
     *
     * @var string
     */
    public $post_type = 'acf-field-group';
    /**
     * The prefix for the key used in the main post array.
     *
     * @var string
     */
    public $post_key_prefix = 'group_';
    /**
     * The cache key for a singular post.
     *
     * @var string
     */
    public $cache_key = 'acf_get_field_group_post:key:';
    /**
     * The cache key for a collection of posts.
     *
     * @var string
     */
    public $cache_key_plural = 'acf_get_field_group_posts';
    /**
     * The hook name for a singular post.
     *
     * @var string
     */
    public $hook_name = 'field_group';
    /**
     * The hook name for a collection of posts.
     *
     * @var string
     */
    public $hook_name_plural = 'field_groups';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = 'field-groups';
    /**
     * Constructs the class.
     */
    public function __construct()
    {
    }
    /**
     * Gets the default settings array for an ACF field group.
     *
     * @return array
     */
    public function get_settings_array()
    {
    }
    /**
     * Get an ACF CPT object as an array.
     *
     * @since 6.1
     *
     * @param integer|WP_Post $id The post ID being queried.
     * @return array|boolean The main ACF array for the post, or false on failure.
     */
    public function get_post($id = 0)
    {
    }
    /**
     * Filter the posts returned by $this->get_posts().
     *
     * @since 6.1
     *
     * @param array $posts An array of posts to filter.
     * @param array $args  An array of args to filter by.
     * @return array
     */
    public function filter_posts($posts, $args = array())
    {
    }
    /**
     * Filters the field group data before it is updated in the database.
     *
     * @since 6.1
     *
     * @param array $field_group The field group being updated.
     * @return array
     */
    public function pre_update_field_group($field_group)
    {
    }
    /**
     * Deletes an ACF field group and related fields.
     *
     * @since 6.1
     *
     * @param integer|string $id The ID of the field group to delete.
     * @return boolean
     */
    public function delete_post($id = 0)
    {
    }
    /**
     * Trashes an ACF field group and related fields.
     *
     * @since 6.1
     *
     * @param integer|string $id The ID of the field group to trash.
     * @return boolean
     */
    public function trash_post($id = 0)
    {
    }
    /**
     * Restores an ACF field group and related fields from the trash.
     *
     * @since 6.1
     *
     * @param integer|string $id The ID of the ACF post to untrash.
     * @return boolean
     */
    public function untrash_post($id = 0)
    {
    }
    /**
     * Duplicates an ACF post.
     *
     * @since 6.1
     *
     * @param integer|string $id          The ID of the post to duplicate.
     * @param integer        $new_post_id Optional post ID to override.
     * @return array The new ACF post array.
     */
    public function duplicate_post($id = 0, $new_post_id = 0)
    {
    }
    /**
     * Returns a modified ACF field group array ready for export.
     *
     * @since 6.1
     *
     * @param array $post The ACF post array.
     * @return array
     */
    public function prepare_post_for_export($post = array())
    {
    }
    /**
     * Prepares an ACF field group for import.
     *
     * @since 6.1
     *
     * @param array $post The ACF field group array.
     * @return array
     */
    public function prepare_post_for_import($post)
    {
    }
    /**
     * Returns a string that can be used to create a field group with PHP.
     *
     * @since 6.1
     *
     * @param array $post The main field group array.
     * @return string
     */
    public function export_post_as_php($post = array())
    {
    }
    /**
     * Imports an ACF post into the database.
     *
     * @since 6.1
     *
     * @param array $post The ACF post array.
     * @return array
     */
    public function import_post($post)
    {
    }
}
class ACF_Post_Type extends \ACF_Internal_Post_Type
{
    /**
     * The ACF internal post type name.
     *
     * @var string
     */
    public $post_type = 'acf-post-type';
    /**
     * The prefix for the key used in the main post array.
     *
     * @var string
     */
    public $post_key_prefix = 'post_type_';
    /**
     * The cache key for a singular post.
     *
     * @var string
     */
    public $cache_key = 'acf_get_post_type_post:key:';
    /**
     * The cache key for a collection of posts.
     *
     * @var string
     */
    public $cache_key_plural = 'acf_get_post_type_posts';
    /**
     * The hook name for a singular post.
     *
     * @var string
     */
    public $hook_name = 'post_type';
    /**
     * The hook name for a collection of posts.
     *
     * @var string
     */
    public $hook_name_plural = 'post_types';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = 'post-types';
    /**
     * Constructs the class.
     */
    public function __construct()
    {
    }
    /**
     * Registers the acf-post-type custom post type with WordPress.
     *
     * @since 6.1
     */
    public function register_post_type()
    {
    }
    /**
     * Register activated post types with WordPress
     *
     * @since 6.1
     */
    public function register_post_types()
    {
    }
    /**
     * Filters the "Add title" text for ACF post types.
     *
     * @since 6.2.1
     *
     * @param string  $default The default text.
     * @param WP_Post $post    The WP_Post object.
     * @return string
     */
    public function enter_title_here($default, $post)
    {
    }
    /**
     * Gets the default settings array for an ACF post type.
     *
     * @return array
     */
    public function get_settings_array()
    {
    }
    /**
     * Validates an ACF internal post type.
     *
     * @since 6.1
     *
     * @param array $post The main post array.
     * @return array
     */
    public function validate_post($post = array())
    {
    }
    /**
     * Validates post type values before allowing save from the global $_POST object.
     * Errors are added to the form using acf_add_internal_post_type_validation_error().
     *
     * @since 6.1
     *
     * @return boolean validity status
     */
    public function ajax_validate_values()
    {
    }
    /**
     * Parses ACF post type settings and returns an array of post type
     * args that can be easily handled by `register_post_type()`.
     *
     * Omits settings that line up with the WordPress defaults to reduce the size
     * of the array passed to `register_post_type()`, which might be exported.
     *
     * @since 6.1
     *
     * @param  array   $post          The main ACF post type settings array.
     * @param  boolean $escape_labels Determines if the label values should be escaped.
     * @return array
     */
    public function get_post_type_args($post, $escape_labels = \true)
    {
    }
    /**
     * Returns a string that can be used to create a post type in PHP.
     *
     * @since 6.1
     *
     * @param array $post The main post type array.
     * @return string
     */
    public function export_post_as_php($post = array())
    {
    }
    /**
     * Flush rewrite rules whenever anything changes about a post type.
     *
     * @since 6.1
     *
     * @param array $post The main post type array.
     * @phpstan-return void
     */
    public function flush_post_cache($post)
    {
    }
    /**
     * Translates an ACF post.
     *
     * @since 6.1
     *
     * @param array $post The field group array.
     * @return array
     */
    public function translate_post($post = array())
    {
    }
    /**
     * Imports a post type from CPTUI.
     *
     * @since 6.1
     *
     * @param array $args Arguments from CPTUI.
     * @return array
     */
    public function import_cptui_post_type($args)
    {
    }
}
class ACF_Taxonomy extends \ACF_Internal_Post_Type
{
    /**
     * The ACF internal post type name.
     *
     * @var string
     */
    public $post_type = 'acf-taxonomy';
    /**
     * The prefix for the key used in the main post array.
     *
     * @var string
     */
    public $post_key_prefix = 'taxonomy_';
    /**
     * The cache key for a singular post.
     *
     * @var string
     */
    public $cache_key = 'acf_get_taxonomy_post:key:';
    /**
     * The cache key for a collection of posts.
     *
     * @var string
     */
    public $cache_key_plural = 'acf_get_taxonomy_posts';
    /**
     * The hook name for a singular post.
     *
     * @var string
     */
    public $hook_name = 'taxonomy';
    /**
     * The hook name for a collection of posts.
     *
     * @var string
     */
    public $hook_name_plural = 'taxonomies';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = 'taxonomies';
    /**
     * Constructs the class.
     */
    public function __construct()
    {
    }
    /**
     * Registers the acf-taxonomy custom post type with WordPress.
     *
     * @since 6.1
     */
    public function register_post_type()
    {
    }
    /**
     * Register activated taxonomies with WordPress
     *
     * @since 6.1
     */
    public function register_taxonomies()
    {
    }
    /**
     * Gets the default settings array for an ACF taxonomy.
     *
     * @return array
     */
    public function get_settings_array()
    {
    }
    /**
     * Validates post type values before allowing save from the global $_POST object.
     * Errors are added to the form using acf_add_internal_post_type_validation_error().
     *
     * @since 6.1
     *
     * @return boolean validity status
     */
    public function ajax_validate_values()
    {
    }
    /**
     * Parses ACF taxonomy settings and returns an array of taxonomy
     * args that can be easily handled by `register_taxonomy()`.
     *
     * Omits settings that line up with the WordPress defaults to reduce the size
     * of the array passed to `register_taxonomy()`, which might be exported.
     *
     * @since 6.1
     *
     * @param  array   $post          The main ACF taxonomy settings array.
     * @param  boolean $escape_labels Determines if the label values should be escaped.
     * @return array
     */
    public function get_taxonomy_args($post, $escape_labels = \true)
    {
    }
    /**
     * Returns a string that can be used to create a taxonomy in PHP.
     *
     * @since 6.1
     *
     * @param array $post The main taxonomy array.
     * @return string
     */
    public function export_post_as_php($post = array())
    {
    }
    /**
     * Flush rewrite rules whenever anything changes about a taxonomy.
     *
     * @since 6.1
     *
     * @param array $post The main post type array.
     * @phpstan-return void
     */
    public function flush_post_cache($post)
    {
    }
    /**
     * Translates an ACF post.
     *
     * @since 6.1
     *
     * @param array $post The field group array.
     * @return array
     */
    public function translate_post($post = array())
    {
    }
    /**
     * Imports a taxonomy from CPTUI.
     *
     * @since 6.1
     *
     * @param array $args Arguments from CPTUI.
     * @return array
     */
    public function import_cptui_taxonomy($args)
    {
    }
}
class ACF_Rest_Api
{
    public function __construct()
    {
    }
    public function initialize($response, $handler, $request)
    {
    }
    /**
     * Register our custom property as a REST field.
     * @phpstan-return void
     */
    public function register_field()
    {
    }
    /**
     * Validate the request args. Mostly a wrapper for `rest_validate_request_arg()`, but also
     * fires off a filter, so we can add some custom validation for specific fields.
     *
     * This will likely no longer be needed once WordPress implements something like `validate_callback`
     * and `sanitize_callback` for nested schema properties, see:
     * https://core.trac.wordpress.org/ticket/49960
     *
     * @param mixed            $value
     * @param \WP_REST_Request $request
     * @param string           $param
     *
     * @return boolean|WP_Error
     */
    public function validate_rest_arg($value, $request, $param)
    {
    }
    /**
     * Load field values into the requested object. This method is not a part of any public API and is only public as
     * it is required by WordPress.
     *
     * @param array           $object          An array representation of the post, term, or user object.
     * @param string          $field_name
     * @param WP_REST_Request $request
     * @param string          $object_sub_type Note that this isn't the same as $this->object_type. This variable is
     *                                          more specific and can be a post type or taxonomy.
     * @return array
     */
    public function load_fields($object, $field_name, $request, $object_sub_type)
    {
    }
    /**
     * Update any incoming field values for the given object. This method is not a part of any public API and is only
     * public as it is required by WordPress.
     *
     * @param array                   $data
     * @param WP_Post|WP_Term|WP_User $object
     * @param string                  $property        'acf'
     * @param WP_REST_Request         $request
     * @param string                  $object_sub_type This will be the post type, the taxonomy, or 'user'.
     * @return boolean|WP_Error
     */
    public function update_fields($data, $object, $property, $request, $object_sub_type)
    {
    }
}
/**
 * Class ACF_Rest_Embed_Links
 *
 * Manage the addition of embed links on supported REST endpoints.
 */
class ACF_Rest_Embed_Links
{
    public function initialize()
    {
    }
    /**
     * Add links to internal property for subsequent use in \ACF_Rest_Embed_Links::load_item_links().
     *
     * @param       $post_id
     * @param array   $field
     * @phpstan-return void
     */
    public function prepare_links($post_id, array $field)
    {
    }
    /**
     * Hook into the rest_prepare_{$type} filters and add links for the object being prepared.
     *
     * @param WP_REST_Response        $response
     * @param WP_Post|WP_User|WP_Term $item
     * @param WP_REST_Request         $request
     * @return WP_REST_Response
     */
    public function load_item_links($response, $item, $request)
    {
    }
}
/**
 * Class ACF_Rest_Request
 */
class ACF_Rest_Request
{
    /**
     * Determine all required information from the current request.
     */
    public function parse_request($request)
    {
    }
    /**
     * Magic getter for accessing read-only properties. Should we ever need to enforce a getter method, we can do so here.
     *
     * @param string $name The desired property name.
     * @return string|null
     */
    public function __get($name)
    {
    }
    /**
     * Get a URL parameter if found on the request URL.
     *
     * @param $param
     * @return mixed|null
     */
    public function get_url_param($param)
    {
    }
}
#[\AllowDynamicProperties]
class acf_revisions
{
    // vars
    var $cache = array();
    /**
     * Constructs the acf_revisions class.
     */
    public function __construct()
    {
    }
    /**
     * Registers any ACF meta that should be sent the REST/Gutenberg request.
     * For now, this is just our "_acf_changed" key that we use to detect if ACF fields have changed.
     *
     * @since 6.2.6
     */
    public function register_meta()
    {
    }
    /**
     * Lets WordPress know which meta keys to include in revisions.
     * For now, this is just our "_acf_changed" key, as we still handle revisions ourselves.
     *
     * @since 6.2.6
     *
     * @param array $keys The meta keys that should be revisioned.
     * @return array
     */
    public function wp_post_revision_meta_keys($keys)
    {
    }
    /**
     * Helps WordPress determine if fields have changed, and if in a legacy
     * metabox AJAX request, copies the metadata to the new revision.
     *
     * @since 6.2.6
     *
     * @param boolean $post_has_changed True if the post has changed, false if not.
     * @param WP_Post $last_revision    The WP_Post object for the latest revision.
     * @param WP_Post $post             The WP_Post object for the parent post.
     * @return boolean
     */
    public function check_acf_fields_have_changed($post_has_changed, $last_revision, $post)
    {
    }
    /**
     * Copies ACF field data to the latest revision.
     *
     * @since 6.2.6
     *
     * @param integer $revision_id The ID of the revision that was just created.
     * @param integer $post_id     The ID of the post being updated.
     * @return void
     * @phpstan-return void
     */
    public function maybe_save_revision($revision_id, $post_id)
    {
    }
    /**
     * This function is used to trick WP into thinking that one of the $post's fields has changed and
     * will allow an autosave to be updated.
     * Fixes an odd bug causing the preview page to render the non autosave post data on every odd attempt
     *
     * @type    function
     * @date    21/10/2014
     * @since   5.1.0
     *
     * @param   array $fields
     * @return  $fields
     */
    function wp_preview_post_fields($fields)
    {
    }
    /**
     * This filter will return false and force WP to save a revision. This is required due to
     * WP checking only post_title, post_excerpt and post_content values, not custom fields.
     *
     * @type    filter
     * @date    19/09/13
     *
     * @param   boolean $return defaults to true
     * @param   object $last_revision the last revision that WP will compare against
     * @param   object $post the $post object that WP will compare against
     * @return  boolean $return
     */
    function wp_save_post_revision_check_for_changes($return, $last_revision, $post)
    {
    }
    /**
     * This filter will add the ACF fields to the returned array
     * Versions 3.5 and 3.6 of WP feature different uses of the revisions filters, so there are
     * some hacks to allow both versions to work correctly
     *
     * @type    filter
     * @date    11/08/13
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function wp_post_revision_fields($fields, $post = \null)
    {
    }
    /**
     * This filter will load the value for the given field and return it for rendering
     *
     * @type    filter
     * @date    11/08/13
     *
     * @param   mixed $value should be false as it has not yet been loaded
     * @param   string $field_name The name of the field
     * @param   post (mixed) Holds the $post object to load from - in WP 3.5, this is not passed!
     * @param   string $direction to / from - not used
     * @return  string $value
     */
    function wp_post_revision_field($value, $field_name, $post = \null, $direction = \false)
    {
    }
    /**
     * This action will copy and paste the metadata from a revision to the post
     *
     * @type    action
     * @date    11/08/13
     *
     * @param   int $parent_id the destination post
     * @return  int $revision_id the source post
     */
    function wp_restore_post_revision($post_id, $revision_id)
    {
    }
    /**
     * This function will modify the $post_id and allow loading values from a revision
     *
     * @type    function
     * @date    6/3/17
     * @since   5.5.10
     *
     * @param   int $post_id
     * @param   int $_post_id
     * @return  int $post_id
     */
    function acf_validate_post_id($post_id, $_post_id)
    {
    }
}
/**
 * ACF 3rd Party Compatibility Class
 */
class acf_third_party
{
    /**
     * This function will setup the class functionality
     *
     * @since   5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Event Espresso post types do not use the native post.php edit page, but instead render their own.
     * Show the EE post types in lists where 'show_ui' is used.
     *
     * @date    24/2/18
     * @since   5.6.9
     *
     * @param   array $post_types Post types array.
     * @param   array $args       Other arguments array.
     * @return  array
     */
    public function ee_get_post_types($post_types, $args)
    {
    }
    /**
     * This function removes ACF post types from the tabify edit screen (post type selection sidebar)
     *
     * @since   3.5.1
     *
     * @param   array $posttypes An array of post types supported by tabify.
     * @return  array
     */
    public function tabify_posttypes($posttypes)
    {
    }
    /**
     * This function creates dummy metaboxes on the tabify edit screen page
     *
     * @since 3.5.1
     *
     * @param string $post_type The name of the displayed post type.
     */
    public function tabify_add_meta_boxes($post_type)
    {
    }
    /**
     * This filter will prevent PTS from running on the field group page
     *
     * @since   5.0.0
     *
     * @param   array $pages An array of pages PTS should run on.
     * @return  array
     */
    public function pts_allowed_pages($pages)
    {
    }
    /**
     * Runs during 'admin_enqueue_scripts' if dark mode is enabled
     *
     * @since   5.7.3
     */
    public function doing_dark_mode()
    {
    }
}
#[\AllowDynamicProperties]
class acf_validation
{
    /**
     * This function will setup the class functionality
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * This function will add an error message for a field
     *
     * @type    function
     * @date    25/11/2013
     * @since   5.0.0
     *
     * @param   string $input name attribute of DOM elmenet
     * @param   string $message error message
     * @return  int $post_id
     */
    function add_error($input, $message)
    {
    }
    /**
     * This function will return an error for a given input
     *
     * @type    function
     * @date    5/03/2016
     * @since   5.3.2
     *
     * @param   string $input name attribute of DOM elmenet
     * @return  mixed
     */
    function get_error($input)
    {
    }
    /**
     * This function will return validation errors
     *
     * @type    function
     * @date    25/11/2013
     * @since   5.0.0
     *
     * @param   void
     * @return  array|boolean
     */
    function get_errors()
    {
    }
    /**
     * This function will remove all errors
     *
     * @type    function
     * @date    4/03/2016
     * @since   5.3.2
     *
     * @param   void
     * @return  void
     */
    function reset_errors()
    {
    }
    /**
     * This function will validate the $_POST data via AJAX
     *
     * @type    function
     * @date    27/10/2014
     * @since   5.0.9
     *
     * @param   void
     * @return  void
     * @phpstan-return never
     */
    function ajax_validate_save_post()
    {
    }
    /**
     * Loops over $_POST data and validates ACF values.
     *
     * @since   5.4.0
     * @phpstan-return void
     */
    public function acf_validate_save_post()
    {
    }
}
class ACF_Taxonomy_Field_Walker extends \Walker
{
    /**
     * What the class handles.
     *
     * @since 2.1.0
     * @var string
     */
    public $tree_type = 'category';
    /**
     * DB fields to use.
     *
     * @since 2.1.0
     * @var array
     */
    public $db_fields = array('parent' => 'parent', 'id' => 'term_id');
    /**
     * The field being rendered.
     *
     * @since 1.0.0
     * @var array
     */
    public $field;
    /**
     * Constructor
     *
     * @date    20/4/21
     * @since   1.0.0
     *
     * @param   array $field The field being rendered.
     * @return  void
     */
    function __construct($field)
    {
    }
    /**
     * Starts the list before the elements are added.
     *
     * @see Walker:start_lvl()
     *
     * @since 1.0.0
     *
     * @param string  $output Used to append additional content (passed by reference).
     * @param integer $depth  Depth of category. Used for tab indentation.
     * @param array   $args   An array of arguments. @see wp_terms_checklist()
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker::end_lvl()
     *
     * @since 1.0.0
     *
     * @param string  $output Used to append additional content (passed by reference).
     * @param integer $depth  Depth of category. Used for tab indentation.
     * @param array   $args   An array of arguments. @see wp_terms_checklist()
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Start the element output.
     *
     * @see Walker::start_el()
     *
     * @since 1.0.0
     *
     * @param string  $output Used to append additional content (passed by reference).
     * @param WP_Term $term   The current term object.
     * @param integer $depth  Depth of the term in reference to parents. Default 0.
     * @param array   $args   An array of arguments. @see wp_terms_checklist()
     * @param integer $id     ID of the current term.
     */
    public function start_el(&$output, $term, $depth = 0, $args = array(), $id = 0)
    {
    }
    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 1.0.0
     *
     * @param string  $output   Used to append additional content (passed by reference).
     * @param WP_Term $category The current term object.
     * @param integer $depth    Depth of the term in reference to parents. Default 0.
     * @param array   $args     An array of arguments. @see wp_terms_checklist()
     */
    public function end_el(&$output, $category, $depth = 0, $args = array())
    {
    }
}
class ACF_WPML_Compatibility
{
    /**
     * __construct
     *
     * Sets up the class functionality.
     *
     * @date    23/06/12
     * @since   3.1.8
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * is_translatable
     *
     * Returns true if the acf-field-group post type is translatable.
     * Also adds compatibility with ACF4 settings
     *
     * @date    10/04/2015
     * @since   5.2.3
     *
     * @param   void
     * @return  boolean
     */
    function is_translatable()
    {
    }
    /**
     * upgrade_500_field_group
     *
     * Update the icl_translations table data when creating the field groups.
     *
     * @date    10/04/2015
     * @since   5.2.3
     *
     * @param   array  $field_group The new field group array.
     * @param   object $ofg         The old field group WP_Post object.
     * @return  void
     * @phpstan-return void
     */
    function upgrade_500_field_group($field_group, $ofg)
    {
    }
    /**
     * settings_save_json
     *
     * Modifies the json path.
     *
     * @date    19/05/2014
     * @since   5.0.0
     *
     * @param   string $path The json save path.
     * @return  string
     */
    function settings_save_json($path)
    {
    }
    /**
     * settings_load_json
     *
     * Modifies the json path.
     *
     * @date    19/05/2014
     * @since   5.0.0
     *
     * @param   string $path The json save path.
     * @return  string
     */
    function settings_load_json($paths)
    {
    }
    /**
     * icl_make_duplicate
     *
     * description
     *
     * @date    26/02/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function icl_make_duplicate($master_post_id, $lang, $postarr, $id)
    {
    }
    /**
     * verify_ajax
     *
     * Sets the correct language during AJAX requests.
     *
     * @type    function
     * @date    7/08/2015
     * @since   5.2.3
     *
     * @param   void
     * @return  void
     */
    function verify_ajax()
    {
    }
    /**
     * get_translatable_documents
     *
     * Removes 'acf-field' from the available post types for translation.
     *
     * @type    function
     * @date    17/8/17
     * @since   5.6.0
     *
     * @param   array $icl_post_types The array of post types.
     * @return  array
     */
    function get_translatable_documents($icl_post_types)
    {
    }
}
/**
 * The main ACF PRO class.
 */
class acf_pro
{
    /**
     * Main ACF PRO constructor
     *
     * @since   5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the `acf-ui-options-page` post type and initializes the UI.
     *
     * @since 6.2
     * @phpstan-return void
     */
    public function register_ui_options_pages()
    {
    }
    /**
     * Action to include JSON options pages.
     *
     * @since 6.2
     */
    public function include_options_pages()
    {
    }
    /**
     * Includes any files necessary for field types.
     *
     * @date  21/10/2015
     * @since 5.2.3
     */
    function include_field_types()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    10/6/17
     * @since   5.6.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function include_location_rules()
    {
    }
    /**
     * Registers styles and scripts used by ACF PRO.
     *
     * @since 5.0.0
     */
    public function register_assets()
    {
    }
    /**
     * input_admin_enqueue_scripts
     *
     * description
     *
     * @type    function
     * @date    4/11/2013
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    4/11/2013
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function field_group_admin_enqueue_scripts()
    {
    }
    /**
     * Checks for a license status error and renders it if necessary.
     *
     * @since 6.2.1
     * @phpstan-return void
     */
    public function maybe_show_license_status_error()
    {
    }
    /**
     * Filters the $where clause allowing for custom WP_Query args.
     *
     * @since 6.2
     *
     * @param  string   $where    The WHERE clause.
     * @param  WP_Query $wp_query The query object.
     * @return string
     */
    public function posts_where($where, $wp_query)
    {
    }
}
class acf_admin_options_page
{
    /** @var array Contains the current options page */
    var $page;
    /**
     * Initialize filters, action, variables and includes
     *
     * @since   5.0.0
     */
    public function __construct()
    {
    }
    /**
     * description
     *
     * @since   5.0.0
     * @phpstan-return void
     */
    public function admin_menu()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    2/02/13
     * @since   3.6
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function admin_load()
    {
    }
    /**
     * This function will enqueue the 'post.js' script which adds support for 'Screen Options' column toggle
     *
     * @since   5.3.2
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * This action will find and add field groups to the current edit page
     *
     * @type    action (admin_head)
     * @since   3.1.8
     */
    public function admin_head()
    {
    }
    /**
     * This function will render the submitdiv metabox
     *
     * @type    function
     * @date    23/03/2016
     * @since   5.3.2
     *
     * @param   void
     * @return  void
     */
    function postbox_submitdiv($post, $args)
    {
    }
    /**
     * Renders a postbox on an ACF options page.
     *
     * @since   5.0.0
     *
     * @param object $post The post object
     * @param array  $args The metabox arguments
     */
    public function postbox_acf($post, $args)
    {
    }
    /**
     * description
     *
     * @since 2.0.4
     */
    function html()
    {
    }
}
class ACF_Admin_Updates
{
    /** @var array Data used in the view. */
    var $view = array();
    /**
     * __construct
     *
     * Sets up the class functionality.
     *
     * @date    23/06/12
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * display_wp_error
     *
     * Adds an admin notice using the provided WP_Error.
     *
     * @date    14/1/19
     * @since   5.7.10
     *
     * @param   WP_Error $wp_error The error to display.
     * @return  void
     * @phpstan-return void
     */
    function display_wp_error($wp_error)
    {
    }
    /**
     * get_changelog_changes
     *
     * Finds the specific changes for a given version from the provided changelog snippet.
     *
     * @date    14/1/19
     * @since   5.7.10
     *
     * @param   string $changelog The changelog text.
     * @param   string $version   The version to find.
     * @return  string
     */
    function get_changelog_changes($changelog = '', $version = '')
    {
    }
    /**
     * admin_menu
     *
     * Adds the admin menu subpage.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     * @phpstan-return void
     */
    function admin_menu()
    {
    }
    /**
     * load
     *
     * Runs when loading the submenu page.
     *
     * @date    7/01/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function load()
    {
    }
    /**
     * Modifies the admin body class.
     *
     * @since 6.0.0
     *
     * @param string $classes Space-separated list of CSS classes.
     * @return string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * html
     *
     * Displays the submenu page's HTML.
     *
     * @date    7/01/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function html()
    {
    }
}
/**
 * ACF Admin UI Options Page Class
 *
 * All the logic for editing an options page in the UI.
 */
class ACF_Admin_UI_Options_Page extends \ACF_Admin_Internal_Post_Type
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = 'acf-ui-options-page';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = 'acf-admin-single-options-page';
    /**
     * Constructs the class.
     */
    public function __construct()
    {
    }
    /**
     * This function will customize the message shown when editing a post type.
     *
     * @since 6.2
     *
     * @param array $messages Post type messages.
     * @return array
     */
    public function post_updated_messages($messages)
    {
    }
    /**
     * Renders the options page created message.
     *
     * @since 6.1
     *
     * @param boolean $created True if the options page was just created.
     * @return string
     */
    public function options_page_created_message($created = \false)
    {
    }
    /**
     * Allow other pages to get available option page parents.
     *
     * @since 6.2
     */
    public function add_js_parent_choices()
    {
    }
    /**
     * Enqueues any scripts necessary for internal post type.
     *
     * @since 6.2
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Sets up all functionality for the post type edit page to work.
     *
     * @since 3.1.8
     */
    public function admin_head()
    {
    }
    /**
     * This action will allow ACF to render metaboxes after the title.
     */
    public function edit_form_after_title()
    {
    }
    /**
     * This function will add extra HTML to the acf form data element
     *
     * @since   5.3.8
     *
     * @param array $args Arguments array to pass through to action.
     * @return void
     */
    public function form_data($args)
    {
    }
    /**
     * This function will append extra l10n strings to the acf JS object
     *
     * @since   5.3.8
     *
     * @param array $l10n The array of translated strings.
     * @return array $l10n
     */
    public function admin_l10n($l10n)
    {
    }
    /**
     * Admin footer third party hook support
     *
     * @since 5.3.2
     */
    public function admin_footer()
    {
    }
    /**
     * Screen settings html output
     *
     * @since   3.6.0
     *
     * @param string $html Current screen settings HTML.
     * @return string $html
     */
    public function screen_settings($html)
    {
    }
    /**
     * Sets the "Edit Post Type" screen to use a one-column layout.
     *
     * @param  integer $columns Number of columns for layout.
     * @return integer
     */
    public function screen_layout($columns = 0)
    {
    }
    /**
     * Force basic settings to always be visible
     *
     * @param  array $hidden_metaboxes The metaboxes hidden on this page.
     * @return array
     */
    public function force_basic_settings($hidden_metaboxes)
    {
    }
    /**
     * Force advanced settings to be visible
     *
     * @param  array $hidden_metaboxes The metaboxes hidden on this page.
     * @return array
     */
    public function force_advanced_settings($hidden_metaboxes)
    {
    }
    /**
     * This function will customize the publish metabox
     *
     * @since 5.2.9
     */
    public function post_submitbox_misc_actions()
    {
    }
    /**
     * Saves post type data.
     *
     * @since 1.0.0
     *
     * @param  integer $post_id The post ID.
     * @param  WP_Post $post    The post object.
     * @return integer $post_id
     */
    public function save_post($post_id, $post)
    {
    }
    /**
     * Renders HTML for the basic settings metabox.
     *
     * @since 6.2
     */
    public function mb_basic_settings()
    {
    }
    /**
     * Renders the HTML for the advanced settings metabox.
     *
     * @since 6.2
     */
    public function mb_advanced_settings()
    {
    }
    /**
     * Iterates through the registered options pages and finds eligible parent pages.
     *
     * @since 6.2
     *
     * @param integer $post_id The post ID of a current ACF UI options page used to prevent selection of itself as a child.
     * @return array
     */
    public function get_parent_page_choices(int $post_id = 0)
    {
    }
    /**
     * Creates a simple options page over AJAX.
     *
     * @since 6.2
     * @return void
     * @phpstan-return never
     */
    public function ajax_create_options_page()
    {
    }
}
/**
 * The ACF Post Types admin controller class
 */
#[\AllowDynamicProperties]
class ACF_Admin_UI_Options_Pages extends \ACF_Admin_Internal_Post_Type_List
{
    /**
     * The slug for the internal post type.
     *
     * @since 6.1
     * @var string
     */
    public $post_type = 'acf-ui-options-page';
    /**
     * The admin body class used for the post type.
     *
     * @since 6.1
     * @var string
     */
    public $admin_body_class = 'acf-admin-options-pages';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = 'options-pages';
    /**
     * If this is a pro feature or not.
     *
     * @var boolean
     */
    public $is_pro_feature = \true;
    /**
     * Constructor.
     *
     * @since   6.2
     */
    public function __construct()
    {
    }
    /**
     * Current screen actions for the post types list admin page.
     *
     * @since   6.1
     * @phpstan-return void
     */
    public function current_screen()
    {
    }
    /**
     * Add any menu items required for post types.
     *
     * @since 6.1
     */
    public function admin_menu()
    {
    }
    /**
     * Customizes the admin table columns.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param array $_columns The columns array.
     * @return array
     */
    public function admin_table_columns($_columns)
    {
    }
    /**
     * Renders a specific admin table column.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param string $column_name The name of the column to display.
     * @param array  $post        The main ACF post array.
     * @return void
     */
    public function render_admin_table_column($column_name, $post)
    {
    }
    /**
     * Gets the translated action notice text for list table actions (activate, deactivate, sync, etc.).
     *
     * @since 6.1
     *
     * @param string  $action The action being performed.
     * @param integer $count  The number of items the action was performed on.
     * @return string
     */
    public function get_action_notice_text($action, $count = 1)
    {
    }
}
/**
 * class for handling API services.
 */
class ACF_Updates
{
    /**
     * The ACF_Updates version
     *
     * @var string
     */
    public $version = '2.4';
    /**
     * The array of registered plugins
     *
     * @var array
     */
    public $plugins = array();
    /**
     * Counts the number of plugin update checks
     *
     * @var integer
     */
    public $checked = 0;
    /**
     * Sets up the class functionality.
     *
     * @since   5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Registeres a plugin for updates.
     *
     * @since   5.5.10
     *
     * @param   array $plugin The plugin array.
     * @return  void
     */
    public function add_plugin($plugin)
    {
    }
    /**
     * Returns a registered plugin for the give key and value.
     *
     * @since   5.7.2
     *
     * @param   string $key   The array key to compare.
     * @param   string $value The value to compare against.
     * @return  array|false
     */
    public function get_plugin_by($key = '', $value = \null)
    {
    }
    /**
     * Makes a request to the ACF connect server.
     *
     * @since   5.5.10
     *
     * @param   string $endpoint The API endpoint.
     * @param   array  $body     The body to post.
     * @return  array|string|WP_Error
     */
    public function request($endpoint = '', $body = \null)
    {
    }
    /**
     * Returns update information for the given plugin id.
     *
     * @since   5.5.10
     *
     * @param   string  $id          The plugin id such as 'pro'.
     * @param   boolean $force_check Bypasses cached result. Defaults to false.
     * @return  array|WP_Error
     */
    public function get_plugin_info($id = '', $force_check = \false)
    {
    }
    /**
     * Returns specific data from the 'update-check' response.
     *
     * @since   5.7.2
     *
     * @param string  $basename    The plugin basename.
     * @param boolean $force_check Bypasses cached result. Defaults to false.
     * @return array|false
     */
    public function get_plugin_update($basename = '', $force_check = \false)
    {
    }
    /**
     * Checks if an update is available, but can't be updated to.
     *
     * @since   6.2.1
     *
     * @param string  $basename    The plugin basename.
     * @param boolean $force_check Bypasses cached result. Defaults to false.
     * @return array|false
     */
    public function get_no_update($basename = '', $force_check = \false)
    {
    }
    /**
     * Checks for plugin updates.
     *
     * @since   5.6.9
     * @since   5.7.2 Added 'checked' comparison
     *
     * @param   boolean $force_check Bypasses cached result. Defaults to false.
     * @return  array|WP_Error.
     */
    public function get_plugin_updates($force_check = \false)
    {
    }
    /**
     * This function safely gets the expiration value from a response.
     *
     * @since   5.6.9
     *
     * @param   mixed   $response The response from the server. Default false.
     * @param   integer $min      The minimum expiration limit. Default 0.
     * @param   integer $max      The maximum expiration limit. Default 0.
     * @return  integer
     */
    public function get_expiration($response = \false, $min = 0, $max = 0)
    {
    }
    /**
     * Deletes transients and allows a fresh lookup.
     *
     * @since   5.5.10
     */
    public function refresh_plugins_transient()
    {
    }
    /**
     * Called when WP updates the 'update_plugins' site transient. Used to inject ACF plugin update info.
     *
     * @since   5.0.0
     *
     * @param object $transient The current transient value.
     * @return object $transient The modified transient value.
     */
    public function modify_plugins_transient($transient)
    {
    }
    /**
     * Returns the plugin data visible in the 'View details' popup
     *
     * @since   5.0.0
     *
     * @param   object $result The current result of plugin data.
     * @param   string $action The action being performed.
     * @param   object $args   Data about the plugin being retried.
     * @return  $result
     */
    public function modify_plugin_details($result, $action = \null, $args = \null)
    {
    }
}
class acf_field_clone extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * This function will return true if acf_local functionality is enabled
     *
     * @type    function
     * @date    14/07/2016
     * @since   5.4.0
     *
     * @param   void
     * @return  void
     */
    function is_enabled()
    {
    }
    /**
     * This filter is appied to the $field after it is loaded from the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     * This function will hook into the 'acf/get_fields' filter and inject/replace seamless clones fields
     *
     * @type    function
     * @date    17/06/2016
     * @since   5.3.8
     *
     * @param   array $fields
     * @param   array $parent
     * @return  $fields
     */
    function acf_get_fields($fields, $parent)
    {
    }
    /**
     * This function will return an array of fields for a given clone field
     *
     * @type    function
     * @date    28/06/2016
     * @since   5.3.8
     *
     * @param   array $field
     * @param   array $parent
     * @return  array
     */
    function get_cloned_fields($field)
    {
    }
    /**
     * This function is run when cloning a clone field
     * Important to run the acf_clone_field function on sub fields to pass on settings such as 'parent_layout'
     *
     * @type    function
     * @date    28/06/2016
     * @since   5.3.8
     *
     * @param   array $field
     * @param   array $clone_field
     * @return  $field
     */
    function acf_clone_field($field, $clone_field)
    {
    }
    /**
     * This function is run when cloning a clone field
     * Important to run the acf_clone_field function on sub fields to pass on settings such as 'parent_layout'
     * Do not delete! Removing this logic causes major issues with cloned clone fields within a flexible content layout.
     *
     * @type    function
     * @date    28/06/2016
     * @since   5.3.8
     *
     * @param   array $field
     * @param   array $clone_field
     * @return  $field
     */
    function acf_clone_clone_field($field, $clone_field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    4/11/16
     * @since   5.5.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function prepare_field_for_db($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value found in the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     * @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type  filter
     * @since 3.6
     *
     * @param mixed   $value       The value which was loaded from the database.
     * @param mixed   $post_id     The $post_id from which the value was loaded.
     * @param array   $field       The field array holding all the field options.
     * @param boolean $escape_html Should the field return a HTML safe formatted value.
     * @return mixed $value The modified value.
     */
    public function format_value($value, $post_id, $field, $escape_html = \false)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $field - the field array holding all the field options
     * @param   $post_id - the post_id of which the value will be saved
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     * @phpstan-return void
     */
    function render_field($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    12/07/2016
     * @since   5.4.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_field_block($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    12/07/2016
     * @since   5.4.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_field_table($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @param   $field  - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     * This function will return an array of choices data for Select2
     *
     * @type    function
     * @date    17/06/2016
     * @since   5.3.8
     *
     * @param   mixed $value
     * @return  array
     */
    function get_clone_setting_choices($value)
    {
    }
    /**
     * This function will return the label for a given clone choice
     *
     * @type    function
     * @date    17/06/2016
     * @since   5.3.8
     *
     * @param   mixed $selector
     * @return  string
     */
    function get_clone_setting_choice($selector = '')
    {
    }
    /**
     * This function will return the text for a field choice
     *
     * @type    function
     * @date    20/07/2016
     * @since   5.4.0
     *
     * @param   array $field
     * @return  string
     */
    function get_clone_setting_field_choice($field)
    {
    }
    /**
     * This function will return the text for a group choice
     *
     * @type    function
     * @date    20/07/2016
     * @since   5.4.0
     *
     * @param   array $field_group
     * @return  string
     */
    function get_clone_setting_group_choice($field_group)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    17/06/2016
     * @since   5.3.8
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     * This function will restore a field's key ready for input
     *
     * @type    function
     * @date    6/09/2016
     * @since   5.4.0
     *
     * @param   array $field
     * @return  $field
     */
    function acf_prepare_field($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
}
class acf_field_flexible_content extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Admin scripts enqueue for field.
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    public function input_admin_enqueue_scripts()
    {
    }
    /**
     * This function will fill in the missing keys to create a valid layout
     *
     * @type    function
     * @date    3/10/13
     * @since   1.1.0
     *
     * @param   array $layout
     * @return  array $layout
     */
    function get_valid_layout($layout = array())
    {
    }
    /**
     * This filter is appied to the $field after it is loaded from the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     * This function will return a specific sub field
     *
     * @type    function
     * @date    29/09/2016
     * @since   5.4.0
     *
     * @param   $sub_field
     * @param   string $selector
     * @param   array $field
     * @return  int $post_id
     */
    function get_sub_field($sub_field, $id, $field)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    19/11/2013
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function render_layout($field, $layout, $i, $value)
    {
    }
    /**
     * Renders the flexible content field layouts in the field group editor.
     *
     * @since 3.6
     * @date  23/01/13
     *
     * @param array $field An array holding all the field's data.
     */
    public function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db
     *
     * @type    filter
     * @since   3.6
     *
     * @param  mixed $value   The value found in the database
     * @param  mixed $post_id The post_id from which the value was loaded
     * @param  array $field   The field array holding all the field options
     * @return $value
     */
    public function load_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type  filter
     * @since 3.6
     *
     * @param  mixed   $value       The value which was loaded from the database.
     * @param  mixed   $post_id     The $post_id from which the value was loaded.
     * @param  array   $field       The field array holding all the field options.
     * @param  boolean $escape_html Should the field return a HTML safe formatted value.
     * @return mixed   $value       The modified value.
     */
    public function format_value($value, $post_id, $field, $escape_html = \false)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    public function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This function will return a specific layout by name from a field
     *
     * @since   5.5.8
     *
     * @param  string $name  The layout name.
     * @param  array  $field The field to load the layout from.
     * @return array|false
     */
    public function get_layout($name, $field)
    {
    }
    /**
     * This function will delete a value row
     *
     * @date    15/2/17
     * @since   5.5.8
     *
     * @param   integer $i
     * @param   array   $field
     * @param   mixed   $post_id
     * @return  boolean
     */
    public function delete_row($i, $field, $post_id)
    {
    }
    /**
     * This function will update a value row
     *
     * @date    15/2/17
     * @since   5.5.8
     *
     * @param   array   $row
     * @param   integer $i
     * @param   array   $field
     * @param   mixed   $post_id
     * @return  boolean
     */
    public function update_row($row, $i, $field, $post_id)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     *
     * @param   mixed $value   The value which will be saved in the database
     * @param   mixed $post_id The post_id of which the value will be saved
     * @param   array $field   The field array holding all the field options
     * @return  mixed $value   The modified value
     */
    public function update_value($value, $post_id, $field)
    {
    }
    /**
     * Deletes a layout from a flexible content field.
     *
     * @type    function
     * @date    1/07/2015
     * @since   5.2.3
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return void
     */
    public function delete_value($post_id, $key, $field)
    {
    }
    /**
     * This filter is appied to the $field before it is saved to the database
     *
     * @type    filter
     * @since   3.6
     *
     * @param  array $field The field array holding all the field options
     * @return array $field The modified field
     */
    public function update_field($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    4/04/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function delete_field($field)
    {
    }
    /**
     * This filter is appied to the $field before it is duplicated and saved to the database
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field - the field array holding all the field options
     *
     * @return  $field - the modified field
     */
    function duplicate_field($field)
    {
    }
    /**
     * Output the layout title for an AJAX response.
     *
     * @since 5.3.2
     * @phpstan-return never
     */
    public function ajax_layout_title()
    {
    }
    /**
     * Get a layout title for a field.
     *
     * @param  array   $field  The field array
     * @param  array   $layout The layout array
     * @param  integer $i      The order number of the layout
     * @param  array   $value  The value of the layout
     * @return string The layout title, optionally filtered.
     */
    public function get_layout_title($field, $layout, $i, $value)
    {
    }
    /**
     * This function will update clone field settings based on the origional field
     *
     * @type    function
     * @date    28/06/2016
     * @since   5.3.8
     *
     * @param   array $clone
     * @param   array $field
     * @return  $clone
     */
    public function clone_any_field($field, $clone_field)
    {
    }
    /**
     * Handles preparing the layouts for export.
     *
     * @since   5.0.0
     *
     * @param  array $field The whole fiel array
     * @return array The export ready field array.
     */
    public function prepare_field_for_export($field)
    {
    }
    function prepare_any_field_for_export($field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/03/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    public function prepare_field_for_import($field)
    {
    }
    /**
     * This function will add compatibility for the 'column_width' setting
     *
     * @type    function
     * @date    30/1/17
     * @since   5.5.6
     *
     * @param   array $field
     * @return  $field
     */
    function validate_any_field($field)
    {
    }
    /**
     * This function will translate field settings
     *
     * @type    function
     * @date    8/03/2016
     * @since   5.3.2
     *
     * @param   array $field
     * @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     * Additional validation for the flexible content field when submitted via REST.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param integer|string $post_id
     * @param array          $field
     * @return array|mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_gallery extends \acf_field
{
    /**
     * This function will setup the field type data
     *
     * @type    function
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    16/12/2015
     * @since   5.3.2
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    13/12/2013
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return never
     */
    function ajax_get_attachment()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    13/12/2013
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return never
     */
    function ajax_update_attachment()
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    13/12/2013
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     * @phpstan-return never
     */
    function ajax_get_sort_order()
    {
    }
    /**
     * Renders the sidebar HTML shown when selecting an attachmemnt.
     *
     * @date    13/12/2013
     * @since   5.0.0
     *
     * @param   integer $id    The attachment ID.
     * @param   array   $field The field array.
     * @return  void
     */
    function render_attachment($id, $field)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @param   $field - an array holding all the field's data
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @type    action
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   mixed $value the value which was loaded from the database
     * @param   mixed $post_id the post_id from which the value was loaded
     * @param   array $field the field array holding all the field options
     *
     * @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    11/02/2014
     * @since   5.0.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This filter is appied to the $value before it is updated in the db
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param   $value - the value which will be saved in the database
     * @param   $post_id - the post_id of which the value will be saved
     * @param   $field - the field array holding all the field options
     *
     * @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Validates file fields updated via the REST API.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * @see \acf_field::get_rest_links()
     * @param mixed          $value   The raw (unformatted) field value.
     * @param integer|string $post_id
     * @param array          $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param string|integer $post_id
     * @param array          $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field_repeater extends \acf_field
{
    /**
     * If we're currently rendering fields.
     *
     * @var boolean
     */
    public $is_rendering = \false;
    /**
     * The post/page ID that we're rendering for.
     *
     * @var mixed
     */
    public $post_id = \false;
    /**
     * This function will set up the field type data
     *
     * @date  5/03/2014
     * @since 5.0.0
     */
    public function initialize()
    {
    }
    /**
     * Localizes text for the repeater field.
     *
     * @date    16/12/2015
     * @since   5.3.2
     */
    public function input_admin_enqueue_scripts()
    {
    }
    /**
     * Filters the field array after it's loaded from the database.
     *
     * @since   3.6
     * @date    23/01/13
     *
     * @param array $field The field array holding all the field options.
     * @return array
     */
    public function load_field($field)
    {
    }
    /**
     * Runs on the "acf/pre_render_fields" filter. Used to signify
     * that we're currently rendering a repeater field.
     *
     * @since 6.0.0
     *
     * @param array $fields  The main field array.
     * @param mixed $post_id The post ID for the field being rendered.
     * @return array
     */
    public function pre_render_fields($fields, $post_id = \false)
    {
    }
    /**
     * Create the HTML interface for your field
     *
     * @since 3.6
     * @date  23/01/13
     *
     * @param array $field An array holding all the field's data.
     */
    public function render_field($field)
    {
    }
    /**
     * Create extra options for your field. This is rendered when editing a field.
     * The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     * @since 3.6
     * @date  23/01/13
     *
     * @param array $field An array holding all the field's data.
     */
    function render_field_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Validation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_validation_settings($field)
    {
    }
    /**
     * Renders the field settings used in the "Presentation" tab.
     *
     * @since 6.0
     *
     * @param array $field The field settings array.
     * @return void
     */
    function render_field_presentation_settings($field)
    {
    }
    /**
     * Filters the field $value after it is loaded from the database.
     *
     * @since   3.6
     *
     * @param mixed $value   The value found in the database.
     * @param mixed $post_id The $post_id from which the value was loaded.
     * @param array $field   The field array holding all the field options.
     * @return array $value
     */
    public function load_value($value, $post_id, $field)
    {
    }
    /**
     * This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     * @type  filter
     * @since 3.6
     *
     * @param mixed   $value       The value which was loaded from the database.
     * @param mixed   $post_id     The $post_id from which the value was loaded.
     * @param array   $field       The field array holding all the field options.
     * @param boolean $escape_html Should the field return a HTML safe formatted value.
     * @return array  $value The modified value.
     */
    public function format_value($value, $post_id, $field, $escape_html = \false)
    {
    }
    /**
     * Validates values for the repeater field
     *
     * @date  11/02/2014
     * @since 5.0.0
     *
     * @param  boolean $valid If the field is valid.
     * @param  mixed   $value The value to validate.
     * @param  array   $field The main field array.
     * @param  string  $input The input element's name attribute.
     * @return boolean
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This function will update a value row.
     *
     * @date    15/2/17
     * @since   5.5.8
     *
     * @param   array   $row
     * @param   integer $i
     * @param   array   $field
     * @param   mixed   $post_id
     * @return  boolean
     */
    function update_row($row, $i, $field, $post_id)
    {
    }
    /**
     * This function will delete a value row.
     *
     * @date    15/2/17
     * @since   5.5.8
     *
     * @param   integer $i
     * @param   array   $field
     * @param   mixed   $post_id
     * @return  boolean
     */
    function delete_row($i, $field, $post_id)
    {
    }
    /**
     * Filters the $value before it is updated in the database.
     *
     * @since   3.6
     * @date    23/01/13
     *
     * @param  mixed $value   The value which will be saved in the database.
     * @param  mixed $post_id The $post_id of which the value will be saved.
     * @param  array $field   The field array holding all the field options.
     * @return mixed $value
     */
    public function update_value($value, $post_id, $field)
    {
    }
    /**
     * Deletes any subfields after the field has been deleted.
     *
     * @date    4/04/2014
     * @since   5.0.0
     *
     * @param array $field The main field array.
     * @return void
     * @phpstan-return void
     */
    function delete_field($field)
    {
    }
    /**
     * Deletes a value from the database.
     *
     * @date    1/07/2015
     * @since   5.2.3
     *
     * @param integer $post_id The post ID to delete the value from.
     * @param string  $key     The meta name/key (unused).
     * @param array   $field   The main field array.
     * @return void
     * @phpstan-return void
     */
    function delete_value($post_id, $key, $field)
    {
    }
    /**
     * This filter is applied to the $field before it is saved to the database.
     *
     * @since 3.6
     *
     * @param  array $field The field array holding all the field options.
     * @return array
     */
    public function update_field($field)
    {
    }
    /**
     * This filter is applied to the $field before it is duplicated and saved to the database.
     *
     * @since 3.6
     * @date  23/01/13
     *
     * @param array $field The field array holding all the field options.
     * @return array
     */
    function duplicate_field($field)
    {
    }
    /**
     * This function will translate field settings.
     *
     * @date  8/03/2016
     * @since 5.3.2
     *
     * @param array $field The main field array.
     * @return array
     */
    function translate_field($field)
    {
    }
    /**
     * This function will add compatibility for the 'column_width' setting
     *
     * @date  30/1/17
     * @since 5.5.6
     *
     * @param array $field The main field array.
     * @return array
     */
    function validate_any_field($field)
    {
    }
    /**
     * Prepares the field for export.
     *
     * @date  11/03/2014
     * @since 5.0.0
     *
     * @param array $field The field settings.
     * @return array
     */
    function prepare_field_for_export($field)
    {
    }
    /**
     * Returns a flat array of fields containing all subfields ready for import.
     *
     * @date   11/03/2014
     * @since  5.0.0
     *
     * @param   array $field The field settings.
     * @return  array
     */
    function prepare_field_for_import($field)
    {
    }
    /**
     * Additional validation for the repeater field when submitted via REST.
     *
     * @param  boolean $valid The current validity booleean
     * @param  integer $value The value of the field
     * @param  array   $field The field array
     * @return boolean|WP
     */
    public function validate_rest_value($valid, $value, $field)
    {
    }
    /**
     * Return the schema array for the REST API.
     *
     * @param array $field
     * @return array
     */
    public function get_rest_schema(array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed          $value
     * @param integer|string $post_id
     * @param array          $field
     * @return array|mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
    /**
     * Takes the provided input name and turns it into a field name that
     * works with repeater fields that are subfields of other fields.
     *
     * @param  string $input_name The name attribute used in the repeater.
     * @return string|boolean
     */
    public function get_field_name_from_input_name($input_name)
    {
    }
    /**
     * Returns an array of rows used to populate the repeater table over AJAX.
     *
     * @since 6.0.0
     *
     * @return void|WP_Error
     * @phpstan-return never
     */
    public function ajax_get_rows()
    {
    }
}
/**
 * ACF_Repeater_Table
 *
 * Helper class for rendering repeater tables.
 *
 */
class ACF_Repeater_Table
{
    /**
     * Constructs the ACF_Repeater_Table class.
     *
     * @param array $field The main field array for the repeater being rendered.
     */
    public function __construct($field)
    {
    }
    /**
     * Renders the full repeater table.
     *
     * @since 6.0.0
     *
     * @return void
     */
    public function render()
    {
    }
    /**
     * Renders the table head.
     *
     * @since 6.0.0
     *
     * @return void
     * @phpstan-return void
     */
    public function thead()
    {
    }
    /**
     * Renders or returns rows for the repeater field table.
     *
     * @since 6.0.0
     *
     * @param boolean $return If we should return the rows or render them.
     * @return array|void
     */
    public function rows($return = \false)
    {
    }
    /**
     * Renders an individual row.
     *
     * @since 6.0.0
     *
     * @param integer $i      The row number.
     * @param array   $row    An array containing the row values.
     * @param boolean $return If we should return the row or render it.
     * @return string|void
     */
    public function row($i, $row, $return = \false)
    {
    }
    /**
     * Renders the row handle at the start of each row.
     *
     * @since 6.0.0
     *
     * @param integer $i The current row number.
     * @return void
     * @phpstan-return void
     */
    public function row_handle($i)
    {
    }
    /**
     * Renders the actions displayed at the end of each row.
     *
     * @since 6.0.0
     *
     * @return void
     * @phpstan-return void
     */
    public function row_actions()
    {
    }
    /**
     * Renders the actions displayed underneath the table.
     *
     * @since 6.0.0
     *
     * @return void
     * @phpstan-return void
     */
    public function table_actions()
    {
    }
    /**
     * Renders the table pagination.
     * Mostly lifted from the WordPress core WP_List_Table class.
     *
     * @since 6.0.0
     *
     * @return void
     * @phpstan-return void
     */
    public function pagination()
    {
    }
}
class ACF_Location_Block extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class ACF_Location_Options_Page extends \ACF_Location
{
    /**
     * Initializes props.
     *
     * @date    5/03/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function initialize()
    {
    }
    /**
     * Matches the provided rule against the screen args returning a bool result.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule        The location rule.
     * @param   array $screen      The screen args.
     * @param   array $field_group The field group settings.
     * @return  boolean
     */
    public function match($rule, $screen, $field_group)
    {
    }
    /**
     * Returns an array of possible values for this rule type.
     *
     * @date    9/4/20
     * @since   5.9.0
     *
     * @param   array $rule A location rule.
     * @return  array
     */
    public function get_values($rule)
    {
    }
}
class acf_options_page
{
    /** @var array Contains an array of options page settings */
    var $pages = array();
    /**
     * Initialize filters, action, variables and includes
     *
     * @type    function
     * @date    23/06/12
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function __construct()
    {
    }
    /**
     * Validates an Options Page settings array.
     *
     * @date    28/2/17
     * @since   5.5.8
     *
     * @param   array|string $page The Options Page settings array or name.
     * @return  array
     */
    function validate_page($page)
    {
    }
    /**
     * This function will store an options page settings
     *
     * @type    function
     * @date    9/6/17
     * @since   5.6.0
     *
     * @param   array $page
     * @return  void
     */
    function add_page($page)
    {
    }
    /**
     * description
     *
     * @type    function
     * @date    9/6/17
     * @since   5.6.0
     *
     * @param   int $post_id
     * @return  int $post_id
     */
    function add_sub_page($page)
    {
    }
    /**
     * This function will update an options page settings
     *
     * @type    function
     * @date    9/6/17
     * @since   5.6.0
     *
     * @param   string $slug
     * @param   array $data
     * @return  array
     */
    function update_page($slug = '', $data = array())
    {
    }
    /**
     * This function will return an options page settings
     *
     * @type    function
     * @date    6/07/2016
     * @since   5.4.0
     *
     * @param   string $slug
     * @return  mixed
     */
    function get_page($slug)
    {
    }
    /**
     * This function will return all options page settings
     *
     * @type    function
     * @date    6/07/2016
     * @since   5.4.0
     *
     * @param   string $slug
     * @return  mixed
     */
    function get_pages()
    {
    }
}
class ACF_UI_Options_Page extends \ACF_Internal_Post_Type
{
    /**
     * The ACF internal post type name.
     *
     * @var string
     */
    public $post_type = 'acf-ui-options-page';
    /**
     * The prefix for the key used in the main post array.
     *
     * @var string
     */
    public $post_key_prefix = 'ui_options_page_';
    /**
     * The cache key for a singular post.
     *
     * @var string
     */
    public $cache_key = 'acf_get_ui_options_page_post:key:';
    /**
     * The cache key for a collection of posts.
     *
     * @var string
     */
    public $cache_key_plural = 'acf_get_ui_options_page_posts';
    /**
     * The hook name for a singular post.
     *
     * @var string
     */
    public $hook_name = 'ui_options_page';
    /**
     * The hook name for a collection of posts.
     *
     * @var string
     */
    public $hook_name_plural = 'ui_options_pages';
    /**
     * The name of the store used for the post type.
     *
     * @var string
     */
    public $store = 'ui-options-pages';
    /**
     * Constructs the class and any parent classes.
     *
     * @since 6.2
     */
    public function __construct()
    {
    }
    /**
     * Registers the acf-ui-options-page custom post type with WordPress.
     *
     * @since 6.2
     */
    public function register_post_type()
    {
    }
    /**
     * Register activated options pages.
     *
     * @since 6.2
     */
    public function register_ui_options_pages()
    {
    }
    /**
     * Gets the default settings array for an ACF options page.
     *
     * @return array
     */
    public function get_settings_array()
    {
    }
    /**
     * Validates options page values before allowing save from the global $_POST object.
     * Errors are added to the form using acf_add_internal_post_type_validation_error().
     *
     * @since 6.2
     *
     * @return boolean validity status
     */
    public function ajax_validate_values()
    {
    }
    /**
     * Updates the settings for ACF UI options pages.
     *
     * @since 6.2
     *
     * @param array $post The ACF post to update.
     * @return array
     */
    public function update_post($post)
    {
    }
    /**
     * Sets up the local JSON functionality for options pages.
     *
     * @since 6.2
     *
     * @param ACF_Local_JSON $local_json The ACF_Local_JSON object.
     * @return void
     */
    public function setup_local_json()
    {
    }
    /**
     * Includes all local JSON options pages.
     *
     * @since 6.1
     * @phpstan-return void
     */
    public function include_json_options_pages()
    {
    }
    /**
     * Returns a string that can be used to create an options page with PHP.
     *
     * @since 6.2
     *
     * @param array $post The main options page array.
     * @return string
     */
    public function export_post_as_php($post = array())
    {
    }
    /**
     * Parses ACF options page settings and returns an array of args
     * to be handled by `acf_add_options_page()`.
     *
     * Omits settings that line up with the defaults to reduce the size
     * of the array passed to `acf_add_options_page()`, which might be exported.
     *
     * @since 6.2
     *
     * @param array $post The main ACF options page settings array.
     * @return array
     */
    public function get_options_page_args($post)
    {
    }
}
class acf_pro_updates
{
    /**
     * Initialize filters, action, variables and includes
     *
     * @since 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Initializes the ACF PRO updates functionality.
     *
     * @since 5.5.10
     * @phpstan-return void
     */
    public function init()
    {
    }
    /**
     * Displays an update message for plugin list screens.
     *
     * @since   5.3.8
     *
     * @param array  $plugin_data An array of plugin metadata.
     * @param object $response    An object of metadata about the available plugin update.
     * @return void
     * @phpstan-return void
     */
    public function modify_plugin_update_message($plugin_data, $response)
    {
    }
}
/**
 * The main function responsible for returning the one true acf Instance to functions everywhere.
 * Use this function like you would a global variable, except without needing to declare the global.
 *
 * Example: <?php $acf = acf(); ?>
 *
 * @date    4/09/13
 * @since   4.3.0
 *
 * @return  ACF
 */
function acf()
{
}
/**
 * General functions relating to the bidirectional feature of some fields.
 *
 * @package ACF
 */
/**
 * Process updating bidirectional fields.
 *
 * @since 6.2
 *
 * @param array          $target_item_ids The post, user or term IDs which should be updated with the origin item ID.
 * @param integer|string $post_id         The ACF encoded origin post, user or term ID.
 * @param array          $field           The field being updated on the origin post, user or term ID.
 * @param string|false   $target_prefix   The ACF prefix for a post, user or term ID required for the update_field call for this field type.
 */
function acf_update_bidirectional_values($target_item_ids, $post_id, $field, $target_prefix = \false)
{
}
/**
 * Allows third party fields to enable support as a target field type for a particular object type
 *
 * @since 6.2
 *
 * @param string $object_type The object type that will be updated on the target field, such as 'term', 'user' or 'post'.
 *
 * @return array An array of valid field type names (slugs) for the target of the bidirectional field.
 */
function acf_get_valid_bidirectional_target_types($object_type)
{
}
/**
 * Build the complete choices argument for rendering the select2 field for bidirectional target based on the currently selected choices
 *
 * @since 6.2
 *
 * @param array $choices The currently selected choices (as an array of field keys).
 *
 * @return array
 */
function acf_build_bidirectional_target_current_choices($choices)
{
}
/**
 * Build valid fields for a bidirectional relationship for select2 display
 *
 * @since 6.2
 *
 * @param array $results The original results array.
 * @param array $options The options provided to the select2 AJAX search.
 *
 * @return array
 */
function acf_build_bidirectional_relationship_field_target_args($results, $options)
{
}
/**
 * Renders the field settings required for bidirectional fields
 *
 * @since 6.2
 *
 * @param array $field The field object passed into field setting functions.
 * @phpstan-return void
 */
function acf_render_bidirectional_field_settings($field)
{
}
/**
 * Returns the translated instructional text for the message field for the bidirectional field settings.
 *
 * @since 6.2
 *
 * @return string The html containing the instructional message.
 */
function acf_get_bidirectional_field_settings_instruction_text()
{
}
/**
 * acf_get_field
 *
 * Retrieves a field for the given identifier.
 *
 * @date    17/1/19
 * @since   5.7.10
 *
 * @param   int|string $id The field ID, key or name.
 * @return  array|false The field array.
 */
function acf_get_field($id = 0)
{
}
/**
 * acf_get_raw_field
 *
 * Retrieves raw field data for the given identifier.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param   int|string $id The field ID, key or name.
 * @return  array|false The field array.
 */
function acf_get_raw_field($id = 0)
{
}
/**
 * acf_get_field_post
 *
 * Retrieves the field's WP_Post object.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param   int|string $id The field ID, key or name.
 * @return  array|false The field array.
 */
function acf_get_field_post($id = 0)
{
}
/**
 * acf_is_field_key
 *
 * Returns true if the given identifier is a field key.
 *
 * @date    6/12/2013
 * @since   5.0.0
 *
 * @param   string $id The identifier.
 * @return  boolean
 */
function acf_is_field_key($id = '')
{
}
/**
 * acf_validate_field
 *
 * Ensures the given field valid.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param   array $field The field array.
 * @return  array
 */
function acf_validate_field($field = array())
{
}
/**
 * acf_get_valid_field
 *
 * Ensures the given field valid.
 *
 * @date        28/09/13
 * @since       5.0.0
 *
 * @param   array $field The field array.
 * @return  array
 */
function acf_get_valid_field($field = \false)
{
}
/**
 * acf_translate_field
 *
 * Translates a field's settings.
 *
 * @date    8/03/2016
 * @since   5.3.2
 *
 * @param   array $field The field array.
 * @return  array
 */
function acf_translate_field($field = array())
{
}
/**
 * acf_get_fields
 *
 * Returns and array of fields for the given $parent.
 *
 * @date    30/09/13
 * @since   5.0.0
 *
 * @param   int|string|array $parent The field group or field settings. Also accepts the field group ID or key.
 * @return  array
 */
function acf_get_fields($parent)
{
}
/**
 * acf_get_raw_fields
 *
 * Returns and array of raw field data for the given parent id.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param   integer $id The field group or field id.
 * @return  array
 */
function acf_get_raw_fields($id = 0)
{
}
/**
 * acf_get_field_count
 *
 * Return the number of fields for the given field group.
 *
 * @date    17/10/13
 * @since   5.0.0
 *
 * @param   array $parent The field group or field array.
 * @return  integer
 */
function acf_get_field_count($parent)
{
}
/**
 * acf_clone_field
 *
 * Allows customization to a field when it is cloned. Used by the clone field.
 *
 * @date    8/03/2016
 * @since   5.3.2
 *
 * @param   array $field       The field being cloned.
 * @param   array $clone_field The clone field.
 * @return  array
 */
function acf_clone_field($field, $clone_field)
{
}
/**
 * acf_prepare_field
 *
 * Prepare a field for input.
 *
 * @date    20/1/19
 * @since   5.7.10
 *
 * @param   array $field The field array.
 * @return  array
 */
function acf_prepare_field($field)
{
}
/**
 * acf_render_fields
 *
 * Renders an array of fields. Also loads the field's value.
 *
 * @date    8/10/13
 * @since   5.0.0
 * @since   5.6.9 Changed parameter order.
 *
 * @param   array        $fields      An array of fields.
 * @param   int|string $post_id     The post ID to load values from.
 * @param   string       $element     The wrapping element type.
 * @param   string       $instruction The instruction render position (label|field).
 * @return  void
 */
function acf_render_fields($fields, $post_id = 0, $el = 'div', $instruction = 'label')
{
}
/**
 * Render the wrapping element for a given field.
 *
 * @since   5.0.0
 *
 * @param   array   $field         The field array.
 * @param   string  $element       The wrapping element type.
 * @param   string  $instruction   The instruction render position (label|field).
 * @param   boolean $field_setting If a field setting is being rendered.
 * @return  void
 * @phpstan-return void
 */
function acf_render_field_wrap($field, $element = 'div', $instruction = 'label', $field_setting = \false)
{
}
/**
 * acf_render_field
 *
 * Render the input element for a given field.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   array $field The field array.
 * @return  void
 * @phpstan-return void
 */
function acf_render_field($field)
{
}
/**
 * acf_render_field_label
 *
 * Renders the field's label.
 *
 * @date    19/9/17
 * @since   5.6.3
 *
 * @param   array $field The field array.
 * @return  void
 */
function acf_render_field_label($field)
{
}
/**
 * acf_get_field_label
 *
 * Returns the field's label with appropriate required label.
 *
 * @date    4/11/2013
 * @since   5.0.0
 *
 * @param   array  $field   The field array.
 * @param   string $context The output context (admin).
 * @return  string The field label in HTML format.
 */
function acf_get_field_label($field, $context = '')
{
}
/**
 * Renders the field's instructions.
 *
 * @since   5.6.3
 *
 * @param array   $field   The field array.
 * @param boolean $tooltip If the instructions are being rendered as a tooltip.
 * @return void
 */
function acf_render_field_instructions($field, $tooltip = \false)
{
}
/**
 * acf_render_field_setting
 *
 * Renders a field setting used in the admin edit screen.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   array   $field   The field array.
 * @param   array   $setting The settings field array.
 * @param   boolean $global  Whether this setting is a global or field type specific one.
 * @return  void
 */
function acf_render_field_setting($field, $setting, $global = \false)
{
}
/**
 * acf_update_field
 *
 * Updates a field in the database.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   array $field    The field array.
 * @param   array $specific An array of specific field attributes to update.
 * @return  array
 */
function acf_update_field($field, $specific = array())
{
}
/**
 * _acf_apply_unique_field_slug
 *
 * Allows full control over 'acf-field' slugs.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param string  $slug          The post slug.
 * @param integer $post_ID       Post ID.
 * @param string  $post_status   The post status.
 * @param string  $post_type     Post type.
 * @param integer $post_parent   Post parent ID
 * @param string  $original_slug The original post slug.
 */
function _acf_apply_unique_field_slug($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug)
{
}
/**
 * acf_flush_field_cache
 *
 * Deletes all caches for this field.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   array $field The field array.
 * @return  void
 */
function acf_flush_field_cache($field)
{
}
/**
 * acf_delete_field
 *
 * Deletes a field from the database.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   int|string $id The field ID, key or name.
 * @return  boolean True if field was deleted.
 */
function acf_delete_field($id = 0)
{
}
/**
 * acf_trash_field
 *
 * Trashes a field from the database.
 *
 * @date    2/10/13
 * @since   5.0.0
 *
 * @param   int|string $id The field ID, key or name.
 * @return  boolean True if field was trashed.
 */
function acf_trash_field($id = 0)
{
}
/**
 * acf_untrash_field
 *
 * Restores a field from the trash.
 *
 * @date    2/10/13
 * @since   5.0.0
 *
 * @param   int|string $id The field ID, key or name.
 * @return  boolean True if field was trashed.
 */
function acf_untrash_field($id = 0)
{
}
/**
 * Filter callback which returns the previous post_status instead of "draft" for the "acf-field" post type.
 *
 * Prior to WordPress 5.6.0, this filter was not needed as restored posts were always assigned their original status.
 *
 * @since 5.9.5
 *
 * @param string  $new_status      The new status of the post being restored.
 * @param integer $post_id         The ID of the post being restored.
 * @param string  $previous_status The status of the post at the point where it was trashed.
 * @return string.
 */
function _acf_untrash_field_post_status($new_status, $post_id, $previous_status)
{
}
/**
 * acf_prefix_fields
 *
 * Changes the prefix for an array of fields by reference.
 *
 * @date    5/9/17
 * @since   5.6.0
 *
 * @param   array  $fields An array of fields.
 * @param   string $prefix The new prefix.
 * @return  void
 */
function acf_prefix_fields(&$fields, $prefix = 'acf')
{
}
/**
 * acf_get_sub_field
 *
 * Searches a field for sub fields matching the given selector.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   int|string $id    The field ID, key or name.
 * @param   array        $field The parent field array.
 * @return  array|false
 */
function acf_get_sub_field($id, $field)
{
}
/**
 * acf_search_fields
 *
 * Searches an array of fields for one that matches the given identifier.
 *
 * @date    12/2/19
 * @since   5.7.11
 *
 * @param   int|string $id       The field ID, key or name.
 * @param   array        $haystack The array of fields.
 * @return  int|false
 */
function acf_search_fields($id, $fields)
{
}
/**
 * acf_is_field
 *
 * Returns true if the given params match a field.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   array $field The field array.
 * @param   mixed $id    An optional identifier to search for.
 * @return  boolean
 */
function acf_is_field($field = \false, $id = '')
{
}
/**
 * acf_get_field_ancestors
 *
 * Returns an array of ancestor field ID's or keys.
 *
 * @date    22/06/2016
 * @since   5.3.8
 *
 * @param   array $field The field array.
 * @return  array
 */
function acf_get_field_ancestors($field)
{
}
/**
 * acf_duplicate_fields
 *
 * Duplicate an array of fields.
 *
 * @date    16/06/2014
 * @since   5.0.0
 *
 * @param   array   $fields    An array of fields.
 * @param   integer $parent_id The new parent ID.
 * @return  array
 */
function acf_duplicate_fields($fields = array(), $parent_id = 0)
{
}
/**
 * acf_duplicate_field
 *
 * Duplicates a field.
 *
 * @date    16/06/2014
 * @since   5.0.0
 *
 * @param   int|string $id        The field ID, key or name.
 * @param   integer      $parent_id The new parent ID.
 * @return  boolean True if field was duplicated.
 */
function acf_duplicate_field($id = 0, $parent_id = 0)
{
}
/**
 * acf_prepare_fields_for_export
 *
 * Returns a modified array of fields ready for export.
 *
 * @date    11/03/2014
 * @since   5.0.0
 *
 * @param   array $fields An array of fields.
 * @return  array
 */
function acf_prepare_fields_for_export($fields = array())
{
}
/**
 * acf_prepare_field_for_export
 *
 * Returns a modified field ready for export.
 *
 * @date    11/03/2014
 * @since   5.0.0
 *
 * @param   array $field The field array.
 * @return  array
 */
function acf_prepare_field_for_export($field)
{
}
/**
 * acf_prepare_field_for_import
 *
 * Returns a modified array of fields ready for import.
 *
 * @date    11/03/2014
 * @since   5.0.0
 *
 * @param   array $fields An array of fields.
 * @return  array
 */
function acf_prepare_fields_for_import($fields = array())
{
}
/**
 * acf_prepare_field_for_import
 *
 * Returns a modified field ready for import.
 * Allows parent fields to modify themselves and also return sub fields.
 *
 * @date    11/03/2014
 * @since   5.0.0
 *
 * @param   array $field The field array.
 * @return  array
 */
function acf_prepare_field_for_import($field)
{
}
/**
 * acf_get_field_group
 *
 * Retrieves a field group for the given identifier.
 *
 * @date    30/09/13
 * @since   5.0.0
 *
 * @param   int|string $id The field group ID, key or name.
 * @return  array|false The field group array.
 */
function acf_get_field_group($id = 0)
{
}
/**
 * acf_get_raw_field_group
 *
 * Retrieves raw field group data for the given identifier.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param   int|string $id The field ID, key or name.
 * @return  array|false The field group array.
 */
function acf_get_raw_field_group($id = 0)
{
}
/**
 * acf_get_field_group_post
 *
 * Retrieves the field group's WP_Post object.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param   int|string $id The field group's ID, key or name.
 * @return  array|false The field group's array.
 */
function acf_get_field_group_post($id = 0)
{
}
/**
 * acf_is_field_group_key
 *
 * Returns true if the given identifier is a field group key.
 *
 * @date    6/12/2013
 * @since   5.0.0
 *
 * @param   string $id The identifier.
 * @return  boolean
 */
function acf_is_field_group_key($id = '')
{
}
/**
 * Ensures the given field group is valid.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param array $field_group The field group array.
 * @return array
 */
function acf_validate_field_group($field_group = array())
{
}
/**
 * acf_get_valid_field_group
 *
 * Ensures the given field group is valid.
 *
 * @date        28/09/13
 * @since       5.0.0
 *
 * @param   array $field_group The field group array.
 * @return  array
 */
function acf_get_valid_field_group($field_group = \false)
{
}
/**
 * acf_translate_field_group
 *
 * Translates a field group's settings.
 *
 * @date    8/03/2016
 * @since   5.3.2
 *
 * @param   array $field_group The field group array.
 * @return  array
 */
function acf_translate_field_group($field_group = array())
{
}
/**
 * acf_get_field_groups
 *
 * Returns and array of field_groups for the given $filter.
 *
 * @date    30/09/13
 * @since   5.0.0
 *
 * @param   array $filter An array of args to filter results by.
 * @return  array
 */
function acf_get_field_groups($filter = array())
{
}
/**
 * acf_get_raw_field_groups
 *
 * Returns and array of raw field_group data.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  array
 */
function acf_get_raw_field_groups()
{
}
/**
 * acf_filter_field_groups
 *
 * Returns a filtered aray of field groups based on the given $args.
 *
 * @date    29/11/2013
 * @since   5.0.0
 *
 * @param   array $field_groups An array of field groups.
 * @param   array $args         An array of location args.
 * @return  array
 */
function acf_filter_field_groups($field_groups, $args = array())
{
}
/**
 * acf_get_field_group_visibility
 *
 * Returns true if the given field group's location rules match the given $args.
 *
 * @date    7/10/13
 * @since   5.0.0
 *
 * @param   array $field_groups An array of field groups.
 * @param   array $args         An array of location args.
 * @return  boolean
 */
function acf_get_field_group_visibility($field_group, $args = array())
{
}
/**
 * acf_update_field_group
 *
 * Updates a field group in the database.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   array $field_group The field group array.
 * @return  array
 */
function acf_update_field_group($field_group)
{
}
/**
 * _acf_apply_unique_field_group_slug
 *
 * Allows full control over 'acf-field-group' slugs.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param string  $slug          The post slug.
 * @param integer $post_ID       Post ID.
 * @param string  $post_status   The post status.
 * @param string  $post_type     Post type.
 * @param integer $post_parent   Post parent ID
 * @param string  $original_slug The original post slug.
 */
function _acf_apply_unique_field_group_slug($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug)
{
}
/**
 * acf_flush_field_group_cache
 *
 * Deletes all caches for this field group.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   array $field_group The field group array.
 * @return  void
 */
function acf_flush_field_group_cache($field_group)
{
}
/**
 * acf_delete_field_group
 *
 * Deletes a field group from the database.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   int|string $id The field group ID, key or name.
 * @return  boolean True if field group was deleted.
 */
function acf_delete_field_group($id = 0)
{
}
/**
 * acf_trash_field_group
 *
 * Trashes a field group from the database.
 *
 * @date    2/10/13
 * @since   5.0.0
 *
 * @param   int|string $id The field group ID, key or name.
 * @return  boolean True if field group was trashed.
 */
function acf_trash_field_group($id = 0)
{
}
/**
 * acf_untrash_field_group
 *
 * Restores a field_group from the trash.
 *
 * @date    2/10/13
 * @since   5.0.0
 *
 * @param   int|string $id The field_group ID, key or name.
 * @return  boolean True if field_group was trashed.
 */
function acf_untrash_field_group($id = 0)
{
}
/**
 * Filter callback which returns the previous post_status instead of "draft" for the "acf-field-group" post type.
 *
 * Prior to WordPress 5.6.0, this filter was not needed as restored posts were always assigned their original status.
 *
 * @since 5.9.5
 *
 * @param string  $new_status      The new status of the post being restored.
 * @param integer $post_id         The ID of the post being restored.
 * @param string  $previous_status The status of the post at the point where it was trashed.
 * @return string.
 */
function _acf_untrash_field_group_post_status($new_status, $post_id, $previous_status)
{
}
/**
 * acf_is_field_group
 *
 * Returns true if the given params match a field group.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   array $field_group The field group array.
 * @param   mixed $id          An optional identifier to search for.
 * @return  boolean
 */
function acf_is_field_group($field_group = \false)
{
}
/**
 * acf_duplicate_field_group
 *
 * Duplicates a field group.
 *
 * @date    16/06/2014
 * @since   5.0.0
 *
 * @param   int|string $id          The field_group ID, key or name.
 * @param   integer      $new_post_id Optional post ID to override.
 * @return  array The new field group.
 */
function acf_duplicate_field_group($id = 0, $new_post_id = 0)
{
}
/**
 * Activates or deactivates a field group.
 *
 * @param integer|string $id       The field_group ID, key or name.
 * @param boolean        $activate True if the post should be activated.
 * @return boolean
 */
function acf_update_field_group_active_status($id, $activate = \true)
{
}
/**
 * acf_get_field_group_style
 *
 * Returns the CSS styles generated from field group settings.
 *
 * @date    20/10/13
 * @since   5.0.0
 *
 * @param   array $field_group The field group array.
 * @return  string.
 */
function acf_get_field_group_style($field_group)
{
}
/**
 * acf_get_field_group_edit_link
 *
 * Checks if the current user can edit the field group and returns the edit url.
 *
 * @date    23/9/18
 * @since   5.7.7
 *
 * @param   integer $post_id The field group ID.
 * @return  string
 */
function acf_get_field_group_edit_link($post_id)
{
}
/**
 * acf_prepare_field_group_for_export
 *
 * Returns a modified field group ready for export.
 *
 * @date    11/03/2014
 * @since   5.0.0
 *
 * @param   array $field_group The field group array.
 * @return  array
 */
function acf_prepare_field_group_for_export($field_group = array())
{
}
/**
 * acf_prepare_field_group_for_import
 *
 * Prepares a field group for the import process.
 *
 * @date    21/11/19
 * @since   5.8.8
 *
 * @param   array $field_group The field group array.
 * @return  array
 */
function acf_prepare_field_group_for_import($field_group)
{
}
/**
 * acf_import_field_group
 *
 * Imports a field group into the databse.
 *
 * @date    11/03/2014
 * @since   5.0.0
 *
 * @param   array $field_group The field group array.
 * @return  array The new field group.
 */
function acf_import_field_group($field_group)
{
}
/**
 * Returns an array of tabs for the field group settings.
 * We combine a list of default tabs with filtered tabs.
 * I.E. Default tabs should be static and should not be changed by the
 * filtered tabs.
 *
 * @since 6.1
 *
 * @return array Key/value array of the default settings tabs for field group settings.
 */
function acf_get_combined_field_group_settings_tabs()
{
}
/**
 * acf_set_form_data
 *
 * Sets data about the current form.
 *
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   string $name The store name.
 * @param   array  $data Array of data to start the store with.
 * @return  ACF_Data
 */
function acf_set_form_data($name = '', $data = \false)
{
}
/**
 * acf_get_form_data
 *
 * Gets data about the current form.
 *
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   string $name The store name.
 * @return  mixed
 */
function acf_get_form_data($name = '')
{
}
/**
 * acf_form_data
 *
 * Called within a form to set important information and render hidden inputs.
 *
 * @date    15/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  void
 */
function acf_form_data($data = array())
{
}
/**
 * acf_save_post
 *
 * Saves the $_POST data.
 *
 * @date    15/10/13
 * @since   5.0.0
 *
 * @param   integer|string $post_id The post id.
 * @param   array          $values  An array of values to override $_POST.
 * @return  boolean True if save was successful.
 */
function acf_save_post($post_id = 0, $values = \null)
{
}
/**
 * _acf_do_save_post
 *
 * Private function hooked into 'acf/save_post' to actually save the $_POST data.
 * This allows developers to hook in before and after ACF has actually saved the data.
 *
 * @date    11/1/19
 * @since   5.7.10
 *
 * @param   integer|string $post_id The post id.
 * @return  void
 */
function _acf_do_save_post($post_id = 0)
{
}
/**
 * Returns true if the value provided is considered "empty". Allows numbers such as 0.
 *
 * @date    6/7/16
 * @since   5.4.0
 *
 * @param   mixed $var The value to check.
 * @return  boolean
 */
function acf_is_empty($var)
{
}
/**
 * Returns true if the value provided is considered "not empty". Allows numbers such as 0.
 *
 * @date    15/7/19
 * @since   5.8.1
 *
 * @param   mixed $var The value to check.
 * @return  boolean
 */
function acf_not_empty($var)
{
}
/**
 * Returns a unique numeric based id.
 *
 * @date    9/1/19
 * @since   5.7.10
 *
 * @param   string $prefix The id prefix. Defaults to 'acf'.
 * @return  string
 */
function acf_uniqid($prefix = 'acf')
{
}
/**
 * Merges together two arrays but with extra functionality to append class names.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   array $array1 An array of attributes.
 * @param   array $array2 An array of attributes.
 * @return  array
 */
function acf_merge_attributes($array1, $array2)
{
}
/**
 * acf_cache_key
 *
 * Returns a filtered cache key.
 *
 * @date    25/1/19
 * @since   5.7.11
 *
 * @param   string $key The cache key.
 * @return  string
 */
function acf_cache_key($key = '')
{
}
/**
 * acf_request_args
 *
 * Returns an array of $_REQUEST values using the provided defaults.
 *
 * @date    28/2/19
 * @since   5.7.13
 *
 * @param   array $args An array of args.
 * @return  array
 */
function acf_request_args($args = array())
{
}
/**
 * Returns a single $_REQUEST arg with fallback.
 *
 * @date    23/10/20
 * @since   5.9.2
 *
 * @param   string $key     The property name.
 * @param   mixed  $default The default value to fallback to.
 * @return  mixed
 */
function acf_request_arg($name = '', $default = \null)
{
}
/**
 * acf_enable_filter
 *
 * Enables a filter with the given name.
 *
 * @date    14/7/16
 * @since   5.4.0
 *
 * @param   string name The modifer name.
 * @return  void
 */
function acf_enable_filter($name = '')
{
}
/**
 * acf_disable_filter
 *
 * Disables a filter with the given name.
 *
 * @date    14/7/16
 * @since   5.4.0
 *
 * @param   string name The modifer name.
 * @return  void
 */
function acf_disable_filter($name = '')
{
}
/**
 * acf_is_filter_enabled
 *
 * Returns the state of a filter for the given name.
 *
 * @date    14/7/16
 * @since   5.4.0
 *
 * @param   string name The modifer name.
 * @return  array
 */
function acf_is_filter_enabled($name = '')
{
}
/**
 * acf_get_filters
 *
 * Returns an array of filters in their current state.
 *
 * @date    14/7/16
 * @since   5.4.0
 *
 * @param   void
 * @return  array
 */
function acf_get_filters()
{
}
/**
 * acf_set_filters
 *
 * Sets an array of filter states.
 *
 * @date    14/7/16
 * @since   5.4.0
 *
 * @param   array $filters An Array of modifers
 * @return  array
 */
function acf_set_filters($filters = array())
{
}
/**
 * acf_disable_filters
 *
 * Disables all filters and returns the previous state.
 *
 * @date    14/7/16
 * @since   5.4.0
 *
 * @param   void
 * @return  array
 */
function acf_disable_filters()
{
}
/**
 * acf_enable_filters
 *
 * Enables all or an array of specific filters and returns the previous state.
 *
 * @date    14/7/16
 * @since   5.4.0
 *
 * @param   array $filters An Array of modifers
 * @return  array
 */
function acf_enable_filters($filters = array())
{
}
/**
 * acf_idval
 *
 * Parses the provided value for an ID.
 *
 * @date    29/3/19
 * @since   5.7.14
 *
 * @param   mixed $value A value to parse.
 * @return  integer
 */
function acf_idval($value)
{
}
/**
 * acf_maybe_idval
 *
 * Checks value for potential id value.
 *
 * @date    6/4/19
 * @since   5.7.14
 *
 * @param   mixed $value A value to parse.
 * @return  mixed
 */
function acf_maybe_idval($value)
{
}
/**
 * Convert any numeric strings into their equivalent numeric type. This function will
 * work with both single values and arrays.
 *
 * @param mixed $value Either a single value or an array of values.
 * @return mixed
 */
function acf_format_numerics($value)
{
}
/**
 * acf_numval
 *
 * Casts the provided value as eiter an int or float using a simple hack.
 *
 * @date    11/4/19
 * @since   5.7.14
 *
 * @param   mixed $value A value to parse.
 * @return  int|float
 */
function acf_numval($value)
{
}
/**
 * acf_idify
 *
 * Returns an id attribute friendly string.
 *
 * @date    24/12/17
 * @since   5.6.5
 *
 * @param   string $str The string to convert.
 * @return  string
 */
function acf_idify($str = '')
{
}
/**
 * Returns a slug friendly string.
 *
 * @date    24/12/17
 * @since   5.6.5
 *
 * @param   string $str  The string to convert.
 * @param   string $glue The glue between each slug piece.
 * @return  string
 */
function acf_slugify($str = '', $glue = '-')
{
}
/**
 * Returns a string with correct full stop punctuation.
 *
 * @date    12/7/19
 * @since   5.8.2
 *
 * @param   string $str The string to format.
 * @return  string
 */
function acf_punctify($str = '')
{
}
/**
 * acf_did
 *
 * Returns true if ACF already did an event.
 *
 * @date    30/8/19
 * @since   5.8.1
 *
 * @param   string $name The name of the event.
 * @return  boolean
 */
function acf_did($name)
{
}
/**
 * Returns the length of a string that has been submitted via $_POST.
 *
 * Uses the following process:
 * 1. Unslash the string because posted values will be slashed.
 * 2. Decode special characters because wp_kses() will normalize entities.
 * 3. Treat line-breaks as a single character instead of two.
 * 4. Use mb_strlen() to accomodate special characters.
 *
 * @date    04/06/2020
 * @since   5.9.0
 *
 * @param   string $str The string to review.
 * @return  integer
 */
function acf_strlen($str)
{
}
/**
 * Returns a value with default fallback.
 *
 * @date    6/4/20
 * @since   5.9.0
 *
 * @param   mixed $value         The value.
 * @param   mixed $default_value The default value.
 * @return  mixed
 */
function acf_with_default($value, $default_value)
{
}
/**
 * Returns the current priority of a running action.
 *
 * @date    14/07/2020
 * @since   5.9.0
 *
 * @param   string $action The action name.
 * @return  integer|boolean
 */
function acf_doing_action($action)
{
}
/**
 * Returns the current URL.
 *
 * @date    23/01/2015
 * @since   5.1.5
 *
 * @param   void
 * @return  string
 */
function acf_get_current_url()
{
}
/**
 * Add UTM tracking tags to internal ACF URLs
 *
 * @since 6.0.0
 *
 * @param string  $url      The URL to be tagged.
 * @param string  $campaign The campaign tag.
 * @param string  $content  The UTM content tag.
 * @param boolean $anchor   An optional anchor ID.
 * @param string  $source   An optional UTM source tag.
 * @param string  $medium   An optional UTM medium tag.
 * @return string
 */
function acf_add_url_utm_tags($url, $campaign, $content, $anchor = \false, $source = '', $medium = '')
{
}
/**
 * Sanitizes request arguments.
 *
 * @param mixed $args The data to sanitize.
 *
 * @return array|boolean|float|integer|mixed|string
 */
function acf_sanitize_request_args($args = array())
{
}
/**
 * Sanitizes file upload arrays.
 *
 * @since 6.0.4
 *
 * @param array $args The file array.
 *
 * @return array
 */
function acf_sanitize_files_array(array $args = array())
{
}
/**
 * Sanitizes file upload values within the array.
 *
 * This addresses nested file fields within repeaters and groups.
 *
 * @since 6.0.5
 *
 * @param array  $array             The file upload array.
 * @param string $sanitize_function Callback used to sanitize array value.
 * @return array
 */
function acf_sanitize_files_value_array($array, $sanitize_function)
{
}
/**
 * Maybe unserialize, but don't allow any classes.
 *
 * @since 6.1
 *
 * @param string $data String to be unserialized, if serialized.
 * @return mixed The unserialized, or original data.
 */
function acf_maybe_unserialize($data)
{
}
/**
 * Check if current install is ACF PRO
 *
 * @since 6.2
 *
 * @return boolean True if the current install is ACF PRO
 */
function acf_is_pro()
{
}
/**
 * acf_add_filter_variations
 *
 * Registers variations for the given filter.
 *
 * @date    26/1/19
 * @since   5.7.11
 *
 * @param   string  $filter     The filter name.
 * @param   array   $variations An array variation keys.
 * @param   integer $index      The param index to find variation values.
 * @return  void
 */
function acf_add_filter_variations($filter = '', $variations = array(), $index = 0)
{
}
/**
 * acf_add_action_variations
 *
 * Registers variations for the given action.
 *
 * @date    26/1/19
 * @since   5.7.11
 *
 * @param   string  $action     The action name.
 * @param   array   $variations An array variation keys.
 * @param   integer $index      The param index to find variation values.
 * @return  void
 */
function acf_add_action_variations($action = '', $variations = array(), $index = 0)
{
}
/**
 * _acf_apply_hook_variations
 *
 * Applies hook variations during apply_filters() or do_action().
 *
 * @date    25/1/19
 * @since   5.7.11
 *
 * @param   mixed
 * @return  mixed
 */
function _acf_apply_hook_variations()
{
}
/**
 * acf_add_deprecated_filter
 *
 * Registers a deprecated filter to run during the replacement.
 *
 * @date    25/1/19
 * @since   5.7.11
 *
 * @param   string $deprecated  The deprecated hook.
 * @param   string $version     The version this hook was deprecated.
 * @param   string $replacement The replacement hook.
 * @return  void
 */
function acf_add_deprecated_filter($deprecated, $version, $replacement)
{
}
/**
 * acf_add_deprecated_action
 *
 * Registers a deprecated action to run during the replacement.
 *
 * @date    25/1/19
 * @since   5.7.11
 *
 * @param   string $deprecated  The deprecated hook.
 * @param   string $version     The version this hook was deprecated.
 * @param   string $replacement The replacement hook.
 * @return  void
 */
function acf_add_deprecated_action($deprecated, $version, $replacement)
{
}
/**
 * Applies a deprecated filter during apply_filters() or do_action().
 *
 * @date    25/1/19
 * @since   5.7.11
 *
 * @param   mixed
 * @return  mixed
 */
function _acf_apply_deprecated_hook()
{
}
/**
 * acf_filter_attrs
 *
 * Filters out empty attrs from the provided array.
 *
 * @date    11/6/19
 * @since   5.8.1
 *
 * @param   array $attrs The array of attrs.
 * @return  array
 */
function acf_filter_attrs($attrs)
{
}
/**
 * acf_esc_attrs
 *
 * Generated valid HTML from an array of attrs.
 *
 * @date    11/6/19
 * @since   5.8.1
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_esc_attrs($attrs)
{
}
/**
 * Sanitizes text content and strips out disallowed HTML.
 *
 * This function emulates `wp_kses_post()` with a context of "acf" for extensibility.
 *
 * @date    16/4/21
 * @since   5.9.6
 *
 * @param   string $string
 * @return  string
 */
function acf_esc_html($string = '')
{
}
/**
 * Private callback for the "wp_kses_allowed_html" filter used to return allowed HTML for "acf" context.
 *
 * @date    16/4/21
 * @since   5.9.6
 *
 * @param   array  $tags    An array of allowed tags.
 * @param   string $context The context name.
 * @return  array.
 */
function _acf_kses_allowed_html($tags, $context)
{
}
/**
 * acf_html_input
 *
 * Returns the HTML of an input.
 *
 * @date    13/6/19
 * @since   5.8.1
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
// function acf_html_input( $attrs = array() ) {
// return sprintf( '<input %s/>', acf_esc_attrs($attrs) );
// }
/**
 * acf_hidden_input
 *
 * Renders the HTML of a hidden input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_hidden_input($attrs = array())
{
}
/**
 * acf_get_hidden_input
 *
 * Returns the HTML of a hidden input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_get_hidden_input($attrs = array())
{
}
/**
 * acf_text_input
 *
 * Renders the HTML of a text input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_text_input($attrs = array())
{
}
/**
 * acf_get_text_input
 *
 * Returns the HTML of a text input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_get_text_input($attrs = array())
{
}
/**
 * acf_file_input
 *
 * Renders the HTML of a file input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_file_input($attrs = array())
{
}
/**
 * acf_get_file_input
 *
 * Returns the HTML of a file input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_get_file_input($attrs = array())
{
}
/**
 * acf_textarea_input
 *
 * Renders the HTML of a textarea input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_textarea_input($attrs = array())
{
}
/**
 * acf_get_textarea_input
 *
 * Returns the HTML of a textarea input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_get_textarea_input($attrs = array())
{
}
/**
 * acf_checkbox_input
 *
 * Renders the HTML of a checkbox input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_checkbox_input($attrs = array())
{
}
/**
 * acf_get_checkbox_input
 *
 * Returns the HTML of a checkbox input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_get_checkbox_input($attrs = array())
{
}
/**
 * acf_radio_input
 *
 * Renders the HTML of a radio input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_radio_input($attrs = array())
{
}
/**
 * acf_get_radio_input
 *
 * Returns the HTML of a radio input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_get_radio_input($attrs = array())
{
}
/**
 * acf_select_input
 *
 * Renders the HTML of a select input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_select_input($attrs = array())
{
}
/**
 * acf_select_input
 *
 * Returns the HTML of a select input.
 *
 * @date    3/02/2014
 * @since   5.0.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_get_select_input($attrs = array())
{
}
/**
 * acf_walk_select_input
 *
 * Returns the HTML of a select input's choices.
 *
 * @date    27/6/17
 * @since   5.6.0
 *
 * @param   array $choices The choices to walk through.
 * @param   array $values  The selected choices.
 * @param   array $depth   The current walk depth.
 * @return  string
 */
function acf_walk_select_input($choices = array(), $values = array(), $depth = 0)
{
}
/**
 * acf_clean_atts
 *
 * See acf_filter_attrs().
 *
 * @date    3/10/17
 * @since   5.6.3
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_clean_atts($attrs)
{
}
/**
 * acf_esc_atts
 *
 * See acf_esc_attrs().
 *
 * @date    27/6/17
 * @since   5.6.0
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_esc_atts($attrs)
{
}
/**
 * acf_esc_attr
 *
 * @date    13/6/19
 * @since   5.8.1
 * @deprecated  5.6.0
 * @see acf_esc_attrs().
 *
 * @param   array $attrs The array of attrs.
 * @return  string
 */
function acf_esc_attr($attrs)
{
}
/**
 * acf_esc_attr_e
 *
 * See acf_esc_attrs().
 *
 * @date    13/6/19
 * @since   5.8.1
 * @deprecated  5.6.0
 *
 * @param   array $attrs The array of attrs.
 */
function acf_esc_attr_e($attrs)
{
}
/**
 * acf_esc_atts_e
 *
 * See acf_esc_attrs().
 *
 * @date    13/6/19
 * @since   5.8.1
 * @deprecated  5.6.0
 *
 * @param   array $attrs The array of attrs.
 */
function acf_esc_atts_e($attrs)
{
}
/**
 * Generic functions for accessing ACF objects stored as WordPress post types which aren't handled by type specific functions.
 *
 * @package ACF
 */
/**
 * Gets an instance of an ACF_Internal_Post_Type.
 *
 * @param string $post_type The ACF internal post type to get the instance for.
 * @return ACF_Internal_Post_Type|bool The internal post type class instance, or false on failure.
 */
function acf_get_internal_post_type_instance($post_type = 'acf-field-group')
{
}
/**
 * Get an ACF CPT object as an array
 *
 * @param integer $id        The post ID being queried.
 * @param string  $post_type The post type being queried.
 * @return array|false The post type object.
 */
function acf_get_internal_post_type($id, $post_type)
{
}
/**
 * Retrieves raw internal post type data for the given identifier.
 *
 * @since   6.1
 *
 * @param   integer|string $id        The post ID.
 * @param   string         $post_type The post type name.
 * @return  array|false The internal post type array.
 */
function acf_get_raw_internal_post_type($id, $post_type)
{
}
/**
 * Gets a post object from an ACF internal post type.
 *
 * @since 6.1
 *
 * @param integer|string $id        The post ID, key, or name.
 * @param string         $post_type The post type name.
 * @return object|boolean The post object, or false on failure.
 */
function acf_get_internal_post_type_post($id, $post_type)
{
}
/**
 * Returns true if the given identifier is a ACF internal post type key.
 *
 * @since 6.1
 *
 * @param string $id        The identifier.
 * @param string $post_type The ACF post type the key is for.
 * @return boolean
 */
function acf_is_internal_post_type_key($id = '', $post_type = 'acf-field-group')
{
}
/**
 * Validates an ACF internal post type.
 *
 * @since 6.1
 *
 * @param array  $internal_post_type The internal post type array.
 * @param string $post_type_name     The post type name.
 * @return array|boolean
 */
function acf_validate_internal_post_type($internal_post_type, $post_type_name)
{
}
/**
 * Translates the settings for an ACF internal post type.
 *
 * @since 6.1
 *
 * @param array  $internal_post_type The ACF post array.
 * @param string $post_type          The post type name.
 * @return array
 */
function acf_translate_internal_post_type($internal_post_type, $post_type)
{
}
/**
 * Returns and array of ACF posts for the given $filter.
 *
 * @since 6.1
 *
 * @param string $post_type The ACF post type to get posts for.
 * @param array  $filter    An array of args to filter results by.
 * @return array
 */
function acf_get_internal_post_type_posts($post_type = 'acf-field-group', $filter = array())
{
}
/**
 * Returns an array of raw/unvalidated ACF post data.
 *
 * @since 6.1
 *
 * @param string $post_type The ACF post type to get post data for.
 * @return array
 */
function acf_get_raw_internal_post_type_posts($post_type)
{
}
/**
 * Returns a filtered array of ACF posts based on the given $args.
 *
 * @since 6.1
 *
 * @param array  $posts     An array of ACF posts.
 * @param array  $args      An array of args to filter by.
 * @param string $post_type The ACF post type of the posts being filtered.
 * @return array
 */
function acf_filter_internal_post_type_posts($posts, $args = array(), $post_type = 'acf-field-group')
{
}
/**
 * Updates a internal post type in the database.
 *
 * @since   6.1
 *
 * @param array  $internal_post_type Array of data to be saved.
 * @param string $post_type_name     The internal post type being updated.
 * @return array
 */
function acf_update_internal_post_type($internal_post_type, $post_type_name)
{
}
/**
 * Deletes all caches for the provided ACF post.
 *
 * @since 6.1
 *
 * @param array  $post      The ACF post array.
 * @param string $post_type The ACF post type the cache is being cleared for.
 * @return void
 */
function acf_flush_internal_post_type_cache($post, $post_type)
{
}
/**
 * Deletes an internal post type from the database.
 *
 * @since 6.1
 *
 * @param integer|string $id             The internal post type ID, key or name.
 * @param string         $post_type_name The post type to be deleted.
 * @return boolean True if field group was deleted.
 */
function acf_delete_internal_post_type($id = 0, $post_type_name = '')
{
}
/**
 * Trashes an internal post type.
 *
 * @since 6.1
 *
 * @param integer|string $id             The internal post type ID, key, or name.
 * @param string         $post_type_name The post type being trashed.
 * @return boolean True if post was trashed.
 */
function acf_trash_internal_post_type($id = 0, $post_type_name = '')
{
}
/**
 * Restores an ACF post from the trash.
 *
 * @since 6.1
 *
 * @param integer|string $id             The internal post type ID, key, or name.
 * @param string         $post_type_name The post type being untrashed.
 * @return boolean True if post was untrashed.
 */
function acf_untrash_internal_post_type($id = 0, $post_type_name = '')
{
}
/**
 * Returns true if the given params match an ACF post.
 *
 * @since 6.1
 *
 * @param array  $post      The ACF post array.
 * @param string $post_type The ACF post type.
 * @return boolean
 */
function acf_is_internal_post_type($post, $post_type)
{
}
/**
 * Duplicates an ACF post.
 *
 * @since 6.1
 *
 * @param integer|string $id          The field_group ID, key or name.
 * @param integer        $new_post_id Optional ID to override.
 * @param string         $post_type   The post type of the post being duplicated.
 * @return array|boolean The new ACF post, or false on failure.
 */
function acf_duplicate_internal_post_type($id = 0, $new_post_id = 0, $post_type = 'acf-field-group')
{
}
/**
 * Activates or deactivates an ACF post.
 *
 * @param integer|string $id        The field_group ID, key or name.
 * @param boolean        $activate  True if the post should be activated.
 * @param string         $post_type The post type being activated/deactivated.
 * @return boolean
 */
function acf_update_internal_post_type_active_status($id, $activate = \true, $post_type = 'acf-field-group')
{
}
/**
 * Checks if the current user can edit the field group and returns the edit url.
 *
 * @since 6.1
 *
 * @param integer $post_id   The ACF post ID.
 * @param string  $post_type The ACF post type to get the edit link for.
 * @return string
 */
function acf_get_internal_post_type_edit_link($post_id, $post_type)
{
}
/**
 * Returns a modified field group ready for export.
 *
 * @since 6.1
 *
 * @param array  $post      The ACF post array.
 * @param string $post_type The post type of the ACF post being exported.
 * @return array
 */
function acf_prepare_internal_post_type_for_export($post = array(), $post_type = 'acf-field-group')
{
}
/**
 * Exports an ACF post as PHP.
 *
 * @since 6.1
 *
 * @param array  $post      The ACF post array.
 * @param string $post_type The post type of the ACF post being exported.
 * @return string|boolean
 */
function acf_export_internal_post_type_as_php($post, $post_type = 'acf-field-group')
{
}
/**
 * Prepares an ACF post for the import process.
 *
 * @since 6.1
 *
 * @param array  $post      The ACF post array.
 * @param string $post_type The post type of the ACF post being imported.
 * @return  array
 */
function acf_prepare_internal_post_type_for_import($post = array(), $post_type = 'acf-field-group')
{
}
/**
 * Imports an ACF post into the database.
 *
 * @since 6.1
 *
 * @param array  $post      The ACF post array.
 * @param string $post_type The post type of the ACF post being imported.
 * @return array The imported post.
 */
function acf_import_internal_post_type($post, $post_type)
{
}
/**
 * Tries to determine the ACF post type for the provided key.
 *
 * @param string $key The key to check.
 * @return string|boolean
 */
function acf_determine_internal_post_type($key)
{
}
/**
 * Returns an array of tabs for the post type advanced settings.
 *
 * @since 6.1
 *
 * @return array
 */
function acf_get_combined_post_type_settings_tabs()
{
}
/**
 * Returns an array of tabs for the taxonomy advanced settings.
 *
 * @since 6.1
 *
 * @return array
 */
function acf_get_combined_taxonomy_settings_tabs()
{
}
/**
 * Returns an array of tabs for the options page advanced settings
 *
 * @since 6.2
 *
 * @return array
 */
function acf_get_combined_options_page_settings_tabs()
{
}
/**
 * Converts an _acf_screen or hook value into a post type.
 *
 * @since 6.1
 *
 * @param string $screen The ACF screen being viewed.
 * @return string The post type matching the screen or hook value.
 */
function acf_get_post_type_from_screen_value($screen)
{
}
/**
 * Calls the ajax validator for a post type
 *
 * @since 6.1
 *
 * @param string $post_type The post type being validated.
 * @return mixed
 */
function acf_validate_internal_post_type_values($post_type)
{
}
/**
 * Adds a validation error for ACF internal post types.
 *
 * @since 6.1
 *
 * @param string $name      The name of the input.
 * @param string $message   An optional error message to display.
 * @param string $post_type Optional post type the error message is for.
 * @return void
 */
function acf_add_internal_post_type_validation_error($name, $message = '', $post_type = '')
{
}
/**
 * Gets an ACF post type from request args and verifies nonce based on action.
 *
 * @since 6.1.5
 *
 * @param string $action The action being performed.
 * @return array|boolean
 */
function acf_get_post_type_from_request_args($action = '')
{
}
/**
 * Gets an ACF taxonomy from request args and verifies nonce based on action.
 *
 * @since 6.1.5
 *
 * @param string $action The action being performed.
 * @return array|boolean
 */
function acf_get_taxonomy_from_request_args($action = '')
{
}
/**
 * Gets an ACF options page from request args and verifies nonce based on action.
 *
 * @since 6.2
 *
 * @param string $action The action being performed.
 * @return array|boolean
 */
function acf_get_ui_options_page_from_request_args($action = '')
{
}
/**
 * Returns an array of "ACF only" meta for the given post_id.
 *
 * @date    9/10/18
 * @since   5.8.0
 *
 * @param mixed $post_id The post_id for this data.
 *
 * @return array
 */
function acf_get_meta($post_id = 0)
{
}
/**
 * acf_get_option_meta
 *
 * Returns an array of meta for the given wp_option name prefix in the same format as get_post_meta().
 *
 * @date    9/10/18
 * @since   5.8.0
 *
 * @param   string $prefix The wp_option name prefix.
 * @return  array
 */
function acf_get_option_meta($prefix = '')
{
}
/**
 * Retrieves specific metadata from the database.
 *
 * @date    16/10/2015
 * @since   5.2.3
 *
 * @param   integer|string $post_id The post id.
 * @param   string         $name    The meta name.
 * @param   boolean        $hidden  If the meta is hidden (starts with an underscore).
 *
 * @return  mixed
 */
function acf_get_metadata($post_id = 0, $name = '', $hidden = \false)
{
}
/**
 * Updates metadata in the database.
 *
 * @date    16/10/2015
 * @since   5.2.3
 *
 * @param   integer|string $post_id The post id.
 * @param   string         $name    The meta name.
 * @param   mixed          $value   The meta value.
 * @param   boolean        $hidden  If the meta is hidden (starts with an underscore).
 *
 * @return  integer|boolean Meta ID if the key didn't exist, true on successful update, false on failure.
 */
function acf_update_metadata($post_id = 0, $name = '', $value = '', $hidden = \false)
{
}
/**
 * Deletes metadata from the database.
 *
 * @date    16/10/2015
 * @since   5.2.3
 *
 * @param   integer|string $post_id The post id.
 * @param   string         $name    The meta name.
 * @param   boolean        $hidden  If the meta is hidden (starts with an underscore).
 *
 * @return  boolean
 */
function acf_delete_metadata($post_id = 0, $name = '', $hidden = \false)
{
}
/**
 * acf_copy_postmeta
 *
 * Copies meta from one post to another. Useful for saving and restoring revisions.
 *
 * @date    25/06/2016
 * @since   5.3.8
 *
 * @param   int|string $from_post_id The post id to copy from.
 * @param   int|string $to_post_id   The post id to paste to.
 * @return  void
 */
function acf_copy_metadata($from_post_id = 0, $to_post_id = 0)
{
}
/**
 * acf_copy_postmeta
 *
 * Copies meta from one post to another. Useful for saving and restoring revisions.
 *
 * @date    25/06/2016
 * @since   5.3.8
 * @deprecated 5.7.11
 *
 * @param   integer $from_post_id The post id to copy from.
 * @param   integer $to_post_id   The post id to paste to.
 * @return  void
 */
function acf_copy_postmeta($from_post_id = 0, $to_post_id = 0)
{
}
/**
 * acf_get_meta_field
 *
 * Returns a field using the provided $id and $post_id parameters.
 * Looks for a reference to help loading the correct field via name.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   string       $key     The meta name (field name).
 * @param   int|string $post_id The post_id where this field's value is saved.
 * @return  array|false The field array.
 */
function acf_get_meta_field($key = 0, $post_id = 0)
{
}
/**
 * acf_get_metaref
 *
 * Retrieves reference metadata from the database.
 *
 * @date    16/10/2015
 * @since   5.2.3
 *
 * @param   int|string                                   $post_id The post id.
 * @param   string type The reference type (fields|groups).
 * @param   string                                         $name    An optional specific name
 * @return  mixed
 */
function acf_get_metaref($post_id = 0, $type = 'fields', $name = '')
{
}
/**
 * acf_update_metaref
 *
 * Updates reference metadata in the database.
 *
 * @date    16/10/2015
 * @since   5.2.3
 *
 * @param   int|string                                   $post_id    The post id.
 * @param   string type The reference type (fields|groups).
 * @param   array                                          $references An array of references.
 * @return  int|bool Meta ID if the key didn't exist, true on successful update, false on failure.
 */
function acf_update_metaref($post_id = 0, $type = 'fields', $references = array())
{
}
/**
 * Returns available templates for each post type.
 *
 * @date    29/8/17
 * @since   5.6.2
 *
 * @param   void
 * @return  array
 */
function acf_get_post_templates()
{
}
/**
 * Functions for ACF post type objects.
 *
 * @package ACF
 */
/**
 * Get an ACF CPT as an array
 *
 * @param integer|string $id The post ID being queried.
 * @return array|false The post type object.
 */
function acf_get_post_type($id)
{
}
/**
 * Retrieves a raw ACF CPT.
 *
 * @since   6.1
 *
 * @param   integer|string $id The post ID.
 * @return  array|false The internal post type array.
 */
function acf_get_raw_post_type($id)
{
}
/**
 * Gets a post object for an ACF CPT.
 *
 * @since 6.1
 *
 * @param integer|string $id The post ID, key, or name.
 * @return object|boolean The post object, or false on failure.
 */
function acf_get_post_type_post($id)
{
}
/**
 * Returns true if the given identifier is an ACF CPT key.
 *
 * @since 6.1
 *
 * @param string $id The identifier.
 * @return boolean
 */
function acf_is_post_type_key($id)
{
}
/**
 * Validates an ACF CPT.
 *
 * @since 6.1
 *
 * @param array $post_type The ACF post type array.
 * @return array|boolean
 */
function acf_validate_post_type(array $post_type = array())
{
}
/**
 * Translates the settings for an ACF internal post type.
 *
 * @since 6.1
 *
 * @param array $post_type The ACF post type array.
 * @return array
 */
function acf_translate_post_type(array $post_type)
{
}
/**
 * Returns and array of ACF post types for the given $filter.
 *
 * @since 6.1
 *
 * @param array $filter An array of args to filter results by.
 * @return array
 */
function acf_get_acf_post_types(array $filter = array())
{
}
/**
 * Returns an array of raw ACF post types.
 *
 * @since 6.1
 *
 * @return array
 */
function acf_get_raw_post_types()
{
}
/**
 * Returns a filtered array of ACF post types based on the given $args.
 *
 * @since 6.1
 *
 * @param array $post_types An array of ACF posts.
 * @param array $args       An array of args to filter by.
 * @return array
 */
function acf_filter_post_types(array $post_types, array $args = array())
{
}
/**
 * Updates an ACF post type in the database.
 *
 * @since   6.1
 *
 * @param array $post_type The main ACF post type array.
 * @return array
 */
function acf_update_post_type(array $post_type)
{
}
/**
 * Deletes all caches for the provided ACF post type.
 *
 * @since 6.1
 *
 * @param array $post_type The ACF post type array.
 * @return void
 */
function acf_flush_post_type_cache(array $post_type)
{
}
/**
 * Deletes an ACF post type from the database.
 *
 * @since 6.1
 *
 * @param integer|string $id The ACF post type ID, key or name.
 * @return boolean True if post type was deleted.
 */
function acf_delete_post_type($id = 0)
{
}
/**
 * Trashes an ACF post type.
 *
 * @since 6.1
 *
 * @param integer|string $id The post type ID, key, or name.
 * @return boolean True if post was trashed.
 */
function acf_trash_post_type($id = 0)
{
}
/**
 * Restores an ACF post type from the trash.
 *
 * @since 6.1
 *
 * @param integer|string $id The post type ID, key, or name.
 * @return boolean True if post was untrashed.
 */
function acf_untrash_post_type($id = 0)
{
}
/**
 * Returns true if the given params match an ACF post type.
 *
 * @since 6.1
 *
 * @param array $post_type The ACF post type array.
 * @return boolean
 */
function acf_is_post_type($post_type)
{
}
/**
 * Duplicates an ACF post type.
 *
 * @since 6.1
 *
 * @param integer|string $id          The ACF post type ID, key or name.
 * @param integer        $new_post_id Optional ID to override.
 * @return array|boolean The new ACF post type, or false on failure.
 */
function acf_duplicate_post_type($id = 0, $new_post_id = 0)
{
}
/**
 * Activates or deactivates an ACF post type.
 *
 * @param integer|string $id       The ACF post type ID, key or name.
 * @param boolean        $activate True if the post type should be activated.
 * @return boolean
 */
function acf_update_post_type_active_status($id, $activate = \true)
{
}
/**
 * Checks if the current user can edit the post type and returns the edit url.
 *
 * @since 6.1
 *
 * @param integer $post_id The ACF post type ID.
 * @return string
 */
function acf_get_post_type_edit_link($post_id)
{
}
/**
 * Returns a modified ACF post type ready for export.
 *
 * @since 6.1
 *
 * @param array $post_type The ACF post type array.
 * @return array
 */
function acf_prepare_post_type_for_export(array $post_type = array())
{
}
/**
 * Exports an ACF post type as PHP.
 *
 * @since 6.1
 *
 * @param array $post_type The ACF post type array.
 * @return string|boolean
 */
function acf_export_post_type_as_php(array $post_type)
{
}
/**
 * Prepares an ACF post type for the import process.
 *
 * @since 6.1
 *
 * @param array $post_type The ACF post type array.
 * @return array
 */
function acf_prepare_post_type_for_import(array $post_type = array())
{
}
/**
 * Imports an ACF post type into the database.
 *
 * @since 6.1
 *
 * @param array $post_type The ACF post type array.
 * @return array The imported post type.
 */
function acf_import_post_type(array $post_type)
{
}
/**
 * Exports the "Enter Title Here" text for the provided ACF post types.
 *
 * @since 6.2.1
 *
 * @param array $post_types The post types being exported.
 * @return string
 */
function acf_export_enter_title_here(array $post_types)
{
}
/**
 * Functions for ACF taxonomy objects.
 *
 * @package ACF
 */
/**
 * Get an ACF taxonomy as an array
 *
 * @param integer|string $id The post ID being queried.
 * @return array|false The taxonomy object.
 */
function acf_get_taxonomy($id)
{
}
/**
 * Retrieves a raw ACF taxonomy.
 *
 * @since   6.1
 *
 * @param   integer|string $id The post ID.
 * @return  array|false The taxonomy array.
 */
function acf_get_raw_taxonomy($id)
{
}
/**
 * Gets a post object for an ACF taxonomy.
 *
 * @since 6.1
 *
 * @param integer|string $id The post ID, key, or name.
 * @return object|boolean The post object, or false on failure.
 */
function acf_get_taxonomy_post($id)
{
}
/**
 * Returns true if the given identifier is an ACF taxonomy key.
 *
 * @since 6.1
 *
 * @param string $id The identifier.
 * @return boolean
 */
function acf_is_taxonomy_key($id)
{
}
/**
 * Validates an ACF taxonomy.
 *
 * @since 6.1
 *
 * @param array $taxonomy The ACF taxonomy array.
 * @return array|boolean
 */
function acf_validate_taxonomy(array $taxonomy = array())
{
}
/**
 * Translates the settings for an ACF taxonomy.
 *
 * @since 6.1
 *
 * @param array $taxonomy The ACF taxonomy array.
 * @return array
 */
function acf_translate_taxonomy(array $taxonomy)
{
}
/**
 * Returns an array of ACF taxonomies for the given $filter.
 *
 * @since 6.1
 *
 * @param array $filter An array of args to filter results by.
 * @return array
 */
function acf_get_acf_taxonomies(array $filter = array())
{
}
/**
 * Returns an array of raw ACF taxonomies.
 *
 * @since 6.1
 *
 * @return array
 */
function acf_get_raw_taxonomies()
{
}
/**
 * Returns a filtered array of ACF taxonomies based on the given $args.
 *
 * @since 6.1
 *
 * @param array $taxonomies An array of ACF taxonomies.
 * @param array $args       An array of args to filter by.
 * @return array
 */
function acf_filter_taxonomies(array $taxonomies, array $args = array())
{
}
/**
 * Updates an ACF taxonomy in the database.
 *
 * @since   6.1
 *
 * @param array $taxonomy The main ACF taxonomy array.
 * @return array
 */
function acf_update_taxonomy(array $taxonomy)
{
}
/**
 * Deletes all caches for the provided ACF taxonomy.
 *
 * @since 6.1
 *
 * @param array $taxonomy The ACF taxonomy array.
 * @return void
 */
function acf_flush_taxonomy_cache(array $taxonomy)
{
}
/**
 * Deletes an ACF taxonomy from the database.
 *
 * @since 6.1
 *
 * @param integer|string $id The ACF taxonomy ID, key or name.
 * @return boolean True if taxonomy was deleted.
 */
function acf_delete_taxonomy($id = 0)
{
}
/**
 * Trashes an ACF taxonomy.
 *
 * @since 6.1
 *
 * @param integer|string $id The taxonomy ID, key, or name.
 * @return boolean True if taxonomy was trashed.
 */
function acf_trash_taxonomy($id = 0)
{
}
/**
 * Restores an ACF taxonomy from the trash.
 *
 * @since 6.1
 *
 * @param integer|string $id The taxonomy ID, key, or name.
 * @return boolean True if taxonomy was untrashed.
 */
function acf_untrash_taxonomy($id = 0)
{
}
/**
 * Returns true if the given params match an ACF taxonomy.
 *
 * @since 6.1
 *
 * @param array $taxonomy The ACF taxonomy array.
 * @return boolean
 */
function acf_is_taxonomy($taxonomy)
{
}
/**
 * Duplicates an ACF taxonomy.
 *
 * @since 6.1
 *
 * @param integer|string $id          The ACF taxonomy ID, key or name.
 * @param integer        $new_post_id Optional ID to override.
 * @return array|boolean The new ACF taxonomy, or false on failure.
 */
function acf_duplicate_taxonomy($id = 0, $new_post_id = 0)
{
}
/**
 * Activates or deactivates an ACF taxonomy.
 *
 * @param integer|string $id       The ACF taxonomy ID, key or name.
 * @param boolean        $activate True if the taxonomy should be activated.
 * @return boolean
 */
function acf_update_taxonomy_active_status($id, $activate = \true)
{
}
/**
 * Checks if the current user can edit the taxonomy and returns the edit url.
 *
 * @since 6.1
 *
 * @param integer $post_id The ACF taxonomy ID.
 * @return string
 */
function acf_get_taxonomy_edit_link($post_id)
{
}
/**
 * Returns a modified ACF taxonomy ready for export.
 *
 * @since 6.1
 *
 * @param array $taxonomy The ACF taxonomy array.
 * @return array
 */
function acf_prepare_taxonomy_for_export(array $taxonomy = array())
{
}
/**
 * Exports an ACF taxonomy as PHP.
 *
 * @since 6.1
 *
 * @param array $taxonomy The ACF taxonomy array.
 * @return string|boolean
 */
function acf_export_taxonomy_as_php(array $taxonomy)
{
}
/**
 * Prepares an ACF taxonomy for the import process.
 *
 * @since 6.1
 *
 * @param array $taxonomy The ACF taxonomy array.
 * @return array
 */
function acf_prepare_taxonomy_for_import(array $taxonomy = array())
{
}
/**
 * Imports an ACF taxonomy into the database.
 *
 * @since 6.1
 *
 * @param array $taxonomy The ACF taxonomy array.
 * @return array The imported taxonomy.
 */
function acf_import_taxonomy(array $taxonomy)
{
}
/**
 * acf_get_users
 *
 * Similar to the get_users() function but with extra functionality.
 *
 * @date    9/1/19
 * @since   5.7.10
 *
 * @param   array $args The query args.
 * @return  array
 */
function acf_get_users($args = array())
{
}
/**
 * acf_get_user_result
 *
 * Returns a result containing "id" and "text" for the given user.
 *
 * @date    21/5/19
 * @since   5.8.1
 *
 * @param   WP_User $user The user object.
 * @return  array
 */
function acf_get_user_result($user)
{
}
/**
 * acf_get_user_role_labels
 *
 * Returns an array of user roles in the format "name => label".
 *
 * @date    20/5/19
 * @since   5.8.1
 *
 * @param   array $roles A specific array of roles.
 * @return  array
 */
function acf_get_user_role_labels($roles = array())
{
}
/**
 * acf_allow_unfiltered_html
 *
 * Returns true if the current user is allowed to save unfiltered HTML.
 *
 * @date    9/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  boolean
 */
function acf_allow_unfiltered_html()
{
}
/**
 * acf_new_instance
 *
 * Creates a new instance of the given class and stores it in the instances data store.
 *
 * @date    9/1/19
 * @since   5.7.10
 *
 * @param   string $class The class name.
 * @return  object The instance.
 */
function acf_new_instance($class = '')
{
}
/**
 * Returns an instance for the given class.
 *
 * @date  9/1/19
 * @since 5.7.10
 *
 * @param string $class The class name.
 * @return object The instance.
 */
function acf_get_instance($class = '')
{
}
/**
 * acf_register_store
 *
 * Registers a data store.
 *
 * @date    9/1/19
 * @since   5.7.10
 *
 * @param   string $name The store name.
 * @param   array  $data Array of data to start the store with.
 * @return  ACF_Data
 */
function acf_register_store($name = '', $data = \false)
{
}
/**
 * acf_get_store
 *
 * Returns a data store.
 *
 * @date    9/1/19
 * @since   5.7.10
 *
 * @param   string $name The store name.
 * @return  ACF_Data
 */
function acf_get_store($name = '')
{
}
/**
 * acf_switch_stores
 *
 * Triggered when switching between sites on a multisite installation.
 *
 * @date    13/2/19
 * @since   5.7.11
 *
 * @param   integer                       $site_id New blog ID.
 * @param   int prev_blog_id Prev blog ID.
 * @return  void
 */
function acf_switch_stores($site_id, $prev_site_id)
{
}
/**
 * acf_get_path
 *
 * Returns the plugin path to a specified file.
 *
 * @date    28/9/13
 * @since   5.0.0
 *
 * @param   string $filename The specified file.
 * @return  string
 */
function acf_get_path($filename = '')
{
}
/**
 * acf_get_url
 *
 * Returns the plugin url to a specified file.
 * This function also defines the ACF_URL constant.
 *
 * @date    12/12/17
 * @since   5.6.8
 *
 * @param   string $filename The specified file.
 * @return  string
 */
function acf_get_url($filename = '')
{
}
/**
 * Includes a file within the ACF plugin.
 *
 * @date    10/3/14
 * @since   5.0.0
 *
 * @param   string $filename The specified file.
 * @return  void
 */
function acf_include($filename = '')
{
}
/**
 * acf_get_reference
 *
 * Retrieves the field key for a given field name and post_id.
 *
 * @date    26/1/18
 * @since   5.6.5
 *
 * @param   string $field_name The name of the field. eg 'sub_heading'.
 * @param   mixed  $post_id    The post_id of which the value is saved against.
 * @return  string The field key.
 */
function acf_get_reference($field_name, $post_id)
{
}
/**
 * Retrieves the value for a given field and post_id.
 *
 * @date    28/09/13
 * @since   5.0.0
 *
 * @param   integer|string $post_id The post id.
 * @param   array          $field   The field array.
 * @return  mixed
 */
function acf_get_value($post_id, $field)
{
}
/**
 * Returns a formatted version of the provided value.
 *
 * @since   5.0.0
 *
 * @param mixed          $value       The field value.
 * @param integer|string $post_id     The post id.
 * @param array          $field       The field array.
 * @param boolean        $escape_html Ask the field for a HTML safe version of it's output.
 *
 * @return mixed
 */
function acf_format_value($value, $post_id, $field, $escape_html = \false)
{
}
/**
 * acf_update_value
 *
 * Updates the value for a given field and post_id.
 *
 * @date    28/09/13
 * @since   5.0.0
 *
 * @param   mixed        $value   The new value.
 * @param   int|string $post_id The post id.
 * @param   array        $field   The field array.
 * @return  boolean
 */
function acf_update_value($value, $post_id, $field)
{
}
/**
 * acf_update_values
 *
 * Updates an array of values.
 *
 * @date    26/2/19
 * @since   5.7.13
 *
 * @param   array values The array of values.
 * @param   int|string                     $post_id The post id.
 * @return  void
 */
function acf_update_values($values, $post_id)
{
}
/**
 * acf_flush_value_cache
 *
 * Deletes all cached data for this value.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   int|string $post_id    The post id.
 * @param   string       $field_name The field name.
 * @return  void
 */
function acf_flush_value_cache($post_id = 0, $field_name = '')
{
}
/**
 * acf_delete_value
 *
 * Deletes the value for a given field and post_id.
 *
 * @date    28/09/13
 * @since   5.0.0
 *
 * @param   int|string $post_id The post id.
 * @param   array        $field   The field array.
 * @return  boolean
 */
function acf_delete_value($post_id, $field)
{
}
/**
 * acf_preview_value
 *
 * Return a human friendly 'preview' for a given field value.
 *
 * @date    28/09/13
 * @since   5.0.0
 *
 * @param   mixed        $value   The new value.
 * @param   int|string $post_id The post id.
 * @param   array        $field   The field array.
 * @return  boolean
 */
function acf_preview_value($value, $post_id, $field)
{
}
/**
 * Potentially log an error if a field doesn't exist when we expect it to.
 *
 * @param array  $field    An array representing the field that a value was requested for.
 * @param string $function The function that noticed the problem.
 *
 * @return void
 * @phpstan-return void
 */
function acf_log_invalid_field_notice($field, $function)
{
}
/**
 * Returns a WordPress object type.
 *
 * @date    1/4/20
 * @since   5.9.0
 *
 * @param   string $object_type    The object type (post, term, user, etc).
 * @param   string $object_subtype Optional object subtype (post type, taxonomy).
 * @return  object
 */
function acf_get_object_type($object_type, $object_subtype = '')
{
}
/**
 * Decodes a post_id value such as 1 or "user_1" into an array containing the type and ID.
 *
 * @date    25/1/19
 * @since   5.7.11
 *
 * @param   int|string $post_id The post id.
 * @return  array
 */
function acf_decode_post_id($post_id = 0)
{
}
/**
 * Determine the REST base for a post type or taxonomy object. Note that this is not intended for use
 * with term or post objects but is, instead, to be used with the underlying WP_Post_Type and WP_Taxonomy
 * instances.
 *
 * @param WP_Post_Type|WP_Taxonomy $type_object
 * @return string|null
 */
function acf_get_object_type_rest_base($type_object)
{
}
/**
 * Extract the ID of a given object/array. This supports all expected types handled by our update_fields() and
 * load_fields() callbacks.
 *
 * @param WP_Post|WP_User|WP_Term|WP_Comment|array $object
 * @return integer|mixed|null
 */
function acf_get_object_id($object)
{
}
// class_exists check
/**
 * acf_new_admin_notice
 *
 * Instantiates and returns a new model.
 *
 * @date    23/12/18
 * @since   5.8.0
 *
 * @param   array $data Optional data to set.
 * @return  ACF_Admin_Notice
 */
function acf_new_admin_notice($data = \false)
{
}
/**
 * acf_render_admin_notices
 *
 * Renders all admin notices HTML.
 *
 * @date    10/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  void
 */
function acf_render_admin_notices()
{
}
/**
 * acf_add_admin_notice
 *
 * Creates and returns a new notice.
 *
 * @date        17/10/13
 * @since       5.0.0
 *
 * @param   string  $text        The admin notice text.
 * @param   string  $class       The type of notice (warning, error, success, info).
 * @param   boolean $dismissable Is this notification dismissible (default true) (since 5.11.0)
 * @param   boolean $persisted   Store once a notice has been dismissed per user and prevent showing it again. (since 6.1.0)
 * @return  ACF_Admin_Notice
 */
function acf_add_admin_notice($text = '', $type = 'info', $dismissible = \true, $persisted = \false)
{
}
// class_exists check
/**
 * alias of acf()->admin_tools->register_tool()
 *
 * @type    function
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   void
 * @return  void
 */
function acf_register_admin_tool($class)
{
}
/**
 * This function will return the admin URL to the tools page
 *
 * @type    function
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   void
 * @return  void
 */
function acf_get_admin_tools_url()
{
}
/**
 * This function will return the admin URL to the tools page
 *
 * @type    function
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   void
 * @return  void
 */
function acf_get_admin_tool_url($tool = '')
{
}
/**
 * Helper function for looping over the provided menu items
 * and echoing out the necessary markup.
 *
 * @since 6.2
 *
 * @param array  $menu_items An array of menu items to print.
 * @param string $section    The section being printed.
 * @return void
 * @phpstan-return void
 */
function acf_print_menu_section($menu_items, $section = '')
{
}
/**
 * This function will return true for a non empty array
 *
 * @since   5.4.0
 *
 * @param   mixed $array The variable to test.
 * @return  boolean
 */
function acf_is_array($array)
{
}
/**
 * Alias of acf()->has_setting()
 *
 * @since   5.6.5
 *
 * @param   string $name Name of the setting to check for.
 * @return  boolean
 */
function acf_has_setting($name = '')
{
}
/**
 * acf_raw_setting
 *
 * alias of acf()->get_setting()
 *
 * @since   5.6.5
 *
 * @param   void
 * @return  void
 */
function acf_raw_setting($name = '')
{
}
/**
 * acf_update_setting
 *
 * alias of acf()->update_setting()
 *
 * @since   5.0.0
 *
 * @param   string $name
 * @param   mixed $value
 * @return  void
 */
function acf_update_setting($name, $value)
{
}
/**
 * acf_validate_setting
 *
 * Returns the changed setting name if available.
 *
 * @since   5.6.5
 *
 * @param   void
 * @return  void
 */
function acf_validate_setting($name = '')
{
}
/**
 * Alias of acf()->get_setting()
 *
 * @since   5.0.0
 *
 * @param   string $name  The name of the setting to test.
 * @param string $value An optional default value for the setting if it doesn't exist.
 * @return  void
 */
function acf_get_setting($name, $value = \null)
{
}
/**
 * Return an array of ACF's internal post type names
 *
 * @since 6.1
 * @return array An array of ACF's internal post type names
 */
function acf_get_internal_post_types()
{
}
/**
 * acf_append_setting
 *
 * This function will add a value into the settings array found in the acf object
 *
 * @since   5.0.0
 *
 * @param   string $name
 * @param   mixed $value
 * @return  void
 */
function acf_append_setting($name, $value)
{
}
/**
 * acf_get_data
 *
 * Returns data.
 *
 * @since   5.0.0
 *
 * @param   string $name
 * @return  mixed
 */
function acf_get_data($name)
{
}
/**
 * acf_set_data
 *
 * Sets data.
 *
 * @since   5.0.0
 *
 * @param   string $name
 * @param   mixed  $value
 * @return  void
 */
function acf_set_data($name, $value)
{
}
/**
 * Appends data to an existing key.
 *
 * @since   5.9.0
 *
 * @param string $name The data name.
 * @param mixed  $data The data to append to name.
 */
function acf_append_data($name, $data)
{
}
/**
 * Alias of acf()->init() - the core ACF init function.
 *
 * @since   5.0.0
 */
function acf_init()
{
}
/**
 * acf_has_done
 *
 * This function will return true if this action has already been done
 *
 * @since   5.3.2
 *
 * @param   string $name
 * @return  boolean
 */
function acf_has_done($name)
{
}
/**
 * This function will return the path to a file within an external folder
 *
 * @since   5.5.8
 *
 * @param   string $file Directory path.
 * @param   string $path Optional file path.
 * @return  string File path.
 */
function acf_get_external_path($file, $path = '')
{
}
/**
 * This function will return the url to a file within an internal ACF folder
 *
 * @since   5.5.8
 *
 * @param   string $file Directory path.
 * @param   string $path Optional file path.
 * @return  string File path.
 */
function acf_get_external_dir($file, $path = '')
{
}
/**
 * This function will calculate the url to a plugin folder.
 * Different to the WP plugin_dir_url(), this function can calculate for urls outside of the plugins folder (theme include).
 *
 * @since   5.6.8
 *
 * @param   string $file A file path inside the ACF plugin to get the plugin directory path from.
 * @return  string The plugin directory path.
 */
function acf_plugin_dir_url($file)
{
}
/**
 * This function will merge together 2 arrays and also convert any numeric values to ints
 *
 * @since   5.0.0
 *
 * @param   array $args     The configured arguments array.
 * @param   array $defaults The default properties for the passed args to inherit.
 * @return  array $args Parsed arguments with defaults applied.
 */
function acf_parse_args($args, $defaults = array())
{
}
/**
 * acf_parse_types
 *
 * This function will convert any numeric values to int and trim strings
 *
 * @since   5.0.0
 *
 * @param   mixed $var
 * @return  mixed $var
 */
function acf_parse_types($array)
{
}
/**
 * acf_parse_type
 *
 * description
 *
 * @since   5.0.9
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_parse_type($v)
{
}
/**
 * This function will load in a file from the 'admin/views' folder and allow variables to be passed through
 *
 * @since   5.0.0
 *
 * @param string $view_path
 * @param array  $view_args
 */
function acf_get_view($view_path = '', $view_args = array())
{
}
/**
 * acf_merge_atts
 *
 * description
 *
 * @since   5.0.9
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_merge_atts($atts, $extra = array())
{
}
/**
 * This function will create and echo a basic nonce input
 *
 * @since   5.6.0
 *
 * @param string $nonce The nonce parameter string.
 */
function acf_nonce_input($nonce = '')
{
}
/**
 * This function will remove the var from the array, and return the var
 *
 * @since   5.0.0
 *
 * @param array  $extract_array an array passed as reference to be extracted.
 * @param string $key           The key to extract from the array.
 * @param mixed  $default_value The default value if it doesn't exist in the extract array.
 * @return mixed Extracted var or default.
 */
function acf_extract_var(&$extract_array, $key, $default_value = \null)
{
}
/**
 * This function will remove the vars from the array, and return the vars
 *
 * @since   5.0.0
 *
 * @param array $extract_array an array passed as reference to be extracted.
 * @param array $keys          An array of keys to extract from the original array.
 * @return array An array of extracted values.
 */
function acf_extract_vars(&$extract_array, $keys)
{
}
/**
 * acf_get_sub_array
 *
 * This function will return a sub array of data
 *
 * @since   5.3.2
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_get_sub_array($array, $keys)
{
}
/**
 * Returns an array of post type names.
 *
 * @since   5.0.0
 *
 * @param array $args Optional. An array of key => value arguments to match against the post type objects. Default empty array.
 * @return array A list of post type names.
 */
function acf_get_post_types($args = array())
{
}
function acf_get_pretty_post_types($post_types = array())
{
}
/**
 * Function acf_get_post_stati()
 *
 * Returns an array of post status names.
 *
 * @since   6.1.0
 *
 * @param   array $args Optional. An array of key => value arguments to match against the post status objects. Default empty array.
 * @return  array A list of post status names.
 */
function acf_get_post_stati($args = array())
{
}
/**
 * Function acf_get_pretty_post_statuses()
 *
 * Returns a clean array of post status names.
 *
 * @since   6.1.0
 *
 * @param   array $post_statuses Optional. An array of post status objects. Default empty array.
 * @return  array An array of post status names.
 */
function acf_get_pretty_post_statuses($post_statuses = array())
{
}
/**
 * acf_get_post_type_label
 *
 * This function will return a pretty label for a specific post_type
 *
 * @since   5.4.0
 *
 * @param   string $post_type
 * @return  string
 */
function acf_get_post_type_label($post_type)
{
}
/**
 * Function acf_get_post_status_label()
 *
 * This function will return a pretty label for a specific post_status
 *
 * @since   6.1.0
 *
 * @param   string $post_status The post status.
 * @return  string The post status label.
 */
function acf_get_post_status_label($post_status)
{
}
/**
 * acf_verify_nonce
 *
 * This function will look at the $_POST['_acf_nonce'] value and return true or false
 *
 * @since   5.0.0
 *
 * @param   string $nonce
 * @return  boolean
 */
function acf_verify_nonce($value)
{
}
/**
 * acf_verify_ajax
 *
 * This function will return true if the current AJAX request is valid
 * It's action will also allow WPML to set the lang and avoid AJAX get_posts issues
 *
 * @since   5.2.3
 *
 * @param   void
 * @return  boolean
 */
function acf_verify_ajax()
{
}
/**
 * acf_get_image_sizes
 *
 * This function will return an array of available image sizes
 *
 * @since   5.0.0
 *
 * @param   void
 * @return  array
 */
function acf_get_image_sizes()
{
}
function acf_get_image_size($s = '')
{
}
/**
 * acf_version_compare
 *
 * Similar to the version_compare() function but with extra functionality.
 *
 * @since   5.5.0
 *
 * @param   string $left    The left version number.
 * @param   string $compare The compare operator.
 * @param   string $right   The right version number.
 * @return  boolean
 */
function acf_version_compare($left = '', $compare = '>', $right = '')
{
}
/**
 * acf_get_full_version
 *
 * This function will remove any '-beta1' or '-RC1' strings from a version
 *
 * @since   5.5.0
 *
 * @param   string $version
 * @return  string
 */
function acf_get_full_version($version = '1')
{
}
/**
 * acf_get_terms
 *
 * This function is a wrapper for the get_terms() function
 *
 * @since   5.4.0
 *
 * @param   array $args
 * @return  array
 */
function acf_get_terms($args)
{
}
/**
 * acf_get_taxonomy_terms
 *
 * This function will return an array of available taxonomy terms
 *
 * @since   5.0.0
 *
 * @param   array $taxonomies
 * @return  array
 */
function acf_get_taxonomy_terms($taxonomies = array())
{
}
/**
 * acf_decode_taxonomy_terms
 *
 * This function decodes the $taxonomy:$term strings into a nested array
 *
 * @since   5.0.0
 *
 * @param   array $terms
 * @return  array
 */
function acf_decode_taxonomy_terms($strings = \false)
{
}
/**
 * acf_decode_taxonomy_term
 *
 * This function will return the taxonomy and term slug for a given value
 *
 * @since   5.0.0
 *
 * @param   string $string
 * @return  array
 */
function acf_decode_taxonomy_term($value)
{
}
/**
 * acf_array
 *
 * Casts the value into an array.
 *
 * @since   5.7.10
 *
 * @param   mixed $val The value to cast.
 * @return  array
 */
function acf_array($val = array())
{
}
/**
 * Returns a non-array value.
 *
 * @since   5.8.10
 *
 * @param   mixed $val The value to review.
 * @return  mixed
 */
function acf_unarray($val)
{
}
/**
 * acf_get_array
 *
 * This function will force a variable to become an array
 *
 * @since   5.0.0
 *
 * @param   mixed $var
 * @return  array
 */
function acf_get_array($var = \false, $delimiter = '')
{
}
/**
 * acf_get_numeric
 *
 * This function will return numeric values
 *
 * @since   5.4.0
 *
 * @param   mixed $value
 * @return  mixed
 */
function acf_get_numeric($value = '')
{
}
/**
 * acf_get_posts
 *
 * Similar to the get_posts() function but with extra functionality.
 *
 * @since   5.1.5
 *
 * @param   array $args The query args.
 * @return  array
 */
function acf_get_posts($args = array())
{
}
/**
 * _acf_query_remove_post_type
 *
 * This function will remove the 'wp_posts.post_type' WHERE clause completely
 * When using 'post__in', this clause is unneccessary and slow.
 *
 * @since   5.1.5
 *
 * @param   string $sql
 * @return  $sql
 */
function _acf_query_remove_post_type($sql)
{
}
/**
 * acf_get_grouped_posts
 *
 * This function will return all posts grouped by post_type
 * This is handy for select settings
 *
 * @since   5.0.0
 *
 * @param   array $args
 * @return  array
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
 * acf_get_pretty_user_roles
 *
 * description
 *
 * @since   5.3.2
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_get_pretty_user_roles($allowed = \false)
{
}
/**
 * acf_get_grouped_users
 *
 * This function will return all users grouped by role
 * This is handy for select settings
 *
 * @since   5.0.0
 *
 * @param   array $args
 * @return  array
 */
function acf_get_grouped_users($args = array())
{
}
/**
 * acf_json_encode
 *
 * Returns json_encode() ready for file / database use.
 *
 * @since   5.0.0
 *
 * @param   array $json The array of data to encode.
 * @return  string
 */
function acf_json_encode($json)
{
}
/**
 * acf_str_exists
 *
 * This function will return true if a sub string is found
 *
 * @since   5.0.0
 *
 * @param   string $needle
 * @param   string $haystack
 * @return  boolean
 */
function acf_str_exists($needle, $haystack)
{
}
/**
 * A legacy function designed for developer debugging.
 *
 * @deprecated 6.2.6 Removed for security, but keeping the definition in case third party devs have it in their code.
 * @since 5.0.0
 *
 * @return false
 */
function acf_debug()
{
}
/**
 * A legacy function designed for developer debugging.
 *
 * @deprecated 6.2.6 Removed for security, but keeping the definition in case third party devs have it in their code.
 * @since 5.0.0
 *
 * @return false
 */
function acf_debug_start()
{
}
/**
 * A legacy function designed for developer debugging.
 *
 * @deprecated 6.2.6 Removed for security, but keeping the definition in case third party devs have it in their code.
 * @since 5.0.0
 *
 * @return false
 */
function acf_debug_end()
{
}
/**
 * acf_encode_choices
 *
 * description
 *
 * @since   5.0.0
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_encode_choices($array = array(), $show_keys = \true)
{
}
function acf_decode_choices($string = '', $array_keys = \false)
{
}
/**
 * acf_str_replace
 *
 * This function will replace an array of strings much like str_replace
 * The difference is the extra logic to avoid replacing a string that has alread been replaced
 * This is very useful for replacing date characters as they overlap with eachother
 *
 * @since   5.3.8
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_str_replace($string = '', $search_replace = array())
{
}
/**
 * acf_split_date_time
 *
 * This function will split a format string into seperate date and time
 *
 * @since   5.3.8
 *
 * @param   string $date_time
 * @return  array $formats
 */
function acf_split_date_time($date_time = '')
{
}
/**
 * acf_convert_date_to_php
 *
 * This fucntion converts a date format string from JS to PHP
 *
 * @since   5.0.0
 *
 * @param   string $date
 * @return  string
 */
function acf_convert_date_to_php($date = '')
{
}
/**
 * acf_convert_date_to_js
 *
 * This fucntion converts a date format string from PHP to JS
 *
 * @since   5.0.0
 *
 * @param   string $date
 * @return  string
 */
function acf_convert_date_to_js($date = '')
{
}
/**
 * acf_convert_time_to_php
 *
 * This fucntion converts a time format string from JS to PHP
 *
 * @since   5.0.0
 *
 * @param   string $time
 * @return  string
 */
function acf_convert_time_to_php($time = '')
{
}
/**
 * acf_convert_time_to_js
 *
 * This fucntion converts a date format string from PHP to JS
 *
 * @since   5.0.0
 *
 * @param   string $time
 * @return  string
 */
function acf_convert_time_to_js($time = '')
{
}
/**
 * acf_update_user_setting
 *
 * description
 *
 * @since   5.0.0
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_update_user_setting($name, $value)
{
}
/**
 * acf_get_user_setting
 *
 * description
 *
 * @since   5.0.0
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_get_user_setting($name = '', $default = \false)
{
}
/**
 * acf_in_array
 *
 * description
 *
 * @since   5.0.0
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_in_array($value = '', $array = \false)
{
}
/**
 * acf_get_valid_post_id
 *
 * This function will return a valid post_id based on the current screen / parameter
 *
 * @since   5.0.0
 *
 * @param   mixed $post_id
 * @return  mixed $post_id
 */
function acf_get_valid_post_id($post_id = 0)
{
}
/**
 * acf_get_post_id_info
 *
 * This function will return the type and id for a given $post_id string
 *
 * @since   5.4.0
 *
 * @param   mixed $post_id
 * @return  array $info
 */
function acf_get_post_id_info($post_id = 0)
{
}
/**
 * acf_isset_termmeta
 *
 * This function will return true if the termmeta table exists
 * https://developer.wordpress.org/reference/functions/get_term_meta/
 *
 * @since   5.4.0
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_isset_termmeta($taxonomy = '')
{
}
/**
 * This function will walk through the $_FILES data and upload each found.
 *
 * @since   5.0.9
 *
 * @param array $ancestors An internal parameter, not required.
 * @phpstan-return void
 */
function acf_upload_files($ancestors = array())
{
}
/**
 * acf_upload_file
 *
 * This function will uploade a $_FILE
 *
 * @since   5.0.9
 *
 * @param   array $uploaded_file array found from $_FILE data
 * @return  int $id new attachment ID
 */
function acf_upload_file($uploaded_file)
{
}
/**
 * acf_update_nested_array
 *
 * This function will update a nested array value. Useful for modifying the $_POST array
 *
 * @since   5.0.9
 *
 * @param   array $array target array to be updated
 * @param   array $ancestors array of keys to navigate through to find the child
 * @param   mixed $value The new value
 * @return  boolean
 */
function acf_update_nested_array(&$array, $ancestors, $value)
{
}
/**
 * acf_is_screen
 *
 * This function will return true if all args are matched for the current screen
 *
 * @since   5.1.5
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_is_screen($id = '')
{
}
/**
 * Check if we're in an ACF admin screen
 *
 * @since  6.2.2
 *
 * @return boolean Returns true if the current screen is an ACF admin screen.
 */
function acf_is_acf_admin_screen()
{
}
/**
 * acf_maybe_get
 *
 * This function will return a var if it exists in an array
 *
 * @since   5.1.5
 *
 * @param   array $array the array to look within
 * @param   key $key the array key to look for. Nested values may be found using '/'
 * @param   mixed $default the value returned if not found
 * @return  int $post_id
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
 * Returns an array of attachment data.
 *
 * @since   5.1.5
 *
 * @param   integer|WP_Post The attachment ID or object
 * @return  array|false
 */
function acf_get_attachment($attachment)
{
}
/**
 * This function will truncate and return a string
 *
 * @since   5.0.0
 *
 * @param string  $text   The text to truncate.
 * @param integer $length The number of characters to allow in the string.
 *
 * @return  string
 */
function acf_get_truncated($text, $length = 64)
{
}
/**
 * acf_current_user_can_admin
 *
 * This function will return true if the current user can administrate the ACF field groups
 *
 * @since   5.1.5
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_current_user_can_admin()
{
}
/**
 * acf_get_filesize
 *
 * This function will return a numeric value of bytes for a given filesize string
 *
 * @since   5.1.5
 *
 * @param   mixed $size
 * @return  int
 */
function acf_get_filesize($size = 1)
{
}
/**
 * acf_format_filesize
 *
 * This function will return a formatted string containing the filesize and unit
 *
 * @since   5.1.5
 *
 * @param   mixed $size
 * @return  int
 */
function acf_format_filesize($size = 1)
{
}
/**
 * acf_get_valid_terms
 *
 * This function will replace old terms with new split term ids
 *
 * @since   5.1.5
 *
 * @param   int|array $terms
 * @param   string $taxonomy
 * @return  $terms
 */
function acf_get_valid_terms($terms = \false, $taxonomy = 'category')
{
}
/**
 * acf_validate_attachment
 *
 * This function will validate an attachment based on a field's restrictions and return an array of errors
 *
 * @since   5.2.3
 *
 * @param   array $attachment attachment data. Changes based on context
 * @param   array $field field settings containing restrictions
 * @param   context (string)                                     $file is different when uploading / preparing
 * @return  array $errors
 */
function acf_validate_attachment($attachment, $field, $context = 'prepare')
{
}
function _acf_settings_uploader($uploader)
{
}
/**
 * acf_translate
 *
 * This function will translate a string using the new 'l10n_textdomain' setting
 * Also works for arrays which is great for fields - select -> choices
 *
 * @since   5.3.2
 *
 * @param   mixed $string string or array containins strings to be translated
 * @return  $string
 */
function acf_translate($string)
{
}
/**
 * acf_maybe_add_action
 *
 * This function will determine if the action has already run before adding / calling the function
 *
 * @since   5.3.2
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_maybe_add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)
{
}
/**
 * acf_is_row_collapsed
 *
 * This function will return true if the field's row is collapsed
 *
 * @since   5.3.2
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_is_row_collapsed($field_key = '', $row_index = 0)
{
}
/**
 * acf_get_attachment_image
 *
 * description
 *
 * @since   5.5.0
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_get_attachment_image($attachment_id = 0, $size = 'thumbnail')
{
}
/**
 * acf_get_post_thumbnail
 *
 * This function will return a thumbail image url for a given post
 *
 * @since   5.3.8
 *
 * @param   obj $post
 * @param   mixed $size
 * @return  string
 */
function acf_get_post_thumbnail($post = \null, $size = 'thumbnail')
{
}
/**
 * acf_get_browser
 *
 * Returns the name of the current browser.
 *
 * @since   5.0.0
 *
 * @param   void
 * @return  string
 */
function acf_get_browser()
{
}
/**
 * acf_is_ajax
 *
 * This function will reutrn true if performing a wp ajax call
 *
 * @since   5.3.8
 *
 * @param   void
 * @return  boolean
 */
function acf_is_ajax($action = '')
{
}
/**
 * Returns a date value in a formatted string.
 *
 * @since 5.3.8
 *
 * @param string $value  The date value to format.
 * @param string $format The format to use.
 * @return string
 */
function acf_format_date($value, $format)
{
}
/**
 * Previously, deletes the debug.log file.
 *
 * @since      5.7.10
 * @deprecated 6.2.7
 */
function acf_clear_log()
{
}
/**
 * acf_log
 *
 * description
 *
 * @since   5.3.8
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_log()
{
}
/**
 * acf_dev_log
 *
 * Used to log variables only if ACF_DEV is defined
 *
 * @since   5.7.4
 *
 * @param   mixed
 * @return  void
 */
function acf_dev_log()
{
}
/**
 * acf_doing
 *
 * This function will tell ACF what task it is doing
 *
 * @since   5.3.8
 *
 * @param   string $event
 * @param   context (string)
 * @return  void
 */
function acf_doing($event = '', $context = '')
{
}
/**
 * acf_is_doing
 *
 * This function can be used to state what ACF is doing, or to check
 *
 * @since   5.3.8
 *
 * @param   string $event
 * @param   context (string)
 * @return  boolean
 */
function acf_is_doing($event = '', $context = '')
{
}
/**
 * acf_is_plugin_active
 *
 * This function will return true if the ACF plugin is active
 * - May be included within a theme or other plugin
 *
 * @since   5.4.0
 *
 * @param   int $basename
 * @return  int $post_id
 */
function acf_is_plugin_active()
{
}
/**
 * acf_send_ajax_results
 *
 * This function will print JSON data for a Select2 AJAX query
 *
 * @since   5.4.0
 *
 * @param   array $response
 * @return  void
 * @phpstan-return never
 */
function acf_send_ajax_results($response)
{
}
/**
 * acf_is_sequential_array
 *
 * This function will return true if the array contains only numeric keys
 *
 * @source  http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential
 *
 * @since   5.4.0
 *
 * @param   array $array
 * @return  boolean
 */
function acf_is_sequential_array($array)
{
}
/**
 * acf_is_associative_array
 *
 * This function will return true if the array contains one or more string keys
 *
 * @source  http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential
 *
 * @since   5.4.0
 *
 * @param   array $array
 * @return  boolean
 */
function acf_is_associative_array($array)
{
}
/**
 * acf_add_array_key_prefix
 *
 * This function will add a prefix to all array keys
 * Useful to preserve numeric keys when performing array_multisort
 *
 * @since   5.4.0
 *
 * @param   array $array
 * @param   string $prefix
 * @return  array
 */
function acf_add_array_key_prefix($array, $prefix)
{
}
/**
 * acf_remove_array_key_prefix
 *
 * This function will remove a prefix to all array keys
 * Useful to preserve numeric keys when performing array_multisort
 *
 * @since   5.4.0
 *
 * @param   array $array
 * @param   string $prefix
 * @return  array
 */
function acf_remove_array_key_prefix($array, $prefix)
{
}
/**
 * This function will remove the proticol from a url
 * Used to allow licenses to remain active if a site is switched to https
 *
 * @since   5.5.4
 *
 * @param   string $url The URL to strip the protocol from.
 * @return  string
 */
function acf_strip_protocol($url)
{
}
/**
 * This function will connect an attacment (image etc) to the post
 * Used to connect attachements uploaded directly to media that have not been attaced to a post
 *
 * @since   5.8.0 Added filter to prevent connection.
 * @since   5.5.4
 *
 * @param   integer $attachment_id The attachment ID.
 * @param   integer $post_id       The post ID.
 * @return  boolean True if attachment was connected.
 */
function acf_connect_attachment_to_post($attachment_id = 0, $post_id = 0)
{
}
/**
 * acf_encrypt
 *
 * This function will encrypt a string using PHP
 * https://bhoover.com/using-php-openssl_encrypt-openssl_decrypt-encrypt-decrypt-data/
 *
 * @since   5.5.8
 *
 * @param   string $data
 * @return  string
 */
function acf_encrypt($data = '')
{
}
/**
 * acf_decrypt
 *
 * This function will decrypt an encrypted string using PHP
 * https://bhoover.com/using-php-openssl_encrypt-openssl_decrypt-encrypt-decrypt-data/
 *
 * @since   5.5.8
 *
 * @param   string $data
 * @return  string
 */
function acf_decrypt($data = '')
{
}
/**
 * acf_parse_markdown
 *
 * A very basic regex-based Markdown parser function based off [slimdown](https://gist.github.com/jbroadway/2836900).
 *
 * @since   5.7.2
 *
 * @param   string $text The string to parse.
 * @return  string
 */
function acf_parse_markdown($text = '')
{
}
/**
 * acf_get_sites
 *
 * Returns an array of sites for a network.
 *
 * @since   5.4.0
 *
 * @param   void
 * @return  array
 */
function acf_get_sites()
{
}
/**
 * acf_convert_rules_to_groups
 *
 * Converts an array of rules from ACF4 to an array of groups for ACF5
 *
 * @since   5.7.4
 *
 * @param   array  $rules    An array of rules.
 * @param   string $anyorall The anyorall setting used in ACF4. Defaults to 'any'.
 * @return  array
 */
function acf_convert_rules_to_groups($rules, $anyorall = 'any')
{
}
/**
 * acf_register_ajax
 *
 * Regsiters an ajax callback.
 *
 * @since   5.7.7
 *
 * @param   string  $name     The ajax action name.
 * @param   array   $callback The callback function or array.
 * @param   boolean $public   Whether to allow access to non logged in users.
 * @return  void
 */
function acf_register_ajax($name = '', $callback = \false, $public = \false)
{
}
/**
 * acf_str_camel_case
 *
 * Converts a string into camelCase.
 * Thanks to https://stackoverflow.com/questions/31274782/convert-array-keys-from-underscore-case-to-camelcase-recursively
 *
 * @since   5.8.0
 *
 * @param   string $string The string ot convert.
 * @return  string
 */
function acf_str_camel_case($string = '')
{
}
/**
 * acf_array_camel_case
 *
 * Converts all aray keys to camelCase.
 *
 * @since   5.8.0
 *
 * @param   array $array The array to convert.
 * @return  array
 */
function acf_array_camel_case($array = array())
{
}
/**
 * Returns true if the current screen is using the block editor.
 *
 * @since 5.8.0
 *
 * @return boolean
 */
function acf_is_block_editor()
{
}
/**
 * Return an array of the WordPress reserved terms
 *
 * @since 6.1
 *
 * @return array The WordPress reserved terms list.
 */
function acf_get_wp_reserved_terms()
{
}
/**
 * Detect if we're on a multisite subsite.
 *
 * @since 6.2.4
 *
 * @return boolean true if we're in a multisite install and not on the main site
 */
function acf_is_multisite_sub_site()
{
}
/**
 * Detect if we're on a multisite main site.
 *
 * @since 6.2.4
 *
 * @return boolean true if we're in a multisite install and on the main site
 */
function acf_is_multisite_main_site()
{
}
/**
 * This function will return a custom field value for a specific field name/key + post_id.
 * There is a 3rd parameter to turn on/off formating. This means that an image field will not use
 * its 'return option' to format the value but return only what was saved in the database
 *
 * @since   3.6
 *
 * @param string  $selector     The field name or key.
 * @param mixed   $post_id      The post_id of which the value is saved against.
 * @param boolean $format_value Whether or not to format the value as described above.
 * @param boolean $escape_html  If we're formatting the value, make sure it's also HTML safe.
 *
 * @return mixed
 */
function get_field($selector, $post_id = \false, $format_value = \true, $escape_html = \false)
{
}
/**
 * This function is the same as echo get_field(), but will escape the value for safe HTML output regardless of parameters.
 *
 * @since   1.0.3
 *
 * @param string  $selector     The field name or key.
 * @param mixed   $post_id      The post_id of which the value is saved against.
 * @param boolean $format_value Enable formatting of value. Default true.
 *
 * @return void
 * @phpstan-return void
 */
function the_field($selector, $post_id = \false, $format_value = \true)
{
}
/**
 * Logs instances of ACF successfully escaping unsafe HTML.
 *
 * @since 6.2.5
 *
 * @param string $function The function that resulted in HTML being escaped.
 * @param string $selector The selector (field key, name, etc.) passed to that function.
 * @param array  $field    The field being queried when HTML was escaped.
 * @param mixed  $post_id  The post ID the function was called on.
 * @return void
 * @phpstan-return void
 */
function _acf_log_escaped_html($function, $selector, $field, $post_id)
{
}
/**
 * Returns an array of instances where HTML was altered due to escaping in the_field or a shortcode.
 *
 * @since 6.2.5
 *
 * @return array
 */
function _acf_get_escaped_html_log()
{
}
/**
 * Updates the array of instances where HTML was altered due to escaping in the_field or a shortcode.
 *
 * @since 6.2.5
 *
 * @param array $escaped The array of instances.
 * @return boolean True on success, or false on failure.
 */
function _acf_update_escaped_html_log($escaped = array())
{
}
/**
 * Deletes the array of instances where HTML was altered due to escaping in the_field or a shortcode.
 * Since 6.2.7, also clears the legacy `acf_will_escape_html_log` option to clean up.
 *
 * @since 6.2.5
 *
 * @return boolean True on success, or false on failure.
 */
function _acf_delete_escaped_html_log()
{
}
/**
 * This function will return an array containing all the field data for a given field_name.
 *
 * @since 3.6
 *
 * @param string  $selector     The field name or key.
 * @param mixed   $post_id      The post_id of which the value is saved against.
 * @param boolean $format_value Whether to format the field value.
 * @param boolean $load_value   Whether to load the field value.
 * @param boolean $escape_html  Should the field return a HTML safe formatted value if $format_value is true.
 *
 * @return array|false $field
 */
function get_field_object($selector, $post_id = \false, $format_value = \true, $load_value = \true, $escape_html = \false)
{
}
/**
 * This function will return a field for the given selector.
 * It will also review the field_reference to ensure the correct field is returned which makes it useful for the template API
 *
 * @since   5.2.3
 *
 * @param   mixed $selector identifier of field. Can be an ID, key, name or post object
 * @param   mixed $post_id the post_id of which the value is saved against
 * @param   boolean $strict if true, return a field only when a field key is found.
 *
 * @return  array $field
 */
function acf_maybe_get_field($selector, $post_id = \false, $strict = \true)
{
}
/**
 * This function will attempt to find a sub field
 *
 * @since   5.4.0
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_maybe_get_sub_field($selectors, $post_id = \false, $strict = \true)
{
}
/**
 * This function will return an array containing all the custom field values for a specific post_id.
 * The function is not very elegant and wastes a lot of PHP memory / SQL queries if you are not using all the values.
 *
 * @since   3.6
 *
 * @param mixed   $post_id      The post_id of which the value is saved against.
 * @param boolean $format_value Whether or not to format the field value.
 * @param boolean $escape_html  Should the field return a HTML safe formatted value if $format_value is true.
 *
 * @return array associative array where field name => field value
 */
function get_fields($post_id = \false, $format_value = \true, $escape_html = \false)
{
}
/**
 * This function will return an array containing all the custom field objects for a specific post_id.
 * The function is not very elegant and wastes a lot of PHP memory / SQL queries if you are not using all the fields / values.
 *
 * @since 3.6
 *
 * @param mixed   $post_id      The post_id of which the value is saved against.
 * @param boolean $format_value Whether or not to format the field value.
 * @param boolean $load_value   Whether or not to load the field value.
 * @param boolean $escape_html  Should the field return a HTML safe formatted value if $format_value is true.
 *
 * @return array associative array where field name => field
 */
function get_field_objects($post_id = \false, $format_value = \true, $load_value = \true, $escape_html = \false)
{
}
/**
 * Checks if a field (such as Repeater or Flexible Content) has any rows of data to loop over.
 * This function is intended to be used in conjunction with the_row() to step through available values.
 *
 * @since   4.3.0
 *
 * @param   string $selector The field name or field key.
 * @param   mixed  $post_id  The post ID where the value is saved. Defaults to the current post.
 * @return  boolean
 * @phpstan-impure
 * @phpstan-return bool
 */
function have_rows($selector, $post_id = \false)
{
}
/**
 * This function will progress the global repeater or flexible content value 1 row
 *
 * @since   4.3.0
 *
 * @param   void
 * @return  array the current row data
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
 * This function is used inside a 'has_sub_field' while loop to return a sub field object
 *
 * @since   5.3.8
 *
 * @param   string $selector
 * @return  array
 */
function get_row_sub_field($selector)
{
}
/**
 * This function is used inside a 'has_sub_field' while loop to return a sub field value
 *
 * @since   5.3.8
 *
 * @param   string $selector
 * @return  mixed
 */
function get_row_sub_value($selector)
{
}
/**
 * This function will find the current loop and unset it from the global array.
 * To be used when loop finishes or a break is used
 *
 * @since   5.0.0
 *
 * @param   boolean $hard_reset completely wipe the global variable, or just unset the active row
 * @return  boolean
 */
function reset_rows()
{
}
/**
 * This function is used inside a while loop to return either true or false (loop again or stop).
 * When using a repeater or flexible content field, it will loop through the rows until
 * there are none left or a break is detected
 *
 * @since   1.0.3
 *
 * @param   string $field_name the field name
 * @param   mixed $post_id the post_id of which the value is saved against
 * @return  boolean
 */
function has_sub_field($field_name, $post_id = \false)
{
}
/**
 * Alias of has_sub_field
 */
function has_sub_fields($field_name, $post_id = \false)
{
}
/**
 * This function is used inside a 'has_sub_field' while loop to return a sub field value
 *
 * @since 1.0.3
 *
 * @param string  $selector     The field name or key.
 * @param boolean $format_value Whether or not to format the value as described above.
 * @param boolean $escape_html  If we're formatting the value, make sure it's also HTML safe.
 *
 * @return mixed
 */
function get_sub_field($selector = '', $format_value = \true, $escape_html = \false)
{
}
/**
 * This function is the same as echo get_sub_field(), but will escape the value for safe HTML output.
 *
 * @since   1.0.3
 *
 * @param string  $field_name   The field name.
 * @param boolean $format_value Enable formatting of value. When false, the field value will be escaped at this level with `acf_esc_html`. Default true.
 *
 * @return void
 * @phpstan-return void
 */
function the_sub_field($field_name, $format_value = \true)
{
}
/**
 * This function is used inside a 'has_sub_field' while loop to return a sub field object
 *
 * @since 3.5.8.1
 *
 * @param string  $selector     The field name or key.
 * @param boolean $format_value Whether to format the field value.
 * @param boolean $load_value   Whether to load the field value.
 * @param boolean $escape_html  Should the field return a HTML safe formatted value.
 *
 * @return mixed
 */
function get_sub_field_object($selector, $format_value = \true, $load_value = \true, $escape_html = \false)
{
}
/**
 * This function will return a string representation of the current row layout within a 'have_rows' loop
 *
 * @since   3.0.6
 *
 * @return mixed
 */
function get_row_layout()
{
}
/**
 * This function is used to add basic shortcode support for the ACF plugin
 * eg. [acf field="heading" post_id="123" format_value="1"]
 *
 * @since 1.1.1
 *
 * @param array $atts The shortcode attributes.
 *
 * @return string|void
 */
function acf_shortcode($atts)
{
}
/**
 * This function will update a value in the database
 *
 * @since   3.1.9
 *
 * @param string $selector The field name or key.
 * @param mixed  $value    The value to save in the database.
 * @param mixed  $post_id  The post_id of which the value is saved against.
 *
 * @return boolean
 */
function update_field($selector, $value, $post_id = \false)
{
}
/**
 * This function will update a value of a sub field in the database
 *
 * @since   5.0.0
 *
 * @param   mixed $selector the sub field name or key, or an array of ancestors
 * @param   mixed $value the value to save in the database
 * @param   mixed $post_id the post_id of which the value is saved against
 *
 * @return  boolean
 */
function update_sub_field($selector, $value, $post_id = \false)
{
}
/**
 * This function will remove a value from the database
 *
 * @since   3.1.9
 *
 * @param   string $selector the field name or key
 * @param   mixed $post_id the post_id of which the value is saved against
 *
 * @return  boolean
 */
function delete_field($selector, $post_id = \false)
{
}
/**
 * This function will delete a value of a sub field in the database
 *
 * @since   5.0.0
 *
 * @param   mixed $selector the sub field name or key, or an array of ancestors
 * @param   mixed $value the value to save in the database
 * @param   mixed $post_id the post_id of which the value is saved against
 * @return  boolean
 */
function delete_sub_field($selector, $post_id = \false)
{
}
/**
 * This function will add a row of data to a field
 *
 * @since   5.2.3
 *
 * @param   string $selector
 * @param   array $row
 * @param   mixed $post_id
 * @return  boolean
 */
function add_row($selector, $row = \false, $post_id = \false)
{
}
/**
 * This function will add a row of data to a field
 *
 * @since   5.2.3
 *
 * @param   string $selector
 * @param   array $row
 * @param   mixed $post_id
 * @return  boolean
 */
function add_sub_row($selector, $row = \false, $post_id = \false)
{
}
/**
 * This function will update a row of data to a field
 *
 * @since   5.2.3
 *
 * @param   string $selector
 * @param   int $i
 * @param   array $row
 * @param   mixed $post_id
 * @return  boolean
 */
function update_row($selector, $i = 1, $row = \false, $post_id = \false)
{
}
/**
 * This function will add a row of data to a field
 *
 * @since   5.2.3
 *
 * @param   string $selector
 * @param   array $row
 * @param   mixed $post_id
 * @return  boolean
 */
function update_sub_row($selector, $i = 1, $row = \false, $post_id = \false)
{
}
/**
 * This function will delete a row of data from a field
 *
 * @since   5.2.3
 *
 * @param   string $selector
 * @param   int $i
 * @param   mixed $post_id
 * @return  boolean
 */
function delete_row($selector, $i = 1, $post_id = \false)
{
}
/**
 * This function will add a row of data to a field
 *
 * @since   5.2.3
 *
 * @param   string $selector
 * @param   array $row
 * @param   mixed $post_id
 * @return  boolean
 */
function delete_sub_row($selector, $i = 1, $post_id = \false)
{
}
/**
 * Depreceated Functions
 *
 * These functions are outdated
 *
 * @since   1.0.0
 *
 * @param   void
 * @return  void
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
 * Returns an array of taxonomy names.
 *
 * @date    7/10/13
 * @since   5.0.0
 *
 * @param   array $args An array of args used in the get_taxonomies() function.
 * @return  array An array of taxonomy names.
 */
function acf_get_taxonomies($args = array())
{
}
/**
 * acf_get_taxonomies_for_post_type
 *
 * Returns an array of taxonomies for a given post type(s)
 *
 * @date    7/9/18
 * @since   5.7.5
 *
 * @param   string|array $post_types The post types to compare against.
 * @return  array
 */
function acf_get_taxonomies_for_post_type($post_types = 'post')
{
}
/**
 * Returns an array of taxonomies in the format "name => label" for use in a select field.
 *
 * @date    3/8/18
 * @since   5.7.2
 *
 * @param   array $taxonomies Optional. An array of specific taxonomies to return.
 * @return  array
 */
function acf_get_taxonomy_labels($taxonomies = array())
{
}
/**
 * acf_get_term_title
 *
 * Returns the title for this term object.
 *
 * @date    10/9/18
 * @since   5.0.0
 *
 * @param   object $term The WP_Term object.
 * @return  string
 */
function acf_get_term_title($term)
{
}
/**
 * acf_get_grouped_terms
 *
 * Returns an array of terms for the given query $args and groups by taxonomy name.
 *
 * @date    2/8/18
 * @since   5.7.2
 *
 * @param   array $args An array of args used in the get_terms() function.
 * @return  array
 */
function acf_get_grouped_terms($args)
{
}
/**
 * _acf_terms_clauses
 *
 * Used in the 'terms_clauses' filter to order terms by taxonomy name.
 *
 * @date    2/8/18
 * @since   5.7.2
 *
 * @param   array $pieces     Terms query SQL clauses.
 * @param   array $taxonomies An array of taxonomies.
 * @param   array $args       An array of terms query arguments.
 * @return  array $pieces
 */
function _acf_terms_clauses($pieces, $taxonomies, $args)
{
}
/**
 * acf_get_pretty_taxonomies
 *
 * Deprecated in favor of acf_get_taxonomy_labels() function.
 *
 * @date        7/10/13
 * @since       5.0.0
 * @deprecated  5.7.2
 */
function acf_get_pretty_taxonomies($taxonomies = array())
{
}
/**
 * acf_get_term
 *
 * Similar to get_term() but with some extra functionality.
 *
 * @date    19/8/18
 * @since   5.7.3
 *
 * @param   mixed  $term_id  The term ID or a string of "taxonomy:slug".
 * @param   string $taxonomy The taxonomyname.
 * @return  WP_Term
 */
function acf_get_term($term_id, $taxonomy = '')
{
}
/**
 * acf_encode_term
 *
 * Returns a "taxonomy:slug" string for a given WP_Term.
 *
 * @date    27/8/18
 * @since   5.7.4
 *
 * @param   WP_Term $term The term object.
 * @return  string
 */
function acf_encode_term($term)
{
}
/**
 * acf_decode_term
 *
 * Decodes a "taxonomy:slug" string into an array of taxonomy and slug.
 *
 * @date    27/8/18
 * @since   5.7.4
 *
 * @param   WP_Term $term The term object.
 * @return  string
 */
function acf_decode_term($string)
{
}
/**
 * acf_get_encoded_terms
 *
 * Returns an array of WP_Term objects from an array of encoded strings
 *
 * @date    9/9/18
 * @since   5.7.5
 *
 * @param   array $values The array of encoded strings.
 * @return  array
 */
function acf_get_encoded_terms($values)
{
}
/**
 * acf_get_choices_from_terms
 *
 * Returns an array of choices from the terms provided.
 *
 * @date    8/9/18
 * @since   5.7.5
 *
 * @param   array  $values and array of WP_Terms objects or encoded strings.
 * @param   string $format The value format (term_id, slug).
 * @return  array
 */
function acf_get_choices_from_terms($terms, $format = 'term_id')
{
}
/**
 * acf_get_choices_from_grouped_terms
 *
 * Returns an array of choices from the grouped terms provided.
 *
 * @date    8/9/18
 * @since   5.7.5
 *
 * @param   array  $value  A grouped array of WP_Terms objects.
 * @param   string $format The value format (term_id, slug).
 * @return  array
 */
function acf_get_choices_from_grouped_terms($value, $format = 'term_id')
{
}
/**
 * acf_get_choice_from_term
 *
 * Returns an array containing the id and text for this item.
 *
 * @date    10/9/18
 * @since   5.7.6
 *
 * @param   object $item   The item object such as WP_Post or WP_Term.
 * @param   string $format The value format (term_id, slug)
 * @return  array
 */
function acf_get_choice_from_term($term, $format = 'term_id')
{
}
/**
 * Returns a valid post_id string for a given term and taxonomy.
 * No longer needed since WP introduced the termmeta table in WP 4.4.
 *
 * @date    6/2/17
 * @since   5.5.6
 * @deprecated 5.9.2
 *
 * @param   string $taxonomy The taxonomy type.
 * @param   int $term_id The term ID.
 * @return  string
 */
function acf_get_term_post_id($taxonomy, $term_id)
{
}
// class_exists check
/**
 * Appends an array of i18n data for localization.
 *
 * @date    13/4/18
 * @since   5.6.9
 *
 * @param   array $text An array of text for i18n.
 * @return  void
 */
function acf_localize_text($text)
{
}
/**
 * Appends an array of l10n data for localization.
 *
 * @date    13/4/18
 * @since   5.6.9
 *
 * @param   array $data An array of data for l10n.
 * @return  void
 */
function acf_localize_data($data)
{
}
/**
 * Enqueues a script with support for supplemental inline scripts.
 *
 * @date    27/4/20
 * @since   5.9.0
 *
 * @param   string $name The script name.
 * @return  void
 */
function acf_enqueue_script($name)
{
}
/**
 * Enqueues the input scripts required for fields.
 *
 * @date    13/4/18
 * @since   5.6.9
 *
 * @param   array $args See ACF_Assets::enqueue_scripts() for a list of args.
 * @return  void
 */
function acf_enqueue_scripts($args = array())
{
}
/**
 * Enqueues the WP media uploader scripts and styles.
 *
 * @date    27/10/2014
 * @since   5.0.9
 *
 * @param   void
 * @return  void
 */
function acf_enqueue_uploader()
{
}
// class_exists check
/**
 * Returns true if compatibility is enabled for the given component.
 *
 * @date    20/1/15
 * @since   5.1.5
 *
 * @param   string $name The name of the component to check.
 * @return  boolean
 */
function acf_get_compatibility($name)
{
}
/**
 * acf_render_field_wrap_label
 *
 * Renders the field's label.
 *
 * @date    19/9/17
 * @since   5.6.3
 * @deprecated 5.6.5
 *
 * @param   array $field The field array.
 * @return  void
 */
function acf_render_field_wrap_label($field)
{
}
/**
 * acf_render_field_wrap_description
 *
 * Renders the field's instructions.
 *
 * @date    19/9/17
 * @since   5.6.3
 * @deprecated 5.6.5
 *
 * @param   array $field The field array.
 * @return  void
 */
function acf_render_field_wrap_description($field)
{
}
/**
 * Returns and array of fields for the given $parent_id.
 *
 * @date    27/02/2014
 * @since   5.0.0.
 * @deprecated  5.7.11
 *
 * @param   integer $parent_id The parent ID.
 * @return  array
 */
function acf_get_fields_by_id($parent_id = 0)
{
}
/**
 * acf_update_option
 *
 * A wrapper for the WP update_option but provides logic for a 'no' autoload
 *
 * @date    4/01/2014
 * @since   5.0.0
 * @deprecated  5.7.11
 *
 * @param   string $option   The option name.
 * @param   string $value    The option value.
 * @param   string $autoload An optional autoload value.
 * @return  boolean
 */
function acf_update_option($option = '', $value = '', $autoload = \null)
{
}
/**
 * acf_get_field_reference
 *
 * Finds the field key for a given field name and post_id.
 *
 * @date    26/1/18
 * @since   5.6.5
 * @deprecated  5.6.8
 *
 * @param   string $field_name The name of the field. eg 'sub_heading'
 * @param   mixed  $post_id    The post_id of which the value is saved against
 * @return  string  $reference  The field key
 */
function acf_get_field_reference($field_name, $post_id)
{
}
/**
 * acf_get_dir
 *
 * Returns the plugin url to a specified file.
 *
 * @date    28/09/13
 * @since   5.0.0
 * @deprecated  5.6.8
 *
 * @param   string $filename The specified file.
 * @return  string
 */
function acf_get_dir($filename = '')
{
}
// class_exists check
/**
 * alias of acf()->fields->register_field_type()
 *
 * @type    function
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   void
 * @return  void
 */
function acf_register_field_type($class)
{
}
/**
 * alias of acf()->fields->register_field_type_info()
 *
 * @type    function
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   void
 * @return  void
 */
function acf_register_field_type_info($info)
{
}
/**
 * alias of acf()->fields->get_field_type()
 *
 * @type    function
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   void
 * @return  void
 */
function acf_get_field_type($name)
{
}
/**
 * alias of acf()->fields->get_field_types()
 *
 * @type    function
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   void
 * @return  void
 */
function acf_get_field_types($args = array())
{
}
/**
 * acf_get_field_types_info
 *
 * Returns an array containing information about each field type
 *
 * @date    18/6/18
 * @since   5.6.9
 *
 * @param   type $var Description. Default.
 * @return  type Description.
 */
function acf_get_field_types_info($args = array())
{
}
/**
 * alias of acf()->fields->is_field_type()
 *
 * @type    function
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   void
 * @return  void
 */
function acf_is_field_type($name = '')
{
}
/**
 * This function will return a field type's property
 *
 * @type    function
 * @date    1/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  array
 */
function acf_get_field_type_prop($name = '', $prop = '')
{
}
/**
 * This function will return the label of a field type
 *
 * @type    function
 * @date    1/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  array
 */
function acf_get_field_type_label($name = '')
{
}
/**
 * Returns the value of a field type "supports" property.
 *
 * @since 6.2.5
 *
 * @param string $name    The name of the field type.
 * @param string $prop    The name of the supports property.
 * @param mixed  $default The default value if the property is not set.
 *
 * @return mixed The value of the supports property which may be false, or $default on failure.
 */
function acf_field_type_supports($name = '', $prop = '', $default = \false)
{
}
/**
 *
 * @deprecated
 * @see acf_is_field_type()
 *
 * @type    function
 * @date    1/10/13
 * @since   5.0.0
 *
 * @param   string $type
 * @return  boolean
 */
function acf_field_type_exists($type = '')
{
}
/**
 * Returns an array of localised field categories.
 *
 * @since 6.1
 *
 * @return array
 */
function acf_get_field_categories_i18n()
{
}
/**
 * Returns an multi-dimentional array of field types "name => label" grouped by category
 *
 * @since   5.0.0
 *
 * @return  array
 */
function acf_get_grouped_field_types()
{
}
/**
 * Returns an array of tabs for a field type.
 * We combine a list of default tabs with filtered tabs.
 * I.E. Default tabs should be static and should not be changed by the
 * filtered tabs.
 *
 * @since   6.1
 *
 * @return array Key/value array of the default settings tabs for field type settings.
 */
function acf_get_combined_field_type_settings_tabs()
{
}
/**
 * Get the PRO only fields and their core metadata.
 *
 * @since 6.1
 *
 * @return array An array of all the pro field types and their field type selection required meta data.
 */
function acf_get_pro_field_types()
{
}
// class_exists check
/**
 * Functions
 *
 * alias of acf()->form->functions
 *
 * @type    function
 * @date    11/06/2014
 * @since   5.0.0
 *
 * @param   void
 * @return  void
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
//function determine_locale()
{
}
/**
 * Returns the current locale.
 *
 * @date    16/12/16
 * @since   5.5.0
 *
 * @param   void
 * @return  string
 */
function acf_get_locale()
{
}
/**
 * acf_load_textdomain
 *
 * Loads the plugin's translated strings similar to load_plugin_textdomain().
 *
 * @date    8/1/19
 * @since   5.7.10
 *
 * @param   string $locale The plugin's current locale.
 * @return  void
 */
function acf_load_textdomain($domain = 'acf')
{
}
/**
 * _acf_apply_language_cache_key
 *
 * Applies the current language to the cache key.
 *
 * @date    23/1/19
 * @since   5.7.11
 *
 * @param   string $key The cache key.
 * @return  string
 */
function _acf_apply_language_cache_key($key)
{
}
/**
 * acf_enable_local
 *
 * Enables the local filter.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  void
 */
function acf_enable_local()
{
}
/**
 * acf_disable_local
 *
 * Disables the local filter.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  void
 */
function acf_disable_local()
{
}
/**
 * acf_is_local_enabled
 *
 * Returns true if local fields are enabled.
 *
 * @date    23/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  boolean
 */
function acf_is_local_enabled()
{
}
/**
 * Returns either local store or a dummy store for the given name or post type.
 *
 * @date 23/1/19
 * @since 5.7.10
 *
 * @param string $name      The store name.
 * @param string $post_type The post type for the desired store.
 * @return ACF_Data
 */
function acf_get_local_store($name = '', $post_type = '')
{
}
/**
 * acf_reset_local
 *
 * Resets the local data.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  void
 */
function acf_reset_local()
{
}
/**
 * acf_get_local_field_groups
 *
 * Returns all local field groups.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  array
 */
function acf_get_local_field_groups()
{
}
/**
 * Returns local ACF posts with the provided post type.
 *
 * @since 6.1
 *
 * @param string $post_type The post type to check for.
 * @return array|mixed
 */
function acf_get_local_internal_posts($post_type = 'acf-field-group')
{
}
/**
 * acf_have_local_field_groups
 *
 * description
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   type $var Description. Default.
 * @return  type Description.
 */
function acf_have_local_field_groups()
{
}
/**
 * acf_count_local_field_groups
 *
 * description
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   type $var Description. Default.
 * @return  type Description.
 */
function acf_count_local_field_groups()
{
}
/**
 * acf_add_local_field_group
 *
 * Adds a local field group.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   array $field_group The field group array.
 * @return  boolean
 */
function acf_add_local_field_group($field_group)
{
}
/**
 * Adds a local ACF internal post type.
 *
 * @since 6.1
 *
 * @param array  $post      The main ACF post array.
 * @param string $post_type The post type being added.
 * @return boolean
 */
function acf_add_local_internal_post_type($post, $post_type)
{
}
/**
 * register_field_group
 *
 * See acf_add_local_field_group().
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   array $field_group The field group array.
 * @return  void
 */
function register_field_group($field_group)
{
}
/**
 * acf_remove_local_field_group
 *
 * Removes a field group for the given key.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field group key.
 * @return  boolean
 */
function acf_remove_local_field_group($key = '')
{
}
/**
 * Removes a local ACF post with the given key and post type.
 *
 * @since 6.1
 *
 * @param string $key       The ACF key.
 * @param string $post_type The ACF post type.
 * @return boolean
 */
function acf_remove_local_internal_post_type($key = '', $post_type = 'acf-field-group')
{
}
/**
 * acf_is_local_field_group
 *
 * Returns true if a field group exists for the given key.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field group key.
 * @return  boolean
 */
function acf_is_local_field_group($key = '')
{
}
/**
 * Returns true if an ACF post exists for the given key.
 *
 * @since 6.1
 *
 * @param string $key       The ACF key.
 * @param string $post_type The ACF post type.
 * @return  boolean
 */
function acf_is_local_internal_post_type($key = '', $post_type = 'acf-field-group')
{
}
/**
 * acf_is_local_field_group_key
 *
 * Returns true if a field group exists for the given key.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field group key.
 * @return  boolean
 */
function acf_is_local_field_group_key($key = '')
{
}
/**
 * Returns true if a local ACF post exists for the given key.
 *
 * @since 6.1
 *
 * @param string $key       The ACF post key.
 * @param string $post_type The post type to check.
 * @return boolean
 */
function acf_is_local_internal_post_type_key($key = '', $post_type = '')
{
}
/**
 * acf_get_local_field_group
 *
 * Returns a field group for the given key.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field group key.
 * @return  array|null
 */
function acf_get_local_field_group($key = '')
{
}
/**
 * Returns an ACF post for the given key.
 *
 * @since 6.1
 *
 * @param string $key       The field group key.
 * @param string $post_type The ACF post type.
 * @return array|null
 */
function acf_get_local_internal_post_type($key = '', $post_type = 'acf-field-group')
{
}
/**
 * acf_add_local_fields
 *
 * Adds an array of local fields.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   array $fields An array of un prepared fields.
 * @return  array
 */
function acf_add_local_fields($fields = array())
{
}
/**
 * acf_get_local_fields
 *
 * Returns all local fields for the given parent.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $parent The parent key.
 * @return  array
 */
function acf_get_local_fields($parent = '')
{
}
/**
 * acf_have_local_fields
 *
 * Returns true if local fields exist.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $parent The parent key.
 * @return  boolean
 */
function acf_have_local_fields($parent = '')
{
}
/**
 * acf_count_local_fields
 *
 * Returns the number of local fields for the given parent.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $parent The parent key.
 * @return  integer
 */
function acf_count_local_fields($parent = '')
{
}
/**
 * acf_add_local_field
 *
 * Adds a local field.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   array   $field    The field array.
 * @param   boolean $prepared Whether or not the field has already been prepared for import.
 * @return  void
 */
function acf_add_local_field($field, $prepared = \false)
{
}
/**
 * _acf_generate_local_key
 *
 * Generates a unique key based on the field's parent.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field key.
 * @return  boolean
 */
function _acf_generate_local_key($field)
{
}
/**
 * acf_remove_local_field
 *
 * Removes a field for the given key.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field key.
 * @return  boolean
 */
function acf_remove_local_field($key = '')
{
}
/**
 * acf_is_local_field
 *
 * Returns true if a field exists for the given key or name.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field group key.
 * @return  boolean
 */
function acf_is_local_field($key = '')
{
}
/**
 * acf_is_local_field_key
 *
 * Returns true if a field exists for the given key.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field group key.
 * @return  boolean
 */
function acf_is_local_field_key($key = '')
{
}
/**
 * acf_get_local_field
 *
 * Returns a field for the given key.
 *
 * @date    22/1/19
 * @since   5.7.10
 *
 * @param   string $key The field group key.
 * @return  array|null
 */
function acf_get_local_field($key = '')
{
}
/**
 * _acf_apply_get_local_field_groups
 *
 * Appends local field groups to the provided array.
 *
 * @date    23/1/19
 * @since   5.7.10
 *
 * @param   array $field_groups An array of field groups.
 * @return  array
 */
function _acf_apply_get_local_field_groups($groups = array())
{
}
/**
 * Appends local ACF internal post types to the provided array.
 *
 * @since 6.1
 *
 * @param array  $posts     An array of ACF posts.
 * @param string $post_type The ACF internal post type being loaded.
 * @return array
 */
function _acf_apply_get_local_internal_posts($posts = array(), $post_type = 'acf-field-group')
{
}
/**
 * _acf_apply_is_local_field_key
 *
 * Returns true if is a local key.
 *
 * @date    23/1/19
 * @since   5.7.10
 *
 * @param   boolean $bool The result.
 * @param   string  $id   The identifier.
 * @return  boolean
 */
function _acf_apply_is_local_field_key($bool, $id)
{
}
/**
 * _acf_apply_is_local_field_group_key
 *
 * Returns true if is a local key.
 *
 * @date    23/1/19
 * @since   5.7.10
 *
 * @param   boolean $bool The result.
 * @param   string  $id   The identifier.
 * @return  boolean
 */
function _acf_apply_is_local_field_group_key($bool, $id)
{
}
/**
 * Returns true if is a local key.
 *
 * @since 6.1
 *
 * @param boolean $bool      The result.
 * @param string  $id        The identifier.
 * @param string  $post_type The post type.
 * @return boolean
 */
function _acf_apply_is_local_internal_post_type_key($bool, $id, $post_type = 'acf-field-group')
{
}
/**
 * _acf_do_prepare_local_fields
 *
 * Local fields that are added too early will not be correctly prepared by the field type class.
 *
 * @date    23/1/19
 * @since   5.7.10
 *
 * @param   void
 * @return  void
 */
function _acf_do_prepare_local_fields()
{
}
// class_exists check
/**
 * Returns an array of found JSON field group files.
 *
 * @date    14/4/20
 * @since   5.9.0
 *
 * @param string $post_type The ACF post type to get files for.
 * @return array
 */
function acf_get_local_json_files($post_type = 'acf-field-group')
{
}
/**
 * Saves a field group JSON file.
 *
 * @date    5/12/2014
 * @since   5.1.5
 *
 * @param   array $field_group The field group.
 * @return  boolean
 */
function acf_write_json_field_group($field_group)
{
}
/**
 * Deletes a field group JSON file.
 *
 * @date    5/12/2014
 * @since   5.1.5
 *
 * @param   string $key The field group key.
 * @return  boolean True on success.
 */
function acf_delete_json_field_group($key)
{
}
// class_exists check
/**
 * acf_setup_meta
 *
 * Adds postmeta to storage.
 *
 * @date    8/10/18
 * @since   5.8.0
 * @see     ACF_Local_Meta::add() for list of parameters.
 *
 * @return  array
 */
function acf_setup_meta($meta = array(), $post_id = 0, $is_main = \false)
{
}
/**
 * acf_reset_meta
 *
 * Removes postmeta to storage.
 *
 * @date    8/10/18
 * @since   5.8.0
 * @see     ACF_Local_Meta::remove() for list of parameters.
 *
 * @return  void
 */
function acf_reset_meta($post_id = 0)
{
}
/**
 * Registers a location type.
 *
 * @date    8/4/20
 * @since   5.9.0
 *
 * @param   string $class_name The location class name.
 * @return  ACF_Location|false
 */
function acf_register_location_type($class_name)
{
}
/**
 * Returns an array of all registered location types.
 *
 * @date    8/4/20
 * @since   5.9.0
 *
 * @param   void
 * @return  array
 */
function acf_get_location_types()
{
}
/**
 * Returns a location type for the given name.
 *
 * @date    18/2/19
 * @since   5.7.12
 *
 * @param   string $name The location type name.
 * @return  ACF_Location|null
 */
function acf_get_location_type($name)
{
}
/**
 * Returns a grouped array of all location rule types.
 *
 * @date    8/4/20
 * @since   5.9.0
 *
 * @param   void
 * @return  array
 */
function acf_get_location_rule_types()
{
}
/**
 * Returns a validated location rule with all props.
 *
 * @date    8/4/20
 * @since   5.9.0
 *
 * @param   array $rule The location rule.
 * @return  array
 */
function acf_validate_location_rule($rule = array())
{
}
/**
 * Returns an array of operators for a given rule.
 *
 * @date    30/5/17
 * @since   5.6.0
 *
 * @param   array $rule The location rule.
 * @return  array
 */
function acf_get_location_rule_operators($rule)
{
}
/**
 * Returns an array of values for a given rule.
 *
 * @date    30/5/17
 * @since   5.6.0
 *
 * @param   array $rule The location rule.
 * @return  array
 */
function acf_get_location_rule_values($rule)
{
}
/**
 * Returns true if the provided rule matches the screen args.
 *
 * @date    30/5/17
 * @since   5.6.0
 *
 * @param   array $rule   The location rule.
 * @param   array $screen The screen args.
 * @param   array $field  The field group array.
 * @return  boolean
 */
function acf_match_location_rule($rule, $screen, $field_group)
{
}
/**
 * Returns ann array of screen args to be used against matching rules.
 *
 * @date    8/4/20
 * @since   5.9.0
 *
 * @param   array $screen     The screen args.
 * @param   array $deprecated The field group array.
 * @return  array
 */
function acf_get_location_screen($screen = array(), $deprecated = \false)
{
}
/**
 * Alias of acf_register_location_type().
 *
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   string $class_name The location class name.
 * @return  ACF_Location|false
 */
function acf_register_location_rule($class_name)
{
}
/**
 * Alias of acf_get_location_type().
 *
 * @date    31/5/17
 * @since   5.6.0
 *
 * @param   string $class_name The location class name.
 * @return  ACF_Location|false
 */
function acf_get_location_rule($name)
{
}
/**
 * Alias of acf_validate_location_rule().
 *
 * @date    30/5/17
 * @since   5.6.0
 *
 * @param   array $rule The location rule.
 * @return  array
 */
function acf_get_valid_location_rule($rule)
{
}
// class_exists check
/**
 * alias of acf()->loop->add_loop()
 *
 * @type    function
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  void
 */
function acf_add_loop($loop = array())
{
}
/**
 * alias of acf()->loop->update_loop()
 *
 * @type    function
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  void
 */
function acf_update_loop($i = 'active', $key = \null, $value = \null)
{
}
/**
 * alias of acf()->loop->get_loop()
 *
 * @type    function
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  void
 */
function acf_get_loop($i = 'active', $key = \null)
{
}
/**
 * alias of acf()->loop->remove_loop()
 *
 * @type    function
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  void
 */
function acf_remove_loop($i = 'active')
{
}
/**
 * Get the REST API schema for a given field.
 *
 * @param array $field
 * @return array
 */
function acf_get_field_rest_schema(array $field)
{
}
/**
 * Get the REST API field links for a given field. The links are appended to the REST response under the _links property
 * and provide API resource links to related objects. If a link is marked as 'embeddable', WordPress can load the resource
 * in the main request under the _embedded property when the request contains the _embed URL parameter.
 *
 * @see \acf_field::get_rest_links()
 * @see https://developer.wordpress.org/rest-api/using-the-rest-api/linking-and-embedding/
 *
 * @param string|integer $post_id
 * @param array          $field
 * @return array
 */
function acf_get_field_rest_links($post_id, array $field)
{
}
/**
 * Format a given field's value for output in the REST API.
 *
 * @param        $value
 * @param        $post_id
 * @param        $field
 * @param string  $format 'light' for normal REST API formatting or 'standard' to apply ACF's normal field formatting.
 * @return mixed
 */
function acf_format_value_for_rest($value, $post_id, $field, $format = 'light')
{
}
// class_exists check
/**
 * This function will copy meta from a post to it's latest revision
 *
 * @type    function
 * @date    26/09/2016
 * @since   5.4.0
 *
 * @param   int $post_id
 * @return  void
 */
function acf_save_post_revision($post_id = 0)
{
}
/**
 * This function will return the latest revision for a given post
 *
 * @type    function
 * @date    25/06/2016
 * @since   5.3.8
 *
 * @param   int $post_id
 * @return  int $post_id
 */
function acf_get_post_latest_revision($post_id)
{
}
/**
 * acf_has_upgrade
 *
 * Returns true if this site has an upgrade avaialble.
 *
 * @date    24/8/18
 * @since   5.7.4
 *
 * @param   void
 * @return  boolean
 */
function acf_has_upgrade()
{
}
/**
 * Runs upgrade routines if this site has an upgrade available.
 *
 * @date  24/8/18
 * @since 5.7.4
 */
function acf_upgrade_all()
{
}
/**
 * acf_get_db_version
 *
 * Returns the ACF DB version.
 *
 * @date    10/09/2016
 * @since   5.4.0
 *
 * @param   void
 * @return  string
 */
function acf_get_db_version()
{
}
/**
 * Updates the ACF DB version.
 *
 * @date    10/09/2016
 * @since   5.4.0
 *
 * @param   string $version The new version.
 * @return  void
 */
function acf_update_db_version($version = '')
{
}
/**
 * acf_upgrade_500
 *
 * Version 5 introduces new post types for field groups and fields.
 *
 * @date    23/8/18
 * @since   5.7.4
 *
 * @param   void
 * @return  void
 */
function acf_upgrade_500()
{
}
/**
 * acf_upgrade_500_field_groups
 *
 * Upgrades all ACF4 field groups to ACF5
 *
 * @date    23/8/18
 * @since   5.7.4
 *
 * @param   void
 * @return  void
 */
function acf_upgrade_500_field_groups()
{
}
/**
 * acf_upgrade_500_field_group
 *
 * Upgrades a ACF4 field group to ACF5
 *
 * @date    23/8/18
 * @since   5.7.4
 *
 * @param   object $ofg The old field group post object.
 * @return  array $nfg  The new field group array.
 */
function acf_upgrade_500_field_group($ofg)
{
}
/**
 * acf_upgrade_500_fields
 *
 * Upgrades all ACF4 fields to ACF5 from a specific field group
 *
 * @date    23/8/18
 * @since   5.7.4
 *
 * @param   object $ofg The old field group post object.
 * @param   array  $nfg The new field group array.
 * @return  void
 */
function acf_upgrade_500_fields($ofg, $nfg)
{
}
/**
 * acf_upgrade_500_field
 *
 * Upgrades a ACF4 field to ACF5
 *
 * @date    23/8/18
 * @since   5.7.4
 *
 * @param   array $field The old field.
 * @return  array $field The new field.
 */
function acf_upgrade_500_field($field)
{
}
/**
 * acf_upgrade_550
 *
 * Version 5.5 adds support for the wp_termmeta table added in WP 4.4.
 *
 * @date    23/8/18
 * @since   5.7.4
 *
 * @param   void
 * @return  void
 */
function acf_upgrade_550()
{
}
/**
 * acf_upgrade_550_termmeta
 *
 * Upgrades all ACF4 termmeta saved in wp_options to the wp_termmeta table.
 *
 * @date    23/8/18
 * @since   5.7.4
 *
 * @param   void
 * @return  void
 * @phpstan-return void
 */
function acf_upgrade_550_termmeta()
{
}
/**
 * When the database is updated to support term meta, migrate ACF term meta data across.
 *
 * @date    23/8/18
 * @since   5.7.4
 *
 * @param   string $wp_db_version         The new $wp_db_version.
 * @param   string $wp_current_db_version The old (current) $wp_db_version.
 * @return  void
 */
function acf_wp_upgrade_550_termmeta($wp_db_version, $wp_current_db_version)
{
}
/**
 * acf_upgrade_550_taxonomy
 *
 * Upgrades all ACF4 termmeta for a specific taxonomy.
 *
 * @date    24/8/18
 * @since   5.7.4
 *
 * @param   string $taxonomy The taxonomy name.
 * @return  void
 */
function acf_upgrade_550_taxonomy($taxonomy)
{
}
// class_exists check
/**
 * Public functions
 *
 * alias of acf()->validation->function()
 *
 * @type    function
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  void
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
 * This function will validate $_POST data and add errors
 *
 * @type    function
 * @date    25/11/2013
 * @since   5.0.0
 *
 * @param   boolean $show_errors if true, errors will be shown via a wp_die screen
 * @return  boolean
 */
function acf_validate_save_post($show_errors = \false)
{
}
/**
 * This function will validate an array of field values
 *
 * @type    function
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   values (array)
 * @param   string $input_prefix
 * @return  void
 * @phpstan-return void
 */
function acf_validate_values($values, $input_prefix = '')
{
}
/**
 * This function will validate a field's value
 *
 * @type    function
 * @date    6/10/13
 * @since   5.0.0
 *
 * @param   void
 * @return  void
 */
function acf_validate_value($value, $field, $input)
{
}
/**
 * Helper/wrapper Functions for ACF UI Options pages.
 *
 * @package ACF
 */
/**
 * Get an ACF UI options page as an array
 *
 * @since 6.2
 *
 * @param integer|string $id The post ID being queried.
 * @return array|false The UI options page array.
 */
function acf_get_ui_options_page($id)
{
}
/**
 * Retrieves a raw ACF UI options page.
 *
 * @since   6.2
 *
 * @param integer|string $id The post ID.
 * @return array|false The UI options page array.
 */
function acf_get_raw_ui_options_page($id)
{
}
/**
 * Gets a post object for an ACF UI options page.
 *
 * @since 6.2
 *
 * @param integer|string $id The post ID, key, or name.
 * @return object|boolean The post object, or false on failure.
 */
function acf_get_ui_options_page_post($id)
{
}
/**
 * Returns true if the given identifier is an ACF UI options page key.
 *
 * @since 6.2
 *
 * @param string $id The identifier.
 * @return boolean
 */
function acf_is_ui_options_page_key($id)
{
}
/**
 * Validates an ACF UI options page.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The ACF UI options page array to validate.
 * @return array|boolean
 */
function acf_validate_ui_options_page(array $ui_options_page = array())
{
}
/**
 * Translates the settings for an ACF UI options page.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The ACF UI options page array.
 * @return array
 */
function acf_translate_ui_options_page(array $ui_options_page)
{
}
/**
 * Returns and array of ACF UI options pages for the given $filter.
 *
 * @since 6.2
 *
 * @param array $filter An array of args to filter results by.
 * @return array
 */
function acf_get_ui_options_pages(array $filter = array())
{
}
/**
 * Returns an array of raw ACF UI options pages.
 *
 * @since 6.2
 *
 * @return array
 */
function acf_get_raw_ui_options_pages()
{
}
/**
 * Returns a filtered array of ACF UI options pages based on the given $args.
 *
 * @since 6.2
 *
 * @param array $ui_options_pages An array of ACF UI options pages.
 * @param array $args             An array of args to filter by.
 * @return array
 */
function acf_filter_ui_options_pages(array $ui_options_pages, array $args = array())
{
}
/**
 * Updates an ACF UI options page in the database.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The main ACF UI options page array.
 * @return array
 */
function acf_update_ui_options_page(array $ui_options_page)
{
}
/**
 * Deletes all caches for the provided ACF UI options page.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The ACF UI options page array.
 * @return void
 */
function acf_flush_ui_options_page_cache(array $ui_options_page)
{
}
/**
 * Deletes an ACF UI options page from the database.
 *
 * @since 6.2
 *
 * @param integer|string $id The ACF UI options page ID, key or name.
 * @return boolean True if the options page was deleted.
 */
function acf_delete_ui_options_page($id = 0)
{
}
/**
 * Trashes an ACF UI options page.
 *
 * @since 6.2
 *
 * @param integer|string $id The UI options page ID, key, or name.
 * @return boolean True if the options page was trashed.
 */
function acf_trash_ui_options_page($id = 0)
{
}
/**
 * Restores an ACF UI options page from the trash.
 *
 * @since 6.2
 *
 * @param integer|string $id The UI options page ID, key, or name.
 * @return boolean True if the options page was untrashed.
 */
function acf_untrash_ui_options_page($id = 0)
{
}
/**
 * Returns true if the given params match an ACF UI options page.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The ACF UI options page array.
 * @return boolean
 */
function acf_is_ui_options_page($ui_options_page)
{
}
/**
 * Duplicates an ACF UI options page.
 *
 * @since 6.2
 *
 * @param integer|string $id          The ACF UI options page ID, key or name.
 * @param integer        $new_post_id Optional ID to override.
 * @return array|boolean The new ACF UI options page, or false on failure.
 */
function acf_duplicate_ui_options_page($id = 0, $new_post_id = 0)
{
}
/**
 * Activates or deactivates an ACF UI options page.
 *
 * @since 6.2
 *
 * @param integer|string $id       The ACF UI options page ID, key or name.
 * @param boolean        $activate True if the UI options page should be activated.
 * @return boolean
 */
function acf_update_ui_options_page_active_status($id, $activate = \true)
{
}
/**
 * Checks if the current user can edit the UI options page and returns the edit URL.
 *
 * @since 6.2
 *
 * @param integer $post_id The ACF UI options page ID.
 * @return string
 */
function acf_get_ui_options_page_edit_link($post_id)
{
}
/**
 * Returns a modified ACF UI options page ready for export.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The ACF UI options page array.
 * @return array
 */
function acf_prepare_ui_options_page_for_export(array $ui_options_page = array())
{
}
/**
 * Exports an ACF UI options page as PHP.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The ACF UI options page array.
 * @return string|boolean
 */
function acf_export_ui_options_page_as_php(array $ui_options_page)
{
}
/**
 * Prepares an ACF UI options page for the import process.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The ACF UI options page array.
 * @return array
 */
function acf_prepare_ui_options_page_for_import(array $ui_options_page = array())
{
}
/**
 * Imports an ACF UI options page into the database.
 *
 * @since 6.2
 *
 * @param array $ui_options_page The ACF UI options page array.
 * @return array The imported options page.
 */
function acf_import_ui_options_page(array $ui_options_page)
{
}
/**
 * Renders the license status table.
 *
 * @since 6.2.3
 *
 * @param array $status The current license status array.
 * @return void
 * @phpstan-return void
 */
function acf_pro_render_license_status_table($status)
{
}
/**
 * Renders the "Manage License"/"Renew Subscription" button.
 *
 * @since 6.2.3
 *
 * @param array $status The current license status.
 * @return void
 * @phpstan-return void
 */
function acf_pro_render_manage_license_button($status)
{
}
/**
 * Prefix block names for ACF blocks registered through block.json
 *
 * @since 6.0.0
 *
 * @param array $metadata The block metadata array.
 * @return array The original array with a prefixed block name if it's an ACF block.
 */
function acf_add_block_namespace($metadata)
{
}
/**
 * Handle an ACF block registered through block.json
 *
 * @since 6.0.0
 *
 * @param array $settings The compiled block settings.
 * @param array $metadata The raw json metadata.
 *
 * @return array Block registration settings with ACF required additions.
 */
function acf_handle_json_block_registration($settings, $metadata)
{
}
/**
 * Check if a block.json block is an ACF block.
 *
 * @since 6.0.0
 *
 * @param array $metadata The raw block metadata array.
 * @return boolean
 */
function acf_is_acf_block_json($metadata)
{
}
/**
 * Registers a block type.
 *
 * @date    18/2/19
 * @since   5.8.0
 *
 * @param   array $block The block settings.
 * @return  array|false
 */
function acf_register_block_type($block)
{
}
/**
 * See acf_register_block_type().
 *
 * @date    18/2/19
 * @since   5.7.12
 *
 * @param   array $block The block settings.
 * @return  array|false
 */
function acf_register_block($block)
{
}
/**
 * Returns true if a block type exists for the given name.
 *
 * @since   5.7.12
 *
 * @param   string $name The block type name.
 * @return  boolean
 */
function acf_has_block_type($name)
{
}
/**
 * Returns an array of all registered block types.
 *
 * @since   5.7.12
 *
 * @return  array
 */
function acf_get_block_types()
{
}
/**
 * Returns a block type for the given name.
 *
 * @since   5.7.12
 *
 * @param   string $name The block type name.
 * @return  array|null
 */
function acf_get_block_type($name)
{
}
/**
 * Removes a block type for the given name.
 *
 * @since   5.7.12
 *
 * @param   string $name The block type name.
 * @return  void
 */
function acf_remove_block_type($name)
{
}
/**
 * Returns an array of default attribute settings for a block type.
 *
 * @date    19/11/18
 * @since   5.8.0
 *
 * @param array $block_type A block configuration array.
 * @return array
 */
function acf_get_block_type_default_attributes($block_type)
{
}
/**
 * Validates a block type ensuring all settings exist.
 *
 * @since   5.8.0
 *
 * @param   array $block The block settings.
 * @return  array
 */
function acf_validate_block_type($block)
{
}
/**
 * Prepares a block for use in render_callback by merging in all settings and attributes.
 *
 * @since   5.8.0
 *
 * @param   array $block The block props.
 * @return  array
 */
function acf_prepare_block($block)
{
}
/**
 * Add backwards compatible attribute values.
 *
 * @since 6.0.0
 *
 * @param array $block The original block.
 * @return array Modified block array with backwards compatibility attributes.
 */
function acf_add_back_compat_attributes($block)
{
}
/**
 * Get back compat new values and old values.
 *
 * @since 6.0.0
 *
 * @return array back compat key array.
 */
function acf_get_block_back_compat_attribute_key_array()
{
}
/**
 * The render callback for all ACF blocks.
 *
 * @date    28/10/20
 * @since   5.9.2
 *
 * @param   array    $attributes The block attributes.
 * @param   string   $content    The block content.
 * @param   WP_Block $wp_block   The block instance (since WP 5.5).
 * @return  string The block HTML.
 */
function acf_render_block_callback($attributes, $content = '', $wp_block = \null)
{
}
/**
 * Returns the rendered block HTML.
 *
 * @date    28/2/19
 * @since   5.7.13
 *
 * @param   array    $attributes The block attributes.
 * @param   string   $content    The block content.
 * @param   boolean  $is_preview Whether or not the block is being rendered for editing preview.
 * @param   integer  $post_id    The current post being edited or viewed.
 * @param   WP_Block $wp_block   The block instance (since WP 5.5).
 * @param   array    $context    The block context array.
 * @return  string   The block HTML.
 */
function acf_rendered_block($attributes, $content = '', $is_preview = \false, $post_id = 0, $wp_block = \null, $context = \false)
{
}
/**
 * Renders the block HTML.
 *
 * @since   5.7.12
 *
 * @param   array    $attributes The block attributes.
 * @param   string   $content    The block content.
 * @param   boolean  $is_preview Whether or not the block is being rendered for editing preview.
 * @param   integer  $post_id    The current post being edited or viewed.
 * @param   WP_Block $wp_block   The block instance (since WP 5.5).
 * @param   array    $context    The block context array.
 * @return  void|string
 */
function acf_render_block($attributes, $content = '', $is_preview = \false, $post_id = 0, $wp_block = \null, $context = \false)
{
}
/**
 * Locate and include an ACF block's template.
 *
 * @since   6.0.4
 *
 * @param   array $block The block props.
 */
function acf_block_render_template($block, $content, $is_preview, $post_id, $wp_block, $context)
{
}
/**
 * Returns an array of all fields for the given block.
 *
 * @date    24/10/18
 * @since   5.8.0
 *
 * @param   array $block The block props.
 * @return  array
 */
function acf_get_block_fields($block)
{
}
/**
 * Enqueues and localizes block scripts and styles.
 *
 * @since   5.7.13
 *
 * @return  void
 */
function acf_enqueue_block_assets()
{
}
/**
 * Enqueues scripts and styles for a specific block type.
 *
 * @since   5.7.13
 *
 * @param   array $block_type The block type settings.
 * @return  void
 */
function acf_enqueue_block_type_assets($block_type)
{
}
/**
 * Handles the ajax request for block data.
 *
 * @since   5.7.13
 *
 * @return  void
 * @phpstan-return never
 */
function acf_ajax_fetch_block()
{
}
/**
 * Render the empty block form for when a block has no fields assigned.
 *
 * @since   6.0.0
 *
 * @param   string $block_name The block name current being rendered.
 * @return  string The html that makes up a block form with no fields.
 */
function acf_get_empty_block_form_html($block_name)
{
}
/**
 * Parse content that may contain HTML block comments and saves ACF block meta.
 *
 * @since   5.7.13
 *
 * @param   string $text Content that may contain HTML block comments.
 * @return  string
 */
function acf_parse_save_blocks($text = '')
{
}
/**
 * Callback used in preg_replace to modify ACF Block comment.
 *
 * @since   5.7.13
 *
 * @param   array $matches The preg matches.
 * @return  string
 */
function acf_parse_save_blocks_callback($matches)
{
}
/**
 * Return or generate a block ID.
 *
 * @since 6.0.0
 *
 * @param array $attributes A block attributes array.
 * @param array $context    The block context array, defaults to an empty array.
 * @return string A block ID.
 */
function acf_get_block_id($attributes, $context = array())
{
}
/**
 * Ensure a block ID always has a block_ prefix for post meta internals.
 *
 * @since 6.0.0
 *
 * @param string $block_id A possibly non-prefixed block ID.
 * @return string A prefixed block ID.
 */
function acf_ensure_block_id_prefix($block_id)
{
}
/**
 * This directly copied from the WordPress core `serialize_block_attributes()` function.
 *
 * We need this in order to make sure that block attributes are stored in a way that is
 * consistent with how Gutenberg sends them over from JS, and so that things like wp_kses()
 * work as expected. Copied from core to get around a bug that was fixed in 5.8.1 or on the off chance
 * that folks are still using WP 5.3 or below.
 *
 * TODO: Remove this when we refactor `acf_parse_save_blocks_callback()` to use `serialize_block()`,
 * or when we're confident that folks aren't using WP versions prior to 5.8.
 *
 * @since 5.12
 *
 * @param array $block_attributes Attributes object.
 * @return string Serialized attributes.
 */
function acf_serialize_block_attributes($block_attributes)
{
}
/**
 * Set ACF data before a rest call if media scripts have not been enqueued yet for after REST reset.
 *
 * @date    07/06/22
 * @since   6.0
 *
 * @param   WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $response The WordPress response object.
 * @return  mixed
 */
function acf_set_after_rest_media_enqueue_reset_flag($response)
{
}
/**
 * Reset wp_enqueue_media action count after REST call so it can happen inside the main execution if required.
 *
 * @date    07/06/22
 * @since   6.0
 *
 * @param   WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $response The WordPress response object.
 * @return  mixed
 */
function acf_reset_media_enqueue_after_rest($response)
{
}
/**
 * The main function responsible for returning the acf_updates singleton.
 * Use this function like you would a global variable, except without needing to declare the global.
 *
 * Example: <?php $acf_updates = acf_updates(); ?>
 *
 * @since   5.5.12
 *
 * @return ACF_Updates The singleton instance of ACF_Updates.
 */
function acf_updates()
{
}
/**
 * Alias of acf_updates()->add_plugin().
 *
 * @since   5.5.10
 *
 * @param   array $plugin Plugin data array.
 */
function acf_register_plugin_update($plugin)
{
}
/**
 * acf_options_page
 *
 * This function will return the options page instance
 *
 * @type    function
 * @date    9/6/17
 * @since   5.6.0
 *
 * @param   void
 * @return  object
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
 * Check if a license is defined in wp-config.php and requires activation.
 * Also checks if the license key has been changed and reactivates.
 *
 * @since 5.11.0
 */
function acf_pro_check_defined_license()
{
}
/**
 * Get translated upstream message
 *
 * @since   6.2.3
 * @param   string $text server side message string.
 *
 * @return  string a translated (or original, if unavailable), message string.
 */
function acf_pro_get_translated_connect_message($text)
{
}
/**
 * Set the automatic activation failure transient
 *
 * @since   5.11.0
 *
 * @param   string $error_text  string containing the error text message.
 * @param   string $license_key the license key that was used during the failed activation.
 *
 * @return void
 */
function acf_pro_set_activation_failure_transient($error_text, $license_key)
{
}
/**
 * Get the automatic activation failure transient
 *
 * @since   5.11.0
 *
 * @return array|false Activation failure transient array, or false if it's not set.
 */
function acf_pro_get_activation_failure_transient()
{
}
/**
 * Display the stored activation error
 *
 * @since   5.11.0
 * @phpstan-return void
 */
function acf_pro_display_activation_error($screen)
{
}
/**
 * This function will return the license
 *
 * @since   5.4.0
 *
 * @return array|boolean $license  The ACF PRO license array on success, or false on failure.
 */
function acf_pro_get_license()
{
}
/**
 * An ACF specific getter to replace `home_url` in our license checks to ensure we can avoid third party filters.
 *
 * @since 6.0.1
 *
 * @return string $home_url The output from home_url, sans known third party filters which cause license activation issues.
 */
function acf_get_home_url()
{
}
/**
 * Return the original home url inside ACF's home url getter.
 *
 * @since 6.0.1
 *
 * @param string $home_url the multilingual plugin converted home URL.
 * @param string $url      the original home URL.
 *
 * @return string $url
 */
function acf_license_ml_intercept($home_url, $url)
{
}
/**
 * Is the updates page visible.
 *
 * @since 6.2.4
 *
 * @return boolean true if the updates page should be hidden as we're not the primary multisite site.
 */
function acf_is_updates_page_visible()
{
}
/**
 * Returns the license key.
 *
 * @since 5.4.0
 *
 * @param boolean $skip_url_check Skip the check of the current site url.
 * @return string|boolean License key on success, or false on failure.
 */
function acf_pro_get_license_key($skip_url_check = \false)
{
}
/**
 * This function will update the DB license
 *
 * @since   5.4.0
 *
 * @param   string $key The license key.
 * @return  boolean The result of the update_option call
 */
function acf_pro_update_license($key = '')
{
}
/**
 * Get count of registered ACF Blocks
 *
 * @return integer
 */
function acf_pro_get_registered_block_count()
{
}
/**
 * Activates the submitted license key
 * Formally ACF_Admin_Updates::activate_pro_licence since 5.0.0
 *
 * @since   5.11.0
 *
 * @param   string  $license_key License key to activate.
 * @param   boolean $silent      Return errors rather than displaying them.
 * @param   boolean $automatic   True if this activation is happening automatically.
 * @return  mixed   $response       A wp-error instance, or an array with a boolean success key, and string message key.
 */
function acf_pro_activate_license($license_key, $silent = \false, $automatic = \false)
{
}
/**
 * Deactivates the registered license key.
 * Formally ACF_Admin_Updates::deactivate_pro_licence since 5.0.0
 *
 * @since   5.11.0
 *
 * @param   boolean $silent Return errors rather than displaying them
 * @return  mixed   $response   A wp-error instance, or an array with a boolean success key, and string message key
 */
function acf_pro_deactivate_license($silent = \false)
{
}
/**
 * Adds an admin notice using the provided WP_Error.
 *
 * @since   5.7.10
 *
 * @param   WP_Error $wp_error The error to display.
 * @phpstan-return void
 */
function display_wp_activation_error($wp_error)
{
}
/**
 * Returns the status of the current ACF PRO license.
 *
 * @since 6.2.2
 *
 * @param boolean $force_check If we should force a call to the API.
 * @return array
 */
function acf_pro_get_license_status($force_check = \false)
{
}
/**
 * Makes sure the ACF PRO license status is in a format we expect.
 *
 * @since 6.2.2
 *
 * @param array $status The license status.
 * @return array
 */
function acf_pro_parse_license_status($status = array())
{
}
/**
 * Updates the ACF PRO license status.
 *
 * @since 6.2.2
 *
 * @param array $status The current license status.
 * @return boolean True if the value was set, false otherwise.
 */
function acf_pro_update_license_status($status)
{
}
/**
 * Removes the ACF PRO license status.
 *
 * @since 6.2
 *
 * @return boolean True if the transient was deleted, false otherwise.
 */
function acf_pro_remove_license_status()
{
}
/**
 * Checks if the current license is active.
 *
 * @since 6.2.2
 *
 * @param array $status Optional license status array.
 * @return boolean True if active, false if not.
 */
function acf_pro_is_license_active($status = array())
{
}
/**
 * Checks if the current license is expired.
 *
 * @since 6.2.2
 *
 * @param array $status Optional license status array.
 * @return boolean True if expired, false if not.
 */
function acf_pro_is_license_expired($status = array())
{
}
/**
 * Checks if the current license was refunded.
 *
 * @since 6.2.2
 *
 * @param array $status Optional license status array.
 * @return boolean True if refunded, false if not.
 */
function acf_pro_was_license_refunded($status = array())
{
}
/**
 * Checks if the `home_url` has changed since license activation.
 *
 * @since 6.2.2
 *
 * @param array  $license Optional ACF license array.
 * @param string $url     An optional URL to provide.
 * @return boolean           True if the URL has changed, false otherwise.
 */
function acf_pro_has_license_url_changed($license = array(), $url = '')
{
}
/**
 * Attempts to reactivate the license if the URL has changed.
 *
 * @since 6.2.3
 *
 * @return void
 * @phpstan-return void
 */
function acf_pro_maybe_reactivate_license()
{
}
/**
 * Gets the URL to the "My Account" section for an ACF license.
 *
 * @since 6.2.3
 *
 * @param array $status Optional license status array.
 * @return string
 */
function acf_pro_get_manage_license_url($status = array())
{
}
/**
 * Returns a multisite compatible licensing data value
 * For multisite installs, this is from the main site options if available or the normal option otherwise.
 *
 * @since 6.2.6
 *
 * @param string $option_name   The option name to load.
 * @param mixed  $default_value The default value to return if not set.
 * @return mixed the resulting option value from cache or database.
 */
function acf_pro_get_license_option($option_name, $default_value = \false)
{
}
/**
 * Updates a multisite compatible licensing data value
 * For multisite installs, this is from the main site options if available or the normal option otherwise.
 *
 * @since 6.2.6
 *
 * @param string $option_name The option name to update.
 * @param mixed  $value       The new value to set.
 * @return boolean True if the value was updated, false otherwise.
 */
function acf_pro_update_license_option($option_name, $value = \false)
{
}
/**
 * Deletes a multisite compatible licensing data value
 * For multisite installs, this is from the main site options if available or the normal option otherwise.
 *
 * @since 6.2.6
 *
 * @param string $option_name The option name to load.
 * @return boolean The result of the deletion request.
 */
function acf_pro_delete_license_option($option_name)
{
}
/**
 * Returns a license related transient
 * For multisite installs, this is from the network, otherwise from the normal transient function.
 *
 * @since 6.2.6
 *
 * @param string $transient_name The name of the transient to return.
 * @return mixed the resulting transient value from cache or database.
 */
function acf_pro_get_license_transient($transient_name)
{
}
/**
 * Updates a license related transient
 * For multisite installs, this is from the network, otherwise from the normal transient function.
 *
 * @since 6.2.6
 *
 * @param string $name  The name of the transient to update.
 * @param mixed  $value The new value of the transient.
 * @return mixed The result of the set function.
 */
function acf_pro_set_license_transient($name, $value)
{
}
/**
 * Deletes a license related transient
 * For multisite installs, this is from the network, otherwise from the normal transient function.
 *
 * @since 6.2.6
 *
 * @param string $transient_name The name of the transient to return.
 * @return boolean True if the transient was deleted, false otherwise.
 */
function acf_pro_delete_license_transient($transient_name)
{
}
/**
 * Checks if the current license allows the legacy multisite behavior if we're on a multisite install.
 *
 * @since 6.2.6
 *
 * @param array $status Optional license status array.
 * @return boolean True if legacy multisite, false if not.
 */
function acf_pro_is_legacy_multisite(array $status = array())
{
}