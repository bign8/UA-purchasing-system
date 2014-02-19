---
layout: post
title:  Weekly Update
categories:
- update
- develop
---
## Last Week's Completions



--------
## Desired Changes:
### Kelsey

I can't get anything added to the cart when I'm using Internet Explorer. I can go to the Feedback site and go back to using the Simulated Site link but nothing else. I'm not having trouble using Mozilla Firefox or Google Chrome.

- It works in IE10.  Currently looking for a what to notify users of older browsers and alternative solutions.

#### General

- [x] When I'm on the shopping cart it says Welcome! Please sign in to check out but it's also listing my name next to the button marked Log out. This may be confusing for users since it appears they are already signed in.
	- Error in code: fixed
- [x] When I click on Past Products on the Shopping Cart page it lists a few random programs and presentations. Are these supposed to be things my firm has previously purchased? If so it may make more sense to call this Past Purchases or Past Orders.
	- Changed to "Past Purchases"
- [-] There is no description for MPA, MPR, High Performance Firm Presentations. Emerging Leaders Academy has a ":"" at the end of the title but no description.
	- I have no description for these items, I can add one if they are provided. (Eventually, administrators will be able to modify this content)
- [!] When I tried to purchase something I had previously purchased it wouldn't let me check out until I removed it from the cart.
	- See blue information box above the checkout button
- [-] I tried checking out with a fake credit card and it came back that the credit card number is invalid which is nice. Does this link directly with the Upstream Academy PayPal account?
	- Issue is on PayPal side, not ours
- [-] When I tried to check out with PayPal/PayPal Bill Me Later it came back with an error, "Invalid response from PayPal Express Checkout!"
	- Issue is on PayPal side, not ours
- [!] When I'm on the shopping cart page and have no items in the cart it says "Cart is empty go shopping" but when I click it it goes back to the UA website rather than the simulated site.
	- Page content is in preparation of going live (on production, this will be the desired action, yes?)
- [x] I tried clicking on cart on the test page and it brought me to a blank Upstream Academy Shop page. This seems to happen when I add a payment. I've tried to recreate this problem by adding different amounts of items but nothing seems to affect it like adding a payment.
	- Error in code: fixed
- [x] I had a cart full of programs and tried to check-out with a credit card. I changed my mind and decided to check out with a check but when I hit cancel it brought me back to an empty shopping cart. Then when I checked my Past Products those items showed up in the list. I didn't have to pay for them but it showed them anyway.
	- Error in code: fixed

#### Registering a New User

- [x] When I'm registering a new user it doesn't tell me that all the information is mandatory. I think we should have everything starred or clearly marked so people know what fields they need to populate.
	- Added appropriate asterisks
