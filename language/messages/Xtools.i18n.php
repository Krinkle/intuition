<?php
/**
* Interface messages for tool "X!'s Tools"
*
* @toolowner Hedonil
* @toolowner Cyberpower678
* @toolowner TParis
* @toolowner X!
*/

$url = '//tools.wmflabs.org/xtools/';

$messages = array();

/**
 * English
 * @author Various
 */
$messages['en'] = array (
	'title_xtools' => 'X!\'s tools',
	'welcome' => 'Welcome to X!\'s tools!',
	'million' => 'Unbelievable. Absolutely unbelievable. This edit counter was created in December 2008, and in under 1.5 years, has amassed over 1 Million Hits. This is astounding. I thank everyone for their continued support of this tool throughout the years. Without your support, this tool would not be in existence. Let\'s hope for another million! --X! 14 May 2010',
	
	//toolnames
	'tool_ec' => 'Edit Counter',
	'tool_blame' => 'Article blamer',
	'tool_articleinfo' => 'Page history',
	'tool_pages' => 'Pages created',
	'tool_topedits' => 'Top edits',
	'tool_autoedits' => 'Automated edits',
	'tool_rangecontribs' => 'Range Contributions',
	'tool_bash' => 'Random quote',
	'tool_sc' => 'Quick, Dirty, Simple Edit Counter',
	'tool_rfa' => 'RfX Analysis',
	'tool_rfap' => 'RfX Vote Calculator',
	'tool_autoblock' => 'Autoblock',
	
	//descriptions
	'tool_ec_desc' => 'Analysis of user contributions',
	'tool_blame_desc' => 'Find addition of text in a page history',
	'tool_articleinfo_desc' => 'Get various statistics about the history of a page',
	'tool_pages_desc' => 'Get pages that have been created by a user',
	'tool_topedits_desc' => 'Get edits by a user, either Top edits per namespace or edits per page',
	'tool_autoedits_desc' => 'Automated edits with known tools',
	'tool_rangecontribs_desc' => 'Get contributions of IP ranges, multiple IP\'s or users',
	'tool_bash_desc' => 'Get quotes from the IRC Quote Database',
	'tool_sc_desc' => 'Quick user contribution analysis',
	'tool_rfa_desc' => 'Analyze Requests for Adminship / Bureaucratship pages',
	'tool_rfap_desc' => 'How did a user vote?',
	'tool_autoblock_desc' => 'Checks for autoblocked users',
	
	//errors
	'highreplag' => 'Caution: Replication lag is high, changes newer than $1 may not be shown.',
	'noexist' => '$1 does not exist',
	'noresult' => 'No matching results found for: $1',
	'norevisions' => 'No revisions found',
	'nograph' => 'User has not yet opted in. If you want to see graphs, please create $1 with any content or create $2 to opt-in across all Wikimedia wikis.',
	'nograph2' => 'Alternatively you can log in with Wikimedia OAuth (see also $1). That way, the more detailed results are for your eyes only.',
	'toomanyrevisions' => 'This article has over 50,000 revisions. Data for the first 50,000 are shown below.',
	'interrupted' => 'Sorry, but in order to save resources, a bot has automatically killed this query for being longer than $1 seconds.',
	'invalid_type' => 'Invalid type selected',
	'invalid_date' => 'Invalid date',
	'nocontribs' => 'No contributions found',
	'nowiki' => '$1 is not a valid wiki',
	'executed' => 'Executed in $1 second(s).',
	'memory' => 'Taken $1 megabytes of memory to execute.',
	'optional' => 'optional',
	
	//general
	'username' => 'Username',
	'users' => '{{PLURAL: $1|User|Users}}',		
	'searchresult' => 'Search result',
	'submit' => 'Submit',
	'source' => 'View Source',
	'bugs' => 'Bugs',
	'show' => 'show',
	'hide' => 'hide',
	'all' => 'all',	
	'wiki' => 'Wiki',
	'or' => 'or',
	'added' => 'Added',
	'deleted' => 'Deleted',
	'comment' => 'Comment',
	'date' => 'Date',
	'pages' => 'Pages',
	'byte' => 'Byte',
	'edits' => 'edits',
	'actions' => 'Actions',
	'actions_admin' => 'Admin actions',
	'others' => 'others',
	'select_language' => 'Select language',
	'translatelink' => 'Translate',
	'login' => 'Log in',
	'logout' => 'Log out',
	
	'seconds' => '{{PLURAL: $1|second|seconds}}',
	'minutes' => '{{PLURAL: $1|minute|minutes}}',
	'days' => '{{PLURAL: $1|day|days}}',
	'hours' => '{{PLURAL: $1|hour|hours}}',
	'weeks' => '{{PLURAL: $1|week|weeks}}',
	'months' => '{{PLURAL: $1|month|months}}',
	'years' => '{{PLURAL: $1|year|years}}',
	'revisions' => '{{PLURAL: $1|Revision|Revisions}}',
	'authors' => '{{PLURAL: $1|Author|Authors}}',
	
	'start' => 'Starting date',
	'end' => 'Ending date',
	'text' => 'Text',
	'namespace' => 'Namespace',
	'more' => 'More',
	'approximate' => 'approximate',
	'see_full_page_stats' => 'See full page statistics',
	'see_full_edit_counts' => 'See full values in Edit Counter',
	'editcounter' => 'editcounter',
	
	//pcount		
	'userid' => 'User ID',
	'mainspace' => 'Article',
	'groups' => 'User groups',
	'firstedit' => 'First edit',
	'latestedit' => 'Latest edit',
	'numedits' => 'Number of edits',
	'unique' => 'Unique pages edited',
	'average' => 'Average edits per page',
	'average_length' => 'Average change',
	'total' => 'Total edits',
	'pages_created' => 'Pages created',
	'pages_deleted' => 'Pages deleted',
	'pages_moved' => 'Pages moved',
	'files_uploaded' => 'Files uploaded',
	'deleted_edits' => 'Deleted edits',
	'edits_summary' => 'Edits with summary',
	'reverted' => 'Reverted edits',
	'thank' => 'Thank',
	'timecard' => 'Time card',
	
	'approve' => 'Approve',
	'unapprove' => 'Unapprove',
	'patrol' => 'Patrol',
	'block' => 'Block',
	'unblock' => 'Unblock',
	'protect' => 'Protect',
	'unprotect' => 'Unprotect',
	'delete' => 'Delete',
	'restore' => 'Restore',
	'import' => 'Import',
	
	'live' => 'Live edits',
	'namespacetotals' => 'Namespace Totals',
	'monthcounts' => 'Month counts',
	'topeditedpages' => 'Top edited pages',
	'file' => 'File',
	
	//autoedits
	'autoedits' => '(Semi-)automated edits',
	'percentage' => 'Percentage',
	
	//article blame
	'tosearch' => 'Text to search for',
	'nofollowredir' => 'Don\'t follow redirects',
	
	//Pages created
	'redirects' => 'Redirects',
	'redirfilter_none' => 'Include redirects and non-redirects',
	'redirfilter_onlyredirects' => 'Only include redirects',
	'redirfilter_noredirects' => 'Exclude redirects',
	
	//article history
	'article' => 'Article',
	'generalstats' => 'General statistics',
	'page' => 'Page title',
	'totaledits' => 'Total revisions',
	'minoredits' => 'Number of minor edits',
	'anonedits' => 'Number of IP edits',
	'botedits' => 'Number of bot edits',
	'firstedit' => 'First edit',
	'createdby' => 'Created by',
	'timebwedits' => 'Average time between edits',
	'maxadd' => 'Max. text added',
	'maxdel' => 'Max. text deleted',
	'toptenbyedits' => 'TOP 10 by edits',
	'toptenbytext' => 'TOP 10 by added text',
	'editspermonth' => 'Average number of edits per month',
	'editsperyear' => 'Average number of edits per year',
	'lastday' => 'Number of edits in the last day',
	'lastweek' => 'Number of edits in the last week',
	'lastmonth' => 'Number of edits in the last month',
	'lastyear' => 'Number of edits in the last year',
	'editorcount' => 'Number of editors',
	'editsperuser' => 'Average edits per user',
	'toptencount' => 'Edits made by the top 10%',
	'ips' => 'IPs',
	'minor' => 'Minor edits',
	'major' => 'Major edits',
	'topten' => 'Top 10%',
	'bottomninety' => 'Bottom 90%',

	'yearcounts' => 'Year counts',
	'count' => '# of edits',
	'alledits' => 'All edits',
	'graph' => 'Graph',
	'linegraph' => 'Edits over Time',
	'monthly' => 'Monthly',
	'cumulative' => 'Cumulative',
	'monthcounts' => 'Month counts',

	'sizegraph' => 'Article size over time',
	'usertable' => 'Top editors',
	'atbe' => 'Average time between edits',
	'avgsize' => 'Average page size',
	'pagesize' => 'Page size',
	'events' => 'Events',
	'pageviews' => 'Pageviews',
	'pagewatchers' => 'Page watchers',
	'links_in' => 'Links to this page',
	'links_out' => 'Links from this page',
	'links_ext' => 'External links',
	'topedits_per_namespace' => 'TOP edits per namespace',
	'edits_per_page' => 'Edits per page',
	
	//Range Contribs
	'rc_usage_0' => 'There are several ways to use this tool',
	'rc_usage_1' => 'Enter a CIDR range into the box, in the format:',
	'rc_usage_2' => 'Enter a list of IP\'s into the box, separated by newlines or |',
	'rc_usage_3' => 'Enter a list of Usernames into the box, separated by newlines or |',
	'no_valid_cidr_range' => 'Not a valid CIDR range',
	'summary' => 'Summary',
	'ip_range' => 'IP range',
	'ip_list' => 'IP list',
	'ip_start' => 'Starting IP',
	'ip_end' => 'Ending IP',
	'ip_number' => 'Possible IPs',
	'ip_found' => 'IPs found',
	'limit' => 'Limit',
	'resultbyname' => 'Result by name / IP',
	'resultbytime' => 'Result by time',
	
	//bash
	'quote_random' => 'Get a random quote',
	'quote_showall' => 'Show all quotes',
	'quote_number' => 'Quote number #',
			
	//RfX
	'support' => 'Support',
	'oppose' => 'Oppose',
	'neutral' => 'Neutral',
	'unknown' => 'Unknown',
	'dupes' => 'Dupes',
	'considered_usernames' => 'Considered usernames',
	'vote_msg' => '$1 has edited $2 $3 pages!',
	'rfx_intro' => 'This tool analyzes votes and identifies duplicate voters in a:',
	'rfx_bureaucrat' => 'This tool can also analyze Requests for bureaucratship pages',
	'rfx_page' => 'RfX page',
);

