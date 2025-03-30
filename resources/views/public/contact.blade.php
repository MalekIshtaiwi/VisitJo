<x-layout>
    <head>

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

            .card {
                border-radius: 0;
                border-left: none;
                border-right: none;
                margin-bottom: 0;
            }

            .card-header {
                background-color: #fff;
                border-bottom: 1px solid rgba(0,0,0,.125);
                padding: 0;
            }

            .btn-link {
                color: #000;
                text-decoration: none;
                width: 100%;
                text-align: left;
                padding: 0.75rem 1.25rem;
                position: relative;
                font-weight: 400;
            }

            .btn-link:hover, .btn-link:focus {
                text-decoration: none;
                color: #000;
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
                position: absolute;
                right: 1.25rem;
                top: 50%;
                transform: translateY(-50%);
            }

            .plus-icon {
                background-color: #8bc34a;
            }

            .minus-icon {
                background-color: #f44336;
            }
        </style>
    </head>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <p class="text-muted mb-4">FAQS</p>
                <h1 class="faq-title"><strong>Frequently</strong> <span class="faq-subtitle">Ask Question</span></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div id="accordion1">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    When she reached the first hills?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                            <div class="card-body">
                                When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Italic Mountains, she had a last

                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                            <div class="card-body">
                                Content for "Italic Mountains, she had a last" goes here.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bookmarksgrove, the headline?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                            <div class="card-body">
                                Content for "Bookmarksgrove, the headline?" goes here.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div id="accordion2">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Alphabet Village and the subline of her own?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                            <div class="card-body">
                                Content for "Alphabet Village and the subline of her own?" goes here.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Then she continued her way?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                            <div class="card-body">
                                Content for "Then she continued her way?" goes here.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Skyline of her hometown Bookmarksgrove?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                            <div class="card-body">
                                Content for "Skyline of her hometown Bookmarksgrove?" goes here.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap 4 JS -->


    <!-- Custom JavaScript for toggling icons -->
    <script>
        $(document).ready(function(){
            $('.btn-link').click(function(){
                var isCollapsed = $(this).hasClass('collapsed');

                if(isCollapsed) {
                    $(this).find('.plus-icon')
                        .removeClass('plus-icon')
                        .addClass('minus-icon')
                        .text('-');
                } else {
                    $(this).find('.minus-icon')
                        .removeClass('minus-icon')
                        .addClass('plus-icon')
                        .text('+');
                }
            });
        });
    </script>

</x-layout>
