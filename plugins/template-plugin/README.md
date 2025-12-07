# Template Plugin

A starter template for WordPress plugin development.

## How to Use This Template

1. **Duplicate the Template**: Copy the entire `template-plugin` folder and rename it to your plugin name (use hyphens, e.g., `my-awesome-plugin`)

2. **Update Plugin Headers**: Edit the main PHP file and update:
   - Plugin Name
   - Plugin URI
   - Description
   - Author
   - Author URI
   - Text Domain (must match your plugin folder name)

3. **Rename Files**: Rename `template-plugin.php` to match your plugin name

4. **Update Function Names**: Replace all `template_plugin_` prefixes with your own plugin prefix (use your plugin name with underscores)

5. **Create Plugin Structure**: Add additional files as needed:
   ```
   your-plugin/
   ├── your-plugin.php          (main file)
   ├── README.md
   ├── languages/
   │   └── your-plugin.pot      (translation file)
   ├── includes/                (classes, functions)
   ├── admin/                   (admin-related code)
   ├── public/                  (frontend code)
   ├── assets/
   │   ├── css/
   │   ├── js/
   │   └── images/
   └── templates/               (template files)
   ```