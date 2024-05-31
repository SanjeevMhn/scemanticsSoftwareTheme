<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scemantics Software</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="main-header">
        <div class="wrapper">
            <div class="brand-name">
                <a href="#" class="company-logo img-container">
                    <img src="./assets/images/companyLogo.png" alt="company-logo">
                </a>
                <span class="company-name">Semantics Software</span>
            </div>
            <div class="company-info">
                <div class="company-address info-item">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                    </div>
                    <div class="detail">
                        <span>Mid-Baneshwor</span>
                        <span>Kathmandu, Nepal</span>
                    </div>
                </div>
                <div class="company-schedule info-item">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                    </div>
                    <div class="detail">
                        <span>9am - 7pm</span>
                        <span>Mon - Fri</span>
                    </div>
                </div>
                <div class="company-contact info-item">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/></svg>
                    </div>
                    <div class="detail">
                        <span>info@schemantics.info</span>
                        <span>+977 4312211</span>
                    </div>
                </div>
                <form action="#" class="search-form">
                    <div class="form-group">
                        <input type="text" name="search-text" id="search-text" class="form-input" placeholder="Search...">
                        <span class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="wrapper">
            <div class="brand-name">
                <a href="#" class="company-logo img-container">
                    <img src="./assets/images/companyLogo.png" alt="company-logo">
                </a>
                <span class="company-name">Semantics Software</span>
            </div>
            <ul class="nav-list">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="" class="nav-link">Price</a></li>
                <li class="nav-item"><a href="" class="nav-link">News</a></li>
            </ul>
            <a href="#" class="direct-contact">
             Get in touch
            </a>
            <button class="resp-menu-btn btn" onclick="toggleOffscreenNav()">
                <span class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                </span>
            </button>
        </div>
    </nav>
    <nav class="offscreen-nav">
        <div class="wrapper">
            <div class="offscreen-nav-header">
                <button class="btn btn-close btn-secondary" onclick="toggleOffscreenNav()">
                    <span class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                        </svg>
                    </span>
                </button>
                <div class="brand-name">
                    <a href="#" class="company-logo img-container">
                        <img src="./assets/images/companyLogo.png" alt="company-logo">
                    </a>
                    <span class="company-name">Semantics Software</span>
                </div>
            </div>
            
            <form action="#" class="search-form">
                <div class="form-group">
                    <input type="text" name="search-text" id="search-text" class="form-input" placeholder="Search...">
                    <span class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    </span>
                </div>
            </form>
            <ul class="nav-list">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="" class="nav-link">Price</a></li>
                <li class="nav-item"><a href="" class="nav-link">News</a></li>
            </ul>
            <a href="#" class="direct-contact">
             Get in touch
            </a>
        </div>
    </nav>