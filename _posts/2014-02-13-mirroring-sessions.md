---
layout: post
title: Mirroring Sessions from Production to Development
categories: process
---
This process describes how to duplicate a production session on develop.

1. Obtain your production `sessionID` by navigating to the following URL:  
<http://payment.upstreamacademy.com/dev/interface.php?c=test&a=getSession>
2. Assign production `sessionID` to development `sessionID`
	1. Move to your development environment: <http://localhost:4001>
	2. Open development tools (`F12` in most browsers)
	3. Navigate to the *console* tab or section
	4. Type the following command:

		```javascript
		localStorage.setItem('sessionID', 'xxx'); // Replace xxx with sessionID from step 1
		```
3. Refresh development (`F5`) and you are good to go.