<?php
/**
 * This script will allow the export of complete user time-lines from the twitter
 * service. It joins together all pages of status updates into one large XML block
 * that can then be reformatted/processed with other tools.
 *
 * @since 10/13/08
 *
 * @copyright Copyright © 2008, Adam Franco
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License (GPL)
 */

$user = 'steveu';	// Replace this with your user name.

header('Content-type: text/plain');

$allDoc = new DOMDocument;
$root = $allDoc->appendChild($allDoc->createElement('statuses'));
$root->setAttribute('type', 'array');

$page = 1;
do {
	$numStatus = 0;

	$pageDoc = new DOMDocument;
	$res = @$pageDoc->load('http://twitter.com/statuses/user_timeline/'.$user.'.xml?page='.$page);
	if (!$res) {
		print "\n\n**** Error loading page $page ****";
		exit;
	}
	foreach ($pageDoc->getElementsByTagName('status') as $status) {
		$root->appendChild($allDoc->createTextNode("\n"));
		$root->appendChild($allDoc->importNode($status, true));
		$numStatus++;
	}

	print "\nLoaded page $page with $numStatus status updates.";
	flush();

	$page ++;
	sleep(1);

} while ($numStatus);

print "\nDone loading timeline.";
print "\n\n\n";

$root->appendChild($allDoc->createTextNode("\n"));
print $allDoc->saveXml();