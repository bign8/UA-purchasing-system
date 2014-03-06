---
layout: post
title:  Weekly Update
categories: update
---

- Fixing notes from Jenny
	- [x] on cart go back to website link
	- [x] hit enter on login screen
	- [x] fix error with removing custom payments
- Fixing Errors found by Georgia in Email
	- On the ELA registration, we need them to add attendees.  It's going to questions without picking a participant.
		- Added (`a17c155`)
	- When I tried to add Kelsey, to the conference, I got this error.  
	![Image Error](/img/badConf.jpg)
		- Fixed (`c6b9010`) - Issue was with not assigning values for un-required fields
	- I'm also not sure why it says "select employee" on the bottom.  Is this actually a cancel button?
		- Removed upon request (`190499f`)
	- After I choose employees, I get this message:  
	![Image Error 2](/img/redirectError.jpg)
		- Unable to reproduce
	- Modify reset password email and adding footer
		- Complete (`84e4a5f`)
	<p style='font-family:"Palatino Linotype","serif";font-variant:small-caps;'>
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
	- Working on the hardest thing now...
- Final Plan
	- [x] push public sqlite3
	- [x] FINAL release-ish
	- [x] document database
	- retest with new db
	- get strings for final release
