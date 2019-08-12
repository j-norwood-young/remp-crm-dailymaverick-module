# A REMP CRM Daily Maverick module

## Installation

Copy to app/modules/DailyMaverickModule

In app/config/config.local.neon:
```
services:
	frontendMenu:
		setup:
			- setTemplate('../../../../../../app/modules/DemoModule/templates/frontend_menu.latte')
```
