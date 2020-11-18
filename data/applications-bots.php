<?php

namespace WhichBrowser\Data;

Applications::$BOTS = [
    [ 'name' => '80legs',                       'id'    => '008',      'regexp' => '/(?:^|\s)008\/([0-9.]*)/u' ],
    [ 'name' => '360spider',                    'id'    => '360',      'regexp' => '/360Spider/u' ],
    [ 'name' => '360spider',                    'id'    => '360',      'regexp' => '/360spider-image/u' ],
    [ 'name' => 'A6 Indexer',                   'id'    => 'a6',      'regexp' => '/A6-Indexer(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Aboundex',                     'id'    => 'abound',      'regexp' => '/Aboundex\/([0-9.]*)/u' ],
    [ 'name' => 'Ad Muncher',                   'id'    => 'muncher',      'regexp' => '/Ad Muncher v([0-9.]*)/u' ],
    [ 'name' => 'Adaxas',                       'id'    => 'adaxas',      'regexp' => '/Adaxas Spider/u' ],
    [ 'name' => 'AddThis.com',                  'id'    => 'addthis',      'regexp' => '/AddThis.com/u' ],
    [ 'name' => 'ADmantX',                      'id'    => 'admantx',      'regexp' => '/ADmantX Platform Semantic Analyzer/u' ],
    [ 'name' => 'AhrefsBot',                    'id'    => 'ahrefsbot',      'regexp' => '/AhrefsBot.Feeds v([0-9.]*)/u' ],
    [ 'name' => 'AhrefsBot',                    'id'    => 'ahrefsbot',      'regexp' => '/AhrefsBot\/([0-9.]*)/u' ],
    [ 'name' => 'Alexa',                        'id'    => 'archiver',      'regexp' => '/ia_archiver/u' ],
    [ 'name' => 'AltaVista',                    'id'    => 'altavista',      'regexp' => '/AltaVista Intranet V([0-9.]*)/u' ],
    [ 'name' => 'Analytics SEO',                'id'    => 'curious',      'regexp' => '/Curious George - www.analyticsseo.com\/crawler/u' ],
    [ 'name' => 'Amazon CloudFront',            'id'    => 'cloudfront',      'regexp' => '/Amazon CloudFront/u' ],
    [ 'name' => 'Amorank Spider',               'id'    => 'amorank',      'regexp' => '/AmorankSpider\/([0-9.]*)/u' ],
    [ 'name' => 'ArchiveBot',                   'id'    => 'archive',      'regexp' => '/ArchiveTeam ArchiveBot/u' ],
    [ 'name' => 'Archive.org',                  'id'    => 'archive',      'regexp' => '/archive.org_bot(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Archive.org',                  'id'    => 'archive',      'regexp' => '/special_archiver(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Ask Jeeves',                   'id'    => 'jeeves',      'regexp' => '/Ask Jeeves\/Teoma/u' ],
    [ 'name' => 'AstraSpider',                  'id'    => 'astra',      'regexp' => '/AstraSpider V([0-9.]*)/u' ],
    [ 'name' => 'Backlink-Check',               'id'    => 'backlink',      'regexp' => '/Backlink-Ceck.de/u' ],
    [ 'name' => 'BacklinkCrawler',              'id'    => 'backlink',      'regexp' => '/BacklinkCrawler/u' ],
    [ 'name' => 'Baiduspider',                  'id'    => 'baidu',      'regexp' => '/Baiduspider[\+ ]\([\+ ]/u' ],
    [ 'name' => 'Baiduspider',                  'id'    => 'baidu',      'regexp' => '/Baiduspider\/([0-9.]*)/u' ],
    [ 'name' => 'Baiduspider',                  'id'    => 'baidu',      'regexp' => '/Baiduspider/u' ],
    [ 'name' => 'Baiduspider',                  'id'    => 'baidu',      'regexp' => '/baiduspider-mobile-gate/u' ],
    [ 'name' => 'Baiduspider',                  'id'    => 'baidu',      'regexp' => '/\+http:\/\/www.baidu.com\/search\/spider.html/u' ],
    [ 'name' => 'Baiduspider',                  'id'    => 'baidu',      'regexp' => '/BaiduImagespider/u' ],
    [ 'name' => 'BazQux',                       'id'    => 'bazqux',      'regexp' => '/BazQux\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'id'    => 'bingbot',      'regexp' => '/bingbot\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'id'    => 'msnbot',      'regexp' => '/msnbot\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'id'    => 'msnbot',      'regexp' => '/msnbot-UDiscovery\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'id'    => 'msnbot',      'regexp' => '/msnbot-media\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'id'    => 'msnbot',      'regexp' => '/MsnBot-Media \/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'id'    => 'msnbot',      'regexp' => '/msnbot-NewsBlogs\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'id'    => 'msnbot',      'regexp' => '/MSNBOT_Mobile/u' ],
    [ 'name' => 'Bing',                         'id'    => 'msmobot',      'regexp' => '/MSMOBOT/u' ],
    [ 'name' => 'Bing Preview',                 'id'    => 'bing',      'regexp' => '/BingPreview\/([0-9.]*)/u' ],
    [ 'name' => 'BlogBridge',                   'id'    => 'blogbridge',      'regexp' => '/BlogBridge ([0-9.]*)/u' ],
    [ 'name' => 'Bloglines',                    'id'    => 'bloglines',      'regexp' => '/Bloglines\/([0-9.]*)/u' ],
    [ 'name' => 'Bloglovin',                    'id'    => 'bloglovin',      'regexp' => '/Bloglovin\/([0-9.]*)/u' ],
    [ 'name' => 'BlogPulse',                    'id'    => 'blogpulse',      'regexp' => '/BlogPulse \(ISSpider-([0-9.]*)/u' ],
    [ 'name' => 'Blogram',                      'id'    => 'blogram',      'regexp' => '/BlogramCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Blogtrottr',                   'id'    => 'blogtrot',      'regexp' => '/Blogtrottr\/([0-9.]*)/u' ],
    [ 'name' => 'Blogshares',                   'id'    => 'blogshares',      'regexp' => '/Blogshares/u' ],
    [ 'name' => 'BoardReader',                  'id'    => 'boardreader',      'regexp' => '/BoardReader\/([0-9.]*)/u' ],
    [ 'name' => 'Browsershots',                 'id'    => 'browsershots',      'regexp' => '/Browsershots/u' ],
    [ 'name' => 'BUbiNG',                       'id'    => 'bubing',      'regexp' => '/BUbiNG/u' ],
    [ 'name' => 'Buck',                         'id'    => 'buck',      'regexp' => '/Buck\/([0-9.]*)/u' ],
    [ 'name' => 'Butterfly',                    'id'    => 'butterfly',      'regexp' => '/Butterfly\/([0-9.]*)/u' ],
    [ 'name' => 'Bytespider',                   'id'    => 'bytespider',      'regexp' => '/Bytespider/u' ],
    [ 'name' => 'CiteSeerX',                    'id'    => 'heritrix',      'regexp' => '/heritrix\/([0-9.]*)/u' ],
    [ 'name' => 'Cliqzbot',                     'id'    => 'cliqz',      'regexp' => '/Cliqzbot\/([0-9.]*)/u' ],
    [ 'name' => 'Cloudflare Always Online',     'id'    => 'cloudflare',      'regexp' => '/CloudFlare-AlwaysOnline\/([0-9.]*)/u' ],
    [ 'name' => 'Comodo',                       'id'    => 'comodo',      'regexp' => '/Comodo Spider ([0-9.]*)/u' ],
    [ 'name' => 'CommaFeed',                    'id'    => 'commafeed',      'regexp' => '/CommaFeed\/([0-9.]*)/u' ],
    [ 'name' => 'CommonCrawl',                  'id'    => 'cbot',      'regexp' => '/CCBot\/([0-9.]*)/u' ],
    [ 'name' => 'Data Hotel Watchdog',          'id'    => 'watchdog',      'regexp' => '/Data-Hotel-Watchdog\/([0-9.]*)/u' ],
    [ 'name' => 'DataparkSearch',               'id'    => 'datasearch',      'regexp' => '/DataparkSearch\/([0-9.]*)/u' ],
    [ 'name' => 'Daum',                         'id'    => 'daum',      'regexp' => '/Daum\/([0-9.]*)/u' ],
    [ 'name' => 'Daumoa',                       'id'    => 'daumoa',      'regexp' => '/Daumoa ([0-9.]*)/u' ],
    [ 'name' => 'Digg',                         'id'    => 'digg',      'regexp' => '/Digg Deeper\/v([0-9.]*)/u' ],
    [ 'name' => 'Digg',                         'id'    => 'digg',      'regexp' => '/Digg\/([0-9.]*)/u' ],
    [ 'name' => 'DomainCrawler',                'id'    => 'domaincrawl',      'regexp' => '/DomainCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Discord',                      'id'    => 'discord',      'regexp' => '/Discordbot\/([0-9.]*)/u' ],
    [ 'name' => 'Domain Re-Animator',           'id'    => 'domain',      'regexp' => '/Domain Re-Animator Bot/u' ],
    [ 'name' => 'Exabot Thumbnails',            'id'    => 'exabot',      'regexp' => '/Exabot-Thumbnails/u' ],
    [ 'name' => 'ExactSeek',                    'id'    => 'exactseek',      'regexp' => '/ExactSeek Crawler/u' ],
    [ 'name' => 'Ezooms Crawler',               'id'    => 'ezooms',      'regexp' => '/Ezooms\/([0-9.]*)/u' ],
    [ 'name' => 'Facebook',                     'id'    => 'facebook',      'regexp' => '/facebookplatform\/([0-9.]*)/u' ],
    [ 'name' => 'Facebook',                     'id'    => 'facebook',      'regexp' => '/facebookexternalhit\/([0-9.]*)/u' ],
    [ 'name' => 'Facebook',                     'id'    => 'facebook',      'regexp' => '/facebookscraper\/([0-9.]*)/u' ],
    [ 'name' => 'Facebook',                     'id'    => 'facebook',      'regexp' => '/FacebookSecurity\/([0-9.]*)/u' ],
    [ 'name' => 'FAST Crawler',                 'id'    => 'fast',      'regexp' => '/FAST Crawler ([0-9.]*)/u' ],
    [ 'name' => 'FAST Crawler',                 'id'    => 'fast',      'regexp' => '/FastCrawler3/u' ],
    [ 'name' => 'FAST Enterprise Crawler',      'id'    => 'fast',      'regexp' => '/FAST Enterprise Crawler\/([0-9.]*)/u' ],
    [ 'name' => 'FAST Enterprise Crawler',      'id'    => 'fast',      'regexp' => '/FAST Enterprise Crawler ([0-9.]*)/u' ],
    [ 'name' => 'FAST Enterprise Crawler',      'id'    => 'fast',      'regexp' => '/FAST EnterpriseCrawler ([0-9.]*)/u' ],
    [ 'name' => 'FAST MetaWeb Crawler',         'id'    => 'fast',      'regexp' => '/FAST MetaWeb Crawler/u' ],
    [ 'name' => 'FAST mSEARCH Crawler',         'id'    => 'fast',      'regexp' => '/FAST-mSEARCH Crawler ([0-9.]*)/u' ],
    [ 'name' => 'FAST Web Crawler',             'id'    => 'fast',      'regexp' => '/FAST-WebCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Flamingo Search',              'id'    => 'flamingo',      'regexp' => '/Flamingo_SearchEngine/u' ],
    [ 'name' => 'Fastladder',                   'id'    => 'fastladder',      'regexp' => '/Fastladder FeedFetcher\/([0-9.]*)/u' ],
    [ 'name' => 'Feedbin',                      'id'    => 'feed',      'regexp' => '/Feedbin/u' ],
    [ 'name' => 'FeedWrangler',                 'id'    => 'wrangler',      'regexp' => '/Feed Wrangler\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                       'id'    => 'feed',      'regexp' => '/FeedlyApp\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                       'id'    => 'feed',      'regexp' => '/FeedlyBot\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                       'id'    => 'feed',      'regexp' => '/MetaFeedly\/([0-9.]*)/u' ],
    [ 'name' => 'Feedspot',                     'id'    => 'feed',      'regexp' => '/Feedspot/u' ],
    [ 'name' => 'FeedValidator',                'id'    => 'validator',      'regexp' => '/FeedValidator\/([0-9.]*)/u' ],
    [ 'name' => 'FeedZirra',                    'id'    => 'feed',      'regexp' => '/feedzirra/u' ],
    [ 'name' => 'Fever',                        'id'    => 'fever',      'regexp' => '/Fever\/([0-9.]*)/u' ],
    [ 'name' => 'Florienzh',                    'id'    => 'florienzh',      'regexp' => '/Florienzh\/([0-9.]*)/u' ],
    [ 'name' => 'Friendica',                    'id'    => 'friendica',      'regexp' => '/Friendica/u' ],
    [ 'name' => 'FTRF: Friendly Robot',         'id'    => 'robot',      'regexp' => '/FTRF: Friendly robot\/([0-9.]*)/u' ],
    [ 'name' => 'Genieo Web Filter',            'id'    => 'genieo',      'regexp' => '/Genieo\/([0-9.]*)/u' ],
    [ 'name' => 'GNIP',                         'id'    => 'fetchor',      'regexp' => '/UnwindFetchor\/([0-9.]*)/u' ],
    [ 'name' => 'Gocrawl',                      'id'    => 'google',      'regexp' => '/Googlebot \(gocrawl v([0-9.]*)\)/u' ],
    [ 'name' => 'GomezAgent',                   'id'    => 'gomez',      'regexp' => '/GomezAgent ([0-9.]+)/u' ],
    [ 'name' => 'Goo',                          'id'    => 'ichiro',      'regexp' => '/ichiro\/mobile goo/u' ],
    [ 'name' => 'Goo Blog Search',              'id'    => 'gooblog',      'regexp' => '/gooblog\/([0-9.]*)/u' ],
    [ 'name' => 'Goo Blog Search',              'id'    => 'gooblog',      'regexp' => '/gooblogsearch\/([0-9.]*)/u' ],
    [ 'name' => 'Goo RSS Reader',               'id'    => 'goorss',      'regexp' => '/gooRSSreader([0-9.]*)/u' ],
    [ 'name' => 'Googlebot',                    'id'    => 'google',      'regexp' => '/Google[Bb]ot\/([0-9.]*)/u' ],
    [ 'name' => 'Googlebot Mobile',             'id'    => 'google',      'regexp' => '/Googlebot-Mobile\/([0-9.]*)/u' ],
    [ 'name' => 'Googlebot Image',              'id'    => 'google',      'regexp' => '/Googlebot-Image\/([0-9.]*)/u' ],
    [ 'name' => 'Googlebot Video',              'id'    => 'google',      'regexp' => '/Googlebot-Video\/([0-9.]*)/u' ],
    [ 'name' => 'Google Ads Bot',               'id'    => 'google',      'regexp' => '/AdsBot-Google/u' ],
    [ 'name' => 'Google Adsense Snapshot',      'id'    => 'google',      'regexp' => '/Adsense-Snapshot-Google/u' ],
    [ 'name' => 'Google App Engine',            'id'    => 'google',      'regexp' => '/AppEngine-Google/u' ],
    [ 'name' => 'Google Web Preview',           'id'    => 'google',      'regexp' => '/Google Web Preview/u' ],
    [ 'name' => 'Google Page Speed',            'id'    => 'google',      'regexp' => '/Google Page Speed Insights/u' ],
    [ 'name' => 'Google FeedBurner',            'id'    => 'feed',      'regexp' => '/FeedBurner\/([0-9.]*)/u' ],
    [ 'name' => 'Google Feedfetcher',           'id'    => 'google',      'regexp' => '/Feedfetcher-Google/iu' ],
    [ 'name' => 'Google Font Analysis',         'id'    => 'google',      'regexp' => '/Google-FontAnalysis\/([0-9.]*)/u' ],
    [ 'name' => 'Google Sitemaps',              'id'    => 'google',      'regexp' => '/Google-Sitemaps\/([0-9.]*)/u' ],
    [ 'name' => 'Google Site Verification',     'id'    => 'google',      'regexp' => '/Google-Site-Verification\/([0-9.]*)/u' ],
    [ 'name' => 'Google Rich Snippets',         'id'    => 'google',      'regexp' => '/Googlebot-richsnippets/u' ],
    [ 'name' => 'Google Mediapartners',         'id'    => 'google',      'regexp' => '/Mediapartners-Google\/([0-9.]*)/u' ],
    [ 'name' => 'Google Mediapartners',         'id'    => 'google',      'regexp' => '/Mediapartners-Google/u' ],
    [ 'name' => 'Google News',                  'id'    => 'google',      'regexp' => '/Googlebot-News/u' ],
    [ 'name' => 'Google Wireless Transcoder',   'id'    => 'google',      'regexp' => '/Google Wireless Transcoder/u' ],
    [ 'name' => 'Google Play Newsstand',        'id'    => 'google',      'regexp' => '/GoogleProducer/u' ],
    [ 'name' => 'Google YouTube Sample',        'id'    => 'google',      'regexp' => '/Google-YouTubeSample\/([0-9.]*)/u' ],
    [ 'name' => 'Grammarly',                    'id'    => 'grammarly',      'regexp' => '/Grammarly\/([0-9.]*)/u' ],
    [ 'name' => 'Grub',                         'id'    => 'grub',      'regexp' => '/grub-client-([0-9.]*)/u' ],
    [ 'name' => 'Hatena Antenna',               'id'    => 'hatena',      'regexp' => '/Hatena Antenna\/([0-9.]*)/u' ],
    [ 'name' => 'Hatena Diary',                 'id'    => 'hatena',      'regexp' => '/Hatena Diary RSS Module/u' ],
    [ 'name' => 'Hatena Pagetitle',             'id'    => 'hatena',      'regexp' => '/Hatena Pagetitle Agent\/([0-9.]*)/u' ],
    [ 'name' => 'HeartRails Capture',           'id'    => 'capture',      'regexp' => '/HeartRails_Capture\/([0-9.]*)/u' ],
    [ 'name' => 'Heureka Feed',                 'id'    => 'heureka',      'regexp' => '/Heurekabot-Feed/u' ],
    [ 'name' => 'htdig',                        'id'    => 'htdig',      'regexp' => '/htdig\/([0-9.]*)/u' ],
    [ 'name' => 'HTTPMon',                      'id'    => 'httpmon',      'regexp' => '/HTTPMon\/([0-9.]*)/u' ],
    [ 'name' => 'HubPages',                     'id'    => 'hubpages',      'regexp' => '/HubPages V([0-9.]*)/u' ],
    [ 'name' => 'HubSpot Crawler',              'id'    => 'hubspot',      'regexp' => '/hubspot\.com/u' ],
    [ 'name' => 'iAsk Spider',                  'id'    => 'spider',      'regexp' => '/iaskspider\/([0-9.]*)/u' ],
    [ 'name' => 'iAsk Spider',                  'id'    => 'spider',      'regexp' => '/iaskspider2/u' ],
    [ 'name' => 'Ichiro',                       'id'    => 'ichiro',      'regexp' => '/ichiro\/([0-9.]*)/u' ],
    [ 'name' => 'Internet Archive',             'id'    => 'archive',      'regexp' => '/InternetArchive\/([0-9.]*)/u' ],
    [ 'name' => 'JamesBOT',                     'id'    => 'crawler',      'regexp' => '/James BOT - WebCrawler/u' ],
    [ 'name' => 'Jayde',                        'id'    => 'crawler',      'regexp' => '/Jayde Crawler./u' ],
    [ 'name' => 'KakaoTalk Bot',                'id'    => 'kakao',              'regexp' => '/kakaotalk-scrap\/([0-9.]*)/u' ],
    [ 'name' => 'Kouio',                        'id'    => 'kouio',      'regexp' => '/kouio.com/u' ],
    [ 'name' => 'Larbin',                       'id'    => 'larbin',      'regexp' => '/[Ll]arbin[\/_]([0-9.]*)/u' ],
    [ 'name' => 'Line Bot',                     'id'    => 'line',        'regexp' => '/Linespider\/([0-9.]*)/u' ],
    [ 'name' => 'Linkedin Bot',                 'id'    => 'linkedin',      'regexp' => '/LinkedInBot\/([0-9.]*)/u' ],
    [ 'name' => 'Linkdex Bot',                  'id'    => 'linkdex',      'regexp' => '/linkdexbot-mobile\/([0-9.]*)/u' ],
    [ 'name' => 'Linkdex Bot',                  'id'    => 'linkdex',      'regexp' => '/linkdex.com\/v([0-9.]*)/u' ],
    [ 'name' => 'Livedoor',                     'id'    => 'livedoor',      'regexp' => '/livedoor/u' ],
    [ 'name' => 'LTX71',                        'id'    => 'ltx71',      'regexp' => '/ltx71/u' ],
    [ 'name' => 'Magpie RSS',                   'id'    => 'magpie',      'regexp' => '/MagpieRSS\/([0-9.]*)/u' ],
    [ 'name' => 'Mapian News Bot',              'id'    => 'mapion',      'regexp' => '/mapion-news-bot\/([0-9.]*)/u' ],
    [ 'name' => 'Mail.ru Bot',                  'id'    => 'mail\.ru',      'regexp' => '/Mail\.RU_Bot\/Img\/([0-9.]*)/i' ],
    [ 'name' => 'Mail.ru Bot',                  'id'    => 'mail\.ru',      'regexp' => '/Mail\.RU_Bot\/([0-9.]*)/i' ],
    [ 'name' => 'Microsoft Social Streams',     'id'    => 'socialstreams',      'regexp' => '/Microsoft MSN SocialStreams Bot/u' ],
    [ 'name' => 'Mixi',                         'id'    => 'mixi',      'regexp' => '/mixi-check\/([0-9.]*)/u' ],
    [ 'name' => 'MnoGoSearch',                  'id'    => 'mnogo',      'regexp' => '/MnoGoSearch\/([0-9.]*)/u' ],
    [ 'name' => 'Monitor.us',                   'id'    => 'monitor',      'regexp' => '/monitor.us/u' ],
    [ 'name' => 'Moz',                          'id'    => 'dotbot',         'regexp' => '/DotBot\/([0-9.]*)/i' ],
    [ 'name' => 'Moz',                          'id'    => 'rogerbot',         'regexp' => '/rogerbot\/([0-9.]*)/i' ],
    [ 'name' => 'Naver Yeti',                   'id'    => 'yeti',      'regexp' => '/Yeti\/([0-9.]*)/u' ],
    [ 'name' => 'Netcraft Survey Bot',          'id'    => 'netcraft',      'regexp' => '/Netcraft Web Server Survey/u' ],
    [ 'name' => 'Netcraft Survey Bot',          'id'    => 'netcraft',      'regexp' => '/NetcraftSurveyAgent\/([0-9.]*)/u' ],
    [ 'name' => 'Netvibes',                     'id'    => 'netvibes',      'regexp' => '/Netvibes/u' ],
    [ 'name' => 'NewsBlur',                     'id'    => 'newsblur',      'regexp' => '/NewsBlur Favicon Fetcher/u' ],
    [ 'name' => 'NewsBlur',                     'id'    => 'newsblur',      'regexp' => '/NewsBlur Feed Fetcher/u' ],
    [ 'name' => 'NewsBlur',                     'id'    => 'newsblur',      'regexp' => '/NewsBlur Feed Finder/u' ],
    [ 'name' => 'NewsBlur',                     'id'    => 'newsblur',      'regexp' => '/NewsBlur Page Fetcher/u' ],
    [ 'name' => 'NewsGator',                    'id'    => 'newsgator',      'regexp' => '/NewsGator\/([0-9.]*)/u' ],
    [ 'name' => 'NewsGator',                    'id'    => 'newsgator',      'regexp' => '/NewsGatorOnline\/([0-9.]*)/u' ],
    [ 'name' => 'NewsGator FetchLinks',         'id'    => 'newsgator',      'regexp' => '/NewsGator FetchLinks extension\/([0-9.]*)/u' ],
    [ 'name' => 'Nimbostratus',                 'id'    => 'nimbostratus',      'regexp' => '/Nimbostratus-Bot\/v([0-9.]*)/u' ],
    [ 'name' => 'OpenWebSpider',                'id'    => 'spider',      'regexp' => '/OpenWebSpider v([0-9.]*)/u' ],
    [ 'name' => 'OrangeBot',                    'id'    => 'orange',      'regexp' => '/OrangeBot-Collector\/([0-9.]*)/u' ],
    [ 'name' => 'OrangeBot',                    'id'    => 'orange',      'regexp' => '/OrangeBot-Mobile/u' ],
    [ 'name' => 'PagesInventory',               'id'    => 'pages',      'regexp' => '/PagesInventory/u' ],
    [ 'name' => 'Plurk Bot',                    'id'    => 'plurk',      'regexp' => '/PlurkBot\/([0-9\.]*)/u' ],
    [ 'name' => 'Picsearch bot',                'id'    => 'psbot',      'regexp' => '/psbot-page/u' ],
    [ 'name' => 'Pingdom',                      'id'    => 'pingdom',      'regexp' => '/Pingdom.com_bot_version_([0-9.]*)/u' ],
    [ 'name' => 'Pinterest',                    'id'    => 'pinterest',      'regexp' => '/Pinterest\/([0-9.]+)( \(+|$)/u' ],
    [ 'name' => 'Pocket',                       'id'    => 'pocket',      'regexp' => '/PocketImageCache\/([0-9.]+)/u' ],
    [ 'name' => 'Pocket',                       'id'    => 'pocket',      'regexp' => '/PocketParser\/([0-9.]+)/u' ],
    [ 'name' => 'PostRank',                     'id'    => 'postrank',      'regexp' => '/PostRank\/([0-9.]*)/u' ],
    [ 'name' => 'PowerMapper',                  'id'    => 'crawler',      'regexp' => '/CrawlerProcess \(http:\/\/www\.PowerMapper\.com\) \/([0-9.]*)/u' ],
    [ 'name' => 'Radian 6',                     'id'    => 'feed',      'regexp' => '/R6_FeedFetcher/u' ],
    [ 'name' => 'Radian 6',                     'id'    => 'comment',      'regexp' => '/R6_CommentReader/u' ],
    [ 'name' => 'RssBar',                       'id'    => 'rssbar',      'regexp' => '/RssBar\/([0-9.]*)/u' ],
    [ 'name' => 'ROI Hunter',                   'id'    => 'hunter',      'regexp' => '/ROI Hunter/u' ],
    [ 'name' => 'QuerySeekerSpider',            'id'    => 'spider',      'regexp' => '/QuerySeekerSpider(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Quora Link Preview',           'id'    => 'quora',      'regexp' => '/Quora Link Preview\/([0-9.]*)/u' ],
    [ 'name' => 'SafeSearch Microdata',         'id'    => 'safesearch',      'regexp' => '/SafeSearch microdata crawler/u' ],
    [ 'name' => 'Scrapy',                       'id'    => 'scrapy',      'regexp' => '/Scrapy\/([0-9.]*)/u' ],
    [ 'name' => 'ScreenerBot',                  'id'    => 'crawler',      'regexp' => '/ScreenerBot Crawler Beta ([0-9.]*)/u' ],
    [ 'name' => 'Semrush',                      'id'    => 'semrush',      'regexp' => '/SemrushBot\/([0-9.]*)/u' ],
    [ 'name' => 'Server Density',               'id'    => 'monitor',      'regexp' => '/Server Density Service Monitoring/u' ],
    [ 'name' => 'Seznam bot',                   'id'    => 'seznam',      'regexp' => '/SeznamBot|SklikBot|Seznam screenshot-generator/u' ],
    [ 'name' => 'Seznam Email Proxy',           'id'    => 'seznam',      'regexp' => '/SeznamEmailProxy/u' ],
    [ 'name' => 'Seznam Zbozi.cz',              'id'    => 'seznam',      'regexp' => '/Seznam-Zbozi-robot/u' ],
    [ 'name' => 'ShopWiki',                     'id'    => 'shopwiki',      'regexp' => '/ShopWiki\/([0-9.]*)/u' ],
    [ 'name' => 'SilverReader',                 'id'    => 'reader',      'regexp' => '/SilverReader\/([0-9.]*)/u' ],
    [ 'name' => 'SimplePie',                    'id'    => 'simplepie',      'regexp' => '/SimplePie\/([0-9.]*)/u' ],
    [ 'name' => 'Site24x7',                     'id'    => 'site24',      'regexp' => '/Site24x7/u' ],
    [ 'name' => 'Slackbot Link Checker',        'id'    => 'slack',      'regexp' => '/Slackbot-LinkExpanding ([0-9.]*)/u' ],
    [ 'name' => 'Sogou Web Spider',             'id'    => 'sogou',      'regexp' => '/sogou spider/u' ],
    [ 'name' => 'Sogou Web Spider',             'id'    => 'sogou',      'regexp' => '/Sogou pic spider\/([0-9.]*)/u' ],
    [ 'name' => 'Sogou Web Spider',             'id'    => 'sogou',      'regexp' => '/Sogou inst spider\/([0-9.]*)/u' ],
    [ 'name' => 'Sogou Web Spider',             'id'    => 'sogou',      'regexp' => '/Sogou web spider\/([0-9.]*)/u' ],
    [ 'name' => 'Sogou Mobile Spider',          'id'    => 'sogou',      'regexp' => '/Sogou Mobile Spider([0-9.]*)/u' ],
    [ 'name' => 'Sophora Linkchecker',          'id'    => 'sophora',      'regexp' => '/Sophora Linkchecker/u' ],
    [ 'name' => 'Soso Web Spider',              'id'    => 'soso',      'regexp' => '/Sosospider\/([0-9.]*)/u' ],
    [ 'name' => 'Soso Web Spider',              'id'    => 'soso',      'regexp' => '/Sosospider/u' ],
    [ 'name' => 'Soso Image Spider',            'id'    => 'soso',      'regexp' => '/Sosoimagespider/u' ],
    [ 'name' => 'SPDYCheck',                    'id'    => 'spdycheck',      'regexp' => '/SPDYCheck SPDY Protocol Tester/iu' ],
    [ 'name' => 'Spinn3r',                      'id'    => 'spinn',      'regexp' => '/Spinn3r ([0-9.]*)/iu' ],
    [ 'name' => 'Spiderlytics',                 'id'    => 'spider',      'regexp' => '/Spiderlytics\/([0-9.]*)/iu' ],
    [ 'name' => 'StatusCake Error Detector',    'id'    => 'detector',      'regexp' => '/StatusCake Error Detector/iu' ],
    [ 'name' => 'Summify',                      'id'    => 'summify',      'regexp' => '/Summify\/([0-9.]*)/u' ],
    [ 'name' => 'TelegramBot',                  'id'    => 'telegram',      'regexp' => '/TelegramBot/u' ],
    [ 'name' => 'Twisted PageGetter',           'id'    => 'twisted',      'regexp' => '/Twisted PageGetter/u' ],
    [ 'name' => 'Twitterbot',                   'id'    => 'twitter',      'regexp' => '/Twitterbot\/([0-9.]*)/u' ],
    [ 'name' => 'Tiny Tiny RSS',                'id'    => 'tiny',      'regexp' => '/Tiny Tiny RSS\/([0-9.]*)/u' ],
    [ 'name' => 'TLSProber',                    'id'    => 'tlsprober',      'regexp' => '/TLSProber\/([0-9.]*)/u' ],
    [ 'name' => 'Typhoeus',                     'id'    => 'typhoeus',      'regexp' => '/Typhoeus/u' ],
    [ 'name' => 'Vagabondo',                    'id'    => 'vagabondo',      'regexp' => '/Vagabondo\/([0-9.]*)/u' ],
    [ 'name' => 'vkShare',                      'id'    => 'vkshare',      'regexp' => '/vkShare/u' ],
    [ 'name' => 'Voat',                         'id'    => 'voat',      'regexp' => '/Voat\.co OpenGraph Parser/u' ],
    [ 'name' => 'Voilabot',                     'id'    => 'voila',      'regexp' => '/Voila[Bb]ot/u' ],
    [ 'name' => 'VocusBot',                     'id'    => 'vocus',      'regexp' => '/VocusBot ([0-9.]*)/u' ],
    [ 'name' => 'Vodafone mCrawler',            'id'    => 'mcrawler',      'regexp' => '/Vodafone mCrawler/u' ],
    [ 'name' => 'W3Bot',                        'id'    => 'w3bot',      'regexp' => '/W3Bot ([0-9.]*)/u' ],
    [ 'name' => 'W3C CSS Validator',            'id'    => 'jigsaw',      'regexp' => '/Jigsaw\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Internationalization Checker',     'id'    => 'w3c',      'regexp' => '/W3C_I18n-Checker\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Line Mode',                'id'    => 'w3c',      'regexp' => '/W3CLineMode\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Link Checker',             'id'    => 'w3c',      'regexp' => '/W3C-checklink\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Markup Validator',         'id'    => 'w3c',      'regexp' => '/W3C_Validator\/([0-9.]*)/u' ],
    [ 'name' => 'W3C MobileOK Checker',         'id'    => 'w3c',      'regexp' => '/W3C-mobileOK\/DDC-([0-9.]*)/u' ],
    [ 'name' => 'W3C Multipage Validator',      'id'    => 'w3c',      'regexp' => '/W3C_Multipage_Validator\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Robot',                    'id'    => 'w3c',      'regexp' => '/W3CRobot\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Unified Validator',        'id'    => 'w3c',      'regexp' => '/W3C_Unicorn\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Validator.nu',             'id'    => 'validator',      'regexp' => '/Validator.nu\//u' ],
    [ 'name' => 'Wappalyzer',                   'id'    => 'wappalyzer',      'regexp' => '/Wappalyzer/u' ], 
    [ 'name' => 'Wayback Archive',              'id'    => 'wayback',      'regexp' => '/waybackarchive.org\/([0-9.]*)/u' ],
    [ 'name' => 'WebbCrawler',                  'id'    => 'crawler',      'regexp' => '/WebbCrawler ([0-9.]*)/u' ],
    [ 'name' => 'WebIndexer',                   'id'    => 'webindexer',      'regexp' => '/WebIndexer\//u' ],
    [ 'name' => 'WordPress',                    'id'    => 'wordpress',      'regexp' => '/WordPress\/([0-9.]*)/u' ],
    [ 'name' => 'WordPress.com',                'id'    => 'wordpress',      'regexp' => '/WordPress\.com; http/u' ],
    [ 'name' => 'WordPress Jetpack',            'id'    => 'wordpress',      'regexp' => '/Jetpack by WordPress\.com/u' ],
    [ 'name' => 'WWW Mechanize',                'id'    => 'mechanize',      'regexp' => '/WWW-Mechanize\/([0-9.]*)/u' ],
    [ 'name' => 'Xerka WebBot',                 'id'    => 'xerka',      'regexp' => '/Xerka WebBot v([0-9.]*)/u' ],
    [ 'name' => 'XML Sitemaps Generator',       'id'    => 'sitemap',      'regexp' => '/XML-Sitemaps\/([0-9.]*)/u' ],
    [ 'name' => 'XMLSitemapGenerator',          'id'    => 'sitemap',      'regexp' => '/XmlSitemapGenerator/u' ],
    [ 'name' => 'YaCy Bot',                     'id'    => 'yacy',      'regexp' => '/yacy(?:\/|\s|bot)/u' ],
    [ 'name' => 'Yandex Anti Virus',            'id'    => 'yandex',      'regexp' => '/YandexAntivirus\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Blogs',                 'id'    => 'yandex',      'regexp' => '/YandexBlogs\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Bot',                   'id'    => 'yandex',      'regexp' => '/YandexBot\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Direct',                'id'    => 'yandex',      'regexp' => '/YandexDirect\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Favicons',              'id'    => 'yandex',      'regexp' => '/YandexFavicons\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Image Resizer',         'id'    => 'yandex',      'regexp' => '/YandexImageResizer\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Images',                'id'    => 'yandex',      'regexp' => '/YandexImages\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Metrika',               'id'    => 'yandex',      'regexp' => '/YandexMetrika\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex News',                  'id'    => 'yandex',      'regexp' => '/YandexNews\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Newslinks',             'id'    => 'yandex',      'regexp' => '/YandexNewslinks(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Yahoo! Ad Monitoring',         'id'    => 'yahoo',      'regexp' => '/Yahoo Ad monitoring/u' ],
    [ 'name' => 'Yahoo! Blogs',                 'id'    => 'yahoo',      'regexp' => '/Yahoo-Blogs\/v([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Cache System',          'id'    => 'yahoo',      'regexp' => '/YahooCacheSystem/u' ],
    [ 'name' => 'Yahoo! Feed Seeker',           'id'    => 'yahoo',      'regexp' => '/YahooFeedSeeker\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Feed Seeker',           'id'    => 'yahoo',      'regexp' => '/YahooFeedSeeker Testing\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Image',                 'id'    => 'yahoo',      'regexp' => '/Yahoo-MMCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Link Expander',         'id'    => 'yahoo',      'regexp' => '/Yahoo:LinkExpander/u' ],
    [ 'name' => 'Yahoo! Link Preview',          'id'    => 'yahoo',      'regexp' => '/Yahoo Link Preview/u' ],
    [ 'name' => 'Yahoo! Video',                 'id'    => 'yahoo',      'regexp' => '/Yahoo-MMAudVid\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Mindset',               'id'    => 'yahoo',      'regexp' => '/Yahoo\! Mindset/u' ],
    [ 'name' => 'Yahoo! Product Search',        'id'    => 'yahoo',      'regexp' => '/YahooSeeker\/ProductSearch([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Slurp',                 'id'    => 'yahoo',      'regexp' => '/Yahoo\! Slurp\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Slurp',                 'id'    => 'yahoo',      'regexp' => '/Yahoo\! Slurp/u' ],
    [ 'name' => 'Yahoo! Seeker',                'id'    => 'yahoo',      'regexp' => '/YahooSeeker(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Yahoo! Seeker',                'id'    => 'yahoo',      'regexp' => '/YahooSeeker-Testing\/v([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Seeker',                'id'    => 'yahoo',      'regexp' => '/yahooseeker-jp-mobile/u' ],
    [ 'name' => 'Yahoo! Site Checker',          'id'    => 'y\!j',      'regexp' => '/Y\!J SiteChecker/u' ],
    [ 'name' => 'Yahoo! Pipes',                 'id'    => 'yahoo',      'regexp' => '/Yahoo Pipes ([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Video Search',          'id'    => 'yahoo',      'regexp' => '/YahooVideoSearch/u' ],
    [ 'name' => 'Yahoo! Japan',                 'id'    => 'yahoo',      'regexp' => '/Yahoo\! Japan/u' ],
    [ 'name' => 'Yahoo! Japan',                 'id'    => 'y\!j',      'regexp' => '/(^|\(compatible; )Y\!J-/u' ],

    [ 'name' => 'Inktomi Slurp',                'id'    => 'slurp',      'regexp' => '/Slurp\/([0-9.]*)/u' ],
    [ 'name' => 'Inktomi Slurp',                'id'    => 'slurp',      'regexp' => '/Slurp\.so\/([0-9.]*)/u' ],
    
    [ 'name' => 'Yelp Spider',                  'id'    => 'yelp',      'regexp' => '/yelpspider\-([0-9.]*)/u' ],

    /* Generic bots */
    [ 'name' => 'Apache Httpd',                 'id'    => 'httpclient',      'regexp' => '/Apache-HttpClient(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Apache Jakarta',               'id'    => 'httpclient',      'regexp' => '/Jakarta Commons-HttpClient(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Apache Nutch',                 'id'    => 'nutch',      'regexp' => '/\/Nutch-([0-9.]*)/u' ],
    [ 'name' => 'Apache Nutch',                 'id'    => 'nutch',      'regexp' => '/Nutch(?:CVS|Org)\/([0-9.]*)/u' ],
    [ 'name' => 'Apache Synapse',               'id'    => 'synapse',      'regexp' => '/compatible; Synapse/u' ],
    [ 'name' => 'Borland Delphi',               'id'    => 'indy',      'regexp' => '/Indy Library/u' ],
    [ 'name' => 'Wget',                         'id'    => 'wget',      'regexp' => '/Wget\/([0-9.]*)/u' ],
    [ 'name' => 'Curl',                         'id'    => 'curl',      'regexp' => '/^curl\/([0-9.]*)/u' ],

    [ 'name' => 'Go',                           'id'    => 'package',      'regexp' => '/Go [0-9\.]+ package http/u' ],
    [ 'name' => 'HttpUnit',                     'id'    => 'httpunit',      'regexp' => '/httpunit\/([0-9.]*)/u' ],
    [ 'name' => 'Java',                         'id'    => 'java',      'regexp' => '/^Java\/([0-9.]*)/u' ],
    [ 'name' => 'Perl',                         'id'    => 'simple',      'regexp' => '/LWP::Simple\//u' ],
    [ 'name' => 'Perl',                         'id'    => 'libwww',      'regexp' => '/libwww-perl\//u' ],
    [ 'name' => 'Perl',                         'id'    => 'lwp',      'regexp' => '/lwp-trivial\//u' ],
    [ 'name' => 'Python',                       'id'    => 'urllib',      'regexp' => '/Python-urllib\/([0-9.]*)/u' ],
    [ 'name' => 'Python',                       'id'    => 'requests',      'regexp' => '/python-requests\/([0-9.]*)/u' ],
    [ 'name' => 'PHP',                          'id'    => 'php',      'regexp' => '/ PHP\/([0-9.]*)/u' ],
    [ 'name' => 'PHP',                          'id'    => 'php',      'regexp' => '/^PHP/u' ],
    [ 'name' => 'PHP',                          'id'    => 'pear',      'regexp' => '/PEAR HTTP_Request class/u' ],
    [ 'name' => 'PHP',                          'id'    => 'php',      'regexp' => '/CakePHP/u' ],
    [ 'name' => 'PHP',                          'id'    => 'zend',      'regexp' => '/Zend_Http_Client/u' ],
    [ 'name' => 'Ruby',                         'id'    => 'ruby',      'regexp' => '/^Ruby/u' ],
];
