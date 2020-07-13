@extends('layouts.app')

@section('title', 'Impressum | '.env('APP_NAME'))

@if(env('APP_UNDER_CONSTRUCTION'))
    @section('header', false)
    @section('footer', false)
@endif

@section('content')
    {{-- page-head start --}}
    <section id="up" class="page-head video-bg-box flex-min-height-box imprint">
        {{-- flex-min-height-inner start --}}
        <div class="flex-min-height-inner">
            {{-- container start --}}
            <div class="container top-bottom-padding-120">

                @if(env('APP_UNDER_CONSTRUCTION'))
                    <p>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-dark fade-page">Zurück</a>
                    </p>
                @endif

                <h2 class="overlay-loading2 tr-delay03 medium-title gold-color">Dreamteam Survey</h2>
                <h3 class="large-title-bold text-color-4">
                    <span class="overlay-loading2 overlay-light-bg-1">Impressum </span><br>
                </h3>
                <div class="text-color-4">
                    <h3>Angaben gemäß § 5 TMG:</h3>
                    <p>Corporate Happiness GmbH<br>Gewürzmühlstraße 17<br>D-80538 München</p> <h2>Vertreten durch:</h2> <p>Dr. Oliver Haas</p> <h2>Kontakt:</h2> <p>Telefon: <a href="tel:4989890673177">+49 – 89 890 67 31 77</a><br>E-Mail:&nbsp;<a href="mailto:info@corporate-happiness.de">info@corporate-happiness.de</a></p> <h2>Registereintrag:</h2> <p>Registergericht: Handelsregister B München<br>Registernummer: 185900<br>Umsatzsteuer-ID: DE 271 823 276</p> <h2>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</h2> <p>Dr. Oliver Haas</p> <h2>Quellenangaben für die verwendeten Bilder und Grafiken:</h2> <p>Bilder:<br>Unsplash-&nbsp;<a href="http://www.unsplash.com/" rel="nofollow noopener">www.unsplash.com</a><br>Fotolia –&nbsp;<a href="http://www.fotolia.com/" rel="nofollow noopener">www.fotolia.com</a></p> <p>Filme:<br>Kristian Gründling –&nbsp;<a href="http://www.gruenfilm.com/" rel="nofollow noopener">www.gruenfilm.com</a><br>Corporate Happiness GmbH</p> <p>Teamfotos:<br>Simone Kessler –&nbsp;<a href="http://www.simoarts.com/" rel="nofollow noopener">www.simoarts.com</a></p> <p>Quelle:&nbsp;<em>Erstellt mit dem&nbsp;<a title="Impressum-Generator" href="http://www.mth-partner.de/impressumgenerator/impressum-generator.php" rel="noopener noreferrer" target="_blank">Impressum-Generator</a>&nbsp;von&nbsp;</em><em><a href="http://www.mth-partner.de/leistungen-rechtsanwalt-koeln/arbeitsrecht/" rel="noopener noreferrer" target="_blank">Tieben &amp; Partner, Rechtsanwalt für Arbeitsrecht in Köln</a></em></p> <h2>Haftungsausschluss:</h2> <p>Haftung für Inhalte</p> <p>Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p> <p>Haftung für Links</p> <p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p> <p>Urheberrecht</p> <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
