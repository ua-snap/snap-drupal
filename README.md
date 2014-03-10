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
 
### Editing SASS

Editing SASS is done by adding new includes to ```themes/snap/sass/styles.scss``` as required, at the bottom of that file.

Main site variables (colors, fonts, etc) are controlled in the ```_init.scss``` file.

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

## Site structure and configuration notes

### Navigation

Move "navigation" block to the "header" section of the site layout.  Disable the title of the block by setting it to ```<none>```.

### Setting up Media module

Download version 7.x-1.4 of the Media module here:

https://drupal.org/project/media

Download version 7.x-1.4 of the Chaos Tool Suite here:

https://drupal.org/project/ctools

The Media module also requires a particular version of the File Entity module. It comes packaged with the version of the File Entity module it requires.

Extract the Media and Chaos Tool Suite modules into the sites/all/modules directory. Then, move the "file_entity" directory outside of the "media" directory, directly into the "modules" directory. So, you should now have the following directories:

- sites/all/modules/media  
- sites/all/modules/ctools  
- sites/all/modules/file_entity

Enable each of these modules in the Drupal administrator interface. Then make sure all content type file and image fields use the Media file selector.

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
