<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/stylles.css">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Positivus'; ?></title>
</head>
<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top-inner">
                    <div class="logo header__logo">
                        <a class="logo__link" href="index.php">
                            <img class="logo__image" src="images/logogo.svg" alt="logo">
                            <p class="logo__text">Positivus</p>
                        </a>
                    </div>
                    <nav class="header__navigation">
                        <ul class="header__navigation-list">
                            <li class="header__navigation-item"><a class="header__navigation-link" href="#">About us</a></li>
                            <li class="header__navigation-item"><a class="header__navigation-link" href="#">Service</a></li>
                            <li class="header__navigation-item"><a class="header__navigation-link" href="page2.php">Use Cases</a></li>
                            <li class="header__navigation-item"><a class="header__navigation-link" href="#">Pricing</a></li>
                            <li class="header__navigation-item"><a class="header__navigation-link" href="#">Blog</a></li>
                            <li class="header__navigation-item"><a class="header__navigation-link" href="#"><img class="header__navigation-image" src="images/button.svg" alt="button"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header__content">
            <div class="container">
                <div class="header__content-inner">
                    <div class="header__content-info">
                        <div class="header__content-text">
                            <h1 class="header__content-title">Navigating the digital landscape for success</h1>
                            <p class="header__content-subtitle">Our digital marketing agency helps businesses grow and succeed online through a range of services including SEO, PPC, social media marketing, and content creation.</p>
                            <a class="header__content-button" href="#">Book a consultation</a>
                        </div>
                    </div>
                    <img class="header__image" src="images/1 block.jpg" alt="main image">
                </div>
            </div>
        </div>
        <div class="pod-header">
            <div class="container_h">
                <div class="company">
                    <a class="logo__com_link" href="#">
                    <img class="logo__com_image" src="images/companylogo1.svg" alt="company1">
                    <img class="logo__com_image" src="images/companylogo2.svg" alt="company2">
                    <img class="logo__com_image" src="images/companylogo3.svg" alt="company3">
                    <img class="logo__com_image" src="images/companylogo4.svg" alt="company4">
                    <img class="logo__com_image" src="images/companylogo5.svg" alt="company5">
                    <img class="logo__com_image" src="images/companylogo6.svg" alt="company6">
                    </a>
                </div>
            </div>
        </div>
    </header>