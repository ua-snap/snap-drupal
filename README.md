# SNAP Drupal 

This README contains first-time dev setup instructions as well as a narrative section describing how to configure Drupal, through its GUI, to create the content types/views/etc as required to support development.

## Initial setup

We use VDD for the local setup.  [Follow their tutorial](https://drupal.org/node/2008792), using [the 7.x-1.3 version](http://ftp.drupal.org/files/projects/vdd-7.x-1.3.tar.gz) configuration.  There's some hiccups to overcome here due to some bugs in the VDD project at this time, though.  Here's the steps to follow:

 1. Download [the 7.x-1.3 version](http://ftp.drupal.org/files/projects/vdd-7.x-1.3.tar.gz) of the project.
 1. Move the file to wherever you keep other work projects/repositories, then unpack it: ```tar -zxvf vdd-7.x-1.3.tar.gz```
 1. Enter that directory, referred to hereafter as ```work/vdd```: ```cd work/vdd```
 1. Download [this patchfile](https://drupal.org/files/issues/vdd-install-drush-master-2116195-10.patch) to that directory. (Use the name here, or whatever name you gave the file when you saved it.)
 1. Apply the patch: ```patch -p 1 < vdd-install-drush-master-2116195-10.patch```
 1. Disconnect from VPN if you are connected - Vagrant doesn't play well with VPN (3/4/14 - this issue may get fixed soon)
 1. ```vagrant up```
 1. Get coffee.  When the image has launched...
 1. ```vagrant ssh```
 1. ```cd sites```
 1. ```rm -rf drupal7```
 1. ```drush dl drupal-7 --drupal-project-rename="drupal7"```
 1. ```drush @drupal7 si standard```
 1. In a web browser on your host machine, go to ```192.168.44.44``` then click the ```drupal7``` link.  Verify that you get a Drupal site, then log in with user/password root/root.
 1. Now we hook up the Github repo for our SNAP work.  ```cd drupal7/sites/```
 1. ```rm -rf all/```
 1. ```git clone https://github.com/ua-snap/snap-drupal.git```  (enter your Github username and password)
 1. ```mv snap-drupal all```
 1. By default, the VDD project makes a few extra directories in the web root that we don't need.  To change this:
   1. Continue working inside the VM as per previous steps, or ```vagrant ssh```.
   1. ```nano /etc/apache2/sites-enabled/localhost.conf```
   1. Change the 2nd line to: ```DocumentRoot /var/www/drupal7/```
   1. ```control-o``` to save then ```control-x``` to exit
   1. ```sudo /etc/init.d/apache2 reload```
 1. Check the page again in your web browser.  If it loads the Drupal page, all is well and you can proceed to the next set of setup directions!

#### Post-install steps

The snap_bootstrap theme has external requirements on the ```bootstrap-sass``` project in Bower.  To install it:

```bash
cd /path/to/snap_bootstrap/
bower install
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

Set up the taxonomy for staff categories.  Main menu Structure > Taxonomy > Add Vocabulary.  Name it "Staff Categories".  Add 5 terms: Leaders, Faculty, Students, Staff, Alumni.

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

## Updating the Drupal core

Like modules, we will occasionally need to update the Drupal core when there is a security update available. Fortunately, we have been very careful to isolate all of our development work in the ```sites``` directory, which makes updating the Drupal core pretty easy.

To update the Drupal core (these instructions are from memory; please be careful):

1. Download and extract the Drupal core tar.gz file to /tmp.
2. ```rm -fr /tmp/drupal-7.27/sites```
3. ```sudo chown -R drupal:drupal /tmp/drupal-7.27```
4. ```sudo mv /var/www/snap ~/snap_old```
5. ```sudo mv /tmp/drupal-7.27 /var/www/snap```
6. ```sudo mv ~/snap_old/sites /var/www/snap/```
7. Run the Drupal update script: http://cerberus.snap.uaf.edu/update.php

Steps 4-6 should be performed as quickly as possible, as the live Drupal site will be broken until they are finished.

The main thing to look out for when updating the Drupal core is that the file permissions end up being the same as before. Note that the file permissions change a little bit for ```sites/default/files```. This directory has the group-write bit set so the web server can upload files there. But all of the permissions and file ownership should end up set correctly if you follow the above steps in the proper order.


## Setting up the Articles content type to enable publishing of "highlighted" items temporarily on the Home page

1.	Download the Drupal module Scheduler from drupal.org/project/scheduler.	
*	Go to Modules and enable the new module.
*	Leave all of its configuration settings at their defaults - further settings can be made after installation when editing the Article content type.
*	Edit Permissions settings to allow Authenticated users to schedule content publication.	Save settings.

2.	In Structure > Content types, Edit tab, edit the Article content type:
*	Edit tab, lower left block:
*	Publishing options: uncheck "Published" (you will be choosing a publish date and time via Scheduler)
*	Display settings: Uncheck 'display author and date information"

3.	In Structure > Content types, Edit tab, configure Scheduler:
*	Publishing: check 'enable scheduled publishing for this content type,' 'change content creation time to match the scheduled publish time,' and 'require scheduled publishing.'
*	Unpublishing: Check 'enable scheduled unpublishing,' 'require scheduled unpublishing'
*	Node edit page layout: check 'separate fieldset'
*	Expand fieldset: choose 'always open the fieldset'

Manage Fields tab:
*	Add new field, Image (machine name: article_image), Field Type Image, Widget Image.	Save, leave Field settings at defaults.

Manage display tab, Default mode:
*	Reorder fields: Image, Body, Tags.
*	Change Image Label to <Hidden>.
*	Change Body Format to Default.
*	Save.

Manage display tab, Teaser mode:
*	Change Image format to Image; move to top of Field list.	Change label to <Hidden>.
*	Choose Image style: Medium (220 x 220); Link to nothing.
*	Change Body trim length to 350.
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


