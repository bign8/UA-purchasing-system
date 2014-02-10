---
layout: post
title:  Weekly Update
categories:
- update
- develop
---
## Last Week's Completions ([0.04][tag])

- Fixed footer / feedback link ([Merge][foot])
- Finished Creating all the proper emails ([Merge][email])
	- New Firm Notification
	- New User Registration
	- Membership Addition
- Reset Password on Contact for duplicate email ([Merge][reset])
- Implemented items to be purchased by user (ie: MPA) ([Merge][user])
- Handle HardCopy vs. SoftCopy pricing ([Commit][hard])
	- Required significantly rewrite + changes to cart ([Merge][cart])
		- Fixed some outstanding issues + design flaws
- Added Form fields ([Merge][form]) ([Example][field])
	- Image Upload
	- TextArea
- Added simple site simulator for internal tests ([Merge][site]) ([Link][simul])
- Found BIG mistake in cart item totals (based on template not option) + partially fixed ([Merge][error])

[tag]:   https://github.com/bign8-AZ/UA-purchasing-system/commit/822ce912fb7dbd93504dde01a7759b4c4375e4d6
[foot]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/e7666d323b457a4c4bd10649a7270f100e14f042
[email]: https://github.com/bign8-AZ/UA-purchasing-system/commit/043095118c20f17b0b26d113a6acafcdbd69fda3
[reset]: https://github.com/bign8-AZ/UA-purchasing-system/commit/65fd44fad2eb8a624b10aaafd03e32111051e686
[user]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/8320bfd11a35b45e207add90e031f87b63c6f369
[hard]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/216d40c1a0545b2b63df1d76bca94e45c32c53c3
[cart]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/79d89bfed5813d178a47b1ae76fcdaea2e24b770
[form]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/243b5329f148a102e8e2eab539a8c973196c1c2f
[field]: http://payment.upstreamacademy.com/conference/148
[site]:  https://github.com/bign8-AZ/UA-purchasing-system/commit/5042515d6fd50047a64dff47c64130e092ebe9e5
[simul]: http://payment.upstreamacademy.com/site.php
[error]: https://github.com/bign8-AZ/UA-purchasing-system/commit/dc11465f97ba72894e5c6b5bd7ec5e821b288dcb

*Note: Ordered Chronologically*

--------
## Remaining TO-DO's

### For Me 

- Add all items to database
- Branding
- Clean Up cart (options NOT template)
- Delete dummy data from database
- Emails
	- Cart sending correctly
		- Images (delete from server)
		- Items
		- Pricing
- Force profile picture reset on form reset
	- Don't forget to delete image

### For Team

- Front End Text / Review
	- Duplicate email - reset password OR login if they know password
- Testing

--------
## Meeting Notes / Questions

- Move PayPal over now or later? (The redirect) LATER!

- [x] Fix pass products to pull acquisition
	- look into errors
- [x] Add form questions
	- Check-box multiple choice item
	- Select w/ other option
- [x] re-pull cart on currentUser change
	- Works! but acquaintance are messed up
- [x] fix total on cart checkout
- [x] add more people to conference!
	- pulling past purchase data