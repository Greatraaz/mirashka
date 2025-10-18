<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'main';

$route['404_override'] = 'main/notFound';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/dashboard/index';
$route['admin/change-password'] = 'admin/users/change_password';
$route['admin/login'] = 'login/index';
$route['admin/logout'] = 'login/admin_logout';
$route['admin/forget-password'] = 'login/forgetpassword';


/*==================================================================================
============================      FRONTEND CONTROLLER     ==============================
====================================================================================*/

$route['about-us'] = 'main/about';
$route['career-at-mirashka'] = 'main/career';
$route['contact-us'] = 'main/contact';
$route['faq'] = 'main/faq';
$route['blog'] = 'main/blogs';
$route['case-studies'] = 'main/Customer';
$route['Success-Stories'] = 'main/successstories';
$route['privacy-policy'] = 'main/privacy';
$route['terms-of-service'] = 'main/terms';
$route['cookie-policy'] = 'main/cookie';
$route['insights'] = 'main/insights';
$route['podcast'] = 'main/podcast';
$route['events-media'] = 'main/eventsmedia';
$route['digital-marketing'] = 'main/digitalmarket';
$route['job-detail'] = 'main/jobdetail';
$route['blog/(:any)'] = 'main/blogSingle/$1';
$route['my-account'] = 'users/profile';
$route['logout'] = 'users/logout';
$route['health-wellness'] = 'main/healthcare';
$route['seo'] = 'main/seo';
$route['our-story'] = 'main/ourstory';
$route['leadership-team'] = 'main/leadershipteam';
$route['why-mirashka'] = 'main/whymirashka';
$route['culture-values'] = 'main/culture';
$route['ignite'] = 'main/ignite';
$route['discover'] = 'main/discover';
$route['accelerate'] = 'main/accelerate';
$route['secure'] = 'main/secure';
$route['evolve'] = 'main/evolve';
$route['amplify'] = 'main/amplify';
$route['establish'] = 'main/establish';
$route['mission-vision'] = 'main/mision';
$route['brand-strategy-and-activation'] = 'main/brand';
$route['branding-and-identity-design'] = 'main/branding';
$route['graphic-design'] = 'main/graphic';
$route['content-writing'] = 'main/content';
$route['animation-and-motion-graphics'] = 'main/animation';
$route['website-design-and-development'] = 'main/websitedesign';
$route['ui-ux-design'] = 'main/uidesign';
$route['cloud-solutions-and-it-infrastructure'] = 'main/cloudsolutions';
$route['ecommerce-development'] = 'main/ecommerce';
$route['mobileapp-development'] = 'main/mobileapp';
$route['technology-stack-expertise'] = 'main/technologystack';
$route['software-development'] = 'main/software';
$route['data-entry-and-system-migration'] = 'main/dataentry';
$route['search-engine-optimization'] = 'main/searchengineoptimization';
$route['social-media-marketing'] = 'main/smm';
$route['mobile-ad-networking'] = 'main/mbads';
$route['performance-and-paid-marketing'] = 'main/performance';
$route['online-reputation-management'] = 'main/orm';
$route['public-relations'] = 'main/pr';
$route['digital-outsourcing-and-team-extension'] = 'main/digitaloutsourcing';
$route['dedicated-resource-hiring'] = 'main/dedicatedresource';
$route['process-automation-support'] = 'main/processautomation';
$route['wikipedia-page-maintenance'] = 'main/wikipediapage';
$route['technology-consultation-and-architecture-design'] = 'main/technologyconsultation';
$route['vapt'] = 'main/vapt';
$route['cyber-security-solutions'] = 'main/cybersecurity';
$route['server-hardening-and-compliance-audits-relations'] = 'main/serverhardening';
$route['secure-wikipedia-management'] = 'main/securewikipedia';
$route['website-and-app-recovery-solutions'] = 'main/websiteapp';
$route['growth-driven-seo-and-content-marketing'] = 'main/growth';
$route['funnel-design-and-performance-ads'] = 'main/funnel';
$route['hyperlocal-marketing-and-gmb-strategies'] = 'main/hyperlocal';
$route['conversion-rate-optimization-cro'] = 'main/cro';
$route['brand-scaling-with-integrated-campaigns'] = 'main/brands';
$route['advanced-analytics-and-reporting-dashboards'] = 'main/analytics';
$route['web-design-company-india'] = 'main/webdesignin';
$route['seo-company-india'] = 'main/seoin';
$route['digital-marketing-company-india'] = 'main/digitalmarketingin';
$route['mobile-app-development-company-india'] = 'main/mobileappin';
$route['smm-company-india'] = 'main/smmin';
$route['technology-startups'] = 'main/technology';
$route['education-e-learning'] = 'main/education';
$route['realesate-construction'] = 'main/realesate';
$route['media-entertainment'] = 'main/media';
$route['automotive-transport'] = 'main/automotive';
$route['ngo'] = 'main/ngo';
$route['php'] = 'main/php';
$route['dotnet'] = 'main/dotnet';
$route['angular'] = 'main/angular';
$route['react'] = 'main/react';
$route['nodejs'] = 'main/nodejs';
$route['aws'] = 'main/aws';
$route['azure'] = 'main/azure';
$route['google-cloud'] = 'main/googlecloud';
$route['android'] = 'main/android';
$route['ios'] = 'main/ios';
$route['flutter'] = 'main/flutter';
$route['shopify'] = 'main/shopify';
$route['wordpress'] = 'main/wordpress';
$route['magento'] = 'main/magento';
$route['security'] = 'main/security';
$route['devops'] = 'main/devops';
$route['guides'] = 'main/guides';
$route['supports'] = 'main/supports';
$route['help-center'] = 'main/helpcenter';
$route['testimonials'] = 'main/testimonials';
$route['video-testimonials'] = 'main/videotestimonials';
$route['before-and-after-transformations'] = 'main/Transformations';
$route['brand-growth-highlights'] = 'main/brandgrowthhighlights';


$route['(:any)'] = 'main/notFound';
