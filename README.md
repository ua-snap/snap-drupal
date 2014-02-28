# SNAP Drupal 

This README contains first-time dev setup instructions as well as a narrative section describing how to configure Drupal, through its GUI, to create the content types/views/etc as required to support development.

## Initial setup

We use VDD for the local setup.  [Follow their tutorial](https://drupal.org/node/2008792), using [the 7.x-1.3 version](http://ftp.drupal.org/files/projects/vdd-7.x-1.3.tar.gz) (or newer) configuration.  There's some hiccups to overcome here due to some bugs in the VDD project at this time, though.  Here's the steps to follow:

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
 