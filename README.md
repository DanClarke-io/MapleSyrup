# MapleSyrup

MapleSyrup is a knowledge growth tool that allows its users to rapidly absorb key information, without having to find the original source, read the surrounding text and interpret once again the key facts.

In essence it allows a user to create their own TLDR of multiple information resources allowing for easy rapid, effective recaps and absorption of those facts.

You will find MapleSyrup most useful when learning a new subject for the first time or reading a book.


## Installing
* Clone local version through git
* Install [Vagrant](http://vagrantup.com/)
* Install Vagrant triggers (`vagrant plugin install vagrant-triggers`)
* Install Vagrant triggers (`vagrant plugin install vagrant_box_version`)
* Enter the cloned directory
* run `vagrant up`

After a few minutes you will be able to access the site on http://localhost:8080, also on http://192.168.33.10

## Running
The site once installed will be accessible from http://localhost:8080, any issues, let @overbythere know.

## Committing changes
When you have made any changes to the code run `git status` to see what files have changed. Add each file that has changed with `git add *file*`, and remove any with `git rm *file*` as needed.

Once these have been updated you can commit your changes locally with `git commit -m "message"` where 'message' is a custom comment about your changes.

Once this is complete, at the end of the day, or if you want to run your latest changes through the CI, run `git push`, this will upload all your changes to the server (see notes for this)

## Notes
### Database
Database is handled in sample.db for the time being.

### Issues
Any problems, contact @overbythere.