/** Message documentation (Message documentation)
 * @author Hedonil
 */
$messages['qqq'] = array(
	'title_xtools' => 'the tool\'s title',
	'welcome' => 'Welcome message',
	'tool_ec' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_blame' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_articleinfo' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_pages' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_topedits' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_autoedits' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_rangecontribs' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_bash' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_sc' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_rfa' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_rfap' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'tool_autoblock' => 'Top menu title: short phrase! or shortcut (to fit into the desgin) or leave untranslated',
	'million' => 'message of success; preserved for archiving purposes :-) {{Notranslate}}',
	'tool_ec_desc' => 'tool/modul description',
	'tool_blame_desc' => 'tool/modul description',
	'tool_articleinfo_desc' => 'tool/modul description',
	'tool_pages_desc' => 'tool/modul description',
	'tool_topedits_desc' => 'tool/modul description',
	'tool_autoedits_desc' => 'tool/modul description',
	'tool_rangecontribs_desc' => 'tool/modul description',
	'tool_bash_desc' => 'tool/modul description',
	'tool_sc_desc' => 'tool/modul description',
	'tool_rfa_desc' => 'tool/modul description',
	'tool_rfap_desc' => 'tool/modul description',
	'tool_autoblock_desc' => 'tool/modul description',
	'highreplag' => 'error if database replication is high',
	'noexist' => 'error: $1 = user or page',
	'noresult' => 'error: No matching results found for: $1 = search term',
	'norevisions' => 'error: No revisions found',
	'nograph' => 'message to opt-in. $1, $2 = page links',
	'nograph2' => 'message log in: $1 = OAuth help link',
	'toomanyrevisions' => 'error too many revisions',
	'interrupted' => 'error execution too long $1 = seconds.',
	'invalid_type' => 'error invalid selection',
	'invalid_date' => 'error invalid date',
	'nocontribs' => 'error no results',
	'nowiki' => 'error no valid wiki',
	'executed' => 'message execution time',
	'memory' => 'message execution memory.',
	'optional' => 'tooltip if input is optional',
	'username' => 'label for username input',
	'users' => 'wiki user(s)',		
	'searchresult' => 'header text for search result',
	'submit' => 'submit button text',
	'source' => 'link to source code',
	'bugs' => 'link to bug tracker',
	'show' => 'toggle visibility of section (short word)',
	'hide' => 'toggle visibility of section (short word)',
	'all' => 'selection menu e.g. all namespaces in modul: Pages created',	
	'wiki' => 'short label for Wiki',
	'or' => 'alternative',
	'added' => 'Added in context added text',
	'deleted' => 'Deleted in context deleted text',
	'comment' => 'revision comment',
	'date' => 'label for date',
	'pages' => 'plural label for wiki pages',
	'byte' => 'label for single character',
	'edits' => 'genral term for edits',
	'actions' => 'section header in modul: Page history: context user actions',
	'actions_admin' => 'section header in modul: Page history: context actions made by administrators',
	'others' => 'label in chart for the rest',
	'seconds' => 'time seconds',
	'minutes' => 'time minutes',
	'days' => 'time days',
	'hours' => 'time hours',
	'weeks' => 'time weeks',
	'months' => 'time months',
	'years' => 'time years',
	'revisions' => 'revisions of wiki page',
	'authors' => 'author of wiki page',
	'start' => 'menu option to limit the search',
	'end' => 'menu option to limit the search',
	'text' => 'Text',
	'namespace' => 'wiki namespace',
	'more' => 'link to get more results',
	'approximate' => 'addition in braces, to indicate that these figures are inaccurate',
	'see_full_page_stats' => 'label for a link to further details',
	'see_full_edit_counts' => 'label for a link to further details',
	'editcounter' => 'label for editcounter',
	'select_language' => 'link to select the GUI language',
	'translatelink' => 'link to translatewiki.net',
	'login' => 'label for Log in button',
	'logout' => 'label for Log out button',
	'userid' => 'registration id of a user (short term)',
	'mainspace' => 'common name for main namespace in this wiki eg: (en)Article, (de) Artikel',
	'groups' => 'User groups',
	'firstedit' => 'First edit of a user',
	'latestedit' => 'Latest edit of a user',
	'numedits' => 'Number of edits a user has made',
	'unique' => 'Unique pages edited',
	'average' => 'Average edits per page',
	'average_length' => 'Average change (in bytes) the user has made on an article',
	'total' => 'Total edits',
	'pages_created' => 'Pages a user has created',
	'pages_deleted' => 'Pages a user has deleted',
	'pages_moved' => 'Pages a user has moved',
	'files_uploaded' => 'Files a user has uploaded',
	'deleted_edits' => 'Deleted edits of a user',
	'edits_summary' => 'Edits with provided edit summary line',
	'reverted' => 'Reverted edits of a user',
	'thank' => 'Name for Thank action',
	'timecard' => 'Chart that shows the edit behaviour',
	'approve' => 'label of a log action, short word or leave untranslated',
	'unapprove' => 'label of a log action, short word or leave untranslated',
	'patrol' => 'label of a log action, short word or leave untranslated',
	'block' => 'label of a log action, short word or leave untranslated',
	'unblock' => 'label of a log action, short word or leave untranslated',
	'protect' => 'label of a log action, short word or leave untranslated',
	'unprotect' => 'label of a log action, short word or leave untranslated',
	'delete' => 'label of a log action, short word or leave untranslated',
	'restore' => 'label of a log action, short word or leave untranslated',
	'import' => 'label of a log action, short word or leave untranslated',
	'live' => 'Live edits, visible edits of a user',
	'namespacetotals' => 'Edits summarized by Namespace',
	'monthcounts' => 'Edits summarized by month',
	'topeditedpages' => 'Top edited pages oof a user',
	'file' => 'label for file',
	'autoedits' => 'edits with known tools like huggle',
	'percentage' => 'ration in percent',
	'tosearch' => 'label for search text',
	'nofollowredir' => 'form option eg. in modul: Page history',
	'redirects' => 'wiki pages that redirect to other pages (short word)',
	'redirfilter_none' => 'form option in modul: Pages created',
	'redirfilter_onlyredirects' => 'form option in modul: Pages created',
	'redirfilter_noredirects' => 'form option in modul: Pages created',
	'article' => 'label for a wiki page in main namespace',
	'generalstats' => 'main figures',
	'page' => 'caption title',
	'totaledits' => 'Total revisions',
	'minoredits' => 'Number of minor edits',
	'anonedits' => 'Number of IP edits',
	'botedits' => 'Number of bot edits',
	'firstedit' => 'First edit',
	'createdby' => 'Created by',
	'timebwedits' => 'the average time between two edits',
	'maxadd' => 'Max. text added by a user',
	'maxdel' => 'Max. text deleted by a user',
	'toptenbyedits' => 'chart labe for TOP 10 by edits',
	'toptenbytext' => 'chart labe for TOP 10 by added text',
	'editspermonth' => 'phrase as short as possible',
	'editsperyear' => 'phrase as short as possible',
	'lastday' => 'phrase as short as possible',
	'lastweek' => 'phrase as short as possible',
	'lastmonth' => 'phrase as short as possible',
	'lastyear' => 'phrase as short as possible',
	'editorcount' => 'Number of editors per page, phrase as short as possible',
	'editsperuser' => 'phrase as short as possible',
	'toptencount' => 'phrase as short as possible',
	'ips' => 'label for non-logged in users, plural',
	'minor' => 'edits marked as minor',
	'major' => 'normal edits, no minor edits',
	'topten' => 'chart label, as short as possible',
	'bottomninety' => 'chart label, as short as possible',
	'yearcounts' => 'Year counts',
	'count' => '# of edits',
	'alledits' => 'All edits',
	'graph' => 'Graph',
	'linegraph' => 'Edits over Time',
	'monthly' => 'Monthly',
	'cumulative' => 'Cumulative',
	'monthcounts' => 'Month counts',
	'sizegraph' => 'chart label',
	'usertable' => 'header',
	'atbe' => 'Average time between edits by a single user',
	'avgsize' => 'Average page size',
	'pagesize' => 'Page size',
	'events' => 'Events that have a log entry',
	'pageviews' => 'Web pageviews',
	'pagewatchers' => 'Wiki page watchers, short phrase',
	'links_in' => 'short phrase',
	'links_out' => 'short phrase',
	'links_ext' => 'short phrase',
	'topedits_per_namespace' => 'TOP edits per namespace',
	'edits_per_page' => 'Edits per page',
	'rc_usage_0' => 'Usage message in modul: Range contribs',
	'rc_usage_1' => 'Usage message in modul: Range contribs',
	'rc_usage_2' => 'Usage message in modul: Range contribs',
	'rc_usage_3' => 'Usage message in modul: Range contribs',
	'no_valid_cidr_range' => 'error message',
	'summary' => 'label for statistics summary',
	'ip_range' => 'label for an IP range',
	'ip_list' => 'label for IP list',
	'ip_start' => 'first IP in range',
	'ip_end' => 'last IP in rage',
	'ip_number' => 'number of calculated IPs in range',
	'ip_found' => 'number of IPs found in wiki logfiles',
	'limit' => 'option to specify a limit of results',
	'resultbyname' => 'label for results by name or IP',
	'resultbytime' => 'label for Results by time',
	'quote_random' => 'menu option modul: bash',
	'quote_showall' => 'menu option modul: bash',
	'quote_number' => 'menu option modul: bash',
	'support' => 'exact term for support on vote pages',
	'oppose' => 'exact term for oppose on vote pages',
	'neutral' => 'exact term for neutral on vote pages',
	'unknown' => 'neither support nor oppose nor neutral',
	'dupes' => 'duplicates',
	'considered_usernames' => 'detected usernames and known socks',
	'vote_msg' => '$1 =username, $2 = number, $3 = name of vote page eg: Requests for adminship',
	'rfx_intro' => 'This sentence is followed by a list of configured sites',
	'rfx_bureaucrat' => 'This tool can also analyze Requests for bureaucratship pages',
	'rfx_page' => 'RfX page',
);

