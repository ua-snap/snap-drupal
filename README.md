# SNAP Drupal 

This README contains first-time dev setup instructions as well as a narrative section describing how to configure Drupal, through its GUI, to create the content types/views/etc as required to support development.

## Initial setup

We use VDD for the local setup.  [Follow their tutorial](https://drupal.org/node/2008792), using [the 7.x-1.3 version](http://ftp.drupal.org/files/projects/vdd-7.x-1.3.tar.gz) configuration.  There's some hiccups to overcome here due to some bugs in the VDD project at this time, though.  Here's the steps to follow:

 1. Download [the 7.x-1.3 version](http://ftp.drupal.org/files/projects/vdd-7.x-1.3.tar.gz) of the project.
 1. Move the file to wherever you keep other work projects/repositories, then unpack it: ```tar -zxvf vdd-7.x-1.3.tar.gz```
 1. Enter that directory, referred to hereafter as ```work/vdd```: ```cd work/vdd```
 1. Download [this patchfile](https://drupal.org/files/issues/vdd-install-drush-master-2116195-10.patch) to that directory. 
 1. Apply the patch: ```patch -p 1 < vdd-install-drush-master-2116195-10.patch```
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
 1. ```git clone https://github.com/ua-snap/snap-drupal.git```
 1. ```mv snap-drupal all```
 1. Check the page again in your web browser.  If it loads, all is well and you can proceed to the next set of setup directions!

### Install Compass

Compass is used for the SASS development.  On OSX, first [install Homebrew](http://brew.sh/) then ```brew install ruby```, then [install Compass](http://compass-style.org/install/).

### Editing files and connecting with Github

Vagrant and VDD together configure the virtual machine so that your host OS can see the files that are running on the virtual machine, so that you can use your preferred editor to make changes and push them to Github as usual.

The relevant directory where work happens is the Github repo we checked out in the directions above.  On your local machine, relative to the ```vdd``` directory, it's here:

```bash
vdd/data/drupal7/all/
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