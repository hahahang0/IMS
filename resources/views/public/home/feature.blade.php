  <style>
      .features-grid {
          display: grid;
          grid-template-columns: 1fr;
          gap: 1.25rem;
      }

      .feature-card {
          position: relative;
          display: flex;
          min-height: 290px;
          flex-direction: column;
          overflow: hidden;
          border: 1px solid rgb(226 232 240);
          border-radius: 1.25rem;
          background: rgba(255, 255, 255, 0.9);
          padding: 1.75rem;
          box-shadow:
              0 1px 2px rgba(15, 23, 42, 0.03),
              0 8px 30px rgba(15, 23, 42, 0.04);
          transition:
              transform 300ms ease,
              border-color 300ms ease,
              box-shadow 300ms ease,
              background 300ms ease;
      }

      .feature-card::before {
          content: "";
          position: absolute;
          left: 0;
          top: 0;
          height: 3px;
          width: 0;
          background: linear-gradient(90deg, #2563eb, #6366f1);
          transition: width 300ms ease;
      }

      .feature-card:hover {
          transform: translateY(-6px);
          border-color: rgb(191 219 254);
          background: white;
          box-shadow:
              0 20px 45px rgba(15, 23, 42, 0.09),
              0 4px 12px rgba(37, 99, 235, 0.06);
      }

      .feature-card:hover::before {
          width: 100%;
      }

      /* .feature-icon {
          display: flex;
          height: 3rem;
          width: 3rem;
          flex-shrink: 0;
          align-items: center;
          justify-content: center;
          border-radius: 0.875rem;
          background: rgb(239 246 255);
          color: rgb(37 99 235);
          transition:
              background 300ms ease,
              color 300ms ease,
              transform 300ms ease;
      } */
      /* .feature-icon {
          display: flex;
          height: 4rem;
          width: 4rem;
          flex-shrink: 0;
          align-items: center;
          justify-content: center;
          border-radius: 1rem;
          background: rgb(239 246 255);
          color: rgb(37 99 235);
          transition:
              background 300ms ease,
              color 300ms ease,
              transform 300ms ease;
      }

      .feature-card:hover .feature-icon {
          background: rgb(37 99 235);
          color: white;
          transform: scale(1.05);
      } */
      .feature-icon {
          display: flex;
          height: 4.5rem;
          width: 4.5rem;
          flex-shrink: 0;
          align-items: centre;
          justify-content: start;
          border-radius: 1rem;
          /* background: rgb(239 246 255); */
          overflow: hidden;

          transition:
              background 300ms ease,
              transform 300ms ease;
      }

      /* THIS controls the actual Lottie animation size */
      .lottie-icon {
          display: block;
          width: 6rem;
          height: 6rem;
          flex-shrink: 0;
          transform: scale(1.15);
          transform-origin: center;
      }

      /* Don't turn the Lottie background blue */
      .feature-card:hover .feature-icon {
          /* background: rgb(219 234 254); */
          transform: scale(1.04);
      }

      .feature-title {
          margin-top: 1.5rem;
          font-size: 1.125rem;
          line-height: 1.5rem;
          font-weight: 700;
          letter-spacing: -0.01em;
          color: rgb(15 23 42);
      }

      .feature-description {
          margin-top: 0.625rem;
          font-size: 0.875rem;
          line-height: 1.5rem;
          color: rgb(100 116 139);
      }

      .feature-link {
          display: flex;
          align-items: center;
          gap: 0.375rem;
          margin-top: auto;
          padding-top: 1.5rem;
          font-size: 0.875rem;
          font-weight: 700;
          color: rgb(37 99 235);
      }

      .feature-card-primary {
          background:
              linear-gradient(145deg,
                  rgba(239, 246, 255, 0.95),
                  rgba(255, 255, 255, 0.95));
          border-color: rgb(191 219 254);
      }

      .feature-icon-primary {
          background: rgb(219 234 254);
      }

      @media (min-width: 768px) {
          .features-grid {
              grid-template-columns: repeat(2, minmax(0, 1fr));
          }
      }

      @media (min-width: 1200px) {
          .features-grid {
              grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .feature-card-primary {
              grid-column: 2;
          }
      }
  </style>


  <section id="features" class=" bg-background-muted px-6  sm:py-28 lg:px-8">

      {{-- <div class="mx-auto px-6 py-12 lg:px-8">
        <div class="absolute -left-32 top-20 h-72 w-72 rounded-full bg-blue-200/30 blur-3xl"></div>
        <div class="absolute -right-32 bottom-10 h-96 w-96 rounded-full bg-indigo-200/30 blur-3xl"></div>
    </div> --}}

      <div class="mx-auto max-w-7xl">


          <div class="mx-auto max-w-3xl text-center py-12">

              {{-- <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-white px-4 py-1.5 text-sm font-semibold text-blue-600 shadow-sm">
                <span class="h-2 w-2 rounded-full bg-blue-500"></span>
                Powerful Features
            </div> --}}

              <h2 class="text-6xl  font-extrabold text-[#232323]">
                  Everything you need to
                  <br>
                  <span class="text-blue-600">stay in control.</span>
              </h2>

              <p class="max-w-2xl mx-auto mt-6 text-lg md:text-xl leading-8 text-gray-600">
                  Powerful tools to help you track, manage, and optimize
                  your inventory — all from one simple platform.
              </p>

          </div>



          <div class="features-grid mx-auto mt-16 max-w-6xl">

              {{-- Feature 1 --}}
              <a href="#" class="feature-card group">
                  {{-- 
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                         class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 10h18M5 6h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Z"/>
                        <path stroke-linecap="round" d="M7 14h3"/>
                    </svg>
                </div> --}}
                  <div class="feature-icon">
                      <dotlottie-wc src="{{ asset('lottie/calculator.json') }}" autoplay loop class="lottie-icon">
                      </dotlottie-wc>
                  </div>
                  <h3 class="feature-title">
                      Landing Cost Calculator
                  </h3>

                  <p class="feature-description">
                      Calculate the true cost of your products, including
                      shipping, duties, taxes, and other expenses.
                  </p>

                  <div class="feature-link">
                      Explore feature
                      <svg viewBox="0 0 20 20" fill="currentColor"
                          class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                          <path fill-rule="evenodd"
                              d="M3 10a1 1 0 0 1 1-1h10.586l-3.293-3.293a1 1 0 1 1 1.414-1.414l5 5a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 0 1-1-1Z"
                              clip-rule="evenodd" />
                      </svg>
                  </div>

              </a>


              {{-- Feature 2 --}}
              <a href="#" class="feature-card group">

                  {{-- <div class="feature-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-6 w-6">
                          <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 16.5V19a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-2.5" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v12" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="m7 8 5-5 5 5" />
                      </svg>
                  </div> --}}
                   <div class="feature-icon">
                      <dotlottie-wc src="{{ asset('lottie/import.json') }}" autoplay loop class="lottie-icon">
                      </dotlottie-wc>
                  </div>

                  <h3 class="feature-title">
                      Scan & Import Documents
                  </h3>

                  <p class="feature-description">
                      Quickly scan and import invoices, receipts, and documents
                      to eliminate repetitive manual data entry.
                  </p>

                  <div class="feature-link">
                      Explore feature
                      <svg viewBox="0 0 20 20" fill="currentColor"
                          class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                          <path fill-rule="evenodd"
                              d="M3 10a1 1 0 0 1 1-1h10.586l-3.293-3.293a1 1 0 1 1 1.414-1.414l5 5a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 0 1-1-1Z"
                              clip-rule="evenodd" />
                      </svg>
                  </div>

              </a>


              {{-- Feature 3 --}}
              <a href="#" class="feature-card group">

                     <div class="feature-icon">
                      <dotlottie-wc src="{{ asset('lottie/stocks.json') }}" autoplay loop class="lottie-icon">
                      </dotlottie-wc>
                  </div>

                  <h3 class="feature-title">
                      Stock Decrease Tracking
                  </h3>

                  <p class="feature-description">
                      Keep track of every stock movement and understand exactly
                      where your inventory is going.
                  </p>

                  <div class="feature-link">
                      Explore feature
                      <svg viewBox="0 0 20 20" fill="currentColor"
                          class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                          <path fill-rule="evenodd"
                              d="M3 10a1 1 0 0 1 1-1h10.586l-3.293-3.293a1 1 0 1 1 1.414-1.414l5 5a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 0 1-1-1Z"
                              clip-rule="evenodd" />
                      </svg>
                  </div>

              </a>


              {{-- Feature 4 --}}
              <a href="#" class="feature-card group">

                  {{-- <div class="feature-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-6 w-6">
                          <circle cx="12" cy="12" r="8" />
                          <path stroke-linecap="round" d="M12 8v4l2.5 2" />
                      </svg>
                  </div> --}}

                     <div class="feature-icon">
                      <dotlottie-wc src="{{ asset('lottie/clock.json') }}" autoplay loop class="lottie-icon">
                      </dotlottie-wc>
                  </div>

                  <h3 class="feature-title">
                      Serial No. & Expiry Tracking
                  </h3>

                  <p class="feature-description">
                      Track serial numbers, expiry dates, batches, and real-time
                      stock levels with confidence.
                  </p>

                  <div class="feature-link">
                      Explore feature
                      <svg viewBox="0 0 20 20" fill="currentColor"
                          class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                          <path fill-rule="evenodd"
                              d="M3 10a1 1 0 0 1 1-1h10.586l-3.293-3.293a1 1 0 1 1 1.414-1.414l5 5a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 0 1-1-1Z"
                              clip-rule="evenodd" />
                      </svg>
                  </div>

              </a>


              {{-- Feature 5 --}}
              <a href="#" class="feature-card group">

                  {{-- <div class="feature-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-6 w-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h10l3 3-8 8-8-8 3-3Z" />
                          <circle cx="9" cy="9" r="1" />
                          <path stroke-linecap="round" d="M14 14h.01" />
                      </svg>
                  </div> --}}

                  
                     <div class="feature-icon">
                      <dotlottie-wc src="{{ asset('lottie/network.json') }}" autoplay loop class="lottie-icon">
                      </dotlottie-wc>
                  </div>

                  <h3 class="feature-title">
                      FIFO Costing System
                  </h3>

                  <p class="feature-description">
                      Accurately calculate inventory costs using a first-in,
                      first-out costing method.
                  </p>

                  <div class="feature-link">
                      Explore feature
                      <svg viewBox="0 0 20 20" fill="currentColor"
                          class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                          <path fill-rule="evenodd"
                              d="M3 10a1 1 0 0 1 1-1h10.586l-3.293-3.293a1 1 0 1 1 1.414-1.414l5 5a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 0 1-1-1Z"
                              clip-rule="evenodd" />
                      </svg>
                  </div>

              </a>


              {{-- Feature 6 --}}
              <a href="#" class="feature-card group">
{{-- 
                  <div class="feature-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                          class="h-6 w-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8-4 8 4-8 4-8-4Z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4 12 8 4 8-4" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4 17 8 4 8-4" />
                      </svg>
                  </div> --}}

                    <div class="feature-icon">
                      <dotlottie-wc src="{{ asset('lottie/packing.json') }}" autoplay loop class="lottie-icon">
                      </dotlottie-wc>
                  </div>

                  <h3 class="feature-title">
                      Smart Packeting
                  </h3>

                  <p class="feature-description">
                      Manage inventory across cartons, boxes, packages,
                      and individual pieces with ease.
                  </p>

                  <div class="feature-link">
                      Explore feature
                      <svg viewBox="0 0 20 20" fill="currentColor"
                          class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                          <path fill-rule="evenodd"
                              d="M3 10a1 1 0 0 1 1-1h10.586l-3.293-3.293a1 1 0 1 1 1.414-1.414l5 5a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 0 1-1-1Z"
                              clip-rule="evenodd" />
                      </svg>
                  </div>

              </a>


              {{-- Feature 7 / Integration --}}
              <a href="#" class="feature-card feature-card-primary group">

                  {{-- <div class="feature-icon feature-icon-primary">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                          class="h-6 w-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="m12 8 4 4-4 4" />
                          <circle cx="6" cy="12" r="2.5" />
                          <circle cx="18" cy="12" r="2.5" />
                      </svg>
                  </div> --}}
                  <div class="feature-icon">
                      <dotlottie-wc src="{{ asset('lottie/connecting.json') }}" autoplay loop class="lottie-icon">
                      </dotlottie-wc>
                  </div>
{{-- 
                  <div
                      class="mb-3 inline-flex w-fit rounded-full bg-blue-100 px-2.5 py-1 text-xs font-semibold text-blue-700">
                      Connect everything
                  </div> --}}

                  <h3 class="feature-title">
                      Powerful Integrations
                  </h3>

                  <p class="feature-description">
                      Connect StockCore with Xero, Cin7, and the tools your
                      business already uses.
                  </p>

                  <div class="feature-link">
                      Explore integrations
                      <svg viewBox="0 0 20 20" fill="currentColor"
                          class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                          <path fill-rule="evenodd"
                              d="M3 10a1 1 0 0 1 1-1h10.586l-3.293-3.293a1 1 0 1 1 1.414-1.414l5 5a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 0 1-1-1Z"
                              clip-rule="evenodd" />
                      </svg>
                  </div>

              </a>

          </div>

      </div>



  </section>

  <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