- [?] After filling out the information to register a new user a confirmation message came up that said "This web page is being redirected to a new location. Would you like to resend the form data you have typed to the new location?" (This didn't happen when I added myself to Upstream but it did with ABC Firm).
	- Unable to reproduce
- [?] After I clicked OK, it came up with an error message on the registration form that said "There was an unknown error creating your account. Please try again or contact Upstream Academy for help."
	- Unable to reproduce
- [?] When I registered a new firm it automatically brought my phone number down to the Password field and didn't give me an error when I filled out my chosen password in the Re-type password field. It didn't let me know they weren't identical and didn't let me know that's why I couldn't create an account.
	- Unable to reproduce

#### LeaderSkills

- [- demo site] Is it possible to have LeaderSkills Lessons listed numerically 1-10 rather than 1, 10, 2, 3...? 
	- Demo site sorts based off of standard string sorting (On production, upstream-academy.com will have the order hard-set)
- [?????] The LeaderSkills Lesson PD14-Demonstrating Personal Integrity needs to be listed.
	- Georgia mentioned that this lesson was free, if it is, then there is no reason to list it, thoughts?
- [- demo site] I clicked Register on the lessons and it comes up with a page that says "lesson has no options". I then had the option to continue shopping or checkout. It adds it to the cart but I think we should just take away the Register button for LS Lessons since it may cause more confusion.
	- This is an issue with the demo site.  On production, register links will be used for conferences and things with questions, the add to cart link will be used for things without options. Georgia and I already discussed this at length, sorry for the temporary confusion.
- [-] Are we going to continue sending hard copies of all LS Lessons? Will people have the option of downloading any materials?
	- Modified database entries to produce desired outcome: fixed
- [?????] When I add the LS discount code, lsl, it only takes off $15 from the entire order. Is this correct or should it be taking $15 off each lesson?
	- This is carryover from an early discussion during development with Georgia.  Is this still valid or should we compound discounts?

#### Management Presentations

- [?????] When I registered for an upcoming Management Presentation it listed it as something I had already purchased but didn't give any explanation that I don't need to register for this since I'm a UAN member firm.
	- ****************************************
- [!] When I click Register on a Past Management Presentation it tells me the presentation has no options and then adds it to the cart.
	- Now it should redirect straight to the cart, (unless there are some options, then I can add them as necessary).  (See comment about production site)
- When I was in the Past Products tab I clicked on  Attendees for a live Management Presentation registration and I then clicked Add More, it brought me to a screen saying Cart is Empty-Go Shop! It also added this to my shopping cart to purchase again (it did mark the item as previously purchased.)
	- Issue with code: fixed

#### MPA/MPR

- [-] When I added Managing Partner Academy to my cart it was linked to the UA website page for MPA. This was the only product I saw with this feature.
	- Yep, the idea is to link back to the upstream site for more information about a purchase (It's a feature, not a bug)
- I don't think we should allow people to add both MPA and MPR to the cart at the same time since they won't be involved in both groups.
	- This request would require a re-design of the entire system, are you sure?
- At one point I registered for MPR, then deleted it from the cart, then went back to the simulated site to re-register and it didn't show up in my cart again.
	- Unable to reproduce
- Since firms can have 2 individuals in MPA I think there should be registration information requested like with BP or HW.
	- Added as desired

#### UAN

- [x] I think we should have the following fields mandatory for the UAN membership registration
	- [2] Total Firm Gross Revenue
	- [12] Professional Affiliations
	- [20] Total Number of Personnel
	- [14] Total Number of Owners
	- [15] Total Number of Professional Staff
	- [16] Total Number of Administrative Personnel
		- Modified database to attain desired required fields
- [?????] When I tried to register my made up firm for Quarterly UAN membership I only filled out the mandatory field and it gave me an unknown error. It also said that it had to resend the data. When I went back to the cart, it had added the membership and modified all my pricing to UAN prices. However, I still had to tell what kind of company I had for the UAN membership and it didn't take off a registration for an upcoming MP even though the firm was technically a new UAN member.
	- See MP + UAN comment, Unable to reproduce error, As far as UAN pricing: Another discussion with Georgia rendered the thought that if someone is about to purchase a UAN membership, then the rest of the items in the same cart should have UAN pricing, correct?

#### BestPractices/HeadWaters

- [!x] When adding a conference attendee it didn't tell me the [!] phone and [x] email address fields were mandatory.
	- Phone is not required, email is, desired asterisks added

#### ELA

- Some firms have one person registering multiple participants, they need to be able to purchase this more than once, a model similar to the registration for BestPractices or HeadWaters. 
	- Modified database to produce desired results (what are the prices for the 2nd, 3rd, 4th … attendees?)
- When I entered the year I began public practice I didn't follow the four digit year format, there was no prompt to correct the year.
	- Issue in code: fixed
- When I was in the Past Products tab I clicked on  Attendees for the ELA Class of 2017 entry and I then clicked Add More, it brought me to a screen saying Cart is Empty-Go Shop! It also added this to my shopping cart to purchase again (it did mark the item as previously purchased.)
	- Issue in code: fixed

#### HPF

- When I clicked Register on the HPF Workshop E1, it automatically added it to my cart and didn't bring up a registration form. I'm not sure if that's correct or not since I didn't have a chance to enter any attendee information.
	- Modified database to produce desired results
- When I was in the Past Products tab I clicked on Attendees for the HPF Workshop 1 entry and I then clicked Add More, it brought me to a screen saying Cart is Empty-Go Shop! It also added this to my shopping cart to purchase again (it did mark the item as previously purchased.)
	- same issue as above

## What this means:

- [x] Complete
- [-] Not my problem
- [!] Because it's designed that way
- [?] Cannot reproduce


--------
## Meeting Notes
