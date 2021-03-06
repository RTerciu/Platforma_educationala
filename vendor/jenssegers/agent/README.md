Laravel 4 User Agent
====================

[![Build Status](https://travis-ci.org/jenssegers/Laravel-Agent.png?branch=master)](https://travis-ci.org/jenssegers/Laravel-Agent) [![Coverage Status](https://coveralls.io/repos/jenssegers/Laravel-Agent/badge.png)](https://coveralls.io/r/jenssegers/Laravel-Agent)

A user agent class for Laravel 4, based on [Mobile Detect](https://github.com/serbanghita/Mobile-Detect) with extended functionality.

*The previous version is still available under the 1.0.0 tag.*

Installation
------------

Add the package to your composer.json and run `composer update`.

	{
	    "require": {
	        "jenssegers/agent": "*"
	    }
	}

Add the service provider in `app/config/app.php`:

	'Jenssegers\Agent\AgentServiceProvider',

And add the Agent alias to `app/config/app.php`:

	'Agent'            => 'Jenssegers\Agent\Facades\Agent',

Basic Usage
-----------

All of the original [Mobile Detect](https://github.com/serbanghita/Mobile-Detect) functionality is still available, check out more examples over at https://github.com/serbanghita/Mobile-Detect/wiki/Code-examples

### Is?

Check for a certain property in the user agent.

	Agent::is('Windows');
	Agent::is('Firefox');
	Agent::is('iPhone');
	Agent::is('OS X');

### Magic is-method

Magic method that does the same as the previous `is()` method:

	Agent::isAndroidOS();
	Agent::isNexus();
	Agent::isSafari();

### Mobile detection

Check for mobile device:

	Agent::isMobile();
	Agent::isTablet();

### Match user agent

Search the user agent with a regular expression:

	Agent::match('regexp');

Additional Functionality
------------------------

Since the original library was inspired on CodeIgniter, I decided to add some additional functionality:

### Accept languages

Get the browser's accept languages. Example:

	$languages = Agent::languages();
	// ['nl-nl', 'nl', 'en-us', 'en']

### Device name

Get the device name, if mobile. (iPhone, Nexus, AsusTablet, ...)

	Agent::device();

### Operating system name

Get the operating system. (Ubuntu, Windows, OS X, ...)

	Agent::platform();

### Browser name

Get the browser name. (Chrome, IE, Safari, Firefox, ...)

	Agent::browser();

### Robot detection

Check if the user is a robot.

	Agent::isRobot();
