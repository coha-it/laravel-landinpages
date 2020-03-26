
{{-- Errors --}}
@if($errors->any())
    Errors!
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@else
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="color-black font-weight-light mb-2rem mb-xxs-3 text-center">
                    <strong>Vielen Dank</strong> für ihre Nachricht!
                </h1>
                <p>
                    Wir werden uns in Kürze bei Ihnen melden und Ihnen Ihre Zugangsdaten zusenden.
                    <i class="ti ti-thumb-up"></i>
                </p>
            </div>
        </div>
    </div>
@endif
