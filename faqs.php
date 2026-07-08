    <?php
        $seo = [
            'title' => 'Divaine Tech FAQs | Frequently Asked Questions About IT Services',
            'description' => 'Find answers to frequently asked questions about Divaine Tech services, including web development, software solutions, digital transformation, and IT services.',
            'keywords' => 'Divaine Tech FAQs, IT services questions, web development FAQ, software development FAQ, technology solutions FAQ',
            'author' => 'Divaine Tech'
        ];
        include_once ('elements/header.php')
    ?> 

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3">FAQ's</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ's</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- FAQs Page Start --> 
        <div class="faq-section">
            <div class="container">

                <div class="row">

                    <div class="col-lg-10 offset-lg-1 col-md-12">

                        <div class="faq-accordion" id="accordion">

                            <?php

                                $faqFile = ('data/json/faqs.json');

                                $faqs = [];

                                if (file_exists($faqFile)) {
                                    $faqs = json_decode(file_get_contents($faqFile), true);
                                }

                            ?>

                            <?php foreach($faqs as $key => $faq): ?>

                                <div class="accordion-item wow fadeInUp" 
                                    data-wow-delay="<?= ($key + 1) * 0.25 ?>s">

                                    <h2 class="accordion-header" id="heading<?= $key ?>">

                                        <button 
                                            class="accordion-button <?= $key != 0 ? 'collapsed' : '' ?>"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?= $key ?>"
                                            aria-expanded="<?= $key == 0 ? 'true' : 'false' ?>"
                                            aria-controls="collapse<?= $key ?>">

                                            <?= $key + 1 ?>. <?= $faq['question'] ?>

                                        </button>

                                    </h2>


                                    <div id="collapse<?= $key ?>"
                                        class="accordion-collapse collapse <?= $key == 0 ? 'show' : '' ?>"
                                        aria-labelledby="heading<?= $key ?>"
                                        data-bs-parent="#accordion">


                                        <div class="accordion-body">

                                            <p>
                                                <?= $faq['answer'] ?>
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>


                        </div>

                    </div>

                </div>

            </div>
        </div> 
    <!-- FAQs Page Ends -->

    <?php
        include_once ('elements/footer.php')
    ?>