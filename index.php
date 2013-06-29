<?php
$TOKEN = "<ENTER_YOUR_ACCESS_TOKEN_HERE>";
$REPOSITORYHOSTING_URL = '<ENTER_YOUR_REPOSITORYHOSTING_URL_HERE>';

$xml = file_get_contents('php://input');


$domdoc = new DOMDocument('1.0', 'UTF-8');
$domdoc->loadXML($xml);
$REVISION = $domdoc->getElementsByTagName('revision')->item(0)->nodeValue;
$AUTHOR = explode(' (', $domdoc->getElementsByTagName('author')->item(0)->nodeValue);
$AUTHOR = $AUTHOR[0];
$MESSAGE = $domdoc->getElementsByTagName('log')->item(0)->nodeValue;
$BRANCH = $domdoc->getElementsByTagName('branch')->item(0)->nodeValue;
$URL = $REPOSITORYHOSTING_URL.'/commit/'.$REVISION.'?js=1';

$curlCommand = "curl -H \"X-TrackerToken: $TOKEN\" -X POST -H \"Content-type: application/xml\" -d \"<source_commit><message>$MESSAGE</message><author>$AUTHOR</author><commit_id>$REVISION</commit_id><url>$URL</url></source_commit>\" http://www.pivotaltracker.com/services/v4/source_commits";

