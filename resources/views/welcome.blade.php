<x-guest-layout>
    <main>
        <section class="hero hero-v2">
            <div class="hero__background hero__background--grid">
                <img class="hero__grid-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-grid-bg.png"
                    alt="Background Grid Hero" />
            </div>
            <div class="hero__background hero__background--pattern">
                <img class="hero__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-pattern.png"
                    alt="Background Pattern Hero" />
            </div>
            <div class="hero__background--mobile hero__background--grid">
                <img class="hero__grid-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-hero-grid.png"
                    alt="Background Grid Hero" />
            </div>
            <div class="hero__background--mobile hero__background--pattern">
                <img class="hero__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-hero-pattern.png"
                    alt="Background Pattern Hero" />
            </div>
            <div class="container">
                <div class="hero__container">
                    <div class="hero__content">
                        <h1 class="hero__title">Reach Take </h1>
                        <p class="fb-lg hero__subtitle">
                            Automate your trading and investing. Your gateway to an open financial ecosystem. Begin with
                            the simplest, most secure platform
                            for buying, trading, and investing in digital assets.
                        </p>

                        <center>
                            <div class="d-block d-lg-none">
                                <img width="100%"
                                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-illustration.png"
                                    alt="Hero Illustration" />
                            </div>
                        </center>

                        <a href="{{ route('register') }}" class="btn btn-lg btn-pill" style="background: #605dff">Get
                            Started</a>
                    </div>
                    <div class="hero__illustration">
                        <img src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-illustration.png"
                            alt="Hero Illustration" />
                    </div>
                </div>

                <center>
                    <div class="p-5 row">
                        <div class="col-12 p-2">
                            <span class="me-2"><strong>Great</strong> </span><img width="170px"
                                src="/frontend/assets/stars-5.svg" alt="" />
                        </div>

                        <div class="col-12 p-1 mt-2 mt-lg-0">
                            <span><strong>4.7</strong> out of 5 based on
                                <strong>607 reviews</strong></span>
                            <img class="" width="100px" src="/frontend/assets/trustpilot-logo-white-icon.svg"
                                alt="" />
                        </div>
                    </div>
                </center>
            </div>

            <div class="container crypto-graph">
                <div class="crypto-graph-carousel">
                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript"
                                src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                {
                                    "symbol": "NASDAQ:META",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript"
                                src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                {
                                    "symbol": "NASDAQ:NVDA",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript"
                                src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                {
                                    "symbol": "NASDAQ:TSLA",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript"
                                src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                {
                                    "symbol": "COINBASE:ETHUSD",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript"
                                src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                {
                                    "symbol": "COINBASE:BTCUSD",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript"
                                src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                {
                                    "symbol": "COINBASE:DOGEUSD",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript"
                                src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                {
                                    "symbol": "COINBASE:XRPUSD",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
                <div class="slick__pagination">
                    <div class="crypto-graph-carousel__pagination slick__pagination--dots">
                        <div class="crypto-graph-carousel__slick-slider-dots slick-slider-dots"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature">
            <div class="feature__background feature__background--pattern">
                <img class="feature__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-feature-pattern.png"
                    alt="Background Pattern Feature" />
            </div>
            <div class="feature__background--mobile feature__background--pattern">
                <img class="feature__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-feature-pattern.png"
                    alt="Background Pattern Feature" />
            </div>
            <div class="container">
                <div class="feature__container">
                    <div class="feature__group">
                        <div class="feature__items feature__items--1">
                            <div class="feature-items__img">
                                <img src="/frontend/assets/media/images/icons/icon-portofolio-manager.svg"
                                    alt="Portfolio Manager" />
                            </div>
                            <h5 class="feature-items__title">Portfolio Manager</h5>
                            <p class="fb-regular feature-items__desc">
                                Buy, sell, and track popular digital currencies—all in one place.
                            </p>
                        </div>
                        <div class="feature__items feature__items--2">
                            <div class="feature-items__img">
                                <img src="/frontend/assets/media/images/icons/phone.svg" alt="Swift Execution" />
                            </div>
                            <h5 class="feature-items__title">Swift Execution</h5>
                            <p class="fb-regular feature-items__desc">
                                Experience the industry’s lowest latency and fastest trade execution. Built for speed.
                            </p>
                        </div>
                        <div class="feature__items feature__items--3">
                            <div class="feature-items__img">
                                <img src="/frontend/assets/media/images/icons/lock.svg" alt="Trusted and Secure" />
                            </div>
                            <h5 class="feature-items__title">Trusted and Secure</h5>
                            <p class="fb-regular feature-items__desc">
                                Store funds in a vault with time-delayed withdrawals for enhanced protection.
                            </p>
                        </div>
                    </div>
                    <div class="feature__content">
                        <h2 class="feature__title">
                            The most reliable cryptocurrency platform.
                        </h2>
                        <p class="fb-regular feature__subtitle">
                            Cryptolly offers a range of tools that make it the ideal starting point for trading.
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-pill feature__button"
                            style="background: #605dff">Let’s Trade Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="exchange">
            <div class="exchange__background exchange__background--pattern">
                <img class="exchange__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-exchange-pattern.png"
                    alt="Background Pattern Exchange" />
            </div>
            <div class="exchange__background--mobile exchange__background--pattern">
                <img class="exchange__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-exchange-pattern.png"
                    alt="Background Pattern Exchange" />
            </div>
            <div class="container">
                <div class="exchange__container">
                    <div class="exchange__content">
                        <h2 class="exchange__title">
                            Start trading and investing in just a few steps.
                        </h2>
                        <p class="fb-regular exchange__subtitle">
                            We’ve simplified the process. Follow these steps to set up your account and begin trading.
                        </p>
                        <div class="exchange__groups">
                            <div class="exchange__items exchange__items--1">
                                <div class="exchange-items__icons">
                                    <img src="/frontend/assets/media/images/icons/add-user.svg"
                                        alt="Create an account" />
                                </div>
                                <div class="exchange-items__detail">
                                    <h5>Create an account</h5>
                                </div>
                            </div>
                            <div class="exchange__items exchange__items--2">
                                <div class="exchange-items__icons">
                                    <img src="/frontend/assets/media/images/icons/bank.svg"
                                        alt="Connect your wallet" />
                                </div>
                                <div class="exchange-items__detail">
                                    <h5>Connect your wallet</h5>
                                </div>
                            </div>
                            <div class="exchange__items exchange__items--3">
                                <div class="exchange-items__icons">
                                    <img src="/frontend/assets/media/images/icons/wallet.svg"
                                        alt="Start trading & investing now" />
                                </div>
                                <div class="exchange-items__detail">
                                    <h5>Start trading & investing now</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buy-sell-cards buy-sell-cards--v2">
                        <div class="buy-sell-cards__container">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>

                                <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                                    {
                                        "symbol": "NASDAQ:TSLA",
                                        "height": 300,
                                        "width": "100%",
                                        "locale": "en",
                                        "colorTheme": "dark",
                                        "isTransparent": true
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->

                            <a href="{{ route('register') }}" class="mt-5 btn btn-pill feature__button"
                                style="background: #605dff">Trade Stocks</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="hero hero-v2">
            <div class="hero__background hero__background--grid">
                <img class="hero__grid-bg" src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-grid-bg.png"
                    alt="Background Grid Hero" />
            </div>
            <div class="hero__background hero__background--pattern">
                <img class="hero__pattern-bg" src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-pattern.png"
                    alt="Background Pattern Hero" />
            </div>
            <div class="hero__background--mobile hero__background--grid">
                <img class="hero__grid-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-hero-grid.png"
                    alt="Background Grid Hero" />
            </div>
            <div class="hero__background--mobile hero__background--pattern">
                <img class="hero__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-hero-pattern.png"
                    alt="Background Pattern Hero" />
            </div>
            <div class="container">
                <div class="hero__container">
                    <div class="hero__content">
                        <h1 class="hero__title">Automate your trades & investments.</h1>
                        <p class="fb-lg hero__subtitle">
                            Your guide to the world of an open financial system. Get started
                            with the easiest and most secure platform to buy, trade and
                            invest in digital assets.
                        </p>

                        <center>
                            <div class="d-block d-lg-none">
                                <img width="100%"
                                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-illustration.png"
                                    alt="Hero Illustration" />
                            </div>
                        </center>

                        <a href="{{ route ('register')}}" class="btn btn-lg btn-pill"
                            style="background: #605dff">Get Started</a>
                    </div>
                    <div class="hero__illustration">
                        <img src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-illustration.png"
                            alt="Hero Illustration" />
                    </div>
                </div>

                <center>
                    <div class="p-5 row">
                        <div class="col-12 p-2">
                            <span class="me-2"><strong>Great</strong> </span><img width="170px"
                                src="/frontend/assets/stars-5.svg" alt="" />
                        </div>

                        <div class="col-12 p-1 mt-2 mt-lg-0">
                            <span><strong>4.7</strong> out of 5 based on
                                <strong>607 reviews</strong></span>
                            <img class="" width="100px" src="/frontend/assets/trustpilot-logo-white-icon.svg"
                                alt="" />
                        </div>
                    </div>
                </center>
            </div>

            <div class="container crypto-graph">
                <div class="crypto-graph-carousel">
                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "NASDAQ:META",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "NASDAQ:NVDA",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "NASDAQ:TSLA",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "COINBASE:ETHUSD",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "COINBASE:BTCUSD",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "COINBASE:DOGEUSD",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>

                    <div class="crypto-graph-carousel__items">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                                {
                                    "symbol": "COINBASE:XRPUSD",
                                    "width": "100%",
                                    "height": "200",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "autosize": false,
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
                <div class="slick__pagination">
                    <div class="crypto-graph-carousel__pagination slick__pagination--dots">
                        <div class="crypto-graph-carousel__slick-slider-dots slick-slider-dots"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feature">
            <div class="feature__background feature__background--pattern">
                <img class="feature__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-feature-pattern.png"
                    alt="Background Pattern Feature" />
            </div>
            <div class="feature__background--mobile feature__background--pattern">
                <img class="feature__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-feature-pattern.png"
                    alt="Background Pattern Feature" />
            </div>
            <div class="container">
                <div class="feature__container">
                    <div class="feature__group">
                        <div class="feature__items feature__items--1">
                            <div class="feature-items__img">
                                <img src="/frontend/assets/media/images/icons/icon-portofolio-manager.svg"
                                    alt="Portofolio Manager" />
                            </div>
                            <h5 class="feature-items__title">Portfolio Manager</h5>
                            <p class="fb-regular feature-items__desc">
                                Trade & invest in popular digital currencies, keep track of
                                them in the one place.
                            </p>
                        </div>
                        <div class="feature__items feature__items--2">
                            <div class="feature-items__img">
                                <img src="/frontend/assets/media/images/icons/phone.svg" alt="Mobile Apps" />
                            </div>
                            <h5 class="feature-items__title">Swift Execution</h5>
                            <p class="fb-regular feature-items__desc">
                                Trade with the lowest latency and highest execution speed in
                                the industry. Our platform is built for speed.
                            </p>
                        </div>
                        <div class="feature__items feature__items--3">
                            <div class="feature-items__img">
                                <img src="/frontend/assets/media/images/icons/lock.svg" alt="Vault protection" />
                            </div>
                            <h5 class="feature-items__title">Trusted and Secure</h5>
                            <p class="fb-regular feature-items__desc">
                                For added security, store your funds in a vault with time
                                delayed withdrawals.
                            </p>
                        </div>
                    </div>
                    <div class="feature__content">
                        <h2 class="feature__title">
                            The most trusted cryptocurrency platform.
                        </h2>
                        <p class="fb-regular feature__subtitle">
                            Cryptolly has a variety of features that make it the best place
                            to start trading
                        </p>
                        <a href="{{ route ('register')}}" class="btn btn-pill feature__button"
                            style="background: #605dff">Let’s Trade Now</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="exchange">
            <div class="exchange__background exchange__background--pattern">
                <img class="exchange__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-exchange-pattern.png"
                    alt="Background Pattern Exchange" />
            </div>
            <div class="exchange__background--mobile exchange__background--pattern">
                <img class="exchange__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-exchange-pattern.png"
                    alt="Background Pattern Exchange" />
            </div>
            <div class="container">
                <div class="exchange__container">
                    <div class="exchange__content">
                        <h2 class="exchange__title">
                            Just a few steps to start trading & investing.
                        </h2>
                        <p class="fb-regular exchange__subtitle">
                            We've made it easy for you to get started with trading. Just
                            follow these steps to create your account and start trading.
                        </p>
                        <div class="exchange__groups">
                            <div class="exchange__items exchange__items--1">
                                <div class="exchange-items__icons">
                                    <img src="/frontend/assets/media/images/icons/add-user.svg" alt="Add User" />
                                </div>
                                <div class="exchange-items__detail">
                                    <h5>Create an account</h5>
                                </div>
                            </div>
                            <div class="exchange__items exchange__items--2">
                                <div class="exchange-items__icons">
                                    <img src="/frontend/assets/media/images/icons/bank.svg" alt="Bank" />
                                </div>
                                <div class="exchange-items__detail">
                                    <h5>Connect your wallet</h5>
                                </div>
                            </div>
                            <div class="exchange__items exchange__items--3">
                                <div class="exchange-items__icons">
                                    <img src="/frontend/assets/media/images/icons/wallet.svg" alt="Wallet" />
                                </div>
                                <div class="exchange-items__detail">
                                    <h5>Start trading & investing now</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buy-sell-cards buy-sell-cards--v2">
                        <div class="buy-sell-cards__container">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>

                                <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                                    {
                                        "symbol": "NASDAQ:TSLA",
                                        "height": 300,
                                        "width": "100%",
                                        "locale": "en",
                                        "colorTheme": "dark",
                                        "isTransparent": true
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->

                            <a href="{{ route ('register')}}" class="mt-5 btn btn-pill feature__button"
                                style="background: #605dff">Trade Stocks</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="why-choose-us why-choose-us--v2">
            <div class="why-choose-us__background why-choose-us__background--pattern">
                <img class="why-choose-us__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-why-choose-us-pattern.png"
                    alt="Background Pattern why-choose-us" />
            </div>
            <div class="why-choose-us__background--mobile why-choose-us__background--pattern">
                <img class="why-choose-us__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-why-choose-us-pattern.png"
                    alt="Background Pattern Why Choose Us" />
            </div>
            <div class="container">
                <div class="why-choose-us__container">
                    <img class="why-choose-us__illustration"
                        src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-why-choose-us-illustration.svg"
                        alt="" />
                    <div class="why-choose-us__content">
                        <h2 class="why-choose-us__title">Trusted by millions globally.</h2>
                        <p class="fb-regular why-choose-us__subtitle">
                            As a leading platform for trading and investing, we serve millions of users worldwide—and
                            our community continues to expand daily.
                        </p>
                        <div class="why-choose-us__groups">
                            <div class="why-choose-us__items">
                                <div class="why-choose-us-items__header">
                                    <img class="why-choose-us-items__icon"
                                        src="/frontend/assets/media/images/icons/eyes.svg" alt="Clarity" />
                                </div>
                                <div class="why-choose-us-items__content">
                                    <h5 class="why-choose-us-item__title">Transparency</h5>
                                    <p class="fb-regular why-choose-us-item__desc">
                                        We deliver straightforward, reliable information about our offerings, empowering
                                        you to make confident, informed choices.
                                    </p>
                                </div>
                            </div>
                            <div class="why-choose-us__items">
                                <div class="why-choose-us-items__header">
                                    <img class="why-choose-us-items__icon"
                                        src="/frontend/assets/media/images/icons/shield-done.svg" alt="Confidence" />
                                </div>
                                <div class="why-choose-us-items__content">
                                    <h5 class="why-choose-us-item__title">Reliability</h5>
                                    <p class="fb-regular why-choose-us-item__desc">
                                        Our markets are continuously updated, delivering real-time insights with
                                        practical, real-world impact.
                                    </p>
                                </div>
                            </div>
                            <div class="why-choose-us__items">
                                <div class="why-choose-us-items__header">
                                    <img class="why-choose-us-items__icon"
                                        src="/frontend/assets/media/images/icons/community.svg" alt="Community" />
                                </div>
                                <div class="why-choose-us-items__content">
                                    <h5 class="why-choose-us-item__title">Community</h5>
                                    <p class="fb-regular why-choose-us-item__desc">
                                        Connect with a vibrant network of passionate investors eager to learn, share,
                                        and grow together.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container" style="margin-bottom: 250px; margin-top: 50px">
            <center class="mb-5">
                <h2 class="exchange__title">Top Market Headlines</h2>

                <p class="fb-regular why-choose-us__subtitle mt-4">
                    The latest updates from the worlds of crypto, finance, and technology. Stay informed with breaking
                    news and expert analysis on cryptocurrency and blockchain.
                </p>
            </center>

            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>

                <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                    {
                        "feedMode": "all_symbols",
                        "isTransparent": true,
                        "displayMode": "regular",
                        "width": "100%",
                        "height": 550,
                        "colorTheme": "dark",
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>

        <section class="testimonial testimonial--v2">
            <div class="container">
                <div class="testimonial__container">
                    <h2 class="testimonial__title--mobile">
                        What the press is saying about us
                    </h2>
                    <div class="testimonial-carousel__container">
                        <h2 class="testimonial__title">What the press is saying about us</h2>
                        <div class="testimonial-carousel__box">
                            <div class="testimonial-carousel">
                                <div data-slick-title="Fores" data-slick-number="1"
                                    class="testimonial-carousel__items">
                                    <p class="fd-md testimonial-carousel__detail">
                                        “The platform’s transparency and robust security give us full confidence.
                                        Trading in a fair, protected environment brings true peace of mind.”
                                    </p>
                                    <p class="fb-lg fb-lg--bold testimonial-carousel__author">
                                        Fores Report, 2024
                                    </p>
                                </div>
                                <div data-slick-title="Neweeks" data-slick-number="1"
                                    class="testimonial-carousel__items">
                                    <p class="fd-md testimonial-carousel__detail">
                                        “The diversity of assets—from stocks to digital currencies—is outstanding.
                                        Real-time data keeps users sharp and well-informed.”
                                    </p>
                                    <p class="fb-lg fb-lg--bold testimonial-carousel__author">
                                        Neweeks Review, 2025
                                    </p>
                                </div>

                                <div data-slick-title="MetroNew" data-slick-number="1"
                                    class="testimonial-carousel__items">
                                    <p class="fd-md testimonial-carousel__detail">
                                        “Smooth navigation through charts and analytics makes it ideal for newcomers and
                                        veteran traders alike.”
                                    </p>
                                    <p class="fb-lg fb-lg--bold testimonial-carousel__author">
                                        MetroNew, 2025
                                    </p>
                                </div>
                                <div data-slick-title="EuroNew" data-slick-number="1"
                                    class="testimonial-carousel__items">
                                    <p class="fd-md testimonial-carousel__detail">
                                        “Social trading lets us mirror top performers effortlessly—a total game-changer
                                        for growth.”
                                    </p>
                                    <p class="fb-lg fb-lg--bold testimonial-carousel__author">
                                        EuroNew, 2025
                                    </p>
                                </div>
                            </div>
                            <div class="slick__pagination">
                                <div class="testimonial-carousel__arrows">
                                    <a href="#" class="testimonial-carousel__prev"><img
                                            src="/frontend/assets/media/images/icons/arrow-circle-left.svg"
                                            alt="Previous" />
                                    </a><a href="#" class="testimonial-carousel__next"><img
                                            src="/frontend/assets/media/images/icons/arrow-circle-right.svg"
                                            alt="Next" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-media">
                        <div class="testimonial-media__items active">
                            <p class="testimonial-media__items-title">Neweeks</p>
                        </div>
                        <div class="testimonial-media__items next">
                            <p class="testimonial-media__items-title">Fores</p>
                        </div>
                        <div class="testimonial-media__items next-2">
                            <p class="testimonial-media__items-title">MetroNew</p>
                        </div>
                        <div class="testimonial-media__items prev">
                            <p class="testimonial-media__items-title">EuroNew</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="why-choose-us why-choose-us--v2">
            <div class="why-choose-us__background why-choose-us__background--pattern">
                <img class="why-choose-us__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-why-choose-us-pattern.png"
                    alt="Background Pattern why-choose-us" />
            </div>
            <div class="why-choose-us__background--mobile why-choose-us__background--pattern">
                <img class="why-choose-us__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-why-choose-us-pattern.png"
                    alt="Background Pattern Why Choose Us" />
            </div>
            <div class="container">
                <div class="why-choose-us__container">
                    <img class="why-choose-us__illustration"
                        src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-why-choose-us-illustration.svg"
                        alt="" />
                    <div class="why-choose-us__content">
                        <h2 class="why-choose-us__title">Millions of Users Worldwide.</h2>
                        <p class="fb-regular why-choose-us__subtitle">
                            We are one of the most trusted trading & investment platform. We
                            have millions of users worldwide, and we are growing every day.
                        </p>
                        <div class="why-choose-us__groups">
                            <div class="why-choose-us__items">
                                <div class="why-choose-us-items__header">
                                    <img class="why-choose-us-items__icon"
                                        src="/frontend/assets/media/images/icons/eyes.svg" alt="Clarity" />
                                </div>
                                <div class="why-choose-us-items__content">
                                    <h5 class="why-choose-us-item__title">Clarity</h5>
                                    <p class="fb-regular why-choose-us-item__desc">
                                        We provide clear and concise information about our
                                        products and services, so you can make informed decisions.
                                    </p>
                                </div>
                            </div>
                            <div class="why-choose-us__items">
                                <div class="why-choose-us-items__header">
                                    <img class="why-choose-us-items__icon"
                                        src="/frontend/assets/media/images/icons/shield-done.svg" alt="Confidence" />
                                </div>
                                <div class="why-choose-us-items__content">
                                    <h5 class="why-choose-us-item__title">Confidence</h5>
                                    <p class="fb-regular why-choose-us-item__desc">
                                        Our markets are always up to date, sparking curiosity
                                        with<br />real-world relevance.
                                    </p>
                                </div>
                            </div>
                            <div class="why-choose-us__items">
                                <div class="why-choose-us-items__header">
                                    <img class="why-choose-us-items__icon"
                                        src="/frontend/assets/media/images/icons/community.svg" alt="Community" />
                                </div>
                                <div class="why-choose-us-items__content">
                                    <h5 class="why-choose-us-item__title">Community</h5>
                                    <p class="fb-regular why-choose-us-item__desc">
                                        A community of like-minded people who are passionate about
                                        investing and want to learn more about it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container" style="margin-bottom: 250px; margin-top: 50px">
            <center class="mb-5">
                <h2 class="exchange__title">Top Market Stories</h2>

                <p class="fb-regular why-choose-us__subtitle mt-4">
                    Top stories from around the world of crypto, finance and technology.
                    Stay up to date with the latest news and analysis from the world of
                    cryptocurrency and blockchain.
                </p>
            </center>

            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>

                <script type="text/javascript" src="/frontend/s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                    {
                        "feedMode": "all_symbols",
                        "isTransparent": true,
                        "displayMode": "regular",
                        "width": "100%",
                        "height": 550,
                        "colorTheme": "dark",
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>

        <section class="testimonial testimonial--v2">
            <div class="container">
                <div class="testimonial__container">
                    <h2 class="testimonial__title--mobile">
                        What the media says about us?
                    </h2>
                    <div class="testimonial-carousel__container">
                        <h2 class="testimonial__title">What the media says about us?</h2>
                        <div class="testimonial-carousel__box">
                            <div class="testimonial-carousel">
                                <div data-slick-title="Fores" data-slick-number="1"
                                    class="testimonial-carousel__items">
                                    <p class="fd-md testimonial-carousel__detail">
                                        “We appreciate the transparency and security measures in
                                        place on this platform. Knowing our investments are
                                        safeguarded while we trade in a fair environment that
                                        gives peace of mind.”
                                    </p>
                                    <p class="fb-lg fb-lg--bold testimonial-carousel__author">
                                        Data from Fores, 2024
                                    </p>
                                </div>
                                <div data-slick-title="Neweeks" data-slick-number="1"
                                    class="testimonial-carousel__items">
                                    <p class="fd-md testimonial-carousel__detail">
                                        “We love the variety of assets available on this platform.
                                        From stocks to cryptocurrencies, the range is impressive,
                                        and the real-time data feeds keep everyone informed.”
                                    </p>
                                    <p class="fb-lg fb-lg--bold testimonial-carousel__author">
                                        Data from Neweeks, 2025
                                    </p>
                                </div>

                                <div data-slick-title="MetroNew" data-slick-number="1"
                                    class="testimonial-carousel__items">
                                    <p class="fd-md testimonial-carousel__detail">
                                        “The intuitive interface allows for effortless navigation
                                        through charts and analytics, making it perfect for both
                                        beginners and seasoned traders.”
                                    </p>
                                    <p class="fb-lg fb-lg--bold testimonial-carousel__author">
                                        Data from MetroNew, 2025
                                    </p>
                                </div>
                                <div data-slick-title="EuroNew" data-slick-number="1"
                                    class="testimonial-carousel__items">
                                    <p class="fd-md testimonial-carousel__detail">
                                        “The integration of social trading features allows us to
                                        follow and copy successful traders, which has been a game
                                        changer. ”
                                    </p>
                                    <p class="fb-lg fb-lg--bold testimonial-carousel__author">
                                        Data from EuroNew, 2025
                                    </p>
                                </div>
                            </div>
                            <div class="slick__pagination">
                                <div class="testimonial-carousel__arrows">
                                    <a href="#" class="testimonial-carousel__prev"><img
                                            src="/frontend/assets/media/images/icons/arrow-circle-left.svg"
                                            alt="Previous" />
                                    </a><a href="#" class="testimonial-carousel__next"><img
                                            src="/frontend/assets/media/images/icons/arrow-circle-right.svg"
                                            alt="Next" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-media">
                        <div class="testimonial-media__items active">
                            <p class="testimonial-media__items-title">Neweeks</p>
                        </div>
                        <div class="testimonial-media__items next">
                            <p class="testimonial-media__items-title">Fores</p>
                        </div>
                        <div class="testimonial-media__items next-2">
                            <p class="testimonial-media__items-title">MetroNew</p>
                        </div>
                        <div class="testimonial-media__items prev">
                            <p class="testimonial-media__items-title">EuroNew</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="mobile-platform mobile-platform--v2">
            <div class="mobile-platform__background mobile-platform__background--grid">
                <img class="mobile-platform__grid-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-hero-grid-bg.png"
                    alt="Background Grid Mobile Platform" />
            </div>
            <div class="mobile-platform__background mobile-platform__background--pattern">
                <img class="mobile-platform__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-mobile-apps-pattern.png"
                    alt="Background Pattern Mobile Platform" />
            </div>
            <div class="mobile-platform__background--mobile mobile-platform__background--grid">
                <img class="mobile-platform__grid-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-hero-grid.png"
                    alt="Background Grid Mobile Platform" />
            </div>
            <div class="mobile-platform__background--mobile mobile-platform__background--pattern">
                <img class="mobile-platform__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-mobile-apps-pattern.png"
                    alt="Background Pattern Mobile Platform" />
            </div>
            <div class="container">
                <div class="mobile-platform__container">
                    <div class="mobile-platform__illustration">
                        <img src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-mobile-apps-illustration.svg"
                            alt="Illustration" />
                    </div>
                    <div class="mobile-platform__content">
                        <h2 class="mobile-platform__title">
                            Grow your crypto portfolio on the go.
                        </h2>
                        <p class="fb-regular mobile-platform__subtitle">
                            A full-featured crypto exchange right in your pocket. Buy, sell, and trade digital assets
                            anytime, anywhere.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="cta__background cta__background--pattern">
                <img class="cta__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/landing-page-v2-cta-pattern.png"
                    alt="Background Pattern CTA" />
            </div>
            <div class="cta__background--mobile cta__background--pattern">
                <img class="cta__pattern-bg"
                    src="/frontend/assets/media/images/landing-page-v2/mobile-landing-page-v2-cta-pattern.png"
                    alt="Background Pattern CTA" />
            </div>
            <div class="container mb-5">
                <div class="cta__container text-center">
                    <p class="fd-sm cta__subtitle">
                        Ready to begin trading and investing?
                    </p>
                    <h3 class="cta__title">Join Over 650,000 Satisfied Traders & Growing</h3>

                    <div class="mt-3">
                        <a href="{{ route('register') }}" class="btn btn-sm" style="background: #605dff">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
{{--  --}}
