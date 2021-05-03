<?php
/*
* Determines which class is used as a Cache Provider for long-term caching. It should be a subclass of QAbstractCacheProvider.
* Setting it to null will disable long-term caching. Current implementations are
*
* "QCacheProviderMemcache": this will use Memcache as the caching provider.
*   You must have the 'php5-memcache' package installed for this provider to work.
*
* "QCacheProviderLocalMemory": a local memory cache provider with a lifespan of the request
*   or session (if KeepInSession is configured).
*
* "QCacheProviderNoCahce": provider which does no caching at all
*
* "QMultiLevelCacheProvider": a provider that can combine multiple providers into one.
*   This can be used for example to combine the LocalMemory cache provider with the Memcache based provider.
*/
define("CACHE_PROVIDER_CLASS", null);

/*
 * Options passed to the constructor of the Caching Provider class above.
 * For QCacheProviderMemcache, it's an array, where each item is an associative array of
 * server configuration options.
 * Please see the documentation for the constructor for each provider for a description of the accepted
 * options.
 */
define ('CACHE_PROVIDER_OPTIONS' , serialize(
	array(
		array('host' => '127.0.0.1', 'port' => 11211, ),
		//array('host' => '10.0.2.2', 'port' => 11211, ), // adds a second server
	)
) );



