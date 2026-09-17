{{-- ========================================================= --}}
{{-- CONTACT PAGE — HERO --}}
{{-- resources/views/public/contact/hero.blade.php --}}
{{-- ========================================================= --}}

<style>
    /* =========================================================
       CONTACT HERO — SCOPED STYLES
       These styles only affect #contact-hero
    ========================================================= */

    #contact-hero {
        position: relative;
        overflow: hidden;
        min-height: 620px;
        display: flex;
        align-items: center;
        background: #f8fbff;
        border-bottom: 1px solid #e2e8f0;
    }

    #contact-hero * {
        box-sizing: border-box;
    }


    /* =========================================================
       BACKGROUND SHAPES
    ========================================================= */

    #contact-hero .contact-shape {
        position: absolute;
        pointer-events: none;
        z-index: 0;
    }

    #contact-hero .shape-left {
        width: 580px;
        height: 580px;

        left: -250px;
        top: -50px;

        border-radius: 9999px;

        background: #eff6ff;
    }

    #contact-hero .shape-left-ring {
        width: 620px;
        height: 620px;

        left: -290px;
        top: -90px;

        border-radius: 9999px;

        border: 2px solid #bfdbfe;
    }

    #contact-hero .shape-right {
        width: 520px;
        height: 520px;

        right: -230px;
        top: -150px;

        border-radius: 9999px;

        border: 2px solid #bfdbfe;
    }

    #contact-hero .shape-right-soft {
        width: 400px;
        height: 400px;

        right: -150px;
        bottom: -180px;

        border-radius: 9999px;

        background: #eff6ff;
    }

    #contact-hero .shape-small-one {
        width: 44px;
        height: 44px;

        left: 6%;
        top: 14%;

        border-radius: 9999px;

        background: #dbeafe;
    }

    #contact-hero .shape-small-two {
        width: 72px;
        height: 72px;

        right: 15%;
        bottom: 10%;

        border-radius: 9999px;

        background: #eff6ff;
    }


    /* =========================================================
       DOT PATTERN
    ========================================================= */

    #contact-hero .dot-pattern {
        position: absolute;

        display: grid;
        grid-template-columns: repeat(5, 5px);
        gap: 10px;

        pointer-events: none;
        z-index: 0;
    }

    #contact-hero .dot-pattern span {
        display: block;

        width: 5px;
        height: 5px;

        border-radius: 9999px;

        background: #bfdbfe;
    }

    #contact-hero .dots-top {
        top: 90px;
        right: 90px;
    }

    #contact-hero .dots-bottom {
        left: 80px;
        bottom: 70px;
    }


    /* =========================================================
       CONTENT
    ========================================================= */

    #contact-hero .contact-container {
        position: relative;
        z-index: 10;

        width: 100%;
        max-width: 1280px;

        margin: 0 auto;
        padding: 90px 32px;
    }

    #contact-hero .contact-content {
        width: 100%;
        max-width: 850px;

        margin: 0 auto;

        text-align: center;
    }


    /* =========================================================
       EYEBROW
    ========================================================= */

    #contact-hero .contact-eyebrow {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 18px;
    }

    #contact-hero .contact-eyebrow-line {
        display: block;

        width: 48px;
        height: 1px;

        background: #3b82f6;
    }

    #contact-hero .contact-eyebrow-text {
        margin: 0;

        font-size: 11px;
        line-height: 1;

        font-weight: 700;

        letter-spacing: 0.30em;
        text-transform: uppercase;

        color: #334155;
    }


    /* =========================================================
       HEADING
    ========================================================= */

    #contact-hero .contact-title {
        margin: 32px 0 0;

        font-size: clamp(52px, 6vw, 86px);
        line-height: 0.98;

        font-weight: 800;

        letter-spacing: -0.055em;

        color: #020617;
    }

    #contact-hero .contact-title-dot {
        color: #2563eb;
    }


    /* =========================================================
       DESCRIPTION
    ========================================================= */

    #contact-hero .contact-description {
        max-width: 780px;

        margin: 28px auto 0;

        font-size: 18px;
        line-height: 1.75;

        font-weight: 400;

        color: #475569;
    }


    /* =========================================================
       BUTTON AREA
    ========================================================= */

    #contact-hero .contact-actions {
        display: flex;
        align-items: center;
        justify-content: center;

        gap: 16px;

        margin-top: 38px;
    }


    /*
    |--------------------------------------------------------------------------
    | IMPORTANT
    |--------------------------------------------------------------------------
    |
    | Explicit width/height is intentional.
    | This prevents other button/link styles in the project
    | from collapsing these buttons.
    |
    */

    #contact-hero .contact-action {
        display: inline-flex !important;

        align-items: center !important;
        justify-content: center !important;

        gap: 14px;

        height: 58px !important;
        min-height: 58px !important;

        padding: 0 32px !important;

        border-radius: 9999px !important;

        font-size: 14px !important;
        line-height: 1 !important;

        font-weight: 600 !important;

        white-space: nowrap !important;

        text-decoration: none !important;

        transition:
            transform 200ms ease,
            background-color 200ms ease,
            border-color 200ms ease,
            color 200ms ease,
            box-shadow 200ms ease;
    }

    #contact-hero .contact-action-primary {
        min-width: 220px;

        border: 1px solid #2563eb !important;

        background: #2563eb !important;

        color: #ffffff !important;

        box-shadow: 0 10px 26px rgba(37, 99, 235, 0.18);
    }

    #contact-hero .contact-action-primary:hover {
        transform: translateY(-2px);

        background: #1d4ed8 !important;
        border-color: #1d4ed8 !important;

        box-shadow: 0 14px 30px rgba(37, 99, 235, 0.22);
    }

    #contact-hero .contact-action-secondary {
        min-width: 190px;

        border: 1px solid #cbd5e1 !important;

        background: #ffffff !important;

        color: #0f172a !important;
    }

    #contact-hero .contact-action-secondary:hover {
        transform: translateY(-2px);

        border-color: #60a5fa !important;

        color: #2563eb !important;

        box-shadow: 0 10px 24px rgba(15, 23, 42, 0.06);
    }


    /* =========================================================
       BUTTON ARROW
    ========================================================= */

    #contact-hero .contact-action svg {
        display: block;

        width: 17px !important;
        height: 17px !important;

        min-width: 17px;

        flex-shrink: 0;

        transition: transform 200ms ease;
    }

    #contact-hero .contact-action:hover svg {
        transform: translateX(4px);
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 768px) {

        #contact-hero {
            min-height: 560px;
        }

        #contact-hero .contact-container {
            padding: 80px 24px;
        }

        #contact-hero .contact-description {
            font-size: 16px;
            line-height: 1.7;
        }

        #contact-hero .contact-actions {
            flex-direction: column;

            width: 100%;

            gap: 12px;

            margin-top: 32px;
        }

        #contact-hero .contact-action {
            width: 100%;
            max-width: 300px;

            min-width: 0;
        }

        #contact-hero .dot-pattern {
            display: none;
        }

        #contact-hero .shape-left {
            width: 430px;
            height: 430px;

            left: -290px;
        }

        #contact-hero .shape-left-ring {
            display: none;
        }

        #contact-hero .shape-right {
            width: 380px;
            height: 380px;

            right: -270px;
        }

        #contact-hero .shape-right-soft {
            width: 300px;
            height: 300px;
        }

    }

