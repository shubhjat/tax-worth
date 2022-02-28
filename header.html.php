<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">
<title><?php htmlout($companySeo['title']); ?></title>
<!-- Site fevicon icons -->
<link rel="shortcut icon" href="./techeffin/assets/img/<?php htmlout($companyProfile['favicon']); ?>" type="image/x-icon">
<link rel="icon" href="./techeffin/assets/img/<?php htmlout($companyProfile['favicon']); ?>" sizes="32x32" />
<link rel="icon" href="./techeffin/assets/img/<?php htmlout($companyProfile['favicon']); ?>" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="./techeffin/assets/img/<?php htmlout($companyProfile['favicon']); ?>" />
<meta name="msapplication-TileImage" content="./techeffin/assets/img/<?php htmlout($companyProfile['favicon']); ?>" />
<!-- SEO work Here  -->
<meta name="description" content="<?php htmlout($companySeo['description']); ?>" />
<meta name="keywords" content="<?php htmlout($companySeo['keyword']); ?>" />
<meta name="language" content="en-US">
<meta name="copyright" content="Tax-Worth" />
<meta name="author" content="Tax-Worth" />
<meta name="reply-to" content="<?php htmlout($companyprofile['email']); ?>" />
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php htmlout($companyProfile['url']); ?>" />
<meta name="google-site-verification" content="<?php htmlout($companySeo['google_site']); ?>" />
<meta name="revisit-after" content="1 days">
<!-- Facebook open graph tags -->
<meta property="og:locale" content="en_US" />
<meta property="og:url" content="<?php htmlout($companyProfile['url']); ?>" />
<meta property="og:type" content="Website" />
<meta property="og:title" content="<?php htmlout($companySeo['title']); ?>" />
<meta property="og:description" content="<?php htmlout($companySeo['description']); ?>" />
<meta property="og:image" content="./image/banner2.jpg" /> <!-- here we use Our post image-->
<!-- Facebook open graph tags end -->
<!-- Twitter tags start -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@truckmart" /> <!-- here we use our twitter user name-->
<meta name="twitter:title" content="<?php htmlout($companySeo['title']); ?>" />
<meta name="twitter:description" content="<?php htmlout($companySeo['description']); ?>" />
<meta name="twitter:image" content="./image/banner2.jpg" /> <!-- here we use Our post image-->
<!-- Twitter tags end -->
<!-- SEO work End Here  -->
<!-- //////// -->
<!-- google google_analytics -->
<?php
echo $companySeo['google_analytics'];
?>

<!-- Google search index schema -->

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Truckmart",
        "url": "<?php htmlout($companyProfile['url']); ?>",
        "logo": "../techeffin/assets/img/<?php htmlout($companyProfile['profile']); ?>",
        "alternateName": "Truckmart",
        "description": "We offer various services for the people who wish to transport there goods. We have the right combination of facilities and services to ensure the cutomer stay is stress free. Be a fast mover With Truck Mart .",
        "address": {
            "@type": "PostalAddress",
            "postalCode": "600052",
            "streetAddress": "1B, Rmb Aishwarya Apartments, madavaram Red Hills Road Vadaperumbakkam",
            "addressCountry": "India",
            "addressRegion": "Chennai",
            "addressLocality": "Tamil Nadu"
        },
        "image": "../techeffin/assets/img/<?php htmlout($companyProfile['profile']); ?>",
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+91 <?php htmlout($companyProfile['contact']); ?>",
            "contactType": "customer service",
            "email": "<?php htmlout($companyProfile['email']); ?>",
            "areaServed": [
                "IN",
                "IE"
            ],
            "availableLanguage": [
                "en",
                "hi"
            ]
        }]
    }
</script>

<!--font-awesome icons link-->
<link rel="stylesheet" href="css/font-awesome.min.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/slick.css" />
<link rel="stylesheet" href="css/venobox.css" />
<!--main style file-->
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/responsive.css" />
<link rel="stylesheet" href="./css/common.css">