<?php
/**
 * A Instagram API Method Map
 *
 * Refer to the apis plugin for how to build a method map
 * https://github.com/ProLoser/CakePHP-Api-Datasources
 *
 * @link http://instagram.com/developer/
 */
$config['Apis']['Instagram']['hosts'] = array(
	'rest' => 'https://api.instagram.com/v1',
	'oauth' => 'https://api.instagram.com/oauth'
);
$config['Apis']['Instagram']['read'] = array(
	// field
	'media' => array(
		'media/search' => array(
			'lat',
			'lng',
			'optional' => array(
				'min_timestamp',
				'max_timestamp',
				'distance',
			),
		),
		'media/:media-id' => array(
			'media-id',
		),
		'users/:user-id/media/recent' => array(
			'optional' => array(
				'count',
				'max_timestamp',
				'min_timestamp',
				'min_id',
				'max_id',
			),
		),
		'media/popular' => array(),
	),
	'users' => array(
		// Get basic information about a user.
		'users/:user-id' => array(
			'user-id'
		),
		'users/search' => array(
			'q',
			'optional' => array(
				'count'
			)
		)
	),
	// http://doc.jsfiddle.net/api/get_username.html
	'feed' => array(
		// See the authenticated user's feed.
		'users/self/feed' => array(
			'optional' => array(
				'count',
				'min_id',
				'max_id',
			),
		),
	),
);

$config['Apis']['Instagram']['create'] = array(
	// http://doc.jsfiddle.net/api/post.html
	'media' => array(
		'api/post/:framework/:version/dependencies/:dependencies' => array(
			'framework', // the desired framework name. Which framework should be loaded with the fiddle (vanilla for plain JavaScript)
			'version', // substring of the framework version - the last passing will be used. If 1.3 will be given, jsFiddle will use the latest search result. it will favorize 1.3.2 over 1.3.1 and 1.3
			'dependencies', // comma separated list of dependency substrings. It would mark any dependency containing the substring.
			'optional' => array(
				'html', 'js', 'css', // code for specific panels
				'resources', // a comma separated list of external resources
				'title', // title of the fiddle
				'description', // description of the fiddle
				'normalize_css', // yes or no - should normalize.css be loaded before any CSS declarations?
				'dtd', // substring of the chosen DTD (i.e. “html 4”)
			),
		),
		'api/post/:framework/:version' => array(
			'framework',
			'version',
			'optional' => array(
				'html', 'js', 'css',
				'resources',
				'title',
				'description',
				'normalize_css',
				'dtd',
			),
		),
	),
);