/** German (Deutsch)
 * @author Hedonil
 */
$messages['de'] = array (
	'title_xtools' => 'X!\'s tools',
	'welcome' => 'Willkommen zu X!\'s tools!',
	'tool_articleinfo' => 'Seitenhistorie',
	'tool_rangecontribs' => 'Range Contributions',
	'tool_articleinfo_desc' => 'Verschiedene Statistiken über Versionen',
	'tool_ec_desc' => 'Analyse von Benutzerbeiträgen',
	'tool_pages_desc' => 'Seiten, die von einem Benutzer erstellt wurden',
	'tool_autoedits_desc' => '(Halb)-automatische Bearbeitungen mit bekannten Tools',
	'tool_topedits_desc' => 'Bearbeitungen eines Benutzers, entweder TOP nach Namensraum, oder Beiträge pro Seite',
	'tool_rfa_desc' => 'Analysiert Seiten von Admin- und Bürokratenkandiaturen',
	'tool_rfap_desc' => 'Wie hat ein Benutzer abgestimmt?',
	'tool_autoblock_desc' => 'Überprüft Benutzer mit Status: autoblocked',
	'tool_bash_desc' => 'Zitate aus der IRC Zitatesammlung',
	'tool_blame_desc' => 'Wann wurde ein bestimmter Text hinzugefügt',
	'tool_rangecontribs_desc' => 'Beiträge aus IP-Bereichen, von mehreren IPs oder Benutzern',
	'source' => 'Quelltext betrachten',
	'bugs' => 'Bugs',
	'select_language' => 'Sprache auswählen',
	'submit' => 'Absenden',
	'nowiki' => '$1 ist kein gültiges Wiki',
	'wiki' => 'Wiki',
	'or' => 'oder',
	'highreplag' => 'Achtung: Replag ist hoch, Änderungen neuer als $1 werden nicht angezeigt.',
	'invalid_date' => 'Ungültiges Datum.',
	'executed' => 'In $1 Sekunden ausgeführt',
	'memory' => 'Speicherverbrauch: $1 Megabyte.',
	'translatelink' => 'Übersetzen',
	'noresult' => 'Kein Suchergebnis für: $1',
	'optional' => 'optional',
	'seconds' => '{{PLURAL: $1|Sekunde|Sekunden}}',
	'minutes' => '{{PLURAL: $1|Minute|Minuten}}',
	'hours' => '{{PLURAL: $1|Stunde|Stunden}}',
	'days' => '{{PLURAL: $1|Tag|Tage}}',
	'weeks' => '{{PLURAL: $1|Woche|Wochen}}',
	'months' => '{{PLURAL: $1|Monat|Monate}}',
	'years' => '{{PLURAL: $1|Jahr|Jahre}}',
	'revisions' => '{{PLURAL: $1|Bearbeitung|Bearbeitungen}}',
	'authors' => '{{PLURAL: $1|Autor|Autoren}}',
	'see_full_page_stats' => 'Alle Seitenstatistiken',
	'see_full_edit_counts' => 'Alle Daten im Edit Counter',
	'editcounter' => 'Beitragszähler',
	'actions' => 'Handlungen',
	'actions_admin' => 'Admin Handlungen',
	'added' => 'Hinzugefügt',
	'deleted' => 'Gelöscht',
	'more' => 'Weitere',
	'namespace' => 'Namensraum',
	'all' => 'Alle',
	'approximate' => 'etwa',
	'comment' => 'Kommentar',
	'date' => 'Datum',
	'article' => 'Artikel',
	'page' => 'Seitentitel',
	'username' => 'Benutzername',
	'users' => '{{PLURAL: $1|Benutzer|Benutzer}}',
	'show' => 'anzeigen',
	'hide' => 'verbergen',
	'mainspace' => 'Artikel',
	'summary' => 'Zusammenfassung',
	'text' => 'Text',
	'redirects' => 'Weiterleitungen',
	'searchresult' => 'Suchergebnis',
	'pages' => 'Seiten',
	'file' => 'Datei',
	'login' => 'Anmelden',
	'logout' => 'Abmelden',
	'edits' => 'Bearbeitungen',
	'byte' => 'Zeichen',
	'others' => 'andere',
	'userid' => 'Benutzer-ID',
	'groups' => 'Benutzergruppen',
	'unique' => 'Bearbeitete Seiten',
	'numedits' => 'Bearbeitungen',
	'average' => 'Durchschnittliche Bearbeitungen pro Seite',
	'average_length' => 'Durchschittliche Veränderung',
	'live' => 'Sichtbare Bearbeitungen',
	'total' => 'Gesamte Bearbeitungen',
	'autoedits' => '(Halb-)automatische Bearbeitungen',
	'pages_created' => 'Seiten erstellt',
	'pages_deleted' => 'Seiten gelöscht',
	'pages_moved' => 'Seiten verschoben',
	'files_uploaded' => 'Hochgeladene Dateien',
	'deleted_edits' => 'Gelöschte Bearbeitungen',
	'reverted' => 'Revertierte Bearbeitungen',
	'thank' => 'Dankeschön',
	'approve' => 'Sichtung',
	'unapprove' => 'Sichtung revertiert',
	'edits_summary' => 'Zusammenfassúng verwendet',
	'timecard' => 'Zeitkarte',
	'noexist' => '$1 existiert nicht. ',
	'interrupted' => 'Uups, um die System-Ressourcen zu schonen, hat ein Bot die Abfrage terminiert, weil sie länger als $1 Sekunden gedauert hat.',
	'toomanyrevisions' => 'Dieser Artikel hat mehr als 50,000 Versionen, es werden daher nur Daten für die ersten 50,000 Versionen angezeigt. ',
	'nograph' => 'Der Nutzer hat der Teilnahme nicht zugestimmt. Zur Darstellung weiterer Daten, erstelle bitte $1 mit beliebigem Inhalt oder $2, um ein Opt-in für alle Wikimedia Wikis auzuführen.',
	'nograph2' => 'Alternativ kann eine Anmeldung über Wikimedia OAuth erfolgen (s.a. $1). Auf diese Weise sind die detailierteren Angaben nur für den eigenen Account einsehbar.',
	'nofollowredir' => 'Weiterleitungen ignorieren',
	'start' => 'Startdatum',
	'end' => 'Enddatum',
	'norevisions' => 'Keine Versionen gefunden. ',
	'generalstats' => 'Allgemeine Übersicht',
	'totaledits' => 'Gesamtzahl der Versionen',
	'minoredits' => 'Kleine Bearbeitungen',
	'anonedits' => 'Bearbeitungen durch anonyme Benutzer (IPs)',
	'botedits' => 'Bearbeitungen durch Bots',
	'firstedit' => 'Erste Bearbeitung',
	'latestedit' => 'Aktuellste Bearbeitung',
	'createdby' => 'Erstellt von',
	'timebwedits' => 'Durschnittliche Zeit zwischen Bearbeitungen',
	'editspermonth' => 'Durchschnittliche Zahl der Bearbeitungen pro Monat',
	'editsperyear' => 'Durchschnittliche Zahl der Bearbeitungen pro Jahr',
	'lastday' => 'Bearbeitungen gestern',
	'lastweek' => 'Bearbeitungen letzte Woche',
	'lastmonth' => 'Bearbeitungen letzten Monat',
	'lastyear' => 'Bearbeitungen letztes Jahr',
	'editorcount' => 'Anzahl Autoren',
	'editsperuser' => 'Durchschnittliche Bearbeitungen pro Benutzer',
	'toptencount' => 'Bearbeitungen durch die Top 10% der Autoren',
	'namespacetotals' => 'Übersicht nach Namensraum',
	'ips' => 'IPs',
	'minor' => 'Kleine Bearb.',
	'major' => 'Normale Bearb.',
	'topten' => 'Top 10%',
	'bottomninety' => 'sonstige 90%',
	'yearcounts' => 'Jahresübersicht',
	'count' => '# Bearbeitungen',
	'alledits' => 'Alle Bearbeitungen',
	'graph' => 'Zeitverlauf',
	'linegraph' => 'Zeitverlauf der Bearbeitungen',
	'monthly' => 'monatlich',
	'cumulative' => 'Gesamt',
	'monthcounts' => 'Monatsübersicht',
	'topeditedpages' => 'Top bearbeitete Seiten',
	'timecard' => 'Zeitkarte',
	'sizegraph' => 'Zeitverlauf der Artikelgröße ',
	'usertable' => 'Top Bearbeiter',
	'atbe' => 'Durchschnittliche Zeit zwischen den Bearbeitungen',
	'avgsize' => 'Durchschnittliche Größe des Artikels',
	'maxadd' => 'Max. hinzugefügter Text',
	'maxdel' => 'Max. gelöschter Text',
	'toptenbyedits' => 'TOP 10 nach Bearbeitungen',
	'toptenbytext' => 'TOP 10 nach hinzugefügtem Text',
	'events' => 'Ereignisse',
	'pagesize' => 'Seitengröße',
	'pageviews' => 'Seitenaufrufe',
	'pagewatchers' => 'Seitenbeobachter',
	'links_in' => 'Links zu dieser Seite',
	'links_out' => 'Links von dieser Seite',
	'links_ext' => 'Externe Links',
	'rc_usage_0' => 'Das Tool kann auf mehrere Arten verwendet werden',
	'rc_usage_1' => 'Eingabe eines CIDR-Bereichs im Format:',
	'rc_usage_2' => 'Eingabe einer Liste von IP-Adressen, eine Zeile pro IP oder Trennung mit |',
	'rc_usage_3' => 'Eingabe einer Liste von Benutzernamen, eine Zeile pro Name oder Trennung mit |',
	'no_valid_cidr_range' => 'Kein gültiger CIDR-Bereich ',
	'invalid_type' => 'Ungültiger Typ ausgewählt',
	'nocontribs' => 'Keine Beiträge gefunden',
	'ip_range' => 'IP Bereich',
	'ip_list' => 'IP Liste',
	'ip_start' => 'Beginn IP',
	'ip_end' => 'Ende IP',
	'ip_number' => 'Mögliche IPs',
	'ip_found' => 'Gefundene IPs',
	'limit' => 'Limit',
	'resultbyname' => 'Ergebnis nach IP/Name',
	'resultbytime' => 'Ergebnis nach Zeit',
	'tosearch' => 'Suchtext',
	'topedits_per_namespace' => 'TOP nach Namensraum',
	'edits_per_page' => 'Beiträge pro Seite',
	'percentage' => 'Prozentsatz',
	'redirfilter_none' => 'Einschließlich Weiterleitungen',
	'redirfilter_onlyredirects' => 'Nur Weiterleitungen',
	'redirfilter_noredirects' => 'Ohne Weiterleitungen',
	'quote_random' => 'Zufälliges Zitat',
	'quote_showall' => 'Alle Zitate',
	'quote_number' => 'Zitat Nummer #',
	'support' => 'Pro',
	'oppose' => 'Kontra',
	'neutral' => 'Enthaltung',
	'unknown' => 'Unbekannt',
	'dupes' => 'Duplikate',
	'considered_usernames' => 'Berücksichtigte Benutzernamen',
	'vote_msg' => '$1 hat $2 $3-Seiten bearbeitet!',
	'rfx_intro' => 'Dieses Tool analysiert Abstimmungen und identifiziert Mehrfachwähler in einer:',
	'rfx_bureaucrat' => 'Es können auch Bürokratenkandidaturen-Seiten analysiert werden',
	'rfx_page' => 'Wahlseite',
);

