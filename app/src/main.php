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
                        <svg width="43" height="19" viewBox="0 0 43 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-7.51318e-07 1.81184L8.36937 9.5L-7.91982e-08 17.1882L1.97238 19L11.3279 10.4059C11.5894 10.1656 11.7364 9.83977 11.7364 9.5C11.7364 9.16023 11.5894 8.83437 11.3279 8.59408L1.97238 -8.62156e-08L-7.51318e-07 1.81184Z" fill="#58D1C3" />
                            <path d="M15.3437 1.81184L23.7131 9.5L15.3437 17.1882L17.3161 19L26.6717 10.4059C26.9332 10.1656 27.0801 9.83977 27.0801 9.5C27.0801 9.16023 26.9332 8.83437 26.6717 8.59408L17.3161 -8.62156e-08L15.3437 1.81184Z" fill="#58D1C3" />
                            <path d="M30.6875 1.81184L39.0569 9.5L30.6875 17.1882L32.6599 19L42.0154 10.4059C42.2769 10.1656 42.4239 9.83977 42.4239 9.5C42.4239 9.16023 42.2769 8.83437 42.0154 8.59408L32.6599 -8.62156e-08L30.6875 1.81184Z" fill="#58D1C3" />
                        </svg>
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

<section class="form-1" id="form-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="text-light ls-3 fw-700 fs-63 lh-1 pb-7">get started<br> & enquire today<span class="text-primary">.</span></div>
                <?= renderImg('cardboard-box.png', 'lib', 'w-100') ?>
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="./src/form" method="POST">
                    <div class="row align-items-center pb-5">
                        <div class="col-auto fw-600 fs-25 ls-3 lh-1">we'll get back to you asap</div>
                        <div class="col">
                            <div class="horizontal-line"></div>
                        </div>
                    </div>
                    <div class="row gy-5">
                        <div class="col-6">
                            <input type="text" class="form-control" name="name" placeholder="full name" required>
                        </div>
                        <div class="col-6">
                            <input type="tel" class="form-control" name="phone" placeholder="phone no." required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" name="email" placeholder="your email" required>
                        </div>
                        <div class="col-12">
                            <label for="storageSize" class="mb-2">select storage size</label>
                            <select name="storageSize" class="form-control form-select" id="storageSize">
                                <option selected disabled>select here</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="enquiry" class="mb-2">enquiry</label>
                            <textarea class="form-control" name="enquiry" id="enquiry" placeholder="write your response here..." rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 fw-500 lh-1">all information provided will be kept 100% private &amp; secure</div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary w-100 rounded-0 text-white fs-25">get quote now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="about-1">
    <div class="container">
        <div class="row gx-xl-10">
            <div class="col-xl-7">
                <div class="text-primary lh-1 fs-63 ls-3 fw-700 pb-2">
                    <span class="text-white bg-quartinary">professional</span>
                    <div>removalists &amp; storage team accessible 6 days a week in sydney.</div>
                </div>
                <div class="text-grey fs-17 lh-1_7 pt-4">
                    <p class="mb-4">at fast storage sydney, we believe that storage should be fast and stress-free. that's why we offer the quickest and most secure storage solution in the city. our mobile storage units provide a convenient and reliable way to store your belongings without having to worry about the hassle of moving them to a storage facility.</p>
                    <p class="mb-4">our friendly staff are available 6 days a week to assist you with accessing your storage unit. all you have to do is call us at least 24 hours in advance, and we'll make sure your unit is ready and waiting for you in the visitor's bay.</p>
                    <p>for added peace of mind, you can also add your own storage insurance to your unit quote with just a click. and with every unit, you receive a free padlock and key, so you can lock up your belongings yourself and keep the only key.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="row gx-xl-7">
                    <div class="col-6 position-relative"><?= renderImg('boxedtrolley.png', 'lib', 'boxedTrolley') ?></div>
                    <div class="col-5 content-box">
                        <div class="fs-63 lh-1 fw-700 ls-3">we come to you <br><span class="bg-quartinary">sydney wide</span> with storage units<span class="text-quartinary">.</span></div>
                        <div class="fs-17 lh-1_7 pt-5">
                            <p class="mb-4">No matter where you are in Sydney, we've got you covered. Our mobile storage units can be delivered anywhere in the city, with small trucks that can fit down narrow streets or larger trucks for bigger jobs. Whether you're in the Western Sydney, Eastern Suburbs, North Shore, or anywhere else in the greater Sydney Metropolitan area, we'll bring your storage solution right to your door.</p>
                            <p>At Fast Storage Sydney, we prioritize your speed and security. With our quick and secure storage units and expert customer service, we are your one-stop solution for all your storage needs in sydney. contact us today to get started!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-3">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="fs-63 lh-1 fw-700 ls-3 text-primary">we have a foundation of care, <span class="bg-quartinary text-white">responsibility,</span> reliability &amp; honesty<span class="text-quartinary">.</span></div>
                <div class="fs-17 text-grey py-6 lh-1_7">
                    <p class="pb-4">Downsizing can be a hassle, whether it's because you're moving to a smaller home or office, or because you're setting off on an adventure and need to streamline your belongings. The solution is clear - finding a secure and reliable self storage space to keep your items safe and secure for as long as you need. But the process can quickly become overwhelming with all the options available.</p>
                    <p class="pb-4">That's where Fast Storage Sydney comes in! We provide a hassle-free self storage solution, saving you the time and effort of having to transport your items to storage yourself. All you have to do is make one phone call or fill out our online form to schedule a convenient pickup time, and we'll take care of the rest.</p>
                    <p>Our professional team will arrive, load up your belongings, and securely transport them to our storage facility. You can relax knowing that your items are in good hands with Fast Storage Sydney. Say goodbye to the stress of downsizing and contact us today!</p>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <a href="#form" class="btn btn-quartinary text-white rounded-0 px-5">enquire now</a>
                    </div>
                    <div class="col-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-primary text-white rounded-0 px-5"><?= $phone_number ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">
        <div class="text-center text-white fs-63 fw-700 lh-1"><span class="bg-quartinary">why choose</span> fast storage?</div>
        <div class="fs-17 lh-1_7 fw-700 text-center py-6">choose fast storage for the ultimate one-stop storage solution that ensures the highest standard of care for your belongings in the sydney area.</div>
        <div class="row gx-xl-7">
            <div class="col-4">
                <div class="why-us-card">
                    <?= renderImg('whyus-1.png', 'lib') ?>
                    <div class="pt-5 content">
                        <div class="fs-35 fw-900 ls-3 lh-1">24/7 Security on all Storage Units</div>
                        <div class="py-3 lh-1_7 text-lowercase">Our StorageBox units offer a <strong>high-quality, responsible, and reliable end-to-end</strong> storage service that starts with our professional removalists who will load your belongings into your storage unit <strong>with your supervision.</strong></div>
                        <div><a href="#form" class="btn btn-quartinary text-white rounded-0 px-5 d-inline-flex">see prices</a></div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="why-us-card">
                    <?= renderImg('whyus-2.png', 'lib') ?>
                    <div class="pt-5 content">
                        <div class="fs-35 fw-900 ls-3 lh-1">2-in-1 removalist  & storage Team</div>
                        <div class="py-3 lh-1_7 text-lowercase">At fast Storage, we believe in providing a <strong>comprehensive storage solution</strong> that takes care of all your storage needs. Our mission is to be your <strong>one point of contact for everything</strong> related to storage.</div>
                        <div><a href="tel: <?= $phone_number ?>" class="btn btn-quartinary text-white rounded-0 px-5 d-inline-flex"><?= $phone_number ?></a></div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="why-us-card">
                    <?= renderImg('whyus-3.png', 'lib') ?>
                    <div class="pt-5 content">
                        <div class="fs-35 fw-900 ls-3 lh-1">Storage Insurance Available</div>
                        <div class="py-3 lh-1_7">We then transport and store your items at our secure, monitored storage facilities, and even offer the option to add storage insurance for peace of mind.</div>
                        <div><a href="#form" class="btn btn-quartinary text-white rounded-0 px-5 d-inline-flex">enquire now</a></div>
                    </div>
                </div>
            </div>
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
                    <div class="col-auto text-center">all Rights Reserved</div>
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