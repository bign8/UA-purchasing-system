---
layout: post
title:  Weekly Update
categories:
- update
- develop
---
## Last Week's Completions

- Pre-release
	- Bugs (Found + Fixed)
		- Notify script (a problem with the cart) [Merge][notify]
		- Displaying acquisitions properly [Merge][acqu]
		- Image modification and a few more cart bugs [Merge][image]
	- Features
		- New question types (otherSelect + radio) [Merge][quest]
		- Image attachment to emails [Merge][attach]
		- Addition of attendees after an event has been purchased [Merge][att]
		- Expired event notification [Merge][expire]
		- Local Development builds [Merge][dev]
- Post-release ([0.1.00])
	- Hot fixes
		- Remove static session [Merge][rmss]
		- Adding questions to groups [Merge][groups]
- Next-release (0.2.00)
	- Bugs
		- Group Options [Commit][grpopt]
		- Fixed radio form labels (now labels are linked to radio) [Commit][radio]
	- Fixed Reported Bugs
		- IE: not loading [Commit][iesux]
		- Account Creation [Commit][accadd]
	- Features
		- Upgrade Database Connection Style [Commit][dbconn]
		- Development Code cleaning + Version Bump [Merge][dccvb]
		- Session Mirroring [Commit][sm]

[notify]: https://github.com/bign8-AZ/UA-purchasing-system/commit/57931d78ee3571b911af844af7bcabb7f5c98f9c
[acqu]:   https://github.com/bign8-AZ/UA-purchasing-system/commit/38a1fbb0708f327b431a605f65a26f2ee1316d93
[image]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/6fa23d7507d63567cf91249b71f9c108099d3c15
[quest]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/069c66810e7b82b6029545b60478c2dda8644201
[attach]: https://github.com/bign8-AZ/UA-purchasing-system/commit/62935db00c80892f178b2ccc9e96f4e7bfef5bae
[att]:    https://github.com/bign8-AZ/UA-purchasing-system/commit/0ddde2dce046e12ccad3094dadd3c4c29253efa6
[expire]: https://github.com/bign8-AZ/UA-purchasing-system/commit/ed0e15db4451c036fc7c455c8e70a260541da833
[dev]:    https://github.com/bign8-AZ/UA-purchasing-system/commit/9bb07b964b3e4ddb150ff42ba033262f4ba6ea25
[0.1.00]: https://github.com/bign8-AZ/UA-purchasing-system/commit/0b75a1da44dedee593a492e442072b58225fce9b
[rmss]:   https://github.com/bign8-AZ/UA-purchasing-system/commit/4a4c70d8cec84761f0890eedb3e20df50c0f24cf
[groups]: https://github.com/bign8-AZ/UA-purchasing-system/commit/c8211b6bde67efcd0ea5f6eca3b136aa84173bc6
[grpopt]: https://github.com/bign8-AZ/UA-purchasing-system/commit/7c1e150f5474640b1fc990b38a317b6ff92034b2
[radio]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/79931484440894a2b4601ca62ddab02448f1c79f
[iesux]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/123210866f3eeefca97020ca85ab6f016bba357a
[accadd]: https://github.com/bign8-AZ/UA-purchasing-system/commit/9e998d7f0e1922737119665453335c282f2f7722
[dbconn]: https://github.com/bign8-AZ/UA-purchasing-system/commit/ae488e6bcb26095718cf732650654181e459ab53
[dccvb]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/41faa8b2dd25ecd7327bc23d082bda50be0b491a
[sm]:     https://github.com/bign8-AZ/UA-purchasing-system/commit/6add34cb73a4e80719c477cc51692d23592948cb

--------
Desired Changes:

- Fast
	- [x] Modify Login  
		![New Login Form](/img/loginMod.jpg)
	- [x] Change "Check" to "Start" (/register)
	- [x] Move Primary buttons to the bottom right
	- [x] Remove URL validation (www.asdf.com no http://)
	- [x] Can we change *Click 'set' to assign* to *Click 'set' to enter an address*
	- [x] Change address to mailing address / physical address
	- [x] Billings Office, Home Address, etc. ... for name on address
	- [x] name first title second
	- [x] change *"set"* button to *"select attendees"* on /cart
	- [x] Can we change *"Hard-copy"*? To *"Add a hard copy for an additional $50"*
	- [x] Add delete column above x button on /cart
- Medium 
	- [m] Password: Can we switch this to at least one number or special character?
	- [m] disabling cross firm/register firm stuff - error (/register)
	- [m] Remove spouse question! From conference
	- [m] Optional phone number
	- [m] Redirect to shopping cart on no options for registering for event  
		![Don't want to see this](/img/badConf.png)
	- [m] Specialty niches as multiple check-box
		- Tax
		- Audit
		- Payroll  Services
		- Business Management Consulting- Fraud Examination 
		- IT Consulting 
		- Business Valuation
		- Cost Segregation
		- Controller Services
		- Litigation Support
		- Financial Planning
		- SOX 44 Consulting
		- Other (with a large text field)
	- [m] don't add phone to firm! don't require phone for participants / contacts
- Long
	- [l] progress Branding
	- [l] When I add someone for ELA and put in their information, it let's me save but is still red.
		- We need to make sure none of these fields are mandatory
	- [l] **ERROR AGAIN** Force profile picture reset on form reset
		- Don't forget to delete image

--------

## Meeting Notes
ELA NEEDS PARTICIPANTS (GUIDES / AVOCATE QUECTIONS STUFF)
http://upstreamacademy.com/register/ela.aspx

MP sign up day of for future
+ past presentation for behind
+ future presentation need to come back and download file too

Add Delete
+ above x on the cart items


