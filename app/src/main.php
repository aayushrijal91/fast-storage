<header>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto">
                <div class="row justify-content-center justify-content-lg-end align-items-center">
                    <div class="col-12 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn border-white border rounded-0 text-white py-3 px-md-5">
                            <?= $phone_number ?>
                        </a>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="#form" class="btn border-white border rounded-0 text-white py-3 px-md-5">
                            enquire now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="banner">
    <div class="container">
        <h1 class="ls-3 fs-108 fw-700 lh-1">
            <span class="bg-quartinary">the quick</span>
            <div>&amp; secure solution...</div>
        </h1>
        <div class="ls-3 fw-700 fs-60 pt-4">for your storage needs in sydney<span class="text-quartinary">.</span></div>
    </div>
</section>

<div class="bg-secondary pt-2 pb-3"></div>

<section class="size">
    <div class="container">
        <div class="text-primary fs-63 fw-700 ls-3">find the <span class="bg-quartinary text-white">right size</span> for your storage solution<span class="text-quartinary">.</span></div>
        <div class="ls-3 pt-4 pb-9 text-grey fw-500">select the size below that currently matches your own property the best to find out which size is right for you.</div>


        <div class="row radio-toolbar g-3 gx-md-2 position-relative">
            <div class="bar"></div>
            <div class="col-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="119" id="boxSize_1" checked>
                <label class="form-check-label" for="boxSize_1">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for<br> <span class="fw-700">a few items</span></div>
                    </div>
                </label>
            </div>
            <div class="col-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="120" id="boxSize_2">
                <label class="form-check-label" for="boxSize_2">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">1<br> bedroom home</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="125" id="boxSize_3">
                <label class="form-check-label" for="boxSize_3">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">2<br> bedroom home</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="130" id="boxSize_4">
                <label class="form-check-label" for="boxSize_4">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">2-3<br> bedroom home</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="135" id="boxSize_5">
                <label class="form-check-label" for="boxSize_5">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">3-4<br> bedroom home</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
            <div class="col-4 col-lg">
                <input class="form-check-input form-control box-size" type="radio" name="boxSize" value="140" id="boxSize_6">
                <label class="form-check-label" for="boxSize_6">
                    <div>
                        <div class="vertical-line"></div>
                        <div class="pt-4 pb-2">suitable for <span class="fw-700">large<br> home or office</span></div>
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
                    </div>
                </label>
            </div>
        </div>

        <div class="text-center fs-25 ls-3 text-grey">
            you've chosen... <span class="text-primary fs-60 fw-700 ps-4">the mini box - <span id="box-price">119</span></span><span class="fw-500">/month</span>
        </div>

        <div class="text-center pt-6">
            <a href="#form" class="text-white btn btn-quartinary d-inline-flex rounded-0 fs-35 px-5">enquire now</a>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>