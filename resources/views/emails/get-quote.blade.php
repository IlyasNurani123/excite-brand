<p>This is mail template</p>
@if ($quote['seo_service'] == 1)
    <p>Seo Services</p>
@endif
@if ($quote['google_ads_service'] == 1)
    <p>Google Add Service</p>
@endif

@if ($quote['web_design_service'] == 1)
    <p>Web Design Service</p>
@endif
<p>{{ $quote['price'] }}</p><br>
<p>{{ $quote['name'] }}</p><br>
<p>{{ $quote['email'] }}</p><br>
<p>{{ $quote['contact_no'] }}</p><br>
<p>{{ $quote['website_url'] }}</p><br>


<p>Thank you for contact us</p>


<p>this is test email just c</p>
