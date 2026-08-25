<button id="scroll-to-top" type="button" aria-label="Scroll to top"
    class="fixed bottom-6 right-6 z-50
           flex h-12 w-12 items-center justify-center
           rounded-full
           bg-blue-600 text-white
           shadow-lg
           opacity-0 invisible
           translate-y-4
           transition-all duration-300
           hover:bg-blue-700
           hover:-translate-y-1
           active:scale-95">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="h-5 w-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
    </svg>
</button>

@push('scripts')
    <script>
        $(document).ready(function() {

            const scrollButton = $('#scroll-to-top');

            // Show / hide button
            $(window).on('scroll', function() {

                if ($(this).scrollTop() > 400) {

                    scrollButton
                        .removeClass('opacity-0 invisible translate-y-4')
                        .addClass('opacity-100 visible translate-y-0');

                } else {

                    scrollButton
                        .removeClass('opacity-100 visible translate-y-0')
                        .addClass('opacity-0 invisible translate-y-4');

                }

            });

            scrollButton.on('click', function() {

                $('html, body').animate({
                    scrollTop: 0
                }, 700);

            });

        });
    </script>
@endpush
