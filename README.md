# SNAP Drupal 

This README contains first-time dev setup instructions as well as a narrative section describing how to configure Drupal, through its GUI, to create the content types/views/etc as required to support development.

## Initial setup

We use VDD for the local setup.  [Follow their tutorial](https://drupal.org/node/2008792), using [the 8.x-1.0-alpha4 version](http://ftp.drupal.org/files/projects/vdd-8.x-1.0-alpha4.tar.gz) configuration.  There's some hiccups to overcome here due to some bugs in the VDD project at this time, though.  Here's the steps to follow:

 1. Download [the 8.x-1.0-alpha4 version](http://ftp.drupal.org/files/projects/vdd-8.x-1.0-alpha4.tar.gz) of the project.
 1. Move the file to wherever you keep other work projects/repositories, then unpack it: ```tar -zxvf vdd-8.x-1.0-alpha4.tar.gz```
 1. Enter that directory, referred to hereafter as ```work/vdd```: ```cd work/vdd```
 1. Disconnect from VPN if you are connected - Vagrant doesn't play well with VPN (3/4/14 - this issue may get fixed soon)
 1. Replace ```work/vdd/config.json``` with this:
 
 ```json
{
  "vm": {
    "ip": "192.168.44.44",
    "memory": "2048",
    "synced_folders": [
      {
        "host_path": "data/",
        "guest_path": "/var/www",
        "type": "default"
      }
    ],
    "forwarded_ports": [
      {
        "guest_port": 80,
        "host_port": 8000,
        "protocol": "tcp"
      }
    ]
  },
  "vdd": {
    "sites": {
      "drupal7": {
        "account_name": "root",
        "account_pass": "root",
        "account_mail": "box@example.com",
        "site_name": "Drupal 7",
        "site_mail": "box@example.com",
        "vhost": {
          "document_root": "drupal7",
          "url": "localhost:8000",
          "alias": ["localhost:8000"]
        }
      }
    }
  }
}
```
 1. Change Apache's main DocumentRoot to ```/var/www/drupal7``` near the top of ```work/vdd/chef/cookbooks/core/vdd/templates/default/localhost.conf.erb```:

   ```
   DocumentRoot /var/www/drupal7
   ```
 1. ```vagrant up```
   1. If you receive the following error: ```ERROR: Cookbook vdd not found. If you're loading vdd from another cookbook, make sure you configure the dependency in your metadata```, add this to your **chef/solo.rb** in VDD: ```cookbook_path ["/vagrant/chef/cookbooks/berks", "/vagrant/chef/cookbooks/core", "/vagrant/chef/cookbooks/custom"]``` and comment out the line **chef.cookbook_paths** in the **Vagrantfile**.
 1. Get coffee.  When the image has launched...
 1. ```vagrant ssh```
 1. ```cd sites```
 1. ```rm -rf drupal7```
 1. ```drush dl drupal-7 --drupal-project-rename="drupal7"```
 1. ```drush @drupal7 si standard```
 1. Now we hook up our git repository.  First, exit the virtual machine.
 2. ```exit```
 3. ```cd data/drupal7/sites```
 4. ```rm -rf all```
 1. ```git clone https://github.com/ua-snap/snap-drupal.git```  (enter your Github username and password)
 1. ```mv snap-drupal all```
 1. Check the page again in your web browser.  If it loads the Drupal page, all is well and you can proceed to the next set of setup directions!

#### Post-install steps

The snap_bootstrap theme has external requirements on the ```bootstrap-sass``` project in Bower.  To install it:

```bash
cd /path/to/snap_bootstrap/
bower install
```

Four more steps need to happen here (first, install Compass per the note below, then pick it up here).

 1. Log into the Drupal web interface and switch the theme to "Snap Bootstrap"
 1. Grab current Drupal DB copy.  You probably can wrangle that with no more hints, but I'll prowl email and send one to you shortly.
 1. Grab current copy of "drupal-managed files."  These are files that live in /sites/default/files.  Get a sysadmin-type to grab you a fresh copy, then unzip that into the same spot locally.
 1. Compile the SASS:

```bash
cd /path/to/sites/all/themes/snap_bootstrap
compass watch
```

##### Refreshing database from Cerberus

To update the database on your local dev instance, you need to get a copy of the production database, move it to a shared folder that your virtual machine can see, and then load the database from within the virtual machine.  After you have a copy of the database on Cerberus, copy it (on your host computer) to `work/vdd/data/snapdb.sql`, then:

```bash
cd work/vdd/
vagrant ssh
cd sites
mysql -u root -p drupal7 < snapdb.sql
exit
```

### Install Compass

Compass is used for the SASS development.  On OSX, first [install Homebrew](http://brew.sh/) then ```brew install ruby```, then [install Compass](http://compass-style.org/install/).

### Editing files and connecting with Github

Vagrant and VDD together configure the virtual machine so that your host OS can see the files that are running on the virtual machine, so that you can use your preferred editor to make changes and push them to Github as usual.

The relevant directory where work happens is the Github repo we checked out in the directions above.  On your local machine, relative to the ```vdd``` directory, it's here:

```bash
vdd/data/drupal7/sites/all/
```

So, you can configure your editor to have a project based in that directory and work with it normally.

Since that's a normal Git repository, all the usual branch/push/pull operations happen as expected there.  In OSX Terminal:

```bash
cd vdd/data/drupal7/all
git status
git checkout -b new_branch
git commit -am"made some changes"
git push origin new_branch
git pull
```

These types of operations should work as expected.  VDD/Vagrant are taking care of the magic so that your code is running in the VM while you can interact with it easily in your host OS.
 
### Editing SASS, coding standards

Editing SASS is done by adding new includes to ```themes/snap/sass/styles.scss``` as required, at the bottom of that file.

Main site variables (colors, fonts, etc) are controlled in the ```_init.scss``` file.

Use the [guidelines on this page](git reset --hard remotes/origin/HEAD) regarding units for sizing fonts, etc.

### Apache Setup

To allow Apache to use the .htaccess file that comes with Drupal, change the following line in Apache's httpd.conf file inside the &lt;Directory "/var/www/snap"&gt; section:

```
AllowOverride All
```

To:

```
AllowOverride None
```

Then restart Apache so this change takes effect:

```bash
sudo service httpd restart
```

### Enabling Clean URLs

Clean URLs will not work unless the "AllowOverride All" directive has been set in the Apache configuration file. Refer to the Apache Setup step for more details. You can confirm that clean URLs are working by going to a Drupal page WITHOUT "?q=" in the URL. E.g.:

http://cerberus.snap.uaf.edu/about

Also, you must create a symbolic link to the .htaccess file found in this Git repo like below:

```bash
cd /path/to/drupal/
ln -s /path/to/drupal/sites/all/misc/.htaccess .htaccess
```

After you have confirmed that you can access a page in this way, visit the following page WITHOUT "?q=" in the URL (or this won't work):

http://cerberus.snap.uaf.edu/admin/config/search/clean-urls

Check the "Enable clean URLs" box and click the "Save configuration" button. From now on, Drupal will use clean URLs by default.

### Adding .htaccess file to Git repository

Drupal comes with an .htaccess file in the Drupal root directory. Our repository starts in the /sites/all directory. So, to set up the .htaccess file for version control (used for redirects, for example), we copied Drupal's .htaccess file into the /sites/all/misc directory and replaced the original path with a symbolic link:

```bash
cd /var/www/snap
sudo -u drupal rm .htaccess
sudo -u drupal ln -s sites/all/misc/.htaccess
```

## Site structure and configuration notes

### Navigation

Move "navigation" block to the "header" section of the site layout.  Disable the title of the block by setting it to ```<none>```.

### Setting up Media module

It turned out to be very important to install a particular version of the Media module (7.x-2.x-dev). The recommended release on the module's page is 7.x-1.4, but this version requires an old version of the File Entity module to work properly, and this older version of File Entity lacked the ability to set custom link labels in Media fields. So:

Download version 7.x-2.x-dev of the Media module here:

https://drupal.org/project/media

Download version 7.x-2.0-alpha3 of the File Entity module here:

https://drupal.org/project/file_entity

And download and install any other dependencies as needed.

### Setting up Date and Link modules

Download the Date and Link modules from here:

https://drupal.org/project/date
https://drupal.org/project/link

Extract them into the sites/all/modules directory and enable the following modules from the Modules page:

- Date  
- Date All Day  
- Date Popup
- Date Views
- Link

Date and Link will now be available field types when creating/editing a Drupal content type.

### Configuring CKEditor

#### Remove image button from Filtered HTML profile

Remove the image button from CKEditor's Filtered HTML profile since the Filtered HTML input format by default is not able to embed images. From the Configuration page, go to:

CKEditor -> Profiles -> Filtered HTML -> edit -> Editor Appearance -> Toolbar

And move the image button from the "Used buttons" section down to the "Available buttons" section.

#### Update CKEditor (July 2014)
Backstory: Sometimes weird and problematic tags like this appear in the underlying HTML when editing text with the rich text editor (CKEditor):
	<span class="line-height: 1.6;">TEXT</span>
Apparently this is actually a problem with Webkit (and Google's fork of it, Blink) and CKEditor has hitherto left the problem unaddressed, expecting the browsers to clean up their own mess. A new version of CKEditor, 4.4.1, was released May 2014 that appeared to finally fix most of this problem with the rest to be fixed in their next release, 4.4.2. We installed 4.4.1 in May; 4.4.2 (full version) was installed July 2014.

- Disable current CKEditor module.
- Move new CKEditor module folder into /modules/ckeditor.
- Re-enable CKEditor.

#### Edit CKEditor Profile (full)
Basic setup
- Text formats: full HTML

Security: defaults

Editor appearance
- drag/drop toolbar buttons to suit needs and/or change user interface color (first switch JQuery Update module to use version 1.5 or your changes to the toolbar won't save')
- Toolbar state on startup: expanded
- Default editor state: expanded
- Show RTE toggle: show
- Plugins: enable all
- Other settings: default

Advanced content filter: enabled

Cleanup and output
- Custom formatting options: Yes, select all

CSS
- Editor: Use theme CSS
- Predefined styles: CKEditor default

### Setting up IMCE file browser module

Download IMCE module, extract it into sites/all/modules, and enable it from the Modules page. Then from the Configuration page, change the following settings:

CKEditor -> Profiles -> Full HTML -> edit -> File Browser Settings:

File browser type (Link dialog window): None
File browser type (Image dialog window): IMCE
File browser type (Flash dialog window): IMCE

IMCE -> Role-profile assignments:

administrator: User-1
authenticated user: User-1


Advanced options
- Force pasting as plain text: disabled
- HTML entities: yes
- Spellchecker: yes
- Load ckeditor.config.js from theme path: no
- Custon JavaScript configuration: Enter this into the textarea:
```javascript
config.allowedContent = true;
config.height = '500px';  
```


### Configuring Collaborators view

Create a block-level view that displays all content of type Organization.  Then, configure the view this way to get the logos displayed as links:

 * Remove Title from Fields,
 * Add Collaborator Logo as a field, disable label for it
 * Add Website as a field, disable label, and configure that field to display hidden and with the "plain text" formatter,
 * Rearrange the fields so that Website is on top (so we can use values from it below),
 * Reconfigure Collaborator Logo, open Rewrite Results, check "Output this field as a link", put [field_website] in the "Link path" and check "External server URL".

Then, you can add the block to the relevant page.

### Configuration of home page content/template

The home page overrides the theme default template, in ```templates/page--front.tpl.php```, and content that may be more dynamic is put into a block that is displayed in the "Content" section of the home page.

### Setting up Projects entity references

First, we need to add a new display mode for the Collaborator content type.  Go to Structure &#x2192; Content Types &#x2192; Organizations &#x2192; "Manage Display" tab &#x2192; "Teaser" sub-tab (upper right).  Move the Collaborator Logo to be displayed, and hide the other fields and the label.  Set Format to "Image Link Formatter", click the settings gear and "Link image to" &#x2192 "Website (field_website)".

Next, edit the Projects content type.  Create a new field of type "entity reference", name "Collaborators", and when the screen pops up to configure that field, leave most things default but set the # of allowed values to (say) 10, choose type "Select List", and in the Entity Selection area, check "Organizations".

On the "Manage Display" tab, change the Collaborators field to "Rendered Entity", then click the settings gear on that row.  Change the view mode to "Teaser" to match the configuration we did above, and uncheck "Display Links".  Save.

Still in the "Manage Display" tab of Projects, create a new field group with label "Right Sidebar", label ```group_right_sidebar``` and format "Div".  Drag Image, Downloads, and Collaborators field under it (this is a bit slippery).  Click the settings gear and change "Fieldgroup settings" to "Open", Effect to "None", "Show Label" to "No".  Click Update, then Save.

Now we configure the "Teaser" view of the Project so it can be used on the page that lists all projects.  Structure &#x2192; Content Types &#x2192; edit Projects &#x2192; Manage Display tab &#x2192; Teaser subtab button.  Drag Project Image field above Description, change "Label" to Hidden, change format to Image Link formatter, click the settings gear, change "Link image to" Content, click Update then Save.

Finally, we create the view for the projects page.  Go to Structure &#x2192; Views &#x2192; Add new view.  View name "Projects", show content of type Project sorted by title, uncheck "Create a Page", check Create a Block, display format Teaser with links / without comments, 100 items per page, don't enable the pager.  On the next configuration page, under the "Fields" section, verify that it shows both "Website" and "Collaborator Logo" fields; click the "Website" field and configure it to be "Hidden," save, then click the "Collaborator Logo" field and change the Formatter to "Image Link Formatter".  Add it to the existing Projects page by going to the admin menu Structure &#x2192; Blocks and drag the View: Projects block into the Content area; click to edit it and put &lt;none&gt; for the title, then change it to only display on page 'projects'.  Save.

### Setting up Community Charts

Community Charts is a standalone webapp that is set up to run from the ```modules``` directory, though it's *not* a Drupal module&mdash;it's there so it's in our source control; implementing as a Drupal module would conflict with a number of existing libraries and would require some reworking of the source.

This non-module dwells in ```sites/all/modules/snap_community_charts```.  All steps below need to be done on the relevant Drupal server/Vagrant instance.

 1. Database: In MySQL, create a new database and user, then load the ```etc/charts.sql.bz2``` SQL dump into that user.  Assign sufficient permissions to the user to allow read access from localhost.
 1. Fonts: Unpack and copy all the TrueType fonts from ```etc/Lato.zip``` into the ```/usr/share/fonts``` directory, then run ```fc-cache``` to rebuild the font cache.  Use ```fc-list``` to verify that various Lato fonts have been installed.
 1. Scratch and web-visible directories: create directory/directories that will be used for scratch space as well as the location that Apache will serve the generated files from.  They can be the same directory.
 1. Make sure ImageMagick is installed for the chart export feature to work: ```sudo yum install ImageMagick```
 1. Configuration.  Copy the src/Config.php.example file and update the database configuration and the directory locations from the prior step.

### Setting up People

Set up the taxonomy for staff categories.  Main menu Structure > Taxonomy > Add Vocabulary.  Name it "Staff Categories".  Add 6 terms: Leaders, Faculty, Affiliated, Students, Staff, Alumni.

Go to Configuration > (People section) Account settings, then click on the "Manage Fields" tab at the upper-right.  Note, those tabs may be hidden by the Shortcuts toolbar; if so, disable the Shortcuts module.  Add a new field "Title", type Text, make it required & leave other settings default.  Add new field "Biography", type Long Text, make it required, change text processing to "Filtered Text" and leave other settings default.  Add a new field "Display Email", type Text, make it required and leave other settings default.  Add new field "Staff Category", type Term Reference, widget default (check box/etc); on next screen, configure field to Vocabulary Staff Categories; make field required and default to Staff for convenience; leave other settings default.  

Switch to the "Manage Display" tab, ensure Title, Biography and Display Email are visible, and move the History and Staff Category blocks to Hidden.  Switch all labels to "Hidden."  Save.

Now we create block views for each staff category.  For each staff category: Structure > Views > Create View.  Title "Staff Category - [category name]", ex. "Staff Category Leadership".  Show: "Users" sorted by "Unsorted"; create a block, not a page.  Save & Continue editing.  Configure the view this way:

	1.	 Title: set to [staff category], ex. Leadership.
	2.	 Filter Criteria > Add > User: Staff Category > Apply > Selection type Dropdown > Continue > Operator Is One Of, pick [staff category name], ex. Leadership, do not expose filter to visitors, Apply.
	3.	 Fields > Add > User: Picture > Apply.  Uncheck "Create a Label," leave other things default.  Apply. 
	4.	 Fields > Add widget, select Rearrange > drag Picture to be above Name.  Apply.
	5.	 Save the view.	
	6.	 Rinse and repeat: create a view for each of the other 4 staff category types (Faculty, Students, Staff, Alumni).
	7.	 Once all 5 new views have been created: Structure > Blocks > move View: Staff Category [category] (all 5 of them) to Content block, Save Blocks then click Configure for that block, Block title: [category], Show Block On Specific Pages -- only the listed page: [target page for people], Content types / Show block for specific content types, choose people.


## Drupal core upgrade

1. Change directories to the Apache document root:

   ```bash
   cd /var/www
   ```

1. Backup website files to your home directory:

   ```bash
   sudo cp -rp snap ~/snap_backup
   ```

1. Backup website database to your home directory:

   ```bash
   mysqldump -u drupal -p snapdb -r ~/snap_backup.sql
   ```

   The database password can be found in ```/var/www/snap/sites/default/settings.php```.

1. Remove "snap_old" directory from previous upgrade, if it exists:

   ```bash
   sudo rm -fr /var/www/snap_old
   ```

1. Download the new Drupal core tar.gz file:

   ```bash
   wget -O /tmp/drupalcore.tar.gz 'http://ftp.drupal.org/files/projects/drupal-7.##.tar.gz'
   ```   

1. Make sure you are still in the /var/www directory before extracting the tar file. Files extracted directly into the /var/www directory will inherit the "httpd_sys_content_t" SELinux context. Apache will not be able to serve files without this context.

   ```bash
   sudo tar zxvf /tmp/drupalcore.tar.gz
   ```

   To make the rest of this documentation easier and less accident prone, change the extracted directory's name to remove the version number:

   ```bash
   sudo mv /var/www/drupal-7.## /var/www/drupalcore
   ```

1. Change file ownership to the "drupal" user and group:

   ```bash
   sudo chown -R drupal:drupal /var/www/drupalcore
   ```

1. Remove the "sites" directory that came with extracted files:

   ```bash
   sudo -u drupal rm -fr /var/www/drupalcore/sites
   ```

1. Double check that nothing important was added to the .htaccess file in this Drupal core update:

   ```bash
   diff /var/www/snap/.htaccess /var/www/drupalcore/.htaccess
   ```

   If this diff reveals anything other than SNAP-specific additions, take note and investigate if we need to copy the changes into our custom .htaccess file. If no changes need to be copied, or after they have been copied, make sure to delete the new Drupal core's .htaccess file:

   ```bash
   sudo -u drupal rm /var/www/drupalcore/.htaccess
   ```

1. **This step will break the website if something goes wrong, so be very careful and make sure you are free of distractions. Think about this command carefully before performing it and have a backup plan ready.** This step combines three small steps into one so they can run one after the other instantly, essentially eliminating any website downtime. First, we rename the old SNAP website directory to "snap_old". Second, we rename the new Drupal core directory to "snap". Third, we move the "sites" subdirectory out of "snap_old" and into "snap":

   ```bash
   sudo mv snap snap_old && sudo mv drupalcore snap && sudo mv snap_old/sites snap/
   ```

   If something goes wrong, remember you backed up the website files to your home directory in Step 1.

1. Set up symbolic links inside our new website directory:

   ```bash
   cd /var/www/snap
   sudo -u drupal ln -s sites/all/misc/.htaccess
   sudo -u drupal ln -s /files
   sudo -u drupal ln -s sites/all/themes/snap_bootstrap/snap.ico favicon.ico
   sudo -u drupal ln -s /var/www/attachments /var/www/snap/attachments
   ```

1. Run the Drupal update script by accessing this URL from your web browser and clicking Continue, etc:

   https://www.snap.uaf.edu/update.php

1. Clear all caches from here to make sure what you're seeing reflects the new Drupal files:

   https://www.snap.uaf.edu/#overlay=admin/config/development/performance

13. If all went as planned, Drupal will report that it's using the new Drupal core on this page:

   https://www.snap.uaf.edu/#overlay=admin/reports/updates


## Setting up the Articles content type to enable publishing of Articles on the Home page

1.	In Structure > Content types, Edit tab, edit the Article content type:
*	Edit tab, lower left block:
*	Publishing options: uncheck "Published" 
*	Display settings: Uncheck 'display author and date information"

Manage Fields tab:
*	Add new field, Masthead Image (machine name: field_article_image), Field Type Image, Widget Image.	Save, leave Field settings at defaults.

Manage display tab, Default mode:
*	Reorder fields: Article Date, Masthead image, Body.
*	Change Masthead Image Label to <Hidden>.
*	Change Body Format to Default.
*	Save.

Manage display tab, Teaser mode:
*	Reorder: Article date, Masthead Image, Body.
*	Change Masthead Image format to Background image; move to top of Field list.	Change label to <Hidden>, link to original image URL.
*	To configure Masthead, click gear icon and:
**	Image style: None
**	Selector: .highlighted.jumbotron
**	Color: #FFFFFF
**	Horizontal alignment: left; vertical: top
**	Background attachment: scroll; Background repeat: no repeat; Background size: cover, add support for IE8
**	Media query: all; add !important
*	Change Body Format to Summary or Trimmed; trim length 350.
*	Save.


## Install Views Slideshow, Views Slideshow:Cycle, Libraries modules

Views Slideshow provides a View style that displays rows as a jQuery slideshow. This is an API and requires Views Slideshow Cycle or another module that supports the API. 

Related installs/dependencies:
*	Views Slideshow: Cycle. Adds a Rotating slideshow mode to Views Slideshow. Requires the jQuery Cycle Plugin, available at [http://malsup.com/jquery/cycle/download.html] - you will be prompted to install this plugin if you try to enable Views Slideshow: Cycle; instructions are given in the Drupal prompt/warning window.

*	Libraries: Required for Views Slideshow: Cycle and houses the jQuery Cycle plugin.

View: Featured Projects settings
Display as Block
Title: Featured Projects
Fields: 
*	Content: Project Image (links to Content)
*	Content: Title
*	Content: Body (summary or trimmed)
Sort criteria: Global: Random (asc)
Pager: Display a specified number of items (1 item)


## Install Menu Block module

Provides configurable blocks of menu trees starting with any level of any menu. Access through Structure > Blocks > Add Menu Block. Help for configuration can be found at /admin/help/menu_block

Example given for the Projects/UAS-RITA project:
*	Create new menu, "More about UAS"
*	Edit Content Type: Basic Page > Menu Settings (bottom of page): check the box to include your new menu as an Available Menu.
*	Structure > Menus > Settings. Choose  a Source for the secondary links: Main menu
*	Create a basic page. Under Menu Settings, check "Provide a menu link" with the parent item, More about UAS


### Create menu block in Structure > Blocks:
*	Block title: More about UAS
*	Admin title: UAS-RITA subnavigation
*	Menu: More about UAS
*	Starting level: 1st level (primary)
*	Check box, "expand all children of this tree" (advanced options tab)
*	Region settings: choose region for menu block for display
*	Show block only on listed pages: projects/uas-rita


##Install and configure Lightbox2 module
The Lightbox2 module is a simple, unobtrusive script used to overlay images on the current page. 
*	Leave all Lightbox settings at defaults.

### Edit Basic Page content type to work with Lightbox
*	Basic page, Manage Field tab: Add new field, Image (machine name: field_basic_page_image), help text: "Add an image to display on the page. Images added this way can be clicked on and enlarged via the Lightbox2 module, which works for  individual and multiple images." Enable Alt and Title fields, Number of values: unlimited. Save.
*	Basic page, Default Tab > Manage Display: Image Label: Hidden; Format: Lightbox2: lightbox: thumbnail large
*	Basic page, Default Tab > Manage Display: Image Label: Hidden; Format: Lightbox2: lightbox: thumbnail medium


## Install and configure External links module

External Links is a small module used to differentiate between internal and external links. Using jQuery, it will find all external links on a page and add an external icon  indicating it will take you offsite or a mail icon  for mailto: links.
*	Uncheck place an icon next to external links
*	Check open external links in a new window
*	Leave other checkboxes at defaults


## Install and configure Read More module

This module allows you to move the "Read more" link from the node's links area to the end of the teaser text.
*	Install and enable the module as usual, but configure it in Configuration > Content Authoring > Read More link
*	Default setting for Link Behavior is: inline. Leave this.
*	Can add custom link text if you wish.
*	Link can be styled (.read more) in theme stylesheet, _snap.css

   
## Configure jCaption module for image captions

Provides a caption for images from the alt or title attribute using jQuery. This module  uses whatever text a content creator puts in the "Title" field for the image. So you just have to make sure "Enable Title field" is checked for the image field you use. Then you go into the jCaption configuration settings to add the selectors you want to be captionized. jQuery handles the rest.

Content types that have Image fields include Article, Organizations, and Projects. HOWEVER we don't want captions to appear for Organization logos, so disable Alt and Title fields for the logos in the Organizations content type (Collaborator logo element).
*	Set to use TITLE attribute
*	Choose selectors on which it will run: 
**	.content .content img
**	.field-name-field-project-image .field-item.even img
**	.field-name-field-project-image .field-item.odd img
*	Check require text, copy style, copy class, remove align, copy foat, auto width, keep link
*	Uncheck remove style, remove class, copy alignment
*	Style the markup for Image Caption paragraph (.caption.left p, .caption.right p, .caption.none p)


## Install and configure Minify module

Minify is designed to improve the website performance. This module provides the mechanism to render the page using minified version of HTML and JavaScript files. Minified HTML is generated using regular expression, and JavaScript files are generated using GOOGLE Closure Compiler webservice. Minify also works perfectly with Boost module.

* Enable the module
* Goto Configuration > Performance in Bandwidth optimization section, select Minify HTML and Use Minified JavaScript files (may have to actually minify files; follow on-screen instructions)
* Hit Save configuration
* Selecting the Use Minified JavaScript files does not enough to improve performance, select Minify JavaScript files tab at top of the page to generate minified JavaScript files
* If Boost module is already enabled, clear Boost caches to regenerate page with Minify


## Install and configure AdvAgg CSS/JS aggregation module

AdvAgg allows you to improve the frontend performance of your site and get better PageSpeed results from Google Analytics. Several modules to enable after install; enable all of them except Async Font Loader (site does not use external fonts).

*	Configuration: Enable DNS prefetch; AdvAgg cache settings: normal; combine CSS files by using media queries; all other settings default
*	Per http://drupal.stackexchange.com/questions/107311/eliminate-render-blocking-javascript-and-css-in-above-the-fold-content/107332 - follow instructions for the Modification sub-module settings



