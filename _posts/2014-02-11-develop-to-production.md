---
layout: post
title:  Develop to Production
categories: process
---
The instructions that follow explain how to properly release a production build of the UA-Purchasing-System

1. Create and checkout of a new release branch. Release number format: `major.minor.hotfix`
*Here the `*` represents the new number for this build (i.e.: `release-1.2`).*

	```bash
	$ git checkout -b release-*
	```
2. Bump version and remove development only code.

	```bash
	$ ./dev/release/index.sh 1.2 # This number should be the same as the branch
	```
3. Commit your bumped and clean version .

	```bash
	$ git commit -am 'Bumped version + cleaned files'
	```
4. Remove any other *"development only"* code.  
*Multi-file searches in __sublime-text__ can be performed using `ctrl`+`shift`+`f`*
	* Search for `"todo"`, `"test"`, or `"dev"` on the `/src` directory
	* Search for `"| json"` within the templates
	* Search for any `"console.log("` statements
5. Commit your changes.

	```bash
	$ git commit -am 'Removing development code'
	```
6. Make and commit any additional **Release** changes as necessary.  
*This is not the place to add new features, just fix development bugs*
7. Be sure to run a final develop test to ensure everything works.  
*Repeat steps 6 and 7 as necessary*
 
 	```bash
 	$ grunt # navigate to localhost:4001
 	```
8. Checkout master (be sure to stop grunt `ctrl`+`c`) and merge release branch. Create a release tag.

	```bash
	$ git checkout master
	$ git merge --no-ff release-1.2
	$ git tag -a 1.2
	```
9. Build a release version and deploy

	```bash
	$ grunt release
	```
10. Merge desired changes from release branch to develop.
	
	```bash
	$ git checkout develop
	$ git merge --no-ff --no-commit release-1.2 # this will put you in a `merging` state
	# To view differences
	$ git diff HEAD
	# To remove a file from the merge while retaining changes
	$ git reset HEAD path/to/file.ext
	# To reset changes for a file (revert file to pre-merge state)
	$ git checkout path/to/file.ext
	# To finalize commit
	$ git commit
	```
11. Clean up release branch and push master to github.

	```bash
	$ git branch -d release-1.2
	$ git push --tags
	```
---
### Sources

- [Git Branching Model](http://nvie.com/posts/a-successful-git-branching-model/)