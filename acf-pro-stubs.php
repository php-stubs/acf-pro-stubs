<?php
/**
 * Generated stub declarations for ACF PRO
 * @see https://www.advancedcustomfields.com/
 * @see https://github.com/php-stubs/acf-pro-stubs
 */

class ACF
{
    /** @var string The plugin version number. */
    var $version = '5.12.2';
    /** @var array The plugin settings array. */
    var $settings = array();
    /** @var array The plugin data array. */
    var $data = array();
    /** @var array Storage for class instances. */
    var $instances = array();
    /**
     * __construct
     *
     * A dummy constructor to ensure ACF is only setup once.
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
     * initialize
     *
     * Sets up the ACF plugin.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function initialize()
    {
    }
    /**
     * init
     *
     * Completes the setup process on "init" of earlier.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function init()
    {
    }
    /**
     * register_post_types
     *
     * Registers the ACF post types.
     *
     * @date    22/10/2015
     * @since   5.3.2
     *
     * @param   void
     * @return  void
     */
    function register_post_types()
    {
    }
    /**
     * register_post_status
     *
     * Registers the ACF post statuses.
     *
     * @date    22/10/2015
     * @since   5.3.2
     *
     * @param   void
     * @return  void
     */
    function register_post_status()
    {
    }
    /**
     * Checks if another version of ACF/ACF PRO is active and deactivates it.
     * Hooked on `activated_plugin` so other plugin is deactivated when current plugin is activated.
     *
     * @param string $plugin The plugin being activated.
     */
    public function deactivate_other_instances($plugin)
    {
    }
    /**
     * Displays a notice when either ACF or ACF PRO is automatically deactivated.
     */
    public function plugin_deactivated_notice()
    {
    }
    /**
     * posts_where
     *
     * Filters the $where clause allowing for custom WP_Query args.
     *
     * @date    31/8/19
     * @since   5.8.1
     *
     * @param   string $where The WHERE clause.
     * @return  WP_Query $wp_query The query object.
     */
    function posts_where($where, $wp_query)
    {
    }
    /**
     * define
     *
     * Defines a constant if doesnt already exist.
     *
     * @date    3/5/17
     * @since   5.5.13
     *
     * @param   string $name The constant name.
     * @param   mixed  $value The constant value.
     * @return  void
     */
    function define($name, $value = \true)
    {
    }
    /**
     * has_setting
     *
     * Returns true if a setting exists for this name.
     *
     * @date    2/2/18
     * @since   5.6.5
     *
     * @param   string $name The setting name.
     * @return  boolean
     */
    function has_setting($name)
    {
    }
    /**
     * get_setting
     *
     * Returns a setting or null if doesn't exist.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   string $name The setting name.
     * @return  mixed
     */
    function get_setting($name)
    {
    }
    /**
     * update_setting
     *
     * Updates a setting for the given name and value.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   string $name The setting name.
     * @param   mixed  $value The setting value.
     * @return  true
     */
    function update_setting($name, $value)
    {
    }
    /**
     * get_data
     *
     * Returns data or null if doesn't exist.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   string $name The data name.
     * @return  mixed
     */
    function get_data($name)
    {
    }
    /**
     * set_data
     *
     * Sets data for the given name and value.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   string $name The data name.
     * @param   mixed  $value The data value.
     * @return  void
     */
    function set_data($name, $value)
    {
    }
    /**
     * get_instance
     *
     * Returns an instance or null if doesn't exist.
     *
     * @date    13/2/18
     * @since   5.6.9
     *
     * @param   string $class The instance class name.
     * @return  object
     */
    function get_instance($class)
    {
    }
    /**
     * new_instance
     *
     * Creates and stores an instance of the given class.
     *
     * @date    13/2/18
     * @since   5.6.9
     *
     * @param   string $class The instance class name.
     * @return  object
     */
    function new_instance($class)
    {
    }
    /**
     * Magic __isset method for backwards compatibility.
     *
     * @date    24/4/20
     * @since   5.9.0
     *
     * @param   string $key Key name.
     * @return  bool
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
}
class acf_admin_field_group
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  use_block_editor_for_post_type
     *
     *  Prevents the block editor from loading when editing an ACF field group.
     *
     *  @date    7/12/18
     *  @since   5.8.0
     *
     *  @param   bool   $use_block_editor Whether the post type can be edited or not. Default true.
     *  @param   string $post_type The post type being checked.
     *  @return  bool
     */
    function use_block_editor_for_post_type($use_block_editor, $post_type)
    {
    }
    /**
     *  post_updated_messages
     *
     *  This function will customize the message shown when editing a field group
     *
     *  @type    action (post_updated_messages)
     *  @date    30/04/2014
     *  @since   5.0.0
     *
     *  @param   array $messages
     *  @return  $messages
     */
    function post_updated_messages($messages)
    {
    }
    /**
     *  current_screen
     *
     *  This function is fired when loading the admin page before HTML has been rendered.
     *
     *  @type    action (current_screen)
     *  @date    21/07/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  @type    action (admin_enqueue_scripts)
     *  @date    30/06/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  admin_head
     *
     *  This function will setup all functionality for the field group edit page to work
     *
     *  @type    action (admin_head)
     *  @date    23/06/12
     *  @since   3.1.8
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function admin_head()
    {
    }
    /**
     *  edit_form_after_title
     *
     *  This action will allow ACF to render metaboxes after the title
     *
     *  @type    action
     *  @date    17/08/13
     *
     *  @param   void
     *  @return  void
     */
    function edit_form_after_title()
    {
    }
    /**
     *  form_data
     *
     *  This function will add extra HTML to the acf form data element
     *
     *  @type    function
     *  @date    31/05/2016
     *  @since   5.3.8
     *
     *  @param   void
     *  @return  void
     */
    function form_data($args)
    {
    }
    /**
     *  admin_l10n
     *
     *  This function will append extra l10n strings to the acf JS object
     *
     *  @type    function
     *  @date    31/05/2016
     *  @since   5.3.8
     *
     *  @param   array $l10n
     *  @return  $l10n
     */
    function admin_l10n($l10n)
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type    function
     *  @date    11/01/2016
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function admin_footer()
    {
    }
    /**
     *  screen_settings
     *
     *  description
     *
     *  @type    function
     *  @date    26/01/13
     *  @since   3.6.0
     *
     *  @param   string $current
     *  @return  $current
     */
    function screen_settings($html)
    {
    }
    /**
     *  post_submitbox_misc_actions
     *
     *  This function will customize the publish metabox
     *
     *  @type    function
     *  @date    17/07/2015
     *  @since   5.2.9
     *
     *  @param   void
     *  @return  void
     */
    function post_submitbox_misc_actions()
    {
    }
    /**
     *  save_post
     *
     *  This function will save all the field group data
     *
     *  @type    function
     *  @date    23/06/12
     *  @since   1.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function save_post($post_id, $post)
    {
    }
    /**
     *  mb_fields
     *
     *  This function will render the HTML for the medtabox 'acf-field-group-fields'
     *
     *  @type    function
     *  @date    28/09/13
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function mb_fields()
    {
    }
    /**
     *  mb_options
     *
     *  This function will render the HTML for the medtabox 'acf-field-group-options'
     *
     *  @type    function
     *  @date    28/09/13
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function mb_options()
    {
    }
    /**
     *  mb_locations
     *
     *  This function will render the HTML for the medtabox 'acf-field-group-locations'
     *
     *  @type    function
     *  @date    28/09/13
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function mb_locations()
    {
    }
    /**
     *  ajax_render_location_rule
     *
     *  This function can be accessed via an AJAX action and will return the result from the render_location_value function
     *
     *  @type    function (ajax)
     *  @date    30/09/13
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function ajax_render_location_rule()
    {
    }
    /**
     *  ajax_render_field_settings
     *
     *  This function will return HTML containing the field's settings based on it's new type
     *
     *  @type    function (ajax)
     *  @date    30/09/13
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function ajax_render_field_settings()
    {
    }
    /**
     *  ajax_move_field
     *
     *  description
     *
     *  @type    function
     *  @date    20/01/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_move_field()
    {
    }
}
class ACF_Admin_Field_Groups
{
    /**
     * Array of field groups availbale for sync.
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
     * Returns the Field Groups admin URL.
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
     * Returns the Field Groups admin URL taking into account the current view.
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
     * Redirects users from ACF 4.0 admin page.
     *
     * @date    17/9/18
     * @since   5.7.6
     *
     * @param   void
     * @return  void
     */
    public function handle_redirection()
    {
    }
    /**
     * Constructor for the Field Groups admin page.
     *
     * @date    21/07/2014
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    public function current_screen()
    {
    }
    /**
     * Sets up the field groups ready for sync.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function setup_sync()
    {
    }
    /**
     * Enqueues admin scripts.
     *
     * @date    18/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
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
     * @param   string $classes Space-separated list of CSS classes.
     * @return  string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * returns the disabled post state HTML.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  string
     */
    public function get_disabled_post_state()
    {
    }
    /**
     * Adds the "disabled" post state for the admin table title.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array   $post_states An array of post display states.
     * @param   WP_Post $post The current post object.
     * @return  array
     */
    public function display_post_states($post_states, $post)
    {
    }
    /**
     * Customizes the admin table columns.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $columns The columns array.
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
     * @param   string $column_name The name of the column to display.
     * @param   int    $post_id The current post ID.
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
     * @param   string $column_name The name of the column to display.
     * @param   array  $field_group The field group.
     * @return  void
     */
    public function render_admin_table_column($column_name, $field_group)
    {
    }
    /**
     * Displays a visual representation of the field group's locations.
     *
     * @date    1/4/20
     * @since   5.9.0
     *
     * @param   array $field_group The field group.
     * @return  void
     */
    public function render_admin_table_column_locations($field_group)
    {
    }
    /**
     * Returns a human readable file location.
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
     * Displays the local JSON status of a field group.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   type $var Description. Default.
     * @return  type Description.
     */
    public function render_admin_table_column_local_status($field_group)
    {
    }
    /**
     * Customizes the page row actions visible on hover.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   array   $actions The array of actions HTML.
     * @param   WP_Post $post The post.
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
     * Checks for the custom "duplicate" action.
     *
     * @date    15/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    public function check_duplicate()
    {
    }
    /**
     * Checks for the custom "acfsync" action.
     *
     * @date    15/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
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
     * @date    20/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    function admin_footer()
    {
    }
    /**
     * Customizes the admin table HTML when viewing "sync" post_status.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param   array $views The available views.
     * @return  array
     */
    public function admin_footer__sync()
    {
    }
    /**
     * Fires when trashing a field group post.
     *
     * @date    8/01/2014
     * @since   5.0.0
     *
     * @param   int $post_id The post ID.
     * @return  void
     */
    public function trashed_post($post_id)
    {
    }
    /**
     * Fires when untrashing a field group post.
     *
     * @date    8/01/2014
     * @since   5.0.0
     *
     * @param   int $post_id The post ID.
     * @return  void
     */
    public function untrashed_post($post_id)
    {
    }
    /**
     * Fires when deleting a field group post.
     *
     * @date    8/01/2014
     * @since   5.0.0
     *
     * @param   int $post_id The post ID.
     * @return  void
     */
    public function deleted_post($post_id)
    {
    }
}
class ACF_Data
{
    /** @var string Unique identifier. */
    var $cid = '';
    /** @var array Storage for data. */
    var $data = array();
    /** @var array Storage for data aliases. */
    var $aliases = array();
    /** @var bool Enables unique data per site. */
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
     * @param   string|array $name The data name or an array of data.
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
     * @param   string|array $name The data name or an array of data.
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
     * @return  int
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
     * @return  int
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
     * @param   int                           $site_id New blog ID.
     * @param   int prev_blog_id Prev blog ID.
     * @return  void
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
    );
    /**
     *  render
     *
     *  Renders the notice HTML.
     *
     *  @date    27/12/18
     *  @since   5.8.0
     *
     *  @param   void
     *  @return  void
     */
    function render()
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
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  register_tool
     *
     *  This function will store a tool tool class
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   string $class
     *  @return  void
     */
    function register_tool($class)
    {
    }
    /**
     *  get_tool
     *
     *  This function will return a tool tool class
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   string $name
     *  @return  void
     */
    function get_tool($name)
    {
    }
    /**
     *  get_tools
     *
     *  This function will return an array of all tools
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  array
     */
    function get_tools()
    {
    }
    /**
     *  admin_menu
     *
     *  This function will add the ACF menu item to the WP admin
     *
     *  @type    action (admin_menu)
     *  @date    28/09/13
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function admin_menu()
    {
    }
    /**
     *  load
     *
     *  description
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function load()
    {
    }
    /**
     *  include_tools
     *
     *  description
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function include_tools()
    {
    }
    /**
     *  check_submit
     *
     *  description
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function check_submit()
    {
    }
    /**
     *  html
     *
     *  description
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html()
    {
    }
    /**
     *  meta_box_html
     *
     *  description
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function metabox_html($post, $metabox)
    {
    }
}
class ACF_Admin_Upgrade
{
    /**
     *  __construct
     *
     *  Sets up the class functionality.
     *
     *  @date    31/7/18
     *  @since   5.7.2
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  admin_menu
     *
     *  Setus up logic if DB Upgrade is needed on a single site.
     *
     *  @date    24/8/18
     *  @since   5.7.4
     *
     *  @param   void
     *  @return  void
     */
    function admin_menu()
    {
    }
    /**
     * network_admin_menu
     *
     * Sets up admin logic if DB Upgrade is required on a multi site.
     *
     * @date    24/8/18
     * @since   5.7.4
     *
     * @param   void
     * @return  void
     */
    function network_admin_menu()
    {
    }
    /**
     *  admin_load
     *
     *  Runs during the loading of the admin page.
     *
     *  @date    24/8/18
     *  @since   5.7.4
     *
     *  @param   type $var Description. Default.
     *  @return  type Description.
     */
    function admin_load()
    {
    }
    /**
     *  network_admin_load
     *
     *  Runs during the loading of the network admin page.
     *
     *  @date    24/8/18
     *  @since   5.7.4
     *
     *  @param   type $var Description. Default.
     *  @return  type Description.
     */
    function network_admin_load()
    {
    }
    /**
     *  admin_notices
     *
     *  Displays the DB Upgrade prompt.
     *
     *  @date    23/8/18
     *  @since   5.7.3
     *
     *  @param   void
     *  @return  void
     */
    function admin_notices()
    {
    }
    /**
     *  network_admin_notices
     *
     *  Displays the DB Upgrade prompt on a multi site.
     *
     *  @date    23/8/18
     *  @since   5.7.3
     *
     *  @param   void
     *  @return  void
     */
    function network_admin_notices()
    {
    }
    /**
     *  admin_html
     *
     *  Displays the HTML for the admin page.
     *
     *  @date    24/8/18
     *  @since   5.7.4
     *
     *  @param   void
     *  @return  void
     */
    function admin_html()
    {
    }
    /**
     *  network_admin_html
     *
     *  Displays the HTML for the network upgrade admin page.
     *
     *  @date    24/8/18
     *  @since   5.7.4
     *
     *  @param   void
     *  @return  void
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
     * Adds the ACF menu item.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function admin_menu()
    {
    }
    /**
     * Enqueues global admin styling.
     *
     * @date    28/09/13
     * @since   5.0.0
     *
     * @param   void
     * @return  void
     */
    function admin_enqueue_scripts()
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
    function admin_body_class($classes)
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
    function current_screen($screen)
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
     * @param   string $text The admin footer text.
     * @return  string
     */
    function admin_footer_text($text)
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
    // var $icon = '';
    /** @var boolean Redirect form to single */
    // var $redirect = false;
    /**
     *  get_name
     *
     *  This function will return the Tool's name
     *
     *  @date    19/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function get_name()
    {
    }
    /**
     *  get_title
     *
     *  This function will return the Tool's title
     *
     *  @date    19/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function get_title()
    {
    }
    /**
     *  get_url
     *
     *  This function will return the Tool's title
     *
     *  @date    19/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function get_url()
    {
    }
    /**
     *  is_active
     *
     *  This function will return true if the tool is active
     *
     *  @date    19/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  bool
     */
    function is_active()
    {
    }
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type    function
     *  @date    27/6/17
     *  @since   5.6.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  initialize
     *
     *  This function will initialize the admin tool
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  load
     *
     *  This function is called during the admin page load
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function load()
    {
    }
    /**
     *  html
     *
     *  This function will output the metabox HTML
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html()
    {
    }
    /**
     *  submit
     *
     *  This function will run when the tool's form has been submit
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
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
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  submit
     *
     *  This function will run when the tool's form has been submit
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function submit()
    {
    }
    /**
     *  submit_download
     *
     *  description
     *
     *  @date    17/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function submit_download()
    {
    }
    /**
     *  submit_generate
     *
     *  description
     *
     *  @date    17/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function submit_generate()
    {
    }
    /**
     *  load
     *
     *  description
     *
     *  @date    21/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function load()
    {
    }
    /**
     *  html
     *
     *  This function will output the metabox HTML
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html()
    {
    }
    /**
     *  html_field_selection
     *
     *  description
     *
     *  @date    24/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html_field_selection()
    {
    }
    /**
     *  html_panel_selection
     *
     *  description
     *
     *  @date    21/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html_panel_selection()
    {
    }
    /**
     *  html_panel_settings
     *
     *  description
     *
     *  @date    21/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html_panel_settings()
    {
    }
    /**
     *  html_archive
     *
     *  description
     *
     *  @date    20/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html_archive()
    {
    }
    /**
     *  html_single
     *
     *  description
     *
     *  @date    20/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html_single()
    {
    }
    /**
     *  html_generate
     *
     *  description
     *
     *  @date    17/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html_generate()
    {
    }
    /**
     *  get_selected_keys
     *
     *  This function will return an array of field group keys that have been selected
     *
     *  @date    20/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function get_selected_keys()
    {
    }
    /**
     *  get_selected
     *
     *  This function will return the JSON data for given $_POST args
     *
     *  @date    17/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  array
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
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  html
     *
     *  This function will output the metabox HTML
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function html()
    {
    }
    /**
     *  submit
     *
     *  This function will run when the tool's form has been submit
     *
     *  @date    10/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function submit()
    {
    }
}
class ACF_Ajax
{
    /** @var string The AJAX action name. */
    var $action = '';
    /** @var array The $_REQUEST data. */
    var $request;
    /** @var bool Prevents access for non-logged in users. */
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
     * @param   string $key The data key.
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
     */
    function send_error($error)
    {
    }
}
class ACF_Ajax_Check_Screen extends \ACF_Ajax
{
    /** @var string The AJAX action name. */
    var $action = 'acf/ajax/check_screen';
    /** @var bool Prevents access for non-logged in users. */
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
    /** @var string The AJAX action name. */
    var $action = 'acf/ajax/local_json_diff';
    /** @var bool Prevents access for non-logged in users. */
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
class ACF_Ajax_Query extends \ACF_Ajax
{
    /** @var bool Prevents access for non-logged in users. */
    var $public = \true;
    /** @var int The page of results to return. */
    var $page = 1;
    /** @var int The number of results per page. */
    var $per_page = 20;
    /** @var bool Signifies whether or not this AJAX query has more pages to load. */
    var $more = \false;
    /** @var string The searched term. */
    var $search = '';
    /** @var bool Signifies whether the current query is a search. */
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
     * @param   array         $columns An array of column names to be searched.
     * @param   string        $search The search term.
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
    /** @var bool Prevents access for non-logged in users. */
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
     * List of enqueue flags.
     *
     * @since 5.9.0
     * @var bool
     */
    private $enqueue = array();
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
     * @param   string $name The method name.
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
     * Adds the actions needed to print supporting inline scripts.
     *
     * @date    27/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  void
     */
    private function add_actions()
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
     * @param   string $action The action name.
     * @param   string $method The method name.
     * @param   int    $priority See add_action().
     * @param   int    $accepted_args See add_action().
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
     *      @type bool $uploader Whether or not to enqueue uploader scripts.
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
class ACF_Compatibility
{
    /**
     *  __construct
     *
     *  Sets up the class functionality.
     *
     *  @date    30/04/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     * @param   array $field The field array.
     */
    function field_wrapper_attributes($wrapper, $field)
    {
    }
    /**
     *  validate_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.0.0
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_field($field)
    {
    }
    /**
     *  validate_textarea_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.0.0
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_textarea_field($field)
    {
    }
    /**
     *  validate_relationship_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.0.0
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_relationship_field($field)
    {
    }
    /**
     *  validate_image_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.0.0
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_image_field($field)
    {
    }
    /**
     *  validate_wysiwyg_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.0.0
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_wysiwyg_field($field)
    {
    }
    /**
     *  validate_date_picker_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.0.0
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_date_picker_field($field)
    {
    }
    /**
     *  validate_taxonomy_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.2.7
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_taxonomy_field($field)
    {
    }
    /**
     *  validate_date_time_picker_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.2.7
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_date_time_picker_field($field)
    {
    }
    /**
     *  validate_user_field
     *
     *  Adds compatibility with deprecated settings
     *
     *  @date    23/04/2014
     *  @since   5.2.7
     *
     *  @param   array $field The field array.
     *  @return  array $field
     */
    function validate_user_field($field)
    {
    }
    /**
     *  validate_field_group
     *
     *  This function will provide compatibility with ACF4 field groups
     *
     *  @type    function
     *  @date    23/04/2014
     *  @since   5.0.0
     *
     *  @param   array $field_group
     *  @return  $field_group
     */
    function validate_field_group($field_group)
    {
    }
    /**
     *  validate_post_taxonomy_location_rule
     *
     *  description
     *
     *  @date    27/8/18
     *  @since   5.7.4
     *
     *  @param   type $var Description. Default.
     *  @return  type Description.
     */
    function validate_post_taxonomy_location_rule($rule)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.4.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  register_field_type
     *
     *  This function will register a field type instance
     *
     *  @type    function
     *  @date    6/07/2016
     *  @since   5.4.0
     *
     *  @param   string $class
     *  @return  void
     */
    function register_field_type($class)
    {
    }
    /**
     *  get_field_type
     *
     *  This function will return a field type instance
     *
     *  @type    function
     *  @date    6/07/2016
     *  @since   5.4.0
     *
     *  @param   string $name
     *  @return  mixed
     */
    function get_field_type($name)
    {
    }
    /**
     *  is_field_type
     *
     *  This function will return true if a field type exists
     *
     *  @type    function
     *  @date    6/07/2016
     *  @since   5.4.0
     *
     *  @param   string $name
     *  @return  mixed
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
     *  @type    function
     *  @date    29/5/17
     *  @since   5.6.0
     *
     *  @param   array $info
     *  @return  void
     */
    function register_field_type_info($info)
    {
    }
    /**
     *  get_field_types
     *
     *  This function will return an array of all field types
     *
     *  @type    function
     *  @date    6/07/2016
     *  @since   5.4.0
     *
     *  @param   string $name
     *  @return  mixed
     */
    function get_field_types()
    {
    }
}
class acf_field
{
    // vars
    var $name = '', $label = '', $category = 'basic', $defaults = array(), $l10n = array(), $public = \true;
    public $show_in_rest = \true;
    /**
     *  __construct
     *
     *  This function will initialize the field type
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  initialize
     *
     *  This function will initialize the field type
     *
     *  @type    function
     *  @date    27/6/17
     *  @since   5.6.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  add_filter
     *
     *  This function checks if the function is_callable before adding the filter
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   string $tag
     *  @param   string $function_to_add
     *  @param   int $priority
     *  @param   int $accepted_args
     *  @return  void
     */
    function add_filter($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  add_field_filter
     *
     *  This function will add a field type specific filter
     *
     *  @type    function
     *  @date    29/09/2016
     *  @since   5.4.0
     *
     *  @param   string $tag
     *  @param   string $function_to_add
     *  @param   int $priority
     *  @param   int $accepted_args
     *  @return  void
     */
    function add_field_filter($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  add_action
     *
     *  This function checks if the function is_callable before adding the action
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   string $tag
     *  @param   string $function_to_add
     *  @param   int $priority
     *  @param   int $accepted_args
     *  @return  void
     */
    function add_action($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  add_field_action
     *
     *  This function will add a field type specific filter
     *
     *  @type    function
     *  @date    29/09/2016
     *  @since   5.4.0
     *
     *  @param   string $tag
     *  @param   string $function_to_add
     *  @param   int $priority
     *  @param   int $accepted_args
     *  @return  void
     */
    function add_field_action($tag = '', $function_to_add = '', $priority = 10, $accepted_args = 1)
    {
    }
    /**
     *  validate_field
     *
     *  This function will append default settings to a field
     *
     *  @type    filter ("acf/validate_field/type={$this->name}")
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   array $field
     *  @return  array $field
     */
    function validate_field($field)
    {
    }
    /**
     *  admin_l10n
     *
     *  This function will append l10n text translations to an array which is later passed to JS
     *
     *  @type    filter ("acf/input/admin_l10n")
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   array $l10n
     *  @return  array $l10n
     */
    function input_admin_l10n($l10n)
    {
    }
    /**
     * Add additional validation for fields being updated via the REST API.
     *
     * @param bool  $valid
     * @param mixed $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     *    [
     *        [
     *            'rel' => 'acf:post',
     *            'href' => 'https://example.com/wp-json/wp/v2/posts/497',
     *            'embeddable' => true,
     *        ],
     *        [
     *            'rel' => 'acf:user',
     *            'href' => 'https://example.com/wp-json/wp/v2/users/2',
     *            'embeddable' => true,
     *        ],
     *    ]
     *
     * @param mixed      $value The raw (unformatted) field value.
     * @param string|int $post_id
     * @param array      $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
}
class acf_field__accordion extends \acf_field
{
    public $show_in_rest = \false;
    /**
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @date    30/10/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field
     *
     *  Create the HTML interface for your field
     *
     *  @date    30/10/17
     *  @since   5.6.3
     *
     *  @param   array $field
     *  @return  void
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
     *  @param   $field  - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the field array holding all the field options
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
     *  @date    18/9/17
     *  @since   5.6.3
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Creates the field's input HTML
     *
     *  @date    18/9/17
     *  @since   5.6.3
     *
     *  @param   array $field The field settings array
     *  @return  void
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_settings()
     *
     *  Creates the field's settings HTML
     *
     *  @date    18/9/17
     *  @since   5.6.3
     *
     *  @param   array $field The field settings array
     *  @return  void
     */
    function render_field_settings($field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @date    18/9/17
     *  @since   5.6.3
     *
     *  @param   array $field The field array holding all the field options
     *  @return  $field
     */
    function update_field($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is appied to the $value after it is loaded from the db
     *
     *  @date    18/9/17
     *  @since   5.6.3
     *
     *  @param   mixed   $value      The value found in the database
     *  @param   mixed   $post_id    The post ID from which the value was loaded from
     *  @param   array   $field      The field array holding all the field options
     *  @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @date    18/9/17
     *  @since   5.6.3
     *
     *  @param   array $field The field array holding all the field options
     *  @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @date    18/9/17
     *  @since   5.6.3
     *
     *  @param   mixed   $value      The value found in the database
     *  @param   mixed   $post_id    The post ID from which the value was loaded from
     *  @param   array   $field      The field array holding all the field options
     *  @return  $value
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
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   array $field the $field being rendered
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   array $field the $field being edited
     *  @return  void
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_choices
     *
     *  description
     *
     *  @type    function
     *  @date    15/7/17
     *  @since   5.6.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function render_field_choices($field)
    {
    }
    /**
     *  render_field_toggle
     *
     *  description
     *
     *  @type    function
     *  @date    15/7/17
     *  @since   5.6.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function render_field_toggle($field)
    {
    }
    /**
     *  render_field_custom
     *
     *  description
     *
     *  @type    function
     *  @date    15/7/17
     *  @since   5.6.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the field group ID (post_type = acf)
     *
     *  @return  $field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type    function
     *  @date    8/03/2016
     *  @since   5.3.2
     *
     *  @param   array $field
     *  @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
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
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Format the value for use in templates. At this stage, the value has been loaded from the
     * database and is being returned by an API function such as get_field(), the_field(), etc.
     *
     * @since       5.10
     * @date        15/12/20
     *
     * @param mixed $value
     * @param int   $post_id
     * @param array $field
     *
     * @return string|array
     */
    public function format_value($value, $post_id, $field)
    {
    }
    /**
     * Convert either a Hexadecimal or RGBA string to an RGBA array.
     *
     * @since        5.10
     * @date         15/12/20
     *
     * @param string $value
     * @return array
     */
    private function string_to_array($value)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  This filter is applied to the $field after it is loaded from the database
     *  and ensures the return and display values are set.
     *
     *  @type    filter
     *  @since   5.11.0
     *  @date    28/09/21
     *
     *  @param array $field The field array holding all the field options.
     *
     *  @return array
     */
    function load_field($field)
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
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  This filter is applied to the $field after it is loaded from the database
     *  and ensures the return and display values are set.
     *
     *  @type    filter
     *  @since   5.11.0
     *  @date    28/09/21
     *
     *  @param array $field The field array holding all the field options.
     *
     *  @return array
     */
    function load_field($field)
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
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * Validate the email value. If this method returns TRUE, the input value is valid. If
     * FALSE or a string is returned, the input value is invalid and the user is shown a
     * notice. If a string is returned, the string is show as the message text.
     *
     * @param bool   $valid Whether the value is valid.
     * @param mixed  $value The field value.
     * @param array  $field The field array.
     * @param string $input The request variable name for the inbound field.
     *
     * @return bool|string
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
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  get_media_item_args
     *
     *  description
     *
     *  @type    function
     *  @date    27/01/13
     *  @since   3.6.0
     *
     *  @param   array $vars
     *  @return  $vars
     */
    function get_media_item_args($vars)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  This function will validate a basic file input
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Validates file fields updated via the REST API.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
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
     * @param   mixed $value The value loaded from the database.
     * @param   mixed $post_id The post ID where the value is saved.
     * @param   array $field The field settings array.
     * @return  array|false
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
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
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value found in the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *  @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the $post_id of which the value will be saved
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  prepare_field_for_db
     *
     *  This function will modify sub fields ready for update / load
     *
     *  @type    function
     *  @date    4/11/16
     *  @since   5.5.0
     *
     *  @param   array $field
     *  @return  $field
     */
    function prepare_field_for_db($field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_block
     *
     *  description
     *
     *  @type    function
     *  @date    12/07/2016
     *  @since   5.4.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function render_field_block($field)
    {
    }
    /**
     *  render_field_table
     *
     *  description
     *
     *  @type    function
     *  @date    12/07/2016
     *  @since   5.4.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  duplicate_field()
     *
     *  This filter is appied to the $field before it is duplicated and saved to the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the modified field
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
     *  delete_value
     *
     *  Called when deleting this field's value.
     *
     *  @date    1/07/2015
     *  @since   5.2.3
     *
     *  @param   mixed $post_id The post ID being saved
     *  @param   string $meta_key The field name as seen by the DB
     *  @param   array $field The field settings
     *  @return  void
     */
    function delete_value($post_id, $meta_key, $field)
    {
    }
    /**
     *  delete_field
     *
     *  Called when deleting a field of this type.
     *
     *  @date    8/11/18
     *  @since   5.8.0
     *
     *  @param   arra $field The field settings.
     *  @return  void
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
     * @param mixed      $value
     * @param int|string $post_id
     * @param array      $field
     * @return array|mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  get_media_item_args
     *
     *  description
     *
     *  @type    function
     *  @date    27/01/13
     *  @since   3.6.0
     *
     *  @param   array $vars
     *  @return  $vars
     */
    function get_media_item_args($vars)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  This function will validate a basic file input
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * Additional validation for the image field when submitted via REST.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  get_link
     *
     *  description
     *
     *  @type    function
     *  @date    16/5/17
     *  @since   5.5.13
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function get_link($value = '')
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
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
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @param   $field  - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type    function
     *  @date    8/03/2016
     *  @since   5.3.2
     *
     *  @param   array $field
     *  @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the field array holding all the field options
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the $post_id of which the value will be saved
     *
     *  @return  $value - the modified value
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
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  prepare_field
     *
     *  This function will prepare the field for input
     *
     *  @type    function
     *  @date    14/2/17
     *  @since   5.5.8
     *
     *  @param   array $field
     *  @return  int
     */
    function prepare_field($field)
    {
    }
    /**
     *  wp_oembed_get
     *
     *  description
     *
     *  @type    function
     *  @date    24/01/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function wp_oembed_get($url = '', $width = 0, $height = 0)
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type    function
     *  @date    24/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type    function
     *  @date    15/10/2014
     *  @since   5.0.9
     *
     *  @param   array $options
     *  @return  array
     */
    function get_ajax_query($args = array())
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @param   $field  - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
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
class acf_field_output extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   array $field the $field being rendered
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   array $field the $field being edited
     *  @return  void
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type    function
     *  @date    24/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_post_result
     *
     *  This function will return an array containing id, text and maybe description data
     *
     *  @type    function
     *  @date    7/07/2016
     *  @since   5.4.0
     *
     *  @param   mixed $id
     *  @param   string $text
     *  @return  array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     *  get_post_title
     *
     *  This function returns the HTML for a result
     *
     *  @type    function
     *  @date    1/11/2013
     *  @since   5.0.0
     *
     *  @param   object $post
     *  @param   array $field
     *  @param   int $post_id the post_id to which this value is saved to
     *  @return  string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     *  get_posts
     *
     *  This function will return an array of posts for a given field value
     *
     *  @type    function
     *  @date    13/06/2014
     *  @since   5.0.0
     *
     *  @param   array $value
     *  @return  $value
     */
    function get_posts($value, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Validates page link fields updated via the REST API.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value The raw (unformatted) field value.
     * @param int|string $post_id
     * @param array      $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type    function
     *  @date    24/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type    function
     *  @date    15/10/2014
     *  @since   5.0.9
     *
     *  @param   array $options
     *  @return  array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     *  get_post_result
     *
     *  This function will return an array containing id, text and maybe description data
     *
     *  @type    function
     *  @date    7/07/2016
     *  @since   5.4.0
     *
     *  @param   mixed $id
     *  @param   string $text
     *  @return  array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     *  get_post_title
     *
     *  This function returns the HTML for a result
     *
     *  @type    function
     *  @date    1/11/2013
     *  @since   5.0.0
     *
     *  @param   object $post
     *  @param   array $field
     *  @param   int $post_id the post_id to which this value is saved to
     *  @return  string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value found in the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *  @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  get_posts
     *
     *  This function will return an array of posts for a given field value
     *
     *  @type    function
     *  @date    13/06/2014
     *  @since   5.0.0
     *
     *  @param   array $value
     *  @return  $value
     */
    function get_posts($value, $field)
    {
    }
    /**
     * Validates post object fields updated via the REST API.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value The raw (unformatted) field value.
     * @param int|string $post_id
     * @param array      $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   array $field the $field being rendered
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   array $field the $field being edited
     *  @return  void
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the field group ID (post_type = acf)
     *
     *  @return  $field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *  @todo    Fix bug where $field was found via json and has no ID
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is appied to the $value after it is loaded from the db
     *
     *  @type    filter
     *  @since   5.2.9
     *  @date    23/01/13
     *
     *  @param   $value - the value found in the database
     *  @param   $post_id - the $post_id from which the value was loaded from
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the value to be saved in te database
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type    function
     *  @date    8/03/2016
     *  @since   5.3.2
     *
     *  @param   array $field
     *  @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
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
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
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
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type    function
     *  @date    24/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type    function
     *  @date    15/10/2014
     *  @since   5.0.9
     *
     *  @param   array $options
     *  @return  array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     *  get_post_result
     *
     *  This function will return an array containing id, text and maybe description data
     *
     *  @type    function
     *  @date    7/07/2016
     *  @since   5.4.0
     *
     *  @param   mixed $id
     *  @param   string $text
     *  @return  array
     */
    function get_post_result($id, $text)
    {
    }
    /**
     *  get_post_title
     *
     *  This function returns the HTML for a result
     *
     *  @type    function
     *  @date    1/11/2013
     *  @since   5.0.0
     *
     *  @param   object $post
     *  @param   array $field
     *  @param   int $post_id the post_id to which this value is saved to
     *  @return  string
     */
    function get_post_title($post, $field, $post_id = 0, $is_search = 0)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is applied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is applied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Validates relationship fields updated via the REST API.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value The raw (unformatted) field value.
     * @param int|string $post_id
     * @param array      $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type    function
     *  @date    24/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type    function
     *  @date    15/10/2014
     *  @since   5.0.9
     *
     *  @param   array $options
     *  @return  array
     */
    function get_ajax_query($options = array())
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value found in the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *  @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the field group ID (post_type = acf)
     *
     *  @return  $field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type    function
     *  @date    8/03/2016
     *  @since   5.3.2
     *
     *  @param   array $field
     *  @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
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
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
}
class acf_field_separator extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
}
class acf_field_tab extends \acf_field
{
    public $show_in_rest = \false;
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @param   $field  - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the field array holding all the field options
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type    function
     *  @date    24/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  get_ajax_query
     *
     *  This function will return an array of data formatted for use in a select2 AJAX response
     *
     *  @type    function
     *  @date    15/10/2014
     *  @since   5.0.9
     *
     *  @param   array $options
     *  @return  array
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
     * @param   WP_Term $term The term object.
     * @param   array   $field The field settings.
     * @param   mixed   $post_id The post_id being edited.
     * @return  string
     */
    function get_term_title($term, $field, $post_id = 0)
    {
    }
    /**
     *  get_terms
     *
     *  This function will return an array of terms for a given field value
     *
     *  @type    function
     *  @date    13/06/2014
     *  @since   5.0.0
     *
     *  @param   array $value
     *  @return  $value
     */
    function get_terms($value, $taxonomy = 'category')
    {
    }
    /**
     *  load_value()
     *
     *  This filter is appied to the $value after it is loaded from the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value found in the database
     *  @param   $post_id - the $post_id from which the value was loaded from
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the value to be saved in te database
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the $post_id of which the value will be saved
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * This function will save any terms in the save_post_terms array
     *
     * @date    26/11/2014
     * @since   5.0.9
     *
     * @param int $post_id
     *
     * @return void
     */
    function save_post($post_id)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - an array holding all the field's data
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_select()
     *
     *  Create the HTML interface for your field
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - an array holding all the field's data
     */
    function render_field_select($field)
    {
    }
    /**
     *  render_field_checkbox()
     *
     *  Create the HTML interface for your field
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - an array holding all the field's data
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  ajax_add_term
     *
     *  description
     *
     *  @type    function
     *  @date    17/04/2015
     *  @since   5.2.3
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     * @param mixed      $value The raw (unformatted) field value.
     * @param int|string $post_id
     * @param array      $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @param   $field  - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field_settings($field)
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
     *  initialize
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @param   $field  - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is applied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
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
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  This filter is applied to the $field after it is loaded from the database
     *  and ensures the return and display values are set.
     *
     *  @type    filter
     *  @since   5.11.0
     *  @date    28/09/21
     *
     *  @param array $field The field array holding all the field options.
     *
     *  @return array
     */
    function load_field($field)
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
class acf_field_true_false extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type    function
     *  @date    8/03/2016
     *  @since   5.3.2
     *
     *  @param   array $field
     *  @return  $field
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
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
class ACF_Field_User extends \ACF_Field
{
    /**
     * Initializes the field type.
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
     * @param   WP_User      $user The WP_User object.
     * @param   array        $field The ACF field related to this query.
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
     * @param   mixed $value The field value.
     * @param   mixed $post_id The post ID where the value is saved.
     * @param   array $field The field array containing all settings.
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
     * @param   mixed $value The field value.
     * @param   mixed $post_id The post ID where the value is saved.
     * @param   array $field The field array containing all settings.
     * @return  mixed
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * Filters the field value before it is saved into the database.
     *
     * @date    23/01/13
     * @since   3.6.0
     *
     * @param   mixed $value The field value.
     * @param   mixed $post_id The post ID where the value is saved.
     * @param   array $field The field array containing all settings.
     * @return  mixed
     */
    function update_value($value, $post_id, $field)
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
     * @param   ACF_Ajax_Query $query The query object.
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
     * @param   array          $args The query args.
     * @param   array          $request The query request.
     * @param   ACF_Ajax_Query $query The query object.
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
     * @param   array         $columns An array of column names to be searched.
     * @param   string        $search The search term.
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
     * @param   array          $item The choice id and text.
     * @param   WP_User        $user The user object.
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
     * @param   array         $columns An array of column names to be searched.
     * @param   string        $search The search term.
     * @param   WP_User_Query $WP_User_Query The WP_User_Query instance.
     * @return  array
     */
    function user_search_columns($columns, $search, $WP_User_Query)
    {
    }
    /**
     * Validates user fields updated via the REST API.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value The raw (unformatted) field value.
     * @param int|string $post_id
     * @param array      $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  add_filters
     *
     *  This function will add filters to 'acf_the_content'
     *
     *  @type    function
     *  @date    20/09/2016
     *  @since   5.4.0
     *
     *  @param   void
     *  @return  void
     */
    function add_filters()
    {
    }
    /**
     *  get_toolbars
     *
     *  This function will return an array of toolbars for the WYSIWYG field
     *
     *  @type    function
     *  @date    18/04/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  array
     */
    function get_toolbars()
    {
    }
    /**
     *  acf_enqueue_uploader
     *
     *  Registers toolbars data for the WYSIWYG field.
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   void
     *  @return  void
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
     *  render_field_settings()
     *
     *  Create extra options for your field. This is rendered when editing a field.
     *  The value of $field['name'] can be used (like bellow) to save extra data to the $field
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     * This filter is applied to the $value after it is loaded from the db, and before it is returned to the template
     *
     * @type    filter
     * @since   3.6
     * @date    23/01/13
     *
     * @param mixed $value   The value which was loaded from the database
     * @param mixed $post_id The $post_id from which the value was loaded
     * @param array $field   The field array holding all the field options
     *
     * @return mixed $value The modified value
     */
    function format_value($value, $post_id, $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  @type    action (admin_enqueue_scripts)
     *  @date    26/01/13
     *  @since   3.6.0
     *
     *  @param   void
     *  @return  void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  admin_footer
     *
     *  This function will add acf_form_data to the WP 4.0 attachment grid
     *
     *  @type    action (admin_footer)
     *  @date    11/09/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function admin_footer()
    {
    }
    /**
     *  edit_attachment
     *
     *  description
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function edit_attachment($form_fields, $post)
    {
    }
    /**
     *  save_attachment
     *
     *  description
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  validate_page
     *
     *  This function will check if the current page is for a post/page edit form
     *
     *  @type    function
     *  @date    23/06/12
     *  @since   3.1.8
     *
     *  @param   void
     *  @return  boolean
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
     *  @type    action (admin_enqueue_scripts)
     *  @date    26/01/13
     *  @since   3.6.0
     *
     *  @param   void
     *  @return  void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  edit_comment
     *
     *  This function is run on the admin comment.php page and will render the ACF fields within custom metaboxes to look native
     *
     *  @type    function
     *  @date    19/10/13
     *  @since   5.0.0
     *
     *  @param   object $comment
     *  @return  void
     */
    function edit_comment($comment)
    {
    }
    /**
     *  comment_form_field_comment
     *
     *  description
     *
     *  @type    function
     *  @date    18/04/2016
     *  @since   5.3.8
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function comment_form_field_comment($html)
    {
    }
    /**
     *  save_comment
     *
     *  This function will save the comment data
     *
     *  @type    function
     *  @date    19/10/13
     *  @since   5.0.0
     *
     *  @param   comment_id (int)
     *  @return  void
     */
    function save_comment($comment_id)
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type    function
     *  @date    27/03/2015
     *  @since   5.1.5
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  @type    action (admin_enqueue_scripts)
     *  @date    26/01/13
     *  @since   3.6.0
     *
     *  @param   void
     *  @return  void
     */
    function customize_controls_init()
    {
    }
    /**
     *  save_widget
     *
     *  This function will hook into the widget update filter and save ACF data
     *
     *  @type    function
     *  @date    27/05/2015
     *  @since   5.2.3
     *
     *  @param   array $instance widget settings
     *  @param   array $new_instance widget settings
     *  @param   array $old_instance widget settings
     *  @param   object $widget widget info
     *  @return  $instance
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
     *  @type    function
     *  @date    22/03/2016
     *  @since   5.3.2
     *
     *  @param   object $customizer
     *  @return  mixed $value
     */
    function settings($customizer)
    {
    }
    /**
     *  customize_preview_init
     *
     *  This function is called when customizer preview is initialized
     *
     *  @type    function
     *  @date    22/03/2016
     *  @since   5.3.2
     *
     *  @param   object $customizer
     *  @return  void
     */
    function customize_preview_init($customizer)
    {
    }
    /**
     *  pre_load_value
     *
     *  Used to inject preview value
     *
     *  @date    2/2/18
     *  @since   5.6.5
     *
     *  @param   type $var Description. Default.
     *  @return  type Description.
     */
    function pre_load_value($value, $post_id, $field)
    {
    }
    /**
     *  pre_load_reference
     *
     *  Used to inject preview value
     *
     *  @date    2/2/18
     *  @since   5.6.5
     *
     *  @param   type $var Description. Default.
     *  @return  type Description.
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
     *  @type    function
     *  @date    22/03/2016
     *  @since   5.3.2
     *
     *  @param   object $customizer
     *  @return  void
     */
    function customize_save($customizer)
    {
    }
    /**
     *  pre_update_option
     *
     *  this function will remove the [acf] data from widget insance
     *
     *  @type    function
     *  @date    22/03/2016
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function pre_update_option($value, $option, $old_value)
    {
    }
    /**
     *  admin_footer
     *
     *  This function will add some custom HTML to the footer of the edit page
     *
     *  @type    function
     *  @date    11/06/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  validate_form
     *
     *  description
     *
     *  @type    function
     *  @date    28/2/17
     *  @since   5.5.8
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_form($args)
    {
    }
    /**
     *  add_form
     *
     *  description
     *
     *  @type    function
     *  @date    28/2/17
     *  @since   5.5.8
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function add_form($args = array())
    {
    }
    /**
     *  get_form
     *
     *  description
     *
     *  @type    function
     *  @date    28/2/17
     *  @since   5.5.8
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function get_form($id = '')
    {
    }
    /**
     *  validate_save_post
     *
     *  This function will validate fields from the above array
     *
     *  @type    function
     *  @date    7/09/2016
     *  @since   5.4.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_save_post()
    {
    }
    /**
     *  pre_save_post
     *
     *  description
     *
     *  @type    function
     *  @date    7/09/2016
     *  @since   5.4.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function pre_save_post($post_id, $form)
    {
    }
    /**
     *  enqueue
     *
     *  This function will enqueue a form
     *
     *  @type    function
     *  @date    7/09/2016
     *  @since   5.4.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function enqueue_form()
    {
    }
    /**
     *  check_submit_form
     *
     *  This function will maybe submit form data
     *
     *  @type    function
     *  @date    3/3/17
     *  @since   5.5.10
     *
     *  @param   void
     *  @return  void
     */
    function check_submit_form()
    {
    }
    /**
     *  submit_form
     *
     *  This function will submit form data
     *
     *  @type    function
     *  @date    3/3/17
     *  @since   5.5.10
     *
     *  @param   void
     *  @return  void
     */
    function submit_form($form)
    {
    }
    /**
     *  render
     *
     *  description
     *
     *  @type    function
     *  @date    7/09/2016
     *  @since   5.4.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @date    13/12/18
     *  @since   5.8.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  enqueue_block_editor_assets
     *
     *  Allows a safe way to customize Guten-only functionality.
     *
     *  @date    14/12/18
     *  @since   5.8.0
     *
     *  @param   void
     *  @return  void
     */
    function enqueue_block_editor_assets()
    {
    }
    /**
     *  add_meta_boxes
     *
     *  Modify screen for Gutenberg.
     *
     *  @date    13/12/18
     *  @since   5.8.0
     *
     *  @param   void
     *  @return  void
     */
    function add_meta_boxes()
    {
    }
    /**
     *  block_editor_meta_box_hidden_fields
     *
     *  Modify screen for Gutenberg.
     *
     *  @date    13/12/18
     *  @since   5.8.0
     *
     *  @param   void
     *  @return  void
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
     *  acf_validate_save_post
     *
     *  Ignore errors during the Gutenberg "save metaboxes" AJAX request.
     *  Allows data to save and prevent UX issues.
     *
     *  @date    16/12/18
     *  @since   5.8.0
     *
     *  @param   void
     *  @return  void
     */
    function acf_validate_save_post()
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  @type    action (admin_enqueue_scripts)
     *  @date    26/01/13
     *  @since   3.6.0
     *
     *  @param   void
     *  @return  void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  wp_nav_menu_item_custom_fields
     *
     *  description
     *
     *  @date    30/7/18
     *  @since   5.6.9
     *
     *  @param   type $var Description. Default.
     *  @return  type Description.
     */
    function wp_nav_menu_item_custom_fields($item_id, $item, $depth, $args, $id = '')
    {
    }
    /**
     *  update_nav_menu
     *
     *  description
     *
     *  @type    function
     *  @date    26/5/17
     *  @since   5.6.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function update_nav_menu($menu_id)
    {
    }
    /**
     *  update_nav_menu_items
     *
     *  description
     *
     *  @type    function
     *  @date    26/5/17
     *  @since   5.6.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @date    23/2/18
     *  @since   5.6.9
     *
     *  @param   type $var Description. Default.
     *  @return  type Description.
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
     * @param   string $class The walker class to use. Default 'Walker_Nav_Menu_Edit'.
     * @param   int    $menu_id ID of the menu being rendered.
     * @return  string
     */
    function wp_edit_nav_menu_walker($class, $menu_id = 0)
    {
    }
    /**
     *  acf_validate_save_post
     *
     *  This function will loop over $_POST data and validate
     *
     *  @type    action 'acf/validate_save_post' 5
     *  @date    7/09/2016
     *  @since   5.4.0
     *
     *  @param   void
     *  @return  void
     */
    function acf_validate_save_post()
    {
    }
    /**
     *  admin_footer
     *
     *  This function will add some custom HTML to the footer of the edit page
     *
     *  @type    function
     *  @date    11/06/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  __construct
     *
     *  Sets up the class functionality.
     *
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  initialize
     *
     *  Sets up Form functionality.
     *
     *  @date    19/9/18
     *  @since   5.7.6
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  add_meta_boxes
     *
     *  Adds ACF metaboxes for the given $post_type and $post.
     *
     *  @date    19/9/18
     *  @since   5.7.6
     *
     *  @param   string  $post_type The post type.
     *  @param   WP_Post $post The post being edited.
     *  @return  void
     */
    function add_meta_boxes($post_type, $post)
    {
    }
    /**
     *  edit_form_after_title
     *
     *  Called after the title adn before the content editor.
     *
     *  @date    19/9/18
     *  @since   5.7.6
     *
     *  @param   void
     *  @return  void
     */
    function edit_form_after_title()
    {
    }
    /**
     *  render_meta_box
     *
     *  Renders the ACF metabox HTML.
     *
     *  @date    19/9/18
     *  @since   5.7.6
     *
     *  @param   WP_Post                               $post The post being edited.
     *  @param   array metabox The add_meta_box() args.
     *  @return  void
     */
    function render_meta_box($post, $metabox)
    {
    }
    /**
     *  wp_insert_post_empty_content
     *
     *  Allows WP to insert a new post without title or post_content if ACF data exists.
     *
     *  @date    16/07/2014
     *  @since   5.0.1
     *
     *  @param   bool  $maybe_empty Whether the post should be considered "empty".
     *  @param   array $postarr Array of post data.
     *  @return  bool
     */
    function wp_insert_post_empty_content($maybe_empty, $postarr)
    {
    }
    /**
     *  allow_save_post
     *
     *  Checks if the $post is allowed to be saved.
     *  Used to avoid triggering "acf/save_post" on dynamically created posts during save.
     *
     *  @type    function
     *  @date    26/06/2016
     *  @since   5.3.8
     *
     *  @param   WP_Post $post The post to check.
     *  @return  bool
     */
    function allow_save_post($post)
    {
    }
    /**
     *  save_post
     *
     *  Triggers during the 'save_post' action to save the $_POST data.
     *
     *  @type    function
     *  @date    23/06/12
     *  @since   1.0.0
     *
     *  @param   int $post_id The post ID
     *  @param   WP_POST $post the post object.
     *  @return  int
     */
    function save_post($post_id, $post)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  validate_page
     *
     *  This function will check if the current page is for a post/page edit form
     *
     *  @type    function
     *  @date    23/06/12
     *  @since   3.1.8
     *
     *  @param   void
     *  @return  boolean
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
     *  @type    action (admin_enqueue_scripts)
     *  @date    26/01/13
     *  @since   3.6.0
     *
     *  @param   void
     *  @return  void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  add_term
     *
     *  description
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function add_term($taxonomy)
    {
    }
    /**
     *  edit_term
     *
     *  description
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function edit_term($term, $taxonomy)
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type    function
     *  @date    27/03/2015
     *  @since   5.1.5
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function admin_footer()
    {
    }
    /**
     *  save_term
     *
     *  description
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function save_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     *  delete_term
     *
     *  description
     *
     *  @type    function
     *  @date    15/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  Checks current screen and enqueues scripts
     *
     *  @date    17/4/18
     *  @since   5.6.9
     *
     *  @param   void
     *  @return  void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  login_form_register
     *
     *  Customizes and enqueues scripts
     *
     *  @date    17/4/18
     *  @since   5.6.9
     *
     *  @param   void
     *  @return  void
     */
    function login_form_register()
    {
    }
    /**
     *  register_user
     *
     *  Called during the user register form
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function render_register()
    {
    }
    /**
     *  render_edit
     *
     *  Called during the user edit form
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function render_edit($user)
    {
    }
    /**
     *  user_new_form
     *
     *  description
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function render_new()
    {
    }
    /**
     *  render
     *
     *  This function will render ACF fields for a given $post_id parameter
     *
     *  @type    function
     *  @date    7/10/13
     *  @since   5.0.0
     *
     *  @param   int $user_id this can be set to 0 for a new user
     *  @param   string $user_form used for location rule matching. edit | add | register
     *  @param   string $el
     *  @return  void
     */
    function render($args = array())
    {
    }
    /**
     *  admin_footer
     *
     *  description
     *
     *  @type    function
     *  @date    27/03/2015
     *  @since   5.1.5
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function admin_footer()
    {
    }
    /**
     *  save_user
     *
     *  description
     *
     *  @type    function
     *  @date    8/10/13
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     * @param   WP_Error $errors A WP_Error object containing any errors encountered during registration.
     * @param   string   $sanitized_user_login User's username after it has been sanitized.
     * @param   string   $user_email User's email.
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
     * @param   null         $null A null placeholder.
     * @param   int|string $post_id The post id.
     * @param   array        $field The field array.
     * @return  mixed
     */
    function filter_pre_load_value($null, $post_id, $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  @type    action (admin_enqueue_scripts)
     *  @date    26/01/13
     *  @since   3.6.0
     *
     *  @param   void
     *  @return  void
     */
    function admin_enqueue_scripts()
    {
    }
    /**
     *  acf_validate_save_post
     *
     *  This function will loop over $_POST data and validate
     *
     *  @type    action 'acf/validate_save_post' 5
     *  @date    7/09/2016
     *  @since   5.4.0
     *
     *  @param   void
     *  @return  void
     */
    function acf_validate_save_post()
    {
    }
    /**
     *  edit_widget
     *
     *  This function will render the fields for a widget form
     *
     *  @type    function
     *  @date    11/06/2014
     *  @since   5.0.0
     *
     *  @param   object $widget
     *  @param   null $return
     *  @param   object $instance
     *  @return  int $post_id
     */
    function edit_widget($widget, $return, $instance)
    {
    }
    /**
     *  save_widget
     *
     *  This function will hook into the widget update filter and save ACF data
     *
     *  @type    function
     *  @date    27/05/2015
     *  @since   5.2.3
     *
     *  @param   array $instance widget settings
     *  @param   array $new_instance widget settings
     *  @param   array $old_instance widget settings
     *  @param   object $widget widget info
     *  @return  $instance
     */
    function save_widget($instance, $new_instance, $old_instance, $widget)
    {
    }
    /**
     *  admin_footer
     *
     *  This function will add some custom HTML to the footer of the edit page
     *
     *  @type    function
     *  @date    11/06/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     * @return  bool
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
     * @param   string $name The method name.
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
     * The found JSON field group files.
     *
     * @since 5.9.0
     * @var array
     */
    private $files = array();
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
     * @return  bool.
     */
    public function is_enabled()
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
     * Deletes a field group JSON file.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   array $field_group The field group.
     * @return  void
     */
    public function delete_field_group($field_group)
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
     * Scans for JSON field groups.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  array
     */
    function scan_field_groups()
    {
    }
    /**
     * Returns an array of found JSON field group files.
     *
     * @date    14/4/20
     * @since   5.9.0
     *
     * @param   void
     * @return  array
     */
    public function get_files()
    {
    }
    /**
     * Saves a field group JSON file.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param   string $key The field group key.
     * @param   array  $field_group The field group.
     * @return  bool
     */
    public function save_file($key, $field_group)
    {
    }
    /**
     * Deletes a field group JSON file.
     *
     * @date    17/4/20
     * @since   5.9.0
     *
     * @param   string $key The field group key.
     * @return  bool True on success.
     */
    public function delete_file($key)
    {
    }
    /**
     * Includes all local JSON files.
     *
     * @date    10/03/2014
     * @since   5.0.0
     * @deprecated 5.9.0
     *
     * @param   void
     * @return  void
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
     * @param   array $meta An array of metdata to store.
     * @param   mixed $post_id The post_id for this data.
     * @param   bool  $is_main Makes this postmeta visible to get_field() without a $post_id value.
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
     * @return  bool
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
     * @param   array $values An array of raw values.
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
     * @param   null         $null .
     * @param   int|string $post_id The post id.
     * @param   string       $name The meta name.
     * @param   mixed        $value The meta value.
     * @param   bool         $hidden If the meta is hidden (starts with an underscore).
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
     * @param   null  $null An empty parameter. Return a non null value to short-circuit the function.
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
     * @param   null         $null An empty parameter. Return a non null value to short-circuit the function.
     * @param   int|string $post_id The post id.
     * @param   string       $name The meta name.
     * @param   bool         $hidden If the meta is hidden (starts with an underscore).
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
     * @param   null  $null An empty parameter. Return a non null value to short-circuit the function.
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
     * @param   string $name The method name.
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
     * @var bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule data.
     * @param   mixed $value The value to compare against.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
class acf_loop
{
    /**
     *  __construct
     *
     *  This function will setup the class functionality
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  is_empty
     *
     *  This function will return true if no loops exist
     *
     *  @type    function
     *  @date    3/03/2016
     *  @since   5.3.2
     *
     *  @param   void
     *  @return  boolean
     */
    function is_empty()
    {
    }
    /**
     *  is_loop
     *
     *  This function will return true if a loop exists for the given array index
     *
     *  @type    function
     *  @date    3/03/2016
     *  @since   5.3.2
     *
     *  @param   int $i
     *  @return  boolean
     */
    function is_loop($i = 0)
    {
    }
    /**
     *  get_i
     *
     *  This function will return a valid array index for the given $i
     *
     *  @type    function
     *  @date    3/03/2016
     *  @since   5.3.2
     *
     *  @param   mixed $i
     *  @return  int
     */
    function get_i($i = 0)
    {
    }
    /**
     *  add_loop
     *
     *  This function will add a new loop
     *
     *  @type    function
     *  @date    3/03/2016
     *  @since   5.3.2
     *
     *  @param   array $loop
     *  @return  void
     */
    function add_loop($loop = array())
    {
    }
    /**
     *  update_loop
     *
     *  This function will update a loop's setting
     *
     *  @type    function
     *  @date    3/03/2016
     *  @since   5.3.2
     *
     *  @param   mixed $i
     *  @param   string $key the loop setting name
     *  @param   mixed $value the loop setting value
     *  @return  boolean true on success
     */
    function update_loop($i = 'active', $key = \null, $value = \null)
    {
    }
    /**
     *  get_loop
     *
     *  This function will return a loop, or loop's setting for a given index & key
     *
     *  @type    function
     *  @date    3/03/2016
     *  @since   5.3.2
     *
     *  @param   mixed $i
     *  @param   string $key the loop setting name
     *  @return  mixed false on failure
     */
    function get_loop($i = 'active', $key = \null)
    {
    }
    /**
     *  remove_loop
     *
     *  This function will remove a loop
     *
     *  @type    function
     *  @date    3/03/2016
     *  @since   5.3.2
     *
     *  @param   mixed $i
     *  @return  boolean true on success
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
     * @param   string|int $post_id The post ID being saved.
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
     * Returns the field responsible for the current Media query or upload context.
     *
     * @date    21/5/21
     * @since   5.9.7
     *
     * @param   void
     * @return  array| false.
     */
    private function get_source_field()
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
     * @param   array       $response Array of prepared attachment data.
     * @param   WP_Post     $attachment Attachment object.
     * @param   array|false $meta Array of attachment meta data, or false if there is none.
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
     * @param   array       $response Array of prepared attachment data.
     * @param   WP_Post     $attachment Attachment object.
     * @param   array|false $meta Array of attachment meta data, or false if there is none.
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
class ACF_Rest_Api
{
    /** @var ACF_Rest_Request */
    private $request;
    /** @var ACF_Rest_Embed_Links */
    private $embed_links;
    public function __construct()
    {
    }
    public function initialize($response, $handler, $request)
    {
    }
    /**
     * Register our custom property as a REST field.
     */
    public function register_field()
    {
    }
    /**
     * Dynamically generate the schema for the current request.
     *
     * @return array
     */
    private function get_schema()
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
     * @return bool|WP_Error
     */
    public function validate_rest_arg($value, $request, $param)
    {
    }
    /**
     * Load field values into the requested object. This method is not a part of any public API and is only public as
     * it is required by WordPress.
     *
     * @param array           $object An array representation of the post, term, or user object.
     * @param string          $field_name
     * @param WP_REST_Request $request
     * @param string          $object_sub_type Note that this isn't the same as $this->object_type. This variable is
     *                                           more specific and can be a post type or taxonomy.
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
     * @param string                  $property 'acf'
     * @param WP_REST_Request         $request
     * @param string                  $object_sub_type This will be the post type, the taxonomy, or 'user'.
     * @return bool|WP_Error
     */
    public function update_fields($data, $object, $property, $request, $object_sub_type)
    {
    }
    // todo - this should check for a flag and validate a nonce to ensure we are in admin mode.
    // todo - consider/discuss handling this in the request object instead.
    private function is_admin_mode($data)
    {
    }
    /**
     * Make the ACF identifier string for the given object.
     *
     * @param int    $object_id
     * @param string $object_type 'user', 'term', or 'post'
     * @return string
     */
    private function make_identifier($object_id, $object_type)
    {
    }
    /**
     * Gets an array of the location types that a field group is configured to use.
     *
     * @param string $object_type    'user', 'term', or 'post'
     * @param array  $field_group    The field group to check.
     * @param array  $location_types An array of location types.
     *
     * @return bool
     */
    private function object_type_has_field_group($object_type, $field_group, $location_types = array())
    {
    }
    /**
     * Get all field groups for the provided object type.
     *
     * @param string $object_type  'user', 'term', or 'post'
     *
     * @return array An array of field groups that display for that location type.
     */
    private function get_field_groups_by_object_type($object_type)
    {
    }
    /**
     * Get all field groups for a given object.
     *
     * @param int         $object_id
     * @param string      $object_type 'user', 'term', or 'post'
     * @param string|null $object_sub_type The post type or taxonomy. When an $object_type of 'user' is in play, this can be ignored.
     * @param array       $scope Field group keys to limit the returned set of field groups to. This is used to scope field lookups to specific groups.
     * @return array An array of matching field groups.
     */
    private function get_field_groups_by_id($object_id, $object_type, $object_sub_type = \null, $scope = array())
    {
    }
    /**
     * Get all ACF fields for a given field group and allow third party filtering.
     *
     * @param array    $field_group This could technically be other possible values supported by acf_get_fields() but in this
     *                           context, we're only using the field group arrays.
     * @param null|int $object_id The ID of the object being prepared.
     * @return array
     */
    private function get_fields($field_group, $object_id = \null)
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
    /** @var array Links to add to the response. These can be flagged as embeddable and expanded when _embed is passed with the request. */
    private $links = array();
    public function initialize()
    {
    }
    /**
     * Hook into all REST-enabled post type, taxonomy, and the user controllers in order to prepare links.
     */
    private function hook_link_handlers()
    {
    }
    /**
     * Add links to internal property for subsequent use in \ACF_Rest_Embed_Links::load_item_links().
     *
     * @param       $post_id
     * @param array   $field
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
 *
 * @property-read string $object_sub_type
 * @property-read string $object_type
 * @property-read string $http_method
 */
class ACF_Rest_Request
{
    /**
     * Define which private/protected class properties are allowed read access. Access to these is controlled in
     * \ACF_Rest_Request::__get();
     *
     * @var string[]
     */
    private $readonly_props = array('object_type', 'object_sub_type', 'child_object_type', 'http_method');
    /** @var string The HTTP request method for the current request. i.e; GET, POST, PATCH, PUT, DELETE, OPTIONS, HEAD */
    private $http_method;
    /** @var string The current route being requested. */
    private $current_route;
    /** @var array Route URL patterns we support. */
    private $supported_routes = array();
    /** @var array Parameters matched from the URL. e.g; object IDs. */
    private $url_params = array();
    /** @var string The underlying object type. e.g; post, term, user, etc. */
    private $object_type;
    /** @var string The requested object type. */
    private $object_sub_type;
    /** @var string The object type for a child object. e.g. post-revision, autosaves, etc. */
    private $child_object_type;
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
    /**
     * Determine the HTTP method of the current request.
     */
    private function set_http_method()
    {
    }
    /**
     * Get the current REST route as determined by WordPress.
     */
    private function set_current_route($request)
    {
    }
    /**
     * Build an array of route match patterns that we handle. These are the same as WordPress' core patterns except
     * we are also matching the object type here as well.
     */
    private function build_supported_routes()
    {
    }
    /**
     * Loop through supported routes to find matching pattern. Use matching pattern to determine any URL parameters.
     */
    private function set_url_params()
    {
    }
    /**
     * Determine the object type and sub type from the requested route. We need to know both the underlying WordPress
     * object type as well as post type or taxonomy in order to provide the right context when getting/updating fields.
     */
    private function set_object_types()
    {
    }
    /**
     * Find the REST enabled post type object that matches the given REST base.
     *
     * @param string $rest_base
     * @return WP_Post_Type|null
     */
    private function get_post_type_by_rest_base($rest_base)
    {
    }
    /**
     * Find the REST enabled taxonomy object that matches the given REST base.
     *
     * @param $rest_base
     * @return WP_Taxonomy|null
     */
    private function get_taxonomy_by_rest_base($rest_base)
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
     *  @type    function
     *  @date    11/08/13
     *
     *  @param   void
     *  @return  void
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
     *  @type    function
     *  @date    21/10/2014
     *  @since   5.1.0
     *
     *  @param   array $fields
     *  @return  $fields
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
     *  @type    filter
     *  @date    19/09/13
     *
     *  @param   boolean $return defaults to true
     *  @param   object $last_revision the last revision that WP will compare against
     *  @param   object $post the $post that WP will compare against
     *  @return  boolean $return
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
     *  @type    filter
     *  @date    11/08/13
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function wp_post_revision_fields($fields, $post = \null)
    {
    }
    /**
     *  wp_post_revision_field
     *
     *  This filter will load the value for the given field and return it for rendering
     *
     *  @type    filter
     *  @date    11/08/13
     *
     *  @param   mixed $value should be false as it has not yet been loaded
     *  @param   string $field_name The name of the field
     *  @param   mixed $post Holds the $post object to load from - in WP 3.5, this is not passed!
     *  @param   string $direction to / from - not used
     *  @return  string $value
     */
    function wp_post_revision_field($value, $field_name, $post = \null, $direction = \false)
    {
    }
    /**
     *  wp_restore_post_revision
     *
     *  This action will copy and paste the metadata from a revision to the post
     *
     *  @type    action
     *  @date    11/08/13
     *
     *  @param   int $parent_id the destination post
     *  @return  int $revision_id the source post
     */
    function wp_restore_post_revision($post_id, $revision_id)
    {
    }
    /**
     *  acf_validate_post_id
     *
     *  This function will modify the $post_id and allow loading values from a revision
     *
     *  @type    function
     *  @date    6/3/17
     *  @since   5.5.10
     *
     *  @param   int $post_id
     *  @param   int $_post_id
     *  @return  int $post_id
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  @date    24/2/18
     *  @since   5.6.9
     *
     *  @param   array $post_types
     *  @param   array $args
     *  @return  array
     */
    function ee_get_post_types($post_types, $args)
    {
    }
    /**
     *  tabify_posttypes
     *
     *  This function removes ACF post types from the tabify edit screen (post type selection sidebar)
     *
     *  @type    function
     *  @date    9/10/12
     *  @since   3.5.1
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function tabify_posttypes($posttypes)
    {
    }
    /**
     *  tabify_add_meta_boxes
     *
     *  This function creates dummy metaboxes on the tabify edit screen page
     *
     *  @type    function
     *  @date    9/10/12
     *  @since   3.5.1
     *
     *  @param   string $post_type
     *  @return  void
     */
    function tabify_add_meta_boxes($post_type)
    {
    }
    /**
     *  pts_allowed_pages
     *
     *  This filter will prevent PTS from running on the field group page!
     *
     *  @type    function
     *  @date    25/09/2014
     *  @since   5.0.0
     *
     *  @param   array $pages
     *  @return  $pages
     */
    function pts_allowed_pages($pages)
    {
    }
    /**
     *  doing_dark_mode
     *
     *  Runs during 'admin_enqueue_scripts' if dark mode is enabled
     *
     *  @date    13/8/18
     *  @since   5.7.3
     *
     *  @param   void
     *  @return  void
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
    /** @var int Counts the number of plugin update checks */
    var $checked = 0;
    /**
     *  __construct
     *
     *  Sets up the class functionality.
     *
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  add_plugin
     *
     *  Registeres a plugin for updates.
     *
     *  @date    8/4/17
     *  @since   5.5.10
     *
     *  @param   array $plugin The plugin array.
     *  @return  void
     */
    function add_plugin($plugin)
    {
    }
    /**
     *  get_plugin_by
     *
     *  Returns a registered plugin for the give key and value.
     *
     *  @date    3/8/18
     *  @since   5.7.2
     *
     *  @param   string $key The array key to compare
     *  @param   string $value The value to compare against
     *  @return  array|false
     */
    function get_plugin_by($key = '', $value = \null)
    {
    }
    /**
     * request
     *
     * Makes a request to the ACF connect server.
     *
     * @date    8/4/17
     * @since   5.5.10
     *
     * @param   string $endpoint The API endpoint.
     * @param   array $body The body to post.
     * @return  array|string|WP_Error
     */
    function request($endpoint = '', $body = \null)
    {
    }
    /**
     *  get_plugin_info
     *
     *  Returns update information for the given plugin id.
     *
     *  @date    9/4/17
     *  @since   5.5.10
     *
     *  @param   string $id The plugin id such as 'pro'.
     *  @param   boolean $force_check Bypasses cached result. Defaults to false.
     *  @return  array|WP_Error
     */
    function get_plugin_info($id = '', $force_check = \false)
    {
    }
    /**
     *  get_plugin_update
     *
     *  Returns specific data from the 'update-check' response.
     *
     *  @date    3/8/18
     *  @since   5.7.2
     *
     *  @param   string  $basename The plugin basename.
     *  @param   boolean $force_check Bypasses cached result. Defaults to false
     *  @return  array
     */
    function get_plugin_update($basename = '', $force_check = \false)
    {
    }
    /**
     *  get_plugin_updates
     *
     *  Checks for plugin updates.
     *
     *  @date    8/7/18
     *  @since   5.6.9
     *  @since   5.7.2 Added 'checked' comparison
     *
     *  @param   boolean $force_check Bypasses cached result. Defaults to false.
     *  @return  array|WP_Error.
     */
    function get_plugin_updates($force_check = \false)
    {
    }
    /**
     *  get_expiration
     *
     *  This function safely gets the expiration value from a response.
     *
     *  @date    8/7/18
     *  @since   5.6.9
     *
     *  @param   mixed $response The response from the server. Default false.
     *  @param   int   $min The minimum expiration limit. Default 0.
     *  @param   int   $max The maximum expiration limit. Default 0.
     *  @return  int
     */
    function get_expiration($response = \false, $min = 0, $max = 0)
    {
    }
    /**
     *  refresh_plugins_transient
     *
     *  Deletes transients and allows a fresh lookup.
     *
     *  @date    11/4/17
     *  @since   5.5.10
     *
     *  @param   void
     *  @return  void
     */
    function refresh_plugins_transient()
    {
    }
    /**
     *  modify_plugins_transient
     *
     *  Called when WP updates the 'update_plugins' site transient. Used to inject ACF plugin update info.
     *
     *  @date    16/01/2014
     *  @since   5.0.0
     *
     *  @param   object $transient
     *  @return  $transient
     */
    function modify_plugins_transient($transient)
    {
    }
    /**
     *  modify_plugin_details
     *
     *  Returns the plugin data visible in the 'View details' popup
     *
     *  @date    17/01/2014
     *  @since   5.0.0
     *
     *  @param   object $result
     *  @param   string $action
     *  @param   object $args
     *  @return  $result
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  add_error
     *
     *  This function will add an error message for a field
     *
     *  @type    function
     *  @date    25/11/2013
     *  @since   5.0.0
     *
     *  @param   string $input name attribute of DOM elmenet
     *  @param   string $message error message
     *  @return  int $post_id
     */
    function add_error($input, $message)
    {
    }
    /**
     *  get_error
     *
     *  This function will return an error for a given input
     *
     *  @type    function
     *  @date    5/03/2016
     *  @since   5.3.2
     *
     *  @param   string $input name attribute of DOM elmenet
     *  @return  mixed
     */
    function get_error($input)
    {
    }
    /**
     *  get_errors
     *
     *  This function will return validation errors
     *
     *  @type    function
     *  @date    25/11/2013
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  array|boolean
     */
    function get_errors()
    {
    }
    /**
     *  reset_errors
     *
     *  This function will remove all errors
     *
     *  @type    function
     *  @date    4/03/2016
     *  @since   5.3.2
     *
     *  @param   void
     *  @return  void
     */
    function reset_errors()
    {
    }
    /**
     *  ajax_validate_save_post
     *
     *  This function will validate the $_POST data via AJAX
     *
     *  @type    function
     *  @date    27/10/2014
     *  @since   5.0.9
     *
     *  @param   void
     *  @return  void
     */
    function ajax_validate_save_post()
    {
    }
    /**
     *  acf_validate_save_post
     *
     *  This function will loop over $_POST data and validate
     *
     *  @type    function
     *  @date    7/09/2016
     *  @since   5.4.0
     *
     *  @param   void
     *  @return  void
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
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of category. Used for tab indentation.
     * @param array  $args   An array of arguments. @see wp_terms_checklist()
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
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of category. Used for tab indentation.
     * @param array  $args   An array of arguments. @see wp_terms_checklist()
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
     * @param string  $output   Used to append additional content (passed by reference).
     * @param WP_Term $term     The current term object.
     * @param int     $depth    Depth of the term in reference to parents. Default 0.
     * @param array   $args     An array of arguments. @see wp_terms_checklist()
     * @param int     $id       ID of the current term.
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
     * @param int     $depth    Depth of the term in reference to parents. Default 0.
     * @param array   $args     An array of arguments. @see wp_terms_checklist()
     */
    public function end_el(&$output, $category, $depth = 0, $args = array())
    {
    }
}
class ACF_WPML_Compatibility
{
    /**
     *  __construct
     *
     *  Sets up the class functionality.
     *
     *  @date    23/06/12
     *  @since   3.1.8
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  is_translatable
     *
     *  Returns true if the acf-field-group post type is translatable.
     *  Also adds compatibility with ACF4 settings
     *
     *  @date    10/04/2015
     *  @since   5.2.3
     *
     *  @param   void
     *  @return  bool
     */
    function is_translatable()
    {
    }
    /**
     *  upgrade_500_field_group
     *
     *  Update the icl_translations table data when creating the field groups.
     *
     *  @date    10/04/2015
     *  @since   5.2.3
     *
     *  @param   array  $field_group The new field group array.
     *  @param   object $ofg The old field group WP_Post object.
     *  @return  void
     */
    function upgrade_500_field_group($field_group, $ofg)
    {
    }
    /**
     *  settings_save_json
     *
     *  Modifies the json path.
     *
     *  @date    19/05/2014
     *  @since   5.0.0
     *
     *  @param   string $path The json save path.
     *  @return  string
     */
    function settings_save_json($path)
    {
    }
    /**
     *  settings_load_json
     *
     *  Modifies the json path.
     *
     *  @date    19/05/2014
     *  @since   5.0.0
     *
     *  @param   string $path The json save path.
     *  @return  string
     */
    function settings_load_json($paths)
    {
    }
    /**
     *  icl_make_duplicate
     *
     *  description
     *
     *  @date    26/02/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function icl_make_duplicate($master_post_id, $lang, $postarr, $id)
    {
    }
    /**
     *  verify_ajax
     *
     *  Sets the correct language during AJAX requests.
     *
     *  @type    function
     *  @date    7/08/2015
     *  @since   5.2.3
     *
     *  @param   void
     *  @return  void
     */
    function verify_ajax()
    {
    }
    /**
     *  get_translatable_documents
     *
     *  Removes 'acf-field' from the available post types for translation.
     *
     *  @type    function
     *  @date    17/8/17
     *  @since   5.6.0
     *
     *  @param   array $icl_post_types The array of post types.
     *  @return  array
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
     *  @type    function
     *  @date    23/06/12
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  include_field_types
     *
     *  description
     *
     *  @type    function
     *  @date    21/10/2015
     *  @since   5.2.3
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function include_field_types()
    {
    }
    /**
     *  include_location_rules
     *
     *  description
     *
     *  @type    function
     *  @date    10/6/17
     *  @since   5.6.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function include_location_rules()
    {
    }
    /**
     *  register_assets
     *
     *  description
     *
     *  @type    function
     *  @date    4/11/2013
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function register_assets()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    4/11/2013
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  field_group_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    4/11/2013
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    function
     *  @date    23/06/12
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function __construct()
    {
    }
    /**
     *  admin_menu
     *
     *  description
     *
     *  @type    function
     *  @date    24/02/2014
     *  @since   5.0.0
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
     *  @type    function
     *  @date    2/02/13
     *  @since   3.6
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function admin_load()
    {
    }
    /**
     *  admin_enqueue_scripts
     *
     *  This function will enqueue the 'post.js' script which adds support for 'Screen Options' column toggle
     *
     *  @type    function
     *  @date    23/03/2016
     *  @since   5.3.2
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
     *  @type    action (admin_head)
     *  @date    23/06/12
     *  @since   3.1.8
     *
     *  @param   void
     *  @return  void
     */
    function admin_head()
    {
    }
    /**
     *  postbox_submitdiv
     *
     *  This function will render the submitdiv metabox
     *
     *  @type    function
     *  @date    23/03/2016
     *  @since   5.3.2
     *
     *  @param   void
     *  @return  void
     */
    function postbox_submitdiv($post, $args)
    {
    }
    /**
     * Renders a postbox on an ACF options page.
     *
     * @date    24/02/2014
     * @since   5.0.0
     *
     * @param object $post
     * @param array  $args
     *
     * @return void
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
     * @param   string $version The version to find.
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
class acf_field_clone extends \acf_field
{
    /**
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  is_enabled
     *
     *  This function will return true if acf_local functionality is enabled
     *
     *  @type    function
     *  @date    14/07/2016
     *  @since   5.4.0
     *
     *  @param   void
     *  @return  void
     */
    function is_enabled()
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     *  acf_get_fields
     *
     *  This function will hook into the 'acf/get_fields' filter and inject/replace seamless clones fields
     *
     *  @type    function
     *  @date    17/06/2016
     *  @since   5.3.8
     *
     *  @param   array $fields
     *  @param   array $parent
     *  @return  $fields
     */
    function acf_get_fields($fields, $parent)
    {
    }
    /**
     *  get_cloned_fields
     *
     *  This function will return an array of fields for a given clone field
     *
     *  @type    function
     *  @date    28/06/2016
     *  @since   5.3.8
     *
     *  @param   array $field
     *  @param   array $parent
     *  @return  array
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
     *  @type    function
     *  @date    28/06/2016
     *  @since   5.3.8
     *
     *  @param   array $field
     *  @param   array $clone_field
     *  @return  $field
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
     *  @type    function
     *  @date    28/06/2016
     *  @since   5.3.8
     *
     *  @param   array $field
     *  @param   array $clone_field
     *  @return  $field
     */
    function acf_clone_clone_field($field, $clone_field)
    {
    }
    /**
     *  prepare_field_for_db
     *
     *  description
     *
     *  @type    function
     *  @date    4/11/16
     *  @since   5.5.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function prepare_field_for_db($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value found in the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *  @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the $post_id of which the value will be saved
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_field_block
     *
     *  description
     *
     *  @type    function
     *  @date    12/07/2016
     *  @since   5.4.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function render_field_block($field)
    {
    }
    /**
     *  render_field_table
     *
     *  description
     *
     *  @type    function
     *  @date    12/07/2016
     *  @since   5.4.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @param   $field  - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field_settings($field)
    {
    }
    /**
     *  get_clone_setting_choices
     *
     *  This function will return an array of choices data for Select2
     *
     *  @type    function
     *  @date    17/06/2016
     *  @since   5.3.8
     *
     *  @param   mixed $value
     *  @return  array
     */
    function get_clone_setting_choices($value)
    {
    }
    /**
     *  get_clone_setting_choice
     *
     *  This function will return the label for a given clone choice
     *
     *  @type    function
     *  @date    17/06/2016
     *  @since   5.3.8
     *
     *  @param   mixed $selector
     *  @return  string
     */
    function get_clone_setting_choice($selector = '')
    {
    }
    /**
     *  get_clone_setting_field_choice
     *
     *  This function will return the text for a field choice
     *
     *  @type    function
     *  @date    20/07/2016
     *  @since   5.4.0
     *
     *  @param   array $field
     *  @return  string
     */
    function get_clone_setting_field_choice($field)
    {
    }
    /**
     *  get_clone_setting_group_choice
     *
     *  This function will return the text for a group choice
     *
     *  @type    function
     *  @date    20/07/2016
     *  @since   5.4.0
     *
     *  @param   array $field_group
     *  @return  string
     */
    function get_clone_setting_group_choice($field_group)
    {
    }
    /**
     *  ajax_query
     *
     *  description
     *
     *  @type    function
     *  @date    17/06/2016
     *  @since   5.3.8
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_query()
    {
    }
    /**
     *  acf_prepare_field
     *
     *  This function will restore a field's key ready for input
     *
     *  @type    function
     *  @date    6/09/2016
     *  @since   5.4.0
     *
     *  @param   array $field
     *  @return  $field
     */
    function acf_prepare_field($field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  __construct
     *
     *  This function will setup the field type data
     *
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  get_valid_layout
     *
     *  This function will fill in the missing keys to create a valid layout
     *
     *  @type    function
     *  @date    3/10/13
     *  @since   1.1.0
     *
     *  @param   array $layout
     *  @return  array $layout
     */
    function get_valid_layout($layout = array())
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     *  get_sub_field
     *
     *  This function will return a specific sub field
     *
     *  @type    function
     *  @date    29/09/2016
     *  @since   5.4.0
     *
     *  @param   $sub_field
     *  @param   string $selector
     *  @param   array $field
     *  @return  int $post_id
     */
    function get_sub_field($sub_field, $id, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     */
    function render_field($field)
    {
    }
    /**
     *  render_layout
     *
     *  description
     *
     *  @type    function
     *  @date    19/11/2013
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value found in the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *  @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     * This function will return a specific layout by name from a field
     *
     * @date    15/2/17
     * @since   5.5.8
     *
     * @param   string $name
     * @param   array  $field
     * @return  array|false
     */
    function get_layout($name, $field)
    {
    }
    /**
     * This function will delete a value row
     *
     * @date    15/2/17
     * @since   5.5.8
     *
     * @param   int   $i
     * @param   array $field
     * @param   mixed $post_id
     * @return  bool
     */
    function delete_row($i, $field, $post_id)
    {
    }
    /**
     * This function will update a value row
     *
     * @date    15/2/17
     * @since   5.5.8
     *
     * @param   array $row
     * @param   int   $i
     * @param   array $field
     * @param   mixed $post_id
     * @return  bool
     */
    function update_row($row, $i, $field, $post_id)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the $post_id of which the value will be saved
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  delete_value
     *
     *  description
     *
     *  @type    function
     *  @date    1/07/2015
     *  @since   5.2.3
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function delete_value($post_id, $key, $field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the field group ID (post_type = acf)
     *
     *  @return  $field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  delete_field
     *
     *  description
     *
     *  @type    function
     *  @date    4/04/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function delete_field($field)
    {
    }
    /**
     *  duplicate_field()
     *
     *  This filter is appied to the $field before it is duplicated and saved to the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the modified field
     */
    function duplicate_field($field)
    {
    }
    /**
     *  ajax_layout_title
     *
     *  description
     *
     *  @type    function
     *  @date    2/03/2016
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    function
     *  @date    28/06/2016
     *  @since   5.3.8
     *
     *  @param   array $clone
     *  @param   array $field
     *  @return  $clone
     */
    function clone_any_field($field, $clone_field)
    {
    }
    /**
     *  prepare_field_for_export
     *
     *  description
     *
     *  @type    function
     *  @date    11/03/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     *  @type    function
     *  @date    11/03/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function prepare_field_for_import($field)
    {
    }
    /**
     *  validate_any_field
     *
     *  This function will add compatibility for the 'column_width' setting
     *
     *  @type    function
     *  @date    30/1/17
     *  @since   5.5.6
     *
     *  @param   array $field
     *  @return  $field
     */
    function validate_any_field($field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type    function
     *  @date    8/03/2016
     *  @since   5.3.2
     *
     *  @param   array $field
     *  @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     * Additional validation for the flexible content field when submitted via REST.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value
     * @param int|string $post_id
     * @param array      $field
     * @return array|mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  ajax_get_attachment
     *
     *  description
     *
     *  @type    function
     *  @date    13/12/2013
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_get_attachment()
    {
    }
    /**
     *  ajax_update_attachment
     *
     *  description
     *
     *  @type    function
     *  @date    13/12/2013
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function ajax_update_attachment()
    {
    }
    /**
     *  ajax_get_sort_order
     *
     *  description
     *
     *  @type    function
     *  @date    13/12/2013
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     * @param   int   $id The attachment ID.
     * @param   array $field The field array.
     * @return  void
     */
    function render_attachment($id, $field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function validate_value($valid, $value, $field, $input)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $post_id - the $post_id of which the value will be saved
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     * Validates file fields updated via the REST API.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value The raw (unformatted) field value.
     * @param int|string $post_id
     * @param array      $field
     * @return array
     */
    public function get_rest_links($value, $post_id, array $field)
    {
    }
    /**
     * Apply basic formatting to prepare the value for default REST output.
     *
     * @param mixed      $value
     * @param string|int $post_id
     * @param array      $field
     * @return mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     *  @type    function
     *  @date    5/03/2014
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
     */
    function initialize()
    {
    }
    /**
     *  input_admin_enqueue_scripts
     *
     *  description
     *
     *  @type    function
     *  @date    16/12/2015
     *  @since   5.3.2
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function input_admin_enqueue_scripts()
    {
    }
    /**
     *  load_field()
     *
     *  This filter is appied to the $field after it is loaded from the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the field array holding all the field options
     */
    function load_field($field)
    {
    }
    /**
     *  render_field()
     *
     *  Create the HTML interface for your field
     *
     *  @param   $field - an array holding all the field's data
     *
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
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
     *  @type    action
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field  - an array holding all the field's data
     */
    function render_field_settings($field)
    {
    }
    /**
     *  load_value()
     *
     *  This filter is applied to the $value after it is loaded from the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value found in the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *  @return  $value
     */
    function load_value($value, $post_id, $field)
    {
    }
    /**
     *  format_value()
     *
     *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   mixed $value the value which was loaded from the database
     *  @param   mixed $post_id the $post_id from which the value was loaded
     *  @param   array $field the field array holding all the field options
     *
     *  @return  mixed $value the modified value
     */
    function format_value($value, $post_id, $field)
    {
    }
    /**
     *  validate_value
     *
     *  description
     *
     *  @type    function
     *  @date    11/02/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
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
     * @param   array $row
     * @param   int   $i
     * @param   array $field
     * @param   mixed $post_id
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
     * @param   int   $i
     * @param   array $field
     * @param   mixed $post_id
     * @return  boolean
     */
    function delete_row($i, $field, $post_id)
    {
    }
    /**
     *  update_value()
     *
     *  This filter is appied to the $value before it is updated in the db
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $value - the value which will be saved in the database
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the $post_id of which the value will be saved
     *
     *  @return  $value - the modified value
     */
    function update_value($value, $post_id, $field)
    {
    }
    /**
     *  delete_value
     *
     *  description
     *
     *  @type    function
     *  @date    1/07/2015
     *  @since   5.2.3
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function delete_value($post_id, $key, $field)
    {
    }
    /**
     *  delete_field
     *
     *  description
     *
     *  @type    function
     *  @date    4/04/2014
     *  @since   5.0.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function delete_field($field)
    {
    }
    /**
     *  update_field()
     *
     *  This filter is appied to the $field before it is saved to the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *  @param   $post_id - the field group ID (post_type = acf)
     *
     *  @return  $field - the modified field
     */
    function update_field($field)
    {
    }
    /**
     *  duplicate_field()
     *
     *  This filter is appied to the $field before it is duplicated and saved to the database
     *
     *  @type    filter
     *  @since   3.6
     *  @date    23/01/13
     *
     *  @param   $field - the field array holding all the field options
     *
     *  @return  $field - the modified field
     */
    function duplicate_field($field)
    {
    }
    /**
     *  translate_field
     *
     *  This function will translate field settings
     *
     *  @type    function
     *  @date    8/03/2016
     *  @since   5.3.2
     *
     *  @param   array $field
     *  @return  $field
     */
    function translate_field($field)
    {
    }
    /**
     *  validate_any_field
     *
     *  This function will add compatibility for the 'column_width' setting
     *
     *  @type    function
     *  @date    30/1/17
     *  @since   5.5.6
     *
     *  @param   array $field
     *  @return  $field
     */
    function validate_any_field($field)
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
     * Additional validation for the repeater field when submitted via REST.
     *
     * @param bool  $valid
     * @param int   $value
     * @param array $field
     *
     * @return bool|WP_Error
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
     * @param mixed      $value
     * @param int|string $post_id
     * @param array      $field
     * @return array|mixed
     */
    public function format_value_for_rest($value, $post_id, array $field)
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     * @param   array $rule The location rule.
     * @param   array $screen The screen args.
     * @param   array $field_group The field group settings.
     * @return  bool
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
     *  __construct
     *
     *  Initialize filters, action, variables and includes
     *
     *  @type    function
     *  @date    23/06/12
     *  @since   5.0.0
     *
     *  @param   void
     *  @return  void
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
     *  add_page
     *
     *  This function will store an options page settings
     *
     *  @type    function
     *  @date    9/6/17
     *  @since   5.6.0
     *
     *  @param   array $page
     *  @return  void
     */
    function add_page($page)
    {
    }
    /**
     *  add_sub_page
     *
     *  description
     *
     *  @type    function
     *  @date    9/6/17
     *  @since   5.6.0
     *
     *  @param   int $post_id
     *  @return  int $post_id
     */
    function add_sub_page($page)
    {
    }
    /**
     *  update_page
     *
     *  This function will update an options page settings
     *
     *  @type    function
     *  @date    9/6/17
     *  @since   5.6.0
     *
     *  @param   string $slug
     *  @param   array $data
     *  @return  array
     */
    function update_page($slug = '', $data = array())
    {
    }
    /**
     *  get_page
     *
     *  This function will return an options page settings
     *
     *  @type    function
     *  @date    6/07/2016
     *  @since   5.4.0
     *
     *  @param   string $slug
     *  @return  mixed
     */
    function get_page($slug)
    {
    }
    /**
     *  get_pages
     *
     *  This function will return all options page settings
     *
     *  @type    function
     *  @date    6/07/2016
     *  @since   5.4.0
     *
     *  @param   string $slug
     *  @return  mixed
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
     *  @type    function
     *  @date    23/06/12
     *  @since   5.0.0
     */
    function __construct()
    {
    }
    /**
     *  init
     *
     *  description
     *
     *  @type    function
     *  @date    10/4/17
     *  @since   5.5.10
     */
    function init()
    {
    }
    /**
     *  modify_plugin_update_message
     *
     *  Displays an update message for plugin list screens.
     *
     *  @type    function
     *  @date    14/06/2016
     *  @since   5.3.8
     *
     *  @param   string $message
     *  @param   array $plugin_data
     *  @param   object $r
     *  @return  $message
     */
    function modify_plugin_update_message($plugin_data, $response)
    {
    }
}
/**
 * acf
 *
 * The main function responsible for returning the one true acf Instance to functions everywhere.
 * Use this function like you would a global variable, except without needing to declare the global.
 *
 * Example: <?php $acf = acf(); ?>
 *
 * @date    4/09/13
 * @since   4.3.0
 *
 * @param   void
 * @return  ACF
 */
function acf()
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
 * @return  bool
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
 * @param   int $id The field group or field id.
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
 * @return  int
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
 * @param   array $field The field being cloned.
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
 * @param   array        $fields An array of fields.
 * @param   int|string $post_id The post ID to load values from.
 * @param   string       $element The wrapping element type.
 * @param   string       $instruction The instruction render position (label|field).
 * @return  void
 */
function acf_render_fields($fields, $post_id = 0, $el = 'div', $instruction = 'label')
{
}
/**
 * acf_render_field_wrap
 *
 * Render the wrapping element for a given field.
 *
 * @date    28/09/13
 * @since   5.0.0
 *
 * @param   array  $field The field array.
 * @param   string $element The wrapping element type.
 * @param   string $instruction The instruction render position (label|field).
 * @return  void
 */
function acf_render_field_wrap($field, $element = 'div', $instruction = 'label')
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
 * @param   array  $field The field array.
 * @param   string $context The output context (admin).
 * @return  void
 */
function acf_get_field_label($field, $context = '')
{
}
/**
 * acf_render_field_instructions
 *
 * Renders the field's instructions.
 *
 * @date    19/9/17
 * @since   5.6.3
 *
 * @param   array $field The field array.
 * @return  void
 */
function acf_render_field_instructions($field)
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
 * @param   array $field The field array.
 * @param   array $setting The settings field array.
 * @param   bool  $global Whether this setting is a global or field type specific one.
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
 * @param   array $field The field array.
 * @param   array $specific An array of specific field attributes to update.
 * @return  void
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
 * @param string $slug          The post slug.
 * @param int    $post_ID       Post ID.
 * @param string $post_status   The post status.
 * @param string $post_type     Post type.
 * @param int    $post_parent   Post parent ID
 * @param string $original_slug The original post slug.
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
 * @return  bool True if field was deleted.
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
 * @return  bool True if field was trashed.
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
 * @return  bool True if field was trashed.
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
 * @param string $new_status      The new status of the post being restored.
 * @param int    $post_id         The ID of the post being restored.
 * @param string $previous_status The status of the post at the point where it was trashed.
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
 * @param   int|string $id The field ID, key or name.
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
 * @param   int|string $id The field ID, key or name.
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
 * @param   mixed $id An optional identifier to search for.
 * @return  bool
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
 * @param   array $fields An array of fields.
 * @param   int   $parent_id The new parent ID.
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
 * @param   int|string $id The field ID, key or name.
 * @param   int          $parent_id The new parent ID.
 * @return  bool True if field was duplicated.
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
 * @return  bool
 */
function acf_is_field_group_key($id = '')
{
}
/**
 * acf_validate_field_group
 *
 * Ensures the given field group is valid.
 *
 * @date    18/1/19
 * @since   5.7.10
 *
 * @param   array $field The field group array.
 * @return  array
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
 * @param   array $args An array of location args.
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
 * @param   array $args An array of location args.
 * @return  bool
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
 * @param string $slug          The post slug.
 * @param int    $post_ID       Post ID.
 * @param string $post_status   The post status.
 * @param string $post_type     Post type.
 * @param int    $post_parent   Post parent ID
 * @param string $original_slug The original post slug.
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
 * @return  bool True if field group was deleted.
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
 * @return  bool True if field group was trashed.
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
 * @return  bool True if field_group was trashed.
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
 * @param string $new_status      The new status of the post being restored.
 * @param int    $post_id         The ID of the post being restored.
 * @param string $previous_status The status of the post at the point where it was trashed.
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
 * @param   mixed $id An optional identifier to search for.
 * @return  bool
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
 * @param   int|string $id The field_group ID, key or name.
 * @param   int          $new_post_id Optional post ID to override.
 * @return  array The new field group.
 */
function acf_duplicate_field_group($id = 0, $new_post_id = 0)
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
 * @param   int $post_id The field group ID.
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
 * @param   int|string $post_id The post id.
 * @param   array      $values An array of values to override $_POST.
 * @return  bool True if save was successful.
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
 * @param   int|string $post_id The post id.
 * @return  void
 */
function _acf_do_save_post($post_id = 0)
{
}
/**
 * acf_is_empty
 *
 * Returns true if the value provided is considered "empty". Allows numbers such as 0.
 *
 * @date    6/7/16
 * @since   5.4.0
 *
 * @param   mixed $var The value to check.
 * @return  bool
 */
function acf_is_empty($var)
{
}
/**
 * acf_not_empty
 *
 * Returns true if the value provided is considered "not empty". Allows numbers such as 0.
 *
 * @date    15/7/19
 * @since   5.8.1
 *
 * @param   mixed $var The value to check.
 * @return  bool
 */
function acf_not_empty($var)
{
}
/**
 * acf_uniqid
 *
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
 * acf_merge_attributes
 *
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
 * @param   string $key The property name.
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
 * @return  int
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
 * @param   string $str The string to convert.
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
 * @return  bool
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
 * @return  int
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
 * @param   mixed $value The value.
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
 * @return  int|bool
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
 * acf_add_filter_variations
 *
 * Registers variations for the given filter.
 *
 * @date    26/1/19
 * @since   5.7.11
 *
 * @param   string $filter The filter name.
 * @param   array  $variations An array variation keys.
 * @param   int    $index The param index to find variation values.
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
 * @param   string $action The action name.
 * @param   array  $variations An array variation keys.
 * @param   int    $index The param index to find variation values.
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
 * @param   string $deprecated The deprecated hook.
 * @param   string $version The version this hook was deprecated.
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
 * @param   string $deprecated The deprecated hook.
 * @param   string $version The version this hook was deprecated.
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
 * @param   array  $tags An array of allowed tags.
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
 * @param   array $values The selected choices.
 * @param   array $depth The current walk depth.
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
 * See acf_esc_attrs().
 *
 * @date    13/6/19
 * @since   5.8.1
 * @deprecated  5.6.0
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
 * @return  string
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
 * @return  string
 */
function acf_esc_atts_e($attrs)
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
 * @param   int|string $post_id The post id.
 * @param   string     $name    The meta name.
 * @param   bool       $hidden  If the meta is hidden (starts with an underscore).
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
 * @param   int|string $post_id The post id.
 * @param   string     $name    The meta name.
 * @param   mixed      $value   The meta value.
 * @param   bool       $hidden  If the meta is hidden (starts with an underscore).
 *
 * @return  int|bool Meta ID if the key didn't exist, true on successful update, false on failure.
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
 * @param   int|string $post_id The post id.
 * @param   string     $name The meta name.
 * @param   bool       $hidden If the meta is hidden (starts with an underscore).
 *
 * @return  bool
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
 * @param   int|string $to_post_id The post id to paste to.
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
 * @param   int $from_post_id The post id to copy from.
 * @param   int $to_post_id The post id to paste to.
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
 * @param   string       $key The meta name (field name).
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
 * @param   string                                         $name An optional specific name
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
 * @param   int|string                                   $post_id The post id.
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
 * @return  bool
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
 * acf_get_instance
 *
 * Returns an instance for the given class.
 *
 * @date    9/1/19
 * @since   5.7.10
 *
 * @param   string $class The class name.
 * @return  object The instance.
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
 * @param   int                           $site_id New blog ID.
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
 * acf_include
 *
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
 * @param   mixed  $post_id The post_id of which the value is saved against.
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
 * @param   int|string $post_id The post id.
 * @param   array      $field The field array.
 * @return  mixed
 */
function acf_get_value($post_id, $field)
{
}
/**
 * acf_format_value
 *
 * Returns a formatted version of the provided value.
 *
 * @date    28/09/13
 * @since   5.0.0
 *
 * @param   mixed        $value The field value.
 * @param   int|string $post_id The post id.
 * @param   array        $field The field array.
 * @return  mixed.
 */
function acf_format_value($value, $post_id, $field)
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
 * @param   mixed        $value The new value.
 * @param   int|string $post_id The post id.
 * @param   array        $field The field array.
 * @return  bool.
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
 * @param   int|string $post_id The post id.
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
 * @param   array        $field The field array.
 * @return  bool.
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
 * @param   mixed        $value The new value.
 * @param   int|string $post_id The post id.
 * @param   array        $field The field array.
 * @return  bool.
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
 * @param   string $object_type The object type (post, term, user, etc).
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
 * @return int|mixed|null
 */
function acf_get_object_id($object)
{
}
// class_exists check
/**
 *  acf_new_admin_notice
 *
 *  Instantiates and returns a new model.
 *
 *  @date    23/12/18
 *  @since   5.8.0
 *
 *  @param   array $data Optional data to set.
 *  @return  ACF_Admin_Notice
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
 * @param   string $text The admin notice text.
 * @param   string $class The type of notice (warning, error, success, info).
 * @param   string $dismissable Is this notification dismissible (default true) (since 5.11.0)
 * @return  ACF_Admin_Notice
 */
function acf_add_admin_notice($text = '', $type = 'info', $dismissible = \true)
{
}
// class_exists check
/**
*  acf_register_admin_tool
*
*  alias of acf()->admin_tools->register_tool()
*
*  @type    function
*  @date    31/5/17
*  @since   5.6.0
*
*  @param   void
*  @return  void
*/
function acf_register_admin_tool($class)
{
}
/**
*  acf_get_admin_tools_url
*
*  This function will return the admin URL to the tools page
*
*  @type    function
*  @date    31/5/17
*  @since   5.6.0
*
*  @param   void
*  @return  void
*/
function acf_get_admin_tools_url()
{
}
/**
*  acf_get_admin_tool_url
*
*  This function will return the admin URL to the tools page
*
*  @type    function
*  @date    31/5/17
*  @since   5.6.0
*
*  @param   void
*  @return  void
*/
function acf_get_admin_tool_url($tool = '')
{
}
/**
*  acf_is_array
*
*  This function will return true for a non empty array
*
*  @type    function
*  @date    6/07/2016
*  @since   5.4.0
*
*  @param   array $array
*  @return  boolean
*/
function acf_is_array($array)
{
}
/**
 *  acf_has_setting
 *
 *  alias of acf()->has_setting()
 *
 *  @date    2/2/18
 *  @since   5.6.5
 *
 *  @param   void
 *  @return  void
 */
function acf_has_setting($name = '')
{
}
/**
 *  acf_raw_setting
 *
 *  alias of acf()->get_setting()
 *
 *  @date    2/2/18
 *  @since   5.6.5
 *
 *  @param   void
 *  @return  void
 */
function acf_raw_setting($name = '')
{
}
/**
*  acf_update_setting
*
*  alias of acf()->update_setting()
*
*  @type    function
*  @date    28/09/13
*  @since   5.0.0
*
*  @param   string $name
*  @param   mixed $value
*  @return  void
*/
function acf_update_setting($name, $value)
{
}
/**
 *  acf_validate_setting
 *
 *  Returns the changed setting name if available.
 *
 *  @date    2/2/18
 *  @since   5.6.5
 *
 *  @param   void
 *  @return  void
 */
function acf_validate_setting($name = '')
{
}
/**
*  acf_get_setting
*
*  alias of acf()->get_setting()
*
*  @type    function
*  @date    28/09/13
*  @since   5.0.0
*
*  @param   void
*  @return  void
*/
function acf_get_setting($name, $value = \null)
{
}
/**
*  acf_append_setting
*
*  This function will add a value into the settings array found in the acf object
*
*  @type    function
*  @date    28/09/13
*  @since   5.0.0
*
*  @param   string $name
*  @param   mixed $value
*  @return  void
*/
function acf_append_setting($name, $value)
{
}
/**
 *  acf_get_data
 *
 *  Returns data.
 *
 *  @date    28/09/13
 *  @since   5.0.0
 *
 *  @param   string $name
 *  @return  mixed
 */
function acf_get_data($name)
{
}
/**
 *  acf_set_data
 *
 *  Sets data.
 *
 *  @date    28/09/13
 *  @since   5.0.0
 *
 *  @param   string $name
 *  @param   mixed  $value
 *  @return  void
 */
function acf_set_data($name, $value)
{
}
/**
 * Appends data to an existing key.
 *
 * @date    11/06/2020
 * @since   5.9.0
 *
 * @param   string $name The data name.
 * @return  array $data The data array.
 */
function acf_append_data($name, $data)
{
}
/**
*  acf_init
*
*  alias of acf()->init()
*
*  @type    function
*  @date    28/09/13
*  @since   5.0.0
*
*  @param   void
*  @return  void
*/
function acf_init()
{
}
/**
*  acf_has_done
*
*  This function will return true if this action has already been done
*
*  @type    function
*  @date    16/12/2015
*  @since   5.3.2
*
*  @param   string $name
*  @return  boolean
*/
function acf_has_done($name)
{
}
/**
*  acf_get_external_path
*
*  This function will return the path to a file within an external folder
*
*  @type    function
*  @date    22/2/17
*  @since   5.5.8
*
*  @param   string $file
*  @param   string $path
*  @return  string
*/
function acf_get_external_path($file, $path = '')
{
}
/**
*  acf_get_external_dir
*
*  This function will return the url to a file within an external folder
*
*  @type    function
*  @date    22/2/17
*  @since   5.5.8
*
*  @param   string $file
*  @param   string $path
*  @return  string
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
 *  @date    13/12/17
 *  @since   5.6.8
 *
 *  @param   type $var Description. Default.
 *  @return  type Description.
 */
function acf_plugin_dir_url($file)
{
}
/**
*  acf_parse_args
*
*  This function will merge together 2 arrays and also convert any numeric values to ints
*
*  @type    function
*  @date    18/10/13
*  @since   5.0.0
*
*  @param   array $args
*  @param   array $defaults
*  @return  array $args
*/
function acf_parse_args($args, $defaults = array())
{
}
/**
*  acf_parse_types
*
*  This function will convert any numeric values to int and trim strings
*
*  @type    function
*  @date    18/10/13
*  @since   5.0.0
*
*  @param   mixed $var
*  @return  mixed $var
*/
function acf_parse_types($array)
{
}
/**
*  acf_parse_type
*
*  description
*
*  @type    function
*  @date    11/11/2014
*  @since   5.0.9
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_parse_type($v)
{
}
/**
 *  This function will load in a file from the 'admin/views' folder and allow variables to be passed through
 *
 *  @date    28/09/13
 *  @since   5.0.0
 *
 *  @param string $view_path
 *  @param array  $view_args
 *
 *  @return void
 */
function acf_get_view($view_path = '', $view_args = array())
{
}
/**
*  acf_merge_atts
*
*  description
*
*  @type    function
*  @date    2/11/2014
*  @since   5.0.9
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_merge_atts($atts, $extra = array())
{
}
/**
*  acf_nonce_input
*
*  This function will create a basic nonce input
*
*  @type    function
*  @date    24/5/17
*  @since   5.6.0
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_nonce_input($nonce = '')
{
}
/**
*  acf_extract_var
*
*  This function will remove the var from the array, and return the var
*
*  @type    function
*  @date    2/10/13
*  @since   5.0.0
*
*  @param   array $array
*  @param   string $key
*  @return  mixed
*/
function acf_extract_var(&$array, $key, $default = \null)
{
}
/**
*  acf_extract_vars
*
*  This function will remove the vars from the array, and return the vars
*
*  @type    function
*  @date    8/10/13
*  @since   5.0.0
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_extract_vars(&$array, $keys)
{
}
/**
*  acf_get_sub_array
*
*  This function will return a sub array of data
*
*  @type    function
*  @date    15/03/2016
*  @since   5.3.2
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_get_sub_array($array, $keys)
{
}
/**
 *  acf_get_post_types
 *
 *  Returns an array of post type names.
 *
 *  @date    7/10/13
 *  @since   5.0.0
 *
 *  @param   array $args Optional. An array of key => value arguments to match against the post type objects. Default empty array.
 *  @return  array A list of post type names.
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
*  @type    function
*  @date    5/07/2016
*  @since   5.4.0
*
*  @param   string $post_type
*  @return  string
*/
function acf_get_post_type_label($post_type)
{
}
/**
*  acf_verify_nonce
*
*  This function will look at the $_POST['_acf_nonce'] value and return true or false
*
*  @type    function
*  @date    15/10/13
*  @since   5.0.0
*
*  @param   string $nonce
*  @return  boolean
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
*  @type    function
*  @date    7/08/2015
*  @since   5.2.3
*
*  @param   void
*  @return  boolean
*/
function acf_verify_ajax()
{
}
/**
*  acf_get_image_sizes
*
*  This function will return an array of available image sizes
*
*  @type    function
*  @date    23/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  array
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
 * @date    21/11/16
 * @since   5.5.0
 *
 * @param   string $left The left version number.
 * @param   string $compare The compare operator.
 * @param   string $right The right version number.
 * @return  bool
 */
function acf_version_compare($left = '', $compare = '>', $right = '')
{
}
/**
*  acf_get_full_version
*
*  This function will remove any '-beta1' or '-RC1' strings from a version
*
*  @type    function
*  @date    24/11/16
*  @since   5.5.0
*
*  @param   string $version
*  @return  string
*/
function acf_get_full_version($version = '1')
{
}
/**
*  acf_get_terms
*
*  This function is a wrapper for the get_terms() function
*
*  @type    function
*  @date    28/09/2016
*  @since   5.4.0
*
*  @param   array $args
*  @return  array
*/
function acf_get_terms($args)
{
}
/**
*  acf_get_taxonomy_terms
*
*  This function will return an array of available taxonomy terms
*
*  @type    function
*  @date    7/10/13
*  @since   5.0.0
*
*  @param   array $taxonomies
*  @return  array
*/
function acf_get_taxonomy_terms($taxonomies = array())
{
}
/**
*  acf_decode_taxonomy_terms
*
*  This function decodes the $taxonomy:$term strings into a nested array
*
*  @type    function
*  @date    27/02/2014
*  @since   5.0.0
*
*  @param   array $terms
*  @return  array
*/
function acf_decode_taxonomy_terms($strings = \false)
{
}
/**
*  acf_decode_taxonomy_term
*
*  This function will return the taxonomy and term slug for a given value
*
*  @type    function
*  @date    31/03/2014
*  @since   5.0.0
*
*  @param   string $string
*  @return  array
*/
function acf_decode_taxonomy_term($value)
{
}
/**
 * acf_array
 *
 * Casts the value into an array.
 *
 * @date    9/1/19
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
 * @date    11/05/2020
 * @since   5.8.10
 *
 * @param   mixed $val The value to review.
 * @return  mixed
 */
function acf_unarray($val)
{
}
/**
*  acf_get_array
*
*  This function will force a variable to become an array
*
*  @type    function
*  @date    4/02/2014
*  @since   5.0.0
*
*  @param   mixed $var
*  @return  array
*/
function acf_get_array($var = \false, $delimiter = '')
{
}
/**
*  acf_get_numeric
*
*  This function will return numeric values
*
*  @type    function
*  @date    15/07/2016
*  @since   5.4.0
*
*  @param   mixed $value
*  @return  mixed
*/
function acf_get_numeric($value = '')
{
}
/**
 * acf_get_posts
 *
 * Similar to the get_posts() function but with extra functionality.
 *
 * @date    3/03/15
 * @since   5.1.5
 *
 * @param   array $args The query args.
 * @return  array
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
*  @type    function
*  @date    4/03/2015
*  @since   5.1.5
*
*  @param   string $sql
*  @return  $sql
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
*  @type    function
*  @date    27/02/2014
*  @since   5.0.0
*
*  @param   array $args
*  @return  array
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
*  @type    function
*  @date    23/02/2016
*  @since   5.3.2
*
*  @param   int $post_id
*  @return  int $post_id
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
*  @type    function
*  @date    27/02/2014
*  @since   5.0.0
*
*  @param   array $args
*  @return  array
*/
function acf_get_grouped_users($args = array())
{
}
/**
 * acf_json_encode
 *
 * Returns json_encode() ready for file / database use.
 *
 * @date    29/4/19
 * @since   5.0.0
 *
 * @param   array $json The array of data to encode.
 * @return  string
 */
function acf_json_encode($json)
{
}
/**
*  acf_str_exists
*
*  This function will return true if a sub string is found
*
*  @type    function
*  @date    1/05/2014
*  @since   5.0.0
*
*  @param   string $needle
*  @param   string $haystack
*  @return  boolean
*/
function acf_str_exists($needle, $haystack)
{
}
/**
*  acf_debug
*
*  description
*
*  @type    function
*  @date    2/05/2014
*  @since   5.0.0
*
*  @param   int $post_id
*  @return  int $post_id
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
*  @type    function
*  @date    4/06/2014
*  @since   5.0.0
*
*  @param   int $post_id
*  @return  int $post_id
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
*  @type    function
*  @date    21/06/2016
*  @since   5.3.8
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_str_replace($string = '', $search_replace = array())
{
}
/**
*  acf_split_date_time
*
*  This function will split a format string into seperate date and time
*
*  @type    function
*  @date    26/05/2016
*  @since   5.3.8
*
*  @param   string $date_time
*  @return  array $formats
*/
function acf_split_date_time($date_time = '')
{
}
/**
*  acf_convert_date_to_php
*
*  This fucntion converts a date format string from JS to PHP
*
*  @type    function
*  @date    20/06/2014
*  @since   5.0.0
*
*  @param   string $date
*  @return  string
*/
function acf_convert_date_to_php($date = '')
{
}
/**
*  acf_convert_date_to_js
*
*  This fucntion converts a date format string from PHP to JS
*
*  @type    function
*  @date    20/06/2014
*  @since   5.0.0
*
*  @param   string $date
*  @return  string
*/
function acf_convert_date_to_js($date = '')
{
}
/**
*  acf_convert_time_to_php
*
*  This fucntion converts a time format string from JS to PHP
*
*  @type    function
*  @date    20/06/2014
*  @since   5.0.0
*
*  @param   string $time
*  @return  string
*/
function acf_convert_time_to_php($time = '')
{
}
/**
*  acf_convert_time_to_js
*
*  This fucntion converts a date format string from PHP to JS
*
*  @type    function
*  @date    20/06/2014
*  @since   5.0.0
*
*  @param   string $time
*  @return  string
*/
function acf_convert_time_to_js($time = '')
{
}
/**
*  acf_update_user_setting
*
*  description
*
*  @type    function
*  @date    15/07/2014
*  @since   5.0.0
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_update_user_setting($name, $value)
{
}
/**
*  acf_get_user_setting
*
*  description
*
*  @type    function
*  @date    15/07/2014
*  @since   5.0.0
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_get_user_setting($name = '', $default = \false)
{
}
/**
*  acf_in_array
*
*  description
*
*  @type    function
*  @date    22/07/2014
*  @since   5.0.0
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_in_array($value = '', $array = \false)
{
}
/**
*  acf_get_valid_post_id
*
*  This function will return a valid post_id based on the current screen / parameter
*
*  @type    function
*  @date    8/12/2013
*  @since   5.0.0
*
*  @param   mixed $post_id
*  @return  mixed $post_id
*/
function acf_get_valid_post_id($post_id = 0)
{
}
/**
*  acf_get_post_id_info
*
*  This function will return the type and id for a given $post_id string
*
*  @type    function
*  @date    2/07/2016
*  @since   5.4.0
*
*  @param   mixed $post_id
*  @return  array $info
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
*  @type    function
*  @date    3/09/2016
*  @since   5.4.0
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_isset_termmeta($taxonomy = '')
{
}
/**
*  acf_upload_files
*
*  This function will walk througfh the $_FILES data and upload each found
*
*  @type    function
*  @date    25/10/2014
*  @since   5.0.9
*
*  @param   array $ancestors an internal parameter, not required
*  @return  void
*/
function acf_upload_files($ancestors = array())
{
}
/**
*  acf_upload_file
*
*  This function will uploade a $_FILE
*
*  @type    function
*  @date    27/10/2014
*  @since   5.0.9
*
*  @param   array $uploaded_file array found from $_FILE data
*  @return  int $id new attachment ID
*/
function acf_upload_file($uploaded_file)
{
}
/**
*  acf_update_nested_array
*
*  This function will update a nested array value. Useful for modifying the $_POST array
*
*  @type    function
*  @date    27/10/2014
*  @since   5.0.9
*
*  @param   array $array target array to be updated
*  @param   array $ancestors array of keys to navigate through to find the child
*  @param   mixed $value The new value
*  @return  boolean
*/
function acf_update_nested_array(&$array, $ancestors, $value)
{
}
/**
*  acf_is_screen
*
*  This function will return true if all args are matched for the current screen
*
*  @type    function
*  @date    9/12/2014
*  @since   5.1.5
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_is_screen($id = '')
{
}
/**
*  acf_maybe_get
*
*  This function will return a var if it exists in an array
*
*  @type    function
*  @date    9/12/2014
*  @since   5.1.5
*
*  @param   array $array the array to look within
*  @param   key $key the array key to look for. Nested values may be found using '/'
*  @param   mixed $default the value returned if not found
*  @return  int $post_id
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
 * @date    05/01/2015
 * @since   5.1.5
 *
 * @param   int|WP_Post The attachment ID or object.
 * @return  array|false
 */
function acf_get_attachment($attachment)
{
}
/**
 *  This function will truncate and return a string
 *
 *  @date    8/08/2014
 *  @since   5.0.0
 *
 *  @param string $text   The text to truncate.
 *  @param int    $length The number of characters to allow in the string.
 *
 *  @return  string
 */
function acf_get_truncated($text, $length = 64)
{
}
/**
*  acf_current_user_can_admin
*
*  This function will return true if the current user can administrate the ACF field groups
*
*  @type    function
*  @date    9/02/2015
*  @since   5.1.5
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_current_user_can_admin()
{
}
/**
*  acf_get_filesize
*
*  This function will return a numeric value of bytes for a given filesize string
*
*  @type    function
*  @date    18/02/2015
*  @since   5.1.5
*
*  @param   mixed $size
*  @return  int
*/
function acf_get_filesize($size = 1)
{
}
/**
*  acf_format_filesize
*
*  This function will return a formatted string containing the filesize and unit
*
*  @type    function
*  @date    18/02/2015
*  @since   5.1.5
*
*  @param   mixed $size
*  @return  int
*/
function acf_format_filesize($size = 1)
{
}
/**
*  acf_get_valid_terms
*
*  This function will replace old terms with new split term ids
*
*  @type    function
*  @date    27/02/2015
*  @since   5.1.5
*
*  @param   int|array $terms
*  @param   string $taxonomy
*  @return  $terms
*/
function acf_get_valid_terms($terms = \false, $taxonomy = 'category')
{
}
/**
*  acf_validate_attachment
*
*  This function will validate an attachment based on a field's restrictions and return an array of errors
*
*  @type    function
*  @date    3/07/2015
*  @since   5.2.3
*
*  @param   array $attachment attachment data. Changes based on context
*  @param   array $field field settings containing restrictions
*  @param   string $context $file is different when uploading / preparing
*  @return  array $errors
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
*  @type    function
*  @date    7/12/2015
*  @since   5.3.2
*
*  @param   int $post_id
*  @return  int $post_id
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
*  @type    function
*  @date    4/12/2015
*  @since   5.3.2
*
*  @param   mixed $string string or array containins strings to be translated
*  @return  $string
*/
function acf_translate($string)
{
}
/**
*  acf_maybe_add_action
*
*  This function will determine if the action has already run before adding / calling the function
*
*  @type    function
*  @date    13/01/2016
*  @since   5.3.2
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_maybe_add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)
{
}
/**
*  acf_is_row_collapsed
*
*  This function will return true if the field's row is collapsed
*
*  @type    function
*  @date    2/03/2016
*  @since   5.3.2
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_is_row_collapsed($field_key = '', $row_index = 0)
{
}
/**
*  acf_get_attachment_image
*
*  description
*
*  @type    function
*  @date    24/10/16
*  @since   5.5.0
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_get_attachment_image($attachment_id = 0, $size = 'thumbnail')
{
}
/**
*  acf_get_post_thumbnail
*
*  This function will return a thumbail image url for a given post
*
*  @type    function
*  @date    3/05/2016
*  @since   5.3.8
*
*  @param   obj $post
*  @param   mixed $size
*  @return  string
*/
function acf_get_post_thumbnail($post = \null, $size = 'thumbnail')
{
}
/**
 * acf_get_browser
 *
 * Returns the name of the current browser.
 *
 * @date    17/01/2014
 * @since   5.0.0
 *
 * @param   void
 * @return  string
 */
function acf_get_browser()
{
}
/**
*  acf_is_ajax
*
*  This function will reutrn true if performing a wp ajax call
*
*  @type    function
*  @date    7/06/2016
*  @since   5.3.8
*
*  @param   void
*  @return  boolean
*/
function acf_is_ajax($action = '')
{
}
/**
*  acf_format_date
*
*  This function will accept a date value and return it in a formatted string
*
*  @type    function
*  @date    16/06/2016
*  @since   5.3.8
*
*  @param   string $value
*  @return  string $format
*/
function acf_format_date($value, $format)
{
}
/**
 * acf_clear_log
 *
 * Deletes the debug.log file.
 *
 * @date    21/1/19
 * @since   5.7.10
 *
 * @param   type $var Description. Default.
 * @return  type Description.
 */
function acf_clear_log()
{
}
/**
*  acf_log
*
*  description
*
*  @type    function
*  @date    24/06/2016
*  @since   5.3.8
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_log()
{
}
/**
 *  acf_dev_log
 *
 *  Used to log variables only if ACF_DEV is defined
 *
 *  @date    25/8/18
 *  @since   5.7.4
 *
 *  @param   mixed
 *  @return  void
 */
function acf_dev_log()
{
}
/**
*  acf_doing
*
*  This function will tell ACF what task it is doing
*
*  @type    function
*  @date    28/06/2016
*  @since   5.3.8
*
*  @param   string $event
*  @param   context (string)
*  @return  void
*/
function acf_doing($event = '', $context = '')
{
}
/**
*  acf_is_doing
*
*  This function can be used to state what ACF is doing, or to check
*
*  @type    function
*  @date    28/06/2016
*  @since   5.3.8
*
*  @param   string $event
*  @param   context (string)
*  @return  boolean
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
*  @type    function
*  @date    13/07/2016
*  @since   5.4.0
*
*  @param   int $basename
*  @return  int $post_id
*/
function acf_is_plugin_active()
{
}
/**
*  acf_send_ajax_results
*
*  This function will print JSON data for a Select2 AJAX query
*
*  @type    function
*  @date    19/07/2016
*  @since   5.4.0
*
*  @param   array $response
*  @return  void
*/
function acf_send_ajax_results($response)
{
}
/**
*  acf_is_sequential_array
*
*  This function will return true if the array contains only numeric keys
*
*  @source  http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential
*  @type    function
*  @date    9/09/2016
*  @since   5.4.0
*
*  @param   array $array
*  @return  boolean
*/
function acf_is_sequential_array($array)
{
}
/**
*  acf_is_associative_array
*
*  This function will return true if the array contains one or more string keys
*
*  @source  http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential
*  @type    function
*  @date    9/09/2016
*  @since   5.4.0
*
*  @param   array $array
*  @return  boolean
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
*  @type    function
*  @date    15/09/2016
*  @since   5.4.0
*
*  @param   array $array
*  @param   string $prefix
*  @return  array
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
*  @type    function
*  @date    15/09/2016
*  @since   5.4.0
*
*  @param   array $array
*  @param   string $prefix
*  @return  array
*/
function acf_remove_array_key_prefix($array, $prefix)
{
}
/**
*  acf_strip_protocol
*
*  This function will remove the proticol from a url
*  Used to allow licenses to remain active if a site is switched to https
*
*  @type    function
*  @date    10/01/2017
*  @since   5.5.4
*  @author  Aaron
*
*  @param   string $url
*  @return  string
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
*  @type    function
*  @date    11/01/2017
*  @since   5.8.0 Added filter to prevent connection.
*  @since   5.5.4
*
*  @param   int $attachment_id The attachment ID.
*  @param   int $post_id The post ID.
*  @return  bool True if attachment was connected.
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
*  @type    function
*  @date    27/2/17
*  @since   5.5.8
*
*  @param   string $data
*  @return  string
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
*  @type    function
*  @date    27/2/17
*  @since   5.5.8
*
*  @param   string $data
*  @return  string
*/
function acf_decrypt($data = '')
{
}
/**
 *  acf_parse_markdown
 *
 *  A very basic regex-based Markdown parser function based off [slimdown](https://gist.github.com/jbroadway/2836900).
 *
 *  @date    6/8/18
 *  @since   5.7.2
 *
 *  @param   string $text The string to parse.
 *  @return  string
 */
function acf_parse_markdown($text = '')
{
}
/**
 *  acf_get_sites
 *
 *  Returns an array of sites for a network.
 *
 *  @date    29/08/2016
 *  @since   5.4.0
 *
 *  @param   void
 *  @return  array
 */
function acf_get_sites()
{
}
/**
 *  acf_convert_rules_to_groups
 *
 *  Converts an array of rules from ACF4 to an array of groups for ACF5
 *
 *  @date    25/8/18
 *  @since   5.7.4
 *
 *  @param   array  $rules An array of rules.
 *  @param   string $anyorall The anyorall setting used in ACF4. Defaults to 'any'.
 *  @return  array
 */
function acf_convert_rules_to_groups($rules, $anyorall = 'any')
{
}
/**
 *  acf_register_ajax
 *
 *  Regsiters an ajax callback.
 *
 *  @date    5/10/18
 *  @since   5.7.7
 *
 *  @param   string $name The ajax action name.
 *  @param   array  $callback The callback function or array.
 *  @param   bool   $public Whether to allow access to non logged in users.
 *  @return  void
 */
function acf_register_ajax($name = '', $callback = \false, $public = \false)
{
}
/**
 *  acf_str_camel_case
 *
 *  Converts a string into camelCase.
 *  Thanks to https://stackoverflow.com/questions/31274782/convert-array-keys-from-underscore-case-to-camelcase-recursively
 *
 *  @date    24/10/18
 *  @since   5.8.0
 *
 *  @param   string $string The string ot convert.
 *  @return  string
 */
function acf_str_camel_case($string = '')
{
}
/**
 *  acf_array_camel_case
 *
 *  Converts all aray keys to camelCase.
 *
 *  @date    24/10/18
 *  @since   5.8.0
 *
 *  @param   array $array The array to convert.
 *  @return  array
 */
function acf_array_camel_case($array = array())
{
}
/**
 * Returns true if the current screen is using the block editor.
 *
 * @date 13/12/18
 * @since 5.8.0
 *
 * @return bool
 */
function acf_is_block_editor()
{
}
/**
*  get_field()
*
*  This function will return a custom field value for a specific field name/key + post_id.
*  There is a 3rd parameter to turn on/off formating. This means that an image field will not use
*  its 'return option' to format the value but return only what was saved in the database
*
*  @type    function
*  @since   3.6
*  @date    29/01/13
*
*  @param   string $selector the field name or key
*  @param   mixed $post_id the post_id of which the value is saved against
*  @param   boolean $format_value whether or not to format the value as described above
*  @return  mixed
*/
function get_field($selector, $post_id = \false, $format_value = \true)
{
}
/**
*  the_field()
*
*  This function is the same as echo get_field().
*
*  @type    function
*  @since   1.0.3
*  @date    29/01/13
*
*  @param   string $selector the field name or key
*  @param   mixed $post_id the post_id of which the value is saved against
*  @return  void
*/
function the_field($selector, $post_id = \false, $format_value = \true)
{
}
/**
 * This function will return an array containing all the field data for a given field_name.
 *
 * @since 3.6
 * @date  3/02/13
 *
 * @param string $selector     The field name or key.
 * @param mixed  $post_id      The post_id of which the value is saved against.
 * @param bool   $format_value Whether to format the field value.
 * @param bool   $load_value   Whether to load the field value.
 *
 * @return array $field
 */
function get_field_object($selector, $post_id = \false, $format_value = \true, $load_value = \true)
{
}
/**
*  acf_get_object_field
*
*  This function will return a field for the given selector.
*  It will also review the field_reference to ensure the correct field is returned which makes it useful for the template API
*
*  @type    function
*  @date    4/08/2015
*  @since   5.2.3
*
*  @param   mixed $selector identifyer of field. Can be an ID, key, name or post object
*  @param   mixed $post_id the post_id of which the value is saved against
*  @param   boolean $strict if true, return a field only when a field key is found.
*  @return  array $field
*/
function acf_maybe_get_field($selector, $post_id = \false, $strict = \true)
{
}
/**
*  acf_maybe_get_sub_field
*
*  This function will attempt to find a sub field
*
*  @type    function
*  @date    3/10/2016
*  @since   5.4.0
*
*  @param   int $post_id
*  @return  int $post_id
*/
function acf_maybe_get_sub_field($selectors, $post_id = \false, $strict = \true)
{
}
/**
*  get_fields()
*
*  This function will return an array containing all the custom field values for a specific post_id.
*  The function is not very elegant and wastes a lot of PHP memory / SQL queries if you are not using all the values.
*
*  @type    function
*  @since   3.6
*  @date    29/01/13
*
*  @param   mixed $post_id the post_id of which the value is saved against
*  @param   boolean $format_value whether or not to format the field value
*  @return  array associative array where field name => field value
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
*  @type    function
*  @since   3.6
*  @date    29/01/13
*
*  @param   mixed $post_id the post_id of which the value is saved against
*  @param   boolean $format_value whether or not to format the field value
*  @param   boolean $load_value whether or not to load the field value
*  @return  array associative array where field name => field
*/
function get_field_objects($post_id = \false, $format_value = \true, $load_value = \true)
{
}
/**
 * have_rows
 *
 * Checks if a field (such as Repeater or Flexible Content) has any rows of data to loop over.
 * This function is intended to be used in conjunction with the_row() to step through available values.
 *
 * @date    2/09/13
 * @since   4.3.0
 *
 * @param   string $selector The field name or field key.
 * @param   mixed  $post_id The post ID where the value is saved. Defaults to the current post.
 * @return  bool
 */
function have_rows($selector, $post_id = \false)
{
}
/**
*  the_row
*
*  This function will progress the global repeater or flexible content value 1 row
*
*  @type    function
*  @date    2/09/13
*  @since   4.3.0
*
*  @param   void
*  @return  array the current row data
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
*  @type    function
*  @date    16/05/2016
*  @since   5.3.8
*
*  @param   string $selector
*  @return  array
*/
function get_row_sub_field($selector)
{
}
/**
*  get_row_sub_value
*
*  This function is used inside a 'has_sub_field' while loop to return a sub field value
*
*  @type    function
*  @date    16/05/2016
*  @since   5.3.8
*
*  @param   string $selector
*  @return  mixed
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
*  @type    function
*  @date    26/10/13
*  @since   5.0.0
*
*  @param   boolean $hard_reset completely wipe the global variable, or just unset the active row
*  @return  boolean
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
*  @type    function
*  @since   1.0.3
*  @date    29/01/13
*
*  @param   string $field_name the field name
*  @param   mixed $post_id the post_id of which the value is saved against
*  @return  boolean
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
*  @type    function
*  @since   1.0.3
*  @date    29/01/13
*
*  @param   string $field_name the field name
*  @return  mixed
*/
function get_sub_field($selector = '', $format_value = \true)
{
}
/**
*  the_sub_field()
*
*  This function is the same as echo get_sub_field
*
*  @type    function
*  @since   1.0.3
*  @date    29/01/13
*
*  @param   string $field_name the field name
*  @return  void
*/
function the_sub_field($field_name, $format_value = \true)
{
}
/**
*  get_sub_field_object()
*
*  This function is used inside a 'has_sub_field' while loop to return a sub field object
*
*  @type    function
*  @since   3.5.8.1
*  @date    29/01/13
*
*  @param   string $child_name the field name
*  @return  array
*/
function get_sub_field_object($selector, $format_value = \true, $load_value = \true)
{
}
/**
*  get_row_layout()
*
*  This function will return a string representation of the current row layout within a 'have_rows' loop
*
*  @type    function
*  @since   3.0.6
*  @date    29/01/13
*
*  @param   void
*  @return  string
*/
function get_row_layout()
{
}
/**
 * This function is used to add basic shortcode support for the ACF plugin
 * eg. [acf field="heading" post_id="123" format_value="1"]
 *
 * @since 1.1.1
 * @date  29/01/13
 *
 * @param array $atts The shortcode attributes.
 *
 * @return string
 */
function acf_shortcode($atts)
{
}
/**
*  update_field()
*
*  This function will update a value in the database
*
*  @type    function
*  @since   3.1.9
*  @date    29/01/13
*
*  @param   string $selector the field name or key
*  @param   mixed $value the value to save in the database
*  @param   mixed $post_id the post_id of which the value is saved against
*  @return  boolean
*/
function update_field($selector, $value, $post_id = \false)
{
}
/**
*  update_sub_field
*
*  This function will update a value of a sub field in the database
*
*  @type    function
*  @date    2/04/2014
*  @since   5.0.0
*
*  @param   mixed $selector the sub field name or key, or an array of ancestors
*  @param   mixed $value the value to save in the database
*  @param   mixed $post_id the post_id of which the value is saved against
*  @return  boolean
*/
function update_sub_field($selector, $value, $post_id = \false)
{
}
/**
*  delete_field()
*
*  This function will remove a value from the database
*
*  @type    function
*  @since   3.1.9
*  @date    29/01/13
*
*  @param   string $selector the field name or key
*  @param   mixed $post_id the post_id of which the value is saved against
*  @return  boolean
*/
function delete_field($selector, $post_id = \false)
{
}
/**
*  delete_sub_field
*
*  This function will delete a value of a sub field in the database
*
*  @type    function
*  @date    2/04/2014
*  @since   5.0.0
*
*  @param   mixed $selector the sub field name or key, or an array of ancestors
*  @param   mixed $value the value to save in the database
*  @param   mixed $post_id the post_id of which the value is saved against
*  @return  boolean
*/
function delete_sub_field($selector, $post_id = \false)
{
}
/**
*  add_row
*
*  This function will add a row of data to a field
*
*  @type    function
*  @date    16/10/2015
*  @since   5.2.3
*
*  @param   string $selector
*  @param   array $row
*  @param   mixed $post_id
*  @return  boolean
*/
function add_row($selector, $row = \false, $post_id = \false)
{
}
/**
*  add_sub_row
*
*  This function will add a row of data to a field
*
*  @type    function
*  @date    16/10/2015
*  @since   5.2.3
*
*  @param   string $selector
*  @param   array $row
*  @param   mixed $post_id
*  @return  boolean
*/
function add_sub_row($selector, $row = \false, $post_id = \false)
{
}
/**
*  update_row
*
*  This function will update a row of data to a field
*
*  @type    function
*  @date    19/10/2015
*  @since   5.2.3
*
*  @param   string $selector
*  @param   int $i
*  @param   array $row
*  @param   mixed $post_id
*  @return  boolean
*/
function update_row($selector, $i = 1, $row = \false, $post_id = \false)
{
}
/**
*  update_sub_row
*
*  This function will add a row of data to a field
*
*  @type    function
*  @date    16/10/2015
*  @since   5.2.3
*
*  @param   string $selector
*  @param   array $row
*  @param   mixed $post_id
*  @return  boolean
*/
function update_sub_row($selector, $i = 1, $row = \false, $post_id = \false)
{
}
/**
*  delete_row
*
*  This function will delete a row of data from a field
*
*  @type    function
*  @date    19/10/2015
*  @since   5.2.3
*
*  @param   string $selector
*  @param   int $i
*  @param   mixed $post_id
*  @return  boolean
*/
function delete_row($selector, $i = 1, $post_id = \false)
{
}
/**
*  delete_sub_row
*
*  This function will add a row of data to a field
*
*  @type    function
*  @date    16/10/2015
*  @since   5.2.3
*
*  @param   string $selector
*  @param   array $row
*  @param   mixed $post_id
*  @return  boolean
*/
function delete_sub_row($selector, $i = 1, $post_id = \false)
{
}
/**
*  Depreceated Functions
*
*  These functions are outdated
*
*  @type    function
*  @date    4/03/2014
*  @since   1.0.0
*
*  @param   void
*  @return  void
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
*  @date    7/10/13
*  @since   5.0.0
*
*  @param   array $args An array of args used in the get_taxonomies() function.
*  @return  array An array of taxonomy names.
*/
function acf_get_taxonomies($args = array())
{
}
/**
 *  acf_get_taxonomies_for_post_type
 *
 *  Returns an array of taxonomies for a given post type(s)
 *
 *  @date    7/9/18
 *  @since   5.7.5
 *
 *  @param   string|array $post_types The post types to compare against.
 *  @return  array
 */
function acf_get_taxonomies_for_post_type($post_types = 'post')
{
}
/**
*  acf_get_taxonomy_labels
*
*  Returns an array of taxonomies in the format "name => label" for use in a select field.
*
*  @date    3/8/18
*  @since   5.7.2
*
*  @param   array $taxonomies Optional. An array of specific taxonomies to return.
*  @return  array
*/
function acf_get_taxonomy_labels($taxonomies = array())
{
}
/**
 *  acf_get_term_title
 *
 *  Returns the title for this term object.
 *
 *  @date    10/9/18
 *  @since   5.0.0
 *
 *  @param   object $term The WP_Term object.
 *  @return  string
 */
function acf_get_term_title($term)
{
}
/**
 *  acf_get_grouped_terms
 *
 *  Returns an array of terms for the given query $args and groups by taxonomy name.
 *
 *  @date    2/8/18
 *  @since   5.7.2
 *
 *  @param   array $args An array of args used in the get_terms() function.
 *  @return  array
 */
function acf_get_grouped_terms($args)
{
}
/**
 *  _acf_terms_clauses
 *
 *  Used in the 'terms_clauses' filter to order terms by taxonomy name.
 *
 *  @date    2/8/18
 *  @since   5.7.2
 *
 *  @param   array $pieces     Terms query SQL clauses.
 *  @param   array $taxonomies An array of taxonomies.
 *  @param   array $args       An array of terms query arguments.
 *  @return  array $pieces
 */
function _acf_terms_clauses($pieces, $taxonomies, $args)
{
}
/**
 *  acf_get_pretty_taxonomies
 *
 *  Deprecated in favor of acf_get_taxonomy_labels() function.
 *
 *  @date        7/10/13
 *  @since       5.0.0
 *  @deprecated  5.7.2
 */
function acf_get_pretty_taxonomies($taxonomies = array())
{
}
/**
 *  acf_get_term
 *
 *  Similar to get_term() but with some extra functionality.
 *
 *  @date    19/8/18
 *  @since   5.7.3
 *
 *  @param   mixed  $term_id The term ID or a string of "taxonomy:slug".
 *  @param   string $taxonomy The taxonomyname.
 *  @return  WP_Term
 */
function acf_get_term($term_id, $taxonomy = '')
{
}
/**
 *  acf_encode_term
 *
 *  Returns a "taxonomy:slug" string for a given WP_Term.
 *
 *  @date    27/8/18
 *  @since   5.7.4
 *
 *  @param   WP_Term $term The term object.
 *  @return  string
 */
function acf_encode_term($term)
{
}
/**
 *  acf_decode_term
 *
 *  Decodes a "taxonomy:slug" string into an array of taxonomy and slug.
 *
 *  @date    27/8/18
 *  @since   5.7.4
 *
 *  @param   WP_Term $term The term object.
 *  @return  string
 */
function acf_decode_term($string)
{
}
/**
 *  acf_get_encoded_terms
 *
 *  Returns an array of WP_Term objects from an array of encoded strings
 *
 *  @date    9/9/18
 *  @since   5.7.5
 *
 *  @param   array $values The array of encoded strings.
 *  @return  array
 */
function acf_get_encoded_terms($values)
{
}
/**
 *  acf_get_choices_from_terms
 *
 *  Returns an array of choices from the terms provided.
 *
 *  @date    8/9/18
 *  @since   5.7.5
 *
 *  @param   array  $values and array of WP_Terms objects or encoded strings.
 *  @param   string $format The value format (term_id, slug).
 *  @return  array
 */
function acf_get_choices_from_terms($terms, $format = 'term_id')
{
}
/**
 *  acf_get_choices_from_grouped_terms
 *
 *  Returns an array of choices from the grouped terms provided.
 *
 *  @date    8/9/18
 *  @since   5.7.5
 *
 *  @param   array  $value A grouped array of WP_Terms objects.
 *  @param   string $format The value format (term_id, slug).
 *  @return  array
 */
function acf_get_choices_from_grouped_terms($value, $format = 'term_id')
{
}
/**
 *  acf_get_choice_from_term
 *
 *  Returns an array containing the id and text for this item.
 *
 *  @date    10/9/18
 *  @since   5.7.6
 *
 *  @param   object $item The item object such as WP_Post or WP_Term.
 *  @param   string $format The value format (term_id, slug)
 *  @return  array
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
 * acf_get_compatibility
 *
 * Returns true if compatibility is enabled for the given component.
 *
 * @date    20/1/15
 * @since   5.1.5
 *
 * @param   string $name The name of the component to check.
 * @return  bool
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
 * acf_get_fields_by_id
 *
 * Returns and array of fields for the given $parent_id.
 *
 * @date    27/02/2014
 * @since   5.0.0.
 * @deprecated  5.7.11
 *
 * @param   int $parent_id The parent ID.
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
 * @param   string $option The option name.
 * @param   string $value The option value.
 * @param   string $autoload An optional autoload value.
 * @return  bool
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
*  acf_register_field_type
*
*  alias of acf()->fields->register_field_type()
*
*  @type    function
*  @date    31/5/17
*  @since   5.6.0
*
*  @param   void
*  @return  void
*/
function acf_register_field_type($class)
{
}
/**
*  acf_register_field_type_info
*
*  alias of acf()->fields->register_field_type_info()
*
*  @type    function
*  @date    31/5/17
*  @since   5.6.0
*
*  @param   void
*  @return  void
*/
function acf_register_field_type_info($info)
{
}
/**
*  acf_get_field_type
*
*  alias of acf()->fields->get_field_type()
*
*  @type    function
*  @date    31/5/17
*  @since   5.6.0
*
*  @param   void
*  @return  void
*/
function acf_get_field_type($name)
{
}
/**
*  acf_get_field_types
*
*  alias of acf()->fields->get_field_types()
*
*  @type    function
*  @date    31/5/17
*  @since   5.6.0
*
*  @param   void
*  @return  void
*/
function acf_get_field_types($args = array())
{
}
/**
 *  acf_get_field_types_info
 *
 *  Returns an array containing information about each field type
 *
 *  @date    18/6/18
 *  @since   5.6.9
 *
 *  @param   type $var Description. Default.
 *  @return  type Description.
 */
function acf_get_field_types_info($args = array())
{
}
/**
*  acf_is_field_type
*
*  alias of acf()->fields->is_field_type()
*
*  @type    function
*  @date    31/5/17
*  @since   5.6.0
*
*  @param   void
*  @return  void
*/
function acf_is_field_type($name = '')
{
}
/**
*  acf_get_field_type_prop
*
*  This function will return a field type's property
*
*  @type    function
*  @date    1/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  array
*/
function acf_get_field_type_prop($name = '', $prop = '')
{
}
/**
*  acf_get_field_type_label
*
*  This function will return the label of a field type
*
*  @type    function
*  @date    1/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  array
*/
function acf_get_field_type_label($name = '')
{
}
/**
*  acf_field_type_exists (deprecated)
*
*  deprecated in favour of acf_is_field_type()
*
*  @type    function
*  @date    1/10/13
*  @since   5.0.0
*
*  @param   string $type
*  @return  boolean
*/
function acf_field_type_exists($type = '')
{
}
/**
*  acf_get_grouped_field_types
*
*  Returns an multi-dimentional array of field types "name => label" grouped by category
*
*  @type    function
*  @date    1/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  array
*/
function acf_get_grouped_field_types()
{
}
// class_exists check
/**
*  Functions
*
*  alias of acf()->form->functions
*
*  @type    function
*  @date    11/06/2014
*  @since   5.0.0
*
*  @param   void
*  @return  void
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
 * acf_get_locale
 *
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
 * @return  bool
 */
function acf_is_local_enabled()
{
}
/**
 * acf_get_local_store
 *
 * Returns either local store or a dummy store for the given name.
 *
 * @date    23/1/19
 * @since   5.7.10
 *
 * @param   string $name The store name (fields|groups).
 * @return  ACF_Data
 */
function acf_get_local_store($name = '')
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
 * @return  bool
 */
function acf_add_local_field_group($field_group)
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
 * @return  bool
 */
function acf_remove_local_field_group($key = '')
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
 * @return  bool
 */
function acf_is_local_field_group($key = '')
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
 * @param   string $key The field group group key.
 * @return  bool
 */
function acf_is_local_field_group_key($key = '')
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
 * @return  bool
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
 * @return  int
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
 * @param   array $field The field array.
 * @param   bool  $prepared Whether or not the field has already been prepared for import.
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
 * @return  bool
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
 * @return  bool
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
 * @return  bool
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
 * @return  bool
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
 * _acf_apply_is_local_field_key
 *
 * Returns true if is a local key.
 *
 * @date    23/1/19
 * @since   5.7.10
 *
 * @param   bool   $bool The result.
 * @param   string $id The identifier.
 * @return  bool
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
 * @param   bool   $bool The result.
 * @param   string $id The identifier.
 * @return  bool
 */
function _acf_apply_is_local_field_group_key($bool, $id)
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
 * @param   type $var Description. Default.
 * @return  type Description.
 */
function acf_get_local_json_files()
{
}
/**
 * Saves a field group JSON file.
 *
 * @date    5/12/2014
 * @since   5.1.5
 *
 * @param   array $field_group The field group.
 * @return  bool
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
 * @return  bool True on success.
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
 * @param   array $rule The location rule.
 * @param   array $screen The screen args.
 * @param   array $field The field group array.
 * @return  bool
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
 * @param   array $screen The screen args.
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
*  acf_add_loop
*
*  alias of acf()->loop->add_loop()
*
*  @type    function
*  @date    6/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  void
*/
function acf_add_loop($loop = array())
{
}
/**
*  acf_update_loop
*
*  alias of acf()->loop->update_loop()
*
*  @type    function
*  @date    6/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  void
*/
function acf_update_loop($i = 'active', $key = \null, $value = \null)
{
}
/**
*  acf_get_loop
*
*  alias of acf()->loop->get_loop()
*
*  @type    function
*  @date    6/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  void
*/
function acf_get_loop($i = 'active', $key = \null)
{
}
/**
*  acf_remove_loop
*
*  alias of acf()->loop->remove_loop()
*
*  @type    function
*  @date    6/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  void
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
 * @param string|int $post_id
 * @param array      $field
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
*  acf_save_post_revision
*
*  This function will copy meta from a post to it's latest revision
*
*  @type    function
*  @date    26/09/2016
*  @since   5.4.0
*
*  @param   int $post_id
*  @return  void
*/
function acf_save_post_revision($post_id = 0)
{
}
/**
*  acf_get_post_latest_revision
*
*  This function will return the latest revision for a given post
*
*  @type    function
*  @date    25/06/2016
*  @since   5.3.8
*
*  @param   int $post_id
*  @return  int $post_id
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
 *  @date    9/4/17
 *  @since   5.5.12
 *
 *  @param   void
 *  @return  object
 */
function acf_updates()
{
}
/**
 *  acf_register_plugin_update
 *
 *  Alias of acf_updates()->add_plugin().
 *
 *  @type    function
 *  @date    12/4/17
 *  @since   5.5.10
 *
 *  @param   array $plugin
 *  @return  void
 */
function acf_register_plugin_update($plugin)
{
}
/**
 *  acf_has_upgrade
 *
 *  Returns true if this site has an upgrade avaialble.
 *
 *  @date    24/8/18
 *  @since   5.7.4
 *
 *  @param   void
 *  @return  bool
 */
function acf_has_upgrade()
{
}
/**
 *  acf_upgrade_all
 *
 *  Returns true if this site has an upgrade avaialble.
 *
 *  @date    24/8/18
 *  @since   5.7.4
 *
 *  @param   void
 *  @return  bool
 */
function acf_upgrade_all()
{
}
/**
 *  acf_get_db_version
 *
 *  Returns the ACF DB version.
 *
 *  @date    10/09/2016
 *  @since   5.4.0
 *
 *  @param   void
 *  @return  string
 */
function acf_get_db_version()
{
}
/**
*  acf_update_db_version
*
*  Updates the ACF DB version.
*
*  @date    10/09/2016
*  @since   5.4.0
*
*  @param   string $version The new version.
*  @return  void
*/
function acf_update_db_version($version = '')
{
}
/**
 *  acf_upgrade_500
 *
 *  Version 5 introduces new post types for field groups and fields.
 *
 *  @date    23/8/18
 *  @since   5.7.4
 *
 *  @param   void
 *  @return  void
 */
function acf_upgrade_500()
{
}
/**
 *  acf_upgrade_500_field_groups
 *
 *  Upgrades all ACF4 field groups to ACF5
 *
 *  @date    23/8/18
 *  @since   5.7.4
 *
 *  @param   void
 *  @return  void
 */
function acf_upgrade_500_field_groups()
{
}
/**
 *  acf_upgrade_500_field_group
 *
 *  Upgrades a ACF4 field group to ACF5
 *
 *  @date    23/8/18
 *  @since   5.7.4
 *
 *  @param   object $ofg The old field group post object.
 *  @return  array $nfg  The new field group array.
 */
function acf_upgrade_500_field_group($ofg)
{
}
/**
 *  acf_upgrade_500_fields
 *
 *  Upgrades all ACF4 fields to ACF5 from a specific field group
 *
 *  @date    23/8/18
 *  @since   5.7.4
 *
 *  @param   object $ofg The old field group post object.
 *  @param   array  $nfg  The new field group array.
 *  @return  void
 */
function acf_upgrade_500_fields($ofg, $nfg)
{
}
/**
 *  acf_upgrade_500_field
 *
 *  Upgrades a ACF4 field to ACF5
 *
 *  @date    23/8/18
 *  @since   5.7.4
 *
 *  @param   array $field The old field.
 *  @return  array $field The new field.
 */
function acf_upgrade_500_field($field)
{
}
/**
 *  acf_upgrade_550
 *
 *  Version 5.5 adds support for the wp_termmeta table added in WP 4.4.
 *
 *  @date    23/8/18
 *  @since   5.7.4
 *
 *  @param   void
 *  @return  void
 */
function acf_upgrade_550()
{
}
/**
 *  acf_upgrade_550_termmeta
 *
 *  Upgrades all ACF4 termmeta saved in wp_options to the wp_termmeta table.
 *
 *  @date    23/8/18
 *  @since   5.7.4
 *
 *  @param   void
 *  @return  void
 */
function acf_upgrade_550_termmeta()
{
}
/**
*  acf_wp_upgrade_550_termmeta
*
*  When the database is updated to support term meta, migrate ACF term meta data across.
*
*  @date    23/8/18
*  @since   5.7.4
*
*  @param   string $wp_db_version The new $wp_db_version.
*  @param   string $wp_current_db_version The old (current) $wp_db_version.
*  @return  void
*/
function acf_wp_upgrade_550_termmeta($wp_db_version, $wp_current_db_version)
{
}
/**
 *  acf_upgrade_550_taxonomy
 *
 *  Upgrades all ACF4 termmeta for a specific taxonomy.
 *
 *  @date    24/8/18
 *  @since   5.7.4
 *
 *  @param   string $taxonomy The taxonomy name.
 *  @return  void
 */
function acf_upgrade_550_taxonomy($taxonomy)
{
}
// class_exists check
/**
*  Public functions
*
*  alias of acf()->validation->function()
*
*  @type    function
*  @date    6/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  void
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
*  @type    function
*  @date    25/11/2013
*  @since   5.0.0
*
*  @param   boolean $show_errors if true, errors will be shown via a wp_die screen
*  @return  boolean
*/
function acf_validate_save_post($show_errors = \false)
{
}
/**
*  acf_validate_values
*
*  This function will validate an array of field values
*
*  @type    function
*  @date    6/10/13
*  @since   5.0.0
*
*  @param   values (array)
*  @param   string $input_prefix
*  @return  void
*/
function acf_validate_values($values, $input_prefix = '')
{
}
/**
*  acf_validate_value
*
*  This function will validate a field's value
*
*  @type    function
*  @date    6/10/13
*  @since   5.0.0
*
*  @param   void
*  @return  void
*/
function acf_validate_value($value, $field, $input)
{
}
/**
 * acf_register_block_type
 *
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
 * acf_register_block
 *
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
 * acf_has_block_type
 *
 * Returns true if a block type exists for the given name.
 *
 * @date    18/2/19
 * @since   5.7.12
 *
 * @param   string $name The block type name.
 * @return  bool
 */
function acf_has_block_type($name)
{
}
/**
 * acf_get_block_types
 *
 * Returns an array of all registered block types.
 *
 * @date    18/2/19
 * @since   5.7.12
 *
 * @param   void
 * @return  array
 */
function acf_get_block_types()
{
}
/**
 * acf_get_block_types
 *
 * Returns a block type for the given name.
 *
 * @date    18/2/19
 * @since   5.7.12
 *
 * @param   string $name The block type name.
 * @return  array|null
 */
function acf_get_block_type($name)
{
}
/**
 * acf_remove_block_type
 *
 * Removes a block type for the given name.
 *
 * @date    18/2/19
 * @since   5.7.12
 *
 * @param   string $name The block type name.
 * @return  void
 */
function acf_remove_block_type($name)
{
}
/**
 * acf_get_block_type_default_attributes
 *
 * Returns an array of default attribute settings for a block type.
 *
 * @date    19/11/18
 * @since   5.8.0
 *
 * @param   void
 * @return  array
 */
function acf_get_block_type_default_attributes($block_type)
{
}
/**
 * acf_validate_block_type
 *
 * Validates a block type ensuring all settings exist.
 *
 * @date    10/4/18
 * @since   5.8.0
 *
 * @param   array $block The block settings.
 * @return  array
 */
function acf_validate_block_type($block)
{
}
/**
 * acf_prepare_block
 *
 * Prepares a block for use in render_callback by merging in all settings and attributes.
 *
 * @date    19/11/18
 * @since   5.8.0
 *
 * @param   array $block The block props.
 * @return  array
 */
function acf_prepare_block($block)
{
}
/**
 * The render callback for all ACF blocks.
 *
 * @date    28/10/20
 * @since   5.9.2
 *
 * @param   array    $attributes The block attributes.
 * @param   string   $content The block content.
 * @param   WP_Block $wp_block The block instance (since WP 5.5).
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
 * @param   string   $content The block content.
 * @param   bool     $is_preview Whether or not the block is being rendered for editing preview.
 * @param   int      $post_id The current post being edited or viewed.
 * @param   WP_Block $wp_block The block instance (since WP 5.5).
 * @param   array    $context The block context array.
 * @return  string   The block HTML.
 */
function acf_rendered_block($attributes, $content = '', $is_preview = \false, $post_id = 0, $wp_block = \null, $context = \false)
{
}
/**
 * Renders the block HTML.
 *
 * @date    19/2/19
 * @since   5.7.12
 *
 * @param   array    $attributes The block attributes.
 * @param   string   $content The block content.
 * @param   bool     $is_preview Whether or not the block is being rendered for editing preview.
 * @param   int      $post_id The current post being edited or viewed.
 * @param   WP_Block $wp_block The block instance (since WP 5.5).
 * @param   array    $context The block context array.
 * @return  void
 */
function acf_render_block($attributes, $content = '', $is_preview = \false, $post_id = 0, $wp_block = \null, $context = \false)
{
}
/**
 * acf_get_block_fields
 *
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
 * acf_enqueue_block_assets
 *
 * Enqueues and localizes block scripts and styles.
 *
 * @date    28/2/19
 * @since   5.7.13
 *
 * @param   void
 * @return  void
 */
function acf_enqueue_block_assets()
{
}
/**
 * acf_enqueue_block_type_assets
 *
 * Enqueues scripts and styles for a specific block type.
 *
 * @date    28/2/19
 * @since   5.7.13
 *
 * @param   array $block_type The block type settings.
 * @return  void
 */
function acf_enqueue_block_type_assets($block_type)
{
}
/**
 * acf_ajax_fetch_block
 *
 * Handles the ajax request for block data.
 *
 * @date    28/2/19
 * @since   5.7.13
 *
 * @param   void
 * @return  void
 */
function acf_ajax_fetch_block()
{
}
/**
 * acf_parse_save_blocks
 *
 * Parse content that may contain HTML block comments and saves ACF block meta.
 *
 * @date    27/2/19
 * @since   5.7.13
 *
 * @param   string $text Content that may contain HTML block comments.
 * @return  string
 */
function acf_parse_save_blocks($text = '')
{
}
/**
 * acf_parse_save_blocks_callback
 *
 * Callback used in preg_replace to modify ACF Block comment.
 *
 * @date    1/3/19
 * @since   5.7.13
 *
 * @param   array $matches The preg matches.
 * @return  string
 */
function acf_parse_save_blocks_callback($matches)
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
 *  acf_options_page
 *
 *  This function will return the options page instance
 *
 *  @type    function
 *  @date    9/6/17
 *  @since   5.6.0
 *
 *  @param   void
 *  @return  object
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
 * @date 29/09/2021
 * @since 5.11.0
 */
function acf_pro_check_defined_license()
{
}
/**
 *  Set the automatic activation failure transient
 *
 *  @date    11/10/2021
 *  @since   5.11.0
 *
 *  @param   string $error_text string containing the error text message.
 *  @param   string $license_key the license key that was used during the failed activation.
 *
 *  @return void
 */
function acf_pro_set_activation_failure_transient($error_text, $license_key)
{
}
/**
 *  Get the automatic activation failure transient
 *
 *  @date    11/10/2021
 *  @since   5.11.0
 *
 *  @return array|false Activation failure transient array, or false if it's not set.
 */
function acf_pro_get_activation_failure_transient()
{
}
/**
 * Display the stored activation error
 *
 * @date    11/10/2021
 * @since   5.11.0
 */
function acf_pro_display_activation_error()
{
}
/**
 *  This function will return the license
 *
 *  @type    function
 *  @date    20/09/2016
 *  @since   5.4.0
 *
 *  @return  $license    Activated license array
 */
function acf_pro_get_license()
{
}
/**
 *  This function will return the license key
 *
 *  @type    function
 *  @date    20/09/2016
 *  @since   5.4.0
 *
 *  @param   boolean $skip_url_check Skip the check of the current site url.
 *  @return  string $license_key
 */
function acf_pro_get_license_key($skip_url_check = \false)
{
}
/**
 *  This function will update the DB license
 *
 *  @type    function
 *  @date    20/09/2016
 *  @since   5.4.0
 *
 *  @param   string $key    The license key
 *  @return  bool           The result of the update_option call
 */
function acf_pro_update_license($key = '')
{
}
/**
 * Get count of registered ACF Blocks
 *
 * @return int
 */
function acf_pro_get_registered_block_count()
{
}
/**
 * Activates the submitted license key
 * Formally ACF_Admin_Updates::activate_pro_licence since 5.0.0
 *
 * @date    30/09/2021
 * @since   5.11.0
 *
 * @param   string  $license_key    License key to activate
 * @param   boolean $silent         Return errors rather than displaying them
 * @return  mixed   $response       A wp-error instance, or an array with a boolean success key, and string message key
 */
function acf_pro_activate_license($license_key, $silent = \false)
{
}
/**
 * Deactivates the registered license key.
 * Formally ACF_Admin_Updates::deactivate_pro_licence since 5.0.0
 *
 * @date    30/09/2021
 * @since   5.11.0
 *
 * @param   bool $silent     Return errors rather than displaying them
 * @return  mixed   $response   A wp-error instance, or an array with a boolean success key, and string message key
 */
function acf_pro_deactivate_license($silent = \false)
{
}
/**
 * Adds an admin notice using the provided WP_Error.
 *
 * @date    14/1/19
 * @since   5.7.10
 *
 * @param   WP_Error $wp_error The error to display.
 */
function display_wp_activation_error($wp_error)
{
}