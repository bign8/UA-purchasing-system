---
layout: post
title:  Hotfix on Production
categories: process
---
The instructions that follow explain how to properly make a quick change (hotfix) to a production build of the UA-Purchasing-System

1. Create and checkout of a new hotfix branch. Release number format: `major.minor.hotfix`
*Here the `*` represents a unique identifier that identifies the hotfix (i.e.: `hotfix-session`).*

	```bash
	$ git checkout -b hotfix-*
	```
2. Change the version number in `package.json`.  
*This version number should match the hotfix branches number*

	```javascript
	{
		// ...
		"version": "1.2.1",
		// ...
		"devDependencies": {
			"grunt": "~0.4.1",
			// ...
		}
	}
	
	```
3. Commit you bumped version.

	```bash
	$ git commit -am 'Bumped version number to 1.2.1'
	```
4. Make your changes as necessary.
5. Commit your changes.  
*Repeat steps 4 and 5 as necessary*

	```bash
	$ git commit -am 'Fixing persistent session'
	```
6. Checkout master (be sure to stop grunt `ctrl`+`c`) and merge hotfix branch. Create a release tag.

	```bash
	$ git checkout master
	$ git merge --no-ff hotfix-session
	$ git tag -a 1.2.1
	```
7. Build a release version and deploy

	```bash
	$ grunt release
	```
8. Clean up hotfix branch and push master to github.

	```bash
	$ git branch -d hotfix-1.2.1
	$ git push --tags
	```
---
### Sources

- [Git Branching Model](http://nvie.com/posts/a-successful-git-branching-model/)