<x-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAQ Section</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <style>
            .faq-title {
                font-size: 2.5rem;
                margin-bottom: 1.5rem;
            }

            .faq-title strong {
                font-weight: 700;
            }

            .faq-subtitle {
                font-weight: 300;
                display: inline;
            }

            .accordion-button:not(.collapsed) {
                background-color: #fff;
                box-shadow: none;
            }

            .accordion-button:focus {
                box-shadow: none;
                border-color: rgba(0,0,0,.125);
            }

            .accordion-item {
                border-radius: 0 !important;
                border-left: none;
                border-right: none;
            }

            .plus-icon, .minus-icon {
                width: 24px;
                height: 24px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: bold;
            }

            .plus-icon {
                background-color: #8bc34a;
            }

            .minus-icon {
                background-color: #f44336;
            }
        </style>
    </head>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12">
                    <p class="text-muted mb-4">FAQS</p>
                    <h1 class="faq-title"><strong>Frequently</strong> <span class="faq-subtitle">Ask Question</span></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="faqAccordion1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    When she reached the first hills?
                                    <span class="ms-auto minus-icon">-</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion1">
                                <div class="accordion-body">
                                    When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Italic Mountains, she had a last
                                    <span class="ms-auto plus-icon">+</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                <div class="accordion-body">
                                    Content for "Italic Mountains, she had a last" goes here.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bookmarksgrove, the headline?
                                    <span class="ms-auto plus-icon">+</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                <div class="accordion-body">
                                    Content for "Bookmarksgrove, the headline?" goes here.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="accordion" id="faqAccordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Alphabet Village and the subline of her own?
                                    <span class="ms-auto plus-icon">+</span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Content for "Alphabet Village and the subline of her own?" goes here.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Then she continued her way?
                                    <span class="ms-auto plus-icon">+</span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Content for "Then she continued her way?" goes here.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Skyline of her hometown Bookmarksgrove?
                                    <span class="ms-auto plus-icon">+</span>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Content for "Skyline of her hometown Bookmarksgrove?" goes here.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Custom JavaScript for toggling icons -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const accordionButtons = document.querySelectorAll('.accordion-button');

                accordionButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const icon = this.querySelector('.plus-icon, .minus-icon');

                        if (this.classList.contains('collapsed')) {
                            // Changing to minus
                            icon.className = 'ms-auto minus-icon';
                            icon.textContent = '-';
                        } else {
                            // Changing to plus
                            icon.className = 'ms-auto plus-icon';
                            icon.textContent = '+';
                        }
                    });
                });
            });
        </script>

</x-layout>
