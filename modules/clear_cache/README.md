# clear_cache
# Drupal clear_cache
		=> This is a Drupal 7 module.
		=> This basic module Clears All Drupal Cache (including views cache).
		=> Adds a menu item on the main admin menu.
		=> Clears cache based on user permissions.

		=> Adds permissions for clearing Drupal cache.
		=> Clearing caches is relatively harmless.
		=> Sites may slow down while site cache rebuilds.
		=> Note: Clear Cache does not clear web browser cache,
		=> This will need to be cleared separately. :p.
		=> Adds menu link titled "Clear Cache" on administrative toolbar.

------ ----  WHATS NEW on 7.x-2.x --------------
=> cleaned some code for faster load
=> the views module is no longer required, to install the module.
=> added a drush command with the alias 'batman'.
To clear cache after installing the clear_cache module, use "drush batman" to clear cache including views cache


-----------Installation Instructions manual-------------------------------------

		1. Download and unzip clear_cache.

		2. Drag "clear_cache" file to your "sites/all/modules" folder. 
		You can create a "contrib" folder inside "sites/all/modules" if you prefer.

		3. Enable the "clear_cache" module,under the "People" menu, select the "permissions" tab. 
		Enable clear_cache for the various user roles.

		4. Do not enable "clear_cache" for anonymous users!

		5. "Clear Cache" menu item will now be available (admin menu).

		6. Refresh home page.

		7. If you prefer, you can also use your ssh tool, and execute the command "drush".
		This will list your available drush commands. You should see "batman-clear-cache" listed under your "Other commands" on your drush list of commands

		8. If this is not the case, you need to clear your drush cache. so run the command "drush cache-clear drush" 

		9. This will clear your drush cache and add newly added commands and extensions

		10. You are now ready to run "drush batman". 
