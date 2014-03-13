---
layout: post
title:  Weekly Update
categories: update
---

# Completed last week

- Administration
	- [`085c4c3`][] Finish "Item administration" page
	- [`56f9652`][] Files Manager
	- [`e9a8bf9`][] Firm Merge Feature
	- [`06fe84d`][] Purchases (manual add memberships)
- Team
	- Re-test with new db
	- get strings for final release

[`085c4c3`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/085c4c35292951001bba95d27b50af6abc4e7185
[`56f9652`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/56f96520f2a684c021835c966b8a3893e398d087
[`e9a8bf9`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/e9a8bf9c8ad923e7c8660546a71d2b7a3104520d
[`06fe84d`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/d6fe84dcbb11188ab4dd16d281a49f330c43788f

# Previous meeting notes

- Email notice that everything is ready for testing (things are in the proper place)
- [x] Calendar Request for administration training
- [`2561159`][] Add links helper to item "Item administration"
- [`c45ddad`][] Read email footer from file, not set in code
- [`1bdcb6b`][] Change email to info@upstremacademy.com

[`2561159`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/2561159665e66f9cc860e99df6344e461def8176
[`c45ddad`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/c45ddadfbe9c501341bca5f88d130c223d8b0f42
[`1bdcb6b`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/1bdcb6bdbacf492a831ec7c720ab43f00f03a298

# Kelsey Notes

- **General**
	- When I tried to login, it said my email was not registered, could this be because of the changes made to the system?
		- *Yes: Last time I updated there were many database changes, making it impossible to pull over created users*
	- I told the website that I forgot my password and it sent me a link to reset it.  The signature of the email needs to be updated
		- UPSTREAM ACADEMY  
          P. O. BOX 1147  828 GREAT NORTHERN BLVD  HELENA, MT 59624-1147  
		  (P) 406-495-1850   (F) 406-442-1100    INFO@UPSTREAMACADEMY.COM  
		  GUIDING ACCOUNTING FIRMS TO HIGH PERFORMANCE                   UPSTREAMACADEMY.COM
			- *As far as I can tell, this change is already implemented.  Possibly a new deployment will fix things*
	- When I'm on the shopping cart checkout page it appears I can click on UA Payment and it will take me somewhere else but when I click on it, nothing happens.  
		- *Fixed [`2b8a0e9`][]*
	![Header](/img/header-1.png)
	- The same thing is true regards to the text that says "Home", nothing happens when I click on it.
		- *Fixed [`b7c4dc5`][]*
	- I'm not sure that it matters but on the simulated site it listed Upstream Academy Network (Annually) under Emerging Leaders Academy in addition to the listings under the Memberships designation.
		- *Fixed: [`b10a38d`][]*
		- When I clicked register it brought me to a page that looked like an ELA registration page rather than a UAN page.
		- When I checked my cart it was listing with ELA pricing rather than UAN pricing.
	- If someone has selected to pay by check and then clicks on View Purchases, they're brought to the Past Purchases page. If they hit back to look at the payment address information again it's no longer there because the cart has been emptied.
		- This may be less of an issue if we leave off the View Purchases button since they can click Past Purchases anytime while they're on the Shopping Cart page.
		- *Removed button: [`91e9cde`][]*
	- When I registered a second participant for ELA I notice a message letting me know there were previously registered attendees. There is a typo in this message, "twoard" needs to be "toward". This is the same message that appears when adding participants for HeadWaters or BestPractices
		- *Ran spell check on the entire appStrings.js file [`88eb841`][]*
	- Receipt is spelled wrong at the top of the page that appears after you select Pay by Check. It's also spelled wrong if you select to print the receipt.
		- *Fixed (all of them) [`91e9cde`][]*
	- When I said to checkout using a credit card and then went back it emptied my cart putting all the items into Past Purchases
		- *As designed (`NO FIX`)*
	- Would it be possible to list who purchased which items on the Past Purchases page since we're making people sign-in?
		- *Added [`580067c`][]*
- **High Performance Firms**
	- I added the HPF workshop but there was no prompt to add attendees to the workshop. 
		- *Super easy with admin [`08d4e7d`][]*
	- I wanted to add more participants for the workshop but it wouldn't let me do this by adding the workshop to my cart after purchasing it once before.
		- `HELP!!!` You have to go thought the Past Purchases page and add new attendees that way.  Sorry.
- **Membership Associations**
	- DKF needs to be DFK
		- *Database Fix [`45ccc8e`][]*
	- When I added a CPAmerica membership nothing was listed in my shopping cart.
		- *Fixed later on with cart re-pull [`08d4e7d`][]*
		- When I went to register a new ELA participant it did list the correct price but I think it may be nice to show something in the cart even though the membership doesn't cost anything. 
		- Correction: after I added the ELA participant the CPAmerica membership showed up in my cart.
- **ELA**
	- When I was adding the ELA participant I failed to add the attendee, it gave an error message "you need to pick at least on attendee for the conference", could we change conference to program? 
		- *Fixed appStrings [`55705ee`][]*
	- When I registered individuals after adding the CPAmerica membership and checking out it still didn't list the CPAmerica price for ELA participation until I viewed the items in the cart.
		- *Added force refresh on cart views, It hurts, but it works [`08d4e7d`][]*
	 - When I added a participant to the cart after adding the UAN membership it still listed the ELA pricing discount due to their membership with CPAmerica rather than UAN—not so much an issue but just something to note.
	 	- *Noted: (`No Fix`)*
- **Conferences**
	- When I added a second participant to HeadWaters the firm's revenue didn't automatically populate. It would be nice if this was done if entered by the first participant.
		- *Another good catch! I wasn't re-assigning the past data I already had.  [`f3515ae`][]
- **Management Presentations**
	- I added two Past Presentations, when I viewed the cart it listed a blue Options button under the cost for each presentation but nothing happened when I clicked on the button.
		- *Good Catch! That came from when I switched from MySQL to SQLite [`1defb81`][]*
- **Upstream Academy Network**
	- I tried to register my firm for UAN membership and I failed to fill in some of the fields. It wouldn't let me register without selecting an option for each but the fields weren't listed as mandatory.
		- *Marked Form of Practice as required (Lame fix, but DOM checked wasn't working) [`c90b33c`][]*

[`2b8a0e9`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/2b8a0e999c4b03e1e497964e2b2c8c824f5a05a2
[`45ccc8e`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/45ccc8e739e40e4dd2a96af97f1396501746f871
[`b7c4dc5`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/b7c4dc59e4a530fa1d5a6a1943b38840a80fb329
[`b10a38d`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/b10a38df5f6b9c73effc3c55774819987a1c16f3
[`91e9cde`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/91e9cde5d57bd785942ec2df1354fffb96dc0dd3
[`c90b33c`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/c90b33ca22d9da624d9d549cc10dd96fc93e592a
[`08d4e7d`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/08d4e7d95e0cf876540b8a091cc01527cd1eed6b
[`1defb81`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/1defb8191242a25b4f3db635be76b4260da1140d
[`55705ee`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/55705ee463cbe61412773de55145d13bee51e63d
[`88eb841`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/88eb8418b6c4dffa410750da074c09ea5f9a9e9c
[`580067c`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/580067ce1e9cb570b5f9ed9f31225b5f548ced65
[`f3515ae`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/f3515ae0466be6217bfbdaac77700e7797f6bd17