/** Spanish (español)
 * @author Various
 */
$messages['es'] = array (
	'title_xtools' => 'La herramienta de X!',
	'source' => 'Ver código fuente',
	'select_language' => 'Selecciona idioma',
	'executed' => 'Ejecutado en  $1 segundos',
	'memory' => 'Utilizó $1 megabytes de memoria para ejecutar.',
	'submit' => 'Enviar',
	'nowiki' => '$1 esta Wiki no es válida',
	'bugs' => 'Bugs',
	'highreplag' => 'Precaución: Replicación de retraso es alta, los cambios más recientes que $ 1 no puede ser mostrada.',
	'seconds' => '{{PLURAL: $1|segundo|segundos}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'days' => '{{PLURAL: $1|día|días}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'weeks' => '{{PLURAL: $1|semana|semanas}}',
	'months' => '{{PLURAL: $1|mes|meses}}',
	'years' => '{{PLURAL: $1|año|años}}',
	'translatelink' => 'traducir',
	'noexist' => '$1 no existe',
	'article' => 'Artículo',
	'noexist' => '$1 no existe.',
	'toomanyrevisions' => 'Este artículo tiene mas de 50,000 revisiones. Los datos de las primeras 50,000 son mostrados debajo.',
	'nofollowredir' => 'No seguir redirecciones',
	'start' => 'Fecha de inicio',
	'end' => 'Fecha de fin',
	'norevisions' => 'No se encontraron revisiones',
	'generalstats' => 'Estadísticas generales',
	'page' => 'Título de la página',
	'totaledits' => 'Revisiones totales',
	'minoredits' => 'Número de ediciones menores',
	'anonedits' => 'Número de ediciones de IP',
	'firstedit' => 'Primera edicion',
	'createdby' => 'Creado por',
	'latestedit' => 'Edición más reciente',
	'timebwedits' => 'Tiempo estimado entre ediciones',
	'editspermonth' => 'Promedio de número de ediciones por mes',
	'editsperyear' => 'Promedio de número de ediciones por año',
	'lastday' => 'Número de ediciones en el último día',
	'lastweek' => 'Número de ediciones en la última semana',
	'lastmonth' => 'Número de ediciones en el último mes',
	'lastyear' => 'Número de ediciones en el último año',
	'editorcount' => 'Número de usuarios',
	'editsperuser' => 'Ediciones promedio por usuario',
	'toptencount' => 'Número de ediciones hechas por el top 10% de usuarios activos',
	'users' => '{{PLURAL: $1|Usuario|Usuarios}}',
	'ips' => 'IP',
	'minor' => 'Menor',
	'major' => 'Mayor',
	'topten' => 'Top 10%',
	'bottomninety' => 'Últimos 90%',
	'count' => '# de ediciones',
	'alledits' => 'Todas las ediciones',
	'graph' => 'Gráfico',
	'linegraph' => 'Ediciones durante el tiempo',
	'monthly' => 'Mensual',
	'cumulative' => 'Acumulativa',
	'monthcounts' => 'Contador de mes',
);

/** French (français)
 * @author Various
 */
$messages['fr'] = array (
	'title_xtools' => 'Outils de X!',
	'source' => 'Voir source',
	'select_language' => 'Sélectionner la langue',
	'executed' => 'Exécuté en $1 secondes',
	'memory' => '$1 megabytes de mémoire utilisés pour l\'exécution. ',
	'submit' => 'Envoyer',
	'nowiki' => '$1 n\'est pas un wiki valide',
	'bugs' => 'Bugs',
	'highreplag' => 'Attention : le délai de réplication est élevé, les modifications de moins de $1 ne sont pas prises en compte.',
	'seconds' => '{{PLURAL: $1|seconde|secondes}}',
	'minutes' => '{{PLURAL: $1|minute|minutes}}',
	'days' => '{{PLURAL: $1|jour|jours}}',
	'hours' => '{{PLURAL: $1|heure|heures}}',
	'weeks' => '{{PLURAL: $1|semaine|semaines}}',
	'months' => '{{PLURAL: $1|mois|mois}}',
	'years' => '{{PLURAL: $1|année|années}}',
	'wiki' => 'Wiki',
	'translatelink' => 'Traduisez',
	'noexist' => '$1 n\'existe pas',
	'article' => 'Article',
	'createdby' => 'Créée par',
	'users' => '{{PLURAL: $1|Utilisateur|Utilisateurs}}',
	'ips' => 'IPs',
	'minor' => 'Mineur',
	'major' => 'Majeur',
	'username' => 'Nom d\'utilisateur',
	'tool_autoedits' => 'Compteur d\'éditions automatisées',
);

/** Hindi (हिन्दी)
 * @author Various
 */
$messages['hi'] = array (
	'title_xtools' => 'X! के औजार',
	'source' => 'स्रोत देखें',
	'select_language' => 'भाषा चुनें',
	'submit' => 'जमा करें',
	'nowiki' => '$1 एक वैध विकि नहीं है।',
	'wiki' => 'विकि',
	'highreplag' => 'सावधानः प्रतिकृति  अन्तराल. ऊँचा है, $1 से नए परिवर्तन हो सकता है कि ना दिखें।',
	'executed' => '$1 सेकिण्डों में निष्पादित',
	'translatelink' => 'अनुवाद',
	'article' => 'लेख',
	'noexist' => '$1 अस्तित्व में नहीं है।',
	'toomanyrevisions' => 'इस लेख पर ५०,००० संशोधन किए गए हैं। पहले ५०,००० के लिए डेटा के नीचे दिखाए गए हैं।',
	'nofollowredir' => 'पुनर्निर्देश का पालन न करें ',
	'start' => 'आरम्भ तिथि',
	'end' => 'समाप्ति तिथि',
	'norevisions' => 'कोई संशोधन नहीं मिले',
	'generalstats' => 'सामान्य सांख्यिकी',
	'page' => 'पृष्ठ शीर्षक',
	'totaledits' => 'कुल संशोधन',
	'minoredits' => 'लघु सम्पादन संख्या',
	'anonedits' => 'आईपी सम्पादनों की संख्या',
	'firstedit' => 'प्रथम सम्पादन',
	'createdby' => 'के द्वारा बनाई गई',
	'latestedit' => 'सबसे हाल का सम्पादन',
	'timebwedits' => 'सम्पादनों के बीच का औसत समय',
	'editspermonth' => 'प्रति मास औसत सम्पादन',
	'editsperyear' => 'प्रति वर्ष औसत सम्पादन',
	'lastday' => 'पिछले दिन की सम्पादन संख्या',
	'lastweek' => 'पिछले सप्ताह की सम्पादन संख्या',
	'lastmonth' => 'पिछले मास की सम्पादन संख्या',
	'lastyear' => 'पिछले वर्ष की सम्पादन संख्या',
	'editorcount' => 'प्रयोक्ताओं की संख्या',
	'editsperuser' => 'प्रति प्रयोक्ता औसत सम्पादन',
	'toptencount' => 'शीर्ष १०% सक्रिय प्रयोक्ताओं द्वारा किए गए सम्पादन',
	'users' => '{{PLURAL: $1|प्रयोक्तानाम|प्रयोक्ता}}',
	'ips' => 'आईपी',
	'minor' => 'अप्रधान',
	'major' => 'प्रधान',
	'topten' => 'शीर्ष १०%',
	'bottomninety' => 'निचले ९०%',
	'yearcounts' => 'वार्षिक गिनती',
	'count' => 'सम्पादनों की #',
	'alledits' => 'सभी सम्पादन',
	'graph' => 'बिन्दुरेख',
	'linegraph' => 'समय के साथ सम्पादन',
	'monthly' => 'मासिक',
	'cumulative' => 'संचयी',
	'monthcounts' => 'मासिक गिनती',
	'sizegraph' => 'समय के साथ लेख का आकार',
	'usertable' => 'शीर्ष ५० सम्पादक',
	'atbe' => 'सम्पादनों के बीच का औसत समय',
	'avgsize' => 'औसत लेक का आकार',
);

/** Italian (italiano)
 * @author Various
 */
$messages['it'] = array (
	'title_xtools' => 'Strumenti di X!',
	'source' => 'Visualizza sorgente',
	'select_language' => 'Scegli la lingua',
	'executed' => 'Eseguito in $1 secondi',
	'memory' => 'Utilizzati $1 megabyte di memoria per eseguire.',
	'submit' => 'Invia',
	'nowiki' => '$1 non è una wiki valida',
	'bugs' => 'Bug',
	'highreplag' => 'Attenzione: Il lag di risposta è troppo alto, le modifiche posteriori a $1 potrebbero non essere visualizzate.',
	'seconds' => '{{PLURAL: $1|secondo|secondi}}',
	'minutes' => '{{PLURAL: $1|minuto|minuti}}',
	'hours' => '{{PLURAL: $1|ora|ore}}',
	'days' => '{{PLURAL: $1|giorno|giorni}}',
	'weeks' => '{{PLURAL: $1|settimana|settimane}}',
	'months' => '{{PLURAL: $1|mese|mesi}}',
	'years' => '{{PLURAL: $1|anno|anni}}',
	'wiki' => 'Wiki',
	'translatelink' => 'traduci',
	'noexist' => '$1 non esiste',
	'article' => 'Voce',
	'noexist' => '$1 non esiste.',
	'toomanyrevisions' => 'Questa voce ha più di 50000 modifiche. I dati per le prime 50000 sono mostrati qua sotto.',
	'nofollowredir' => 'Non considerare i redirect',
	'start' => 'Data della prima modifica',
	'end' => 'Data dell\'ultima modifica',
	'norevisions' => 'Non sono state trovate modifiche',
	'generalstats' => 'Statistiche generali',
	'page' => 'Titolo della pagina',
	'totaledits' => 'Modifiche totali',
	'minoredits' => 'Number of minor edits',
	'anonedits' => 'Number of IP edits',
	'firstedit' => 'Prima modifica',
	'createdby' => 'Creato da',
	'latestedit' => 'Ultima modifica',
	'timebwedits' => 'Tempo medio fra le modifiche',
	'editspermonth' => 'Media delle modifiche per mese',
	'editsperyear' => 'Media delle modifiche per anno',
	'lastday' => 'Numero delle modifiche nelle ultime 24 ore',
	'lastweek' => 'Numero delle modifiche nell\'ultima settimana',
	'lastmonth' => 'Numero delle modifiche nell\'ultimo mese',
	'lastyear' => 'Numero delle modifiche nell\'ultimo anno',
	'editorcount' => 'Numero di utenti',
	'editsperuser' => 'Media delle modifiche per utente',
	'toptencount' => 'Number of edits made by the top 10% of active users',
	'users' => '{{PLURAL: $1|Utente|Utenti}}',
	'ips' => 'IP',
	'minor' => 'Minore',
	'major' => 'Maggiore',
	'topten' => 'Top 10%',
	'bottomninety' => 'Bottom 90%',
	'count' => 'numero di modifiche',
	'alledits' => 'Tutte le modifiche',
	'graph' => 'Grafico',
	'username' => 'Nome utente',
);

/** Sinhala (සිංහල)
 * @author Various
 */
$messages['si'] = array (
	'title_xtools' => 'X!\'ගේ මෙවලම්',
	'source' => 'මූලාශ්‍රය පෙන්වන්න',
	'select_language' => 'භාෂාව තෝරන්න',
	'executed' => 'තත්පර $1 දී ක්‍රමලේඛිතයි',
	'memory' => 'මතකයෙන් මෙගාබයිට $1  ක් ක්‍රමලේඛණය සඳහා භාවිතා කෙරිණි.',
	'submit' => 'යවන්න',
	'nowiki' => '$1 වලංගු විකියක් නොවේ.',
	'bugs' => 'Bugs',
	'highreplag' => 'අවවාදය: ප්‍රතිඋත්තර පමාව. වැඩියි, එනිසා $1 ට වැඩි සංස්කරණයන් දර්ශනය නොවනු ඇත.',
	'wiki' => 'විකි',
	'translatelink' => 'පරිවර්තනය',
	'noexist' => '$1 අඩංගු නොවේ.',
	'article' => 'ලිපිය',
	'noexist' => '$1 අඩංගු නොවේ.',
	'toomanyrevisions' => 'මෙම ලිපිය‍ට 50,000ට වඩා  සංස්කරණ පවතී. Data for the first 50,000 are shown below.',
	'nofollowredir' => 'යළි යොමු කිරීම් භාවිතා නොකරන්න.',
	'start' => 'ඇරඹුම් දිනය',
	'end' => 'අවසන් දිනය',
	'norevisions' => 'කිසිදු සංස්කරණයක් නැත.',
	'generalstats' => 'ප්‍රධාන සංඛ්‍යාලේඛන',
	'page' => 'පිටු ශීර්ෂය',
	'totaledits' => 'සියළු සංස්කරණ',
	'minoredits' => 'සුළු සංස්කරණ ගණන',
	'anonedits' => 'IP සංස්කරණ ගණන',
	'firstedit' => 'පළමු සංස්කරණය',
	'latestedit' => 'මෑත සංස්කරණය',
	'timebwedits' => 'සංස්කරණ අතර මධ්‍යයන්‍ය කාලය',
	'editspermonth' => 'මසක සංස්කරණ අතර මධ්‍යයන්‍ය කාලය',
	'editsperyear' => 'වසරක සංස්කරණ අතර මධ්‍යයන්‍ය කාලය',
	'lastday' => 'ඊයේ සිදුකළ සංස්කරණ ගණන',
	'lastweek' => 'පසුගිය සතියේ සිදුකළ සංස්කරණ ගණන',
	'lastmonth' => 'පසුගිය මාසයේ සිදුකළ සංස්කරණ ගණන',
	'lastyear' => 'පසුගිය අවුරුද්දේ සිදුකළ සංස්කරණ ගණන',
	'editorcount' => 'පරිශීලකයන් ගණන',
	'users' => '{{PLURAL: $1|පරිශීලකයන්|පරිශීලකයන්}}',
	'ips' => 'IPs',
	'minor' => 'සුළු',
	'major' => 'ප්‍රධාන',
	'topten' => 'අග්‍ර 10%',
	'bottomninety' => 'අන්තිම 90%',
	'yearcounts' => 'වාර්ෂික ගණනයන්',
	'count' => 'සංස්කරණයන්ගෙන් # ක්',
	'alledits' => 'සියළු සංස්කරණ',
	'graph' => 'ප්‍රස්ථාරය',
	'monthly' => 'මාසික',
	'username' => 'පරිශීලක නාමය',
);
