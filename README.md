repositoryhosting-pivotal
=========================

A simple XML POST handler for handling post-receive requests from repositoryhosting.com git repos and apply the stories in pivotal tracker

## Installation

Installation is very simple.

[-] Open index.php
[-] Replace <ENTER_YOUR_ACCESS_TOKEN_HERE> and <ENTER_YOUR_REPOSITORYHOSTING_URL_HERE> with relevant data (pivotal tracker acces token and git repository URL repository respectively)
[-] Host index.php in some convenient place
[-] Apply repositoryhosting.com git repository configuration to POST XML data after pull (enter the URL of the convenient place mentioned before)

Optionally you can setup basic HTTP authentication, however it will work anyway.

## Have fun!
