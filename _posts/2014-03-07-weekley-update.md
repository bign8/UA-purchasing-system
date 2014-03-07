---
layout: post
title:  Weekly Update
categories: update
---

# Completed last week

- Fixing notes from Jenny
	- [`e13d35a`][] on cart go back to website link
	- [`88f5295`][] hit enter on login screen
	- [`600c1d9`][] fix error with removing custom payments
- Fixing Errors found by Georgia in Email
	- [`a17c155`][] On the ELA registration, we need them to add attendees.  It's going to questions without picking a participant.
	- When I tried to add Kelsey, to the conference, I got this error.  
	![Image Error](/img/badConf.jpg)
		- [`c6b9010`][] Issue was with not assigning values for un-required fields
	- [`190499f`][] I'm also not sure why it says "select employee" on the bottom.  Is this actually a cancel button?
	- After I choose employees, I get this message:  
	![Image Error 2](/img/redirectError.jpg)
		- Unable to reproduce
	- [`84e4a5f`][] Modify reset password email and adding footer
	<p style='font-family:"Palatino Linotype","serif";font-variant:small-caps;/*docs style*/border:1px solid #ddd;padding:5px 10px;background-color:#eef;margin-top:.5em'>
		<span style='color:black;letter-spacing:1.1pt'>
			<b style='color:navy'>Georgia Cummings</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Director&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
			<b>Upstream Academy</b>
		</span>
		<br/>
		<span style='font-size:10pt;color:gray;letter-spacing:.4pt'>
			P. O. Box 1147&nbsp;&nbsp;828 Great Northern Blvd&nbsp;&nbsp;Helena, MT 59624-1147
			<br/>
			(P) 406-495-1850&nbsp;&nbsp;&nbsp;(F) 406-442-1100&nbsp;&nbsp;&nbsp;
			<a href="mailto:georgiac@upstreamacademy.com" style='color:gray;'>georgiac@upstreamacademy.com</a>
		</span>
		<br/>
		<span style='font-size:10.0pt;color:navy;color:navy;letter-spacing:1.1pt;text-align:justify'>
			Guiding accounting firms to high performance
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://www.upstreamacademy.com/" style='color:#31849B;letter-spacing:1.0pt'>upstreamacademy.com</a>
		</span>
	</p>
- Administration Progress
	- [`c0ce0ac`][] Item (In Progress)
- Final Plan
	- [x][0.3] FINAL release-ish (push public sqlite3)
	- [x][db1]-[x][db2]-[x][db3] document database

[`e13d35a`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/e13d35a1efdf7de1f9c7e6874e8fe3e8763d93d8
[`88f5295`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/88f5295c25810a94bfa7caed12591ec3b06cebc9
[`600c1d9`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/600c1d935ecd630fbd59f671f5b14ab461e994b4
[`a17c155`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/a17c155c7a083171b74669915923027b888dbd54
[`c6b9010`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/c6b9010000dec48cbb98436674f19c7b750c3fa4
[`190499f`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/190499f27506cb8ef973fce59b73811b06980140
[`84e4a5f`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/84e4a5f8acd19d0dab4497eae9b7679bfc8668c3
[`c0ce0ac`]: https://github.com/bign8-AZ/UA-purchasing-system/commit/c0ce0ac40a422efc5ad32d73798c2c673ab337d1
[0.3]: https://github.com/bign8-AZ/UA-purchasing-system/commit/d92125aaffc49f629d189a066a10b72b826a339f
[db1]: https://github.com/bign8-AZ/UA-purchasing-system/commit/39f8d3d858756b6d593efec2c77a75fc93ad2d36
[db2]: https://github.com/bign8-AZ/UA-purchasing-system/commit/bb229666985887f9a704029f2e46a278631119ce
[db3]: https://github.com/bign8-AZ/UA-purchasing-system/commit/db5d0dc5c4bbf01f7f2c213516a1994deff3a540

# Remaining

- Administration
	- Finish "Item administration" page
	- Files Manager
	- Firm Merge Feature
	- Purchases (manual add memberships)
- Team
	- Re-test with new db
	- get strings for final release

# Meeting notes

