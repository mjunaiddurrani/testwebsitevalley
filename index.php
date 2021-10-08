<?php
ob_start();
// session_start();


$url = $_SERVER['REQUEST_URI'];

$current_url = explode('?', $url);
$url = $current_url[0];

if($url != "/"){

    if(substr($url,-1) != "/" ){
        header("HTTP/1.1 301 Moved Permanently"); 
        header("location: $url"."/");
        exit();
    }
    
}

switch($url){
    case '/' :
        require __DIR__.'/views/home.php';
        break;
    case addslashes('/thank-you/'):
        require __DIR__.'/views/thankyou.php';
        break;    
    case addslashes('/pricing/') :
        require __DIR__.'/views/pricing.php';
        break;
    case addslashes('/leads/') :
        require __DIR__.'/views/leads.php';
        break;
    case addslashes('/thank-you/') :
        require __DIR__.'/views/thankyou.php';
        break;
    case addslashes('/contact-us/') :
        require __DIR__.'/views/contact-us.php';
        break;
    case addslashes('/about-us/') :
        require __DIR__.'/views/about-us.php';
        break;
    case addslashes('/services/') :
        require __DIR__.'/views/services.php';
        break;
    case addslashes('/ecommerce-website/') :
        require __DIR__.'/views/ecommerce-website.php';
        break;
    case addslashes('/website-maintenance/') :
        require __DIR__.'/views/website-maintenance.php';
        break;
    case addslashes('/wordpress-website/') :
        require __DIR__.'/views/wordpress-website.php';
        break;
    case addslashes('/domain-hosting/') :
        require __DIR__.'/views/domain-hosting.php';
        break;
    case addslashes('/seo-services/') :
        require __DIR__.'/views/seo-services.php';
        break;
    case addslashes('/logo-services/') :
        require __DIR__.'/views/logo-services.php';
        break;
    case addslashes('/terms-conditions/') :
        require __DIR__.'/views/terms-conditions.php';
        break;
    case addslashes('/branding/') :
        require __DIR__.'/views/branding.php';
        break;
    case addslashes('/video-animation/') :
        require __DIR__.'/views/video-animation.php';
        break;
    case addslashes('/web-app-development/') :
        require __DIR__.'/views/web-app-development.php';
        break;
    case addslashes('/website-design-development/') :
        require __DIR__.'/views/landing-one.php';
        break;
    case addslashes('/premium-website-design-developments/') :
        require __DIR__.'/views/landing-one-form.php';
        break;
    case addslashes('/premium-website-design-development/') :
        require __DIR__.'/views/landing-page-2.php';
        break;
    case addslashes('/landing-page-2/') :
        require __DIR__.'/views/landing-page-2.php';
        break;

    case addslashes('/website-design-development-service/') :
        require __DIR__.'/views/landing-cta.php';
        break;
    case addslashes('/mobile-app-development/') :
        require __DIR__.'/views/mobile-app-development.php';
        break;
    case addslashes('/shopify-development/') :
        require __DIR__.'/views/shopify-development.php';
        break;
    case addslashes('/big-commerce-development/') :
        require __DIR__.'/views/big-commerce-development.php';
        break;
    case addslashes('/woo-commerce-development/') :
        require __DIR__.'/views/woo-commerce-development.php';
        break;
    case addslashes('/magento-development/') :
        require __DIR__.'/views/magento-development.php';
        break;
    case addslashes('/open-cart-development/') :
        require __DIR__.'/views/open-cart-development.php';
        break;
    case addslashes('/react-native-development/') :
        require __DIR__.'/views/react-native-development.php';
        break;
    case addslashes('/packages/') :
        require __DIR__.'/views/packages.php';
        break;    
    case addslashes('/portfolio/') :
        require __DIR__.'/views/portfolio.php';
        break;    
        break;
    case addslashes('/privacy-policy/') :
        require __DIR__.'/views/privacy-policy.php';
            break;
    case addslashes('/website-promo/') :
        require __DIR__.'/views/website-promo.php';
            break;
    case addslashes('/clients/') :
        require __DIR__.'/views/clients.php';
            break;
            
    case addslashes('/case-studies/') :
        require __DIR__.'/views/case-studies.php';
            break;
    case addslashes('/rideo/') :
        require __DIR__.'/views/rideo.php';
            break;
    case addslashes('/airhme/') :
        require __DIR__.'/views/airhme.php';
            break;
    case addslashes('/dragon-force-ninja/') :
        require __DIR__.'/views/dragon-force-ninja.php';
            break;
    case addslashes('/your-wish-on/') :
        require __DIR__.'/views/your-wish-on.php';
            break;
    case addslashes('/bally/') :
        require __DIR__.'/views/bally.php';
            break;
    case addslashes('/color-jumper/') :
        require __DIR__.'/views/color-jumper.php';
            break;
    case addslashes('/stacker-cracker/') :
        require __DIR__.'/views/stacker-cracker.php';
            break;
    case addslashes('/tamkeen-care/') :
        require __DIR__.'/views/tamkeen-care.php';
            break;        
    case addslashes('/testimonials/') :
        require __DIR__.'/views/testimonials.php';
            break;        
    case addslashes('/pricing/startup-website-package/') :
        require __DIR__.'/views/pricing/startup-website-package.php';
            break; 
    case addslashes('/pricing/automatedinteractive-conferencing-portal-package/') :
        require __DIR__.'/views/pricing/automatedinteractive-conferencing-portal-package.php';
            break; 
    case addslashes('/pricing/automatedinteractive-e-commerce-package/') :
        require __DIR__.'/views/pricing/automatedinteractive-e-commerce-package.php';
            break; 
    case addslashes('/pricing/basic-combo-package/') :
        require __DIR__.'/views/pricing/basic-combo-package.php';
            break; 
    case addslashes('/pricing/beginners-e-commerce-package/') :
        require __DIR__.'/views/pricing/beginners-e-commerce-package.php';
            break; 
    case addslashes('/pricing/branding-premium-collateral-packages/') :
        require __DIR__.'/views/pricing/branding-premium-collateral-packages.php';
            break; 
    case addslashes('/pricing/business-website-package/') :
        require __DIR__.'/views/pricing/business-website-package.php';
            break; 
    case addslashes('/pricing/classic-video-packages/') :
        require __DIR__.'/views/pricing/classic-video-packages.php';
            break; 
    case addslashes('/pricing/collateral-classic-packages/') :
        require __DIR__.'/views/pricing/collateral-classic-packages.php';
            break; 
    case addslashes('/pricing/complete-branding-package/') :
        require __DIR__.'/views/pricing/complete-branding-package.php';
            break; 
    case addslashes('/pricing/corporate-combo-package/') :
        require __DIR__.'/views/pricing/corporate-combo-package.php';
            break; 
    case addslashes('/pricing/corporate-e-commerce-package/') :
        require __DIR__.'/views/pricing/corporate-e-commerce-package.php';
            break; 
    case addslashes('/pricing/custom-crm-erp-portal-website/') :
        require __DIR__.'/views/pricing/custom-crm-erp-portal-website.php';
            break; 
    case addslashes('/pricing/custom-crm-portal-website/') :
        require __DIR__.'/views/pricing/custom-crm-portal-website.php';
            break; 
    case addslashes('/pricing/custom-e-commerce-marketplace-package/') :
        require __DIR__.'/views/pricing/custom-e-commerce-marketplace-package.php';
            break; 
    case addslashes('/pricing/deluxe-video-packages/') :
        require __DIR__.'/views/pricing/deluxe-video-packages.php';
            break; 
    case addslashes('/pricing/elite-combo-package/') :
        require __DIR__.'/views/pricing/elite-combo-package.php';
            break; 
    case addslashes('/pricing/elite-e-commerce-package/') :
        require __DIR__.'/views/pricing/elite-e-commerce-package.php';
            break; 
    case addslashes('/pricing/elite-seo-package/') :
        require __DIR__.'/views/pricing/elite-seo-package.php';
            break; 
    case addslashes('/pricing/elite-website-package/') :
        require __DIR__.'/views/pricing/elite-website-package.php';
            break; 
    case addslashes('/pricing/identity-seo-package/') :
        require __DIR__.'/views/pricing/identity-seo-package.php';
            break; 
    case addslashes('/pricing/premium-video-packages/') :
        require __DIR__.'/views/pricing/premium-video-packages.php';
            break; 
    case addslashes('/pricing/professional-combo-package/') :
        require __DIR__.'/views/pricing/professional-combo-package.php';
            break; 
    case addslashes('/pricing/professional-seo-package/') :
        require __DIR__.'/views/pricing/professional-seo-package.php';
            break; 
    case addslashes('/pricing/professional-website-package/') :
        require __DIR__.'/views/pricing/professional-website-package.php';
            break; 
    case addslashes('/pricing/silver-website-package/') :
        require __DIR__.'/views/pricing/silver-website-package.php';
            break; 
    case addslashes('/pricing/startup-collateral-packages/') :
        require __DIR__.'/views/pricing/startup-collateral-packages.php';
            break; 
    case addslashes('/pricing/startup-combo-package/') :
        require __DIR__.'/views/pricing/startup-combo-package.php';
            break; 
    case addslashes('/pricing/startup-seo-website-package/') :
        require __DIR__.'/views/pricing/startup-seo-website-package.php';
            break; 
    case addslashes('/pricing/startup-video-packages/') :
        require __DIR__.'/views/pricing/startup-video-packages.php';
            break; 
    case addslashes('/pricing/teaser-intro-video-packages/') :
        require __DIR__.'/views/pricing/teaser-intro-video-packages.php';
            break; 
    case addslashes('/pricing/unlimited-collateral-packages/') :
        require __DIR__.'/views/pricing/unlimited-collateral-packages.php';
            break; 

    case addslashes('/the-web-founders/') :
        require __DIR__.'/dpweb/web/index.php';
            break; 
                    

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;    
}
?>