</style>



<section id="contact-hero">


    {{-- ===================================================== --}}
    {{-- BACKGROUND DECORATION --}}
    {{-- ===================================================== --}}

    <div
        class="contact-shape shape-left"
        aria-hidden="true"
    ></div>


    <div
        class="contact-shape shape-left-ring"
        aria-hidden="true"
    ></div>


    <div
        class="contact-shape shape-right"
        aria-hidden="true"
    ></div>


    <div
        class="contact-shape shape-right-soft"
        aria-hidden="true"
    ></div>


    <div
        class="contact-shape shape-small-one"
        aria-hidden="true"
    ></div>


    <div
        class="contact-shape shape-small-two"
        aria-hidden="true"
    ></div>



    {{-- ===================================================== --}}
    {{-- TOP DOTS --}}
    {{-- ===================================================== --}}

    <div
        class="dot-pattern dots-top"
        aria-hidden="true"
    >
        @for ($i = 0; $i < 20; $i++)
            <span></span>
        @endfor
    </div>



    {{-- ===================================================== --}}
    {{-- BOTTOM DOTS --}}
    {{-- ===================================================== --}}

    <div
        class="dot-pattern dots-bottom"
        aria-hidden="true"
    >
        @for ($i = 0; $i < 20; $i++)
            <span></span>
        @endfor
    </div>



    {{-- ===================================================== --}}
    {{-- CONTENT --}}
    {{-- ===================================================== --}}

    <div class="contact-container">

        <div class="contact-content">


            {{-- ================================================= --}}
            {{-- EYEBROW --}}
            {{-- ================================================= --}}

            <div class="contact-eyebrow">

                <span
                    class="contact-eyebrow-line"
                    aria-hidden="true"
                ></span>


                <p class="contact-eyebrow-text">
                    Contact us
                </p>


                <span
                    class="contact-eyebrow-line"
                    aria-hidden="true"
                ></span>

            </div>



            {{-- ================================================= --}}
            {{-- TITLE --}}
            {{-- ================================================= --}}

            <h1 class="contact-title">

                Let’s talk<span class="contact-title-dot">.</span>

            </h1>



            {{-- ================================================= --}}
            {{-- DESCRIPTION --}}
            {{-- ================================================= --}}

            <p class="contact-description">

                Whether you’re exploring StockCore, need help with your
                account, or just have a question, we’ll point you in the
                right direction.

            </p>



            {{-- ================================================= --}}
            {{-- ACTIONS --}}
            {{-- ================================================= --}}

            <div class="contact-actions">


                {{-- ============================================= --}}
                {{-- SEND MESSAGE --}}
                {{-- ============================================= --}}

                <a
                    href="#contact-form"
                    class="contact-action contact-action-primary"
                >

                    <span>
                        Send us a message
                    </span>


                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-5-5 5 5-5 5"
                        />
                    </svg>

                </a>



                {{-- ============================================= --}}
                {{-- FAQ --}}
                {{-- ============================================= --}}

                <a
                    href="/faq"
                    class="contact-action contact-action-secondary"
                >

                    <span>
                        View our FAQ
                    </span>


                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-5-5 5 5-5 5"
                        />
                    </svg>

                </a>


            </div>

        </div>

    </div>

</section>