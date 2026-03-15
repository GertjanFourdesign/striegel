<footer class="footer">
    <div class="footer__inner">
        <div class="container footer__top">
            <div class="part-12">
                @include('partials.main-menu', [
                    'class' => 'footer'
                ])
                <br><br>
                <p>
                    <a href="mailto:{{ nova_get_setting('email') }}">
                        {{ nova_get_setting('email') }}
                    </a>
                    <br>
                    <a href="tel:{{ nova_get_setting('phone') }}">
                        {{ nova_get_setting('phone') }}
                    </a>
                </p>
                <a href="{{ nova_get_setting('linkedin') }}" class="button">
                    Linkedin
                </a>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="part-12">
                    <p>&copy; <?php echo date('Y'); ?></p>
                    <div class="footer__nav">
                        <a href="{{ route('privacy')}}">Privacyverklaring</a>
                        <a href="{{ route('disclaimer')}}">Disclaimer</a>
                        <a href="{{ route('cookies')}}">Cookies</a>
                        {{-- <a href="https://cdn.cookiecode.nl/privacy/currentmotion.nl/{{app()->getLocale()}}/pdf" target="_blank">{{ __('menu.privacy') }}</a>
                        <a href="https://cdn.cookiecode.nl/cookie/currentmotion.nl/{{app()->getLocale()}}/pdf" target="_blank">{{ __('menu.cookies') }}</a> --}}
                        <a href="#" onclick="javascript: CookieCode.showSettings(); return false;">Cookie instellingen</a>
                        <p>Website door <a href="https://fourdesign.nl" target="_blank">Fourdesign</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
